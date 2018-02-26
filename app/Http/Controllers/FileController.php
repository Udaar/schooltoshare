<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFileRequest;
use App\Http\Requests\UpdateFileRequest;
use App\Repositories\FileRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Input;
use App\Models\File;
use App\Models\Comment;

class FileController extends AppBaseController
{
    /** @var  FileRepository */
    private $fileRepository;

    public function __construct(FileRepository $fileRepo)
    {
        $this->fileRepository = $fileRepo;
    }

    /**
     * Display a listing of the File.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->fileRepository->pushCriteria(new RequestCriteria($request));
        $files = $this->fileRepository->all();

        return view('files.index')
            ->with('files', $files);
    }

    /**
     * Show the form for creating a new File.
     *
     * @return Response
     */
    public function create()
    {
        return view('files.create');
    }

    /**
     * Store a newly created File in storage.
     *
     * @param CreateFileRequest $request
     *
     * @return Response
     */
    public function store(CreateFileRequest $request)
    {
        $input = $request->all();

        $file = $this->fileRepository->create($input);

        Flash::success('File saved successfully.');

        return redirect(route('dashboard.files.index'));
    }

    /**
     * Display the specified File.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $file = $this->fileRepository->findWithoutFail($id);

        if (empty($file)) {
            Flash::error('File not found');

            return redirect(route('dashboard.files.index'));
        }

        return view('files.show')->with('file', $file);
    }

    /**
     * Show the form for editing the specified File.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $file = $this->fileRepository->findWithoutFail($id);

        if (empty($file)) {
            Flash::error('File not found');

            return redirect(route('dashboard.files.index'));
        }

        return view('files.edit')->with('file', $file);
    }

    /**
     * Update the specified File in storage.
     *
     * @param  int              $id
     * @param UpdateFileRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFileRequest $request)
    {
        $file = $this->fileRepository->findWithoutFail($id);

        if (empty($file)) {
            Flash::error('File not found');

            return redirect(route('dashboard.files.index'));
        }

        $file = $this->fileRepository->update($request->all(), $id);

        Flash::success('File updated successfully.');

        return redirect(route('dashboard.files.index'));
    }

    /**
     * Remove the specified File from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $file = $this->fileRepository->findWithoutFail($id);

        if (empty($file)) {
            Flash::error('File not found');

            return redirect(route('dashboard.files.index'));
        }

        $this->fileRepository->delete($id);

        Flash::success('File deleted successfully.');

        return redirect(route('dashboard.files.index'));
    }

    public function getFiles()
    {
        $query=Input::get('term');
        $files = File::where('path', 'like', '%'.$query.'%')->get();
        $files= $files->pluck('path');
        // $filesArr =[];
        // array_push($filesArr,$files);
        // return($filesArr);
        return $files;
    }
    public function getExtensions()
    {
        $files = File::all();
        $files= $files->pluck('extension')->unique();
        // $filesArr =[];
        // foreach ($files as $key => $file) {
        //     array_push($filesArr,$file->extension);
        // }
       
        // return array_unique($filesArr);
         return $files;
    }
    public function getComments($id)
    {
        $file = File::find($id);
        $comments = $file->comments;
        $comments->makeHidden(['user_id','commentable_id','commentable_type','comment','updated_at','user']);
        $comments = $comments-> sortByDesc('created_at')->values()->all();
       
        return $comments;
    }
    public function addComments(Request $request)
    {
        
        $comment = Comment::create(['user_id'=>\Auth::user()->id,'commentable_id'=>$request['file_id'],'comment'=>$request['content'],'commentable_type'=>File::class]);
        $comment->makeHidden(['user_id','commentable_id','commentable_type','comment','created_at','updated_at','user']);
        return $comment;
        
    }
}

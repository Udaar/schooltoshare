<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequestRequest;
use App\Http\Requests\UpdateRequestRequest;
use App\Repositories\RequestRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RequestController extends AppBaseController
{
    /** @var  RequestRepository */
    private $requestRepository;

    public function __construct(RequestRepository $requestRepo)
    {
        $this->requestRepository = $requestRepo;
    }

    /**
     * Display a listing of the Request.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->requestRepository->pushCriteria(new RequestCriteria($request));
        $requests = $this->requestRepository->all();
        if(\Auth::user()->type=="children")
            return redirect('home');
        elseif(\Auth::user()->type == 'school'){
            if(!\Auth::user()->school){
                return redirect('/buildings/create');
            }
            else{
                $requests=\Auth::user()->school->requests;
            return view('requests.index')
                ->with('requests', $requests);
                }
        }
        elseif(\Auth::user()->type=="government"){
            $requests=collect();
            $buildings =\Auth::user()->govschool;
            foreach($buildings as $building){
                
                if(count($building->requests))
                    $requests->push($building->requests);
            }
            return view('requests.index')
            ->with('requests', $requests);
        }
        elseif(\Auth::user()->type=="fundorg"){
            $requests=collect();
            $buildings =\Auth::user()->fundschools;
            foreach($buildings as $building){
                
                if(count($building->requests))
                    $requests->push($building->requests);
            }
            return view('requests.index')
            ->with('requests', $requests);
        }
        else{
            return redirect('/home');
        }
        
    }

    /**
     * Show the form for creating a new Request.
     *
     * @return Response
     */
    public function create()
    {
        $schools= \Bimmunity\Bimmodels\Models\Building::all();
        return view('requests.create',compact('schools'));
    }

    /**
     * Store a newly created Request in storage.
     *
     * @param CreateRequestRequest $request
     *
     * @return Response
     */
    public function store(CreateRequestRequest $request)
    {
        $input = $request->all();
        $format = config('ifm.settings.date-format-carbon');
        $input['user_id']=\Auth::user()->id;
        $input['date']=\Carbon\Carbon::createFromFormat($format, $input['date']);
        $request = $this->requestRepository->create($input);

        Flash::success('Request saved successfully.');
        if(\Auth::user()->type=="children")
            return redirect('home');
        return redirect(route('requests.index'));
    }

    /**
     * Display the specified Request.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $request = $this->requestRepository->findWithoutFail($id);

        if (empty($request)) {
            Flash::error('Request not found');

            return redirect(route('requests.index'));
        }
        if(\Auth::user()->type=="children")
            return redirect('home');
        return view('requests.show')->with('request', $request);
    }

    /**
     * Show the form for editing the specified Request.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $request = $this->requestRepository->findWithoutFail($id);

        if (empty($request)) {
            Flash::error('Request not found');

            return redirect(route('requests.index'));
        }
        if(\Auth::user()->type=="children")
            return redirect('home');
        return view('requests.edit')->with('request', $request);
    }

    /**
     * Update the specified Request in storage.
     *
     * @param  int              $id
     * @param UpdateRequestRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRequestRequest $request)
    {
        $request = $this->requestRepository->findWithoutFail($id);

        if (empty($request)) {
            Flash::error('Request not found');

            return redirect(route('requests.index'));
        }

        $request = $this->requestRepository->update($request->all(), $id);

        Flash::success('Request updated successfully.');

        return redirect(route('requests.index'));
    }

    /**
     * Remove the specified Request from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $request = $this->requestRepository->findWithoutFail($id);

        if (empty($request)) {
            Flash::error('Request not found');

            return redirect(route('requests.index'));
        }

        $this->requestRepository->delete($id);

        Flash::success('Request deleted successfully.');
        if(\Auth::user()->type=="children")
            return redirect('home');
        return redirect(route('requests.index'));
    }
}

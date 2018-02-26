<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactUSRequest;
use App\Http\Requests\UpdateContactUSRequest;
use App\Repositories\ContactUSRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Mail\ContactUsMail;
use Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use NoCaptcha;
class ContactUSController extends AppBaseController
{
    /** @var  ContactUSRepository */
    private $contactUSRepository;

    public function __construct(ContactUSRepository $contactUSRepo)
    {
        $this->contactUSRepository = $contactUSRepo;
    }

    /**
     * Display a listing of the ContactUS.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->contactUSRepository->pushCriteria(new RequestCriteria($request));
        $contactuses = $this->contactUSRepository->all();

        return view('Tenant.contactuses.index')
            ->with('contactuses', $contactuses);
    }

    /**
     * Show the form for creating a new ContactUS.
     *
     * @return Response
     */
    public function create()
    {
        return view('Tenant.contactuses.create');
    }

    /**
     * Store a newly created ContactUS in storage.
     *
     * @param CreateContactUSRequest $request
     *
     * @return Response
     */
    public function store(CreateContactUSRequest $request)
    {
        $validate = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|recaptcha'
        ]);
        // NoCaptcha::shouldReceive('g-recaptcha-response')
        //                         ->once()
        //                         ->andReturn(true);
       $input = $request->all();
        
            $input['phone']='';
            $contactUS = $this->contactUSRepository->create($input);
            Mail::to('abdelsadek.nady@gmail.com')->send(new ContactUsMail($input['name'],$input['Message'],$input['email']),function($m){
                            $m->from($input['email'], $input['name']);
            });
            Mail::to('ayman.assem@udaar.org')->send(new ContactUsMail($input['name'],$input['Message'],$input['email']),function($m){
                            $m->from($input['email'], $input['name']);
                            });
            Mail::to('mohamed.ezzeldin@udaar.org')->send(new ContactUsMail($input['name'],$input['Message'],$input['email']),function($m){
                            $m->from($input['email'], $input['name']);
                            });
            Mail::to('ahmed.ibrahim@udaar.org')->send(new ContactUsMail($input['name'],$input['Message'],$input['email']),function($m){
                            $m->from($input['email'], $input['name']);
                             });
            Mail::to('sherif.morad@udaar.org')->send(new ContactUsMail($input['name'],$input['Message'],$input['email']),function($m){
                            $m->from($input['email'], $input['name']);
                            });
            Mail::to('noha.elnasser@udaar.org')->send(new ContactUsMail($input['name'],$input['Message'],$input['email']),function($m){
                            $m->from($input['email'], $input['name']);
                            });
            Flash::success('Your message sent successfully.');
      
        
        
        return Redirect::to(URL::previous() . "#contact");
    }
    public function test(){
        return "Test";
    }

    /**
     * Display the specified ContactUS.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contactUS = $this->contactUSRepository->findWithoutFail($id);

        if (empty($contactUS)) {
            Flash::error('Contact U S not found');

            return redirect(route('contactuses.index'));
        }

        return view('Tenant.contactuses.show')->with('contactUS', $contactUS);
    }

    /**
     * Show the form for editing the specified ContactUS.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contactUS = $this->contactUSRepository->findWithoutFail($id);

        if (empty($contactUS)) {
            Flash::error('Contact U S not found');

            return redirect(route('contactuses.index'));
        }

        return view('Tenant.contactuses.edit')->with('contactUS', $contactUS);
    }

    /**
     * Update the specified ContactUS in storage.
     *
     * @param  int              $id
     * @param UpdateContactUSRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContactUSRequest $request)
    {
        $contactUS = $this->contactUSRepository->findWithoutFail($id);

        if (empty($contactUS)) {
            Flash::error('Contact U S not found');

            return redirect(route('contactuses.index'));
        }

        $contactUS = $this->contactUSRepository->update($request->all(), $id);

        Flash::success('Contact U S updated successfully.');

        return redirect(route('contactuses.index'));
    }

    /**
     * Remove the specified ContactUS from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contactUS = $this->contactUSRepository->findWithoutFail($id);

        if (empty($contactUS)) {
            Flash::error('Contact U S not found');

            return redirect(route('contactuses.index'));
        }

        $this->contactUSRepository->delete($id);

        Flash::success('Contact U S deleted successfully.');

        return redirect(route('contactuses.index'));
    }
}

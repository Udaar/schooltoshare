<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOptionRequest;
use App\Http\Requests\UpdateOptionRequest;
use App\Repositories\OptionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Carbon\Carbon;

class OptionController extends AppBaseController
{
    /** @var  OptionRepository */
    private $optionRepository;

    public function __construct(OptionRepository $optionRepo)
    {
        $this->optionRepository = $optionRepo;
    }

    /**
     * Display a listing of the Option.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->optionRepository->pushCriteria(new RequestCriteria($request));
        $options = $this->optionRepository->all();

        return view('options.index')
            ->with('options', $options);
    }

    /**
     * Show the form for creating a new Option.
     *
     * @return Response
     */
    public function create()
    {
        return view('options.create');
    }

    /**
     * Store a newly created Option in storage.
     *
     * @param CreateOptionRequest $request
     *
     * @return Response
     */
    public function store(CreateOptionRequest $request)
    {
        $input = $request->all();

        $option = $this->optionRepository->create($input);

        Flash::success('Option saved successfully.');

        return redirect(route('dashboard.options.index'));
    }

    /**
     * Display the specified Option.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $option = $this->optionRepository->findWithoutFail($id);

        if (empty($option)) {
            Flash::error('Option not found');

            return redirect(route('dashboard.options.index'));
        }

        return view('options.show')->with('option', $option);
    }

    /**
     * Show the form for editing the specified Option.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $option = $this->optionRepository->findWithoutFail($id);

        if (empty($option)) {
            Flash::error('Option not found');

            return redirect(route('dashboard.options.index'));
        }

        return view('options.edit')->with('option', $option);
    }

    /**
     * Update the specified Option in storage.
     *
     * @param  int              $id
     * @param UpdateOptionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOptionRequest $request)
    {
        $option = $this->optionRepository->findWithoutFail($id);

        if (empty($option)) {
            Flash::error('Option not found');

            return redirect(route('dashboard.options.index'));
        }

        $option = $this->optionRepository->update($request->all(), $id);

        Flash::success('Option updated successfully.');

        return redirect(route('dashboard.options.index'));
    }

    /**
     * Remove the specified Option from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $option = $this->optionRepository->findWithoutFail($id);

        if (empty($option)) {
            Flash::error('Option not found');

            return redirect(route('dashboard.options.index'));
        }

        $this->optionRepository->delete($id);

        Flash::success('Option deleted successfully.');

        return redirect(route('dashboard.options.index'));
    }

    /*===================================Custom Functions=============================*/

    public function updateDataReadToken($value='')
    {
         $option = $this->optionRepository->findWhere(['name'=>'forge_data_read_token'])->first();

        if (empty($option)) {
            Flash::error('Option not found');

            return redirect(route('dashboard.options.index'));
        }

       return $option = $this->optionRepository->update(['value'=>$value], $option->id);
    }

     public function generateToken($value='')
    {
         $option = $this->optionRepository->findWhere(['name'=>'forge_data_read_token'])->first();
         try {
              if(Carbon::now()>= $option->expired_at){
                $client = new \GuzzleHttp\Client();
               // $client->setDefaultOption('headers', array('Content-Type' => 'application/x-www-form-urlencoded'));
              $res= $client->post('https://developer.api.autodesk.com/authentication/v1/authenticate', [
                    'headers'         => ['Content-Type' => 'application/x-www-form-urlencoded'],
                    'form_params'            => array(
                                'client_id' => 'jolnXRZoGb12sxF4n8WyfNTuzAh278pe',
                                'client_secret' => 'ljuaRJXC5d1kuuo7',
                                'grant_type' => 'client_credentials',
                                'scope' => 'data:read data:write data:create bucket:create bucket:read'
                            ),
                    'timeout'         => 5
                ]);
               $res->getBody();
               $body= json_decode($res->getBody());
               $token= $body->access_token;
               return $option = $this->optionRepository->update(['value'=>$token,'expired_at'=>Carbon::now()->addSeconds($body->expires_in)], $option->id);
             }
            }
        catch (\Exception $e) {
             //dd($e->getMessage());
        }
         
           
    }
}

<?php

namespace Bimmunity\Bimmodels\Http\Controllers;

use Bimmunity\Bimmodels\Http\Requests\CreateBim_modelRequest;
use Bimmunity\Bimmodels\Http\Requests\UpdateBim_modelRequest;
use Bimmunity\Bimmodels\Repositories\Bim_modelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use DB;

class Bim_modelController extends AppBaseController
{
    /** @var  Bim_modelRepository */
    private $bimModelRepository;

    public function __construct(Bim_modelRepository $bimModelRepo)
    {
        $this->bimModelRepository = $bimModelRepo;
    }

    /**
     * Display a listing of the Bim_model.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->bimModelRepository->pushCriteria(new RequestCriteria($request));
        $bimModels = $this->bimModelRepository->all();

        return view('bimmodels::bim_models.index')
            ->with('bimModels', $bimModels);
    }

    /**
     * Show the form for creating a new Bim_model.
     *
     * @return Response
     */
    public function create()
    {
        $buildings = \Bimmunity\Bimmodels\Models\Building::all();
        return view('bimmodels::bim_models.create',compact('buildings'));
    }

    /**
     * Store a newly created Bim_model in storage.
     *
     * @param CreateBim_modelRequest $request
     *
     * @return Response
     */
    public function store(CreateBim_modelRequest $request)
    {
        $input = $request->all();

        $bimModel = $this->bimModelRepository->create($input);

        Flash::success('Bim Model saved successfully.');

        return redirect(route('bimModels.index'));
    }

    /**
     * Display the specified Bim_model.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bimModel = $this->bimModelRepository->findWithoutFail($id);

        if (empty($bimModel)) {
            Flash::error('Bim Model not found');

            return redirect(route('bimModels.index'));
        }

        return view('bimmodels::bim_models.show')->with('bimModel', $bimModel);
    }

    /**
     * Show the form for editing the specified Bim_model.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $buildings = \Bimmunity\Bimmodels\Models\Building::all();
        $bimModel = $this->bimModelRepository->findWithoutFail($id);

        if (empty($bimModel)) {
            Flash::error('Bim Model not found');

            return redirect(route('bimModels.index'));
        }

        return view('bimmodels::bim_models.edit',compact('buildings'))->with('bimModel', $bimModel);
    }

    /**
     * Update the specified Bim_model in storage.
     *
     * @param  int              $id
     * @param UpdateBim_modelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBim_modelRequest $request)
    {
        $bimModel = $this->bimModelRepository->findWithoutFail($id);

        if (empty($bimModel)) {
            Flash::error('Bim Model not found');

            return redirect(route('bimModels.index'));
        }

        $bimModel = $this->bimModelRepository->update($request->all(), $id);

        Flash::success('Bim Model updated successfully.');

        return redirect(route('bimModels.index'));
    }

    /**
     * Remove the specified Bim_model from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bimModel = $this->bimModelRepository->findWithoutFail($id);

        if (empty($bimModel)) {
            Flash::error('Bim Model not found');

            return redirect(route('bimModels.index'));
        }

        $this->bimModelRepository->delete($id);

        Flash::success('Bim Model deleted successfully.');

        return redirect(route('bimModels.index'));
    }
    public function viewershow($id){
        app('App\Http\Controllers\OptionController')->generateToken();
        $bimModel = $this->bimModelRepository->findWithoutFail($id);
        if($bimModel){
            $urn=$bimModel->urn;
        }
        $token=\App\Models\Option::where('name','forge_data_read_token')->first();
        if($token){
            $token=$token->value;
        }
        return view('bimmodels::viewershow',compact('urn','token'));
    }
    public function getviewertables($id){
        $bimModel = $this->bimModelRepository->findWithoutFail($id);
        $tables= DB::connection($bimModel->name)->select('SHOW TABLES');
        $tablesname=collect();
        $dbatrrname="Tables_in_"."bimmunity";
        foreach($tables as $table){
            $tablesname->push($table->$dbatrrname);
        }
        // return $tablesname;
        // return $tablesname;
        // $columns = Schema::getColumnListing("users");
        return view('bimmodels::selecttable',compact('tablesname'));
        return $tables;
    }
    public function gettableshow($id,$name){
        $bimModel = $this->bimModelRepository->findWithoutFail($id);
        $tables= DB::connection($bimModel->name)->select('SHOW TABLES');
        $tablesname=collect();
        $dbatrrname="Tables_in_".Config::get('database.connections.'.Config::get('database.default').'.database');
        foreach($tables as $table){
            $tablesname->push($table->$dbatrrname);
        }
         $tabledatas= DB::connection($bimModel->name)->table($tablesname[$name])->get();
         return view('bimmodels::datatableforviewer',compact('tabledatas'));
    }
    public function getbuildingviewer($id){
        $building= \Bimmunity\Bimmodels\Models\Building::find($id);
        $viewers = $building->bim_models;
        return view('bimmodels::selestviewer',compact('viewers'));
    }
    public function loadurn(){
        app('App\Http\Controllers\OptionController')->generateToken();
        $bimModel = $this->bimModelRepository->findWithoutFail(2);
        if($bimModel){
            $urn=$bimModel->urn;
        }
        $token=\App\Models\Option::where('name','forge_data_read_token')->first();
        if($token){
            $token=$token->value;
        }
        $data = array(
            'urn'=>$urn,
            'token'=>$token
        );
        return $data;
    }
}

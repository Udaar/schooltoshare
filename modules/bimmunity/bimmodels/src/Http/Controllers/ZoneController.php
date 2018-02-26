<?php

namespace Bimmunity\Bimmodels\Http\Controllers;

use Bimmunity\Bimmodels\Http\Requests\CreateZoneRequest;
use Bimmunity\Bimmodels\Http\Requests\UpdateZoneRequest;
use Bimmunity\Bimmodels\Repositories\ZoneRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Bimmunity\Bimmodels\Models\Zone;
use Bimmunity\Bimmodels\Models\Building;
use App\Models\Category;
use App\Models\Equipment;
use App\Models\File;

class ZoneController extends AppBaseController
{
    /** @var  ZoneRepository */
    private $zoneRepository;

    public function __construct(ZoneRepository $zoneRepo)
    {
        $this->zoneRepository = $zoneRepo;
    }

    /**
     * Display a listing of the Zone.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->zoneRepository->pushCriteria(new RequestCriteria($request));
        $zones = $this->zoneRepository->paginate(10);

        return view('bimmodels::zones.index')
            ->with('zones', $zones);
    }

    /**
     * Show the form for creating a new Zone.
     *
     * @return Response
     */
    public function create()
    {
        $zones = Zone::pluck('name', 'id');
        $zones = collect([0 => 'No Parent'] + $zones->all());

        $buildings = Building::pluck('name', 'id');
        $buildings = collect($buildings->all());

        return view('bimmodels::zones.create')
            ->with('zones', $zones)
            ->with('buildings', $buildings);
    }

    /**
     * Store a newly created Zone in storage.
     *
     * @param CreateZoneRequest $request
     *
     * @return Response
     */
    public function store(CreateZoneRequest $request)
    {
        $input = $request->all();

        // if no parent is selected.
        if ($input['parent_id'] == 0) {
            $input['parent_id'] = NULL;
        }
        // if no parent is selected.
        if ($input['building_id'] == 0) {
            $input['building_id'] = NULL;
        }

        $zone = $this->zoneRepository->create($input);

        Flash::success('Zone saved successfully.');

        return redirect(route('zones.index'));
    }

    /**
     * Display the specified Zone.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $zone = Zone::where('id', $id)->with('equipments')->first();
        $equipments = Equipment::pluck('name', 'id');
        if (empty($zone)) {
            Flash::error('Zone not found');

            return redirect(route('zones.index'));
        }

        return view('bimmodels::zones.show')
            ->with('zone', $zone)
            ->with('equipments', $equipments);
    }

    /**
     * Show the form for editing the specified Zone.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
       $zones = Zone::where('id', '!=', $id)->pluck('name', 'id');
        $zones = collect([0 => 'No Parent'] + $zones->all());

        $buildings = Building::pluck('name', 'id');
        $buildings = collect([0 => 'No Parent'] + $buildings->all());
        

        $zone = $this->zoneRepository->findWithoutFail($id);

        if (empty($zone)) {
            Flash::error('Zone not found');

            return redirect(route('zones.index'));
        }

        return view('bimmodels::zones.edit')
            ->with('zone', $zone)
            ->with('zones', $zones)
            ->with('buildings', $buildings);
    }

    /**
     * Update the specified Zone in storage.
     *
     * @param  int              $id
     * @param UpdateZoneRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateZoneRequest $request)
    {
        $zone = $this->zoneRepository->findWithoutFail($id);

        if (empty($zone)) {
            Flash::error('Zone not found');

            return redirect(route('zones.index'));
        }

        $input = $request->all();


        // if no parent is selected.
        if ($input['parent_id'] == 0) {
            $input['parent_id'] = NULL;
        }


        // if no parent is selected.
        if ($input['building_id'] == 0) {
            $input['building_id'] = NULL;
        }

        $zone = $this->zoneRepository->update($input, $id);

        Flash::success('Zone updated successfully.');

        return redirect(route('zones.index'));
    }

    /**
     * Remove the specified Zone from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $zone = $this->zoneRepository->findWithoutFail($id);

        if (empty($zone)) {
            Flash::error('Zone not found');

            return redirect(route('zones.index'));
        }

        $this->zoneRepository->delete($id);

        Flash::success('Zone deleted successfully.');

        return redirect(route('zones.index'));
    }

    public function changeZoneImage($zone_id='',Request $request)
    {
        $input=$request->all();
        $path=$input['path'];
        $zone=$this->zoneRepository->find($zone_id);
        if(isset($zone->images()->first()->path)){
            $zone->images()->detach($zone->images()->first());
        }
        return $zone->images()->attach(File::getFileByPath($path));
        
    }
    public function buildingzone($id){
          
          $buildingzones= \Bimmunity\Bimmodels\Models\Building::where('id',$id)->get()->pluck('zones');
         $zones =collect();
         foreach($buildingzones as $buildingzone){
             $zones=$zones->merge($buildingzone);
         }
          return view('bimmodels::zones.index')
            ->with('zones', $zones);
        
    }
}

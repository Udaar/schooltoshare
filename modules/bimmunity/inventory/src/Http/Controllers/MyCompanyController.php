<?php

namespace Bimmunity\Inventory\Http\Controllers;

use Bimmunity\Inventory\Http\Requests\CreateMyCompanyRequest;
use Bimmunity\Inventory\Http\Requests\UpdateMyCompanyRequest;
use Bimmunity\Inventory\Repositories\MyCompanyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MyCompanyController extends AppBaseController
{
    /** @var  MyCompanyRepository */
    private $myCompanyRepository;

    public function __construct(MyCompanyRepository $myCompanyRepo)
    {
        
        $this->myCompanyRepository = $myCompanyRepo;
    }

    /**
     * Display a listing of the MyCompany.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->myCompanyRepository->pushCriteria(new RequestCriteria($request));
        $myCompanies = $this->myCompanyRepository->all();

        return view('inventory::my_companies.index')
            ->with('myCompanies', $myCompanies);
    }

    /**
     * Show the form for creating a new MyCompany.
     *
     * @return Response
     */
    public function create()
    {
        return view('inventory::my_companies.create');
    }

    /**
     * Store a newly created MyCompany in storage.
     *
     * @param CreateMyCompanyRequest $request
     *
     * @return Response
     */
    public function store(CreateMyCompanyRequest $request)
    {
        $input = $request->all();
        $input['created_by'] = auth()->id();

        $myCompany = $this->myCompanyRepository->create($input);

        Flash::success('My Company saved successfully.');

        return redirect(route('myCompanies.index'));
    }

    /**
     * Display the specified MyCompany.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $myCompany = $this->myCompanyRepository->findWithoutFail($id);

        if (empty($myCompany)) {
            Flash::error('My Company not found');

            return redirect(route('myCompanies.index'));
        }

        return view('inventory::my_companies.show')->with('myCompany', $myCompany);
    }

    /**
     * Show the form for editing the specified MyCompany.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $myCompany = $this->myCompanyRepository->findWithoutFail($id);

        if (empty($myCompany)) {
            Flash::error('My Company not found');

            return redirect(route('myCompanies.index'));
        }

        return view('inventory::my_companies.edit')->with('myCompany', $myCompany);
    }

    /**
     * Update the specified MyCompany in storage.
     *
     * @param  int              $id
     * @param UpdateMyCompanyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMyCompanyRequest $request)
    {
        $myCompany = $this->myCompanyRepository->findWithoutFail($id);

        if (empty($myCompany)) {
            Flash::error('My Company not found');

            return redirect(route('myCompanies.index'));
        }
        $request['created_by'] = auth()->id();

        $myCompany = $this->myCompanyRepository->update($request->all(), $id);

        Flash::success('My Company updated successfully.');

        return redirect(route('myCompanies.index'));
    }

    /**
     * Remove the specified MyCompany from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $myCompany = $this->myCompanyRepository->findWithoutFail($id);

        if (empty($myCompany)) {
            Flash::error('My Company not found');

            return redirect(route('myCompanies.index'));
        }

        $this->myCompanyRepository->delete($id);

        Flash::success('My Company deleted successfully.');

        return redirect(route('myCompanies.index'));
    }
}

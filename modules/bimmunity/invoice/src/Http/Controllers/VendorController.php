<?php

namespace Bimmunity\Invoice\Http\Controllers;

use Bimmunity\Invoice\Http\Requests\CreateVendorRequest;
use Bimmunity\Invoice\Http\Requests\UpdateVendorRequest;
use App\User;
use Bimmunity\Invoice\Repositories\UserRepository;
use Bimmunity\Invoice\Repositories\VendorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class VendorController extends AppBaseController
{
    /** @var  VendorRepository */
    private $vendorRepository;

    /** @var  UserRepository */
    private $userRepository;

    /** @var  User */
    private $user;

    public function __construct(VendorRepository $vendorRepo, UserRepository $userRepo)
    {
        $this->vendorRepository = $vendorRepo;
        $this->userRepository = $userRepo;
        $this->middleware(function ($request, $next) {
             $this->user = Auth::user();
            return $next($request);
        });
    }

    /**
     * Display a listing of the Vendor.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vendorRepository->pushCriteria(new RequestCriteria($request));
        $vendors = $this->user->vendors;

        return view('bimmunity/invoice::vendors.index')
            ->with('vendors', $vendors);
    }

    /**
     * Show the form for creating a new Vendor.
     *
     * @return Response
     */
    public function create()
    {
        $users = $this->userRepository->all()->pluck('name', 'id');

        return view('bimmunity/invoice::vendors.create', compact('users'));
    }

    /**
     * Store a newly created Vendor in storage.
     *
     * @param CreateVendorRequest $request
     *
     * @return Response
     */
    public function store(CreateVendorRequest $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'work_phone'=>'required',
            'work_email'=>'required|email'
        ]);
        $input = $request->all();

        $vendor = $this->vendorRepository->create($input);

        Flash::success('Vendor saved successfully.');

        return redirect(route('vendors.index'));
    }

    /**
     * Display the specified Vendor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vendor = $this->vendorRepository->findWithoutFail($id);

        if (empty($vendor)) {
            Flash::error('Vendor not found');

            return redirect(route('vendors.index'));
        }

        return view('bimmunity/invoice::vendors.show')->with('vendor', $vendor);
    }

    /**
     * Show the form for editing the specified Vendor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vendor = $this->vendorRepository->findWithoutFail($id);

        $users = $this->userRepository->all()->pluck('name', 'id');

        if (empty($vendor)) {
            Flash::error('Vendor not found');

            return redirect(route('vendors.index'));
        }

        return view('bimmunity/invoice::vendors.edit', compact('users'))->with('vendor', $vendor);
    }

    /**
     * Update the specified Vendor in storage.
     *
     * @param  int              $id
     * @param UpdateVendorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVendorRequest $request)
    {
        $vendor = $this->vendorRepository->findWithoutFail($id);

        if (empty($vendor)) {
            Flash::error('Vendor not found');

            return redirect(route('vendors.index'));
        }

        $vendor = $this->vendorRepository->update($request->all(), $id);

        Flash::success('Vendor updated successfully.');

        return redirect(route('vendors.index'));
    }

    /**
     * Remove the specified Vendor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vendor = $this->vendorRepository->findWithoutFail($id);

        if (empty($vendor)) {
            Flash::error('Vendor not found');

            return redirect(route('vendors.index'));
        }

        $this->vendorRepository->delete($id);

        Flash::success('Vendor deleted successfully.');

        return redirect(route('vendors.index'));
    }
}

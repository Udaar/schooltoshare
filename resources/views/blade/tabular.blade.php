@extends('layouts.app')

@push('head')
    <link rel="stylesheet" type="text/css" href="/metronic/reset/tabular.css">
@endpush

@section('content')

<section class="site-zones">
    <!-- Site Title Bar -->
    <div class="ifm-padding-sm-bottom ifm-margin-sm-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
            <i class="fa fa-building-o ifm-grey"></i>
            site zones
        </h3>
        <a href="#" class="pull-right btn ifm-btn-green ifm-main-bg ifm-white">add new</a>
    </div>

    <!-- Site Zones Table -->
    <div class="row">
        <!-- Filter -->
        <div class="ifm-filter ifm-margin-sm-bottom clearfix">
            <div class="col-xs-12">
                <form class="form-inline">
                    <label class="ifm-grey bold no-margin">Filter by: </label>
                    <input class="form-control" placeholder="Parent Name" type="text" name="">
                    <select class="form-control">
                        <option>Category One</option>
                        <option>Category Two</option>
                        <option>Category Three</option>
                    </select>
                    <a class="btn ifm-btn-default ifm-light-grey-bg ifm-grey" href="#">OK</a>
                </form>
            </div>
        </div>
        <!-- Table -->
        <div class="no-more-tables">
            <table class="col-xs-12 table-bordered table-striped table-condensed cf">
                <thead class="cf ifm-light-grey-bg ifm-grey">
                    <tr>
                        <th>Name</th>
                        <th>Category ID</th>
                        <th class="numeric">Parent ID</th>
                        <th class="numeric">Site ID</th>
                        <th class="numeric">Action</th>
                    </tr>
                </thead>
                <tbody class="ifm-grey">
                    <tr>
                        <td data-title="Name">Kahraba CO.</td>
                        <td data-title="Category ID">3</td>
                        <td data-title="Parent ID" class="numeric">2</td>
                        <td data-title="Site ID" class="numeric">5</td>
                        <td data-title="Actions" class="numeric">
                            <div class="btn-group">
                                <a class="btn ifm-btn-green ifm-main-bg ifm-white" href="#">Edit</a>
                                <a class="btn ifm-btn-default ifm-light-grey-bg ifm-grey" href="#">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Name">Kahraba CO.</td>
                        <td data-title="Category ID">3</td>
                        <td data-title="Parent ID" class="numeric">2</td>
                        <td data-title="Site ID" class="numeric">5</td>
                        <td data-title="Actions" class="numeric">
                            <div class="btn-group">
                                <a class="btn ifm-btn-green ifm-main-bg ifm-white" href="#">Edit</a>
                                <a class="btn ifm-btn-default ifm-light-grey-bg ifm-grey" href="#">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Name">Kahraba CO.</td>
                        <td data-title="Category ID">3</td>
                        <td data-title="Parent ID" class="numeric">2</td>
                        <td data-title="Site ID" class="numeric">5</td>
                        <td data-title="Actions" class="numeric">
                            <div class="btn-group">
                                <a class="btn ifm-btn-green ifm-main-bg ifm-white" href="#">Edit</a>
                                <a class="btn ifm-btn-default ifm-light-grey-bg ifm-grey" href="#">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Name">Kahraba CO.</td>
                        <td data-title="Category ID">3</td>
                        <td data-title="Parent ID" class="numeric">2</td>
                        <td data-title="Site ID" class="numeric">5</td>
                        <td data-title="Actions" class="numeric">
                            <div class="btn-group">
                                <a class="btn ifm-btn-green ifm-main-bg ifm-white" href="#">Edit</a>
                                <a class="btn ifm-btn-default ifm-light-grey-bg ifm-grey" href="#">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Name">Kahraba CO.</td>
                        <td data-title="Category ID">3</td>
                        <td data-title="Parent ID" class="numeric">2</td>
                        <td data-title="Site ID" class="numeric">5</td>
                        <td data-title="Actions" class="numeric">
                            <div class="btn-group">
                                <a class="btn ifm-btn-green ifm-main-bg ifm-white" href="#">Edit</a>
                                <a class="btn ifm-btn-default ifm-light-grey-bg ifm-grey" href="#">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Name">Kahraba CO.</td>
                        <td data-title="Category ID">3</td>
                        <td data-title="Parent ID" class="numeric">2</td>
                        <td data-title="Site ID" class="numeric">5</td>
                        <td data-title="Actions" class="numeric">
                            <div class="btn-group">
                                <a class="btn ifm-btn-green ifm-main-bg ifm-white" href="#">Edit</a>
                                <a class="btn ifm-btn-default ifm-light-grey-bg ifm-grey" href="#">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Name">Kahraba CO.</td>
                        <td data-title="Category ID">3</td>
                        <td data-title="Parent ID" class="numeric">2</td>
                        <td data-title="Site ID" class="numeric">5</td>
                        <td data-title="Actions" class="numeric">
                            <div class="btn-group">
                                <a class="btn ifm-btn-green ifm-main-bg ifm-white" href="#">Edit</a>
                                <a class="btn ifm-btn-default ifm-light-grey-bg ifm-grey" href="#">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Name">Kahraba CO.</td>
                        <td data-title="Category ID">3</td>
                        <td data-title="Parent ID" class="numeric">2</td>
                        <td data-title="Site ID" class="numeric">5</td>
                        <td data-title="Actions" class="numeric">
                            <div class="btn-group">
                                <a class="btn ifm-btn-green ifm-main-bg ifm-white" href="#">Edit</a>
                                <a class="btn ifm-btn-default ifm-light-grey-bg ifm-grey" href="#">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Name">Kahraba CO.</td>
                        <td data-title="Category ID">3</td>
                        <td data-title="Parent ID" class="numeric">2</td>
                        <td data-title="Site ID" class="numeric">5</td>
                        <td data-title="Actions" class="numeric">
                            <div class="btn-group">
                                <a class="btn ifm-btn-green ifm-main-bg ifm-white" href="#">Edit</a>
                                <a class="btn ifm-btn-default ifm-light-grey-bg ifm-grey" href="#">Delete</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Pagination -->
        <div class="col-xs-12">
            <ul class="pagination">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
            </ul>
        </div>
    </div>
</section>

<div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-equalizer font-red-sunglo"></i>
                <span class="caption-subject font-red-sunglo bold uppercase">SiteZones</span>
            </div>
            <h1 class="pull-right">
                <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('dashboard.siteZones.create') !!}">Add New</a>
            </h1>
        </div>
        @include('flash::message')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('site_zones.table')
            </div>
        </div>
 </div>
@endsection


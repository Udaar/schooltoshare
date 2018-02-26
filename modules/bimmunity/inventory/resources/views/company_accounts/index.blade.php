@extends('layouts.app')

@section('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')

<section class="company-account-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">

    <!-- Company Account Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGXSURBVEhL5ZU/LwRBGIf3GkIhOhGiENEI0WkUdAqJnMzsbXJyZ3dm3s1JTiiUEio1iQqJRiFRKfgEKhQUqBQKiUbEJ/Ab3ttmOLuXO40nmez9Zubmyfzb9aQylzIyr80ufkRvvjL7nv3htQBJNADB7T8TCKWG8lr3c6xLQwI/MltCmQrHumQSFFQ8JRWdoe+jjOjOV3T820xSCwKlxuygYtGMcpWdSWBlxWK1i6scUgsw2DY6xhwTUH+EssTRIYOADoWOBceEIDQTduk4OqQWFBRJ3PbrtKenRqZN9kNawXK8oJyLiNYCrUe46UcyCSxSyjYIptF/E897vG9OZ4k6udkhtWCuXO7GI/eVEnI4trtYuh3ODqkFGOQpb0wvxwSp9TiO7wVHhwwCOkFHzTHBD+MSLtwBR4fUAnvRsObPmMmyPUmiFPdBuoA/PxS0HuZuDpk22S4RBBufm2s/UMqsQ9zDzd+SSVADgta87GoIsdoxU622c6xLQ4Is/KFA0ft8WBlsdpEhTeKe3Hi48nuYxVUrioho7QP4hlK3uGWpwQAAAABJRU5ErkJggg==">
            Company Accounts
        </h3>
        <a href="{!! route('companyAccounts.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right" style="top:19px;right:36px"><i class="fa fa-plus"></i> Add</a>
    </div>
    <!-- /Company Account Title Bar -->
    
    <!-- Company Account Table -->
    <div class="row">
        @include('flash::message')
        <div class="ifm-padding-sm-all">
            @include('inventory::company_accounts.table')
        </div>
    </div>
     <!-- /Company Account Table -->

</section>

@endsection


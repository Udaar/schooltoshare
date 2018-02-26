@extends('layouts.app')

@section('content')

<section class="company-account-create-section ifm-form">
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGXSURBVEhL5ZU/LwRBGIf3GkIhOhGiENEI0WkUdAqJnMzsbXJyZ3dm3s1JTiiUEio1iQqJRiFRKfgEKhQUqBQKiUbEJ/Ab3ttmOLuXO40nmez9Zubmyfzb9aQylzIyr80ufkRvvjL7nv3htQBJNADB7T8TCKWG8lr3c6xLQwI/MltCmQrHumQSFFQ8JRWdoe+jjOjOV3T820xSCwKlxuygYtGMcpWdSWBlxWK1i6scUgsw2DY6xhwTUH+EssTRIYOADoWOBceEIDQTduk4OqQWFBRJ3PbrtKenRqZN9kNawXK8oJyLiNYCrUe46UcyCSxSyjYIptF/E897vG9OZ4k6udkhtWCuXO7GI/eVEnI4trtYuh3ODqkFGOQpb0wvxwSp9TiO7wVHhwwCOkFHzTHBD+MSLtwBR4fUAnvRsObPmMmyPUmiFPdBuoA/PxS0HuZuDpk22S4RBBufm2s/UMqsQ9zDzd+SSVADgta87GoIsdoxU622c6xLQ4Is/KFA0ft8WBlsdpEhTeKe3Hi48nuYxVUrioho7QP4hlK3uGWpwQAAAABJRU5ErkJggg==">
                    Add Company Account
                </h3>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row">
                {!! Form::open(['route' => 'companyAccounts.store']) !!}
                    @include('inventory::company_accounts.fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>

@endsection

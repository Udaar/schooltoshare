<table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
    <thead>
        <tr>
            <th class="ifm-main-bg ifm-white all">Name</th>
            <th class="ifm-main-bg ifm-white all">Project Code</th>
            <th class="ifm-main-bg ifm-white all">Organization Code</th>
            <th class="ifm-main-bg ifm-white none">Sub Project Code</th>
            <th class="ifm-main-bg ifm-white all">Document Type Code</th>
            <th class="ifm-main-bg ifm-white all">Discipline Code</th>
            <th class="ifm-main-bg ifm-white none">Sub Discipline Code</th>
            <th class="ifm-main-bg ifm-white all">Level Code</th>
            <th class="ifm-main-bg ifm-white none">Urn</th>
            <th class="ifm-main-bg ifm-white min-tablet-l">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bimModels as $bimModel)
            <tr>
                <td>{!! $bimModel->name !!}</td>
                <td>{!! $bimModel->project_code !!}</td>
                <td>{!! $bimModel->organization_code !!}</td>
                <td>{!! $bimModel->sub_project_code !!}</td>
                <td>{!! $bimModel->document_type_code !!}</td>
                <td>{!! $bimModel->discipline_code !!}</td>
                <td>{!! $bimModel->sub_discipline_code !!}</td>
                <td>{!! $bimModel->level_code !!}</td>
                <td style="word-break: break-all">{!! $bimModel->urn !!}</td>
                <td>
                    {!! Form::open(['route' => ['bimModels.destroy', $bimModel->id], 'method' => 'delete']) !!}
                        <div class='btn-group ifm-static'>
                            <a href="{{ route('bimModels.edit', [$bimModel->id]) }}" class='btn ifm-btn-green ifm-light-grey-bg ifm-grey ifm-margin-xs-right'><i class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-white-bg ifm-grey ifm-border-light-grey-all', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                     {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- <table class="table table-responsive" id="bimModels-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Project Code</th>
            <th>Organization Code</th>
            <th>Sub Project Code</th>
            <th>Document Type Code</th>
            <th>Discipline Code</th>
            <th>Sub Discipline Code</th>
            <th>Level Code</th>
            <th>Urn</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($bimModels as $bimModel)
        <tr>
            <td>{!! $bimModel->name !!}</td>
            <td>{!! $bimModel->project_code !!}</td>
            <td>{!! $bimModel->organization_code !!}</td>
            <td>{!! $bimModel->sub_project_code !!}</td>
            <td>{!! $bimModel->document_type_code !!}</td>
            <td>{!! $bimModel->discipline_code !!}</td>
            <td>{!! $bimModel->sub_discipline_code !!}</td>
            <td>{!! $bimModel->level_code !!}</td>
            <td>{!! $bimModel->urn !!}</td>
            <td>
                {!! Form::open(['route' => ['bimModels.destroy', $bimModel->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('bimModels.show', [$bimModel->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('bimModels.edit', [$bimModel->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table> --}}
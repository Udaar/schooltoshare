<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-user fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Created By:
                    <span class="ifm-grey">
                        {!! $packing->user->name !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="media">
            <div class="media-left">
                <span class="fa-stack fa-lg ifm-main">
                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                    <i class="media-object fa fa-calendar fa-stack-1x"></i>
                </span>
            </div>
            <div class="media-body">
                <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Created At:
                    <span class="ifm-grey">
                        {!! Carbon\Carbon::parse($packing->created_at)->format('d/m/Y') !!}
                    </span>
                </h4>
            </div>
        </div>
    </div>
</div>


<!-- Name Field -->
{{--<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $packing->name !!}</p>
</div>--}}

<!-- Created By Field -->
{{--<div class="form-group">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{!! $packing->user->name !!}</p>
</div>--}}

<!-- Element Status Field -->
{{--<div class="form-group">--}}
    {{--{!! Form::label('element_status', 'Element Status:') !!}--}}
    {{--<p>{!! $packing->element_status !!}</p>--}}
{{--</div>--}}

<!-- Deleted At Field -->
{{--<div class="form-group">--}}
    {{--{!! Form::label('deleted_at', 'Deleted At:') !!}--}}
    {{--<p>{!! $packing->deleted_at !!}</p>--}}
{{--</div>--}}

<!-- Created At Field -->
{{--<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $packing->created_at !!}</p>
</div>--}}

<!-- Updated At Field -->
{{--<div class="form-group">--}}
    {{--{!! Form::label('updated_at', 'Updated At:') !!}--}}
    {{--<p>{!! $packing->updated_at !!}</p>--}}
{{--</div>--}}


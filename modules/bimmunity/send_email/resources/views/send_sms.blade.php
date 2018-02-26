@extends('layouts.app')

@push('head')
    
@endpush

@section('content')
<section class="send-message-section ifm-form">
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAG6SURBVEhL7VS7SgNRFExEBEEUVBAbC59VULC18AmCjSL7BXnsK1tsZyMBG+0TA6KgFoJ/4Jfkf5y5O0lcNxs3ZNM5MNy7c86ZuftICv/IjFqttuy67noepJds+6hWq23wISe2ZRsBiecQO+BTTuxUKpUr2ZuAG3BNl2ODXgi512UUYNv2mS7HBr0SARCewdtGozEteWRwlh7yigfoturgJ06wpVJmcIaz8PHllQxgUxAE8yi2QBulYtQxFEX2coaz5XJ5MzUAYkkSP9traG8YWJGUAGvsYa8kzpVSA/BpHUsyQNMq+I7apaQeqLHGHkkGeAqHmQMEPgIP9abv+0sk99RYi1qMxwLXoQEQjyQlgPBt9Dyip8W95B5Qc8BA+8EBSN+VNDJg6IL8Fdf5brDeqRQL+PPztCxrBnew/5s8McgXHDAEq3lkBt0ANkhKhfq+sCaAky+qx4SYAQJC7yVjPXAcZ4fkni+tq/P07MNw//mmAD38LZ2aCwzxr+Li5y2nkQHg66BaGIaz8jsBm/jrmDIBKO5ByATP8+a0jQEH/AD5DuLmeQHm/IrCiZgTCniZiDkB842keaHwDcmiggCvF/7DAAAAAElFTkSuQmCC">
                    Send Message
                </h3>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row">
            <form action="/store/sms" method="post">
                {{ csrf_field() }}
                    <!-- Users Select Field -->
                    <div class="col-xs-12">
                        <div class="form-group">
                            {!! Form::label('send_to', 'Send To:', ['class' => 'ifm-grey']) !!}
                            {!! Form::select('send_to[]', $team->pluck('name','phone'), null, ['class' => 'form-control select2 ifm-border-light-grey-all','required' => 'required', 'multiple' => 'multiple']) !!}
                        </div>
                    </div>
                    <!-- /Users Select Field -->
                    
                    <!-- Message Body Field -->
                    <div class="col-xs-12">
                        <div class="form-group">
                            {!! Form::label('message', 'Message:', ['class' => 'ifm-grey']) !!}
                            {!! Form::textarea('message', null, ['class' => 'form-control ifm-border-light-grey-all', 'rows' => '5']) !!}
                        </div>
                    </div>
                    <!-- /Message Body Field -->

                   
                        <input type="hidden" name="ticket_id" value="{{$ticket_id}}">
                        <input type="hidden" name="action_id" value="{{$action_id}}">

                    <!-- Submit Field -->
                    <div class="col-xs-12">
                        <div class="form-group ifm-form-actions">
                            {!! Form::submit('Send', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
                            <a href="" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
                        </div>
                    </div>
               
                    <!-- /Submit Field -->

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    
@endpush
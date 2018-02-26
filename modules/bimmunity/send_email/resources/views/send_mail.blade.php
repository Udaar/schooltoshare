@extends('layouts.app')

@section('content')
<section class="send-email-section ifm-form">
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHGSURBVEhLxZU/LENhFMWfSA0MTRAxGUQiMQgbiegiRgnSpRqRtNV/A4vB1s2qizBpJBYRTCaLsRNhIxFNmogEEf8Sm9/9XNU/T71WGyc5ed89937nfH0v79WqO0Kh0EYd6FF7E/A2X2OEw+E+tbcs6kfYDndqSQ6+lh/QhXALx2pEH8wUB7wGg8EhI/4ReE3YBTzDLOsp06gSHHIOnzu7gEwkEullfQkXTbMyNOCRgOfsH7ENkJqQDtZpmPR6vY1m6Bcw14RHij1HXN35fiUBAupmuIe2L2uVbUHfrcYpCVKtfIBATo++ip6WX6VyAXTfGUxQNnyqDgME6KPoD/BCno/KBtSD9K/loaqUg6MA6gUxgMOYTFJn4bTf72/hTZ3VekzHC1A2gHUz6214HIvFOs0QCAQC/fQO0W/gQfEvysePAdFotJvrKUyiucyAQ7DHA2OyloOx/8o0vgLgCwNZbseMaVSIeDzehscJXJIar3HTQEhpwBPmA0asEsUhOWjAPfwVnMwne/Q2lID+Mpd3+B3CA2ylYffHYccV3dNj09vAeFMDthjLvRs1gX4ydsXc6WfGMTB11c1cwO0Zx3y9Lub/CMv6AE7jyzX1o1AkAAAAAElFTkSuQmCC">
                    Send Email
                </h3>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row">
            
                <form action="/store/email" method="post">
                {{ csrf_field() }}
                    <!-- From Field -->
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('from', 'From:', ['class' => 'ifm-grey']) !!}
                            {!! Form::email('from', \Auth::user()->email, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required','readonly']) !!}
                        </div>
                    </div>
                    <!-- /From Field -->

                    <!-- To Field -->
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('to', 'To:', ['class' => 'ifm-grey']) !!}
                            {!! Form::select('to[]', $team->pluck('name','email'), null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'required' => 'required', 'multiple' => 'multiple']) !!}
                        </div>
                    </div>
                    <!-- /To Field -->

                    <!-- CC Field -->
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('cc', 'CC:', ['class' => 'ifm-grey']) !!}
                            {!! Form::select('cc[]',$team->pluck('name','email'), null, ['class' => 'form-control select2 ifm-border-light-grey-all', 'required' => 'required', 'multiple' => 'multiple']) !!}
                        </div>
                    </div>
                    <!-- /CC Field -->

                    <!-- Subject Field -->
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('subject', 'Subject:', ['class' => 'ifm-grey']) !!}
                            {!! Form::text('subject', null, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required']) !!}
                        </div>
                    </div>
                    <!-- /Subject Field -->

                    <!-- body Field -->
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('content', 'Content:', ['class' => 'ifm-grey']) !!}
                            {!! Form::textarea('content', null, ['class' => 'form-control ifm-border-light-grey-all', 'required' => 'required', 'rows' => '5']) !!}
                        </div>
                    </div>
                    <!-- /body Field -->

                    <!-- Submit Field -->
                    <div class="col-xs-12">
                        <div class="form-group ifm-form-actions">
                            {!! Form::submit('Send', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
                            <a href="" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
                        </div>
                    </div>
                    <!-- /Submit Field -->
                    @if(isset($ticket_id) && isset($action_id))
                        <input type="hidden" name="ticket_id" value="{{$ticket_id}}">
                        <input type="hidden" name="action_id" value="{{$action_id}}">
                    @endif
                </form>
                {{--{!! Form::open(['route' => '']) !!}
                    
                {!! Form::close() !!}--}}
            </div>
        </div>
    </div>
</section>
@endsection
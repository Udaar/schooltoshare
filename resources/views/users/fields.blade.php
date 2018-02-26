@push('head')
    <link rel="stylesheet" href="/metronic/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css">
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
@endpush
<div class="container-fluid">
<input type="hidden" name="perent_id" value="{{Auth::user()->id}}">
    <!-- Input Fields -->
    <div class="row">
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid">
                <!-- Full Name Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('Full_name', 'Full Name:', ['class' => 'ifm-grey']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control ifm-border-light-grey-all','required'=>'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <!-- Email Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('email', 'Email:', ['class' => 'ifm-grey']) !!}
                            {!! Form::email('email', null, ['class' => 'form-control ifm-border-light-grey-all','required'=>'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <!-- Phone Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('phone', 'Phone:', ['class' => 'ifm-grey']) !!}
                            {!! Form::text('phone', null, ['class' => 'form-control ifm-border-light-grey-all','required'=>'required']) !!}
                        </div>
                    </div>
                </div>
                <!-- Profile Picture Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('photo', 'Profile Picture', ['class' => 'ifm-grey']) !!}
                            <div class="fileinput fileinput-new" data-provides="fileinput" style="display:block">
                                <div class="fileinput-new thumbnail" style="width: 200px; height: 140px;">
                                    @if(isset($user->picture))
                                    {{ Form::image($user->picture, 'picture',['id'=>'blah', 'style'=>'max-height:140px']) }} 
                                    @else
                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" id="blah"/>
                                    @endif
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                <div>
                                    <span class="btn default btn-file">
                                        <span class="fileinput-new"> Select image </span>
                                        <span class="fileinput-exists"> Change </span>
                                        <input type="file" name="photo[]" onchange="readURL(this);"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12">
            <div class="container-fluid">
                <!-- Cell Phone Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('cell_phone', 'Cell Phone:', ['class' => 'ifm-grey']) !!}
                            {!! Form::text('cell_phone', null, ['class' => 'form-control ifm-border-light-grey-all','required'=>'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <!-- Address Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('address', 'Address:', ['class' => 'ifm-grey']) !!}
                            {!! Form::text('address', null, ['class' => 'form-control ifm-border-light-grey-all','required'=>'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <!-- Password Field -->
                <div class="row">
                    <div class="col-xs-12 ifm-no-padding-left">
                        <div class="form-group col-sm-6 ifm-width-100">
                            {!! Form::label('password', 'Password:', ['class' => 'ifm-grey']) !!}
                            {!! Form::password('password', ['class' => 'form-control ifm-border-light-grey-all','required'=>'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
           {{-- <div class="form-group">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <span class="btn ifm-light-grey-bg btn-file" style="border-radius:10px!important">
                                <span class="fileinput-new"> Upload image </span>
                                <span class="fileinput-exists"> Change </span>
                                <input type="file" name="photo"> </span>
                            <span class="fileinput-filename"> </span> &nbsp;
                            <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                        </div>
                    </div>
                </div>
           </div> --}}
        </div>
    </div>
    <!-- Submit Field -->
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group col-sm-12">
                <div class="form-actions">
                    <div class="row  col-md-offset-0">
                        {!! Form::submit('Save', ['class' => 'btn ifm-btn-green ifm-main-bg ifm-white']) !!}
                        <a href="{!! route('users.index') !!}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script >

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
@push('script')
    <script src="/metronic/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
    
@endpush
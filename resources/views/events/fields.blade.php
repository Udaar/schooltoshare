<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'Speaker:') !!}
    {!! Form::text('speaker', null, ['class' => 'form-control']) !!}
</div>

<!-- School Id Field -->
<input type="hidden" name="school_id" value="{{\Auth::user()->school->id}}">


<!-- Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duration', 'Duration:') !!}
    {!! Form::number('duration', null, ['class' => 'form-control']) !!}
</div>

<!-- D Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('d_type', 'D Type:') !!}
    {!! Form::text('d_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('date', 'Date:', ['class' => 'ifm-grey']) !!}
        <div class="input-group ifm-width-100 input-medium date date-picker" data-date-format="{{config('ifm.settings.date-format-bootstrap')}}" >
            {!! Form::text('date', null, ['class' => 'form-control ifm-border-light-grey-all','required'=>'required']) !!}
            <span class="input-group-btn">
                <button class="btn default ifm-main-bg ifm-white ifm-border-main-all" style="padding:9px 12px" type="button">
                    <i class="fa fa-calendar"></i>
                </button>
            </span>
        </div>
    </div>
</div>
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::date('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Ticket Id Field -->


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('events.index') !!}" class="btn btn-default">Cancel</a>
</div>

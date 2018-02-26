<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="ifm-grey">Group Name: </label>
                {!! Form::text('name',null,['class'=>'form-control ifm-border-light-grey-all']) !!}
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label class="ifm-grey">User List: </label>
                <div class="input-group select2-bootstrap-append"> 
                        {!! Form::select('employees[]', \App\User::all()->keyBy('id')->forget(\Auth::user()->id)->pluck('name','id'), null, ['id'=>'multi-append','class'=>'form-control select2 ifm-border-light-grey-all','multiple']); !!}
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" data-select2-open="multi-append">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label class="ifm-grey">Group Image: </label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail_tag" data-preview="holder" class="btn ifm-btn-default ifm-grey-bg ifm-white">
                            <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="thumbnail_tag" class="form-control input-wd-sm ifm-border-light-grey-all" type="text" name="image">
                </div>
                <img id="holder" style="margin-top:15px;max-height:100px;">
            </div>
        </div>
    </div>
</div>
<div class="btn-group pull-right">
    <button type="submit" class="btn green theme-bg theme-border ifm-margin-xs-right ifm-main-bg ifm-white">Submit</button>
    <button data-remodal-action="cancel" class="btn ifm-light-grey-bg ifm-grey ifm-cancel">Cancel</button>
</div>
@extends('layouts.app')

@push('head')
    <link href="/metronic/assets/pages/css/contact.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/metronic/reset/contact-reset.css" />
@endpush

@section('content')
    <section class="calendar">
        <div class="container-fluid">
            <div class="c-content-feedback-1 c-option-1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="c-contact">
                            <div class="c-content-title-1">
                                <div class="ifm-padding-sm-bottom ifm-margin-sm-bottom clearfix">
                                    <h3 class="ifm-grey ifm-no-margin-all inline-block uppercase">
                                        <i class="fa fa-phone-square ifm-grey"></i>
                                        contact
                                    </h3>
                                </div>
                            </div>
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Name" class="form-control input-md"> </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Your Email" class="form-control input-md"> </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Contact Phone" class="form-control input-md"> </div>
                                <div class="form-group">
                                    <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control input-md"></textarea>
                                </div>
                                <button type="submit" class="btn ifm-btn ifm-main-bg ifm-white ifm-margin-sm-right">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    
@endpush
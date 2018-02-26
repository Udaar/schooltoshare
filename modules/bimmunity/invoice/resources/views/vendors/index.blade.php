@extends('layouts.app')

@section('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')

<section class="vendors-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">

    <!-- Vendors Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKISURBVEhLpZXLaxNRFMZHBYVg8UE3lUrFWiwWXRgXCoVqK/jaFeI2kneC6ULBB6YNqBQpFXRRRVERxCiFIoigtiqliVo04sIKgkv/EX/ncuYmkUm4qR98OY/7nXPuzNyZeC2wJplMnoK3U6lUFfsWXoBdur560DBEozk4Be9CGVRJJBJnsMvwhEpXBxrco9lp8Rk2iX8Q+yafz2/IZrNbWC/DXiNuF+l0egfFLzWUAfczmcxu7Ew0Gt0sOdaHJG8E7YLimFBDGTALOzW0QPNN3fZA4QS3ZFhDLxaL9ajbAHQVdd1B4252+xt+ocEdTTeAtU1wAa6gmdK0Gyg6QNE8dhSOMHCAK9iGH4rH41t5wDvJheExnlUc7WstdQPNOmj2B87A62JpUpJG8AV8BG+SL2B/wfNa6gYKjsBrkUhknaaaQjfzXkM3cNl9DChp2BJ6dB9r6A6KbjFkTMNAyMuG7jMb2qMpdxSLxbUM+CRvraYMyO3VBxzGvwqn/bgZ2ch2LW8ExQl4RUM5vmHZMbkb7ZCaFW1RAwv7pRmscgtOSo4juov8T3Jy/oP4THaLZh4+r/OXTVMBQRfCh3AWX5qFxIdyVOVr+gR/UOUGDN5H/qiQq+zWtAHaS1aPcxxRBftRYvyyWQDkDsFz5F7ZAsDVHSb3Afq3oypHV5drA5g8gOBdLpfbiDWNfVsPW6DA70f3FevfpkXen/W6XNMjeipDNPmdWC75h9p6PjAFjrAD+FnSnAyT7/wkNuhELJoCR6C1V1DGGdWTclb+VLDjIvIt6wVb4AirDxpAXBARsXkXJLYFjrB6msif+GWCi62IRr6opaC1JlxC3yuTOuEIwb8P9b8od8TzPO8vjvTMc3uAXY4AAAAASUVORK5CYII=">
            vendors
        </h3>
        <a href="{!! route('vendors.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right add-btn" style="top:19px;right:36px"><i class="fa fa-plus"></i> Add</a>
    </div>
	<!-- /Vendors Title Bar -->

	<!-- Vendors Table -->
    <div class="row">
        @include('flash::message')

        <div class="ifm-padding-sm-all">
            @include('bimmunity/invoice::vendors.table')
        </div>

    </div>
	<!-- /Vendors Table -->

</section>

@endsection


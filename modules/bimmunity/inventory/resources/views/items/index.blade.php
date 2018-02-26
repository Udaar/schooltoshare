@extends('layouts.app')

@section('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')
<section class="Items-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">
    <!-- Items Title Bar -->
    <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
        <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAI4SURBVEhL7ZVNqIxRGMffoYQNG5HkM6VsbG1ssLuR8Z6ZWdDrPV/D3cnC5zWlxEZSpBsLJWVhYSUUK0v5KneFfJSQK7lZoPB7zpzXnY9umTuzUf71dM55Pv7/c57zzplkOki1X6+y4UVx2T+UUjNT7XbKWDHOVrR7q7QfS/N8QUyZHpT3S8v5npUQXgmkxj2oaP9wm7VLWA/LvOz9GskprKb14lg+NbIsmw3BKISvK8b/VMZfS9O9cyC8kxp3NKYlnOYg8V+MT4ndp2aC9bfyrvrqmNKN1NoVkgzpOQouK+2u05pZEuNE82jNY0jykAzIOYHvJrab3GfUHmFjt2K4HVVrh0h4A/kOdnWe8UZBXiC0x/iX3MmW6BKR29S9KGu9jGUJoXtV48vNaBMlCE8S+I76CPOLkHyQiyVRdRqEx7Cv5Fladlh2HskDlLXriD0f8n5ucKS2nlIwgY32bn6ckx4IRC0gdgaR40mj0ZjB5AmOVzHWE0KtcR9rxiyMrvCRyL3gP5Wo3FakHZ0Cctkk7e8yPt2YEhA3d5aTXJJ1QU7bLrAsFQnSnjaBalZf3kU+hUDVuVXExlJT38w4SR4StNtes3Ztp8DfQgREtKr9Rjh+0I0vuJvkBSShX4Ew134D9jkEWjEoAcG/LSCvKwLjIdCKQQjIU84rcJf1vhiaxEAEjDsNx1Vc7V+QoG8B7Q8h8OjP29OJfgWofS9/NtHVja1ZNp9dvOMX+KlXC89M7jZFqv/oFUnyGxVcaVRgavVdAAAAAElFTkSuQmCC">
            Items
        </h3>
        <a href="{!! route('items.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right" style="top:19px;right:36px"><i class="fa fa-plus"></i> Add</a>
    </div>
    <div class="row">
        @include('flash::message')

        <!-- Items Table -->
        <div class="ifm-padding-sm-all">
            @include('inventory::items.table')
        </div>
    </div>
</section>
@endsection


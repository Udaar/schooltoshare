@extends('layouts.app')

@section('head')
    <style>
        @media screen and (min-width:320px) and (max-width:768px){
            .container-fluid{
                padding-right: 8px!important;
            }
            .form-actions{
                padding-left: 15px!important;
            }
        }
    </style>
@endsection

@section('content')
<section class="item-edit-section ifm-form">
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAI4SURBVEhL7ZVNqIxRGMffoYQNG5HkM6VsbG1ssLuR8Z6ZWdDrPV/D3cnC5zWlxEZSpBsLJWVhYSUUK0v5KneFfJSQK7lZoPB7zpzXnY9umTuzUf71dM55Pv7/c57zzplkOki1X6+y4UVx2T+UUjNT7XbKWDHOVrR7q7QfS/N8QUyZHpT3S8v5npUQXgmkxj2oaP9wm7VLWA/LvOz9GskprKb14lg+NbIsmw3BKISvK8b/VMZfS9O9cyC8kxp3NKYlnOYg8V+MT4ndp2aC9bfyrvrqmNKN1NoVkgzpOQouK+2u05pZEuNE82jNY0jykAzIOYHvJrab3GfUHmFjt2K4HVVrh0h4A/kOdnWe8UZBXiC0x/iX3MmW6BKR29S9KGu9jGUJoXtV48vNaBMlCE8S+I76CPOLkHyQiyVRdRqEx7Cv5Fladlh2HskDlLXriD0f8n5ucKS2nlIwgY32bn6ckx4IRC0gdgaR40mj0ZjB5AmOVzHWE0KtcR9rxiyMrvCRyL3gP5Wo3FakHZ0Cctkk7e8yPt2YEhA3d5aTXJJ1QU7bLrAsFQnSnjaBalZf3kU+hUDVuVXExlJT38w4SR4StNtes3Ztp8DfQgREtKr9Rjh+0I0vuJvkBSShX4Ew134D9jkEWjEoAcG/LSCvKwLjIdCKQQjIU84rcJf1vhiaxEAEjDsNx1Vc7V+QoG8B7Q8h8OjP29OJfgWofS9/NtHVja1ZNp9dvOMX+KlXC89M7jZFqv/oFUnyGxVcaVRgavVdAAAAAElFTkSuQmCC">
                    Edit Item
                </h3>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row">
            {!! Form::model($item, ['route' => ['items.update', $item->id], 'method' => 'patch']) !!}

                @include('inventory::items.fields')

            {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
@endsection
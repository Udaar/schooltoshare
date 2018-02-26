@extends('layouts.app')

@section('head')
    <style>
        .dropdown-menu.datepicker-dropdown{
            z-index: 100000;
        }
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

  <section class="search-section ifm-form">
    <div class="portlet light ifm-border-light-grey-all">
        <div class="portlet-title ifm-border-light-grey-bottom">
            <div class="caption">
                <h3 class="ifm-grey ifm-no-margin-all inline-block captilize normal title">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJqSURBVEhLrZa7a1NhGMYT6+Clqxd0cNEuVRDUQV3URXGpCkEKkUPuIVsGXYRGh6r/QNdUbRcLWtHSsYMoSqDgpFDBCIqzUGsjtNXf8+WNhJ6vp0eaBx7evPfvvN+FJHyoVCr7C4VCqVgsTiFfI98in8NbuVzusIX9P4Ig2EGR+/AXRf8gW8gvyAW4ZLZVWC+Xy3stLR4ymcweEt+pCGzk8/mryF3mTtRqte3YLhAzY42a6IPmjka1Wt1pxdeQtzEl2x4/SqXSMHH6yq/ZbPaAmTcGgfdsVSoeC/aFWtALM/nBpu2z1TRQI1e+HuSMa2F80VkzhUFAWUHwmnRmvc05YoDCRyx3zExh4HwCf2sfUJN8zY22Jx7I/SCaGgbONxRt6jcbdgh9yjliQnsAF00Ng4INAhbs92n4I51O73bOGCD3KWyZGgZO3dAlnXNmepAGmuldc28Kcuehm4AXFLupogSdN/0VXIFXXEAE7ElZJXbSTGHobVEQnJGOPAb1LKwgRynS7wI9wP+AOB3TITP5QVDnPA9L5xKdIPm9bMhF5DPkSPf7g34K+zJyHjX6/ugdIliPmlbu7gNI0ug4+nUan+v+Emwnif2O1H5dMnM0WN1Rkr6RsAbHKT5grn+wmWssy1Zc/ARnsY9sekn1cBH8spNM0keocz4NdVq0ofLptb2I/NyJFfHXU6lUn5XbGASeIWEM6pb+RG/BJpxgXJcJcTNHn+sU7+LDWE3igAZ3PA30JY960kQzp1jd1wQ+7kkTFaGYO+brSfPAwrYGNdFYPA0qFrJ1WJOJruJz+hNh7t7A9iTQytvFE4m/z+GPvakY5zYAAAAASUVORK5CYII=">
                    Search
                </h3>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row">
                {!! Form::open(['route' => 'outOrderItems.search_result']) !!}

                    @include('inventory::out_order_items.search_fields')

                 {!! Form::close() !!}
            </div>
        </div>
    </div>
  </section>
@endsection

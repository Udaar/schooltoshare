@push('head')
    <link rel="stylesheet" href="/metronic/reset/select2-reset.css">
    <style>
        @media only screen and (max-width: 640px){
            div.dataTables_wrapper div.dataTables_filter input{
                width: auto;
            }
        }
    </style>
@endpush
<!-- Tabs Links -->
<ul class="show-zone-nav-tabs nav nav-tabs swipe" id="tabs">
    <li class="show-zone-taxonomy-tab taxonomy-tab active">
        <a class="bold" style="border-left: 1px solid #ddd" href="#zone-details" data-toggle="tab" tax>
            <span style="display: block;" class="fa fa-info-circle icon"></span>
            Zone Details
        </a>
    </li>
</ul>
<!-- Tabs -->
<div class="show-zone-tab-content tab-content">
    <!-- Zone Details -->
    <div class="show-zone-tab-pane tab-pane active" id="zone-details">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-info-circle ifm-main"></i>
                    <span class="caption-subject ifm-main bold uppercase">Zone Details</span>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="show-zone-portlet-body portlet-body">
                <div class="show-zone-wrapper info-wrapper ifm-margin-sm-bottom">
                    <!-- Show Zone Info Box -->
                    <div class="show-zone-box info-box">
                        <div class="row">
                            <!-- Show Zone Image -->
                            <div class="col-lg-3 col-xs-12 no-padding-xs">
                                <div class="show-zone-img info-img">
                                    
                                    {{-- <img src="/metronic/reset/images/placehold_350x350.png"> --}}

                                    <img id="holder_{{ $zone->id }}" src="
                            
                                    @if( isset($zone->images()->first()->path) && file_exists(public_path( $zone->images()->first()->path )) )
                                        {{  $zone->images()->first()->path }}
                                    @else
                                        {{  asset(config('ifm.zones.image_placeholder')) }}
                                    @endif
                                        ">
                                    <a id="lfm_{{$zone->id}}" data-input="thumbnail" data-preview="holder_{{ $zone->id }}" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Edit</a>




                                    {{-- <a id="" data-input="thumbnail" data-preview="" class="btn ifm-btn-default ifm-light-grey-bg ifm-grey">Edit</a> --}}
                                </div>
                            </div>
                            <div class="col-lg-9 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-9 col-xs-7">
                                        <div class="show-zone-name info-name ifm-grey ifm-padding-sm-top bold uppercase">
                                            {{ $zone->name }}
                                        </div>
                                    </div>
                                </div>
                                <!-- First Row --> 
                                <div class="row">
                                    <!-- Parent Name -->
                                    <div class="col-lg-4 col-xs-12">
                                        <div class="show-zone-item info-item">
                                        @if(isset($zone->parent->name))
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="fa-stack fa-lg ifm-main">
                                                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                                                        <i class="media-object fa fa-level-up fa-stack-1x"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Parent</h4>
                                                    <span class="ifm-grey"> {!! $zone->parent->name !!} </span>
                                                </div>
                                            </div>
                                        @else
                                            <div class="no-parent">
                                                <span class="fa-stack fa-lg ifm-main">
                                                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                                                    <i class="media-object fa fa-level-up fa-stack-1x"></i>
                                                </span>
                                                <span class="label label-sm ifm-white ifm-grey-bg" style="vertical-align: top;">No Parent</span>
                                            </div>
                                        @endif
                                        </div>
                                    </div>
                                    <!-- Building Name -->
                                    <div class="col-lg-4 col-xs-12">
                                        <div class="show-zone-item info-item">
                                        @if(isset($zone->building->name))
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="fa-stack fa-lg ifm-main">
                                                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                                                        <i class="media-object fa fa-building fa-stack-1x"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="font-lg no-margin bold ifm-weight-400 ifm-grey">Building</h4>
                                                    <span class="ifm-grey">{!! $zone->building->name !!}</span>
                                                </div>
                                            </div>
                                            @else
                                                <div class="no-parent">
                                                    <span class="fa-stack fa-lg ifm-main">
                                                        <i class="fa fa-circle-thin fa-stack-2x"></i>
                                                        <i class="media-object fa fa-building fa-stack-1x"></i>
                                                    </span>
                                                    <span class="label label-sm font-red-sungle bold" style="vertical-align: top;">No Parent</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
</div>

@push('scripts')
<script type="text/javascript">
    $('a[id*="lfm"]').each(function(){
        $(this).filemanager('images');
    });
      $(document).on('select_file',function (e,url,id) { 
        $.ajax({
            headers:
            {
                'X-CSRF-Token': $('input[name="_token"]').val()
            },
            type:'post',
            url:'/pm/structure/zones/changeZoneImage/'+id,
            data:{
                'path':url
            },
            success:function(){
                console.log("updated");
            }
        })
       });
       $(function () {
            $('#example_1').dataTable( {
                paging: false,
                responsive: true,
            } );
       });
</script>
@endpush
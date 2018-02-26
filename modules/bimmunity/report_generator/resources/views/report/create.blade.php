@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="/gridstack.js-develop/src/gridstack.css">
    <link rel="stylesheet" href="/remodal/dist/remodal.css">
    <link rel="stylesheet" href="/remodal/dist/remodal-default-theme.css">
    <link rel="stylesheet" href="/metronic/assets/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css">
    <link rel="stylesheet" href="/metronic/reset/modules/report/create/create_modal.css">
    <link rel="stylesheet" href="/metronic/reset/modules/report/create/create.css">
    <style>
        div.grid-stack > .grid-stack-item[data-gs-width="12"]  { width: 100% }
        div.grid-stack > .grid-stack-item[data-gs-width="11"]  { width: 90.9% }
        div.grid-stack > .grid-stack-item[data-gs-width="10"]  { width: 82.6% }
        div.grid-stack > .grid-stack-item[data-gs-width="9"]  { width: 74.3% }
        div.grid-stack > .grid-stack-item[data-gs-width="8"]  { width: 66.2% }
        div.grid-stack > .grid-stack-item[data-gs-width="7"]  { width: 57.7% }
        div.grid-stack > .grid-stack-item[data-gs-width="6"]  { width: 49.4% }
        div.grid-stack > .grid-stack-item[data-gs-width="5"]  { width: 41.1% }
        div.grid-stack > .grid-stack-item[data-gs-width="4"]  { width: 32.8% }
        div.grid-stack > .grid-stack-item[data-gs-width="3"]  { width: 24.5% }
        div.grid-stack > .grid-stack-item[data-gs-width="2"]  { width: 16.2% }
        div.grid-stack > .grid-stack-item[data-gs-width="1"]  { width: 6.9% }
        body::-webkit-scrollbar { 
            display: none; 
        }
        .page-content{
            padding: 15px 5px!important;
            overflow-y: auto;
            overflow-x: hidden;
        }
        /* .remodal{
            padding: 0px!important;
        } */
    </style>
@endpush

@section('content')
<section class="report-create-section info-section">
    <div class="report-top-bar">
        <h3 class="ifm-inline-block ifm-no-margin-all">
            <a href="javascript:;" class="lead ifm-grey" id="title" data-type="text" data-pk="1" data-original-title="Enter Title"> Click To Add Title </a>
        </h3>
        <div class="btn-group pull-right">
            <button class="btn ifm-main-bg ifm-white export-btn">Export PDF</button>
            <a data-remodal-target="modal" class="btn ifm-btn-default ifm-main-bg ifm-white">
                <i class="fa fa-plus"></i> add
            </a>
        </div>
    </div>
    <div id="grid-stack" class="grid-stack" data-gs-width="12" data-gs-animate="yes">
        
    </div>
</section>

<div class="remodal ifm-modal" data-remodal-id="modal">
  <div class="remodal-head">
      <button data-remodal-action="close" class="remodal-close"></button>
      <h4 class="ifm-no-margin-top">Creat Report(s)</h4>
  </div>  
  @include('report_generator::report.create_modal')
  <div class="btn-group pull-right ifm-padding-15-left ifm-padding-15-right ifm-padding-15-bottom">
    <button data-remodal-action="cancel" class="remodal-cancel ifm-light-grey-bg ifm-grey" style="padding: 6px 12px;min-width:auto">Cancel</button>
    <button id="addWidget" data-remodal-action="confirm" class="remodal-confirm ifm-main-bg" style="padding: 6px 12px;min-width:auto">Create</button>
  </div>
</div>
@endsection

@push('scripts')
    <script>
        // $.noConflict(); 
        $(function(){
            $("#oldJquery").attr('src', '/jquery-3.1.0.min.js');
            
        });
    </script>
    <script src="/lodash.js"></script>
    <script src="/metronic/assets/global/plugins/chartsJS/Chart.bundle.min.js"></script>
    <script src="/metronic/assets/global/plugins/chartsJS/Chart.min.js"></script>
    <script src="/metronic/assets/global/plugins/chartsJS/Chart.PieceLabel.js"></script>
    <script src="/jquery-ui-1.12.min.js"></script>
    <script src="/gridstack.js-develop/src/knockout-min.js"></script>
    <script src="/gridstack.js-develop/src/gridstack.js"></script>
    <script src="/gridstack.js-develop/src/gridstack.jQueryUI.js"></script>
    <script src="/remodal/dist/remodal.min.js"></script>
    <script src="/metronic/assets/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.min.js"></script>
    <script src="/dom-to-png/dom-to-image.min.js"></script>
    <script src="/jsPDF/jspdf.min.js"></script>
    <script src="/js/chartjs/create-chart.js"></script>
    <script src="/js/modal.js"></script>
    <script>
        $(function () {
            var options = {
               cellHeight: 'auto',
               verticalMargin: '1em',
               alwaysShowResizeHandle: false,
               resizable: {
                   handles: 'e, se, s, sw, w'
               },
               animate: true
            };
            $('.grid-stack').gridstack(options);

            // Handel Table Wiget Button
            $('.table-item').on('click', function () {
                var that = $(this);
                var src = that.find('img').attr('src');
                if($('.table-portlet-col').css('display') == 'none'){
                    $('.table-portlet-col').css('display', 'block');
                }
                else{
                    $('.table-portlet-col').css('display', 'none');
                }
            });

            // Handle Creating Chart
            $('#addWidget').on('click', onClickCreate);

            // Handel Remove Widget
            $(document).on('click', '.remove-widget', onClickRemoveWidget);

            // Date Range Picker
            $(document).on('opened', '.remodal', function () {
                $('.input-daterange').daterangepicker();
            });

            // Form Editable
            $('#title').editable({
                placement: 'right'
            });

            // Export To PDF
            var doc = new jsPDF('p', 'mm', [330, 480]);
            $('.export-btn').on('click', function(){
                $('.export-div').css('display', 'none');
                $('.widget-div').css('display', 'none');
                $('.title-div').css('display', 'none');
                var node = document.getElementById('grid-stack');
                domtoimage.toPng(node)
                .then(function (dataUrl) {
                    var img = new Image();
                    img.src = dataUrl;
                    doc.addImage(img, 'PNG', 20, 40);
                    doc.save('report.pdf');
                    $('.export-div').css('display', 'block');
                    $('.widget-div').css('display', 'block');
                    $('.title-div').css('display', 'block');
                })
                .catch(function (error) {
                    console.error('oops, something went wrong!', error);
                });
                domtoimage.toJpeg(node, { quality: 0.95 })
                .then(function (dataUrl) {
                    var link = document.createElement('a');
                    link.download = 'my-image-name.jpeg';
                    link.href = dataUrl;
                    link.click();
                });
            });
        });
    </script>
@endpush


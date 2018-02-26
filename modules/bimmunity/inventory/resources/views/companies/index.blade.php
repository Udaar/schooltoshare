@extends('layouts.app')

@section('head')
    <style>
        table.dataTable > tbody > tr.child span.dtr-title {
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')
    <section class="company-section ifm-padding-md-all ifm-white-bg ifm-border-light-grey-all">
        
        <!-- Company Title Bar -->
        <div class="ifm-padding-md-bottom ifm-margin-sm-bottom ifm-border-light-grey-bottom clearfix">
            <h3 class="ifm-grey ifm-no-margin-all inline-block capitalize normal title">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALWSURBVEhLzVY7iBRBEF3//y8iKnL4C0QUBAMNhFMQEfzuMT173h3MTk937wdWMBAvcg0EDxHMDjTRxMRALhAMDkEwNToxFBQzQTkRTfW93p5j1tvbm9kPWlBUVVdXv+nqqp7O/TcklDrqS/M2DQupii6sexKhOelH+pdQxrRjzJkRkRl3YZ0TAd2C97CbWTe8IGHeCz8yzxnjRXrEDWcnX+pJAH7GLqaF1FNueEHC3Dt2bqTfIfaTG85ODWA96cwlI5XKlnq9vnRsbGyd511fY4xZIYzZRCclbercbc+AuTDS+BtyAGNPwXc9qc/HAJS0qfcUmDsdCiv7Buv15flyebsXRVsvGLOWH0I/JW3qPQUGZU31T5z3s8W4IPVZxjRREpgLZ0k1Cuw7qnyiPZsvmFthTBMRlEw9K3A8XohKpy4HweYhYw6SRbW63g/1GfoAPrMoMNNYiIzgOQ6H+rhX1EfyWu+cA4OkbfUEMD72o6/UCbTjfbIXlg5Bfmv4UgCfq9VWCWlujo7WNmKxi16oBwta748DKWk7PVVxpQLuNNVd7/iSlBsw8cOwlLtQOA88aW7Adxpjb+xcSNrUk8Bdn3EWSgLjI28XgtIeXKdXyCKo7gDgBH2pgHm2TFFeqd1I3yME3GIPMtjOhYx7MgkMsCfcKfyKzKNi/1pfGuBOz5i7DYJg9VVjtpGFECt5A9KXCrjTqsaOZ+3/3K3FNuQGrC8NcKd9zMLi/c44e7cLsYxXL319TTXqYsqX5cMosmtkT6m9OONp+voMrIqsZPuaAfOvxhcKfamAs1BPgW3j8xXJRZxubSxm5+K9FetJYGTpNV+pSO84GcAHGNfwZUx1rJPj9BKoVarbUV+Bu24ntgFSdowXQCtgLshxqyfPmGnG0bgPHuDLhevQ1x440u8hHzZxZB7HwLBfzvNL8wryx/zxv9l8bQnsvrxFQO+YN6CD+1eUy/0BkGAess2KfTwAAAAASUVORK5CYII=">
                Companies
            </h3>
            <a href="{!! route('companies.create') !!}" class="btn ifm-btn-green ifm-grey-bg ifm-white ifm-absolute-right" style="top:19px;right:36px"><i class="fa fa-plus"></i> Add</a>
        </div>
        <!-- /Company Title Bar -->

        <div class="row">
            @include('flash::message')

            <!-- Company Table -->
            <div class="ifm-padding-sm-all">
                @include('inventory::companies.table')
            </div>
            <!-- /Company Table -->

        </div>
        
    </section>
@endsection


@if(count($tabledatas)>0)
    <div class="col-xs-12">
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
            <thead>
                <tr>
                    @foreach($tabledatas[0] as $key1=>$value)
                        <th class="ifm-main-bg ifm-white all">{{$key1}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($tabledatas as $key1=>$value)
                    <tr>
                        @foreach($value as $key2=>$datavalue)
                            <td>{!! $datavalue !!}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        {{--<div class="table-responsive">
            <table class="table" id="buildings-table">
                <thead>
                    @foreach($tabledatas[0] as $key1=>$value)
                    
                            <th>{{$key1}}</th>
                    
                    @endforeach
                        <th>Actions</th>
                </thead>
                <tbody>
                @foreach($tabledatas as $key1=>$value)
                    <tr>
                        @foreach($value as $key2=>$datavalue)
                        <td>{!! $datavalue !!}</td>
                        @endforeach
                        <td>
                        ddddddd
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>--}}
    </div>
@else 
  No Data
@endif
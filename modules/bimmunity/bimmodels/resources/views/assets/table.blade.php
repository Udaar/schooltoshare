<table class="col-xs-12 table-bordered table-striped table-condensed extandable cf">
    <thead class="cf ifm-light-grey-bg ifm-grey">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Barcode</th>
            <th>Zone Price</th>
            <th>Category</th>
            <th>Minmum Quantity</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="ifm-grey">
        @foreach($asset as $asset)
            <!-- asset Row -->
            <tr class="table-row">
                <td>
                    <p class="table-paragraph hidden-xs hidden-sm hidden-md">
                        {!! $asset->name !!}
                    </p>
                    <span class = "visible-xs visible-sm visible-md">{!! $asset->name !!}<i class="fa fa-chevron-down hidden-lg"></i></span>
                </td>
                <td class="hidden-xs hidden-sm hidden-md" data-title="Label">
                    <p class="table-paragraph">
                        {!! $asset->description !!}
                    </p>
                </td>
                <td class="hidden-xs hidden-sm hidden-md">{!! $asset->barcode !!}</td>
                <td class="hidden-xs hidden-sm hidden-md">{!! $asset->zone_price !!}</td>
                <td class="hidden-xs hidden-sm hidden-md">
                    <p class="table-paragraph">
                        {!! $asset->category->name or 'not set' !!}
                    </p>
                </td>
                <td class="hidden-xs hidden-sm hidden-md">{!! $asset->minmum_quantity !!}</td>
                <td class="hidden-xs hidden-sm hidden-md" data-title="Actions" class="numeric">
                     {!! Form::open(['route' => ['dashboard.asset.destroy', $asset->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('dashboard.asset.edit', [$asset->id]) !!}" class='btn ifm-btn-green ifm-main-bg ifm-white'>Edit</a>
                            {{-- <a href="{!! route('dashboard.asset.show', [$asset->id]) !!}" class='btn ifm-btn-default ifm-light-grey-bg ifm-grey ifm-margin-xs-right'>Show</a> --}}
                            {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-light-grey-bg ifm-grey', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                     {!! Form::close() !!}
                </td>
            </tr>
            <!-- Euipment Details -->
            <tr class="child">
                <td colspan="7">
                    <div class="child-item ifm-padding-md-all">
                        <i class="fa fa-plus-square ifm-main"></i>
                        <span class="bold">{!! $asset->name !!} <small class="ifm-font-weight-100">({!! $asset->category->name or 'not set' !!})</small></span>
                    </div>
                    <div class="child-item ifm-padding-md-all">
                        <i class="fa fa-info-circle ifm-main"></i>
                        <span class="bold">Description</span>
                        <p class="tax-description ifm-padding-lg-left ifm-padding-lg-right">
                            {!! $asset->description !!}
                        </p>
                    </div>
                    <div class="child-item ifm-padding-md-all hidden-lg">
                        {!! Form::open(['route' => ['dashboard.asset.destroy', $asset->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{!! route('dashboard.asset.edit', [$asset->id]) !!}" class='btn ifm-btn-green ifm-main-bg ifm-white'>Edit</a>
                                {{-- <a href="{!! route('dashboard.asset.show', [$asset->id]) !!}" class='btn ifm-btn-default ifm-light-grey-bg ifm-grey ifm-margin-xs-right'>Show</a> --}}
                                {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn ifm-btn-default ifm-light-grey-bg ifm-grey', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            </div>
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
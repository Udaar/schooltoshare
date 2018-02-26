{{-- Inventory --}}
<li class="nav-item {!! ( Request::is('*categories*') || Request::is('*companies*') || Request::is('*accountTypes*') || Request::is('*banks*') || Request::is('*companyAccounts*') || Request::is('*packings*') || Request::is('*financeAccounts*') || Request::is('*myCompanies*') || Request::is('*items*') || Request::is('*stores*')  || Request::is('*inOrders*') || Request::is('*inOrderItems*') || Request::is('*outOrders*') || Request::is('*outOrderItems*') || Request::is('*itemCosts*') || Request::is('*itemBuyPrices*') || Request::is('*orderPayments*') || Request::is('*finance*') )?'active' :'' !!}">
    <a href="javascript:;" class="nav-link nav-toggle ifm-text-left">
        <i class="fa fa-cubes"></i>
        <span class="title">Inventory</span>
        <span class="arrow  {!! ( Request::is('*categories*') || Request::is('*companies*') || Request::is('*accountTypes*') || Request::is('*banks*') || Request::is('*companyAccounts*') || Request::is('*packings*') || Request::is('*financeAccounts*') || Request::is('*myCompanies*') || Request::is('*items*') || Request::is('*stores*')  || Request::is('*inOrders*') || Request::is('*inOrderItems*') || Request::is('*outOrders*') || Request::is('*outOrderItems*') || Request::is('*itemCosts*') || Request::is('*itemBuyPrices*') || Request::is('*orderPayments*') || Request::is('*finance*') )?'active' :'' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!! (Request::is('*tenants*') )?'active' :'' !!}) ? 'display: block;' : '' !!}">
        {{--<li class="nav-item {!! ( Request::is('*categories*') || Request::is('*companies*') || Request::is('*accountTypes*') || Request::is('*banks*') || Request::is('*companyAccounts*') || Request::is('*packings*') || Request::is('*financeAccounts*') || Request::is('*myCompanies*'))?'active' :'' !!}">--}}
            {{--<a href="javascript:;" class="nav-link ifm-text-left nav-toggle">--}}
                {{--<i class="fa fa-cogs"></i>--}}
                {{--<span class="title">Config</span>--}}
                {{--<span class="arrow  {!! ( Request::is('*categories*') || Request::is('*companies*') || Request::is('*accountTypes*') || Request::is('*banks*') || Request::is('*companyAccounts*') || Request::is('*packings*') || Request::is('*financeAccounts*') || Request::is('*myCompanies*')) ? 'open' : '' !!}"></span>--}}
            {{--</a>--}}
            {{--<ul class="sub-menu" style= "{!! ( Request::is('*categories*') || Request::is('*companies*') || Request::is('*accountTypes*') || Request::is('*banks*') || Request::is('*companyAccounts*') || Request::is('*packings*') || Request::is('*financeAccounts*') || Request::is('*myCompanies*')) ? 'display: block;' : '' !!}">--}}
                {{--<li class="{!! Request::is('companies*') ? 'active' : '' !!}">--}}
                    {{--<a class="nav-link " href="{!! route('companies.index') !!}">--}}
                    {{--<span  class="title">Companies</span></a>--}}
                {{--</li>--}}
                {{--<li class="{!! Request::is('accountTypes*') ? 'active' : '' !!}">--}}
                    {{--<a class="nav-link " href="{!! route('accountTypes.index') !!}">--}}
            {{----}}
                    {{--<span  class="title">Account Types</span></a>--}}
                {{--</li>--}}
                {{--<li class="{!! Request::is('banks*') ? 'active' : '' !!}">--}}
                    {{--<a class="nav-link " href="{!! route('banks.index') !!}">--}}
            {{----}}
                    {{--<span  class="title">Banks</span></a>--}}
                {{--</li>--}}
                {{--<li class="{!! Request::is('*companyAccounts*') ? 'active' : '' !!}">--}}
                    {{--<a class="nav-link " href="{!! route('companyAccounts.index') !!}">--}}
            {{----}}
                    {{--<span  class="title">Company Accounts</span></a>--}}
                {{--</li>--}}
                {{--<li class="{!! Request::is('*packings*') ? 'active' : '' !!}">--}}
                    {{--<a class="nav-link " href="{!! route('packings.index') !!}">--}}
            {{----}}
                    {{--<span  class="title">Packing</span></a>--}}
                {{--</li>--}}
                {{--<li class="{!! Request::is('*financeAccounts*') ? 'active' : '' !!}">--}}
                    {{--<a class="nav-link " href="{!! route('financeAccounts.index') !!}">--}}
            {{----}}
                    {{--<span  class="title">Finance Accounts</span></a>--}}
                {{--</li>--}}
                {{--<li class="{!! Request::is('*myCompanies*') ? 'active' : '' !!}">--}}
                    {{--<a class="nav-link " href="{!! route('myCompanies.index') !!}">--}}
            {{----}}
                    {{--<span  class="title">My Company</span></a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        <li class="nav-item {!! ( Request::is('*items*') || Request::is('*stores*')  || Request::is('*inOrders*') || Request::is('*inOrderItems*') || Request::is('*outOrders*') || Request::is('*outOrderItems*') || Request::is('*itemCosts*') || Request::is('*itemBuyPrices*') || Request::is('*orderPayments*') )?'active' :'' !!}">
            <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
                <i class="fa fa-archive"></i>
                <span class="title">Inventory</span>
                <span class="arrow  {!! ( Request::is('*items*') || Request::is('*stores*') || Request::is('*inventories*') || Request::is('*inOrders*') || Request::is('*inOrderItems*') || Request::is('*outOrders*') || Request::is('*outOrderItems*') || Request::is('*items_search*') || Request::is('*itemCosts*') || Request::is('*itemBuyPrices*')  || Request::is('*orderPayments*')) ? 'open' : '' !!}"></span>
            </a>
            <ul class="sub-menu" style= "{!! ( Request::is('*items*') || Request::is('*stores*') || Request::is('*inventories*') || Request::is('*inOrders*') || Request::is('*inOrderItems*') || Request::is('*outOrders*') || Request::is('*outOrderItems*') || Request::is('*orderPayments*')) ? 'display: block;' : '' !!}">
                <li class="{!! Request::is('items*') ? 'active' : '' !!}">
                    <a class="nav-link " href="{!! route('items.index') !!}">
                    <span  class="title">Items</span></a>
                </li>
                <li class="{!! Request::is('items_search*') ? 'active' : '' !!}">
                    <a class="nav-link " href="{!! route('outOrderItems.search') !!}">
                    <span  class="title">Search</span></a>
                </li>
                <li class="{!! Request::is('item_costs*') ? 'active' : '' !!}">
                    <a class="nav-link " href="{!! route('itemCosts.index') !!}">
                    <span  class="title">Item Costs</span></a>
                </li>
                <li class="{!! Request::is('item_buy_price*') ? 'active' : '' !!}">
                    <a class="nav-link " href="{!! route('itemBuyPrices.index') !!}">
                    <span  class="title">Item Buy Price</span></a>
                </li>

                <li class="{!! Request::is('stores*') ? 'active' : '' !!}">
                    <a class="nav-link " href="{!! route('stores.index') !!}">
                    <span  class="title">Stores</span></a>
                </li>

                <li class="{!! Request::is('inOrders*') ? 'active' : '' !!}">
                    <a class="nav-link " href="{!! route('inOrders.index') !!}">
                    <span  class="title">Purchasing Orders</span></a>
                </li>

                {{--<li class="{!! Request::is('inOrderItems*') ? 'active' : '' !!}">--}}
                    {{--<a class="nav-link " href="{!! route('inOrderItems.index') !!}">--}}
                    {{--<span  class="title">Purchase Order Items</span></a>--}}
                {{--</li>--}}

                <li class="{!! Request::is('outOrders*') ? 'active' : '' !!}">
                    <a class="nav-link " href="{!! route('outOrders.index') !!}">
                    <span  class="title">Sales Orders</span></a>
                </li>

                {{--<li class="{!! Request::is('outOrderItems*') ? 'active' : '' !!}">--}}
                    {{--<a class="nav-link " href="{!! route('outOrderItems.index') !!}">--}}
                    {{--<span  class="title">Sales Order Items</span></a>--}}
                {{--</li>--}}

                {{--<li class="{!! Request::is('orderPayments*') ? 'active' : '' !!}">--}}
                    {{--<a class="nav-link " href="{!! route('orderPayments.index') !!}">--}}
                    {{--<span  class="title">Order Payments</span></a>--}}
                {{--</li>--}}
            </ul>
        </li>
        <li class="nav-item {!! ( Request::is('*finance*') )?'active' :'' !!}">
            <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
                <i class="fa fa-money"></i>
                <span class="title">Finance</span>
                <span class="arrow  {!! ( Request::is('*finance*')) ? 'open' : '' !!}"></span>
            </a>
            <ul class="sub-menu" style= "{!! ( Request::is('*finance*')) ? 'display: block;' : '' !!}">
                <li class="{!! Request::is('finance/approved_in_order_finance') ? 'active' : '' !!}">
                    <a class="nav-link " href="{!! route('approved_in_order_finance') !!}">
                    <span  class="title">Purchase Order Finance</span></a>
                </li>
                <li class="{!! Request::is('finance/approved_out_order_finance') ? 'active' : '' !!}">
                    <a class="nav-link " href="{!! route('approved_out_order_finance') !!}">
                    <span  class="title">Sales Order Finance</span></a>
                </li>
            </ul>
        </li>
    </ul>
</li>
<link rel="stylesheet" href="/metronic/reset/themes/red.css">
<li class="nav-item start {!! Request::is('*sp') ? ' active' : '' !!}">
    <a href="{!! url('/sp') !!}" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-home"></i>
        <span class="title">Home</span>
    </a>
</li>
<li class="nav-item start {!! Request::is('*sp/buildings*') ? ' active' : '' !!}">
    <a href="{!! url('/sp/buildings') !!}" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-building"></i>
        <span class="title">Facilities</span>
    </a>
</li>

<li class="nav-item {!! (Request::is('*sp/requests*')) || Request::is('*/task*')?'active' :'' !!}">
    <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-cart-arrow-down"></i>
        <span class="title">Work Orders</span>
        <span class="arrow  {!! (Request::is('*/requests*')) ? 'open' : '' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!!  Request::is('*/task*') ? 'display: block;' : '' !!}">
       
        <li class="{!! Request::is('*/task*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('/task') !!}">
                <span  class="title">Tasks</span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {!! ( Request::is('*payments*')|| Request::is('*invoice*')|| Request::is('*expense*'))?'active' :'' !!}">
    <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-money"></i>
        <span class="title">Ledger</span>
        <span class="arrow  {!! ( Request::is('*payments*')|| Request::is('*invoice*')|| Request::is('*expense*')) ? 'open' : '' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!! ( Request::is('*payments*')|| Request::is('*invoice*')|| Request::is('*expense*')) ? 'display: block;' : '' !!}">
        <li class="{!! (Request::is('*invoices*')) ? 'open' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('/invoices') !!}">
                <span  class="title">Invoice</span>
            </a>
        </li>
        <li class="{!! (Request::is('*payments*')) ? 'open' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('/payments') !!}">
                <span  class="title">Payments</span>
            </a>
        </li>
        <li class="{!! (Request::is('*expenses*')) ? 'open' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('/expenses') !!}">
                <span  class="title">Expense</span>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item {!! (Request::is('*equipment*')||Request::is('*inventories*')  ||Request::is('*stocks*') || Request::is('*stockTransactions*'))?'active' :'' !!}">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-truck"></i>
        <span class="title">Inventory</span>
        <span class="arrow  {!! (Request::is('*stocks*') ||Request::is('*inventories*') || Request::is('*stockTransactions*'))?'active' :'' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!! (Request::is('*tenants*') )?'active' :'' !!}) ? 'display: block;' : '' !!}">
        <li class="{!! Request::is('sp/inventories*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('sp.inventories.index') !!}">
            <span  class="title">Inventories</span></a>
        </li>
        <li class="{!! Request::is('sp/stocks*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('sp.stocks.index') !!}">
            <span  class="title">Stocks</span></a>
        </li>
         <li class="{!! Request::is('sp/stockTransactions*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('sp.stockTransactions.index') !!}">
            <span  class="title">stockTransactions</span></a>
        </li>
    </ul>
</li>
<li class="{!! Request::is('*reports*') ? 'active' : '' !!}">
    <a class="nav-link ifm-text-left" href="{!! url('sp/reports') !!}">
        <i class="fa fa-line-chart"></i>
        <span  class="title">Reports</span>
    </a>
</li>
<li class="nav-item {!! (Request::is('*sp/users*'))?'active' :'' !!}">
    <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-user"></i>
        <span class="title">Directory</span>
        <span class="arrow  {!! (Request::is('*sp/users*')) ? 'open' : '' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!! (Request::is('*sp/users*')) ? 'display: block;' : '' !!}">
        <li class="{!! (Request::is('*sp/users*')) ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('sp/users') !!}">
                <span  class="title">My Team</span>
            </a>
        </li>
        <li class="{!! Request::is('*sp/usersByType/Property Manager*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('sp/usersByType/Property Manager') !!}">
                <span  class="title">Property Managers</span>
            </a>
        </li>
        <li class="{!! Request::is('*sp/usersByType/Facility Manager*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('sp/usersByType/Facility Manager') !!}">
                <span  class="title">Facility Managers</span>
            </a>
        </li>
        <li class="{!! Request::is('*sp/usersByType/Service Provider*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('sp/usersByType/Service Provider') !!}">
                <span  class="title">Service Providers</span>
            </a>
        </li>
        <li class="{!! Request::is('*sp/usersByType/Tenant*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('sp/usersByType/Tenant') !!}">
                <span  class="title">Tenants</span>
            </a>
        </li>
    </ul>
</li>
<li class="{!! Request::is('*calendar*') ? 'active' : '' !!}">
    <a class="nav-link ifm-text-left" href="{!! url('sp/calendar') !!}">
        <i class="fa fa-calendar"></i>
        <span  class="title">Calendar</span>
    </a>
</li>
<li class="nav-item {!! (Request::is('*faq*') || Request::is('*contact*'))?'active' :'' !!}">
    <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-life-bouy"></i>
        <span class="title">Help Desk</span>
        <span class="arrow  {!! (Request::is('*faq*') || Request::is('*contact*'))?'active' :'' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!!  (Request::is('*faq*')) ? 'display: block;' : '' !!}">
        <li class="{!! Request::is('*faq*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('sp/faqs') !!}">
                <span  class="title">FAQ</span>
            </a>
        </li>
        <li class="{!! Request::is('*contact*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('sp/contactuses/create') !!}">
                <span  class="title">Contact Us</span>
            </a>
        </li>
    </ul>
</li>
{{-- <li class="nav-item {!! (Request::is('*categories*') || Request::is('*taxonomies*'))?'active' :'' !!}">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-ticket"></i>
        <span class="title">Ticket Manager</span>
        <span class="arrow  {!! (Request::is('*categories*') || Request::is('*taxonomies*')) ? 'open' : '' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!!  (Request::is('*categories*') || Request::is('*taxonomies*')) ? 'display: block;' : '' !!}">
        <li class="{!! Request::is('*dashboard/categories*') ? 'active' : '' !!}">
            <a class="nav-link " href="{!! route('sp.categories.index') !!}">
                <span  class="title">Incoming</span>
            </a>
        </li>
        <li class="nav-item {!! (Request::is('*categories*') || Request::is('*taxonomies*'))?'active' :'' !!}">
            <a href="javascript:;" class="nav-link nav-toggle">
                <span class="title">Outdoing</span>
                <span class="arrow  {!! (Request::is('*categories*') || Request::is('*taxonomies*')) ? 'open' : '' !!}"></span>
            </a>
            <ul class="sub-menu" style= "{!!  (Request::is('*categories*') || Request::is('*taxonomies*')) ? 'display: block;' : '' !!}">
                <li class="{!! Request::is('*dashboard/categories*') ? 'active' : '' !!}">
                    <a class="nav-link " href="{!! route('sp.categories.index') !!}">
                        <span  class="title">Maintenance & Repair</span>
                    </a>
                </li>
                <li class="{!! Request::is('*dashboard/categories*') ? 'active' : '' !!}">
                    <a class="nav-link " href="{!! route('sp.categories.index') !!}">
                        <span  class="title">Booking & Reservation</span>
                    </a>
                </li>
                <li class="{!! Request::is('*dashboard/categories*') ? 'active' : '' !!}">
                    <a class="nav-link " href="{!! route('sp.categories.index') !!}">
                        <span  class="title">Service</span>
                    </a>
                </li>
                <li class="{!! Request::is('*dashboard/categories*') ? 'active' : '' !!}">
                    <a class="nav-link " href="{!! route('sp.categories.index') !!}">
                        <span  class="title">Complaint</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{!! Request::is('*dashboard/categories*') ? 'active' : '' !!}">
            <a class="nav-link " href="{!! route('sp.categories.index') !!}">
                <span  class="title">Ticketing History</span>
            </a>
        </li>
    </ul>
</li> --}}

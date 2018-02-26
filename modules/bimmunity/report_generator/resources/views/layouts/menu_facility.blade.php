<link rel="stylesheet" href="/metronic/reset/themes/yellow.css">
<li class="nav-item start {!! Request::is('*fm') ? ' active' : '' !!}">
    <a href="{!! url('/fm') !!}" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-home"></i>
        <span class="title">Home</span>
    </a>
</li>
<li class="{!! Request::is('*buildings*') ? 'active' : '' !!}">
    <a class="nav-link ifm-text-left" href="{!! url('fm/buildings') !!}">
    <i class="fa fa-building-o" aria-hidden="true"></i>
    <span  class="title">Facilities</span></a>
</li>

<li class="nav-item {!!(Request::is('*hard_service*')||  Request::is('*Soft Service*')|| Request::is('*Additional Service*')) ?'active' :'' !!}">
    <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-cubes"></i>
        <span class="title">Facility Managment</span>
        <span class="arrow  {!! (Request::is('*Hard Service*')||  Request::is('*Soft Service*')|| Request::is('*Additional Service*')) ? 'open' : '' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!!  (Request::is('*Hard Service*')) ? 'display: block;' : '' !!}">
        <li class="{!! (Request::is('*Hard Service*') ) ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('fm/companyservice/Hard Service') !!}">
                <span  class="title">Hard Services</span>
            </a>
        </li>
        <li class="{!! (Request::is('*Soft Service*') ) ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('fm/companyservice/Soft Service') !!}">
                <span  class="title">Soft Services</span>
            </a>
        </li>
        <li class="{!! Request::is('*Additional Service*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('fm/companyservice/Additional Service') !!}">
                <span  class="title">Additional Services</span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {!!(Request::is('*requests*')||  Request::is('*maintenance*')|| Request::is('*complaint*') || Request::is('pm/service/*') || Request::is('*booking*')) ?'active' :'' !!}">
    <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-ticket"></i>
        <span class="title">Tickets</span>
        <span class="arrow  {!! (Request::is('*requests*')||  Request::is('*maintenance*') || Request::is('*complaint*') || Request::is('*service*') || Request::is('*booking*')) ? 'open' : '' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!!  (Request::is('*/requests*')) ? 'display: block;' : '' !!}">
        <li class="{!! (Request::is('*requests*') ) ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('/requests') !!}">
                <span  class="title">Incoming</span>
            </a>
        </li>
        <li class="nav-item {!! (Request::is('*maintenance*')||  Request::is('*complaint*') || Request::is('pm/service/*') || Request::is('*booking*'))?'active' :'' !!}">
            <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
                <span class="title">Outgoing</span>
                <span class="arrow  {!! (Request::is('*maintenance*')||   Request::is('*complaint*') || Request::is('pm/service/*') || Request::is('*booking*')) ? 'open' : '' !!}"></span>
            </a>
            <ul class="sub-menu" style= "{!!  (Request::is('*maintenance*') || Request::is('*fitoutrequest*') || Request::is('*fitout/*') || Request::is('*complaint*') || Request::is('pm/service/*') || Request::is('*booking*')) ? 'display: block;' : '' !!}">
                <li class="{!! Request::is('*maintenance*') ? 'active' : '' !!}">
                    <a class="nav-link ifm-text-left" href="{!! url('/maintenance/create') !!}">
                        <span  class="title"> Maintenance & Repair</span>
                    </a>
                </li>
                <li class="{!! Request::is('*booking*') ? 'active' : '' !!}">
                    <a class="nav-link ifm-text-left" href="{!! url('/booking/create') !!}">
                        <span  class="title">Booking & Reservation</span>
                    </a>
                </li>
                <li class="{!! Request::is('*service*') ? 'active' : '' !!}">
                    <a class="nav-link ifm-text-left" href="{!! url('/service/create') !!}">
                        <span  class="title">Service</span>
                    </a>
                </li>
                <li class="{!! Request::is('*complaint*') ? 'active' : '' !!}">
                    <a class="nav-link ifm-text-left" href="{!! url('/complaint/create') !!}">
                        <span  class="title">Complaint</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{!! Request::is('*/requests*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('/requests') !!}">
                <span  class="title">Ticketing History</span>
            </a>
        </li>
    </ul>
</li>

<!--<li class="nav-item {!! (Request::is('*requests*')) || Request::is('*maintenance*') || Request::is('*complaint*') || Request::is('*service*') || Request::is('*booking*')  ?'active' :'' !!}">
    <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-ticket"></i>
        <span class="title">Tickets</span>
        <span class="arrow  {!! (Request::is('*requests*'))?'open' :'' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!!  (Request::is('*fm/requests*')) ? 'display: block;' : '' !!}">
        <li class="{!! Request::is('*fm/requests*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('fm/requests') !!}">
                <span  class="title">Incoming</span>
            </a>
        </li>
        <li class="nav-item {!! (Request::is('*maintenanc*') || Request::is('*complaint*') || Request::is('*service*') || Request::is('*booking*'))?'open' :'' !!}">
            <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
                <span class="title">Outgoing</span>
                <span class="arrow  {!! (Request::is('*maintenance*')) ? 'open' : '' !!}"></span>
            </a>
            <ul class="sub-menu" style= "{!!  (Request::is('*maintenance*') || Request::is('*complaint*') || Request::is('*service*') || Request::is('*booking*')) ? 'display: block;' : '' !!}">
                <li class="{!! Request::is('*maintenance*') ? 'active' : '' !!}">
                    <a class="nav-link ifm-text-left" href="{!! url('fm/maintenance/create') !!}">
                        <span  class="title">Maintenance & Repair </span>
                    </a>
                </li>
                <li class="{!! Request::is('*booking*') ? 'active' : '' !!}">
                    <a class="nav-link ifm-text-left" href="{!! url('fm/booking/create') !!}">
                        <span  class="title">Booking & Reservation</span>
                    </a>
                </li>
                <li class="{!! Request::is('*service*') ? 'active' : '' !!}">
                    <a class="nav-link ifm-text-left" href="{!! url('fm/service/create') !!}">
                        <span  class="title">Service</span>
                    </a>
                </li>
                <li class="{!! Request::is('*complaint*') ? 'active' : '' !!}">
                    <a class="nav-link ifm-text-left" href="{!! url('fm/complaint/create') !!}">
                        <span  class="title">Complaint</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{!! Request::is('*fm/requests*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('/fm/requests') !!}">
                <span  class="title">Ticketing History</span>
            </a>
        </li>
    </ul>
</li>-->

{{-- Accounts --}}
<li class="nav-item {!! ( Request::is('invoice_statuses*') || Request::is('payment_methods*') || Request::is('payment_statuses*') || Request::is('expenses_types*') || Request::is('currencies*') || Request::is('products*') || Request::is('expenses*') || Request::is('payments*') || Request::is('users*') || Request::is('vendors*') || Request::is('customers*') || Request::is('accounts*') || Request::is('invoices*')  )  ?'active' :'' !!}">
    <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-cogs"></i>
        <span class="title">Accounting</span>
        <span class="arrow  {!! ( Request::is('invoice_statuses*') || Request::is('payment_methods*') || Request::is('payment_statuses*') || Request::is('expenses_types*') || Request::is('currencies*') || Request::is('products*') || Request::is('expenses*') || Request::is('payments*') || Request::is('users*') || Request::is('vendors*') || Request::is('customers*') || Request::is('accounts*') || Request::is('invoices*') ) ? 'open' : '' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!! ( Request::is('invoice_statuses*') || Request::is('payment_methods*') || Request::is('payment_statuses*') || Request::is('expenses_types*') || Request::is('currencies*') || Request::is('products*') || Request::is('expenses*') || Request::is('payments*') || Request::is('users*') || Request::is('vendors*') || Request::is('customers*') || Request::is('accounts*') || Request::is('invoices*') ) ? 'display: block;' : '' !!}">
            <li class="nav-item {!! Request::is('users*') || Request::is('vendors*') || Request::is('customers*') || Request::is('accounts*') ?'active open':'' !!}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">Accounts</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: {!! Request::is('vendors*') || Request::is('customers*') || Request::is('accounts*') ?'':'none;' !!}">
                    <li class="nav-item  {!! Request::is('vendors*') ? 'active' : '' !!}">
                        <a class="nav-link nav-toggle" href="{!! route('vendors.index') !!}">
                            <i class="fa fa-group"></i>
                            <span  class="title">Vendors</span></a>
                        </a>
                    </li>
                    <li class="nav-item  {!! Request::is('customers*') ? 'active' : '' !!}">
                        <a class="nav-link nav-toggle" href="{!! route('customers.index') !!}">
                            <i class="fa fa-group"></i>
                            <span  class="title">Customers</span></a>
                        </a>
                    </li>
                    <li class="nav-item  {!! Request::is('accounts*') ? 'active' : '' !!}">
                        <a class="nav-link nav-toggle" href="{!! route('accounts.index') !!}">
                            <i class="fa fa-group"></i>
                            <span  class="title">Accounts</span></a>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Invoices --}}
            <li class="nav-item  {!! Request::is('invoices*') ? 'active' : '' !!}">
                <a class="nav-link nav-toggle" href="{!! route('invoices.index') !!}">
                    <i class="icon-docs"></i>
                    <span  class="title">Invoices</span></a>
            </li>

            {{-- Payments --}}
            <li class="nav-item  {!! Request::is('payments*') ? 'active' : '' !!}">
                <a class="nav-link nav-toggle" href="{!! route('payments.index') !!}">
                    <i class="icon-credit-card"></i>
                    <span  class="title">Payments</span></a>
            </li>

            {{-- Expenses --}}
            <li class="nav-item  {!! Request::is('expenses*') ? 'active' : '' !!}">
                <a class="nav-link nav-toggle" href="{!! route('expenses.index') !!}">
                    <i class="icon-wallet"></i>
                    <span  class="title">Expenses</span>
                </a>
            </li>

            {{-- Products --}}
            <li class="nav-item  {!! Request::is('products*') ? 'active' : '' !!}">
                <a class="nav-link nav-toggle" href="{!! route('products.index') !!}">
                    <i class="fa fa-shopping-cart"></i>
                    <span  class="title">Products</span></a>
            </li>

            {{-- Configurations --}}
            <li class="nav-item {!! Request::is('invoice_statuses*') || Request::is('payment_methods*') || Request::is('payment_statuses*') || Request::is('expenses_types*') || Request::is('currencies*')?'active open':'' !!}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">configurations</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: {!! Request::is('invoice_statuses*') || Request::is('payment_methods*') || Request::is('payment_statuses*') || Request::is('expenses_types*') || Request::is('currencies*')?'':'none;' !!}">
                    <li class="nav-item  {!! Request::is('invoice_statuses*') ? 'active' : '' !!}">
                        <a class="nav-link nav-toggle" href="{!! route('invoice_statuses.index') !!}">
                            <i class="fa fa-bars"></i>
                            <span  class="title">Invoice Statuses</span>
                        </a>
                    </li>
                    <li class="nav-item  {!! Request::is('payment_methods*') ? 'active' : '' !!}">
                        <a class="nav-link nav-toggle" href="{!! route('payment_methods.index') !!}">
                            <i class="fa fa-exchange"></i>
                            <span  class="title">Payment Methods</span></a>
                    </li>
                    <li class="nav-item  {!! Request::is('payment_statuses*') ? 'active' : '' !!}">
                        <a class="nav-link nav-toggle" href="{!! route('payment_statuses.index') !!}">
                            <i class="fa fa-bars"></i>
                            <span  class="title">Payment Statuses</span></a>
                    </li>
                    <li class="nav-item  {!! Request::is('expenses_types*') ? 'active' : '' !!}">
                        <a class="nav-link nav-toggle" href="{!! route('expenses_types.index') !!}">
                            <i class="fa fa-bars"></i>
                            <span  class="title">Expenses Categories</span>
                        </a>
                    </li>
                    {{-- Currencies  --}}
                    <li class="nav-item {!! Request::is('currencies*') ? 'active' : '' !!}">
                        <a class="nav-link nav-toggle" href="{!! route('currencies.index') !!}">
                            <i class="fa fa-dollar"></i>
                            <span  class="title">Currencies</span></a>
                    </li>
                </ul>
            </li>
    </ul>
</li>
<li class="nav-item {!! (Request::is('*equipment*')||Request::is('*inventories*')  ||Request::is('*stocks*') || Request::is('*stockTransactions*'))?'active' :'' !!}">
    <a href="javascript:;" class="nav-link nav-toggle ifm-text-left">
        <i class="fa fa-truck"></i>
        <span class="title">Inventory</span>
        <span class="arrow  {!! (Request::is('*stocks*') ||Request::is('*inventories*') || Request::is('*stockTransactions*'))?'active' :'' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!! (Request::is('*tenants*') )?'active' :'' !!}) ? 'display: block;' : '' !!}">
        <li class="{!! Request::is('fm/inventories*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! route('fm.inventories.index') !!}">
            <span  class="title">Inventories</span></a>
        </li>
        <li class="{!! Request::is('fm/stocks*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! route('fm.stocks.index') !!}">
            <span  class="title">Stocks</span></a>
        </li>
        <li class="{!! Request::is('fm/stockTransactions*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! route('fm.stockTransactions.index') !!}">
            <span  class="title">stockTransactions</span></a>
        </li>
        <li class="{!! Request::is('fm/supplier*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! route('fm.supplier.index') !!}">
            <span  class="title">Suppliers</span></a>
        </li>
    </ul>
</li>
<li class="{!! Request::is('*reports*') ? 'active' : '' !!}">
    <a class="nav-link ifm-text-left" href="{!! url('fm/reports') !!}">
        <i class="fa fa-line-chart"></i>
        <span  class="title">Reports</span>
    </a>
</li>
<li class="nav-item {!! (Request::is('*fm/users*'))?'active' :'' !!}">
    <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-user"></i>
        <span class="title">Directory</span>
        <span class="arrow  {!! (Request::is('*fm/users*')) ? 'open' : '' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!! (Request::is('*fm/users*')) ? 'display: block;' : '' !!}">
        <li class="{!! (Request::is('*fm/users*')) ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('fm/users') !!}">
                <span  class="title">My Team</span>
            </a>
        </li>
        <li class="{!! Request::is('*fm/usersByType/Property Manager*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('fm/usersByType/Property Manager') !!}">
                <span  class="title">Property Managers</span>
            </a>
        </li>
        <li class="{!! Request::is('*fm/usersByType/Facility Manager*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('fm/usersByType/Facility Manager') !!}">
                <span  class="title">Facility Managers</span>
            </a>
        </li>
        <li class="{!! Request::is('*fm/usersByType/Service Provider*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('fm/usersByType/Service Provider') !!}">
                <span  class="title">Service Providers</span>
            </a>
        </li>
        <li class="{!! Request::is('*fm/usersByType/Tenant*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('fm/usersByType/Tenant') !!}">
                <span  class="title">Tenants</span>
            </a>
        </li>
    </ul>
</li>


<li class="nav-item {!! (Request::is('*task/create*') || Request::is('*task*') )?'active' :'' !!}">
    <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-user"></i>
        <span class="title">Tasks</span>
        <span class="arrow  {!! (Request::is('*task/create*') || Request::is('*task*') ) ? 'open' : '' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!! (Request::is('*task/create*') || Request::is('*task*') ) ? 'display: block;' : '' !!}">
        <li class="{!! (Request::is('*task/create*')) ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!!  route('task.create') !!}">
                <span  class="title">Add Task</span>
            </a>
        </li>
        <li class="{!! Request::is('*task*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('task') !!}">
                <span  class="title">Task List</span>
            </a>
        </li>
    </ul>
</li>


<li class="{!! Request::is('*calendar*') ? 'active' : '' !!}">
    <a class="nav-link ifm-text-left" href="{!! url('fm/calendar') !!}">
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
            <a class="nav-link ifm-text-left" href="{!! url('fm/faqs') !!}">
                <span  class="title">FAQ</span>
            </a>
        </li>
        <li class="{!! Request::is('*contact*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('fm/contactuses/create') !!}">
                <span  class="title">Contact Us</span>
            </a>
        </li>
    </ul>
</li>

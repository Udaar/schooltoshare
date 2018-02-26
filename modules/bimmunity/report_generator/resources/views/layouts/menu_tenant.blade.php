<link rel="stylesheet" href="/metronic/reset/themes/blue.css">
<li class="nav-item start {!! Request::is('*tenant') ? ' active' : '' !!}">
    <a href="{!! url('/tenant') !!}" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-home"></i>
        <span class="title">Home</span>
    </a>
</li>
<li class="{!! Request::is('*tenant/zones*') ? 'active' : '' !!}">
    <a class="nav-link ifm-text-left" href="/tenant/zones">
    <i class="fa fa-building-o" aria-hidden="true"></i>
    <span  class="title">My Apartment</span></a>
</li>
<li class="nav-item {!!(Request::is('*requests*')|| Request::is('*fitoutrequest*') || Request::is('*maintenance*')|| Request::is('*fitout/*') || Request::is('*complaint*') || Request::is('pm/service/*') || Request::is('*booking*')) ?'active' :'' !!}">
    <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-ticket"></i>
        <span class="title">My Requests</span>
        <span class="arrow  {!! (Request::is('*requests*')|| Request::is('*fitoutrequest*') ||Request::is('*fitout/*') || Request::is('*maintenance*') || Request::is('*complaint*') || Request::is('*service*') || Request::is('*booking*')) ? 'open' : '' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!!  (Request::is('*/requests*')) ? 'display: block;' : '' !!}">
        <li class="{!! (Request::is('*requests*') ) ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('/requests') !!}">
                <span  class="title">Incoming</span>
            </a>
        </li>
        <li class="nav-item {!! (Request::is('*maintenance*')|| Request::is('*fitoutrequest*')|| Request::is('*fitout/*') || Request::is('*complaint*') || Request::is('pm/service/*') || Request::is('*booking*'))?'active' :'' !!}">
            <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
                <span class="title">Outgoing</span>
                <span class="arrow  {!! (Request::is('*maintenance*')|| Request::is('*fitoutrequest*')|| Request::is('*fitout/*') || Request::is('*complaint*') || Request::is('pm/service/*') || Request::is('*booking*')) ? 'open' : '' !!}"></span>
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

<!--<li class="nav-item {!! (Request::is('*requests*')||Request::is('*maintenance*') || Request::is('*booking*')|| Request::is('*service*')|| Request::is('*complaint*'))?'active' :'' !!}">
    <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-gear"></i>
        <span class="title">My Requests</span>
        <span class="arrow  {!! (Request::is('*requests*')||Request::is('*maintenance*') || Request::is('*booking*')|| Request::is('*service*')|| Request::is('*complaint*')) ? 'open' : '' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!!  (Request::is('*requests*') ||Request::is('*maintenance*') || Request::is('*booking*')|| Request::is('*service*')|| Request::is('*complaint*')) ? 'display: block;' : '' !!}">
        <li class="{!! Request::is('*maintenance*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="/tenant/maintenance/create">
                <span  class="title">Maintenance & Repair</span>
            </a>
        </li>
        <li class="{!! Request::is('*booking*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="/tenant/booking/create">
                <span  class="title">Booking & Reservation</span>
            </a>
        </li>
        <li class="{!! Request::is('*service*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="/tenant/service/create">
                <span  class="title">Service</span>
            </a>
        </li>
        <li class="{!! Request::is('*complaint*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left"  href="/tenant/complaint/create">
                <span  class="title">Complaint</span>
            </a>
        </li>
        <li class="{!! Request::is('*requests*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="/tenant/requests">
                <span  class="title">Request History</span>
            </a>
        </li>
    </ul>
</li>-->
<li class="nav-item {!! (Request::is('*payments*') || Request::is('*invoices*') || Request::is('*expenses*'))?'active' :'' !!}">
    <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-money"></i>
        <span class="title">My Payments</span>
        <span class="arrow  {!! (Request::is('*payments*') || Request::is('*invoices*') || Request::is('*expenses*')) ? 'open' : '' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!!  (Request::is('*invoices*') || Request::is('*payments*')) ? 'display: block;' : '' !!}">
        <li class="{!! Request::is('*invoices*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('tenant/invoices') !!}">
                <span  class="title">Pay My Bills</span>
            </a>
        </li>
        <li class="{!! Request::is('*payments*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('tenant/payments') !!}">
                <span  class="title">Payment History</span>
            </a>
        </li>
        <li class="{!! Request::is('*expenses*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('tenant/expenses') !!}">
                <span  class="title">My Budget</span>
            </a>
        </li>
    </ul>
</li>
<li class="{!! Request::is('*reports*') ? 'active' : '' !!}">
    <a class="nav-link ifm-text-left" href="{!! url('tenant/reports') !!}">
        <i class="fa fa-line-chart"></i>
        <span  class="title">Reports</span>
    </a>
</li>
<li class="{!! Request::is('*calendar*') ? 'active' : '' !!}">
    <a class="nav-link ifm-text-left" href="{!! url('tenant/calendar') !!}">
        <i class="fa fa-calendar"></i>
        <span  class="title">My Calendar</span>
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
            <a class="nav-link ifm-text-left" href="{!! url('tenant/faqs') !!}">
                <span  class="title">FAQ</span>
            </a>
        </li>
        <li class="{!! Request::is('*contact*') ? 'active' : '' !!}">
            <a class="nav-link ifm-text-left" href="{!! url('tenant/contactuses/create') !!}">
                <span  class="title">Contact Us</span>
            </a>
        </li>
    </ul>
</li>

{{-- Financial --}}
<li class="nav-item {!! ( Request::is('invoice_statuses*') || Request::is('payment_methods*') || Request::is('payment_statuses*') || Request::is('expenses_types*') || Request::is('currencies*') || Request::is('products*') || Request::is('expenses*') || Request::is('payments*') ||  Request::is('vendors*') || Request::is('customers*') || Request::is('accounts*') || Request::is('invoices*')  )  ?'active' :'' !!}">
    <a href="javascript:;" class="nav-link ifm-text-left nav-toggle">
        <i class="fa fa-money"></i>
        <span class="title">Financial</span>
        <span class="arrow  {!! ( Request::is('invoice_statuses*') || Request::is('payment_methods*') || Request::is('payment_statuses*') || Request::is('expenses_types*') || Request::is('currencies*') || Request::is('products*') || Request::is('expenses*') || Request::is('payments*') ||  Request::is('vendors*') || Request::is('customers*') || Request::is('accounts*') || Request::is('invoices*') ) ? 'open' : '' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!! ( Request::is('invoice_statuses*') || Request::is('payment_methods*') || Request::is('payment_statuses*') || Request::is('expenses_types*') || Request::is('currencies*') || Request::is('products*') || Request::is('expenses*') || Request::is('payments*') ||  Request::is('vendors*') || Request::is('customers*') || Request::is('accounts*') || Request::is('invoices*') ) ? 'display: block;' : '' !!}">
        @if(\Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\VendorController') ||
        \Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\CustomerController') ||
        \Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\AccountController') )
        <li class="nav-item {!!  Request::is('vendors*') || Request::is('customers*') || Request::is('accounts*') ?'active open':'' !!}">
            <a href="javascript:;" class="nav-link nav-toggle">
                <span class="title">Accounts</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu" style="display: {!! Request::is('vendors*') || Request::is('customers*') || Request::is('accounts*') ?'':'none;' !!}">
                @if(\Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\VendorController'))
                <li class="nav-item  {!! Request::is('vendors*') ? 'active' : '' !!}">
                    <a class="nav-link nav-toggle" href="{!! route('vendors.index') !!}">
                        <span  class="title">Vendors</span></a>
                    </a>
                </li>
                @endif
                @if(\Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\CustomerController'))
                <li class="nav-item  {!! Request::is('customers*') ? 'active' : '' !!}">
                    <a class="nav-link nav-toggle" href="{!! route('customers.index') !!}">
                        <span  class="title">Customers</span></a>
                    </a>
                </li>
                @endif
                @if(\Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\AccountController'))
                <li class="nav-item  {!! Request::is('accounts*') ? 'active' : '' !!}">
                    <a class="nav-link nav-toggle" href="{!! route('accounts.index') !!}">
                        <span  class="title">Accounts</span></a>
                    </a>
                </li>
                @endif
            </ul>
        </li>

        @endif
        @if(\Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\InvoiceController'))
        {{-- Invoices --}}
        <li class="nav-item  {!! Request::is('invoices*') ? 'active' : '' !!}">
            <a class="nav-link nav-toggle" href="{!! route('invoices.index') !!}">
                <span  class="title">Invoices</span></a>
        </li>
        @endif
        @if(\Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\PaymentController'))

        {{-- Payments --}}
        <li class="nav-item  {!! Request::is('payments*') ? 'active' : '' !!}">
            <a class="nav-link nav-toggle" href="{!! route('payments.index') !!}">
                <span  class="title">Payments</span></a>
        </li>
        @endif
        @if(\Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\ExpensesController'))

        {{-- Expenses --}}
        <li class="nav-item  {!! Request::is('expenses*') ? 'active' : '' !!}">
            <a class="nav-link nav-toggle" href="{!! route('expenses.index') !!}">
                <span  class="title">Expenses</span>
            </a>
        </li>

        @endif
        @if(\Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\ProductController'))
        {{-- Products --}}
        <li class="nav-item  {!! Request::is('products*') ? 'active' : '' !!}">
            <a class="nav-link nav-toggle" href="{!! route('products.index') !!}">
                <span  class="title">Products</span></a>
        </li>

        @endif
        @if(\Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\InvoiceStatusController') ||
        \Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\PaymentMethodController') ||
        \Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\PaymentStatusController') ||
        \Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\ExpensesTypeController') ||
        \Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\CurrencyController'))
        {{-- Configurations --}}
        <li class="nav-item {!! Request::is('invoice_statuses*') || Request::is('payment_methods*') || Request::is('payment_statuses*') || Request::is('expenses_types*') || Request::is('currencies*')?'active open':'' !!}">
            <a href="javascript:;" class="nav-link nav-toggle">
                <span class="title">configurations</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu" style="display: {!! Request::is('invoice_statuses*') || Request::is('payment_methods*') || Request::is('payment_statuses*') || Request::is('expenses_types*') || Request::is('currencies*')?'':'none;' !!}">
                @if(\Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\InvoiceStatusController'))
                <li class="nav-item  {!! Request::is('invoice_statuses*') ? 'active' : '' !!}">
                    <a class="nav-link nav-toggle" href="{!! route('invoice_statuses.index') !!}">
                        <span  class="title">Invoice Statuses</span>
                    </a>
                </li>
                @endif
                @if(\Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\PaymentMethodController'))
                <li class="nav-item  {!! Request::is('payment_methods*') ? 'active' : '' !!}">
                    <a class="nav-link nav-toggle" href="{!! route('payment_methods.index') !!}">
                        <span  class="title">Payment Methods</span></a>
                </li>
                @endif
                @if(\Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\PaymentStatusController'))
                <li class="nav-item  {!! Request::is('payment_statuses*') ? 'active' : '' !!}">
                    <a class="nav-link nav-toggle" href="{!! route('payment_statuses.index') !!}">
                        <span  class="title">Payment Statuses</span></a>
                </li>
                @endif
                @if(\Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\ExpensesTypeController'))
                <li class="nav-item  {!! Request::is('expenses_types*') ? 'active' : '' !!}">
                    <a class="nav-link nav-toggle" href="{!! route('expenses_types.index') !!}">
                        <span  class="title">Expenses Categories</span>
                    </a>
                </li>
                @endif
                @if(\Illuminate\Support\Facades\Gate::check('Bimmunity\Invoice\Http\Controllers\CurrencyController'))
                {{-- Currencies  --}}
                <li class="nav-item {!! Request::is('currencies*') ? 'active' : '' !!}">
                    <a class="nav-link nav-toggle" href="{!! route('currencies.index') !!}">
                        <span  class="title">Currencies</span></a>
                </li>
                @endif
            </ul>
        </li>
        @endif
    </ul>
</li>
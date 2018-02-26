<li class="nav-item start {!! Request::is('dashboard') ? ' active' : '' !!}">
    <a href="{!! url('/') !!}" class="nav-link nav-toggle">
        <i class="icon-home"></i>
        <span class="title">Home</span>
    </a>
</li>

<li class="nav-item  {!! Request::is('*dashboard/structure*') ? 'active' : '' !!}">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-building-o"></i>
        <span class="title">Property Structure</span>
        <span class="arrow  {!! Request::is('*dashboard/structure*') ? 'open' : '' !!}"></span>
    </a>
     <ul class="sub-menu" style= "{!! Request::is('*dashboard/structure*') ? 'display: block;' : '' !!}">  
        @can('SiteController@index')
        <li class="{!! Request::is('*structure/sites*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('dashboard.sites.index') !!}">
                <span  class="title">Sites</span>
            </a>
        </li>
        @endcan
        @can('SiteZoneController@index')
        <li class="{!! Request::is('*structure/siteZones*') ? 'active' : '' !!}">
            <a class="nav-link " href="{!! route('dashboard.siteZones.index') !!}">
                <span  class="title">Site Zones</span>
            </a>
        </li>
        @endcan
        @can('BuildingController@index')
        <li class="{!! Request::is('*structure/buildings*') ? 'active' : '' !!}">
            <a class="nav-link " href="{!! route('dashboard.buildings.index') !!}">
                <span  class="title">Buildings</span>
            </a>
        </li>
        @endcan
        @can('ZoneController@index')
        <li class="{!! Request::is('*structure/zones*') ? 'active' : '' !!}">
            <a class="nav-link " href="{!! route('dashboard.zones.index') !!}">
                <span  class="title">Zones</span>
            </a>
        </li>
        @endcan
    </ul>
</li>

<li class="nav-item {!! (Request::is('*categories*') || Request::is('*taxonomies*'))?'active' :'' !!}">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-gear"></i>
        <span class="title">Setting</span>
        <span class="arrow  {!! (Request::is('*categories*') || Request::is('*taxonomies*')) ? 'open' : '' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!!  (Request::is('*categories*') || Request::is('*taxonomies*')) ? 'display: block;' : '' !!}">
        @can('CategoryController@index')
        <li class="{!! Request::is('*dashboard/categories*') ? 'active' : '' !!}">
            <a class="nav-link " href="{!! route('dashboard.categories.index') !!}">
                <span  class="title">Categories</span>
            </a>
        </li>
        @endcan
        @can('TaxonomyController@index')
        <li class="{!! Request::is('*dashboard/taxonomies*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('dashboard.taxonomies.index') !!}">
            <span  class="title">Taxonomies</span></a>
        </li>
        @endcan
    </ul>
</li>

<li class="nav-item {!! (Request::is('*files/*') || Request::is('*filesRelations*') || Request::is('*folders*'))?'active' :'' !!}">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-folder-open"></i>
        <span class="title">File maneger</span>
        <span class="arrow  {!! (Request::is('*files/*') || Request::is('*filesRelations*') || Request::is('*folders*')) ? 'open' : '' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!!  (Request::is('*files*') || Request::is('*filesRelations*') || Request::is('*folders*')) ? 'display: block;' : '' !!}">
        <li class="{!! Request::is('dashboard/files/*') ? 'active' : '' !!}">
            <a class="nav-link" href="/laravel-filemanager?type=Images">
            <span  class="title">Files</span></a>
        </li>
    </ul>
</li>

<li class="nav-item {!! (Request::is('*invoices*') || Request::is('*payments*'))?'active' :'' !!}">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-money"></i>
        <span class="title">Financials</span>
        <span class="arrow  {!! (Request::is('*invoices*') || Request::is('*payments*'))?'active' :'' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!! (Request::is('*invoces*') || Request::is('*payments*'))?'active' :'' !!}) ? 'display: block;' : '' !!}">
        @can('InvoiceController@index')
        <li class="{!! Request::is('dashboard/invoices*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('dashboard.invoices.index') !!}">
            <span  class="title">Invoices</span></a>
        </li>
        @endcan
        @can('PaymentController@index')
        <li class="{!! Request::is('dashboard/payments*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('dashboard.payments.index') !!}">
            <span  class="title">Payments</span></a>
        </li>
        @endcan
    </ul>
</li>

<li class="nav-item {!! (Request::is('*suppliers*') || Request::is('*supplierRelations*'))?'active' :'' !!}">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-truck"></i>
        <span class="title">Vendors</span>
        <span class="arrow  {!! (Request::is('*suppliers*') || Request::is('*supplierRelations*'))?'active' :'' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!! (Request::is('*suppliers*') || Request::is('*supplierRelations*'))?'active' :'' !!}) ? 'display: block;' : '' !!}">
        @can('SupplierController@index')
        <li class="{!! Request::is('dashboard/suppliers*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('dashboard.suppliers.index') !!}">
            <span  class="title">Suppliers</span></a>
        </li>
        @endcan
    </ul>
</li>

<li class="nav-item {!! ( Request::is('*instructions*') || Request::is('*options*') || Request::is('*requests*')|| Request::is('*services*') || Request::is('*task*')  )?'active' :'' !!}">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-users"></i>
        <span class="title">Facility Management</span>
        <span class="arrow  {!! (  Request::is('*instructions*') || Request::is('*options*') || Request::is('*requests*')|| Request::is('*services*') || Request::is('*task*')   )?'active' :'' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!! ( Request::is('*instructions*') || Request::is('*options*') || Request::is('*requests*')|| Request::is('*services*') || Request::is('*task*') )?'active' :'' !!}) ? 'display: block;' : '' !!}">
        @can('InstructionController@index')
        <li class="{!! Request::is('dashboard/instructions*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('dashboard.instructions.index') !!}">
            <span  class="title">Instructions</span></a>
        </li>
        @endcan
        @can('OptionController@index')
        <li class="{!! Request::is('dashboard/options*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('dashboard.options.index') !!}">
            <span  class="title">Options</span></a>
        </li>
        @endcan
        @can('RequestController@index')
        <li class="{!! Request::is('dashboard/requests*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('dashboard.requests.index') !!}">
            <span  class="title">Requests</span></a>
        </li>
        @endcan
        @can('ServiceController@index')
        <li class="{!! Request::is('dashboard/services*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('dashboard.services.index') !!}">
            <span  class="title">Services</span></a>
        </li>
        @endcan
        @can('TaskController@index')
        <li class="{!! Request::is('dashboard/tasks*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('dashboard.tasks.index') !!}">
            <span  class="title">Tasks</span></a>
        </li>
        @endcan
        @can('TaskLogController@index')
        <li class="{!! Request::is('dashboard/taskLogs*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('dashboard.taskLogs.index') !!}">
            <span  class="title">TaskLogs</span></a>
        </li>
        @endcan
      
    </ul>
</li>
<li class="nav-item {!! (Request::is('*equipment*')||Request::is('*inventories*')  ||Request::is('*stocks*') || Request::is('*stockTransactions*'))?'active' :'' !!}">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-truck"></i>
        <span class="title">Stock Management</span>
        <span class="arrow  {!! (Request::is('*stocks*') ||Request::is('*inventories*') || Request::is('*stockTransactions*'))?'active' :'' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!! (Request::is('*tenants*') )?'active' :'' !!}) ? 'display: block;' : '' !!}">
        @can('EquipmentController@index')
        <li class="{!! Request::is('dashboard/equipment*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('dashboard.equipment.index') !!}">
            <span  class="title">Equipment</span></a>
        </li>
        @endcan
        @can('InventoryController@index')
        <li class="{!! Request::is('dashboard/inventories*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('dashboard.inventories.index') !!}">
            <span  class="title">Inventories</span></a>
        </li>
        @endcan
        @can('StockController@index')
        <li class="{!! Request::is('dashboard/stocks*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('dashboard.stocks.index') !!}">
            <span  class="title">Stocks</span></a>
        </li>
        @endcan
        @can('StocTransactionController@index')
         <li class="{!! Request::is('dashboard/stockTransactions*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('dashboard.stockTransactions.index') !!}">
            <span  class="title">stockTransactions</span></a>
        </li>
        @endcan
    </ul>
</li>
<li class="nav-item {!! (Request::is('*tenantZoneRelations*') )?'active' :'' !!}">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-truck"></i>
        <span class="title">Tenants</span>
        <span class="arrow  {!! (Request::is('*tenants*') || Request::is('*supplierRelations*'))?'active' :'' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!! (Request::is('*tenants*') || Request::is('*supplierRelations*'))?'active' :'' !!}) ? 'display: block;' : '' !!}">
        @can('TenantZoneRelationController@index')
        <li class="{!! Request::is('dashboard/tenantZoneRelations*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('dashboard.tenantZoneRelations.index') !!}">
            <span  class="title">TenantZoneRelations</span></a>
        </li>
        @endcan
    </ul>
</li>
<li class="nav-item {!! (Request::is('*users*') || Request::is('*roles*')|| Request::is('*userHasRoles*')|| Request::is('*roleHasPrivileges*')||Request::is('*userHasPrivileges*')||Request::is('*privileges*'))?'active' :'' !!}">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-truck"></i>
        <span class="title">Users</span>
        <span class="arrow  {!! (Request::is('*users*') )?'active' :'' !!}"></span>
    </a>
    <ul class="sub-menu" style= "{!! (Request::is('*users*') || Request::is('*roles*'))?'active' :'' !!}) ? 'display: block;' : '' !!}">
        @can('‘UserController@index')
        <li class="{!! Request::is('dashboard/users*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('dashboard.users.index') !!}">
            <span  class="title">Users</span></a>
        </li>
        @endcan
        @can('RoleController@index')
        <li class="{!! Request::is('dashboard/roles*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('dashboard.roles.index') !!}">
            <span  class="title">Roles</span></a>
        </li>
        @endcan
        @can('PrivilegeController@index')
        <li class="{!! Request::is('dashboard/privileges*') ? 'active' : '' !!}">
            <a class="nav-link" href="{!! route('dashboard.privileges.index') !!}">
            <span  class="title">Privileges</span></a>
        </li>
        @endcan
    </ul>
</li><li class="{!! Request::is('maintenanceRequests*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('maintenanceRequests.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">MaintenanceRequests</span></a>
</li>

<li class="{!! Request::is('bookingRequests*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('bookingRequests.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">BookingRequests</span></a>
</li>

<li class="{!! Request::is('serviceRequests*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('serviceRequests.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">ServiceRequests</span></a>
</li>

<li class="{!! Request::is('complaintRequests*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('complaintRequests.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">ComplaintRequests</span></a>
</li>

<li class="{!! Request::is('requestTimes*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('requestTimes.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">RequestTimes</span></a>
</li>

<li class="{!! Request::is('priorities*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('priorities.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Priorities</span></a>
</li>

<li class="{!! Request::is('reservationItems*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('reservationItems.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">ReservationItems</span></a>
</li>

<li class="{!! Request::is('spaces*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('spaces.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Spaces</span></a>
</li>

<li class="{!! Request::is('systems*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('systems.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Systems</span></a>
</li>

<li class="{!! Request::is('expensesTypes*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('expensesTypes.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">ExpensesTypes</span></a>
</li>

<li class="{!! Request::is('bimModels*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('bimModels.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">BimModels</span></a>
</li>


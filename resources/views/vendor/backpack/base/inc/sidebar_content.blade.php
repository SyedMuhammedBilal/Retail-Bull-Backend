{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>











<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-building"></i> Products</a>
    <ul class="nav-dropdown-items">
        @if(backpack_user()->can('View Products'))
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('product') }}"><i class="nav-icon la la-question"></i> Products</a></li>
        @endif
        @if(backpack_user()->can('View Product Meta'))
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('product-meta') }}"><i class="nav-icon la la-question"></i> Product metas</a></li>
        @endif
        @if(backpack_user()->can('View Product Prices'))
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('prices') }}"><i class="nav-icon la la-question"></i> Prices</a></li>
        @endif

            @if(backpack_user()->can('View Price Levels'))
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('price-level') }}"><i class="nav-icon la la-question"></i> Price levels</a></li>
            @endif
            @if(backpack_user()->can('View Inventories'))
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('inventory') }}"><i class="nav-icon la la-question"></i> Inventories</a></li>
            @endif

            @if(backpack_user()->can('View Units'))
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('unit') }}"><i class="nav-icon la la-question"></i> Units</a></li>
            @endif

    </ul>
</li>






<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
    <ul class="nav-dropdown-items">
        @if(backpack_user()->can('View Users'))
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
        @endif
        @if(backpack_user()->can('View Roles'))
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
        @endif
        @if(backpack_user()->can('View Permissions'))
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
        @endif
    </ul>
</li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-building"></i> Setup</a>
    <ul class="nav-dropdown-items">
        @if(backpack_user()->can('View Companies'))
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('company') }}"><i class="nav-icon la la-question"></i> Companies</a></li>
        @endif
        @if(backpack_user()->can('View Locations'))
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('location') }}"><i class="nav-icon la la-question"></i> Locations</a></li>
        @endif

            @if(backpack_user()->can('View Cash Registers'))
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('cash-register') }}"><i class="nav-icon la la-question"></i> Cash registers</a></li>
            @endif

        @if(backpack_user()->can('View Location Categories'))
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('location-category') }}"><i class="nav-icon la la-question"></i> Location categories</a></li>
        @endif
    </ul>
</li>

@if(backpack_user()->can('View Settings'))
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon la la-cog'></i> <span>Settings</span></a></li>
@endif



@if(backpack_user()->can('View Backups'))
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('backup') }}'><i class='nav-icon la la-hdd-o'></i> Backups</a></li>
@endif
@if(backpack_user()->can('View Logs'))
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon la la-terminal'></i> Logs</a></li>
@endif


<li class="nav-item"><a class="nav-link" href="{{ backpack_url('customer') }}"><i class="nav-icon la la-question"></i> Customers</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('attribute') }}"><i class="nav-icon la la-question"></i> Attributes</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('term') }}"><i class="nav-icon la la-question"></i> Terms</a></li>
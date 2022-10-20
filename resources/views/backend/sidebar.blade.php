<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="/">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0"></h2>
                </a>
            </li>

            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="feather icon-square d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                    <i class="toggle-icon feather icon-x-square font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i>
                </a>
            </li>

        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
                <a href="/"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="/dashboard/financial"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Clinical">Financial</span></a>
                    </li>
                    <li>
                        <a href="/dashboard/analytics"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytical">Analytics</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="/"><i class="feather icon-image"></i><span class="menu-title" data-i18n="Data List">Banners</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="{{ route('banners.add') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Add Banners</span></a>
                    </li>
                    <li>
                        <a href="{{ route('banners') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Banners List</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="/"><i class="feather icon-server"></i><span class="menu-title" data-i18n="Data List">Categories</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Stock In</span></a>
                    </li>
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Stock Out</span></a>
                    </li>
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Due Expiry</span></a>
                    </li>
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Expired Medicine</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="/"><i class="feather icon-database"></i><span class="menu-title" data-i18n="Data List">Products</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Add Manufacturers</span></a>
                    </li>
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Manufacturers List</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="/"><i class="feather icon-shopping-cart""></i><span class="menu-title" data-i18n="Data List">Carts</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Add Medicine</span></a>
                    </li>
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Medicine List</span></a>
                    </li>
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Categories</span></a>
                    </li>
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Units</span></a>
                    </li>
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Leaf</span></a>
                    </li>
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Type</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="/"><i class="feather icon-phone-incoming"></i><span class="menu-title" data-i18n="Data List">Orders</span></a>
            </li>
            <li class=" nav-item">
                <a href="/"><i class="feather icon-codepen"></i><span class="menu-title" data-i18n="Data List">Post Category</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Due Customers</span></a>
                    </li>
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Payable Manufacturers</span></a>
                    </li>
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Sales and Purchase</span></a>
                    </li>
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Profit and Loss</span></a>
                    </li>
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Return History</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="/"><i class="feather icon-tag""></i><span class="menu-title" data-i18n="Data List">Post Tags</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="/administration/petty-cash"><i class="fa fa-money"></i><span class="menu-item" data-i18n="List View">Petty Cash</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="/"><i class="feather icon-tablet""></i><span class="menu-title" data-i18n="Data List">Posts</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Add Doctors</span></a>
                    </li>
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Doctors List</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="/"><i class="feather icon-star""></i><span class="menu-title" data-i18n="Data List">Customer Reviews</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Add Doctors</span></a>
                    </li>
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Doctors List</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="/"><i class="feather icon-credit-card""></i><span class="menu-title" data-i18n="Data List">Cuopons</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Add Doctors</span></a>
                    </li>
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Doctors List</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="/"><i class="feather icon-users""></i><span class="menu-title" data-i18n="Data List">Administration</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="{{ route('users') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">System Users</span></a>
                    </li>
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Doctors List</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="/"><i class="feather icon-message-circle"></i><span class="menu-title" data-i18n="Data List">Comments</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Add Doctors</span></a>
                    </li>
                    <li>
                        <a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">Doctors List</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="/"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Data List">Settings</span></a>
            </li>
        </ul>
    </div>
</div>

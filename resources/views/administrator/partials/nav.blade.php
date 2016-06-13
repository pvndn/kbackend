<ul id="navigation">
    <li class="{{ active('k-admin.dashboard') }}"><a href="{{ route('k-admin.dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    
    <li class="{{ active(['k-admin/category/*', 'k-admin/category']) }}">
        <a role="button" tabindex="0"><i class="fa fa-list"></i> <span>Danh mục sản phẩm</span></a>
        <ul>
            <li><a href="{{ route('k-admin.category.index') }}"><i class="fa fa-caret-right"></i> Danh sách các danh mục</a></li>
            <li><a href=""><i class="fa fa-caret-right"></i> Tính năng danh mục</a></li>
        </ul>
    </li>
    <li>
        <a role="button" tabindex="0"><i class="fa fa-envelope-o"></i> <span>Mail</span> <span class="badge bg-lightred">6</span></a>
        <ul>
            <li><a href="mail-inbox.html"><i class="fa fa-caret-right"></i> Inbox</a></li>
            <li><a href="mail-compose.html"><i class="fa fa-caret-right"></i> Compose Mail</a></li>
            <li><a href="mail-single.html"><i class="fa fa-caret-right"></i> Single Mail</a></li>
        </ul>
    </li>
    <li>
        <a role="button" tabindex="0"><i class="fa fa-pencil"></i> <span>UI Kit</span></a>
        <ul>
            <li><a href="ui-general.html"><i class="fa fa-caret-right"></i> General Elements</a></li>
            <li><a href="ui-buttons-icons.html"><i class="fa fa-caret-right"></i> Buttons & Icons</a></li>
            <li><a href="ui-typography.html"><i class="fa fa-caret-right"></i> Typography</a></li>
            <li><a href="ui-navs.html"><i class="fa fa-caret-right"></i> Navigation & Accordions</a></li>
            <li><a href="ui-modals.html"><i class="fa fa-caret-right"></i> Modals</a></li>
            <li><a href="ui-tiles.html"><i class="fa fa-caret-right"></i> Tiles</a></li>
            <li><a href="ui-portlets.html"><i class="fa fa-caret-right"></i> Portlets</a></li>
            <li><a href="ui-grid.html"><i class="fa fa-caret-right"></i> Grid</a></li>
            <li><a href="ui-widgets.html"><i class="fa fa-caret-right"></i> Widgets</a></li>
            <li><a href="ui-tree.html"><i class="fa fa-caret-right"></i> Tree </a></li>
            <li><a href="ui-lists.html"><i class="fa fa-caret-right"></i> Lists</a></li>
            <li><a href="ui-alerts.html"><i class="fa fa-caret-right"></i> Alerts & Notifications</a></li>
        </ul>
    </li>
    <li>
        <a role="button" tabindex="0"><i class="fa fa-shopping-cart"></i> <span>Shop</span> <span class="label label-success">new</span></a>
        <ul>
            <li><a href="shop-orders.html"><i class="fa fa-caret-right"></i> Orders</a></li>
            <li><a href="shop-single-order.html"><i class="fa fa-caret-right"></i> Single Order</a></li>
            <li><a href="shop-products.html"><i class="fa fa-caret-right"></i> Products</a></li>
            <li><a href="shop-single-product.html"><i class="fa fa-caret-right"></i> Single Product</a></li>
            <li><a href="shop-invoices.html"><i class="fa fa-caret-right"></i> Invoices</a></li>
            <li><a href="shop-single-invoice.html"><i class="fa fa-caret-right"></i> Single Invoice</a></li>
        </ul>
    </li>
    <li>
        <a role="button" tabindex="0"><i class="fa fa-table"></i> <span>Tables</span></a>
        <ul>
            <li><a href="tables-bootstrap.html"><i class="fa fa-caret-right"></i> Bootstrap Tables</a></li>
            <li><a href="tables-datatables.html"><i class="fa fa-caret-right"></i> DataTables</a></li>
            <li><a href="tables-footable.html"><i class="fa fa-caret-right"></i> FooTable</a></li>
        </ul>
    </li>
    <li>
        <a role="button" tabindex="0"><i class="fa fa-desktop"></i> <span>Extra Pages</span></a>
        <ul>
            <li><a href="login.html"><i class="fa fa-caret-right"></i> Login Page</a></li>
            <li><a href="signup.html"><i class="fa fa-caret-right"></i> Signup Page</a></li>
            <li><a href="forgotpass.html"><i class="fa fa-caret-right"></i> Forgot Password Page</a></li>
            <li><a href="page404.html"><i class="fa fa-caret-right"></i> Page 404</a></li>
            <li><a href="page500.html"><i class="fa fa-caret-right"></i> Page 500</a></li>
            <li><a href="page-offline.html"><i class="fa fa-caret-right"></i> Page Offline</a></li>
            <li><a href="locked.html"><i class="fa fa-caret-right"></i> Locked Screen</a></li>
            <li><a href="gallery.html"><i class="fa fa-caret-right"></i> Gallery</a></li>
            <li><a href="timeline.html"><i class="fa fa-caret-right"></i> Timeline</a></li>
            <li><a href="chat.html"><i class="fa fa-caret-right"></i> Chat</a></li>
            <li><a href="search-results.html"><i class="fa fa-caret-right"></i> Search Results</a></li>
            <li><a href="profile.html"><i class="fa fa-caret-right"></i> Profile Page</a></li>
        </ul>
    </li>
    <li>
        <a role="button" tabindex="0"><i class="fa fa-delicious"></i> <span>Layouts</span></a>
        <ul>
            <li><a href="layout-boxed.html"><i class="fa fa-caret-right"></i> Boxed layout</a></li>
            <li><a href="layout-fullwidth.html"><i class="fa fa-caret-right"></i> Full-width layout</a></li>
            <li><a href="layout-sidebar-sm.html"><i class="fa fa-caret-right"></i> Small sidebar</a></li>
            <li><a href="layout-sidebar-xs.html"><i class="fa fa-caret-right"></i> Extra-small sidebar</a></li>
            <li><a href="layout-offcanvas.html"><i class="fa fa-caret-right"></i> Off-canvas sidebar  <span class="label label-success">new</span></a></li>
            <li><a href="layout-hz-menu.html"><i class="fa fa-caret-right"></i> Horizontal menu</a></li>
            <li><a href="layout-rtl.html"><i class="fa fa-caret-right"></i> RTL layout</a></li>
        </ul>
    </li>
    <li>
        <a role="button" tabindex="0"><i class="fa fa-file-o"></i> <span>Front Themes</span> <span class="label label-success">new</span></a>
        <ul>
            <li><a href="http://www.tattek.sk/minovate-corp" target="_blank"><i class="fa fa-caret-right"></i> Corporate</a></li>
            <li><a href="http://www.tattek.sk/minovate-commerce" target="_blank"><i class="fa fa-caret-right"></i> Commerce</a></li>
        </ul>
    </li>
    <li>
        <a role="button" tabindex="0"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
        <ul>
            <li><a href="maps-vector.html"><i class="fa fa-caret-right"></i> Vector Maps</a></li>
            <li><a href="maps-google.html"><i class="fa fa-caret-right"></i> Google Maps</a></li>
        </ul>
    </li>
    <li><a href="calendar.html"><i class="fa fa-calendar-o"></i> <span>Calendar</span> <span class="label label-success">new events</span></a></li>
    <li><a href="charts.html"><i class="fa fa-bar-chart-o"></i> <span>Charts & Graphs</span></a></li>

    <li>
        <a role="button" tabindex="0"><i class="fa fa-magic"></i> <span>Menu Levels</span></a>
        <ul>
            <li>
                <a role="button" tabindex="0"><i class="fa fa-caret-right"></i> Menu Level 1.1</a>
                <ul>
                    <li><a role="button" tabindex="0"><i class="fa fa-caret-right"></i> Menu Level 2.1</a></li>
                    <li><a role="button" tabindex="0"><i class="fa fa-caret-right"></i> Menu Level 2.2</a></li>
                    <li>
                        <a role="button" tabindex="0"><i class="fa fa-caret-right"></i> Menu Level 2.3</a>
                        <ul>
                            <li><a role="button" tabindex="0"><i class="fa fa-caret-right"></i> Menu Level 3.1</a></li>
                            <li><a role="button" tabindex="0"><i class="fa fa-caret-right"></i> Menu Level 3.2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a role="button" tabindex="0"><i class="fa fa-caret-right"></i> Menu Level 1.2</a>
                <ul>
                    <li>
                        <a role="button" tabindex="0"><i class="fa fa-caret-right"></i> Menu Level 2.1</a>
                        <ul>
                            <li><a role="button" tabindex="0"><i class="fa fa-caret-right"></i> Menu Level 3.1</a></li>
                            <li>
                                <a role="button" tabindex="0"><i class="fa fa-caret-right"></i> Menu Level 3.2</a>
                                <ul>
                                    <li><a role="button" tabindex="0"><i class="fa fa-caret-right"></i> Menu Level 4.1</a></li>
                                    <li><a role="button" tabindex="0"><i class="fa fa-caret-right"></i> Menu Level 4.2</a></li>
                                </ul>
                            </li>
                            <li><a role="button" tabindex="0"><i class="fa fa-caret-right"></i> Menu Level 3.3</a></li>
                        </ul>
                    </li>
                    <li><a role="button" tabindex="0"><i class="fa fa-caret-right"></i> Menu Level 2.2</a></li>
                </ul>
            </li>
        </ul>
    </li>


</ul>
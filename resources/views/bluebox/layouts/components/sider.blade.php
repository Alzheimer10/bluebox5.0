<aside class="sidebar">
    <div class="sidebar-container">
        <div class="sidebar-header">
            <div class="brand">
              <a href="{{ route('/') }}"><img src="{{ asset('img/bluebox/bluebox-logo-white.svg') }}" alt="logo-svg" width="100%"></a>    
            </div>
        </div>
        <nav class="menu">
            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                <li class="active">
                    <a href="index.html">
                        <i class="fa fa-home"></i> Dashboard </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-th-large"></i> Items
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="items-list.html"> Items List </a>
                        </li>
                        <li>
                            <a href="item-editor.html"> Item Editor </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="screenful.html">
                        <i class="fa fa-bar-chart"></i> links
                        <span class="label label-screenful">abot</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<div class="sidebar-overlay" id="sidebar-overlay"></div>
<div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
<div class="mobile-menu-handle"></div>
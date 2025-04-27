<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="{{ asset('assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand" class="navbar-brand"
                    height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary">

            {{-- Dashboard --}}
            <li class="nav-item @if (isset($page_slug) && $page_slug == 'dashboard') active @endif">
                <a href="{{ route('admin.dashboard') }}" class="collapsed" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                    <span class="caret"></span>
                </a>
            </li>
            <li class="nav-item @if (isset($page_slug) && $page_slug == 'home') active @endif">
                <a href="{{ route('admin.home') }}" class="collapsed" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <p>Home</p>
                    <span class="caret"></span>
                </a>
            </li>
        
            {{-- Menu Levels --}}
            <li class="nav-item @if (isset($page_slug) && ($page_slug == 'about' || $page_slug == 'level-2')) active submenu @endif">
                <a data-bs-toggle="collapse" href="#submenu"
                    @if (isset($page_slug) && ($page_slug == 'about' || $page_slug == 'level-2')) aria-expanded="true" @endif>
                    <i class="fas fa-bars"></i>
                    <p>Menu Levels</p>
                    <span class="caret"></span>
                </a>
            
                <div class="collapse @if (isset($page_slug) && ($page_slug == 'about' || $page_slug == 'level-2')) show @endif" id="submenu">
                    <ul class="nav nav-collapse">
            
                        {{-- Level 1 (About) --}}
                        <li class="@if (isset($page_slug) && $page_slug == 'about') active @endif">
                            <a href="{{ route('admin.about') }}">
                                <span class="sub-item">About</span>
                            </a>
                        </li>
            
                        {{-- Level 2 --}}
                        <li class="@if (isset($page_slug) && $page_slug == 'level-2') active @endif">
                            <a href="#">
                                <span class="sub-item">Level 2</span>
                            </a>
                        </li>
            
                    </ul>
                </div>
            </li>
            
        
        </ul>
        
      </div>
  </div>
</div>



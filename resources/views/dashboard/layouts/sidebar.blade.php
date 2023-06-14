<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard')}}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    @if(Auth()->user()->type == "admin")
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.contact')}}">
        <i class="icon-paper menu-icon"></i>
        <span class="menu-title">Contact</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.artist')}}">
        <i class="icon-contract menu-icon"></i>
        <span class="menu-title">Artists</span>
      </a>
    </li>
    @endif
    @if(Auth()->User()->type == "artist")
    <li class="nav-item">
      <a class="nav-link" href="{{ route('artist.service')}}">
        <i class="icon-paper menu-icon"></i>
        <span class="menu-title">Services</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('artist.packages')}}">
        <i class="icon-paper menu-icon"></i>
        <span class="menu-title">Packages</span>
      </a>
    </li>
    @endif
    <li class="nav-item">
      <a class="nav-link" href="{{route('profilepage')}}">
        <i class="icon-head menu-icon"></i>
        <span class="menu-title">Settings</span>
      </a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="#">Buttons</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Dropdowns</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Typography</a></li>
        </ul>
      </div>
    </li> -->
  </ul>
</nav>
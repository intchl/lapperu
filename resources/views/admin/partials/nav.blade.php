<header class="pc-header">
  <div class="header-wrapper">
    <div class="me-auto pc-mob-drp">
      <ul class="list-unstyled">
        <li class="pc-h-item pc-sidebar-collapse">
          <a href="#" class="pc-head-link ms-0" id="sidebar-hide"><i class="ti ti-menu-2"></i></a>
        </li>
        <li class="pc-h-item pc-sidebar-popup">
          <a href="#" class="pc-head-link ms-0" id="mobile-collapse"><i class="ti ti-menu-2"></i></a>
        </li>
      </ul>
    </div>
    <div class="ms-auto">
      <ul class="list-unstyled">
        <li class="dropdown pc-h-item header-user-profile">
          <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button">
            <img src="{{ asset('admin/dist/assets/images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar">
            <span>Stebin Ben</span>
          </a>
          <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
            <a href="/login" class="dropdown-item"><i class="ti ti-power text-danger"></i> Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</header>

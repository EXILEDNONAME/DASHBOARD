<div class="dropdown">
  <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
    <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2">
      <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
      <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"> {{ Auth::User()->name }}</span>
      <span class="symbol symbol-35 symbol-light-success">
        <div class="symbol-label" style="background-image:url('/assets/backend/media/users/blank.png')"></div>
      </span>
    </div>
  </div>
  <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
    <ul class="navi navi-hover py-4">
      <li class="navi-item">
        <a href="/dashboard/profile/timeline" class="navi-link">
          <span class="navi-text"> Profile </span>
        </a>
      </li>
      <li class="navi-item">
          <a href="/dashboard/logout" class="navi-link" onclick="return confirm('Are you sure?')">
          <span class="navi-text"> Logout </span>
        </a>
      </li>
    </ul>
  </div>
</div>

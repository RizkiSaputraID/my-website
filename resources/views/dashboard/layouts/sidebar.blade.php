<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}"
          href="/dashboard/posts">
            <span data-feather="file"></span>
            My Blog
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/account*') ? 'active' : '' }}"
          href="/dashboard/account">
            <span data-feather="user"></span>
            Account
          </a>
        </li>
      </ul>

      <h5 class="sidebar-heading d-flex justify-content-betwen align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Administrator</span>
      </h5>
      <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
          href="/dashboard/categories">
            <span data-feather="grid"></span>
            Blog Categories
            </a>
          </li>
      </ul>

    </div>
  </nav>

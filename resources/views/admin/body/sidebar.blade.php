@php

$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp




<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed active" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-square-half"></i><span>HomeSlide Setup</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse {{ ($route == 'home.slide') ? 'show' : ''}}" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('home.slide') }}" class="{{ ($route == 'home.slide') ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>Home Slide</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#about-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-square-half"></i><span>About Page Setup</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="about-nav" class="nav-content collapse {{ ($route == 'about.page' || $route == 'add.multi.image' || $route == 'multi.image.edit' || $route == 'view.multi.image' || $route == 'education.view' || $route == 'education.edit' || $route == 'education.add' || $route == 'award.add' || $route == 'award.view') ? 'show' : ''}}" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('about.page') }}" class="{{ ($route == 'about.page') ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>About Page</span>
            </a>
          </li>
          <li>
            <a href="{{ route('add.multi.image') }}" class="{{ ($route == 'add.multi.image') ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>Add Multi Image</span>
            </a>
          </li>
          <li>
            <a href="{{ route('view.multi.image') }}" class="{{ ($route == 'view.multi.image') ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>Multi Image</span>
            </a>
          </li>
          <li>
            <a href="{{ route('education.view') }}" class="{{ ($route == 'education.view' || $route == 'education.edit') ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>Education</span>
            </a>
          </li>
          <li>
            <a href="{{ route('award.view') }}" class="{{ ($route == 'award.view' || $route == 'award.add' || $route == 'award.edit') ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>Award</span>
            </a>
          </li>
        </ul>
      </li>



      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#portfolio-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-square-half"></i><span>Portfolio Page Setup</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="portfolio-nav" class="nav-content collapse {{ ($route == 'view.portfolio' || $route == 'add.portfolio') ? 'show' : ''}}" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('view.portfolio') }}" class="{{ ($route == 'view.portfolio') ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>Portfolio</span>
            </a>
          </li>
          <li>
            <a href="{{ route('add.portfolio') }}" class="{{ ($route == 'add.portfolio') ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>Add Portfolio</span>
            </a>
          </li>
        </ul>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
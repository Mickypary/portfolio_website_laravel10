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
        <a class="nav-link collapsed active" data-bs-target="#home-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-home-7-fill"></i><span>Home Setup</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="home-nav" class="nav-content collapse {{ ($route == 'home.slide' || $route == 'upload.partner.image' || $route == 'partner.image.edit' || $route == 'view.partner' || $route == 'client.feedback' || $route == 'client.feedback.add' || $route == 'edit.client.feedback' || $route == 'client.image' || $route == 'client.image.add' || $route == 'add.service' || $route == 'all.service') ? 'show' : ''}}" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('home.slide') }}" class="{{ ($route == 'home.slide') ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>Home Slide</span>
            </a>
          </li>
          <li>
            <a href="{{ route('view.partner') }}" class="{{ ($route == 'view.partner') ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>Update Partners</span>
            </a>
          </li>
          <li>
            <a href="{{ route('upload.partner.image') }}" class="{{ ($route == 'upload.partner.image') ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>Upload Partner Images</span>
            </a>
          </li>
          <li>
            <a href="{{ route('client.feedback') }}" class="{{ ($route == 'client.feedback') ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>Client Feedback</span>
            </a>
          </li>
          <li>
            <a href="{{ route('client.image') }}" class="{{ ($route == 'client.image') ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>Client Images</span>
            </a>
          </li>
          <li>
            <a href="{{ route('all.service') }}" class="{{ ($route == 'all.service' || $route == 'add.service') ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>All Services</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#about-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-layout-3-fill"></i><span>About Page Setup</span><i class="bi bi-chevron-down ms-auto"></i>
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
        <a class="nav-link collapsed" data-bs-target="#blogcat-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-mist-line"></i><span>Blog Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="blogcat-nav" class="nav-content collapse {{ ($route == 'all.blog.category' || $route == 'add.blog.category') ? 'show' : ''}}" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('all.blog.category') }}" class="{{ ($route == 'all.blog.category') ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>All Blog Category</span>
            </a>
          </li>
          <li>
            <a href="{{ route('add.blog.category') }}" class="{{ ($route == 'add.blog.category') ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>Add Blog Category</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#blog-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-pages-fill"></i><span>Blog</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="blog-nav" class="nav-content collapse {{ ($route == 'all.blog' || $route == 'add.blog') ? 'show' : ''}}" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('all.blog') }}" class="{{ ($route == 'all.blog') ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>All Blog</span>
            </a>
          </li>
          <li>
            <a href="{{ route('add.blog') }}" class="{{ ($route == 'add.blog') ? 'active' : ''}}">
              <i class="bi bi-circle"></i><span>Add Blog</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-heading"></li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('footer.setup') }}">
          <i class="bi bi-person"></i>
          <span>Footer</span>
        </a>
      </li><!-- End Profile Page Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('contact.message') }}">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Contact Message</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
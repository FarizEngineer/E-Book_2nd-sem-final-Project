

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="adminHMD professional admin dashboard template">
  <title>Dashboard</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
<link rel="stylesheet" href="{{asset('user/aassets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('user/aassets/vendors/bootstrap-icons/bootstrap-icons.css')}}">

  <link rel="stylesheet" href="{{asset('assets/admin/admin.css')}}">
</head>

<body>
  <div class="admin-shell">
    <div class="sidebar-backdrop" data-sidebar-close></div>

    <aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
      <div class="sidebar-header">
        <a class="brand-mark" href="index.html" aria-label="adminHMD dashboard">
          <span class="brand-icon"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span>
          <span class="brand-copy">
            <span class="brand-title">Admin dashboard</span>
          </span>
        </a>
      </div>

      <nav class="sidebar-nav">
        <a class="nav-link active" href="{{route('dashboard')}}" aria-current="page">
          <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
          <span class="nav-text">Dashboard</span>
        </a>
{{-- Categories --}}
     <li class="nav-item">
  <a class="nav-link dropdown-toggle"
     href="#"
     data-bs-toggle="collapse"
     data-bs-target="#categorysMenu"
     role="button"
     aria-expanded="false"
     aria-controls="categorysMenu">
    <span class="nav-icon"><i class="bi bi-grid-3x3-gap" aria-hidden="true"></i></span>
    <span class="nav-link-text">Categories</span>
  </a>

  <div class="collapse" id="categorysMenu">
    <ul class="nav flex-column ms-4">
      <li class="nav-item"><a class="nav-link" href="{{route('insert')}}">Add Category</a></li>
      <li class="nav-item"><a class="nav-link" href="{{route('fatchcategory')}}">All Categories</a></li>
    </ul>
  </div>
</li>


        <a class="nav-link" href="{{route('userfatch')}}">
          <span class="nav-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
          <span class="nav-text">All Users</span>
        </a>
       {{-- Books --}}
            <li class="nav-item">
  <a class="nav-link dropdown-toggle"
     href="#"
     data-bs-toggle="collapse"
     data-bs-target="#booksMenu"
     role="button"
     aria-expanded="false"
     aria-controls="booksMenu">
    <span class="nav-icon"><i class="bi bi-grid-3x3-gap" aria-hidden="true"></i></span>
    <span class="nav-link-text">Books</span>
  </a>

  <div class="collapse" id="booksMenu">
    <ul class="nav flex-column ms-4">
      <li class="nav-item"><a class="nav-link" href="{{route('book')}}">Upload Book</a></li>
      <li class="nav-item"><a class="nav-link" href="{{route('bookfatch')}}">All uploaded Books</a></li>
    </ul>
  </div>
</li>

{{-- orders --}}
      <li class="nav-item">
  <a class="nav-link dropdown-toggle"
     data-bs-toggle="collapse"
     data-bs-target="#ordersMenu"
     role="button"
     aria-expanded="false"
     aria-controls="ordersMenu">
    <span class="nav-icon"><i class="bi bi-grid-3x3-gap" aria-hidden="true"></i></span>
    <span class="nav-link-text">All Orders</span>
  </a>

  <div class="collapse" id="ordersMenu">
    <ul class="nav flex-column ms-4">
      <li class="nav-item"><a class="nav-link" href="{{route('adminorders')}}">Orders History</a></li>
      <li class="nav-item"><a class="nav-link" href="{{route('conforder')}}">Confirmed Orders</a></li>
      <li class="nav-item"><a class="nav-link" href="{{route('pendorder')}}">Pending Orders</a></li>
    </ul>
  </div>
</li>


{{-- News --}}
 <a class="nav-link" href="{{route('pgnews')}}">
          <span class="nav-icon"><i class="bi bi-exclamation-triangle" aria-hidden="true"></i></span>
          <span class="nav-text">News</span>
        </a>


        {{-- Competition --}}
       <li class="nav-item">
  <a class="nav-link dropdown-toggle"
     data-bs-toggle="collapse"
     data-bs-target="#componentsMenu"
     role="button"
     aria-expanded="false"
     aria-controls="componentsMenu">
    <span class="nav-icon"><i class="bi bi-grid-3x3-gap" aria-hidden="true"></i></span>
    <span class="nav-link-text">Competitions</span>
  </a>

  <div class="collapse" id="componentsMenu">
    <ul class="nav flex-column ms-4">
      <li class="nav-item"><a class="nav-link" href="{{route('comppg')}}">Insert Competition</a></li>
      <li class="nav-item"><a class="nav-link" href="{{route('fetchcomp')}}">Manage Competition</a></li>
      <li class="nav-item"><a class="nav-link" href="{{route('admin.enrollments')}}">Enrollments</a></li>
    </ul>
  </div>
</li>

        <a class="nav-link" href="#">
          <span class="nav-icon"><i class="bi bi-exclamation-triangle" aria-hidden="true"></i></span>
          <span class="nav-text">-----</span>
        </a>
        <a class="nav-link" href="modals.html">
          <span class="nav-icon"><i class="bi bi-window-stack" aria-hidden="true"></i></span>
          <span class="nav-text">Modals</span>
        </a>
        <a class="nav-link" href="settings.html">
          <span class="nav-icon"><i class="bi bi-gear" aria-hidden="true"></i></span>
          <span class="nav-text">Settings</span>
        </a>
        <a class="nav-link" href="blank.html">
          <span class="nav-icon"><i class="bi bi-file-earmark" aria-hidden="true"></i></span>
          <span class="nav-text">Blank Page</span>
        </a>
      </nav>

      <div class="sidebar-user">
 <div class="mt-4 mb-3">
  <span 
  style="border: 3px solid rgba(39, 203, 154, 1.00); border-radius:17px; padding:14px;"
  >
 <i class="fa-solid fa-users fa-2xl " style="color:rgba(39, 203, 154, 1.00);"></i>
</span>
</div>
        <strong class="text-light">Developer Muhammad Fariz & Developer Hasnain</strong>
        <strong>Developer Muhammad Fariz & Developer Hasnain</strong>
        <small>Active Workspace</small>
      </div>

      <div class="sidebar-footer">
        <span class="status-dot"></span>
        <span class="sidebar-footer-text">System running smoothly</span>
      </div>
    </aside>

 @yield('admin')

  <script src="{{asset('user/aassets/js/bootstrap.bundle.min.js')}}"></script>

  <script src="{{asset('assets/admin/admin.js')}}"></script>
</body>
</html>


@extends('admin.sidebar')

@section('admin')


<body>
  <div class="admin-shell">
    <div class="sidebar-backdrop" data-sidebar-close></div>


    <div class="admin-main">
  @if (session('success'))
     <div class="alert alert-success" role="alert">
      {{ session('success') }}
</div> 
  @endif

      <nav class="navbar admin-navbar navbar-expand bg-white">
        <div class="container-fluid px-3 px-lg-4">
          <button class="sidebar-toggle" type="button" data-sidebar-toggle aria-controls="adminSidebar" aria-expanded="true" aria-label="Toggle sidebar">
            <span></span>
            <span></span>
            <span></span>
          </button>

          <form class="d-none d-md-flex ms-3 flex-grow-1" role="search">
            <input class="form-control search-input" type="search" placeholder="Search users, orders, reports" aria-label="Search">
          </form>

          <div class="navbar-actions ms-auto">
            <button class="icon-button theme-toggle" type="button" data-theme-toggle aria-label="Switch color theme" title="Switch color theme">
              <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
            </button>
            <div class="dropdown">
              <button class="icon-button" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Notifications">
                <span class="notification-dot"></span>
                <i class="bi bi-bell" aria-hidden="true"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end notification-menu">
                <div class="dropdown-header fw-bold text-body">Notifications</div>
                <a class="dropdown-item" href="users.html">
                  <span class="notification-title">New user registered</span>
                  <span class="notification-time">4 minutes ago</span>
                </a>
                <a class="dropdown-item" href="charts.html">
                  <span class="notification-title">Revenue target reached</span>
                  <span class="notification-time">32 minutes ago</span>
                </a>
                <a class="dropdown-item" href="settings.html">
                  <span class="notification-title">Security review completed</span>
                  <span class="notification-time">1 hour ago</span>
                </a>
              </div>
            </div>

            <div class="dropdown">
              <button class="profile-button dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-user-tie fa-beat" style="color: rgb(36, 212, 158);"></i>
                <span class="text-dark">{{ $admin->name }}</span>
              </button>
              



              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#profileModal">Profile</a></li>
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#accountModal">Edit Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}">Log out</a></li>
              </ul>
            </div>

          </div>
        </div>
      </nav>

<!-- Profile modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content bg-light">
      <div class="modal-header">
        <h1 class="modal-title fs-5 " id="exampleModalToggleLabel">Admin Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<div class="text-center mt-4 mb-3">
  <span 
  style="border: 3px solid rgba(39, 203, 154, 1.00); border-radius:50%; padding:14px;"
  >
 <i class="fa-solid fa-user-tie fa-2xl " style="color:rgba(39, 203, 154, 1.00);"></i>
</span>
</div>

        <label for="name" class="text-dark">Admin name :</label>
    <input 
    type="text" 
    class="form-control bg-light text-dark " 
    name="name" 
    value="{{$admin->name}}" 
    style="border-left:4px solid rgba(39, 203, 154, 1.00); 
    border-radius:10px;   
    border-bottom:4px solid rgba(39, 203, 154, 1.00);
    border-top:none;
    border-right:none;"
    disabled>

    <label for="mail" class="text-dark mt-3">Admin mail :</label>
    <input 
    type="text" 
    class="form-control bg-light text-dark " 
    name="mail" 
    value="{{$admin->email}}" 
    style="border-left:4px solid rgba(39, 203, 154, 1.00);  
    border-radius:10px;  
    border-bottom:4px solid rgba(39, 203, 154, 1.00);
    border-top:none;
    border-right:none;"
    disabled>
      </div>


     <div class="modal-footer">
      
  <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-primary">Logout</button>
  </form>
</div>

    </div>
  </div>
</div>
<!-- Profile modal end -->

<!-- Account modal -->
 <div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="AccountModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content bg-light">
      <div class="modal-header">
        <h1 class="modal-title fs-5 " id="exampleModalToggleLabel">Edit Admin Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<div class="text-center mt-4 mb-3">
  <span 
  style="border: 3px solid rgba(39, 203, 154, 1.00); border-radius:50%; padding:14px;"
  >
 <i class="fa-solid fa-user-tie fa-2xl " style="color:rgba(39, 203, 154, 1.00);"></i>
</span>
</div>
<form action="{{route('adminupdate',$admin->id)}}" method="post">
  @csrf
      <label for="username" class="text-dark">Admin name :</label>
    <input 
    type="text" 
    class="form-control bg-light text-dark " 
    name="username" 
    value="{{$admin->name}}" 
    style="border-left:4px solid rgba(39, 203, 154, 1.00); 
    border-radius:10px;   
    border-bottom:4px solid rgba(39, 203, 154, 1.00);
    border-top:none;
    border-right:none;">

    <label for="usermail" class="text-dark mt-3">Admin mail :</label>
    <input 
    type="text" 
    class="form-control bg-light text-dark " 
    name="usermail" 
    value="{{$admin->email}}" 
    style="border-left:4px solid rgba(39, 203, 154, 1.00);  
    border-radius:10px;  
    border-bottom:4px solid rgba(39, 203, 154, 1.00);
    border-top:none;
    border-right:none;">

    <input 
    type="hidden" 
    class="form-control bg-light text-dark " 
    name="role" 
    value="{{$admin->role}}" >

<div class="text-center"><button class="btn btn-primary mt-3">Update</button></div>
</form>
    
      </div>
      <div class="modal-footer text-center">
      <marquee class="text-center" behavior="scroll" direction="left" scrollamount="6"
    style="
        background: linear-gradient(90deg, #12d382, #bd5beb);
        color: #fff;
        font-family: 'times new roman';
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 1px;
        padding: 10px 0;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.25);
    ">
     Only Admins can edit their profile
</marquee>
      </div>
    </div>
  </div>
</div>
<!-- Account modal end -->


      <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Overview</p>
                <h1 class="h3 mb-1">Readsphere Dashboard</h1>
                <p class="text-muted mb-0">Monitor performance, sales, users, and support from one clean workspace.</p>
              </div>
            </div>
            <div class="heading-actions"><button class="btn btn-outline-secondary btn-sm" type="button"><i class="bi bi-download" aria-hidden="true"></i> Export</button><button class="btn btn-primary btn-sm" type="button"><i class="bi bi-file-earmark-plus" aria-hidden="true"></i> Create Report</button></div>
          </div>

          <section class="row g-3 mt-1" aria-label="Dashboard metrics">
            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-primary">
                <div class="metric-top">
                  <span class="metric-label">Total Books</span>
                  <span class="metric-icon"><i class="bi bi-book" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">{{ $books }}</div>
                <div class="metric-meta">
                  <span class="text-success">+12.5% books uploaded</span>
                  <span>from last month</span>
                </div>
              </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-success">
                <div class="metric-top">
                  <span class="metric-label">Categoties</span>
                  <span class="metric-icon"><i class="bi bi-tags-fill" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">{{$cat}}</div>
                <div class="metric-meta">
                  <span class="text-success">best</span>
                  <span>selling categories</span>
                </div>
              </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-warning">
                <div class="metric-top">
                  <span class="metric-label">Orders</span>
                  <span class="metric-icon"><i class="bi bi-cart-check-fill" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">{{$orders}}</div>
                <div class="metric-meta">
                  <span class="text-success">+12.1%</span>
                  <span>new orders</span>
                </div>
              </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-success">
                <div class="metric-top">
                  <span class="metric-label">Authors</span>
                  <span class="metric-icon"><i class="bi bi-person-badge-fill" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">{{ $authors }}</div>
                <div class="metric-meta">
                  <span class="text-success">4.2%</span>
                  <span>active authors</span>
                </div>
              </article>
            </div>
          </section>

          <section class="row g-3 mt-1">
            <div class="col-12 col-xl-8">
              <div class="panel">
                <div class="panel-header">
                  <div>
                    <h2 class="h5 mb-1 section-title"><i class="bi bi-graph-up-arrow" aria-hidden="true"></i><span>Sales Performance</span></h2>
                    <p class="text-muted mb-0">Monthly revenue compared with operational targets.</p>
                  </div>
                  <a class="btn btn-light btn-sm" href="charts.html">View Details</a>
                </div>

                <div class="chart-bars" aria-label="Sales performance chart">
                  <div class="chart-column bar-42"><span></span><small>Jan</small></div>
                  <div class="chart-column bar-58"><span></span><small>Feb</small></div>
                  <div class="chart-column bar-51"><span></span><small>Mar</small></div>
                  <div class="chart-column bar-72"><span></span><small>Apr</small></div>
                  <div class="chart-column bar-66"><span></span><small>May</small></div>
                  <div class="chart-column bar-83"><span></span><small>Jun</small></div>
                </div>
              </div>
            </div>

            <div class="col-12 col-xl-4">
              <div class="panel h-100">
                <div class="panel-header">
                  <div>
                    <h2 class="h5 mb-1 section-title"><i class="bi bi-activity" aria-hidden="true"></i><span>Team Activity</span></h2>
                    <p class="text-muted mb-0">Recent operational updates.</p>
                  </div>
                </div>

                <div class="activity-list">
                  <div class="activity-item"><span class="activity-dot bg-primary"></span><div><p class="mb-1 fw-semibold">New campaign launched</p><p class="text-muted small mb-0">Marketing team published the May offer.</p></div></div>
                  <div class="activity-item"><span class="activity-dot bg-success"></span><div><p class="mb-1 fw-semibold">Payment batch cleared</p><p class="text-muted small mb-0">246 invoices were processed successfully.</p></div></div>
                  <div class="activity-item"><span class="activity-dot bg-warning"></span><div><p class="mb-1 fw-semibold">Support queue rising</p><p class="text-muted small mb-0">Average first response time is 18 minutes.</p></div></div>
                </div>
              </div>
            </div>
          </section>

          <section class="panel mt-3">
            <div class="panel-header">
              <div>
                <h2 class="h5 mb-1 section-title"><i class="bi bi-people" aria-hidden="true"></i><span>All Authors</span></h2>
                <p class="text-muted mb-0">Latest account activity across the workspace.</p>
              </div>
              <a class="btn btn-outline-secondary btn-sm" href="{{ route('userfatch') }}">Manage Users</a>
            </div>
            <div class="table-responsive">
              <table class="table text-center mb-0">
                <thead><tr><th scope="col">User</th><th scope="col">Role</th><th scope="col">Status</th><th scope="col">Joined</th></tr></thead>
                <tbody>



                  @forelse ($allauthors as $auths )
                    <tr>
                    <td>
                      <div class=" align-items-center gap-2">
                   <i class="fa-solid fa-user-pen fa-xl " style="color: lightgreen;"></i>
                        <div>
                          <p class="fw-semibold mb-0">{{$auths->name}}</p>
                          <p class="text-muted small mb-0">{{$auths->email}}</p>
                        </div>
                      </div>
                    </td>
                    <td>{{ $auths->role }}</td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>{{ $auths->created_at }}</td>
                  </tr>
                  @empty
                    <tr>
      <td colspan="4" class="text-center py-5">
        <i class="fa-solid fa-user-pen fa-2xl text-muted opacity-50 mb-3 d-block"></i>
        <p class="fw-semibold mb-1">No authors yet</p>
        <p class="text-muted small mb-0">Authors will appear here once they're added to the platform.</p>
      </td>
    </tr>
                  @endforelse


                </tbody>
              </table>
            </div>
          </section>
        </div>
      </main>

      <footer class="admin-footer">
        <div class="container-fluid px-3 px-lg-4">
          <span>Copyright 2026 adminHMD. <br> Developed by <a target="_blank" class="fw-bold text-success" href="https://github.com/HasanMahmudDev">Md. Hasan Mahmud</a> • Distributed by <a target="_blank" class="fw-bold text-success" href="https://themewagon.com">ThemeWagon</a> </span>
          <span>Professional dashboard template.</span>
        </div>
      </footer>
    </div>
  </div>

  <script src="{{asset('user/aassets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('user/aassets/js/main.js')}}"></script>
</body>
</html>

@endsection()

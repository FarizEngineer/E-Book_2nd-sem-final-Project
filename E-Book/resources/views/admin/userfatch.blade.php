<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
</head>
<body>


<div class="container">


<a class="btn mt-2 mb-1 text-light" style="background:rgba(39, 203, 154, 1.00);" href="{{route('dashboard')}}">Back to dashboard</a>
       <div class="text-center mt-2 mb-3">
  <h1 class="h3 fw-bold mb-1">All Registered Users</h1>
  <p class="text-muted mb-0">View, edit, and manage every account on the platform.</p>
</div>



<div class="table-responsive">
  <table class="table align-middle mb-0">
    <thead>
      <tr>
        <th scope="col">User</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col" class="text-end">Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($alluser as $user)
        <tr>
          <td>
            <div class="d-flex align-items-center gap-2">
              <span class="d-inline-flex align-items-center justify-content-center flex-shrink-0"
                    style="width:40px; height:40px; border-radius:50%; background:rgba(39,203,154,0.1); color:rgba(39,203,154,1.00); font-weight:600;">
                {{ strtoupper(substr($user->name, 0, 1)) }}
              </span>
              <div>
                <p class="fw-semibold mb-0">{{ $user->name }}</p>
                <p class="text-muted small mb-0">ID: {{ $user->id }}</p>
              </div>
            </div>
          </td>
          <td>{{ $user->email }}</td>
          <td>
            <span class="badge text-bg-{{ $user->role === 'admin' ? 'success' : 'secondary' }}">
              {{ ucfirst($user->role) }}
            </span>
          </td>
          <td class="text-end">
            <a href="{{ route('useredit', $user->id) }}" class="me-2" title="Edit user">
              <i class="fa-solid fa-pen-to-square" style="color: rgb(99, 230, 190); font-size:18px;"></i>
            </a>
            <a href="{{ route('deletuser', $user->id) }}" title="Delete user">
              <i class="fa-solid fa-trash" style="color: rgb(225, 12, 68); font-size:18px;"></i>
            </a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="4" class="text-center py-5">
            <span class="d-inline-flex align-items-center justify-content-center mb-3"
                  style="width:80px; height:80px; border-radius:50%; background:rgba(39,203,154,0.1);">
              <i class="fa-solid fa-users fa-2xl" style="color:rgba(39,203,154,1.00);"></i>
            </span>
            <h5 class="fw-semibold mb-1">No users found</h5>
            <p class="text-muted mb-0">Users will appear here once they sign up.</p>
          </td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>


        </div>

</body>
</html>

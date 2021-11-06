{{-- Navigation Bar here --}}
<div class="container-fluid justify-content-end">
    <ul class="nav nav-tabs nav justify-content-center" >
      <li class="nav-item">
        <a class="nav-link {{($title === "Home")?'active':''}}" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{($title === "Employee")?'active':''}}" href="{{ route('employees.index') }}">Employees</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{($title === "Department")?'active':''}}" href="{{ route('departments.index') }}">Departments</a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link {{($title === "Contact")?'active':''}}" href="/contact">Contact Us</a>
      </li> --}}
    </ul>
  </div>
  
  {{-- Footer here --}}
  <nav class="navbar navbar-expand-sm bg-light navbar-dark fixed-bottom justify-content-center">
      Copyright 2021, Company
  </nav>

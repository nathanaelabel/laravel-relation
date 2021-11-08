{{-- Navigation Bar here --}}
  <nav class="navbar navbar-expand-md user-select-none">
      <div class="container content">
          <a class="navbar-brand" href="{{ url('/') }}">
              <img src="{{ url('mydesign/image/company.png') }}" alt="Logo" class="nav-logo pe-2">
              <strong class="fw-bold">Company</strong>
          </a>
        <ul class="nav nav-pills nav justify-content-end" >
            <li class="nav-item">
              <a class="nav-link {{($title === "Home")?'active':''}}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{($title === "Employee")?'active':''}}" href="{{ route('employees.index') }}">Employees</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{($title === "Department")?'active':''}}" href="{{ route('departments.index') }}">Departments</a>
            </li>
        </ul>
      </div>
  </nav>
  
{{-- Footer here --}}
<div class="fixed-bottom">
    <nav class="navbar navbar-expand-sm bg-light navbar-dark fixed-bottom justify-content-center"> <!-- Udah dikasih fixed-bottom tapi malah naik keatas nge-bug? -->
      <b>Copyright 2021, Company</b>
  </nav>
</div>

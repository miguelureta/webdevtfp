<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:green;">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">CSB Career Portal</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Resume</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/events/')}}">View Events</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/events/create')}}">Add Events</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/gallery/view')}}">Image Gallery</a>
      </li>

      <!-- Dropdown -->
      <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Account</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      -->
    </ul>
    <!-- Links -->

  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
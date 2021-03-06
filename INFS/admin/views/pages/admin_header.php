<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="/admin/dashboard/">AdminPanel</a>
  
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/home/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/dashboard/">Dashboard</a>
        </li><li class="nav-item">
          <a class="nav-link" href="/admin/categories/">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/posts/">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/users/">Users</a>
        </li>
      </ul>
  
      <ul class="navbar-nav ml-auto"> 
        <li class="nav-item">
              <a class="nav-link" href="/admin/users/profile/<?php echo unserialize($_SESSION['current_user'])->id; ?>"><i class="material-icons">person</i></a>
            </li>
        <li class="nav-item">
              <a class="nav-link" href="/user/logout/"><i class="material-icons">exit_to_app</i></a>
        </li>
      </ul>
    </div>
  </nav>
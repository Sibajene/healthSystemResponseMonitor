<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color:#138D75">
  <!-- Container wrapper -->
  <div class="container-fluid" >
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarLeftAlignExample"
      aria-controls="navbarLeftAlignExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
      style="color:white;"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color:white;"
                  onMouseOver="this.style.backgroundColor='#D4AC0D'" onMouseOut="this.style.backgroundColor='#138D75'">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="province.php" style="color:white;"onMouseOver="this.style.backgroundColor='#D4AC0D'"onMouseOut="this.style.backgroundColor='#138D75'">Provincies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color:white;"onMouseOver="this.style.backgroundColor='#D4AC0D'"onMouseOut="this.style.backgroundColor='#138D75'">COVID-19</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color:white;"onMouseOver="this.style.backgroundColor='#D4AC0D'"onMouseOut="this.style.backgroundColor='#138D75'">Monitors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php" style="color:white;"
          onMouseOver="this.style.backgroundColor='#D4AC0D'"
            onMouseOut="this.style.backgroundColor='#138D75'"
          >About Us</a>
        </li>
        <!-- Navbar dropdown -->
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false" 
            style="color:white;"
            onMouseOver="this.style.backgroundColor='#D4AC0D'"
            onMouseOut="this.style.backgroundColor='#138D75'"
          >
            Publications
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li>
              <a class="dropdown-item" href="#">All Publications</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">COVID-19 Health System Response Monitor (HSRM)</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Town</a>
            </li>
            <li><hr class="dropdown-divider" /></li>
            <li>
              <a class="dropdown-item" href="#">Somewhere else here</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <form class="d-flex input-group w-auto">
      <input
        type="search"
        class="form-control rounded"
        placeholder="Search for a province"
        aria-label="Search"
        aria-describedby="search-addon"
      />
      <span class="input-group-text border-0" id="search-addon" style="color:white;" 
        onMouseOver="this.style.backgroundColor='#1C2833'"
        onMouseOut="this.style.backgroundColor='#138D75'"
     >
        <i class="fas fa-search"></i>
      </span>
    </form>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
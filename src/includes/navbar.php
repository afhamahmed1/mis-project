<nav
  class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
  id="layout-navbar"
>

  <div class="navbar-nav-right d-flex align-items-center" >
      <a class="navbar-brand" href="index.php">DBN</a>
      <a class="nav-link" aria-current="page" href="<?= ($_SESSION['role_as']) ? ('manager_report.php') : ('report.php');?> ">Report</a>
      <?php 
        
        if( $_SESSION['role_as'] == '1') {
        ?>
        
          <a class="nav-link" aria-current="page" href="employees_report.php">Sales Persons Report</a>
        
        
        <?php    
        }

        ?>

      
    <ul class="navbar-nav flex-row align-items-center ms-auto">
      

      <!-- User -->
      <li class="nav-item navbar-dropdown dropdown-user dropdown">
        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
        <i class="bx bx-user me-2"></i> <?= $_SESSION['auth_user']['name'] ?>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <a class="dropdown-item" href="account.php">
              <div class="d-flex">
                
                <div class="flex-grow-1 d-flex justify-content-between">
                  <span class="fw-semibold d-block"> <i class="bx bx-user me-2"></i> <?= $_SESSION['auth_user']['name'] ?></span>
                  <div class="text-muted "><em><small><?= ($_SESSION['role_as'] == 1) ? 'Manager':'Sales Person'; ?> </small> </em></div>
                </div>
              </div>
            </a>
          </li>
          <li>
            <div class="dropdown-divider"></div>
          </li>
          
          
          <li>
            <div class="dropdown-divider"></div>
          </li>
          <li>
            <a class="dropdown-item" href="logout.php">
              <i class="bx bx-power-off me-2"></i>
              <span class="align-middle">Log Out</span>
            </a>
          </li>
        </ul>
      </li>
      <!--/ User -->
    </ul>
  </div>
</nav>

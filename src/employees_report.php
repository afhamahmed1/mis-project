<?php

session_start();
include_once('middleware/adminMiddleware.php')
?>
<!DOCTYPE html>
<html lang="en">
<?php
include_once('includes/header.php');
?>
<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
        <?php
        include_once('includes/navbar.php');
        ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
            
                <div class="card">
                    <div class="d-flex justify-content-between">
                      <h5 class="card-header">Employees Report</h5>
                      
                    </div>
                    <div class="table-responsive text-nowrap">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Employees ID</th>
                            <th>Name</th>
                            <th>Sales</th>
                            <th>Monthly Objective</th>
                           
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0 employee_report_table">
                       
                          <tr value="1">
                            
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                            <td>Transistors</td>
                            <td>56</td>
                            <td>$30</td>
                            
                          </tr>
                          <tr value="2">
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>2</strong></td>
                            <td>Wiring</td>
                            <td>89</td>
                            <td>$10</td>
                            
                          </tr>
                          <tr value="3">
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>3</strong></td>
                            <td>Chip 1</td>
                            <td>90</td>
                            <td>$49</td>
                           
                          </tr>
                          <tr value="4">
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>4</strong></td>
                            <td>Chip 2</td>
                            <td>100</td>
                            <td>$57</td>
                            
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php
            include_once('includes/footer.php');
            ?>
            <!-- / Footer -->

        <div class="content-backdrop fade"></div>
        </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <!-- employees_table.children[i].children[0].children[1].innerHTML -->

<script>
    const employees_table = document.getElementsByClassName('employee_report_table')[0]
    // console.log(employees_table.children)
    for(let i=0; i<employees_table.childElementCount; i++){
        const rows = employees_table.children[i]
        rows.addEventListener('click',()=>{
            const employee_id = rows.children[0].children[1].innerHTML
            window.location.href = "employee_report.php?id="+employee_id
        })
        
        
    }
    
</script>
<?php
include_once('includes/scripts.php');
?>
</body>
</html>

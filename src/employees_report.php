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
                      <h5 class="card-header">Sales Persons Report</h5>
                      
                    </div>
                    <div class="table-responsive text-nowrap">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th >Sales Person's ID</th>
                            <th >Name</th>
                            <th >Sales</th>
                            <th >Monthly Objective</th>
                            <th >Commission</th>
                          </tr>
                        </thead>
                        <tbody id ="myTable" class="table-border-bottom-0 employee_report_table">
                          <?php
                            $sales_persons  = fetchSalesStaffData();
                             
                            while($row = mysqli_fetch_assoc($sales_persons))
                            {

                          ?>
                          <tr value="<?= $row['id'] ?>">
                            
                            <td ><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $row['id'] ?></strong></td>
                            <td ><?= $row['name'] ?></td>
                            <td ><?= $row['monthly_sales'] ?></td>
                            <td ><?= $row['monthly_target'] ?></td>
                            <td ><?= $row['monthly_sales']*(2/100) ?></td>
                            
                          </tr>
                          <?php 
                            }
                          ?>
                          
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
    const employees_table = document.getElementsByClassName('employee_report_table')[0];
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

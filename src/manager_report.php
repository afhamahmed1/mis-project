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
                      <h5 class="card-header">Report</h5>
                      <div class="my-3 me-4">
                        <button class="btn btn-primary d-grid w-100" type="submit">Export</button>
                      </div>
                    </div>
                    <div class="table-responsive text-nowrap">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Product ID</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Sale Price</th>
                            <th>Extended Price</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          <?php
                          $report = manager_report();
                          if(mysqli_num_rows($report)){
                          while($row = mysqli_fetch_assoc($report))
                          {

                          
                          ?>
                          <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $row['product_id'] ?></strong></td>
                            <td><?= $row['product_name'] ?></td>
                            <td><?= $row['units_sold'] ?></td>
                            <td>$<?= $row['unit_price'] ?></td>
                            <td>$<?= $row['extended_price'] ?></td>
                          </tr>
                          <?php
                          }}else{
                            ?>
                            <tr>
                              <td class ="text-center" colspan="5" style="height: 300px;" >No Data Found</td>
                              
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



<?php
include_once('includes/scripts.php');
?>
</body>
</html>

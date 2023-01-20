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
                      <div class="mt-3 me-4">
                        <?php

                        ?>
                        <a href="pdf_maker.php?EMP_ID=<?= $_GET['id']; ?>&ACTION=VIEW">
                          <button class="btn btn-primary d-grid w-100 export_btn" type="submit">Export</button>
                        </a>
                      </div>
                    </div>
                    <div class="mx-4">
                      <?php $name=mysqli_fetch_assoc(getById('employees',$_GET['id'])); ?>
                      <h6><strong>Sales Person Name:</strong> <?= $name['name'] ?></h6>
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

                          if(isset($_GET['id'])){
                            
                          
                            $user_id = $_GET['id'];
                            $report = employee_report($user_id);
                            if(mysqli_num_rows($report )> 0){
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
                            } ?>
                            <?php
                          } else{
                            ?>
                            <tr>
                              <td class ="text-center" colspan="5" style="height: 300px;" >No Data Found</td>
                            </tr>
                            <?php
                          }
                        }
                          ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                  <?php if(mysqli_num_rows($report )> 0): ?>
                  <?php
                  $monthly_sales=monthly_sales($user_id);

                  $orders=getTotalOrders($user_id);
                  $total_orders=mysqli_fetch_assoc($orders)['count'];
                  
                  $items_sold=getTotalItemsSold($user_id);

                  $commision=calcCommission($user_id);
                  ?>
                  <div class="card mt-3 px-3 py-2 col-12" style="font-size: 13px;">
                    <div class="card-body d-flex">
                      <div class="flex-shrink-0">
                        <img
                          src="../assets/img/icons/unicons/sum.png"
                          alt="chart success"
                          class="rounded"
                          style="width: 6rem;"
                        />
                      </div>
                      <div class="border-end px-5">
                        <h5 class="mt-3">Monthly Sales </h5>
                        <h4>$<?= $monthly_sales ?></h4>
                      </div>
                      <div class="border-end px-5">
                        <h5 class="mt-3">Annual Sales </h5>
                        <h4><?= 'XYZ' ?></h4>
                      </div>
                      <div class="border-end px-5">
                        <h5 class="mt-3">Total orders </h5>
                        <h4><?= $total_orders; ?></h4>
                      </div>
                      <div class="border-end px-5">
                        <h5 class="mt-3">Total items sold </h5>
                        <h4><?= $items_sold; ?></h4>
                      </div>
                      <div class="px-5">
                        <h5 class="mt-3">Commission </h5>
                        <h4>$<?= $commision ?></h4>
                      </div>
                    </div>
                  </div>                                                
                  <?php endif; ?>
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

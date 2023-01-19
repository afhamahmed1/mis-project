<?php
session_start();
// include_once('functions/myfunctions.php');
include_once('middleware/employeeMiddleware.php');
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
                
                <div class="col-lg-12 col-md-12 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12  mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/chart-success.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                            
                          </div>
                          <span class="fw-semibold d-block mb-1">Profit</span>
                          <h3 class="card-title mb-2">$12,628</h3>
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12  mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/wallet-info.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                            
                          </div>
                          <span>Sales</span>
                          <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <!-- Total Revenue -->
                <div class="col-12 col-lg-8 col-md-12 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                        <div id="totalRevenueChart" class="px-2"></div>
                      </div>
                      <div class="col-md-4">
                        <div class="card-body">
                          <div class="text-center">
                            
                          </div>
                        </div>
                        <div id="growthChart"></div>
                        <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                          <div class="d-flex">
                            <div class="me-2">
                              <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                              <small>2022</small>
                              <h6 class="mb-0">$32.5k</h6>
                            </div>
                          </div>
                          <div class="d-flex">
                            <div class="me-2">
                              <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                              <small>2021</small>
                              <h6 class="mb-0">$41.2k</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->
                <div class="col-12 col-md-12 col-lg-4 order-3 order-md-2">
                  <div class="row">
                    
                    <!-- </div>
                    <div class="row"> -->

                    <div class="col-md-12 col-lg-12 col-xl-12 order-0 mb-4">
                        <div class="card">
                          <div class="card-header d-flex align-items-center justify-content-between pb-0">
                            <div class="card-title mb-0">
                              <h5 class="m-0 me-2">Order Statistics</h5>
                              <small class="text-muted">42.82k Total Sales</small>
                            </div>
                            
                          </div>
                          <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                              <div class="d-flex flex-column align-items-center gap-1">
                                <h2 class="mb-2">8,258</h2>
                                <span>Total Orders</span>
                              </div>
                              <div id="orderStatisticsChart"></div>
                            </div>
                            <ul class="p-0 m-0">
                              <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                  <span class="avatar-initial rounded bg-label-primary"
                                    ><i class="bx bx-mobile-alt"></i
                                  ></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                  <div class="me-2">
                                    <h6 class="mb-0">Electronic</h6>
                                    <small class="text-muted">Mobile, Earbuds, TV</small>
                                  </div>
                                  <div class="user-progress">
                                    <small class="fw-semibold">82.5k</small>
                                  </div>
                                </div>
                              </li>
                              <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                  <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                  <div class="me-2">
                                    <h6 class="mb-0">Fashion</h6>
                                    <small class="text-muted">T-shirt, Jeans, Shoes</small>
                                  </div>
                                  <div class="user-progress">
                                    <small class="fw-semibold">23.8k</small>
                                  </div>
                                </div>
                              </li>
                              <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                  <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                  <div class="me-2">
                                    <h6 class="mb-0">Decor</h6>
                                    <small class="text-muted">Fine Art, Dining</small>
                                  </div>
                                  <div class="user-progress">
                                    <small class="fw-semibold">849k</small>
                                  </div>
                                </div>
                              </li>
                              <li class="d-flex">
                                <div class="avatar flex-shrink-0 me-3">
                                  <span class="avatar-initial rounded bg-label-secondary"
                                    ><i class="bx bx-football"></i
                                  ></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                  <div class="me-2">
                                    <h6 class="mb-0">Sports</h6>
                                    <small class="text-muted">Football, Cricket Kit</small>
                                  </div>
                                  <div class="user-progress">
                                    <small class="fw-semibold">99</small>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>  
                  
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="card">
                
                <div class="d-flex justify-content-between">
                  <h5 class="card-header">INVENTORY</h5>
                  <?php
                        if( $_SESSION['role_as'] == '1') {
                          ?>
                  <div class="my-3 me-4">
                    <a class="btn btn-primary d-grid w-100" href="add-item.php" >Add Item</a>
                  </div>
                  <?php
                        } 
                        ?>
                </div>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Cost</th>
                        <th>Sale Price</th>
                        <?php
                        if( $_SESSION['role_as'] == '1') {
                          ?>
                        <th>Edit</th>
                        <?php
                        } 
                        ?>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php
                    $inventory = get_inventory();
                    
                    while ($item=mysqli_fetch_assoc($inventory)){
                      
                    ?>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $item['product_id'] ?></strong></td>
                        <td><?= $item['product_name'] ?></td>
                        <td><?= ($item['product_quantity'] == 0) ? '<small class="badge bg-danger" style="font-size:12px">out of stock</small>' : $item['product_quantity'] ;?></td>
                        <td><?= $item['product_cost'] ?></td>
                        <td><?= $item['product_price'] ?></td>
                        <?php
                        if( $_SESSION['role_as'] == '1') {
                          ?>
                        <td><a href="edit-item.php?id=<?= $item['product_id'] ?>" class="btn btn-primary  " >Edit</a> </td>
                        <?php
                        } 
                        ?>
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

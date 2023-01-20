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
                          <?php
                          $profit=getProfit();
                          $profit_inc=round((($profit-getProfit('prev'))/$profit)*100,2);
                          ?>
                          </div>
                          <span class="fw-semibold d-block mb-1">Profit</span>
                          <h3 class="card-title mb-2">$<?= $profit ?></h3>
                          <small class="text-success fw-semibold">
                            <i class="bx bx-up-arrow-alt"></i> +<?= $profit_inc ?>%
                          </small>
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
                          <?php
                          $sales=getSales();
                          $sales_inc=round((($sales-getSales('prev'))/$sales)*100,2);
                          ?>
                          <span>Sales</span>
                          <h3 class="card-title text-nowrap mb-1">$<?= $sales ?></h3>
                          <small class="text-success fw-semibold">
                            <i class="bx bx-up-arrow-alt"></i> +<?= $sales_inc ?>%
                          </small>
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
                        <?php 
                        $revenue_of_2021 = mysqli_fetch_all(revenue_on_month_bases(2021));
                        $revenue_of_2022 = mysqli_fetch_all(revenue_on_month_bases(2022));
                        // print_r(json_encode( $revenue_of_2021));
                        ?>
                        <input type="hidden" name="revenue_of_2021" value='<?= json_encode($revenue_of_2021) ?>'>
                        <input type="hidden" name="revenue_of_2022" value='<?= json_encode($revenue_of_2022) ?>'>
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
                    <?php
                    $order_and_sales = weeklySalesAndOrder();
                    $order_and_sales = mysqli_fetch_assoc($order_and_sales);
                    $order_statistics = order_statistics();
                    $order_statisticschart = mysqli_fetch_all( order_statistics())
                    ?>
                    <div class="col-md-12 col-lg-12 col-xl-12 order-0 mb-4">
                        <div class="card">
                          <div class="card-header d-flex align-items-center justify-content-between pb-0">
                            <div class="card-title mb-0">
                              <h5 class="m-0 me-2">Order Statistics</h5>
                              <small class="text-muted"><?= $order_and_sales['total_sales'] ?> Total Sales</small>
                            </div>
                            
                          </div>
                          <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                              <div class="d-flex flex-column align-items-center gap-1">
                                <h2 class="mb-2"><?= $order_and_sales['total_orders'] ?></h2>
                                <span>Total Orders</span>
                              </div>
                              <input type="hidden" name="order_statistics" value='<?= json_encode($order_statisticschart) ?>'>
                              <div id="orderStatisticsChart" value=""></div>
                            </div>
                            <div style="height:130px; overflow:auto">
                              <ul class="p-0 m-0">
                                <?php
                                  while($row = mysqli_fetch_assoc($order_statistics)){
                                ?>
                                <li class="d-flex mb-4 pb-1">
                                  
                                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                      <h6 class="mb-0"><?= $row['product_name'] ?></h6>
                                    </div>
                                    <div class="user-progress">
                                      <small class="fw-semibold"><?= $row['unit_sales'] ?></small>
                                    </div>
                                  </div>
                                </li>
                                <?php
                                }
                                ?>
                              </ul>
                            </div>
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

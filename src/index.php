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

                          if( $_SESSION['role_as'] == '1') {
                            $profit=getProfit();
                            $profit_inc=round((($profit-getProfit('prev'))/$profit)*100,2);
                          } else{
                            $profit=getProfit(0, $_SESSION['auth_user']['userid']);
                            $profit_inc=round((($profit-getProfit('prev', $_SESSION['auth_user']['userid']))/$profit)*100,2);
                          }
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
                          if( $_SESSION['role_as'] == '1') {
                            $sales=getSales();
                            $sales_inc=round((($sales-getSales('prev'))/$sales)*100,2);
                          }else{
                            $sales=getSales(0, $_SESSION['auth_user']['userid']);
                            $sales_inc=round((($sales-getSales('prev', $_SESSION['auth_user']['userid']))/$sales)*100,2);
                          }
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
                      <?php
                      $current_year_sales = mysqli_fetch_assoc(total_sales_till_current_month());
                      $previous_year_sales = mysqli_fetch_assoc(total_sales_till_current_month(-1));

                      $growth = mysqli_fetch_assoc(growth());

                      ?>
                      <div class="col-md-4">
                        <div class="card-body">
                          <div class="text-center">
                            
                          </div>
                        </div>
                        <input type="hidden" name="growth" value='<?= json_encode($growth) ?>'>
                        <div id="growthChart"></div>
                        <div class="text-center fw-semibold pt-3 mb-2"><?= round( $growth['growth']) ?>% Company Growth</div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                          <div class="d-flex">
                            <div class="me-2">
                              <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                              <small><?= $current_year_sales['year'] ?></small>
                              <h6 class="mb-0">$<?= $current_year_sales['total_sales'] ?></h6>
                            </div>
                          </div>
                          <div class="d-flex">
                            <div class="me-2">
                              <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                            </div>
                            <div class="d-flex flex-column">
                            <small><?= $previous_year_sales['year'] ?></small>
                              <h6 class="mb-0">$<?= $previous_year_sales['total_sales'] ?></h6>
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
                    $order_and_sales = monthlySalesAndOrder();
                    $order_and_sales = mysqli_fetch_assoc($order_and_sales);
                    $order_statistics = order_statistics();
                    $order_statisticschart = mysqli_fetch_all(order_statistics())
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
                              <table id="myTable" class="p-0 m-0">
                                <tr>
                                  <th style="cursor:pointer" onclick="sortTable(0)">
                                    Name
                                  </th>
                                  <th style="cursor:pointer" onclick="sortTable(1)">
                                    Quantity
                                  </th>
                                  <th style="cursor:pointer"  onclick="sortTable(2)">
                                    Sales
                                  </th>
                                </tr>
                                <?php
                                  while($row = mysqli_fetch_assoc($order_statistics)){
                                ?>
                                <tr>
                                <td class="mb-4 pb-1" style="width:150px; overflow-x:auto">
                                <?= $row['product_name'] ?>
                                  
                                  </td>
                                  <td  class="mb-4 pb-1" style="width:100px; overflow-x:auto">
                                  <?= $row['units_sold'] ?>
                                  </td>
                                <td  class="mb-4 pb-1">
                                <?= $row['unit_sales'] ?>
                                  
                                  </td>
                                </tr>
                                <?php
                                }
                                ?>
                              </table>
                              
<script defer>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "desc"; 
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (isNaN(x.innerHTML) || isNaN(y.innerHTML)) { // check if the values are not numbers
          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            shouldSwitch = true;
            break;
          }
        } else { // the values are numbers
          if (parseFloat(x.innerHTML) > parseFloat(y.innerHTML)) {
            shouldSwitch = true;
            break;
          }
        }
      } else if (dir == "desc") {
        if (isNaN(x.innerHTML) || isNaN(y.innerHTML)) {
          if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
            shouldSwitch = true;
            break;
          }
        } else {
          if (parseFloat(x.innerHTML) < parseFloat(y.innerHTML)) {
            shouldSwitch = true;
            break;
          }
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++; 
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}

</script>
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

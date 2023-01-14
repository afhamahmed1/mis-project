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
            
              <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Edit Product</h5>
                      <!-- <small class="text-muted float-end">Default label</small> -->
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id'])){
                        $product_id = $_GET['id'];
                        $product = mysqli_fetch_assoc(getById('products', $product_id));
                        
                        ?>
                      <form action="code.php" method="POST" enctype="multipart/form-data" >
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                          <div class="col-sm-10">
                            <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                            <input type="text" class="form-control" id="basic-default-name" name="name" required placeholder="Product Name" value=<?= $product['name'] ?> />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-cost">Cost</label>
                          <div class="col-sm-10">
                            <input
                              type="number"
                              name="cost"
                              class="form-control"
                              id="basic-default-cost"
                              placeholder="Cost of Product (USD)"
                              value=<?= $product['cost'] ?>
                              required
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-price">Price</label>
                          <div class="col-sm-10">
                            <input
                              type="number"
                              class="form-control"
                              id="basic-default-price"
                              placeholder="Price of Product (USD)"
                              value=<?= $product['price'] ?>
                              name="price"
                              required
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-quantity">Quantity</label>
                          <div class="col-sm-10">
                            <input
                              type="number"
                              class="form-control"
                              id="basic-default-quantity"
                              placeholder="Quantity of Product"
                              name="quantity"
                              value=<?= $product['quantity'] ?>
                              required
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-description">Description</label>
                          <div class="col-sm-10">
                            <textarea
                              id="basic-default-description"
                              class="form-control"
                              placeholder="Description"
                              name="description"
                              
                              aria-describedby="basic-icon-default-description"
                            ><?= $product['description'] ?></textarea>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" name="edit_btn" class="btn btn-primary">Edit Product</button>
                          </div>
                        </div>
                      </form>
                      <?php
                        }else{
                            ?>
                            <h1>Item Not Selected Correctly</h1>
                            <?php
                        }
                      ?>
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

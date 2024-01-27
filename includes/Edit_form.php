<?php
// include("../Course.php");
include("../config/dbcon.php");
?>


<form action="../config/Update.php" method="post">
    <?php
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $query = "SELECT * FROM productdb WHERE Product_Id = '$id'";
        $query_run = mysqli_query($conn, $query);
        echo "$query";
        // foreach ($query_run as $item) :
    ?>

            <div class="form-group mb-3 mt-3">
                <label for="name">Product Id</label>
                <input type="text" class="form-control" value="<?= $_GET["id"]; ?>" name="P_ID">
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" value="<?= $_GET['Name']  ?>" name="name">
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="P_D">Product Description</label>
                <input type="text" class="form-control" value="<?= $_GET['P_D']  ?>" name="P_D">
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="price">Product Price</label>
                <input type="text" class="form-control" value="<?= $_GET['price']  ?>" name="price">
            </div>
            <div class="modal-footer">

                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <button type="submit" class="btn btn-primary float-right" name="cat_submit">Update </button>
            </div>
    <?php
        // endforeach;
    } else {
        echo "Data Not found";
    }

    ?>
</form>


<!-- <div class="modal fade" id="exampleModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Course.php" method="post">
          <div class="form-group mb-3 mt-3">
            <label for="name">Product Id</label>
            <input type="text" class="form-control" value="">
          </div>
          <div class="form-group mb-3 mt-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" placeholder="Name" name="name">
          </div>
          <div class="form-group mb-3 mt-3">
            <label for="P_D">Product Description</label>
            <input type="text" class="form-control" placeholder="P_D" name="P_D">
          </div>
          <div class="form-group mb-3 mt-3">
            <label for="price">Product Price</label>
            <input type="text" class="form-control" placeholder="Price" name="price">
          </div>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary float-right" name="submit">Update </button>

        </form>
      </div>

    </div>
  </div>
</div> -->
<?php
include("./mainInclude/header.php");
?>

    <div class="container-fluid bg-dark">
        <div class="row">
            <img src="./image/coursebanner.jpg" alt="courses" style="height: 500px; width: 100%; object-fit: cover; box-shadow: 10px;">
        </div>
    </div>

    <div class="container">
        <h2 class="text-center my-4">Payment Status</h2>
        <form action="" method="post">
            <div class="form-group row">
                <label for="" class="offset-sm-3 col-form-label">Order ID: </label>
         
            <div>
                <input type="text" class="form-control mx-3">
            </div>
            <div>
                <input type="submit" class="btn btn-primary mx-4" value="View">
         `   </div>
            </div>
        </form>
    </div>

  
        <?php
            include("./contact.php");
        ?>

<?php
include("./mainInclude/footer.php");
?>


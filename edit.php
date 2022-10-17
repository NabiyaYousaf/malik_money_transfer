<?php
include 'connection.php';
define("TITLE","Edit Currency");
define("PAGE","EC");
include 'header.php';
include 'linkdatatable.php';
$id = $_GET["id"];
$query=mysqli_query($conn,"select * from currency where id='$id'");
$res=mysqli_fetch_assoc($query);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 fw-bold">Edit Currency</h1>
                </div>
            </div>

        </div>
    </div>
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
        <div class="card-header border-transparent">
                <div class="card-body">
                <form method="post">
                                        <label for="country" class="text-dark fw-bold">Select Country</label>
                                      
                                            <select class="selectpicker countrypicker form-control mb-3"
                                            data-live-search="true" data-default="<?php echo $res['country']; ?>" data-flag="true"
                                            name="country"></select>

                                        <label for="rate" class="text-dark fw-bold">Rate</label>
                                        <input type="text" name="rate" class="form-control" value="<?php echo $res['rate']; ?>">

                                        <button type="submit" class="btn btn-primary mt-5" name="edit">Edit</button>
                                </div>
                             
                                </form>
              
            </div>
         
            
            <!-- ./wrapper -->
            <?php
  include 'footer.php';
?>

            <!-- <script>
            $('.countrypicker').countrypicker();
            </script> -->
          
            <!-- javascript Part End -->

            <!-- Php Code Start -->
            <?php


// Edit Data Start

if(isset($_POST['edit'])){
    $ids = $_GET["id"];
    $country=$_POST['country'];
    $rate=$_POST['rate'];

    $update_query="UPDATE `currency` SET `country`='$country',`rate`='$rate' WHERE id='$ids'";
    $run_query=mysqli_query($conn,$update_query);
    if($run_query){
        ?>
            <script>
            alert('Data Has Been Updated');
            window.location = "<?php echo $app_url.'currency.php' ?>";
            </script>
            <?php
    }else{
        echo "<script>alert('Data Has Not Been Edited')</script>";
    }
}


// Edit Data Start
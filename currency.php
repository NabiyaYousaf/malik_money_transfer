<?php
include 'connection.php';
define("TITLE","Currency");
define("PAGE","Currency");
include 'header.php';
include 'linkdatatable.php';
 
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 fw-bold" style="font-size:3rem;">Add Currency</h1>
                </div>
            </div>

        </div>
    </div>
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
        <div class="card-header border-transparent">
            <div class="card-tools">
                <div class="container">
                    <!-- start modal -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-2 py-2" data-toggle="modal" data-target="#exampleModal">
                        <i class='fas fa-plus fa-2x'> Add Currency</i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">Add Currency</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post">
                                        <label for="country" class="text-dark fw-bold">Select Country</label>
                                        <select class="selectpicker countrypicker form-control mb-3"
                                            data-live-search="true" data-default="United States" data-flag="true"
                                            name="country"></select>
                                        <label for="rate" class="text-dark fw-bold">Rate</label>
                                        <input type="text" name="rate" class="form-control">


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end modal -->
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped" style="font-size:1.8rem;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Country Name</th>
                                <th scope="col">Currency Rate</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                  $select_query=mysqli_query($conn,"SELECT * FROM `currency`");
                  if($select_query){
                    while($row=mysqli_fetch_assoc($select_query)){
                        ?>
                            <tr>
                                <td scope="row"><?php echo $row['id']; ?></td>
                                <td><?php echo $row['country']; ?></td>
                                <td><?php echo $row['rate']; ?></td>
                                <td>
                                <!-- <button type="button" class="btn btn-success btn-sm" id="editbtn"><i class="fas fa-edit"></i></button> -->
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success"><i
                                            class="fas fa-edit"></i></a>
                                  
                                    <input type="hidden" class="delete_id_value" value="<?php echo $row['id']; ?>">
                                    <a href="javascript:void(0)" type="button"
                                        class="delete_btn_ajax btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>

                                </td>
                            </tr>
                            <?php

                    }
                }
                 ?>

                        </tbody>
                    </table>
                </div>
            </div>

             <!-- Modal -->
             <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="editModalLabel">Add Currency</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post">
                                        <label for="country" class="text-dark fw-bold">Select Country</label>
                                        <select class="selectpicker countrypicker form-control mb-3"
                                            data-live-search="true" data-default="United States" data-flag="true"
                                            name="country"></select>
                                        <label for="rate" class="text-dark fw-bold">Rate</label>
                                        <input type="text" name="rate" class="form-control">


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end modal -->
            <!-- ./wrapper -->
            <?php
  include 'footer.php';
?>

            <script>
            $('.countrypicker').countrypicker();
            </script>
            <!-- javascript Part Start -->
            <script>
           

            //Delete Code
            $(document).ready(function() {
                $(".delete_btn_ajax").click(function(e) {
                    e.preventDefault();
                    var deleteid = $(this).closest('tr').find('.delete_id_value').val();
                    // alert(deleteid);
                    swal({
                            title: "Are you sure?",
                            text: "Once deleted, you will not be able to recover this Data!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                $.ajax({
                                    type: "POST",
                                    url: "deletecurrency.php",
                                    data: {
                                        "delete_btn_set": 1,
                                        "deleteid": deleteid,
                                    },
                                    success: function(response) {
                                        swal("Deleted!", "Your Data is Deleted",
                                            "success", {
                                                button: "Ok!",
                                            }).then((result) => {
                                            location.reload();
                                        });


                                    }
                                });
                            }
                        });

                });
            });
            </script>
            <!-- javascript Part End -->

            <!-- Php Code Start -->
            <?php
// Add Data Intoo Database Start

if(isset($_POST['submit'])){
    $country=$_POST['country'];
    $rate=$_POST['rate'];

    $query="INSERT INTO `currency`(`country`, `rate`) VALUES ('$country','$rate')";
    $run=mysqli_query($conn,$query);
    if($run){
        ?>
            <script>
            alert('Data Has Been Added');
            window.location = "<?php echo $app_url.'currency.php' ?>";
            </script>
            <?php
    }else{
        echo "<script>alert('Data Has Not Been Added')</script>";
    }
}
// Add Data Intoo Database End

// Edit Data Start

if(isset($_POST['edit'])){
    $id=$_POST['update_id'];
    $country=$_POST['country'];
    $rate=$_POST['rate'];

    $update_query="UPDATE `currency` SET `country`='$country',`rate`='$rate' WHERE id='$id'";
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
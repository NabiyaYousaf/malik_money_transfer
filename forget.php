<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Kainat.css">

    <title>Kainat</title>
  </head>
  <body>
<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="text-center" >
                         <figure>
                             <img class="logo" src="logo.jpeg">
                         </figure>
                            <form action="#" method="POST">
                                <div class="form-group mb-3">
                                    <input type="email" placeholder="Email address" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4" name="email">
                                </div>
                            
                            
                                <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm" name="submit">Send</button>
                             
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>
  </div>
  
</div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $select="select * from admin where email='$email'";
        $run=mysqli_query($conn,$select);
        if($run){
            $_SESSION['admin']="Admin";
            $to_email ="mastm2744@gmail.com";
            $subject="Password Reset";
            $body="hi, if you want to recover your mail then click this link http://localhost/htdocs/kainat%20admin/AdminLTE-master/recover.php?id=1";
            $header="From: mastm2744@gmail.com";

            if (mail($to_email, $subject, $body, $header)) {
                echo "Email successfully sent to $to_email...";
            } else {
                echo "Email sending failed...";
            }
        }else{
            ?>
                <script>
                    alert('Email Not exist');
                </script>
            <?php
        }
    }

?>
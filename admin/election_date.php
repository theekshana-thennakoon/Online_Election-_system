<?php
session_start();
if(!isset($_SESSION['AddStatusAdmin'])){
    header("Location:login");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sri Lanka Election</title>

    <!-- font awesome cdn link  -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
-->
    <!-- custom css file link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/boostrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/boostrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    .header-1 img{width:30%;}
    .contact{
        margin-top:20vh;align-items: center;justify-content: center;
    }
    .contact-2{
        display:none;
    }
    .form-control , .btn{border:1px solid #9C53A0;}
    @media (max-width: 739px) {
        .ntfoundgif{width:50%;}
        .contact{
            display:none;
        }
        .contact-2{
            display: block;margin-top: 20vh;align-items: center;justify-content: center;
        }
	    .header-1 img{width:80%;}
    } 
    </style>
</head>
<body oncontextmenu = "return false;">
<script src="../assets/js/sweetalert.min.js"></script>

<!-- header section starts  -->

<header>

<div class="header-1" style = "background:#fff;">

<center><a href="#" class="logo" style = 'color:#fe2121;'>
<img src = '../assets/images/logo2.png'></a>

</div>

    

</header>
<!-- Pickup section starts  -->

<section class="contact">
    <h2 class = "mb-3">Select Date for Election</h2>
    <form action = "../adminprocessing" class = " py-5 shadow-lg border-gray rounded" method = "post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="date" name = "date" class="form-control border-danger py-3 mb-3 fs-4" required placeholder="Enter Name in English">
        </div>
        <button type="submit" name = "set_date" class="btn btn-danger border-0 w-25 py-3 fs-4">Set Date</button>
    </form>
</section>

<!-- Pickup section ends -->
<br><br>
<!-- custom js file link  -->
<script src="../assets/js/script.js"></script>
<?php
if(isset($_SESSION['setdate'])){
    $txt = 'Successfully. Selected the date for election';
    echo "<script>
        swal({
        title: 'Successfully',
            text: '$txt',
            icon: 'success',
        });
    </script>";
    unset($_SESSION['setdate']);
}
?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>
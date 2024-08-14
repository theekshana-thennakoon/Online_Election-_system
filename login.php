<?php
session_start();
if(isset($_SESSION['AddStatusAdmin'])){
    header("Location:SelectMembors");
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

    <link rel="stylesheet" href="assets/boostrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/boostrap/css/bootstrap.min.css">
    <style>
    .header-1 img{width:30%;}
        @media (max-width: 739px) {
	    .header-1 img{width:80%;}
    } 
    </style>
</head>
<body oncontextmenu = "return false;">
<script src="assets/js/sweetalert.min.js"></script>

<!-- header section starts  -->

<header>

    <div class="header-1 mt-2" style = 'background:#fff;'>

        <center><a href="#" class="logo" style = 'color:#fe2121;'>
        <img src = 'assets/images/logo2.png'></a>

    </div>

    

</header>
<!-- Pickup section starts  -->

<section class="container" style = "margin-top:10%;">
    
	<form action='adminprocessing' method = 'post' class = "border rounded py-5 px-4 shadow-lg">

        <div class = "form-group">
            <div class="row">
                <div class="col">
                <label for="email">Email Address</label>
                <input type = 'text' name = 'usernameAdmin' id = "email" class = "form-control" placeholder='Username' required>
                </div>
                <div class="col">
                <label for="password">Password</label>
                <input type = 'password' name = 'pwd' id = "password" class = "form-control" placeholder='Password' required>
                </div>
            </div>
        </div>
        <br>
        <div class = "form-group mt-3 text-center">
            <button type='submit' name = 'loginAdmin' value='Login' class='btn btn-danger px-5'>Login</button>
        </div>
       
    </form>
	
</section>

<!-- Pickup section ends -->
<br><br>
<!-- custom js file link  -->
<script src="assets/js/script.js"></script>
<?php
if(isset($_SESSION['wrongpwd'])){
    echo "<script>
        swal({
        title: 'Wrong Password',
            text: 'Please Check Your Password',
            icon: 'error',
        });
    </script>";
    unset($_SESSION['wrongpwd']);
}

if(isset($_SESSION['wrongemail'])){
    echo "<script>
        swal({
        title: 'Wrong Username',
            text: 'Please Check Your Username',
            icon: 'error',
        });
    </script>";
    unset($_SESSION['wrongemail']);
}

?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>
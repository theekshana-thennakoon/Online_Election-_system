<?php
session_start();
include('database.php');
date_default_timezone_set('Asia/Colombo');

$sqlc = "SELECT * FROM electiondate";
$resultc = $conn->query($sqlc);
if ($resultc->num_rows > 0){
    while($rowc = $resultc->fetch_assoc()){
        $election_date = $rowc['date'];
    }
}
if(date('Y-m-d') != "{$election_date}"){
	header("Location:registration");
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
    <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/boostrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/boostrap/css/bootstrap.min.css">
    <style>
    .header-1 img{width:30%;}
    .contact{
        margin-top:20vh;align-items: center;justify-content: center;
    }
    .contact-2{
        display:none;
    }
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
<script src="assets/js/sweetalert.min.js"></script>

<!-- header section starts  -->

<header>

<div class="header-1" style = "background:#fff;">

<center><a href="#" class="logo" style = 'color:#fe2121;'>
<img src = 'assets/images/logo2.png'></a>

</div>

    

</header>
<!-- Pickup section starts  -->

<section class="contact">
	<form action='processing' method = 'post' class = "rounded py-5 shadow-lg">
        <input type="text" name = 'nic' class="form-control border-danger form-control-lg py-3 fs-4" placeholder = "Enter Nic Number ( ජාතික හැදුනුම්පත් අංකය ඇතුලත් කරන්න | தேசிய அடையாள எண்ணை உள்ளிடவும் )" required>
        <button type='submit' name = 'confirm' class='btn border-danger btn-danger btn-lg mt-5 py-3 fs-3 w-50'>අනන්‍යතාවය තහවුරු කරන්න | Confirm identity அடையாளத்தைச் சரிபார்க்கவும்'</button>
    </form>	
</section>

<section class="contact-2">
	<form>
    <center><img src = 'images/nofoundpageimg.png' class = 'ntfoundgif'><br>
        <input type = 'confirm' value="You can't View this page in mobile view" class='btn btn-primary btn-lg mt-5 pt-4 pb-4 fs-1' style = 'width:100%;background:#5F3920;'>
    </form>	
</section>

<!-- Pickup section ends -->
<br><br>
<!-- custom js file link  -->
<script src="assets/js/script.js"></script>
<?php
if(isset($_SESSION['checkNic'])){
    echo "<script>
        swal({
        title: 'Invalied NIC',
            text: 'Please Check Your National Identity Card Number',
            icon: 'error',
        });
    </script>";
}
if(isset($_SESSION['cantApply'])){
    echo "<script>
        swal({
        title: 'Cannot Vote',
            text: 'You cant vote for this election because your  age not yet completed',
            icon: 'error',
        });
    </script>";
}
if(isset($_SESSION['alreadyVoted'])){
    echo "<script>
        swal({
        title: 'Cannot Vote',
            text: 'You Already Voted',
            icon: 'error',
        });
    </script>";
}

if(isset($_SESSION['notVoted'])){
    echo "<script>
        swal({
        title: 'You can Vote',
            text: 'You Already registerd. but not voted',
            icon: 'success',
        });
    </script>";
}

if(isset($_SESSION['notRegisterd'])){
    echo "<script>
        swal({
        title: 'You cannot Vote',
            text: 'You not registerd.',
            icon: 'error',
        });
    </script>";
}

if(isset($_SESSION['sussessReg'])){
    $txt = 'Successfully. You can vote now';
    echo "<script>
        swal({
        title: 'Successfully',
            text: '$txt',
            icon: 'success',
        });
    </script>";
}
session_destroy();
?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>
<!DOCTYPE html>
<?php
session_start();
include('../database.php');
if(!isset($_SESSION['AddStatusAdmin'])){
    header("Location:login");
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/boostrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/boostrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    
	<title>Sri Lanka Election</title>
	<style>
		*{margin:0;padding:0;}
		.leftbar{float:left;width:18%;height:100vh;background:#eee;text-align:center;
		}
		.rightbar{float:right;width:82%;height:100vh;background:#fff;text-align:center;
		}
		.leftbar input{width:90%;height:8vh;margin:4% 0;background:#9C53A0;border:1px solid #9C53A0;}
		.leftbar form img{width:90%;margin:3% 0;cursor:pointer;color:#fe2121;
		}
		.contact-2{display:none;}
		@media (max-width: 750px) {
		.header-1 img{width:90%;background:#fff;}
		.leftbar , .rightbar{display:none;}
		.ntfoundgif{width:50%;}
		.contact-2{
            display: block;
        }
    } 
	</style>
</head>
<body oncontextmenu = "return false;">
	<div class="leftbar bg-danger pt-4">
		<form action="#" method = 'post'>
			<button type="submit" name = 'dashboard' style = "background:transparent;border:none;"><img src = 'assets/images/badge.png'></button>
			<button type="submit" class = "btn btn-danger border-white fs-4 mb-4 w-75 shadow-lg py-4 mx-3 mt-5" name = 'add_new_party'> Add New Party</button><br>
			<button type="submit" class = "btn btn-danger border-white fs-4 mb-4 w-75 shadow-lg py-4 mx-3 " name = 'add_candidate'> Add Candidate</button><br>
			<button type="submit" class = "btn btn-danger border-white fs-4 mb-4 w-75 shadow-lg py-4 mx-3 " name = 'election_date'>Set Election Date</button><br>
			<button type="submit" class = "btn btn-danger border-white fs-4 mb-4 w-75 shadow-lg py-4 mx-3 " name = 'all_parties'>All Parties</button><br>
			<button type="submit" class = "btn btn-danger border-white fs-4 mb-4 w-75 shadow-lg py-4 mx-3 " name = 'all_candidates'>All Candidates</button><br>
		</form>
	</div>
	<div class="rightbar">
	<?php            
        if (isset($_POST['add_new_party'])){
            echo "<iframe src='admin/add_new_party.php' style = 'border:none;width:100%;height:99vh'></iframe>";
        }
        else if (isset($_POST['election_date'])){
            echo "<iframe src='admin/election_date.php' style = 'border:none;width:100%;height:99vh'></iframe>";
        }
		else if (isset($_POST['add_candidate'])){
            echo "<iframe src='admin/add_candidate.php' style = 'border:none;width:100%;height:99vh'></iframe>";
        }
		else if (isset($_POST['all_parties'])){
            echo "<iframe src='admin/all_parties.php' style = 'border:none;width:100%;height:99vh'></iframe>";
        }
		else if (isset($_POST['all_candidates'])){
            echo "<iframe src='admin/all_candidates.php' style = 'border:none;width:100%;height:99vh'></iframe>";
        }
		else if (isset($_POST['dashboard'])){
            echo "<iframe src='admin/dashboard.php' style = 'border:none;width:100%;height:89.43vh'></iframe>";
        }
        else{
            echo "<iframe src='admin/dashboard.php' style = 'border:none;width:100%;height:99vh'></iframe>";
        }
    ?>
	</div>

	<section class="contact-2"  style = "width:100%;background:#fff;">
		<div class="header-1">
		<center><a href="#" class="logo" style = 'color:#fff;'>
		<img src = '../assets/images/logo2.png'></a>

		</div>
		<form>
		<center><img src = '../assets/images/nofoundpageimg.png' class = 'ntfoundgif'><br>
			<input type = 'submit' value="You can't View this page in mobile view" class='btn btn-primary btn-lg mt-5 pt-4 pb-4 fs-1' style = 'width:100%;background:#5F3920;'>
		</form>	
	</section>

	<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

</script>
</body>
</html>
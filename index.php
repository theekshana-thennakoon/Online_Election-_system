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
if(!isset($_SESSION['user_nic'])){
	header("Location:confirm_identity");
}
if(date('Y-m-d') != "{$election_date}"){
	header("Location:registration");
}
?>
<?php
//include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sri Lanka Election</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
	<link href="assets/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/boostrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/boostrap/css/bootstrap.min.css">
    <style>
	.home {margin-top:-70px}
	.header-1 img{width:30%;}
	a{text-decoration:none;}
  @media (max-width: 739px) {
	.header-1 img{width:80%;}
	.inputBox .selectplant{width:100%}
  } 
    </style>
</head>
<body oncontextmenu = "return false;">
<script src="assets/js/sweetalert.min.js"></script>

<!-- header section starts  -->

<header>
    <div class="header-1" style = "background:#fff;">
		<center><a href="#" class="logo" style = 'color:#fe2121;'>
        <img src = 'assets/images/logo2.png'></a></center>
    </div>
</header>
<section class="content">
	<div class="row">

		<?php

			$sql = "SELECT * FROM parties";
			$result = $conn->query($sql);
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					$id = $row['id'];
					$namee = $row['namee'];
					$names = $row['names'];
					$namet = $row['namet'];
					$symbol = $row['symbol'];
					echo "
					<div class='col-sm-3 mb-3'>
						<a href = 'first_vote/{$id}'>
							<div class='card border-danger rounded' style = 'height:100%;'>
								<div class='card-body' title = '{$names}'>
									<center>
										<img src='assets/images/Party_logos/{$symbol}' style = 'width:25%; border-radius:8px;' alt= '{$names}'>
										<h5 class='card-title fs-4 mb-3 mt-2 text-dark'>{$names}</h5>
										<h5 class='card-title fs-4 mb-3 mt-2 text-dark'>{$namee}</h5>
										<h5 class='card-title fs-4 mb-3 mt-2 text-dark'>{$namet}</h5>
									</center>
								</div>
							</div>
						</a>
					</div>
					";
				}
			}

		?>
	</div>
</section>
<!-- Pickup section ends -->
<br><br>
<!-- custom js file link  -->
<script src="assets/js/script.js"></script>
    
</body>
</html>
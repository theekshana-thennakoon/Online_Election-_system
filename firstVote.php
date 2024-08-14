<?php
session_start();
include('database.php');
date_default_timezone_set('Asia/Colombo');
if(date('Y-m-d') != "2023-09-14" and !(isset($_GET['party_id'])) and !isset($_SESSION['user_nic'])){
	header("Location:index");
}
else if(isset($_GET['party_id'])){
	$party_id = $_GET['party_id'];
	$_SESSION['party_id'] = $party_id;
}
else{
	header("Location:index");
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
	<link href="/projects/Election2/assets/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="/projects/Election2/assets/css/style.css">
	<link rel="stylesheet" href="../assets/boostrap/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="assets/boostrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <style>
	.home {margin-top:-70px}
	.header-1 img{width:30%;}
	.sinhala{
    font-family: 'FMBindumathi x';
    src: url ('FM-Bindumathi.TTF');
}
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
<img src = '../assets/images/logo2.png'></a>

</div>
</header>
<section class="content text-center">
	<h2>Select Your first Vote</h2>
	<h2 class = "sinhala"> ඔබේ පළමු ඡන්දය තෝරන්න </h2>
	<h3>உங் கள்முதல்வாக்ககத்ததர்ந்ததடுக்கவும</h3>
</section>
<section class="container">
	<form action="../processing" method = 'post'>
	<div class="row">
		<?php

			$sql = "SELECT * FROM candidates where pid = {$party_id}";
			$result = $conn->query($sql);
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					$id = $row['id'];
					$namee = $row['namee'];
					$names = $row['names'];
					$namet = $row['namet'];
					$number = $row['number'];
					echo "
					<div class='col-sm-3 mb-3'>
					<input style = 'display:none;' type = 'radio' value = '{$id}' id = '{$id}' name = 'first_vote' class = 'first_vote' style = ''>
					<label for = '{$id}'>
					<div class='card vote vote_{$id}' style=\"width: 17rem;\">
					<div class='card-body' title = '{$names}'>
						<center>";
						if($number != 0){
							echo "
							<h5 class=\"card-title fs-2 mt-3 mb-4 px-1 py-3\" style = 'border:2px solid #DC3545;border-radius:100px;width:20%;'>
								{$number}
							</h5>";
						}
							
						echo "<h5 class='card-title fs-5 mb-3'>{$names}</h5>
							<h5 class='card-title fs-5 mb-3'>{$namee}</h5>
							<h5 class='card-title fs-5 mb-3'>{$namet}</h5>
						</center>
					</div>
					</div>
					</label>
				</div>
					";
				}
			}
			
			?>
	</div>
	<center>
		<button type='submit' name = 'select_first_vote' class='btn btn-danger w-50 py-3 fs-4' disabled>Record your first vote | ඔබේ පළමු ඡන්දය සටහන් කරන්න <br> உங் கள்முதல்வாக்ககத்ததர்ந்ததடுக்கவும</button>
	</center>
	</form>
</section>
<!-- Pickup section ends -->
<br><br>
<!-- custom js file link  -->
<!--<script src="assets/js/script.js"></script>-->
<script>
	let first_votes = document.querySelectorAll("input[name='first_vote']");

	let findSelected = () => {
		let selected = document.querySelector("input[name='first_vote']:checked").value;
		let voted_card = document.querySelector(".vote_"+selected);
		let submit_btn = document.querySelector(".btn");
		voted_card.style.background = '#DC3545';
		voted_card.style.color = '#FFF';
		submit_btn.disabled = false;
	}

	first_votes.forEach(first_vote =>{
		first_vote.addEventListener("change",findSelected);
	});
</script>
    
</body>
</html>
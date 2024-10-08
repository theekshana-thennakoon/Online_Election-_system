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
if(date('Y-m-d') != "{$election_date}" and !(isset($_SESSION['party_id'])) ){
	header("Location:index");
}
else{
	$party_id = $_SESSION['party_id'];
	$first_vote_id = $_SESSION['first_vote_id'];
	$second_vote_id = $_SESSION['second_vote_id'];
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
	.header-1{background:#fff;}
	.header-1 img{width:30%;}
	a{text-decoration:none; color:#9C53A0;}
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
    <div class="header-1">
		<center><a href="#" class="logo" style = 'color:#fe2121;'>
        <img src = 'assets/images/logo2.png'></a></center>
    </div>
</header>
<section class="content text-center">
	<h2>Select your third vote</h2>
	<h1 class = "sinhala"> ඔබේ තුන්වන ඡන්දය තෝරන්න </h1>
	<h2>உங்கள் மூன்றாவது வாக்கைத் தேர்ந்தெடுக்கவும்</h2>
</section>
<section class="content">
	<form action="processing" method = 'post'>
	<div class="row">
		<?php

			$sql = "SELECT * FROM candidates where pid = {$party_id} and (id != {$first_vote_id} and id != {$second_vote_id})";
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
					<div class='card vote vote_{$id}' style=\"width: 25rem;\">
					<div class='card-body' title = '{$names}'>
						<center>";
						if($number != 0){
							echo "
							<h5 class=\"card-title fs-2 mt-3 mb-4 px-1 py-3\" style = 'border:2px solid #DC3545;border-radius:100px;width:20%;'>
								{$number}
							</h5>";
						}
							
						echo "
							<h5 class='card-title fs-4 mb-3 mt-2'>{$names}</h5>
							<h5 class='card-title fs-4 mb-3 mt-2'>{$namee}</h5>
							<h5 class='card-title fs-4 mb-3 mt-2'>{$namet}</h5>
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
		<button type='submit' name = 'select_third_vote' class='btn btn-primary w-50 pt-3 pb-3 fs-4' style = 'background:#9C53A0' disabled>Record your third vote | ඔබේ තුන්වන ඡන්දය සටහන් කරන්න <br> உங்கள் மூன்றாவது வாக்கை பதிவு செய்யுங்கள்</button>
		<a href="submit_vote">
        <h2 class = "fs-4 text-center mt-5">Skip | මඟ හරින්න | தவிர்க்கவும்</h2>
        </a>
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
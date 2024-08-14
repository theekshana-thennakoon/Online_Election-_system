<?php
session_start();
include('../database.php');
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
    .header-1{background:#fff;}
    .header-1 img{width:30%;}
    .contact{
        margin-top:5vh;align-items: center;justify-content: center;
    }
    .contact-2{
        display:none;
    }
    </style>
</head>
<body oncontextmenu = "return false;">
<script src="../assets/js/sweetalert.min.js"></script>

<header>
    <div class="header-1">
        <center><a href="#" class="logo" style = 'color:#fe2121;'>
        <img src = '../assets/images/logo2.png'></a>
    </div>
</header>
<section class="contact">
    <h2>Add Candidate</h2>
    <form action = "../adminprocessing" class = "shadow-lg py-5 border-gray rounded" method = "post" enctype="multipart/form-data">
        <div class="form-group">
            <select name = "party" class="form-control border-danger" style = "background:#fff;width:100%;border:1px solid #9C53A0;">
            <option>Select Party</option>
            <?php
			$sql = "SELECT * FROM parties";
			$result = $conn->query($sql);
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					$id = $row['id'];
					$namee = $row['names'];
					echo "<option value = '{$id}'>{$namee}</option>";
				}
			}
		?>
            </select>
        </div>
        <div class="form-group">
            <input type="text" name = "namee" class="form-control border-danger pt-3 pb-3 mb-3 fs-4" placeholder="Enter Name in English" required>
        </div>
        <div class="form-group">
            <input type="text" name = "names" class="form-control border-danger pt-3 pb-3 mb-3 fs-4" placeholder="Enter Name in Sinhala" required>
        </div>
        <div class="form-group">
            <input type="text" name = "namet" class="form-control border-danger pt-3 pb-3 mb-3 fs-4" placeholder="Enter Name in Tamil" required>
        </div>
        <div class="form-group">
            <input type="text" name = "number" class="form-control border-danger pt-3 pb-3 mb-3 fs-4" placeholder="Enter Number (if have)" required>
        </div>
        <div class="form-group">
            <select name = "constituency" class="form-control border-danger" style = "background:#fff;width:100%;border:1px solid #9C53A0;" required>
            <option>Select Constituency</option>
            <?php
			$sql = "SELECT * FROM poolingdivitions";
			$result = $conn->query($sql);
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					$idd = $row['id'];
					$divition = $row['divition'];
					echo "<option value = '{$idd}'>{$divition}</option>";
				}
			}
		?>
            </select>
        </div>
        <button type="submit" name = "add_candidate" class="btn border-0 btn-danger w-25 pt-3 pb-3 fs-4">Add Candidate</button>
    </form>
</section>

<!-- Pickup section ends -->
<br><br>
<!-- custom js file link  -->
<script src="../assets/js/script.js"></script>
<?php
if(isset($_SESSION['setcandidate'])){
    $txt = 'Successfully. Set Added the Candidate';
    echo "<script>
        swal({
        title: 'Successfully',
            text: '$txt',
            icon: 'success',
        });
    </script>";
}
unset($_SESSION['setcandidate']);
?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>
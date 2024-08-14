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
    .header-1 img{width:30%;}
    body::-webkit-scrollbar {
            display: none;
        }
    .contact{
        margin-top:2vh;align-items: center;justify-content: center;
    }
    a{text-decoration:none;}
    .contact-2{
        display:none;
    }
    </style>
</head>
<body oncontextmenu = "return false;">

<header>
    <div class="header-1" style = "background:#fff;">
        <center><a href="#" class="logo" style = 'color:#fe2121;'>
        <img src = '../assets/images/logo2.png'></a>
    </div>
</header>
<section class="contact">
    <form action='all_parties.php' method = 'post' style = "border:none;margin-bottom:2%;">
        <input type="text" name = 'name' class="form-control form-control-lg border-danger py-3 fs-4" placeholder = "Search Party">
        <input type='submit' name = 'search_party' value='Confirm identity' style = 'display:none;'>
    </form>
    <h2>All Parties</h2>
    <div class="p-3 rounded shadow-lg">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" class = 'fs-4 bg-danger text-white'>Name (English)</th>
      <th scope="col" class = 'fs-4 bg-danger text-white'>Name (Sinhala)</th>
      <th scope="col" class = 'fs-4 bg-danger text-white'>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
            if(isset($_POST['search_party'])){
                $name = $_POST['name'];
                $sql = "SELECT * FROM parties WHERE namee LIKE '%{$name}%' OR names LIKE '%{$name}%' OR namet LIKE '%{$name}%'";
            }
            else{
                $sql = "SELECT * FROM parties";
            }
			$result = $conn->query($sql);
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					$id = $row['id'];
					$namee = $row['namee'];
					$names = $row['names'];
					echo "
                    <tr>
                        <td class = 'fs-4'>{$namee}</td>
                        <td class = 'fs-4'>{$names}</td>
                        <td class = 'fs-4 text-white'><a href = '../adminprocessing/{$id}' class = 'text-danger'>Delete</a></td>
                    </tr>
                    ";
				}
			}
		?>
  </tbody>
</table>
<div>
</section>
<script src="../assets/js/script.js"></script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>
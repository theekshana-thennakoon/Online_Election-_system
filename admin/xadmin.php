<?php
session_start();
?>
<?php
include('../database.php');
?>
<?php
if(isset($_POST['loginAdmin'])){
    $username = $_POST['usernameAdmin'];
    $pwd = $_POST['pwd'];
    $sql = "SELECT * FROM adminlogin where username = '{$username}'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $pasword = $row['pwd'];
            $id = $row['id'];
        }
        $verifypwd = password_verify($pwd, $pasword);
		if($verifypwd){
            $_SESSION['AddStatusAdmin'] = $id;
            header("Location:selectmembers");
        }
        else{
            $_SESSION['wrongpwd'] = 100;
			echo "<script>window.history.back()</script>";
        }
    }
    else{
        $_SESSION['wrongemail'] = 100;
		echo "<script>window.history.back()</script>";
    }
    
}

if(isset($_POST['set_date'])){
    $electiondate = $_POST['date'];
    $sql = "SELECT * FROM electiondate";
    $result = $conn->query($sql);
	if ($result->num_rows > 0){
		$sqli = "UPDATE electiondate SET date = '$electiondate'";
    }
    else{
        $sqli = "INSERT INTO electiondate(date) VALUES('$electiondate')";
    }
    
	if($conn->query($sqli) === TRUE){
        $_SESSION['setdate'] = 100;
		echo "<script>window.history.back()</script>";
	}
}

if(isset($_POST['add_new_party'])){
    $namee = $_POST['namee'];
    $names = $_POST['names'];
    $namet = $_POST['namet'];
    $_FILES['img']['name'];
    if(isset($_FILES['img'])){
        if ($_FILES['img']['name'] == ''){
            $image = 'NoAttachment.png';
        }
        else{
            $image = $_FILES['img']['name'];
            $filetmpname = $_FILES['img']['tmp_name'];
            $filesize = $_FILES['img']['size'];
            $folder = '../assets/images/Party_logos/';
        }
    }
    else{
        $image = 'NoAttachment.png';
    }
    $sqli = "INSERT INTO parties(namee,names,namet,symbol) VALUES('$namee','$names','$namet','$image')";
	if($conn->query($sqli) === TRUE){
        if($image != 'NoAttachment.png'){
	        move_uploaded_file($filetmpname,$folder.$image);
        }
        $_SESSION['setparty'] = 100;
		echo "<script>window.history.back()</script>";
	}
}

if(isset($_POST['add_candidate'])){
    $namee = $_POST['namee'];
    $names = $_POST['names'];
    $namet = $_POST['namet'];
    $party = $_POST['party'];
    $constituency = $_POST['constituency'];
    $number = $_POST['number'];
    if($number == ""){
        $number = 0;
    }
    $sqli = "INSERT INTO candidates(pid,namee,names,namet,number,constituency) VALUES($party,'$namee','$names','$namet',$number,'$constituency')";
	if($conn->query($sqli) === TRUE){
        $_SESSION['setcandidate'] = 100;
		echo "<script>window.history.back()</script>";
	}
}

if(isset($_GET['party_del_id'])){
    $id = $_GET['party_del_id'];
    $sqli = "DELETE FROM parties WHERE id = {$id}";
	if($conn->query($sqli) === TRUE){
        $_SESSION['setcandidate'] = 100;
		echo "<script>window.history.back()</script>";
	}
}

if(isset($_GET['candidate_del_id'])){
    $id = $_GET['candidate_del_id'];
    $sqli = "DELETE FROM candidates WHERE id = {$id}";
	if($conn->query($sqli) === TRUE){
        //$_SESSION['setcandidate'] = 100;
		echo "<script>window.history.back()</script>";
	}
}

if(isset($_GET['candidate_del_all'])){
    $sqli = "DELETE FROM candidates";
	if($conn->query($sqli) === TRUE){
        //$_SESSION['setcandidate'] = 100;
		echo "<script>window.history.back()</script>";
	}
}
?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
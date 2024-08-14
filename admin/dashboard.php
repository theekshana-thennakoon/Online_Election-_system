<?php
include('../database.php');
$sql = "SELECT count(id) as no_of_parties FROM parties";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $no_of_parties = $row['no_of_parties'];
    }
}
else{
    $no_of_parties = 0;
}

$sqlc = "SELECT count(id) as no_of_candidates FROM candidates";
$resultc = $conn->query($sqlc);
if ($resultc->num_rows > 0){
    while($rowc = $resultc->fetch_assoc()){
        $no_of_candidates = $rowc['no_of_candidates'];
    }
}
else{
    $no_of_candidates = 0;
}

$sqlv = "SELECT count(id) as no_of_voters FROM voters WHERE status = 'voted'";
$resultv = $conn->query($sqlv);
if ($resultv->num_rows > 0){
    while($rowv = $resultv->fetch_assoc()){
        $no_of_voters = $rowv['no_of_voters'];
    }
}
else{
    $no_of_voters = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sri Lanka Election</title>
    <style>
        body::-webkit-scrollbar {
            display: none;
        }
        .header-1{background:#F5F6F9;}
        .header-1 img{width:30%;margin-top:2vh;}
        table,thead th,tr,tbody td {border:1px solid #000;}
        thead th{text-align:center;}
    </style>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/boostrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/boostrap/css/bootstrap.min.css">

</head>

<body oncontextmenu = "return false;">
<header>
<div class="header-1" style = 'background:#fff;'>
    <center><a href="#" class="logo" style = 'color:#fe2121;'>
    <img src = '../assets/images/logo2.png'></a>
</div>
</header>
    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper">

            <!-- Main Content -->
            <div id="content" class = 'ml-2 mr-2'>

                <!-- Begin Page Content -->
                <div>
                    <!-- Content Row -->
                    <div class="row mt-3 px-2">

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2 px-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                No of Parties</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "{$no_of_parties}";?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-flag fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2 px-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                No of Candidates</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "{$no_of_candidates}";?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2 px-3">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                No of Voters</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "{$no_of_voters}";?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Pie Chart -->
                        <!--<div class="col-xl-3 col-lg-3">
                            <a href="">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Download Report</h6>
                                    <div class="col-auto">
                                        <i class="fas fa-download fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>-->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-2">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-danger">Election Result</h6>
                                </div>
                                <!-- Card Body -->
                                <table class = "border-danger m-2 shadow-m">
                                    <thead>
                                        <tr>
                                        <th rowspan = 2 colspan = "2" class = "border-white bg-danger text-white">Parties</th>
                                        <th colspan = 6 class = "border-white py-2 bg-danger text-white">Results</th>
                                        </tr>
                                        <tr>
                                        <th colspan = 2 class = "border-white py-2 bg-danger text-white">1st Vote</th>
                                        <th colspan = 2 class = "border-white py-2 bg-danger text-white">2nd Vote</th>
                                        <th colspan = 2 class = "border-white py-2 bg-danger text-white">3rd Vote</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sql = "SELECT * FROM parties";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0){
                                                while($row = $result->fetch_assoc()){
                                                    $id = $row["id"];
                                                    $namee = $row["namee"];
                                                    $sqla = "SELECT max(count) as mcount FROM votes WHERE pid = {$id}";
                                                    $resulta = $conn->query($sqla);
                                                    if ($resulta->num_rows > 0){
                                                        while($rowa = $resulta->fetch_assoc()){
                                                            $mcount = $rowa["mcount"];
                                                        }
                                                        $sqlb = "SELECT * FROM candidates WHERE pid = {$id}";
                                                        $resultb = $conn->query($sqlb);
                                                        $maxfc = "";
                                                        $maxsc = "";
                                                        $maxtc = "";
                                                        $maxfcount = 0;
                                                        $maxscount = 0;
                                                        $maxtcount = 0;
                                                        if ($resultb->num_rows > 0){
                                                            while($rowb = $resultb->fetch_assoc()){
                                                                $cid = $rowb["id"];
                                                                $cnamee = $rowb["namee"];
                                                                $sqlc = "SELECT max(f_count) as mf_count,max(s_count) as ms_count , max(t_count) as mt_count FROM votes WHERE candidate_id = {$cid}";
                                                                $resultc = $conn->query($sqlc);
                                                                if ($resultc->num_rows > 0){
                                                                    while($rowc = $resultc->fetch_assoc()){
                                                                        $mf_count = $rowc["mf_count"];
                                                                        $ms_count = $rowc["ms_count"];
                                                                        $mt_count = $rowc["mt_count"];
                                                                        if($mf_count > $maxfcount){
                                                                            $maxfcount = $mf_count;
                                                                            $maxfc = $cnamee;
                                                                        }
                                                                        if($ms_count > $maxscount){
                                                                            $maxscount = $ms_count;
                                                                            $maxsc = $cnamee;
                                                                        }
                                                                        if($mt_count > $maxtcount){
                                                                            $maxtcount = $mt_count;
                                                                            $maxtc = $cnamee;
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                        if($mcount != 0){
                                                            if($mt_count == 0){
                                                                $maxtcount = "-";                   
                                                                $maxtc = "-";                   
                                                            }
                                                            echo "<tr>
                                                                <td style = 'border-bottom:1px solid #DC3545; border-right:1px solid #DC3545;border-left:1px solid #DC3545;' class = 'p-2'>{$namee}</td>
                                                                <td style = 'border-bottom:1px solid #DC3545; border-right:1px solid #DC3545;'>{$mcount}</td>
                                                                <td style = 'border-bottom:1px solid #DC3545; border-right:1px solid #DC3545;' class = 'p-2'>{$maxfc}</td> <td style = 'padding-right:10px; border-bottom:1px solid #DC3545; border-right:1px solid #DC3545;'>{$maxfcount}</td>
                                                                <td style = 'border-bottom:1px solid #DC3545; border-right:1px solid #DC3545;' class = 'p-2'>{$maxsc}</td> <td style = 'padding-right:10px; border-bottom:1px solid #DC3545; border-right:1px solid #DC3545;'>{$maxscount}</td>
                                                                <td style = 'border-bottom:1px solid #DC3545; border-right:1px solid #DC3545;' class = 'p-2'>{$maxtc}</td> <td style = 'padding-right:10px; border-bottom:1px solid #DC3545; border-right:1px solid #DC3545;'>{$maxtcount}</td>
                                                            </tr>";
                                                        }
                                                    }
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
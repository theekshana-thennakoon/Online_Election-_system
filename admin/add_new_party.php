<?php
session_start();
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
    <script src="../assets/js/jquery.js"></script>
    <style>
    .header-1 img{width:30%;}
    .contact{
        margin-top:10vh;align-items: center;justify-content: center;
    }
    .contact-2{
        display:none;
    }
    #upload {opacity: 0;}

    #upload-label {position: absolute;top: 50%;left: 1rem;transform: translateY(-50%);}

    .image-area {
        border: 2px dashed rgba(255, 255, 255, 0.7);padding: 1rem;position: relative;
    }

    .image-area::before {
        content: 'Uploaded image result';
        color: #fff;font-weight: bold;text-transform: uppercase;
        position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);
        font-size: 0.8rem;z-index: 1;
    }

    .image-area img {z-index: 2;position: relative;}
    
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
<script src="../assets/js/sweetalert.min.js"></script>

<!-- header section starts  -->

<header>
<div class="header-1" style = "background:#fff;">

        <center><a href="#" class="logo" style = 'color:#fe2121;'>
        <img src = '../assets/images/logo2.png'></a>

    </div>

</header>
<!-- Pickup section starts  -->

<section class="contact">
    <h2>Add New Party</h2>
    <form action = "../adminprocessing" class = "py-5 shadow-lg border-gray rounded" method = "post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" name = "namee" class="form-control border-danger py-3 mb-3 fs-4" aria-describedby="emailHelp" placeholder="Enter Name in English" required>
        </div>
        <div class="form-group">
            <input type="text" name = "names" class="form-control border-danger py-3 mb-3 fs-4" placeholder="Enter Name in Sinhala" required>
        </div>
        <div class="form-group">
            <input type="text" name = "namet" class="form-control border-danger py-3 mb-3 fs-4" placeholder="Enter Name in Tamil" required>
        </div>
        <div class="form-group input-group my-3 px-2 py-3 fs-4 rounded shadow-sm" style = "border:1px solid #DC3545;">
            <input id="upload" type="file" name = "img" onchange="readURL(this);" class="form-control border border-danger">
            <label id="upload-label" for="upload" class="font-weight-light text-muted fs-4">Choose file</label>
            <div class="input-group-append">
                <label for="upload" class="btn btn-danger text-white m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><font class="text-uppercase font-weight-bold text-white fs--4">Choose file</font></label>
            </div>
        </div>
        <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
            <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
        <button type="submit" name = "add_new_party" class="btn btn-danger w-25 py-3 fs-4">Add New Party</button>
    </form>
</section>

<!-- Pickup section ends -->
<br><br>
<!-- custom js file link  -->
<script src="../assets/js/script.js"></script>
<?php
if(isset($_SESSION['setparty'])){
    $txt = 'Successfully. Set the Party';
    echo "<script>
        swal({
        title: 'Successfully',
            text: '$txt',
            icon: 'success',
        });
    </script>";
}
unset($_SESSION['setparty']);
?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

    /*  ==========================================
        SHOW UPLOADED IMAGE
    * ========================================== */
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imageResult')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function () {
        $('#upload').on('change', function () {
            readURL(input);
        });
    });

    /*  ==========================================
        SHOW UPLOADED IMAGE NAME
    * ========================================== */
    var input = document.getElementById( 'upload' );
    var infoArea = document.getElementById( 'upload-label' );

    input.addEventListener( 'change', showFileName );
    function showFileName( event ) {
    var input = event.srcElement;
    var fileName = input.files[0].name;
    infoArea.textContent = 'File name: ' + fileName;
    }
</script>
</body>
</html>
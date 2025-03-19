<?php
require_once __DIR__ . "/includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title>Vault News || Contact Us</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="css/icons.css">
</head>

<body>
    <!-- Navigation -->
    <?php include('includes/header.php'); ?>

    <!-- Page Content -->
    <div class="container contact_us" style="margin-top: 9%;">
        <?php 
        $pagetype = 'contactus';
        $query = mysqli_query($con, "SELECT PageTitle, Description FROM tblpages WHERE PageName='$pagetype'");
        $row = mysqli_fetch_array($query);
        ?>
        <h1 class="mb-3 text-center"><?php echo htmlentities($row['PageTitle']); ?></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>

        <!-- Contact Content -->
        <div class="row" style="margin-top: -4%;">
            <div class="col-lg-12 text-left">
                <p><?php echo $row['Description']; ?></p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>

    <script src="js/foot.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <style>
         @media (max-width: 1024px) {
            .container h1{
                padding-top: 5%;
            }
        }
        @media (max-width: 768px) {
            .container h1{
                padding-top: 1%;
            }
        }
        @media (max-width: 425px) {
            .container h1{
                padding-top: 3%;
            }
        }
    </style>
</body>
</html>

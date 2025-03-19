<?php 
session_start();
include('includes/config.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(strlen($_SESSION['login'])==0) { 
    header('location:index.php');
    exit();
} else {
    if(isset($_POST['update'])) {
        $pagetype = 'contactus';
        $pagetitle = mysqli_real_escape_string($con, $_POST['pagetitle']);
        $pagedetails = mysqli_real_escape_string($con, $_POST['pagedescription']);

        $query = "UPDATE tblpages SET PageTitle='$pagetitle', Description='$pagedetails' WHERE PageName='$pagetype'";
        if(mysqli_query($con, $query)) {
            $_SESSION['msg'] = "Contact Us page successfully updated.";
        } else {
            $_SESSION['error'] = "Something went wrong: " . mysqli_error($con);
        }
        header("Location: contactus.php");
        exit();
    }
}
?>

<!-- Top Bar Start -->
<?php include('includes/topheader.php'); ?>
<!-- ========== Left Sidebar Start ========== -->
<?php include('includes/leftsidebar.php'); ?>
<!-- Left Sidebar End -->

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Contact Us Page</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li><a href="#">Pages</a></li>
                            <li class="active">Contact Us</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <!-- Display Success/Error Messages -->
            <div class="row">
                <div class="col-sm-12">
                    <?php if(isset($_SESSION['msg'])) { ?>
                        <div class="alert alert-success"><?php echo $_SESSION['msg']; unset($_SESSION['msg']); ?></div>
                    <?php } ?>
                    <?php if(isset($_SESSION['error'])) { ?>
                        <div class="alert alert-danger"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
                    <?php } ?>
                </div>
            </div>

            <?php 
            $pagetype = 'contactus';
            $query = mysqli_query($con, "SELECT PageTitle, Description FROM tblpages WHERE PageName='$pagetype'");
            $row = mysqli_fetch_array($query);
            ?>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="p-6">
                        <div class="">
                            <form name="contactus" method="post">
                                <div class="form-group m-b-20">
                                    <label for="pagetitle">Page Title</label>
                                    <input type="text" class="form-control" id="pagetitle" name="pagetitle" value="<?php echo htmlentities($row['PageTitle']) ?>" required>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box">
                                            <h4 class="m-b-30 m-t-0 header-title"><b>Page Details</b></h4>
                                            <textarea class="summernote" name="pagedescription" required><?php echo htmlentities($row['Description']) ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" name="update" class="btn btn-custom waves-effect waves-light btn-md">Update and Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </div> <!-- content -->
</div>

<?php include('includes/footer.php'); ?>

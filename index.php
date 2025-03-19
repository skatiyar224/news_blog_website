<?php
session_start();
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
    <title>Vault News| Home Page</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
    <!-- Navigation -->
    <?php include('includes/header.php'); ?>
    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row" style="margin-top: 9%">
            <!-- Blog Entries Column -->
            <div class="col-md-9">
                <h4 class="widget-title mb-4" style="font-size: 50px;">Today <span>Highlight</span></h4>
                <!-- Blog Post -->
                <div class="row">
                    <!-- CAROUSAL for categories -->
                    <div class="owl-carousel owl-theme" id="slider">

                        <!-- Entertaiment slide -->
                        <?php
                        // Fetch the latest entertainment-related news based on Posting Date
                        $ent_query = mysqli_query($con, "SELECT tblposts.id as pid, tblposts.PostTitle as posttitle, tblposts.PostImage, tblcategory.CategoryName as category, tblcategory.id as cid, tblsubcategory.Subcategory as subcategory, tblposts.PostDetails as postdetails, tblposts.PostingDate as postingdate, tblposts.PostUrl as url FROM tblposts LEFT JOIN tblcategory ON tblcategory.id=tblposts.CategoryId LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId=tblposts.SubCategoryId WHERE tblposts.Is_Active=1 AND tblcategory.CategoryName='ENTERTAINMENT' ORDER BY tblposts.PostingDate DESC LIMIT 1");

                        if ($row = mysqli_fetch_array($ent_query)) { ?>
                            <div class="card mb-4 border-0">
                                <img class="card-img-top h-full"
                                    src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>"
                                    alt="<?php echo htmlentities($row['posttitle']); ?>" height="570px">
                                <div class="card-body">
                                    <p class="m-0">
                                        <a class="badge bg-success text-decoration-none link-light"
                                            href="category.php?catid=<?php echo htmlentities($row['cid']); ?>"
                                            style="color:#fff">
                                            <?php echo htmlentities($row['category']); ?>
                                        </a>
                                        <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">
                                            <?php echo htmlentities($row['subcategory']); ?>
                                        </a>
                                    </p>
                                    <p class="m-0"><small> Posted on
                                            <?php echo htmlentities($row['postingdate']); ?></small></p>
                                    <a href="Article_read?nid=<?php echo htmlentities($row['pid']); ?>"
                                        class="card-title text-decoration-none text-dark">
                                        <h5 class="card-title"><?php echo htmlentities($row['posttitle']); ?></h5>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>

                        <!-- Technology slide -->
                        <?php
                        // Fetch the latest entertainment-related news based on Posting Date
                        $ent_query = mysqli_query($con, "SELECT tblposts.id as pid, tblposts.PostTitle as posttitle, tblposts.PostImage, tblcategory.CategoryName as category, tblcategory.id as cid, tblsubcategory.Subcategory as subcategory, tblposts.PostDetails as postdetails, tblposts.PostingDate as postingdate, tblposts.PostUrl as url FROM tblposts LEFT JOIN tblcategory ON tblcategory.id=tblposts.CategoryId LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId=tblposts.SubCategoryId WHERE tblposts.Is_Active=1 AND tblcategory.CategoryName='TECHNOLOGY' ORDER BY tblposts.PostingDate DESC LIMIT 1");

                        if ($row = mysqli_fetch_array($ent_query)) { ?>
                            <div class="card mb-4 border-0">
                                <img class="card-img-top h-full"
                                    src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>"
                                    alt="<?php echo htmlentities($row['posttitle']); ?>" height="570px">
                                <div class="card-body">
                                    <p class="m-0">
                                        <a class="badge bg-success text-decoration-none link-light"
                                            href="category.php?catid=<?php echo htmlentities($row['cid']); ?>"
                                            style="color:#fff">
                                            <?php echo htmlentities($row['category']); ?>
                                        </a>
                                        <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">
                                            <?php echo htmlentities($row['subcategory']); ?>
                                        </a>
                                    </p>
                                    <p class="m-0"><small> Posted on
                                            <?php echo htmlentities($row['postingdate']); ?></small></p>
                                    <a href="Article_read?nid=<?php echo htmlentities($row['pid']); ?>"
                                        class="card-title text-decoration-none text-dark">
                                        <h5 class="card-title"><?php echo htmlentities($row['posttitle']); ?></h5>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>


                        <!-- LifeStyle slide -->
                        <?php
                        // Fetch the latest entertainment-related news based on Posting Date
                        $ent_query = mysqli_query($con, "SELECT tblposts.id as pid, tblposts.PostTitle as posttitle, tblposts.PostImage, tblcategory.CategoryName as category, tblcategory.id as cid, tblsubcategory.Subcategory as subcategory, tblposts.PostDetails as postdetails, tblposts.PostingDate as postingdate, tblposts.PostUrl as url FROM tblposts LEFT JOIN tblcategory ON tblcategory.id=tblposts.CategoryId LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId=tblposts.SubCategoryId WHERE tblposts.Is_Active=1 AND tblcategory.CategoryName='LIFESTYLE' ORDER BY tblposts.PostingDate DESC LIMIT 1");

                        if ($row = mysqli_fetch_array($ent_query)) { ?>
                            <div class="card mb-4 border-0">
                                <img class="card-img-top h-full"
                                    src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>"
                                    alt="<?php echo htmlentities($row['posttitle']); ?>" height="570px">
                                <div class="card-body">
                                    <p class="m-0">
                                        <a class="badge bg-success text-decoration-none link-light"
                                            href="category.php?catid=<?php echo htmlentities($row['cid']); ?>"
                                            style="color:#fff">
                                            <?php echo htmlentities($row['category']); ?>
                                        </a>
                                        <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">
                                            <?php echo htmlentities($row['subcategory']); ?>
                                        </a>
                                    </p>
                                    <p class="m-0"><small> Posted on
                                            <?php echo htmlentities($row['postingdate']); ?></small></p>
                                    <a href="Article_read?nid=<?php echo htmlentities($row['pid']); ?>"
                                        class="card-title text-decoration-none text-dark">
                                        <h5 class="card-title"><?php echo htmlentities($row['posttitle']); ?></h5>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>


                        <!-- Political slide -->
                        <?php
                        // Fetch the latest entertainment-related news based on Posting Date
                        $ent_query = mysqli_query($con, "SELECT tblposts.id as pid, tblposts.PostTitle as posttitle, tblposts.PostImage, tblcategory.CategoryName as category, tblcategory.id as cid, tblsubcategory.Subcategory as subcategory, tblposts.PostDetails as postdetails, tblposts.PostingDate as postingdate, tblposts.PostUrl as url FROM tblposts LEFT JOIN tblcategory ON tblcategory.id=tblposts.CategoryId LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId=tblposts.SubCategoryId WHERE tblposts.Is_Active=1 AND tblcategory.CategoryName='POLITICAL' ORDER BY tblposts.PostingDate DESC LIMIT 1");

                        if ($row = mysqli_fetch_array($ent_query)) { ?>
                            <div class="card mb-4 border-0">
                                <img class="card-img-top h-full"
                                    src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>"
                                    alt="<?php echo htmlentities($row['posttitle']); ?>" height="570px">
                                <div class="card-body">
                                    <p class="m-0">
                                        <a class="badge bg-success text-decoration-none link-light"
                                            href="category.php?catid=<?php echo htmlentities($row['cid']); ?>"
                                            style="color:#fff">
                                            <?php echo htmlentities($row['category']); ?>
                                        </a>
                                        <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">
                                            <?php echo htmlentities($row['subcategory']); ?>
                                        </a>
                                    </p>
                                    <p class="m-0"><small> Posted on
                                            <?php echo htmlentities($row['postingdate']); ?></small></p>
                                    <a href="Article_read?nid=<?php echo htmlentities($row['pid']); ?>"
                                        class="card-title text-decoration-none text-dark">
                                        <h5 class="card-title"><?php echo htmlentities($row['posttitle']); ?></h5>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>


                        <!-- Sports slide -->
                        <?php
                        // Fetch the latest entertainment-related news based on Posting Date
                        $ent_query = mysqli_query($con, "SELECT tblposts.id as pid, tblposts.PostTitle as posttitle, tblposts.PostImage, tblcategory.CategoryName as category, tblcategory.id as cid, tblsubcategory.Subcategory as subcategory, tblposts.PostDetails as postdetails, tblposts.PostingDate as postingdate, tblposts.PostUrl as url FROM tblposts LEFT JOIN tblcategory ON tblcategory.id=tblposts.CategoryId LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId=tblposts.SubCategoryId WHERE tblposts.Is_Active=1 AND tblcategory.CategoryName='SPORTS' ORDER BY tblposts.PostingDate DESC LIMIT 1");

                        if ($row = mysqli_fetch_array($ent_query)) { ?>
                            <div class="card mb-4 border-0">
                                <img class="card-img-top h-full"
                                    src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>"
                                    alt="<?php echo htmlentities($row['posttitle']); ?>" height="570px">
                                <div class="card-body">
                                    <p class="m-0">
                                        <a class="badge bg-success text-decoration-none link-light"
                                            href="category.php?catid=<?php echo htmlentities($row['cid']); ?>"
                                            style="color:#fff">
                                            <?php echo htmlentities($row['category']); ?>
                                        </a>
                                        <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">
                                            <?php echo htmlentities($row['subcategory']); ?>
                                        </a>
                                    </p>
                                    <p class="m-0"><small> Posted on
                                            <?php echo htmlentities($row['postingdate']); ?></small></p>
                                    <a href="Article_read?nid=<?php echo htmlentities($row['pid']); ?>"
                                        class="card-title text-decoration-none text-dark">
                                        <h5 class="card-title"><?php echo htmlentities($row['posttitle']); ?></h5>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>


                        <!-- Crime slide -->
                        <?php
                        // Fetch the latest entertainment-related news based on Posting Date
                        $ent_query = mysqli_query($con, "SELECT tblposts.id as pid, tblposts.PostTitle as posttitle, tblposts.PostImage, tblcategory.CategoryName as category, tblcategory.id as cid, tblsubcategory.Subcategory as subcategory, tblposts.PostDetails as postdetails, tblposts.PostingDate as postingdate, tblposts.PostUrl as url FROM tblposts LEFT JOIN tblcategory ON tblcategory.id=tblposts.CategoryId LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId=tblposts.SubCategoryId WHERE tblposts.Is_Active=1 AND tblcategory.CategoryName='CRIME' ORDER BY tblposts.PostingDate DESC LIMIT 1");

                        if ($row = mysqli_fetch_array($ent_query)) { ?>
                            <div class="card mb-4 border-0">
                                <img class="card-img-top h-full"
                                    src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>"
                                    alt="<?php echo htmlentities($row['posttitle']); ?>" height="570px">
                                <div class="card-body">
                                    <p class="m-0">
                                        <a class="badge bg-success text-decoration-none link-light"
                                            href="category.php?catid=<?php echo htmlentities($row['cid']); ?>"
                                            style="color:#fff">
                                            <?php echo htmlentities($row['category']); ?>
                                        </a>
                                        <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">
                                            <?php echo htmlentities($row['subcategory']); ?>
                                        </a>
                                    </p>
                                    <p class="m-0"><small> Posted on
                                            <?php echo htmlentities($row['postingdate']); ?></small></p>
                                    <a href="Article_read?nid=<?php echo htmlentities($row['pid']); ?>"
                                        class="card-title text-decoration-none text-dark">
                                        <h5 class="card-title"><?php echo htmlentities($row['posttitle']); ?></h5>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>


                        <!-- Spiritual slide -->
                        <?php
                        // Fetch the latest entertainment-related news based on Posting Date
                        $ent_query = mysqli_query($con, "SELECT tblposts.id as pid, tblposts.PostTitle as posttitle, tblposts.PostImage, tblcategory.CategoryName as category, tblcategory.id as cid, tblsubcategory.Subcategory as subcategory, tblposts.PostDetails as postdetails, tblposts.PostingDate as postingdate, tblposts.PostUrl as url FROM tblposts LEFT JOIN tblcategory ON tblcategory.id=tblposts.CategoryId LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId=tblposts.SubCategoryId WHERE tblposts.Is_Active=1 AND tblcategory.CategoryName='SPIRITUAL' ORDER BY tblposts.PostingDate DESC LIMIT 1");

                        if ($row = mysqli_fetch_array($ent_query)) { ?>
                            <div class="card mb-4 border-0">
                                <img class="card-img-top h-full"
                                    src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>"
                                    alt="<?php echo htmlentities($row['posttitle']); ?>" height="570px">
                                <div class="card-body">
                                    <p class="m-0">
                                        <a class="badge bg-success text-decoration-none link-light"
                                            href="category.php?catid=<?php echo htmlentities($row['cid']); ?>"
                                            style="color:#fff">
                                            <?php echo htmlentities($row['category']); ?>
                                        </a>
                                        <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">
                                            <?php echo htmlentities($row['subcategory']); ?>
                                        </a>
                                    </p>
                                    <p class="m-0"><small> Posted on
                                            <?php echo htmlentities($row['postingdate']); ?></small></p>
                                    <a href="Article_read?nid=<?php echo htmlentities($row['pid']); ?>"
                                        class="card-title text-decoration-none text-dark">
                                        <h5 class="card-title"><?php echo htmlentities($row['posttitle']); ?></h5>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    
                    <?php
                    if (isset($_GET['pageno'])) {
                        $pageno = $_GET['pageno'];
                    } else {
                        $pageno = 1;
                    }
                    $no_of_records_per_page = 8;
                    $offset = ($pageno - 1) * $no_of_records_per_page;


                    $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
                    $result = mysqli_query($con, $total_pages_sql);
                    $total_rows = mysqli_fetch_array($result)[0];
                    $total_pages = ceil($total_rows / $no_of_records_per_page);


                    $query = mysqli_query($con, "select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <div class="col-md-4">
                            <div class="card mb-4 border-0 shadow">
                                <img class="card-img-top lazyload"
                                    src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>"
                                    alt="<?php echo htmlentities($row['posttitle']); ?>" height="200px" loading="lazy">
                                <div class="card-body">
                                    <p class="m-0">
                                        <!--category-->
                                        <a class="badge bg-success text-decoration-none link-light"
                                            href="category.php?catid=<?php echo htmlentities($row['cid']) ?>"
                                            style="color:#fff"><?php echo htmlentities($row['category']); ?></a>
                                        <!--Subcategory--->
                                        <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">
                                            <?php echo htmlentities($row['subcategory']); ?>
                                        </a>
                                    </p>
                                    <p class="m-0"><small> Posted on
                                            <?php echo htmlentities($row['postingdate']); ?>
                                        </small></p>
                                    <a href="Article_read?nid=<?php echo htmlentities($row['pid']) ?>"
                                        class="card-title text-decoration-none text-dark">
                                        <h5 class="card-title">
                                            <?php echo htmlentities($row['posttitle']); ?>
                                        </h5>
                                    </a>
                                    <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid']) ?>" class="">Read More &rarr;</a> -->
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="col-md-12">

                        <!-- Pagination -->
                        <!-- <ul class="pagination justify-content-center mb-4">
                        <li class="page-item"><a href="?pageno=1"  class="page-link border-0">First</a></li>
                        <li class="<?php if ($pageno <= 1) {
                                        echo 'disabled';
                                    } ?> page-item">
                           <a href="<?php if ($pageno <= 1) {
                                        echo '#';
                                    } else {
                                        echo "?pageno=" . ($pageno - 1);
                                    } ?>" class="page-link border-0">Prev</a>
                        </li>
                        <li class="<?php if ($pageno >= $total_pages) {
                                        echo 'disabled';
                                    } ?> page-item">
                           <a href="<?php if ($pageno >= $total_pages) {
                                        echo '#';
                                    } else {
                                        echo "?pageno=" . ($pageno + 1);
                                    } ?> " class="page-link border-0">Next</a>
                        </li>
                        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link border-0">Last</a></li>
                        </ul> -->
                    </div>
                </div>


                <h4 class="widget-title mb-3 ml-3" style="font-size: 50px;">Anime</h4>
                <!-- Fetch Amine-related news Section -->
                <div class="entertainment row p-3">
                    <?php
                    // Fetch Anime-related news
                    $ent_query = mysqli_query($con, "SELECT tblposts.id as pid, tblposts.PostTitle as posttitle, tblposts.PostImage, tblcategory.CategoryName as category, tblcategory.id as cid, tblsubcategory.Subcategory as subcategory, tblposts.PostDetails as postdetails, tblposts.PostingDate as postingdate, tblposts.PostUrl as url FROM tblposts LEFT JOIN tblcategory ON tblcategory.id=tblposts.CategoryId LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId=tblposts.SubCategoryId WHERE tblposts.Is_Active=1 AND tblcategory.CategoryName='ANIME' ORDER BY tblposts.id DESC LIMIT 6");
                    while ($row = mysqli_fetch_array($ent_query)) { ?>
                        <div class="col-md-4">
                            <div class="card mb-4 border-0 shadow">
                                <img class="card-img-top"
                                    src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>"
                                    alt="<?php echo htmlentities($row['posttitle']); ?>" height="200px">
                                <div class="card-body">
                                    <p class="m-0">
                                        <a class="badge bg-success text-decoration-none link-light"
                                            href="category.php?catid=<?php echo htmlentities($row['cid']); ?>"
                                            style="color:#fff">
                                            <?php echo htmlentities($row['category']); ?>
                                        </a>
                                        <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">
                                            <?php echo htmlentities($row['subcategory']); ?>
                                        </a>
                                    </p>
                                    <p class="m-0"><small> Posted on
                                            <?php echo htmlentities($row['postingdate']); ?></small></p>
                                    <a href="Article_read?nid=<?php echo htmlentities($row['pid']); ?>"
                                        class="card-title text-decoration-none text-dark">
                                        <h5 class="card-title"><?php echo htmlentities($row['posttitle']); ?></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <h4 class="widget-title mb-3 ml-3" style="font-size: 50px;">Entertainment</h4>
                <!-- Fetch entertainment-related news Section -->
                <div class="entertainment row p-3">
                    <?php
                    // Fetch entertainment-related news
                    $ent_query = mysqli_query($con, "SELECT tblposts.id as pid, tblposts.PostTitle as posttitle, tblposts.PostImage, tblcategory.CategoryName as category, tblcategory.id as cid, tblsubcategory.Subcategory as subcategory, tblposts.PostDetails as postdetails, tblposts.PostingDate as postingdate, tblposts.PostUrl as url FROM tblposts LEFT JOIN tblcategory ON tblcategory.id=tblposts.CategoryId LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId=tblposts.SubCategoryId WHERE tblposts.Is_Active=1 AND tblcategory.CategoryName='ENTERTAINMENT' ORDER BY tblposts.id DESC LIMIT 6");
                    while ($row = mysqli_fetch_array($ent_query)) { ?>
                        <div class="col-md-4">
                            <div class="card mb-4 border-0 shadow">
                                <img class="card-img-top"
                                    src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>"
                                    alt="<?php echo htmlentities($row['posttitle']); ?>" height="200px">
                                <div class="card-body">
                                    <p class="m-0">
                                        <a class="badge bg-success text-decoration-none link-light"
                                            href="category.php?catid=<?php echo htmlentities($row['cid']); ?>"
                                            style="color:#fff">
                                            <?php echo htmlentities($row['category']); ?>
                                        </a>
                                        <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">
                                            <?php echo htmlentities($row['subcategory']); ?>
                                        </a>
                                    </p>
                                    <p class="m-0"><small> Posted on
                                            <?php echo htmlentities($row['postingdate']); ?></small></p>
                                    <a href="Article_read?nid=<?php echo htmlentities($row['pid']); ?>"
                                        class="card-title text-decoration-none text-dark">
                                        <h5 class="card-title"><?php echo htmlentities($row['posttitle']); ?></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <h4 class="widget-title mb-3 ml-3" style="font-size: 50px;">Technology</h4>
                <!-- Fetch technology-related news Section -->
                <div class="technology row p-3">
                    <?php
                    // Fetch technology-related news
                    $tech_query = mysqli_query($con, "SELECT tblposts.id as pid, tblposts.PostTitle as posttitle, tblposts.PostImage, tblcategory.CategoryName as category, tblcategory.id as cid, tblsubcategory.Subcategory as subcategory, tblposts.PostDetails as postdetails, tblposts.PostingDate as postingdate, tblposts.PostUrl as url FROM tblposts LEFT JOIN tblcategory ON tblcategory.id=tblposts.CategoryId LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId=tblposts.SubCategoryId WHERE tblposts.Is_Active=1 AND tblcategory.CategoryName='TECHNOLOGY' ORDER BY tblposts.id DESC");

                    while ($row = mysqli_fetch_array($tech_query)) { ?>
                        <div class="col-md-4">
                            <div class="card mb-4 border-0 shadow">
                                <img class="card-img-top"
                                    src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>"
                                    alt="<?php echo htmlentities($row['posttitle']); ?>" height="200px">
                                <div class="card-body">
                                    <p class="m-0">
                                        <a class="badge bg-success text-decoration-none link-light"
                                            href="category.php?catid=<?php echo htmlentities($row['cid']); ?>"
                                            style="color:#fff">
                                            <?php echo htmlentities($row['category']); ?>
                                        </a>
                                        <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">
                                            <?php echo htmlentities($row['subcategory']); ?>
                                        </a>
                                    </p>
                                    <p class="m-0"><small> Posted on
                                            <?php echo htmlentities($row['postingdate']); ?></small></p>
                                    <a href="Article_read?nid=<?php echo htmlentities($row['pid']); ?>"
                                        class="card-title text-decoration-none text-dark">
                                        <h5 class="card-title"><?php echo htmlentities($row['posttitle']); ?></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>


                <h4 class="widget-title mb-3 ml-3" style="font-size: 50px;">LifeStyle</h4>
                <!-- Fetch entertainment-related news Section -->
                <div class="entertainment row p-3">
                    <?php
                    // Fetch entertainment-related news
                    $ent_query = mysqli_query($con, "SELECT tblposts.id as pid, tblposts.PostTitle as posttitle, tblposts.PostImage, tblcategory.CategoryName as category, tblcategory.id as cid, tblsubcategory.Subcategory as subcategory, tblposts.PostDetails as postdetails, tblposts.PostingDate as postingdate, tblposts.PostUrl as url FROM tblposts LEFT JOIN tblcategory ON tblcategory.id=tblposts.CategoryId LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId=tblposts.SubCategoryId WHERE tblposts.Is_Active=1 AND tblcategory.CategoryName='LIFESTYLE' ORDER BY tblposts.id DESC LIMIT 6");
                    while ($row = mysqli_fetch_array($ent_query)) { ?>
                        <div class="col-md-4">
                            <div class="card mb-4 border-0 shadow">
                                <img class="card-img-top"
                                    src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>"
                                    alt="<?php echo htmlentities($row['posttitle']); ?>" height="200px">
                                <div class="card-body">
                                    <p class="m-0">
                                        <a class="badge bg-success text-decoration-none link-light"
                                            href="category.php?catid=<?php echo htmlentities($row['cid']); ?>"
                                            style="color:#fff">
                                            <?php echo htmlentities($row['category']); ?>
                                        </a>
                                        <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">
                                            <?php echo htmlentities($row['subcategory']); ?>
                                        </a>
                                    </p>
                                    <p class="m-0"><small> Posted on
                                            <?php echo htmlentities($row['postingdate']); ?></small></p>
                                    <a href="Article_read?nid=<?php echo htmlentities($row['pid']); ?>"
                                        class="card-title text-decoration-none text-dark">
                                        <h5 class="card-title"><?php echo htmlentities($row['posttitle']); ?></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <h4 class="widget-title mb-3 ml-3" style="font-size: 50px;">Political</h4>
                <!-- Fetch entertainment-related news Section -->
                <div class="entertainment row p-3">
                    <?php
                    // Fetch entertainment-related news
                    $ent_query = mysqli_query($con, "SELECT tblposts.id as pid, tblposts.PostTitle as posttitle, tblposts.PostImage, tblcategory.CategoryName as category, tblcategory.id as cid, tblsubcategory.Subcategory as subcategory, tblposts.PostDetails as postdetails, tblposts.PostingDate as postingdate, tblposts.PostUrl as url FROM tblposts LEFT JOIN tblcategory ON tblcategory.id=tblposts.CategoryId LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId=tblposts.SubCategoryId WHERE tblposts.Is_Active=1 AND tblcategory.CategoryName='POLITICAL' ORDER BY tblposts.id DESC LIMIT 6");
                    while ($row = mysqli_fetch_array($ent_query)) { ?>
                        <div class="col-md-4">
                            <div class="card mb-4 border-0 shadow">
                                <img class="card-img-top"
                                    src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>"
                                    alt="<?php echo htmlentities($row['posttitle']); ?>" height="200px">
                                <div class="card-body">
                                    <p class="m-0">
                                        <a class="badge bg-success text-decoration-none link-light"
                                            href="category.php?catid=<?php echo htmlentities($row['cid']); ?>"
                                            style="color:#fff">
                                            <?php echo htmlentities($row['category']); ?>
                                        </a>
                                        <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">
                                            <?php echo htmlentities($row['subcategory']); ?>
                                        </a>
                                    </p>
                                    <p class="m-0"><small> Posted on
                                            <?php echo htmlentities($row['postingdate']); ?></small></p>
                                    <a href="Article_read?nid=<?php echo htmlentities($row['pid']); ?>"
                                        class="card-title text-decoration-none text-dark">
                                        <h5 class="card-title"><?php echo htmlentities($row['posttitle']); ?></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <h4 class="widget-title mb-3 ml-3" style="font-size: 50px;">Sports</h4>
                <!-- Fetch Sports-related news Section -->
                <div class="entertainment row p-3">
                    <?php
                    // Fetch sports-related news
                    $ent_query = mysqli_query($con, "SELECT tblposts.id as pid, tblposts.PostTitle as posttitle, tblposts.PostImage, tblcategory.CategoryName as category, tblcategory.id as cid, tblsubcategory.Subcategory as subcategory, tblposts.PostDetails as postdetails, tblposts.PostingDate as postingdate, tblposts.PostUrl as url FROM tblposts LEFT JOIN tblcategory ON tblcategory.id=tblposts.CategoryId LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId=tblposts.SubCategoryId WHERE tblposts.Is_Active=1 AND tblcategory.CategoryName='SPORTS' ORDER BY tblposts.id DESC LIMIT 6");
                    while ($row = mysqli_fetch_array($ent_query)) { ?>
                        <div class="col-md-4">
                            <div class="card mb-4 border-0 shadow">
                                <img class="card-img-top"
                                    src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>"
                                    alt="<?php echo htmlentities($row['posttitle']); ?>" height="200px">
                                <div class="card-body">
                                    <p class="m-0">
                                        <a class="badge bg-success text-decoration-none link-light"
                                            href="category.php?catid=<?php echo htmlentities($row['cid']); ?>"
                                            style="color:#fff">
                                            <?php echo htmlentities($row['category']); ?>
                                        </a>
                                        <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">
                                            <?php echo htmlentities($row['subcategory']); ?>
                                        </a>
                                    </p>
                                    <p class="m-0"><small> Posted on
                                            <?php echo htmlentities($row['postingdate']); ?></small></p>
                                    <a href="Article_read?nid=<?php echo htmlentities($row['pid']); ?>"
                                        class="card-title text-decoration-none text-dark">
                                        <h5 class="card-title"><?php echo htmlentities($row['posttitle']); ?></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <h4 class="widget-title mb-3 ml-3" style="font-size: 50px;">Spiritual</h4>
                <!-- Fetch Spiritual-related news Section -->
                <div class="entertainment row p-3">
                    <?php
                    // Fetch Spiritual-related news
                    $ent_query = mysqli_query($con, "SELECT tblposts.id as pid, tblposts.PostTitle as posttitle, tblposts.PostImage, tblcategory.CategoryName as category, tblcategory.id as cid, tblsubcategory.Subcategory as subcategory, tblposts.PostDetails as postdetails, tblposts.PostingDate as postingdate, tblposts.PostUrl as url FROM tblposts LEFT JOIN tblcategory ON tblcategory.id=tblposts.CategoryId LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId=tblposts.SubCategoryId WHERE tblposts.Is_Active=1 AND tblcategory.CategoryName='SPIRITUAL' ORDER BY tblposts.id DESC LIMIT 6");
                    while ($row = mysqli_fetch_array($ent_query)) { ?>
                        <div class="col-md-4">
                            <div class="card mb-4 border-0 shadow">
                                <img class="card-img-top"
                                    src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>"
                                    alt="<?php echo htmlentities($row['posttitle']); ?>" height="200px">
                                <div class="card-body">
                                    <p class="m-0">
                                        <a class="badge bg-success text-decoration-none link-light"
                                            href="category.php?catid=<?php echo htmlentities($row['cid']); ?>"
                                            style="color:#fff">
                                            <?php echo htmlentities($row['category']); ?>
                                        </a>
                                        <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">
                                            <?php echo htmlentities($row['subcategory']); ?>
                                        </a>
                                    </p>
                                    <p class="m-0"><small> Posted on
                                            <?php echo htmlentities($row['postingdate']); ?></small></p>
                                    <a href="Article_read?nid=<?php echo htmlentities($row['pid']); ?>"
                                        class="card-title text-decoration-none text-dark">
                                        <h5 class="card-title"><?php echo htmlentities($row['posttitle']); ?></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <h4 class="widget-title mb-3 ml-3" style="font-size: 50px;">Crime</h4>
                <!-- Fetch Crime-related news Section -->
                <div class="entertainment row p-3">
                    <?php
                    // Fetch Crime-related news
                    $ent_query = mysqli_query($con, "SELECT tblposts.id as pid, tblposts.PostTitle as posttitle, tblposts.PostImage, tblcategory.CategoryName as category, tblcategory.id as cid, tblsubcategory.Subcategory as subcategory, tblposts.PostDetails as postdetails, tblposts.PostingDate as postingdate, tblposts.PostUrl as url FROM tblposts LEFT JOIN tblcategory ON tblcategory.id=tblposts.CategoryId LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId=tblposts.SubCategoryId WHERE tblposts.Is_Active=1 AND tblcategory.CategoryName='CRIME' ORDER BY tblposts.id DESC LIMIT 6");
                    while ($row = mysqli_fetch_array($ent_query)) { ?>
                        <div class="col-md-4">
                            <div class="card mb-4 border-0 shadow">
                                <img class="card-img-top"
                                    src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>"
                                    alt="<?php echo htmlentities($row['posttitle']); ?>" height="200px">
                                <div class="card-body">
                                    <p class="m-0">
                                        <a class="badge bg-success text-decoration-none link-light"
                                            href="category.php?catid=<?php echo htmlentities($row['cid']); ?>"
                                            style="color:#fff">
                                            <?php echo htmlentities($row['category']); ?>
                                        </a>
                                        <a class="badge bg-warning text-decoration-none link-light" style="color:#fff">
                                            <?php echo htmlentities($row['subcategory']); ?>
                                        </a>
                                    </p>
                                    <p class="m-0"><small> Posted on
                                            <?php echo htmlentities($row['postingdate']); ?></small></p>
                                    <a href="Article_read?nid=<?php echo htmlentities($row['pid']); ?>"
                                        class="card-title text-decoration-none text-dark">
                                        <h5 class="card-title"><?php echo htmlentities($row['posttitle']); ?></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- Sidebar Widgets Column -->
            <?php include('includes/sidebar.php'); ?>
        </div>

    </div>
    <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
    <script src="js/foot.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script>
        $('#slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            autoplay: true,
            animateOut: 'fadeOut',
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
        $('#slider2').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            autoplay: true,
            animateOut: 'fadeOut',
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 4
                }
            }
        });
    </script>
</body>

</html>
<!-- FIRST NAVBAR FOR MAIN ITEMS -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light fixed-top" style="background-color: #271E55; color: white;">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" height="65"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar items aligned to the right -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/news"><i class="fa fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/news"><i class="fa-newspaper-o fa"></i> News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us"><i class="fa fa-info-circle"></i> About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact_us"><i class="fa fa-phone"></i> Contact us</a>
                </li>

                <!-- Categories Dropdown Commented For Now -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-list"></i> Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                        <?php
                        require_once('includes/config.php');
                        $query = mysqli_query($con, "SELECT id, CategoryName FROM tblcategory");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <a class="dropdown-item" href="category.php?catid=<?php echo htmlentities($row['id']); ?>">
                                <?php echo htmlentities($row['CategoryName']); ?>
                            </a>
                        <?php } ?>
                    </div>
                </li> -->
            </ul>
        </div>

        <div>
            <div id="google_translate_element"></div>
        </div>
    </div>
</nav>

<!-- SECOND NAVBAR FOR CATEGORIES -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light fixed-top navbar-dark category-navbar">
    <div class="container">
        <div class="collapse navbar-collapse" id="categoryNav">
            <ul class="navbar-nav mx-auto">
                <?php
                require_once('includes/config.php');
                $query = mysqli_query($con, "SELECT id, CategoryName FROM tblcategory");
                while ($row = mysqli_fetch_array($query)) {
                    echo '<li class="nav-item"><a class="nav-link" href="Articles?catid=' . htmlentities($row['id']) . htmlentities($row['CategoryName']) . '" >' . htmlentities($row['CategoryName']) . '</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>


<style>
    .navbar-nav .nav-link {
        color: white !important;
        /* Ensures white text */
    }

    .navbar-nav .nav-item {
        color: white;
        padding-left: 20px;
    }

    .navbar-nav .nav-link:hover {
        color: #f8f9fa;
        /* Light white for hover effect */
    }

    .category-navbar {
        background-color: #444;
        height: 60px;
        /* Increase height */
        display: flex;
        align-items: center;
        /* Center text vertically */
        margin-top: 91px;
    }

    .category-navbar .nav-link {
        color: white !important;
        /* Ensure text color is white */
        font-size: 18px;
        /* Increase text size */
        font-weight: bold;
        /* Make text bold */
        padding: 10px 15px;
        /* Adjust padding */
    }

    .category-navbar .nav-link:hover {
        color: #f8f9fa !important;
        /* Light hover effect */
    }
    
    @media (max-width: 768px) {
        .category-navbar{
            display: none;
        }
    }
</style>
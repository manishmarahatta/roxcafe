<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../addons_backend/exta_css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../addons_backend/font_awesome/css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
    <script src="../js/sidebar.js"></script>
    <link rel="stylesheet" href="../addons_backend/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../addons_backend/bootstrap/css/bootstrap-theme.min.css">
    <script src="../addons_backend/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
    <header>
        <div id="sidebar">
            <img src="../images/logo.png"/>
            <ul>
                <li><a href="slider.php">Slider Management</a></li>
                <li><a href="designs.php">Designs Management</a></li>
                <li><a href="TattooArtist.php">Artist Management</a></li>
                <li><a href="newsmanagement.php">News Management</a></li>
                <li><a href="aboutManagement.php">About Us Management</a></li>
                <li><a href="studioManagement.php">Studio Management</a></li>
                <li><a href="gallerymanagement.php">Gallery Management</a></li>
                <li><a href="contact.php">Contact Management</a></li>
                <li><a href="testimonials.php">Testimonials Management</a></li>
                <li><a href="#">Online Order Management</a></li>
                <li><a href="logout.php">Sign Out</a></li>

            </ul>
            <div id="sidebar-btn">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <div class="bar">

                </div>

            </div>
        </div>
        <div class="info">
        <ul>
        <li class="user">
            <i class="fa fa-user" aria-hidden="true"></i>&nbsp;
            <b><?php echo $_SESSION['user']; ?></b>
        </li>
        <li class="link">
            <b><a href="http://localhost/ratnaz/"> 
                <i class="fa fa-external-link" aria-hidden="true"></i>&nbsp;
                Visit Site
            </a></b>
        </li>
        </ul>
    </div>
    </header>


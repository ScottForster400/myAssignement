<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cantor College||About Us</title>
    <?php
        include("includes/head-inc.php")
    ?>
</head>
<body>
    <div class="container">
        <?php
            include("includes/nav-inc.php")
        ?>
        <main>
            <section>
                <div class="sidebar">
                    <nav> 
                        <menu>
                        </menu>
                        
                    </nav>
                </div>
                <div class="info">
                    <h1>
                        Thank You
                    </h1>
                    <div class="text-left">
                        <div id=contact-frm>
                            <?php
                                    echo"<div class =\"form-items\">";
                                            echo"<h2>Name:</h2>";
                                            echo"<p>{$_GET["fullName"]}</p>";
                                            echo"<h2>Phone Number:</h2>";
                                            echo"<p>{$_GET["phone"]}</p>";
                                            echo"<h2>Email:</h2>";
                                            echo"<p>{$_GET["email"]}</p>";
                                    echo"</div>";
                                    echo"<div class =\"form-items\">";
                                            echo"<h2>Message:</h2>";
                                            echo"<div id=\"msgBox\" class=\"dark-back\">";
                                            echo"<p>{$_GET["msgBox"]}</p>";
                                            echo"</div>";
                                    echo"</div>";
                            ?>
                        </div>
                    </div>
                    <div>
                    <h2 >Suggested Pages</h2>
                    <div class="link-images">
                            <div class="link-image">
                                <a href="google.com"><img src="images/cantor-gallery.webp" alt="courses"></a>
                                <p>Contact Us</p>
                            </div>
                            <div class="link-image">
                                <a href="google.com"><img src="images/cantor-lecture-theatre-3.webp" alt="courses"></a>
                                <p>Facilities</p>
                            </div>
                    </div>
                </div>
            </section>
        </main>
        <?php
            include("includes/footer-inc.php")
        ?>
    </div>
    
</body>
</html>
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
                            <p class="scroll-to">Contact Us</p>
                        </menu>
                    </nav>
                </div>
                <div class="info">
                    <h1 id="Contact Us">
                        Contact Us
                    </h1>
                    <form action="thankYou.php" method="GET">
                        <div id=contact-frm>
                            <div class="form-items">
                                <label for="fullName">Name:</label>
                                <input type="text" name="fullName" required>
                                <label for="phone">Phone Number:</label>
                                <input type="tel" name="phone">
                                <label for="email">Email:</label>
                                <input type="email" name="email" required>
                            </div>
                            <div class="form-items">
                                <label for="msgBox">Message:</label>
                                <textarea name="msgBox" id="msgBox" cols="10" rows="10" required></textarea>
                            </div>
                        </div>
                        <div class="centre">
                            <input type="submit" value="submit">
                        </div>
                    </form>
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
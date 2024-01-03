<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cantor College||Contact Us</title>
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
                            <a href="aboutUs.php"><img src="images/beehiveworks.webp" alt="About Us"></a>
                            <p>About Us</p>
                        </div>
                        <div class="link-image">
                            <a href="buisness.php"><img src="images/students.webp" alt="Buisness"></a>
                            <p>Working With Buisnesses</p>
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
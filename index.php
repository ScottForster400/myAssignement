<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cantor College||Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/mobileMenu.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/mobileFooter.css">
    <link rel="stylesheet" href="css/desktopMenu.css" media="only screen and (min-width : 720px)">
    <link rel="stylesheet" href="css/desktopFooter.css" media="only screen and (min-width : 720px)">
    <script src="javaScript\indexScript.js" defer></script>
</head>
<body>
    <div class="container">
        <?php
            include("includes/nav-inc.php")
        ?>

        <main>
            <section>
                <div class="left-side-main">
                    <h1>Welcome To Cantor</h1>
                    <h2>Giving Students the education they need since 1989</h2>
                
                    <p>Cantor College was established in 1989 to specialize in Computing and Design.   At Cantor College, we want to give students
                     the education they need to achieve their career aims, leaving them equipped with the knowledge, 
                     skills and experience to succeed. Cantor College gives you the opportunities that can give you the edge when you 
                     enter the world of work, through our teaching and our links to some of the world's leading researchers and employers. 
                     Our students have gone on to successful careers in a wide range of industries across the globe. 
                      Whatever your ambitions, our learning and support can help to get the most out of your time with Cantor College, 
                      both as a student and in your future career.</p>
                    
                    <h2 class="underline">Suggested Pages</h2>
                    <div class="link-images">
                        <div class="link-image">
                            <a href="courses.php"><img src="images/cantor-gallery.webp" alt="courses"></a>
                            <p>Courses</p>
                        </div>
                        
                        
                        <div class="link-image">
                            <a href="students.php"><img src="images/cantor-atrium-top.webp" alt="students"></a>
                            <p>Students</p>
                        </div>
                        <div class="link-image">
                            <a href="contactUs.php"><img src="images/cantor-atrium-4.webp" alt="Contact Us"></a>
                            <p>Contact Us</p>
                        </div>
                    </div>
                </div>
                <div class="right-side-main">
                    <div id="image-scroller">
                        <h3>College Images</h3>
                        <div class="image-scroller-container">
                        <img id="slider-img" src="images/cantor-4.webp" alt="cantor-seating">
                        </div>
                    </div>
                    <div id="map"><!--  used this to help work out how to add map https://blog.hubspot.com/website/how-to-embed-google-map-in-html#:~:text=Embedding%20a%20static%20Google%20map,the%20code%20into%20your%20HTML.*/ -->
                    <h3>How to Find Us</h3>
                    <iframe title ="cantor college location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2380.120423524792!2d-1.4703501234427925!3d53.376894772298165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48798338bc5a1d13%3A0xad74824d1242efa8!2sCantor%20College!5e0!3m2!1sen!2sie!4v1703096922625!5m2!1sen!2sie"></iframe>
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
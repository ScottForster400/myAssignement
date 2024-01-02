<?php
require_once("includes\dbconfing-inc.php");
$courseResults = $mysqli->query("SELECT * FROM course_list");
//used https://owlcation.com/stem/Simple-search-PHP-MySQL and webdev-php-part2-mysql.pdf to help create search function
$query =$_GET["search-querey"]?? null;
$searchQuery="%".$query."%";
$stmnt=$mysqli->prepare("SELECT * FROM course_list WHERE CourseTitle LIKE ?");
$stmnt->bind_param("s",$searchQuery);
$stmnt->execute();
$results=$stmnt->get_result();

?>
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
                        <?php
                        if($results->num_rows>0){
                            while($course = $results -> fetch_object()){
                                echo"<p class=\"scroll-to\"> {$course->CourseTitle}</p>";
                            }
                        }
                        ?>
                        </menu>
                        
                    </nav>
                </div>
                <div class="info">
                    <h1>
                        Course List
                    </h1>
                  
                        <form action="courseList.php" method="GET">
                            <label for="search">Search:</label>
                            <?php
                            echo "<input type=\"text\" name=\"search-querey\" value=\"$query\"/>";
                            ?>
                            <div class="centre">
                                <input type="submit" value="search"/>
                            </div>
                        </form>
                    
                    <?php
                        $stmnt->execute();
                        $results=$stmnt->get_result();
                        if($results->num_rows>0){
                            while($course = $results -> fetch_object()){
                                echo"<div class =\"course\" id=\"{$course->CourseTitle}\">";
                                echo"<a href=\"courseDetails.php?courseID={$course->courseID}\">{$course->CourseTitle} {$course->CourseAwardName}</a>";
                                echo"<div class=\"course-info\">";
                                echo"<p>Course Type: {$course->CourseType}</p>";
                                echo"<p>UCAS Points: {$course->UcasPoints}</p>";
                                echo"<p>Study Length: {$course->StudyLength} years</p>";
                                echo"</div>";
                                echo"<p>{$course->CourseSummary}</p>";
                                echo"</div>";
    
                            }
                        }
                        else{
                            echo"<p> No Results</p>";
                        }
                    ?>
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
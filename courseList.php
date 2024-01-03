<?php
require_once("includes\dbconfing-inc.php");
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
    <title>Cantor College||Course List</title>
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
                            echo "<input type=\"text\" name=\"search-querey\" id=\"search\"value=\"$query\"/>";
                            ?>
                            <div class="centre">
                                <input type="submit" value="search"/>
                            </div>
                        </form>
                    <div id="refresh">
                        <?php
                            $query =$_GET["search-querey"]?? null;
                            $searchQuery="%".$query."%";
                            $stmnt=$mysqli->prepare("SELECT * FROM course_list WHERE CourseTitle LIKE ?");
                            $stmnt->bind_param("s",$searchQuery);
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
                    </div>
                    <h2 >Suggested Pages</h2>
                    <div class="link-images">
                        <div class="link-image">
                            <a href="contactUs.php"><img src="images/cantor-atrium-top.webp" alt="contact us"></a>
                            <p>contact Us</p>
                        </div>
                        <div class="link-image">
                            <a href="facilities.php"><img src="images/cantor-lecture-theatre-3.webp" alt="Facilities"></a>
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
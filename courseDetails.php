<?php
require_once("includes\dbconfing-inc.php");
$courseResults = $mysqli->query("SELECT * FROM course_list");
//used https://owlcation.com/stem/Simple-search-PHP-MySQL and webdev-php-part2-mysql.pdf to help create search function
$courseID =$_GET["courseID"];
$searchQuery="%".$courseID."%";
$stmnt=$mysqli->prepare("SELECT * FROM course_list WHERE courseID = ?");
$stmnt->bind_param("i",$courseID);
$stmnt->execute();
$results=$stmnt->get_result();
$course=$results->fetch_object();
if($results->num_rows<=0){
    header("Location: courseList.php");
}
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
                            <a href="courseList.php">Course List</a>
                        </menu>
                        
                    </nav>
                </div>
                <div class="info">
                    <?php
                        $stmnt->execute();
                        $results=$stmnt->get_result();
                        if($results->num_rows>0){
                            while($course = $results -> fetch_object()){
                                echo "<h1>{$course->CourseTitle} {$course->CourseAwardName}</h1>";
                                echo"<div class =\"course\">";
                                echo"<p>{$course->CourseSummary}</p>";
                                echo"<div class=\"course-info\">";
                                echo"<div class=\"course-info-section\">";
                                echo"<h2>Course Type:</h2>";
                                echo"<p>{$course->CourseType}</p>";
                                echo"<h2>UCAS Points:</h2>";
                                echo"<p>{$course->UcasPoints}</p>";
                                echo"<h2>Study Length:</h2>";
                                echo"<p>{$course->StudyLength} years</p>";
                                echo"<h2>Course Subject:</h2>";
                                echo"<p>{$course->CourseSubject} years</p>";
                                echo"<h2>Has Foundation Year:</h2>";
                                if($course->HasFoundationYear =="true"){
                                    echo"<p>Yes</p>";
                                }
                                else{
                                    echo"<p>No</p>";
                                }
                                echo"</div>";

                                echo"<div class=\"course-info-section\">";
                                echo"<h2>Year of Entery:</h2>";
                                echo"<p>{$course->YearOfEntry}</p>";
                                echo"<h2>Mode of Attendance:</h2>";
                                echo"<p>{$course->ModeOfAttendance}</p>";
                                echo"<h2>UCAS Code:</h2>";
                                echo"<p>{$course->UcasCode} years</p>";
                                echo"<h2>Still Recruiting:</h2>";
                                if($course->NoLongerRecruiting =="False"){
                                    echo"<p>Yes</p>";
                                }
                                else{
                                    echo"<p>No</p>";
                                }
                                echo"</div>";
                                echo"</div>";
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
                                <a href="google.com"><img src="images/cantor-gallery.jpg" alt="courses"></a>
                                <p>Contact Us</p>
                            </div>
                            <div class="link-image">
                                <a href="google.com"><img src="images/cantor-lecture-theatre-3.jpg" alt="courses"></a>
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
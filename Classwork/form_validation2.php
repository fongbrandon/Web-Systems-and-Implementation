<?php
    if(isset($_POST['submit'])){
    // define variables and set to empty values
    if(!empty($_POST['idnum']) || !empty($_POST['firstname']) || !empty($_POST['lastname']) ||!empty($_POST['labtest']) || !empty($_POST['groupproject'])| !empty($_POST['groupprojectpresent'])  ||!empty($_POST['researchpresent'])){
        if(!empty($_POST['gender']) || !empty($_POST['labexercise']) || !empty($_POST['coursetest']) || !empty($_POST['indiproject'])){
            
        //        function Detail(){
        //            global $idnum,$firstname,$lastname,$gender,$coursetest,$indiproject,$labtest,$groupproject,$groupprojectpresent,$researchpresent,
        //            $labexercise,$average;
                echo "<h2>Your Input:</h2>";
                echo "Student: ";
                echo $_POST['idnum']; echo "<br />";
                echo "First Name: ";
                echo $_POST['firstname'];
                echo "<br />Last Name:" ;echo $_POST['lastname'] ;
                echo "<br />Gender:" .$_POST['gender'];
                $cw=$_POST['coursetest'];
                echo "<br />Course Work Test: ".$_POST['coursetest'];
                $ip=$_POST['indiproject'];
                echo "<br />Individual Project: ".$_POST['indiproject'];
                $lt=$_POST['labtest'];
                echo "<br />Lab Test: ".$_POST['labtest'];
                $gp=$_POST['groupproject'];
                echo "<br />Group Project: ".$_POST['groupproject'];
                $gpp=$_POST['groupprojectpresent'];
                echo "<br />Group Project Presentation: ".$_POST['groupprojectpresent'];
                $rp=$_POST['researchpresent'];
                echo "<br />Research Presentation: ".$_POST['researchpresent'];
                $le=$_POST['labexercise'];
                echo "<br/>Lab Excercise: ".$_POST['labexercise'];
                echo "Your final grade is $average <br />";
                $average;
                $average=$ip*.15+$lt*.2+
            $cw*.15+
            $gp*.25+$gpp*.10+
            $rp*.1+$lb*.05;
                if ($average>=60)
                    echo "$firstname $lastname pass the course";
                else
                    echo "$firstname $lastname fail the course";
                ob_end_flush();
        //        }
        }
    }
    }

?>
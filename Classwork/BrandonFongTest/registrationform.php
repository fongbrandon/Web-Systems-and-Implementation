<html>
    <body>
        <?php
            session_start();
            $str = $_SESSION['email'];
            echo $str . "<br>";
            echo "Welcome ";
            echo trim($str,"@utech.edu.jm");
        ?>
        <h1>Environmental Club Membership Registration Form</h1>
        <p>Please fill out all applicable information to register membership. Student MUST be enrolled in a
             Degree Program at the University of Technology, Jamaica within the School of COmputing information
              Technology
        </p>
        <form method="$_POST" action = "registration_formvali.php">
            <h4><strong>DEMOGRAPHCS</strong></h4>
            <p>ID Number</p>
            <input type='text' name='id' required>
            <p>Name</p>
            <input type='text' name='fn' required>
            <input type='text' name='ln' required>
            <p>Gender</p>
            <select id="Gender" name="Gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <p>Accademic Year</p>
            <input type='number' name='year' min="1990" max="2021" required>
            <h4><strong>Contact Info</strong></h4>
            <p>Cell Phone</p>
            <input type='number' name='cell' required>
            <p>Email</p>
            <input type='email' name='email' required>
            <h4><strong>Cousre of Sudy</strong></h4>
            <input type="radio" id="CS" name="fav_language" value="ADCS">
            <label for="ADCS">Associate Degree in Computer Studies</label><br>
            <input type="radio" id="IT" name="fav_language" value="CIT">
            <label for="CIT">BSc in Computing and Information Technology</label><br>
            <input type="radio" id="APD" name="fav_language" value="APD">
            <label for="APD">BSc in Animation Productionand Development</label>
            <input type = "submit" name = "submit" value = "Submit"> 
        </form>
    </body>
</html>
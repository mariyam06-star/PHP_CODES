<?php
    include("scon.php");
    if(isset($_REQUEST['btnsubmit']))

    {
        $std_name = $_REQUEST['std_name'];
        $std_email = $_REQUEST['std_email'];
        $std_dep = $_REQUEST['std_dep'];
        $std_roll = $_REQUEST['std_roll'];
        $insert="insert into studentinfo values(null,'$std_name','$std_email','$std_dep','$std_roll')";
        mysqli_query($con,$insert);
    }

?>
<html>
    <body>
    <form method="post" align="center">
        <h1>Student information form </h1> <br>
        <div>
            <label>Full Name:</label>
            <input type="text" name="std_name">
        </div> <br><br>
        <div>
            <label>Email:</label>
            <input type="text" name="std_email">
        </div> <br><br>
        <div>
        <label>Department:</label>
        <select name="std_dep" required>
            <option value="">--Select Department--</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Electronics">Electronics</option>
            <option value="Mechanical">Mechanical</option>
            <option value="Civil">Civil</option>
            <option value="Electrical">Electrical</option>
        </select>
    </div> <br><br>
        <div>
            <label>Roll No:</label>
            <input type="text" name="std_roll">
        </div> <br><br>
        <div>
            <input type="submit" name="btnsubmit">

            <a href = "view.php" > view </a>
        </div> 
        
    </form>
    </body>
</html>
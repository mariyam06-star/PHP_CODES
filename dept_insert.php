<?php
include("connection.php");
   
if(isset($_REQUEST['btnsubmit']))
    {
        $dept_name=$_REQUEST['dept_name'];
        $insert="insert into dept values(null,'$dept_name')";
        mysqli_query($con,$insert);
    }
?>

<html>
    <body>
        <form method="post">
            <div>
                <label>Department-Name</label>
                <input type = "text" name = "dept_name">
            </div>
            <div>
            <input type = "submit" name="btnsubmit">
            <a href="dept_view.php"> view </a>
            </div>

        </form>
    </body>
</html>
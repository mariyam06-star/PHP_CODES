<?php
    include("con2.php");
    if(isset($_REQUEST['bnsubmit']))
    {
        $emp_name = $_REQUEST['emp_name'];
        $emp_dep = $_REQUEST['emp_dep'];
        $emp_email = $_REQUEST['emp_email'];
        $insert="insert into emp_reg values(null,'$emp_name','$emp_dep',$emp_email')";
        mysqli_query($con,$insert);
    }

?>
<html>
    <body>
    <form method="post">
        <div>
            <label>Name </label>
            <input type="text" name="emp_name">
        </div>
        <div>
            <label>Department</label>
            <input type="text" name="emp_dep">
        </div>
         <div>
            <label>Email</label>
            <input type="text" name="emp_email">
        </div>
        <div>
            <input type="submit" name="bnsubmit">
        </div>
        
    </form>
    </body>
</html>
<?php
    include("connection.php");
    if(isset($_REQUEST['btnsubmit']))

    {
        $std_name = $_REQUEST['std_name'];
        $std_email = $_REQUEST['std_email'];
        $depts_id= $_REQUEST['depts_id'];
        $insert="insert into std_reg values(null,'$std_name','$std_email','$depts_id')";
        mysqli_query($con,$insert);
    }

?>
<html>
    <body>
    <form method="post" align="center">
        <div>
            <label>Full Name </label>
            <input type="text" name="std_name">
        </div> <br>
        <div>
            <label>Email</label>
            <input type="text" name="std_email">
        </div> <br>
        <div>
            <label>Department</label>
            <select name="depts_id">
                <option>Select department</option>
                <?php 
                $view="select * from dept";
                $res=mysqli_query($con,$view);
                while($row=mysqli_fetch_assoc($res))
                    {
                ?>
                <option value="<?php  echo $row['dept_name'];?>"><?php echo $row['dept_name']; ?></option>
                <?php 
                    }
                ?>
            </select> 
        </div> <br>
        <div>
            <input type="submit" name="btnsubmit">
            <a href = "view.php" > view </a>
        </div>
        
    </form>
    </body>
</html>
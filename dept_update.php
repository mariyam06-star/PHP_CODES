<?php
    include("connection.php");

    $update=$_REQUEST['upd'];    
    $view1="select * from dept where dept_id=$update";
    $res1=mysqli_query($con,$view1);
    $row1=mysqli_fetch_assoc($res1);

    if(isset($_REQUEST['btnupdate']))
    {
        $dept_name = $_REQUEST['dept_name'];
       
        $updates="update dept set dept_name='$dept_name' where dept_id=$update";
        mysqli_query($con,$updates);
        header("location:dept_view.php");
    }
?>

<html>
    <body>
        <form method="post">
            <h1>Update Data</h1>
            <div>
                <label>Department name :</label>
                <input type="text" name="dept_name" value="<?php echo $row1['dept_name']; ?>">
             </div>
            <div>
                <input type="submit" name="btnupdate" value="update">
                <a href="dept_view.php">view</a>
            </div>
        </form>
    </body>
</html>
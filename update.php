<?php
    include("scon.php");

    $update=$_REQUEST['upd'];    
    $view1="select * from studentinfo where std_id=$update";
    $res1=mysqli_query($con,$view1);
    $row1=mysqli_fetch_assoc($res1);

    if(isset($_REQUEST['btnupdate']))
    {
        $std_name = $_REQUEST['std_name'];
        $std_email = $_REQUEST['std_email'];
        $std_dep = $_REQUEST['std_dep'];
        $std_roll = $_REQUEST['std_roll'];

        $updates="update studentinfo set std_name='$std_name',std_email='$std_email',std_dep='$std_dep',std_roll='$std_roll' where std_id=$update";
        mysqli_query($con,$updates);
        header("location:view.php");
    }
?>

<html>
    <body>
        <form method="post">
            <h1>Update Data</h1>
            <div>
                <label>Full name :</label>
                <input type="text" name="std_name" value="<?php echo $row1['std_name']; ?>">
             </div>
            <div>
                <label>Email :</label>
                <input type="text" name="std_email" value="<?php  echo $row1['std_email']; ?>">
            </div>
             <div>
                <label>Department :</label>
                <input type="text" name="std_dep" value="<?php  echo $row1['std_dep']; ?>">
            </div>
             <div>
                <label>Roll No :</label>
                <input type="text" name="std_roll" value="<?php  echo $row1['std_roll']; ?>">
            </div>
            <div>
                <input type="submit" name="btnupdate" value="update">
                <a href="view.php">view</a>
            </div>
        </form>
    </body>
</html>
<?php
    include("connection.php");
     if(isset($_REQUEST['del']))
    {
        $delete=$_REQUEST['del'];
        
        $deleted="delete from dept where dept_id=$delete";
        mysqli_query($con,$deleted);
    }
?>

<html>
    <body>
        <table border="2">
            <tr>
                <th>Id</th>
                <th>Department- Name</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
                <?php
                    $i=1;
                    $dept_view="select *from dept";
                    $res=mysqli_query($con,$dept_view);  
                    while($row=mysqli_fetch_assoc($res))
                    {

                ?>
            <tr>
                <td> <?php  echo $i++; ?> </td>
                <td> <?php  echo"$row[dept_name]"; ?> </td>
                <td> <a href="dept_view.php?del=<?php echo"$row[dept_id]";?>"onclick="return confirm('are you sure  you delete this record')" > delete</a></td>
                <td> <a href="dept_update.php?upd=<?php echo"$row[dept_id]";?>"> update</a></td>
            </tr>
                 <?php 

                    }

                 ?>
        </table>
    </body>
</html>
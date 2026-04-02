<?php
    include("connection.php");
     if(isset($_REQUEST['del']))
    {
        $delete=$_REQUEST['del'];
        
        $deleted="delete from std_reg where std_id=$delete";
        mysqli_query($con,$deleted);
    }
?>

<html>
    <body>
        <table border="2">
            <tr>
                <th>Id</th>
                <th>Student Name</th>
                <th>Email</th>
                <th>Department Id</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
                <?php
                    $i=1;
                    $view="select std_reg.std_id,std_reg.std_name,std_reg.std_email,dept.dept_name from std_reg 
                    join  dept on dept.dept_id=std_reg.depts_id";
                    $res=mysqli_query($con,$view);  
                    while($row=mysqli_fetch_assoc($res))
                    {

                ?>
            <tr>
                <td> <?php  echo $i++; ?> </td>
                <td> <?php  echo $row['std_name']; ?> </td>
                <td> <?php  echo $row['std_email']; ?> </td>
                <td> <?php  echo $row['dept_name']; ?> </td>
                <td> <a href="view.php?del=<?php echo $row['std_id'];?>"onclick="return confirm('are you sure you delete this record')" > delete</a></td>
                <td><a href="update.php?upd=<?php echo $row['std_id'];?>"> update</a></td>
            </tr>
                 <?php 

                    }

                 ?>
        </table>
    </body>
</html>
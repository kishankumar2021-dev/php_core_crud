<html>
    <head>
       <style> </style>
        
    </head>
    <body>
        <h1 style="text-align:center;">Display All Records<h1>

        <table width="90%" cellspacing="0" border="1px">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>IAMGES</th>
                <th>ADDRESS</th>
                <th>UPDATE</th>
                <th>DELETE</th>
            </tr>


        <?php
        
       include 'conn.php';
       
       $sql = "SELECT * FROM innovative order by id desc ";

       $query = mysqli_query($conn,$sql); 

       $i=0;

       while($res= mysqli_fetch_assoc($query))
       {

       $i++;
        
        ?>       
    
        <tr style="text-align:center">

            <td><?php echo $i ?></td>
            <td><?php echo $res['name']; ?></td>
            <td><?php echo $res['email']; ?></td>
            <td><?php echo $res['phone']; ?></td>
            <td><?php echo $res['image']; ?></td>
            <td><?php echo $res['address']; ?></td>
            <td><a href="delete.php? id=<?php echo $res['id'];?>">delate</a></td>
            <td><a href="update.php? id=<?php echo $res['id'];?>">update</a></td>
            
        </tr> 

        <?php
        
        }
        
        ?>
        
       </table></br></br>

       <button><a href="form.php">Insert New Record!</a></button>

       
    
    </body>
</html>
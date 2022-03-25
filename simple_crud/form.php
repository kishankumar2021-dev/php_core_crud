<html>
    <head>
        <title></title>
        <style>
            #form
            {
                height:400px;
                width:300px;
                margin:100px auto;
               //border:2px solid black;
                padding:40px;
                border-radius:5px;                
                box-shadow:0px 0px 5px 5px orange inset;

            }
        </style>
    </head>
    <body>
        <?php
        
        include 'conn.php';
        if(isset($_POST['done'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $image = $_POST['image'];
            $address = $_POST['address'];

        $sql = "INSERT INTO `innovative`(`name`,`email`,`phone`,`image`,`address`) VALUES ('$name','$email','$phone','$image','$address')";

        $query = mysqli_query($conn,$sql);

        if($query)
        {
            echo "<script>alert('Data Inserted');</script>";
            header('location:thank.php');
        }
        else
        {
            echo "<script>alert('data not Inserted!');</script>";
        }

        }

       
        
        ?>

        <div id="form">
        <h3 style="text-align:center">STUDENT INFORMATION</h3>
        <form action="" method="post" enctype="multipart/form-data" name="data">
        NAME:</br><input type="text" name="name" id="username"></br></br>
        Email:</br><input type="email" name="email" id="email" ></br></br>
        Phone Number:</br><input  onfocus="demo()" onblur="demo1()" type="number" id="phone" ></br></br>
        Images:</br><input type="file" name="file" id="file"></br></br>
        Address:</br><textarea name="address"></textarea></br></br>
        <input type="submit" value="save" name="done">
      
        

        <button ><a href="display.php">Show all data!</a></button>
        </div>

        </form>     
    </body>
    <script>
        function demo1(){
         var a=document.getElementById("phone")
         if(a.value.length !=10){
             a.style.border="2px solid red";
         }

            
        }
       // function demo2() {  
 // document.getElementById("phone").style.background = "red";

    </script>
    

</html>
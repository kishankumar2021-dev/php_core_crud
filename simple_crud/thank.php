<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #box
        {
            height:400px;
            width:500px;
            border-radius:10px;
            background: linear-gradient(yellow,#e66465, #9198e5);
            margin:100px auto;
            box-shadow:0px 0px 5px 10px orange;  
           
        }
        #text
        {
            padding:20px;
            font-size:70px;
            font-family:Book Antiqua;
            color:skyblue;




        }

    </style>
</head>
<body onload="demo()" >
    <div id="box">
        <div id="text">
            <p>THANK YOU!</p>
        </div>
    </div>
   

    <script>
        function demo(){
        alert('WELCOME! YOU ARE REGISTERD');
            
        }

    </script>

    <?php

   
    
    ?>


    
</body>
</html>


<script>
            var form = document.getElementById('form')

            var Error []

            form.addEventListener('done',function(e){
                e.preventDefault()

                var username = document.getElementById("username")

                var email = document.getElementById("email")

                if(username.value == "" || email.value = "")
                {
                    alert('Please fill this field');
                }
                
            });
    </script>
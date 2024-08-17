<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
        display: flex;
         /* justify-content: center; */
        align-items: center;
        min-height: 100vh;
        background:url('Salecom.png') no-repeat;
        background-position: center;
        background-size: 90pc;
            
        }
        .button1{
            position: absolute;
            transform: translateY(230px);
            

        }
        .Home1 h1{
            color: green;
            font-size: 3.2rem;
            font-weight: bold;
            padding: 0.5rem 2rem ;
            width: 80%;
            bottom: 20%;
           
        }

        .btn button{
            background-color:;
            border-radius: 20px;
            height: 35px;
            width: 50%;
            position: absolute;
            transform: translateY(220px);
            left: 320px;
        }
        @media  screen and (max-width: 400px) {
            body{
        display: flex;
         /* justify-content: center; */
        align-items: center;
        min-height: 100vh;
        background:url('Phone1.png') no-repeat;
        background-position: center;
        background-size: 90pc;
            
        }
        }
    </style>
</head>
<body>
    <?php
    include("Navbar.php");
    ?>

    <div class="Home1">
       <h1>"Discover Your Perfect Mobile Companion."</h1>
    </div>

    
</body>
</html>
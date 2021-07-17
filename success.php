<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Basic Banking System</title>
    <style type ="text/css">
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
     }
     body{
    height: auto;
    }
    .successful img{
    margin-left: 470px;
    height: 30vh;
    margin-top: 70px;
    padding-bottom: 20px;
    }
    a{
    text-decoration: none;
    color: #fff;
   }
   </style>

 </head>
  <body>
        <div class="successful">
            <img src ="images/logo.png">
                <div class=" alert alert-success container" role="alert" id="box">
                   <h2 class="alert-heading">YESSSSS!</h2>
                   <h5>You have done successful transaction.</h5>
                  </div>
             <div class="d-grid gap-2 col-6 mx-auto">
               <button class="btn btn-success" type="button"><a href="transaction history.php"> Ok </a></button>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Uchen&display=swap" rel="stylesheet">
    <title>Basic Banking System</title>
</head>

<body>
    <div class="container">
        <div class="heading">
            <h2>Transaction history</h2>
        </div>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Sr.no</th>
                    <th scope="col">Sender name</th>
                    <th scope="col">Receiver name</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Date and Time</th>
                </tr>
            </thead>
            <tbody>
            <?php

             include 'connection.php';
             $sql ="select * from transaction";
             $query =mysqli_query($conn, $sql);
             while($rows = mysqli_fetch_assoc($query))
             {
            ?>
            
                <tr>
                 <td class="py-2"><?php echo $rows['Srn']; ?></td>
                 <td class="py-2"><?php echo $rows['Sender name']; ?></td>
                 <td class="py-2"><?php echo $rows['Receiver name']; ?></td>
                 <td class="py-2"><?php echo $rows['Balance']; ?> </td>
                 <td class="py-2"><?php echo $rows['Date and time']; ?></td>
                </tr>

            </tbody>
            <?php
             }
             ?>
        </table>
    </div>
    <div class="d-grid gap-2 col-2 mx-auto">
         <button class="btn btn-primary" type="button"><a href="index.php">Back to home</a></button>
       </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>


</html>
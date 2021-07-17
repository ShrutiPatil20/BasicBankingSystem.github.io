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
            <h2>Transfer money</h2>
        </div>
        <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email id</th>
                <th scope="col">Amount</th>
                <th scope="col">Operation</th>
              </tr>
            </thead>
            <?php
           include('connection.php');
           error_reporting(0);
           $query ="select * from customers";
           $result =mysqli_query($conn,$query);
           $total =mysqli_num_rows($result);
        ?>
            <?php
            while($rows=mysqli_fetch_assoc($result))
            {
            ?>
              <tbody>
                <tr>
                  <th><?php echo $rows['id']; ?></th>
                  <td><?php echo $rows['Name']; ?></td>
                  <td><?php echo $rows['Email id']; ?></td>
                  <td><?php echo $rows['Balance']; ?></td>
                  <td>
                  <a href="transaction.php?id= <?php echo $rows['id'] ;?>"> 
                  <button type="button" class="btn btn-primary">Transact</button>
                </a>
                  </td>
                </tr>
              </tbody>
              <?php
            }
            ?>
            
          </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>
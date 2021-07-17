<?php
include('connection.php');

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $balance = $_POST['Balance'];

    $sql = "SELECT * from customers where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * from customers where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);

    //to check input of negative value by user
    if (($balance)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }

    //to check insufficient balance.
    else if($balance > $sql1['Balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Sorry! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }

    //to check zero values
    else if($balance == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Zero value cannot be transferred')";
         echo "</script>";
     }

     else {
        
        // deducting amount from sender's account
        $newbalance = $sql1['Balance'] - $balance;
        $sql = "UPDATE customers set Balance=$newbalance where id=$from";
        mysqli_query($conn,$sql);

        // adding amount to reciever's account
        $newbalance = $sql2['Balance'] + $balance;
        $sql = "UPDATE customers set Balance=$newbalance where id=$to";
        mysqli_query($conn,$sql);

        $sender = $sql1['Name'];
        $receiver = $sql2['Name'];
        $sql = "INSERT INTO transaction(`Sender name`, `Receiver name`, `Balance`) VALUES ('$sender','$receiver','$balance')";
        $query=mysqli_query($conn,$sql);

        if($query){
            echo "<script> ;
            window.location='success.php';
               </script>";
           
       }
       
           $newbalance= 0;
           $balance =0;
        }

    }
?>

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
            <h2>Transaction </h2>
        </div>
       
       <table class="table table-hover table-bordered">
       
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email id</th>
                    <th scope="col">Balance</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include 'connection.php';
            $sid=$_GET['id'];
            $sql = "SELECT * FROM  customers where id=$sid";
            $result=mysqli_query($conn,$sql);
            
            if(!$result)
            {
                echo "Error : ".$sql."<br>".mysqli_error($conn);
            }
                
              while($rows= mysqli_fetch_assoc($result)) 
              { 
        ?>
            <tr>
                    <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['Name'] ?></td>
                    <td class="py-2"><?php echo $rows['Email id'] ?></td>
                    <td class="py-2"><?php echo $rows['Balance'] ?></td>
                </tr>
            </tbody>
            <?php
              }
              ?>
        </table>

        <form method ="POST" name="tcredit" class="tabletext">
            <div class="mb-3">
             <label>Transfer To:</label>
             <select name="to" class="form-control" required>
             <option value="" disabled selected>Choose</option>
             <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM customers where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
             ?>
             <option class="table" value="<?php echo $rows['id'];?>" >
                
                <?php echo $rows['Name'] ;?> 
                (Balance: <?php echo $rows['Balance'] ;?> ) 
             </option>
             <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label>Amount:</label>
            <input type="number" class="form-control" name="Balance" required>   
            <br><br>
                <div class="text-center" >
            <button class="btn btn-primary" name="submit" type="submit" id="btn">Transfer</button>
            </div>
             </div>
            
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
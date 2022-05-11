<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/74e5afab15.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Lato:wght@300&family=Nunito:ital,wght@0,200;1,300&family=Open+Sans:ital,wght@0,800;1,300;1,400&family=Spinnaker&family=Tangerine:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<style>
    body{
        background:url("images/img5.jpg");
    }
    .head1{
        text-align:center;
        margin:5% auto;
    }
    tr{
        line-height:3rem;
    }
    tr:hover{
        background-color:#f0ffff;
    }
    
</style>
</head>
<body>
    <div class="container">
    <h1 class="head1">Books Issued</h1>

  <table class="table table-striped table-hover">
     <thead>
       <tr>
         <td>BOOK ID</td>
         <td>Borrow Date</td>
         <td>Return Date</td>
         <td>User ID</td>
         <td>User Name</td>
         <td>User Email</td>

       </tr>
       <tbody>
           <?php
           include("connection.php");
           $sql="select u.uid,u.uname,u.uemail,b.bid,b.borrowdate,b.returndate from user u,bookborrow b where u.uid=b.uid order by b.returndate";
           $res=$conn->query($sql) or die($conn->error);
           while($row=mysqli_fetch_assoc($res))
           {
               echo "<tr>
               <td>".$row['bid']."</td>
               <td>".$row['borrowdate']."</td>
               <td>".$row['returndate']."</td>
               <td>".$row['uid']."</td>
               <td>".$row['uname']."</td>
               <td>".$row['uemail']."</td>

               </tr>";
               
           }
           $conn->close();

           ?>
         
       </tbody>
     </thead>
  </table>
  </div>
</body>
</html>
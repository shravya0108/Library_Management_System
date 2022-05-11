<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="addbook1.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/74e5afab15.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Lato:wght@300&family=Nunito:ital,wght@0,200;1,300&family=Open+Sans:ital,wght@0,800;1,300;1,400&family=Spinnaker&family=Tangerine:wght@700&display=swap" rel="stylesheet">
    <title>Return Book</title>
</head>
<body>
    <h1 class="heading">Return Book</h1>
    <div class="form">
    <form action="" method="post">
        <label for="USER ID"><span class="itxt">USER ID:</span></label>
        <input  class="iput" type="number" required name="uid"  ><br><br>

        <label for="BID"><span class="itxt">&emsp;&nbsp;&emsp;BID:</span> </label>
        <input class="iput" type="number" required name="bid"><br><br>

        <!--label for="DATE OF RETURN"><span class="itxt">DATE OF RETURN</span></label><br>
        <input class="iput" type="text"><br-->


        

        <input type="submit" class="ibutton" name="submit" value="Return">

    </form>
    <a href="adminpage.php"><button class="ibutton" >Back</button></a>
</div>
</body>
<?php
if(isset($_POST['submit']))
{
    include ("connection.php");
   $bid=$_POST['bid'];
   $uid=$_POST['uid'];
   $sql_query = "select count(*) as cnt from bookborrow where bid=".$bid." and uid=".$uid."";
   $result = mysqli_query($conn,$sql_query);
   $row = mysqli_fetch_assoc($result);

   $val = $row['cnt'];
   
   
    
   
   if($val==0)
   {
    echo "<div class='alert alert-danger' role='alert' style='text-align:center'>User Did Not Borrow book</div>";
       die();
   }
   else
   {
       $sql2="select returndate from bookborrow where bid=".$bid;
       $res2=$conn->query($sql2);
       while($row2=mysqli_fetch_array($res2))
       {
           $rdate=$row2['returndate'];
       }
      
       
      
   // $r1=new DateTime($rdate);
    $today=new DateTime();
    $rdatee=new DateTime($rdate);
   // echo gettype($rdatee);
   if($today>$rdatee)
   {

    $diff=$today->diff($rdatee);
  
    $d=$diff->format('%a');
    $x=(int)$d;
    
   echo "<div class='alert alert-danger' role='alert' style='text-align:center'>Fine imposed:Late for ".$x." days</div>";
            
    }
     $sql3="delete from bookborrow where bid=".$bid;
     $res3=$conn->query($sql3) or die($conn->error);
     $sql4="update bookdetails set bavailable=1 where bid=".$bid;
     $res4=$conn->query($sql4) or die($conn->error);
     echo "<div class='alert alert-success' role='alert' style='text-align:center'>Successful</div>";
            

      
   }
}

?>
</html>
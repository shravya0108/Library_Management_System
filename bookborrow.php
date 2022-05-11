<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="addbook1.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Lato:wght@300&family=Nunito:ital,wght@0,200;1,300&family=Open+Sans:ital,wght@0,800;1,300;1,400&family=Spinnaker&family=Tangerine:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/74e5afab15.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <title>Issue Book</title>
</head>
<body>
<h1 class="heading">Borrow Book</h1>
    <div class="form">
    <form action="" method="post" >
        <label for="USER ID"><span class="itxt">USER ID:</span></label>
        <input  class="iput" type="text" name="uid" required><br><br>

        <label for="BID"><span class="itxt">&emsp;&emsp;&ensp;BID:</span> </label>
        <input class="iput" type="text" name="bid" required><br><br>
        <input type="submit" name="submit" value="Borrow" class="ibutton">
       
      


   
          </form>
          <a href="adminpage.php"><button class="ibutton" >Back</button></a>
</div>
<?php
if(isset($_POST['submit']))
{
    include ("connection.php");
    $bid=$_POST['bid'];
    $uid=$_POST['uid'];
    
    $sql1="SELECT bavailable from bookdetails where bid=".$bid;
    $res1=$conn->query($sql1) or die("error".$conn->error);
    if(mysqli_num_rows($res1)==0)
    {
        echo "<div class='alert alert-danger' role='alert' style='text-align:center'>Wrong BID Entered</div>";
            
        die();
    }
    $sql4="select * from user where uid=".$uid;
    $res4=$conn->query($sql4) or die("error".$conn->error);
    if(mysqli_num_rows($res4)==0)
    {
        echo "<div class='alert alert-danger' role='alert' style='text-align:center'>User does not exist</div>";
        die();
    }
    while($row=mysqli_fetch_assoc($res1))
    {
        $val=$row['bavailable'];
        
     }
    if($val==0)
    {
        echo "<div class='alert alert-danger' role='alert' style='text-align:center'>Book already returned</div>";
            
    }
    else{
        $sql2="insert into bookborrow values(".$bid.",".$uid.",curdate(),date_add(curdate(),interval 15 day))";
        
        $res2=$conn->query($sql2) or die("error2".$conn->error);
        $sql3="update bookdetails set bavailable=0 where bid=".$bid;
        $res3=$conn->query($sql3) or die("ERROR".$conn->error);

        
        echo "<div class='alert alert-success' role='alert' style='text-align:center'>Successfully Issued</div>";
            
        

    }
}

?>
          <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</body>
</html>
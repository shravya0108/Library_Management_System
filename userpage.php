<?php

$id=$_REQUEST['uid'];

include("connection.php");
$sql1="select uemail,uname,ucollege from user where uid=".$id;
$res1=$conn->query($sql1);
while($row=mysqli_fetch_assoc($res1))
{
    $name=$row['uname'];
    $email=$row['uemail'];
    $clg=$row['ucollege'];
}
?>

<!doctype html>
<html lang="en">
  <head>
    <style>
      .studetext{
        font-family:Lato,sans-serif;
        font-weight:500;
      }

      </style>
      <script>
  $(document).ready(function(){
     $('[data-toggle="tooltip"]').tooltip();   
});
</script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!--link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Lato:wght@300&family=Nunito:ital,wght@0,200;1,300&family=Open+Sans:ital,wght@0,800;1,300;1,400&family=Spinnaker&family=Tangerine:wght@700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="userpage.css" rel="stylesheet">
    <title>User Page</title>
    <script src="https://kit.fontawesome.com/74e5afab15.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
  <body>  
        <div class="container">
            <div class="imgbg">
                <div class="studentinfo">
                    <h1 class="studtext">  Welcome<?php echo" $name";?></h1>
                    <div class="studentinfo">
                    <a href="mainpage.php" class="signout">Logout<i class="fas fa-sign-out-alt sign-out fa-2x top-0 end-0 " data-toggle="edit an item" title="Log Out" ></i></a>
                        <div style="text-align: center;">
                            <div class="ab1" style="display: inline-block; text-align: left;">
                            <h6>College Name  : <?php echo"$clg";?> &nbsp;&nbsp;
                            Email  :  <?php echo "$email";?> &nbsp;&nbsp;
                            ID    :  <?php echo "$id";?></h6>
                        </div>
                          </div>
                    </div> 
                    <?php
                      $sql2="select count(*) from bookborrow where uid=".$id;
                      $res2=$conn->query($sql2);
                      if(mysqli_num_rows($res2)>0)
                      {
                          ?>


                    <table class="table table-striped table-hover table-light">
                        <thead>
                          <tr>
                            <th scope="col">Book Name</th>
                            <th scope="col">Book ID</th>
                            <th scope="col">Borrow Date</th>
                            <th scope="col">Return Date</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql3="select * from bookborrow where uid=".$id;
                            $res3=$conn->query($sql3);
                            while($row=mysqli_fetch_assoc($res3))
                            {
                                $bid=$row['bid'];
                                $bordate=$row['borrowdate'];
                                $retdate=$row['returndate'];
                                $sql4="select btitle from bookdetails where bid=".$bid;
                                $res4=$conn->query($sql4);
                                $row=mysqli_fetch_array($res4);
                                $bname=$row['btitle'];
                                $today=new DateTime();
                                $ret=new DateTime($retdate);
                                if($ret<$today)
                                {
                                  echo "<tr class='table-danger'>
                                  
                                  <td>$bname</td>
                                  <td>$bid</td>
                                  <td>$bordate</td>
                                  <td>$retdate.Return Date overdue.</td>
                                  </tr>
                                  ";
                                }
                                else
                                {
                                  echo "<tr>
                                  <td>$bname</td>
                                <td>$bid</td>
                                <td>$bordate</td>
                                <td>$retdate</td>
                                </tr>";
                                }
                                
                               
                           
                                
                                
                            }
                        }

                            ?>
                         
                        </tbody>
                      </table>                   
                </div>
                
            </div>
        </div>
        
       <div>
           
       </div>
       
  
    









      







<div class="container-blog">
  <div class="textarea m-5">
<h2><span class="white" style="text-align:center;"><br>Blog Article/Poem/Story Submission Form</span></h2>
<p><span class="error">* required field</span></p>
<form method="post" action="bsubm.php">  
<div class="mb-3 mt-3">
  <span class="error">*</span>
  <span class="white">Name:</span> <input type="text" class="form-control" name="name" required placeholder="Eg:John Pit">
  <span class="error"></span>
  <br>
</div>

<div class="mb-3 mt-3">
<span class="error">*</span>
  <span class="white">E-mail:</span> <input type="email" class="form-control" required name="email" placeholder="Eg:john@gmail.com">
  <span class="error"></span>
  <br>
</div>
  
<span class="error">*</span>  
<span class="white">Submission Type:</span>
  <div class="form-check">

  <input type="radio" class="form-check-input" name="submissiontype" required id="poemid" value="poem">
  <label class="form-check-label" for="poemid"><span class="white">Poem</span></label>
</div>

<div class="form-check">
  <input type="radio" class="form-check-input" name="submissiontype" id="storyid" value="story">
  <label class="form-check-label" for="storyid"><span class="white">Story</span></label>
</div>

/

<div class="form-check">
  <input type="radio" class="form-check-input" name="submissiontype" id="articleid" value="article">
  <label class="form-check-label" for="storyid"><span class="white">Article</span></label></span>
  
</div>
<span class="error"></span>


<br>

<div class="mb-3 mt-3">
  <span class="error">*</span>
  <span class="white">Title </span><input type="text" class="form-control" required name="title" placeholder="Eg:Roads to Heaven">
  
  <br>
</div>





<div class="mb-3 mt-3">
<span class="white">Content: </span><textarea class="form-control" name="text" required rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" class="sub-btn" name="submit" value="Submit">  
</div>
</form>
</div>
</div>



</body>
</html>

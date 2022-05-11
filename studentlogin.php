

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="lform.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/74e5afab15.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <title>Login Page</title>
</head>

<body>

   <?php
   include("header.html");

   ?>
 
    
    <div class="container-fluid cf" style="padding-left:30%" >
        <div class="row main-content bg-success text-center">
            <div class="col-md-4 text-center company__info">
                <span class="company__logo">
                    <h2><i class="fas fa-user"></i></h2>
                </span>

            </div>
            <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                <div class="container-fluid">
                    <div class="row rh">
                        <h2>User Log In</h2>
                    </div>
                    <div class="row">
                        <form action=""  method="post"class="form-group">
                            <div class="row">
                                <input type="email" name="username" id="username" class="form__input"
                                    placeholder="Email" required>
                            </div>
                            <div class="row">
                                <!-- <span class="fa fa-lock"></span> -->
                                <input type="password" name="password" id="password" class="form__input"
                                    placeholder="Password" required>
                            </div>

                            <div class="row">
                                <input type="submit" value="Submit" class="btn" name="submit">
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <p>Don't have an account? <a href="studentregister.php">Register Here</a></p>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>


</body>
<?php
                    if(isset($_POST['submit'])){
                     
                        include "connection.php";
                        
                       
                        
                            $uname = mysqli_real_escape_string($conn,$_POST['username']);
                            $password = mysqli_real_escape_string($conn,$_POST['password']);
                        
                            if ($uname != "" && $password != ""){
                        
                                $sql_query = "select count(*) as cntUser from user where uemail='".$uname."' and upassword='".$password."'";
                                $result = mysqli_query($conn,$sql_query);
                                $row = mysqli_fetch_assoc($result);
                        
                                $count = $row['cntUser'];
                        
                                if($count==0){
                                    echo "<div class='container alert alert-danger' role='alert' style='text-align:center'>Invalid Credentials</div>";
                                   
                                   
                                }else{
                                    $sql2="select uid from user where uemail='".$uname."' and upassword='".$password."'";
                                    $res2=$conn->query($sql2);
                                    while($row=mysqli_fetch_assoc($res2))
                                    {
                                        $uid=$row['uid'];
                                    }
                                    
                                    //$_POST['uid'] = $uid;
                                    echo "<script type='text/javascript'>  window.location='userpage.php?uid=$uid'; </script>";
                                   
                                }
                                
                                }
                                else{
                                    echo '<script>alert("Enter deatils")</script>';
                            
                            
                        }
                    
                        

                            }
                            
                           
?>

</html>
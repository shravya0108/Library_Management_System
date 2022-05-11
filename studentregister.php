<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="lform.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Lato:wght@300&family=Nunito:ital,wght@0,200;1,300&family=Open+Sans:ital,wght@0,800;1,300;1,400&family=Spinnaker&family=Tangerine:wght@700&display=swap" rel="stylesheet">
        <title>Login Page</title>
    </head>
    <body>
        <!-- Main Content -->
        <?php
        include("header.html");

        ?>
        <div class="container-fluid cf" style="padding-left:28%">
            <div class="row main-content bg-success text-center">
                <div class="col-md-4 text-center company__info">
                    <span class="company__logo"><h2><span class="fa fa-user"></span></h2></span>
                    <!--h4 class="company_title">Your Company Logo</h4-->
                </div>
                <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                    <div class="container-fluid">
                        <div class="row rh">
                            <h2 >Register</h2>
                        </div>
                        <div class="row">
                            <form action="" method="post" class="form-group">
                                <div class="row">
                                    <input type="text" name="name" id="username" class="form__input" placeholder="Name" required>
                                </div>
                                <div class="row">
                                    <input type="email" name="email" id="username" class="form__input" placeholder="Email" required>
                                </div>
                                <div class="row">
                                
                                    <input type="password" name="pass1" id="password" class="form__input" placeholder="Password" onchange="validate(this.value)" required>
                                </div>
                                <div id="divp" style="color:red"></div>
                                <div class="row">
                                
                                    <input type="password" name="pass2" id="password" class="form__input" placeholder="Confirm Password" required>
                                </div>
                                <div class="row">
                                
                                    <input type="text" name="college" id="username" class="form__input" placeholder="College Name" required>
                                </div>
                                <div class="row">
                                
                                    <input type="radio" name="ucategory" id="Student" class="form__input" value="Student" >
                                    <label for="Student">Student</label>
                                    <input type="radio" name="ucategory" id="Staff" class="form__input" value="Staff">
                                    <label for="Staff">Staff</label>

                                </div>
                                
                                <div class="row">
                                    <input type="submit" value="Submit" class="btn" name="submit">
                                </div>
                                <div class="row">
                        <p>Already have an account? <a href="studentlogin.php">Click Here</a></p>
                    </div>
                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
     
        
    </body>
    <script>
        function validate(str)
        {
            if(str.length<8)
            {
                document.getElementById("divp").innerHTML="Password should have minimum eight characters";
            }
            else if(str.search(/[a-z]/g)<0)
            {
                document.getElementById("divp").innerHTML="Password should have atleat one lowercase letter";
            }
            else if(str.search(/[A-Z]/g)<0)
            {
                document.getElementById("divp").innerHTML="Password should have atleast one uppercase letter";
            }
            else if(str.search(/[0-9]/i)<0)
            {
                document.getElementById("divp").innerHTML="Password should have a digit";
            }
            else
            {
                document.getElementById("divp").innerHTML="";
            }
        }

        </script>
    <?php
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $clg=$_POST['college'];
        $email=$_POST['email'];
        $p1=$_POST['pass1'];
        $p2=$_POST['pass2'];
        $catg=$_POST['ucategory'];
        include("connection.php");
        $sql1="select * from user where uemail='".$email."'";
        $res1=$conn->query($sql1);
        if(mysqli_num_rows($res1)>0)
        {
            echo "<div class='alert alert-danger' role='alert' style='text-align:center'>Email Already Exists</div>";
            die();
        }
        else
        {
            
                

                

            
               
            
            
            if($p1!=$p2)
            {
                echo "<div class='alert alert-danger' role='alert' style='text-align:center'>Passwords Do Not Match</div>";
                die();


            }
            else
            {
                
                
                if(filter_var($email,FILTER_VALIDATE_EMAIL))
                {
                      $sql2="insert into user(uname,ucategory,ucollege,upassword,uemail) values('".$name."','".$catg."','".$clg."','".$p1."','".$email."')";
                      $res2=$conn->query($sql2) or die("Error".$conn->error);
                      
                      
                      echo"<script>alert('Registration Succeeful')</script>";
                      echo "<script type='text/javascript'>  window.location='studentlogin.php'; </script>";
                      exit;
                      
                }
                else {
                    echo "<div class='alert alert-danger' role='alert' style='text-align:center'>Invalid Email</div>";
                }
            }

        }
    

        $conn->close();
    


    }
    ?>
</html>
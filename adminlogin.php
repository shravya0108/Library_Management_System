

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
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Lato:wght@300&family=Nunito:ital,wght@0,200;1,300&family=Open+Sans:ital,wght@0,800;1,300;1,400&family=Spinnaker&family=Tangerine:wght@700&display=swap" rel="stylesheet">
    <title>Login Page</title>
</head>

<body>

   <?php
   include("header.html");

   ?>
    <!-- Main Content -->
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
                        <h2>Admin Log In</h2>
                    </div>
                    <div class="row">
                        <form action="" method="post" class="form-group">
                            <div class="row">
                                <input type="text" name="adminid" id="username" class="form__input"
                                    placeholder="Admin ID" required>
                            </div>
                            <div class="row">
                                <!-- <span class="fa fa-lock"></span> -->
                                <input type="password" name="apassword" id="password" class="form__input"
                                    placeholder="Password" required>
                            </div>

                            <div class="row">
                                <input type="submit" value="Submit" class="btn" name="submit"> 
                            </div>
                        </form>
                    </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->

</body>
<?php
if(isset($_POST['submit']))
{
    include("connection.php");
   
    $adid=$_POST['adminid'];
    $adpass=$_POST['apassword'];
    $sql_query = "select count(*) as cnt from admin where aid='".$adid."' and apassword='".$adpass."'";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_assoc($result);

    $count = $row['cnt'];
    
    if($count>0)
    {
        $_SESSION['adid']=$adid;
        echo "<script type='text/javascript'>  window.location='adminpage.php'; </script>";
    }
    else{
        echo"<script>alert('Invalid credentials')</script>";
    }
}

?>
</html>
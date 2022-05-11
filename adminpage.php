<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
    <title>Admin Page</title>
    <style>
      .hd{
        text-align:center;
        font-family:Lato,sans-serif;
        margin-top:2%;
        margin-bottom:3%;
        font-size:3rem;
        font-weight:700;

      }
        body{
    background-image: url("images/imga6.jpg");
    background-size: cover;
}
        .cr1{
            padding-left:25%;
        }
        .cr2{
            padding-left:30%;
        }
        .signout{
          font-size:2rem;
          position:absolute;
          right:5%;
          top:5%;

        }
        </style>
</head>
<body>
   
    
<div class="main" >
  <h1 class="hd">Admin Page</h1>
  <a href="mainpage.php" class="signout">Logout<i class="fas fa-sign-out-alt sign-out fa-2x top-0 end-0 " data-toggle="edit an item" title="Log Out" ></i></a>

      
     <div class="row container cr1">
     
        <div class="col-lg-4 col-sm-6">
      <div class="card text-dark bg-info mb-3 " style="max-width: 12rem;">
        <img src="images\returnbooks.png" class="card-img-top" alt="...">
        <div class="card-header "></div>
        <div class="card-body">
          <h5 class="card-title"><a href="returnbook.php" >RETURN</a></h5>
          <p class="card-text"></p>
        </div>
      </div>
      </div>
      <div class="col-lg-4 col-sm-6">
      <div class="card text-dark bg-warning mb-3" style="max-width: 12rem;">
        <img src="images\borrow.png" class="card-img-top" alt="...">
        <div class="card-header"></div>
        <div class="card-body">
          <h5 class="card-title"><a href="bookborrow.php" >ISSUE BOOK</a></h5>
          <p class="card-text"></p>
        </div>
      </div>
</div>

    <div class="col-lg-4 col-sm-6">
        <div class="card text-dark bg-light border-primary mb-3" style="max-width: 12rem;">
          <img src="images\members1.png" class="card-img-top" alt="...">
          <div class="card-header"></div>
          <div class="card-body">
            <h5 class="card-title"><a href="members.php">BOOKS ISSUED</a></h5>
            <p class="card-text"></p>
          </div>
        </div>
      </div>
      </div>
<div class="row container cr2">
      <div class="col-lg-6 col-sm-6">
        <div class="card text-dark bg-light border-primary mb-3" style="max-width: 12rem;">
          <img src="images\addbook.png" class="card-img-top" alt="...">
          <div class="card-header"></div>
          <div class="card-body">
            <h5 class="card-title"><a href="addbook.php">ADDBOOK</a></h5>
            <p class="card-text"></p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-6">
        <div class="card text-dark bg-light border-primary mb-3" style="max-width: 12rem;">
          <img src="images\addcourse.png" class="card-img-top" alt="...">
          <div class="card-header"></div>
          <div class="card-body">
            <h5 class="card-title"><a href="addcourse.php">ADD COURSE</a></h5>
            <p class="card-text"></p>
          </div>
        </div>
      </div>
    </div>
</div>

</body>
</html>

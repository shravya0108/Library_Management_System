<!DOCTYPE html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/74e5afab15.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Lato:wght@300&family=Nunito:ital,wght@0,200;1,300&family=Open+Sans:ital,wght@0,800;1,300;1,400&family=Spinnaker&family=Tangerine:wght@700&display=swap" rel="stylesheet">
       <title>About Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        
   
        body{
            font-family: Lato,sans-serif;
           
        }
        .cf{
            background-image: url("images/imga1.jpg");
            background-size: cover;
            margin-top:auto;
            
            background-position:center ;
            background-repeat:no-repeat;
            height:30vh;
        }
        .container{
            margin-top: -2%;
        }
        .row:hover{
            background-color: #fafafa;
        }
        .row{
            background-color: white;
            display:block;
            /*box-shadow: 0 0 4px 4px rgba(141, 134, 134, 0.5);*/
            border-style:solid ;
            border-width: 2px;
            border-radius:10px;
            border-color: blue;
            margin: 5%;
            padding:2%;
        }
        .row h1{
            text-align: center;
        }
    </style>
</head>
<?php 
    include("header.html");
    ?>

<body>
   
    <div class="container-fluid cf"></div>
    <div class="container">
      
        <div class="row">
            <h1>
                About Akshara Library
            </h1>
            <p>
                Akshara Central Library established in the year 2010. It is housed with modern
                facilities and
                offers automated library services to its clientele comprising of about 1000 users namely
                undergraduate and postgraduate students, research scholars, faculty members and supporting
                staff of
                various departments of engineering. The library also gives the facility of institution
                membership
                to educational institutes and industries located in and around Mangalore. This Library is
                located in
                an independent building with a carpet area of 2759 sq meters and can accommodate more than 400
                students/users at a time.
            </p>
        </div>
        <div class="row">
            <h1>
                Book Bank Facility
            </h1>
            <p>
                The Book Bank facility for all students consists of multiple copies of textbooks. The books
                are lent
                to all students for home reading for 15 days. Every year multiple copies are added to the
                Book-Bank.
                The are about 5000+ books of various courses in the Book Bank collection.
            </p>
        </div>
        <div class="row">
            <h1>
                E Facilities
            </h1>
            <p>
                The library is well equipped with e-resource videos,e-books & e-journals.The updated
                details of count of total books is also provided.
            </p>
        </div>
        <div class="row">
            <h1>
              Welcoming Library Environment
            </h1>
            <p>The Akshara library seek to create a welcoming, comfortable, and safe environment for our
                users. The
                library is a place for learning and reflection, and our staff supports these activities by
                providing
                helpful, responsive, and knowledgeable service. Mutual courtesy and respect among users and
                staff
                are essential to promoting the educational mission of the library.
            </p>
        </div>

    </div>
</body>
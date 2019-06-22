<?php
$servername = "localhost";
$username = "u323297349_login";
$db_name = "u323297349_login";
$password = "6789012456";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// echo "Connected successfully";
// $sql = "INSERT INTO users (fname, lname) values ('p', 'h')";
// $result=$conn->query($sql);
// if($result){
//     echo 'SUCCESS';
// }else{
//     echo 'failed';
// }
if(isset($_POST['submitsgn'])){
    $fname = $_POST['fname'];
    echo $fname;
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $pswr = $_POST['ps1w'];
    if($psw==$pswr){
        $psw=$_POST['psw'];
    }
    else{
        echo "The passwords do not match";
    }
}

?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="SITE KEYWORDS HERE" />
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Snikitha Siddavatam</title>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Favicon -->
<!--    <link rel="icon" type="image/png" href="images/favicon.png"> -->
 <link rel="stylesheet" href="./particle.css">
    <style>
      
 @import url('https://fonts.googleapis.com/css?family=Cabin+Sketch|Cinzel|Comfortaa|Love+Ya+Like+A+Sister|Nixie+One|Sanchez|Tinos&display=swap');
 
 *{
 padding: 0;
 margin: 0;
 }

 canvas {
 display: block;
}
 .circle{
 border-radius: 50%;
 border: 5px solid #B2B1B0;
 width: 65%;
 height: 31%;
 margin-top: 20%;
 margin-left: auto;
 margin-right: auto;
 display: block;
 }

 .side-bar{
 background-color: #FF754C;
 width: 25%;
 display: inline-block;
 height: 100%;
 position: fixed;
 }

 .information{
 display: inline-block;
 margin-left: 30%;
 padding-right: 300px;
 position: relative;
 z-index: 999;
 }

 .name{
 font-family: 'Love Ya Like A Sister', cursive;
 font-size: 330%;
 width: 600px;
 margin-top: 50px;
 }

 .nam{
 font-family: 'Love Ya Like A Sister', cursive;
 font-size: 350%;
 width: 600px;

 }

 h1{
 font-family: 'Saira Extra Condensed', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
 font-weight: 700;
 text-transform: uppercase;
 color: #343a40;
 }

 .tag{
 font-family: 'Love Ya Like A Sister', cursive;
 font-size: 200%;
 width: 600px;

 }

 .edu{
 margin-top: 100px;
 }

 .na1{
 font-family: avenir;
 color: #0640DC;
 }

 .na2{
 font-family: avenir;
 color: #FF754C;
 }

 .html{
 font-size: 500%;
 color: #B2B1B0;
 margin-right: 20px;
 margin-top: 30px;
 }

 .h:hover{
 color: #FF754C;
 }

 .css:hover{
 color: #2FA0F9;
 }

 .js:hover{
 color: #F9DA2F;
 }

 .py:hover{
 color: #15C30F;
 }

 .medal{
 font-size: 30px;
 margin-top: 30px;
 color: #F8C02C;
 }

 .oak{
 color: #737069;
 font-family: avenir;
 font-size: 20px;
 }

 .git{
 font-size: 500%;
 text-align: center;
 margin-top: 0;
 margin-left: 35%;
 color: white;
 
 }

 .about{
 font-family: avenir;
 text-align: justify;
 }

 .blue{
 background-color: #0640DC;
 width: 25%;
 display: inline-block;
 height: 100%;
 position: fixed;
 }

 .na{
 font-family: 'Love Ya Like A Sister', cursive;
 font-size: 400%;
 margin-top: 50px;
 }

 .na-blue{
 color: #0640DC;
 }

 .na-orange{
 color: #FF754C;
 }

 .ul{
 text-align: center;
 color: white;
 font-family: 'Love Ya Like A Sister', cursive;
 font-size: 120%;
 }

 h6{
 font-family: 'Love Ya Like A Sister', cursive;
 text-align: center;
 color: white;
 margin-top: 10px;
 }

 .n{
 font-family: 'Love Ya Like A Sister', cursive;
 }

 label{
 font-family: 'Comfortaa', cursive;
 }

 input[type=text], select {
 width: 100%;
 padding: 12px 20px;
 margin: 8px 0;
 display: inline-block;
 border: 1px solid #ccc;
 border-radius: 4px;
 box-sizing: border-box;
}

input[type=email], select {
 width: 100%;
 padding: 12px 20px;
 margin: 8px 0;
 display: inline-block;
 border: 1px solid #ccc;
 border-radius: 4px;
 box-sizing: border-box;
}


input[type=number], select {
 width: 100%;
 padding: 12px 20px;
 margin: 8px 0;
 display: inline-block;
 border: 1px solid #ccc;
 border-radius: 4px;
 box-sizing: border-box;
}

input[type=submit] {
 width: 100%;
 color: white;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 border-radius: 4px;
 cursor: pointer;
}


.submitblue{
 background-color: #0640DC;

}

.submit{
 background-color: #FF754C;
}

.div {
 border-radius: 5px;
 background-color: #f2f2f2;
 padding: 20px;
 margin-right: 40px;
}




textarea, select{
 width: 100%;
 padding: 12px 20px;
 margin: 8px 0;
 display: inline-block;
 border: 1px solid #ccc;
 border-radius: 4px;
 box-sizing: border-box;
}

/* #register{
 position: fixed;
 margin-left: 750px;
} */

@media screen and (max-width: 700px){
 .information{ margin-left: 10px;
 margin-right: 20px;
 padding-right: 10px;
 text-align: justify;
 }

 .carousel{
 width: 95%;
 }
 
} 


.button:after {
 content: "";
 background: #90EE90;
 display: block;
 position: absolute;
 padding-top: 300%;
 padding-left: 350%;
 margin-left: -20px!important;
 margin-top: -120%;
 opacity: 0;
 transition: all 0.8s
}

.button:active:after {
 padding: 0;
 margin: 0;
 opacity: 1;
 transition: 0s
}

.font{
 color: #0640DC;
}

.font1{
 color: #0640DC;
}

.font2{
 color: #0640DC;
}

.font-orange{
  color: #FF754C;
}
.navbar-orange{
 background-color: #FF754C;
}

.navbar-blue{
 background-color: #0640DC;
}

.float{
 position: fixed;
 color:white;
 right: 2%;
 bottom: 3%;
 z-index: 10000;
 }
 .float:hover{
 cursor: pointer;
 }
 a{
 text-decoration: none;
 }





/* =============================================POP UP REGISTRATION AND LOGIN=================================================================== */

button {
 background-color: #4CAF50;
 color: white;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 cursor: pointer;
 width: 100%;
 opacity: 0.9;
}

button:hover {
 opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
 padding: 14px 20px;
 background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
 float: left;
 width: 50%;
}

.modal {
 display: none; /* Hidden by default */
 position: fixed; /* Stay in place */
 z-index: 100001;
 left: 0;
 top: 0;
 width: 100%; /* Full width */
 height: 100%; /* Full height */
 overflow: auto; /* Enable scroll if needed */
 background-color: rgb(0,0,0); /* Fallback color */
 background-color: rgba(0,0,0,0.4);
 padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
 background-color: #fefefe;
 margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
 border: 1px solid #888;
 width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
 border: 1px solid #f1f1f1;
 margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
 position: absolute;
 right: 35px;
 top: 15px;
 font-size: 40px;
 font-weight: bold;
 color: #f1f1f1;
}

.close:hover,
.close:focus {
 color: #f44336;
 cursor: pointer;
}

/* Clear floats */
.clearfix::after {
 content: "";
 clear: both;
 display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
 .cancelbtn, .signupbtn {
 width: 100%;
 }
}












        </style>
 </head>
 <body>
 <div class="float">
 <button class="nav-link btn btn-success" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register Now</button> 
 </div>
 <div id="id01" class="modal">
 <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
 <form class="modal-content" method="post">
 <div class="container">
 <h1>Sign Up</h1>
 <p>Please fill in this form to create an account.</p>
 <hr>
  <label for="fname"><b>First name</b></label>
 <input type="text" placeholder="Enter First name" name="fname" required class="fg">
 <label for="lname"><b>First name</b></label>
 <input type="text" placeholder="Enter Last name" name="lname" required class="fg">
 
 <label for="email"><b>Email</b></label>
 <input type="text" placeholder="Enter Email" name="email" required class="fg">
 
 <label for="psw"><b>Password</b></label>
 <input type="password" placeholder="Enter Password" name="psw" required class="fg">
 </br>
 <label for="psw-repeat"><b>Repeat Password</b></label>
 <input type="password" placeholder="Repeat Password" name="ps1w-repeat" class="fg" required>
 
 <label>
 <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
 </label>
 
 <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
 
 <div class="clearfix">
 <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
<button type="submit" name="submitsgn" class="signupbtn" value="Sign Up"></button>
 </div>
 </div>
 </form>
 </div>
 <section id="navbar" class="pos"> <!-- Start of Navbar section-->
 <nav class="navbar navbar-expand-lg navbar-dark"> <!-- Start of Nav Tag-->
 <a class="navbar-brand" href="#">Snikitha Siddavatam</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
 <ul class="navbar-nav mr-auto">
 <li class="nav-item active">
 <a class="nav-link" href="#about">ABOUT ME <span class="sr-only">(current)</span></a>
 </li>
 <li class="nav-item active">
 <a class="nav-link" href="#ed">EDUCATION <span class="sr-only">(current)</span></a>
 </li>
 <li class="nav-item active">
 <a class="nav-link" href="#skills">SKILLS <span class="sr-only">(current)</span></a>
 </li>
 <li class="nav-item active">
 <a class="nav-link" href="#award">ACHIEVEMENTS <span class="sr-only">(current)</span></a>
 </li>
 </ul>
 </div>
</nav> <!-- End of Nav Tag-->
 </section> <!-- End of Nav Section-->

 <div>
 <div id="particles-js"></div>
 <div class="side-bar" id='sidebar'>
 <img src="i.jpg" class="circle">
 <br>
 <ul class="ul">
 <li>
 <a href="#about" style="color: white">ABOUT ME</a>
 </li>
 <br>
 <li>
 <a href="#ed" style="color: white">EDUCATION</a>
 </li>
 <br>
 <li>
 <a href="#skills" style="color: white">SKILLS</a>
 </li>
 <br>
 <li>
 <a href="#award" style="color: white">ACHIEVEMENTS</a>
 </li>
 </ul>

 <a href="https://github.com/snikithasiddavatam" target="_blank"><i class="fab fa-github git"></i></a>
 <h6>My Github Profile</h6>
 <div id="time" style="font-family: 'Love Ya Like A Sister', cursive; color: white; text-align: center; font-size: 200%;" ></div>
 </div>

    <!-- Error Page -->
    <section class="particle-page overlay">
 <div class="information container">
 <div>
<h1 class="na">SNIKITHA <span class="na-blue">SIDDAVATAM</span></h1>
<!-- <a href="#contact"><button id='register' class="btn btn-success" style="position: absolute; right:2%; bottom: 97%;">REGISTER NOW!</button></a> -->
 <h3 class="tag">Front-end Web Developer</h3>

 </div>
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="2000">
 <div class="carousel-inner">
 <div class="carousel-item active">
 <img src="1.jpg" alt="..." width="750px" height="450px">
 </div>
 <div class="carousel-item">
 <img src="2.jpg" alt="..." width="750px" height="450px">
 </div>
 <div class="carousel-item">
 <img src="3.jpg" alt="..." width="750px" height="450px">
 </div>
 <div class="carousel-item">
 <img src="4.jpg" alt="..." width="750px" height="450px">
 </div>
 <div class="carousel-item">
 <img src="5.jpg" alt="..." width="750px" height="450px">
 </div>
 </div>
 <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
 <span class="sr-only">Previous</span>
 </a>
 <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
 <span class="carousel-control-next-icon" aria-hidden="true"></span>
 <span class="sr-only">Next</span>
 </a>
 </div>
 <section id="about">
 <div>
 <h1 class="name">MY GOAL : </h1>
 <h3 class="about">
   <ul>
     <li>To continue learning and enhancing my problem solving ability through <em class="font">data structures</em> and <em class="font1">algorithms.</em></li>
     <li>To contribute to open source projects leveraging my technical skills in<em class="font2">Artificial Intelligence</em> domain.</li>
   </ul>

</h3>
 </div>
 </section>
 <section id="about">
 <div>
 <h1 class="name">ABOUT ME</h1>
 <h3 class="about">During my childhood, I am always curious to know more about Computers and laptops and got interested in mathematics and coding. I love colors and wanted to explore and experiment using technology . I was amazed to see how colors change and fascinated by pictures and photos. I wanted to know what is required to make these work and how they actually work.

At the age of 9 years, I am introduced to HTML and started working on Scratch Programming. My dad taught me how to learn things on our own and provided me the needed resources and provided environment and culture to nurture my passion.</h3>
 </div>
 </section>
 <section id="ed">
 <div class="edu">
 <h1 class="nam">EDUCATION</h1>
 <h2 class="na1">Grade 8</h2>
 <br>
 <h2 class="na1">Oakridge International School, Einstein Campus, Bachupally, Hyderabad</h2>

 </div> 
 </section>
 <section id='skills'>
 <div class="edu">
 <h1 class="nam">SKILLS</h1>
 <i class="fab fa-html5 html h"></i>
 <i class="fab fa-css3-alt html css"></i>
 <i class="fab fa-js-square html js"></i>
 <i class="fab fa-python html py"></i>
 

 </div>
 </section>
 <section id="award">
 <div class="edu">
 <h1 class="nam">AWARDS &amp; ACHIEVEMENTS</h1>
 <div><i class="fas fa-medal medal">

 <span class="oak">

 METRO MADE SIMPLE Project(16 international schools competed during the Oak Codefest, 24-Hour Hackathon out of which this Project is the only project which got selected to Stockholm Brussels) and have been given the golden opportunity to present live during the summit.
 </span>
 </i></div>
 <div><i class="fas fa-medal medal">

 <span class="oak">
 2<sup>nd</sup> Place in Oak CodeFest, 24-Hour Hackathon, Bangalore for the project developed in Python, METRO MADE SIMPLE
 </span>
 </i></div>
 </div>
 </section> 
 

 <br>
 <br>
 <section id="contact" >

 <form id="form" target="_self" onsubmit="return postToGoogle();" action="" autocomplete="off">
 <h1 class="nam">REGISTER NOW </h1>
 <h3 class="n">(for more information and training)</h3>
 <div class="div">
 <form action="/action_page.php">
 <label for="fname">First Name<span class="fir" style="color: red;">*please fill out the firstname.</span></label>
 <input type="text" id="fname" name="entry.400402711" placeholder="Your name..">

 <label for="lname">Last Name<span class="las" style="color: red;">*please fill out the lastname.</span></label> 
 <input type="text" id="lname" name="entry.1099565967" placeholder="Your last name..">
 

 <label for="email">e-mail id<span class="em" style="color: red;">*please fill out the e-mail.</span></label> 
 <input type="email" id="email" name="entry.529775913" placeholder="Your e-mail id..">

 <label for="con">Contact Number<span class="co" style="color: red;">*please fill out the contact number.</span></label> 
 <input type="number" id="con" name="entry.1003239855" placeholder="Your contact number..">

 <label for="mess">Remarks (what do you want to learn? HTML / CSS / JavaScript / Python)<span class="mes" style="color: red;">*please fill out the message.</span></label> 
 <textarea id="mess" name="entry.2129501258" placeholder="Your Message.."></textarea>

 
 <input type="submit" value="Submit" class="submitblue" onclick="first()">
 </form>
</div>

 </form>
 </section> 
 <br> 
 <br> 
 <br> 
 </div>
    </section>
    <!--/ End Error Page -->
 
 
<script>
 // Get the modal
 var modal = document.getElementById('id01');
 
 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function(event) {
 if (event.target == modal) {
 modal.style.display = "none";
 }
 }
 </script>

    <script src="particle.js"></script>
    <!-- Particle JS -->
 <script type="text/javascript">
 //get the class name of orange(DOM)
 var el = document.getElementsByClassName('side-bar')[0];
 var el1 = document.getElementsByClassName('na-blue')[0];
 var el2 = document.getElementsByClassName('submitblue')[0];
 var el3 = document.getElementsByClassName('font')[0];
 var el4 = document.getElementsByClassName('font1')[0];
 var el5 = document.getElementsByClassName('font2')[0];
 var el6 = document.getElementsByClassName('na1')[0];
 var el6 = document.getElementsByClassName('na1')[1];
 var el7 = document.getElementsByClassName('navbar')[0];
 //generate a random number(DOM)
 var elrandom=Math.random(0, 1);

 if(elrandom>0.5){
 //if random num > 0.5 change the background color to blue(dom)
 el.className = 'blue';
 el7.classList.add("navbar-blue");

 }else{//if random num < 0.5 change the background color to orange(dom)
 el.className = 'side-bar';
 el1.className = 'na-orange';
 el2.className = 'submit';
 el3.className = 'font-orange';
 el4.className = 'font-orange';
 el5.className = 'font-orange';
 el6.className = 'na2';

 //by not disturbing the any classes, add a new class
 el7.classList.add("navbar-orange");

 }
 //dom; to create alerts once the submit button is clicked.
 function first(){
 var vali = document.getElementById('fname');
 var last = document.getElementById('lname');
 var ema = document.getElementById('email');
 var contact = document.getElementById('con');
 var mess = document.getElementById('mess');


 console.log(vali.value.length);
 if (vali.value == ""||last.value == ""||email.value== ""||contact.value== ""||mess.value==""){
 alert('Some fields are missing please fill them!')
 }

}

setInterval(time, 500)
 function time(){
 var time = document.getElementById('time');
 var date = new Date();
 var hour = date.getHours();
 var mins = date.getMinutes();
 var sec = date.getSeconds();
 time.textContent = hour+":"+mins +":"+ sec;
 }

 </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src='./script.js' type="text/javascript"></script>
 <script src='./image.js' type="text/javascript"></script>
 </body>
<!-- https://script.google.com/macros/s/AKfycbxp8bgCPgxPLFCSIo24PS9glB71aJERjkFpeUVVSEkarWU42Bg-/exec -->
</html>

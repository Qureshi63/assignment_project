<!DOCTYPE html>
<html>
<head>
    <title>
        Student Page
    </title>
    <link href="pg2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        
        </style>
</head>
<body>
    <div class=topsnav>
        <p>
            Welcome Student
        </p>
    </div>
    <div class="topnav">
        <h1>University</h1>
        <a class="u1" href="http://localhost:8080/assignment_project/student_login.php">Logout</a>
        <a class="u1" href="http://localhost:8080/assignment_project/profile.html">Profile</a>
        <a class="u1" href="http://localhost:8080/assignment_project/ResultCard.html">Result Card</a>
        <a class="u1" href="http://localhost:8080/assignment_project/Fees.html">Fees</a> 
        <a class="u1" href="http://localhost:8080/assignment_project/Registeration.html">Registration Card</a>
        <a class="u1" href="http://localhost:8080/assignment_project/student2pg.php">Dashboard</a> 
    </div>
    
<div class="w3-content w3-display-container">

<div class="w3-display-container mySlides">
  <img src="pic_1.jpg" style="width:100%">
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
    Rector CUI
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="pic_2.jpg" style="width:100%">
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
    Senator
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="pic_3.jpg" style="width:100%">
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
    Rank
  </div>
</div>


<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

    

    <div class="bottomnav" >
        UniversityOnline , Principal Seat © 2018-University ®
    </div>
</body>
</html>

<!DOCTYPE html>
<!--
Author:                 Date:                   
-------------------------------------------------------------------------------
Brian A. Hernandez      1/27/2020 

Inital deployment of UpperNav.php
-------------------------------------------------------------------------------
-->
<nav class="navbar navbar-expand-lg row" id="nav">
        <a class="navbar-brand my-auto text-light" href="./index.php"><img src="./images/hbaLogo.png" id="logo" class="img-thumbnail">Hispanic Business Association</a>
       
  <button class="navbar-toggler text-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <h5 class="text-light">Menu</h5>
  </button>

  <div class="collapse navbar-collapse navbar-right" id="navbarSupportedContent">
    <ul class="nav navbar-nav ml-auto" id="nav-ul">
      <li class="nav-item active ">
          <a class="nav-link text-light h4" href="./index.php">Home <span class="sr-only">(current)</span></a>
      </li>
<!--      <li class="nav-item navbar-right">
          <a class="nav-link  text-light h4" href="./AboutUs.html">About Us</a>
      </li>-->
      <li class="nav-item dropdown navbar-right">
        <a class="nav-link dropdown-toggle  text-light h4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Scholarship
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="./ScholarshipInformation.php">Information</a>
          <a class="dropdown-item" href="./Partners.php">Our Partners</a>
          <a class="dropdown-item" href="./PastRecipients.php">Past Recipients</a>
<!--          <a class="dropdown-item" href="./Application/apply.php">Application</a>-->
          
      </li>
      
    </ul>
      
    
  </div>
</nav>

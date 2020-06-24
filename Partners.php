<!DOCTYPE html>
<!--
Author:                 Date:       
-------------------------------------------------------------------------------
Brian A. Hernandez      1/27/2020 

Initial Deploy of Partners.php
-------------------------------------------------------------------------------

-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
       
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="./images/HBAwatermark.png" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="./css/style.css"/>
        
         
        <title>Our Partners</title>
    </head>
    <!-- Site Navigation -->
    <?php  include('./view/UpperNav.php')?>
    
    <body>
        <div class="body">
            <h1 class="underline text-center">Our Partners</h1>
            <div>For the fifth year the College of Western Idaho has allocated funds in which they will match the HBA scholarships for students attending CWI.  And for the first time in 2020 Northwest Nazarene University has announced that they have set aside funds for the same purpose.  Details below.</div>
            <br />
            
            <!--CWI Info-->
            
            <h3 class="text-danger text-center">College of Western Idaho</h3>
            <div class="row" id="cwi">
                <img src="./images/CWI_Logo_2color_white-background.png" id ="cwi" class="col-sm-3 img-fluid my-auto">
                <p class="col-sm-9 my-auto">
                    The College of Western Idaho has set aside $2,500 which will be used to match scholarships for students who attend CWI.  Students who receive a $1,000 scholarship from the HBA will see a like amount credited to their account by CWI.  If more HBA scholarship dollars are awarded than is available from the CWI match the total amount from CWI will be equally divided among the recipients.
                </p>
            </div>
             
            <br />
            
            <!--NNU Info-->
            
            <h3 class="text-danger text-center">Northwest Nazarene University</h3>
            <div class="row">
                <img src="./images/NNULogo.jpg" id="nnu" class="col-sm-3 mx-auto img-fluid my-auto">
                <p class="col-sm-9 my-auto">
                    Northwest Nazarene University has allocated a total of $10,000 for students who attend NNU during the 2020-2021 school year. NNU will match the HBA scholarship amount dollar for dollar. Students who receive a $1,000 or a $1,500 scholarship from the HBA will see a like amount credited to their NNU account.  Any unused funds in the 2020-21 school year will be rolled over for use in the 2021-22 school year. 
                </p>
            </div>
        </div>
        
                <?php include("./view/footer.php")  ?>
    </body>
</html>

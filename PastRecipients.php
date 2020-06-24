<!DOCTYPE html>
<!--
Author:                 Date:       
-------------------------------------------------------------------------------
Brian A. Hernandez      1/27/2020 

Initial Deploy of PastRecipients.php. Intent is to have Testimonials and Past 
Recipients displayed in a professional, appealing manner using Bootstrap Modals
and Bootstrap Accordion functions.
-------------------------------------------------------------------------------


-->
<html>
     <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="./images/HBAwatermark.png" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="./css/style.css"/>
        
         
        <title>Past Recipients</title>
    </head>
    <!-- Site Navigation -->
    <?php  include('./view/UpperNav.php')?>
    <body>
       <div class="body">
            <h1 class="underline text-center">Past Recipients</h1>
            <br />
            <h3 class="text-center text-danger">Testimonials</h3>
            <h6 class="text-center text-danger">Click on a button to read testimonials</h6>
            <div class="row text-center">
                <!-- Leo Morales modal button -->
                <div class='col-sm-4 text-center  my-auto' id="leopic">
                    <img src='./images/bio_leo_morales.png' alt='Leo Morales'/><br />
                    <button type="button" class="btn btn-danger mx-auto" data-toggle="modal" data-target="#leo">Leo Morales</button><br />
                </div>
                <!-- Lina Benavidez modal button-->
                <div class='col-sm-4 text-center  my-auto' id="linapic">
                    <img src='./images/bio_lina_benavidez.png' alt='Lina Benavidez'/><br />
                    <button type="button" class="btn btn-danger text-center" data-toggle="modal" data-target="#lina">Lina Benavidez</button><br />
                </div>

                <!-- David Estrada modal button-->
                <div class='col-sm-4 text-center  my-auto' id="davidpic">
                    <img src='./images/bio_david_estrada.png' alt='David Estrada'/><br />
                    <button type="button" class="btn btn-danger text-center" data-toggle="modal" data-target="#david">David Estrada</button>
                </div>
            </div>
            <br />
            <h3 class="text-center text-danger">Previous Award Winners</h3>
            </div>
            <!-- Begin Accordion-->
            
            <div id="accordion" class="mx-auto">
<div class="accordion col-md-12 text-center" id="accordionExample">
    <!-- 1993-->
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              1993
            </button>
          </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
              Joey Barroso Vallivue High School
          </div>
        </div>
      </div>
    <!-- 1994-->
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              1994
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">

              Armando Palomo - Nampa High School <br />
              Rosalba Villegas - Caldwell High School<br />
              Joey Barroso - Boise State University

          </div>
        </div>
      </div>
    <!-- 1995-->
      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              1995
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            Lucy Rodriguez - Caldwell High School<br />
            Julio Elizondo - Wilder High School<br />
            Consuelo Solis - Boise State University<br />
            Marta Villanueva - Idaho State University
          </div>
        </div>
      </div>
    <!-- 1996-->
      <div class="card">
        <div class="card-header" id="headingFour">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
              1996
            </button>
          </h2>
        </div>

        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
              Emilo Zalazar - Homedale High School<br />
              Lina Benavidez - Caldwell High School<br />
              Crystal Castorena	- Boise State University<br />
              Daniel Costa Smith - Albertson College of Idaho<br />
              Mary Lou Lopez - Idaho State University 

          </div>
        </div>
      </div>
    <!-- 1997-->    
      <div class="card">
        <div class="card-header" id="headingFive">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
              1997
            </button>
          </h2>
        </div>

    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        Albert Arredondo - Wilder High School<br />
        Luis Caloca - Valivue High School<br />
        Maria Gomez - Glenns Ferry High School<br />
        Rolando Hurtado - Glenns Ferry High School<br />
        Valerie Najera - Parma High School<br />
        Christopher Vielma - Fruitland High School<br />
        Teresa Rodriguez - Boise State University<br />
        Anna Cayero - Boise State University<br />
        Emilio Zalazar - Boise State University<br />
        Ignacio Mireles - Boise State University<br />

      </div>
    </div>
  </div>
   <!-- 1998--> 
    <div class="card">
      <div class="card-header" id="headingSix">
        <h2 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
            1998
          </button>
        </h2>
      </div>

        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
          <div class="card-body">
                Amicis Arvizu - Caldwell High School<br />
                Jorge Cortes - Glenns Ferry High School<br />
                Martha Maus - Bishop Kelly High School<br />
                Iris Rocha - Capital High School<br />
                Maria Zapata - Capital High School<br />
                Rafael Arteaga - Idaho State University<br />
                Betzi Baldeon - Boise State University<br />
                Midalia Banda - Boise State University <br />
                Celestino Figueroa - Boise State University<br />
                Tayna Flores - Albertson College of Idaho<br />
                Flor Madrigal - Albertson College of Idaho<br />
                Lupe Mesina - Albertson College of Idaho<br />
                Maria Mitchell - Idaho State University<br />
                Teresa Rodriguez - Boise State University

          </div>
        </div>
      </div> 
   <!-- 1999-->
      <div class="card">
            <div class="card-header" id="headingSeven">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                  1999
                </button>
              </h2>
            </div>

            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
              <div class="card-body">
                    Sarai Arvizu - Boise State University<br />
                    Betzi Balderon - Boise State University <br />
                    Gabriela Calderon - Boise State University<br />
                    Ricardo Calderon - Boise State University<br />
                    Celestino Figuero - Boise State University<br />
                    Orquidea Flores - Boise State University<br />
                    Maria Longoria - Treasure Valley CC<br />
                    Marco Lopez - University of Idaho<br />
                    Natalia Lopez - Gonzaga University<br />
                    Roxanne Lopez - Boise State University<br />
                    Leobardo Morales - Boise State University<br />
                    Myra Navarrete - Boise State University<br />
                    Rebekah Rosas - Bryn Mawr College<br />
                    Griselda Torres - Boise State University<br />
                    Sean Whitney - University of Michigan<br />
                    Maria Zapata - Albertson College of Idaho<br />

              </div>
            </div>
        </div>  
   <!-- 2000-->
        <div class="card">
            <div class="card-header" id="headingEight">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                  2000
                </button>
              </h2>
            </div>

            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
              <div class="card-body">
                    Evelyn Baldeon - Capital High School<br />
                    Susanna Barroso - Glenns Ferry High School<br />
                    Lupe Castaneda - Wilder High School<br />
                    Jesenia Gallegos - Caldwell High School<br />
                    Araceli Gomez - Payette High School<br />
                    Omar Gomez - Glenns Ferry High School<br />
                    Hortencia Lopez - Caldwell High School<br />
                    Martha Lopez - Caldwell High School<br />
                    Erika Pedroza - Mtn. Home High School<br />
                    Melanie Ross - Centennial High School<br />
                    Nakita Santiago - Boise High School<br />
                    Ray Serrano - Nampa High School<br />
                    Rosa Sotelo - Emmett High School<br />
                    Ricardo Calderon - Boise State University<br />
                    Jaime Gonzalez - Boise State University<br />
                    Alicia Juarez - Boise State University<br />
                    Leobardo Morales - Boise State University<br />
                    Mayra Navarrete - Boise State University<br />
              </div>
            </div>
        </div>
   <!-- 2001-->
    <div class="card">
             <div class="card-header" id="headingNine">
               <h2 class="mb-0">
                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                   2001
                 </button>
               </h2>
             </div>

             <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
               <div class="card-body">
                    Cassandra Arellano - Idaho Falls High School<br />
                    Jessica Arellano - Caldwell High School<br />
                    Ambar Beltran - Vallivue High School<br />
                    Monica Cervantes - Blackfoot High School<br />
                    Esperanza Elizondo - Skyline High School<br />
                    Rolando Ibarra - Caldwell High School<br />
                    Perla Mendivil - Caldwell High School<br />
                    Ofelia Morales - Wilder High School<br />
                    Idalia Perez - Jerome High School<br />
                    Rachel Ramirez - Nampa High School<br />
                    Shantel Ramirez - St Maries High School<br />
                    Tonya Romero - McCall High School<br />
                    Gabriella Calderon - Boise State University<br />
                    Ricardo Calderon - Boise State University<br />
                    Gladys Joana Gonzalez - Boise State University<br />
                    Alicia Juarez - Boise State University<br />
                    Servando Juarez - College of Southern Idaho<br />
                    Martha Lopez - Albertson College of Idaho

               </div>
             </div>
         </div>
   <!-- 2002-->
    <div class="card">
             <div class="card-header" id="headingTen">
               <h2 class="mb-0">
                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                   2002
                 </button>
               </h2>
             </div>

             <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
               <div class="card-body">
                    Elsa Calderon - Wilder High School<br />
                    Natalie Edwards - Capital High School<br />
                    Noe Galvan - Marsing High School<br />
                    Oralia Gil - Weiser High School<br />
                    Andres Gomez - Payette High School<br />
                    Dorys Gutierrez - Glenns Ferry High School<br />
                    Sylvia Hernandez - Castleford High School<br />
                    Carmel Kerns - Vallivue High School<br />
                    Jessica Martinez - Nyssa High School<br />
                    Araceli Monreal - Ontario High School<br />
                    Paulino Moreno - Vale High School<br />
                    Veronica Riojas - Ontario High School<br />
                    Maricela Rios - Burley High School<br />
                    Michel Rodriguez - Payette High School<br />
                    Melina Ronquillo - Burley High School<br />
                    Rosio Sanchez - Mtn. Home High School<br />
                    Presiliano Solis - Fruitland High School<br />
                    Jessica Trevino - American Falls High School<br />
                    Regina Vasquez - Caldwell High School<br />
                    Sara Villanueva - Wilder High School<br />
                    Jose Garcia - Boise State University<br />
                    Rolando Ibarra - Boise State University<br />
                    Maria Lara - Boise State University<br />
                    Martha Lopez - Albertson College of Idaho<br />
                    Sean Whitney - University of Michigan


               </div>
             </div>
         </div>
   <!-- 2003-->
    <div class="card">
             <div class="card-header" id="headingEleven">
               <h2 class="mb-0">
                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                   2003
                 </button>
               </h2>
             </div>

             <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
               <div class="card-body">
                Amanda Anderson - Timberline High School<br />
                Gisela Arevalo - Glenns Ferry High School<br />
                Laura Arjona - Timberline High School<br />
                Jonathon Baker - Clearwater Valley High School<br />
                Jennie Cavazos - Meridian High School<br />
                Carmen Dalpiaz - Eagle High School<br />
                Melissa Gantenbein - Nyssa High School<br />
                Ericka Gonzalez - Nampa High School<br />
                Iris Grimaldo - Nampa High School<br />
                Amanda Gutierrez - Nampa High School<br />
                Ramon Hobdey-Sanchez - Capital High School<br />
                Maria Martinez - Marsing High School<br />
                Monica Martinez - Nyssa High School<br />
                Natalia Murrillo - Timberline High School<br />
                Lorenzo Olvera - Caldwell High School<br />
                Jacob Pena - Caldwell High School<br />
                Jose Rios - Ontario High School<br />
                Elizabeth Rosado - Skyview High School<br />
                Yesenia Sanchez - Capital High School<br />
                Jessica Sloan - Bishop Kelly High School<br />
                Rafael C de Baca, Jr. - Idaho State University<br />
                Adan De La Paz - Albertson College of Idaho<br />
                Jose Garcia - Boise State University<br />
                Maria Lara - Albertson College of Idaho<br />
                Martha Lopez - Albertson College of Idaho



               </div>
             </div>
         </div>
   <!-- 2004-->
    <div class="card">
             <div class="card-header" id="headingTwelve">
               <h2 class="mb-0">
                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                   2004
                 </button>
               </h2>
             </div>

             <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample">
               <div class="card-body">
                Christina Marroquin - Vallivue High School<br />	
                Lorena Caloca - Vallivue High School<br />
                Sarah Frassa - Eagle High School<br />	
                Mayra Albor - Homedale High School<br />
                Maricela Sotelo - Emmett High School	<br />
                Alejandro Salinas Jr. - Meridian High School<br />
                Maria Aguilar - Caldwell High School<br />
                Maria Sanchez - Homedale High School	<br />
                Carmen Jimenez - Homedale High School	<br />
                Jackeline Rodriguez - Capital High School<br />	       
                David DeLeon - Twin Falls High School	<br />
                Michael Delgado - Vallivue High School	<br />
                Dominique Veloz-Hoskins - Eagle High School<br />	
                Gloria Gomez - Bonners Ferry High School<br />
                Rolando De La Cruz - Wilder High School	<br />
                Andrea Perez - Wood River High School	<br />
                Jose Garcia - Boise State University.<br />
                Maria Lara - Boise State University<br />
                Sergio Romero - Idaho State University<br />
                Reyes Garcia - Boise State University<br />
                Manuel Villegas - Boise State University<br />
                Melissa Yzquierdo - University of Idaho <br />
                Betzi Quiroz - Gonzaga University 
               </div>
             </div>
         </div>
   <!-- 2005-->
    <div class="card">
             <div class="card-header" id="headingThirteen">
               <h2 class="mb-0">
                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">
                   2005
                 </button>
               </h2>
             </div>

             <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionExample">
               <div class="card-body">
                Leticia Aguila - Nampa High School<br />
                Jessica Calderon - Parma High School<br />
                Allison Cardona	- American Falls High School<br />
                Angela Gomez-Frith - Capital High School<br />
                Jenny Gallegos - Kuna High School<br />
                Carina Hernandez - Skyview High School<br />
                Yesenia Hernandez - Bishop Kelly High School<br />
                Verenice Leon - Caldwell High School<br />
                Nereyda Martinez - American Falls High School<br />
                Jantzen Meza - Vallivue High School<br />
                Roxana Napoles - Emmett High School<br />
                Noemi Nava - Valley High School<br />
                Elizabeth Ortiz-Dominguez - Glenns Ferry High School<br />
                Alejandro Rosales - Vallivue High School<br />
                Oliver Rosales - Vallivue High School<br />
                Kayla Ruiz - Centennial High School<br />
                Jose Garcia - Boise State University<br />
                Janie Hernandez - Treasure Valley C. C.<br />
                Maria Lara - Boise State University<br />
                Jonathon Moreno - Albertson College of Idaho<br />
                Maria Pacheco - Boise State University<br />
                Maria Sanchez - Lewis & Clark State College<br />
                Magdalena Vega - Lewis & Clark State College

               </div>
             </div>
         </div>
   <!-- 2006-->
    <div class="card">
             <div class="card-header" id="headingFourteen">
               <h2 class="mb-0">
                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">
                   2006
                 </button>
               </h2>
             </div>

             <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordionExample">
               <div class="card-body">
                Elizabeth Arias - Nampa High School<br />
                Angelina Cabrera - Payette High School<br />
                Alicia Cabrera - Payette High School<br />
                Alma Cruces - American Falls High School<br />
                Rafael Flores - Caldwell High School<br />
                DeAnn Hurtado - Mountain Home High School<br />
                Adam Nunez - Meridian Medical Arts<br />
                April Pena - Nampa High School<br />
                Linda Prado - Borah High School<br />
                Marisol Ramirez - Nampa High School<br />
                Tyler Russell - Eagle High School<br />
                Jacob Salinas - Meridian High School<br />
                Jonathan Solano - Weiser High School<br />
                Yazmin Soto - Glenns Ferry High School<br />
                Naomi Sullivan - Magic Valley Christian <br />
                Jesus Tarifa - Caldwell High School<br />
                Mary Jo Usabel - Marsing High School<br />
                Leticia Aguila - The Ohio State University<br />
                Mayra Albor - Lewis & Clark State College<br />
                Michael Delgado - Albertson College of Idaho<br />
                David Estrada - Boise State University<br />
                Carina Hernandez - Boise State University<br />
                Luis Hernandez - Idaho State University<br />
                Antonio Oblea - Boise State University<br />
                Maria Paramo - Lewis & Clark State College<br />
                Nicholas Ponce - Idaho State University<br />
                Ashley Puga - Northwest Nazarene University<br />
                Oliver Rosales - Albertson College of Idaho<br />
                Kayla Ruiz - Boise State University<br />
                Maria Sanchez - Lewis & Clark State College<br />
                Magdalena Vega - Lewis & Clark State College<br />
               </div>
             </div>
         </div>
   <!-- 2007-->
    <div class="card">
             <div class="card-header" id="headingFifteen">
               <h2 class="mb-0">
                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="true" aria-controls="collapseFifteen">
                   2007
                 </button>
               </h2>
             </div>

             <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordionExample">
               <div class="card-body">
                Andrea Betancourt - Caldwell High School<br />
                Maygen Cardona - American Falls High School<br />
                Gloria Jimenez - Nampa High School<br />
                Benito Menchaca - Caldwell High School<br />
                Diana Ornelas - Emmett High School<br />
                Marisol Ortiz - Glenns Ferry High School<br />
                Maximillian Padilla - Capital High School<br />
                Jaclyn Puga - Nampa Christian High School<br />
                Brenda Trejo - Skyline Senior High School<br />
                Leticia Aguila - The Ohio State University<br />
                David Estrada - Boise State University<br />
                Angela Frith-Gomez - Boise State University<br />
                Jenny Gallegos - Boise State University<br />
                Maritza Gomez - Boise State University<br />
                Nick Gomez - Boise State University<br />
                Elizabeth Hernandez - Northwest Nazarene University<br />
                Jaime Huerta - Boise State University<br />
                Christina Marroquin - Albertson College of Idaho<br />
                Adam Nunez - Albertson College of Idaho<br />
                Maria Paramo - Lewis & Clark State College<br />
                Linda Prado - Boise State University<br />
                Ashley Puga - Northwest Nazarene University<br />
                Kayla Ruiz - Boise State University<br />
                Jacob Salinas - University of Idaho<br />
                Maria Sanchez - Lewis & Clark State College<br />
                Jason Tarifa - Albertson College of Idaho<br />
                Magdalena Vega - Lewis & Clark State College

               </div>
             </div>
         </div>
   <!-- 2008-->
    <div class="card">
             <div class="card-header" id="headingSixteen">
               <h2 class="mb-0">
                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                   2008
                 </button>
               </h2>
             </div>

             <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordionExample">
               <div class="card-body">
                    Jordan Arellano - Borah High School<br />
                    Adriana Briscoe - Payette High School<br />
                    Dulce Chavez - Nampa High School<br />
                    Juan Florez - Caldwell High School<br />
                    Belan Garcia - Mountain Home High School<br />
                    Peter Guerrero - Capital High School<br />
                    Joel Hernandez - Caldwell High School<br />
                    Silvino Jimenez - Vallivue High School<br />
                    Samuel Sanchez - Homedale High School<br />
                    Rosaura Vanegas - Mountain View High School<br />
                    Maria Vanegas - Mountain View High School<br />
                    Yvette Viveros - Borah High School<br />
                    Leticia Aguila - The Ohio State University<br />
                    Leticia Auces - Boise State University<br />
                    Paloma Ayala - Boise State University<br />
                    David Estrada - Uni. Of Illinois Urbana/Cham<br />
                    Jenny Gallegos - Boise State University<br />
                    Angela Gomez - Boise State University<br />
                    Maritza Gomez - Boise State University<br />
                    Luis Hernandez - Idaho State University<br />
                    Yesenia Hernandez - Boise State University<br />
                    Jaime Huerta - Boise State University<br />
                    Magally Lora - Lewis & Clark State College<br />
                    Maribel Lora - Idaho State University<br />
                    Ozwaldo Navarro - Boise State University<br />
                    Maximillian Padilla - College of Idaho<br />
                    Oliver Rosales - College of Idaho<br />
                    Kayla Ruiz - Boise State University<br />
                    Jesus Tarifa - College of Idaho


               </div>
             </div>
         </div>
   <!-- 2009-->
    <div class="card">
             <div class="card-header" id="headingSeventeen">
               <h2 class="mb-0">
                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="true" aria-controls="collapseSeventeen">
                   2009
                 </button>
               </h2>
             </div>

             <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen" data-parent="#accordionExample">
               <div class="card-body">
                    Arizbeth Angeles - Wilder High School<br />
                    Diana Cook - Timberline High School<br />
                    Yesenia Dominguez - Caldwell High School<br />
                    Arturo Espinoza - Wilder High School<br />
                    Anali Hernandez - Payette High School<br />
                    Rodolfo Jimenez - Nampa High School<br />
                    Kieran Padilla - Capital High School<br />
                    Cecilia Pena - Columbia High School<br />
                    Jose Prado - Meridian High School<br />
                    Miguel Rodriguez - Wilder High School<br />
                    Mia Russel - Eagle High School<br />
                    Annamaria Salas - Homedale High School<br />
                    Abdencio Sanchez - Homedale High School<br />
                    Daniel Sandoval - Wilder High School<br />
                    David Silva - Nampa Christian High School<br />
                    Blanca Uriarte - Homedale High School<br />
                    Miguel Vasquez - Homedale High School<br />
                    Maygen Cardona - Boise State University<br />
                    Dorys DeLa Cruz - College of Idaho<br />
                    David Estrada - U. of Illinois Urbana/Cham<br />
                    Maritz Gomez - Boise State University<br />
                    Luis Hernandez - Idaho State University<br />
                    Adam Nunez - College of Idaho<br />
                    Maximillian Padilla - College of Idaho<br />
                    Adrian Rangel - Boise State University<br />
                    Julian Rodriguez - Boise State University<br />
                    Clemente Salinas - Boise State University<br />
                    Jacob Salinas - University of Idaho<br />
                    Maria R. Vanegas - University of Idaho<br />
                    Rosaura Vanegas - Boise State University
                    
               </div>
             </div>
         </div>
   <!-- 2010-->
    <div class="card">
             <div class="card-header" id="headingEighteen">
               <h2 class="mb-0">
                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEighteen" aria-expanded="true" aria-controls="collapseEighteen">
                   2010
                 </button>
               </h2>
             </div>

             <div id="collapseEighteen" class="collapse" aria-labelledby="headingEighteen" data-parent="#accordionExample">
               <div class="card-body">
                   
                    Ross Arellan - Hammett High School<br />
                    Tomas Briseno - Nampa High School<br />
                    Diego Cordova - Caldwell High School<br />
                    Jessica Garcia - Caldwell High School<br />
                    Estephania Gongora - Nampa High School<br />
                    Esmeralda Herrera - Nampa High School<br />
                    Salvador Huitron - Caldwell High School<br />
                    Mariana Morales - Nampa High School<br />
                    Kayla Puga - Nampa High School<br />
                    Sergio Rangel - Caldwell High School<br />
                    Corina Sanchez - Wilder High School<br />
                    Damian Soliz - Mtn. Home High School<br />
                    Daniel Tristan - Caldwell High School<br />

                 

                    Ana Castillo - College of So. Idaho<br />
                    Silvino Jimenez Jr. - Boise State University<br />
                    Jose Prado - Boise State University<br />
                    Abdencio Sanchez - University of Idaho<br />
                    Miguel Vasquez - University of Idaho

                    
               </div>
             </div>
         </div>
   <!-- 2011-->
    <div class="card">
             <div class="card-header" id="headingNineteen">
               <h2 class="mb-0">
                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseNineteen" aria-expanded="true" aria-controls="collapseNineteen">
                   2011
                 </button>
               </h2>
             </div>

             <div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen" data-parent="#accordionExample">
               <div class="card-body">
                   
                    Said Barrero - Nampa High School<br />
                    Alejandra Garcia - Mountain Home High School<br />
                    Cristina Garcia - Greenleaf High School<br />
                    Diana E. Gomez Romero - Boise High School<br />
                    Adama Guerra - Emmett High School<br />
                    Rebecca Harryman - Eagle High School<br />
                    Joshua Plata - Boise High School<br />
                    Jenifer Popoca - Glenns Ferry High School<br />
                    Martin Ronquill - Star High School<br />

                    Roberto Almanza - Boise State University<br />
                    Juan Flores - Boise State University<br />
                    Silvino Jimenez, Jr - Boise State University<br />
                    Mariana Morales - University of Idaho<br />
                    Kieran Padilla - College  of Idaho<br />
                     Maximillian Padilla - University of Utah<br />
                    Julian Rodriguez - Boise State University
                    
               </div>
             </div>
         </div>
   <!-- 2012-->
    <div class="card">
             <div class="card-header" id="headingTwenty">
               <h2 class="mb-0">
                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwenty" aria-expanded="true" aria-controls="collapseTwenty">
                   2012
                 </button>
               </h2>
             </div>

             <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty" data-parent="#accordionExample">
               <div class="card-body">
                   
                    Gillardo Perez - Weiser High School<br />
                    Martin Saldivar - Weiser High School<br />
                    Angela Tipton - Fruitland High School<br />

                    Said Barrero - Boise State University<br />
                    Juan Flores - Boise State University<br />
                    Krista Gaona - Northwest Nazarene University<br />
                    Alejandra Garcia - Boise State University<br />
                    Diana Gomez Romero - College of Idaho<br />
                    Christian Guerrero - Boise State University<br />
                    Peter Guerrero - Boise State University<br />
                    Silvino Jimenez, Jr - Boise State University<br />
                    Kieran Padilla - College of Idaho<br />
                    Maximillian Padilla - University of Idaho<br />
                    Julian Rodriguez - Boise State University<br />
                    Abdencio Sanchez - University of Idaho<br />

                    
               </div>
             </div>
         </div>
   <!-- 2013-->
    <div class="card">
             <div class="card-header" id="headingTwentyOne">
               <h2 class="mb-0">
                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwentyOne" aria-expanded="true" aria-controls="collapseTwentyOne">
                   2013
                 </button>
               </h2>
             </div>

             <div id="collapseTwentyOne" class="collapse" aria-labelledby="headingTwentyOne" data-parent="#accordionExample">
               <div class="card-body">
                   
                    Azucena Camargo Reyes - Caldwell High School<br />
                    Virginia Ixta - Wiser High School<br />
                    Ruby Mendivil - Capital High School<br />
                    Elena Perez - Glenns FerryHigh School<br />
                    Yadira Zuniga - Middleton High School<br />
                    Jacqueline Zuniga - Middleton High School<br />

                    Maritza Ambriz - Boise State University<br />
                    Victor Araiza - College of Western Idaho<br />
                    Said Barrero - Boise State University<br />
                    Alejandra Garcia - Boise State University<br />
                    Christian Guerrero - Boise State University<br />
                    Gerardo Juarez Gil - Boise State University<br />
                    Gerardo Rodriguez Orellana - University of Utah<br />
                    Brenda Vasquez - Boise State University<br />
                    Diana Gomez Romero - College of Idaho


                    
               </div>
             </div>
         </div>
   <!-- 2014-->
    <div class="card">
             <div class="card-header" id="headingTwentyTwo">
               <h2 class="mb-0">
                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwentyTwo" aria-expanded="true" aria-controls="collapseTwentyTwo">
                   2014
                 </button>
               </h2>
             </div>

             <div id="collapseTwentyTwo" class="collapse" aria-labelledby="headingTwentyTwo" data-parent="#accordionExample">
               <div class="card-body">
                   
                    Alexis Araiza - Sky View High School<br />
                    Daniel Camargo - Caldwell High School<br />
                    Kory Gaona - Nampa Christian<br />
                    Victor Lazaro - Weiser High School<br />
                    Giovanna Marquez Napoles - Emmett High School<br />
                    Guadalupe Perez - Weiser High School<br />
                    Stephanie Perez - Weiser High School<br />

                    Said Barrero - Boise State University<br />
                    Azucena Camargo Reyes - Boise State University<br />
                    Alejandra Garcia - Idaho State University<br />
                    Diana Gomez Romero - College of Idaho<br />
                    Becky Juarez - Boise State University<br />
                    Elena Perez - University of Idaho<br />
                    Laura Rodriguez - Boise State University<br />
                    Brenda Vasquez - Boise State University
                    
               </div>
             </div>
         </div>
   <!-- 2015-->
    <div class="card">
             <div class="card-header" id="headingTwentyThree">
               <h2 class="mb-0">
                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwentyThree" aria-expanded="true" aria-controls="collapseTwentyThree">
                   2015
                 </button>
               </h2>
             </div>

             <div id="collapseTwentyThree" class="collapse" aria-labelledby="headingTwentyThree" data-parent="#accordionExample">
               <div class="card-body">
                   
                    Eduardo Celis - Canyon Ridge High School<br />
                    Lauren Cordova - Mountain View High School<br />
                    Amalia Negrette - Mountain View High School<br />
                    Benjamin Rodriguez - Wilder High School<br />


                    Alexis Araiza - College of Western Idaho<br />
                    Victor Araiza - Boise State University<br />
                    Said Barrero - Boise State University<br />
                    Daniel Camargo - Boise State University<br />
                    Alexis Figueroa - Boise State University<br />
                    Brenda Martinez - Boise State University<br />
                    Mighely Morales - Boise State Universit<br />
                    Elena Perez - University of Idaho<br />
                    Rubi Rabago - Boise State University<br />
                    Esmeralda Soto - Boise State University<br />
                    Brenda Vazquez - Boise State University

                    
               </div>
             </div>
         </div>
   <!-- 2016-->
    <div class="card">
             <div class="card-header" id="headingTwentyFour">
               <h2 class="mb-0">
                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwentyFour" aria-expanded="true" aria-controls="collapseTwentyFour">
                   2016
                 </button>
               </h2>
             </div>

             <div id="collapseTwentyFour" class="collapse" aria-labelledby="headingTwentyFour" data-parent="#accordionExample">
               <div class="card-body">
                   
                    Angeles Riza Padilla - Wilder High School<br />
                    Alejandra Mojica - Burley High School<br />
                    Beatrice Martinez - Homedale High School<br />
                    Steven Bautista - Borah High School<br />
                    
                    Alexis Araiza - Boise State University<br />
                    Azucena Camargo - Boise State University<br />
                    Daniel Camargo - Boise State University<br />
                    Eduardo Celis - University of Idaho<br />
                    Lauren Cordova - University of Utah<br />
                    Alejandra Garcia - Idaho State University<br />
                    Mariela Montoya - Boise State University<br />
                    Mighely Morales - Boise State University<br />
                    Amalia Negrette - North Idaho College<br />
                    Miguel Nuñez - College of Idaho<br />
                    Esmeralda Soto - Boise State University


                    
               </div>
             </div>
         </div>
    <!-- 2017-->
    <div class="card">
             <div class="card-header" id="headingTwentyFive">
               <h2 class="mb-0">
                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwentyFive" aria-expanded="true" aria-controls="collapseTwentyFive">
                   2017
                 </button>
               </h2>
             </div>

             <div id="collapseTwentyFive" class="collapse" aria-labelledby="headingTwentyFive" data-parent="#accordionExample">
               <div class="card-body">
                   
                    Allison Ruiz-Aurelio - Wilder High School<br />
                    Keven Ortiz Hernandez - Burley High School<br />
                    Aaliyah Tijerina - Homedale High School<br />
                                                                    
                    Azucena Camargo - Boise State University<br />
                    Daniel Camargo - Boise State University<br />
                    Susana Morales Carrillo - Boise State University<br />
                    Eduardo Celis - University of Idaho<br />
                    Lauren Cordova - University of Utah<br />
                    Edgar Escobedo - Boise State University<br />
                    Alexis Figueroa - Boise State University<br />
                    Kory Gaona - Northwest Nazarene<br />
                    Natalie Llama - Boise State University<br />
                    Beatrice Santiago Martinez - University of Idaho<br />
                    Mariela Montoya - Boise State University<br />
                    Mighely Morales - Boise State University<br />
                    Amalia Negrette - Dixie State University<br />
                    Kendelle Puga - University of Idaho<br />
                    Brenda Rodriguez - Boise State University<br />
                    Omar Rodriguez - University of Idaho



                    
               </div>
             </div>
         </div>
    <!-- 2018-->
    <div class="card">
             <div class="card-header" id="headingTwentySix">
               <h2 class="mb-0">
                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwentySix" aria-expanded="true" aria-controls="collapseTwentySix">
                   2018
                 </button>
               </h2>
             </div>

             <div id="collapseTwentySix" class="collapse" aria-labelledby="headingTwentySix" data-parent="#accordionExample">
               <div class="card-body">
                   
                    Paulina Baeza - Meridian High School<br />
                    Ivan Castillo - Vallivue High School<br />
                    Saul Gonzalez - Centennial High School<br />
                    Jazmine Guaydacan - Timberline High School<br />
                    Alyssa Llamas - West Jefferson<br />
                    Alivia Negrette - Mountain View High<br />
                    Jennifer Rodriguez - Glenns Ferry High School<br />
                    Elvis Solis Santos - New Plymouth High School<br />
                    
                    Paola Chavez - University of Idaho<br />
                    Lauren Cordova - University of Utah<br />
                    Kimberly Guevara - Boise State University<br />
                    Kevin Ortiz Hernandez - Boise State University<br />
                    Vincent Johnson - University of Oregon<br />
                    Natalie Llamas - Boise State University<br />
                    Marissa Gonzalez Mabbutt - Brigham Young University<br />
                    Beatrice Santiago Martinez - University of Idaho<br />
                    Amalia Negrette - Dixie State University<br />
                    Angeles Riza Padilla - Boise State University<br />
                    Kendelle Puga - University of Idaho<br />
                    Brenda Rodriguez - Boise State University	



                    
               </div>
             </div>
         </div>
    <!-- 2019-->
    <div class="card">
             <div class="card-header" id="headingTwentySeven">
               <h2 class="mb-0">
                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwentySeven" aria-expanded="true" aria-controls="collapseTwentySeven">
                   2019
                 </button>
               </h2>
             </div>

             <div id="collapseTwentySeven" class="collapse" aria-labelledby="headingTwentySeven" data-parent="#accordionExample">
               <div class="card-body">
                   
                    Alejandro Hernandez - Caldwell High School<br />
                    Kellety Martinez - Skyview High School<br />
                    Alondra Saramiento - Ridgevue High School<br />
                    Misael Soto - Glenns Ferry High School<br />
                    Jennifer Tobar - Caldwell  High School<br />
                    Katelyn Quintero - Caldwell High School<br />
                    Paulina Baeza - Boise State University<br />
                    Lauren Cordova - University of Utah<br />
                    Wilver Coria - Treasure Valley CC<br />
                    Saul Garcia - College of Southern Idaho<br />
                    Saul Gonzalez - Idaho State University<br />
                    Nallely Gonzalez - University of Idaho<br />
                    Marisa Gonzalez Mabbutt - Brigham Young University<br />
                    Estefany Macias Lopez - College of Idaho<br />
                    Amalia Negrette - Dixie State University<br />
                    Kevin Ortiz Hernandez - Boise State University<br />
                    Angeles Rizo Padilla - Boise State University

                    
               </div>
             </div>
         </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
</div>
            
   </div>         
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <!--Begin Leo Modal-->
            <div class="modal fade bd-example-modal-lg" id='leo' tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
            <div class="modal-content px-5">
                <h1 class='text-center'><strong>Leo Morales</strong></h1>

                <p>Leo Morales graduated from Boise State University in 2005 with a Political Science degree. He currently works as the senior organizer and project director for the Idaho Community Action Network (ICAN).  ICAN is the largest grassroots organization working on social, racial, and economic justice issues in Idaho.  Leo leads state-wide efforts on comprehensive immigration reform and participates in key strategy meetings in Washington D.C. on the issue.</p>

              <strong>What did receiving a scholarship(s) mean to you?</strong>

              <p>To highlight just how crucial scholarships were in my life I offer this.  As a son of farmworkers, I could not receive direct financial support from my parents. Living on my own at the university and at the height of my involvement on a state political campaign to extend minimum wage protections to farmworkers, I was holding a part-time job but my funds were running low.  Rent, utilities, car maintenance bills and tuition were all converging, but my savings did not add up.  Put in a very tough situation, I contemplated a full time job temporarily, suspend my involvement with the state campaign as a key spokes person and put less time in my studies. All difficult choices. As my savings were down to just a few hundred dollars and with stress level at its peak, I opened an envelope from the Hispanic Scholarship Fund.  My letter of congratulations and scholarship check arrived.  Twelve-hundred dollars into my bank account allowed me to continue to study, be actively involved with the state campaign and ultimately I saw the minimum wage bill become into law.</p>

                <strong>What impact did receiving a scholarship(s) have on you?  </strong>

                <p>Financial assistance, public and private, have played a pivotal role in defining who I am today.  Privileged to have received assistance I was able to pursue higher education, stress less about work while attending the university and consequently became very involved in my studies, as well as state politics of campus. Because I graduated with no school debt, I was able to choose a career path that allowed me to continue my activism without regards to a high salary.</p>
                        <button type="button" class="btn btn-danger closing w-25 mx-auto" data-dismiss="modal">Close</button>
                        <br />
                </div>
            </div>
        </div>
            
        <!--Begin Lina Modal-->
        <div class="modal fade bd-example-modal-lg" id='lina' tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content px-5">
                    <h1 class='text-center'><strong>Lina Benavidez</strong></h1>

                    <p>Lina Benavidez is the only one in her family that has graduated from high school and attended a university.  At the Idaho Hispanic Youth Symposium in 1996, as a senior from Caldwell high school she received her first scholarship to attend Boise State University.  After two years at Boise State, she became an exchange student and transferred to New Mexico State University where she received her Bachelor of Science in Elementary Bilingual Education with a minor in linguistics, in 2001.As a senior in college, she was the recipient of the Gates Millennium Scholarship.  This scholarship would pay for her masters and her doctorate degree at the college of her choice.  It was then, that Lina decided to apply for graduate school at Harvard University.  To her surprise, she was accepted.  A year later in 2002, she received her Master’s degree in Education from Harvard.  She worked as a researcher and an elementary school teacher for a year in Boston before applying to graduate school again, now with the goal of getting a Ph.D.  Lina is finishing her dissertation work at the University of California Davis while working as a research analyst.</p>

                    <strong>What did receiving a scholarship(s) mean to you?</strong>

                    <p>The first scholarship I ever received was for the amount of $2,000. In 1996, it was enough to cover the cost of tuition for one year at Boise State. That money paved the way for me to believe that I could attend a higher education institution. That year I received seven other local and university scholarships that paid for my room and board and allowed me to fully experience what it really means to be a college student.  My dorm experienced allowed me to participate in many campus activities and it helped me to be a part of a community.  A community that was very different than mine. Living on campus allowed me to feel as if the university was mine and that I belonged in its buildings and halls.</p>

                    <strong>What impact did receiving a scholarship(s) have on you?  </strong>

                    <p>I could become a teacher and help shape the lives of students who didn’t speak English. I knew that the discrimination I had experienced as an English Learner should not happen to students who are smart and want to work hard at succeeding and having a better life. Because I was exposed to the cultural capital that being in a university includes, I was able to travel around the world to conferences as well as doing community service. I am now happily married with a one year old daughter, and have achieved way more than what I could have ever even imagined. Looking back, it was all because of that first scholarship that made me believe in myself and helped open the one door that would later open many.</p>   
                    <button type="button" class="btn btn-danger closing w-25 mx-auto" data-dismiss="modal">Close</button>
                            <br />
                </div>
            </div>
        </div>
        
        <!--Begin David Modal-->
        <div class="modal fade bd-example-modal-lg" id='david' tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content px-5">
                    <h1 class='text-center'><strong>David Estrada</strong></h1>

                    <p>David Estrada was born in Caldwell, Idaho in 1977. From 1998 to 2004 he served in the United States Navy as an Electronics Warfare Technician. He achieved the rank of First Class Petty Officer in 2003 before receiving an honorable discharge and returning to Idaho to pursue his undergraduate education at Boise State University. During his time at Boise State, David held undergraduate research positions with the Power Electronics Research Group at UC Berkeley (as part of the SUPERB program) and with the Device Characterization Group at Boise State. After graduating in May of 2007 he began graduate studies at the University of Illinois at Urbana-Champaign under the direction of Professor Eric Pop. David received his M.S. in ECE from UIUC in August of 2009 and is currently pursuing his Ph.D. He is a member of Tau Beta Pi, the Institute of Electrical and Electronics Engineers, the Materials Research Society, the American Chemical Society, the Applied Physics Society, and the Society of Hispanic Professional Engineers. David is the recipient of the NSF, NDSEG, SURGE, and Micron Graduate Fellowships. His research interests are in the areas of physical electronics and semiconductor materials.</p>

                    <strong>What did receiving a scholarship(s) mean to you?</strong>

                    <p>While scholarships have always helped me financially, having my academic achievements recognized by members of my community and professionals in my field motivates me to work harder and achieve even greater success. While the significance of scholarships varies from student to student, I recognize scholarships as an investment in my future. This motivates me to give back to my community and to professional organizations, either financially or through service. Doing so will provide future scholars the same opportunities I have enjoyed.</p>

                    <strong>What impact did receiving a scholarship(s) have on you?  </strong>

                    <p>As a non-traditional student scholarships are a vital part of my income, allowing me to support my family while pursuing my education. Earning scholarships as an undergraduate allowed me get involved in undergraduate research, lead student organizations, and focus on my academic development. Scholarships had a tremendous impact on my ability to prepare myself for graduate school. As a graduate student, scholarship and fellowship support has provided me the academic freedom to pursue research I truly enjoy, and that I believe will have a lasting impact on society.</p>
                    <button type="button" class="btn btn-danger closing w-25 mx-auto" data-dismiss="modal">Close</button>
                            <br />
                </div>
            </div>
        </div>
        
            
            
            
            
       </div>
    </body>
    <?php include("./view/footer.php")  ?>
</html>

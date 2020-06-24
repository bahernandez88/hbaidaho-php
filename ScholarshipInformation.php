<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="./js/countdown.js" defer></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="./images/HBAwatermark.png" type="image/gif" sizes="16x16">
        <link rel="stylesheet" href="./css/style.css"/>
        
         
        <title>Scholarship Information</title>
    </head>

<?php include('./view/UpperNav.php') ?>

    <body>
        <h1 class="text-center underline">Richard G. Cortez <?php echo date('Y')  ?> SCHOLARSHIP PROGRAM</h1>
        
        
        <div class="text-left" id="info">
            <h3>General Guidelines</h3>
            <ol>
                <li>Awards are made annually. The number of scholarships awarded is determined each year by the HBA’s Board of Directors.  
                    Proceeds for this scholarship program come from our annual golf tournament: “The Richard G. Cortez Jalapeño Open”. 
                    <strong>Scholarship recipients may be asked to participate as a volunteer during the tournament or at our fundraising gala event.</strong></li>
                <li>Recipients must enroll for a minimum of 12 credit hours or have full-time status as an undergraduate or graduate student in 
                    an accredited post-secondary institution of higher learning.</li>
                <li>
                    Award recipients are selected based on the following factors:
                    <br />
                    <ol>
                        <li>Academic performance based on the most recent official transcript.</li>
                        <li>Responses to Essay.</li>
                        <li>Extracurricular activities/work experience, which reflect leadership, initiative, motivation, etc.</li>
                        <li>Recommendations from teachers, business contacts, clergy, etc.</li>
                                                
                    </ol>
                </li>

            </ol>
            <br />
            
            <div class="row">
                <div class="col">
                    <h3>Requirements</h3>
                        <ol>
                            <li>Academic performance, minimum eligibility of a 2.5 GPA.</li>
                            <li>Recipient must be of Hispanic descent</li>
                            <li>
                                Documents required to be submitted:
                                <br />
                                <ul>
                                    <li>Submit the scholarship application form.</li>
                                    <li>Two letters of recommendation.</li>
                                    <li>Official copy of the most recent transcript.</li>
                                    <li>List of extracurricular activities and work history in a resume format.</li>
                                    <li>Essay questions are below.</li>
                                </ul>
                            </li>
                        </ol>
                    <br />
                    <div class="text-center">
                        <button class="btn-danger" onclick="window.location.href = './Application/apply.php';" disabled>Scholarship Application!</button>
                    </div>
                    <br />
                </div>
                <div class="col text-center  my-auto">
                    <h3>Time Until Application Deadline</h3>
                    <div class="display-4">
                        <script language="JavaScript">
                            TargetDate = "4/1/2020 12:00 AM";
                            BackColor = "white";
                            ForeColor = "red";
                            CountActive = true;
                            CountStepper = -1;
                            LeadingZero = true;
                            DisplayFormat = "%%D%%d %%H%%h %%M%%m %%S%%s";
                            FinishMessage = "Application Deadline Closed";
                        </script>
                        <script language="JavaScript" src="https://rhashemian.github.io/js/countdown.js"></script>
                    </div>
                    <!--<p id="countdown"></p>-->
                </div>
            </div>
            
            <h3>Essay Questions: Impeachment and the Constitution</h3>
            
            <p>Obviously, there has been much attention recently about the impeachment of President Trump. The response to this essay should ignore 
                the present situation and rather should reflect your understanding of the historical debate and context of the impeachment process as 
                envisioned by our founding fathers.</p>
            
            <h4>Essay for High School Seniors:</h4>
            <ol>
                <li>Explain the differing roles of the two chambers of the U.S. Congress regarding the Impeachment process.</li>
                <li>What civil officers of the United States are subject to the Impeachment clause and who is immune from prosecution?</li>
                <li>The House of Representatives has impeached 19 officers of the government since our founding. 
                    The Senate has convicted eight. Choose two examples of the convictions and explain the details surrounding their convictions.     </li>
            </ol>
            
            <h4>Essay for All Others (Soph. Jr. Seniors or Grad Students)</h4>
            <h5>“The Constitution grants Congress the authority to impeach and remove the President and other federal civil officers for Treason, Bribery or other high Crimes and Misdemeanors.”  </h5>
            <ol>
                <li>What is the historical and practical understanding of the meaning of High Crimes or Misdemeanors?</li>
                <li>What is the reasoning behind having the Chief Justice of the Supreme Court preside over the Senate proceedings instead of the Vice President?</li>
                <li>Why did the framers of the Constitution require a two-thirds vote for conviction by the senate instead of the simple majority that is required for impeachment?  </li>
                <li>The question of what specifically constitutes an “impeachable offense“ has been argued since the Constitutional Convention.
                    What is the generally recognized understanding of the meaning of this term?    </li>
            </ol>
            
            
            <h2 class="text-danger">IMPORTANT – PLEASE READ:</h2>

            <p>We understand that there may be some exceptions such as transcripts and/or letters of recommendations 
                that may need to be sent directly to the scholarship program at the Hispanic Business Association:</p>
            <br />
            <address>Address: <br />
                    Hispanic Business Association <br />
                    6191 W. Winstead Pl. <br />
                    Boise, ID 83704 <br />
            </address>

            <p class="text-center text-danger"><strong>APPLICATION DEADLINE: April 1st, <?php echo date('Y')?></strong></p>
            <p>Scholarship application.</p>
            <p>Two letters of recommendation.</p>
            <p>Official copy of the most recent transcript.</p>
            <p>List of extracurricular activities and work history in a resume format.</p>
            <p>Essay question(s).</p>
            
            <br />



            
        </div>

    <?php include("./view/footer.php")?>
    </body>
</html>

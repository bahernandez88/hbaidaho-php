"use-strict;"


var dropdown = document.getElementById("studentStatus");
var highschool = document.querySelectorAll("highschool");



dropdown.addEventListener("change", function(){
    if(dropdown.selectedIndex === 0){
        document.getElementById("lblHighSchool").style.display = "none";
        document.getElementById("txtHighSchool").style.display = "none";
        document.getElementById("lblGradYear").style.display = "none";
        document.getElementById("txtGradYear").style.display = "none";
        document.getElementById("lblGpa").style.display = "none";
        document.getElementById("txtGpa").style.display = "none";
        document.getElementById("lblCounselor").style.display = "none";
        document.getElementById("txtCounselor").style.display = "none";
        document.getElementById("lblCollege").style.display = "none";
        document.getElementById("txtCollege").style.display = "none";
    }
    else if(dropdown.selectedIndex === 1){

        //show high school blocks
        document.getElementById("lblHighSchool").style.display = "inline-block";
        document.getElementById("txtHighSchool").style.display = "inline-block";
        document.getElementById("lblGradYear").style.display = "inline-block";
        document.getElementById("txtGradYear").style.display = "inline-block";
        document.getElementById("lblGpa").style.display = "inline-block";
        document.getElementById("txtGpa").style.display = "inline-block";
        document.getElementById("lblCounselor").style.display = "inline-block";
        document.getElementById("txtCounselor").style.display = "inline-block";
        document.getElementById("lblCollege").style.display = "inline-block";
        document.getElementById("txtCollege").style.display = "inline-block";
        
        //remove college blocks
        document.getElementById("lblCollegeBlock").style.display = "none";
        document.getElementById("lblCollegeAttend").style.display = "none";
        document.getElementById("txtCollegeAttend").style.display = "none";
        document.getElementById("lblCollegeAddress").style.display = "none";
        document.getElementById("txtCollegeAddress").style.display = "none";
        document.getElementById("lblCollegeCity").style.display = "none";
        document.getElementById("txtCollegeCity").style.display = "none";
        document.getElementById("lblCollegeZip").style.display = "none";
        document.getElementById("txtCollegeZip").style.display = "none";
        document.getElementById("lblStudyArea").style.display = "none";
        document.getElementById("txtStudyArea").style.display = "none";
        document.getElementById("lblStandingClass").style.display = "none";
        document.getElementById("slcStandingClass").style.display = "none";
        document.getElementById("lblGpaC").style.display = "none";
        document.getElementById("txtGpaC").style.display = "none";

    }
     else if(dropdown.selectedIndex === 2){
         //remove high school blocks from display
        document.getElementById("lblHighSchool").style.display = "none";
        document.getElementById("txtHighSchool").style.display = "none";
        document.getElementById("lblGradYear").style.display = "none";
        document.getElementById("txtGradYear").style.display = "none";
        document.getElementById("lblGpa").style.display = "none";
        document.getElementById("txtGpa").style.display = "none";
        document.getElementById("lblCounselor").style.display = "none";
        document.getElementById("txtCounselor").style.display = "none";
        document.getElementById("lblCollege").style.display = "none";
        document.getElementById("txtCollege").style.display = "none";

        
        
        //show college blocks
        document.getElementById("lblCollegeBlock").style.display = "inline-block";
        document.getElementById("lblCollegeAttend").style.display = "inline-block";
        document.getElementById("txtCollegeAttend").style.display = "inline-block";
        document.getElementById("lblCollegeAddress").style.display = "inline-block";
        document.getElementById("txtCollegeAddress").style.display = "inline-block";
        document.getElementById("lblCollegeCity").style.display = "inline-block";
        document.getElementById("txtCollegeCity").style.display = "inline-block";
        document.getElementById("lblCollegeZip").style.display = "inline-block";
        document.getElementById("txtCollegeZip").style.display = "inline-block";
        document.getElementById("lblStudyArea").style.display = "inline-block";
        document.getElementById("txtStudyArea").style.display = "inline-block";
        document.getElementById("lblStandingClass").style.display = "inline-block";
        document.getElementById("slcStandingClass").style.display = "inline-block";
        document.getElementById("lblGpaC").style.display = "inline-block";
        document.getElementById("txtGpaC").style.display = "inline-block";
        
    }   
    
});

<?php
ob_start();
?>

<?php
$program = $level = $semester = false;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Eleesa Forum</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
	<link rel="stylesheet" type="text/css" href="includes/css/css.css">
    <link rel="stylesheet" type="text/css" href="includes/css/about.css">
    <style>
        div.about_eleesa{
	margin:10px;
	width: 100%;
	height: 400px;
	border-top-left-radius:200px; 
	border-bottom-right-radius: 200px;
	background:linear-gradient(lightgrey,white,white,white,white,white,white,white,white,white,lightgrey,black);
}
div.about_eleesa .main_content{
	color: #003366;
	padding-top: -10px;
	padding-left: 20px;
	padding-right: 20px;
	font-size: 29px;
	font-family: footlight MT light;
}
div.eleesa_exec{
	margin:10px;
}
div.exec1,
div.exec2,
div.exec3,
div.exec4,
div.exec5,
div.exec6,
div.exec7,
div.exec8,
div.exec9,
div.exec10,
div.exec11,
div.exec12{
	margin:5px;
	display: inline-block;
	width: 32%;.
	height: 500px;
	font-family: footlight MT light;
}
div.elees .exec1:hover{
	transition: 1s;
	z-index: 1;
	box-shadow: 2px 2px 10px 10px whitesmoke;
}
div.exec2,
div.exec4,
div.exec6,
div.exec8,
div.exec10,
div.exec12{
	border-bottom-left-radius: 30px;
	border-bottom-right-radius: 30px;
	background:linear-gradient(white,white,white,white,white,white,white,white,white,lightgrey,lightgrey);
}
div.exec1,
div.exec3,
div.exec5,
div.exec7,
div.exec9,
div.exec11{
	background:linear-gradient(white,white,white,white,white,white,white,white,lightgrey,lightgrey,#003366);
}
h2#execs{
	letter-spacing: 6px;
	color: #003366;
	border-radius: 10px;
	border-bottom: 5px solid #003366;
	padding: 10px;
	font-family: candara;
	width: 50%;
	font-size: 25px;
	margin-left: 250px;
	text-align: center;
}
div.descr1,
div.descr2,
div.descr3,
div.descr4,
div.descr5,
div.descr6,
div.descr7,
div.descr8,
div.descr9,
div.descr10,
div.descr11,
div.descr12{
	color: black;
	font-size: 28px;
	padding-top: 0px;
	text-align: center;
}
div.exec1 .image1{
	height: 350px;
	width: 100%;
}
div.exec2 .image2{
	height: 350px;
	width: 100%;
}
div.exec3 .image3{
	height: 350px;
	width: 100%;
}
div.exec4 .image4{
	height: 350px;
	width: 100%;
}
div.exec5 .image5{
	height: 350px;
	width: 100%;
}
div.exec6 .image6{
	height: 350px;
	width: 100%;
}
div.exec7 .image7{
	height: 350px;
	width: 100%;
}
div.exec8 .image8{
	height: 350px;
	width: 100%;
}
div.exec9 .image9{
	height: 350px;
	width: 100%;
}
div.exec10 .image10{
	background-image: url('includes/images/image_10.jpg'); 
	background-repeat: no-repeat;
	background-origin: content-box;
	background-size: 100% 350px;
	height: 350px;
	width: 100%;
}
div.exec11 .image11{
	height: 350px;
	width: 100%;
}
div.exec12 .image12{
	height: 350px;
	width: 100%;
}
    
    </style>
</head>
<body>
	<div class="main_section">
		<div class="header">
			<img src="includes/images/eleesa_logo.jpg" style="position: relative; width: 20%; height: 200px; margin-left: 37%;">
			<h3 style="font-family: tempus sans ITC;font-weight: bolder;text-align: center; margin-right: 3.5%;letter-spacing: 20px;font-size: 140%;">WE TRAN<span style="color: #1D567E; font-weight: bolder;">SFORM TH</span>E WORLD!</h3>
		</div>
		<div class="main_body">
			<div class="tabs">
				<div class="my_button">
					<button class="tabbtn" onclick="showTab(0,'black')">ABOUT US</button>
					<button class="tabbtn" onclick="showTab(1,'black')">NEWS</button>
					<button class="tabbtn" onclick="showTab(2,'black')">ACADEMICS</button>
				</div>

				<div class="tabcontent" id="about_us">
					<div class="main_about_us">
						<div class="about_eleesa">
							<div class="main_content">
								<h2 id="execs">BRIEF HISTORY ON ELEESA</h2>
								The Electrical and Electronics student Association was established on the 10th of March, 2014 in cognizant of the University of Energy and Natuaral Resources and that of GESA. The undergraduates at that time sought to organize themselves to seek and nurture the welfare of the students, provide a unified voice to influence the decision of the department and to seek their recorgnition as an orgainzed body of the university. It was against this background that some students namely; Stephen Asante, Bernadette Obodai,Richmond Ayariga,Sonita Aboagye,Namba Percy and Anderson worked tirelessly in ensuring the birth of this association. On the 12th of March, 2014, election was organized to get leaders to steer the affairs of the organization
							</div>
						</div>
						<h2 id="execs">CURRENT ELEESA EXECUTIVES</h2>
						<div class="eleesa_exec">
							<div class="exec1">
								<div class="image1">
									
								</div>
								<div class="descr1">
									Emmanuel Oteng Wilson<br>
									President<br>
									Level 300<br>
									Computer Engineering
								</div>
							</div>
							<div class="exec2">
								<div class="image2">
									
								</div>
								<div class="descr2">
									Amedormeh Benjamin<br>
									Vice President<br>
									Level 400<br>
									Electrical Engineering
								</div>
							</div>
							<div class="exec3">
								<div class="image3">
									
								</div>
								<div class="descr3">
									Mudashiru Ghaffaru<br>
									Organizer<br>
									Level 300<br>
									Computer Engineering
								</div>
							</div>
							<div class="exec4">
								<div class="image4">
									
								</div>
								<div class="descr4">
									Owusu Fremah Christabel<br>
									Welfare Representative<br>
									Level 300<br>
									Electrical Engineering
								</div>
							</div>
							<div class="exec5">
								<div class="image5">
									
								</div>
								<div class="descr5">
									Emmanuel Panford<br>
									Project Manager<br>
									Level 400<br>
									Electrical Engineering
								</div>
							</div>
							<div class="exec6">
								<div class="image6">
									
								</div>
								<div class="descr6">
									Dennis Adjetey Akuetteh<br>
									Financial Secretary<br>
									Level 200<br>
									Electrical Engineering
								</div>
							</div>
							<div class="exec7">
								<div class="image7">
									
								</div>
								<div class="descr7">
									Blay-Ackah Amihere<br>
									Financial Secretary<br>
									Level 300<br>
									Electrical Engineering
								</div>
							</div>
							<div class="exec8">
								<div class="image8">
									
								</div>
								<div class="descr8">
									Frimpong Adakabre Elvis<br>
									Eleesa Acedemic Rep<br>
									Level 200<br>
									Electrical Engineering
								</div>
							</div>
							<div class="exec9">
								<div class="image9">
									
								</div>
								<div class="descr9">
									Feakta A.R Arhin<br>
									Departmental Justice<br>
									Level 300<br>
									Computer Engineering
								</div>
							</div>
							<div class="exec10">
								<div class="image10">
									
								</div>
								<div class="descr10">
									Afrifa Owusu Boateng<br>
									Sport Commissioner<br>
									Level 300<br>
									Computer Engineering
								</div>
							</div>
							<div class="exec11">
								<div class="image11">
									
								</div>
								<div class="descr11">
									Afriyie Akowuah Mary<br>
									Women Commissioner<br>
									Level 300<br>
									Electrical Engineering
								</div>
							</div>
							<div class="exec12">
								<div class="image12">
									
								</div>
								<div class="descr12">
									Afriyie Kwabena Owusu<br>
									P.R.O<br>
									Level 200<br>
									Electrical Engineering
								</div>
							</div>
						</div>
					</div>
					
				</div>

				<div class="tabcontent" id="news_feed">
					
				</div>

				<div class="tabcontent" id="academics">
					<div class="search_content">
						<div class="new_div">
							<div id="program">
								<hr style="background-color:black;width: 100%;">
								<hr style="background-color:black;width: 100%;">
								<h3 style="color: black;text-align: center; font-size: 250%;">Find courses for level and semester</h3>
								<hr style="background-color:black;width: 100%;">
								<hr style="background-color:black;width: 100%;">
								
								<form id="my_new_form" action="" method="post">
									<select id="sel_program" name="program">
										<option value=""><--Select Program--></option>
										<option value="1">Computer Engineering</option>
										<option value="2">Electrical Engineering</option>
									</select>
                                    <?php
                                        //Verify Program selected
                                        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                            if ($_POST['program'] == NULL) {
                                                ?><span style="color: red; text-align:center;">Please select a program</span><?php
                                            }else {
                                                $program = $_POST['program'];
                                            }
                                        }
                                    ?>
                                    <div id="level">
                                        

                                        <select id="sel_level" name="level">
                                            <option value=""><--Select Level--></option>
                                            <option value="1">Level 100</option>
                                            <option value="2">Level 200</option>
                                            <option value="3">Level 300</option>
                                            <option value="4">Level 400</option>
                                        </select><?php
                                        //Verify the level selected
                                        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                        if ($_POST['level'] == NULL) {
                                        ?><span style="color: red; text-align:center;">Please select a level</span><?php
                                            }else {
                                                $level = $_POST['level'];
                                            }
                                        }?>
                                    </div>

                                    <div id="semester">

                                        <select id="sel_sem" name="semester">
                                            <option value=""><--Select Semester--></option>
                                            <option value="1">First Semester</option>
                                            <option value="2">Second Semester</option>
                                        </select><?php
                                        //Verify the semester selected
                                        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                        if ($_POST['semester'] == NULL) {
                                        ?><span style="color: red; margin-bottom: 1px; text-align:center;">Please select a semester</span><?php
                                            }else {
                                                $semester = $_POST['semester'];
                                            }
                                        }?>
                                        <button type="submit" onsubmit="check_opt()" id="new_btn" >Search</button>

                                </form>

                              <!--  <input type="submit" value="Search" onsubmit="check_opt()" /> -->
                                <!--<a id="search_link" href="#">Search</a>-->

							</div>


						</div>
				</div>
			</div>
			
		</div>

		<div class="footer">
			
			
		</div>
		
	</div>

	<script type="text/javascript">
		function showTab(panelIndex,colorCode){
			var tabbtn = document.querySelectorAll(".tabs .my_button .tabbtn");

			var content = document.querySelectorAll(".tabs .tabcontent");


			tabbtn.forEach(function(node){
				node.style.backgroundColor = "";
				node.style.color = "";
		});

			tabbtn[panelIndex].style.backgroundColor = colorCode;
			tabbtn[panelIndex].style.color = "white";

			content.forEach(function(node){
				node.style.display = "none";

			});

			content[panelIndex].style.display = "block";
			content[0].style.height = "auto"
			content[1].style.height = "900px";
			content[2].style.height = "1100px";
			content[2].style.backgroundImage = "url('includes/images/tab1_image.jpg')";
			content[2].style.backgroundSize = "100% 1100px";
			content[2].style.backgroundRepeat = "no-repeat";
			//content[panelIndex].style.color = "white";
		}
		showTab(2,"black");
	</script>
            <?php
                //Get program id
               if ( ($program) AND  ($level) AND ($semester) ){
                  // $prog_id = $sem_id = false;
                    if ( ($program == 1) && ($level == 1))
                        $prog_id = 1;
                    elseif ( ($program == 1) && ($level == 2))
                        $prog_id = 2;
                    elseif ( ($program == 1) && ($level == 3))
                        $prog_id = 3;
                    elseif ( ($program == 1) && ($level == 4))
                        $prog_id = 4;
                    elseif ( ($program == 2) && ($level == 1))
                        $prog_id = 5;
                    elseif ( ($program == 2) && ($level == 2))
                        $prog_id = 6;
                    elseif ( ($prog_id == 2) && ($level == 3))
                        $prog_id = 7;
                    elseif ( ($prog_id == 2) && ($level == 4))
                        $prog_id = 8;
                    else
                        $prog_id = false;

                    //Get semester id
                    if ($semester == 1)
                        $sem_id = ($prog_id *2) - 1;
                    elseif ($semester == 2)
                        $sem_id = $prog_id * 2;
                    else
                        $sem_id = false;

                    $location = "courses.php?sem=" . $sem_id;

                  //  ob_end_clean(); //Destroy the buffer
                //Go to courses page
                   if ($prog_id && $sem_id) {
                       header("Location:$location");
                       exit();
                   }
                   else {
                       echo 'Sorry';
                   }

               }
             //  ob_end_flush();
            ?>
</body>

</html>

<?php
ob_end_flush();
?>
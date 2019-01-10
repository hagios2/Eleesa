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
	<script type="text/javascript" src="webjs.js"></script>
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
								<span id="program">Select program</span>
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
                                        <span id="lev">Select level</span>

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
                                        <span id="sem">Select semester</span>

                                        <select id="sel_sem" name="semester">
                                            <option value=""><--Select Semester--></option>
                                            <option value="1">First Semester</option>
                                            <option value="2">Second Semester</option>
                                        </select><?php
                                        //Verify the semester selected
                                        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                        if ($_POST['semester'] == NULL) {
                                        ?><span style="color: red; text-align:center;">Please select a semester</span><?php
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
			content[panelIndex].style.height = "900px"
			content[1].style.height = "900px";
			content[2].style.height = "1100px";
			content[2].style.backgroundImage = "url('includes/images/tab1_image.jpg')";
			content[2].style.backgroundSize = "100% 1100px";
			content[2].style.backgroundRepeat = "no-repeat";
			content[panelIndex].style.color = "white";
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
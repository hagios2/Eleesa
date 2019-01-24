<?php
ob_start();
?>
<?php

                if (isset($_GET['sem']) AND is_numeric($_GET['sem'])) {
                    $sem_id = (int)$_GET['sem'];
                    require_once('../db_connect.php');

                    $sql = "SELECT * FROM courses WHERE sem_id=" . $sem_id;

                    $r = $conn->query($sql);

                    $num = $r->num_rows;


                    ?>
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <title>Eleesa Forum</title>
                        <meta charset="utf-8" name="viewport"
                              content="width=device-width,initial-scale=1,user-scalable=yes">
                        <link rel="stylesheet" type="text/css" href="includes/css/css.css">
                         <link rel="stylesheet" type="text/css" href="includes/css/new_css.css">
                        <script type="text/javascript" src="webjs.js"></script>
                    </head>
                    <body>
                    <div class="main_section">
                        <div class="header">
                            <img src="includes/images/eleesa_logo.jpg"
                                 style="position: relative; width: 20%; height: 200px; margin-left: 37%;">
                            <h3 style="font-family: tempus sans ITC;font-weight: bolder;text-align: center; margin-right: 3.5%;letter-spacing: 20px;font-size: 140%;">
                                WE TRAN<span style="color: #1D567E; font-weight: bolder;">SFORM TH</span>E WORLD!</h3>
                        </div>
                        <div class="main_page">
                            <a id="home_link" href="index.php">HOME</a>
                        </div>
                        <div class="table_course_name" style="margin-left: 60px; margin-right: 60px;overflow-x: auto ">


                            <h2 style=' text-align: center; margin-left: 60px;margin-right: 60px; font-family: "Trebuchet MS", verdana, arial, "Times New Roman";'><?php echo $num; ?>  COURSES FOR YOUR
                                SEMESTER</h2><h4 style="margin-left:40%; margin-right: 40%;">Click to open course materials</h4>
                            <table class="tab_courses">
                                <?php
                                while ($row = $r->fetch_assoc()) {
                                    ?>
                                    <tr>
                                    <td><a href="materials.php?cs=<?php echo $row['course_id']; ?>"><?php echo $row['course']; ?></a></td>
                                    </tr><?php
                                }
                                ?>

                            </table>
                        </div>
                        <div class="footer">
                            <!--  <tr>
                                  <td><a href="webpage2.html">DIGITAL LOGIC GATES</a></td>
                              </tr>
                              <tr>
                                  <td><a href="webpage2.html">CONTROL SYSTEM ANALYSIS</a></td>
                              </tr>
                              <tr>
                                  <td><a href="webpage2.html">INSTRUMENTATION</a></td>
                              </tr>
                              -->
                        </div>

                    </div> <?php
                }else{
                    //Redirect if bypassed home page
                    header("Location:index.php");
                    exit();
                }
    ?>
</body>

</html>

<?php
ob_end_flush();
?>
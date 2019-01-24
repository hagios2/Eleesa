<?php
    ob_start();
    require_once "../db_connect.php";

    if (isset($_GET['cs']) AND is_numeric($_GET['cs'])){

$course_id = (int)$_GET['cs'];


?><!DOCTYPE html>
<html>
<head>
    <title>Eleesa Forum</title>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
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
    <div class="table_course_name"
         style='font-family: "Trebuchet MS", verdana, arial, "Times New Roman"; '>

        <?php

        $q = "SELECT * FROM materials WHERE  (course_id=" . $course_id . " AND book IS NOT NULL)";

        $r = $conn->query($q);

        $books_num = $r->num_rows;

        if ($books_num > 0) {

            ?> <h2 style="text-align: center;"><?php echo $books_num; ?> BOOK(S) available</h2>

            <table class="tab_courses" style="margin-left: 30%; margin-right: 30%;" width="40%">
            <?php
            while ($row = $r->fetch_assoc()) {

                        ?>
                        <tr>
                            <td align="center">
                                <a href="download.php?bk=<?php echo rawurlencode($row['book']); ?>&mat_id=<?php echo $row['mat_id']; ?>"><?php echo $row['book'];?></a>
                            </td>
                        </tr> <?php
                    }
            }
         else {
            ?><h2 style="text-align: center;">NO BOOKS available</h2><?php
        }
        ?>
            </table>

    </div>
    <div class="table_passco"
         style='font-family: "Trebuchet MS", verdana, arial, "Times New Roman"'>
        <?php

        $q = "SELECT * FROM materials WHERE  (course_id=" . $course_id . " AND slide IS NOT NULL)";

        $r = $conn->query($q);

        $slide_num = $r->num_rows;

        if ($slide_num > 0) {

        ?> <h2 style="text-align: center;"><?php echo $slide_num; ?> SLIDE(S) available</h2>

        <table class="tab_courses" style="margin-left: 30%; margin-right: 30%;" width="40%">
            <?php
            while ($row = $r->fetch_assoc()) {

                ?>
                <tr>
                    <td>

                        <a href="download.php?mat_id=<?php echo $row['mat_id'] . '&sl=' . $row['slide']; ?>"><?php echo $row['slide']; ?></a>
                    </td>
                </tr> <?php
            }
            }
            else {
                ?><h2 style="text-align: center;">NO SLIDES available</h2><?php
            }
            ?>
        </table>

    </div>
    <div class="table_passco"
         style='font-family: "Trebuchet MS", verdana, arial, "Times New Roman"'>
        <?php

        $q = "SELECT * FROM materials WHERE  (course_id=" . $course_id . " AND pasco IS NOT NULL)";

        $r = $conn->query($q);

        $pasco_num= $r->num_rows;

        if ($pasco_num > 0) {

        ?> <h2 style="text-align: center;"><?php echo $pasco_name; ?> PASCO(S) available</h2>

        <table class="tab_courses" style="margin-left: 30%; margin-right: 30%;" width="40%">
            <?php
            while ($row = $r->fetch_assoc()) {

                ?>
                <tr>
                    <td>

                        <a href="download.php?mat_id= <?php echo $row['mat_id'] . '&ps=' . $row['pasco']; ?>"><?php echo $row['pasco']; ?></a>
                    </td>
                </tr> <?php
            }
            }
            else {
                ?><h2 style="text-align: center;">NO PASCO available</h2><?php
            }
            ?>
        </table>
    </div>
    <div class="footer">


    </div>

</div>

</body>
</html>
<?php
}
ob_end_flush();
?>
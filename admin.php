<?php
    include('db_connect.php');
    $prog_id = $sem_id = $course_id = $book_name = $slide_name = $pasco_name = false;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Public/css/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    </head>
    <body class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body bg-light mt-5">
                        <h2>Add a course details</h2>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">

                               <select name="program" class="form-control">
                                   <option value="">Select a Program</option>
                                   <?php
                                   $q = "SELECT * FROM programs";
                                   $r = $conn->query($q);
                                   if ($r->num_rows > 0){
                                        while ($row = $r->fetch_assoc()){
                                            ?><option value="<?php echo $row['prog_id']; ?>"><?php echo $row['program']; ?></option>
                                   <?php
                                        }
                                   }
                                   ?></select>
                            </div>
                            <div class="form-group">
                                <select name="semester" class="form-control">
                                    <option value="">Select Semester</option>
                                    <?php
                                        $q = "SELECT * FROM semester";
                                        $r = $conn->query($q);

                                        if ($r->num_rows > 0){
                                            while ($row = $r->fetch_assoc()){
                                    ?><option value="<?php echo $row['sem_id']; ?>"><?php echo $row['sem']; ?></option><?php
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="course" class="form-control">
                                    <option value="">Select Course</option>
                                    <?php
                                        $q = "SELECT * FROM courses";
                                        $r = $conn->query($q);

                                        if ($r->num_rows > 0){
                                            while ($row = $r->fetch_assoc()){
                                    ?><option value="<?php echo $row['course_id']; ?>"><?php echo $row['course']; ?></option><?php
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="bookupload">Upload book</label>
                                <input type="file" name="book" />
                            </div>
                            <div class="form-group" >
                                <label for="slideupload">Upload Slide</label>
                                <input type="file" name="slide" class="form-control-file" />
                            </div>
                            <div class="form-group">
                                <label for="pascoupload">Upload Pasco</label>
                                <input type="file" name="pasco" />
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-info" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <script src="Public/css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $prog_id = $_POST['program'];
            $sem_id = $_POST['semester'];
            $course_id = $_POST['course'];
            $q = $book_name = $slide_name = $pasco_name = false;
            if (is_uploaded_file($_FILES['book']['tmp_name'])){

                $book_name = $_FILES['book']['name'];
            }else{
                //$book_name = false;
            }

            if (is_uploaded_file($_FILES['slide']['tmp_name'])){
               // $slide_dir = "Public/Slides/" . $mat_id;
                $slide_name = $_FILES['slide']['name'];
            }else{
              //  $slide_name = false;
            }


            if (is_uploaded_file($_FILES['pasco']['tmp_name'])){
                //$pasco_dir = "Public/Pasco/" . $mat_id;
                $pasco_name = $_FILES['pasco']['name'];
            }else{
              //  $pasco_name = false;
            }

            if ($book_name && !$slide_name && !$pasco_name){
                $q = "INSERT INTO materials(course_id,book) VALUES ($course_id,'$book_name')";
            }else if (!$book_name && $slide_name && !$pasco_name){
                $q = "INSERT INTO materials(course_id,slide) VALUES ($course_id,'$slide_name')";
            }else if (!$book_name && !$slide_name && $pasco_name){
                $q = "INSERT INTO materials(course_id,pasco) VALUES ($course_id,'$pasco_name')";
            }else{
                $q = "";
            }
            if ($q) {
                $r = $conn->query($q);

                if ($conn->affected_rows == 1) {
                    // move_uploaded_file($_FILES['book']['tmp_name'],$new_dir);
                    echo 'Successful';

                    $mat_id = $conn->insert_id;

                    $book_dir = "Public/Books/" . $mat_id;
                    $slide_dir = "Public/Slides/" . $mat_id;
                    $pasco_dir = "Public/Pasco/" . $mat_id;
                    if (is_dir($book_dir)) {

                        $book_dir = $book_dir . "/" . $_FILES['book']['name'];
                        move_uploaded_file($_FILES['book']['tmp_name'], $book_dir);
                    } else {
                        mkdir($book_dir);
                        $book_dir = "Public/Books/" . $mat_id . "/" . $_FILES['book']['name'];
                        move_uploaded_file($_FILES['book']['tmp_name'], $book_dir);
                    }

                    if (is_dir($slide_dir)) {
                        $slide_dir = $slide_dir . "/" . $_FILES['slide']['name'];
                        move_uploaded_file($_FILES['slide']['tmp_name'], $slide_dir);
                    } else {
                        mkdir($slide_dir);
                        $slide_dir = "Public/Slides/" . $mat_id . "/" . $_FILES['slide']['name'];
                        move_uploaded_file($_FILES['slide']['tmp_name'], $slide_dir);
                    }

                    if (is_dir($pasco_dir)) {
                        $pasco_dir = $pasco_dir . "/" . $_FILES['pasco']['name'];
                        move_uploaded_file($_FILES['pasco']['tmp_name'], $pasco_dir);
                    } else {
                        mkdir($pasco_dir);
                        $pasco_dir = "Public/Pasco/" . $mat_id . "/" . $_FILES['pasco']['name'];
                        move_uploaded_file($_FILES['pasco']['tmp_name'], $pasco_dir);
                    }
                } else {
                    echo 'Try again';
                }
            }


         //   if ($course_id &&  $book_name && $slide_name && $pasco_name){

          //  }
}
    ?>
</html>


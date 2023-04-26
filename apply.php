<?php
$page = 'apply';
include 'includes/header.php';
include_once 'includes/db.php';
?>

<div class="container-fluid">
    <h5 class="text-center text-primary p-lg-3">APPLY TO CORNERSTONE HIGH SCHOOL NANGABO
        &nbsp;&nbsp;<i class="bi bi-pen"></i>
    </h5>
    <h6 class="text-danger fst-italic">Fill in all your details here: USE CAPITAL LETTERS</h6>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <div class="form-floating col-sm-4 mt-2">
                <input type="text" class="form-control" name="fname" placeholder="Enter Firstname" required>
                <label for="" class="form-label">Enter First Name &nbsp;<b class="text-danger">*</b></label>
            </div><!-- First name here -->
            <div class="form-floating col-sm-4 mt-2">
                <input type="text" class="form-control" name="lname" placeholder="Enter Last" required>
                <label for="" class="form-label">Enter Last Name &nbsp;<b class="text-danger">*</b></label>
            </div><!-- Last name here -->
            <div class="form-floating col-sm-4 mt-2">
                <select type="text" class="form-control" name="class" placeholder="Enter Last" required>
                    <option value="Senior 1">Senior 1</option>
                    <option value="Senior 2">Senior 2</option>
                    <option value="Senior 3">Senior 3</option>
                    <option value="Senior 4">Senior 4</option>
                    <option value="Senior 5">Senior 5</option>
                    <option value="Senior 6">Senior 6</option>
                </select>
                <label for="" class="form-label">Select Class to apply for &nbsp;<b class="text-danger">*</b></label>
            </div><!-- Last name here -->
        </div>
        <div class="form-floating mt-2">
            <input type="text" class="form-control" name="contact" placeholder="Enter Last" required>
            <label for="" class="form-label">Email / Phone Contact &nbsp;<b class="text-danger">*</b></label>
        </div><!-- contact here -->
        <div class="mb-3">
            <label for="" class="form-label">Upload Document <i class="text-secondary">(Only .pdf)</i> &nbsp;<b class="text-danger">*</b></label>
            <input type="file" class="form-control" accept=".pdf" name="document" placeholder="Enter Last">
        </div><!-- Last name here -->
        <div class="d-flex justify-content-around">
            <?php
            for ($i = 0; $i < 3; $i++) {
            ?>

                <small class="text-muted fst-italic">Your details are very safe with us</small>
            <?php
            }

            ?>
        </div>

        <button class="btn btn-outline-dark" type="submit" name="upload-app">SUBMIT</button>
    </form>
</div>

<!-- Upload file details here -->
<?php

if (isset($_POST['upload-app'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $class = $_POST['class'];
    $contact = $_POST['contact'];

    /*------------------ File name stored in this variable ----------------------*/
    $document = $_FILES['document']['name'];
    $tempname = $_FILES['document']['tmp_name'];

    $folder = "applications/" . $document;

    $upload_sql = "INSERT INTO `applications`(firstname,lastname,document,class,contact,status,date_uploaded) VALUES 
     ('" . $fname . "','" . $lname . "','" . $document . "','" . $class . "','" . $contact . "','pending',NOW());";

    $upload_query = mysqli_query($conn, $upload_sql);

    //To move file from one point to another
    move_uploaded_file($tempname, $folder);

    echo '<script>window.alert("Details Uploaded Successfully");</script>';
}
?>

<?php include 'includes/footer.php'; ?>
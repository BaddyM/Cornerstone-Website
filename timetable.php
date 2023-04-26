<?php $page='timetable'; include 'includes/header.php';  
//include 'db.php';

?>

<div class="school_header_text">
    <h1 class="purples">Timetables</h1>
</div><!-- school title here  -->

<div style="font-family: 'calibri';" id="timetable" class="container d-flex flex-wrap">
    <?php
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'Cornerstone_1_2023';


        $conn = mysqli_connect($hostname, $username, $password, $database);

        $selectQuery = "SELECT * FROM class_timetable";
        $squery = mysqli_query($conn, $selectQuery);

        while (($result = mysqli_fetch_assoc($squery))) {
    ?>
    <div class="card m-3 border border-primary" style="max-width:18rem;">
        <div class="card-header text-center fw-bold">Class: <?php echo $result['class']?></div>
        <div class="card-body">
            <h5 class="card-title text-decoration-underline">Teaching T.T</h5>
            <p class="card-text">The following time table should be downloaded for <?php echo $result['class']?> </p>
            <a class="btn btn-outline-primary" href="system/downloads/<?php echo $result['timetable']; ?>" download>Download</a>
        </div>
    </div><!-- Card-one div ends-->
    <?php }?>
</div>


<?php include 'includes/footer.php';  ?>
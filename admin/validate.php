<?php
include 'config/db.php';

//update the elearning platform
if (isset($_POST['update'])) {
    $sql = "UPDATE elearning SET `class`= '" . $_POST['class'] . "',`time`= '" . $_POST['time'] . "',
    `link`= '" . $_POST['link'] . "',`date`= NOW() WHERE `id` = '" . $_POST['id'] . "' ;";
    $sql_query = mysqli_query($conn, $sql);

    header('Location:index? Update successful!');
}
//delete from elearning platform
elseif (isset($_POST['rem-elearn'])) {
    $sql = "DELETE FROM elearning WHERE `id` = '" . $_POST['id'] . "';";
    $sql_query = mysqli_query($conn, $sql);

    header('Location:index? Delete successful!');
}
//edit the elearning platform
elseif (isset($_POST['edit-elearn'])) {
    $edit = "SELECT * FROM elearning WHERE id = '" . $_POST['id'] . "';";
    $edit_sql = mysqli_query($conn, $edit);
    while ($row = mysqli_fetch_array($edit_sql)) {
        echo '
        <form action="validate.php" method="post">
            <tr>
                <input type="hidden" name="id" value=' . $row['id'] . '>
                <td><input type="text" name="class" class="form-control" value=' . $row['class'] . '></td>
                <td><input type="text" name="time" class="form-control" value=' . $row['time'] . '></td>
                <td><input type="text" name="link" class="form-control" value=' . $row['link'] . '></td>
                <td><button class="btn btn-sm fw-bold btn-outline-success text-uppercase" type="submit" name="update">update</button></td>
            </tr>
        </form>
        ';
    }
}

//add data to elearning
if (isset($_POST['add-elearn-2'])) {
    $sql = "INSERT INTO elearning(class,time,link,date) VALUES ('" . $_POST['class'] . "','" . $_POST['time'] . "','" . $_POST['link'] . "',NOW()) ;";
    $sql_query = mysqli_query($conn, $sql);

    header('Location:index? Added Successfully');
}

//student applications status here
if (isset($_POST['approve'])) {
    $sql = "UPDATE `applications` SET `status`='approved' WHERE `applicationid` = '" . $_POST['appid'] . "'; ";
    $sql_query = mysqli_query($conn, $sql);

    header('Location:index? Approved');
} elseif (isset($_POST['reject'])) {
    $sql = "UPDATE `applications` SET `status`='rejected' WHERE `applicationid` = '" . $_POST['appid'] . "'; ";
    $sql_query = mysqli_query($conn, $sql);

    header('Location:index? Rejected');
}

//website contacted approval
if (isset($_POST['contact'])) {
    $sql = "UPDATE `contact` SET `status`='contacted' WHERE `contactid` = '" . $_POST['id'] . "'; ";
    $sql_query = mysqli_query($conn, $sql);

    header('Location:index? Contacted');
}

//website about section
if (isset($_POST['update-about'])) {
    $sql = "UPDATE about SET `text` = '" . $_POST['text'] . "' WHERE `aboutid` = '" . $_POST['id'] . "' ; ";
    $sql_query = mysqli_query($conn, $sql);

    header('Location:index? Update Successful');
}

//Events section
if (isset($_POST['update-event'])) {
    $sql = "UPDATE events SET `eventdate` = '" . $_POST['date'] . "',`eventname` = '" . $_POST['eventname'] . "',`date_entered` = NOW() WHERE `eventid` = '" . $_POST['eventid'] . "' ; ";
    $sql_query = mysqli_query($conn, $sql);

    header('Location:index? Update Event Successful');
}
//delete the event here
elseif (isset($_POST['del-event'])) {
    $sql = "DELETE FROM `events` WHERE `eventid` = '" . $_POST['eventid'] . "' ; ";
    $sql_query = mysqli_query($conn, $sql);

    header('Location:index? Event Deleted Successfully');
}
//upload event here
elseif (isset($_POST['upload-event'])) {
    $sql = "INSERT INTO events(`eventdate`, `eventname`, `date_entered`) VALUES('" . $_POST['newdate'] . "','" . $_POST['newname'] . "', NOW()) ;";
    $sql_query = mysqli_query($conn, $sql);

    header('Location:index? Event Added Successfully');
}

//FEES SECTION HERE
//add fees
if (isset($_POST['upload-fees'])) {
    $sql = "INSERT INTO fees(`class`,`day`,`boarding`,`admission`,`date`) VALUES('" . $_POST['class'] . "','" . $_POST['day'] . "','" . $_POST['boarding'] . "','" . $_POST['admission'] . "',NOW()) ;";
    $sql_query = mysqli_query($conn, $sql);

    header('Location:index? Fees Added Successfully');
}
//delete from the fees
elseif (isset($_POST['del-fees'])) {
    $sql = "DELETE FROM `fees` WHERE `feesid` = '" . $_POST['feesid'] . "' ;";
    $sql_query = mysqli_query($conn, $sql);

    header('Location:index? Fees Removed Successfully');
}


//MATERIALS SECTION HERE
//add materials
if (isset($_POST['upload-mat'])) {
    $sql = "INSERT INTO materials(`class`,`subject`,`link`,`date`) VALUES('" . $_POST['class'] . "','" . $_POST['subject'] . "','" . $_POST['link'] . "',NOW()) ;";
    $sql_query = mysqli_query($conn, $sql);

    header('Location:index? Materials Added Successfully');
}
//delete from the fees
elseif (isset($_POST['del-mat'])) {
    $sql = "DELETE FROM `materials` WHERE `id` = '" . $_POST['materialid'] . "' ;";
    $sql_query = mysqli_query($conn, $sql);

    header('Location:index? Materials Removed Successfully');
}


//NEWS SECTION HERE
//add news
if (isset($_POST['upload-news'])) {
    //get file name
    $newsimg = $_FILES['news_img']['name'];
    $tempname = $_FILES['news_img']['tmp_name'];

    $folder = '../vendor/images/news/' . $newsimg;


    $sql = "INSERT INTO news(`newstitle`,`newsinfo`,`image`,`date_uploaded`) VALUES('" . $_POST['newstitle'] . "','" . $_POST['newsinfo'] . "','" . $newsimg . "',NOW()) ;";
    $sql_query = mysqli_query($conn, $sql);

    move_uploaded_file($tempname, $folder);

    header('Location:index? News Added Successfully');
}
//delete from the news
elseif (isset($_POST['del-news'])) {
    //delete from the image folder first
    $sql = "SELECT * FROM `news` WHERE `newsid` = '" . $_POST['newsid'] . "'";
    $sql_query = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($sql_query)) {
        unlink('../vendor/images/news/' . $row['image']);
    }

    //delete from the table second
    $sql = "DELETE FROM `news` WHERE `newsid` = '" . $_POST['newsid'] . "' ;";
    $sql_query = mysqli_query($conn, $sql);

    header('Location:index? News Removed Successfully');
}

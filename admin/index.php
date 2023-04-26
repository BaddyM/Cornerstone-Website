<?php
include 'includes/header.php';
include 'config/db.php';
?>

<a href="#top" class="nav-link">
    <div class="fixed-bottom text-end m-2">
        <button class="btn btn-dark p-0"><i class="fa fa-arrow-circle-up p-2 fs-5"></i></button>
    </div>
</a>

<h5 class="text-center fw-bold text-danger text-decoration-underline p-lg-2 text-uppercase">Cornerstone High School Website admin section</h5>

<div class="container">
    <div class="d-flex bg-light p-lg-2 text-uppercase flex-wrap">
        <li class="nav-link"><a href="#elearning" class="nav-link fw-bold text-primary p-2">e-learning</a></li>
        <li class="nav-link"><a href="#applications" class="nav-link fw-bold text-primary p-2">applications</a></li>
        <li class="nav-link"><a href="#contact" class="nav-link fw-bold text-primary p-2">contacts</a></li>
        <li class="nav-link"><a href="#about" class="nav-link fw-bold text-primary p-2">about</a></li>
        <li class="nav-link"><a href="#events" class="nav-link fw-bold text-primary p-2">events</a></li>
        <li class="nav-link"><a href="#fees" class="nav-link fw-bold text-primary p-2">fees</a></li>
        <li class="nav-link"><a href="#materials" class="nav-link fw-bold text-primary p-2">materials</a></li>
        <li class="nav-link"><a href="#news" class="nav-link fw-bold text-primary p-2">news</a></li>
        <li class="nav-link"><a href="#" class="nav-link fw-bold text-primary p-2">events</a></li>
        <li class="nav-link"><a href="#" class="nav-link fw-bold text-primary p-2">events</a></li>
    </div>
</div><!-- links container -->

<div class="container-fluid">
    <h5 id="elearning" class=""> <span class="d-inline-block bg-danger rounded-circle p-1"></span> e-learning section:</h5>
    <div class="card">
        <div class="card-header">
            <form action="" method="post">
                <button type="submit" name="add-elearn" class="btn fw-bold btn-warning rounded-pill text-uppercase">add</button>
            </form><!-- add elearning platform -->
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="text-uppercase text-center table-light">
                    <tr>
                        <th scope="col">class</th>
                        <th scope="col">time</th>
                        <th scope="col">link</th>
                        <th scope="col">action</th>
                        <th scope="col">last update</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM elearning";
                    $sql_query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($sql_query)) {
                    ?>
                        <tr>
                            <td><?php echo $row['class']; ?></td>
                            <td><?php echo $row['time']; ?></td>
                            <td><?php echo $row['link']; ?></td>
                            <td class="text-center">
                                <form action="validate.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <div class="btn-group">
                                        <button type="submit" name="edit-elearn" class="btn btn-sm fw-bold btn-primary text-uppercase">edit</button>
                                        <button type="submit" name="rem-elearn" class="btn btn-sm fw-bold btn-danger text-uppercase">delete</button>
                                    </div>
                                </form>
                            </td>
                            <td class="text-center"><?php echo $row['date']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php
    if (isset($_POST['add-elearn'])) {
    ?>
        <form action="validate.php" method="post">
            <h5 class="text-primary fw-bold text-uppercase mt-lg-3 text-center">add data to elearning</h5>
            <div class="card mt-3">
                <div class="card-header">
                    <button type="submit" name="add-elearn-2" class="btn fw-bold btn-warning border border-dark text-uppercase">add</button>
                </div>
                <div class="card-body">
                    <table class="table ">
                        <thead class="text-uppercase text-center table-light">
                            <tr>
                                <th scope="col">class</th>
                                <th scope="col">time</th>
                                <th scope="col">link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" name="class" class="form-control"></td>
                                <td><input type="text" name="time" class="form-control"></td>
                                <td><input type="text" name="link" class="form-control"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    <?php
    } //E-learning platform here
    ?>

    <hr>

    <!-- Student Applications here -->
    <h5 id="applications"><span class="d-inline-block bg-primary rounded-circle p-1"></span> student Applications section:</h5>
    <div class="card-body">
        <table class="table ">
            <thead class="text-uppercase text-center table-light">
                <tr>
                    <th scope="col">firstname</th>
                    <th scope="col">lastname</th>
                    <th scope="col">document</th>
                    <th scope="col">class</th>
                    <th scope="col">contact</th>
                    <th scope="col">date applied</th>
                    <th scope="col">status</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM applications";
                $sql_query = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($sql_query)) {
                ?>
                    <tr>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td class="text-center"><a class="btn btn-warning btn-sm rounded-pill fw-bold" href="../applications/<?php echo $row['document']; ?>" download="">DOWNLOAD</a></td>
                        <td><?php echo $row['class']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><?php echo $row['date_uploaded']; ?></td>
                        <td class="badge rounded-pill text-center m-2
                            <?php if ($row['status'] == 'pending') {
                                echo 'bg-secondary';
                            } elseif ($row['status'] == 'approved') {
                                echo 'bg-success';
                            } elseif ($row['status'] == 'rejected') {
                                echo 'bg-danger';
                            }
                            ?>"><?php echo $row['status']; ?></td>
                        <td class="text-center">
                            <form action="validate.php" method="post">
                                <input type="hidden" name="appid" value="<?php echo $row['applicationid']; ?>">
                                <div class="btn-group">
                                    <button type="submit" name="approve" class="btn btn-sm fw-bold btn-success text-uppercase">approve</button>
                                    <button type="submit" name="reject" class="btn btn-sm fw-bold btn-danger text-uppercase">reject</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <hr>

    <!-- Contacts here -->
    <h5 id="contact"><span class="d-inline-block bg-dark rounded-circle p-1"></span> Website Contacts section:</h5>

    <div class="card-body">
        <table class="table ">
            <thead class="text-uppercase text-center table-light">
                <tr>
                    <th scope="col">names</th>
                    <th scope="col">phone</th>
                    <th scope="col">email</th>
                    <th scope="col">message</th>
                    <th scope="col">status</th>
                    <th scope="col">date contacted</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM contact";
                $sql_query = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($sql_query)) {
                ?>
                    <tr>
                        <td><?php echo $row['names']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        <td class="badge rounded-pill text-center m-2
                            <?php if ($row['status'] == 'not contacted') {
                                echo 'bg-secondary';
                            } elseif ($row['status'] == 'contacted') {
                                echo 'bg-success';
                            }
                            ?>"><?php echo $row['status']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td class="text-center">
                            <form action="validate.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['contactid']; ?>">
                                <div class="btn-group">
                                    <button type="submit" name="contact" class="btn btn-sm fw-bold btn-primary text-uppercase">contacted</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <hr>
    <!-- About section here -->
    <h5 id="about"><span class="d-inline-block bg-info rounded-circle p-1"></span> Website About section:</h5>

    <div class="card">
        <form action="validate.php" method="post">
            <?php
            $sql = "SELECT * FROM about";
            $sql_query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($sql_query)) {
            ?>
                <div class="card-header">
                    <input type="hidden" name="id" value="<?php echo $row['aboutid']; ?>">
                    <button type="submit" name="update-about" class="btn fw-bold btn-outline-dark btn-sm rounded-pill">UPDATE</button>
                </div>
                <div class="card-body">
                    <input type="text" name="text" class="form-control" value="<?php echo $row['text']; ?>">
                </div>
            <?php
            }
            ?>
        </form>
    </div>

    <hr>
    <!-- Events section here -->
    <h5 id="events"><span class="d-inline-block bg-success rounded-circle p-1"></span> Events section:</h5>

    <div class="card">
        <div class="card-header">
            <form action="" method="post">
                <button type="submit" name="add-event" class="btn btn-outline-warning fw-bold rounded-pill btn-sm">ADD EVENT</button>
            </form>
        </div>
        <table class="table">
            <thead class="text-uppercase text-center table-secondary">
                <tr>
                    <th scope="col">event date</th>
                    <th scope="col">event name</th>
                    <th scope="col"> date uploaded</th>
                    <th scope="col"> action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `events`";
                $sql_query = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($sql_query)) {
                ?>
                    <form action="validate.php" method="post">
                        <tr>
                            <td><input type="text" name="date" class="form-control" value="<?php echo $row['eventdate']; ?>"></td>
                            <td><input type="text" name="eventname" class="form-control" value="<?php echo $row['eventname']; ?>"></td>
                            <td><input type="text" class="form-control" value="<?php echo $row['date_entered']; ?>"></td>
                            <td>
                                <div class="btn-group">
                                    <input type="hidden" name="eventid" value="<?php echo $row['eventid']; ?>">
                                    <button type="submit" name="update-event" class="btn rounded-start fw-bold btn-sm btn-outline-success">UPDATE</button>
                                    <button type="submit" name="del-event" class="btn rounded-end btn-sm btn-danger">REMOVE</button>
                                </div>
                            </td>
                        </tr>
                    </form>
                <?php
                }

                if (isset($_POST['add-event'])) {
                ?>
                    <form action="validate.php" method="post">
                        <tr>
                            <td><input type="text" name="newdate" class="form-control" placeholder="Enter Date"></td>
                            <td><input type="text" name="newname" class="form-control" placeholder="Enter Event Name"></td>
                            <td><input type="text" class="form-control text-center fw-bold" value="AUTO" disabled></td>
                            <td><button type="submit" name="upload-event" class="btn rounded-start fw-bold btn-sm btn-outline-success">UPLOAD</button></td>
                        </tr>
                    </form>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <hr>

    <!-- School fees section here -->
    <h5 id="fees"><span class="d-inline-block bg-secondary rounded-circle p-1"></span> Fees section:</h5>

    <div class="card">
        <div class="card-header">
            <form action="" method="post">
                <button type="submit" name="add-fees" class="btn btn-outline-primary fw-bold rounded-pill btn-sm">ADD FEES</button>
            </form>
        </div>
        <table class="table">
            <thead class="text-uppercase text-center table-secondary">
                <tr>
                    <th scope="col">class</th>
                    <th scope="col">day</th>
                    <th scope="col">boarding</th>
                    <th scope="col">admission</th>
                    <th scope="col">date uploaded</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `fees`";
                $sql_query = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($sql_query)) {
                ?>
                    <form action="validate.php" method="post">
                        <tr>
                            <input type="hidden" name="feesid" value="<?php echo $row['feesid']; ?>">
                            <td><input type="text" name="class" class="form-control" value="<?php echo $row['class']; ?>"></td>
                            <td><input type="text" name="day" class="form-control" value="<?php echo $row['day']; ?>"></td>
                            <td><input type="text" class="form-control" value="<?php echo $row['boarding']; ?>"></td>
                            <td><input type="text" class="form-control" value="<?php echo $row['admission']; ?>"></td>
                            <td><input type="text" class="form-control" value="<?php echo $row['date']; ?>"></td>
                            <td class="text-center">
                                <button type="submit" name="del-fees" class="btn btn-danger rounded-pill p-0"><i class="bi bi-x fs-4 p-1"></i></button>
                            </td>
                        </tr>
                    </form>
                <?php
                }

                if (isset($_POST['add-fees'])) {
                ?>
                    <form action="validate.php" method="post">
                        <tr>
                            <td><input type="text" name="class" class="form-control" placeholder="Enter Class"></td>
                            <td><input type="text" name="day" class="form-control" placeholder="Day Fees"></td>
                            <td><input type="text" name="boarding" class="form-control" placeholder="Boarding Fees"></td>
                            <td><input type="text" name="admission" class="form-control" placeholder="Admission Fees"></td>
                            <td><input type="text" class="form-control text-center text-dark fw-bold" value="AUTO" disabled></td>
                            <td><button type="submit" name="upload-fees" class="btn fw-bold btn-sm btn-outline-success">UPLOAD</button></td>
                        </tr>
                    </form>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <hr>

    <!-- Materials section here -->
    <h5 id="materials"><span class="d-inline-block bg-warning rounded-circle p-1"></span> Materials section:</h5>

    <div class="card">
        <div class="card-header">
            <form action="" method="post">
                <button type="submit" name="add-mat" class="btn btn-secondary fw-bold rounded-pill btn-sm">ADD MATERIALS</button>
            </form>
        </div>
        <table class="table">
            <thead class="text-uppercase text-center table-secondary">
                <tr>
                    <th scope="col">class</th>
                    <th scope="col">subject</th>
                    <th scope="col">link</th>
                    <th scope="col">date uploaded</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `materials`";
                $sql_query = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($sql_query)) {
                ?>
                    <form action="validate.php" method="post">
                        <tr>
                            <input type="hidden" name="materialid" value="<?php echo $row['id']; ?>">
                            <td><input type="text" name="class" class="form-control" value="<?php echo $row['class']; ?>"></td>
                            <td><input type="text" name="subject" class="form-control" value="<?php echo $row['subject']; ?>"></td>
                            <td><input type="text" name="link" class="form-control" value="<?php echo $row['link']; ?>"></td>
                            <td><input type="text" name="date" class="form-control" value="<?php echo $row['date']; ?>"></td>
                            <td class="text-center">
                                <button type="submit" name="del-mat" class="btn btn-danger rounded-pill p-0"><i class="bi bi-x fs-4 p-1"></i></button>
                            </td>
                        </tr>
                    </form>
                <?php
                }

                if (isset($_POST['add-mat'])) {
                ?>
                    <form action="validate.php" method="post">
                        <tr>
                            <input type="hidden" name="materialid" value="<?php echo $row['id']; ?>">
                            <td><input type="text" name="class" class="form-control" placeholder="Enter Class"></td>
                            <td><input type="text" name="subject" class="form-control" placeholder="Enter Subject"></td>
                            <td><input type="text" name="link" class="form-control" placeholder="Paste Link here"></td>
                            <td><input type="text" class="form-control fw-bold text-center" placeholder="AUTO" disabled></td>
                            <td><button type="submit" name="upload-mat" class="btn fw-bold btn-sm btn-outline-success">UPLOAD</button></td>
                        </tr>
                    </form>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <hr>
    <!-- News section here -->
    <h5 id="news"><span class="d-inline-block bg-purple rounded-circle p-1"></span> News section:</h5>

    <div class="card">
        <div class="card-header">
            <form action="" method="post">
                <button type="submit" name="add-news" class="btn btn-secondary fw-bold rounded-pill btn-sm">ADD NEWS</button>
            </form>
        </div>
        <table class="table table-responsive">
            <thead class="text-uppercase text-center table-secondary">
                <tr>
                    <th scope="col">news title</th>
                    <th scope="col">news info</th>
                    <th scope="col" class="col-sm-4">image</th>
                    <th scope="col">date uploaded</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `news`";
                $sql_query = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($sql_query)) {
                ?>
                    <form action="validate.php" method="post">
                        <tr>
                            <input type="hidden" name="newsid" value="<?php echo $row['newsid']; ?>">
                            <td><input type="text" name="newstitle" class="form-control" value="<?php echo $row['newstitle']; ?>"></td>
                            <td><textarea type="text" name="newsinfo" class="form-control" ><?php echo $row['newsinfo']; ?></textarea></td>
                            <td class="text-center"><img class="img-fluid img-thumbnail border border-dark w-25" src="../vendor/images/news/<?php echo $row['image']; ?>"></td>
                            <td><input type="text" class="form-control" value="<?php echo $row['date_uploaded']; ?>"></td>
                            <td class="text-center">
                                <button type="submit" name="del-news" class="btn btn-danger rounded-pill p-0"><i class="bi bi-x fs-4 p-1"></i></button>
                            </td>
                        </tr>
                    </form>
                <?php
                }

                if (isset($_POST['add-news'])) {
                ?>
                    <form action="validate.php" method="post" enctype="multipart/form-data">
                        <tr>
                            <td><input type="text" name="newstitle" class="form-control" placeholder="Enter news title"></td>
                            <td><input type="text" name="newsinfo" class="form-control" placeholder="Enter news info"></td>
                            <td><input type="file" class="form-control" accept=".jpg" name="news_img" required></td>
                            <td><input type="text" class="form-control fw-bold text-center" placeholder="AUTO" disabled></td>
                            <td><button type="submit" name="upload-news" class="btn fw-bold btn-sm btn-outline-success">UPLOAD</button></td>
                        </tr>
                    </form>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</div>

<?php include 'includes/footer.php'; ?>
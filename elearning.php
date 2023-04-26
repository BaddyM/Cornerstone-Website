<?php $page = 'elearning';
include 'includes/header.php';
include 'includes/db.php';
?>

<h5 class="fw-bold text-center text-uppercase p-lg-2">e-learning</h5>

<h6 class="text-danger fst-italic p-lg-1">Note: All the class zoom links, materials and other resources for online classes will be posted here.</h6>

<div class="container-fluid">
    <table class="table table-striped-columns">
        <thead class="table-secondary text-uppercase text-center">
            <tr>
                <th scope="col">class</th>
                <th scope="col">time</th>
                <th scope="col">link / resource</th>
                <th scope="col">date posted</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM elearning";
            $sql_query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($sql_query)) {
            ?>
                <tr>
                    <td class="text-uppercase"><?php echo $row['class']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                    <td class="text-center"><a target="_blank" class="nav-link badge bg-primary fs-6 text-dark" href="<?php echo $row['link']; ?>">LINK</a></td>
                    <td><?php echo $row['date']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php include 'includes/footer.php';?>
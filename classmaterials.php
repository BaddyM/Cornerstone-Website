<?php $page = 'classmaterials';
include 'includes/header.php';
include 'includes/db.php';
?>

<h5 class="text-center text-uppercase fw-bold p-lg-2"> <i class="fa fa-book-open"></i> &nbsp; useful class materials/resources &nbsp; <i class="fa fa-user-graduate"></i> </h5>

<table class="table table-striped-columns">
    <thead class="text-center table-secondary">
        <tr>
            <th scope="col">CLASS</th>
            <th scope="col">SUBJECT</th>
            <th scope="col">RESOURCE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM materials";
        $sql_query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($sql_query)) {
        ?>
            <tr>
                <td><?php echo $row['class'] ?></td>
                <td><?php echo $row['subject'] ?></td>
                <td class="text-center"><a target="_blank" class="nav-link text-warning fs-6 badge bg-success rounded-pill" href="<?php echo $row['link'] ?>">LINK</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php include 'includes/footer.php';  ?>
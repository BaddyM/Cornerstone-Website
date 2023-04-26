<?php $page='uneb'; 
include 'includes/header.php';  
include 'includes/db.php';  
?>
 
<h5 class="text-center text-dark fw-bold p-lg-2"> <i class="bi bi-journal"></i> OUR UNEB LINKS TO RESULTS <i class="bi bi-book-half"></i></h5>

<div class="container-fluid">
    <table class="table">
        <thead class="text-center table-secondary">
            <tr>
                <th scope="col">YEAR</th>
                <th scope="col">SENIOR 4</th>
                <th scope="col">SENIOR 6</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM uneb";
            $sql_query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($sql_query)) {
            ?>
                <tr>
                    <td><?php echo $row['year'] ?></td>
                    <td><a target="_blank" class="nav-link text-dark fs-6 badge bg-warning rounded-pill" href="<?php echo $row['senior4'] ?>">LINK</a></td>
                    <td><a target="_blank" class="nav-link text-white fs-6 badge bg-primary rounded-pill" href="<?php echo $row['senior6'] ?>">LINK</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php include 'includes/footer.php';  ?>
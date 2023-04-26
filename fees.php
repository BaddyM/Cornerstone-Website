<?php $page = 'fees';
include 'includes/header.php';
include 'includes/db.php';

?>

<h4 style="font-family: sans-serif;" class="text-dark text-center p-1 mt-3 fw-bold text-uppercase text-decoration-underline">
 <i class="bi bi-cash-coin"></i> Our Fees Structure <i class="fa fa-money-bill-1"></i> </h4>

<div class="container-fluid overflow-scroll">

    <table style="font-family: 'calibri';" class="table table-striped table-body table-hover table-responsive">
        <thead>
            <tr class="text-dark table-primary">
                <th scope="col">Class</th>
                <th scope="col">Day Fees</th>
                <th scope="col">Boarding Fees</th>
                <th scope="col">Admission Fees</th>
                <th scope="col">Requirements Fees</th>
                <th scope="col">Medical Fees</th>
                <th scope="col">Skilling Fees</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $display_fees = "SELECT * FROM fees";
            $display_query = mysqli_query($conn, $display_fees);
            while (($result = mysqli_fetch_assoc($display_query))) {
            ?>
                <tr>
                    <td><?php echo $result['class']; ?></td>
                    <td><?php echo $result['day']; ?></td>
                    <td><?php echo $result['boarding']; ?></td>
                    <td><?php echo $result['admission']; ?></td>
                    <td><?php echo $result['requirements']; ?></td>
                    <td><?php echo $result['medical']; ?></td>
                    <td><?php echo $result['skilling']; ?></td>
                </tr>
            <?php

            }
            ?>
        </tbody>
    </table>
</div>
<?php include 'includes/footer.php';  ?>
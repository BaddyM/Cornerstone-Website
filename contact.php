<?php 
$page='contact'; 
include 'includes/header.php';  
include 'includes/db.php';  

//include 'includes/db.php';

if(isset($_POST['contact'])){
    $contactname = $_POST['cname'];
    $contactphone = $_POST['cphone'];
    $contactemail = $_POST['cemail'];
    $contactmessage = $_POST['cmessage'];

    $contact_sql = "INSERT INTO `contact`(`names`, `phone`, `email`, `message`,`status`, `date`) 
    VALUES ('$contactname','$contactphone','$contactemail','$contactmessage','not contacted',NOW());";

    $contact_query = mysqli_query($conn,$contact_sql);

    echo '<script>window.alert("Message sent Successfully")</script>';

}
?>

<h4 style="font-family:calibri;" class="text-center my-3 text-primary fw-bold">We would love to hear from you, Please fill in these details</h4>


<div class="container bg-light">
    <form class="pt-2 mb-2" style="font-family:Arial;" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div class="form-floating mb-2">
            <input type="text" name="cname" id="cname" placeholder="enter your name" class="form-control" required>
            <label class="form-label" for="cname">Full Names</label>
        </div><!-- Enter the names here -->
        <div class="row">
            <div class="form-floating mb-2 col">
                <input class="form-control" type="text" placeholder="enter your phone number" name="cphone" id="cphone" required>
                <label class="form-label" for="cphone">Phone Number</label>
            </div>
            <div class="form-floating mb-2 col">
                <input type="text" name="cemail" placeholder="enter your email" class="form-control">
                <label for="cemail" class="form-label">Email</label>
            </div>
        </div>
        
        <div class="form-floating">
            <textarea class="form-control" placeholder="enter your message" name="cmessage" id="cmeassage" cols="30" rows="30" required></textarea>
            <label class="form-label" for="cmessage">Message</label>
        </div>
        <div class="form-text">Your details remain private with us</div>

        <button class=" mt-2 btn btn-secondary" type="submit" name="contact">Send</button>
    </form>
</div>

<?php include 'includes/footer.php';  ?>
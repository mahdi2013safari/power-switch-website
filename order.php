<?php include('partial/header.php') ?>

<body class="about-us sidebar-collapse">
<?php include('partial/menu.php') ?>
<?php 
if(isset($_POST['submit'])){
    $to = "power.switch.co@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject']; // this is the sender's Email address
    $product = $_POST['product'];
    $width = $_POST['width'];
    $height = $_POST['height'];
    $depth = $_POST['depth'];
    $description = $_POST['panel-description'];
    $wiring = $_POST['wiring-description'];
    $note = $_POST['note'];
    $subject = "Order panel board";
    $subject2 = "from website";
    $message = "Contact info:" . "\n\n" . "Full name: " . $first_name . "\n\n" . "Email: " . $from . "\n\n" . "Phone: " . $phone .
     "Order infomation: " . "\n\n" . "subject: " . $subject . "\n" . "product name: " . $product . "\n" . 
     "Size panel board: " . $width . "(W)," . $height . "(H)," . $depth . "(Depth)" . "\n\n" .
     "Panel Description: " . $description . "\n\n".  
     "Wiring Description: " . $wiring . "\n\n" . 
     "Additional Note: " . $note;
    $message2 = $message;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<div class="page-header header-filter header-small" data-parallax="true"
     style="background-image: url('assets/img/order-form.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h1 class="title">ORDER NOW</h1>
                <h4>ORDER NOW AND WE WILL REPLAY AFTER 6 HOURS!</h4>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="container">
        <div class="about-team team-1">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="title">Order now</h2>
                    <h5 class="description">
                        You can order online and our team will review your order and response as soon as possible 
                        we can in 6 hour or 24 hour.<br/><b> This form send via your email address.</b><br/>
                        <b>After submiting form your email will be open.</b>
                    </h5>
                    <b>Your contact info</b>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" required class="form-control" name="name" placeholder="Your full name">
                        </div>
                        <div class="form-group">
                            <input type="email" required class="form-control" name="email" placeholder="Your email address">
                        </div>
                        <div class="form-group">
                            <input type="phone" class="form-control" name="phone" placeholder="Your Phone">
                        </div>
                        <div class="separator-line mt-5"></div><br/>
                        <b class="mt-5">Order info</b>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="product" placeholder="Product name">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="width" placeholder="width (cm)">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="height" placeholder="height (cm)">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="depth" placeholder="depth (cm)">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="panel-description" class="form-control" placeholder="Panel board description..." id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="wiring-description" class="form-control" placeholder="Wiring description..." id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="note" class="form-control" placeholder="Any additional information..." id="" cols="30" rows="10"></textarea>
                        </div>
                        <button class="btn btn-danger" value="submit"  name="submit" type="submit">Send order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('./partial/footer.php')?>

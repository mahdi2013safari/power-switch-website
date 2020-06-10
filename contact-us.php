
<?php include('partial/header.php')?>

<body class="contact-page sidebar-collapse">
<?php include('partial/menu.php') ?>
<div class="page-header header-filter header-small" data-parallax="true"
     style="background-image: url('assets/img/contact-us.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h1 class="title">Compact sub-station</h1>
                <h4>NOW! You can order  a best quality of sub-station electrical industry in Kabul, Afghanistan.</h4>
                <a href="order.php" class="btn btn-danger">Order now</a>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="contact-content">
        <div class="container">
            <h2 class="title">Send us a message</h2>
            <div class="row">
                <div class="col-md-6">
                    <p class="description">You can contact us with anything related to our Products. We&apos;ll get in touch with you as soon as possible.<br><br>
                    </p>
                    <form role="form" id="contact-form" method="post" action="admin/server.php">
                        <div class="form-group">
                            <label for="name" class="bmd-label-floating">Your name</label>
                            <input type="text" name="name" class="form-control" id="name" require>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmails" class="bmd-label-floating">Email address</label>
                            <input type="email" class="form-control" name="email" require id="exampleInputEmails">
                            <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="bmd-label-floating">Phone</label>
                            <input type="text" class="form-control" name="phone" require id="phone">
                        </div>
                        <div class="form-group label-floating">
                            <label class="form-control-label bmd-label-floating" for="message"> Your message</label>
                            <textarea class="form-control" name="message" rows="6" require id="message"></textarea>
                        </div>
                        <div class="submit text-center">
                            <input type="submit" name="submit" class="btn btn-primary btn-raised btn-round" value="Contact Us">
                        </div>
                    </form>
                </div>
                <div class="col-md-4 ml-auto">
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">pin_drop</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Find us</h4>
                            <p>
                                <b>Office:</b> Logar market #17, Pole Mahmood Khan, Kabul, Afghanistan.
                                <b>Company</b> In front of antenna Etisalat, Phase Leala, Shahrak-e omid sabze, Darul aman, Kabul, Afghanistan.
                            </p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">phone</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Give us a ring</h4>
                            <p> Customer Support<br>
                                (+93) 799030033<br/>
                                (+93) 780352800 &nbsp;<i class="fa fa-whatsapp" style="color:green"></i>&nbsp;&nbsp;<i class="fa fa-telegram" style="color:deepskyblue"></i>
                            </p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-primary">
                            <i class="material-icons">business_center</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Social Media</h4>
                            <p>
                                <a href="https://twitter.com/PowerSwitchEle1" target="_blank" class="btn btn-just-icon btn-round btn-twitter">
                                    <i class="fa fa-twitter" style="color:white"></i>
                                </a>
                                <a href="https://www.facebook.com/PowerSwitchElectricalCompany" target="_blank" class="btn btn-just-icon btn-round btn-facebook">
                                    <i class="fa fa-facebook" style="color:white"> </i>
                                </a>
                                <a href="https://www.pinterest.com/powerswitchco" class="btn btn-just-icon btn-round btn-pinterest">
                                    <i class="fa fa-pinterest" style="color:white"></i>
                                </a>
                                <a href="https://www.linkedin.com/company/power-switch-electrical-company" target="_blank" class="btn btn-just-icon btn-round btn-linkedin">
                                    <i class="fa fa-linkedin" style="color:white"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('./partial/footer.php'); ?>
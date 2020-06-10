<?php include('server.php') ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Power Switch</title>
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../assets/css/material-kit.css?v=2.2.0" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet"/>
    <link href="../assets/demo/vertical-nav.css" rel="stylesheet"/>
</head>

<body>

<div class="container">
    <div class="row mt-5">
        <a href="http://www.powerswitch.af" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back to website</a>
        <div class="col-md-12">

            <h2 class="title">Table of Order</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>subject</th>
                        <th>product</th>
                        <th>width</th>
                        <th>height</th>
                        <th>depth</th>
                        <th>Panel Board Description</th>
                        <th>Wiring Description</th>
                        <th>Note</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($result_order)){ ?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['phone'];?></td>
                            <td><?php echo $row['subject'];?></td>
                            <td><?php echo $row['product'];?></td>
                            <td><?php echo $row['width'];?></td>
                            <td><?php echo $row['height'];?></td>
                            <td><?php echo $row['depth'];?></td>
                            <td><?php echo $row['panel_description'];?></td>
                            <td><?php echo $row['wiring_description']?></td>
                            <td><?php echo $row['note']?></td>
                            <td><?php echo $row['date']?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>




<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Google Maps Plugin    -->


<!-- Plugins for presentation and navigation  -->
<script src="../assets/demo/modernizr.js" type="text/javascript"></script>
<script src="../assets/demo/vertical-nav.js" type="text/javascript"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
<script src="../assets/demo/demo.js" type="text/javascript"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/material-kit.js?v=2.2.0" type="text/javascript"></script>
</body>

</html>
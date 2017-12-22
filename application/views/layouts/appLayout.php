<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Peoplang</title>

        <link rel="stylesheet" href="<?php echo base_url("public/css/bootstrap.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("public/css/app.css"); ?>">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your invoices">
        <meta name="author" content="Phalcon Team">
    </head>
    <body>
        <?php $this->load->view($content); ?>

        <script type="text/javascript" src="<?php echo base_url("public/js/jquery.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("public/js/popper.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("public/js/app.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("public/js/bootstrap.min.js"); ?>"></script>

    </body>
</html>
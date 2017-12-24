<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Peoplang | Welcome!</title>
        <link rel="stylesheet" href="<?php echo base_url("public/css/font-awesome.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("public/css/mdbootstrap.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("public/css/style.css"); ?>">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your invoices">
        <meta name="author" content="Phalcon Team">
    </head>
    <body>
        <?php $this->load->view($content); ?>

        <script type="text/javascript" src="<?php echo base_url("public/js/main.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("public/js/Landing.js"); ?>"></script>

    </body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="shortcut icon" href="<?=base_url('assets/img/favicon.ico'); ?>" type="image/x-icon">
    <link rel="icon" href="<?=base_url('assets/img/favicon.ico'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap-theme.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css'); ?>">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php $this->template->getCSS(); ?>
</head>
<body>
<?php $this->load->view('_shared/navbar'); ?>
<div class="container" id="content">
    <div class="row" style="max-height: 138px;">
        <div id="messages-container" class="col-sm-12">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9">
            <?php $this->load->view($template_view, $params); ?>
        </div>
        <div class="col-sm-3">
            <?php $this->load->view('_shared/sidebar'); ?>
        </div>
    </div>
</div>
<?php $this->load->view('_shared/footer'); ?>
<script src="<?=base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?=base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript"> var base_url = '<?=base_url(); ?>'; </script>
<script src="<?=base_url('assets/js/_shared.js'); ?>"></script>
<?php $this->template->getJS(); ?>

</body>
</html>
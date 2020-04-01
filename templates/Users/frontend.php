<?php

use Cake\Core\Configure;
use Cake\Routing\Router;

?>
<!DOCTYPE html>
<html lang="<?php echo Configure::read('App.defaultLocale'); ?>">

<head>
    <meta charset="utf-8">
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo Configure::read('app_name'); ?></title>

    <link rel="icon" type="image/png" href="/favicon.png"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="<?php echo Router::url('/fonts/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo Router::url('/vuedev/tailwind-style.css'); ?>" rel="stylesheet">

</head>

<body>
<div id="app" class="darkLight h-screen flex overflow-hidden">
    <?php
    echo $this->element('sidebar');
    echo $this->element('main');
    ?>
</div>
<script src="<?php echo Router::url('/vuedev/dist/js/app.js') ?>"></script>
<script src="<?php echo Router::url('/vuedev/dist/js/chunk-vendors.js') ?>"></script>
</body>

</html>

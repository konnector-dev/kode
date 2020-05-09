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
<div class="bg-gray-600 h-screen">
    <div id="app" class="darkLight flex flex-col overflow-hidden">

    </div>
    <footer class="flex-col text-center text-gray-600 bg-gray-700 -mt-8">
        &copy; <?=date('Y')?>
    </footer>
</div>
<script src="<?php echo Router::url('/vuedev/dist/js/app.js') ?>"></script>
<script src="<?php echo Router::url('/vuedev/dist/js/chunk-vendors.js') ?>"></script>
</body>

</html>

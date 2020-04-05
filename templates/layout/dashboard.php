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
    <link href="<?php echo Router::url('/css/style.css'); ?>" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router@3.1.6/dist/vue-router.js"></script>
    <script defer src="<?php echo Router::url('/js/kode.js'); ?>"></script>
    <script defer src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js"></script>

</head>

<body>

<div
    class="darkLight h-screen flex overflow-hidden"
    x-data="{ sidebarOpen: false }"
    @keydown.window.escape="sidebarOpen = false">

    <?php
    echo $this->element('sidebar');
    echo $this->element('main');
    ?>
</div>
</body>

</html>

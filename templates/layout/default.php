<?php
use Cake\Core\Configure;
use Cake\Routing\Router;

?>
<!DOCTYPE html>
<html lang="<?php echo Configure::read('App.defaultLocale');?>">

<head>
    <meta charset="utf-8">
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo env('APP_NAME', 'Kode'); ?></title>

    <link rel="icon" type="image/png" href="/favicon.png" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="<?php echo Router::url('/css/tw.css'); ?>" rel="stylesheet">
    <link href="<?php echo Router::url('/fonts/font-awesome.min.css'); ?>" rel="stylesheet">

</head>

<body>
<div class="min-h-screen bg-white flex justify-center py-10 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <img class="mx-auto h-24 w-auto" src="<?php echo Router::url('/img/koreview.png') ; ?>" alt="<?php echo env('APP_NAME'); ?>" />
        <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-600">
            <?php echo env('APP_NAME'); ?>
        </h2>
        <div class="py-10 mx-auto flex justify-center align-content-center">
                <span class="inline-flex shadow-sm">
                    <?= $this->fetch('content') ?>
                </span>
        </div>
        <div class="text-gray-600 flex justify-center">
            <div class="flex-1 text-center">&copy; <?php echo date('Y'); ?> <?=env('APP_NAME')?></div>
            <div class="flex-1 text-center"><a href="<?php echo Router::url('/') ; ?>">Home</a></div>
            <div class="flex-1 text-center"><a href="<?php echo Router::url('/login') ; ?>">Login</a></div>
        </div>
    </div>
</div>
</body>

</html>

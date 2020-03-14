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
                  <a
                      href="<?php echo Router::url('/oauth-github/auth-request'); ?>"
                      type="button"
                      class="
                          inline-flex items-center px-6 py-3 border border-kored text-base leading-6 font-medium
                          text-gray-300 bg-red-600 bg-kored
                          hover:border-gray-300"
                  >
                      <i class="fa fa-github"></i>
                     &nbsp; &nbsp; Sign in with GitHub
                  </a>
                </span>
        </div>
    </div>
</div>
</body>

</html>

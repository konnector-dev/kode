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
    <link href="<?php echo Router::url('/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo Router::url('/fonts/font-awesome.min.css'); ?>" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script defer src="<?php echo Router::url('/js/kode.js'); ?>"></script>

</head>

<body>
<div
    id="themer"
    class="min-h-screen bg-black flex justify-center py-10 sm:px-6 lg:px-8"
    v-bind:class="{'bg-white': isLight}">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="<?php echo Router::url('/'); ?>"><img class="mx-auto h-24 w-auto"
                                                       src="<?php echo Router::url('/img/kode.png'); ?>"
                                                       alt="<?php echo Configure::read('app_name'); ?>"ss/></a>
        <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-600">
            <?php echo Configure::read('app_name'); ?>
        </h2>
        <div class="py-10 mx-auto flex justify-center align-content-center text-gray-600">
                <span class="inline-flex shadow-sm">
                    <?= $this->fetch('content') ?>
                </span>
        </div>
        <div class="text-gray-600 flex justify-center">
            <div class="flex-1 text-center text-xl">
                <a href="https://twitter.com/jdecode" alt="jdecode at Twitter" target="_blank">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="https://github.com/jdecode" alt="jdecode at GitHub"
                                                          target="_blank">
                    <i class="fa fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/jdecode" alt="jdecode at LinkedIn"
                                                          target="_blank">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a href="https://jdecode.dev" alt="jdecode at LinkedIn"
                                                          target="_blank">
                    <i class="fa fa-wordpress"></i>
                </a>
            </div>
            <div class="flex-1 text-center"><a
                    href="<?php echo Router::url('/login'); ?>">Sign in</a></div>
            <div class="flex-1 text-center">
                <button class="theme focus:outline-none" v-on:click="themeUpdate" title="Toggle Light/Dark mode">
                    <i class="fa fa-moon-o"></i>/<i class="fa fa-sun-o"></i>
                </button>
            </div>
        </div>
    </div>
</div>
</body>

</html>

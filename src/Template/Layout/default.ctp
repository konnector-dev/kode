<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= APP_NAME ?>
        </title>

        <?= $this->Html->meta('favicon.ico', 'koderview.png', array('type' => 'icon')); ?>
        <?= $this->Html->css('tw-style.css') ?>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
        <?= $this->Html->css('font-awesome.min.css') ?>
    </head>
    <body class="bg-kodark text-kodarkdext font-ubuntu">

        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>

    </body>
</html>


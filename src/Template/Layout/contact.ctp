<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <!-- Set site title -->
    <title>
        <?= $this->fetch('title') ?>
    </title>

    <!-- Load CSS -->
    <?= $this->Html->css('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css') ?>
    <?= $this->Html->css('https://use.fontawesome.com/releases/v5.0.6/css/all.css') ?>
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Archivo+Narrow:400,400i,500,500i,600,600i,700,700i') ?>
    <?= $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons') ?>
    <?= $this->Html->css('Linearicons-Free-v1.0.0/Desktop-Font/demo-files/demo') ?>
    <?= $this->Html->css('normalise') ?>
    <?= $this->Html->css('slideNav-core.min') ?>
    <?= $this->Html->css('slideNav-demo') ?>
    <?= $this->Html->css('responsive') ?>
    <?= $this->Html->css('animate') ?>
    <?= $this->Html->css('style') ?>


    <!-- Load Scripts in Head -->
    <?= $this->Html->script('jquery-2.2.4-min.js') ?>
    <?= $this->Html->script('lettering.js') ?>
    <?= $this->Html->script('textillate.js') ?>
    <?= $this->Html->script('tagcanvas.js') ?>

    <!-- Fetch files -->
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <?= $this->fetch('content') ?>
    <?= $this->element("nav")?>
    <?= $this->element("contact/index")?>
</body>

<!-- Load Footer Scripts -->
<?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js') ?>
<?= $this->Html->script('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js') ?>
<?= $this->Html->script('http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js') ?>
<?= $this->Html->script('http://threejs.org/examples/js/libs/stats.min.js') ?>
<?= $this->Html->script('app') ?>


</html>

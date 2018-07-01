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
    <?= $this->Html->css('style') ?>
    <?= $this->Html->css('normalise') ?>
    <?= $this->Html->css('slideNav-core.min') ?>
    <?= $this->Html->css('slideNav-demo') ?>
    <?= $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons') ?>


    <!-- Load Scripts in Head -->
    <?= $this->Html->script('jquery-2.2.4-min.js') ?>

    <!-- Fetch files -->
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <?= $this->element("nav")?>
    <?= $this->fetch('content') ?>
    <?= $this->element("Home/index")?>
</body>

<!-- Load Footer Scripts -->
<?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js') ?>
<?= $this->Html->script('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js') ?>
<?= $this->Html->script('app') ?>


</html>

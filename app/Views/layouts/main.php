<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
    <?= $this->renderSection('styles') ?>
</head>

<body>
    <?= $this->renderSection('content') ?>

    <script src="<?= base_url('js/jquery-3.6.4.min.js') ?>"></script>
    <?= $this->renderSection('scripts') ?>
</body>

</html>
<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
    <link rel="stylesheet" href="<?= base_url('css/jquery_validation/screen.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="create-form">
    <h2>Add User</h2>
    <form id="addUserForm" method="post" action="<?= base_url('users/store') ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <p class="error"><?= isset($validation) ? $validation->getError('name') : '' ?></p>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <p class="error"><?= isset($validation) ? $validation->getError('email') : '' ?></p>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <p class="error"><?= isset($validation) ? $validation->getError('password') : '' ?></p>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword">
        <p class="error"><?= isset($validation) ? $validation->getError('confirmPassword') : '' ?></p>
        <button type="submit">Save</button>
    </form>
    </div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script src="<?= base_url('js/user.js') ?>"></script>
    <script src="<?= base_url('js/jquery.validate.min.js') ?>"></script>
<?= $this->endSection() ?>
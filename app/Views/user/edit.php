<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
    <link rel="stylesheet" href="<?= base_url('css/jquery_validation/screen.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="create-form">
    <h2>Edit User</h2>
    <form id="editUserForm" method="post" action="<?= base_url('users/update/'.$user['id']) ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= isset($user) ? $user['name'] : '' ?>">
        <p class="error"><?= isset($validation) ? $validation->getError('name') : '' ?></p>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= isset($user) ? $user['email'] : '' ?>">
        <p class="error"><?= isset($validation) ? $validation->getError('email') : '' ?></p>

        <button type="submit">Save</button>
    </form>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script src="<?= base_url('js/user.js') ?>"></script>
    <script src="<?= base_url('js/jquery.validate.min.js') ?>"></script>
<?= $this->endSection() ?>
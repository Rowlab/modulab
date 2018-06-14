<?php include(ROOT . 'app/views/includes/header.php'); ?>

<p>Add new collaborator</p>
<div style="color: red;">
    <?php if (isset($data['erreur']['name'])) : ?>
    <?= $data['erreur']['name'] ?>
    <?php endif; ?>

    <?php if (isset($data['erreur']['surname'])) : ?>
    <?= $data['erreur']['surname'] ?>
    <?php endif; ?>

    <?php if (isset($data['erreur']['mail'])) : ?>
    <?= $data['erreur']['mail'] ?>
    <?php endif; ?>

    <?php if (isset($data['erreur']['password'])) : ?>
    <?= $data['erreur']['password'] ?>
    <?php endif; ?>

    <?php if (isset($data['erreur']['confirm_password'])) : ?>
    <?= $data['erreur']['confirm_password'] ?>
    <?php endif; ?>
</div>

<form action="/user/addUser" method="post" enctype="multipart/form-data">
    <input type="text" name="name" value="<?php if (isset($_POST['name'])) {
    echo $_POST['name'];
} ?>" placeholder="Name">

    <input type="text" name="surname" value="<?php if (isset($_POST['surname'])) {
    echo $_POST['surname'];
} ?>" placeholder="Surname">

    <input type="text" name="mail" value="<?php if (isset($_POST['mail'])) {
    echo $_POST['mail'];
} ?>" placeholder="Mail">

    <input type="password" name="password" value="<?php if (isset($_POST['password'])) {
    echo $_POST['password'];
} ?>" placeholder="Password">

    <input type="password" name="confirm_password" placeholder="Confirm your password">

    <input type="submit" value="Add">
</form>

<?= 'Already ' . count($data['users']) . ' users'; ?>

<?php
    // var_dump($data['users'])
?>


<?php include(ROOT . 'app/views/includes/footer.php');

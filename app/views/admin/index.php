<?php include(ROOT . 'app/views/templates/head.php');
?>

<a href="/user/addUser">Add new collaborator</a>

<?= 'Already ' . count($data['users']) . ' users'; ?>

<?php include(ROOT . 'app/views/templates/footer.php');

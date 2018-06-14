<?php include(ROOT . 'app/views/templates/head.php');
?>
<div style="color: red;">
  <?php if (isset($data['erreur']['company_name'])) : ?>
  <?= $data['erreur']['company_name'] ?>
  <?php endif; ?>

</div>

<form action="/client/addClient" method="post">
  <input type="text" name="company_name" value="<?php if (isset($_POST['company_name'])) {
    echo $_POST['company_name'];
} ?>" placeholder="Company name">

  <input type="submit" value="Add">
</form>


<?php include(ROOT . 'app/views/templates/footer.php');

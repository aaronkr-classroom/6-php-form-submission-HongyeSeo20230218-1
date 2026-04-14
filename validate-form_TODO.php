<?php
// @TODO
?>
<?php include 'includes/header.php'; ?>

<?= $message ?>
<form action="validate-form.php" method="POST">
  Name: <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>">
  <span class="error"><?= $errors['name'] ?></span><br>
  Age:  <input type="text" name="age" value="<?= htmlspecialchars($user['age']) ?>">
  <span class="error"><?= $errors['age'] ?></span><br>
  <input type="checkbox" name="terms" value="true" <?= $user['terms'] ? 'checked' : '' ?>>
  I agree to the terms and conditions
  <span class="error"><?= $errors['terms'] ?></span><br>
  <input type="submit" value="Save">
</form>

<?php include 'includes/footer.php'; ?>
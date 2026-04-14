<?php // @TODO
// User's name
// User's age
// User's email

// HTML Escape filter
// Integer filter
// Email filter

// Sanitize output
?>
<?php include 'includes/header.php'; ?>

<p>Name:  <?= $user['name'] ?></p>
<p>Age:   <?= $user['age'] ?></p>
<p>Email: <?= $user['email'] ?></p>
<pre><?php var_dump($user); ?></pre>

<?php include 'includes/footer.php'; ?>
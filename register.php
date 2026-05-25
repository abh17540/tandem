<?php
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['confirm'] ?? '';

    if ($name === '' || $email === '' || $password === '' || $confirm === '') {
        $message = 'Please fill in all fields.';
    } elseif ($password !== $confirm) {
        $message = "Passwords don't match.";
    } else {
        $message = 'Account created for ' . htmlspecialchars($name) . ' — you can now log in.';
    }
}

include 'includes/header.php';
?>

    <h1>Create your account</h1>

    <?php if ($message !== ''): ?>
        <p class="message"><?php echo $message; ?></p>
    <?php endif; ?>

    <form method="post" action="register.php">
        <label for="name">Full name</label>
        <input type="text" id="name" name="name">

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" id="password" name="password">

        <label for="confirm">Confirm password</label>
        <input type="password" id="confirm" name="confirm">

        <button type="submit" class="btn">Create account</button>
    </form>

<?php include 'includes/footer.php'; ?>

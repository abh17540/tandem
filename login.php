<?php
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($email !== '' && $password !== '') {
        $message = 'Welcome back, ' . htmlspecialchars($email) . '!';
    } else {
        $message = 'Please enter your email and password.';
    }
}

include 'includes/header.php';
?>

    <h1>Log in</h1>

    <?php if ($message !== ''): ?>
        <p class="message"><?php echo $message; ?></p>
    <?php endif; ?>

    <form method="post" action="login.php">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" id="password" name="password">

        <button type="submit" class="btn">Log in</button>
    </form>

<?php include 'includes/footer.php'; ?>

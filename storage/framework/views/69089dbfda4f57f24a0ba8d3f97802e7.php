<form method="POST" action="/register">
    <?php echo csrf_field(); ?>
    <input name="name" placeholder="Name" required>
    <input name="email" type="email" placeholder="Email" required>
    <input name="password" type="password" placeholder="Password" required>
    <input name="password_confirmation" type="password" placeholder="Confirm Password" required>
    <button type="submit">Register</button>
</form><?php /**PATH C:\xampp\htdocs\Task-27_Grafil\grafil_custom\resources\views/auth/register.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="/login" method="POST">
        <?php echo csrf_field(); ?>
        <input type="email" name="username">
        <input type="password" name="password">
        <button type="submit">Ingresar</button>
    </form>
</body>
</html><?php /**PATH C:\Users\tecnologia\OneDrive\Escritorio\michael\esoterismo\resources\views\auth\login.blade.php ENDPATH**/ ?>
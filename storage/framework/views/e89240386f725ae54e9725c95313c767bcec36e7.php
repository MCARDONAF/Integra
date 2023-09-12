<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrate</title>
</head>
<body>
    <form action="/register" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="name">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="password" name="password_confirmation">

        <button type="submit">Registrate</button>
    </form>
</body>
</html><?php /**PATH C:\Users\tecnologia\OneDrive\Escritorio\michael\esoterismo\resources\views\auth\register.blade.php ENDPATH**/ ?>
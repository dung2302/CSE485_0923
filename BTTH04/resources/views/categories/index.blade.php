<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach ($categories as $category): ?>
    <p><?php echo $category->name; ?></p>
<?php endforeach; ?>
</body>
</html>
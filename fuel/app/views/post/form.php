<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save" method="post">
    <p>タイトル</p>
    <input type="text" name="title">
    <p>概要</p>
    <input type="text" name="summary">
    <p>本文</p>
    <input type="text" name="body">
    <input type="submit" name="submit" value="投稿する">
    </form>
    <?php foreach($date as $aa): ?>
        <p><?php echo $aa->title; ?></p>
        <p><?php echo $aa->id; ?></p>
    <?php endforeach; ?>
    <?php echo Html::anchor('index.php/post', '一覧確認する'); ?>


    
</body>
</html>
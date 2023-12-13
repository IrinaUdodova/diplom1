<!doctype html>
<html lang ="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1/0">
    <meta http-equiv="X-UA-Compatible" content="ie=adge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Контактная форма</title>
</head>
<body>
  <?php require "blocks/header.php" ?>
  <div class ="contact">
    <h3>Контактная форма</h3>
    <form action="check.php" method="post">
      <input type ="email" name="email" placeholder="Введите Email"
      class="form-control"><br>
      <textarea name="phone" class="form-control" placeholder="Введите ваш номер телефона"></textarea><br>
      <button type="submit" name="send" class="btn3">Отправить</button>
    </form>
  </div>
  <?php require "blocks/footer.php" ?>  
</body>
</html>
<!DOCTYPE html>
<html lan= "ru">
<head>
    <title>
        Гостевая книга
    </title>
    <meta charset = "utf-8">
    <link rel="stylesheet" type="text/css" href="css/Style.css">
    <link rel = "stylesheet" href = "css/bootstrap.min.css">
</head>
<body>
    <div class = "container" id = "container1">            <div class = "row">
            <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12" id = "header">
                <p class = "six"><u><b>Деканат Севастопольского Государственного                 Университе-та</b></u></h2>
            </div>
        </div>
        <br>
        <div class = "row">
            <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12" id = "mainmenu">
                <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <a href='index.php.inc'>Главная</a>
                        <a href='index.php?id=about'>Новости</a>
                        <a href='index.php?id=contact'>Состав деканата </a>
                        <a href='index.php?id=gbook'>Гостевая книга</a>
                    </div>

            </div>
        </div>
        <form>
        <div class = "form-group">
        <label for = "usr">Имя</label>
        <input type = "usr" class = "form-control" id = "usr" placeholder="􏰗􏰐􏰈􏰂􏰊􏰍􏰈Name">
        </div>
        <div class="form-group">
        <label for="inputEmail">Email􏰀􏰇􏰋􏰁􏰄􏰜</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Email􏰐􏰈􏰂􏰊􏰍􏰈 􏰏􏰇􏰋􏰁􏰄􏰜">
        </div>
        <div class="form-group">
  <label for="comment">Комментарий</label>
  <textarea class="form-control" rows="6" id="comment"></textarea>
</div>
<button type="submit" class="btn btn-primary">Готово</button>
        </form>
    <?php
        include 'routing.php';
        ?>
        <div class = "row">
        <br><br><br><br><br><br><br>
            <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12" id = "footer">
                <p class = "six">
                    <i><strong>Ул. Университетская 33, Севастополь</strong></i>
                </p>
            </div>
        </div>
    </div>
</body>
</html>

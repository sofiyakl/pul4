<!DOCTYPE html>
<html lang = "ru">
<head>
    <title>
        Расписание
    </title>
    <meta charset = "utf-8">
    <link rel = "stylesheet" href = "css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/Style.css">
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery .min.js"></script>
    <script src="js/bootstrap.min.js"></script>
        <div class = "container" id = "container">
        <div class = "row  d-lg-bloc">
            <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12" id = "header">
                <p class = "six"><u><b>Деканат Севастопольского Государственного                 Университе-та</b></u></h2>
            </div>
        </div>
        <br>
        <div class = "row  d-lg-block">
            <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12" id = "mainmenu">
                <div class = "row">
                    <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                       <a href = 'index.php'>Главная </a>
			<a href = 'index.php?id=about'>Новости </a>
                        <a href = 'index.php?id=contact>Состав деканата </a>
                        <a href = 'index.php?id=gbook'>Гостевая книга</a>
                    </div>
                </div>
            </div>
        </div>
        <div class = "row d-lg-block">
            <table class="table table-responsive table-bordered table-hover" class = "col-xs-12 col-sm-12 col-md-12 col-lg-12" id = "content">
                  <thead>
                    <tr>
                         <th scope="col">№</th>
                          <th scope="col">ФИО</th>
                          <th scope="col">Должность</th>
                          <th scope="col">Номер телефона</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                         <th scope="row">1</th>
                         <td>Декан</td>
                        <td>Егорченков Александр Васильевич</td>
                         <td>+7 (473) 228-11-60</td>
                       </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Заместитель декана по учебной работе</td>
                           <td>Абрамов Владимир Владимирович</td>
                          <td>+7 (473) 228-11-60</td>
                    </tr>
                       <tr>
                         <th scope="row">3</th>
                          <td>Заместитель декана по заочному отделению</td>
                           <td>Бондаренко Светлана Владимировна</td>
                           <td>+7 (473) 228-11-60</td>
                    </tr>
                    <tr>
                          <th scope="row">4</th>
                          <td>Заместитель декана по научной работе</td>
                          <td>Блинов Владимир Евгеньевич</td>
                          <td>329-42-27</td>
                     </tr>
                     <tr>
                          <th scope="row">5</th>
                         <td>Заместитель декана по учебной работе</td>
                          <td>Цыбуля Сергей Васильевич</td>
                          <td>326-95-97</td>
                      </tr>
                     <tr>
                          <th scope="row">6</th>
                         <td>Секретарь деканата</td>
                         <td>Шафоростова Анна Борисовна</td>
                        <td>+7 (473) 228-11-60</td>
                    </tr>
                 </tbody>
        </table>
    </div>
    <?php
        include 'routing.php';
    ?>
    <br><br><br><br><br><br><br><br><br><br>
        <div class = "row">
            <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12" id = "footer">
                <p class = "six">
                    <i><strong>Ул. Университетская 33, Севастополь</strong></i>                </p>
            </div>
        </div>
    </div>
</body>
</html>

<?php
$title = 'Выбор типа заявления';
include 'header.php';
?>
<!-- Section 1 -->
<section class="container my-5">
    <div class="row justify-content-center">
        Внимание! Заполнение форм документов на сайте не является электронной формой
        подачи документов. Заполненные документы необходимо распечатать, подписать
        и прислать на почту lyceumspb_study@mail.ru
        или передать секретарю учебной части (в зависимости от типа заявления)
    </div>
</section>
<!-- Section 2 -->
<section class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h2 class="mb-4">ЗАПОЛНИТЬ ЗАЯВЛЕНИЕ НА:</h2>
            <div class="btn-group-vertical d-grid gap-2" role="group" aria-label="Vertical button group">
                <a href="mht1_8-5.php" class="btn btn-primary" style="color: white; text-decoration: none;">ПОСТУПЛЕНИЕ В 1 КЛАСС НА ДОПОЛНИТЕЛЬНОЕ ОБРАЗОВАНИЕ (БЮДЖЕТ) </a>
                <button type="button" class="btn btn-secondary disabled">ПОСТУПЛЕНИЕ В 5 КЛАСС НА ОБЩЕОБРАЗОВАТЕЛЬНОЕ ОТДЕЛЕНИЕ</button>
                <button type="button" class="btn btn-secondary disabled">ПОСТУПЛЕНИЕ ПО ПЕРЕВОДУ</button>
                <a href="paid_services.php" class="btn btn-primary" style="color: white; text-decoration: none;">ПЛАТНЫЕ ОБРАЗОВАТЕЛЬНЫЕ УСЛУГИ</a>
                <button type="button" class="btn btn-secondary disabled">ПРОКАТ ИНСТРУМЕНТОВ</button>
                <button type="button" class="btn btn-secondary disabled">ОТЧИСЛЕНИЕ</button>
                <button type="button" class="btn btn-secondary disabled">ВОССТАНОВЛЕНИЕ ПРОПУСКА</button>
            </div>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>
</body>
</html>
<?php

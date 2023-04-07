<?php
$title = 'Выбор музыкального инструмента или программы обучения';
include 'header.php';
?>
<form method="POST" action="">
    <div class="container">
        <div id="app">
            <step-navigation :steps="steps" :currentstep="currentstep">
            </step-navigation>

            <div v-show="currentstep == 1">
                <h3>ВЫБЕРИТЕ МУЗЫКАЛЬНЫЙ ИНСТРУМЕНТ ИЛИ ПРОГРАММУ ОБУЧЕНИЯ:</h3>
                <section class="container my-5" id="result-container">
                    <div class="row justify-content-center">
                        Заявление о приеме в 1 класс на обучение по дополнительной предпрофессиональной программе в
                        области
                        музыкального искусства (срок обучения согласно выбранной программе)
                        )
                    </div>
                    <p>Укажите цифрами от 1 до 3 в порядке приоритета (1 - наивысший приоритет, 3 - наименьший
                        приоритет) не более трех
                        направлений</p>
                    <p>Чтобы изменить выбор, поставьте «0» вместо ранее указанной цифры</p>
                    <!-- Section 2 -->
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Программа</th>
                            <th scope="col">Музыкальный инструмент</th>
                            <th scope="col">Приоритет</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">ФОРТЕПИАНО</th>
                            <td>Фортепиано</td>
                            <td>
                                <input type="radio" class="btn-check" name="piano" id="btnradio0" autocomplete="off"
                                       checked>
                                <label class="btn btn-outline-primary" for="btnradio0">0</label>
                                <input type="radio" class="btn-check" name="piano" id="btnradio1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio1">1</label>
                                <input type="radio" class="btn-check" name="piano" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio2">2</label>
                                <input type="radio" class="btn-check" name="piano" id="btnradio3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio3">3</label>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="5">СТРУННЫЕ ИНСТРУМЕНТЫ</th>
                            <td>Скрипка</td>
                            <td>
                                <input type="radio" class="btn-check" name="violin" id="btnradio4" autocomplete="off"
                                       checked>
                                <label class="btn btn-outline-primary" for="btnradio4">0</label>
                                <input type="radio" class="btn-check" name="violin" id="btnradio5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio5">1</label>
                                <input type="radio" class="btn-check" name="violin" id="btnradio6" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio6">2</label>
                                <input type="radio" class="btn-check" name="violin" id="btnradio7" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio7">3</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Альт</td>
                            <td>
                                <input type="radio" class="btn-check" name="alt" id="btnradio9" autocomplete="off"
                                       checked>
                                <label class="btn btn-outline-primary" for="btnradio9">0</label>
                                <input type="radio" class="btn-check" name="alt" id="btnradio11" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio11">1</label>
                                <input type="radio" class="btn-check" name="alt" id="btnradio12" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio12">2</label>
                                <input type="radio" class="btn-check" name="alt" id="btnradio13" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio13">3</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Виолончель</td>
                            <td>
                                <input type="radio" class="btn-check" name="violoncello" id="btnradio14"
                                       autocomplete="off" checked>
                                <label class="btn btn-outline-primary" for="btnradio14">0</label>
                                <input type="radio" class="btn-check" name="violoncello" id="btnradio15"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio15">1</label>
                                <input type="radio" class="btn-check" name="violoncello" id="btnradio16"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio16">2</label>
                                <input type="radio" class="btn-check" name="violoncello" id="btnradio17"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio17">3</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Контрабас</td>
                            <td>
                                <input type="radio" class="btn-check" name="doublebass" id="btnradio18"
                                       autocomplete="off" checked>
                                <label class="btn btn-outline-primary" for="btnradio18">0</label>
                                <input type="radio" class="btn-check" name="doublebass" id="btnradio19"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio19">1</label>
                                <input type="radio" class="btn-check" name="doublebass" id="btnradio20"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio20">2</label>
                                <input type="radio" class="btn-check" name="doublebass" id="btnradio21"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio21">3</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Арфа</td>
                            <td>
                                <input type="radio" class="btn-check" name="harp" id="btnradio22" autocomplete="off"
                                       checked>
                                <label class="btn btn-outline-primary" for="btnradio22">0</label>
                                <input type="radio" class="btn-check" name="harp" id="btnradio23" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio23">1</label>
                                <input type="radio" class="btn-check" name="harp" id="btnradio24" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio24">2</label>
                                <input type="radio" class="btn-check" name="harp" id="btnradio25" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio25">3</label>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="9">ДУХОВЫЕ И УДАРНЫЕ ИНСТРУМЕНТЫ</th>
                            <td>Флейта</td>
                            <td>
                                <input type="radio" class="btn-check" name="flute" id="btnradio26" autocomplete="off"
                                       checked>
                                <label class="btn btn-outline-primary" for="btnradio26">0</label>
                                <input type="radio" class="btn-check" name="flute" id="btnradio27" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio27">1</label>
                                <input type="radio" class="btn-check" name="flute" id="btnradio28" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio28">2</label>
                                <input type="radio" class="btn-check" name="flute" id="btnradio29" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio29">3</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Гобой</td>
                            <td>
                                <input type="radio" class="btn-check" name="oboe" id="btnradio30" autocomplete="off"
                                       checked>
                                <label class="btn btn-outline-primary" for="btnradio30">0</label>
                                <input type="radio" class="btn-check" name="oboe" id="btnradio31" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio31">1</label>
                                <input type="radio" class="btn-check" name="oboe" id="btnradio32" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio32">2</label>
                                <input type="radio" class="btn-check" name="oboe" id="btnradio33" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio33">3</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Кларнет</td>
                            <td>
                                <input type="radio" class="btn-check" name="clarinet" id="btnradio34" autocomplete="off"
                                       checked>
                                <label class="btn btn-outline-primary" for="btnradio34">0</label>
                                <input type="radio" class="btn-check" name="clarinet" id="btnradio35"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio35">1</label>
                                <input type="radio" class="btn-check" name="clarinet" id="btnradio36"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio36">2</label>
                                <input type="radio" class="btn-check" name="clarinet" id="btnradio37"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio37">3</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Труба</td>
                            <td>
                                <input type="radio" class="btn-check" name="trumpet" id="btnradio38" autocomplete="off"
                                       checked>
                                <label class="btn btn-outline-primary" for="btnradio38">0</label>
                                <input type="radio" class="btn-check" name="trumpet" id="btnradio39" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio39">1</label>
                                <input type="radio" class="btn-check" name="trumpet" id="btnradio40" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio40">2</label>
                                <input type="radio" class="btn-check" name="trumpet" id="btnradio41" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio41">3</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Тенор</td>
                            <td>
                                <!--<input type="radio" class="btn-check" name="tenor" id="btnradio42" autocomplete="off" checked>
                                <label class="btn btn-outline-primary" for="btnradio42">0</label>
                                <input type="radio" class="btn-check" name="tenor" id="btnradio43" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio43">1</label>
                                <input type="radio" class="btn-check" name="tenor" id="btnradio44" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio44">2</label>
                                <input type="radio" class="btn-check" name="tenor" id="btnradio45" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio45">3</label>-->
                                ПРИЕМА НА 22/23 учебный год НЕТ
                            </td>
                        </tr>
                        <tr>
                            <td>Тромбон</td>
                            <td>
                                <input type="radio" class="btn-check" name="trombone" id="btnradio46" autocomplete="off"
                                       checked>
                                <label class="btn btn-outline-primary" for="btnradio46">0</label>
                                <input type="radio" class="btn-check" name="trombone" id="btnradio47"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio47">1</label>
                                <input type="radio" class="btn-check" name="trombone" id="btnradio48"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio48">2</label>
                                <input type="radio" class="btn-check" name="trombone" id="btnradio49"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio49">3</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Валторна</td>
                            <td>
                                <input type="radio" class="btn-check" name="frenchhorn" id="btnradio50"
                                       autocomplete="off" checked>
                                <label class="btn btn-outline-primary" for="btnradio50">0</label>
                                <input type="radio" class="btn-check" name="frenchhorn" id="btnradio51"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio51">1</label>
                                <input type="radio" class="btn-check" name="frenchhorn" id="btnradio52"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio52">2</label>
                                <input type="radio" class="btn-check" name="frenchhorn" id="btnradio53"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio53">3</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Туба</td>
                            <td>
                                <!-- <input type="radio" class="btn-check" name="tuba" id="btnradio54" autocomplete="off" checked>
                                 <label class="btn btn-outline-primary" for="btnradio54">0</label>
                                 <input type="radio" class="btn-check" name="tuba" id="btnradio55" autocomplete="off">
                                 <label class="btn btn-outline-primary" for="btnradio55">1</label>
                                 <input type="radio" class="btn-check" name="tuba" id="btnradio56" autocomplete="off">
                                 <label class="btn btn-outline-primary" for="btnradio56">2</label>
                                 <input type="radio" class="btn-check" name="tuba" id="btnradio57" autocomplete="off">
                                 <label class="btn btn-outline-primary" for="btnradio57">3</label>-->
                                ПРИЕМА НА 22/23 учебный год НЕТ
                            </td>
                        </tr>
                        <tr>
                            <td>Ударные инструменты</td>
                            <td>
                                <input type="radio" class="btn-check" name="drum" id="btnradio58" autocomplete="off"
                                       checked>
                                <label class="btn btn-outline-primary" for="btnradio58">0</label>
                                <input type="radio" class="btn-check" name="drum" id="btnradio59" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio59">1</label>
                                <input type="radio" class="btn-check" name="drum" id="btnradio60" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio60">2</label>
                                <input type="radio" class="btn-check" name="drum" id="btnradio61" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio61">3</label>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="6">НАРОДНЫЕ ИНСТРУМЕНТЫ</th>
                            <td>Баян</td>
                            <td>
                                <input type="radio" class="btn-check" name="bayan" id="btnradio62" autocomplete="off"
                                       checked>
                                <label class="btn btn-outline-primary" for="btnradio62">0</label>
                                <input type="radio" class="btn-check" name="bayan" id="btnradio63" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio63">1</label>
                                <input type="radio" class="btn-check" name="bayan" id="btnradio64" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio64">2</label>
                                <input type="radio" class="btn-check" name="bayan" id="btnradio65" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio65">3</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Аккордеон</td>
                            <td>
                                <input type="radio" class="btn-check" name="accordion" id="btnradio66"
                                       autocomplete="off" checked>
                                <label class="btn btn-outline-primary" for="btnradio66">0</label>
                                <input type="radio" class="btn-check" name="accordion" id="btnradio67"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio67">1</label>
                                <input type="radio" class="btn-check" name="accordion" id="btnradio68"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio68">2</label>
                                <input type="radio" class="btn-check" name="accordion" id="btnradio69"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio69">3</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Домра</td>
                            <td>
                                <input type="radio" class="btn-check" name="domra" id="btnradio70" autocomplete="off"
                                       checked>
                                <label class="btn btn-outline-primary" for="btnradio70">0</label>
                                <input type="radio" class="btn-check" name="domra" id="btnradio71" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio71">1</label>
                                <input type="radio" class="btn-check" name="domra" id="btnradio72" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio72">2</label>
                                <input type="radio" class="btn-check" name="domra" id="btnradio73" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio73">3</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Балалайка</td>
                            <td>
                                <input type="radio" class="btn-check" name="balalaika" id="btnradio74"
                                       autocomplete="off" checked>
                                <label class="btn btn-outline-primary" for="btnradio74">0</label>
                                <input type="radio" class="btn-check" name="balalaika" id="btnradio75"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio75">1</label>
                                <input type="radio" class="btn-check" name="balalaika" id="btnradio76"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio76">2</label>
                                <input type="radio" class="btn-check" name="balalaika" id="btnradio77"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio77">3</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Гусли</td>
                            <td>
                                <input type="radio" class="btn-check" name="psaltery" id="btnradio78" autocomplete="off"
                                       checked>
                                <label class="btn btn-outline-primary" for="btnradio78">0</label>
                                <input type="radio" class="btn-check" name="psaltery" id="btnradio79"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio79">1</label>
                                <input type="radio" class="btn-check" name="psaltery" id="btnradio80"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio80">2</label>
                                <input type="radio" class="btn-check" name="psaltery" id="btnradio81"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio81">3</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Гитара</td>
                            <td>
                                <input type="radio" class="btn-check" name="guitar" id="btnradio82" autocomplete="off"
                                       checked>
                                <label class="btn btn-outline-primary" for="btnradio82">0</label>
                                <input type="radio" class="btn-check" name="guitar" id="btnradio83" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio83">1</label>
                                <input type="radio" class="btn-check" name="guitar" id="btnradio84" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio84">2</label>
                                <input type="radio" class="btn-check" name="guitar" id="btnradio85" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio85">3</label>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" rowspan="5">ИНСТРУМЕНТЫ ЭСТРАДНОГО ОРКЕСТРА</th>
                            <td>Саксофон</td>
                            <td>
                                <input type="radio" class="btn-check" name="saxophone" id="btnradio86"
                                       autocomplete="off" checked>
                                <label class="btn btn-outline-primary" for="btnradio86">0</label>
                                <input type="radio" class="btn-check" name="saxophone" id="btnradio87"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio87">1</label>
                                <input type="radio" class="btn-check" name="saxophone" id="btnradio88"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio88">2</label>
                                <input type="radio" class="btn-check" name="saxophone" id="btnradio89"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio89">3</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Тромбон</td>
                            <td>
                                <input type="radio" class="btn-check" name="trombone2" id="btnradio90"
                                       autocomplete="off" checked>
                                <label class="btn btn-outline-primary" for="btnradio90">0</label>
                                <input type="radio" class="btn-check" name="trombone2" id="btnradio91"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio91">1</label>
                                <input type="radio" class="btn-check" name="trombone2" id="btnradio92"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio92">2</label>
                                <input type="radio" class="btn-check" name="trombone2" id="btnradio93"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio93">3</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Ударные инструменты</td>
                            <td>
                                <!--<input type="radio" class="btn-check" name="drum2" id="btnradio94" autocomplete="off" checked>
                                <label class="btn btn-outline-primary" for="btnradio94">0</label>
                                <input type="radio" class="btn-check" name="drum2" id="btnradio95" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio95">1</label>
                                <input type="radio" class="btn-check" name="drum2" id="btnradio96" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio96">2</label>
                                <input type="radio" class="btn-check" name="drum2" id="btnradio97" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio97">3</label>-->
                                ПРИЕМА НА 22/23 учебный год НЕТ
                            </td>
                        </tr>
                        <tr>
                            <td>Бас-гитара</td>
                            <td>
                                <input type="radio" class="btn-check" name="guitar2" id="btnradio98" autocomplete="off"
                                       checked>
                                <label class="btn btn-outline-primary" for="btnradio98">0</label>
                                <input type="radio" class="btn-check" name="guitar2" id="btnradio99" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio99">1</label>
                                <input type="radio" class="btn-check" name="guitar2" id="btnradio100"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio100">2</label>
                                <input type="radio" class="btn-check" name="guitar2" id="btnradio101"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio101">3</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Электрогитара</td>
                            <td>
                                <!--<input type="radio" class="btn-check" name="guitar3" id="btnradio102" autocomplete="off" checked>
                                <label class="btn btn-outline-primary" for="btnradio102">0</label>
                                <input type="radio" class="btn-check" name="guitar3" id="btnradio103" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio103">1</label>
                                <input type="radio" class="btn-check" name="guitar3" id="btnradio104" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio104">2</label>
                                <input type="radio" class="btn-check" name="guitar3" id="btnradio105" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio105">3</label>-->
                                ПРИЕМА НА 22/23 учебный год НЕТ
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">ХОРОВОЕ ПЕНИЕ</th>
                            <td>----</td>
                            <td>
                                <input type="radio" class="btn-check" name="chorus" id="btnradio106" autocomplete="off"
                                       checked>
                                <label class="btn btn-outline-primary" for="btnradio106">0</label>
                                <input type="radio" class="btn-check" name="chorus" id="btnradio107" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio107">1</label>
                                <input type="radio" class="btn-check" name="chorus" id="btnradio108" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio108">2</label>
                                <input type="radio" class="btn-check" name="chorus" id="btnradio109" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio109">3</label>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">МУЗЫКАЛЬНЫЙ ФОЛЬКЛОР</th>
                            <td>----</td>
                            <td>
                                <input type="radio" class="btn-check" name="folklore" id="btnradio110"
                                       autocomplete="off" checked>
                                <label class="btn btn-outline-primary" for="btnradio110">0</label>
                                <input type="radio" class="btn-check" name="folklore" id="btnradio111"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio111">1</label>
                                <input type="radio" class="btn-check" name="folklore" id="btnradio112"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio112">2</label>
                                <input type="radio" class="btn-check" name="folklore" id="btnradio113"
                                       autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio113">3</label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </section>

            </div>
            <div v-show="currentstep == 2">
                <h3>ЗАЯВЛЕНИЕ</h3>
                <div class="form-group">
                    <p>Директору СПБ ГБНОУ “Лицей искусств “Санкт-Петербург” Мельниченко Д.Т.</p>
                        <div class="row">
                            <div class="col-md-1">
                                <p class="">от</p>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="last-name" placeholder="Ивановой">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="first-name" placeholder="Ольги">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="middle-name" placeholder="Сергеевны">
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Нет отчества
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <p>Прошу принять моего ребенка, </p>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="last-name" placeholder="Иванова">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="last-name" placeholder="Ивана">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="last-name" placeholder="Сергеевича">
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Нет отчества
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                            <p>в 1 класс на обучение в СПБ ГБНОУ “Лицей искусств “Санкт-Петербург” и провести
                                индивидуальный отбор по
                                дополнительным предпрофессиональным программам в области музыкального искусства (от
                                одной до трех)</p>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    С <a href="#">Согласием на обработку персональных данных</a> ознакомлен(а)
                                </label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    С <a href="#">Согласием на обработку персональных данных ребенка</a>, разрешенных
                                    родителем (законным представителем) ребенкадля распространения (для размещения
                                    результатов индивидуального отбора на сайте учреждения) ознакомлен(а)
                                </label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    С <a href="#">уставом учреждения</a>, со <a href="#">сведениями о дате предоставления и
                                        регистрационном номере лицензии на осуществление образовательной деятельности</a>
                                    ознакомлен(а)
                                </label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    С <a href="#">Правилами приема в учреждение</a> на обучение по дополнительным
                                    предпрофессиональным программам в области искусств ознакомлен(а)
                                </label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    С <a href="#">образовательными программами</a>, с <a href="#">правами и обязанностями
                                        обучающихся</a> ознакомлен(а)
                                </label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    С <a href="#">Положением о пропускном режиме</a> ознакомлен(а)
                                </label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Даю согласие на процедуру индивидуального отбора в отношении моего ребенка в
                                    соответствии с <a href="#">Правилами приема в учреждение</a>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-show="currentstep == 3">
                <h3>СВЕДЕНИЯ О ПОСТУПАЮЩЕМ</h3>
                <form>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="">Фамилия в именительном падеже</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="last-name" placeholder="Иванов">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="">Имя в именительном падеже</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="first-name" placeholder="Иван">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="">Отчество в именительном падеже</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="middle-name" placeholder="Иванович">
                        </div>
                        <div class="col-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Нет отчества
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="">Дата рождения (число, месяц, год)</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="last-name" placeholder="01.02.2017">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <p class="">Домашний адрес</p>
                        </div>
                        <div class="col-md-1">
                            <input type="text" class="form-control" id="last-name" placeholder="Индекс">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="last-name" placeholder="Город">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="last-name" placeholder="Улица, проспект...">
                        </div>
                        <div class="col-md-1">
                            <input type="text" class="form-control" id="last-name" placeholder="Дом">
                        </div>
                        <div class="col-md-1">
                            <input type="text" class="form-control" id="last-name" placeholder="Корп.">
                        </div>
                        <div class="col-md-1">
                            <input type="text" class="form-control" id="last-name" placeholder="Кв.">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="">Наименование  общеобразовательной школы
                                или дошкольного образовательного
                                учреждения на 01.09 текущего года</p>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="first-name" placeholder="ГБОУ № 271 Красносельского р-на">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>В какую смену учится ребенок</p>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="shift" id="shift1" value="" checked>
                                <label class="form-check-label" for="shift1">
                                    1 (утренняя) смена
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="shift" id="shift2" value="">
                                <label class="form-check-label" for="shift2">
                                    2 (дневная) смена
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                        <p>Имеется ли музыкальный инструмент дома</p>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mi" id="mi1" value="" >
                                <label class="form-check-label" for="mi1">
                                    Да
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mi" id="mi2" value="" checked>
                                <label class="form-check-label" for="mi2">
                                   Нет
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="first-name" placeholder="Какой инструмент имеется дома?">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>Обучался ли ранее в Лицее искусств</p>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="student" id="student1" value="" >
                                <label class="form-check-label" for="student1">
                                    Да
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="student" id="student2" value="" checked>
                                <label class="form-check-label" for="student2">
                                    Нет
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="first-name" placeholder="ФИО педагога, у которого обучался ребенок">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="">Укажите льготную категорию (если есть)</p>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="first-name" placeholder="Укажите льготную категорию (если есть)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="">Необходимы ли специальные условия для поступающего при проведении индивидуального
                                отбора в связи с его ограниченными возможностями здоровья или инвалидностью</p>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="special_conditions" id="special_conditions1" value="">
                                <label class="form-check-label" for="special_conditions1">
                                    Да
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="special_conditions" id="special_conditions2" value="" checked>
                                <label class="form-check-label" for="special_conditions2">
                                    Нет
                                </label>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="first-name" placeholder="Укажите специальные условия для поступающего">
                        </div>
                    </div>


                </form>

</div>
            <div v-show="currentstep == 4">
                <h3>СВЕДЕНИЯ О ЗАЯВИТЕЛЕ</h3>
                <p>Необходимо внести данные обоих родителей (при наличии)</p>
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Я единственный родитель/ опекун
                            / законный представитель
                        </label>
                    </div>
                </div>
                <form>
                    <h3>Текущую страницу необходимо заполнить данными ЗАЯВИТЕЛЯ</h3>

                    <div class="row">
                        <div class="col-md-3">
                            <p class="">Степень родства заявителя</p>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="select">Выберите степень родства</label>
                                <select class="form-control" name="select">
                                    <option>Мать</option>
                                    <option>Отец</option>
                                    <option>Опекун</option>
                                    <option>Законный представитель</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="">Фамилия в именительном падеже</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="last-name" placeholder="Иванова">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="">Имя в именительном падеже</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="first-name" placeholder="Ольга">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="">Отчество в именительном падеже</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="middle-name" placeholder="Ивановна">
                        </div>
                        <div class="col-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Нет отчества
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Домашний адрес совпадает с адресом прописки ребенка
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                                             <div class="col-md-1">
                            <p class="">Домашний адрес</p>
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="last-name" placeholder="Индекс">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="last-name" placeholder="Город">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="last-name" placeholder="Улица, проспект...">
                        </div>
                        <div class="col-md-1">
                            <input type="text" class="form-control" id="last-name" placeholder="Дом">
                        </div>
                        <div class="col-md-1">
                            <input type="text" class="form-control" id="last-name" placeholder="Корп.">
                        </div>
                        <div class="col-md-1">
                            <input type="text" class="form-control" id="last-name" placeholder="Кв.">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="">Место работы</p>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="first-name" placeholder="ИП Иванов Сергей Анатольевич">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="">Должность</p>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="first-name" placeholder="Директор">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="">Телефон</p>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="first-name" placeholder="Телефон">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="">E-mail</p>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="first-name" placeholder="E-mail">
                        </div>
                    </div>
                </form>
            </div>
            <div v-show="currentstep == 5">
                <h3>СВЕДЕНИЯ О ВТОРОМ РОДИТЕЛЕ</h3>

                <form>
                    <h3>Текущую страницу необходимо заполнить данными ВТОРОГО РОДИТЕЛЯ</h3>

                    <div class="row">
                        <div class="col-md-3">
                            <p class="">Степень родства заявителя</p>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="select">Выберите степень родства</label>
                                <select class="form-control" name="select">
                                    <option>Отец</option>
                                    <option>Мать</option>
                                    <option>Опекун</option>
                                    <option>Законный представитель</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="">Фамилия в именительном падеже</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="last-name" placeholder="Иванов">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="">Имя в именительном падеже</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="first-name" placeholder="Иван">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="">Отчество в именительном падеже</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="middle-name" placeholder="Иванович">
                        </div>
                        <div class="col-md-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Нет отчества
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Домашний адрес совпадает с адресом прописки ребенка
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <p class="">Домашний адрес</p>
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="last-name" placeholder="Индекс">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="last-name" placeholder="Город">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="last-name" placeholder="Улица, проспект...">
                        </div>
                        <div class="col-md-1">
                            <input type="text" class="form-control" id="last-name" placeholder="Дом">
                        </div>
                        <div class="col-md-1">
                            <input type="text" class="form-control" id="last-name" placeholder="Корп.">
                        </div>
                        <div class="col-md-1">
                            <input type="text" class="form-control" id="last-name" placeholder="Кв.">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="">Место работы</p>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="first-name" placeholder="ИП Иванов Сергей Анатольевич">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="">Должность</p>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="first-name" placeholder="Директор">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="">Телефон</p>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="first-name" placeholder="Телефон">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="">E-mail</p>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="first-name" placeholder="E-mail">
                        </div>
                    </div>
                </form>
            </div>
            <div v-show="currentstep == 6">
                <h3>Предварительный просмотр и отправка информации в Лицей</h3>
сюда надо вставить данные введенные в wizard form из "currentstep == 1" и так далее
            </div>
<step v-for="step in steps" :currentstep="currentstep" :key="step.id" :step="step" :stepcount="steps.length"
      @step-change="stepChanged">
</step>
        </div>
    </div>
</form>
<script type="x-template" id="step-navigation-template">
    <ol class="step-indicator">
        <li v-for="step in steps" is="step-navigation-step" :key="step.id" :step="step" :currentstep="currentstep">
        </li>
    </ol>
</script>

<script type="x-template" id="step-navigation-step-template">
    <li :class="indicatorclass">
        <div class="step"><i :class="step.icon_class"></i></div>
        <div class="caption hidden-xs hidden-sm">Step <span v-text="step.id"></span>: <span v-text="step.title"></span>
        </div>
    </li>
</script>

<script type="x-template" id="step-template">
    <div class="step-wrapper" :class="stepWrapperClass">
        <button type="button" class="btn btn-primary" @click="lastStep" :disabled="firststep">
            Back
        </button>
        <button type="button" class="btn btn-primary" @click="nextStep" :disabled="laststep">
            Next
        </button>
        <button type="submit" class="btn btn-primary" v-if="laststep">
            Submit
        </button>
    </div>
</script>

<?php
include 'footer.php';
?>

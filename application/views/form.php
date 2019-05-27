<main class="container ex-form" style="margin-top: 10px; margin-bottom: 100px;">
    <form id="anketa" action="https://zaimsoon.ru/lk" method="post" class="form-horizontal" novalidate autocomplete="off">
        <input type="hidden" name="display" id="display" value="0">
        <input type="hidden" name="referer" value="https://zaimsoon.ru/about">
        <input type="hidden" name="id" value="">
        <input type="hidden" name="step" value="1">
        <input type="hidden" name="ad_id" value="4">
        <input type="hidden" id="amount" name="amount" value="20000"/>
        <input type="hidden" id="period" name="period" value="21"/>
        <input type="hidden" name="fingerprint" id="fingerprint" value="">
        <div class="tab-content" id="to_scroll">
            <div id="firstStep" class="tab-pane fade in active">
                <h2 class="text-center">Заполнив 1-й шаг, получите +30% к вероятности одобрения заявки</h2>
                <div class="ex-calc-wraper">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3  col-sm-10 col-sm-offset-1">
                            <div class="ex-range-scope">
                                <div id="ex-main-slider-range">
                                    <p class="ex-slider-val"></p>
                                    <figure class="ex-range-slider">
                                        <input type="text" id="rangeSlider" name="rangeSlider" value="20000"/>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .myfnt {font-size: 21px !important;}
                    .myinput {text-align: center !important;}
                    main.ex-form {
                        padding-bottom: 0;
                    }
                    ::-webkit-input-placeholder {
                        text-align: center;
                        font-size: 21px !important;
                    }

                    :-moz-placeholder { /* Firefox 18- */
                        text-align: center;
                        font-size: 21px !important;
                    }

                    ::-moz-placeholder {  /* Firefox 19+ */
                        text-align: center;
                        font-size: 21px !important;
                    }

                    :-ms-input-placeholder {
                        text-align: center;
                        font-size: 21px !important;
                    }
                    main.ex-form .tab-content h2 {
                    }

                    .ex-main-btn {
                        padding-top: 13px !important;
                        width: 60% !important;
                        margin-left: auto !important;
                        margin-right: auto !important;
                    }
                </style>
                <section class="ex-main-form">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="ex-pr">
                                <div class="form-group has-feedback hidden">
                                    <label class="control-label col-md-4" for="f">Фамилия</label>
                                    <div class="col-md-8">
                                        <div class="ex-wrapper">
                                            <input type="text" class="form-control ec tip special_form" name="f" id="f" placeholder="Фамилия" title="Введите свою фамилию"
                                                   data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                                   data-validation-error-msg="Введите свою фамилию" required value="тест">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback hidden">
                                    <label class="control-label col-md-4" for="i">Имя</label>
                                    <div class="col-md-8">
                                        <div class="ex-wrapper">
                                            <input type="text" class="form-control ec tip special_form" name="i" id="i" placeholder="Имя" title="Введите свое имя" data-sanitize="capitalize"
                                                   data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$" data-validation-error-msg="Введите свое имя"
                                                   required value="тест">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback hidden">
                                    <label class="control-label col-md-4" for="o">Отчество</label>
                                    <div class="col-md-8">
                                        <div class="ex-wrapper">
                                            <input type="text" class="form-control ec tip special_form" name="o" id="o" placeholder="Отчество" title="Введите свое отчество"
                                                   data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\s]+$"
                                                   data-validation-error-msg="Введите свое отчество" required value="тест">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="gender" value="1" name="gender" required>
                                <!-- Скрываем старую форму даты рождения -->
                                <div class="form-group hidden">
                                    <label class="col-sm-4 control-label label-required hidden-xs">Дата рождения*</label>
                                    <div class="col-sm-2">
                                        <div class="shadow">
                                            <select class="form-control ec" id="birth_dd" name="birth_dd" required>
                                                <option value="0">День</option>
                                                <option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="shadow">
                                            <select class="form-control ec" id="birth_mm" name="birth_mm" required>
                                                <option value="0">Месяц</option>
                                                <option value="01">Январь</option>
                                                <option value="02">Февраль</option>
                                                <option value="03">Март</option>
                                                <option value="04">Апрель</option>
                                                <option value="05">Май</option>
                                                <option value="06">Июнь</option>
                                                <option value="07">Июль</option>
                                                <option value="08">Август</option>
                                                <option value="09">Сентябрь</option>
                                                <option value="10">Октябрь</option>
                                                <option value="11">Ноябрь</option>
                                                <option value="12">Декабрь</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="shadow">
                                            <select class="form-control ec" id="birth_yyyy" name="birth_yyyy" required>
                                                <option value="0">Год</option>
                                                <option value="1939">1939</option><option value="1940">1940</option><option value="1941">1941</option><option value="1942">1942</option><option value="1943">1943</option><option value="1944">1944</option><option value="1945">1945</option><option value="1946">1946</option><option value="1947">1947</option><option value="1948">1948</option><option value="1949">1949</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option>                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Скрываем старую форму даты рождения -->
                                <div class="form-group has-feedback hidden">
                                    <label class="control-label col-md-4" for="birthdate">Дата рождения</label>
                                    <div class="col-md-8">
                                        <div class="ex-wrapper">
                                            <input type="text" class="form-control ec tip" value="06/12/1988" id="birthdate" name="birthdate" placeholder="Дата рождения" title="Выберете свою дату рождения"
                                                   data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Выберите дату рождения"
                                                   required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="control-label col-md-4 hidden" id="spec_form2" for="phone">Телефон</label>
                                    <div class="col-md-8 col-sm-offset-4 col-xs-12">
                                        <div class="ex-wrapper">
                                            <input type="tel" class="form-control ec tip special_form myfnt myinput" name="phone" id="phone" placeholder="№ телефона"
                                                   title="Введите свой номер телефона" data-validation-error-msg="Введите номер телефона" required>
                                            <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group has-feedback" style="padding-top: 20px;">
                                    <label class="control-label col-md-4 hidden" for="email">Email</label>
                                    <div class="col-md-8 col-sm-offset-4 col-xs-12">
                                        <div class="ex-wrapper">
                                            <input type="email" class="form-control ec tip special_form myfnt myinput" name="email" id="email" title="Введите свой email адрес" placeholder="Email"
                                                   data-validation="email" data-validation-error-msg="Введите свой email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback hidden">
                                    <label class="control-label col-md-4" for="delays_type">Кредитная история</label>
                                    <div class="col-md-8">
                                        <div class="ex-wrapper ex-arrow">
                                            <select class="form-control ec special_form99" name="delays_type" id="delays_type">
                                                <option selected value="never">Никогда не брал(а) кредитов</option>
                                                <option value="credit_closed_no_delay">Кредиты закрыты, просрочек не было</option>
                                                <option value="credit_open_no_delay">Кредиты есть, просрочек нет</option>
                                                <option value="credit_closed_had_delay">Кредиты закрыты, просрочки были</option>
                                                <option value="had_delay">Просрочки были, сейчас нет</option>
                                                <option value="has_delay">Просрочки сейчас есть</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-4 ex-agreement-check">
                                        <label class="checkbox-inline">
                                            <span>Я согласен на обработку персональных данных и с публичной офертой</span>
                                            <input type="checkbox" onClick="checkMee();" id="agree" value="1" checked>
                                            <i></i>
                                        </label>
                                    </div>
                                    <div class="col-md-8 col-md-offset-4 ex-agreement-check hidden">
                                        <label class="checkbox-inline">
                                            <span class="font12">Я согласен на получение рекламных сообщений</span>
                                            <input type="checkbox" id="marketing" value="1" checked>
                                            <i></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a id="next1">
                                        <div class="col-md-8 col-md-offset-4 text-right">
                                            <span id="submitOne" class="ex-main-btn hidden-sm hidden-xs myfnt">Получить деньги</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <a id="next1b">
                            <div class="col-xs-12 text-center">
                                <span id="submitOneSecond" class="ex-main-btn hidden-md hidden-lg myfnt">Получить деньги</span>
                            </div>
                        </a>
                    </div>
                </section>                </div>
            <div id="secondStep" class="tab-pane fade">
                <h2 class="text-center">Заполните паспортные данные</h2>
                <section class="container-fluid ex-main-form">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="passport">Серия и номер паспорта</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper">
                                        <input type="tel" class="form-control ec tip" id="passport" name="passport" placeholder="Серия и номер паспорта" title="Введите серию и номер паспорта"
                                               data-validation="custom" data-validation-regexp="^([0-9]{4}\s[0-9]{6})+$" data-validation-error-msg="Введите номер и серию паспорта"
                                               required>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="form-control ec" id="passport-s" name="passport_s" placeholder="0000" title="Серия паспорта"
                                   data-validation="number" data-validation-allowing="range[1;9999]" data-validation-error-msg="Пожалуйста, введите серию паспорта"
                                   required>
                            <input type="hidden" class="form-control ec" id="passport-n" name="passport_n" placeholder="000000" title="Номер паспорта"
                                   data-validation="number" data-validation-allowing="range[1;999999]" data-validation-error-msg="Пожалуйста, введите номер паспорта"
                                   required>
                            <div class="form-group hidden">
                                <label class="col-sm-4 control-label label-required hidden-xs hidden-sm">Дата выдачи*</label>
                                <div class="col-sm-2">
                                    <select class="form-control ec" id="passport_dd" name="passport_dd" required>
                                        <option value="0">День</option>
                                        <option selected value="04"></option>
                                        <option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select class="form-control ec" id="passport_mm" name="passport_mm" required>
                                        <option value="0">Месяц</option>
                                        <option value="01">Январь</option>
                                        <option value="02">Февраль</option>
                                        <option value="03">Март</option>
                                        <option value="04">Апрель</option>
                                        <option value="05">Май</option>
                                        <option selected value="06">Июнь</option>
                                        <option value="07">Июль</option>
                                        <option value="08">Август</option>
                                        <option value="09">Сентябрь</option>
                                        <option value="10">Октябрь</option>
                                        <option value="11">Ноябрь</option>
                                        <option value="12">Декабрь</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select class="form-control ec" id="passport_yyyy" name="passport_yyyy" required>
                                        <option value="0">Год</option>
                                        <option selected value="2000"></option>
                                        <option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option>                    </select>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="passportdate">Дата выдачи</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper">
                                        <input type="text" class="form-control ec tip" name="passportdate" id="passportdate" placeholder="Дата выдачи паспорта" title="Выберете дату выдачи паспорта"
                                               data-validation="custom" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Выберите дату выдачи паспорта"
                                               required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="passport_code">Код подразделения</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper">
                                        <input type="tel" class="form-control ec tip" name="passport_code" id="passport_code" placeholder="Код подразделения" title="Укажите код подразделения"
                                               data-validation="custom" data-validation-regexp="^([0-9]{3}-[0-9]{3})$" data-validation-error-msg="Укажите код подразделения"
                                               required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="passport_who">Кем выдан</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper">
                                        <input type="text" class="form-control ec tip" name="passport_who" id="passport_who" placeholder="Кем выдан паспорт" title="Укажите кем выдан паспорт"
                                               data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\№\(\)\s\d]+$"
                                               data-validation-error-msg="Укажите, кем выдан паспорт" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="birthplace">Место рождения</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper">
                                        <input type="text" class="form-control ec tip" name="birthplace" id="birthplace" placeholder="Место рождения" title="Ваше место рождения"
                                               data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                                               data-validation-error-msg="Укажите место рождения" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="region">Регион</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper ex-arrow">
                                        <select class="form-control ec tip special_form99" id="region" name="region" autocomplete="off" required>
                                            <option value="0">-- Выберите регион --</option>
                                            <option value="Алтайский край" data-id="1">Алтайский край</option><option value="Амурская область" data-id="2">Амурская область</option><option value="Архангельская область" data-id="3">Архангельская область</option><option value="Астраханская область" data-id="4">Астраханская область</option><option value="Белгородская область" data-id="5">Белгородская область</option><option value="Брянская область" data-id="6">Брянская область</option><option value="Владимирская область" data-id="7">Владимирская область</option><option value="Волгоградская область" data-id="8">Волгоградская область</option><option value="Вологодская область" data-id="9">Вологодская область</option><option value="Воронежская область" data-id="10">Воронежская область</option><option value="Еврейская автономная область" data-id="11">Еврейская автономная область</option><option value="Забайкальский край" data-id="12">Забайкальский край</option><option value="Ивановская область" data-id="13">Ивановская область</option><option value="Иркутская область" data-id="14">Иркутская область</option><option value="Калининградская область" data-id="15">Калининградская область</option><option value="Калужская область" data-id="16">Калужская область</option><option value="Камчатский край" data-id="17">Камчатский край</option><option value="Кемеровская область" data-id="18">Кемеровская область</option><option value="Кировская область" data-id="19">Кировская область</option><option value="Костромская область" data-id="20">Костромская область</option><option value="Краснодарский край" data-id="21">Краснодарский край</option><option value="Красноярский край" data-id="22">Красноярский край</option><option value="Курганская область" data-id="23">Курганская область</option><option value="Курская область" data-id="24">Курская область</option><option value="Ленинградская область" data-id="25">Ленинградская область</option><option value="Липецкая область" data-id="26">Липецкая область</option><option value="Магаданская область" data-id="27">Магаданская область</option><option value="Москва" data-id="28">Москва</option><option value="Московская область" data-id="29">Московская область</option><option value="Мурманская область" data-id="30">Мурманская область</option><option value="Ненецкий автономный округ" data-id="31">Ненецкий автономный округ</option><option value="Нижегородская область" data-id="32">Нижегородская область</option><option value="Новгородская область" data-id="33">Новгородская область</option><option value="Новосибирская область" data-id="34">Новосибирская область</option><option value="Омская область" data-id="35">Омская область</option><option value="Оренбургская область" data-id="36">Оренбургская область</option><option value="Орловская область" data-id="37">Орловская область</option><option value="Пензенская область" data-id="38">Пензенская область</option><option value="Пермский край" data-id="39" selected>Пермский край</option><option value="Приморский край" data-id="40">Приморский край</option><option value="Псковская область" data-id="41">Псковская область</option><option value="Республика Адыгея" data-id="42">Республика Адыгея</option><option value="Республика Алтай" data-id="43">Республика Алтай</option><option value="Республика Башкортостан" data-id="44">Республика Башкортостан</option><option value="Республика Бурятия" data-id="45">Республика Бурятия</option><option value="Республика Дагестан" data-id="46">Республика Дагестан</option><option value="Республика Ингушетия" data-id="47">Республика Ингушетия</option><option value="Республика Кабардино-Балкария" data-id="48">Республика Кабардино-Балкария</option><option value="Республика Калмыкия" data-id="49">Республика Калмыкия</option><option value="Республика Карачаево-Черкессия" data-id="50">Республика Карачаево-Черкессия</option><option value="Республика Карелия" data-id="51">Республика Карелия</option><option value="Республика Коми" data-id="52">Республика Коми</option><option value="Республика Марий Эл" data-id="53">Республика Марий Эл</option><option value="Республика Мордовия" data-id="54">Республика Мордовия</option><option value="Республика Саха (Якутия)" data-id="55">Республика Саха (Якутия)</option><option value="Республика Северная Осетия (Алания)" data-id="56">Республика Северная Осетия (Алания)</option><option value="Республика Татарстан" data-id="57">Республика Татарстан</option><option value="Республика Тыва (Тува)" data-id="58">Республика Тыва (Тува)</option><option value="Республика Удмуртия" data-id="59">Республика Удмуртия</option><option value="Республика Хакасия" data-id="60">Республика Хакасия</option><option value="Республика Чечня" data-id="61">Республика Чечня</option><option value="Республика Чувашия" data-id="62">Республика Чувашия</option><option value="Ростовская область" data-id="63">Ростовская область</option><option value="Рязанская область" data-id="64">Рязанская область</option><option value="Самарская область" data-id="65">Самарская область</option><option value="Санкт-Петербург" data-id="66">Санкт-Петербург</option><option value="Саратовская область" data-id="67">Саратовская область</option><option value="Сахалинская область" data-id="68">Сахалинская область</option><option value="Свердловская область" data-id="69">Свердловская область</option><option value="Смоленская область" data-id="70">Смоленская область</option><option value="Ставропольский край" data-id="71">Ставропольский край</option><option value="Тамбовская область" data-id="72">Тамбовская область</option><option value="Тверская область" data-id="73">Тверская область</option><option value="Томская область" data-id="74">Томская область</option><option value="Тульская область" data-id="75">Тульская область</option><option value="Тюменская область" data-id="76">Тюменская область</option><option value="Ульяновская область" data-id="77">Ульяновская область</option><option value="Хабаровский край" data-id="78">Хабаровский край</option><option value="Ханты-Мансийский автономный округ" data-id="79">Ханты-Мансийский автономный округ</option><option value="Челябинская область" data-id="80">Челябинская область</option><option value="Чукотский автономный округ" data-id="81">Чукотский автономный округ</option><option value="Ямало-Ненецкий автономный округ" data-id="82">Ямало-Ненецкий автономный округ</option><option value="Ярославская область" data-id="83">Ярославская область</option><option value="Республика Крым" data-id="84">Республика Крым</option><option value="Севастополь" data-id="85">Севастополь</option>                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="city">Населённый пункт</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper">
                                        <input type="text" class="form-control ec tip" name="city" id="city" title="Укажите город в котором вы живете" value="Пермь"
                                               pattern="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$"
                                               data-validation-error-msg="Укажите, населенный пункт">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="street">Улица</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper">
                                        <input type="text" class="form-control ec tip" name="street" id="street" placeholder="Улица" title="Укажите название улицы"
                                               data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$"
                                               data-validation-error-msg="Укажите, улицу" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="building">Номер дома</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper">
                                        <input type="text" class="form-control ec tip" name="building" id="building" placeholder="Номер дома" title="Укажите номер дома"
                                               data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, номер дома"
                                               required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="housing">Строение</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper">
                                        <input type="text" class="form-control ec tip" name="housing" placeholder="Строение" title="Укажите номер корпуса или строения"
                                               id="housing" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, строение (корпус)"
                                               data-validation-optional="true">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="flat">Квартира</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper">
                                        <input type="text" class="form-control ec tip" name="flat" placeholder="Квартира" title="Укажите номер квартиры" id="flat"
                                               data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, номер квартиры"
                                               data-validation-optional="true">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="reg_type">Тип регистрации</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper ex-arrow">
                                        <select class="form-control ec special_form99" name="reg_type" id="reg_type" required>
                                            <option value="1">Постоянная регистрация</option>
                                            <option value="0">Без регистрации</option>
                                            <option value="2">Временная регистрация</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback hidden">
                                <div class="col-md-9 col-md-offset-3">
                                    <div class="media">
                                        <div class="media-left">
                                            <ul class="ex-coincidence-check">
                                                <li>
                                                    <input type="radio" name="reg_same" value="1" id="f-option" checked>
                                                    <label for="f-option">Да</label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="s-option" name="selector">
                                                    <label for="s-option">Нет</label>
                                                    <div class="check">
                                                        <div class="inside"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="media-body">
                                            Регистрация совпадает с местом жительства
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-3">
                                    <a id="next2">
                                        <span id="submitTwo" class="ex-main-btn">Далее</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>                </div>
            <div id="thirdStep" class="tab-pane fade">
                <h2 class="text-center">Заполните данные о работе</h2>
                <section class="container-fluid ex-main-form">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="work">Вид трудоустройства</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper ex-arrow">
                                        <select class="form-control ec special_form99" id="work" name="work" required>
                                            <option value="ШТАТНЫЙ СОТРУДНИК">Штатный сотрудник</option>
                                            <option value="ИНДИВИДУАЛЬНЫЙ ПРЕДПРИНИМАТЕЛЬ">Индивидуальный предприниматель</option>
                                            <option value="СТУДЕНТ">Студент</option>
                                            <option value="ПЕНСИОНЕР">Пенсионер</option>
                                            <option value="БЕЗРАБОТНЫЙ">Безработный</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="work_name">Место работы</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper">
                                        <input type="text" class="form-control ec tip" name="work_name" id="work_name" placeholder="Место работы" title="Укажите, ваше место работы"
                                               data-sanitize="capitalize" data-validation="custom" data-validation-regexp='^[А-Яа-яЁё\d\s\-\,\№\#\.\+\(\)"]+$' data-validation-error-msg="Укажите, ваше место работы"
                                               required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="work_occupation">Должность</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper">
                                        <input type="text" class="form-control ec tip" name="work_occupation" id="work_occupation" placeholder="Должность" title="Укажите, вашу должность"
                                               data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Укажите, вашу должность"
                                               required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="work_phonephone">Рабочий телефон</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper">
                                        <input type="tel" class="form-control ec tip" name="work_phone" placeholder="Рабочий телефон" title="Введите ваш рабочий телефон"
                                               id="work_phone" data-validation="custom" data-validation-regexp="^[8]\s\([0-9]{3}\)\s[0-9]{3}\s[0-9]{4}$" data-validation-error-msg="Введите ваш рабочий телефон"
                                               data-validation-optional="true">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="work_experience">Стаж работы(в месяцах)</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper">
                                        <input type="tel" class="form-control ec tip" min="0" max="360" placeholder="Стаж работы в месяцах" name="work_experience"
                                               id="work_experience" title="Введите ваш стаж работы в месяцах" data-validation="number" data-validation-error-msg="Введите ваш стаж работы в месяцах"
                                               required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="work_salary">Зарплата(в рублях)</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper">
                                        <input type="tel" class="form-control ec tip" name="work_salary" id="work_salary" maxlength="6" placeholder="Зарплата в рублях" title="Введите вашу среднюю зарплату"
                                               data-validation="number" data-validation-error-msg="Введите среднюю зарплату" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="work_region">Регион</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper ex-arrow">
                                        <select class="form-control ec tip special_form99" name="work_region" id="work_region" autocomplete="off" required>
                                            <option value="0">!!! Выберите регион места работы !!!</option>
                                            <option value="Алтайский край" data-id="1">Алтайский край</option><option value="Амурская область" data-id="2">Амурская область</option><option value="Архангельская область" data-id="3">Архангельская область</option><option value="Астраханская область" data-id="4">Астраханская область</option><option value="Белгородская область" data-id="5">Белгородская область</option><option value="Брянская область" data-id="6">Брянская область</option><option value="Владимирская область" data-id="7">Владимирская область</option><option value="Волгоградская область" data-id="8">Волгоградская область</option><option value="Вологодская область" data-id="9">Вологодская область</option><option value="Воронежская область" data-id="10">Воронежская область</option><option value="Еврейская автономная область" data-id="11">Еврейская автономная область</option><option value="Забайкальский край" data-id="12">Забайкальский край</option><option value="Ивановская область" data-id="13">Ивановская область</option><option value="Иркутская область" data-id="14">Иркутская область</option><option value="Калининградская область" data-id="15">Калининградская область</option><option value="Калужская область" data-id="16">Калужская область</option><option value="Камчатский край" data-id="17">Камчатский край</option><option value="Кемеровская область" data-id="18">Кемеровская область</option><option value="Кировская область" data-id="19">Кировская область</option><option value="Костромская область" data-id="20">Костромская область</option><option value="Краснодарский край" data-id="21">Краснодарский край</option><option value="Красноярский край" data-id="22">Красноярский край</option><option value="Курганская область" data-id="23">Курганская область</option><option value="Курская область" data-id="24">Курская область</option><option value="Ленинградская область" data-id="25">Ленинградская область</option><option value="Липецкая область" data-id="26">Липецкая область</option><option value="Магаданская область" data-id="27">Магаданская область</option><option value="Москва" data-id="28">Москва</option><option value="Московская область" data-id="29">Московская область</option><option value="Мурманская область" data-id="30">Мурманская область</option><option value="Ненецкий автономный округ" data-id="31">Ненецкий автономный округ</option><option value="Нижегородская область" data-id="32">Нижегородская область</option><option value="Новгородская область" data-id="33">Новгородская область</option><option value="Новосибирская область" data-id="34">Новосибирская область</option><option value="Омская область" data-id="35">Омская область</option><option value="Оренбургская область" data-id="36">Оренбургская область</option><option value="Орловская область" data-id="37">Орловская область</option><option value="Пензенская область" data-id="38">Пензенская область</option><option value="Пермский край" data-id="39" selected>Пермский край</option><option value="Приморский край" data-id="40">Приморский край</option><option value="Псковская область" data-id="41">Псковская область</option><option value="Республика Адыгея" data-id="42">Республика Адыгея</option><option value="Республика Алтай" data-id="43">Республика Алтай</option><option value="Республика Башкортостан" data-id="44">Республика Башкортостан</option><option value="Республика Бурятия" data-id="45">Республика Бурятия</option><option value="Республика Дагестан" data-id="46">Республика Дагестан</option><option value="Республика Ингушетия" data-id="47">Республика Ингушетия</option><option value="Республика Кабардино-Балкария" data-id="48">Республика Кабардино-Балкария</option><option value="Республика Калмыкия" data-id="49">Республика Калмыкия</option><option value="Республика Карачаево-Черкессия" data-id="50">Республика Карачаево-Черкессия</option><option value="Республика Карелия" data-id="51">Республика Карелия</option><option value="Республика Коми" data-id="52">Республика Коми</option><option value="Республика Марий Эл" data-id="53">Республика Марий Эл</option><option value="Республика Мордовия" data-id="54">Республика Мордовия</option><option value="Республика Саха (Якутия)" data-id="55">Республика Саха (Якутия)</option><option value="Республика Северная Осетия (Алания)" data-id="56">Республика Северная Осетия (Алания)</option><option value="Республика Татарстан" data-id="57">Республика Татарстан</option><option value="Республика Тыва (Тува)" data-id="58">Республика Тыва (Тува)</option><option value="Республика Удмуртия" data-id="59">Республика Удмуртия</option><option value="Республика Хакасия" data-id="60">Республика Хакасия</option><option value="Республика Чечня" data-id="61">Республика Чечня</option><option value="Республика Чувашия" data-id="62">Республика Чувашия</option><option value="Ростовская область" data-id="63">Ростовская область</option><option value="Рязанская область" data-id="64">Рязанская область</option><option value="Самарская область" data-id="65">Самарская область</option><option value="Санкт-Петербург" data-id="66">Санкт-Петербург</option><option value="Саратовская область" data-id="67">Саратовская область</option><option value="Сахалинская область" data-id="68">Сахалинская область</option><option value="Свердловская область" data-id="69">Свердловская область</option><option value="Смоленская область" data-id="70">Смоленская область</option><option value="Ставропольский край" data-id="71">Ставропольский край</option><option value="Тамбовская область" data-id="72">Тамбовская область</option><option value="Тверская область" data-id="73">Тверская область</option><option value="Томская область" data-id="74">Томская область</option><option value="Тульская область" data-id="75">Тульская область</option><option value="Тюменская область" data-id="76">Тюменская область</option><option value="Ульяновская область" data-id="77">Ульяновская область</option><option value="Хабаровский край" data-id="78">Хабаровский край</option><option value="Ханты-Мансийский автономный округ" data-id="79">Ханты-Мансийский автономный округ</option><option value="Челябинская область" data-id="80">Челябинская область</option><option value="Чукотский автономный округ" data-id="81">Чукотский автономный округ</option><option value="Ямало-Ненецкий автономный округ" data-id="82">Ямало-Ненецкий автономный округ</option><option value="Ярославская область" data-id="83">Ярославская область</option><option value="Республика Крым" data-id="84">Республика Крым</option><option value="Севастополь" data-id="85">Севастополь</option>            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="work_city">Населённый пункт</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper">
                                        <input type="text" class="form-control ec tip" name="work_city" placeholder="Город" title="Укажите населенный пункт"
                                               id="work_city" value="Пермь" data-sanitize="capitalize" data-validation="custom"
                                               data-validation-regexp="^[А-Яа-яЁё\-\.\(\)\s]+$" data-validation-error-msg="Укажите, населенный пункт"
                                               required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="work_street">Улица</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper">
                                        <input type="text" class="form-control ec tip" name="work_street" placeholder="Улица" title="Укажите улицу" id="work_street"
                                               data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё\d\s\-\,\#\.\+\(\)]+$" data-validation-error-msg="Укажите, улицу"
                                               required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="work_house">Номер дома</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper">
                                        <input type="text" class="form-control ec tip" name="work_house" placeholder="Номер дома" title="Укажите номер дома"
                                               id="work_house" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, номер дома"
                                               required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label col-md-3" for="work_office">Офис</label>
                                <div class="col-md-9">
                                    <div class="ex-wrapper">
                                        <input type="text" class="form-control ec tip" name="work_office" placeholder="Номер офиса" title="Уукажите номер офиса"
                                               id="work_office" data-validation="custom" data-validation-regexp="^[А-Яа-яЁё0-9\-\.\(\)\s]+$" data-validation-error-msg="Укажите, номер офиса"
                                               data-validation-optional="true">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-3 text-right">
                                    <a id="getmoney"><button class="ex-main-btn">Получить деньги</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>                </div>
        </div>
    </form>
</main>
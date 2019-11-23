<?php
include_once ('sections/header.php');
?>

<h1>cascade-menu-js by MaxMaxvvellh0use</h1>

<form class="create-new-catalog" id="drop-menu" method="post" novalidate>
    <div class="header-new-advert">
        <h2>Новое объявление</h2>
    </div>
    <div id="category">
        <div id="cascader-list" data-lvl="0" class="cascader-list">
            <div  class="category-name">Категория</div>
            <div data-id="1" class="category-drop">Транспорт</div>
            <div data-id="2" class="category-drop">Недвижимость</div>
            <div data-id="3" class="category-drop">Работа</div>
            <div data-id="4" class="category-drop">Услуги</div>
            <div data-id="5" class="category-drop">Личные вещи</div>
            <div data-id="6" class="category-drop">Для дома и дачи</div>
            <div data-id="7" class="category-drop">Другие категории</div>
        </div>
        <div data-lvl="1" class="cascader-list2">
            <div class="category-name">Транспорт</div>
            <div data-id="8"  data-lvl="1" class="category-drop">Мотоциклы и мототехника</div>
            <div data-id="9"  data-lvl="1" class="category-drop">Грузовики и спецтехника</div>
            <div data-id="10"  data-lvl="1" class="category-drop">Водный транспорт</div>
            <div data-id="11"  data-lvl="1" class="category-drop">Запчасти и аксессуары</div>
        </div>
        <div data-lvl="9" class="cascader-list3">
            <div class="category-name">Грузовики и спецтехника</div>
            <div data-id="12" class="category-drop">Автобусы</div>
            <div data-id="13" class="category-drop">Автодома</div>
            <div data-id="14" class="category-drop">Автокраны</div>
            <div data-id="15" class="category-drop">Бульдозеры</div>
            <div data-id="16" class="category-drop">Грузовики</div>
            <div data-id="17" class="category-drop">Коммунальная техника</div>
            <div data-id="18" class="category-drop">Лёгкий транспорт</div>
            <div data-id="19" class="category-drop">Погрузчики</div>
            <div data-id="20" class="category-drop">Прицепы</div>
            <div data-id="21" class="category-drop">Сельхозтехника</div>
            <div data-id="22" class="category-drop">Строительная техника</div>
            <div data-id="23" class="category-drop">Техника для лесозаготовки</div>
            <div data-id="24" class="category-drop">Тягачи</div>
            <div data-id="25" class="category-drop">Экскаваторы</div>
        </div>
        <div data-lvl="10" class="cascader-list3">
            <div class="category-name">Водный транспорт</div>
            <div data-id="26" class="category-drop">Вёсельные лодки</div>
            <div data-id="27" class="category-drop">Гидроциклы</div>
            <div data-id="28" class="category-drop">Гидроциклы</div>
            <div data-id="29" class="category-drop">Катера и яхты</div>
            <div data-id="30" class="category-drop">Каяки и каноэ</div>
            <div data-id="31" class="category-drop">Моторные лодки</div>
            <div data-id="32" class="category-drop">Надувные лодки</div>
        </div>
        <div data-lvl="11" class="cascader-list3">
            <div class="category-name">Запчасти и аксессуары</div>
            <div data-id="33" class="category-drop">Аудио и видеотехника</div>
            <div data-id="34" class="category-drop">Запчасти</div>
            <div data-id="35" class="category-drop">Аксессуары</div>
            <div data-id="36" class="category-drop">Услуги</div>
            <div data-id="37" class="category-drop">GPS-навигаторы</div>
            <div data-id="38" class="category-drop">Автокосметика</div>
            <div data-id="39" class="category-drop">Другие категории</div>
            <div data-id="40" class="category-drop">Багажники и фаркопы</div>
            <div data-id="41" class="category-drop">Инструменты</div>
            <div data-id="42" class="category-drop">Прицепы</div>
            <div data-id="43" class="category-drop">Противоугонные устройства</div>
            <div data-id="44" class="category-drop">Тюнинг</div>
            <div data-id="45" class="category-drop">Шины, диски и колёса</div>
            <div data-id="46" class="category-drop">Экипировка</div>
        </div>
        <div data-lvl="2" class="cascader-list2">
            <div class="category-name">Недвижимость</div>
            <div data-id="47" class="category-drop">Квартиры</div>
            <div data-id="48" class="category-drop">Комнаты</div>
            <div data-id="49" class="category-drop">Дома, дачи, коттеджи</div>
            <div data-id="50" class="category-drop">Земельные участки</div>
            <div data-id="51" class="category-drop">Гаражи и машиноместа</div>
            <div data-id="52" class="category-drop">Коммерческая недвижимость</div>
            <div data-id="53" class="category-drop">Недвижимость за рубежом</div>
        </div>
        <div data-lvl="3" class="cascader-list2">
            <div class="category-name">Работа</div>
            <div data-id="54" class="category-drop">Вакансии</div>
            <div data-id="55" class="category-drop">Резюме</div>
        </div>
        <div data-lvl="4" class="cascader-list2">
            <div class="category-name">Услуги</div>
            <div data-id="56" class="category-drop">Запросы на услуги</div>
            <div data-id="57" class="category-drop">Предложения услуг</div>
        </div>
        <div data-lvl="5" class="cascader-list2">
            <div class="category-name">Личные вещи</div>
            <div data-id="58" class="category-drop">Одежда, обувь, аксессуары</div>
            <div data-id="59" class="category-drop">Детская одежда и обувь</div>
            <div data-id="60" class="category-drop">Товары для детей и игрушки</div>
            <div data-id="61" class="category-drop">Часы и украшения</div>
            <div data-id="62" class="category-drop">Красота и здоровье</div>
        </div>
        <div data-lvl="6" data-id="6" class="cascader-list2">
            <div class="category-name">Для дома и дачи</div>
            <div data-id="63" class="category-drop">Бытовая техника</div>
            <div data-id="64" class="category-drop">Мебель и интерьер</div>
            <div data-id="65" class="category-drop">Посуда и товары для кухни</div>
            <div data-id="66" class="category-drop">Продукты питания</div>
            <div data-id="67" class="category-drop">Ремонт и строительство</div>
            <div data-id="68" class="category-drop">Растения</div>
        </div>
        <div data-lvl="7" class="cascader-list3">
            <div class="category-name">Другие категории</div>
            <div data-id="69" class="category-drop">Бытовая электроника</div>
            <div data-id="70" class="category-drop">Хобби и отдых</div>
            <div data-id="71" class="category-drop">Животные</div>
            <div data-id="72" class="category-drop">Для бизнеса</div>
        </div>
        <div data-lvl="69" class="cascader-list3">
            <div class="category-name">Бытовая электроника</div>
            <div data-id="73" class="category-drop">Аксессуары и запчасти для электроники</div>
            <div data-id="74" class="category-drop">Игры, приставки и программы</div>
            <div data-id="75" class="category-drop">Настольные компьютеры</div>
            <div data-id="76" class="category-drop">Ноутбуки</div>
            <div data-id="77" class="category-drop">Оргтехника и расходники</div>
            <div data-id="78" class="category-drop">Планшеты и электронные книги</div>
            <div data-id="79" class="category-drop">Телефоны</div>
            <div data-id="80" class="category-drop">Товары для компьютера</div>
            <div data-id="81" class="category-drop">Фототехника</div>
        </div>
        <div data-lvl="70"  class="cascader-list3">
            <div class="category-name">Хобби и отдых</div>
            <div data-id="82" class="category-drop">Билеты и путешествия</div>
            <div data-id="83" class="category-drop">Велосипеды</div>
            <div data-id="84" class="category-drop">Книги и журналы</div>
            <div data-id="85" class="category-drop">Коллекционирование</div>
            <div data-id="86" class="category-drop">Музыкальные инструменты</div>
            <div data-id="87" class="category-drop">Охота и рыбалка</div>
            <div data-id="88" class="category-drop">Спорт и отдых</div>
        </div>
        <div data-lvl="71" class="cascader-list3">
            <div class="category-name">Животные</div>
            <div data-id="89" class="category-drop">Собаки</div>
            <div data-id="90" class="category-drop">Кошки</div>
            <div data-id="91" class="category-drop">Птицы</div>
            <div data-id="92" class="category-drop">Аквариум</div>
            <div data-id="93" class="category-drop">Другие животные</div>
            <div data-id="94" class="category-drop">Товары для животных</div>
        </div>
        <div data-lvl="72" class="cascader-list3">
            <div class="category-name">Для бизнеса</div>
            <div data-id="95" class="category-drop">Готовый бизнес</div>
            <div data-id="96" class="category-drop">Оборудование для бизнеса</div>
            <div data-id="97" class="category-drop">Промышленное оборудование</div>
            <div data-id="98" class="category-drop">Реализация и закупки</div>
            <div data-id="99" class="category-drop">Торговое оборудование</div>
            <div data-id="100" class="category-drop">Услуги для бизнеса</div>
        </div>
    </div>



</form>
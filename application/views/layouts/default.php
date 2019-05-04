<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
<!--	<script src="/public/scripts/jquery.js"></script>-->
<!--	<script src="/public/scripts/form.js"></script>-->
    <style>
        .c {
            border: 1px solid #333; /* Рамка */
            display: inline-block;
            padding: 5px 15px; /* Поля */
            text-decoration: none; /* Убираем подчёркивание */
            color: #000; /* Цвет текста */
        }
        .c:hover {
            box-shadow: 0 0 5px rgba(0,0,0,0.3); /* Тень */
            background: linear-gradient(to bottom, #fcfff4, #e9e9ce); /* Градиент */
            color: #a00;
        }


        /* === Remove input autofocus webkit === */
        *:focus {outline: none;}

        /* === Øðèôòû äëÿ ôîðìû è îáùàÿ øèðèíà === */
        body {font: 14px/21px "Lucida Sans", "Lucida Grande", "Lucida Sans Unicode", sans-serif;}
        .contact_form h2, .contact_form label {font-family:Georgia, Times, "Times New Roman", serif;}
        .form_hint, .required_notification {font-size: 11px;}

        .contact_form {
            width:700px;
        }

        /* === Øèðèíà ôîðìû === */
        .contact_form p {
            width:650px;
            margin:7px 10px 7px 10px;
            padding:0px;
        }

        /* === Ðàçìåð è ðàñïîëîæåíèå áëîêîâ === */
        .contact_form label {
            width:150px;
            margin-top: 3px;
            display:inline-block;
            float:left;
            padding:3px;
        }
        .contact_form input {
            height:20px;
            width:220px;
            padding:5px 8px;
        }
        .contact_form textarea {padding:8px; width:300px;}
        .contact_form button {margin-left:156px;}

        /* Öâåòà è ýôôåêòû */
        .contact_form input, .contact_form textarea , .contact_form select {
            border:1px solid #aaa;
            box-shadow: 0px 0px 3px #ccc, 0 10px 15px #eee inset;
            border-radius:2px;
            padding-right:30px;
            -moz-transition: padding .25s;
            -webkit-transition: padding .25s;
            -o-transition: padding .25s;
            transition: padding .25s;
        }
        .contact_form input:focus, .contact_form textarea:focus , .contact_form select:focus {
            background: #fff;
            border:1px solid #555;
            box-shadow: 0 0 3px #aaa;
            padding-right:70px;
        }

        /* === HTML5  === */
        .contact_form input:required, .contact_form textarea:required .contact_form select:required{
            background: #fff no-repeat 98% center;
        }
        .contact_form input:required:valid, .contact_form textarea:required:valid , .contact_form select:required:valid {
            background: #fff no-repeat 98% center;
            box-shadow: 0 0 5px #5cd053;
            border-color: #28921f;
        }
        .contact_form input:focus:invalid, .contact_form textarea:focus:invalid , .contact_form select:focus:invalid {
            background: #fff no-repeat 98% center;
            box-shadow: 0 0 5px #d45252;
            border-color: #b03535
        }

        /* === Ñòèëè ïîäñêàçîê === */
        .form_hint {
            background: #d45252;
            border-radius: 3px 3px 3px 3px;
            color: white;
            margin-left:8px;
            padding: 1px 6px;
            z-index: 999; /* ïîäñêàçêè ïîâåðõ âñåõ ýëåìåíòîâ */
            position: absolute; /* ïðàâèëüíîå îòîáðàæåíèå, åñëè ïîäñêàçêà â 2 ñòðîêè */
            display: none;
        }
        .form_hint::before {
            content: "\25C0";
            color:#d45252;
            position: absolute;
            top:1px;
            left:-6px;
        }
        .contact_form input:focus + .form_hint {display: inline;}
        .contact_form input:required:valid + .form_hint {background: #28921f;}
        .contact_form input:required:valid + .form_hint::before {color:#28921f;}
        .contact_form select{
            height: 32px;
            width: 260px;
        }
        .contact_form select:checked{

            border:1px solid #555;
            box-shadow: 0 0 3px #aaa;
            padding-right:70px;
        }

        /* === Îôîðìëåíèå êíîïêè === */
        button.submit {
            background-color: #68b12f;
            background: -webkit-gradient(linear, left top, left bottom, from(#68b12f), to(#50911e));
            background: -webkit-linear-gradient(top, #68b12f, #50911e);
            background: -moz-linear-gradient(top, #68b12f, #50911e);
            background: -ms-linear-gradient(top, #68b12f, #50911e);
            background: -o-linear-gradient(top, #68b12f, #50911e);
            background: linear-gradient(top, #68b12f, #50911e);
            border: 1px solid #509111;
            border-bottom: 1px solid #5b992b;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            -o-border-radius: 3px;
            box-shadow: inset 0 1px 0 0 #9fd574;
            -webkit-box-shadow: 0 1px 0 0 #9fd574 inset ;
            -moz-box-shadow: 0 1px 0 0 #9fd574 inset;
            -ms-box-shadow: 0 1px 0 0 #9fd574 inset;
            -o-box-shadow: 0 1px 0 0 #9fd574 inset;
            color: white;
            font-weight: bold;
            padding: 6px 20px;
            text-align: center;
            text-shadow: 0 -1px 0 #396715;
        }
        button.submit:hover {
            opacity:.85;
            cursor: pointer;
        }
        button.submit:active {
            border: 1px solid #20911e;
            box-shadow: 0 0 10px 5px #356b0b inset;
            -webkit-box-shadow:0 0 10px 5px #356b0b inset ;
            -moz-box-shadow: 0 0 10px 5px #356b0b inset;
            -ms-box-shadow: 0 0 10px 5px #356b0b inset;
            -o-box-shadow: 0 0 10px 5px #356b0b inset;

        }



    </style>
</head>
<body>
	<?php echo $content; ?>
</body>
</html>
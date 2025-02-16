<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat:400,700&subset=cyrillic" rel="stylesheet">
    <script src="{{ asset('4326f6cda5.js') }}"></script>
    <title>CSS - Final Project</title>

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        header {
            width: 100%;
            height: 100vh;
            position: relative;
        }

        header::after {
            content: " ";
            background-image: url('https://i.imgur.com/5xAkZg9.jpg');
            background-position: left;
            background-size: cover;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            z-index: -1;
            opacity: 0.7;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            height: 77px;
            z-index: 100;
            padding: 0 28px;
            box-sizing: border-box;
        }

        #logo {
            width: 40px;
        }

        a {
            text-decoration: none;
        }

        ul {
            list-style-type: none;
        }

        nav {
            background-color: #fff;
        }

        #top-menu>li{
            display: inline-block;
            margin-right: 24px;
        }

        #top-menu li a {
            color: #000;
            font-weight: 600;
            font-size: 14px;
        }

        #top-menu i {
            padding-left: 4px;
        }

        #top-menu>li:last-of-type a {
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 600;
            color: white;
            background-color: rgb(170, 210, 54);
            padding: 7.5px 34px;
            border: 0;
            border-radius: 4px;
            margin-right: 16px;
        }

        #top-menu>li:last-of-type {
            margin: 0;
        }

        #drop-menu {
            position: relative;
        }

        #dropdown-menu {
            display: none;
            box-shadow: 0 2px 5px #ccc;
            border-top: 2px solid rgb(170, 210, 54);
            position: absolute;
            padding: 20px;
            right: 0;
            width: 150px;
            background-color: #fff;
        }

        #drop-menu:hover #dropdown-menu {
            display: block;
        }

        #dropdown-menu li {
            border-bottom: 1px solid #ccc;
            padding: 4px;
        }

        #dropdown-menu li a {
            font-size: 1.1em;
            font-weight: 100;
        }

        #header-desc {
            width: 80%;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        h1, h2 {
            font-size: 44px;
        }

        h1 {
            font-weight: 600;
            letter-spacing: 8.8px;
            line-height: 1.2;
            text-align: center;
        }

        #header-desc p {
            font-size: 14px;
            letter-spacing: 0.5px;
            font-weight: 400;
            color: #8b8b99;
            padding-top: 32px;
            text-align: center;
        }

        #steps {
            display: grid;
            grid-template-columns: auto auto auto auto;
        }

        #steps article {
            text-align: center;
            padding: 112px 7px;
            color: #fff;
        }

        #steps i {
            font-size: 96px;
            transition: all 0.2s;
        }

        #steps h3{
            font-weight: 600;
            font-size: 1.5em;
            margin: 20px 0;
        }

        #steps p {
            font-size: 14px;
            letter-spacing: 0.5px;
            line-height: 1.6;
        }

        #steps article:hover i{
            transform: scale(1.1, 1.1);
        }

        #store {
            width: 100%;
            background-color: #f7eee2;
            padding: 75px 0;
            text-align: center;
        }

        .italic-par {
            color: #91ac41;
            font-size: 24px;
            font-family: 'Caveat', cursive;
            margin: 0;
            margin-top: 35px;
        }

        #store h2, #comments h2 {
            font-weight: 600;
            margin: 0;
            margin-bottom: 8px;
        }

        #gray-desc {
            font-size: 16px;
            font-weight: 500;
            margin: 0;
            margin-bottom: 0px;
            color: #8b8b99;
            letter-spacing: 0.5px;
            margin-bottom: 55px;
        }

        #store-items {
            width: 100%;
            max-width: 1140px;
            display: grid;
            grid-template-columns: auto auto auto auto;
            margin: 0 auto;
        }

        #store-items article {
            text-align: center;
            padding: 24px;
        }

        #store-items div{
            display: inline-block;
            background-color: #e3b375;
            border-radius: 50%;
            padding: 40px;
            transition: all 0.3s;
        }

        #store-items i {
            background-color: #e3b375;
            color: #fff;
            font-size: 60px;
        }

        #store-items article:hover div {
            transform: scale(1.1, 1.1);
        }

        #store-items h3 {
            font-size: 24px;
            font-weight: 600;
        }

        #store-items p {
            font-size: 16px;
            letter-spacing: 0.5px;
            font-weight: 500;
            color: #8b8b99;
        }

        #comments {
            text-align: center;
            width: 100%;
            padding: 75px 0;
        }

        #comments-items {
            width: 100%;
            max-width: 1140px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: auto auto auto;
        }

        #comments article {
            text-align: center;
            background-color: #f5f6fb;
            padding: 40px 30px;
            margin: 16px;
            border-top-left-radius: 45px;
            border-bottom-left-radius: 45px;
            border-bottom-right-radius: 45px;
            transition: box-shadow 0.3s;
        }

        #comments article:hover {
            box-shadow: 0 12px 16px 0 rgba(39,39,47,0.06);
        }

        #comments img {
            width: 80px;
            border-radius: 50%;
        }

        #comments article p:first-of-type {
            font-size: 14px;
            color: #8b8b99;
            letter-spacing: 0.5px;
            font-style: italic;
            margin: 0;
        }

        #comments article p:last-of-type {
            color: #8b8b99;
            font-size: 12px;
            font-style: italic;
            letter-spacing: 0.5px;
            margin: 0;
        }

        #comments h3 {
            text-transform: uppercase;
            font-size: 16px;
            font-weight: 600;
            margin-top: 24px;
            margin-bottom: 0px;
        }

        #follow {
            display: flex;
            justify-content: space-between;
        }

        #follow #left-bar {
            width: 68%;
        }

        #follow #right-bar {
            width: 33.33%;
            text-align: left;
            padding: 115px;
            position: relative;
            box-sizing: border-box;
        }

        #follow #right-bar::after {
            content: " ";
            background-image: url('https://i.imgur.com/1m096Jy.jpg');
            background-position: left;
            background-size: cover;
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            opacity: 0.7;
            z-index: -1;
        }

        #follow img {
            width: 100%;
        }

        #follow p {
            color: #8b8b99;
            font-size: 16px;
            letter-spacing: 0.5;
            line-height: 1.6;
            margin: 0;
        }

        #follow h2 {
            font-weight: 600;
            margin: 0 0 8px;
        }

        #email {
            width: 100%;
            box-sizing: border-box;
            border: 0;
            border-radius: 4px;
            font-weight: 500;
            background-color: white;
            padding: 12px;
            color: #8b8b99;
            font-size: 16px;
            margin-top: 60px;
        }

        #submit-btn {
            background-color: #f69dad;
            padding: 16px 42px;
            border-radius: 4px;
            cursor: pointer;
            color: white;
            border: 0;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            margin-top: 16px;
            border: 1px solid transparent;
        }

        #submit-btn:hover {
            color: #f69dad;
            border: 1px solid #f69dad;
            background-color: #fff;
        }

        #rates {
            width: 100%;
            background-color: #f6fcfa;
        }

        #rates-wrap {
            width: 100%;
            margin: 0 auto;
            max-width: 1140px;
            padding: 100px 0;
            display: flex;
        }

        #rates .rates-block {
            width: 25%;
            padding: 0 64px;
            text-align: center;
        }

        #rates h3 {
            margin: 0;
            font-size: 44px;
            font-weight: 600;
        }

        #rates p {
            margin: 0;
            color: #57e3b5;
            font-size: 14px;
            letter-spacing: 0.5px;
            font-style: italic;
        }

        #vimeo h2 {
            text-align: center;
            color: #8b8b99;
            font-weight: 400;
            position: relative;
            padding-bottom: 36px;
        }

        #vimeo h2::after {
            content: " ";
            width: 96px;
            height: 1px;
            background-color: #e4b476;
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translate(-50%, 0);
        }

        #vimeo div {
            width: 100%;
            max-width: 1140px;
            margin: 0 auto;
            text-align: center;
        }

        iframe {
            width: 100%;
            height: 425px;
            border: 0;
        }

        #contacts {
            width: 100%;
        }

        #contacts-wrap {
            width: 100%;
            margin: 0 auto;
            max-width: 1140px;
            display: flex;
            justify-content: space-between;
            padding: 100px 0;
        }

        #contacts .left-block {
            width: 50%;
        }

        #contacts .right-block {
            width: 40%;
        }

        #contacts h2 {
            margin: 0;
        }

        .contacts-desc {
            font-size: 16px;
            font-weight: 400;
            color: #8b8b99;
            letter-spacing: 0.5px;
        }

        .contacts-break {
            font-size: 16px;
            font-weight: 400;
            color: #8b8b99;
            letter-spacing: 0.5px;
            line-height: 2;
            margin: 0;
        }

        input, textarea {
            font-family: 'Poppins', sans-serif;
            outline: none;
        }

        #contacts .input-item {
            width: 100%;
            padding: 16px;
            font-size: 16px;
            color: #8b8b99;
            border-radius: 6px;
            border: 1px solid #e5e6ec;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        #contacts #btn-submit {
            font-weight: 600;
            color: white;
            background-color: rgb(170, 210, 54);
            padding: 9px 34px;
            text-transform: uppercase;
            border: 0;
            border-radius: 4px;
            margin-right: 16px;
            cursor: pointer;
            font-size: 16px;
        }

        footer {
            padding: 30px 0;
            text-align: center;
            color: #fff;
            background-color: rgb(98, 215, 153);
            font-size: 14px;
            letter-spacing: 0.5px	;
        }

        footer p {
            margin: 0;
        }

        @media screen and (min-width:1200px) and (max-width:1314px) {

            #follow #right-bar {
                padding: 50px;
            }

        }

        @media screen and (min-width:900px) and (max-width:1199px)  {
            #follow #left-bar {
                width: 60%;
            }

            #follow #right-bar {
                width: 40%;
                padding: 0 30px;
            }

            #email {
                margin-top: 30px;
            }

            #contacts {
                padding: 20px;
                box-sizing: border-box;
            }

            h2 {
                font-size: 36px;
            }
        }


        @media screen and (max-width:900px) {

            #top-menu>li:last-of-type a {
                margin-right: 0;
            }

            h1 {
                font-size: 28px;
            }

            #header-desc {
                width: 90%;
            }

            #header-desc p {
                padding: 16px;

            }

            #steps, #store-items {
                grid-template-columns: auto auto;
            }

            #store, #comments {
                padding: 20px 0;
            }

            #comments-items {
                grid-template-columns: auto;
            }

            #follow {
                flex-direction: column;
            }

            #follow #right-bar, #follow #left-bar {
                width: 100%;
            }

            #follow #right-bar {
                padding: 20px;
            }

            #rates-wrap {
                flex-wrap: wrap;
                padding: 40px 0;
            }

            #rates .rates-block {
                width: 50%;
                padding: 0;
            }

            #contacts {
                box-sizing: border-box;
                padding: 20px;
            }

            #contacts-wrap {
                flex-direction: column;
                padding: 0;
            }

            #contacts .right-block, #contacts .left-block {
                width: 100%;
            }

            h2 {
                font-size: 30px;
            }

        }

        @media only screen and (max-width:600px) {
            #top-menu .menu-item {
                display: none;
            }

            #steps, #store-items {
                grid-template-columns: auto;
            }

            #vimeo h2::after {
                bottom: 25%;
            }

            iframe {
                height: 360px;
            }

        }

        @media only screen and (max-width:400px) {
            #top-menu .menu-item {
                display: none;
            }

            h2 {
                font-size: 26px;
            }

            #rates .rates-block {
                width: 100%;
            }

        }
    </style>
</head>
<body>
<main>
    Время           | {{ $reminder->date }}<br>
    Организация     | {{ $reminder->desc }}<br>
    Примечания      | {{ $reminder->name }}<br>
</main>
<p>© Copyright <?=date('Y')?> {{ env("APP_NAME") }} - All Rights Reserved</p>

</body>
</html>

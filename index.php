<<<<<<< HEAD
{\rtf1\ansi\ansicpg1252\cocoartf1561\cocoasubrtf200
{\fonttbl\f0\fswiss\fcharset0 Helvetica;\f1\fmodern\fcharset0 Courier;\f2\fnil\fcharset0 Monaco;
}
{\colortbl;\red255\green255\blue255;\red0\green0\blue0;\red255\green255\blue255;\red0\green0\blue173;
\red13\green103\blue1;\red210\green0\blue5;}
{\*\expandedcolortbl;;\cssrgb\c0\c0\c0;\cssrgb\c100000\c100000\c100000;\cssrgb\c0\c0\c73333;
\cssrgb\c0\c46667\c0;\cssrgb\c86667\c0\c0;}
\paperw11900\paperh16840\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\pard\tx566\tx1133\tx1700\tx2267\tx2834\tx3401\tx3968\tx4535\tx5102\tx5669\tx6236\tx6803\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <!DOCTYPE html>\
<html lang="en">\
  <head>\
    <meta charset="utf-8">\
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">\
    <meta name="theme-color" content="#000000">\
\
    <!-- <link href="../src/components/Header/burger.css" rel="stylesheet"> -->\
\
    <!--\
      manifest.json provides metadata used when your web app is added to the\
      homescreen on Android. See https://developers.google.com/web/fundamentals/engage-and-retain/web-app-manifest/\
    -->\
    <!--\
      Notice the use of %PUBLIC_URL% in the tags above.\
      It will be replaced with the URL of the public folder during the build.\
      Only files inside the public folder can be referenced from the HTML.\
      Unlike "/favicon.ico" or "favicon.ico", "%PUBLIC_URL%/favicon.ico" will\
      work correctly both with client-side routing and a non-root public URL.\
      Learn how to configure a non-root public URL by running npm run build.\
    -->\
    <title>Igorrrj</title>\
\
  </head>\
  <body>\
\
   <h1>IGOR2</h1>\
\pard\pardeftab720\sl320\partightenfactor0

\f1\fs28 \cf2 \cb3 \expnd0\expndtw0\kerning0
\'a0\cf4 <?php\'a0\cf5 echo\'a0\cf6 '<p>
\f2 \uc0\u1055 \u1088 \u1080 \u1074 \u1077 \u1090 
\f1 ,\'a0
\f2 \uc0\u1084 \u1080 \u1088 
\f1 !</p>'\cf5 ;\'a0\cf4 ?>\cb1 \
\pard\tx566\tx1133\tx1700\tx2267\tx2834\tx3401\tx3968\tx4535\tx5102\tx5669\tx6236\tx6803\pardirnatural\partightenfactor0

\f0\fs24 \cf0 \kerning1\expnd0\expndtw0 \
\
  </body>\
</html>}
=======
<?php
/**
 * Telegram Bot тупо бот access token и URL.
 */
$access_token = 'XXXXX:XXXXXXXXXXXXXXXXXXXXXXX';
$api = 'https://api.telegram.org/bot' . $access_token;
/**
 * Задаём основные переменные.
 */
$output = json_decode(file_get_contents('php://input'), TRUE);
@$chat_id = $output['message']['chat']['id'];
@$message = $output['message']['text'];
// команды тупо-бота
switch($message) {
    case '/start':
    sendMessage($chat_id, "\xF0\x9F\x93\xA1 тупобот на связи!");
    break;
}
function sendMessage($chat_id, $message) {
  file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message) . '&parse_mode=html');
}
>>>>>>> c8050538c239c06e38470ee730e8a008434ed73b

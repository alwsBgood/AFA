<?php
    require 'db/data.php';
    require 'db/visits.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>

    <meta charset="utf-8">

    <title>P2P финансирование в Украине | AFA</title>

    <meta name="description" content="Займ под залог недвижимости в Киеве или Киевской области за один день">
    <meta name="keywords" content="afa, p2p, Advance Finance Alliance, р2р кредитование, займ под залог недвижимости, кредит под залог недвижимости, кредит без справки о доходах, взять кредит, кредит киев">

    <meta property="og:description" content="" />

    <meta property="og:image" content="http://lp.afa.com.ua/img/og.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />

    <meta property="og:site_name" content="AFA"/>
    <meta property="og:title" content="P2P финансирование в Украине | AFA" />
    <meta property="og:url" content="Займ под залог недвижимости в Киеве или Киевской области за один день"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicon/manifest.json">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- RESET -->
    <style>html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}*{box-sizing:border-box}html,body{margin:0;width:100%}.container{max-width:1200px;margin:0 auto}a,button,img,input{-webkit-transition:all .5s;transition:all .5s}button,button:active,button:focus,input,input:active,input:focus,textarea,textarea:active,textarea:focus{outline:none}button,button:hover,a,a:hover{text-decoration:none;cursor:pointer}.clear{clear:both;display:block;overflow:hidden;visibility:hidden;width:0;height:0}.clearfix:before,.clearfix:after,.container:before,.container:after{content:'.';display:block;overflow:hidden;visibility:hidden;font-size:0;line-height:0;width:0;height:0}.clearfix:after,.container:after{clear:both}.left{float:left}.right{float:right}.tl{text-align:left}.tr{text-align:right}.tc{text-align:center}.flex{display:-webkit-box;display:flex;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center}a,button,input,textarea{text-decoration:none;outline:0;border:0;-webkit-transition:color .4s ease,background-color .4s ease,background-image .4s ease,border-color .4s ease;transition:color .4s ease,background-color .4s ease,background-image .4s ease,border-color .4s ease}a:focus,button:focus,input:focus,textarea:focus{outline:0}input,textarea{-webkit-box-sizing:border-box;box-sizing:border-box}textarea{resize:none}button:hover,a:hover{cursor:pointer}</style>

    <!-- GRID -->
    <style>:before,:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-left:-15px;margin-right:-15px}.col-1,.col-sm-1,.col-md-1,.col-lg-1,.col-2,.col-sm-2,.col-md-2,.col-lg-2,.col-3,.col-sm-3,.col-md-3,.col-lg-3,.col-4,.col-sm-4,.col-md-4,.col-lg-4,.col-5,.col-sm-5,.col-md-5,.col-lg-5,.col-6,.col-sm-6,.col-md-6,.col-lg-6,.col-7,.col-sm-7,.col-md-7,.col-lg-7,.col-8,.col-sm-8,.col-md-8,.col-lg-8,.col-9,.col-sm-9,.col-md-9,.col-lg-9,.col-10,.col-sm-10,.col-md-10,.col-lg-10,.col-11,.col-sm-11,.col-md-11,.col-lg-11,.col-12,.col-sm-12,.col-md-12,.col-lg-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-1,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-10,.col-11,.col-12{float:left}.col-12{width:100%}.col-11{width:91.66666667%}.col-10{width:83.33333333%}.col-9{width:75%}.col-8{width:66.66666667%}.col-7{width:58.33333333%}.col-6{width:50%}.col-5{width:41.66666667%}.col-4{width:33.33333333%}.col-3{width:25%}.col-2{width:16.66666667%}.col-1{width:8.33333333%}.col-pull-12{right:100%}.col-pull-11{right:91.66666667%}.col-pull-10{right:83.33333333%}.col-pull-9{right:75%}.col-pull-8{right:66.66666667%}.col-pull-7{right:58.33333333%}.col-pull-6{right:50%}.col-pull-5{right:41.66666667%}.col-pull-4{right:33.33333333%}.col-pull-3{right:25%}.col-pull-2{right:16.66666667%}.col-pull-1{right:8.33333333%}.col-pull-0{right:auto}.col-push-12{left:100%}.col-push-11{left:91.66666667%}.col-push-10{left:83.33333333%}.col-push-9{left:75%}.col-push-8{left:66.66666667%}.col-push-7{left:58.33333333%}.col-push-6{left:50%}.col-push-5{left:41.66666667%}.col-push-4{left:33.33333333%}.col-push-3{left:25%}.col-push-2{left:16.66666667%}.col-push-1{left:8.33333333%}.col-push-0{left:auto}.col-offset-12{margin-left:100%}.col-offset-11{margin-left:91.66666667%}.col-offset-10{margin-left:83.33333333%}.col-offset-9{margin-left:75%}.col-offset-8{margin-left:66.66666667%}.col-offset-7{margin-left:58.33333333%}.col-offset-6{margin-left:50%}.col-offset-5{margin-left:41.66666667%}.col-offset-4{margin-left:33.33333333%}.col-offset-3{margin-left:25%}.col-offset-2{margin-left:16.66666667%}.col-offset-1{margin-left:8.33333333%}.col-offset-0{margin-left:0}.clearfix:before,.clearfix:after,.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after{content:" ";display:table}.clearfix:after,.container:after,.container-fluid:after,.row:after{clear:both}.center-block{display:block;margin-left:auto;margin-right:auto}</style>

    <!-- FONTS+HEADER -->
    <style>@font-face{font-family:"OpenSans";font-style:normal;font-weight:400;src:url(fonts/OpenSans.woff2) format("woff2"),url(fonts/OpenSans.woff) format("woff")}@font-face{font-family:"OpenSans-Bold";font-style:normal;font-weight:400;src:url(fonts/OpenSans-Bold.woff2) format("woff2"),url(fonts/OpenSans-Bold.woff) format("woff")}@font-face{font-family:"Webnar-Bold";font-style:normal;font-weight:400;src:url(fonts/Webnar-Bold.woff2) format("woff2"),url(fonts/Webnar-Bold.woff) format("woff")}body{position:relative;font:16px/24px OpenSans,sans-serif;color:#8b8b8b;background-color:#fff}body.unscroll{overflow:hidden}h2{color:#373a3f;font-size:48px;line-height:56px;text-transform:uppercase;position:relative;z-index:2}h2:before{-webkit-animation:geometry 50s infinite linear;animation:geometry 50s infinite linear;z-index:-1;background-repeat:no-repeat!important}@-webkit-keyframes geometry{0%{-webkit-transform:translate(0px) scale(1);transform:translate(0px) scale(1)}10%{-webkit-transform:translate(20px,20px) scale(0.9);transform:translate(20px,20px) scale(0.9)}20%{-webkit-transform:translate(-10px,-10px) scale(0.8);transform:translate(-10px,-10px) scale(0.8)}40%{-webkit-transform:translate(30px,5px) scale(0.9);transform:translate(30px,5px) scale(0.9)}60%{-webkit-transform:translate(-5px,20px) scale(0.8);transform:translate(-5px,20px) scale(0.8)}80%{-webkit-transform:translate(20px,-10px) scale(0.9);transform:translate(20px,-10px) scale(0.9)}100%{-webkit-transform:translate(0px) scale(1);transform:translate(0px) scale(1)}}@keyframes geometry{0%{-webkit-transform:translate(0px) scale(1);transform:translate(0px) scale(1)}10%{-webkit-transform:translate(20px,20px) scale(0.9);transform:translate(20px,20px) scale(0.9)}20%{-webkit-transform:translate(-10px,-10px) scale(0.8);transform:translate(-10px,-10px) scale(0.8)}40%{-webkit-transform:translate(30px,5px) scale(0.9);transform:translate(30px,5px) scale(0.9)}60%{-webkit-transform:translate(-5px,20px) scale(0.8);transform:translate(-5px,20px) scale(0.8)}80%{-webkit-transform:translate(20px,-10px) scale(0.9);transform:translate(20px,-10px) scale(0.9)}100%{-webkit-transform:translate(0px) scale(1);transform:translate(0px) scale(1)}}.text--title{font-family:"Webnar-Bold",sans-serif}.text--blue{color:#4d81ee}.title{color:#373a3f;font-size:20px}.text{letter-spacing:.02em}.md-modal.md-show{opacity:1}.md-modal{opacity:0}::-webkit-scrollbar{width:10px}::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 20px rgba(0,0,0,0.3)}::-webkit-scrollbar-thumb{-webkit-border-radius:0;border-radius:0;background:#4d81ee;-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,0.5)}::-webkit-scrollbar-thumb:window-inactive{background:#4d81ee}#scrollup{position:fixed;right:20px;bottom:30px;width:30px;-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg);display:none;opacity:1;cursor:pointer;z-index:10;font-size:40px;text-shadow:-2px 2px 5px rgba(0,0,0,0.3);-webkit-transition:all .5s;transition:all .5s}#scrollup svg{fill:#848484;-webkit-transition:all .5s;transition:all .5s}#scrollup:hover svg{fill:#4d81ee}.hidden{height:0;width:0}.bar-long{height:5px;width:0;z-index:1000;position:fixed;top:0;left:0;background:#4d81ee}.btn{width:200px;height:50px;background-color:#2167fb;color:#f0f0f0;font:12px/18px OpenSans,sans-serif;text-transform:uppercase;letter-spacing:.3em}.btn:hover{background-color:#fb7657}.btn:active{background-color:#d05b40}.btn_call{width:197px;height:40px;border:2px solid #9e9e9e;color:#000;font-size:12px;text-transform:uppercase;letter-spacing:.3em}.btn_call:hover{background-color:#2167fb;border:2px solid #2167fb;color:#f0f0f0}.btn_call:active{background-color:#144fcb;border:2px solid #144fcb}#sec_01{padding:35px 0 215px;background-repeat:no-repeat;background-position:top center;background-image:url(img/sec_01-bg.png)}#sec_01 .nav{display:inline-block;margin-top:7px}#sec_01 .nav li{display:inline-block}#sec_01 .nav li + li{margin-left:25px}#sec_01 .nav a{color:#8b8b8b}#sec_01 .nav a:hover{color:#4d81ee}#sec_01 .btn_call{float:right}#sec_01 .top{margin-bottom:195px;position:relative}#sec_01 .beforeheader{color:#f0f0f0;font-size:12px;text-transform:uppercase;margin-bottom:17px;letter-spacing:.5em}#sec_01 h1{font-size:60px;line-height:76px;text-transform:uppercase;color:#f0f0f0;margin-bottom:25px}#sec_01 h1 span{font-size:72px;line-height:82px;text-transform:uppercase;display:block;padding-left:100px;position:relative}#sec_01 h1 span:before{content:"";position:absolute;width:84px;height:5px;top:50%;margin-top:-2.5px;left:0;background-color:#f0f0f0}#sec_01 .afterheader{letter-spacing:.02em;margin-bottom:35px}#nav{display:none;position:absolute;background-color:#FAFAFA;top:-13px;right:0;width:60px;height:60px;z-index:100;text-align:center;color:#222;overflow:hidden!important;-webkit-transition:width 1s,height .7s;transition:width 1s,height .7s}#nav #menu{z-index:102}#nav a:hover{color:#4d81ee}#nav li{width:100%;line-height:50px;height:50px;font-family:"Webnar-Bold",sans-serif;font-size:15px;font-weight:700;text-transform:uppercase}#nav li a{color:#222;opacity:0}#nav li + li{margin-top:20px}#nav .inner{margin:0 auto;opacity:0;display:0;overflow-y:hidden}#nav .contacts{margin-top:200px}#nav .contacts .link_block{margin:0 20px}.contacts .contacts_title{font-size:18px;margin-bottom:20px;margin-top:40px;display:block}.contacts svg{width:15px;fill:#4d81ee}.contacts .link_block{vertical-align:top;position:relative;display:inline-block;padding-left:15px;text-align:left;cursor:pointer}.contacts .link_block .icon{position:absolute;left:0;top:2px}.contacts .title_link{color:#222;font-family:"Webnar-Bold",sans-serif;font-size:14px;line-height:24px}.contacts .text_link{color:#222}#nav.open{top:0;position:fixed;overflow-y:scroll!important;width:100%;height:100vh;background-color:#FAFAFA;padding-top:20px}#nav.open li{width:100%}#nav.open li a{opacity:1;display:inline-block}#nav.open .inner{opacity:1;display:block;margin-left:10px}#nav .svg{width:60px;height:60px;cursor:pointer;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}#nav .path{fill:none;-webkit-transition:stroke-dashoffset .5s cubic-bezier(0.25,-0.25,0.75,1.25),stroke-dasharray .5s cubic-bezier(0.25,-0.25,0.75,1.25);transition:stroke-dashoffset .5s cubic-bezier(0.25,-0.25,0.75,1.25),stroke-dasharray .5s cubic-bezier(0.25,-0.25,0.75,1.25);stroke-width:30px;stroke-linecap:round;stroke:#222;stroke-dashoffset:0}path#top,path#bottom{stroke-dasharray:240px 950px}path#middle{stroke-dasharray:240px 240px}.cross path#top,.cross path#bottom{stroke-dashoffset:-650px;stroke-dashoffset:-650px}.cross path#middle{stroke-dashoffset:-115px;stroke-dasharray:1px 220px}@media (min-width: 992px) and (max-width: 1200px){#sec_01{background-size:170%;padding-bottom:150px}#sec_01 .nav li + li{margin-left:20px}#sec_01 h1{font-size:50px}#sec_01 .top{margin-bottom:150px}}@media (min-width: 768px) and (max-width: 991px){#nav{display:block}#sec_01{padding-bottom:125px;background-size:180%}#sec_01 .nav{display:none}#sec_01 .btn_call{margin-right:75px}#sec_01 .top{margin-bottom:70px}#sec_01 h1{font-size:36px;line-height:46px}#sec_01 .afterheader{width:40%}}@media (max-width: 767px){[class*='col-']{width:100%}#nav{display:block;overflow-y:scroll;background-color:#1b1d20}#nav .contacts{margin-top:40px}#nav .contacts .link_block{display:block;margin:20px auto;text-align:center;max-width:180px}#nav .path{stroke:#fff}#nav.open .path{stroke:#1b1d20}#sec_01{padding-bottom:125px;background:#1b1d20;text-align:center}#sec_01 .nav{display:none}#sec_01 .btn_call{display:none}#sec_01 .top{margin-bottom:70px}#sec_01 h1{font-size:36px;line-height:46px}#sec_01 h1 span{display:inline-block}#sec_01 .afterheader{width:50%;margin:0 auto 40px}#sec_01 .btn{margin:0 auto}}@media (max-width: 500px){#sec_01 h1{font-size:30px}#sec_01 .afterheader{width:90%}#nav li + li{margin-top:0}#nav .contacts .link_block{max-width:145px}}</style>

    <!-- Load CSS, CSS Localstorage & WebFonts Main Function -->
    <script>!function(a){"use strict";function b(a,b,c){a.addEventListener?a.addEventListener(b,c,!1):a.attachEvent&&a.attachEvent("on"+b,c)}function c(b,c){return a.localStorage&&localStorage[b+"_content"]&&localStorage[b+"_file"]===c}function d(b,d){if(a.localStorage&&a.XMLHttpRequest)c(b,d)?f(localStorage[b+"_content"]):e(b,d);else{var h=g.createElement("link");h.href=d,h.id=b,h.rel="stylesheet",h.type="text/css",g.getElementsByTagName("head")[0].appendChild(h),g.cookie=b}}function e(a,b){var c=new XMLHttpRequest;c.open("GET",b,!0),c.onreadystatechange=function(){4===c.readyState&&200===c.status&&(f(c.responseText),localStorage[a+"_content"]=c.responseText,localStorage[a+"_file"]=b)},c.send()}function f(a){var b=g.createElement("style");b.setAttribute("type","text/css"),g.getElementsByTagName("head")[0].appendChild(b),b.styleSheet?b.styleSheet.cssText=a:b.innerHTML=a}var g=a.document;a.loadCSS=function(a,b,c){var d,e=g.createElement("link");if(b)d=b;else{var f;f=g.querySelectorAll?g.querySelectorAll("style,link[rel=stylesheet],script"):(g.body||g.getElementsByTagName("head")[0]).childNodes,d=f[f.length-1]}var h=g.styleSheets;e.rel="stylesheet",e.href=a,e.media="only x",d.parentNode.insertBefore(e,b?d:d.nextSibling);var i=function(a){for(var b=e.href,c=h.length;c--;)if(h[c].href===b)return a();setTimeout(function(){i(a)})};return e.onloadcssdefined=i,i(function(){e.media=c||"all"}),e},a.loadLocalStorageCSS=function(e,f){c(e,f)||g.cookie.indexOf(e)>-1?d(e,f):b(a,"load",function(){d(e,f)})}}(this);</script>

<!-- <link rel="stylesheet" href="css/fonts.css"> -->
    <!-- <link rel="stylesheet" href="css/header.css"> -->
    <!-- Load CSS Start -->
    <script>loadCSS( "css/main.css?ver=1.0.0", false, "all" );</script>
    <!-- Load CSS End -->

    <!-- Load CSS Compiled without JS -->
    <noscript>
        <link rel="stylesheet" href="css/main.css">
    </noscript>

</head>
<body data-img="img/land.jpg">
<div class="bar-long"></div>
<div id="scrollup"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 286.054 286.054"><path d="M143.027 0C64.04 0 0 64.04 0 143.027c0 78.996 64.04 143.027 143.027 143.027s143.027-64.03 143.027-143.027C286.054 64.05 222.014 0 143.027 0zm0 259.236c-64.183 0-116.21-52.026-116.21-116.21s52.027-116.2 116.21-116.2 116.21 52.018 116.21 116.2-52.027 116.21-116.21 116.21zm51.677-125.148h-24.86V89.392c0-4.934-3.996-8.94-8.94-8.94H125.15c-4.934 0-8.94 4.006-8.94 8.94v44.696H91.342c-9.698 0-13.667 6.463-8.822 14.338l51.686 51.096c4.845 7.884 12.783 7.884 17.637 0l51.678-51.096c4.863-7.875.894-14.338-8.814-14.338z"/></svg></div>


<div id="sec_01">
    <div class="container">
        <div class="row top">
        <div id="nav">
            <div class="wrapper">
              <svg class="svg" id="menu" viewBox="0 0 800 600">
                <path class="path" d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                <path class="path" d="M300,320 L540,320" id="middle"></path>
                <path class="path" d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
              </svg>
            </div>
            <div class="inner">

                <ul>
                   <li><a href="#sec_02" class="scroll">Что такое P2P</a></li>
                   <li><a href="#sec_05" class="scroll">Калькулятор</a></li>
                   <li><a href="#sec_06" class="scroll">КРЕДИТНЫЕ ПРОГРАММЫ</a></li>
                   <li><a href="#sec_07" class="scroll">Как это работает</a></li>
                   <li><a href="#sec_14" class="scroll">Отзывы</a></li>
                   <li><a href="#sec_16" class="scroll">Контакты</a></li>
                </ul>
                <div class="contacts">
                    <span class="contacts_title text--title">Свяжитесь с нами:</span>
                    <a href="tel:0443900280" class="link_block phone_block">
                        <p class="title_link"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 578.1 578.1"><path d="M577.8 456.1c1.2 9.4-1.6 17.5-8.6 24.5l-81.4 80.8c-3.7 4.1-8.5 7.6-14.4 10.4 -5.9 2.9-11.7 4.7-17.4 5.5 -0.4 0-1.6 0.1-3.7 0.3 -2 0.2-4.7 0.3-8 0.3 -7.8 0-20.3-1.3-37.6-4s-38.6-9.2-63.6-19.6c-25.1-10.4-53.6-26-85.4-46.8 -31.8-20.8-65.7-49.4-101.6-85.7 -28.6-28.2-52.2-55.1-71-80.8 -18.8-25.7-33.9-49.5-45.3-71.3 -11.4-21.8-20-41.6-25.7-59.4S4.6 177.4 2.6 164.5s-2.9-22.9-2.4-30.3c0.4-7.3 0.6-11.4 0.6-12.2 0.8-5.7 2.7-11.5 5.5-17.4s6.3-10.7 10.4-14.4L98 8.8c5.7-5.7 12.2-8.6 19.6-8.6 5.3 0 10 1.5 14.1 4.6s7.5 6.8 10.4 11.3l65.5 124.2c3.7 6.5 4.7 13.7 3.1 21.4 -1.6 7.8-5.1 14.3-10.4 19.6l-30 30c-0.8 0.8-1.5 2.1-2.1 4s-0.9 3.4-0.9 4.6c1.6 8.6 5.3 18.4 11 29.4 4.9 9.8 12.4 21.7 22.6 35.8s24.7 30.3 43.5 48.7c18.4 18.8 34.7 33.4 49 43.8 14.3 10.4 26.2 18.1 35.8 22.9 9.6 4.9 16.9 7.9 22 8.9l7.6 1.5c0.8 0 2.1-0.3 4-0.9 1.8-0.6 3.2-1.3 4-2.1l34.9-35.5c7.3-6.5 15.9-9.8 25.7-9.8 6.9 0 12.4 1.2 16.5 3.7h0.6l118.1 69.8C571.1 441.2 576.2 448 577.8 456.1z"/></svg></span></p>
                        <p class="text_link">(044) 390-02-80</p>
                    </a>
                    <a href="mailto:info@afa.com.ua" class="link_block mail_block">
                        <p class="title_link"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.6 511.6"><path d="M49.1 178.7c6.5 4.6 26 18.1 58.5 40.7 32.5 22.6 57.5 39.9 74.8 52.1 1.9 1.3 5.9 4.2 12.1 8.7 6.2 4.5 11.3 8.1 15.4 10.9 4.1 2.8 9 5.9 14.8 9.3 5.8 3.4 11.3 6 16.4 7.7 5.1 1.7 9.9 2.6 14.3 2.6h0.3 0.3c4.4 0 9.1-0.9 14.3-2.6 5.1-1.7 10.6-4.3 16.4-7.7 5.8-3.4 10.8-6.5 14.8-9.3 4.1-2.8 9.2-6.4 15.4-10.9 6.2-4.5 10.2-7.4 12.1-8.7 17.5-12.2 62.1-43.1 133.6-92.8 13.9-9.7 25.5-21.4 34.8-35.1 9.3-13.7 14-28.1 14-43.1 0-12.6-4.5-23.3-13.6-32.3 -9-8.9-19.7-13.4-32.1-13.4H45.7c-14.7 0-25.9 4.9-33.8 14.8C3.9 79.6 0 91.9 0 106.8c0 12 5.2 25 15.7 39C26.2 159.7 37.3 170.7 49.1 178.7z"/><path d="M483.1 209.3c-62.4 42.3-109.8 75.1-142.2 98.5 -10.8 8-19.6 14.2-26.4 18.7 -6.8 4.5-15.7 9-27 13.7 -11.2 4.7-21.7 7-31.4 7h-0.3 -0.3c-9.7 0-20.2-2.3-31.4-7 -11.2-4.7-20.2-9.2-27-13.7 -6.8-4.5-15.6-10.7-26.4-18.7 -25.7-18.8-73-51.7-141.9-98.5C18 202 8.4 193.8 0 184.4v226.7c0 12.6 4.5 23.3 13.4 32.3 8.9 8.9 19.7 13.4 32.3 13.4h420.3c12.6 0 23.3-4.5 32.3-13.4 8.9-8.9 13.4-19.7 13.4-32.3V184.4C503.4 193.6 493.9 201.9 483.1 209.3z"/></svg></span></p>
                        <p class="text_link">info@afa.com.ua</p>
                    </a>
                </div>
            </div>
        </div>
            <div class="col-2">
                <img src="img/logo.png" alt="AFA Логотип" class="logo">
            </div>
            <div class="col-10">
                <ul class="nav text--title">
                    <li><a href="#sec_02" class="scroll">Что такое P2P</a></li>
                    <li><a href="#sec_07" class="scroll">Как это работает</a></li>
                    <li><a href="#sec_09" class="scroll">Почему AFA</a></li>
                    <li><a href="#sec_14" class="scroll">Отзывы</a></li>
                    <li><a href="#sec_05" class="scroll">Калькулятор</a></li>
                    <li><a href="#sec_16" class="scroll">Контакты</a></li>
                </ul>
                <a class="md-trigger text--title btn_call flex" data-modal="modal_callback"><span>мы перезвоним</span></a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p class="beforeheader text--title">Advance finance alliance</p>
                <h1 class="text--title"><span>P2P</span>финансирование <br> в Украине</h1>
                <p class="text--blue afterheader">Получите займ под залог недвижимости за один день</p>
                <a href="#sec_02" class="btn flex scroll">Узнать больше</a>
            </div>
        </div>
    </div>
</div>

<div id="sec_02">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <h2 class="text--title">Что <br> такое <br> P2P</h2>
                <img src="img/line_horizontal.png" alt="Разделитель " class="separator">
            </div>
            <div class="col-3">
                <div class="item">
                    <p class="text--title title">P2P (“person-to-person” или “равноправное кредитование”)</p>
                    <p class="text">Это прямое финансирование от инвестора к заемщику без участия банков или кредитных организаций. Система работает благодаря компаниям, которые помогают инвесторам и заемщикам найти друг друга и договориться о взаимовыгодном сотрудничестве. </p>
                </div>
            </div>
            <div class="col-3">
                <div class="item">
                    <p class="text--title title">P2P кредитование начало активно развиваться в Европе и США в 2005 году</p>
                    <p class="text">Уже в 2016 рынок прямого финансирования вырос до 64 миллиардов долларов. В Украине же Р2Р появилось гораздо позже, однако всего <br> за пару лет рынок прямого кредитования в нашей стране достиг 5 миллиардов гривен. </p>
                </div>
            </div>
            <div class="col-3">
                <div class="item">
                    <p class="text--title title">Сейчас Р2Р — самый быстрорастущий сегмент на рынке мировых кредитов</p>
                    <p class="text">Благодаря простоте и прозрачности системы Р2Р, сегодня равноправным финансированием пользуются миллионы людей по всему миру. </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="lineblock">
    <p class="text--title line_block--text">growth</p>
    <img class="line" src="img/line.png" alt="График роста вашей прибыли с AFA">
    <img class="line-2" src="img/line-2.png" alt="График роста вашей прибыли с AFA">
</div>

<div id="sec_03">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <!-- <video width="515" height="340" controls="controls" poster="img/video.png">
                  <source src="img/video.mp4" type='video/mp4'>
                 </video> -->
                <!-- <img src="img/video.png" alt=""> -->
                <div class="youtube" id="BvLuBEKUdqI"></div>
            </div>
            <div class="col-6">
                <h2 class="text--title">Преимущества <br> P2P кредитования</h2>
                <div class="item">
                    <p class="text--title title">Посмотрите этот мультфильм</p>
                    <p class="text"> — он интересно и доступно расскажет вам <br> про преимущества P2P финансирования. </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sec_04">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2 class="text--title">Advance <br> Finance Alliance</h2>
                <div class="item">
                    <p class="text--title title">AFA — компания</p>
                    <p class="text">Которая работает с залоговым P2P финансированием в Украине. <br> Залогом может выступать жилая / коммерческая недвижимость, <br> которая находится в Киеве / Киевской области.</p>
                </div>
                <div class="item">
                    <p class="text--title title">AFA предоставляет  <br> полное сопровождение сделки:</p>
                    <p class="text">От первой встречи, где мы подбираем для клиента  <br> необходимые условия, до полного  закрытия сделки. </p>
                </div>
                <img src="img/line_vertical.png" alt="Разделитель" class="separator">
            </div>
            <div class="col-6">
                <img src="img/sec_04-img.png" alt="Сотрудничество с AFA" class="sec_img">
            </div>
        </div>
    </div>
</div>

<div id="sec_05">
    <div class="grey"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text--title">КАЛЬКУЛЯТОР</h2>
                <div class="tc"><img src="img/sep_blue.png" alt="" class="separator"></div>
            </div>
            <div class="col-12">
                <form  method="POST" class="form-inline clearfix db-form" action="javascript:void(null);">

                    <!-- Hidden DB Fields -->

                    <input type="hidden" name="orderType" value="Calculator">
                    <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                    <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                    <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                    <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                    <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                    <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                    <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                    <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                    <input type="hidden" name="city" value="">
                    <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                    <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                    <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                    <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                    <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                    <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">

                    <!-- END Hidden DB Fields -->

                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="project_name" value="AFA">
                    <input type="hidden" name="admin_email" value="inga.erastova@gmail.com">
                    <input type="hidden" name="second_admin_email" value="zayavka@afa.com.ua">
                    <input type="hidden" name="form_subject" value="Калькулятор">
                    <!-- END Hidden Required Fields -->

                    <div class="left_part">
                        <!--  Slider sum -->
                        <div class="slider_field form_row">
                            <div class="slider_description clearfix slider_sum-desc">
                                <p class="value_label">Сумма:</p>
                                <div class="slider_value" id="slider_sum-value"></div>
                                <input type="hidden" name="summa_kredita" value="">
                            </div>
                            <div id="slider_sum"></div>
                        </div>

                        <!--  Slider month -->
                        <div class="slider_field form_row">
                            <div class="slider_description clearfix slider_month-desc">
                                <p class="value_label">Срок, мес. :</p>
                                <div class="slider_value" id="slider_month-value"></div>
                                <input type="hidden" name="kolichestvo_mesyacev" value=" ">
                            </div>
                            <div id="slider_month"></div>
                        </div>

                        <fieldset class="repayment_type form_row">
                        <p class="value_label">График погашения:</p>
                           <div class="radio_field">
                               <input class="checked input_type" id="only_percents" type="radio" name="repaymentType" value='onlyPercents'>
                                <label for="only_percents" class="radio_label">
                                   <span>Только <br /> проценты</span>
                               </label>
                           </div>
                            <div class="radio_field">
                                <input class="input_type" id="for_the_rest" type="radio" name="repaymentType" value='forTheRest'>
                                <label for="for_the_rest" class="radio_label">
                                    <span>Платеж <br /> на остаток</span>
                                </label>
                            </div>
                            <div class="radio_field">
                                <input class="input_type" id="equal_parts" type="radio" name="repaymentType" value='equalParts'>
                                <label for="equal_parts" class="radio_label">
                                    <span>Платеж <br /> равными частями</span>
                                </label>
                            </div>
                        </fieldset>

                        <div class="form_row clearfix">
                            <fieldset class="currency_type">
                            <p class="value_label">Валюта:</p>
                                <div class="radio_field">
                                    <input class="checked input_currency" id="usd" type="radio" name="currencyType" value='usd'>
                                     <label for="usd" class="radio_label">
                                        <span>USD</span>
                                    </label>
                                </div>
                                <div class="radio_field">
                                    <input class="input_currency" id="uah" type="radio" name="currencyType" value='uah'>
                                     <label for="uah" class="radio_label">
                                        <span>UAH</span>
                                    </label>
                                </div>
                            </fieldset>

                            <div class="pledge_type_wrap">
                            <p class="value_label">Недвижимость для залога:</p>
                                <select name="zalog" id="pledge_type" class="pledge_type">
                                    <option selected value="Квартира">Квартира</option>
                                    <option value="Дом">Дом</option>
                                    <option value="Нежилое помещение">Нежилое помещение</option>
                                    <option value="Другое">Другое</option>
                                </select>
                            </div>
                        </div>

                        <div class="form_row total_row">
                            <p class="total_text">Итого:</p>

                            <div class="total_values">
                                <div class="total_sum_block total_block">
                                    <span class="value_label">Сумма:</span>
                                    <div class="total_value" id="total_sum"></div>
                                    <input type="hidden" name="total_sum" value="">
                                </div>
                                <div class="total_month_block total_block">
                                    <span class="value_label">Срок:</span>
                                    <div class="total_value" id="total_month"></div>
                                </div>
                            </div>

                            <div class="repayment_type_block">
                                <p id="repayment_type_label" class="value_label repayment_type_label">Ежемесячный платеж:</p>
                                <p class="payments_value" id="repayment_type_value"></p>
                            </div>
                        </div>

                    </div>

                    <div class="right_part">
                    <p class="text--title title">Есть вопросы?</p>
                    <p class="text">Отправьте расчеты менеджеру AFA. <br /> Он свяжется с вами в течении 20 минут и ответит <br /> на любой вопрос</p>
                    <a class="md-trigger" data-modal="modal_callback">Перезвоните мне</a>
                        <span class="input field">
                            <input id="name_00" required="" class="form-control name input__field " type="text" name="name" />
                            <label class="input__label" for="name_00">
                                <span class="input__label-content">имя</span>
                            </label>
                        </span>

                        <span class="input field">
                            <input id="tel_00" required="" class="form-control name input__field" type="tel" name="phone"/>
                            <label class="input__label" for="tel_00">
                                <span class="input__label-content">телефон</span>
                            </label>
                        </span>

                        <span class="input field">
                            <input id="mail_00" required="" class="form-control name input__field" type="email" name="email" />
                            <label class="input__label" for="mail_00">
                                <span class="input__label-content">e-mail</span>
                            </label>
                        </span>
                    </div>


                    <button type="submit" class="btn" name="send">ПОЛУЧИТЬ ЗАЙМ</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="sec_06">
    <div class="container">
        <div class="row">
            <div class="col-12 tc">
                <h2 class="text--title">КРЕДИТНЫЕ ПРОГРАММЫ</h2>
                <img src="img/line_hrz_blue.png" alt="Разделитель" class="separator">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table_wrap">
                    <table>
                        <tr class="text--title">
                            <td></td>
                            <td>В долларах <br> США</td>
                            <td>Особые <br> условия</td>
                            <td>Максимальная</td>
                            <td>Авансовый <br> платеж</td>
                            <td>В гривне</td>
                        </tr>
                        <tr>
                            <td class="title text--title"><span>Процентная  <br> ставка по займу  <br> / месяц</span></td>
                            <td>2,5 % <br> (30% год.)</td>
                            <td>От 2,2% <br> до 3 % <br> (26% год.)</td>
                            <td>2,9% <br> (34,8% год.)</td>
                            <td>От 2 до 3% <br> (24% год.)</td>
                            <td>От 2 до 3% <br> (24% год.)</td>
                        </tr>
                        <tr>
                            <td class="title text--title"><span>Комиссия</span></td>
                            <td>0 %</td>
                            <td>0 %</td>
                            <td>0 %</td>
                            <td>0 %</td>
                            <td>0 %</td>
                        </tr>
                        <tr>
                            <td class="title text--title"><span>Сумма кредита <br> от оценочной <br> стоимости</span></td>
                            <td>60-80% </td>
                            <td>50-60% </td>
                            <td>75-85% </td>
                            <td>до 30%</td>
                            <td>50-70%USD</td>
                        </tr>
                        <tr>
                            <td class="title text--title"><span>Валюта</span></td>
                            <td>USD</td>
                            <td>USD</td>
                            <td>USD</td>
                            <td>USD</td>
                            <td>UAH</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sec_07">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h2 class="text--title">Как <br> мы <br> работаем</h2>
                <img src="img/line_horizontal.png" alt="" class="separator">
            </div>
            <div class="col-2">
                <div class="item">
                    <p class="number text--title text--blue">01</p>
                    <p class="text--title title">Подача <br> Заявки</p>
                    <p class="text">Вы звоните или <a class="md-trigger" data-modal="modal_callback">оставляете заявку</a>. Мы перезвоним, ответим на ваши вопросы <br> и договоримся <br> о встрече</p>
                </div>
            </div>
            <div class="col-2">
                <div class="item">
                    <p class="number text--title text--blue">02</p>
                    <p class="text--title title">Выбор  <br> программы</p>
                    <p class="text">Вместе со специалистом AFA вы <br> выберете подходящую  программу <br> утвердите сроки, условия и график платежей. </p>
                </div>
            </div>
            <div class="col-2">
                <div class="item">
                    <p class="number text--title text--blue">03</p>
                    <p class="text--title title">Оценка <br> объекта</p>
                    <p class="text">Специалист <br> по недвижимости проведет <br> бесплатную оценку объекта. </p>
                </div>
            </div>
            <div class="col-2">
                <div class="item">
                    <p class="number text--title text--blue">04</p>
                    <p class="text--title title">Оформление <br> договора</p>
                    <p class="text">У нотариуса вы оформите договора займа и залога, <br> и получите заемные средства.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sec_08">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="img/sec_08-img.png" alt="Оформление займов в AFA" class="sec_img">
            </div>
            <div class="col-6">
                <h2 class="text--title">Чтобы <br> оформить займ</h2>
                <div class="item">
                    <p class="text--title title">Под залог недвижимости, вам понадобятся <br> такие документы: </p>
                    <ul class="list_item">
                       <li>Паспорт;</li>
                       <li>Идентификационный код;</li>
                       <li>Документы, которые подтверждают право собственности <br> на вашу недвижимость;</li>
                       <li>Форма №3.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="lineblock">
    <p class="text--title line_block--text">growth</p>
    <img class="line" src="img/line.png" alt="График роста вашей прибыли с AFA">
    <img class="line-2" src="img/line-2.png" alt="График роста вашей прибыли с AFA">
</div>

<div id="sec_09">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text--title">ПОЧЕМУ AFA <br> — ЭТО ВЫГОДНО</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <img src="img/line_vertical.png" alt="Разделитель" class="separator">
            </div>
            <div class="col-10">
                <table>
                    <tr>
                        <td></td>
                        <td><span class="vertical_text">AFA</span></td>
                        <td><span class="vertical_text">Банки</span></td>
                        <td><span class="vertical_text">Кредитные <br> союзы</span></td>
                        <td><span class="vertical_text">Финансовые <br> компании <br> под залог</span></td>
                        <td><span class="vertical_text">Финансовые <br> компании <br> без залога</span></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text--title title">Процентные ставки</p>
                            <p class="text">AFA предоставляет 5 программ финансирования с различными ставками от 2% в месяц с возможностью уменьшить платеж за счет погашения тела займа </p>
                        </td>
                        <td>+</td>
                        <td>+</td>
                        <td>-</td>
                        <td>+</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text--title title">Наполняемость кредита</p>
                            <p class="text">В AFA каждый клиент может получить до 80% от средней рыночной стоимости объекта залога. </p>
                        </td>
                        <td>+</td>
                        <td>-</td>
                        <td>-</td>
                        <td>+</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text--title title">Скорость выдачи</p>
                            <p class="text">Вы получаете финансирование за  1-2 дня. Мы оперативно подберем программу, проведем оценку и оформим договора.</p>
                        </td>
                        <td>+</td>
                        <td>-</td>
                        <td>+</td>
                        <td>-</td>
                        <td>+</td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text--title title">Валюта</p>
                            <p class="text">Деньги можно получить как в гривне, так и в долларах США.</p>
                        </td>
                        <td>+</td>
                        <td>-</td>
                        <td>-</td>
                        <td>+</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text--title title">Справки и проверки</p>
                            <p class="text">Нам не нужны справки о доходах, трудоустройстве, вменяемости, кредитной истории и прочие бумаги. Специалисты компании проверяют лишь залог на его наличие, аресты и прочие спорные вопросы.</p>
                        </td>
                        <td>+</td>
                        <td>-</td>
                        <td>-</td>
                        <td>+</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text--title title">Надежность</p>
                            <p class="text">Репутация AFA — результат 6 лет упорной и качественной работы. Ее подтверждают десятки отзывов, обзоров, выступлений в СМИ, благодарностей. Мы работаем только с нотариально заверенными договорами и всегда описываем клиентам все детали сделки.</p>
                        </td>
                        <td>+</td>
                        <td>-</td>
                        <td>+</td>
                        <td>-</td>
                        <td>+</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="sec_10">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="img/sec_10-img.png" alt="Позвонить в AFA" class="sec_img">
            </div>
            <div class="col-6">
                <h2 class="text--title">ОСТАЛИСЬ СОМНЕНИЯ?</h2>
                <div class="item">
                    <p class="text--title title">Хотите задать вопрос?</p>
                    <p class="text">Жмите на кнопку — наш специалист <br> позвонит вам и ответит на все вопросы.</p>
                    <a class="md-trigger btn flex" data-modal="modal_callback">Заказать звонок</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sec_11">
    <div class="container">
        <div class="row">
            <div class="col-4 header_block">
                <h2 class="text--title"><span>AFA</span> <br>В ЦИФРАХ</h2>
                <img src="img/line_horizontal.png" alt="" class="separator">
            </div>
            <div class="col-2">
                <div class="item">
                    <p class="first_animate_number number text--title">0</p>
                    <p class="text">Клиентов <br> уже погасили займ</p>
                </div>
                <div class="item">
                    <p class="second_animate_number number text--title">0</p>
                    <p class="text">Финансовый портфель</p>
                </div>
            </div>
            <div class="col-2 col-offset-1">
                <div class="item">
                    <p class="third_animate_number number text--title">0</p>
                    <p class="text">Средняя сумма <br> кредита</p>
                </div>
                <div class="item">
                    <p class="fourth_animate_number number text--title">0</p>
                    <p class="text">Частных <br> инвесторов</p>
                </div>
            </div>
            <div class="col-3">
                <img src="img/sec_11-img.png" alt="AFA в цифрах" class="sec_img">
            </div>
        </div>
    </div>
</div>

<div id="sec_12">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2 class="text--title">СОТРУДНИКИ AFA <br> <span class="text--blue">ПО РАБОТЕ <br> С КЛИЕНТАМИ</span></h2>
                <img src="img/vertical_line_wt.png" alt="Разделитель" class="separator">
            </div>
            <div class="col-2">
                <div class="item">
                    <img src="img/empl-1.png" alt="Сотрудники AFA" class="empl_img">
                    <p class="name text--title">Прус Юрий</p>
                </div>
                <div class="item">
                    <img src="img/empl-6.png" alt="Сотрудники AFA" class="empl_img">
                    <p class="name text--title">Эрастова Инга</p>
                </div>
            </div>
            <div class="col-2">
                <div class="item">
                    <img src="img/empl-2.png" alt="Сотрудники AFA" class="empl_img">
                    <p class="name text--title">Александр Ковальчук</p>
                </div>
                <div class="item">
                    <img src="img/empl-5.png" alt="Сотрудники AFA" class="empl_img">
                    <p class="name text--title">Наталья Коновал</p>
                </div>
            </div>
            <div class="col-2">
                <div class="item">
                    <img src="img/empl-3.png" alt="Сотрудники AFA" class="empl_img">
                    <p class="name text--title">Людмила Толстикова</p>
                </div>
                <div class="item">
                    <img src="img/empl-4.png" alt="Сотрудники AFA" class="empl_img">
                    <p class="name text--title">Герасименко Татьяна</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sec_13">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <h2 class="text--title">О НАС ПИШУТ:  <br> ПРО AFA <br> В ПРЕССЕ</h2>
                <img src="img/line_horizontal.png" alt="Разделитель" class="separator">
            </div>
            <div class="col-7">
                <div class="img_wrap">
                    <div class="img">
                        <img src="img/logo-1.png" alt="Пресса об AFA">
                    </div>
                    <div class="img">
                        <img src="img/logo-2.png" alt="Пресса об AFA">
                    </div>
                    <div class="img">
                        <img src="img/logo-3.png" alt="Пресса об AFA">
                    </div>
                    <div class="img">
                        <img src="img/logo-4.png" alt="Пресса об AFA">
                    </div>
                    <div class="img">
                        <img src="img/logo-5.png" alt="Пресса об AFA">
                    </div>
                    <div class="img">
                        <img src="img/logo-6.png" alt="Пресса об AFA">
                    </div>
                    <div class="img">
                        <img src="img/logo-7.png" alt="Пресса об AFA">
                    </div>
                    <div class="img svit">
                        <img src="img/logo-8.png" alt="Пресса об AFA">
                    </div>
                    <div class="img">
                        <img src="img/logo-9.png" alt="Пресса об AFA">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="lineblock">
    <p class="text--title line_block--text">growth</p>
    <img class="line" src="img/line.png" alt="График роста вашей прибыли с AFA">
    <img class="line-2" src="img/line-2.png" alt="График роста вашей прибыли с AFA">
</div>

<div id="sec_14">
    <div class="container">
        <div class="row">
            <div class="col-5 tc mobile">
            <h2 class="text--title">ЧТО ГОВОРЯТ</h2>
            <p class="text--title title">Те, кто уже оформил кредит в AFA</p>
                <div class="slider_control">
                    <div class="slide"><p><span>1</span> / 5</p></div>
                    <div class="slide"><p><span>2</span> / 5</p></div>
                    <div class="slide"><p><span>3</span> / 5</p></div>
                    <div class="slide"><p><span>4</span> / 5</p></div>
                    <div class="slide"><p><span>5</span> / 5</p></div>
                </div>
            </div>
            <div class="col-7">
                <div class="slider_testimonials">

                    <div class="slide">
                        <img src="img/testim-2.png" alt="Отзывы клиентов об AFA" class="testim_img">
                        <p class="testim_name title text--title">Николай</p>
                        <p class="text">Получил в этой компании кредит для своего бизнеса в считанные дни! Очень доволен подходом специалистов, процентным ставкам и стилем работы. Кредит под залог брал первый раз, поэтому был приятно удивлен процессом оформления. Могу советовать эту компанию другим заемщикам</p>
                    </div>

                    <div class="slide youtube_slide">
                        <div class="youtube" id="q-K9WEmeJCA"></div>
                    </div>
                    <div class="slide">
                        <img src="img/testim-1.png" alt="Отзывы клиентов об AFA" class="testim_img">
                        <p class="testim_name title text--title">Кристина</p>
                        <p class="text">Мы с мужем часто пользуемся кредитами, в прошлом брали кредиты на технику и небольшие займы в банках. Но по опыту знаем, что сейчас крупную сумму можно получить только под залог. Эту компанию нам рекомендовали знакомые, поэтому сразу знали, что переживать о честности не стоит. Выдали нам деньги буквально за пару дней, все оформили как положено, расписали и рассказали. Приятное отношение и специалисты, красивый офис, хорошие условия. Поэтому спасибо.</p>
                    </div>
                    <div class="slide">
                        <img src="img/testim-3.png" alt="Отзывы клиентов об AFA" class="testim_img">
                        <p class="testim_name title text--title">Сергей</p>
                        <p class="text">Эта компания очень помогла мне с моим start-up`ом, денег как обычно на все про все не хватило, а был риск, что мы так нечего и не запустим. Я получил 320 тыс грн, и сейчас выплатил уже больше половины долга. Работа кипит!</p>
                    </div>
                    <div class="slide">
                        <img src="img/testim-4.png" alt="Отзывы клиентов об AFA" class="testim_img">
                        <p class="testim_name title text--title">Людмила Кравчук</p>
                        <p class="text">Нам с мужем понадобились деньги на развитие нашего интернет магазина. Получили необходимые деньги под залог своего автомобиля Kia 2014 года, продолжая им пользоватся. Адекватные проценты, быстрая выдача денег, все договора в порядке. С такими людьми приятно сотрудничать, все четко и ясно. Спасибо!</p>
                    </div>
                </div>
            </div>
            <div class="col-5 tr desctop">
            <h2 class="text--title">ЧТО ГОВОРЯТ</h2>
            <p class="text--title title">Те, кто уже оформил кредит в AFA</p>
                <div class="slider_control">
                    <div class="slide"><p><span>1</span> / 5</p></div>
                    <div class="slide"><p><span>2</span> / 5</p></div>
                    <div class="slide"><p><span>3</span> / 5</p></div>
                    <div class="slide"><p><span>4</span> / 5</p></div>
                    <div class="slide"><p><span>5</span> / 5</p></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sec_15">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2 class="text--title">Хотите <br> получить займ?</h2>
                <div class="item">
                    <p class="text--title title">Заполните эту форму</p>
                    <p class="text">— и специалист AFA свяжется <br> с вами через  20 минут.</p>
                </div>
            </div>
            <div class="col-6">
                <div class="form_block">
                    <form  method="POST" class="form-inline db-form" action="javascript:void(null);">

                        <!-- Hidden DB Fields -->

                        <input type="hidden"  name="registrationType" value="default_registration">
                        <input type="hidden"   name="orderType" value="Zayavka">
                        <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                        <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                        <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                        <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                        <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                        <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                        <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                        <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                        <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                        <input type="hidden" name="city" value="">
                        <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                        <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                        <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                        <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                        <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                        <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">

                        <!-- Zoho -->
                        <!-- <input type="hidden" name="product_id" value="2167809000000656177">
                        <input type="hidden" name="product_name" value="&laquo;BootCamp 2&raquo;"> -->
                        <!-- Zoho -->

                        <!-- END Hidden DB Fields -->

                        <!-- Hidden Required Fields -->
                        <input type="hidden" name="project_name" value="AFA">
                        <input type="hidden" name="admin_email" value="zayavka@afa.com.ua">
                        <input type="hidden" name="second_admin_email" value="zayavka@afa.com.ua">
                        <input type="hidden" name="form_subject" value="Свяжитесь со мной">
                        <!-- END Hidden Required Fields -->

                        <span class="input field">
                            <input id="name_01" required="" class="form-control name input__field " type="text" name="name" />
                            <label class="input__label" for="name_01">
                                <span class="input__label-content">имя</span>
                            </label>
                        </span>


                        <span class="input field">
                            <input id="tel_01" required="" class="form-control name input__field" type="tel" name="phone"/>
                            <label class="input__label" for="tel_01">
                                <span class="input__label-content">телефон</span>
                            </label>
                        </span>


                        <span class="input field">
                            <input id="mail_01" required="" class="form-control name input__field" type="email" name="email" />
                            <label class="input__label" for="mail_01">
                                <span class="input__label-content">e-mail</span>
                            </label>
                        </span>


                        <button type="submit" class="btn" name="send">ПОЛУЧИТЬ ЗАЙМ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sec_16">
    <div id="map"></div>
    <div class="container">
        <div class="row">
            <div class="col-6 col-offset-6">
                <div class="contacts">
                    <h2 class="text--title">Контакты</h2>
                    <ul class="contacts_list">
                        <li><a target="_blank" href="https://goo.gl/maps/5FY8sJfNYgp">г. Киев, ул. Мечникова, 2 <br> БЦ “Парус”, 13 этаж</a></li>
                        <li><a href="tel:0443900280">(044) 390-02-80</a></li>
                        <li>С 10:00 до 18:00</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="img/logo_btm.png" alt="Логотип AFA" class="logo">
                <ul class="social">
                    <li><a target="_blank" href="https://www.facebook.com/AFACredit/"><img src="img/fb.png" alt=""></a></li>
                    <li><a target="_blank" href="https://vk.com/afa_kiev"><img src="img/vk.png" alt=""></a></li>
                    <li><a target="_blank" href="https://twitter.com/AFA_Credit"><img src="img/twitter.png" alt=""></a></li>
                </ul>
                <a class="md-trigger text--title btn_call flex" data-modal="modal_callback"><span>мы перезвоним</span></a>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="politics">
                    <a class="md-trigger" data-modal="modal_politics_one">Политика  конфиденциальности</a>
                    <a class="md-trigger" data-modal="modal_politics_two">Отказ от  ответственности</a>
                    <a class="md-trigger" data-modal="modal_politics_three">Согласие с  рассылкой</a>
                </div>
            </div>
            <div class="col-2">
                <a class="logo_rezart" target="_blank" href="http://rezart.com.ua/"><img src="img/logo-rezart.png" alt="" ></a>
                <a class="footer-fire" target="_blank" href="http://willcatchfire.com/"></a>
            </div>
        </div>
    </div>
</footer>


<div class="hidden">
    <div class="md-modal md-effect-1" id="modal_callback">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="colored">Заказ обратного звонка</h2>
            </div>
            <div class="form-wrap">
                <form  method="POST" class="form-inline db-form" action="javascript:void(null);">
                    <!-- Hidden DB Fields -->

                    <input type="hidden"  name="registrationType" value="default_registration">
                    <input type="hidden"   name="orderType" value="Zayavka">
                    <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                    <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                    <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                    <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                    <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                    <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                    <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                    <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                    <input type="hidden" name="city" value="">
                    <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                    <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                    <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                    <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                    <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                    <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">

                    <!-- Zoho -->
                <!--     <input type="hidden" name="product_id" value="1212">
                    <input type="hidden" name="product_name" value="&laquo;BootCamp 2&raquo;"> -->
                    <!-- Zoho -->

                    <!-- END Hidden DB Fields -->

                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="project_name" value="AFA">
                    <input type="hidden" name="admin_email" value="inga.erastova@gmail.com">
                    <input type="hidden" name="second_admin_email" value="zayavka@afa.com.ua">
                    <input type="hidden" name="form_subject" value="Обратный звонок">
                    <!-- END Hidden Required Fields -->

                    <span class="input field">
                        <input id="name_02" required="" class="form-control name input__field " type="text" name="name" />
                        <label class="input__label" for="name_02">
                            <span class="input__label-content">имя</span>
                        </label>
                    </span>


                    <span class="input field">
                        <input id="tel_02" required="" class="form-control name input__field" type="tel" name="phone"  />
                        <label class="input__label" for="tel_02">
                            <span class="input__label-content">телефон</span>
                        </label>
                    </span>


                    <button type="submit" class="btn" name="send">Перезвоните мне</button>

                </form>

                <div class="md_bottom">
                    <p class="tc t_small"><i class="fa fa-lock"></i>  *Ваши данные никогда не будут переданы 3-м лицам</p>
                </div>
            </div>
        </div>
    </div>

    <div class="md-modal md-effect-8 md_large" id="modal_politics_one">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="text--title tc">Политика конфиденциальности</h2>
            </div>
            <div class="md_content tl">
                <p>Ваша конфиденциальность очень важна для нас. Мы хотим, чтобы Ваша работа в Интернет по возможности была максимально приятной и полезной, и Вы совершенно спокойно использовали широчайший спектр информации, инструментов и возможностей, которые предлагает Интернет.</p>
                <p>Личная информация Членов, собранная при регистрации (или в любое другое время) преимущественно используется для подготовки Продуктов или Услуг в соответствии с Вашими потребностями. Ваша информация не будет передана или продана третьим сторонам. Однако мы можем частично раскрывать личную информацию в особых случаях, описанных в &laquo;Согласии с рассылкой&raquo;</p>
                <p><strong>Какие данные собираются на сайте</strong></p>
                <p>При добровольной регистрации на получение рассылки вы отправляете свое Имя и E-mail через форму регистрации.</p>
                <p><strong>С какой целью собираются эти данные</strong></p>
                <p>Имя используется для обращения лично к вам, а ваш e-mail для отправки вам писем рассылок, новостей, полезных материалов, коммерческих предложений.</p>
                <p>Ваши имя и e-mail не передаются третьим лицам, ни при каких условиях кроме случаев, связанных с исполнением требований законодательства.</p>
                <p>Вы можете отказаться от получения писем рассылки и удалить из базы данных свои контактные данные в любой момент, кликнув на ссылку для отписки, присутствующую в каждом письме.</p>
                <p><strong>Как эти данные используются</strong></p>
                <p>При помощи этих данных собирается информация о действиях посетителей на сайте с целью улучшения его содержания, улучшения функциональных возможностей сайта и, как следствие, создания качественного контента и сервисов для посетителей.</p>
                <p>Вы можете в любой момент изменить настройки своего браузера так, чтобы браузер блокировал все файлы или оповещал об отправке этих файлов. Учтите при этом, что некоторые функции и сервисы не смогут работать должным образом.</p>
                <p><strong>Как эти данные защищаются</strong></p>
                <p>Для защиты Вашей личной информации мы используем разнообразные административные, управленческие и технические меры безопасности. Наша Компания придерживается различных международных стандартов контроля, направленных на операции с личной информацией, которые включают определенные меры контроля по защите информации, собранной в Интернет.</p>
                <p>Наших сотрудников обучают понимать и выполнять эти меры контроля, они ознакомлены с нашим Уведомлением о конфиденциальности, нормами и инструкциями.</p>
                <p>Тем не менее, несмотря на то, что мы стремимся обезопасить Вашу личную информацию, Вы тоже должны принимать меры, чтобы защитить ее.</p>
                <p>Мы настоятельно рекомендуем Вам принимать все возможные меры предосторожности во время пребывания в Интернете. Организованные нами услуги и веб-сайты предусматривают меры по защите от утечки, несанкционированного использования и изменения информации, которую мы контролируем. Несмотря на то, что мы делаем все возможное, чтобы обеспечить целостность и безопасность своей сети и систем, мы не можем гарантировать, что наши меры безопасности предотвратят незаконный доступ к этой информации хакеров сторонних организаций.</p>
                <p>В случае изменения данной политики конфиденциальности вы сможете прочитать об этих изменениях на этой странице или, в особых случаях, получить уведомление на свой e-mail.</p>
            </div>
        </div>
    </div>
    <div class="md-modal md-effect-8 md_large" id="modal_politics_two">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="text--title tc">Отказ от ответственности</h2>
            </div>
            <div class="md_content tl">
                <p><strong>В соответствии с действующим законодательством</strong>, Администрация отказывается от каких-либо заверений и гарантий, предоставление которых может иным образом подразумеваться, и отказывается от ответственности в отношении Сайта, Содержимого и их использования.</p>
                <p>Ни при каких обстоятельствах Администрация Сайта не будет нести ответственности ни перед какой стороной за какой-либо прямой, непрямой, особый или иной косвенный ущерб в результате любого использования информации на этом Сайте или на любом другом сайте, на который имеется гиперссылка с нашего cайта, возникновение зависимости, снижения продуктивности, увольнения или прерывания трудовой активности, а равно и отчисления из учебных учреждений, за любую упущенную выгоду, приостановку хозяйственной деятельности, потерю программ или данных в Ваших информационных системах или иным образом, возникшие в связи с доступом, использованием или невозможностью использования Сайта, Содержимого или какого-либо связанного интернет-сайта, или неработоспособностью, ошибкой, упущением, перебоем, дефектом, простоем в работе или задержкой в передаче, компьютерным вирусом или системным сбоем, даже если администрация будет явно поставлена в известность о возможности такого ущерба.</p>
                <p>Пользователь соглашается с тем, что все возможные споры будут разрешаться по нормам права.</p>
                <p>Пользователь соглашается с тем, что нормы и законы о защите прав потребителей не могут быть применимы к использованию им Сайта, поскольку он не оказывает возмездных услуг.</p>
                <p>Используя данный Сайт, Вы выражаете свое согласие с &laquo;Отказом от ответственности&raquo; и установленными Правилами и принимаете всю ответственность, которая может быть на Вас возложена.</p>
            </div>
        </div>
    </div>

    <div class="md-modal md-effect-8 md_large" id="modal_politics_three">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="text--title tc">Согласие с рассылкой</h2>
            </div>
            <div class="md_content tl">
                <p>Заполняя форму на нашем сайте &mdash; вы соглашаетесь с нашей политикой конфиденциальности. Также вы соглашаетесь с тем, что мы имеем право разглашать ваши личные данные в следующих случаях:</p>
                <p><strong>1) С Вашего согласия:</strong>&nbsp;Во всех остальных случаях перед передачей информации о Вас третьим сторонам наша Компания обязуется получить Ваше явное согласие. Например, наша Компания может реализовывать совместное предложение или конкурс с третьей стороной, тогда мы попросим у Вас разрешение на совместное использование Вашей личной информации с третьей стороной.</p>
                <p><strong>2) Компаниям, работающим от нашего лица:</strong>&nbsp;Мы сотрудничаем с другими компаниями, выполняющими от нашего лица функции бизнес поддержки, в связи с чем Ваша личная информация может быть частично раскрыта. Мы требуем, чтобы такие компании использовали информацию только в целях предоставления услуг по договору; им запрещается передавать данную информацию другим сторонам в ситуациях, отличных от случаев, когда это вызвано необходимостью предоставления оговоренных услуг. Примеры функций бизнес поддержки: выполнение заказов, реализация заявок, выдача призов и бонусов, проведение опросов среди клиентов и управление информационными системами. Мы также раскрываем обобщенную неперсонифицированную информацию при выборе поставщиков услуг.</p>
                <p><strong>3) Дочерним и совместным предприятиям:</strong>&nbsp;Под дочерним или совместным предприятием понимается организация, не менее 50% долевого участия которой принадлежит Компании. При передаче Вашей информации партнеру по дочернему или совместному предприятию наша Компания требует не разглашать данную информацию другим сторонам в маркетинговых целях и не использовать Вашу информацию каким-либо путем, противоречащим Вашему выбору. Если Вы указали, что не хотите получать от нашей Компании какие-либо маркетинговые материалы, то мы не будем передавать Вашу информацию своим партнерам по дочерним и совместным предприятиям для маркетинговых целей.</p>
                <p><strong>4) На совместно позиционируемых или партнерских страницах:</strong>&nbsp;Наша Компания может делиться информацией с компаниями-партнерами, вместе с которыми реализует специальные предложения и мероприятия по продвижению товара на совместно позиционируемых страницах нашего сайта. При запросе анкетных данных на таких страницах Вы получите предупреждение о передаче информации. Партнер использует любую предоставленную Вами информацию согласно собственному уведомлению о конфиденциальности, с которым Вы можете ознакомиться перед предоставлением информации о себе.</p>
                <p><strong>5) При передаче контроля над предприятием:</strong>&nbsp;Наша Компания оставляет за собой право передавать Ваши анкетные данные в связи с полной или частичной продажей или трансфертом нашего предприятия или его активов. При продаже или трансферте бизнеса наша Компания предоставит Вам возможность отказаться от передачи информации о себе. В некоторых случаях это может означать, что новая организация не сможет далее предоставлять Вам услуги или продукты, ранее предоставляемые нашей Компанией.</p>
                <p><strong>6)  При проведении мероприятий: </strong> Заполняя анкету участника на како-либо событие Компании, мы можем делиться Вашими данными с другими участниками. Это делается для удобства коммуникации между участниками мероприятия. Эти данные не будут переданы лицам, которые не являются участниками мероприятия, и которые не соответствуют пунктам в разделе «Согласие с рассылкой». </p>
                <p><strong>7) Правоохранительным органам:</strong>&nbsp;Наша Компания может без Вашего на то согласия раскрывать персональную информацию третьим сторонам по любой из следующих причин: во избежание нарушений закона, нормативных правовых актов или постановлений суда; участие в правительственных расследованиях; помощь в предотвращении мошенничества; а также укрепление или защита прав Компании или ее дочерних предприятий.</p>
                <p>Вся личная информация, которая передана Вами для регистрации на нашем сайте, может быть в любой момент изменена либо полностью удалена из нашей базы по Вашему запросу. Для этого Вам необходимо связаться с нами любым удобным для Вас способом, использую контактную информацию, размещенную в специальном разделе нашего сайта.</p>
                <p>Если Вы захотите отказаться от получения писем нашей регулярной рассылки, вы можете это сделать в любой момент с помощью специальной ссылки, которая размещается в конце каждого письма.</p>
            </div>
        </div>
    </div>
    <div class="md-modal md-effect-4" id="modal_callback_ok">

        <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
                </span>

                <p class="text--title title">Менеджер AFA <br /> уже получил ваши расчеты. </p>
                <p class="text">Он позвонит вам в течении  20 минут.</p>
                <img src="img/separtor_ok.png" alt="" class="separator">
                <p class="text">А пока вы можете ознакомиться <br /> с кредитными программами</p>
                <a class="md-close btn flex"><span>Вернуться на сайт</span></a>
            </div>
        </div>

        <div class="md-modal md-effect-7" id="modal_callback_2">

            <div class="md-content">
                    <p class="text--title title">Калькулятор пока еще в разработке.</p>
                    <div class="cb tc">
                    <a class="md-close btn flex" style="margin:0 auto;"><span>Вернуться на сайт</span></a>
                </div>
                </div>
            </div>
        <a id="call_ok" class="md-trigger hidden" data-modal="modal_callback_ok"></a>
    <div class="md-overlay"></div>
  </div>
    <!-- All modals end -->



        <!--[if lt IE 9]>
        <script src="libs/html5shiv/es5-shim.min.js"></script>
        <script src="libs/html5shiv/html5shiv.min.js"></script>
        <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
        <script src="libs/respond/respond.min.js"></script>
        <![endif]-->

    <!--[if lt IE 9]>
    <script src="libs/html5shiv/es5-shim.min.js"></script>
    <script src="libs/html5shiv/html5shiv.min.js"></script>
    <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="libs/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Load Scripts Start -->
    <script>var scr = {"scripts":[
        {"src" : "http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU", "async" : false},
        {"src" : "https://maps.googleapis.com/maps/api/js?key=AIzaSyATfi0TMf7-xe0An-ApHqaOr2z20XCXscM", "async" : false},
        {"src" : "js/libs.js", "async" : false},
        {"src" : "js/common.js", "async" : false}
        ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
    </script>
    <!-- Load Scripts End -->

</body>
</html>

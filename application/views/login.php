<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Inicio de Sesión">
    <meta name="author" content="Departamento de Innovación e Implementación de Sistemas">
    <title>Login</title>

    <link rel="shortcut icon" href="<?= base_url() ?>imgRep/logopje.png">

    <!-- Bootstrap -->
    <link href="<?= base_url() ?>assets/css/bootstrapMM.min.css" rel="stylesheet" media="screen">

    <link href="<?= base_url() ?>assets/css/styleMM.css" rel="stylesheet">

    <!-- Botones -->
    <link href="<?= base_url() ?>assets/css/botones.css" rel="stylesheet">

    <!-- Roboto  -->
    <link href="<?= base_url() ?>assets/css/font-Roboto.css" rel="stylesheet">

    <style type="text/css">
        #header {
            background-color: #971726;
            color: #ffffff;
            padding: 20px;
        }

        #navbar-pie {
            background-color: #971726;
            color: #fffff;
        }
        /* Sticky footer styles
      -------------------------------------------------- */

        html {
            position: relative;
            min-height: 100%;
        }
        body {
            /*margin-bottom: 60px;*/
           padding-bottom: 120px;
           font-family: 'Roboto', sans-serif !important;
           -webkit-font-smoothing: antialiased !important;
           background-color:#f0f3f4;
           line-height: 1.42857143 !important;
           color: #58666e !important;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
        }

        #wrap {
            min-height: 100%;
            height: 100%;
            margin: 0 auto -80px;
        }

        #push,
        #footer {
            background-color: #971726;
            color: #fffff;
        }

        .logo img {
            width: auto;
            height: 100px;
            margin: 0 auto;
        }

        .btnlogin {
            background-color: #616161;
            color: #FFF;
        }

        .btnlogin:hover,
        .btnlogin:active,
        .btnlogin:focus {
            color: #fff;
            font-weight: bold;
        }

        .btnlogin: {
            color: #fff;
            font-weight: bold;
        }

        .pie {
            color: #fff;
        }
    </style>

</head>

<body id="mimin" class="dashboard">
    <div id="wrap">
        <header class="hidden-xs">
            <div id="header" class="text-center">
                <!-- <img src="img/logo.png" class="logo" alt="...">-->
                <h1>Poder Judicial del Estado de Yucatán</h1>
                <h4>Acceso a Aplicaciones Web</h4>
            </div>
        </header>
        <div class="container-fluid mimin-wrapper">

        </div>

        <?php
  $attributes = array("class" => "form-signin", "id" => "loginform", "name" => "loginform");
  echo form_open("", $attributes); ?>
            <div class="panel periodic-login">
                <div class="panel-body text-center">
                    <div class="logo">
                        <img src="<?= base_url() ?>assets/img/logopje.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="form-group">
                        <div class="form-group form-animate-text" style="margin-top: 40px !important;">
                            <input type="text" class="form-text" id="txt_username" name="txt_username" onkeypress="return isAlphaNumericKey(event);"
                            onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false"
                            value="<?php echo set_value('txt_username'); ?>" required>
                            <span class="bar"></span>
                            <label>Usuario</label>
                            <?php echo form_error('txt_username'); ?>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top: 40px !important;">
                            <input id="txt_password" name="txt_password" type="password" value="<?php echo set_value('txt_password'); ?>"
                            onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false"
                            class="form-text" required>
                            <span class="bar"></span>
                            <label>Contraseña</label>
                        </div>
                        <?php echo form_error('txt_password'); ?>
                        <?php echo $this->session->flashdata('msg'); ?>
                        <div class="form-group">
                            <button id="btn_login" name="btn_login" type="submit" class="btn-block button" value="Acceder"><span>Acceder </span></button>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
            <div id="push"></div>
    </div>
    <div id="footer" class="footer hidden-xs">
        <div class="container text-center pie">
            <p> ©
                <?php echo date("Y");?> Copyright: PODER JUDICIAL DEL ESTADO DE YUCATÁN </p>
            <p class="hidden-xs hidden-sm">DESARROLLADO POR EL DEPARTAMENTO DE INNOVACIÓN E IMPLEMENTACIÓN DE SISTEMAS</p>
        </div>
    </div>

    <script src="<?= base_url() ?>js/jquery-2.2.0.min.js"></script>
    <script src="<?= base_url() ?>js/bootstrapMM.min.js"></script>
    <script src="<?= base_url() ?>js/main.js"></script>

    <script type="text/javascript">
        function isAlphaNumericKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode
            if (charCode > 32 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && (charCode < 48 || charCode > 57) && (charCode != 241) && (charCode != 209))
                return false;
            return true;
        }
  </script>

</body>

</html>

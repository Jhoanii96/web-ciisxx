<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <title>CV Alumnos | ESIS</title>

  <link href="src/css/bootstrap.css" rel="stylesheet" />
  <link href="src/css/coming-sssoon.css" rel="stylesheet" />
  <link rel="shortcut icon" href="src/assets/media/image/icon.png">

  <!--     Fonts     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Titillium+Web&display=swap" rel="stylesheet">

  <style type="text/css">
    body,
    h1,
    h2,
    h3,
    h4 {
      /*font-family: 'Open Sans Condensed', sans-serif;*/
      font-family: 'Titillium Web', sans-serif;
    }

    .freebirdFormviewerViewCenteredContent {
      width: 90% !important;
    }

    .cover {
      position: relative;
    }

    .main .motto {
      min-height: 10vw !important;
    }
  </style>
</head>

<body>

  <div class="main" style="background-image: url('src/image/23388306863_b1ac96d46a_k.jpg'); width: 100%;">
    <div class="cover black" data-color="orange"></div>
    <h1 class="logo" style="font-size: 4vw;margin-top: 10vw;padding-left: 40px;padding-right: 40px;">
      XXV Promoción de la Escuela de Ingeniería en Informática y Sistemas
    </h1>
    <a href="<?= FOLDER_PATH ?>/src/assets/media/CVXXV.pdf?id=DD48A5" target="_blank"><h4 class="motto" style="font-size: 3vw;color: brown;">Conócenos</h4></a>
    <div class="container" style="margin-left: 0px; margin-right: 0px;width: 100%;">

      <div class="content">

        <div class="subscribe">
          <div class="form-group" style="width: 100%;">
          <iframe id="frpdf" style="border:1px solid #666CCC; width: 100%;" title="PDF in an i-Frame" src="<?= FOLDER_PATH ?>/src/assets/media/CVXXV.pdf?id=DD48A5" frameborder="1" scrolling="auto" height="1100"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

<script src="src/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="src/js/bootstrap.min.js" type="text/javascript"></script>

</html>
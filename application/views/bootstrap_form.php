<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/assets/css/mycss.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">   <!-- calendar -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> <!-- end calendar --> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/hogan.js/3.0.2/hogan.min.js"></script> <!-- hogan.js -->

    <script type='text/javascript' language="javascript" src="<?php echo base_url(); ?>application/assets/js/jsForm.js"></script>
    
    
    
</head>
<body>
<!-- https://getbootstrap.com/docs/4.0/components/input-group/ -->
<form class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">€</span>
    <input type="text" class="form-control" placeholder="Price">
  </div>
</form>

<form class="input-group mb-3">
    <input type="text" class="form-control" placeholder="time" id="datetimepicker1"/> <!-- value="20/01/2020" -->
    <div class="input-group-append">
        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span> <!-- glyphicon  não existe em bootstrap v4-->
    </div>                                  <!-- font awesome ou octicons -->
</form>

<!-- requer id e for \ bom para tablets ou phone-->
<form class="custom-control custom-switch mb-3">
  <input type="checkbox" class="custom-control-input" id="toggleSwitch">
  <label class="custom-control-label" for="toggleSwitch">toggle desaparece agora é switch</label>
</form>

<!-- wizard controll é uma especie de formulário com várias etapas -->
<!-- https://colorlib.com/etc/bwiz/colorlib-wizard-8/index.html -->

    <!-- Vários forms de vários tipos -->
    <!-- http://bootstrapformhelpers.com/ -->

    <!-- Vários forms de vários tipos -->
    <!-- http://getfuelux.com/index.html -->

    <!-- Vários widgets forms de vários tipos (sem o bootstrap) -->
    <!-- https://jqueryui.com/ -->

<!-- sugestões 3 tipos de técnicas de sugestão
    1º local - sugestões ficam escritas no ficheiro HTML (mts palavras é mau)
    2º prefecth - Json file , ficam em cache
    3º remote - têm de ser rápidas caso venham do servidor (má internet ou mts valores)
-->
    <!-- jqueryUI -->
<form class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Sugestão(Linguagens)" id="tags">
</form>
    
    <!-- https://github.com/twitter/typeahead.js o CSS é bah e nem funciona -->

</body>
</html>
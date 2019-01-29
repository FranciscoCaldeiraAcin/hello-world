<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bind data to Form</title>

	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.2.1/cerulean/bootstrap.min.css" rel="stylesheet" integrity="sha384-62+JPIF7fVYAPS4itRiqKa7VU321chxfKZRtkSY0tGoTwcUItAFEH/HGTpvDH6e6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/assets/css/mycss.css">

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script type='text/javascript' src="<?php echo base_url(); ?>application/assets/js/knockout-3.4.2.js"></script> <!-- Knockout.js library-->
  <script type='text/javascript' language="javascript" src="<?php echo base_url(); ?>application/assets/js/myjs5.js"></script>
  

</head>
<body>

  <form id="person-form" class="form-horizontal">
    <!-- para o for do label, ter = o id e o name -->
    <div class="form-group">
      <label for="fullname" class="col-sm-3">Name</label>
      <input type="text" class="form-control col-sm-3" id="fullname"  name="fullname" placeholder="name" data-bind="value: fullname">
    </div>

    <div class="form-group">
      <label for="age" class="col-sm-3">Age</label>
      <input type="text" class="form-control col-sm-3" id="age" name="age" placeholder="Age" data-bind="value: age">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>

</body>
</html>


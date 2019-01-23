<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.2.1/cerulean/bootstrap.min.css" rel="stylesheet" integrity="sha384-62+JPIF7fVYAPS4itRiqKa7VU321chxfKZRtkSY0tGoTwcUItAFEH/HGTpvDH6e6" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type='text/javascript' language="javascript" src="<?php echo base_url(); ?>application/assets/js/myjs.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

  <style>
		body{
			margin:30px;
		}
	</style>
</head>
<body>

<form>
      
        <!-- <legend>Legend</legend>
        <div class="form-group row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
          </div>
        </div> -->

		<div class="form-group">
          <label for="fullname">Name</label>
          <input type="text" id="fullname" name="fullname" class="form-control">
        </div>

        <!-- <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        </div> -->

        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div> 

		<div class="form-group">
          <label for="exampleTextarea">Example textarea</label>
          <textarea class="form-control" id="exampleTextarea" rows="3" name="textarea"></textarea>
        </div>

		<div class="form-group"> 
          <label for="exampleInputFile">File input</label>
          <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
          <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
    </div>

        <div class="form-group">
          <label for="exampleSelect1">Example select</label>
          <select class="form-control" id="exampleSelect1" name="optionsSelect">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>

	<!-- rectangulos -->
		
		  <div class="form-check">
        <label class="form-check-label">
          <input class="form-group-input" type="checkbox" name="optionsCheckbox" value="1">
          Option 1
        </label>
      </div>

      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="optionsCheckbox" value="2" checked="">
          Option 2
        </label>
      </div>

      <div class="form-check disabled">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="optionsCheckbox" value="3" disabled="">
          Option 3
        </label>
      </div>
	 
      <br>
        <!-- bolas -->
        
		  <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
          Option one 
        </label>
      </div>

      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
          Option two 
        </label>
      </div>

      <div class="form-check disabled">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
          Option three 
        </label>
      </div>
      
        <!-- <div class="form-group">
          <label for="exampleSelect2">Example multiple select</label>
          <select multiple="" class="form-control" id="exampleSelect2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div> -->

        <button type="submit" class="btn btn-primary">Submit</button>

</form>
<!-- AULA3 -->
<!-- <script>
	$(':text').css('border','3px solid red');
	$(':password').css('border','3px solid black');
	$('textarea').css('border','3px solid blue');
	$(':file').css('border','3px solid green');
	//alert($(':selected').text());
	//$(':checkbox').css('border','3px solid yellow');//$(':ckecked').css('border','3px solid yellow');//notwork
	//$(':radio').css('border','3px solid gey');//notwork
</script> -->

<!-- <script>
	setTimeout(function () {
		$(':focus').css('border','3px solid red');
	}, 3000);//3segds
	
	$(':enabled').css('border','3px solid red');
  $(':disabled').css('border','3px solid green'); //disabled="disabled" inline
</script> -->

<!-- <script> //not working in checkbox and 
  $(':input').focus(function () {
    $(this).css('border','3px solid red');
  });

  $(':input').blur(function () {
    $(this).css('border','3px solid red');
  });
</script> -->

<!-- <script>
  $(':input').change(function () {
    $(this).css('border', '3px solid red');
  });
  
  $(':text').val('foo');

  $(':text').val(function (index, original) {   //value="val"
    return original+' foo';
  });
</script> -->

<!-- <script> //to serializa it needs a name!! 
  //cant put a name on file to serialize
  alert($('form').serialize());

  var a = $('form').serializeArray();
  $.each(a, function(i, field){
    console.log(field.name + ', ' + field.value); //see on f12 console
  })
</script> -->

<!-- <script>
  $('form').submit(function(event){
    alert(1);
    event.preventDefault(); //the url don't have more name=val&pass=&textarea=
  });
</script> -->

</body>
</html>


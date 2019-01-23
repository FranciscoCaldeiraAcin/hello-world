//base_url
//delete index_page
//alter .htacces
//add helper url
//add php echo base_url() on call on html file
//add new script <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

                                //AULA4

$(document).ready(function(){ 
//https://jqueryvalidation.org/   >documentation

    //método criado para regra(rule)
    $.validator.addMethod("meow", function(value, element) {
        return /^A/.test( value );
    }, 'Please enter a A in the beginning.');

    $('form').validate({
        rules: {
            //NAME do input no html
            fullname: {
              required: true,
              minlength: 3,
              maxlength: 10,
              meow: true, //regra nova, escrita em método
            },
            // email: {
            //     required: true,
            //     email: true
            // },
            password: {
                required: true,
            },
        }

      });

});
    



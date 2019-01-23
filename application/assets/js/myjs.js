//base_url
//delete index_page
//alter .htacces
//add helper url
//add php echo base_url() on call on html file
//add new script <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

                                //AULA4
$(document).ready(function(){ 

    $('form').validate({
        rules: {
            //NAME do input
            fullname: {
              required: true,
            },
            // email: {
            //     required: true,
            //     email: true
            // },
            password: {
                required: true,
                email: true
            },

        }

      });

 });
    



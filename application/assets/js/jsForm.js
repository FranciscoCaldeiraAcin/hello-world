//for form_w_js.php view
$(document).ready(function(){

    //date picker UI jquery
    $('#datetimepicker1').datepicker({
        //options
        dateFormat: "dd-mm-yy"
    });

    //auto complete jqueey widget 
    let availableTagsLocal = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
    ];

    $( '#tags' ).autocomplete({
        source: availableTagsLocal,
        delay: 2000, //tempo a aparecer a caixa~
        autoFocus:true, //coloca o primeiro resultado a azul
    });
    
    //typeahead.js(autocomplete cocó) + hogan.js -> do select vinha o restante do array
    var data = {
        screenName: "hogan.js",
    };
      
    var template = Hogan.compile("Follow @{{screenName}}.");
    var output = template.render(data);
    console.log(output);

});
    
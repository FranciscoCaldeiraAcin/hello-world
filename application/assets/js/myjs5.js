$(document).ready(function(){
    //à mão-> binding
    // var person ={
    //     // para o id (fullname,age)
    //     fullname: "Alda",
    //     age:22
    // }

    // $('#fullname').val(person.fullname);
    // $('#age').val(person.age);

    // $('#person-form').submit(function (event){
    //     person.fullname = $('#fullname').val();
    //     person.age =  $('#age').val();

    //     console.log(person.fullname);
    //     console.log(person.age);
    //     event.preventDefault();//evita que vá para o servidor
    // });


    //com KO 
    var person ={
        fullname: ko.observable ("Alda"),
        age: ko.observable (22)
    }
    // popular com a   var
    ko.applyBindings(person);

    //dados alterados
    $('#person-form').submit(function (event){
        
        person.fullname = $('#fullname').val();
        person.age =  $('#age').val();
        console.log(person.fullname);
        console.log(person.age);

        event.preventDefault();//evita que vá para o servidor
    });

});



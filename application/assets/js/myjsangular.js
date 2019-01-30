$(document).ready(function(){
        //com Angular 
    var myApp = angular.module('teste', []);

    myApp.controller('PersonController', ['$scope', function($scope) {

        $scope.person = {
                         fullname:'chico' ,
                         age: 21
                        };
    }]);
    
    //dados alterados
    $('#person-form').submit(function (event){
        var scope = angular.element($('#controller')).scope();
        alert('name: ' + scope.person.fullname);
        
        event.preventDefault();//evita que vá para o servidor
    });
});



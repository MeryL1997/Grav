
var app = angular.module('universidadApp',[ ]);


app.controller('profesorCtrl', function($scope){
		
	$scope.profesor = profesorData;
	$scope.editando = {};


	$scope.editarProfesor = function(){

		angular.copy( $scope.profesor, $scope.editando );

	}

	$scope.guardarProfesor = function() {
		angular.copy($scope.editando, $scope.profesor);
	}

	$scope.cancelarFormulario = function() {
		$scope.editando = {};
	}
	
});

var profesorData = {
	nombre: "Mery Guadalupe Lema",
	bio: "Saludos estudiante. Mi nombre es Mery Guadalupe, encantado de conocerte. Soy una estudiante conformo parte de la Pucese sede Esmeraldas de la Escuela Ing.Sistema",
	edad: 22,
	foto: "img/juancarlos.jpg"
}
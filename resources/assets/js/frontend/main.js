var LobbyApp = angular.module('LobbyToolsApp', []);

LobbyApp.controller('TemasController', ['$scope','$http', function($scope,$http) {
  $scope.query = '';
  $scope.results = false;
  $scope.realizadas = [];
  $scope.rechazadas = [];
  $scope.loadingRealizadas = false;
  $scope.loadingRechazadas = false;

  $scope.onClickSearch = function(){
  	if(this.validate()){
  		this.makeCall();
  	}
  };

  $scope.validate = function(){
  	return $scope.query != '';
  };

  $scope.makeCall = function(){
  	$scope.results = true;

  	$scope.loadingRechazadas = true;
  	$http.get('/temas/api/rechazadas/'+$scope.query)
  	.then(function(response){
  		$scope.rechazadas = response.data.list;
  		$scope.loadingRechazadas = false;
  	});

  	$scope.loadingRealizadas = true;
  	$http.get('/temas/api/realizadas/'+$scope.query)
  	.then(function(response){
  		$scope.realizadas = response.data.list;
	  	$scope.loadingRealizadas = false;
  	});

  };

  $scope.openRealizadas = function(au){
    $scope.realizadas_selected = au;
    $('#realizadas_selected').modal('show')
  };

  $scope.openRechazadas = function(au){
    $scope.rechazadas_selected = au;
    $('#rechazadas_selected').modal('show')
  };

}]);

$(function(){

});
// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    /*
     Allows you to add data-method="METHOD to links to automatically inject a form with the method on click
     Example: <a href="{{route('customers.destroy', $customer->id)}}" data-method="delete" name="delete_item">Delete</a>
     Injects a form with that's fired on click of the link with a DELETE request.
     Good because you don't have to dirty your HTML with delete forms everywhere.
     */
    $('[data-method]').append(function(){
        return "\n"+
        "<form action='"+$(this).attr('href')+"' method='POST' name='delete_item' style='display:none'>\n"+
        "   <input type='hidden' name='_method' value='"+$(this).attr('data-method')+"'>\n"+
        "   <input type='hidden' name='_token' value='"+$('meta[name="_token"]').attr('content')+"'>\n"+
        "</form>\n"
    })
        .removeAttr('href')
        .attr('style','cursor:pointer;')
        .attr('onclick','$(this).find("form").submit();');

    /*
     Generic are you sure dialog
     */
    $('form[name=delete_item]').submit(function(){
        return confirm("Are you sure you want to delete this item?");
    });

    /*
     Bind all bootstrap tooltips
     */
    $("[data-toggle=\"tooltip\"]").tooltip();
    $("[data-toggle=\"popover\"]").popover();
    //This closes the popover when its clicked away from
    $('body').on('click', function (e) {
        $('[data-toggle="popover"]').each(function () {
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                $(this).popover('hide');
            }
        });
    });
});
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
//# sourceMappingURL=frontend.js.map

var myApp = angular.module('myApp', ['ui.router']);
	myApp.config(function($stateProvider, $urlRouterProvider, $locationProvider){

    $urlRouterProvider.otherwise('home');
    //$locationProvider.html5Mode(true);
    $stateProvider
        
        .state('home', {
            url: 'home',
            templateUrl: 'view/index.html'
        })
        
        .state('user', {
			url: 'user',
            templateUrl: 'view/user.html'
			});
	});
    

//# sourceMappingURL=app.js.map

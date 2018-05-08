<!DOCTYPE html>
<html ng-app="api">
<head>
	<title></title>
	<script src="librerias/js/api/jquery.min.js"></script>
	<script src="librerias/js/angular.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-base64/2.0.5/angular-base64.js"></script>
	
</head>
<body ng-controller="apiRest">
 GET ApiRest
</body>
</html>

<script type="text/javascript">
	
	 var app = angular.module('api', ['base64']);
     app.service('loginService',function($http){
        return{
            async:function (user,pass) {
                var authBase=window.btoa(user+":"+pass);
                return $http.get("http://192.168.14.6/apiRestFul/usuarios/users",{
                    headers:{
                        'Authorization':"Basic "+authBase
                    }
                });
            }
        }
     });
	 app.controller('apiRest',function($scope,$http,$sce,$window,$base64,loginService,$rootScope,$timeout){
	 	$scope.getUsers = function(){
	 		var user="jorgedavidc99@gmail.com";
			var pass = "davis"
	        var usuarios = loginService.async(user,pass);
	        return usuarios.then(function (response){
	        	console.log(response);
	        	$rootScope.xauth=response.config.headers.Authorization;
	        	console.log($rootScope.xauth);
	            return response;
	        });

   		 };
		 $scope.getUsers();
		 $timeout(function () {
          	alert($rootScope.xauth);
                  }, 1000); 

          
	 });
	 

</script>
<!DOCTYPE html>
<html>
<head>
	<title>Perhitungan Suhu</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="suhuApp" ng-controller="suhuCtrl">
	<h3>Perhitungan Suhu</h3>
	<div> Celcius : 
		<input type="number" ng-model="celcius">
		<p>Fahrenheit : {{fahrenheit()}} </p>
		<p>Kelvin : {{kelvin()}} </p>
		<p>Reamur : {{reamur()}} </p>
	</div>
	<script>
		var app = angular.module('suhuApp',[]);
		app.controller('suhuCtrl', function($scope) {
			$scope.celcius = 0;
			$scope.fahrenheit = function() {
				return (9/5) * $scope.celcius + 32; 
			}
			$scope.reamur = function() {
				return (4/5) * $scope.celcius; 
			}
			$scope.kelvin = function() {
				return $scope.celcius + 273; 
			}
		});
	</script>
</body>
</html>
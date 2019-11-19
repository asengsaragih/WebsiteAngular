<!DOCTYPE html>
<html lang="en">
<head>
    <title>Angular JS</title>

    <!-- Script untuk memanggil Angular JS secara online -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

</head>
<body>
	<h2>Belajar Tipe Data Angular JS</h2>

	<div ng-app="" ng-init="angka1=15;angka2=10">
		<p>Angka ke 1 : {{ angka1 }} </br> Angka ke 2: {{ angka2 }}</p>
		<p>Pertambahan : {{ angka1 + angka2 }} </p>
		<p>Pengurangan : {{ angka1 - angka2 }} </p>
		<p>Pengkalian : {{ angka1 * angka2 }} </p>
		<p>Pembagian : {{ angka1 / angka2 }} </p>
	</div>

	<!-- <div ng-app="">
    	<p>{{ 'Hello World' }}</p>
    	<p>{{ (5.2 + 5) * 3 }}</p>	
	</div> -->

	<!-- <div ng-app="" ng-init="warna=['merah','kuning','hijau','biru']">
		<p>{{warna[1]}}</p>
	</div> -->

	<!-- <div ng-app="" ng-init="hasil={nilai:80, index:'A'}">
		<p>{{hasil.nilai}}</p>
		<p>{{hasil.index}}</p>
	</div> -->


</body>
</html>
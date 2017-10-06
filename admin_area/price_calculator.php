<?php

if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{

  ?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>
</head>

<body ng-app="myApp" ng-controller="myCtrl" ng-init="loadComponents()" ng-cloak >

    <div class="container-fluid">
        <div class="row" style="background-color: white;">
            <div class="col-sm-6">
               <div>



        <md-chips ng-model="selectedComponents" md-autocomplete-snap md-transform-chip="transformChip($chip)" md-require-match="autocompleteDemoRequireMatch">
            <md-autocomplete md-selected-item-change="getTotal()" md-selected-item="selectedItem" md-search-text="searchText" md-items="item in querySearch(searchText)" md-item-text="item.name" placeholder="Search for a component">
                <span md-highlight-text="searchText">{{item.name}}</span>
            </md-autocomplete>
            <md-chip-template>
                <span>
          <strong>{{$chip.name}}-Rs.{{$chip.price}}</strong>
        </span>
            </md-chip-template>
        </md-chips>
        <br><br>
        <md-input-container style="width: 200px">
            <label>Working Hours</label>
            <md-select ng-model="workingHours" ng-change="getTotal()">
                <md-option ng-value="1">0-4 Hours</md-option>
                <md-option ng-value="2">4-8 Hours</md-option>
                <md-option ng-value="3">More than 8 Hours</md-option>

            </md-select>
        </md-input-container>
        <br>
        <br>
        <md-input-container style="width: 200px">
            <label>Elecbits Gareebi Rekha</label>
            <md-select ng-model="gareebiRekha" ng-change="getTotal()">
                <md-option ng-value="5">IP Gareeb</md-option>
                <md-option ng-value="6">Greater noida, Gurgaon, NCR</md-option>
                <md-option ng-value="7">Amity</md-option>

            </md-select>
        </md-input-container>
        <br>
        <br>
        <br>
        <br>

        <p style="font-size: 20px">Total Price: {{totalPrice}}</p>
        

    </div>


            </div>
            <div class="col-sm-6">
               <p style="font-size: 20px"> List of available components</p><br>
                <p ng-repeat="comp in components">{{$index+1}}.{{comp.name}}</p>
            </div>
        </div>



    </div>


   
    <script>
        var app = angular.module("myApp", ['ngMaterial']);
        app.controller("myCtrl", function($scope, $http) {

            $scope.readonly = false;
            $scope.selectedItem = null;
            $scope.searchText = null;
            $scope.querySearch = querySearch;
            $scope.autocompleteDemoRequireMatch = true;
            $scope.components;
            $scope.selectedComponents = [];
            $scope.workingHours = "";
            $scope.gareebiRekha="";
            $scope.totalPrice;
            

            $scope.getTotal = function() {

                var total = 0;
                for (var i = 0; i < $scope.selectedComponents.length; i++) {
                    total = total + $scope.selectedComponents[i].price;
                }
                if ($scope.workingHours == "1") {
                    total = total * 0.15 + total;
                }
                if ($scope.workingHours == "2") {
                    total = total * 0.125 + total;
                }
                if ($scope.workingHours == "3") {
                    total = total * 0.1+ total;
                }
                if ($scope.gareebiRekha == "5") {
                    total = total+200;
                }
                if ($scope.gareebiRekha == "6") {
                    total = total+500;
                }
                if ($scope.gareebiRekha == "7") {
                    total = total+1000;
                }
                $scope.totalPrice = total;

            }

            /**
             * Search for components
             */
            function querySearch(query) {
                var results = query ? $scope.components.filter(createFilterFor(query)) : [];
                return results;
            }

            /**
             * Create filter function for a query string
             */
            function createFilterFor(query) {
                var lowercaseQuery = angular.lowercase(query);

                return function filterFn(vegetable) {
                    return (vegetable._lowername.indexOf(lowercaseQuery) === 0);
                };
            }


            /**
             * Load the components using the api and converting names to lowercase
             */
            $scope.loadComponents = function() {

                $http.get("http://elecbits.in/api/crud_api/api.php/components?transform=1").then(function(response) {

                    $scope.components = response.data.components;

                    for (i = 0; i < $scope.components.length; i++) {

                        $scope.components[i]._lowername = $scope.components[i].name.toLowerCase();

                    }


                });

            }
        })
    </script>

</body>

</html>

<?php

}
?>
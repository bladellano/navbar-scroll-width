<?php include_once("_header.php"); ?>

<div class="container pg-default">
  <h3>Proposta Pedagógica</h3>
  <p><img src="http://lorempixel.com/400/200/sports/" class="rounded img-responsive float-left" alt="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus dicta sapiente reprehenderit tempore culpa sunt delectus ratione velit, doloribus et earum saepe, voluptate, ipsam omnis est quisquam. Modi, odit, sequi?</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus dicta sapiente reprehenderit tempore culpa sunt delectus ratione velit, doloribus et earum saepe, voluptate, ipsam omnis est quisquam. Modi, odit, sequi?</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus dicta sapiente reprehenderit tempore culpa sunt delectus ratione velit, doloribus et earum saepe, voluptate, ipsam omnis est quisquam. Modi, odit, sequi?</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus dicta sapiente reprehenderit tempore culpa sunt delectus ratione velit, doloribus et earum saepe, voluptate, ipsam omnis est quisquam. Modi, odit, sequi?</p>

  <hr>
  <h3>Teste</h3>
  <div ng-app="myItens" ng-controller="itens-controller">
    <p>Today's welcome message is:</p>
    <div class="item" ng-repeat="item in items">
      <div>{{item.deslogin}}</div>
    </div>
  </div>
</div>

<?php include_once("_footer.php"); ?>

<script>
  var app = angular.module('myItens', []);
  app.controller('itens-controller', function($scope, $http) {
    $scope.items = [];
    $http({
      method: 'GET',
      url   : 'produtos'
    }).then(function successCallback(response) {
      $scope.items = response.data;
    }, function errorCallback(response) {
      alert(response);
    });
  });
</script>
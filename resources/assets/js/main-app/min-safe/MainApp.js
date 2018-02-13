var
    app = angular.module('p6gdChapter', []);

app.config(['$interpolateProvider', function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
}]);

$(document).ready(function () {
});
app.controller('p6gdController', ['$scope', function ($scope) {
}]);

$(document).ready(function () {
});
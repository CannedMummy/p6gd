var
    app = angular.module('MainApp', ['ngSanitize', 'ngMessages', 'ngMaterial']);

app.config(['$interpolateProvider', '$mdThemingProvider', function ($interpolateProvider, $mdThemingProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');

    $mdThemingProvider.theme('default')
        .primaryPalette('purple', {
            'default': '900', // by default use shade 400 from the pink palette for primary intentions
            'hue-1': '100', // use shade 100 for the <code>md-hue-1</code> class
            'hue-2': '600', // use shade 600 for the <code>md-hue-2</code> class
            'hue-3': 'A100' // use shade A100 for the <code>md-hue-3</code> class
        })
        .accentPalette('orange');
}]);

$(document).ready(function () {
});
app.controller('p6gdController', ['$scope', function ($scope) {
}]);

$(document).ready(function () {
});
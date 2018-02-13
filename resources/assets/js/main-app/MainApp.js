var
    app = angular.module('p6gdChapter', []);

app.config(function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

$(document).ready(function () {
});
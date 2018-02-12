module.exports = function (grunt) {
    'use strict';

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        autoprefixer: grunt.file.readJSON('./grunt-config/autoprefixer.json'),
        coffee: grunt.file.readJSON('./grunt-config/coffee.json'),
        concat: grunt.file.readJSON('./grunt-config/concat.json'),
        csscomb: grunt.file.readJSON('./grunt-config/csscomb.json'),
        cssmin: grunt.file.readJSON('./grunt-config/cssmin.json'),
        htmlmin: grunt.file.readJSON('./grunt-config/htmlmin.json'),
        less: grunt.file.readJSON('./grunt-config/less.json'),
        ngAnnotate: grunt.file.readJSON('./grunt-config/ngAnnotate.json'),
        uglify: grunt.file.readJSON('./grunt-config/uglify.json'),
        watch: grunt.file.readJSON('./grunt-config/watch.json')
    });

    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-coffee');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-csscomb');
    grunt.loadNpmTasks('grunt-ng-annotate');

    grunt.registerTask('default', ['autoprefixer', 'csscomb:less', 'less', 'cssmin', 'coffee', 'ngAnnotate', 'concat', 'uglify', 'htmlmin']);

    grunt.registerTask('compile-less', ['autoprefixer', 'csscomb', 'less', 'cssmin']);
    grunt.registerTask('compile-css', ['autoprefixer', 'cssmin']);
}
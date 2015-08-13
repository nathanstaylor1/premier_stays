module.exports = function(grunt) {
 grunt.initConfig({

     less: {
         development: {
             options: {
                 paths: ["assets/css"]
             },
             files: {"assets/css/main.css": "assets/less/main.less"}
         },
         production: {
             options: {
                 paths: ["assets/less"],
                 cleancss: true
             },
             files: {"assets/css/main.css": "assets/less/main.less"}
         }
     },
     watch: {
         files: ['assets/less/*','assets/less/includes/*'],
         tasks: ['less']
    }
 });
 grunt.loadNpmTasks('grunt-contrib-less');
 grunt.loadNpmTasks('grunt-contrib-watch');
 grunt.registerTask('default', ['less']);
};
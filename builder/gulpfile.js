var gulp    = require('gulp');
var plumber = require('gulp-plumber');
var notify  = require('gulp-notify');
var myPath  = require('./gulp-tasks/path.js');


const gulpRequireTasks = require('gulp-require-tasks');

process.env.DISABLE_NOTIFIER = true;

// Invoke the module with options.
gulpRequireTasks({

  // Specify path to your tasks directory.
  path: process.cwd() + '/gulp-tasks' // This is default!

});

gulp.task('run', ['sass', 'scripts', 'img', 'copy']);
gulp.task('default', function(){
    gulp.watch(myPath + "/styles/**/*.scss", ['sass']);
    gulp.watch(myPath + "/script/**/*.js", ['scripts']);
    gulp.watch([myPath + "/images/**/*.*"], ['img']);
});

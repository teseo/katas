//Init dependencies
var gulp    = require('gulp');
var plugins = require('gulp-load-plugins')();

//Roman Kata
require('./gulp-tasks/roman')(gulp, plugins);
require('./gulp-tasks/watch-roman')(gulp);

//Prime Kata
require('./gulp-tasks/prime')(gulp, plugins);
require('./gulp-tasks/watch-prime')(gulp);

//Bowling Kata
require('./gulp-tasks/bowling')(gulp, plugins);
require('./gulp-tasks/watch-bowling')(gulp);

gulp.task('clear', function () {
    gulp.src('').pipe(plugins.run('clear'));
});

gulp.task('roman', ['clear','test-roman', 'watch-roman']);
gulp.task('prime', ['clear','test-prime', 'watch-prime']);
gulp.task('bowling', ['clear','test-bowling', 'watch-bowling']);

gulp.task('default', ['clear','test-bowling', 'test-roman', 'test-prime']);

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

//Bowling Kata
require('./gulp-tasks/calculator')(gulp, plugins);
require('./gulp-tasks/watch-calculator')(gulp);

gulp.task('clear', function () {
    gulp.src('').pipe(plugins.run('clear'));
});

gulp.task('default', function () {
    gulp.src('').pipe(plugins.run('phpspec run -fpretty'));
});

gulp.task('roman', ['clear','suite-roman', 'watch-roman']);
gulp.task('prime', ['clear','suite-prime', 'watch-prime']);
gulp.task('bowling', ['clear','suite-bowling', 'watch-bowling']);
gulp.task('calculator', ['clear','suite-calculator', 'watch-calculator']);
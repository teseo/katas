//Init dependencies
var gulp    = require('gulp');
var phpspec = require('gulp-phpspec');
var run     = require('gulp-run');
var notify  = require('gulp-notify');

//Tasks
gulp.task('test-prime', function () {
    gulp.src('primeNumbers/spec/**/*.php')
        .pipe(phpspec('', {notify: true}))
        .on('error', notify.onError({
            title: 'Crap',
            message: 'Your tests failed, Javi'
        }))
        .pipe(notify({
            title: 'Success',
            message: 'All tests have returned green!'
        }));
});
//Tasks
gulp.task('clear', function () {
    gulp.src('').pipe(run('clear'));
});

gulp.task('watch-prime', function() {
    gulp.watch(['primeNumbers/spec/**/*.php', 'primeNumbers/src/**/*.php'], ['test-prime']);
});

gulp.task('default', ['clear','test-prime', 'watch-prime']);
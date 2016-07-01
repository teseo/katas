//Init dependencies
var gulp    = require('gulp');
var phpspec = require('gulp-phpspec');
var run     = require('gulp-run');
var notify  = require('gulp-notify');

//Tasks
gulp.task('test-prime', function () {
    gulp.src('spec/PrimeFactorsSpec.php')
        .pipe(phpspec('', {notify: true, testSuite: 'spec/PrimeFactorsSpec.php'}))
        .on('error', notify.onError({
            title: 'Crap',
            message: 'Your factors tests failed, Javi'
        }))
        .pipe(notify({
            title: 'Success',
            message: 'All Factors tests have returned green!'
        }));
});
gulp.task('test-roman', function () {
    gulp.src('spec/RomanNumeralsConverterSpec.php')
        .pipe(phpspec('', {notify: true, testSuite: 'spec/RomanNumeralsConverterSpec.php'}))
        .on('error', notify.onError({
            title: 'Crap',
            message: 'Your Roman tests failed, Javi'
        }))
        .pipe(notify({
            title: 'Success',
            message: 'All Roman tests have returned green!'
        }));
});
//Tasks

gulp.task('clear', function () {
    gulp.src('').pipe(run('clear'));
});

gulp.task('watch-prime', function() {
    gulp.watch(['spec/PrimeFactorsSpec.php', 'src/PrimeFactors.php'], ['test-prime']);
});
gulp.task('watch-roman', function() {
    gulp.watch(['spec/RomanNumeralsConverterSpec.php', 'src/RomanNumeralsConverter.php'], ['test-roman']);
});

gulp.task('prime', ['clear','test-prime', 'watch-prime']);
gulp.task('roman', ['clear','test-roman', 'watch-roman']);
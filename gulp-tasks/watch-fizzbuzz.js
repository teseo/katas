module.exports = function(gulp) {
    gulp.task('watch-fizzbuzz', function () {
        return gulp.watch(['spec/FizzBuzzSpec.php', 'src/FizzBuzz.php'], {base: './'}, ['suite-fizzbuzz']);
    });
}
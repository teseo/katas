module.exports = function(gulp) {
    gulp.task('watch-calculator', function () {
        return gulp.watch(['spec/StringCalculatorSpec.php', 'src/StringCalculator.php'], {base: './'}, ['suite-calculator']);
    });
}
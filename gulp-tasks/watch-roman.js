module.exports = function(gulp) {
    gulp.task('watch-roman', function () {
        return gulp.watch(['spec/RomanNumeralsConverterSpec.php', 'src/RomanNumeralsConverter.php'], {base: './'}, ['suite-roman']);
    });
}
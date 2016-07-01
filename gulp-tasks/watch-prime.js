module.exports = function(gulp) {
    gulp.task('watch-prime', function () {
        return gulp.watch(['spec/PrimeFactorsSpec.php', 'src/PrimeFactors.php'], {base: './'}, ['test-prime']);
    });
}
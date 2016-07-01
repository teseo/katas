module.exports = function(gulp) {
    gulp.task('watch-prime', function () {
        return gulp.watch(['spec/BowlingGameSpec.php', 'src/BowlingGame.php'], {base: './'}, ['test-bowling']);
    });
}
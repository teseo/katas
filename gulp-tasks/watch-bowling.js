module.exports = function(gulp) {
    gulp.task('watch-bowling', function () {
        return gulp.watch(['spec/BowlingGameSpec.php', 'src/BowlingGame.php'], {base: './'}, ['suite-bowling']);
    });
}
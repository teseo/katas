module.exports = function(gulp, plugins) {
    gulp.task('suite-bowling', function () {
        return gulp.src('spec/BowlingGameSpec.php', {base: './'})
            .pipe(plugins.phpspec('', {notify: true, testSuite: 'spec/BowlingGameSpec.php'}))
            .on('error', plugins.notify.onError({
                title: 'Crap',
                message: 'Your bowling tests failed, Javi'
            }))
            .on("error", function () {
                this.emit('end')
            })
            .pipe(plugins.notify({
                title: 'Success',
                message: 'All bowling tests have returned green!'
            }));
    });
}
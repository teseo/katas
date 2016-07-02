module.exports = function(gulp, plugins) {
    gulp.task('suite-calculator', function () {
        return gulp.src('spec/StringCalculatorSpec.php', {base: './'})
            .pipe(plugins.phpspec('', {notify: true, testSuite: 'spec/StringCalculatorSpec.php'}))
            .on('error', plugins.notify.onError({
                title: 'Crap',
                message: 'Your string calculator tests failed, Javi'
            }))
            .on("error", function () {
                this.emit('end')
            })
            .pipe(plugins.notify({
                title: 'Success',
                message: 'All string calculator tests have returned green!'
            }));
    });
}
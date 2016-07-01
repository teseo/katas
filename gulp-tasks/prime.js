module.exports = function(gulp, plugins) {
    gulp.task('test-prime', function () {
        return gulp.src('spec/PrimeFactorsSpec.php', {base: './'})
            .pipe(plugins.phpspec('', {notify: true, testSuite: 'spec/PrimeFactorsSpec.php'}))
            .on('error', plugins.notify.onError({
                title: 'Crap',
                message: 'Your factors tests failed, Javi'
            }))
            .on("error", function () {
                this.emit('end')
            })
            .pipe(plugins.notify({
                title: 'Success',
                message: 'All Factors tests have returned green!'
            }));
    });
}
module.exports = function(gulp, plugins) {
    gulp.task('suite-fizzbuzz', function () {
        return gulp.src('spec/FizzBuzzSpec.php', {base: './'})
            .pipe(plugins.phpspec('', {notify: true, testSuite: 'spec/FizzBuzzSpec.php'}))
            .on('error', plugins.notify.onError({
                title: 'Crap',
                message: 'Your fizzbuzz tests failed, Javi'
            }))
            .on("error", function () {
                this.emit('end')
            })
            .pipe(plugins.notify({
                title: 'Success',
                message: 'All fizzbuzz tests have returned green!'
            }));
    });
}
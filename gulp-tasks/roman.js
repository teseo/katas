module.exports = function(gulp, plugins) {
    gulp.task('test-roman', function () {
        return gulp.src('spec/RomanNumeralsConverterSpec.php', {base: './'})
            .pipe(plugins.phpspec('', {notify: true, testSuite: 'spec/RomanNumeralsConverterSpec.php'}))
            .on('error', plugins.notify.onError({
                title: 'Crap',
                message: 'Your Roman tests failed, Javi'
            }))
            .pipe(plugins.notify({
                title: 'Success',
                message: 'All Roman tests have returned green!'
            }));
    });
}
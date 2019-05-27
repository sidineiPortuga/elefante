let gulp = require('gulp');
let sass = require('gulp-sass');

gulp.task('sass', function(){
    gulp.src('./public/src/dev/scss/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('./public/src/dist/css/'));
});

gulp.task('default', ['sass'], function(){
    gulp.watch('./public/src/dev/scss/*.scss', ['sass']);
});
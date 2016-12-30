var gulp = require('gulp');
var sass = require('gulp-sass');

// Watch for any file changes and reload page
gulp.task('watch', function() {
  gulp.watch('app/scss/**/*.scss', ['sass']);
});

// Compile all sass files into css
gulp.task('sass', function() {
  return gulp.src('app/scss/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('app/css'))
});

var gulp = require('gulp');
var browserSync = require('browser-sync');
var sass = require('gulp-sass');
var runSequence = require('run-sequence');

// Run the various gulp tasks in order due to dependencies
gulp.task('default', function(callback) {
  runSequence('browserSync', 'sass', 'watch', callback)
});

// Compile all sass files into css
gulp.task('sass', function() {
  return gulp.src('app/scss/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('app/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

// Proxy the server run using MAMP default settings
gulp.task('browserSync', function() {
  browserSync({
    proxy: '127.0.0.1:8888',
    port: 8080,
    open: false,
    notify: false
  })
});

// Watch for any code changes and reload the page
gulp.task('watch', function() {
  gulp.watch('app/*.php', browserSync.reload);
  gulp.watch('app/scss/**/*.scss', ['sass']);
  gulp.watch('app/*.html', browserSync.reload);
  gulp.watch('app/js/**/*.js', browserSync.reload);
});

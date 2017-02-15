var gulp = require('gulp');
var browserSync = require('browser-sync');
var sass = require('gulp-sass');
var useref = require('gulp-useref');
var gulpIf = require('gulp-if');
var uglify = require('gulp-uglify');
var cssnano = require('gulp-cssnano');
var imagemin = require('gulp-imagemin');
var cache = require('gulp-cache');
var del = require('del');
var runSequence = require('run-sequence');
var nunjucksRender = require('gulp-nunjucks-render');

// Run the various gulp development tasks
gulp.task('default', function(callback) {
  runSequence(['sass', 'browserSync', 'watch'], callback)
});

// Clean up previous dist and build new dist from assets
gulp.task('build', function(callback) {
  runSequence('clean:dist', 'sass', 'nunjucks', 
    ['javascript', 'css', 'images', 'fonts'], callback)
});

// Compile main sass file that imports others into css
gulp.task('sass', function() {
  return gulp.src('app/scss/main.scss')
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
  gulp.watch(['app/pages/**/*.+(html|php|nunjucks)',
    'app/templates/**/*.+(html|php|nunjucks)'], ['nunjucks'])
  gulp.watch(['app/*.html', 'app/*.php'], browserSync.reload);
  gulp.watch('app/scss/**/*.scss', ['sass']);
  gulp.watch('app/js/**/*.js', browserSync.reload);
});

// Concatenate javascript and perform minification on the results
gulp.task('javascript', function() {
  return gulp.src(['app/*.html', 'app/*.php'])
    .pipe(useref())
    .pipe(gulpIf('*.js', uglify()))
    .pipe(gulp.dest('dist'))
});

// Perform minification on main css file
gulp.task('css', function() {
  return gulp.src('app/css/main.css')
    .pipe(cssnano())
    .pipe(gulp.dest('dist/css'))
});

// Perform minification on all images
gulp.task('images', function() {
  return gulp.src('app/images/**/*.+(png|jpg|gif|svg)')
    .pipe(cache(imagemin()))
    .pipe(gulp.dest('dist/images'))
});

// Copy fonts into the dist folder
gulp.task('fonts', function() {
  return gulp.src('app/fonts/**/*')
    .pipe(gulp.dest('dist/fonts'))
});

// Clean up the dist folder
gulp.task('clean:dist', function() {
  return del.sync('dist')
});

// Convert nunjucks templates and pages into php files
gulp.task('nunjucks', function() {
  return gulp.src('app/pages/**/*.+(html|php|nunjucks)')
  .pipe(nunjucksRender({
    path: ['app/templates'],
    ext: '.php'
  }))
  .pipe(gulp.dest('app'))
});

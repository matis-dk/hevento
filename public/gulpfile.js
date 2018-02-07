// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var browserSync = require('browser-sync').create();



// Lint Task
gulp.task('lint', function() {
    return gulp.src('./dev/js/mygallery.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src('./dev/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./assets/css'))
        .pipe(browserSync.reload({stream: true}))
});


// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('./dev/js/*.js')
        .pipe(concat('main.js'))
        .pipe(gulp.dest('./assets/js'))
        .pipe(rename('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./assets/js'))
        .pipe(browserSync.reload({stream: true}))
});

// Watch Files For Changes
gulp.task('watch', function() {

    browserSync.init({
        proxy: "hevento/"
    });

    gulp.watch('./dev/js/**/*.js', ['lint', 'scripts']);
    gulp.watch('./dev/scss/**/*.scss', ['sass']);
    gulp.watch("./*.php").on('change', browserSync.reload);

});

// Default Task
gulp.task('default', ['lint', 'sass', 'scripts', 'watch']);

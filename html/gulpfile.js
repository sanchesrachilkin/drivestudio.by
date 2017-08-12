'use strict';

var gulp         = require('gulp'),
    sass         = require('gulp-sass'),
    browserSync  = require('browser-sync'),
    concat       = require('gulp-concat'),
    uglify       = require('gulp-uglifyjs'),
    jade         = require('gulp-jade'),
    cssnano      = require('gulp-cssnano'),
    rename       = require('gulp-rename'),
    del          = require('del');


gulp.task('cleanCss', function() {
    return del.sync('src/css');
});

gulp.task('sass', ['cleanCss'], function(){
   return gulp.src('src/sass/**/*.scss')
       .pipe(sass({outputStyle: 'expanded'}))
       .pipe(gulp.dest('src/css'))
       .pipe(browserSync.reload({stream: true}))
});

gulp.task('browserSync', function() {
    browserSync({
        server: {
            baseDir: 'src'
        },
        notify: false
    })
});

gulp.task('clean', function() {
    return del.sync('dist');
});

gulp.task('watch',['browserSync', 'sass'], function () {
    gulp.watch('src/sass/**/*.scss', ['sass']);
    gulp.watch('src/**/*.html', browserSync.reload);
    gulp.watch('src/js/**/*.js', browserSync.reload);
});

gulp.task('build',['clean', 'sass'], function() {
    var buildCss = gulp.src('src/css/**/*.css')
        .pipe(gulp.dest('dist/css'));

    var buildFonts = gulp.src('src/fonts/**/*')
        .pipe(gulp.dest('dist/fonts'));

    var buildHtml = gulp.src('src/*.html')
        .pipe(gulp.dest('dist'));

    var buildjs = gulp.src('src/js/**/*')
        .pipe(gulp.dest('dist/js'));
});

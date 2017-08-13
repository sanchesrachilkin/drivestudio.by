'use strict';

var gulp         = require('gulp'),
    sass         = require('gulp-sass'),
    browserSync  = require('browser-sync'),
    concat       = require('gulp-concat'),
    uglify       = require('gulp-uglifyjs'),
    jade         = require('gulp-jade'),
    cssnano      = require('gulp-cssnano'),
    rename       = require('gulp-rename'),
    del          = require('del'),
    autoprefixer = require('gulp-autoprefixer'),
    cache        = require('gulp-cache'),
    imagemin     = require('gulp-imagemin'),
    pngquant     = require('imagemin-pngquant');


gulp.task('cleanCss', function() {
    return del.sync('src/css');
});

gulp.task('sass', function(){
   return gulp.src('src/sass/**/*.scss')
       .pipe(sass({outputStyle: 'expanded'}))
       .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
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


gulp.task('scripts', function() {
    return gulp.src([ // Берем все необходимые библиотеки
        'src/libs/slick-carousel/slick/slick.js', // Slick
        'src/libs/jQuery.dotdotdot/src/jquery.dotdotdot.js', // DOtDotDot
        'src/libs/jquery-touchswipe/jquery.touchSwipe.js',
        'src/libs/fancybox/dist/jquery.fancybox.js'
    ])
        .pipe(concat('libs.min.js')) // Собираем их в кучу в новом файле libs.min.js
        .pipe(uglify()) // Сжимаем JS файл
        .pipe(gulp.dest('src/js/libs')); // Выгружаем в папку app/js
});


gulp.task('clean', function() {
    return del.sync('dist');
});

gulp.task('watch',['browserSync', 'cleanCss', 'sass'], function () {
    gulp.watch('src/sass/**/*.scss', ['sass']);
    gulp.watch('src/**/*.html', browserSync.reload);
    gulp.watch('src/js/**/*.js', browserSync.reload);
});

gulp.task('img', function() {
    return gulp.src('src/images/**/*')
        .pipe(cache(imagemin({
            interlaced: true,
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        })))
        .pipe(gulp.dest('dist/images')); // Выгружаем на продакшен
});


gulp.task('build',['clean', 'img' , 'sass', 'scripts'], function() {
    var buildCss = gulp.src('src/css/**/*.css')
        .pipe(gulp.dest('dist/css'));

    var buildFonts = gulp.src('src/fonts/**/*')
        .pipe(gulp.dest('dist/fonts'));

    var buildHtml = gulp.src('src/*.html')
        .pipe(gulp.dest('dist'));

    var buildjs = gulp.src('src/js/**/*')
        .pipe(gulp.dest('dist/js'));
});

gulp.task('clear', function (callback) {
    return cache.clearAll();
})
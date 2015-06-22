var gulp = require('gulp');
var rename = require('gulp-rename');
var notify = require('gulp-notify');
var plumber = require('gulp-plumber');

var options = {
    cssInput:   "resources/assets/sass",
    cssOutput:  "public/assets/css"
};

// ----------------------------------------------------- //
var sass = require('gulp-sass');
var minifycss = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('frontend:styles', function(){
    return gulp.src([
        options.cssInput + '/app.sass'
    ])
        .pipe(plumber())
        //.pipe(sass({sourcemap: false, style:'compact'}))
        .pipe(sass({ indentedSyntax: true }))
        .pipe(autoprefixer({
            browsers: ['last 2 Chrome versions'],
            cascade: true
        }))
        .pipe(gulp.dest(options.cssOutput))
        .pipe(rename({suffix: '.min'}))
        .pipe(minifycss())
        .pipe(gulp.dest(options.cssOutput))
        .pipe(notify({ message: 'Styles task completed!' }));
});

// ----------------------------------------------------- //
gulp.task('frontend:watch', function(){
    gulp.watch([
        options.cssInput + '/**/*.sass',
        options.cssInput + '/**/*.scss'
    ], ['frontend:styles']);
});

// ----------------------------------------------------- //
gulp.task('frontend', [], function() {
    gulp.start('frontend:styles', 'frontend:watch'); //'frontend:images'
});

// ----------------------------------------------------- //
gulp.task('default', function() {
    gulp.start('frontend');
});

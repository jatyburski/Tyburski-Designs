const { src, dest, watch, series, parallel } = require('gulp');
const sourcemaps = require('gulp-sourcemaps');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');

const files = { 
    scssPath: 'assets/scss/style.scss',
    jsPath: 'assets/js/**/*.js'
}

function scssTask() {    
    return src(files.scssPath)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(postcss([ autoprefixer(), cssnano() ]))
        .pipe(sourcemaps.write('.'))
        .pipe(dest('dist')
    );
}

function jsTask() {
    return src([files.jsPath])
        .pipe(concat('app.js'))
        .pipe(uglify())
        .pipe(dest('dist')
    );
}

function watchTask() {
    watch([files.scssPath, files.jsPath],
        series(
            parallel(scssTask, jsTask)
        )
    );
}

exports.default = series(
    parallel(scssTask, jsTask), 
    watchTask
);
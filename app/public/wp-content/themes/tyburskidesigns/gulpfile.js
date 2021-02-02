const { src, dest, watch, series, parallel } = require('gulp');
const sourcemaps = require('gulp-sourcemaps');
const sass = require('gulp-sass');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const terser = require('gulp-terser');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');

const files = { 
    scssPath: 'assets/scss/**/*.scss',
    jsPath: 'assets/js/**/*.js'
}

function scssTask() {    
    return src('assets/scss/style.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(postcss([ autoprefixer(), cssnano() ]))
        .pipe(sourcemaps.write('.'))
        .pipe(dest('./')
    );
}

function jsTask() {
    return src([files.jsPath])
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(concat('app.js'))
        .pipe(terser())
        .pipe(dest('./')
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
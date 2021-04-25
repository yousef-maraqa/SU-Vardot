const gulp = require('gulp');
 
const browserSync = require('browser-sync').create();


function style() {
    return gulp.src('src/styles/**/*.scss')
    .pipe(sass().on('error',sass.logError))
    .pipe(gulp.dest('src/styles/css/'))
    .pipe(browserSync.stream());
}

exports.style = style;

// function defaultTask(cb) {
//     // place code for your default task here
//     cb();
//   }
  
//   exports.default = defaultTask
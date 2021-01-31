
// requires
var gulp        = require("gulp");
var sass        = require("gulp-sass");
var browserSync = require("browser-sync").create();

var autoprefixer = require("gulp-autoprefixer");
var plumber      = require("gulp-plumber");
var sourcemaps   = require('gulp-sourcemaps');


function lazy_sass_task(){

    return (
        gulp
        .src( ['./sass/*.scss','./sass/**/*.scss'] )
        .pipe( sass().on('error', sass.logError) )
        .pipe( gulp.dest('./css/') )
        // .pipe( browserSync.stream() )
    );

}

function lazy_js_task(){

    return (
        gulp
        .src( [ './js/*js' ] )
        // .pipe( browserify() )
        // .pipe( uglify() )
        .pipe( gulp.dest('./js/dist') )
    );
}

function lazy_js_reload(){
    browserSync.reload();
    done();
}


function lazy_launch(){
    
    /*
    browserSync.init({
      proxy: "https://mamp-sites.dev/lazy/",
      // ghostMode: false,
      // open: false,
      // notify: false
    })
    */

    // sass
    gulp.watch("./sass/*.scss", lazy_sass_task );
    gulp.watch("./sass/**/*.scss", lazy_sass_task );
    gulp.watch("./sass/**/**/*.scss", lazy_sass_task );
    
    // js
    gulp.watch("./js/*.js", lazy_js_task );
    // gulp.watch("./js/*.js", lazy_js_reload );

    // php
    // gulp.watch("./*.php"   ).on('change', browserSync.reload);
    // gulp.watch("./**/*.php").on('change', browserSync.reload);

}

gulp.task('default', lazy_launch );
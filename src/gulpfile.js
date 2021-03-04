
// Requires
var gulp        = require("gulp");
var sass        = require("gulp-sass");
// var autoprefixer = require("gulp-autoprefixer");
// var sourcemaps   = require('gulp-sourcemaps');


function lazy_sass_task(){

    return (
        gulp
        .src( ['./sass/*.scss','./sass/**/*.scss'] )
        .pipe( sass().on('error', sass.logError) )
        .pipe( gulp.dest('../assets/dist/css/') )
    );

}

function lazy_js_task(){

    return (
        gulp
        .src( [ './js/*js' ] )
        .pipe( gulp.dest('../assets/dist/js') )
    );
}

function lazy_launch(){

    // sass
    gulp.watch("./sass/*.scss", lazy_sass_task );
    gulp.watch("./sass/**/*.scss", lazy_sass_task );
    gulp.watch("./sass/**/**/*.scss", lazy_sass_task );
    
    // js
    gulp.watch("./js/*.js", lazy_js_task );

}

gulp.task('default', lazy_launch );
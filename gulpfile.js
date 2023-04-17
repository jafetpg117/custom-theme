var gulp         = require('gulp');
var browserSync  = require('browser-sync');
var reload       = browserSync.reload;
var sass         = require('gulp-sass');
var concat       = require('gulp-concat');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('browser-sync', function() {
  browserSync.init({
    proxy: "localhost/boilerplate",
    notify: false
  });

  gulp.watch("./sass/**/*.sass", gulp.series(gulp.parallel('sass')));
  gulp.watch(["./**/*.js", "!./js/main.js"]).on('change', gulp.series(gulp.parallel('concat')));
  gulp.watch("./**/*.php").on('change', browserSync.reload);
});

gulp.task('sass', function () {
  return gulp.src([
      'sass/style.sass'
    ])
    .pipe(sass({
        outputStyle: 'compact'
      }))
    .pipe(autoprefixer({
        overrideBrowserslist: ['last 20 versions']
      }))
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream());
});

gulp.task('concat', function() {
  return gulp.src([
      "js/global.js",
      "js/home.js"
    ])
    .pipe(concat("main.js"))
    .pipe(gulp.dest("js"))
    .pipe(browserSync.stream());
});

gulp.task('default', gulp.series(gulp.parallel('sass', 'concat', 'browser-sync')));
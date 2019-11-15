"use strict";

var gulp = require("gulp");
var plumber = require("gulp-plumber");
var server = require("browser-sync").create();
var sourcemap = require("gulp-sourcemaps");
var sass = require("gulp-sass");
var postcss = require("gulp-postcss");
var autoprefixer = require("autoprefixer");
var csso = require("gulp-csso");
var rename = require("gulp-rename");
var imagemin = require("gulp-imagemin");
var svgstore = require("gulp-svgstore");

gulp.task("css", function () {
  return gulp.src("assets/sass/style.scss")
    .pipe(plumber())
    .pipe(sourcemap.init())
    .pipe(sass())
    .pipe(postcss([
      autoprefixer()
    ]))
    .pipe(csso())
    .pipe(rename("main.min.css"))
    .pipe(sourcemap.write("."))
    .pipe(gulp.dest("assets/css"));
});

gulp.task("images", function () {
  return gulp.src("assets/images/sprite/*.svg")
    .pipe(imagemin([
      imagemin.svgo({
        plugins: [
          {removeViewBox: false}
        ]
      })
    ]))
    .pipe(gulp.dest("assets/images/sprite"));
});

gulp.task("sprite", function () {
  return gulp.src("assets/images/sprite/*.svg")
    .pipe(svgstore({
      inlineSvg: true
    }))
    .pipe(rename("sprite.svg"))
    .pipe(gulp.dest("assets/images"));
});

gulp.task("server", function () {
  gulp.watch("assets/sass/**/*.{scss,sass}", gulp.series("css"));
});

gulp.task("build", gulp.series("css"));
gulp.task("start", gulp.series("css", "server"));

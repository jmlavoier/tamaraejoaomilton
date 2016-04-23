'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var babel = require('babel-core');
var webpack = require('webpack');
var webpackConfig = require('./webpack.config');
var gutil = require('gulp-util');

gulp.task('sass', function () {
  	 return gulp.src('./src/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./dist/css'));

});

gulp.task('bootstrap', function () {
     return gulp.src('./node_modules/dist/css/bootstrap.css')
  	.pipe(gulp.dest('./dist/css/plugins'));
});

gulp.task("webpack", function(callback) {
    
    var myConfig = Object.create(webpackConfig);

    webpack(myConfig, function(err, stats) {
		if(err) throw new gutil.PluginError("webpack:build", err);
		gutil.log("[webpack:build]", stats.toString({
			colors: true
		}));
		callback();
	});
});

gulp.task('default', function (){
	gulp.watch('./src/sass/**/*.scss', ['sass']);
	gulp.watch('./src/img/sprites/*.png', ['sass']);
	gulp.watch('./src/js/**/*.js', ['webpack']);
});



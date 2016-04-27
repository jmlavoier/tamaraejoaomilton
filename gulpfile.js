'use strict';
 
var gulp = require('gulp');
var gulpif = require('gulp-if');
var gutil = require('gulp-util');
var watch = require('gulp-watch');
var batch = require('gulp-batch');
var sass = require('gulp-sass');
var webpack = require('webpack');
var webpackConfig = require('./webpack.config');
var sprity = require('sprity');

gulp.task('sass', function () {
  	 return gulp.src('./src/sass/**/*.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('./dist/css'));

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
 
gulp.task('sprites', function () {
	gutil.log('sprity: spriting..');

	return  sprity.create({
				src: './src/img/sprites/*.png',
				out: './dist/img/',
				template: './src/sass/sprity.hbs',
				cssPath: '../img/',
				style: '../../dist/css/sprites.css',
				prefix: 's'
			}, function () {
				gutil.log('sprity: success!');
		  	});

});

gulp.task('watchers', function (){
	watch('./src/img/sprites/**/*.png', batch(function (events, done) {
        gulp.start('sprites', done);
    }));

    watch('./src/sass/**/*.scss', batch(function (events, done) {
    	gulp.start('sass', done);
    }));

    watch('./src/js/**/*.js', batch(function (events, done) {
    	gulp.start('webpack', done);
    }));
});

gulp.task('default', ['watchers']);



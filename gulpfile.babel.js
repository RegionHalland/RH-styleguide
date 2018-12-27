'use strict';

import gulp from 'gulp';
import replace from 'gulp-replace';
import plumber from 'gulp-plumber';
import gutil from 'gulp-util';
import rename from 'gulp-rename';
import browsersync from 'browser-sync';
import sourcemaps from 'gulp-sourcemaps';
import sass from 'gulp-sass';
import postcss from 'gulp-postcss';
import autoprefixer from 'autoprefixer';
import cssnano from 'cssnano';
import svgmin from 'gulp-svgmin';
import svgSprite from 'gulp-svg-sprite';
import concat from 'gulp-concat';
import uglify from 'gulp-uglify';
import docs from 'gulp-docs';
import dotenv from 'dotenv';
dotenv.config()

// Build CSS
gulp.task('css:dist', () => {
	// PostCSS plugins
	const plugins = [
		autoprefixer({browsers: ['last 1 version']}),
		cssnano()
	];
	return gulp.src('./scss/**/*.scss')
		.pipe(plumber())
		.pipe(sourcemaps.init())
		.pipe(sass())
		.pipe(postcss(plugins))
		// ändra namn tips - https://stackoverflow.com/questions/32535178/gulp-sass-how-to-properly-name-the-output-css
    .pipe(rename('rh.comp.css'))
		// v2 .pipe(rename({suffix: '.rh.comp'}))
		//.pipe(rename({'rhstyle.min'}))
		.pipe(browsersync.stream())
		.pipe(sourcemaps.write())
		.pipe(plumber.stop())
		.pipe(gulp.dest('./dist/'));
});

// Production
gulp.task('dist', ['css:dist']);

var gulp         = require('gulp'),
		sass         = require('gulp-sass'),
		autoprefixer = require('gulp-autoprefixer'),
		minifycss    = require('gulp-minify-css'),
		rename       = require('gulp-rename'),
		browserSync  = require('browser-sync').create(),
		concat       = require('gulp-concat'),
		uglify       = require('gulp-uglifyjs');

gulp.task('browser-sync', ['styles', 'scripts'], function() {
		browserSync.init({
                    proxy: "fightzone.in.ua",
				notify: false
		});
});

gulp.task('styles', function () {
	return gulp.src('sass/*.sass')
	.pipe(sass({
		includePaths: require('node-bourbon').includePaths
	}).on('error', sass.logError))
	.pipe(rename({suffix: '.min', prefix : ''}))
	.pipe(autoprefixer({browsers: ['last 15 versions'], cascade: false}))
	.pipe(minifycss())
	.pipe(gulp.dest('fightzone/css'))
	.pipe(browserSync.stream());
});

gulp.task('scripts', function() {
	return gulp.src([
		'./fightzone/libs/modernizr/modernizr.js',
		'./fightzone/libs/waypoints/waypoints.min.js',
		'./fightzone/libs/animate/animate-css.js',
		'./fightzone/libs/jquery/jquery-1.11.2.min.js',
		'./fightzone/libs/plugins-scroll/plugins-scroll.js',
		])
		.pipe(concat('libs.js'))
		// .pipe(uglify()) //Minify libs.js
		.pipe(gulp.dest('./fightzone/js/'));
});

gulp.task('watch', function () {
	gulp.watch('sass/*.sass', ['styles']);
	gulp.watch('fightzone/libs/**/*.js', ['scripts']);
	gulp.watch('fightzone/js/*.js').on("change", browserSync.reload);
	gulp.watch('fightzone/*.php').on('change', browserSync.reload);
});

gulp.task('default', ['browser-sync', 'watch']);

var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var autoPrefixer = require('gulp-autoprefixer');
var imagemin = require("gulp-imagemin");

gulp.task('styles', function () {
	gulp.src('./assets/scss/main.scss')
		.pipe(sass())
		.pipe(autoPrefixer())
		.pipe(gulp.dest('./site/css'))
		.pipe(browserSync.reload({stream: true}));
});

gulp.task('serve', function () {
	browserSync.init({
		server: {
			baseDir: './'
		},
		notify: false
	});

	gulp.task('default', () =>
		gulp.src('assets/img/*')
				.pipe(imagemin())
				.pipe(gulp.dest('./site/img'))
);

	gulp.watch('./scss/*.sass', ['styles']);
	gulp.watch('./scss/*.scss', ['styles']);
	gulp.watch('./**/*.html').on('change', browserSync.reload);
});

gulp.task('default', ['styles', 'serve']);

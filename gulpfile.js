// dist ////////////////////////////////////////////////
const gulp = require( 'gulp' );

gulp.task( 'dist', function () {
	return gulp.src([
		'./patterns-data/**',
		'./vendor/**',
		'./**/*.php',
		'./**/*.txt',
		'!./tests/**',
		'!./dist/**',
		'!./node_modules/**/*.*',
	], {
		base: './',
	})
	.pipe(gulp.dest('dist/impress-wordpress-plugin'));
});
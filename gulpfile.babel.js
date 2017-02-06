/**
 * Build system automating tasks.
 *
 * @author darwin <darwin301194@gmail.com>
 * @todo: Add watch sass file!
 */

import gulp from 'gulp';
import sass from 'gulp-sass';

// Compile Sass file
gulp.task('sass', () =>
  gulp.src('./scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./'))
);

// `gulp` cli
gulp.task('default', ['sass']);

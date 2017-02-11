/**
 * Build system automating tasks.
 *
 * @author darwin <darwin301194@gmail.com>
 * @todo: Add watch sass file!
 */
import gulp from 'gulp';
import sass from 'gulp-sass';

// Compile Sass file to CSS
gulp.task('sass', () =>
  gulp.src('./scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./'))
);

// Watch the sass task. Run it when the files are changed!
gulp.task('watch', () =>
  gulp.watch('scss/**/*.scss', ['sass'])
);

// `gulp` cli
gulp.task('default', ['sass']);

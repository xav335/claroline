var nPath = require('path');
var gulp = require('gulp');
var plumber = require('gulp-plumber');
var babel = require('gulp-babel');
var browserSync = require('browser-sync');
var runSequence = require('run-sequence');
var less = require('gulp-less');
var changed = require('gulp-changed');
var Builder = require('systemjs-builder');
var vinylPaths = require('vinyl-paths');
var del = require('del');
var ngAnnotate = require('gulp-ng-annotate');
var rollup = require('rollup');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var header = require('gulp-header');

var compilerOptions = {
  modules: 'system',
  moduleIds: false,
  comments: true,
  compact: false
};

var path = {
  source: 'src/**/*.js',
  less: 'src/**/*.less',
  output: 'dist/',
  release: 'release/',
  outputCss: 'dist/**/*.css'
};

var pkg = require('./package.json');

var banner = ['/**',
  ' * <%= pkg.name %> - <%= pkg.description %>',
  ' * @version v<%= pkg.version %>',
  ' * @link <%= pkg.homepage %>',
  ' * @license <%= pkg.license %>',
  ' */',
  ''].join('\n');

gulp.task('less', function () {
  return gulp.src(path.less)
    .pipe(changed(path.output, { extension: '.css' }))
    .pipe(plumber())
    .pipe(less())
    .pipe(gulp.dest(path.output))
    .pipe(browserSync.reload({ stream: true }));
});

gulp.task('clean', function () {
  return gulp.src([path.output, path.release])
    .pipe(vinylPaths(del));
});

//
// Release Tasks
// ------------------------------------------------------------

gulp.task('release', function (callback) {
  return runSequence(
    'clean',
    ['release-less', 'release-build'],
    'release-es6-helpers-min',
    callback
    );
});

gulp.task('release-less', function () {
  return gulp.src(['src/themes/*.less', 'src/dataTable.less'])
    .pipe(less())
    .pipe(gulp.dest(path.release));
});

gulp.task('release-build', function () {
  return rollup.rollup({
    entry: 'src/dataTable.js',
    external: ['angular']
  }).then(function (bundle) {
    return bundle.write({
      dest: 'release/dataTable.es6.js',
      format: 'es6',
      moduleName: 'DataTable'
    });
  });
});

gulp.task('release-es6-helpers-min', function () {
  return gulp.src('release/dataTable.es6.js')
    .pipe(babel({
        plugins: ["transform-object-assign"],
        presets: ['es2015']
    }))
    .pipe(ngAnnotate({
      gulpWarnings: false
    }))
    .pipe(uglify())
    .pipe(header(banner, { pkg: pkg }))
    .pipe(rename('dataTable.helpers.min.js'))
    .pipe(gulp.dest("release/"))
});

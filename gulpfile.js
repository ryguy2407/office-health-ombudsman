const { src, dest, parallel, watch, series } = require('gulp');
const postcss = require('gulp-postcss');
const concat = require('gulp-concat');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const purgecss = require('gulp-purgecss');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const gzip = require('gulp-gzip');
const brotli = require('gulp-brotli');
const replace = require('gulp-replace');
const nested = require('postcss-nested');
var cssimport = require('gulp-cssimport');

function css() {
  const plugins = [nested(), require('tailwindcss'), autoprefixer(), cssnano()];
  return src('src/**/*.css')
    .pipe(concat('styles.css'))
    .pipe(cssimport({}))
    .pipe(postcss(plugins))
    .pipe(
      purgecss({
        content: ['./src/**/*.js', './templates/**/*.html', './templates/**/*.twig'],
        defaultExtractor: content => content.match(/[A-Za-z0-9-_:/]+/g) || [],
      })
    )
    .pipe(dest('./web/dist'));
}

function gzipCss() {
  return src('./web/dist/styles.css')
    .pipe(gzip({ append: true }))
    .pipe(dest('./web/dist'));
}

function brotliCss() {
  return src('./web/dist/styles.css')
    .pipe(brotli.compress())
    .pipe(dest('./web/dist'));
}

function js() {
  return src('src/**/*.js', { sourcemaps: true })
    .pipe(concat('main.js'))
    .pipe(
      babel({
        presets: ['@babel/preset-env'],
      })
    )
    .pipe(uglify())
    .pipe(dest('./web/dist', { sourcemaps: true }))
}

function gzipJs() {
  return src('./web/dist/main.js')
    .pipe(gzip({ append: true }))
    .pipe(dest('./web/dist'));
}

function brotliJs() {
  return src('./web/dist/main.js')
    .pipe(brotli.compress())
    .pipe(dest('./web/dist'));
}

var cbString = new Date().getTime();
function cacheBustTask() {
  return src(['./templates/styletag.twig', './templates/scripttag.twig'])
    .pipe(replace(/cb=\d+/g, 'cb=' + cbString))
    .pipe(dest('./templates'));
}

exports.js = series(js, gzipJs, brotliJs);
exports.css = series(css, gzipCss, brotliCss);
exports.default = parallel(
  series(css, gzipCss, brotliCss),
  series(js, gzipJs, brotliJs)
);
exports.watch = () => {
  watch(['src/**/*.css', 'templates/**/*.html', 'templates/**/*.twig'], series(css, gzipCss, brotliCss));
  watch('src/**/*.js', series(js, gzipJs, brotliJs));
};

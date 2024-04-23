const { src, dest, watch, series } = require("gulp");
const terser = require("gulp-terser");
const jsobs = require("gulp-javascript-obfuscator");
const htmlmin = require("gulp-htmlmin");
const through2 = require('through2');
const imageavif = require("gulp-avif");
const rename = require("gulp-rename");
const strip = require("gulp-strip-comments");

let gulpsass = require("gulp-sass");
let sass = require("sass");
let autoprefixer = require("gulp-autoprefixer");
let sourcemaps = require("gulp-sourcemaps");
let cleanCSS = require("gulp-clean-css");

let sass$ = gulpsass(sass);
const isSourceMap = true;

function compilecss() {
    return src('src/assets/css/*.css')
        .pipe(autoprefixer()) // Add autoprefixer
        .pipe(cleanCSS())
        .pipe(dest('dist/assets/css/'));
}
// functions
function copyfile_php() {
    return src(["src/**/*.php", "!src/scssphp/**/*.php"])
        .pipe(through2.obj(function(file, _, cb) {
            // Check if the file content contains PHP closing tag
            const content = file.contents.toString();
            if (content.includes('?>')) {
                // If closing PHP tag found, proceed with minification
                cb(null, file);
            } else {
                // If closing PHP tag not found, skip the file
                cb(null, file);
            }
        }))
        .pipe(
            htmlmin({
                collapseWhitespace: true,
                ignoreCustomFragments: [
                    /<%[\s\S]*?%>/,
                    /<\?[=|php]?[\s\S]*?\?>/,
                ],
            })
        )
        .pipe(dest("dist"));
}
function remove_comments_php() {
    return src(["dist/**/*.php"]) // Target PHP files in the "dist" directory
        .pipe(strip())
        .pipe(dest("dist")); // Save modified files back to the same "dist" directory
}
function jsmin() {
    return (
        src(["src/assets/js/**/*.js"])
            // .pipe(terser())
            // .pipe(jsobs())
            .pipe(dest("dist/assets/js"))
    );
}
function avifImage() {
    return src([
        "src/assets/img/*.{jpg,png}",
        "src/assets/img/*/*.{jpg,png}",
        "src/assets/img/*/*/*.{jpg,png}",
    ])
        .pipe(imageavif())
        .pipe(dest("dist/assets/img"));
}
function svgImage() {
    return src(["src/assets/img/**/*.svg", "src/assets/img/**/*.ico"]).pipe(
        dest("dist/assets/img")
    );
}
function copyfile() {
    src( "src/scssphp/**/*").pipe(dest("dist/scssphp/"));
    src("src/assets/libs/**/*").pipe(dest("dist/assets/libs"));
    src("src/assets/fonts/**/*").pipe(dest("dist/assets/fonts"));
    src("src/assets/json/**/*").pipe(dest("dist/assets/json"));
    src("src/assets/lang/**/*").pipe(dest("dist/assets/lang"));
    return src("src/assets/lang/**/*").pipe(dest("dist/assets/lib"));
}

// create watchtask
function watchTask() {
    watch(["src/**/*.php"], copyfile_php);
    //watch(["dist/**/*.php"], remove_comments_php);
    watch(["src/assets/libs/**/*"], copyfile);
    watch(["src/assets/iconfonts/**/*"], copyfile);
    watch(["src/assets/js/**/*.js"], jsmin);
    watch(['src/assets/css/*.css'], compilecss);
    // watch(
    //     [
    //         "src/assets/img/*.{jpg,png}",
    //         "src/assets/img/*/*.{jpg,png}",
    //         "src/assets/img/**/**/*.{jpg,png}",
    //     ],
    //     avifImage
    // );
    watch(["src/assets/img/**/*.svg", "src/assets/img/**/*.ico"], svgImage);
}

// default gulp
exports.default = series(
    copyfile_php,
    // remove_comments_php,
    jsmin,
    // avifImage,
    svgImage,
    copyfile,
    compilecss,
    watchTask
);

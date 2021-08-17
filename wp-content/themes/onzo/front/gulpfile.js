const gulp = require("gulp")

const serve = require("./gulp/tasks/serve")
const templates = require("./gulp/tasks/templates")
const { images, sprite, webp } = require("./gulp/tasks/images")
const scripts = require("./gulp/tasks/scripts")
const styles = require("./gulp/tasks/styles")
const clean = require("./gulp/tasks/clean")
const { static, fonts } = require("./gulp/tasks/static")

const config = require("./gulp/config")

const dev = gulp.parallel(
  fonts,
  templates,
  images,
  sprite,
  webp,
  scripts,
  styles,
  static,
)

const wp = gulp.parallel(
  fonts,
  images,
  sprite,
  webp,
  scripts,
  styles,
  static,
)
const build = gulp.series(clean, dev)
const buildWP = gulp.series(clean, wp)

module.exports.dev = gulp.series(build, serve)
module.exports.build = gulp.series(build)
module.exports.buildWP = gulp.series(buildWP)


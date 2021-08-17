const util = require("gulp-util");

module.exports = {
	openServer: util.env.server,
  mode:{
    isProdMode: !!util.env.production,
    isDevMode: !util.env.production,
  },
  views:{
    isUseViews: false,
    srcViews: "src/views/*.html",
		watchViews: "src/views/**/*.html",
		buildViews: "assets/",
  },
  styles:{
    isUseStyles: true,
		srcStyles: "src/scss/*.scss",
		watchStyles: "src/scss/**/*.scss",
		buildStyles: "assets/css/",
    hash:{
      makeHashFile: false,
      hashPath: "assets/css/*.css",
    },
    critical:{
      makeCritical: false,
      criticalPath: {
        post: {
          url: "https://gwt.pp.ua",
          file: ["post.css"]
        }
      },
    }
  },
  scripts:{
    isUseScripts: true,
    isUseJquery: true,
    isUseWebpack: true,
		srcScripts: "./src/js/*.js",
		watchScripts: "src/js/**/*.js",
		buildScripts: "assets/js/",
    hash:{
      makeHashFile: false,
      hashPath: "assets/js/*.js",
    }
  },
  image:{
    isUseImg: false,
    srcImg: ["src/img/**/*.{gif,png,jpg,svg,webp}", "!src/img/favicon/**/*"],
		watchImg: "src/img/**/*.{gif,png,jpg,svg,webp}",
		buildImg: "assets/img/",
  },
  sprite:{
    isUseSprite: false,
		srcSprite: "src/img/svg/sprite/**/*.svg",
		watchSprite: "src/img/svg/sprite/**/*.svg",
		buildSprite: "assets/img/svg/",
  },
  webp:{
    isUseWebp: false,
		srcWebp: ["src/img/**/*.{png,jpg}", "!src/img/favicon/**/*"],
		watchWebp: "src/img/**/*.{png,jpg}",
		buildWebp: "assets/img/",
  },
  favicon:{
    isUseFavicon: false,
		srcFavicon: "src/img/favicon/*.{jpg,jpeg,png,gif}",
		watchFavicon: "src/img/favicon/**/*",
		buildFavicon: "assets/img/favicon/",
  },
  helpers:{
    isUseHelpers: false,
		srcHelpers: "src/helpers/**/*",
		watchHelpers: "src/helpers/**/*",
		buildHelpers: "assets/",
  },
	fonts: {
    isUseFonts: false,
		srcFonts: "src/fonts/**/*",
		watchFonts: "src/fonts/**/*",
		buildFonts: "assets/fonts/",
	},
	clean: "assets/",
	server: "assets/",
};

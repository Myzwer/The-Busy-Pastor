# Busy Pastor Wordpress Theme

![WebPack 5.44.0](https://img.shields.io/badge/WebPack-5.44.0-brightgreen)
![Babel 7.14.6](https://img.shields.io/badge/Babel-7.14.6-brightgreen)
![BrowserSync 2.27.4](https://img.shields.io/badge/BrowserSync-2.27.4-brightgreen)
![PostCSS 8.3.5](https://img.shields.io/badge/PostCSS-8.3.5-brightgreen)
![Foundation 6.6.3](https://img.shields.io/badge/Foundation-6.6.3-brightgreen)

This theme is designed to work for busypastor.org and supply the needs of that website, but if you'd like to use it the instructions are below.


## Features and Benefits

**General**
- [**Webpack.**](https://classic.yarnpkg.com/en/package/webpack) Built on webpack, this template allows for a modern development workflow + a production ready build.
- **Minification.** Complete with webpack's native features and CSSNano, this gets minifies and magnles both CSS and JS.
- [**Prettier.**](https://prettier.io/) An opinionated code formatter. It automagically formats all your code on save so that it always looks the same. 
- [**BrowserSync.**](https://browsersync.io/) Browsersync synchronises browsers, URLs, interactions and code changes across devices and automatically refreshes all the browsers on all devices on changes. 
- [**Sourcemaps.**]() Webpack generates sourcemaps for all js and css files, which helps with debugging.

**CSS**
- [**PostCSS.**](http://postcss.org/) PostCSS allows for some code to be injected after the fact, most noteably...
- [**Autoprefixer.**](https://github.com/postcss/autoprefixer) Adds vendor prefixes for you. 
- [**Foundation.**](https://github.com/foundation/foundation-sites/releases/) Foundation is a CSS framework similar to bootstrap. Helps quickly spin up sites.
- [**Sass.**](https://webpack.js.org/loaders/sass-loader/) Compiles Sass down into CSS so browsers can read it.

**JS**
- [**BabelJS.**](https://babeljs.io/) Allows you to use next gen Javascript by transpiling it to ES6.

## Requirements

- [Node.js](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)
- [NPM](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)
- [Yarn](https://classic.yarnpkg.com/en/docs/install/#mac-stable)


## Install
```bash
# 1-- Set up a local instance of Wordpress in Local or something.
# 2-- Clone this into your themes folder (as a new theme)

$ git clone https://github.com/Myzwer/The-Busy-Pastor.git

# 2-- Edit the BrowserSync settings in `webpack.config.js`. Ya can't miss it. 
# 3-- Install yarn and all the project dependencies

$ yarn install

# 4-- Run a command and start making some magic.
yarn dev 
yarn dev:watch
yarn prod
yarn prod:watch
```

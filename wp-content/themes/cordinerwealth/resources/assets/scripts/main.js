// Polyfills
import "core-js/stable";
import "regenerator-runtime/runtime";
require ("../../../node_modules/flexibility/flexibility.js");

// import external dependencies
import 'jquery';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import faqs from './routes/faqs';
import insights from  './routes/news';
import calculator from './routes/calculator';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  calculator,
  // Home page
  faqs,
  insights,
  home,

});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

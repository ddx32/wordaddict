// import external dependencies
import 'jquery';

// Import everything from autoload
import "./autoload/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import donatePage from './routes/donatePage';
import singleIssue from './routes/singleIssue';

/** Populate Router instance with DOM routes */
const routes = new Router({
  common,
  home,
  donatePage,
  singleIssue,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

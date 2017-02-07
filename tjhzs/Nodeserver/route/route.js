var Header = require('../controllers/header');
module.exports = function (app) {
  app.post('/setheaderinfo', Header.set);
};

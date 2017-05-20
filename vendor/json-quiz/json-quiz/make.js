require('shelljs/make');

target.test = function () {
  exec('./node_modules/.bin/mocha --recursive');
};

target.clean = function () {
  echo('Cleaning build directory...');
  rm('-rf', './build');
};

target.doc = function () {
  echo('Building documentation...');
  target.clean();
  exec('./node_modules/.bin/mocha --recursive -R report.js');
};

target.preview = function () {
  echo('Refreshing gh-pages branch...');
  target.doc();
  exec('git checkout gh-pages');
  exec('node make build');
};

target.publish = function () {
  echo('Publishing on github pages...');
  var sha = exec('git rev-parse HEAD', { silent: true }).output;
  var msg = 'Update from ' + sha.slice(0, sha.length - 2);
  target.preview();
  exec('git add --all');
  exec('git commit -m "' + msg + '"');
  exec('git push origin gh-pages');
  exec('git checkout master');
};

#!/usr/bin/env bash

set -e

if [[ "false" != "$TRAVIS_PULL_REQUEST" ]]; then
  echo "Not deploying pull requests."
  exit
fi

if [[ "master" != "$TRAVIS_BRANCH" ]]; then
  echo "Not on the 'master' branch."
  exit
fi

rm -rf .git
rm -r .gitignore

echo ".editorconfig
.travis.yml
README.md
.bin
bower.json
gulpfile.js
node_modules
package.json
src
README.md
setting.json
bower_components
.DS_store" > .gitignore

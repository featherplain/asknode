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

eval "$(ssh-agent -s)" # start the ssh agent
- chmod 600 deploy_key
- mv deploy_key ~/.ssh/id_rsa
- git remote add deploy ${DEPLOY_PATH}
- git push deploy

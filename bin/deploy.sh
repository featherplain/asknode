#!/usr/bin/env bash

##########################################################
# You can easily deploy to your own server the way you would deploy from your local machine by adding a custom after_success step.
# see: https://docs.travis-ci.com/user/deployment/custom/
##########################################################
# Git
eval "$(ssh-agent -s)" # start the ssh agent
chmod 600 .travis/deploy_key.pem # this key should have push access
ssh-add .travis/deploy_key.pem
git remote add bare /home/featherplain/asknode.net/repo/asknode
cd ~/asknode.net/repo/asknode;
  git fetch;
  GIT_WORK_TREE=/home/featherplain/asknode.net/public_html/wp-content/themes/asknode git checkout -f master

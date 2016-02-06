#!/usr/bin/env bash

eval "$(ssh-agent -s)" # start the ssh agent
chmod 600 .travis/deploy_key.pem # this key should have push access
ssh-add .travis/deploy_key.pem
git remote add deploy "${DEPLOY_PATH}"

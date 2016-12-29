#!/bin/bash
set -x
if [ $TRAVIS_BRANCH == 'master' ] ; then
    git remote add do_server "mr_monkey@178.62.24.126:/var/www"
    git config user.name "nigelpain"
    git config user.email "nigel.pain@digital.landregistry.gov.uk"

    git push --force do_server master
else
    echo "Not deploying, since this branch isn't master."
fi

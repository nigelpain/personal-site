[![Build Status](https://travis-ci.org/nigelpain/photography-site.svg?branch=master)](https://travis-ci.org/nigelpain/personal-site)

# Read Me

This is the repo for my website which can be found at http://nigelpain.com

## Setup

In order to contribute to this site you will need to do the following:

* Install the latest stable version of node_js https://nodejs.org/en/download/
* Install the latest stable version of MAMP https://www.mamp.info/en/downloads/
* Clone down the contents of the repository using whichever method you prefer
* Then run `npm install gulp -g` to be able to run the gulp tasks
* Finally run `npm install` to install all of the other dependencies

## Development

Once you have the site setup, to start development you will need to do the following: 

* Start a MAMP server running on `localhost:8888` and pointing at the app sub-folder within where you cloned down this repo
* Run the command `gulp dev` which builds the css and php pages and also runs a watcher which will hot reload the browser when any of the templates or assets are changed

## Acknowledgements

None so far

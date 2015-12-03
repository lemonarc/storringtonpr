# Storrington PR Website
Source files for Storrington PR Website. Website built with Nanoc 4 and Sass. Gruntfile included for Grunt workflow.

## Installing Nanoc
Nanoc can be installed through RubyGems, so ensure Ruby 2.1 and above is installed and run the following:

`gem install nanoc`

When you run `nanoc` within the www directory, Nanoc will automatically compile the site from files in the 'content' folder and output to the 'output' directory. You'll notice there is only one stylesheet file, this is precompiled from the scss files in the 'scss' folder. I would reccommend working with these scss files as they are more organised.

## Sass
The site uses the Neat framework (http://neat.bourbon.io/) which is a Sass framework. No special tools are needed to work with this framework, the files simply compile with Sass, but it might be worth checking the documentation if you are going to change the scss files.

## Grunt
I use a Grunt-based local development environment. You can work on the site without using Grunt, but a Grunfile and package.json is included for your convenience if you choose to use it. The workflow will watch the relevant directories for changes and automatically compile the Sass files and then run Nanoc. It will also spin up a local browsersync server and open a new browser window for you when run.

### Installing Grunt
Grunt is installed through NodeJS so install that (http://nodejs.org) and then run `npm install -g grunt-cli`. This will install the grunt client globally on your machine. After that, simply run `npm install` in the root directory of this repository and Node will read the package.json and install all the relevant Grunt plugins. Once grunt is set up you can simply run `grunt` from the root directory of the repo and Grunt should do the rest.

If you have any questions about this repository I am contactable at me@leonaves.com.

# Storrington PR Website
Source files for Storrington PR Website. Website built with [Nanoc](https://nanoc.ws/) and [Sass](https://sass-lang.com/).

Gruntfile included for Grunt workflow.

## Requirements

- Node (and therefore NPM) (https://nodejs.org/en/)
- Ruby and Ruby Gems (https://www.ruby-lang.org/en/documentation/installation/)
    - Note, Ruby 1.9 comes with Ruby Gems built in so should be one step
- Bundler (https://bundler.io/)
    - `gem install bundler` should do it

## Setup:

```bash
npm install && bundle install
```

## Sass
The site uses the Neat framework (http://neat.bourbon.io/) which is a Sass framework. No special tools are needed to work with this framework, the files simply compile with Sass, but it might be worth checking the documentation if you are going to change the scss files.

## Development
```bash
npx grunt
```
This will open a new browser, change source files in `www` and changes will be auto-built and auto-refreshed.
Don't modify `stylesheet.css`, instead modify files in `scss` while grunt is running and let it update the stylesheet for you.

## Deployment
The built site will end up in www/output, deploy that folder however you choose.

I'm currently using:

```bash
rsync -r www/output/ leon@webserver.coredatasystems.co.uk:/var/www/storringtonpr/public_html
```

(This is mainly here for my own reference I don't expect you to be able to login as me to that server.)

If you have any questions about this repository I am contactable at me@leonaves.com.

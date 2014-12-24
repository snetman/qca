# Compass configuration file.

# We also support plugins and frameworks, please read the docs http://docs.mixture.io/preprocessors#compass
# Susy (susy.oddbird.net) is available in Mixture, just uncomment to require and use
# require 'susy'
project_path = File.expand_path("..",File.dirname(__FILE__))

# relative_assets = true
require "breakpoint"
require "susy"

# Important! change the paths below to match your project setup

css_dir = "public/public/styles" # update to the path of your css files.

sass_dir = "public/public/styles/sass" # update to the path of your sass files.

images_dir = "public/public/images" # update to the path of your image files.

javascripts_dir = "public/public/scripts" # update to the path of your script files.

line_comments = false

cache = true
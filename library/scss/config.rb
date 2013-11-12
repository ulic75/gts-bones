# Compass is a great cross-platform tool for compiling SASS. 
# This compass config file will allow you to 
# quickly dive right in.
# For more info about compass + SASS: http://net.tutsplus.com/tutorials/html-css-techniques/using-compass-and-sass-for-css-in-your-next-project/

#########
# 1. Set this to the root of your project when deployed:
http_path = "/"

# 2. probably don't need to touch these
css_dir = "../css"
sass_dir = "./"
images_dir = "../images"
javascripts_dir = "../js"
environment = :development
relative_assets = true

# 3. You can select your preferred output style here (can be overridden via the command line):
output_style = :expanded

# 4. When you are ready to launch your WP theme comment out (3) and uncomment the line below
# output_style = :compressed

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false

# don't touch this
preferred_syntax = :scss
css_dir = "../css" # by Fire.app 
sass_dir = "." # by Fire.app 
images_dir = "../images" # by Fire.app 
javascripts_dir = "../js" # by Fire.app 
fireapp_coffeescripts_dir = "coffeescripts" # by Fire.app 
fireapp_livescripts_dir = "livescripts" # by Fire.app 
fireapp_minifyjs_on_build = false # by Fire.app 
fireapp_always_report_on_build = true # by Fire.app 
output_style = :expanded # by Fire.app 
relative_assets = true # by Fire.app 
line_comments = true # by Fire.app 
sass_options = {:debug_info=>false} # by Fire.app 
fireapp_coffeescript_options = {:bare=>false} # by Fire.app 
fireapp_livescript_options = {:bare=>false} # by Fire.app 
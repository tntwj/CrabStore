Each direct file in the php directory must have the directive "require_once("bootstrap.php") as well as "require("template/base.php")"

bootstrap.php is needed to get access to the DatabaseHelper, utility functions and defines.

base.php contains the skeleton of the webpages that is common to all others.

if you have any doubts please refer to the lab exercises, in particular lab4
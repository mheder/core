<?php

############################################################################
#
# Copyright [2020] [Mihály Héder]
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#    http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
#
############################################################################

###########################################################
# baseurl
###########################################################
# baseurl for static content like images, style sheets, etc.
# No trailing '/' character please
###########################################################

# replace this to your FQDN!
# in the example below, the folder "core" should be in yourapp/core
$core['baseurl']="http://localhost/yourapp";

###########################################################
# branding
###########################################################
# logo, css, relative to baseurl.  
# No need for '/' at the beginning.
#
# See docs/README.md "Branding" section!
#
###########################################################

$core['left_logo'] = "img/logo.jpg";
# $left_logo = "customizations/logo_reg.jpg";
$core['head_logo'] = "customizations/yourbrand_logo.png";

# "core/style/style.css" is the primary css file
# if you change it it will be "overridden". You can also 
# use additional css with customcss (see next item)
$core['css'] = "core/style/style.css";

# $customcss = "customizations/extrastyles.css";

###########################################################
# Menuitems
###########################################################
#
# You can hide things so that 
# they will need explicit link to access
#
$core['menuitems'] = array();

###########################################################
# Database connection info
###########################################################

#replace these to the actual db credentials!
$core['db_host'] = "localhost"; 
$core['db_user'] = "yourdb";
$core['db_pass'] = "your-password";
$core['db_name'] = "yourdb";

###########################################################
# language codes
###########################################################
# Enumerate the languages you support by a lang code.
# You will have to write the proper strings for all 
# languages.
# See docs/README.md "Translations" section!
###########################################################

$core['ls_languages'] = array("en");

###########################################################
# log settings
###########################################################
#
# See docs/README.md "Log" section!
#
###########################################################

# debug log
$core['debug_log'] = true;

# trace log: very aggressive, really use it as last resort
$core['trace_log'] = false;


?>
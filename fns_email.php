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

#
# This will use whatever is set up in php ini to send email
# see the php configuration "sendmail_path"
# recommended to use ssmtp
#
function core_send_email($to, $subject, $message, $html = false) {

    $headers[] = 'MIME-Version: 1.0';
    if ($html) {
        $headers[] = 'Content-type: text/html; charset=utf-8';
    }
    $headers[] = 'From: ' . $GLOBALS['kiss']['email_from'];

    // php mail method
    if ($GLOBALS['core']['email_method'] == "php_mail") {
        mail($to, $subject, $message, $headers);
    } else {
        core_log_debug("No known email_method configured, dumping mail to log.");
        core_log_debug("to:$to, subject:$subject, message:$message");
    }

}

?>
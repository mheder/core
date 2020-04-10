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

function start_table($headings = null){
    echo "\n<table class=\"bigtable\">\n";
    echo "<tr>";
    if ($headings) {
        foreach($headings as $heading_val) {
            echo "<th>";
            echo core_lang($heading_val); //it does echo the stuff you need
            echo "</th>"; 
        }
    }
    echo "</tr>\n";
}

function make_table_row($data) {
    echo "<tr>";
    foreach($data as $td) {
        echo "<td>$td</td>";
    }
    echo "</tr>\n";
}

function end_table() {
    echo "</table>\n";
}

function make_error_message($message) {
    ?>
        <div class="error_message"><?php echo $message; ?></div>
    <?php
    }

function make_info_message($message) {
    ?>
        <div class="info_message"><?php echo $message; ?></div>
    <?php
    }    

function make_important_box($message) {
    ?>
    <div class="important_box"><h2><?php echo $message ?></h2></div>
    <?php
}

function make_text($message) {
    ?>
    <p><?php echo $message ?></p>
    <?php
}

?>
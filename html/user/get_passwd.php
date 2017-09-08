<?php
// This file is part of BOINC.
// http://boinc.berkeley.edu
// Copyright (C) 2008 University of California
//
// BOINC is free software; you can redistribute it and/or modify it
// under the terms of the GNU Lesser General Public License
// as published by the Free Software Foundation,
// either version 3 of the License, or (at your option) any later version.
//
// BOINC is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// See the GNU Lesser General Public License for more details.
//
// You should have received a copy of the GNU Lesser General Public License
// along with BOINC.  If not, see <http://www.gnu.org/licenses/>.

require_once("../inc/db.inc");
require_once("../inc/util.inc");
require_once("../inc/user.inc");

check_get_args(array());

function show_email_form() {
    echo "<h3>"
        .tra("If you know your account's email address, and you can receive email there:")."</h3><p>"
        .tra("Enter the email address below, and click OK. You will be sent email instructions for resetting your password.");
    start_table();
    echo "<form method=post action=mail_passwd.php>\n";
    row2(tra("Email address"), '<input class="form-control" type="text" size="40" name="email_addr">');
    row2("", '<input class="btn btn-success" type="submit" value="'.tra("OK").'">');
    echo "</form>";
    end_table();
}


page_head(tra("Forgot your account info?"));
show_email_form();
page_tail();

?>

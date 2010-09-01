<?php

    global $title;
    global $repos;
    global $help_clone;
    global $help_url;
    
    // title of the website
    $title = "McCormick Technologies - Source Code";
    
    // list of repositories to display
    $repos = array(
        "/home/gitbase/repositories/mccormicktechnologies.com.git",
        "/home/gitbase/repositories/indianlakeartisans.com.git",
        "/home/gitbase/repositories/mbmccormick.com.git",
        "/home/gitbase/repositories/google-email-server.git",
        "/home/gitbase/repositories/peek-download-tool.git",
    );
    
    // help message for clone
    $help_clone = "git clone gitbase@mccormicktechnologies.com:&lt;projectname&gt;.git &lt;localpath&gt;";
    
    // help message for contact url
    $help_url = "http://www.mccormicktechnologies.com/";

?>
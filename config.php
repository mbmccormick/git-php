<?php

    global $title;
    global $repos;
    global $help_clone;
    global $help_url;
    
    // title of the website
    $title = "McCormick Technologies - Source Code";
    
    // list of repositories to display
    $reporoot = "/home/gitps/repositories/";
    $repolist = "/home/gitps/gitosis/projects.list";
    
    // help message for clone
    $help_clone = "git clone gitps@mccormicktechnologies.com:&lt;projectname&gt;.git &lt;localpath&gt;";
    
    // help message for contact url
    $help_url = "http://www.mccormicktechnologies.com/";

?>
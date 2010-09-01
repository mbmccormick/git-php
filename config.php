<?php

    global $title;
    global $repos;
    global $help_clone;
    global $help_url;
    
    // title of the website
    $title = "code.mbmccormick.com";
    
    // list of repositories to display
    $repos = array(
        "/home/mtgitosis/repositories/mccormicktechnologies.com.git",
        "/home/mtgitosis/repositories/indianlakeartisans.com.git",
        "/home/mtgitosis/repositories/mbmccormick.com.git",
    );
    
    // help message for clone
    $help_clone = "git clone mtgitosis@code.mbmccormick.com:&lt;projectname&gt;.git &lt;localpath&gt;";
    
    // help message for contact url
    $help_url = "http://mbmccormick.com/";

?>
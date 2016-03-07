Man pages Local Plugin for Moodle 2.2+
==================================================

This is a package of Linux man pages for Moodle. Man Pages Copyright Respective Owners. 

Description
---------------

This plugin allows to retrieve the man pages from the local server of a command passed as a parameter `cmd`.
For example, `http://your_moodle_domain/local/manpages/?cmd=cut` will produce the man page of the command `cut`.

Installation
-----------------

To install the plugin using git, execute the following commands in the root of your Moodle install:

    git clone https://github.com/GuillaumeBlin/moodle-local_manpages.git your_moodle_root/local/manpages
    
Or, extract the following zip in `your_moodle_root/local/` as follows:

    cd your_moodle_root/local/
    wget https://github.com/GuillaumeBlin/moodle-local_manpages/archive/master.zip
    unzip -j master.zip -d manpages

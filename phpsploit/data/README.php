#This readme contains a brief description of each file on that directory.

./user_agents.lst
======================
    This file contains a list (one per line) of common browser user agents.
    It is defaultly used as HTTP_USER_AGENT setting, as a file object because
    file objects (aka file://PATH), when used as HTTP_* settings (http headers)
    will randomly pick-up a line from these files.


./logo.ascii
============
    This file contains the ascii art string used as logo by the PhpSploit
    framework interface at start.


./intro.msg
===========
    It contains the introduction message, written right below the ascii logo.


./messages.lst
==============
    This useless file contains a list of quotes, randomly picked-up and
    printed on framework start/end, just for fun!

./config/
=========
    This directory contains all the default files that are created
    on empty user configuration creation.

./img/
======
    This directory contains miscelaneous images for demos.

./tunnel/
=========
    This directory contains php codes used by the phpsploit core
    for the payload builder.

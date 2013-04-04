# 9. Shell scripting

Ever wanted to automate something? Have you been running the same set of
commands all morning? Deleting your project, rebuilding your project, over and
over again? This is where shellscripting comes into play. Shell scripts are
just a series of commands executed from top to bottom by the shell intrpreter.
As you already know there are several types of shells and shell interpreters
but we will focus on scripting for the bash shell.

### Things to note:

The first line of the file tells the opperating system what interpreter you
would like to execute your script. When scripting for bash this will be:

    
    #!/bin/bash

The second thing to note is that you will need permissions to exectue your
file, this will mean running:

    
    chmod +x myshellscript.sh

To run your shellscript simply "dot-slash" it as below and watch the magic
happen.

    
    ./myshellscript.sh


4. ssh / scp / rsync
====================
In a previous section we went over how to copy files from one place on your
computer to another. Now what about over a network? Well first you will need to
connect to another computer:

###  ssh < username >@< hostname >
####  Used for:
    Establishing a "secure shell" on another computer. You will be logged into
that computer, using a shell on that computer.This allows you to do work on that
computer remotely, as well as access resources on that computer's network that
may not be on the network you are currently on.
####  Flags:<br><br>

Ssh is important because it allows us to connect ourselves from one computer to
another, allowing us to make use of that computer's filesystem as part of our
own. For example lets say we wished to copy a file from our laptop to a computer
within the lab so you can hand it in for homework?

### scp [flag] <username>@<hostname>:<from file path> <username>@<hostname>:<to
file path>
#### Used for:
    Coping files between computers over a network using ssh.
#### Flags:
    -r Enables recursion into directories.

#### Example:
    scp user@host:~/classes/homework.txt .
This would copy from the classes folder in "user"'s home directory a file called
"homework.txt" to "." or the same location that the user was in when they
executed the command.

    scp ~/documents/classes/homework/hw1.java
user@host:/classes/classname/handin
This would move a file from a folder in the User's home directory on the local
machine to a remote directory on the host located at "/classes/classname/handin"

###  rsync
#### Used for:
    Moving large files across a network or maintaining backups. Rsync provides a
utility for keeping the owner and last accessed timestamps on files and folders
the same even if it is copying them over a network.
#### Flags:
    -e Enable command line option such as ssh
    -a Enable archive mode (preserve timestamps)
    -v Verbose, list everything
    -z Compresses data so that transfer goes quicker
    --progress Enable progress bar
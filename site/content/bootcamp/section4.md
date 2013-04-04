# 4. ssh / scp / rsync

In a previous section we went over how to copy files from one place on your
computer to another. Now what about over a network? Well first you will need
to connect to another computer:

## ssh

#### Used for:

Allows the user to establish a secure remote terminal session on another
computer. This command will allow you, to log into and use the machine
remotely. This is very useful when working with machines that are either
virtual, or hosted in a remote location somewhere.

Generally speaking on a user level you will not need to use any flags or
special flags while using ssh. You will however need to become familiar with
the command format.

    
    # ssh user.name@host.name.tld 

If you do not provide ssh a username, ssh will use the username of the account
you are currently logged in as. This can be handy when moving around within
one system where your account name stays constant

#### Flags:

Ssh is important because it allows us to connect ourselves from one computer
to another, allowing us to make use of that computer's filesystem as part of
our own. For example lets say we wished to copy a file from our laptop to a
computer within the lab so you can hand it in for homework?

## scp

#### Used for:

Scp stands for Secure Copy and it is a command that lets us move files accross
a network from one place to another sercurely. Scp uses ssh to connect to the
host that you are not logged into when copying. You can copy from one remote
host to another without being logged into either one, but it is not
recomended.

#### Flags:

    
    -r Enables recursion into directories.

#### Example:

    
    To copy something from a remote loction to your present location
    scp user@host:~/classes/homework.txt .
    
    To copy something to a remote location from your local machine
    scp ~/classes/homework.txt user@host:~/copied/
    
    General format:
    scp user@from.host:~/fullpath user@to.host:/fullpath

## rsync

#### Used for:

Moving large files across a network or maintaining backups. Rsync provides a
utility for keeping the owner and last accessed timestamps on files and
folders the same even if it is copying them over a network.

#### Flags:

    
    -e Enable command line option such as ssh
    -a Enable archive mode (preserve timestamps)
    -v Verbose, list everything
    -z Compresses data so that transfer goes quicker
    --progress Enable progress bar
    

#### Example:

    
    Copies the /remote/dir to /this/dir while preserving the timestamps on the files and compressing the files while they go over the network.
    The -e flag allows the use of the ssh command to log into the remotehost to access the directories needed.
    # rsync -avz -e ssh remoteuser@remotehost:/remote/dir /this/dir/ 


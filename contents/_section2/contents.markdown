2. Basic Linux Commands
=======================
####_NOTE on notation:_
> command [flags can go here] < mandatory argument > [optional argument]
> arguments and flag groups are separated by spaces


###  ls [file path]
####  Used for:
    To list the contents of directories. Can be used on other directories,
assumes you mean this one if no directory given.
####  Flags:
    -a Lists all files (including hidden)
    -l Does the long output, listing permissions owner and size
    -h Makes output "human readable" (adjusts sizes from bytes to K, M, G etc.)
    -R Enables recursion into directories

###  mkdir [file path/] <directory name>
####  Used for:
    Making a directory.
####  Flags:<br><br>

###  cd <file path>
####    Used for:
    Change the directory you are currently in to the given one. Takes full or
relative path
#### Flags:<br><br>

###  touch [file path/] <file name>
####  Used for:
    Creation of files.
####  Flags:<br><br>

###  rm [flags] <file or directory>
####  Used for:
    Removing files or directories.
####  Flags:
    -r Recurs down into directories
    -f Force, ignores any complaints etc (will delete directories)
    -v Verbose, lists deleted directories.

###  mv [Path]<file or directory name> [path]<file or directory name>
####  Used for:
    Copies the first file/directory and then places it in the second location.
####  Flags:<br><br>

###  cp [Path]<file or directory name> [path]<file or directory name>
####  Used for:
    Copying files.
####  Flags:
    -r Activates recursion.
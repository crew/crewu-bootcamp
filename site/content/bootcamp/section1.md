# 1. Intro to the Terminal

# 1.1 What is a Terminal (AKA you can skip this if you have ever used one before)

A terminal&mdash;in the simplest sense&mdash;is what text based applications run in;
It displays all text you see on the screen.
When a terminal first starts it usually launches into an application called a shell&mdash;an interactive text based program meant for running a computer by reading in commands the user types in. 
The shell continually reads in the text you type and evaluates it as an instruction.
Programs that are meant to be run from a shell are call "command-line applications."

A typical shell looks something like this:

        username@host:directory$ this-is-the-command with-arg-1 and-arg-2

When the user presses enter, the command is executed, and its output is printed to the screen.

The `username@host:directory$` portion is called the prompt. It is completely customizable, so it may wind up looking completely different. (At the moment mine is `[master*][agero:crewu-bootcamp/site]`, but with colors!)

In this example, `username` is replaced by the username of the current user; `host` is replaced by the name of the machine the shell is running on; `directory` is replaced by the what is called the "present working directory", or PWD for short. (The command to view the PWD is `pwd` by the way. Go figure.)

The shell always has a PWD. The PWD effects how certain file or programs are accessed.

## 1.2 Introduction to File Systems

File systems 2 objects, Files and Folders. (This is a lie. We cover that later.)

These are arranged in a "tree" structure with folders containing more files and
folders.

A locations in this tree are paths&mdash;a list of folders needed to arrive at a particular point in
the tree; for example `/home/fakeuser/documents/classes/`. The root of this tree (which is called "root" or "slash") has the path `/`. Full paths are paths that start at the "root" of the file system ("/").
Relative file paths are ones that start at the directory you are in.

Your home directory is located at `/home/username`. A shortcut for this is to use
`~`. Path starting with `~` are also absolute.

### Special Folders and Files
Unix file systems have 2 pseudo-folders `.` and `..` inside every folder; These are
"this folder" and "the folder above" respectively. They are very helpful when
needing to refer to folders or files that are near your current location in
the file system, like when building a relative path.

Unix file systems consider files and folders that start with a "." to be hidden, and will not show them unless specifically asked to. The folders `.` and `..` are examples of these kinds of folders. Configuration files are often hidden in this manor. Please note that if the PWD is inside a hidden folder, the contents of the folder are not considered hidden by default. The "." only hides the folder itself.

### Mounting

Adding a drive (USB, or other) to a file system is called "mounting." This just
means that you add the drive as another branch on your tree at some point in
the tree.

## 1.3 Commands and Executing Programs

Lets take another look at the example prompt from before:

  username@host:directory$ this-is-the-command -with-this-flag and-with-with-arg-1 and-arg-2

The command and its arguments are what a user typed in to get things done. A command is (usually) the name, or path to, some program with that programs arguments separated by spaces.

### Flags!

Commands have flags, such as "-a" or "-r" these can be combined "-avz" or used
separately "-avz -e" these flags alter the way that commands you enter into
your shell operate.

### Shells

There are several different shells that provide additional functionality to
your Linux experience such as "tab completion" of commands and spell check. We
will go into greater detail about shells later.


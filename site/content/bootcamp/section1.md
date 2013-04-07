# 1. Intro to the Terminal

# 1.1 What is a Terminal

Shells are interactive text based programs for running a computer. Its what you have when there is no GUI.
Programs that are meant to be run from a shell are call "command-line applications."

Terminals&mdash;in the simplest sense&mdash;are what shells execute in. They are what displays all text you see on the screen.

When you start a terminal is open it launches a shell. A typical shell looks something like this:

  username@host:directory$ this-is-the-command with-arg-1 and-arg-2

When the user presses enter, the command is executed, and its output is printed to the screen.

The `username@host:directory$` is called the prompt. 

`username` is replaced by the username of the current user. `host` is replaced by the name of the machine the shell is runnig on. `director` is replaced by the what is called the "present working directory"m, or PWD for short. (The command to view the PWD is `pwd` by the way. Go figure.)

The shell is always in some part of the file system. Where the shell is effects how certain file or programs are accessible.

## 1.2 Introduction to File Systems

There are 2 objects, Files and Folders.

These are arranged in a "tree" structure with folders containing more files &
folders.

The root folder is located at `/`.

A file path is the list of folders needed to arrive at a particular point in
the tree: `/home/fakeuser/documents/classes/`.

Your home directory is located at "/home/user". A shortcut for this is to use
`~`.

### A Couple More Things

Adding a drive (USB, or other) to a file system is called "mounting" this just
means that you add the drive as another branch on your tree at some point in
the tree.

Full paths are paths that start at the "root" of the file system ("/") and then
go from there (you can use "~" to abbreviate if you would like.

Relative file paths are ones that start at the directory you are in and go on
from there.

Unix file systems have 2 pseudo-folders inside every folder "." and ".." these are
"this folder" and "the folder above" respectively. These are very helpful when
needing to refer to folders or files that are near your current location in
the file system.

Unix file systems consider files and folders that start with a "." to be hidden, and will not show them unless specifically asked to. The folders "." and ".." are examples of these kinds of folders. Configuration files are often hidden in this manor. Please not that if the PWD is inside a hidden folder, the contents of the folder are not considered hidden by default. The "." only hides the folder itself.

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


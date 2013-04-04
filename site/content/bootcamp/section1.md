# 1. FileSystems

## 1.1 Introduction to filesystems, a few facts:

There are 2 things, Files and Folders.

These are arranged in a "tree" structure with folders containing more files &
folders

The root folder is located at "/".

A file path is the list of folders needed to arrive at a particular point in
the tree: "/home/fakeuser/documents/classes/"

Your home directory is located at "/home/user". A shortcut for this is to use
"~".

## 1.2 A couple more things:

Adding a drive (USB, or other) to a filesystem is called "mounting" this just
means that you add the drive as another branch on your tree at some point in
the tree.

Full paths are paths that start at the "root" of the filesystem ("/") and then
go from there (you can use "~" to abbreviate if you would like.

Relative file paths are ones that start at the directory you are in and go on
from there.

Unix filesystems have 2 folders inside every folder "." and ".." these are
"this folder" and "the folder above" respectively. these are very helpful when
needing to refer to folders or files that are near your current location in
the filesystem.

Unix filesystems hide files and folders from "normal" view by putting a "." at
the beginning of the name like this: ".config"

## 1.3 Other good to know things:

### Flags!

Commands have flags, such as "-a" or "-r" these can be combined "-avz" or used
separately "-avz -e" these flags alter the way that commands you enter into
your terminal operate.

### Shells:

There are several different shells that provide additional functionality to
your linux experience such as "tab completion" of commands and prompts, we
will go into greater detail about shells later.


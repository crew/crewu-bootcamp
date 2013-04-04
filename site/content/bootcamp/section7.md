# 7. Sudo

## What is Sudo

Sudo is a command that lets you execute another command as the "SuperUser" or
"root" user of the machine. The root user is a user on every machine who has
access to everything, if you come from a windows environment imagine root as a
"Super administrator" who has access to all files folders and commands on the
system.

## When would I need this?

As a user of an adminsitrated system probably not very often.

As an administrator of a system you will need to use sudo to execute commands
such as "apt-get" to install packages, or to modify configuration files that
are normally protected or owned by the root user.

## Rules about Sudo

The most important rule is to not to exectute commands as root arbitrarily.
You want to make sure that the root account is used exclusively for
maintaining and administrating the machine and is not used on a day to day
baisis for other things that can be done as a non-root user.


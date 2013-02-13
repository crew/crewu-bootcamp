7. Sudo
=======
+ The first rule of sudo is donâ€™t sudo. Sudo the first rule of sudo is to sudo. 
Sudo allows you to act as the â€œrootâ€ user when interacting in your shell. The
â€œrootâ€ user is your computer. It controls permissions over everything, and is
the ultimate voice of authority over anything your computer does. It is actually
possible to login as a root user, and when you are acting as root your prompt
will change to have a hash (#). 

+ Sudo is a useful command for those wishing to make changes to configuration
  files that are normally hidden from view and not editable. If you go to the
root directory (/) and do a â€œls â€“laâ€ youâ€™ll see that most of the files are owned
by the â€œrootâ€ user and are lacking write permissions. These files are protected
by root because they are normally things that make your computer run, such as
background process that you probably donâ€™t want to mess with unless you want to
fuck things up big time. 
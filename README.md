student-portal
==============

StudentPortal App is a follow-through tutorial for learning the Yii Framework. 

Details on the tutorial here: http://encore254.blogspot.com/2012/08/yii-tutorial-introduction.html

Structure
=========
The StudentPortal App is a Yii-based app. The Yii code is under StudentPortal/. The db/ folder has the sql file for the MySQL database used in the project. The file with the latest date under this folder is the most up-to-date.

Setup (Unix-based Systems)
===========================
Follow the following steps to set up the system on a Linux-based system (Ubuntu, Fedora, etc)
1.  Open a terminal cd into the directory in which you want to set up the project. It's recommended not to set it up directly under your web root

2.  Fork the project on GitHub to your repo, then clone it on your machine. You now have 2 folders in your directory, StudentPortal & db. 

3.  Navigate to your web root (`/var/www/` or `/var/www/html` depending on your distro)

4.  Create a symlink to the the original location of the Yii project. For example, if you had your project under a directory: `/srv/applications/student-portal/`, make a symlink to `/srv/applications/student-portal/StudentPortal/` by running `sudo ln -s /srv/applications/student-portal/StudentPortal StudentPortal`

5.  This will ensure that you can access the project from your browser on (http://localhost/StudentPortal)

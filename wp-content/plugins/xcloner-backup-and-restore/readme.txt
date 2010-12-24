=== XCloner - Backup and Restore===
Contributors: xcloner
Donate link: http://www.xcloner.com/
Tags: backup, restore, admin, plugin, database, full backup, cloner, xcloner, theme, files, upload, wordpress backup, backup plugin, database backup, database restore, site move, transfer, blog transfer
Requires at least: 2.0.2
Tested up to: 3.0.1
Stable tag: 2.1.2

XCloner is a full backup and restore plugin for Wordpress, it will backup and restore both files and database. www.xcloner.com

== Description ==

www.XCloner.com

XCloner is a Backup and Restore component designed for PHP/Mysql websites, it can work as a native plugin for WordPress and Joomla!.

XCloner design was specifically created to Generate custom backups of any LAMP website through custom admin inputs, and to be able to Restore the clone on any other location with the help of the automatic Restore script we provide, independent from the main package!

XCloner Backup tool uses Open Source standards like TAR and Mysql formats so you can rest assured your backups can be restored in a variety of ways, giving you more flexibility and full control.

XCloner Generate, Move and Restore process:

   1. Generate and Store the backups
   2. Move the backup and restore script to the new location
   3. Restore the backup by launching the XCloner.php restore script

Features:

    * Backup and Restore any PHP/Mysql  application

    * Create custom backups

    * Generate automatic backups based on cronjobs

    * Restore your backups anywhere

    * Share your custom backups with your clients


== Installation ==

1. Upload the plugin directory to wp-content/plugins dirctory
2. Activate the plugin
3. Create directory administrator/backups and make it writeable under your Wordpress site root
4. Access it from the Plugins->XCloner menu

IMPORTANT:

If the plugin was downloaded from the xcloner.com website, follow this install:

1. Upload the package files to your Wordpress ROOT directory
2. Activate the plugin
3. Create directory administrator/backups and make it writeable under your Wordpress site root
4. Access it from the Plugins->XCloner menu

== Frequently Asked Questions ==

= How do I restore my backup? =

If the inside Clone option fails for some reason, you need to:

1. upload the backup archive to the new restore site
2. upload the XCloner.php and TAR.php files in the same location as the backup from 1., you can find these files in directory wp-content/plugins/xcloner/restore/ on the original site
3. start the XCloner.php restore script in your browser


== Screenshots ==

1. Login screen
2. Config area
3. Config options
4. Generate Backup -> database options
5. Generate Backup -> files options

== Changelog ==

= 2.1 =
Initial release
= 2.1.2 =
Added Amazon S3 cron storage support

== Upgrade Notice ==

= 2.1 =
Initial release

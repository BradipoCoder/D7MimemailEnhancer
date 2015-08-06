MimeMail Enhancer
=================

This module wants to give developers the following enhancements respect to mimemail module:

* .less support for mail theming
* embedding of images defined in less/css files
* themers debug option - interrupt the sending of the mail and show how the mail would look like.


Configuration
--------------
- **Enable module**
- **Configure "Mail System"** - set 'EnhancedMimeMailSystem' class for all dropdowns
- **Configure "Mime Mail"** - set 'E-mail format' to 'Full HTML'


Less support
-------------

Obviously, you will need to have a working [less](https://www.drupal.org/project/less) compiler in your D7 deployment.

MimeMail Enhancer has a built in 'mimemail_enhancer.less' file with a very basic formatting.
If you want to make your own, all you need to do is to create a less file with the same name in your template directory and this module will pick it up automatically.


If you do not want to use less files you can always use css stylesheets. Name your file 'mimemail_enhancer.css' and put it in your template directory.


Image embedding
----------------
All images that you use in your stylesheet files (css|less) can have realtive paths. They will be transformed to full drupal paths and before sending the mail this module will embed them to your mail as inline attachments.
For now there is no option to make this feature optional.


Debugging
----------

The most time consuming part of theming mails is to 'theme->send->receive->see result'. While it is necessary to check
 HTML mails in most of the mail clients, before you get to that stage, you'd probably need to send out hundreds of mails.

To enable the 'Theme Debug' option, you need to go to the configuration page of the MimeMail Enhancer module, click the checkbox
 'Enable Theme Debug' and from the 'Theme Debuggers' select box select the users(only administrators are listed) for whom
 you want to enable debugging. Now, every time one of these users send a mail through drupal_mail() function, the process
 will be interrupted just before the mail would be sent out showing you the final mail message with your templates and stylesheets
 applied.
 
 
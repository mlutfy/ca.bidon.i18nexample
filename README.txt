This is a demo extension for the i18n support for CiviCRM extensions.
It shows how to use the "domain" argument in PHP, Smarty and Javascript,
as well as the l10n structure for the .po/.mo files.

This is still "beta". You can follow the issue here:
http://issues.civicrm.org/jira/browse/CRM-12446

To get the latest version of this extension:
https://github.com/mlutfy/ca.bidon.i18nexample

Other references:
http://civicrm.org/blogs/joe-murray/translations-extensions
http://forum.civicrm.org/index.php/topic,28426.msg121556.html

INSTALLATION:

* Install as any regular extension.
* Enable "native gettext" support:
  http://wiki.civicrm.org/confluence/display/CRMDOC43/CiviCRM+Localisation#CiviCRMLocalisation-Usingnativegettextsupport/setlocale
* Compile the .po file for your language (if available)
  $ sudo apt-get install gettext
  $ msgfmt l10n/fr_CA/LC_MESSAGES/i18nexample.po -o l10n/fr_CA/LC_MESSAGES/i18nexample.mo

TRANSLATING THE EXAMPLE:

If you have a few minutes to translate the example strings into your language,
please open an issue on the github project page with your file attached:
https://github.com/mlutfy/ca.bidon.i18nexample/issues

For simplicity, or so I think, you can copy the i18nexample.po from fr_CA into your
language and translate using a regular text editor. Hopefully, we will have a more
automated system for doing this soon.

BUGS & SUPPORT:

Please post your questions about extension internationalisation and localisation
on the CiviCRM forum for i18n/l10n:
http://forum.civicrm.org/index.php/board,10.0.html

For confirmed bugs, post on the CiviCRM issue tracker:
http://issues.civicrm.org/

For bugs regarding this demo extension, please post on the github project page:
https://github.com/mlutfy/ca.bidon.i18nexample/issues

TODO:

* SQL install/upgrade examples?
* Better documentation (wiki page, blog post, ..)

LICENSE AND REDISTRIBUTION:

(C) 2013 Mathieu Lutfy
http://www.bidon.ca/en/about

Redistributed under the AGPL license:
http://civicrm.org/licensing


<?php

require_once 'CRM/Core/Page.php';

class CRM_I18nexample_Page_I18nexample extends CRM_Core_Page {
  function run() {
    // NB: in this case we are not setting the title of the page, so it is the page title set from the menu XML
    // At the moment, we cannot localize those titles. We keep this example so that we can improve/test later.
    //
    // CRM_Utils_System::setTitle(ts('i18nexample title page', array('domain' => 'ca.bidon.i18nexample')));

    // Example: Assign variables for use in a template.
    // we assign both the time and a silly sentence, to show how we can translate in either
    // this PHP page or the smarty template.
    $time = date('Y-m-d H:i:s');
    $this->assign('currentTime', $time);

    $saytime = array(
      0 => ts('Current time: %1.', array(1 => $time, 'domain' => 'ca.bidon.i18nexample')),
      1 => ts('According to the server, it is %1.', array(1 => $time, 'domain' => 'ca.bidon.i18nexample')),
      2 => ts('This page was generated at %1.', array(1 => $time, 'domain' => 'ca.bidon.i18nexample')),
    );

    $x = rand(0, 2);
    $this->assign('currentTimeRandomSentence', $saytime[$x]);

    // For the JS ts() test:
    CRM_Core_Resources::singleton()->addScriptFile('ca.bidon.i18nexample', 'i18nexample.js');
    CRM_Core_Resources::singleton()->addSetting(array(
      'i18nexample' => array(
        'currentTime' => $time,
      )
    ));

    /**
      NB: VERY BAD PRACTICE: do not do this:

      $saytime = array(
        0 => 'Current time:',
        1 => 'According to the server, the time is ',
        2 => 'This page was generated at:',
      );

      $foo = ts($saytime) . ' ' . $time;

      NB: VERY BAD PRACTICE: do not do the above.
      1- It will not be possible to extract the string automatically, because is it not wrapped in ts().
         Gettext will only see ts($saytime), and will ignore it because it is a variable.

      2- Different languages may have different rules or typography on how to say the time.
         For example, in French, there is a space before a column:
         "Heure : $time".
    */

    parent::run();
  }
}


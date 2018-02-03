<?php

require_once 'CRM/Core/Page.php';

use CRM_I18nexample_ExtensionUtil as E;

class CRM_I18nexample_Page_I18nexample2 extends CRM_I18nexample_Page_I18nexample {
  function run() {
    // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
    // Note that we set the "domain" to this module so that the string gets translated using i18nexample.mo
    CRM_Utils_System::setTitle(E::ts('i18nexample title page'));

    parent::run();
  }
}


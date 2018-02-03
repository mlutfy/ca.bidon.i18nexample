/**
 * Javascript test for ts() in extensions.
 */
(function($, _, ts) {
  $('.crm-i18nexample-test').click(function() {
    CRM.alert(ts('This is a string in a javascript function in the i18nexample extension. Page generated at %1.', {1: CRM.i18nexample.currentTime}), ts('Yay!'), 'success');
    return false;
  });
})(CRM.$, CRM._, CRM.ts('i18nexample'));

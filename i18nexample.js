/**
 * Javascript test for ts() in extensions.
 */
cj(function($) {
  $('.crm-i18nexample-test').click(function() {
    CRM.alert(ts('This is a string in a javascript function in the i18nexample extension. Page generated at %1.', {1: CRM.i18nexample.currentTime, domain: 'i18nexample'}), ts('Yay!', {domain: 'i18nexample'}), 'success');
    return false;
  });
});


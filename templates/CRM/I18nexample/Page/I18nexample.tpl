<p>{ts}The title of the page is set from the CiviCRM menu XML, and at the moment, cannot be localized.{/ts}</p>

<h3>{ts 1='CRM/I18nexample/Page/I18nexample.php'}This new page is generated by %1{/ts}</h3>

{* Example: Display a variable directly *}
<p>{$currentTimeRandomSentence}</p>

{* Example: Display a translated string -- which happens to include a variable *}
<p>{ts 1=$currentTime domain='ca.bidon.i18nexample'}The current time is %1.{/ts}</p>

<p><a class="crm-i18nexample-test" href="#">{ts domain='ca.bidon.i18nexample'}Javascript test popup.{/ts}</a></p>

<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_Plugins_Reporters_HtmlReporter implements Swift_Plugins_Reporter
{
 public function notify(Swift_Mime_SimpleMessage $message, $address, $result)
 {
 if (self::RESULT_PASS == $result) {
 echo '<div style="color: #fff; background: #006600; padding: 2px; margin: 2px;">' . \PHP_EOL;
 echo 'PASS ' . $address . \PHP_EOL;
 echo '</div>' . \PHP_EOL;
 \flush();
 } else {
 echo '<div style="color: #fff; background: #880000; padding: 2px; margin: 2px;">' . \PHP_EOL;
 echo 'FAIL ' . $address . \PHP_EOL;
 echo '</div>' . \PHP_EOL;
 \flush();
 }
 }
}

<?php
namespace MailPoetVendor\Egulias\EmailValidator\Warning;
if (!defined('ABSPATH')) exit;
class DeprecatedComment extends Warning
{
 const CODE = 37;
 public function __construct()
 {
 $this->message = 'Deprecated comments';
 }
}

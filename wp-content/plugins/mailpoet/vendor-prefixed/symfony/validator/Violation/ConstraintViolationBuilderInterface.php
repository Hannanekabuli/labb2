<?php
namespace MailPoetVendor\Symfony\Component\Validator\Violation;
if (!defined('ABSPATH')) exit;
interface ConstraintViolationBuilderInterface
{
 public function atPath($path);
 public function setParameter($key, $value);
 public function setParameters(array $parameters);
 public function setTranslationDomain($translationDomain);
 public function setInvalidValue($invalidValue);
 public function setPlural($number);
 public function setCode($code);
 public function setCause($cause);
 public function addViolation();
}

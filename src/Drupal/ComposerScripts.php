<?php
/**
 * @file
 * Some scripts to run with composer.
 */

namespace Drupal;

use Composer\Script\Event;

class ComposerScripts
{
  public static function postUpdate(Event $event)
  {
    $composer = $event->getComposer();
    // do stuff
  }

  public static function postInstall(Event $event)
  {
    $vendorDir = $event->getComposer()->getConfig()->get('vendor-dir');
    require $vendorDir . '/autoload.php';
  }

}
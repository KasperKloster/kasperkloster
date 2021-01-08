<?php

namespace App\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;

class SpatieCspExtended  extends Basic
{
  public function configure()
  {
    parent::configure();
      $this
      ->addGeneralDirectives()
      ->addFontDirectives()
      ->addAnalyticsDirective();

  }

  public function addGeneralDirectives()
  {
      return $this
      ->addDirective(Directive::SCRIPT, 'self')
      ->addDirective(Directive::STYLE, 'self');
  }

  public function addFontDirectives()
  {
    return $this 
    ->addDirective(Directive::STYLE, 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/')
    ->addDirective(Directive::FONT, 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/')
    ->addDirective(Directive::STYLE, 'https://fonts.googleapis.com/')
    ->addDirective(Directive::FONT, 'http://fonts.gstatic.com/');
  }

  public function addAnalyticsDirective()
  {
      return $this
        ->addDirective(Directive::SCRIPT, 'https://www.googletagmanager.com/')
        ->addDirective(Directive::CONNECT, 'https://www.google-analytics.com/')
        ->addDirective(Directive::IMG, 'https://www.google-analytics.com/')
        ->addDirective(Directive::CONNECT, 'https://stats.g.doubleclick.net');
  }
}

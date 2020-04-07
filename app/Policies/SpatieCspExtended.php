<?php

namespace App\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;

class SpatieCspExtended  extends Basic
{
  public function configure()
  {
      parent::configure();
      $this->addDirective(Directive::FONT, 'http://fonts.gstatic.com/');
      $this->addDirective(Directive::FONT, 'https://use.fontawesome.com/');

      $this->addDirective(Directive::STYLE, 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
      $this->addDirective(Directive::STYLE, 'http://fonts.googleapis.com/');
      $this->addDirective(Directive::STYLE, 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');
      
      $this->addDirective(Directive::SCRIPT, 'https://code.jquery.com/jquery-3.4.1.min.js');
      $this->addDirective(Directive::SCRIPT, 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
      $this->addDirective(Directive::SCRIPT, 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');
      $this->addDirective(Directive::SCRIPT, 'https://www.googletagmanager.com/gtag/');

      $this->addDirective(Directive::IMG, 'https://www.google-analytics.com/');
      $this->addDirective(Directive::CONNECT, 'https://www.google-analytics.com/');

  }
}

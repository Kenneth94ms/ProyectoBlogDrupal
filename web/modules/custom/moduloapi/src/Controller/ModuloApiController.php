<?php

namespace Drupal\moduloapi\Controller;
use Drupal\Core\Controller\ControllerBase;

class ModuloApiController extends ControllerBase{
  public function display_text(){
    $output['#title'] = t('Modulo Api Twitter');
    $output['#theme'] = 'modapitwit';
    $output['#text'] = 'Lo que sea';
    return $output;
  }
}
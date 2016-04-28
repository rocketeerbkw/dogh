<?php

namespace Drupal\dogh\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class SearchController.
 *
 * @package Drupal\dogh\Controller
 */
class SearchController extends ControllerBase {

  /**
   * Index.
   *
   * @return string
   *   Return Index string.
   */
  public function index() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: index')
    ];
  }

}

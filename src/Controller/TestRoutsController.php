<?php

namespace Drupal\test_routs\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class TestRoutsController extends ControllerBase {

  /**
   * Returns a render-able array for a test page.
   */
  public function content() {
    $build = [
      '#markup' => $this->t('Hello World!'),
    ];
    return $build;
  }

  /**
   * Returns a render-able array for a test page.
   */
  public function access() {
    $build = [
      '#markup' => $this->t('Hello Access!'),
    ];
    return $build;
  }


}

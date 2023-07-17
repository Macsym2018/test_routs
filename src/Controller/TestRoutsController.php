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

  /**
   * A title callback method for test routes.
   *
   * @param array $_title_arguments
   *   Optional array from the route defaults.
   * @param string $_title
   *   Optional _title string from the route defaults.
   *
   * @return string
   *   The route title.
   */
  public function contentTitle(array $_title_arguments = [], $_title = '') {
    return t($_title_arguments['title']);
  }


}

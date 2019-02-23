<?php

namespace Drupal\activitypub\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\user\UserInterface;

class OutboxController extends ControllerBase {

  /**
   * Routing callback: outbox route for incoming messages.
   */
  public function outbox(UserInterface $user) {

  }

}
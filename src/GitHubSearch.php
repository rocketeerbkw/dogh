<?php

namespace Drupal\dogh;

use \Github\Client as GitHub;

/**
 * Class GitHubSearch.
 *
 * @package Drupal\dogh
 */
class GitHubSearch implements GitHubSearchInterface {

  private $GitHub;

  function __construct() {
    $this->GitHub = new GitHub();
  }

  /**
   * Return a list of github repositories related to Drupal.
   *
   * @return array
   */
  public function drupalRepositories() {
    $repos = $this->GitHub->api('search')->repositories('drupal');
    return $repos['items'];
  }

}

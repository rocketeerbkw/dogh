<?php

namespace Drupal\dogh;

use Github\Client as GitHub;

/**
 * Uses the GitHub API to return information about Drupal related repositories.
 *
 * @package Drupal\dogh
 */
class GitHubSearch implements GitHubSearchInterface {

  private $GitHub;

  /**
   * Constructor.
   */
  public function __construct() {
    $this->GitHub = new GitHub();
  }

  /**
   * {@inheritdoc}
   */
  public function drupalRepositories() {
    $repos = $this->GitHub->api('search')->repositories('drupal');
    return $repos['items'];
  }

}

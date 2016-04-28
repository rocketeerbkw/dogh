<?php

namespace Drupal\dogh;

/**
 * Uses the GitHub API to return information about Drupal related repositories.
 *
 * @package Drupal\dogh
 */
interface GitHubSearchInterface {

  /**
   * Return a list of github repositories related to Drupal.
   *
   * @return array
   *   Array of repository objects
   */
  public function drupalRepositories();

}

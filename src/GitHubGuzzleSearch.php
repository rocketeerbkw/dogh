<?php

namespace Drupal\dogh;

use GuzzleHttp\Client;

/**
 * Uses the GitHub API to return information about Drupal related repositories.
 *
 * @package Drupal\dogh
 */
class GitHubGuzzleSearch implements GitHubSearchInterface {

  private $http;

  /**
   * Constructor.
   *
   * @param \GuzzleHttp\Client $http
   *   Guzzle client library.
   */
  public function __construct(Client $http) {
    $this->http = $http;
  }

  /**
   * {@inheritdoc}
   */
  public function drupalRepositories() {

    $response = $this->http->get('https://api.github.com/search/repositories?q=drupal');
    $body = json_decode($response->getBody());

    return $body->items;
  }

}

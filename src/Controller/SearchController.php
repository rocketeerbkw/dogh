<?php

namespace Drupal\dogh\Controller;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Controller\ControllerBase;
use Drupal\dogh\GithubSearchInterface;

/**
 * Uses GitHubSearch service to display Drupal related repositories from GitHub.
 *
 * @package Drupal\dogh\Controller
 */
class SearchController extends ControllerBase {

  private $GitHubSearch;

  /**
   * Constructor.
   *
   * @param \Drupal\dogh\GithubSearchInterface $github_search
   *    GitHub search service.
   */
  public function __construct(GithubSearchInterface $github_search) {
    $this->GitHubSearch = $github_search;
  }

  /**
   * Method used for dependency injection.
   *
   * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
   *   Service container.
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('dogh.github_search')
    );
  }

  /**
   * Show a list of repositories on GitHub related to Drupal.
   *
   * @return array
   *   A render array.
   */
  public function index() {

    $repos = $this->GitHubSearch->drupalRepositories();

    return [
      '#theme' => 'dogh_search_results',
      '#repositories' => $repos,
    ];
  }

}

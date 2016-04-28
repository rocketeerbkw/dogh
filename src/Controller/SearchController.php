<?php

namespace Drupal\dogh\Controller;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Controller\ControllerBase;
use Drupal\dogh\GithubSearchInterface;

/**
 * Class SearchController.
 *
 * @package Drupal\dogh\Controller
 */
class SearchController extends ControllerBase {

  private $GitHubSearch;

  public function __construct(GithubSearchInterface $github_search) {
    $this->GitHubSearch = $github_search;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('dogh.github_search')
    );
  }

  /**
   * Index.
   *
   * @return string
   *   Return Index string.
   */
  public function index() {

    $repos = $this->GitHubSearch->drupalRepositories();

    return [
      '#type' => 'markup',
      '#markup' => print_r($repos, true),
      '#prefix' => '<pre>',
      '#postfix' => '</pre>',
    ];
  }

}

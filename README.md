# Drupal on GitHub

This is an example Drupal 8 module that uses the GitHub API to search for Drupal
related repositories.

## Installation

Follow the [Installing contributed modules](https://www.drupal.org/documentation/install/modules-themes/modules-8)
instructions.

## Usage

Go to /search/drupal-on-github.


## knplabs/github-api

To use a contributed GitHub API library instead of Guzzle:

  1. Install [composer_manager](https://www.drupal.org/project/composer_manager)
     and follow the [instructions](https://www.drupal.org/node/2405811) to
     download the library
  2. In `Drupal\dogh\Controller\SearchController` change `dogh.github_guzzle_search`
     to `dogh.github_search`

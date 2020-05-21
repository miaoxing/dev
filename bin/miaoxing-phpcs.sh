#!/bin/bash

set -e

vendor/bin/phpcs --config-set installed_paths vendor/miaoxing/coding-standards
vendor/bin/phpcs -i

if [[ -e "phpcs.xml.dist" ]]; then
  STANDARD="phpcs.xml.dist";
else
  STANDARD="vendor/miaoxing/coding-standards/phpcs.xml.dist";
fi

vendor/bin/phpcs --standard=${STANDARD} .

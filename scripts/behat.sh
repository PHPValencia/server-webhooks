#!/bin/bash
DIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )

$DIR/../vendor/bin/behat -c $DIR/../tests/behat/behat.yml
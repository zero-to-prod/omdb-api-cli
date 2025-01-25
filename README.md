# Zerotoprod\OmdbApiCli

![](art/logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/omdb-api-cli)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/omdb-api-cli/test.yml?label=tests)](https://github.com/zero-to-prod/omdb-api-cli/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/omdb-api-cli?color=blue)](https://packagist.org/packages/zero-to-prod/omdb-api-cli/stats)
[![php](https://img.shields.io/packagist/php-v/zero-to-prod/omdb-api-cli.svg?color=purple)](https://packagist.org/packages/zero-to-prod/omdb-api-cli/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/omdb-api-cli?color=f28d1a)](https://packagist.org/packages/zero-to-prod/omdb-api-cli)
[![License](https://img.shields.io/packagist/l/zero-to-prod/omdb-api-cli?color=pink)](https://github.com/zero-to-prod/omdb-api-cli/blob/main/LICENSE.md)
[![wakatime](https://wakatime.com/badge/github/zero-to-prod/omdb-api-cli.svg)](https://wakatime.com/badge/github/zero-to-prod/omdb-api-cli)
[![Hits-of-Code](https://hitsofcode.com/github/zero-to-prod/omdb-api-cli?branch=main)](https://hitsofcode.com/github/zero-to-prod/omdb-api-cli/view?branch=main)

## Contents

- [Introduction](#introduction)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Docker Image](#docker-image)
- [Local Development](./LOCAL_DEVELOPMENT.md)
- [Image Development](./IMAGE_DEVELOPMENT.md)
- [Contributing](#contributing)

## Introduction

## Requirements

- PHP 8.1 or higher.

## Installation

Install `Zerotoprod\OmdbApiCli` via [Composer](https://getcomposer.org/):

```bash
composer require zero-to-prod/omdb-api-cli
```

This will add the package to your project’s dependencies and create an autoloader entry for it.

## Usage

Run the cli:

```shell
vendor/bin/omdb-api-cli
```

## Docker Image

You can also run the cli using the docker image:

```shell
docker run --rm davidsmith3/omdb-api-cli
```

## Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check the [issues](https://github.com/zero-to-prod/omdb-api-cli/issues) page if you want to contribute.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.
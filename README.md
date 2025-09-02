# Zerotoprod\OmdbApiCli

![](art/logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/omdb-api-cli)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/omdb-api-cli/test.yml?label=test)](https://github.com/zero-to-prod/omdb-api-cli/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/omdb-api-cli/backwards_compatibility.yml?label=backwards_compatibility)](https://github.com/zero-to-prod/omdb-api-cli/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/omdb-api-cli/build_docker_image.yml?label=build_docker_image)](https://github.com/zero-to-prod/omdb-api-cli/actions)
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
- [Documentation Publishing](#documentation-publishing)
    - [Automatic Documentation Publishing](#automatic-documentation-publishing)
- [Usage](#usage)
  - [Available Commands](#available-commands)
    - [`omdb-api-cli:byIdOrTitle`](#omdb-api-clibyidortitle)
    - [`omdb-api-cli:search`](#omdb-api-clisearch)
    - [`omdb-api-cli:poster`](#omdb-api-cliposter)
    - [`omdb-api-cli:src`](#omdb-api-clisrc)
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

This will add the package to your project's dependencies and create an autoloader entry for it.

## Documentation Publishing

You can publish this README to your local documentation directory.

This can be useful for providing documentation for AI agents.

This can be done using the included script:

```bash
# Publish to default location (./docs/zero-to-prod/omdb-api-cli)
vendor/bin/zero-to-prod-omdb-api-cli

# Publish to custom directory
vendor/bin/zero-to-prod-omdb-api-cli /path/to/your/docs
```

### Automatic Documentation Publishing

You can automatically publish documentation by adding the following to your `composer.json`:

```json
{
    "scripts": {
        "post-install-cmd": [
            "zero-to-prod-omdb-api-cli"
        ],
        "post-update-cmd": [
            "zero-to-prod-omdb-api-cli"
        ]
    }
}
```

## Usage

Run this command to see the available commands:

```shell
vendor/bin/omdb-api-cli list
```

### Available Commands

This CLI tool provides several commands to interact with the OMDB (Open Movie Database) API. All commands require an API key which you can obtain from [https://www.omdbapi.com/apikey.aspx](https://www.omdbapi.com/apikey.aspx).

#### `omdb-api-cli:byIdOrTitle`

Get detailed information about a movie, series, or episode by IMDb ID or title.

**Usage:**
```shell
vendor/bin/omdb-api-cli omdb-api-cli:byIdOrTitle <apikey> [options]
```

**Arguments:**
- `apikey` (required) - Your OMDB API key

**Options:**
- `--title` - The title name to search for
- `--imdbid` - The IMDb ID of the title (e.g., tt0111161)
- `--type` - Filter by type: `movie`, `series`, or `episode`
- `--year` - The release year of the title
- `--full_plot` - Include full plot instead of short plot (flag, no value needed)

**Examples:**

```shell
# Get movie by title
vendor/bin/omdb-api-cli omdb-api-cli:byIdOrTitle your_api_key --title="The Shawshank Redemption"

# Get movie by IMDb ID
vendor/bin/omdb-api-cli omdb-api-cli:byIdOrTitle your_api_key --imdbid=tt0111161

# Get specific year and type with full plot
vendor/bin/omdb-api-cli omdb-api-cli:byIdOrTitle your_api_key --title="Batman" --year=2008 --type=movie --full_plot
```

**Sample Output:**
```json
{
    "Title": "The Shawshank Redemption",
    "Year": "1994",
    "Rated": "R",
    "Released": "14 Oct 1994",
    "Runtime": "142 min",
    "Genre": "Drama",
    "Director": "Frank Darabont",
    "Writer": "Stephen King, Frank Darabont",
    "Actors": "Tim Robbins, Morgan Freeman, Bob Gunton",
    "Plot": "Two imprisoned men bond over a number of years...",
    "Language": "English",
    "Country": "United States",
    "Awards": "Nominated for 7 Oscars",
    "Poster": "https://m.media-amazon.com/images/M/MV5BNDE3ODcxYzMtY2YzZC00NmNlLWJiNDMtZDViZWM2MzIxZDYwXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_SX300.jpg",
    "imdbRating": "9.3",
    "imdbID": "tt0111161",
    "Type": "movie",
    "Response": "True"
}
```

#### `omdb-api-cli:search`

Search for movies, series, or episodes by title.

**Usage:**
```shell
vendor/bin/omdb-api-cli omdb-api-cli:search <apikey> <title> [options]
```

**Arguments:**
- `apikey` (required) - Your OMDB API key
- `title` (required) - The title to search for

**Options:**
- `--type` - Filter by type: `movie`, `series`, or `episode`
- `--year` - Filter by release year
- `--page` - Page number for paginated results (default: 1)

**Examples:**

```shell
# Basic search
vendor/bin/omdb-api-cli omdb-api-cli:search your_api_key "Batman"

# Search for movies only from 2008
vendor/bin/omdb-api-cli omdb-api-cli:search your_api_key "Batman" --type=movie --year=2008

# Search with pagination
vendor/bin/omdb-api-cli omdb-api-cli:search your_api_key "Star Wars" --page=2
```

**Sample Output:**
```json
{
    "Search": [
        {
            "Title": "Batman Begins",
            "Year": "2005",
            "imdbID": "tt0372784",
            "Type": "movie",
            "Poster": "https://m.media-amazon.com/images/M/MV5BOTY4YjI2N2MtYmFlMC00ZjcyLTg3YjEtMDQyM2ZjYzQ5YWFkXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg"
        },
        {
            "Title": "The Dark Knight",
            "Year": "2008",
            "imdbID": "tt0468569",
            "Type": "movie",
            "Poster": "https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_SX300.jpg"
        }
    ],
    "totalResults": "468",
    "Response": "True"
}
```

#### `omdb-api-cli:poster`

Get the poster URL for a movie or series by IMDb ID.

**Usage:**
```shell
vendor/bin/omdb-api-cli omdb-api-cli:poster <apikey> <imdbid>
```

**Arguments:**
- `apikey` (required) - Your OMDB API key
- `imdbid` (required) - The IMDb ID of the title (e.g., tt0111161)

**Example:**

```shell
# Get poster URL
vendor/bin/omdb-api-cli omdb-api-cli:poster your_api_key tt0111161
```

**Sample Output:**
```
https://m.media-amazon.com/images/M/MV5BNDE3ODcxYzMtY2YzZC00NmNlLWJiNDMtZDViZWM2MzIxZDYwXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_SX300.jpg
```

#### `omdb-api-cli:src`

Display the project's source repository URL.

**Usage:**
```shell
vendor/bin/omdb-api-cli omdb-api-cli:src
```

**Arguments:**
- None

**Example:**

```shell
vendor/bin/omdb-api-cli omdb-api-cli:src
```

**Sample Output:**
```
https://github.com/zero-to-prod/omdb-api-cli
```

## Docker Image

You can also run the cli using the [docker image](https://hub.docker.com/repository/docker/davidsmith3/omdb-api-cli/general):

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

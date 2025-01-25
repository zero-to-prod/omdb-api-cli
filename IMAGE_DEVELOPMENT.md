# Image Development

## Contents

- [Introduction](#introduction)
- [Prerequisites](#prerequisites)
- [Building](#building)
- [Running](#running)
- [Pushing](#pushing)

## Introduction

This project provides a convenient [dh](https://github.com/zero-to-prod/dock) (Docker Hub) script to simplify image development.

## Prerequisites

- Docker installed and running

## Configuration

Before starting development, verify that your `.env` file contains the correct settings.

```dotenv
DOCKER_IMAGE=
DOCKER_IMAGE_TAG=latest
```

## Building

Use the following commands to build the project:

```shell
sh dh build
```

## Running

Use the following commands to run the project:

```shell
sh dh run
```

## Pushing

Use the following commands to push the project:

```shell
sh dh push
```
FROM php:8.2-cli AS builder

WORKDIR /app

RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    unzip \
  && rm -rf /var/lib/apt/lists/*

COPY . /app

RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin \
    --filename=composer

RUN composer install

RUN chmod +x /app/bin/omdb-api-cli

FROM php:8.2-cli

WORKDIR /app/bin

COPY --from=builder /app /app

ENTRYPOINT ["php", "omdb-api-cli", "--ansi"]
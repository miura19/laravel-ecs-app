# イメージを取得
FROM php:8.4-fpm
# 独自のphp.iniファイル(PHPの設定ファイル)を 
# コンテナ内の/usr/local/etc/php/ディレクトリにコピー

# パッケージやPHPの拡張モジュールをインストールするコマンド　を実行
# 必要なパッケージをインストール
RUN apt-get update && apt-get install -y \
git \
curl \
zip \
unzip \
redis-tools \
default-mysql-client \
&& docker-php-ext-install pdo_mysql \
&& apt-get clean \
&& rm -rf /var/lib/apt/lists/*

RUN pecl install redis && docker-php-ext-enable redis
COPY /docker-ecr/php/php.ini /usr/local/etc/php/

# Composerのインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# COPY composer.json composer.lock ./
# RUN composer install --no-dev --optimize-autoloader

# PHP ファイルをコピー（ここがポイント）
COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html

# 作業ディレクトリを/var/www/htmlに設定
WORKDIR /var/www/html
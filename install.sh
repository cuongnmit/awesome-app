#!/usr/bin/env bash

# shellcheck disable=SC2034
COLOR_BLACK="\033[30m"
COLOR_RED="\033[31m"
COLOR_GREEN="\033[32m"
COLOR_YELLOW="\033[33m"
COLOR_BLUE="\033[34m"
COLOR_PINK="\033[35m"
COLOR_CYAN="\033[36m"
COLOR_WHITE="\033[37m"
COLOR_NORMAL="\033[0;39m"

echo_color_green() {
	msg=$1
	printf $COLOR_GREEN
	echo $msg;
	printf $COLOR_NORMAL
}

echo_color_yellow() {
	msg=$1
	printf $COLOR_YELLOW
	echo $msg;
	printf $COLOR_NORMAL
}

echo_color_green "Copy .env file:"
php -r "file_exists('.env') || copy('.env.example', '.env');"
echo_color_green "Preparing install packages, dependencies:"
echo_color_green "Running composer install..."
rm -rf composer.lock && composer install
echo_color_green "Running yarn install..."
yarn install
echo_color_green "Running bower install..."
bower install
echo_color_green "Install packages, dependencies successfully"
echo_color_green "Generate application key..."
php artisan key:generate
echo_color_green "Bundle resource files..."
yarn dev
echo_color_green "Change owner to www-data:"
sudo chown -R www-data:www-data ./
echo_color_green "Add current user to www-data group"
sudo adduser "$USER" www-data
echo_color_green "Allow www-data group's members write and execute"
sudo chmod -R g+w ./
echo_color_green "Finished"

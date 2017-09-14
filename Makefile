.PHONY: build

build:
	date
	php -v

	composer install

	echo "Cache clear"
	php symfony cc

	echo "Setting up File Permissions"
	php symfony project:permissions


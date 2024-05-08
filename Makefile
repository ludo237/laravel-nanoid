dependencies:
	composer update -oW

test:
	./vendor/bin/pest

coverage:
	./vendor/bin/pest --coverage-html=coverage

phpstan:
	./vendor/bin/phpstan analyse --level=max src

pint:
	./vendor/bin/pint src

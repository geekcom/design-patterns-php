
# DesignPatterns PHP
_A collection of design patterns applied  PHP_

[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.3-blue.svg?style=flat-square)](https://php.net/)
[![License](https://poser.pugx.org/geekcom/felicio/license)](https://packagist.org/packages/geekcom/felicio)

## About

A collection of design patterns in PHP inspired by book - [Head First Design Patterns](https://www.amazon.com/Head-First-Design-Patterns-Brain-Friendly/dp/0596007124)

## How to use

With docker and docker compose installed:

Start the docker container;
```
docker-compose up -d
```

Install the dependencies;
```
docker exec -it design-patterns-php composer install
```

Execute the tests;
```
docker exec -it design-patterns-php vendor/bin/phpunit --testdox
```

Study the codes :)

----------------------------------------------------------------------------------------------------------------------------


## Contributing

Feel free to contribute, make a fork!

## License

The Felicio library is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## [Questions?](https://github.com/design-patterns-php/issues)

Open a new [Issue](https://github.com/design-patterns-php/issues) or look for a closed issue

# Heroku Go
Heroku Go is a small script to turn a single Heroku instance into an environment-driven 302 URL redirect server.

## Requirements
- Heroku instance
- NGINX or Apache (defaults to NGINX)
- PHP 5.5+

## Installation

```bash
composer install
```

## Environment
Can be configured with a `.env` file or with system environment variables.
```
# prefix is set in index.php
HEROKU_GO_GOOGLE=https://google.com # /google would redirect here
```

## Security

Environment variables can have sensitive information stored in them. Any variables starting with `HEROKU_GO_` (or whatever prefix you set) will be directly exposed. This project is aimed at a single Heroku instance and shouldn't be exposed to any sensitive information.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

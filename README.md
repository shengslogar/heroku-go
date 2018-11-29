# Heroku Go
Heroku Go is a tiny script to turn a single Heroku instance into a 302 URL redirect server. Redirects are based off environment variables.

## Requirements
- NGINX or Apache (defaults to NGINX)
- PHP 5.5+

## Installation

Clone repository and run `composer install`.

Create an `.env` file or configure system environment variables with a `PREFIX` plus your URL `NAME` set to whatever URL your heart desires. Your prefix can be set in `/index.php` via the `$envPrefix` variable and defaults to `HEROKU_GO_`. So...

````
HEROKU_GO_GOOGLE=https://google.com
```` 

...would redirect `http://example.com/google` to the appropriate address.

## Security

Environment variables often have sensitive information stored in them. Make sure to choose a unique `$envPrefix`. Any variables starting with that prefix will be directly exposed. This project is aimed at a single Heroku instance and shouldn't be exposed to any sensitive environment information.

Use common sense.

## License
Licensed under the do whatever you want license. I am not liable for anything you set on fire.

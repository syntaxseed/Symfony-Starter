# Symfony Starter

Light Symfony skeleton for basic websites.

- TemplateSeed view renderer.
- Added staging environment config package, removed test.
- Monolog added.
- Base controller with services already injected (TemplateSeed, Monolog).

## Use:

- Clone Repo
- Set new APP_SECRET in ```.env``` See: http://nux.net/secret
- Update dependencies: ```composer update```
- Clear Cache: ```php bin/console cache:clear```
- Create a copy of the secret.php config in each environment config package (if needed).
- Serve with built-in PHP webserver: ```php -S localhost:8000```
- ...

## Deploy:

- Clone Repo
- Install dependencies: ```composer install --no-dev```
- Copy secret config from secure vault.
- Set ```APP_ENV`` in .env file to proper environment (dev, staging, prod).
- Clear Cache: ```php bin/console cache:clear```
- Compile Env Vars: ```composer dump-env prod``` (staging, prod)
- ...

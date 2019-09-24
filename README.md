# Symfony Starter

Light Symfony skeleton for basic websites.

- TemplateSeed view renderer.

## Use:

- Clone Repo
- Set new APP_SECRET in ```.env``` See: http://nux.net/secret
- Update dependencies: ```composer update```
- Clear Cache: ```php bin/console cache:clear```
- Create a copy of the secret.php config in each environment config package.

## Deploy:

- Clone Repo
- Install dependencies: ```composer install --no-dev```
- Copy secret config.
- Set ```APP_ENV`` in .env file to proper environment (dev, staging, prod).
- Clear Cache: ```php bin/console cache:clear```
- Compile Env Vars: ```composer dump-env prod```

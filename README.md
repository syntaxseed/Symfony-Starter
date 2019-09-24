# Symfony Starter

Lightweight Symfony skeleton for basic, mostly static, websites.

Based On: **Symfony 4.3.4** (Skeleton)

- TemplateSeed view renderer.
- Added staging environment config package, removed test.
- Monolog added.
- Base controller with services already injected (TemplateSeed, Monolog).

## Use:

- Clone Repo
- Update and install dependencies: ```composer update```
- Security Check dependencies with: ```./bin/console security:check```
- Set new APP_SECRET in ```.env``` See: http://nux.net/secret
- Create a copy of the secret.php config in each environment config package (if needed).
- Clear Cache: ```./bin/console cache:clear```
- Run with built-in webserver: ```./bin/console server:run```
- ...

## Deploy:

- Clone Repo
- Install dependencies: ```composer install --no-dev```
- Copy secret config from secure vault
- Set ```APP_ENV`` in .env file to proper environment (dev, staging, prod).
- Clear Cache: ```./bin/console cache:clear```
- Compile Env Vars: ```composer dump-env prod``` (staging, prod)
- Delete:
  - .git/
  - bin/
  - .gitignore
  - composer.json
  - README.md
- ...

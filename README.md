# Symfony Starter

Lightweight Symfony skeleton for basic, mostly static, websites.

Based On: **Symfony 5.4** (Skeleton)

- TemplateSeed view renderer.
- Added staging environment config package, removed test.
- Symfony webserver and security-checker available for dev.
- Monolog added.
- Base controller with services already injected (TemplateSeed, Monolog).
- Helpful console commands for TemplateSeed.

## TODO:

Rebuild this from scratch based on previous Symfony project. Replace TemplateSeed with Twig. Will have a lot more of what I'll need.

## Static Site Generation

Branch `s4g` (Symfony Seed Static Site Generator) contains an experimental use of TemplateSeed for static site generation.

## Use (dev):

- Clone Repo
- Update and install dependencies: ```composer update```
- Security Check dependencies with: ```./bin/console security:check```
- Set new APP_SECRET in ```.env``` See: http://nux.net/secret
- Create a copy of the secret.php config in each environment config package (if needed).
  - Keep these files ignored by source control.
  - Store copy in a secure vault/password manager.
- Clear Cache: ```./bin/console cache:clear```
- Run with built-in webserver: ```./bin/console server:run```
- ...

## Deploy (staging or prod):

- Clone Repo
- Set ```APP_ENV`` in .env file to proper environment (staging, prod)
- Install dependencies: ```composer install --no-dev```
  - (If APP_ENV is dev, use: ```composer install``` instead or scripts will fail)
- Copy secret config from secure vault
- Clear Cache: ```./bin/console cache:clear```
- Compile Env Vars: ```composer dump-env prod``` (staging, prod)
- Delete:
  - .git/
  - bin/
  - .gitignore
  - composer.json
  - README.md
- ...

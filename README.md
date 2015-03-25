OAuth 2.0 Demo
===========
Symfony Project Demo integrate FOSOAuthServerBundle & FosUserBundle
###Install
**1. Clone Projects**
**2. Install composer**

```bash
composer install
```
**3. Update schema**
```bash
php app/console doctrine:schema:update --force
```
###Usage
**1. Add more test user**

```bash
php app/console fos:user:create admin admin@gmail.com adminpass
php app/console fos:user:create test test@gmail.com testpass
```
**2. Run command create new client**

```bash
php app/console app:oauth-server:client:create --redirect-uri="http://client.dev/app_dev.php/demo/login_oauth" --grant-type="authorization_code" --grant-type="..."
```
will receive:
```
- Added a new client with public id 7_50dtjqmb038c8k8wocgckss8so8kkok0gg04g4cswcswo4ockk, secret 3nvp505hg42s8ok840ksgg80kcw4o88k40gkgosog4sosckgko
```
So client_id = `7_50dtjqmb038c8k8wocgckss8so8kkok0gg04g4cswcswo4ockk` & secret_id = `3nvp505hg42s8ok840ksgg80kcw4o88k40gkgosog4sosckgko`

**3. Link authorized**

```
http://oauth2server/app_dev.php/oauth/v2/auth?client_id=7_50dtjqmb038c8k8wocgckss8so8kkok0gg04g4cswcswo4ockk&response_type=code&redirect_uri=http://client.dev/app_dev.php/demo/login_oauth&scope=me
```
Scope demo: `me`, `categories`

**4. API demo**

See `ApiController.php`

```
/api/users
/api/user
/api/categories
/api/categories/{id}
```
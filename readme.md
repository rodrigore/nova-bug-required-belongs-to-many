## Laravel nova bug with relationship name  and validations

- [Laravel 6](https://laravel.com/docs/6)
- [Laravel Nova 2.3.1](https://nova.laravel.com)

## Steps
```bash
# clone project
git clone https://github.com/rodrigore/nova-bug-required-belongs-to-many nova-bug
cd nova-bug

# download nova and put into root as 'nova'
...

# install dependencies
composer install

# update env variables
cp .env.example .env
vim .env

# key
php artisan key:generate

# migrations and seed
php artisan migrate --seed

```

## 2. Steps
* go to nova-bug.test/nova
* Login with the user in the seed (test@test.com, with password 'password')
* Click on the 'Problemas' sidebar
* View any resources
* Click on 'attach Intervención'
* Try to save the attach without selecting any option
* Now nova show an error of database constraints because of the field is null


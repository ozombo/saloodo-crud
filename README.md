# Get started


Clone repo and swicth to directory


composer install to install composer

```
- Edit database credentials in `.env`
```

# Database operations
php bin/console doctrine:database:create

php bin/console doctrine:schema:update --force

php bin/console doctrine:fixtures:load --append


# Routes available
bin/console debug:router


INSERT INTO `user` (`id`, `username`, `api_key`, `created_at`, `updated_at`)
VALUES
	(1, 'user', 'yabh9-8by1by1ay6yh-19y8a6ba9y91',  NOW(),  NOW()),
	(2, 'admin', 'yabh9-8by1by1ay6yh-19y8a6ba9y92',  NOW(),  NOW());
```

# You can test by running:

`./vendor/bin/simple-phpunit`

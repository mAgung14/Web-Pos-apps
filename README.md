## Point of Sales Apps

Author: Webhade Creative

Last update: 21-08-2022

Develop by Siswa PKL SMK YPC Tasikmalaya

### Install

```
$ git clone git@github.com:pkl-webhade/pos-apps.git
$ cd pos-apps
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ php artisan migrate
$ php artisan db:seed
```

### Running

```
$ php artisan serve
```

open http://localhost:8000/ 

### Nginx Config

```nginxconf
server {

        root /var/www/html/pos-apps/public;

        index index.php;

        send_timeout 5m;
        proxy_read_timeout 3000;
        proxy_connect_timeout 3000;
        proxy_send_timeout 3000;

        server_name pos-apps.local;

        location / {
                try_files $uri $uri/ /index.php?$args;
        }

        location ~ \.php$ {
            include snippets/fastcgi-php.conf;
            fastcgi_pass unix:/run/php/php8.1-fpm.sock;
        }

        location ~ /\.ht {
            deny all;
        }
}
```


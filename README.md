<h1 align="center">Laravel Backup</h1>


<p align="center">Backup your Laravel application database.</p>

<br>
<p>DB Support: MySQL<br>
Disk Support: local, s3</p>

## Documentation
Installation
```
composer require ingress-it-solutions/laravel-backup
```

Backup to local
```
php artisan db:backup
```
Backup to S3
```
php artisan db:backup s3
```

## Backup Location
- local disk: storage/app/backups
- s3 bucket: backups

## Other Packages

@echo off
REM Demarre le serveur avec limites d'upload 512 Mo (upload carousel / vidéos)
php -d post_max_size=512M -d upload_max_filesize=512M artisan serve

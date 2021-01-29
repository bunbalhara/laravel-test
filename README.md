# Sending Email
1. .env setting
2. [c] php artisan config:cache
3. [c] php artisan make:controller MailController --plain
4. [w] app/Http/Controllers/MailController.php
5. [w] resources/views/mail.blade.php
6. [w] routes/web.php
7. [c] php artisan serve
8. [o] [send basic email](http://localhost:8000/sendbasicemail)
9. [o] [send html email](http://localhost:8000/sendhtmlemail)
10.[o] [send attachment email](http://localhost:8000/sendattachmentemail)

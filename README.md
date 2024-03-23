Setup

- Run 
	~ composer install
- Run 
~ npm install
- Create .env and copy .env.example to that
- Generate key:
	~ php artisan key:generate
	~ php artisan config:clear
   Now, Verify in .env if APP_KEY has now a value
- In .env, update database credentials by searching DB_

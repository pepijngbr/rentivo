# Rentivo  
Laravel + Vue3 webapp.  

## Installation  
1. Clone the repo: `git clone https://github.com/pepijngbr/rentivo.git && cd rentivo`  
2. Install PHP dependencies: `composer install`  
3. Install Node dependencies: `npm install`  
4. Copy `.env` and generate app key: `cp .env.example .env` and `php artisan key:generate`  
5. Setup SQLite database: `touch database/database.sqlite`, in `.env` file change `DB_CONNECTION=sqlite`  
6. Run database migrations (incl. database seeding): `php artisan migrate:fresh --seed`  
7. Start application: `composer run dev`  

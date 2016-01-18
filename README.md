Installation and Setup:  
  
1. Clone a repository (repository contains absolutely all project files).  
2. Setup a virtual host for access to website  
3. Project folders /var/cache and /var/logs/ shall have the 777 right  
4. Setup a file /app/config/parameters.yml to access the database  
5. Import mev.sql to DB (file located in root of project folder) or use "php bin/console doctrine:schema:update --force" for automatic generate  
  
After this steps you can use app.   
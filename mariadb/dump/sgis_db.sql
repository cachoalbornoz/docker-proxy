CREATE DATABASE IF NOT EXISTS sgis_db;

CREATE USER IF NOT EXISTS sgis_admin@'%' IDENTIFIED BY 'E76JHv7xzCVfZO6VkQ';
GRANT ALL PRIVILEGES  ON sgis_db.* TO sgis_admin@'%' WITH GRANT OPTION;

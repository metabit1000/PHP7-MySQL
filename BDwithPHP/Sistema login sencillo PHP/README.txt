Sistema de login usando PDO.
Hay que crear una tabla en nuestra base de datos si no la tenemos ya, como ejemplo usando:

use nombreDB;
create table usuarios(ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY, USUARIOS VARCHAR(20), PASSWORD VARCHAR(64) NOT NULL);

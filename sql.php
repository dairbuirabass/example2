<?php include "menu.php"; ?>
<h2>SQL code for database</h2>
<pre>
    CREATE DATABASE company;
    
    GRANT ALL ON company.* TO 'webuser'@'localhost' IDENTIFIED BY 'webpass';
    USE company;
    
    CREATE TABLE customers(
    id_customers SMALLINT PRIMARY KEY auto_increment,
    firstname VARCHAR(30),
    lastname VARCHAR(30),
    streetaddress VARCHAR(20)
    ) Engine=InnoDB;
    
    INSERT INTO customers(firstname,lastname) VALUES ('Anna', 'Kendrick');
    INSERT INTO customers(firstname,lastname) VALUES ('Tom', 'Jones');
    INSERT INTO customers(firstname,lastname,streetaddress) VALUES ('Dair', 'Baidauletov', 'Kajaanintie 32');
    
    
</pre>
<?php include "footer.php"; ?>
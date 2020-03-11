CREATE TABLE users (id INTEGER PRIMARY KEY AUTOINCREMENT, username varchar(50) UNIQUE NOT NULL, password varchar(255) NOT NULL, real_name VARCHAR(150) NOT NULL);
INSERT INTO users (username, password, real_name) VALUES ('kiran', 'kiran', 'Kiran');
INSERT INTO users (username, password, real_name) VALUES ('siva', 'siva', 'Siva');
INSERT INTO users (username, password, real_name) VALUES ('prapul', 'prapul', 'Prapul');
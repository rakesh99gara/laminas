CREATE TABLE todo (id INTEGER PRIMARY KEY AUTOINCREMENT, todo varchar(100) NOT NULL, imp int(1) DEFAULT '0', remarks text,status int(1) DEFAULT '0' NOT NULL,user_id INTEGER NOT NULL,category_id INTEGER NOT NULL,FOREIGN KEY(user_id) REFERENCES users(id),FOREIGN KEY(category_id) REFERENCES category(id));
INSERT INTO todo (todo,imp,remarks,user_id,category_id) VALUES ('Go to Office',1,'Complete Laminus',1,1);
INSERT INTO todo (todo,imp,remarks,user_id,category_id) VALUES ('abcdef',0,'lskjfsd',2,2);
INSERT INTO todo (todo,imp,remarks,user_id,category_id) VALUES ('nnvnvn',1,'skjfdslfkjsdf',1,3);
INSERT INTO todo (todo,imp,remarks,user_id,category_id) VALUES ('nmnckl',0,'sjdfkjslfjsldfj',1,2);
INSERT INTO todo (todo,imp,remarks,user_id,category_id) VALUES ('good',1,'lsjdflsfsdfsdf',2,1);
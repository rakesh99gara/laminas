CREATE TABLE reviews (id INTEGER PRIMARY KEY AUTOINCREMENT, content varchar(50) NOT NULL, course_id INTEGER NOT NULL, user_id INTEGER NOT NULL);
INSERT INTO reviews (content, course_id, user_id) VALUES ('This course is an excellent course', 1, 4);
INSERT INTO reviews (content, course_id, user_id) VALUES ('Explanation in this course is really awesome', 1, 4);
INSERT INTO reviews (content, course_id, user_id) VALUES ('I love this course. Superb content', 1, 5);
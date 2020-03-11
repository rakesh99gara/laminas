CREATE TABLE course (
  course_id INTEGER PRIMARY KEY AUTOINCREMENT,
  course_name varchar(120) NOT NULL,
  course_tag varchar(120) NOT NULL,
  course_category varchar(100) NOT NULL,
  course_jobtitle DECIMAL(8,2) NOT NULL,
  course_level varchar(5) NOT NULL,
  course_creator varchar(50) NOT NULL,
  course_image varchar(100) NOT NULL,
  status INTEGER DEFAULT  1
);
INSERT INTO course (course_name, course_tag, course_category, course_jobtitle, course_level, course_creator, course_image) VALUES
('Master of Data Science','datascience' ,'Data Science', 'Data Scientist', 'Intermediate', 'HSE University', 'datascience.jpg'),
('An Advanced course for Machine Learning', 'machinelearning', 'Data Science', 'Data Scientist', 'Advanced', 'Stanford University','machinelearning.jpg'),
('An Advanced course for Deep Learning', 'deeplearning', 'Data Science', 'Data Scientist', 'Advanced', 'deeplearning.ai','deeplearning.jpg'),
('Introduction to Big Data Analytics', 'bigdata', 'Data Science', 'Data Scientist', 'Intermediate', 'Yale University','bigdata.jpg'),
('Learn Data Structures (A-Z)','datastructures' ,'Computer Science', 'Software Engineer', 'Intermediate', 'Princeton University', 'datastructures.jpg'),
('Master In Algorithms', 'algorithms', 'Computer Science', 'Software Engineer', 'Advanced', 'Stanford University','algorithms.jpg'),
('Master of C Language','c' ,'Programming', 'Software Programmer', 'Intermediate', 'Princeton University', 'c.jpg'),
('Introduction to Java Language', 'java', 'Programming', 'Software Programmer', 'Beginner', 'University of California','java.jpg'),
('Advanced Python for everybody', 'python', 'Programming', 'Software Programmer', 'Advanced', 'University of Michigan','python.jpg'),
('Introduction to HTML','html' ,'Web Development', 'Web Developer', 'Beginner', 'IIT Madras', 'html.jpg'),
('Master In CSS', 'cascade', 'Web Development', 'Web Developer', 'Intermediate', 'IIT Madras','css.jpg'),
('An Advanced course for JavaScript', 'javascript', 'Web Development', 'Web Developer', 'Advanced', 'IIT Madras','javascript.jpg'),
('Master In Android','android' ,'Mobile Development', 'Mobile Developer', 'Intermediate', 'Princeton University', 'android.jpg'),
('Introduction to React Native', 'reactnative', 'Mobile Development', 'Mobile Developer', 'Beginner', 'University of California','reactnative.jpg'),
('Advanced course for English Communication', 'english', 'Personal Development', 'Software Professional', 'Advanced', 'Yale University','english.jpg'),
('Master In Computer NetWorking', 'networking', 'Information Technology', 'Network Engineer', 'Advanced', 'Stanford University','networking.jpg'),
('Introduction to Cloud Computing', 'cloud', 'Information Technology', 'Software Engineer', 'Beginner', 'University of Michigan','cloud.jpg');
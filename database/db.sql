CREATE
DATABASE college;

CREATE TABLE students
(
    id      int AUTO_INCREMENT PRIMARY KEY,
    name    varchar(100),
    email   varchar(100) UNIQUE,
    gender  ENUM('male','female'),
    language SET('nepali','english','chinese'),
    country varchar(100)
);


INSERT INTO students(name,email,gender,language,country) VALUES('ram','ram@gmail.com','male','nepali,english,chinese','nepal');
INSERT INTO students(name,email,gender,language,country) VALUES('rama','rama@gmail.com','female','english,chinese','india');
INSERT INTO students(name,email,gender,language,country) VALUES('sophia','sophia@gmail.com','male','chinese','china');
INSERT INTO students(name,email,gender,language,country) VALUES('gopal','goplam@gmail.com','male','nepali,english,chinese','nepal');
INSERT INTO students(name,email,gender,language,country) VALUES('sita','sita@gmail.com','female','english','us');


SELECT * FROM students;
SELECT name FROM students;
SELECT name,email FROM students;

SELECT name as student_name FROM students;

SELECT * FROM students WHERE name='ram';

SELECT * FROM students ORDER BY id DESC;
SELECT * FROM students WHERE name LIKE '%s%';

DELETE FROM students WHERE id=6;

UPDATE students SET name='abc',gender='female' WHERE id=4;


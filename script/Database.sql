-- 1) Create a database
CREATE DATABASE mvc_database;

-- Use the created database
USE mvc_database;

-- 2) Create a table with the specified columns
CREATE TABLE articles
(
    id           INT AUTO_INCREMENT PRIMARY KEY,
    title        VARCHAR(255) NOT NULL,
    description  TEXT         NOT NULL,
    publish_date DATETIME     NOT NULL,
    author       VARCHAR(255) NOT NULL
);

-- 3) Insert dummy data into the table
INSERT INTO articles (title, description, publish_date, author) VALUES
('Arasaka Corporation', 'I tell you why i want to destroy Arasaka but i only tell you one','2023-04-10 12:15:00', 'Johnny Silverhand'),
('My First Article', 'This is the description of my first article.', '2023-01-01 10:00:00', 'Lyne Q'),
('Another Story', 'Here is another interesting story.', '2023-02-15 14:30:00', 'John doe'),
('Learning SQL', 'An article about learning SQL and its benefits.', '2023-03-20 09:45:00', 'Jeane Doe'),
('Cyberpunk 2077', 'A review of the popular video game Cyberpunk 2077.', '2023-05-05 16:00:00', 'Lyne Q');
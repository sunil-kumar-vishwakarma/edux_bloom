
use edux_admin;
show tables;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS students;
DROP TABLE IF EXISTS students;
GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
DESCRIBE enquiries;
ALTER TABLE enquiries MODIFY status ENUM('Achieved', 'Rejected');
DROP TABLE enquiries;
CREATE TABLE enquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    contact VARCHAR(255) NOT NULL,
    country VARCHAR(255) NOT NULL,
    enquiry_date DATETIME NOT NULL,
    status ENUM('Achieved', 'Rejected') DEFAULT 'Achieved',
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL
);

DELETE FROM enquiries;
TRUNCATE TABLE enquiries;
INSERT INTO enquiries (full_name, email, contact, country, enquiry_date, status) 
VALUES 
('John Doe', 'johsdn.doe@example.com', '123456890', 'USA', '2025-01-01 00:00:00', 'Achieved'),
('Jane Smith', 'jansde.smith@example.com', '098754321', 'Canada', '2025-01-05 00:00:00', 'Rejected'),
('Alice Johnson', 'alisdce.j@example.com', '111223334', 'UK', '2025-01-10 00:00:00', 'Achieved'),
('Bob Brown', 'bob.browsdn@example.com', '555667778', 'Australia', '2025-01-15 00:00:00', 'Rejected'),
('Charlie Green', 'charslie.greedn@example.com', '445556667', 'India', '2025-01-20 00:00:00', 'Achieved');
SHOW COLUMNS FROM enquiries;
ALTER TABLE enquiries MODIFY COLUMN status VARCHAR(20);
ALTER TABLE enquiries MODIFY COLUMN status ENUM('Achieved', 'Rejected');
SELECT * FROM enquiries;
SELECT enquiry_date FROM enquiries;

#partner section
CREATE TABLE partners (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    company_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    contact VARCHAR(255) NOT NULL,
    category VARCHAR(255) NOT NULL,
    joined_date DATE NOT NULL,
    status ENUM('Active', 'Inactive') NOT NULL,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL
);
DROP TABLE partners;
ALTER TABLE partners AUTO_INCREMENT = 1;
SHOW TABLE STATUS LIKE 'partners';
SELECT * FROM partners;
DELETE FROM partners;
DESCRIBE partners;


#Profile section 
SELECT * FROM profiles;
DELETE FROM `profiles` WHERE `email` = 'vishnu@sht.com';
DELETE FROM `users` WHERE `email` = 'vishnu@sht.com';
DESCRIBE profiles;
UPDATE users SET is_admin = 1 WHERE email = 'vishnu@sht.com';
SELECT * FROM users WHERE is_admin = 1;
DELETE FROM users WHERE email = 'vishnu@sht.com';
SELECT * FROM users WHERE email = 'vishnu@sht.com';



#blog section
UPDATE blogs 
SET published_date = NULL 
WHERE published_date = '' OR published_date IS NULL;
ALTER TABLE blogs MODIFY COLUMN published_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
SELECT * FROM blogs WHERE published_date IS NULL OR published_date = '' OR published_date NOT LIKE '____-__-__ __:__:__';
SELECT * FROM blogs;
SELECT * FROM blogs WHERE id = 1;



#subscription section
INSERT INTO subscriptions (name, category, features, price, status)
VALUES
    ('Basic Plan', 'User', '5 Projects, 5 GB Storage, Email Support', '$19/month', 'Active'),
    ('Standard Plan', 'Partner', '20 Projects, 20 GB Storage, Priority Email Support', '$39/month', 'Inactive'),
    ('Premium Plan', 'User', 'Unlimited Projects, 50 GB Storage, 24/7 Support', '$79/month', 'Active'),
     ('Basic Plan', 'User', '5 Projects, 5 GB Storage, Email Support', '$19/month', 'Active'),
    ('Standard Plan', 'Partner', '20 Projects, 20 GB Storage, Priority Email Support', '$39/month', 'Inactive'),
    ('Premium Plan', 'User', 'Unlimited Projects, 50 GB Storage, 24/7 Support', '$79/month', 'Active');
DESCRIBE subscriptions;
ALTER TABLE subscriptions
ADD COLUMN name VARCHAR(255),
ADD COLUMN category VARCHAR(255),
ADD COLUMN features TEXT,
ADD COLUMN price VARCHAR(50),
ADD COLUMN status VARCHAR(50);


#Institute/city section 
DESCRIBE cities;
DROP TABLE cities;

#data for dashboard tables
ALTER TABLE enrollments DROP FOREIGN KEY enrollments_student_id_foreign;
ALTER TABLE courses DROP FOREIGN KEY courses_school_id_foreign;

ALTER TABLE enrollments DROP FOREIGN KEY enrollments_student_id_foreign;
DELETE FROM schools;
INSERT INTO schools (name, city, zone) VALUES
('Green Valley High', 'New York', 'North Zone'),
('Sunrise Academy', 'Los Angeles', 'South Zone'),
('Riverdale School', 'Chicago', 'East Zone'),
('Maplewood High', 'San Francisco', 'West Zone'),
('Hilltop College', 'Houston', 'Central Zone'),
('Lakewood Academy', 'Miami', 'North Zone'),
('Westfield School', 'Boston', 'South Zone'),
('Cedar Grove High', 'Dallas', 'West Zone'),
('Oak Ridge High', 'Atlanta', 'Central Zone'),
('Mountain View Academy', 'Seattle', 'North Zone'),
('Valley Forge School', 'Philadelphia', 'East Zone'),
('Northgate College', 'Denver', 'West Zone'),
('Pine Hill High', 'Las Vegas', 'South Zone'),
('Riverfront Academy', 'San Diego', 'North Zone'),
('Redwood School', 'Portland', 'East Zone'),
('Sunset High', 'Sacramento', 'Central Zone'),
('Blue Ridge Academy', 'Charlotte', 'South Zone'),
('Cityview High', 'Washington, D.C.', 'North Zone'),
('Golden Gate School', 'San Francisco', 'West Zone'),
('Skyline Academy', 'Austin', 'Central Zone'),
('Silverwood High', 'Phoenix', 'South Zone'),
('Copperfield School', 'Chicago', 'East Zone'),
('Clearwater Academy', 'Orlando', 'North Zone'),
('Crystal Ridge School', 'St. Louis', 'West Zone'),
('Silver Springs High', 'Kansas City', 'South Zone'),
('Sunshine Academy', 'Las Vegas', 'Central Zone'),
('Oceanview High', 'New Jersey', 'North Zone'),
('Highland Hills College', 'Denver', 'West Zone'),
('Eastwood Academy', 'Dallas', 'East Zone'),
('Windmill High', 'Boston', 'North Zone'),
('Golden Valley High', 'Phoenix', 'Central Zone'),
('Coral Reef School', 'Miami', 'West Zone'),
('Evergreen Academy', 'San Francisco', 'East Zone'),
('Falcon Heights High', 'Seattle', 'South Zone'),
('Parkview School', 'Chicago', 'North Zone'),
('Horizon High', 'Houston', 'East Zone'),
('Lakeside Academy', 'New York', 'West Zone'),
('Riverside College', 'Los Angeles', 'South Zone'),
('Sunrise High', 'Atlanta', 'North Zone'),
('Maple Grove Academy', 'San Diego', 'West Zone'),
('Sunset Ridge High', 'Dallas', 'South Zone'),
('Sunshine Hills Academy', 'Las Vegas', 'Central Zone'),
('Ocean Breeze School', 'Portland', 'North Zone'),
('Crescent Valley Academy', 'Phoenix', 'East Zone'),
('Snowy Mountain School', 'Chicago', 'West Zone'),
('Golden Ridge College', 'Miami', 'Central Zone'),
('Willowbrook High', 'New York', 'North Zone'),
('River City Academy', 'San Francisco', 'South Zone'),
('Bayside High', 'Austin', 'West Zone'),
('Sunbeam Academy', 'Las Vegas', 'East Zone'),
('Sunnydale School', 'Portland', 'Central Zone'),
('Blue Ridge High', 'Denver', 'South Zone'),
('Clear Creek Academy', 'Los Angeles', 'West Zone'),
('Starlight School', 'Houston', 'North Zone'),
('Silverlake Academy', 'Kansas City', 'East Zone'),
('Bright Horizons High', 'Boston', 'South Zone'),
('Oceanview Academy', 'Chicago', 'West Zone'),
('Golden Shores School', 'Miami', 'East Zone'),
('River Park High', 'San Francisco', 'Central Zone'),
('Sunshine Meadows Academy', 'Phoenix', 'South Zone'),
('Moonlight High', 'Las Vegas', 'North Zone');

INSERT INTO courses (title, school_id) VALUES
('Mathematics', 1),
('Science', 1),
('English Literature', 1),
('History', 1),
('Physics', 1),
('Chemistry', 1),
('Biology', 1),
('Computer Science', 1),
('Economics', 2),
('Business Studies', 2),
('Geography', 2),
('French', 2),
('Art and Design', 3),
('Music', 3),
('Physical Education', 3),
('Psychology', 3),
('Sociology', 4),
('Law', 4),
('Philosophy', 4),
('Engineering', 4),
('Mathematics', 5),
('History of Art', 5),
('Literature', 5),
('Political Science', 5),
('Business Administration', 6),
('Psychology', 6),
('Advanced Mathematics', 6),
('Art and Music', 7),
('Digital Marketing', 7),
('Sports Science', 7),
('Environmental Studies', 8),
('Law and Order', 8),
('Music Theory', 8),
('Social Media Studies', 9),
('Financial Accounting', 9),
('Medical Science', 9),
('Physical Education', 10),
('Biotechnology', 10),
('Music Production', 10),
('Advanced Physics', 11),
('Creative Writing', 11),
('Graphic Design', 11),
('Public Administration', 12),
('Chemistry', 12),
('Introduction to Programming', 13),
('Modern History', 13),
('Machine Learning', 13),
('Microeconomics', 14),
('Statistical Analysis', 14),
('Business English', 14),
('Algebra', 15),
('Communication Studies', 15),
('Modern World History', 16),
('Artificial Intelligence', 16),
('Philosophy and Ethics', 16),
('Political Economy', 17),
('Organic Chemistry', 17),
('Engineering Mechanics', 17),
('Introduction to Law', 18),
('Psychological Theories', 18),
('Social Psychology', 18),
('General Biology', 19),
('Communication Skills', 19),
('Accounting Principles', 19),
('Data Science', 20),
('Digital Literacy', 20),
('Web Development', 21),
('Sports Management', 21),
('Java Programming', 21),
('Literature and History', 22),
('Engineering Systems', 22),
('Economic Theory', 22),
('Applied Physics', 23),
('Astronomy', 23),
('Environmental Engineering', 23),
('Philosophical Logic', 24),
('Biology and Chemistry', 24),
('Data Structures and Algorithms', 25),
('Artificial Intelligence', 25),
('Advanced Social Studies', 26),
('Intro to Music Theory', 26),
('Geographical Information Systems', 27),
('Sociology and Social Work', 28),
('Mechanical Engineering', 28),
('Medical Technology', 29),
('Computer Graphics', 30),
('Operations Management', 30),
('Risk Management', 31),
('Financial Mathematics', 31),
('Fashion Design', 32),
('Cultural Studies', 32),
('Forensic Science', 33),
('Technical Writing', 33),
('Project Management', 34),
('Database Systems', 34),
('Web Technologies', 35),
('Cognitive Science', 35),
('International Relations', 36),
('Public Health', 37),
('Statistics for Engineers', 38),
('Entrepreneurship', 39),
('Marketing Management', 40);

INSERT INTO enrollments (student_id, course_id) VALUES
(1, 1), (1, 2), (1, 3), (1, 4), (1, 5), 
(2, 6), (2, 7), (2, 8), (2, 9), (2, 10),
(3, 11), (3, 12), (3, 13), (3, 14), (3, 15),
(4, 16), (4, 17), (4, 18), (4, 19), (4, 20),
(5, 21), (5, 22), (5, 23), (5, 24), (5, 25),
(6, 26), (6, 27), (6, 28), (6, 29), (6, 30),
(7, 31), (7, 32), (7, 33), (7, 34), (7, 35),
(8, 36), (8, 37), (8, 38), (8, 39), (8, 40),
(9, 41), (9, 42), (9, 43), (9, 44), (9, 45),
(10, 46), (10, 47), (10, 48), (10, 49), (10, 50),
(11, 51), (11, 52), (11, 53), (11, 54), (11, 55),
(12, 56), (12, 57), (12, 58), (12, 59), (12, 60),
(13, 61), (13, 62), (13, 63), (13, 64), (13, 65),
(14, 66), (14, 67), (14, 68), (14, 69), (14, 70)
 -- Repeat similar patterns for up to 1000 students with different courses






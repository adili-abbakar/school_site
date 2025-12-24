-- Create the database
CREATE DATABASE school_management;

-- Switch to the new database
USE school_management;

-- Base Users table
CREATE TABLE Users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NULL,     -- optional for students
    phone VARCHAR(20) NULL,
    date_of_birth DATE NOT NULL,
    gender ENUM('MALE','FEMALE','OTHER') NOT NULL,
    nationality VARCHAR(50),
    state VARCHAR(50),
    tribe VARCHAR(50),
    local_government VARCHAR(100),
    home_address VARCHAR(255),
    password VARCHAR(255) NOT NULL,     -- required for login
    role ENUM('ADMIN','STUDENT','TEACHER','GUARDIAN') NOT NULL
);

-- Students table
CREATE TABLE Students (
    student_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    admission_number VARCHAR(50) UNIQUE NOT NULL,
    class_grade VARCHAR(50),
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

-- Teachers table
CREATE TABLE Teachers (
    teacher_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    staff_number VARCHAR(50) UNIQUE NOT NULL,
    occupation VARCHAR(100) NULL,
    place_of_work VARCHAR(100) NULL,
    subjects_taught VARCHAR(255),
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

-- Guardians table
CREATE TABLE Guardians (
    guardian_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    occupation VARCHAR(100) NULL,
    place_of_work VARCHAR(100) NULL,
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

-- Admins table
CREATE TABLE Admins (
    admin_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    staff_number VARCHAR(50) UNIQUE NOT NULL,
    role_type ENUM('SUPER_ADMIN','EXAM_OFFICER','ADMISSION_OFFICER'),
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

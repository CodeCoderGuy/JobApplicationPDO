CREATE TABLE Job_Applicants(
    applicant_id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    gender varchar(10) NOT NULL,
    email varchar(50) NOT NULL,
    phone_number varchar(15) NOT NULL,
    college_name varchar(100) NOT NULL,
    graduation_year INT NOT NULL,
    position_applied_for varchar(50) NOT NULL,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP

)
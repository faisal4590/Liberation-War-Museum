
/*
create table employee
(

employee_id  NUMBER GENERATED ALWAYS AS IDENTITY (START WITH 201714001 INCREMENT BY 1) ,
employee_name varchar(100),
employee_religion varchar(100),
employee_DOB date,
employee_ssc_gpa varchar(30),
employee_hsc_gpa varchar(30),
employee_graduate_cgpa varchar(30),
employee_post_graduate_cgpa varchar(30),
employee_road_no varchar(50),
employee_house_no varchar(50),
employee_flat_no varchar(50),
employee_zip_code  varchar(50),
employee_district varchar(50),
employee_post_code  varchar(50),
employee_class varchar(50),
employee_fathers_name varchar(50),
employee_mothers_name varchar(50),
empolyee_fingerprint_id varchar(100),
employee_working_hour_starts  timestamp,
employee_working_hour_ends  timestamp,
employee_image_name varchar(150),


CONSTRAINT EMPLOYEE_EMPLOYEE_ID_pk PRIMARY KEY(EMPLOYEE_ID)
);

*/

/*

SELECT CONSTRAINT_NAME, CONSTRAINT_TYPE, SEARCH_CONDITION
FROM USER_CONSTRAINTS
WHERE TABLE_NAME='EMPLOYEE';

*/



/*
insert into employee(employee_name,employee_religion,employee_DOB,employee_ssc_gpa,employee_hsc_gpa,
employee_graduate_cgpa,employee_post_graduate_cgpa,employee_road_no,employee_house_no,
employee_flat_no,employee_zip_code,employee_district,employee_post_code,employee_class,
employee_fathers_name,employee_mothers_name,empolyee_fingerprint_id,employee_working_hour_starts,
employee_working_hour_ends,employee_image_name)
values('Faisal Ibn Aziz','Muslim',to_date('11-JAN-1982','DD-MON-YYYY'),'5.00','5.00',
'3.55','3.32','123,Bangabandhu Road','23','2','+880','Dhaka','3122','Second Class','MD.Azizul Haque',
'MRS.Rebeka Sultana','1001',TO_TIMESTAMP('2014-MAR-02 06:14:00', 'YYYY-MON-DD HH24:MI:SS'),
TO_TIMESTAMP('09:14:00', 'HH24:MI:SS'),
'employee_001.jpg');



insert into employee(employee_name,employee_religion,employee_DOB,employee_ssc_gpa,employee_hsc_gpa,
employee_graduate_cgpa,employee_post_graduate_cgpa,employee_road_no,employee_house_no,
employee_flat_no,employee_zip_code,employee_district,employee_post_code,employee_class,
employee_fathers_name,employee_mothers_name,empolyee_fingerprint_id,employee_working_hour_starts,
employee_working_hour_ends,employee_image_name)
values('Moin Bayezid','Muslim',to_date('11-JAN-1981','DD-MON-YYYY'),'5.00','5.00',
'3.99','3.67','23,Navy Headquarter','33','1','+880','Dhaka','1252','First Class','MD.Abdul Bari',
'MRSSalma Khatun','1002',TO_TIMESTAMP('2011-JAN-14 02:00:00', 'YYYY-MON-DD HH24:MI:SS'),
TO_TIMESTAMP('05:00:00', 'HH24:MI:SS'),
'employee_002.jpg');

insert into employee(employee_name,employee_religion,employee_DOB,employee_ssc_gpa,employee_hsc_gpa,
employee_graduate_cgpa,employee_post_graduate_cgpa,employee_road_no,employee_house_no,
employee_flat_no,employee_zip_code,employee_district,employee_post_code,employee_class,
employee_fathers_name,employee_mothers_name,empolyee_fingerprint_id,employee_working_hour_starts,
employee_working_hour_ends,employee_image_name)
values('Sahia Jahin Diya','Muslim',to_date('11-JAN-1982','DD-MON-YYYY'),'5.00','5.00',
'3.55','3.32','123,Bangabandhu Road','23','2','+880','Dhaka','3122','Second Class','MD.Azizul Haque',
'MRS.Rebeka Sultana','1001',TO_TIMESTAMP('2014-MAR-02 06:14:00', 'YYYY-MON-DD HH24:MI:SS'),
TO_TIMESTAMP('09:14:00', 'HH24:MI:SS'),
'employee_003.jpg');

insert into employee(employee_name,employee_religion,employee_DOB,employee_ssc_gpa,employee_hsc_gpa,
employee_graduate_cgpa,employee_post_graduate_cgpa,employee_road_no,employee_house_no,
employee_flat_no,employee_zip_code,employee_district,employee_post_code,employee_class,
employee_fathers_name,employee_mothers_name,empolyee_fingerprint_id,employee_working_hour_starts,
employee_working_hour_ends,employee_image_name)
values('Abid MD. Ali','Muslim',to_date('11-JAN-1982','DD-MON-YYYY'),'5.00','5.00',
'3.55','3.32','123,Bangabandhu Road','23','2','+880','Dhaka','3122','Second Class','MD.Azizul Haque',
'MRS.Rebeka Sultana','1001',TO_TIMESTAMP('2014-MAR-02 06:14:00', 'YYYY-MON-DD HH24:MI:SS'),
TO_TIMESTAMP('09:14:00', 'HH24:MI:SS'),
'employee_004.jpg');

insert into employee(employee_name,employee_religion,employee_DOB,employee_ssc_gpa,employee_hsc_gpa,
employee_graduate_cgpa,employee_post_graduate_cgpa,employee_road_no,employee_house_no,
employee_flat_no,employee_zip_code,employee_district,employee_post_code,employee_class,
employee_fathers_name,employee_mothers_name,empolyee_fingerprint_id,employee_working_hour_starts,
employee_working_hour_ends,employee_image_name)
values('Mahmuda Rawnak Jahan Nitu','Muslim',to_date('11-JAN-1982','DD-MON-YYYY'),'5.00','5.00',
'3.55','3.32','123,Bangabandhu Road','23','2','+880','Dhaka','3122','Second Class','MD.Azizul Haque',
'MRS.Rebeka Sultana','1001',TO_TIMESTAMP('2014-MAR-02 06:14:00', 'YYYY-MON-DD HH24:MI:SS'),
TO_TIMESTAMP('09:14:00', 'HH24:MI:SS'),
'employee_005.jpg');

*/

--SELECT EMPLOYEE_IMAGE_NAME  FROM employee;







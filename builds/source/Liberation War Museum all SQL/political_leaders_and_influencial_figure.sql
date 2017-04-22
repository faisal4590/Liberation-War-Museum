create table political_leaders
(

political_leaders_id NUMBER GENERATED ALWAYS AS IDENTITY (START WITH 971106001 INCREMENT BY 1) ,
name varchar(100),
fathers_name varchar(100),
mothers_name varchar(100),
date_of_birth date,
gender varchar(100),
recognition varchar(100),
spouse varchar(100),
profession varchar(100),

constraint political_leaders_id_pk primary key(political_leaders_id)


);
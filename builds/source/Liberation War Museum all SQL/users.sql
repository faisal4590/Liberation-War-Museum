/*
create table users
(

user_id NUMBER GENERATED ALWAYS AS IDENTITY (START WITH 201514001 INCREMENT BY 1) NOT NULL ,
user_fullname varchar(50),
username varchar(50),
password varchar(150),
confirm_password varchar(150),
gender varchar(100),
email varchar(100),
mobile_number varchar(100),
city varchar(100),

constraint USER_USER_ID_PK primary key(user_id)


);

commit;

*/




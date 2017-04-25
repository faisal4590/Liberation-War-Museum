create table donors
(

donor_id number GENERATED ALWAYS AS IDENTITY (START WITH 3575001 INCREMENT BY 1) NOT NULL ,
donor_name varchar(100),
donation_ammount number(8,3),
donation_date date,
comments varchar(255),

constraint donors_donor_id_pk primary key(donor_id)

);
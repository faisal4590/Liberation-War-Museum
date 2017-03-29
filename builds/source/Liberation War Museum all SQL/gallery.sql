create table gallery
(

gallery_no number GENERATED ALWAYS AS IDENTITY (START WITH 101 INCREMENT BY 1) NOT NULL ,
gallery_name varchar(155),
date_of_establishment date,
inagurated_by varchar(155),
opening_hours timestamp,

constraint gallery_gallery_no_pk primary key(gallery_no)


);
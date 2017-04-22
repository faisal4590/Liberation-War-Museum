CREATE TABLE MARTYRS(
  martyr_id NUMBER GENERATED ALWAYS AS IDENTITY (START WITH 23398001 INCREMENT BY 1) ,
  martyr_name varchar(100),
  martyr_dob DATE,
  martyr_profession varchar(100),
  martyr_date_of_martyrdom DATE,
  martyr_grave_location varchar(100),
  martyr_fathers_name varchar(100),
  martyr_mothers_name varchar(100),

  CONSTRAINT MARTYRS_MARTYR_ID_PK PRIMARY KEY (martyr_id)


);
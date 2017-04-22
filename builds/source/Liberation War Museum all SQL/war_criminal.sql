create table war_criminal
(

  war_criminal_id NUMBER GENERATED ALWAYS AS IDENTITY (START WITH 199311001 INCREMENT BY 1) ,
  name varchar(100),
  crimes varchar(100),
  battle varchar(100),
  nationality varchar(100),
  arrest_date date,
  sentence varchar(100),
  date_of_execution date ,
  date_of_conviction date,

  constraint war_criminal_id_pk primary key(war_criminal_id)

);
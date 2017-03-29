create table art
(

art_id number generated always as identity (start with 4901 increment by 1) not null,
art_name varchar(100),
art_worth_value varchar(100),
art_date_of_painting date,
art_retrieval_date date,

constraint art_art_id_pk primary key(art_id)

);
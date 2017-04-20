create table art
(

art_id number generated always as identity (start with 4901 increment by 1),
art_name varchar(100),
art_worth_value number(8,3) check(art_worth_value > 0),
art_date_of_painting date,
art_retrieval_date date,

constraint art_art_id_pk primary key(art_id),
constraint art_art_worth_value_ck check(art_worth_value > 0)

);
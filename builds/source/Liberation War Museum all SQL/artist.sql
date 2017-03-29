create table artist
(

artist_id number generated always as identity (start with 8701 increment by 1) not null,
art_place varchar(100),
date_of_death date,
worth_value number(8,2),
date_of_retrieval date,

constraint artist_artist_id_pk primary key (artist_id)

);
create table sculpture
(
art_id number generated always as identity (start with 4901 increment by 1) not null,
sculpture_id varchar(100),
sculpture_height number(8,3),
sculpture_width number(8,3),
sculpture_type varchar(155),

constraint sculpture_sculpture_id_pk primary key(sculpture_id),
constraint sculpture_art_id_fk foreign key(art_id) references art(art_id) on delete cascade

);
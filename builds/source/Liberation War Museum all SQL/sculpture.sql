create table sculpture
(
art_id number,
sculpture_id varchar(100),
sculpture_height number(8,3) check(sculpture_height>0),
sculpture_width number(8,3) check(sculpture_width>0),
sculpture_type varchar(155),

constraint sculpture_sculpture_id_pk primary key(sculpture_id),
constraint sculpture_art_id_fk foreign key(art_id) references art(art_id) on delete cascade,
constraint sculpture_sculpture_height_ck check(sculpture_height>0),
constraint sculpture_sculpture_width_ck check(sculpture_width>0)
);
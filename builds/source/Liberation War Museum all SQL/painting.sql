create table painting
(
art_id number generated always as identity (start with 4901 increment by 1) not null,
painting_id varchar(100),
painting_type varchar(155),
painting_award varchar(155),
painting_height varchar(155),
painting_width varchar(155),

CONSTRAINT painting_art_id_fk  FOREIGN KEY (art_id) REFERENCES  ART (art_id) ON DELETE CASCADE,
      
constraint painting_painting_id_pk primary key(painting_id)

);
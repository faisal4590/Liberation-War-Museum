create table painting
(
  art_id number generated always as identity (start with 4901 increment by 1),
  painting_id varchar(100),
  painting_type varchar(155),
  painting_award varchar(155),
  painting_height number(8,3) check(painting_height>0),
  painting_width  number(8,3) check(painting_width>0),

  CONSTRAINT painting_art_id_fk  FOREIGN KEY (art_id) REFERENCES  ART (art_id) ON DELETE CASCADE,

  constraint painting_painting_id_pk primary key(painting_id),
  constraint painting_painting_height_ck check(painting_height>0),
  constraint painting_painting_width_ck check(painting_width>0)
);
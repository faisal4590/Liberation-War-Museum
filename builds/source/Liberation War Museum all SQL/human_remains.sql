create table human_remains
(

body_tags number generated always as identity (start with 197101 increment by 1) not null,
recovery_place varchar(255),
gender varchar(255),
date_of_martyrdom date,
body_parts_found varchar(155),

constraint human_remains_body_tags_pk primary key(body_tags)

);
create table human_remains
(

artifact_id NUMBER GENERATED ALWAYS AS IDENTITY (START WITH 769001 INCREMENT BY 1) ,
body_tags varchar(100),
recovery_place varchar(255),
gender varchar(255),
date_of_martyrdom date,
body_parts_found varchar(155),

constraint human_remains_body_tags_pk primary key(body_tags),

CONSTRAINT human_remains_artifact_id_fk  FOREIGN KEY (artifact_id) REFERENCES  ARTIFACTS (artifact_id)
 ON DELETE CASCADE

);
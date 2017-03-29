create table artifacts
(

artifact_id NUMBER GENERATED ALWAYS AS IDENTITY (START WITH 769001 INCREMENT BY 1) NOT NULL ,
artifact_name varchar(155),
artifact_category varchar(155),
artifact_date_of_retrieval date ,
artifact_time_duration timestamp,

constraint artifacts_artifact_id_pk primary key(artifact_id)

);
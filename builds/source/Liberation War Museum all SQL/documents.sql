create table documents
(
artifact_id NUMBER GENERATED ALWAYS AS IDENTITY (START WITH 769001 INCREMENT BY 1) ,
document_id varchar(100),
document_type varchar(155),
number_of_pages number,
document_condition varchar(155),
document_publish_date date,

constraint documents_document_id_pk primary key(document_id),
CONSTRAINT documents_artifact_id_fk  FOREIGN KEY (artifact_id) REFERENCES  ARTIFACTS (artifact_id)
 ON DELETE CASCADE

);
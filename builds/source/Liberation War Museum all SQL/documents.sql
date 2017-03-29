create table documents
(

document_id number generated always as identity (start with 321101 increment by 1) not null,
document_type varchar(155),
number_of_pages number,
document_condition varchar(155),
document_publish_date date,

constraint documents_document_id_pk primary key(document_id)

);
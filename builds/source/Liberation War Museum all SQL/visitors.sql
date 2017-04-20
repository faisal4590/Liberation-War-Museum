
/*
create table visitors
(

ticket_no NUMBER GENERATED ALWAYS AS IDENTITY (START WITH 542131001 INCREMENT BY 1),
visitor_type varchar(100),
ticket_type varchar(100),
ticket_price numeric(8,3),
comments varchar(255),
entry_time timestamp,

CONSTRAINT visitors_ticket_no_pk PRIMARY KEY(TICKET_NO)

);

*/
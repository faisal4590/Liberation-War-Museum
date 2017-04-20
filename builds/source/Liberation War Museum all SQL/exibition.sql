CREATE table exhibition(
  exibition_no VARCHAR(100)  ,
  exibition_name varchar(100) UNIQUE,
  exibition_sponsors varchar(100),
  exibition_date DATE,
  exibition_start_time TIMESTAMP,
  exibition_finishing_time TIMESTAMP,
  exibition_type varchar(100),
  exibition_price NUMBER(8,3) CHECK (exibition_price>0),

  CONSTRAINT exibition_exibition_name_pk PRIMARY KEY (exibition_no),
  CONSTRAINT exhibition_exibition_price_ck CHECK (exibition_price>0)

);
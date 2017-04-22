CREATE TABLE sector(
  sector_no   NUMBER GENERATED ALWAYS AS IDENTITY (START WITH 001 INCREMENT BY 1) ,
  sector_commandar varchar(100),
  sector_manpower INTEGER,
  sector_raising_day DATE,
  sector_independance_date DATE,
  important_battle_fought VARCHAR(100),
  death_toll VARCHAR(100),
  
  CONSTRAINT sector_sector_no_pk PRIMARY KEY (sector_no)
  
);
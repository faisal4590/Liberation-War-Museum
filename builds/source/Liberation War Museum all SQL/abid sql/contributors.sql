create table CONTRIBUTORS
(

  nid number generated always as identity (start with 87912001 increment by 1),
  contributor_name varchar(100),
  contrubitor_DOB DATE,
  organization_name varchar(100),
  profession varchar(100),
  contribution_type varchar(100),
  contributor_house_no varchar(100),
  contributor_house_name varchar(100),
  contributor_flat_no varchar(100),
  contributor_road_no varchar(100),
  contributor_district_name varchar(100),
  contributor_zip_code varchar(100),
  

  constraint CONTRIBUTORS_NID_PK primary key(NID)

);
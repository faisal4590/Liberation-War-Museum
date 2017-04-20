CREATE TABLE freedom_fighters(
  freedom_fighter_id  NUMBER GENERATED ALWAYS AS IDENTITY (START WITH 60983001 INCREMENT BY 1) ,
  freedom_fighter_name varchar(100),
  freedom_fighter_gender varchar(100),
  freedom_fighter_DOB DATE,
  freedom_fighter_DOM DATE,
  freedom_fighter_country varchar(100),
  frdomm_fighters_f_name varchar(100),
  frdomm_fighters_m_name varchar(100),
  freedom_fighter_type varchar(100),
  gallentary_award_type varchar(100),
  gallentary_received_date varchar(100),
  freedom_fighter_road_no varchar(50),
  freedom_fighter_house_no varchar(50),
  freedom_fighter_house_name varchar(50),
  freedom_fighter_flat_no varchar(50),
  freedom_fighter_zip_code  varchar(50),
  freedom_fighter_district varchar(50),
  freedom_fighter_post_code  varchar(50),

  CONSTRAINT freedom_fighters_id_pk PRIMARY KEY (freedom_fighter_id)

);
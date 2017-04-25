CREATE TABLE freedom_fighters_children(
  freedom_fighter_id  NUMBER ,
  children_name varchar(100),
  children_gender varchar(100),
  children_dob DATE,

  CONSTRAINT freedom_fighter_id_fk  FOREIGN KEY (freedom_fighter_id) REFERENCES  FREEDOM_FIGHTERS
  (freedom_fighter_id) ON DELETE CASCADE
);
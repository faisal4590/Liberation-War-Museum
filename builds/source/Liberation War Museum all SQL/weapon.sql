create table weapon
(

  artifact_id NUMBER,
  weapon_id varchar(100) ,
  weapon_capacity integer,
  weapon_cost number(8,3) CHECK (weapon_cost > 0),
  weapon_model varchar(155),
  weapon_weight number(8,3),
  weapon_manufacturer varchar(155),

  constraint weapon_weapon_id_pk primary key(weapon_id),
  CONSTRAINT weapon_weapon_cost_ck CHECK (weapon_cost > 0),
  CONSTRAINT weapon_artifact_id_fk  FOREIGN KEY (artifact_id) REFERENCES  ARTIFACTS (artifact_id)
  ON DELETE CASCADE

);
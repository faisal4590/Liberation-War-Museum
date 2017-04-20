CREATE table battles(
  battle_name varchar(100),
  battle_place varchar(100),
  num_of_soldiers INTEGER,
  death_toll INTEGER,
  battle_type varchar(100),
  battle_leaders varchar(100),
  battle_date DATE,

  CONSTRAINT battles_battle_name_pk PRIMARY KEY (battle_name)
);
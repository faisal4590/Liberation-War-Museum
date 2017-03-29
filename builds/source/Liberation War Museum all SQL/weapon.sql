create table weapon
(

weapon_id number generated always as identity (start with 450001 increment by 1) not null,
weapon_capacity integer,
weapon_cost number(8,3),
weapon_model varchar(155),
weapon_weight number(8,3),
weapon_manufacturer varchar(155),

constraint weapon_weapon_id_pk primary key(weapon_id)

);
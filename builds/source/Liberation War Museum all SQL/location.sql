CREATE table location(
  room_no NUMBER GENERATED ALWAYS AS IDENTITY (START WITH 001 INCREMENT BY 1),
  floor_no INTEGER,
  section VARCHAR(100),
  CONSTRAINT location_room_no_pk PRIMARY KEY (room_no)
);
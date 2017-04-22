CREATE table sector_area_covered(
  sector_no NUMBER ,
  sector_area_name VARCHAR(100),
  area_size NUMBER(8,3),

  CONSTRAINT area_covered_sector_no_fk  FOREIGN KEY 
  (sector_no) 
  REFERENCES  SECTOR (sector_no) ON DELETE CASCADE
);
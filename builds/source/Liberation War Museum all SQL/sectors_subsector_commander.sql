CREATE table sectors_subsector_commander(
  sector_no NUMBER,
  sector_subCommanderName_name VARCHAR(100),

  CONSTRAINT subsector_commander_fk  FOREIGN KEY (sector_no)
  REFERENCES  SECTOR (sector_no) ON DELETE CASCADE
);
CREATE TABLE forces_division(
  forces_type     VARCHAR(155),
  force_division_name VARCHAR(100),

  CONSTRAINT forces_division_forces_type_fk FOREIGN KEY (forces_type) REFERENCES
    FORCES (forces_type) ON DELETE CASCADE
);
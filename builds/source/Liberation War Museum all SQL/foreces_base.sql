CREATE TABLE forces_base (
  forces_type     VARCHAR(155),
  force_base_name VARCHAR(100),

  CONSTRAINT forces_base_forces_type_fk FOREIGN KEY (forces_type) REFERENCES
    FORCES (forces_type) ON DELETE CASCADE
);
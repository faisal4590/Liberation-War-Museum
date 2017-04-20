CREATE TABLE images(
  image_id NUMBER GENERATED ALWAYS AS IDENTITY (START WITH 7694001 INCREMENT BY 1),
  captured_by VARCHAR(100),
  image_name VARCHAR(100) NOT NULL ,
  date_of_image_capture date,

  CONSTRAINT images_image_id_pk PRIMARY KEY (image_id)

);

CREATE OR REPLACE VIEW images_view(
    "Image Name"
) AS
  SELECT image_name
    FROM images;
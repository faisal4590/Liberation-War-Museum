CREATE TABLE EMPLOYEE_REL_GALLERY(
  employee_id number,
  gallery_no number,
  CONSTRAINT employee_employee_id_fk  FOREIGN KEY (employee_id) 
  REFERENCES  EMPLOYEE (employee_id) ON DELETE CASCADE,
  
  CONSTRAINT gallery_gallery_no_fk  FOREIGN KEY (gallery_no)
  REFERENCES  GALLERY (gallery_no) ON DELETE CASCADE
);
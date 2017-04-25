CREATE TABLE ARTIST(
  ARTIST_NID number,
  ARTIST_NAME VARCHAR(100),
  ARTIST_DOB date,
  ARTIST_DOD date,
  ARTIST_COUNTRY VARCHAR(100),
  ARTIST_ARTPLACE VARCHAR(100),
  AGE AS (ROUND((ARTIST_DOD-ARTIST_DOB)/365,0)),

  CONSTRAINT ARTIST_ARTIST_NID_PK PRIMARY KEY (ARTIST_NID)
);




INSERT INTO ARTIST (ARTIST_NID, ARTIST_NAME, ARTIST_DOB, ARTIST_DOD,
                    ARTIST_COUNTRY, ARTIST_ARTPLACE)
    VALUES (ARTIST_ARTIST_ID_SEQ.nextval,'Faisal',
    to_date('12/04/1995','DD/MM/YYYY'),SYSDATE,'BD','DHAKA');


/*

/////// Artist View ///////////

CREATE OR REPLACE VIEW artist_view
("Artist ID","Art Place", "Date Of Death","Worth Value",
    "Date Of Retrieval") AS
  SELECT ARTIST_ID,ART_PLACE,date_of_death,
    worth_value,date_of_retrieval FROM ARTIST
  WHERE DATE_OF_DEATH > to_date(current_date,'DD-MON-YYYY')
  WITH CHECK OPTION CONSTRAINT artist_death_check;

  
 -----------sample query with view ---------
 
 select "Artist ID","Art Place" from artist_view;
 
 
*/
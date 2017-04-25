CREATE OR REPLACE VIEW
  ARTIST_ART_GALLERY_LOC_VIEW
("Art Name","Artist NID" ,"Artist Name"
  ,"Artist Country","Gallery No",
    "Gallery Name", "Art Value", "Painting Date",
    "Retrieval Date","Room No",
    "Floor No","Section") AS
  SELECT art_name, ARTIST.ARTIST_NID,ARTIST_NAME,ARTIST_COUNTRY,
    ART_GALLERY.gallery_no,gallery_name,art_worth_value,art_date_of_painting,
    art_retrieval_date,GALLERY_LOCATION.room_no,floor_no,section
  FROM ARTIST  JOIN ART_ARTIST ON ARTIST.ARTIST_NID = ART_ARTIST.ARTIST_NID
    JOIN
    ART ON ART_ARTIST.ART_ID = ART.ART_ID
    JOIN ART_GALLERY ON ART.ART_ID = ART_GALLERY.ART_ID
    JOIN GALLERY ON ART_GALLERY.GALLERY_NO = GALLERY.GALLERY_NO
    JOIN GALLERY_LOCATION ON GALLERY.GALLERY_NO = GALLERY_LOCATION.GALLERY_NO
    JOIN LOCATION ON GALLERY_LOCATION.ROOM_NO = LOCATION.ROOM_NO;
	
	
	
INSERT INTO ARTIST_ART_GALLERY_LOC_VIEW
("Art Name","Artist NID", "Artist Name", "Artist Country", "Gallery No",
 "Gallery Name", "Art Value", "Painting Date", "Retrieval Date", "Room No",
 "Floor No", "Section")
VALUES ('Kal Rat',ARTIST_ARTIST_ID_SEQ.nextval,'Joynul Abedin',
                  'Bangladesh',2,'1971 ERA',
                  10000,to_date('12/3/1987','DD/MM/YYYY'),
                  to_date('12/3/1989','DD/MM/YYYY'),205,2,'East Wing' );
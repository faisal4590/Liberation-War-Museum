SELECT
ART.ART_NAME,ART.ART_DATE_OF_PAINTING,
  ARTIST.ARTIST_NAME, POLITICAL_LEADERS.NAME,
  POLITICAL_LEADERS.DATE_OF_BIRTH,POLITICAL_LEADERS.RECOGNITION
FROM ARTIST JOIN ART_ARTIST ON ARTIST.ARTIST_NID = ART_ARTIST.ARTIST_NID
JOIN ART ON ART_ARTIST.ART_ID = ART.ART_ID
JOIN POLITICAL_LEADERS_ART ON ART.ART_ID = POLITICAL_LEADERS_ART.ART_ID
JOIN POLITICAL_LEADERS ON POLITICAL_LEADERS_ART.POLITICAL_LEADERS_ID
                          = POLITICAL_LEADERS.POLITICAL_LEADERS_ID
;
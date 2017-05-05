SELECT
  ARTIST_NAME, ARTIST_DOB,
  ARTIST_DOD,ARTIST_COUNTRY,
  ROUND(ART_WORTH_VALUE,0),
  ART.ART_DATE_OF_PAINTING
FROM ARTIST JOIN ART_ARTIST ON ARTIST.ARTIST_NID = ART_ARTIST.ARTIST_NID
JOIN ART ON ART_ARTIST.ART_ID = ART.ART_ID


WHERE round(ART_WORTH_VALUE,0) > 50000 AND LOWER(ARTIST_COUNTRY) NOT IN
                                           ('bangladesh')

;
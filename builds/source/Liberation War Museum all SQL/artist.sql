create table artist
(

artist_id number generated always as identity (start with 8701 increment by 1) not null,
art_place varchar(100),
date_of_death date,
worth_value number(8,2) check(worth_value>0),
date_of_retrieval date,

constraint artist_artist_id_pk primary key (artist_id),
constraint artist_worth_value_ck check(worth_value>0)

);


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
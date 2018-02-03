// =========================== Creating table for users ===========================

CREATE TABLE table_users (
    user_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_fullname VARCHAR(255),
    user_email VARCHAR(255),
    user_password VARCHAR(255),
    user_address VARCHAR(255),
    user_town VARCHAR(255),
    user_zip VARCHAR(255),
    user_phone INT
);

CREATE TABLE table_events (
    event_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    event_timestamp DATETIME,
    event_title VARCHAR(255),
    event_address VARCHAR(255),
    event_town VARCHAR(255),
    event_zip VARCHAR(255),
    event_description VARCHAR(255),
    event_capacity VARCHAR(255),
    event_date VARCHAR(255),
    event_datetime VARCHAR(255),
    event_deadline VARCHAR(255),
    event_price INT(11),
    event_category VARCHAR(255),
    event_cover VARCHAR(255)
);
ALTER TABLE table_events ADD user_id INT(11) UNSIGNED NOT NULL;




// =========================== Adding data to table ===========================

// Data for table_users

INSERT INTO table_users (user_fullname, user_email, user_password, user_address, user_town, user_zip, user_phone)
VALUES ('Mathias Piletti', 'mathiasp@gmail.com', 'mathias', 'Torvegade 68B 1.th.', 'Esbjerg', '6700',	50586008);

INSERT INTO table_users (user_fullname, user_email, user_password, user_address, user_town, user_zip, user_phone)
VALUES ('Jeppe Skovsgaard', 'js@skovsgaardgrafisk.dk', 'jeppe', '	Niels bohrs vej 6', 'Esbjerg', '6700',	60796074);

INSERT INTO table_users (user_fullname, user_email, user_password, user_address, user_town, user_zip, user_phone)
VALUES ('David Jensen', 'dadajensen@gmail.com', 'david', '	Korsdalsvej 101A', 'Rødovre', '2610',	60464606);


// Data for table_events

INSERT INTO table_events (event_title, event_address, event_town, event_zip, event_description, event_capacity, event_date, event_datetime, event_deadline, event_price, event_category, event_cover, user_id) VALUES ('Meetup 2018 for HesteFys', 'Storegade 6', 'Bramming', '6740', 'Et meetup arrangement for hestefysioterapeuter hvor der bliver præsenteret nogle af de nyeste behandlingsmetoder, samt gennemgang af den nuværende konsensus', 120, '26-02-2018', '14:00', '22-02-2018', 180, 'Enkelt dags arragement', "", 2);

INSERT INTO table_events (event_title, event_address, event_town, event_zip, event_description, event_capacity, event_date, event_datetime, event_deadline, event_price, event_category, event_cover, user_id) VALUES ('Weekend kursus for alle', 'Finsensgade 35', 'Esbjerg', '6700', 'Kursus hvor der gennemgåes forskellige manuelle behandlingsmetoder', 30, '13-02-2018', '15:00', '07-02-2018', 299, 'Kursus', "", 2);

INSERT INTO table_events (event_title, event_address, event_town, event_zip, event_description, event_capacity, event_date, event_datetime, event_deadline, event_price, event_category, event_cover, user_id) VALUES ('Fælles arrangement for Danske Hestefysioterapeuter', 'Sønderbyvej 12', 'Tjæreborg', '6731', 'Hvert år holder danske hestefysioterapeuter for alle deres medlemmer. Arrangementet starter kl 14 og der vil både blive serveret mad samt muligheder for at diskuterer branchen fremadrettet diskurs', 100, '29-02-2018', '13:30', '19-02-2018', 150, 'Årlig arrangement', "", 1);

INSERT INTO table_events (event_title, event_address, event_town, event_zip, event_description, event_capacity, event_date, event_datetime, event_deadline, event_price, event_category, event_cover, user_id) VALUES ('Esbjerg Meetup Febuar!', 'Kongensgade 12', 'Esbjerg', '6700', 'Fusce sodales egestas magna sit amet tincidunt. Integer nulla odio, ultrices et mollis ac, sollicitudin non est. Suspendisse nec nunc sed ipsum consectetur accumsan.', 80, '25-02-2018', '13:00', '24-02-2018', 0, 'Enkelt dags arragement', "", 2);

INSERT INTO table_events (event_title, event_address, event_town, event_zip, event_description, event_capacity, event_date, event_datetime, event_deadline, event_price, event_category, event_cover, user_id) VALUES ('Torvehallerne for fysioterapeuter', 'Gl Vardevej 66', 'Esbjerg', '6700', 'Varius semper diam sed vulputate. Cras ac imperdiet velit. Etiam fringilla nisi in sagittis ornare. Nulla a metus lobortis, pellentesque orci', 195, '12-02-2018', '17:00', '05-03-2018', 499, 'Kursus', "", 2);

INSERT INTO table_events (event_title, event_address, event_town, event_zip, event_description, event_capacity, event_date, event_datetime, event_deadline, event_price, event_category, event_cover, user_id) VALUES ('Festuge for studernede såvel som erfarne', 'Allegade 3', 'Tønder', '6270', '	In lacinia fringilla. Nunc cursus, nunc volutpat ornare laoreet, lorem tellus aliquet dui', 500, '05-03-2018', '09:00', '04-03-2018', 320, 'Årlig arrangement', "", 1);

INSERT INTO table_events (event_title, event_address, event_town, event_zip, event_description, event_capacity, event_date, event_datetime, event_deadline, event_price, event_category, event_cover, user_id) VALUES ('Rødding årlige fysioterapeuter seminar', 'Gramvej 2', 'Rødding', '6510', 'Consectetur adipiscing elit. Suspendisse sed odio sem. Sed venenatis sem in iaculis iaculis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum in tempus orci. Fusce quis tincidunt ligula, viverra aliquam orci. Etiam euismod vel ex in tristique.', 200, '25-03-2018', '11:00', '17-03-2018', 100, 'Årlig arrangement', "", 2);

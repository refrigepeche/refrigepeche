﻿CREATE TABLE BASE(
    NCODE VARCHAR(100),
    No DOUBLE,
    ECLATER_catalogue_4 VARCHAR(100),
    REPERE_info_libre DOUBLE,
    REFERENCE_info_libre VARCHAR(100),
    DESIGN_Francais_langue2 VARCHAR(100),
    ANGLAIS_designation VARCHAR(100),
    ANCIEN_CODE_info_libre VARCHAR(100),
    EMPLACEMENT VARCHAR(100),
    FAMILLE VARCHAR(100),
    CATALOG1 VARCHAR(100),
    CATALOG2 VARCHAR(100),
    CATALOG3 VARCHAR(100),
    UNITE DOUBLE,
    REPERE2 DOUBLE,
    ECLATE2 DOUBLE,
    REPERE3 DOUBLE,
    ECLATE3 DOUBLE,
    REPERE4 DOUBLE,
    ECLATE4 DOUBLE,
    REPERE5 DOUBLE,
    ECLATE5 DOUBLE,
    REPERE6 DOUBLE,
    ECLATE6 DOUBLE,
    REPERE7 DOUBLE,
    ECLATE7 DOUBLE,
    REPERE8 DOUBLE,
    ECLATE8 DOUBLE,
    REPERE9 DOUBLE,
    ECLATE9 DOUBLE,
    REPERE10 DOUBLE,
    ECLATE10 DOUBLE,
    REPERE11 DOUBLE,
    ECLATE11 DOUBLE,
    REPERE12 DOUBLE,
    ECLATE12 DOUBLE,
    REPERE13 DOUBLE,
    ECLATE13 DOUBLE,
    REPERE14 DOUBLE,
    ECLATE14 DOUBLE,
    REPERE15 DOUBLE,
    ECLATE15 DOUBLE,
    RMRQ VARCHAR(100),
    REF_ALT VARCHAR(100),
    column_45 VARCHAR(100),
    PICT1 VARCHAR(100),
    PICT2 VARCHAR(100),
    PICT3 DOUBLE,
    PICT4 DOUBLE
);

LOAD DATA LOCAL INFILE 'database/sql/BASE.csv' INTO TABLE BASE
  FIELDS TERMINATED BY ',' ENCLOSED BY '"'
  LINES TERMINATED BY '\n'
  IGNORE 1 ROWS;

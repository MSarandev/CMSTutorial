create table warehouse_db.Warehouse(
  id varchar(20) NOT NULL,
  name varchar(20) NOT NULL,
  company_id varchar(20),
  location_id varchar(20),
  asset_id varchar(20),

  PRIMARY KEY (id)
);

create table warehouse_db.Company(
  id varchar(20) NOT NULL,
  name varchar(20) NOT NULL,
  warehouse_id varchar(20),

  PRIMARY KEY (id)
);

create table warehouse_db.Location(
  id varchar(20) NOT NULL,
  name varchar(20) NOT NULL,
  warehouse_id varchar(20),

  PRIMARY KEY (id)
);

create table warehouse_db.Asset(
  id varchar(20) NOT NULL,
  name varchar(20) NOT NULL,
  quantity int,
  warehouse_id varchar(20),

  PRIMARY KEY (id)
);
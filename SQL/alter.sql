alter table Warehouse
add FOREIGN KEY (company_id) REFERENCES Company(id),
add FOREIGN KEY (location_id) REFERENCES Location(id),
add FOREIGN KEY (asset_id) REFERENCES Asset(id);

alter table Company
  add FOREIGN KEY (warehouse_id) REFERENCES Warehouse(id);

alter table Location
  add FOREIGN KEY (warehouse_id) REFERENCES Warehouse(id);

alter table Asset
  add FOREIGN KEY (warehouse_id) REFERENCES Warehouse(id);

create table opps(
    oid int primary key auto_increment,
    names varchar(255)
);

create table od(
    id int primary key auto_increment,
    namee varchar(255),
    agess int, 
    oid int,
    foreign key (oid) references opps(oid)
);
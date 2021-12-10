/* Task 2.2: Table Creation */

drop schema Ocean_Database_70432023;
create schema Ocean_Database_70432023;
use Ocean_Database_70432023;

CREATE TABLE institute (
instituteNo varchar(20) NOT NULL UNIQUE,
  instituteName varchar(45) ,
  location varchar(45),
  institute_type varchar(45),
  phoneNumber varchar(20),
  PRIMARY KEY (instituteNo)
);

CREATE TABLE species (
species_id int NOT NULL UNIQUE,
  speciesname varchar(45),
  instituteNo varchar(20) ,
  profit decimal (10,2) ,
  price decimal (10,2) ,
  stock int ,
  numberSold int,
  PRIMARY KEY (species_id),
  FOREIGN KEY (instituteNo)
  REFERENCES institute (instituteNo)
  on update cascade
);

create table port (
portName varchar(45) not null UNIQUE,
location varchar(45), 
numOfworkers int,
inventory int,
telNo varchar(20),
PRIMARY KEY (portName)
);

CREATE TABLE employees (
  employee_id int NOT NULL UNIQUE,
  dob date ,
  fname varchar(45) ,
  lname varchar(45),
  phoneNumber varchar(20),
  address varchar(45) ,
  PRIMARY KEY (employee_id)
);


CREATE TABLE deliveryorder (
  delivery_id int NOT NULL UNIQUE,
  driverEmployee_id int,
  instituteNo varchar(20),
  species_id int,
  portName varchar(45),
  PRIMARY KEY (delivery_id),
  FOREIGN KEY (driverEmployee_id)
  REFERENCES employees (employee_id),
  FOREIGN KEY (instituteNo)
  REFERENCES institute (instituteNo),
   FOREIGN KEY (species_id)
  REFERENCES species (species_id),
  FOREIGN KEY (portName)
  REFERENCES port (portName)
   on update cascade
);

create table delivers(
driverEmployee_id int,
delivery_id int, 
deliveryScore int,
instituteNo varchar(20),
order_time time(2), 
arrival_time time(2),
FOREIGN KEY (driverEmployee_id)
  REFERENCES employees (employee_id),
  FOREIGN KEY (delivery_id)
  REFERENCES deliveryOrder (delivery_id),
  FOREIGN KEY (instituteNo)
  REFERENCES institute (instituteNo)
   on update cascade
);

CREATE TABLE drivers (
  carNo varchar(20) ,
  driverEmployee_id int ,
  insurance varchar(20),
   FOREIGN KEY (driverEmployee_id)
  REFERENCES employees (employee_id)
   on update cascade
);


CREATE TABLE aquariums (
  delivery_id int ,
  instituteNo varchar(20) ,
  FOREIGN KEY (instituteNo)
  REFERENCES institute (instituteNo),
   FOREIGN KEY (delivery_id)
  REFERENCES deliveryorder(delivery_id)
   on update cascade
);

CREATE TABLE suppliers (
  species_id int ,
  instituteNo varchar(20) ,
  FOREIGN KEY (instituteNo)
  REFERENCES institute (instituteNo),
   FOREIGN KEY (species_id)
  REFERENCES species (species_id)
   on update cascade
);

CREATE TABLE supplyorder (
  order_id int NOT NULL UNIQUE,
  portName varchar (45),
  instituteNo varchar(20),
  species_id int,
  PRIMARY KEY (order_id),
  FOREIGN KEY (instituteNo)
  REFERENCES institute (instituteNo),
   FOREIGN KEY (species_id)
  REFERENCES species (species_id),
  FOREIGN KEY (portName)
  REFERENCES port (portName)
   on update cascade
);
create table orders (
 order_id int,
 p_employee_id int,
 instituteNo varchar(20),
 order_date date, 
 arrival_date date,
 password varchar(30),
 FOREIGN KEY (order_id),
  REFERENCES supplyOrder (order_id),
  FOREIGN KEY (p_employee_id)
  REFERENCES employees (employee_id),
  FOREIGN KEY (instituteNo)
  REFERENCES institute (instituteNo)
 on update cascade
 );

CREATE TABLE port_workers (
  p_employee_id int,
  position varchar(45),
  FOREIGN KEY (p_employee_id)
  REFERENCES employees (employee_id)
   on update cascade
);

create table aquariumsDriver(
delivery_id int ,
instituteNo varchar(20) ,
carNo varchar(20) ,
driverEmployee_id int ,
delivery_score int ,
insurance varchar(20),
FOREIGN KEY (instituteNo)
REFERENCES institute (instituteNo),
FOREIGN KEY (driverEmployee_id)
REFERENCES employees (employee_id)
 on update cascade
);


/* Task 2.3: Creating four most useful indexes */ 

Create index species_available_idx
on species (speciesName, numberSold ASC);
/*explanation : this index was created to view the inventory of species available with their corresponding numbers sold, this shows species going extinct from top to bottom */


Create index employees_contact_idx
on employees (fname, lname, phoneNumber);
/*explanation : this index was created to showcase all the employees working for OceanDB and their respective contact numbers */


Create index delivered_species_idx
on deliveryOrder (instituteNo, species_id); 
/*explanation : this index was created to show the respective suppliers and aquariums and the certain species they delivered or received */


Create index drivers_insurance_idx
on drivers (driverEmployee_id, insurance);
/*explanation : this index was created to show the respective driver id's with their eligibility for insurance */




/* Task 2.4: Data Population */

insert into institute (instituteNo, instituteName, location, institute_type, phoneNumber)
values ("S100","Downtown research institution","United Kingdom","supplier","+44 1632 960690"),
("S200","France national marine institution","France","supplier","+44 1632 960635"),
("S300","local institute of aquatic sciences","Italy","supplier","+44 1632 960218"),
("S400","Hatfield marine science center","Greece","supplier","++44 1632 960256"),
("S500","uptown marince science center","Germany","supplier","+44 1632 960940"),
("A100","Tema aquarium ","Tema","aquarium","+233 257884938 "),
("A200","Accra mall aquarium","Accra","aquarium","+233 473829987"),
("A300","Oceanographic","east legon","aquarium","+233 367485746"),
("A400","","Achimota aquarium","aquarium","+233 555639572"),
("A500","Ga west aquarium","Ofankor","aquarium","+233 90676800");

insert into species (species_id, speciesname,instituteNo,profit, price, stock, numberSold)
values (001,"Common carp","S100",30.00,100.00, 160, 50),
(002,"Atlantic salmon","S200",50.00,250.00, 101, 60),
(004,"Bluegill","S400",30.00,70.00, 358, 200),
(003,"Goldfish","S300",80.00,150.00, 220, 130),
(005,"Sardinops","S500",90.00,400.00, 260, 150);

insert into port (portName,location,numOfworkers,inventory, telNo)
values ("Tema port","Accra", 20, 956, "0264773981");



insert into employees (employee_id, dob, fname, lname, phoneNumber, address)
values (111,'2001-05-31',"Amenoracking","Amenreynolds", "0256485994","18 banana lane"),
(131,'1990-08-11',"william","minerva", "0256574859","335 Applestreet"),
(121,'1963-05-21',"samuel","Adjei", "0256583922","656 chicken Street"),
(141,'2000-10-12',"Jalil","Thomas", "0256364733","65 donald street"),
(151,'2000-12-12',"Winslow","Robertson", "0256475555","53 grisha line"),
(291,'2001-09-25',"Bruce","Wayne", "0256999058","780 camp Street"),
(171,'1963-05-30',"wayne","Adjei", "0256475833","125 fire Junction"),
(181,'1990-02-15',"Harley","Quinn", "0256558849","445 water Avenue"),
(231,'2001-05-19',"Theodore","Lukes", "0256774488","49 Lapaz"),
(1100,'1999-03-24',"Chapo","Smith", "0256447733","74 fruit Lane"),
(211,'1986-11-06',"Brandon","Reynolds", "0256000044","97 september lane"),
(191,'2000-08-28',"Mefiah","Thomas", "0256777777","84 Papaye Road"),
(221,'1998-10-01',"Ruth","Durelo", "0256994403","26 pneumatic street"),
(271,'1986-04-14',"Adriana","Cameron", "0256557384","194 Nsawam Junction"),
(251,'1999-07-26',"Astha","Williams", "0256557748","1562 pokuasi Road"),
(261,'2000-09-11',"Riley","Aburi", "02565584930","233 Jake Ofankor barrier street"),
(161,'2001-06-29',"Abeiku","Koranteng", "0256557768","134 avocado Drive"),
(281,'1998-06-30',"William","Ofori", "0256884493","25 Amen Rd"),
(241,'1985-05-22',"Gautham","Water", "0256449999","15 melon Park"),
(2100,'1985-12-14',"Joseph","Pan", "0256000012","567 ice Avenue");

insert into deliveryOrder (delivery_id, driverEmployee_id,instituteNo, species_id, portName)
values (12345,211,"A100",001,"Tema port"),
(22345,221,"A200",002,"Tema port"),
(32345,231,"A300",003,"Tema port"),
(42345,241,"A400",004,"Tema port"),
(52345,251,"A500",005,"Tema port"),
(62345,261,"A100",001,"Tema port"),
(72345,271,"A200",002,"Tema port"),
(82345,281,"A300",003,"Tema port"),
(92345,291,"A400",004,"Tema port"),
(02345,2100,"A500",005,"Tema port");

insert into delivers (driverEmployee_id, delivery_id, deliveryScore,instituteNo, order_time, arrival_time )
values (211,12345,90,"A100",'09:50:00','10:20:00'),
(221,22345,60,"A200",'10:00:00','10:50:00'),
(231,32345,85,"A300",'08:50:00','9:10:00'),
(241,42345,60,"A400",'09:50:00','10:40:00'),
(251,52345,30,"A500",'10:50:00','12:00:00'),
(261,62345,80,"A100",'11:30:00','12:05:00'),
(271,72345,95,"A200",'11:00:00','11:20:00'),
(281,82345,36,"A300",'13:50:00','14:40:00'),
(2100,02345,95,"A500",'14:50:00','15:10:00'),
(291,92345,89,"A400",'09:30:00','09:50:00');


insert into drivers (carNo,driverEmployee_id,  insurance)
values ("GR-245-20",211,"Yes"),
("GR-123-20",221,"Yes"),
("GR-2129-20",231,"Yes"),
("GR-2958-21",241,"Yes"),
("GR-248-20",251,"Yes"),
("GR-689-20",261,"Yes"),
("GR-5903-20",271,"Yes"),
("GR-5990-21",281,"Yes"),
("GR-2789-21",291,"Yes"),
("GR-001-20",2100,"Yes");

insert into aquariums (delivery_id, instituteNo)
values (52345, "A500"),
(12345, "A100"),
(42345, "A400"),
(52345, "A500"),
(22345, "A200"),
(32345, "A300"),
(62345, "A100"),
(92345, "A400"),
(72345, "A200"),
(82345, "A300"),
(02345, "A500");


insert into suppliers (species_id, instituteNo)
values (001,"S100"),
(004,"S400"),
(005,"S500"),
(002,"S200"),
(003,"S300");

insert into supplyOrder (order_id, portName, instituteNo, species_id)
values (5000,"Tema port", "S500",005),
(1000,"Tema port", "S100",001),
(6000,"Tema port", "S100",001),
(7000,"Tema port", "S200",002),
(2000,"Tema port", "S200",002),
(8000,"Tema port", "S300",003),
(9000,"Tema port", "S400",004),
(4000,"Tema port", "S400",004),
(3000,"Tema port", "S300",003),
(10000,"Tema port", "S500",005);

insert into port_workers (p_employee_id, position)
values (111,"manager"),
(161,"worker"),
(171,"worker"),
(181,"worker"),
(191,"worker"),
(151,"worker"),
(131,"worker"),
(1100,"worker"),
(121,"worker"),
(141,"worker");

;
insert into orders (order_id , p_employee_id, instituteNo, order_date, arrival_date)
values 
(4000,111,"S400",'2020-01-31','2020-02-26'),
(5000,111,"S500",'2020-01-31','2020-03-27'),
(1000,111,"S100",'2020-01-31','2020-03-28'),
(2000,111,"S200",'2020-01-31','2020-02-12'),
(6000,111,"S100",'2021-05-31','2021-06-06'),
(7000,111,"S200",'2021-05-31','2021-07-31'),
(8000,111,"S300",'2021-05-31','2021-10-18'),
(3000,111,"S300",'2020-01-31','2020-04-14'),
(10000,111,"S500",'2021-05-31','2021-08-08'),
(9000,111,"S400",'2021-05-31','2021-06-20');

insert into aquariumsDriver (delivery_id,instituteNo, carNo,driverEmployee_id,  delivery_score, insurance )
values (42345, "A400","GR-2958-21",241,70,"Yes"),
(52345, "A500","GR-248-20",251,30,"Yes"),
(72345, "A200","GR-5903-20",271,85,"Yes"),
(32345, "A300","GR-2129-20",231,90,"Yes"),
(92345, "A400","GR-2789-21",291,90,"Yes"),
(62345, "A100","GR-689-20",261,60,"Yes"),
(02345, "A500","GR-001-20",2100,95,"Yes"),
(82345, "A300","GR-5990-21",281,66,"Yes"),
(12345, "A100","GR-245-20",211,80,"Yes"),
(22345, "A200","GR-123-20",221,70,"Yes");


/* Task 2.5: SQL Query Writing */

/* use of sorting/ordering facility */
SELECT * 
FROM species 
ORDER BY numberSold DESC;

/*a condition using IN NOT NULL or similar*/
SELECT * 
FROM institute  
WHERE location IN ('east legon', 'Accra');


/* inner join of atleast 2 tables*/
SELECT Employees.fname, Drivers.carNo 
FROM Employees 
JOIN Drivers ON Employees.employee_id = Drivers.driverEmployee_id;

/* a sub query */
SELECT * 
FROM species  
WHERE species_id IN (SELECT species_id FROM species WHERE stock > 90);


/* a condition using > < LIKE */
SELECT * 
FROM  delivers  
WHERE  deliveryScore > 30;


/*use of count and/or other similar mathematical expressions*/
SELECT COUNT(driverEmployee_id)
FROM drivers
where insurance = 'yes';






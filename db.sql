CREATE DATABASE SchoolBusManagement;
USE SchoolBusManagement;

-- Creating a 'Student' table
CREATE TABLE Student (
  register int(9) PRIMARY KEY,
  NAME  varchar(40),
  Email varchar(40) UNIQUE,
  password varchar(30),
  area varchar(40),
  address varchar(250)
);

-- Creating a 'Parent' table
CREATE TABLE Parent (
  register int(9) PRIMARY KEY,
  Parentname VARCHAR(40) NOT NULL,
  Email VARCHAR(40) NOT NULL,
  password VARCHAR(15),
  relationship VARCHAR(20),
);

-- Creating a 'Route' table
CREATE TABLE Route (
  RouteID INT AUTO_INCREMENT PRIMARY KEY,
  RouteName VARCHAR(50) NOT NULL,
  DriverID INT NOT NULL,
  FOREIGN KEY (DriverID) REFERENCES Driver(DriverID)
);

-- Creating a 'Driver' table
CREATE TABLE Driver (
  name varchar(40),
  age int(2),
  phone int(10),
  Email varchar(40),
  address varchar(250),
  DrivingLicense varchar(30),
  password  varchar(30),
);
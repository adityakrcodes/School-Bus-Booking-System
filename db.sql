CREATE DATABASE SchoolBusManagement;
USE SchoolBusManagement;

-- Creating a 'Student' table
CREATE TABLE Student (
  register int(9) PRIMARY KEY,
  NAME  varchar(40),
  Email varchar(40) UNIQUE,
  password varchar(30),
  area varchar(40),
  address varchar(250),
  timestamp(16) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(16)
);

-- Creating a 'Parent' table
CREATE TABLE Parent (
  FOREIGN KEY register REFERENCES Student(register),
  Parentname VARCHAR(40) NOT NULL,
  Email VARCHAR(40) UNIQUE NOT NULL,
  password VARCHAR(15),
  relationship VARCHAR(20),
  timestamp(16) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
);

-- Creating a 'Route' table
CREATE TABLE Route (
  RouteID INT AUTO_INCREMENT,
  BusNumber INT,
  Origin VARCHAR(40),
  Destination VARCHAR(40),
  Schedule TIME,
  PRIMARY KEY (RouteID),
  FOREIGN KEY (BusNumber) REFERENCES Bus(BusNumber)
);

-- Creating a 'Driver' table
CREATE TABLE Driver (
  Name VARCHAR(40) NOT NULL,
  Age INT(2) NOT NULL,
  Email VARCHAR(40) UNIQUE NOT NULL,
  Address VARCHAR(250) NOT NULL,
  DrivingLicense VARCHAR(30) NOT NULL,
  Password VARCHAR(30) NOT NULL,
  Timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE Bus (
  BusNumber INT PRIMARY KEY,
  DriverName VARCHAR(40) NOT NULL,
  Availability BOOLEAN NOT NULL,
  FOREIGN KEY (DriverName) REFERENCES Driver(Name)
);

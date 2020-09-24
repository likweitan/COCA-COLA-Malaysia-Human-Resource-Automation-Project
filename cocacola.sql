CREATE TABLE account
(
	AccountNo varchar(50) PRIMARY KEY,
	Email varchar(50),
	Phone varchar(50),
	PassKey varchar(50),
	Role varchar(50),
	State varchar(50),
	Mod_Timestamp timestamp DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

CREATE TABLE employee
(
	EmployeeId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	AccountNo varchar(50) NOT NULL,
	FirstName varchar(50) NOT NULL,
	LastName varchar(50) NOT NULL,
	Gender varchar(50) NOT NULL,
	BirthDate date NOT NULL,
	Department varchar(50) NOT NULL,
	Designation varchar(50) NOT NULL,
	MaritalStatus varchar(50) NOT NULL,
	Religion varchar(50) NOT NULL,
	Race varchar(50) NOT NULL,
	Nationality varchar(50) NOT NULL DEFAULT 'Malaysian',
	FOREIGN KEY (AccountNo) REFERENCES account (AccountNo)
);

CREATE TABLE phone
(
	PhoneId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	AccountNo int NOT NULL,
	Type varchar(3),
	PhoneNumber varchar(3),
	FOREIGN KEY (AccountNo) REFERENCES account (AccountNo)
);

CREATE TABLE uniform
(
	UniformId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	AccountNo int NOT NULL,
	PantsSize varchar(3),
	ShirtSize varchar(3),
	FOREIGN KEY (AccountNo) REFERENCES account (AccountNo)
);

CREATE TABLE tag
(
	TagId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	AccountNo int NOT NULL,
	Reason varchar(50) NOT NULL,
	LostDate date NOT NULL,
	State varchar(50),
	Mod_Timestamp timestamp DEFAULT current_timestamp() ON UPDATE current_timestamp(),
	FOREIGN KEY (AccountNo) REFERENCES account (AccountNo)
);

CREATE TABLE vehicle
(
	VehicleId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	AccountNo int NOT NULL,
	Type varchar(50) NOT NULL,
	PlateNo varchar(50) NOT NULL,
	SerialNo varchar(50),
	RequestDate date NOT NULL,
	Mod_Timestamp timestamp DEFAULT current_timestamp() ON UPDATE current_timestamp(),
	State varchar(50),
	FOREIGN KEY (AccountNo) REFERENCES account (AccountNo)
);

CREATE TABLE family
(
	FamilyId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	AccountNo int NOT NULL,
	FirstName varchar(50) NOT NULL,
	LastName varchar(50) NOT NULL,
	Gender varchar(10) NOT NULL,
	Relationship varchar(50) NOT NULL,
	NRIC varchar(50) NOT NULL,
	BirthDate date NOT NULL,
	Occupation varchar(50) NOT NULL,
	FOREIGN KEY (AccountNo) REFERENCES account (AccountNo)
);

CREATE TABLE bank
(
	BankId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	AccountNo int NOT NULL,
	BankName varchar(50) NOT NULL,
	AccountNo int NOT NULL,
	FOREIGN KEY (EmployeeId) REFERENCES employee(EmployeeId)
);

CREATE TABLE emergencyContact
(
	EmergencyContactId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	AccountNo int NOT NULL,
	FirstName varchar(50) NOT NULL,
	LastName varchar(50) NOT NULL,
	Relationship varchar(50) NOT NULL,
	Address varchar(50),
	FOREIGN KEY (AccountNo) REFERENCES account (AccountNo)
);

CREATE TABLE address
(
	AddressID int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	EmployeeId int NULL,
	AddressLine1 varchar(50) NOT NULL,
	AddressLine2 varchar(50) NULL,
	City varchar(50) NOT NULL,
	PostalCode int NOT NULL,
	State varchar(50) NOT NULL,
	FOREIGN KEY (AccountNo) REFERENCES account (AccountNo)
);

CREATE TABLE survey
(
	SurveyID int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	EmployeeId int NOT NULL,
	Question1 varchar(50),
	Question2 varchar(50),
	Question3 varchar(50),
	Question4 varchar(50),
	Question5 varchar(50),
	FOREIGN KEY (AccountNo) REFERENCES account (AccountNo)
);

CREATE TABLE incomeTax
(
	IncomeTaxID int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	AccountId int NOT NULL,
	IncomeTaxNo varchar(50) NOT NULL, 
	AmaunTerkumpulC1 int,
	AmaunTerkumpulC2i int,
	AmaunTerkumpulC2ii int,
	AmaunTerkumpulC2iii int,
	AmaunTerkumpulC2iv int,
	AmaunTerkumpulC2v int,
	AmaunTerkumpulC3 int,
	AmaunTerkumpulC4 int,
	AmaunTerkumpulC5 int,
	PotonganTerkumpulD1 int,
	PotonganTerkumpulD2 int,
	PotonganTerkumpulD3 int,
	PotonganTerkumpulD4 int,
	PotonganTerkumpulD5 int,
	PotonganTerkumpulD6 int,
	PotonganTerkumpulD7 int,
	PotonganTerkumpulD8 int,
	PotonganTerkumpulD9 int,
	PotonganTerkumpulD10 int,
	PotonganTerkumpulD11 int,
	PotonganTerkumpulD12 int,
	PotonganTerkumpulD13 int,
	PotonganTerkumpulD14 int,
	ApplyDate date NOT NULL,
	FOREIGN KEY (AccountNo) REFERENCES account (AccountNo)
);

CREATE TABLE previousEmployer
(
	PreviousEmployerId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	IncomeTaxId int NOT NULL,
	Name varchar(50) NULL,
	EmployerNo varchar(50) NULL,
	FOREIGN KEY (IncomeTaxID) REFERENCES incomeTax (IncomeTaxID)
);

CREATE TABLE notification
(
	NotificationId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	AccountNo varchar(50) NOT NULL,
	NotificationTitle varchar(50),
	NotificationStatus varchar(50),
	FOREIGN KEY (AccountNo) REFERENCES account (AccountNo)
);

CREATE TABLE album
(
	AlbumId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	AccountNo varchar(50) NOT NULL,
	ImageLocation varchar(50) NOT NULL,
	Mod_Timestamp timestamp DEFAULT current_timestamp() ON UPDATE current_timestamp(),
	FOREIGN KEY (AccountNo) REFERENCES account (AccountNo)
);

CREATE TABLE policy
(
	PolicyNo varchar(50) NOT NULL PRIMARY KEY,
	AccountNo varchar(50) NOT NULL,
	PolicyTitle varchar(50) NOT NULL,
	PolicyParagraph longtext NOT NULL
);

CREATE TABLE reward
(
	RewardNo varchar(50) NOT NULL PRIMARY KEY,
	
);

CREATE TABLE point
(
	PointNo int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	AccountNo varchar(50) NOT NULL,
	Amount int NOT NULL,
	Mod_Timestamp timestamp DEFAULT current_timestamp() ON UPDATE current_timestamp(),
	FOREIGN KEY (AccountNo) REFERENCES account (AccountNo)
);

CREATE TABLE loginAttempt
(
	loginAttemptId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	AccountNo varchar(50) NOT NULL,
	State varchar(50) NOT NULL,
	Mod_Timestamp timestamp DEFAULT current_timestamp() ON UPDATE current_timestamp(),
	FOREIGN KEY (AccountNo) REFERENCES account (AccountNo)
);

CREATE TABLE passwordResetTemp (
	loginAttemptId int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	AccountNo varchar(50) NOT NULL,
  	PassKeyTemp varchar(250) NOT NULL,
  	ExpiryDate datetime NOT NULL,
	FOREIGN KEY (AccountNo) REFERENCES account (AccountNo)
);
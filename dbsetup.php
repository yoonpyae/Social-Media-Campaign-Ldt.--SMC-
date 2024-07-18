<?php

include('dbconnect.php');

//Create customer data table
$customerCreate = "CREATE TABLE customertb
(
  CustomerID int NOT NULL Auto_Increment Primary Key,
  FirstName varchar(30),
  Surname varchar(30),
  Username varchar(30),
  Address varchar(255),
  PhoneNo varchar(30),
  ProfileImage varchar(255),
  RegistrationMonth varchar(30),
  Email varchar(50),
  Password varchar(50)
)";

$runningQuery = mysqli_query($connect, $customerCreate);

if($runningQuery) { //check data
    echo "<script>window.alert('Customer Query Success!')</script>";
}



// //Create Campaign data table
// $campaignCreate= "CREATE TABLE Campaigntb
// (
//   CampaignID int NOT NULL Auto_Increment Primary Key,
//   CampaignName varchar(30),
//   Aim varchar(255),
//   Vision varchar(255),
//   Fees int,
//   Location varchar(100),
//   StartDate varchar(30),
//   EndDate varchar(30),
//   Desciption varchar(255),
//   CampaignImage1 varchar(255),
//   CampaignImage2 varchar(255),
//   CampaignImage3 varchar(255),
//   CampaignStatus varchar(30),
//   MediaID int,
//   CampaignTypeID int,
//   Foreign Key (MediaID) REFERENCES Mediatb (MediaID),
//   Foreign Key (CampaignTypeID) REFERENCES CampaignTypetb (CampaignTypeID)
// )";

// $runningQuery=mysqli_query($connect,$campaignCreate);

// if($runningQuery) //check data
// {
//   echo "<script>window.alert('Campaign Query Success!')</script>";
// }

// //Create Media data table
// $campaignTypeCreate= "CREATE TABLE CampaignTypetb
// (
//   CampaignTypeID int NOT NULL Auto_Increment Primary Key,
//   CampaignTypeName varchar(30)
// )";

// $runningQuery=mysqli_query($connect,$campaignTypeCreate);

// if($runningQuery) //check data
// {
//   echo "<script>window.alert('Campaign Type Query Success!')</script>";
// }

// //Create Media data table
// $mediaCreate= "CREATE TABLE Mediatb
// (
//   MediaID int NOT NULL Auto_Increment Primary Key,
//   MediaName varchar(30),
//   Description varchar(255),
//   MediaImage varchar(255),
//   MediaLink varchar(255),
//   Rating varchar(30)
// )";

// $runningQuery=mysqli_query($connect,$mediaCreate);

// if($runningQuery) //check data
// {
//   echo "<script>window.alert('Media Query Success!')</script>";
// }

// //Create Admin data table
// $adminCreate= "CREATE TABLE Admintb
// (
//   AdminID int NOT NULL Auto_Increment Primary Key,
//   AdminName varchar(30),
//   Username varchar(30),
//   Address varchar(255),
//   PhoneNo varchar(30),
//   ProfileImage1 varchar(255),
//   Email varchar(50),
//   Password varchar(50),
//   Position varchar (50)
// )";

// $runningQuery=mysqli_query($connect,$adminCreate);

// if($runningQuery) //check data
// {
//   echo "<script>window.alert('Admin Query Success!')</script>";
// }

//Create booking data table
// $bookingcreate="CREATE TABLE bookingtb
//   (
//       BookingID int NOT NULL Auto_Increment Primary Key,
//       BookingDate varchar(30),
//       Description varchar(100),
//       BookingQty int,
//       Tax int,
//       TotalAmount int,
//       Email varchar(30),
//       PhoneNo varchar(30),
//       Status varchar(30),
//       CustomerID int,
//       PackageID int,
//       Foreign Key (CustomerID) REFERENCES customertb (CustomerID),
//       Foreign Key (PackageID) REFERENCES packagetb (PackageID)
//   )";

// $runningquery=mysqli_query($connect,$bookingcreate);

// if ($runningquery)
//     {
//         echo "<script>window.alert('Booking Query Success')</script>";
//     }



//Create packages data table
//   $packageCreate= "CREATE TABLE packagetb
//   (
//     PackageID int NOT NULL Auto_Increment Primary Key,
//     PackageName varchar(30),
//     Duration varchar(30),
//     PackagePrice int,
//     PackageDescription text,
//     PackageImage1 varchar(255),
//     PackageImage2 varchar(255),
//     PackageImage3 varchar(255),
//     PackageImage4 varchar(255),
//     PackageStatus varchar(30),
//     AvaliablePerson varchar(30),
//     packageTypeID int,
//     RouteNumber int,
//     HotelNumber int,
//     Foreign Key (packageTypeID) REFERENCES packageTypetb(packageTypeID),
//     Foreign Key (RouteNumber) REFERENCES routetb(RouteNumber),
//     Foreign Key (HotelNumber) REFERENCES hoteltb(HotelNumber)

// )";

// $runningQuery=mysqli_query($connect,$packageCreate);

// if($runningQuery) //check data
// {
//     echo "<script>window.alert('Package Query Success!')</script>";
// }

//Create hotel data table
//    $hotelCreate= "CREATE TABLE hoteltb(
//         HotelNumber int NOT NULL Auto_increment Primary Key,
//         HotelName varchar(30),
//         HotelLocation text,
//         HotelDescription text
//     )";

//     $runningQuery=mysqli_query($connect,$hotelCreate);

//     if($runningQuery) //check data
//     {
//         echo "<script>window.alert('Hotel Query Success!')</script>";
//     }


//Create route data table
// $routeCreate= "CREATE TABLE routetb(
//     RouteNumber int NOT NULL Auto_increment Primary Key,
//     RouteName varchar(30),
//     RouteDescription text
// )";

// $runningQuery=mysqli_query($connect,$routeCreate);

// if($runningQuery) //check data
// {
//     echo "<script>window.alert('Route Query Success!')</script>";
// }


//Create package type data table
//         $packageTypeCreate= "CREATE TABLE packageTypetb(
//             packageTypeID int NOT NULL Auto_increment Primary Key,
//             packageTypeName varchar(30),
//             packageTypeStatus varchar(30)

//         )";

//         $runningQuery=mysqli_query($connect,$packageTypeCreate);

//         if($runningQuery) //check data
//         {
//             echo "<script>window.alert('PackageType Query Success!')</script>";
//         }

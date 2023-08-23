<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<img src="admin/assets/images/logo13.png" height="8%">
<h1>Patient's Medical Record</h1>

<h2 style="background-color: #32a83e; text-align: center;">Patient Information</h2>


<h4>Name : {{$users->name}}{{$users->fullname}} {{$users->mname}}</h4>

<h4>Birth Date : {{$users->birthdate}}</h4>

<h4>Age : {{$users->age}}</h4>

<h4>Address : {{$users->address}}</h4>

<h4>Sex : {{$users->sex}}</h4>

<h4>Civil Status : {{$users->civil}}</h4>

<h4>Weight : {{$users->weight}}</h4>

<h4>Height : {{$users->height}}</h4>


<h2 style="background-color: #32a83e; text-align: center;">General Medical History</h2>

<h4>Date of Medical : {{$users->date}}</h4>

<h4>Doctor : {{$users->doctor}}</h4>

<h4>Findings and Illness : {{$users->illness}}</h4>

<h4>Appointment : {{$users->appointment}}</h4>







</body>
</html>



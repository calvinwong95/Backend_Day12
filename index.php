<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="get">
    <label>Enter your name: </label>
    <input type="text" name="name" placeholder="">
    <br>
    <label>Enter the year that you are born: </label>
    <input type="text" name="age" placeholder="">
    <br>
    <label>Enter your hobby: </label>
    <input type="text" name="hobby" placeholder="">
    <br>
    <button type="submit" name="submit">Submit</button>


<?php

$newName = $_GET['name'];
$newAge = $_GET['age'];
$newHobby = $_GET['hobby'];

class Person {
    public $name;
    public $dob;
    public $hobby;

    function setName($name) {
        $this->name = $name;
      }

    function getName($name) {
        return $this->name;
    }

    function setAge($dob) {
        $date = date($dob);
        $curDate = date('Y');
        $diffAge = $curDate - $date;
        $this->dob = $diffAge;
      }

    function getAge($dob) {
        return $this->dob;
    }

    function setHobby($hobby) {
        $this->hobby = $hobby;
      }

    function getHobby($hobby) {
        return $this->hobby;
    }


   
}

if (isset($_GET['submit'])) {
    $person = new Person;
    $person-> setName($newName);
    $person-> setAge($newAge);
    $person-> setHobby($newHobby);

    echo "Hi ".$person->name.", you are ".$person->dob. " years old! You like to ".$person->hobby;

}





?>

</body>
</html>


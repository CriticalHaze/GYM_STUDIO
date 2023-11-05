<?php

class UserModel {
    // properties for user data
    private $IdUser;
    private $name;
    private $surname;
    private $email;
    private $password;
    private $GymID;
    private $NumberOFExercise;
    private $TypeOfExercise;
    private $Reps;
    private $series;
    private $carico;
    private $durata;

    // constructor 
    public function __construct($IdUser, $name, $surname, $email, $password, $GymID, $NumberOFExercise, $TypeOfExercise, $Reps, $series, $carico, $durata) {
        $this->IdUser = $IdUser;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->GymID = $GymID;
        $this->NumberOFExercise = $NumberOFExercise;
        $this->TypeOfExercise = $TypeOfExercise;
        $this->Reps = $Reps;
        $this->series = $series;
        $this->carico = $carico;
        $this->durata = $durata;
    }

    //add getter and setter methods 

    
    public function getIdUser() {
        return $this->IdUser;
    }
    //other getter and setter methods to add here after database
}

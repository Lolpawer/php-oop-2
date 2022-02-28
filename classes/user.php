<?php

class User {

    private $userName;
    private $userSurname;
    private $userEmail;
    private $userNumber;
    private bool $registered = false;

    function __construct(string $_userName, string $_userSurname, string $_userEmail, int $userNumber) {
        $this->setUserName($_userName);
        $this->setUserSurname($_userSurname);
        $this->setUserEmail($_userEmail);
        $this->setUserNumber($_userNumber);
    }

    private function getUserName() {
        return $this->userName;
    }

    public function setUserName() {
        $this->userName = $userName;
        return $this;
    }

    private function getUserSurname() {
        return $this->userSurname;
    }

    public function setUserSurname() {
        $this->userSurname = $userSurname;
        return $this;
    }

    private function getUserEmail() {
        return $this->userEmail;
    }

    public function setUserEmail() {
        $this->userEmail = $userEmail;
        return $this;
    }

    private function getUserNumber() {
        return $this->userNumber;
    }

    public function setUserNumber() {
        $this->userNumber = $userNumber;
        return $this;
    }

    private function getRegistered() {
        return $this->registered;
    }

    public function setRegistered() {
        $this->registered = $registered;
        return $this;
    }

}

?>
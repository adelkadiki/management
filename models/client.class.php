<?php

class Client{

    public $id;
    public $name;
    public $email;
    public $phone;
    public $domain;
    public $hostComp;
    public $domainComp;
    public $hostExpDate;
    public $domExpDate;
    public $cpUsername;
    public $cpPassword;


    function set_name($name) {
        $this->name = $name;
      }
      function get_name() {
        return $this->name;
      }

      function set_email($email) {
        $this->email = $email;
      }
      function get_email() {
        return $this->email;
      }

      function set_phone($phone) {
        $this->phone = $phone;
      }
      function get_phone() {
        return $this->phone;
      }

      function set_domain($domain) {
        $this->domain = $domain;
      }
      function get_domain() {
        return $this->domain;
      }

      function set_hostComp($hostComp) {
        $this->hostComp = $hostComp;
      }
      function get_hostComp() {
        return $this->hostComp;
      }

      function set_domainComp($domainComp) {
        $this->domainComp = $domainComp;
      }
      function get_domainComp() {
        return $this->domainComp;
      }

      function set_hostExpDate($hostExpDate) {
        $this->hostExpDate = $hostExpDate;
      }
      function get_hostExpDate() {
        return $this->hostExpDate;
      }

      function set_domExpDate($domExpDate) {
        $this->domExpDate = $domExpDate;
      }
      function get_domExpDate() {
        return $this->domExpDate;
      }

      function set_cpUsername($cpUsername) {
        $this->cpUsername = $cpUsername;
      }
      function get_cpUsername() {
        return $this->cpUsername;
      }

      function set_cpPassword($cpPassword) {
        $this->cpPassword = $cpPassword;
      }
      function get_cpPassword() {
        return $this->cpPassword;
      }

    



}


?>
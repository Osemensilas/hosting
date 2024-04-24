<?php

class UserValidation
{

    private $data;
    private $error = [];
    private static $fields = ['firstname', 'lastname', 'email', 'phone', 'password1', 'password2'];

    public function __construct($postData)
    {
        $this->data = $postData;
    }

    public function validateForm()
    {
        foreach (self::$fields as $field) {
            if (!array_key_exists($field, $this->data)) {
                trigger_error($field . "Error is not present in data");
                return;
            }
        }

        $this->validateFirstName();
        $this->validateLastName();
        $this->validateEmail();
        $this->validatePhone();
        $this->validatePassword1();
        $this->validatePassword2();
        return $this->error;
    }

    private function validateFirstName()
    {
        $firstnameValue = trim($this->data['firstname']);

        if (empty($firstnameValue)) {
            $this->addError('firstname', 'This field is required');
        } else if (!preg_match('/^[a-zA-Z]+$/', $firstnameValue)) {
            $this->addError('firstname', 'Letters Only');
        }
    }

    private function validateLastName()
    {
        $lastnameValue = trim($this->data['lastname']);

        if (empty($lastnameValue)) {
            $this->addError('lastname', 'This field is required');
        } else if (!preg_match('/^[a-zA-Z]+$/', $lastnameValue)) {
            $this->addError('lastname', 'Letters Only');
        }
    }

    private function validateEmail()
    {
        $emailValue = trim($this->data['email']);

        if (empty($emailValue)) {
            $this->addError('email', 'This field is required');
        } else if (!filter_var($emailValue, FILTER_VALIDATE_EMAIL)) {
            $this->addError('email', 'Invalid email address');
        }
    }

    private function validatePhone()
    {
        $phoneValue = trim($this->data['phone']);

        if (empty($phoneValue)) {
            $this->addError('phone', 'This field is required');
        } else if (!preg_match('/^[+][2][3][4][0-9]{10}$/', $phoneValue)) {
            $this->addError('phone', 'Nigeria phone number only');
        }
    }

    private function validatePassword1()
    {
        $password1 = trim($this->data['password1']);

        if (empty($password1)) {
            $this->addError('password1', 'This field is required');
        } else if (!preg_match('/^[0-9||a-zA-Z||!@#$%^&*()]{8,}$/', $password1)) {
            $this->addError('password1', 'Atleast 8 characters required');
        } else if (!preg_match('/(?=.*[A-Z])/', $password1)) {
            $this->addError('password1', 'Password must contain an uppercase');
        } else if (!preg_match('/(?=.*[a-z])/', $password1)) {
            $this->addError('password1', 'Password must contain a lowercase');
        } else if (!preg_match('/(?=.*[0-9])/', $password1)) {
            $this->addError('password1', 'Password must contain a digit');
        } else if (!preg_match('/(?=.*[!@#$%^&*()])/', $password1)) {
            $this->addError('password1', 'Password must contain one of !@#$%^&*()');
        }
    }

    private function validatePassword2()
    {
        $password1 = trim($this->data['password1']);
        $password2 = trim($this->data['password2']);

        if (empty($password2)) {
            $this->addError('password2', 'This field is required');
        } else if ($password1 != $password2) {
            $this->addError('password2', 'Passwords do not match');
        }
    }

    private function addError($key, $errorValue)
    {
        $this->error[$key] = $errorValue;
    }
}

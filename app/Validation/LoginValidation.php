<?php

namespace App\Validation;

use App\Models\UserModel;
use Exception;

class LoginValidation extends BaseValidation
{
    protected $validationRules = [
        "userEmail" => "required|valid_emails|is_not_unique[users.userEmail]",
        "userPassword" => "required"
    ];

    protected $validationMessages = [
        "userEmail" => [
            "required" => "El email es obligatorio",
            "valid_emails" => "Ingresa un email válido",
            "is_not_unique" => "El email ingresado no está asociado a una cuenta",
        ],
        "userPassword" => [
            "required" => "La contraseña es obligatoria",
        ]
    ];

    protected $invalid_credentials_message = "Contraseña invalida";

    public function validatePassword($user, $password)
    {
        if($password !== $user["userPassword"]) {
            $this->errors = [
                "userPassword" => $this->invalid_credentials_message,
            ];

            throw new Exception();
        }
        return true;
    }
}

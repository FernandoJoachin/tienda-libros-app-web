<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Validation\LoginValidation;
use Exception;

class LoginController extends BaseController
{
    public function viewLogin()
    {
        return view('login/login');
    }

    public function login()
    {
        $loginValidation = new LoginValidation();

        $data = $this->request->getPost();

        $email = trim($data["userEmail"]);
        $password = trim($data["userPassword"]);

        try {
            if(!$loginValidation->validateInputs($data)) {
                throw new Exception();
            }
            $user = (new UserModel())->where("userEmail", $email)->first();
            $loginValidation->validatePassword($user, $password);
            session()->set("user", [
                "name" => $user["userFirstName"] . " " . $user["userLastName"],
                "email" => $user["userEmail"],
                "admin" => $user["isAdmin"],
            ]);
            session()->set("is_logged", true);
        } catch (\Throwable $th) {
            return redirect()->back()->withInput()->with("errors", $loginValidation->getErrors());
        }

        return redirect()->to(base_url('admin'));
    }
}
<?php
require_once __DIR__ . '/controllers/AuthController.php';
require_once __DIR__ . '/services/Validator.php';
require_once __DIR__ . '/services/UserService.php';
require_once __DIR__ . '/repositories/UserRepository.php';
require_once __DIR__ . '/models/userModel.php';
require_once __DIR__ . '/models/messageModel.php';

//Flight::route('GET /', ['AuthController', 'showRegister']);
Flight::route('GET /exit', ['AuthController', 'exitLogin']);
Flight::route('GET /', ['AuthController', 'showLogin']);
Flight::route('POST /register', ['AuthController', 'postRegister']);
Flight::route('POST /login', ['AuthController', 'postLogin']);
Flight::route('POST /api/validate/register', ['AuthController', 'validateRegisterAjax']);
Flight::route('POST /message', ['AuthController', 'postMessage']);

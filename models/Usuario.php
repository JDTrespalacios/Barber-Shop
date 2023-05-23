<?php

namespace Model;

class Usuario extends ActiveRecord {
    // Base de Datos    
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'email', 'password', 'telefono', 'admin', 'confirmado', 'token'];

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $telefono;
    public $admin;
    public $confirmado;
    public $token;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->admin = $args['admin'] ?? '0';
        $this->confirmado = $args['confirmado'] ?? '0';
        $this->token = $args['token'] ?? '';
    }


    // Mensajes de validación para la creación de la cuenta
    public function validarNuevaCuenta() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'Name is mandatory';
        }
        if(!$this->apellido) {
            self::$alertas['error'][] = 'Last name is mandatory';
        }
        if(!$this->email) {
            self::$alertas['error'][] = 'Email is mandatory';
        }
        if(!$this->telefono) {
            self::$alertas['error'][] = 'Phone number is mandatory';
        }
        if(!$this->password) {
            self::$alertas['error'][] = 'You must insert a password';
        }
        if(strlen($this->password) < 8){
            self::$alertas['error'][] = 'The password must have at least eight characters';
        }
        return self::$alertas;
    }

    public function validarLogin() {
        if(!$this->email) {
            self::$alertas['error'][] = 'Email is mandatory';
        }
        if(!$this->password) {
            self::$alertas['error'][] = 'You must insert a password';
        }

        return self::$alertas;
    }

    public function validarEmail() {
        if(!$this->email) {
            self::$alertas['error'][] = 'Email is mandatory';
        }
        return self::$alertas;
    }

    public function validarPassword() {
        if(!$this->password) {
            self::$alertas['error'][] = 'You must insert a password';
        }
        if(strlen($this->password) < 8){
            self::$alertas['error'][] = 'The password must have at least eight characters';
        }
        return self::$alertas;
    }

    // Revisa si el usuario ya existe
    public function existeUsuario() {
        $query = " SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "' LIMIT 1 ";
        $resultado = self::$db->query($query);

        if($resultado->num_rows) {
            self::$alertas['error'][] = 'User already exists';
        }

        return $resultado;
    }

    public function hashPassword() {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    public function crearToken() {
        $this->token = uniqid();
    }

    public function comprobarPasswordAndVerificado($password) {
        $resultado = password_verify($password, $this->password);

        if(!$resultado || !$this->confirmado) {
            self::$alertas['error'][] = 'Wrong password or account not validated';
        } else {
            return true;
        }
    }

}

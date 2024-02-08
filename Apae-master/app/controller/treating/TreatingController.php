<?php

namespace Controller;

class Treating
{

    protected function  filterInput($data)
    {

       
        if(isset($data['Senha']) && isset($data['ConfirmarSenha'])){
            unset($data['confirmarSenha']);

            if ($data['Senha'] !== $data['ConfirmarSenha']) {
                return false;
               
            }

            
        }

        
        foreach ($data as $key => $value) {
            $data[$key] =  $this->filter($key, $value);
        }

        
        return $data;
    }

    protected function filter($key, $value)
    {
        switch (strtoupper($key)) {
            case "NOME":
                $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
                $value = trim($value);

                if (strlen($value) < 2 || strlen($value) > 50) {
                    return false;
                }
               
                break;

            case "EMAIL":
            case "EMAILLOGIN":            
                $value = trim($value);
                $value = filter_var($value, FILTER_VALIDATE_EMAIL);
                $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');   
                break;

            case "CEP":
                $value = trim($value);
                $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');

                if (!preg_match('/^\d{5}-?\d{3}$/', $value) || intval(str_replace('-', '', $value)) > 99999999) {
                    return false;
                }
                break;

            case "CPF":
                $value = trim($value);
                $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
                $value = preg_replace("/[^0-9]/", "", $value);
                strlen($value) == 11;
                break;

            case "DATADENASCIMENTO":
            case "DATAADD":
            case "DATAREMOVE":
                $value = trim($value);
                $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
                $value = $this->DateIsValid($value);
                $value = str_replace('/','-',$value);
                $value = $this->formatDate($value,"Y-m-d");
                
                
                break;

            case "SENHA":
                if($value !== ''){
                    $value = $this->hash($value);
                } 


                break;

            case "NUMERO":
                $value = trim($value);
                $value = preg_replace("/[^0-9]/", "", $value);
                $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
                if (strlen($value) < 10 || strlen($value) > 15) {
                }


                break;

            case "DATADEVENCIMENTO":
                $value = trim($value);
                $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
                $value = $this->DateIsValid($value);
                $value = str_replace('/','-',$value);
                $value = $this->formatDate($value,"Y-m-d");
               
                break;
        }


        return $value;
    }

    private function hash($password)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        return $hash;
    }

    private function formatDate($date,$formatPattern)
    { 
        return  date($formatPattern,strtotime($date));
    }

    private function encrypt($data)
    {
    
    }

    public function decrypt(){

    }

    private function cpfIsValid($cpf)
    {
        $soma = 0;

        for ($i = 0; $i < 9; $i++) {
            $soma += intval($cpf[$i]) * (10 - $i);
        }

        $resto = $soma % 11;
        $digitoVerificador1 = ($resto < 2) ? 0 : 11 - $resto;

        if (intval($cpf[9]) !== $digitoVerificador1) {
            return false;
        }

        $soma = 0;

        for ($i = 0; $i < 10; $i++) {
            $soma += intval($cpf[$i]) * (11 - $i);
        }

        $resto = $soma % 11;
        $digitoVerificador2 = ($resto < 2) ? 0 : 11 - $resto;

        return intval($cpf[10]) === $digitoVerificador2;
    }

    private function DateIsValid($date)
    {
        list($day, $month, $year) = explode('/', $date);

       $checkdate =  checkdate($month, $day, $year);
       
       return $checkdate?$date:false;
    }
}

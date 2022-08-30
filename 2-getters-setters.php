<?php
    class Login {

        private $nome;

        private $email;

        private $senha;

        public function getNome() {

            return $this->nome;

        }

        public function __construct($n, $e, $s) {
            $this->nome = $n;
            $this->setEmail($e);
            $this->setSenha($s);
        }

        public function setEmail($e) {

            $emailLimpo = filter_var($e, FILTER_SANITIZE_EMAIL);

            $this->email = $emailLimpo;

        }

        public function getEmail() {

            return $this->email;

        }

        public function setSenha($s) {

            $this->senha = $s;

        }

        public function getSenha() {

            return $this->senha;

        }

        public function logar() {

            if ($this->email == "teste@teste.com" and $this->senha == "12345") {

                echo "logado com sucesso";

            } else {

                echo "dados invalidos";

            }
        }
    }

    $logar = new Login('Helena', 'teste@gmail.com', '123456');

    // $logar->setEmail('teste()/@teste.com');

    // $logar->setSenha('12345');

    $logar->logar();

    echo '<br>';

    echo $logar->getEmail();

    echo '<br>';

    echo $logar->getSenha();

    echo '<br>';

    echo $logar->getNome();
?>
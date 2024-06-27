    <?php
    class Usuario{
        //Atributos da classe
        public $nome;
        protected $cpf;
        private $endereco;

        function Usuario(){
            $this->preparaUsuario();
        }
        private function preparaUsuario(){
            $this->nome = "Leonardo";
            $this->cpf = "99999999999999";
            $this->endereco = "Rua fulanoo de tal número 0";
        }
        public function getcpf (){
            return $this->cpf;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getEndereco(){
            return $this->endereco;
        }
    }
    $usu = new Usuario();

    $usu->getcpf();

    $usu->getNome();
    ?>
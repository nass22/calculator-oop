 <?php

    class Calculate {

        public $num1;
        public $num2;
        public $operation;

        public function __construct($num1, $num2, $operation){
            $this->num1 = $num1;
            $this->num2 = $num2;
            $this->operation = $operation;
        }

        public function calculate(){
            switch ($this->operation) {
                case 'add':
                    $result= $this->num1 + $this->num2;
                    break;

                case 'sub':
                    $result= $this->num1 - $this->num2;
                    break;

                case 'mul':
                    $result= $this->num1 * $this->num2;
                    break;

                case 'div':
                    $result= $this->num1 / $this->num2;
                    break;

                default:
                    $result = "No numbers entered! Please, try again...";
                    break;
            }
            return $result;
        }
    }

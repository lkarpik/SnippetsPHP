<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.min.css" />
    <script src="main.js"></script>
   
</head>
<body >
    
    <!-- <div class="container">
    <h1>Wyszukaj</h1>
    <form action="" method="post">
    Wyszukaj:
    <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
    </form>
    <p>Suggestions</p> <span id="output" class="text-success"></span>
    </div> -->
    <div class="container md4">Jak to zrobić? :) OOP</div> <br><hr><br>
<?php
    class Person {
        private $name;
        private $email;
        private static $ageLimit = 40;

        public function __construct($x, $y){
            $this->name = $x;
            $this->email = $y;
            echo __CLASS__.' created <br>';
        }
        public function setName($x) {
            $this->name = $x;
        }
        public function getName() {
            return $this->name.'<br>';
        }
        public function setEmail($y) {
            $this->email = $y;
        }
        public function getEmail() {
            return $this->email.'<br>';
        }
        public function __destruct() {
            echo __CLASS__.' destoyed <br>';
        }
        public static function getAgeLimit() {
            return self::$ageLimit;
        }
    }

    // $person1= new Person('Kurdupel', 'kurdupel@wp.pl');

    

    // echo $person1->getName();
    // echo $person1->getEmail();
class Customer extends Person {
    private $balance;

    public function __construct($x, $y, $b) {
        parent::__construct($x, $y);
        echo 'A new '.__CLASS__.' created';
        $this->balance = $b;
    }
    
    public function setBalance($b) {
        $this->balance = $b;
    }
    public function getBalance() {
        return $this->balance.'<br>';
    }


}

$customer1 = new Customer('Henio Bej', 'e@mail.com', 300);

// echo $customer1->getBalance();

// echo Customer::getAgeLimit();
// echo Customer::$ageLimit;


?>
</body>
</html>
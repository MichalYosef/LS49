<?php   
    require_once 'bll.php';
    
    class Vendor {
        private $table_name;

        public $name;
        public $id;
        

        function __construct($name) {
            // $this->id = $id;
            $this->name = $name;
            // go to DB and bring name
        }
    
        public static function getAllVendors() {
           $b = new BLL();
           return $b->getAllVendors(); 
        }

        public function Insert() {
            $b = new BLL();
            $b->InsertVendor(self);
        }

        public function getId() {
            return $this->id;
        }
    }
?>
<?php
    require_once 'connection.php';
    require_once 'vendor.php';

    class BLL {
        public function getAllVendors() {
            $allVendors = array();

            $stmt = $this->executeStmt('select * from ls47_vendor');
            while ($row = $stmt->fetch())
            {
               array_push($allVendors, new Vendor($row['id'], $row['name']));
            }
           
            return $allVendors;
        }

        private function executeStmt($stmt) {
            $con = new Connection();
            return  $stmt = $con->executeStatement($stmt);
        }

        
    }

<?php

    interface DoQuery{
        
        public function selectAll($conn);
        // public function delete($conn , $tableName , $query);
        // public function update($conn , $tableName , $query);
         public function insert($conn , User $user);
    }

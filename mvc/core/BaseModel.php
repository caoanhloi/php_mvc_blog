<?php    
    class BaseModel extends DB{
        // lay ra tat ca ban gi
        public function getAll($table){
            $sql = "SELECT * FROM $table";
            $query =  mysqli_query($this->con,$sql);
            $data = [];
            while ($row = mysqli_fetch_array($query)) {
                array_push($data,$row);
            };
            return $data;
        }
        // lay ra 1 ban gi
        public function findById($table,$id,$idtable){
            $sql = "SELECT * FROM $table WHERE $idtable = $id";
            $query =  mysqli_query($this->con,$sql);
            $data = [];
            while ($row = mysqli_fetch_array($query)) {
                array_push($data,$row);
            };
            return $data;
        }

        // them du lieu vao 
        public function create($table,$data=[]){
            $columns = implode(',', array_keys($data));
            $newValues =array_map(function($value){
                return "'" .$value."'";
            },array_values($data));
            $newValues = implode(',', $newValues);
            $sql = "INSERT INTO $table($columns) VALUES($newValues)";
            mysqli_query($this->con,$sql);
        }
        // update
        public function update($table,$idtable,$id,$data){
            $dataSets = [];
            foreach ($data as $key => $val) {
                array_push($dataSets,"$key='".$val."'");
            }
            $dataSetString = implode(',', $dataSets);
            $sql = "UPDATE $table SET $dataSetString WHERE $idtable = $id";
            mysqli_query($this->con,$sql);
            
        }
        //xoa
        public function delete($table,$idtable,$id){
            $sql = "DELETE FROM $table WHERE $idtable = $id";
            mysqli_query($this->con,$sql);
        }
        
    }

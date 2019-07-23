<?php

    class Queries
    {
        public $db;

        public function __construct($db)
        {
            $this->db = $db;
        }

        public function login($sql,$parameters)
        {   
            
            $sql = $this->db->prepare($sql);
            return $sql->execute($parameters);
    
            // $data = $sql->fetch();


            // if($sql->rowCount() > 0 && $data['role'] == 'Admin')
            // {
            //     Session::init();
            //     Session::set('Admin',$data['id']);
            //     return true;
            // }
            // else if($sql->rowCount() > 0 && $data['role'] == 'Member')
            // {
            //     Session::init();
            //     Session::set('Member',$data['id']);
            //     return true;
            // }
            // else if($sql->rowCount() < 1)
            // {
            //     return false;
            // }
        }   

        public function select($sql,$parameters)
        {
            $sql = $this->db->prepare($sql);
            $sql->execute($parameters);

            return $sql->fetchAll(PDO::FETCH_CLASS);
        }

        public function selectCount($sql,$parameters)
        {
            $sql = $this->db->prepare($sql);
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            
            $sql->execute($parameters);

            return $sql->rowCount();
        }

        public function selectAll($table)
        {
    
            $sql = $this->db->prepare("SELECT * FROM {$table}");
            $sql->execute();
    
            return $sql->fetchAll(PDO::FETCH_CLASS);
        }
    
        public function insert($table,$parameters)
        {   
    
            $sql = "INSERT INTO {$table} (";
    
            foreach ($parameters as $key => $value)
            {   
                $keys[]= $key;
            }
    
            $sql.= implode(',',$keys);
            $sql .= ")VALUES( ";
            $sql .= ":".implode(", :",$keys);
            $sql .= ")";
            
            $sql = $this->db->prepare($sql);
            $sql->execute($parameters);
    
        }
    
        public function update($table,$parameters,$id)
        {
            $sql = "UPDATE {$table} SET ";
    
            foreach($parameters as $key => $value)
            {
                $keys[] = $key."=:".$key;
                $values[]= $value;
            }
    
            $sql .= implode(" , ", $keys);
            $sql .= " WHERE id= :id";
    
            $parameters['id'] = $id; 
    
            $sql = $this->db->prepare($sql);
            $sql->execute($parameters);
        }

        public function membership_update($table,$parameters,$id)
        {
            $sql = "UPDATE {$table} SET ";
    
            foreach($parameters as $key => $value)
            {
                $keys[] = $key."=:".$key;
                $values[]= $value;
            }
    
            $sql .= implode(" , ", $keys);
            $sql .= " WHERE user_id= :id";
    
            $parameters['id'] = $id; 
    
            $sql = $this->db->prepare($sql);
            $sql->execute($parameters);
        }
    
        public function delete($table,$id)
        {
            $sql = $this->db->prepare("DELETE FROM {$table} WHERE id=?");
            $sql->bindValue(1,$id);
            $sql->execute();
        }

        public function upload()
        {
            $allowedExts =array("mp3","wma","wav");
            $temp = explode(".",$_FILES['file']['name']);
            $extension = end($temp);
            $name = reset($temp);
            $targetDir = "uploads/";
            $targetFile = $targetDir.basename($_FILES['file']['name']);
            $uploadOk = 1;
            $FileType = pathinfo($targetFile,PATHINFO_EXTENSION);

            if(($_FILES['file']['type'] == "audio/mp3")
                || ($_FILES['file']['type'] == "audio/x-ms-wma")
                || ($_FILES['file']['type'] == "audio/x-ms-wav") 
                && in_array($extension,$allowedExts))
            {

                if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile))
                {
                    $this->insert('uploads',[
                        "file_name"=>$name,
                        "file_location"=>$targetFile,
                    ]);
                    return $message = '
                    
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">
                        &times;
                        </button>
                        The file '.basename($_FILES['file']['name']).' has been uploaded
                    </div>';
                }
                else
                {
                   return $message = '
                   <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">
                        &times;
                        </button> 
                        Error uploading file... Code '.$_FILES['file']['error'].'
                    </div>';
                }
            }
            else
            {
                return $message = '
                <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">
                        &times;
                        </button>
                        invalid File... Only audio files allowed
                </div>';
            }
        }
    }
<?php

require_once 'Database.php';

class User extends Database
{
    protected $tablename = "usertable";

//    Function to add user
    public function add($data)
    {
        if (!empty($data)) {
            $fields = $placeholder = [];
            foreach ($data as $field => $value) {
                $fields[] = $field;
                $placeholder[] = ":{$field}";
            }
        }
        $sql = "insert into {$this->tablename} (" . implode(',', $fields) . ") values (" . implode(
                ',',$placeholder) . ")";

        $stmt = $this->conn->prepare($sql);
        try {
            $this->conn->beginTransaction();
            $stmt->execute($data);
            $lastInsertedId = $this->conn->lastInsertId();
            $this->conn->commit();
            return $lastInsertedId;
        } catch (PDOException $exception) {
            echo "Error:" . $exception->getMessage();
            $this->conn->rollBack();
        }
        return $data;
    }

//Function to fetch rows

    public function getRows($start = 0, $limit = 4)
    {
        $sql = "SELECT * FROM {$this->tablename} ORDER BY DESC LIMIT {$start},{$limit}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $results = [];
        }
        return $results;
    }

//Fn to fetch single row
    public function getRow($field, $value)
    {
        $sql = "SELECT * FROM {$this->tablename} WHERE {$field} = :{$field}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            $result = [];
        }
        return $result;
    }

//Fn to count number of rows
    public function countRows()
    {
        $sql = "SELECT * count(*) as pcount FROM {$this->tablename}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['pcount'];
    }

//    Fn to upload image
public function uploadImage($file){
        if (!empty($file)){
            $fileTempPath = $file['tmp_name'];
            $fileName = $file['name'];
            $fileType = $file['type'];
            $fileNameCmps = explode('.',$fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $newFileName = md5(time().$fileName).'.'.$fileExtension;
            $allowedExtensions = ['png','jpg','jpeg'];

            if (in_array($fileExtension,$allowedExtensions)){
                $uploadDir = getcwd().'/uploads';
                $destFilePath = $uploadDir . $newFileName;
                if (move_uploaded_file($fileTempPath,$destFilePath)){
                    return $newFileName;
                }
            }
        }
}


}

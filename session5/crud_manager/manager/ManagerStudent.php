<?php

class ManagerStudent
{
    public $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function loadDataJson()
    {
        $dateFile = file_get_contents($this->path);
        return json_decode($dateFile, true);
    }

    public function addData($student)
    {
        $arrStudent = [
            "name" => $student->getName(),
            "address" => $student->getAddress(),
            "phone" => $student->getPhone(),
            "role" => $student->getRole(),
            "group" => $student->getGroup()
        ];
//        var_dump($arrStudent);
        $this->saveDateJson($arrStudent);


    }

    public function saveDateJson($data)
    {
        $database = $this->loadDataJson();

        array_push($database, $data);

        $newData = json_encode($database);
        var_dump($newData);

        file_put_contents($this->path, $newData);
    }

}

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

    public function saveDateJson($data)
    {
        $newData = json_encode($data);
        file_put_contents($this->path, $newData);
    }

    public function addData($student)
    {
        $database = $this->loadDataJson();
        $arrStudent = [
            "name" => $student->getName(),
            "address" => $student->getAddress(),
            "phone" => $student->getPhone(),
            "role" => $student->getRole(),
            "group" => $student->getGroup()
        ];
        array_push($database, $arrStudent);
        $this->saveDateJson($database);
    }


    public function getListStudentData()
    {
        $data = $this->loadDataJson();
        $studentList = [];
        foreach ($data as $item) {
            $student = new Student($item["name"], $item["phone"], $item["address"], $item["role"], $item["group"]);
            array_push($studentList, $student);
        }
        return $studentList;
    }

    public function delete($index)
    {
        $database = $this->loadDataJson();
        if (array_key_exists($index, $database)) {
            array_splice($database, $index, 1);
            $this->saveDateJson($database);
        }
    }

    public function edit($index)
    {
        $database = $this->getListStudentData();
        if (array_key_exists($index, $database)) {

            $this->saveDateJson($database);
        }
    }
}

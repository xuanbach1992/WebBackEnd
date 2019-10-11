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
        $studentsList = [];
        foreach ($data as $item) {
            $student = new Student($item["name"], $item["phone"], $item["address"], $item["role"], $item["group"]);
            array_push($studentsList, $student);
        }
        return $studentsList;
    }

    public function delete($index)
    {
        $database = $this->getListStudentData();
        if (array_key_exists($index, $database)) {
            array_splice($database, $index, 1);
            $this->saveDateJson($database);
        }
    }

    public function getDataToIndex($index)
    {
        $database = $this->getListStudentData();
        if (array_key_exists($index, $database)) {
            $data = $database[$index];
        }
        return $data;
    }

    public function edit($index, $data)
    {
        $database = $this->getListStudentData();
        if (array_key_exists($index, $database)) {
            $database[$index] = $data;
            $this->saveDateJson($database);
        }
        return $database;
    }
}

<?php

namespace app;

class Model
{

    public static function CheckModel($model, array $data)
    {
        if (class_exists($model)) {
            return new $model($data);
        }

        throw new \Exception("Model '.{$model}.' is not exists");
    }

    public static function CheckModels($model, array $data)
    {
        $result = [];
        foreach ($data as $row) {
            $result[] = self::CheckModel($model, $row);
        }

        return $result;
    }
}

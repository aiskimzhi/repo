<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png', 'checkExtensionByMimeType' => false],
        ];
    }

    public function upload($id) {
        if ($this->validate()) {
            if (file_exists('img/page_' . $id)) {
                if (scandir('img/page_' . $id) > 2) {
                    $i = count(scandir('img/page_' . $id)) - 1;
                    $n = intval(substr(scandir('img/page_' . $id)[$i], -6, 2)) + 1;
                    if ($n < 10) {
                        $this->imageFile->saveAs('img/page_' . $id . '/img_0' . $n . '.png');
                        return true;
                    } else {
                        $this->imageFile->saveAs('img/page_' . $id . '/img_' . $n . '.png');
                        return true;
                    }
                } else {
                    $this->imageFile->saveAs('img/page_' . $id . '/img_01.png');
                    return true;
                }
            } else {
                mkdir('img/page_' . $id);
                $this->imageFile->saveAs('img/page_' . $id . '/img_01.png');
                return true;
            }
        }
        return false;
    }
}
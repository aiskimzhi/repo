<?php

namespace app\models;

use app\models\Advert;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use yii\helpers\Html;

class Pictures extends Advert
{
    public $visibility = [
        'display: none',
        'display: none',
        'display: none',
        'display: none',
        'display: none',
        'display: none',
        'display: none',
        'display: none',
        'display: none',
        'display: none',
    ];

    /**
     * @param $id
     * @return array
     * Sets visibility to necessary fields
     */
    public function visibility($id)
    {
        $vis = $this->visibility;
        if (file_exists('img/page_' . $id)) {
            for ($i = 0; $i < count(scandir('img/page_' . $id)) - 2; $i++) {
                $vis[$i] = 'visibility: visible';
            }
        }
        return $vis;
    }

    /**
     * @param $id
     * @return array
     * Gets the list of images in directory
     */
    public function imgList($id)
    {
        if (file_exists('img/page_' . $id)) {
            if (count(scandir('img/page_' . $id)) > 2) {
                $max = count(scandir('img/page_' . $id)) - 2;
                $list = array_splice(scandir('img/page_' . $id), 2, $max);
                return $list;
            }
        }
        return [];
    }

    /**
     * @param $i
     * @param $id
     * @return array
     * returns items of carousel for a certain image
     */
    public function carouselItems($id)
    {
        $items = [];
        $array = $this->imgList($id);
//        $arr1 = array_splice($this->imgList($id), $i);
//        $arr2 = array_splice($this->imgList($id), 0, $i);
//        $array = array_merge($arr1, $arr2);

        for ($i = 0; $i < count($array); $i++) {
            $img[$i] =  '/img/page_' . $id . '/' . $array[$i];
            $items[$i] =  Html::img($img[$i], ['class' => 'img-thumbnail']);
        }

        return $items;
    }

    /**
     * @param $id
     * @return mixed
     * returns value for deleting picture
     */
    public function value($id)
    {
        $val = ['', '', '', '', '', '', '', '', '', ''];
        for ($i = 0; $i < 10; $i++) {
            if (file_exists('img/page_' . $id)) {
                if ($i < count(scandir('img/page_' . $id)) - 2) {
                    $val[$i] = 'img/page_' . $id . '/' . $this->imgList($id)[$i];
                } else {
                    $val[$i] = '';
                }
            }
        }
        return $val;
    }

    /**
     * @param $id
     * @return mixed
     * returns image to render in the table
     */
    public function image($id)
    {
        $img = ['', '', '', '', '', '', '', '', '', ''];
        for ($i = 0; $i < 10; $i++) {
            if (file_exists('img/page_' . $id)) {
                if ($i < count(scandir('img/page_' . $id)) - 2) {
                    $img[$i] = '<img src="/img/page_' . $id . '/' . $this->imgList($id)[$i] . '" style="width: 120px; height: 120px; vertical-align: top">';
                } else {
                    $img[$i] = '';
                }
            }
        }
        return $img;
    }
}

<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

<!--        --><?php
//        if (file_exists('img/page_10/img_01.png')) {
//            $path = 'img/page_10/img_01.png';
//            $path_two = 'img/page_10/img_2.png';
//            $w = getimagesize($path)[0];
//            $h = getimagesize($path)[1];
//            echo 'W: ' . $w . '<br>';
//            echo 'H: ' . $h . '<br>';
//            $persent = 120 / $w;
//            echo 'persent: ' . $persent . '<br>';
//            $new_h = floor($h * $persent);
//            echo 'new_H: ' . $new_h . '<br>';
//            $a = imagecreatetruecolor(120, $new_h);
//            $b = imagecreatefrompng($path);
//            imagecopyresampled($a, $b, 0, 0, 0, 0, 120, $new_h, $w, $h);
//
//            imagepng($a);
//
//
//        } else {
//            echo 'no file found';
//        }
//
//        function resize($id)
//        {
//            $path = 'img/page_' . $id . '/img_1.png';
//            $w = getimagesize($path)[0];
//            $h = getimagesize($path)[1];
//            $persent = 120 / $w;
//            $new_h = floor($h * $persent);
//        }

//        $str = 'ab10kn';
//        $substr = substr($str, -4, 2);
//        var_dump($substr);
//        $n = intval($substr);
//        var_dump($n);
//        $k = $n + 1;
//        echo $k;


//        $path = 'img/page_10';
//        $open = opendir($path);
//        $files = readdir($open);
//        echo '<pre>';
//        $scan = scandir($path);
//        print_r(scandir($path));
//        $c = count($scan) - 2;
//        $d = 0 - $c;
//
//        $n = array_splice($scan, 2, $c);
//        print_r($n);

//
//        $substr = substr($file, -6, 2);
//        $nn = intval($substr);
//        var_dump($nn);

//        while ($files == '.') {
//            echo 'Files: ' . $files;
//        }

//        $dir = opendir($path);
//        $count = 0;
//        while($file = readdir($dir)){
//            if($file == '.' || $file == '..' || is_dir('path/to/dir' . $file)){
//                continue;
//            }
//            $count++;
//        }
//        echo 'Количество файлов: ' . $count;

        ?>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>

<?php
namespace app\controllers;

use yii;
use yii\web\Controller;

class FiveController extends Controller{

       public function actionIndex(){

           $arr = ['1','2','3','4','5','6'];

           $arrs = $this->gettree($arr);

           echo "<pre>";
           var_dump($arrs);



       }

       public function gettree($arr){

             $arr1 = [];
             $arr2 = [];

             foreach ($arr as $k => $v){

                 if ($v%2==0){
                     $arr1[] = $v;

                 }elseif ($v%2==1){

                     $arr2[] = $v;
                 }


             }

             $arrs = array_merge($arr2,$arr1);

             return $arrs;


       }



}
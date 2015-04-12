<?php
/**
 * Created by PhpStorm.
 * User: yan
 * Date: 2015/4/12
 * Time: 16:17
 */
class IndexController extends BaseController{
      public function index(){
          $data = Article::all();
          var_dump($data);
      }
}
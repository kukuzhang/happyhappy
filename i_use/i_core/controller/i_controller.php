<?php
/**
 * Created by PhpStorm.
 * User: yyq2
 * Date: 14-3-20
 * Time: 上午11:07
 */

namespace controller;


class i_controller {

    public function i_(){ //入口函数
    }
   public  function i_render_tpl(){ //html模板读取 解析 渲染
    $this->i_read_tpl();
    $this-> i_replace_tpl();
    $this->i_final_tpl(); //最后渲染到网页
   }

   private function i_read_tpl(){ //读取html

   }
    private function i_replace_tpl(){ //替换参数

    }
    private function i_final_tpl(){ // 输出页面
      echo('');
    }
} 
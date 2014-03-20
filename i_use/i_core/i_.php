<?php
/**
 * Created by PhpStorm.
 * User: kukuzhang
 * Date: 14-3-20
 * Time: 上午10:01
 */

class i
{
     static  function i_finish(){
         i::i_load_config(); //加载配置文件的意图；
         i::i_run_core(); //核心运行的意图；
}
//------------------------------
    static   function i_load_config(){
      i::i_load_sys_config(); //加载系统配置
      i::i_load_user_config(); //加载用户配置
    }

    static function i_run_core(){
        i::i_load_class(); //加载功能类
        i::i_load_function(); //加载功能函数
        $i = new i();
        $i->run_core();
    }
//------------------------------

  public function run_core(){ //
    $this->i_run_url( $this->i_parse_url());
}
 public  function  i_parse_url(){ //解析url
   return array(); //返回 控制器 方法 模板
 }

 public  function i_run_url($url_param=array()){//根据对应参数找到对应控制器和对应模板
     $controller=$url_param['controller'];
     $method = $url_param['method'];
     $res=$this->i_run_controller($controller,$method);//运行控制器 返回控制器对象
     $this->i_run_tpl($res);//生成页面
 }

 public  function i_run_controller($controller,$method){ //控制器名称,方法
//注册一个类
     $classname=$controller; //作用控制器继承 i_controller
     $i_enter_mothed='i_'; //controller类的入口函数名称
 //创建对象
     $_class=new $classname();
     $_class->$i_enter_mothed();
     $_class->$method;
     return $_class;
 }
public function i_run_tpl($tpl){ //传入控制器对象
    $tpl->i_render_tpl();//渲染模板
}

}
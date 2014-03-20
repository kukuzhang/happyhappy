happyhappy
==========

happyhappy(php版) 是一套面向人的意图(Intent)的编程思想和框架实践。它的核心描述为程序员应该为自己的意图去构架系统，按自己的意图和思维来开展，不是按机械的意图编写代码。

规则：
 唯一的一条规则只有一条：在描述你的意图时，用'I_'(Intent)作为你变量、方程、类、目录等的前缀。
实践：
 在php 做web项目的index.php入口文件中。只写一个意图:
 //index.php
 <?php
 
  I_finish(); //一个完成的意图；
  
  function I_finish() //在完成的意图里面完成它的意图
  {
    I_load_config(); //加载配置文件的意图；
    I_run_core();   //核心运行的意图；
  }
  
  ....
  就按照这样的方式去对接
  目录
  一般可以是
  web/ 
   app/
      ...
       I_/
   lib/ 
     ...
     I_/
   public/
     ...
     I_/
     
     

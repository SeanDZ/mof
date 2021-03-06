@extends('layouts.mof')
@section('title','莫夫作品')
<link rel="stylesheet" type="text/css" href="/resources/views/home/style/css/mofproduction.css">
@section('content')
      <!--内容-->
      <div id="content">
         @foreach($work as $v)
         <div class="content-img"><img src="/{{$v->image}}"></div>
         @endforeach
            <div class="content-sx fl">
               <img src="/resources/views/home/style/img/san.png" class="content-sximg"><span>筛选</span>
            </div>
            <hr>
            <div class="con">
               <div class="con-left fl">
                  <ul>
                     <li>节日蛋糕
                        <img src="/resources/views/home/style/img/jia.png" class="con-leftjia fr">
                        <img src="/resources/views/home/style/img/xx.png" class="con-leftx fr">
                     </li>
                     <li>
                        @foreach($catename1 as $v)
                        <p>{{$v->title}}</p>
                        @endforeach
                     </li>
                     <li>口味蛋糕
                        <img src="/resources/views/home/style/img/jia.png" class="con-leftjia fr">
                        <img src="/resources/views/home/style/img/xx.png" class="con-leftx fr">
                     </li>
                     <li>
                        @foreach($catename2 as $v)
                        <p>{{$v->title}}</p>
                        @endforeach
                     </li>
                     <li>造型蛋糕
                        <img src="/resources/views/home/style/img/jia.png" class="con-leftjia fr">
                        <img src="/resources/views/home/style/img/xx.png" class="con-leftx fr">
                     </li>
                     <li>
                        @foreach($catename3 as $v)
                           <p>{{$v->title}}</p>
                        @endforeach
                     </li>
                     <li>艺术蛋糕
                        <img src="/resources/views/home/style/img/jia.png" class="con-leftjia fr">
                        <img src="/resources/views/home/style/img/xx.png" class="con-leftx fr">
                     </li>
                     <li>
                        @foreach($catename4 as $v)
                           <p>{{$v->title}}</p>
                        @endforeach
                     </li>
                     <li>面包
                        <img src="/resources/views/home/style/img/jia.png" class="con-leftjia fr">
                        <img src="/resources/views/home/style/img/xx.png" class="con-leftx fr">
                     </li>
                     <li>
                        @foreach($catename5 as $v)
                           <p>{{$v->title}}</p>
                        @endforeach
                     </li>
                     <li>甜点
                        <img src="/resources/views/home/style/img/jia.png" class="con-leftjia fr">
                        <img src="/resources/views/home/style/img/xx.png" class="con-leftx fr">
                     </li>
                     <li>
                        @foreach($catename6 as $v)
                           <p>{{$v->title}}</p>
                        @endforeach
                     </li>
                  </ul>
               </div>
               <div class="con-right fr">
                  <ul class="con-rightul">
                     @foreach($category1 as $v)
                     <li><img src="/{{$v->image}}" class="conimg"></li>
                     @endforeach
                  </ul>
                  <ul class="con-rightul">
                     @foreach($category2 as $v)
                        <li><img src="/{{$v->image}}" class="conimg"></li>
                     @endforeach
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/houman.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/houtou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/fu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/houman.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/houtou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/fu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/houman.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/houtou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/fu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
                  <ul class="con-rightul">
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hu.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/he.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/kou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/hutou.png" class="conimg"></li>
                     <li><img src="../img/mof/mofproduction/tu.png" class="conimg"></li>
                  </ul>
               </div>
               <div class="cle"></div>
            </div>
         </div>
@endsection


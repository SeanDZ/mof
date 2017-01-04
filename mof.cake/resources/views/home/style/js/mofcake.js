
//搜索框选项卡效果
$(".shpu-ul1>li").mouseover(function(){

  var conid = $(this).attr("conid");

  $(".shpu-ul2 li").removeClass("active");
  $(".shpu-ul1 li").removeClass("active");

  $(".shpu-ul2 li").eq(conid).addClass("active");
  $(this).addClass("active");
});

$('.product_box').eq(0).addClass('show');

// 轮播
(function(){
  var $wrap=$("#wrap"),
      $pages=$("#product_list").find(".product_box"),
      $controlBox=$("#control_box"),
      $productBtns=$("#product_btns"),
      $controls=$controlBox.find("a"),
      $icLine=$("#ic_line"),
      $listTops=$("#list_top").find("li"),
      $hNav=$("#h_nav"),
      $hNavli=$hNav.find("li"),
      $hSubnav=$("#h_subnav"),
      $hSubDD=$hSubnav.find("dd"),
      $hBdot=$("#h_bdot"),
      $hSdot=$("#h_sdot"),
      $footer=$("#footer"),
      $bgs=$pages.find(".bg_box img"),
      $mainBoxs=$pages.find(".main_box"),
      $moreNav=$("#more_nav"),
      $rptBg=$("#rpt_bg");
  var data={
    pLength:$pages.length,
    curP:0,
    isCan:true,
    isOnbtn:false,
    fColor:[2,2,1,1,1],
    dur: 3500,
    cNum:0
  };
  var aDD=$controls.eq(0).width()+parseInt($controls.eq(0).css("margin-right").slice(0,-2))*2;
  var cId;
  var isCss3=function(){
    var style=document.createElement("div").style;
    for(var k in style){
      if(k.toLowerCase().indexOf("animation")>0){
        return true;
      }
    }
    return false;
  }();
  var isIE6=navigator.userAgent.indexOf("MSIE 6.0") > 0;
  //页面自缩放
  var resize=function(){
    var w=$(window).width(),
        h=$(window).height();
    $wrap.height(h);
    $moreNav.height(h);
    if(w/h<1920/1080){
      $bgs.height(h).css({width:"auto",margin:-.5*h+"px 0 0 "+-.5*1920/1080*h+"px"});
    }else{
      $bgs.width(w).css({height:"auto",margin:-.5*w*1080/1920+"px 0 0 "+-.5*w+"px"});
    }
    var imgH=$bgs.height();
    $mainBoxs.height(imgH).css("margin-top",-.5*imgH+"px");
    var cls;
    if(isCss3){
      document.getElementById("wrap").className="wrap big_view xbig";
      switch(true){
        case w>=1920:{cls="";break;}
        case w<1920&&w>=1680:{cls="small9";break;}
        case w<1680&&w>=1600:{cls="small8";break;}
        case w<1600&&w>=1536:{cls="small7";break;}
        case w<1536&&w>=1440:{cls="small6";break;}
        case w<1440&&w>=1366:{cls="small5";break;}
        case w<1366&&w>=1280:{cls="small4";break;}
        case w<1280&&w>=1024:{cls="small3";break;}
        case w<1024:{cls="small2";break;}
      }
      for(var i=0;i<data.pLength;i++){
        $pages.eq(i).find(".content").attr("class","content "+cls);
      }
      $productBtns.find(".content").attr("class","content "+cls);
    }else{
      switch(true){
        case w>=1600:{cls="big_view";break;}
        case w<1600&&w>=1440:{cls="mid_view";break;}
        case w<1440:{cls="small_view";break;}
      }
      var ws=$wrap[0].className;
      if(isIE6&&(ws.indexOf("big")!=-1||ws.indexOf("mid")!=-1||ws.indexOf("small")!=-1)&&ws.indexOf(cls)==-1)
        location.reload();
      wrap.className="wrap "+cls;
    }
    aDD=$controls.eq(0).width()+parseInt($controls.eq(0).css("margin-right").slice(0,-2))*2;
  };
  $(window).resize(resize);
  resize();

  var pageChange=function(idx){
    //  点击搜索
    $('.logo-header img:eq(1)').click(function(){
      $('.sear-hidden').css({"display":"block"});
      $('.logo-header').css({backgroundColor:"#3f291b"});
    })
    $('.logo-header img:eq(2)').click(function(){
      $('.sear-hidden').css({"display":"block"});
      $('.logo-header').css({backgroundColor:"#3f291b"});
    })

    //  点击小x
    $('.sear-x').click(function(){
      $('.sear-hidden').css({"display":"none"});
      $('.logo-header').css({backgroundColor:"transparent"});
    });
    if(idx<1){
      $('.img1').css({"display":"block"});
      $('.img2').css({"display":"none"});
      $('.logo-header img:eq(1)').css({"display":"block"});
      $('.logo-header img:eq(2)').css({"display":"none"});
      $('.logo-header img:eq(3)').css({"display":"block"});
      $('.logo-header img:eq(4)').css({"display":"none"});
    }else{
      $('.img1').css({"display":"none"});
      $('.img2').css({"display":"block"});
      $('.logo-header img:eq(1)').css({"display":"none"});
      $('.logo-header img:eq(2)').css({"display":"block"});
      $('.logo-header img:eq(3)').css({"display":"none"});
      $('.logo-header img:eq(4)').css({"display":"block"});
    }

    

    
    
    if(data.isOnbtn)
      return;
    if(idx>=-1&&idx<data.pLength&&idx!=data.curP&&data.isCan){
      data.isCan=false;
      data.cNum++;
      clearInterval(cId);
      idx=idx==-1?data.pLength-1:idx;
      $controls.removeClass("cur").eq(idx).addClass("cur"); 
      $pages.eq(data.curP).css({zIndex:0});
      $icLine.css({left:aDD*idx});
      $pages.eq(idx).addClass("show").css({opacity:0,zIndex:1}).animate({opacity:1},400,function(){
        $pages.eq(data.curP).removeClass("show");
        $(this).addClass("show");
        data.isCan=true;
        data.curP=idx;
        data.cNum--;
        if(data.cNum==0){
          cId=setInterval(function(){
            pageChange((data.curP+1)%data.pLength);
          },data.dur);
        }
      });
    }
  }
  $controls.on("mouseenter",function(){
    data.isCan=true;
    pageChange($controls.index(this));
    $icLine.css({left:aDD*$controls.index(this)});
    data.isOnbtn=true;
  });
  $controls.on("mouseleave",function(){
    data.isOnbtn=false;
  });

  var isBottom=false;
  var bAni;

  var bottomHide=function(){
    if(isBottom){
      isBottom=false;
      if(bAni)
        clearTimeout(bAni),bAni=null;
      $footer.removeClass("show");
      $productBtns.removeClass("show");
      $rptBg.removeClass("show");
    }
  }
  var bottomShow=function(){
    if(!isBottom){
      isBottom=true;
      $footer.addClass("show");
      $productBtns.addClass("show");
      $rptBg.addClass("show");
      if(bAni)
        clearTimeout(bAni);
      bAni=setTimeout(bottomHide,3000);
    }
  }
  $footer.on("mouseenter",function(){
    if(bAni)
      clearTimeout(bAni),bAni=null;
  });
  $footer.on("mouseleave",function(){
    if(bAni)
      clearTimeout(bAni);
    bAni=setTimeout(bottomHide,3000);
  });

  //    小下标的滚动事件
 $(document).on("mousewheel DOMMouseScroll",function(event){
   var sd=event.originalEvent.wheelDelta||event.originalEvent.detail*-1;
   if(sd>0){
     bottomHide();
   }
   else{
     bottomShow();
   }
 });
  cId=setInterval(function(){
    pageChange((data.curP+1)%data.pLength);
  },data.dur);
})();




  

  
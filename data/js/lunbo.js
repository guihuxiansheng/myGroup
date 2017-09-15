//<script type="text/javascript">
			var arr=[{width:240,height:150,left:50,top:20,opacity:0.5,z:1},
					{width:360,height:225,left:0,top:70,opacity:0.7,z:2},
					{width:480,height:300,left:210,top:100,opacity:1,z:3},
					{width:360,height:225,left:900-360,top:70,opacity:0.7,z:2},
					{width:240,height:150,left:900-240-50,top:20,opacity:0.5,z:1}
			         ];
			 var uLi=document.querySelectorAll(".lunbo ul li");
			 useAnimate();
			 
			 //轮播
			 var timer=null;//timer必须在函数调用前才能在下面鼠标放上去停止timer
			 autoPlay();
			 function autoPlay(){
			 	timer=setInterval(function(){
			 		oChange(true);
			 	},2000);
			 };			
			 
			 //点击事件
			 var oBtn=document.querySelectorAll(".lunbo ol li");
			 for(var i=0;i<oBtn.length;i++){
			 	oBtn[i].onclick=function(){
			 		console.log(this)
			 		if(this.className=="right"){
			 			oChange(true);
			 		}
			 		else{
			 			oChange(false);
			 		}
			 	}
			 }
			  
			 //鼠标放在上面停止轮播
			 for(var i=0;i<oBtn.length;i++){
			 	//鼠标放在上面停止轮播
			 	oBtn[i].onmouseover=function(){
				 	clearInterval(timer);
				 }
				 //鼠标离开开始轮播
				 oBtn[i].onmouseout=function(){
				 	autoPlay();
				 }
			 }
			 
			 function oChange(off){
			 	if(off){
			 		arr.push(arr.shift());
			 	}
			 	else{
			 		arr.unshift(arr.pop());
			 	}
				useAnimate();
			 }
			 function useAnimate(){
			 	for(var i=0;i<uLi.length;i++){
				 	animate(uLi[i],{
				            width:arr[i].width,
				            height:arr[i].height,
				            opacity:arr[i].opacity,
				            top:arr[i].top,
				            left:arr[i].left,
				            right:arr[i].right,//注意right和left
				            zIndex:arr[i].z
	        				})
				 }
			 }
//		</script>
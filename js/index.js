img=['img/20131012153153221.jpg',
	 'img/20131018161826947.jpg',
	 'img/20131018161904009.jpg',
	 'img/20131101184548898.jpg',
	 'img/20131102111748820.jpg',
	 'img/20131104155349117.jpg'
];
var adv={
	imgs:null,
	indexs:null,
	imgsLi:null,
	indexsLi:null,
	nextImg:null,
	nowImg:null,
	timer:null,
	isPlay:true,
	init:function(){
		this.indexs=document.getElementById("indexs");
		this.imgs=document.getElementById("imgs");
		//console.log(this.indexs);
		this.update();
		this.imgsLi=this.imgs.querySelectorAll("a");
		this.indexsLi=this.indexs.querySelectorAll("li");
		this.imgsLi[0].className="active";
		this.indexsLi[0].className="hover";	
		
		this.indexs.addEventListener("mouseover",function(e){
			
			if(e.target.nodeName=="LI"){
				clearInterval(this.timer);
				this.timer=null;
				var i=e.target.dataset.i;
				this.indexs.querySelector("li.hover").className='';
				this.indexsLi[i].className='hover';
				this.change(i);
			}
		}.bind(this));

		this.autoPlay();

		this.imgs.addEventListener("mouseover",function(){
			this.isPlay=false;
		}.bind(this));
		this.imgs.addEventListener("mouseout",function(){
			this.isPlay=true;
			//this.autoPlay();
		}.bind(this));
	},
	update:function(){
		for(var i=0,imghtml="",indexshtml="";i<img.length;i++){
			imghtml+="<a href='#'><img src='"+img[i]+"'></a>";
			indexshtml+="<li data-i="+i+"></li>";
		}
		console.log(imghtml);
		this.imgs.innerHTML=imghtml;
		this.indexs.innerHTML=indexshtml;
	},
	change:function(i){
		clearInterval(this.timer);
		this.timer=null;
		this.nextImg=this.imgsLi[i];
		this.nowImg=this.imgs.querySelector("a.active");
		this.timer=setInterval(this.play.bind(this,i),50);
	},
	play:function(i){
		var nowop=parseFloat(getComputedStyle(this.nowImg).opacity);
		var nextop=parseFloat(getComputedStyle(this.nextImg).opacity);
		if(nextop==1){
			clearInterval(this.timer);
			this.timer=null;
			this.nowImg.className="";
			this.nextImg.className="active";
			this.autoPlay();
		}else{
			this.nowImg.style.opacity=nowop-0.1;
			this.nextImg.style.opacity=nextop+0.1;
		}
	},
	autoPlay:function(){
		var nowIndex=this.indexs.querySelector("li.hover");
		var i=parseInt(nowIndex.dataset.i);
		++i;
		if(i==img.length){
			i=0;
		}
		clearInterval(this.timer);
		this.timer=null;
		this.timer=setTimeout(function(){
			if(this.isPlay){
				this.change(i);
				nowIndex.className="";
				this.indexsLi[i].className="hover";
			}else{
				this.autoPlay();
			}
		}.bind(this),2000);

	}
}

adv.init();

/*status*/
/*$(function(){
	var navLi=$('.nav ul li') //此处填写你的导航html对象
	var windowUrl=window.location.href; //获取当前url链接
	navLi.each(function(){
		var t=$(this).find('a').attr('href');
		if(t==windowUrl){
			$(this).addClass('status');  //添加当前位置样式
		}
	})
});*/

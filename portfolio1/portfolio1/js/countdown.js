// javascript for time count down for this year
function getRTime(){ 
var EndTime= new Date('2018/12/31 00:00:00'); //截止时间 
var NowTime = new Date(); 
var t =EndTime.getTime() - NowTime.getTime();  
 
var d=Math.floor(t/1000/60/60/24); 
var h=Math.floor(t/1000/60/60%24); 
var m=Math.floor(t/1000/60%60); 
var s=Math.floor(t/1000%60); 
 
document.getElementById("t_d").innerHTML = d ; 
document.getElementById("t_h").innerHTML = h ; 
document.getElementById("t_m").innerHTML = m ; 
document.getElementById("t_s").innerHTML = s ; 
} 
setInterval(getRTime,1000); 
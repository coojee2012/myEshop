
jQuery.extend(jQuery.easing,{easeOutExpo:function(x,t,b,c,d){return(t==d)?b+c:c*(-Math.pow(2,-10*t/d)+1)+b;}});var LRCycle=function(options){var defaults={duration:600}
var options=$.extend(defaults,options);this.options=options;options.LeftBtn=$(options.LeftBtnSel);options.RightBtn=$(options.LeftBtnSel);var MaxFlagLen=$(options.ContentSep).length;this.NowContent=0;if((typeof this.options.sepWidth)=="undefined"){this.options.sepWidth=$(options.ContentSep).eq(0).width();}
var _self=this;this.Show=function(cur){_self.unbindClick();cur=parseInt(cur);if(cur<0){cur=MaxFlagLen-2;var left="-"+(cur+1)*this.options.sepWidth+"px";$(_self.options.Content).css("left",left);}
var MoveSep=cur*this.options.sepWidth;$(_self.options.Content).animate({"top":0,"left":"-"+MoveSep+"px"},{duration:_self.options.duration,specialEasing:{"top":'easeOutExpo'},complete:function(){_self.bindClick();if(cur>=(MaxFlagLen-1)){$(_self.options.Content).css("left","0px");_self.NowContent=0;}}});if(cur<0){cur=(MaxFlagLen-1);}
_self.NowContent=cur;}
this.next=function(){_self.Show(_self.NowContent+1);}
this.pre=function(){_self.Show(_self.NowContent-1);}
this.bindClick=function(){$(_self.options.LeftBtnSel).bind("click",_self.pre);$(_self.options.RightBtnSel).bind("click",_self.next);}
this.unbindClick=function(){$(_self.options.LeftBtnSel).unbind("click",_self.pre);$(_self.options.RightBtnSel).unbind("click",_self.next);}
this.bindClick();}
var Cycle=function(options){var defaults={}
var options=$.extend(defaults,options);var MaxFrame=$(options.MainPicSel).length;var NowFrame=1;var bStart=0;var stepTime=5000;var toshowTime=300;function fnToggle(){NowFrame=parseInt(NowFrame);var next=1+NowFrame;if(next>MaxFrame){next=1;}
if(bStart==0)
{bStart=1;goon();return;}
else
{var toshow=$(options.MainPicSel+"["+options.GroupAttrName+"='"+next+"']").parents("a:first");var tohiddenframe=NowFrame;var showframe=next;$(options.MainPicSel+"["+options.GroupAttrName+"='"+tohiddenframe+"']").parents("a:first").fadeOut("fast",function(){toshow.fadeIn("fast");gospan(next);if(NowFrame>=MaxFrame)
NowFrame=1;else
NowFrame++;});}
goon();}
function gonow(cur){if(NowFrame==cur)return;if(cur<0||cur>MaxFrame)return false;if(window.lbt){clearTimeout(window.lbt);}
window.lbt=setTimeout(function(){TrueGonow(cur);},toshowTime);}
var TrueGonow=function(next){var toshow=$(options.MainPicSel+"["+options.GroupAttrName+"='"+next+"']").parents("a:first");var tohiddenframe=NowFrame;var showframe=next;$(options.MainPicSel+"["+options.GroupAttrName+"='"+tohiddenframe+"']").parents("a:first").fadeOut("fast",function(){toshow.fadeIn("fast");gospan(next);NowFrame=next;});}
function gospan(cur){for(i=1;i<=MaxFrame;i++){$(options.ControlSel+"["+options.GroupAttrName+"='"+i+"']").removeClass("current");}
$(options.ControlSel+"["+options.GroupAttrName+"='"+cur+"']").addClass("current");}
function goon(){if(window.lbt){clearTimeout(window.lbt);}
window.lbt=setTimeout(function(){fnToggle();},stepTime);}
fnToggle();$(options.ControlSel).each(function(){$(this).mouseover(function(){gonow($(this).attr("gid"));}).mouseout(function(){goon();});});}
var TDCycle=function(options){var defaults={}
this.options=$.extend(defaults,options);var _self=this;_self.i=0;$(this.options.ControlSel).mouseover(function(){$(_self.options.ImgContainerSel).hide();$(this).next(_self.options.ImgContainerSel).eq(0).show();});}
var TDCycleEffect=function(options){var defaults={}
this.options=$.extend(defaults,options);var _self=this;this.NowImg=$(_self.options.ImgContainerSel).eq(0)[0];_self.i=0;$(this.options.ControlSel).mouseover(function(){var toshow=$(this).next(_self.options.ImgContainerSel).eq(0)[0];if(toshow==this.NowImg)return;$(_self.NowImg).animate({"height":0},{specialEasing:{"height":'easeOutExpo'}});$(toshow).animate({"height":"253px"},{specialEasing:{"height":'easeOutExpo'}});_self.NowImg=toshow;});}
$(document).ready(function(){var t=new Cycle({"MainPicSel":"#top_ad_img a img","ControlSel":"#top_ad_txt li","GroupAttrName":"gid"});var t2=new LRCycle({"LeftBtnSel":"#brandlist .bl1","RightBtnSel":"#brandlist .bl3","ContentSep":"#brand_list dl","Content":"#brand_list"});var t3=new TDCycle({"ControlSel":"#sort_ad .top3_ad_txt","ImgContainerSel":"#sort_ad .top3_ad_img"});var t4=new TDCycle({"ControlSel":"#top5 .col_txt","ImgContainerSel":"#top5 .floor_ad_img"});var t5=new TDCycle({"ControlSel":"#top6 .col_txt","ImgContainerSel":"#top6 .floor_ad_img"});var t6=new TDCycle({"ControlSel":"#top4_1_5 .col_txt","ImgContainerSel":"#top4_1_5 .floor_ad_img"});var t7=new TDCycle({"ControlSel":"#top4_2_5 .col_txt","ImgContainerSel":"#top4_2_5 .floor_ad_img"});var t8=new TDCycle({"ControlSel":"#top4_3_5 .col_txt","ImgContainerSel":"#top4_3_5 .floor_ad_img"});});$(document).ready(function(){if(!$.browser.msie){$("#navbot .search_btn").attr("align","");}});
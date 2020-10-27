<!DOCTYPE html>
<html>
<head>
     <title>横向无缝滚动</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>
      
     <div id="demo" style="overflow: hidden; width: 90%; align: center;color:wight">
        <table cellspacing="0" cellpadding="0" align="center" border="0">
             <tbody>
                 <tr>
                     <td id="marquePic1" valign="top">
                         <table width="1800px">
                            <tr>                                 
                                 <td>建议使用手动上传</td>
                                 <td>批量上传注意模板格式</td>
                                 <td>数据及时上传</td>
                                 <td>推荐使用谷歌浏览器</td>
                                 <td>欢迎反馈</td>                             
                             </tr>
                         </table>
                     </td>
                     <td id="marquePic2" valign="top">
                     </td>
                 </tr>
             </tbody>
         </table>
     </div>
 </body>
 </html>
 <script type="text/javascript"> 
     //横向滚动 需要设置div的宽度
     var speed=30 
     marquePic2.innerHTML=marquePic1.innerHTML 
     function Marquee(){ 
         if(demo.scrollLeft>=marquePic1.scrollWidth){ 
             demo.scrollLeft=0 
         }else{ 
             demo.scrollLeft++ 
         }
     } 
     var MyMar=setInterval(Marquee,speed) 
     demo.onmouseover=function() {clearInterval(MyMar)} 
     demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)} 
 </script>
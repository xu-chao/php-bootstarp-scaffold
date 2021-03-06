$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../query_index_artical.php",
        async:true,
        dataType:"json",
        success:function(result){
            var artical=[];
            if (result) {
               var today = new Date().getTime();
               var day = new Date(result[0].WTime).getTime();
               var title = result[0].Title; 
               if(isSameWeek(day,today))
               {
                new PNotify({
                  title: title,
                  text: '<a href="download.php"><span style="font-size:14px;color:#FFF">请仔细阅读文章或公告</span></a>',
                  styling: 'bootstrap3'
                 });
               }else{
                new PNotify({
                  title:'暂无通知！',
                  text:'请仔细留意公告......',
                  type:'info',
                  delay: 3000,
                  styling:'bootstrap3'
                });
               }
            }
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});


function isSameWeek(old, now) {
    var oneDayTime = 1000 * 60 * 60 * 24;
    var old_count = parseInt(+old / oneDayTime);
    var now_other = parseInt(+now / oneDayTime);
    return parseInt((old_count + 4) / 7) == parseInt((now_other + 4) / 7);
}
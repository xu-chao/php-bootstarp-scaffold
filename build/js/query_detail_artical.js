$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../query_index_artical.php",
        async:true,
        dataType : "json",
        success:function(result){
            var artical=[];
            if (result) {
               for(var i=0;i<result.length;i++){
                artical.push(result[i]);
               }
            }
            $("#UserName_index_A1").append(artical[0].UserName);
            $("#Title_index_A1").append(artical[0].Title);
            $("#SmallTitle_index_A1").append(artical[0].SmallTitle);
            $("#WTime_index_A1").append(artical[0].WTime);
            $("#Cate_index_A1").append(artical[0].Cate);
            $("#Context_index_A1").append(artical[0].Context);

            $("#UserName_index_A2").append(artical[1].UserName);
            $("#Title_index_A2").append(artical[1].Title);
            $("#SmallTitle_index_A2").append(artical[1].SmallTitle);
            $("#WTime_index_A2").append(artical[1].WTime);
            $("#Cate_index_A2").append(artical[1].Cate);
            $("#Context_index_A2").append(artical[1].Context);

            $("#UserName_index_A3").append(artical[2].UserName);
            $("#Title_index_A3").append(artical[2].Title);
            $("#SmallTitle_index_A3").append(artical[2].SmallTitle);
            $("#WTime_index_A3").append(artical[2].WTime);
            $("#Cate_index_A3").append(artical[2].Cate);
            $("#Context_index_A3").append(artical[2].Context); 
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
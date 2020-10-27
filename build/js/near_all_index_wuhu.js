$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../near_all_index_wuhu.php",
        async:true,
        success:function(result){
            var near_touyin="";
            var near_yinxiang="";
            var near_denggguang= "";
            var near_qita="";
            result=JSON.parse(result); 
            near_touyin=result[0].mount;
            near_yinxiang=result[1].mount;
            near_dengguang=result[2].mount;
            near_qita=result[3].mount;
            $("#near_touyin").append(near_touyin);
            $("#near_yinxiang").append(near_yinxiang);
            $("#near_dengguang").append(near_dengguang);
            $("#near_qita").append(near_qita);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});
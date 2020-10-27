$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../near_all_index.php",
        async:true,
        success:function(result){
            var near_touyin="";
            var near_yinxiang="";
            var near_denggguang= "";
            var near_jixie="";
            var near_dianqi="";
            var near_ruanjian= "";
            var near_yeya="";
            var near_xiaoguo="";
            var near_diannao="";
            var near_qita="";
            result=JSON.parse(result); 
            near_touyin=result[0].mount;
            near_yinxiang=result[1].mount;
            near_dengguang=result[2].mount;
            near_jixie=result[3].mount;
            near_dianqi=result[4].mount;
            near_ruanjian=result[5].mount;
            near_yeya=result[6].mount;
            near_xiaoguo=result[7].mount;
            near_diannao=result[8].mount;
            near_qita=result[9].mount;
            $("#near_touyin").append(near_touyin);
            $("#near_yinxiang").append(near_yinxiang);
            $("#near_dengguang").append(near_dengguang); 
            $("#near_jixie").append(near_jixie);
            $("#near_dianqi").append(near_dianqi);
            $("#near_ruanjian").append(near_ruanjian);
            $("#near_yeya").append(near_yeya);
            $("#near_xiaoguo").append(near_xiaoguo);
            $("#near_diannao").append(near_diannao);
            $("#near_qita").append(near_qita);  
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});
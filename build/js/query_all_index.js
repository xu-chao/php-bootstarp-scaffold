$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../query_all_index.php",
        async:true,
        success:function(result){
            var city="";
            var park="";
            var touyin="";
            var yinxiang="";
            var denggguang= "";
            var jixie= "";
            var dianqi="";
            var ruanjian="";
            var yeya="";
            var xiaoguo="";
            var diannao="";
            var qita="";
            result=JSON.parse(result); 
            city=result[0].mount;
            park=result[1].mount;
            touyin=result[2].mount;
            yinxiang=result[3].mount;
            dengguang=result[4].mount;
            jixie=result[5].mount;
            dianqi=result[6].mount;
            ruanjian=result[7].mount;
            yeya=result[8].mount;
            xiaoguo=result[9].mount;
            diannao=result[10].mount;
            qita=result[11].mount;
            $("#city_index").append(city);
            $("#park_index").append(park);
            $("#touyin_index").append(touyin);
            $("#yinxiang_index").append(yinxiang);
            $("#dengguang_index").append(dengguang);
            $("#jixie_index").append(jixie);
            $("#dianqi_index").append(dianqi);
            $("#ruanjian_index").append(ruanjian);
            $("#yeya_index").append(yeya);
            $("#xiaoguo_index").append(xiaoguo);
            $("#diannao_index").append(diannao);
            $("#qita_index").append(qita);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});
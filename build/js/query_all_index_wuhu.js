$(document).ready(function(){
    $.ajax({
        type:"get",
        url:"../query_all_index_wuhu.php",
        async:true,
        success:function(result){
            var city="";
            var park="";
            var touyin="";
            var yinxiang="";
            var denggguang= "";
            var qita="";
            result=JSON.parse(result); 
            city=result[0].mount;
            park=result[1].mount;
            touyin=result[2].mount;
            yinxiang=result[3].mount;
            dengguang=result[4].mount;
            qita=result[5].mount;
            $("#city_index").append(city);
            $("#park_index").append(park);
            $("#touyin_index").append(touyin);
            $("#yinxiang_index").append(yinxiang);
            $("#dengguang_index").append(dengguang);
            $("#qita_index").append(qita);   
        },
        error:function(error){
            alert(error.status+""+error.statusText);
        }
    });
});
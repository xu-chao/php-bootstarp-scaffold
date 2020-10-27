		$(function(){
			$('#s1').empty();
			//$('#s1 option').remove();
		    $('#s1').append(new Option('==请选择==',''));
			$.ajax({
                    type:"post",
                    url:"s1.php",
                    success:function(msg){
                        var json= eval('('+msg+')');
                        for(var i=0;i<json.length;i++){
                        	$('#s1').append(new Option(json[i].value));
                        }
                    }
                });
   			$('#s1').change(function(){
   				$('#s2').empty();
   				$('#s2').append(new Option('==请选择==',''));
   				$.ajax({
                    type:"post",
                    url:"s2.php",
                    data:'i='+$('#s1').val(),
                    success:function(msg){
                        var json= eval('('+msg+')');
                        for(var i=0;i<json.length;i++){
                        	$('#s2').append(new Option(json[i].value));
                        }
                    }
                });
   			});
   			/*$('#s2').change(function(){
   				$('#s3').empty();
   				$('#s3').append(new Option('==请选择==',''));
   				$.ajax({
                    type:"post",
                    url:"s3.php",
                    data:'i='+$('#s2').val(),
                    success:function(msg){
                        var json= eval('('+msg+')');
                        for(var i=0;i<json.length;i++){
                        	$('#s3').append(new Option(json[i].value,json[i].key));
                        }
                    }
                });
   			});*/
		});
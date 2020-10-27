		$(function(){
			$('#s11').empty();
			//$('#s11 option').remove();
		    $('#s11').append(new Option('==请选择==',''));
			$.ajax({
                    type:"post",
                    url:"s11.php",
                    success:function(msg){
                        var json= eval('('+msg+')');
                        for(var i=0;i<json.length;i++){
                        	$('#s11').append(new Option(json[i].value,json[i].key));
                        }
                    }
                });
   			$('#s11').change(function(){
   				$('#s22').empty();
   				$('#s22').append(new Option('==请选择==',''));
   				$.ajax({
                    type:"post",
                    url:"s22.php",
                    data:'i='+$('#s11').val(),
                    success:function(msg){
                        var json= eval('('+msg+')');
                        for(var i=0;i<json.length;i++){
                        	$('#s22').append(new Option(json[i].value,json[i].key));
                        }
                    }
                });
   			});
   			$('#s22').change(function(){
   				$('#s33').empty();
   				$('#s33').append(new Option('==请选择==',''));
   				$.ajax({
                    type:"post",
                    url:"s33.php",
                    data:'i='+$('#s22').val(),
                    success:function(msg){
                        var json= eval('('+msg+')');
                        for(var i=0;i<json.length;i++){
                        	$('#s33').append(new Option(json[i].value,json[i].key));
                        }
                    }
                });
   			});
		});
 /* var titles = ['录入时间', '维修开始时间', '问题分类', '问题概要', '详细描述',
                '负责人', '更换零件名称', '零件数量', '更换数量', '维修结束时间',
                '维修持续时间', '维修人员', '原因分析', '备注', '疏散次数',
                '是否解决', '所属项目', '所属公园', '所属城市','问题ID']*/
  $(function () {
    var table = $('#problems').DataTable({
	  dom: "Blfrtip",
	  buttons: [
	  {
	  'extend': 'csv',
	  'text': 'csv',
	  'className': 'btn-sm'
	  },
	  {
	  'extend': 'excel',
	  'text': 'excel',
	  /*'exportOptions': {
	  'modifier': {
	  'page': 'current'
	  }
	  },*/
	  'className': 'btn-sm'
	  },
	  {
	  'extend': 'print',
	  'text': '打印当前页',
	  'className': 'btn-sm'
	  },
      ],	
      "responsive": true,
      "serverside": true,
      "ajax": "../server_processing.php",
      "columns": [
      { "data": "RepairTime" },
	  { "data": "ParkName" },
	  { "data": "ProjectName" },
	  { "data": "Evacuate" },                      
      { "data": "ProblemType" },
      { "data": "Problem" },
      { "data": "Info" },                      
      { "data": "Product" },
      { "data": "ProType" },
      { "data": "Mount" },
	  { "data": "PDTime" },
      { "data": "EndTime" },
      { "data": "LastingTime" },
	  { "data": "Engineer" },
      { "data": "RepairPer" },
      { "data": "Reason" },
      { "data": "Note" },                     
      { "data": "DoSolve" },                     
      { "data": "CityName" },
	  { "data": "PDID"}
      ],
	  "columnDefs": [
      {
        "targets": [ 19 ],
        "visible": false,
        "searchable": false
      },
	  {
        "targets": [ 18 ],
        "visible": false,
        "searchable": false
      }
      ],
      "autoWidth": false,
      "order": [[19, 'desc']],
	  "scrollX": true,
	  //"stateSave": true
    });
	
	var min = $('#reportrange').val('');
    var max = $('#reportrange').val('');
	var min2 = $('#reportrange_right').val('');
    var max2 = $('#reportrange_right').val('');

    $.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var dtime = new Date(data[0]).getTime(); 
        //console.log('min:' + min);
        //console.log('max:' + max);
 
        if ( ( isNaN( min ) && isNaN( max ) ) ||
             ( isNaN( min ) && dtime <= max ) ||
             ( min <= dtime  && isNaN( max ) ) ||
             ( min <= dtime  && dtime <= max ) )
        {
            return true;
        }
        return false;
       }
    );
	
	$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var dtime2 = new Date(data[9]).getTime(); 
        //console.log('min:' + min);
        //console.log('max:' + max);
 
        if ( ( isNaN( min2 ) && isNaN( max2 ) ) ||
             ( isNaN( min2 ) && dtime2 <= max2 ) ||
             ( min2 <= dtime2  && isNaN( max2 ) ) ||
             ( min2 <= dtime2  && dtime2 <= max2 ) )
        {
            return true;
        }
        return false;
       }
    );
 
    $(document).ready(function() {
     var table = $('#problems').DataTable();
     $('#reportrange').change( function() {
        min = new Date($('#reportrange').val().substring(0,10)).getTime();
        max = new Date($('#reportrange').val().substring(16,26)).getTime();
        table.draw();
    });
   });
   
   $(document).ready(function() {
     var table = $('#problems').DataTable();
     $('#reportrange_right').change( function() {
        min2 = new Date($('#reportrange_right').val().substring(0,10)).getTime();
        max2 = new Date($('#reportrange_right').val().substring(16,26)).getTime();
        table.draw();
    });
   });
   
   $(document).ready(function(){		
			//监听DataTable重绘事件（*）
            table.on('draw', function () {
                var body = $(table.table().body());
                body.unhighlight();
                body.highlight(table.search());  //搜索内容高亮显示
            });
		});

    $('#problems tbody').on('click', 'tr', function () {
      if ( $(this).hasClass('selected') ) {
        $(this).removeClass('selected').css("background","white");
      }
      else {
        table.$('tr.selected').removeClass('selected').css("background","white");
        $(this).addClass('selected').css("background","#e4c6d0");
      }
    });

    $("#cancelAdd").on('click', function() {
      console.log('cancelAdd');
      $("#addProblemModal").find('input').val('')
    })    

    $("#btn_add").click(function(){
      console.log('add');
      $("#addProblem").modal()
    });

    $('#btn_edit').click(function () {
      console.log('edit');
      if (table.rows('.selected').data().length) {
        $("#editProblemInfo").modal()
        var rowData = table.rows('.selected').data()[0];
        //console.log(rowData);
        var inputs = $("#editProblemModal").find('input')
        var selects = $("#editProblemModal").find('select')
        $(inputs[0]).val(rowData.PDTime)
        $(inputs[1]).val(rowData.RepairTime)
        $(selects[0]).val(rowData.ProblemType)
        $(inputs[2]).val(rowData.Problem)
        $(inputs[3]).val(rowData.Info)
        $(inputs[4]).val(rowData.Engineer)
        $(inputs[5]).val(rowData.Product)
        $(inputs[6]).val(rowData.ProType)
        $(inputs[7]).val(rowData.Mount)
        $(inputs[8]).val(rowData.EndTime)
        $(inputs[9]).val(rowData.LastingTime)
        $(inputs[10]).val(rowData.RepairPer)
        $(inputs[11]).val(rowData.Reason)
        $(inputs[12]).val(rowData.Note)
        $(selects[1]).val(rowData.Evacuate)
        $(inputs[13]).val(rowData.DoSolve)
        $(inputs[14]).val(rowData.CityName)
        $(inputs[15]).val(rowData.ParkName)
        $(inputs[16]).val(rowData.ProjectName)
        $(inputs[17]).val(rowData.PDID)
        //console.log(rowData[i]);
      } else {
        alert('请选择项目');
      }
    });

    $("#cancelEdit").click(function() {
      console.log('cancelAdd');
      $("#editProblemModal").find('input').val('')
    })

    $('#btn_delete').click(function () {
      if (table.rows('.selected').data().length) {
        $("#deleteProblem").modal()
      } else {
        alert('请选择项目');
      }
    });

    $('#btn_delete').click(function () {
      //table.row('.selected').remove().draw(false);
      console.log('delete');
      if(table.rows('.selected').data().length) {
        $("#deleteProblem").modal()
        var rowData = table.rows('.selected').data()[0];
        //console.log('rowData');
        var inputs = $("#deleteProblemModal").find('input')
        var selects = $("#deleteProblemModal").find('select')
        $(inputs[0]).val(rowData.PDTime)
        $(inputs[1]).val(rowData.RepairTime)
        $(inputs[2]).val(rowData.ProblemType)
        $(inputs[3]).val(rowData.Problem)
        $(inputs[4]).val(rowData.Info)
        $(inputs[5]).val(rowData.Engineer)
        $(inputs[6]).val(rowData.Product)
        $(inputs[7]).val(rowData.ProType)
        $(inputs[8]).val(rowData.Mount)
        $(inputs[9]).val(rowData.EndTime)
        $(inputs[10]).val(rowData.LastingTime)
        $(inputs[11]).val(rowData.RepairPer)
        $(inputs[12]).val(rowData.Reason)
        $(inputs[13]).val(rowData.Note)
        $(inputs[14]).val(rowData.Evacuate)
        $(inputs[15]).val(rowData.DoSolve)
        $(inputs[16]).val(rowData.CityName)
        $(inputs[17]).val(rowData.ParkName)
        $(inputs[18]).val(rowData.ProjectName)
        $(inputs[19]).val(rowData.PDID)
      } else{
        alert("请输入内容");
      }
    });
  })

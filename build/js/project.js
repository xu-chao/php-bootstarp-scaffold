  $(function () {
    var table = $('#projects').DataTable({
	  dom: "Blfrtip",
          buttons: [
            {
              'extend': 'excel',
              'text': 'excel',
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
            "ajax": "../server_processing_Project.php",
            "columns": [
              { "data": "ProjectName" },
              { "data": "ParkName" },
		      { "data": "CityName" },
		      { "data": "ProjectID" }
              ],
            "columnDefs": [
              {
                "targets": [ 3 ],
                "visible": false,
                "searchable": false
              }
              ],
            "scrollX": true,//关闭自动计算列宽
            "order": [[ 3, "desc" ]]
	          //"stateSave": true
        });

    $('#projects tbody').on('click', 'tr', function () {
      if ( $(this).hasClass('selected') ) {
        $(this).removeClass('selected').css("background","white");
      }
      else {
        table.$('tr.selected').removeClass('selected').css("background","white");
        $(this).addClass('selected').css("background","#e4c6d0");
      }
    });

    $('#btn_edit').click(function () {
      console.log('edit');
      if (table.rows('.selected').data().length) {
        $("#editProjectInfo").modal()
        var rowData = table.rows('.selected').data()[0];
        //console.log(rowData);
        var inputs = $("#editProjectModal").find('input')
        //var selects = $("#editProjectModal").find('select')
        $(inputs[0]).val(rowData.ProjectName)
        $(inputs[1]).val(rowData.ParkName)
        $(inputs[2]).val(rowData.CityName)
        $(inputs[3]).val(rowData.ProjectID)
        //console.log(rowData[i]);
      } else {
        alert('请选择项目');
      }
    });

    $("#cancelEdit").click(function() {
      console.log('cancelAdd');
      $("#editProjectModal").find('input').val('')
    })

    $('#btn_delete').click(function () {
      if (table.rows('.selected').data().length) {
        $("#deleteProject").modal()
      } else {
        alert('请选择项目');
      }
    });

    $('#btn_delete').click(function () {
      //table.row('.selected').remove().draw(false);
      console.log('delete');
      if(table.rows('.selected').data().length) {
        $("#deleteProject").modal()
        var rowData = table.rows('.selected').data()[0];
        //console.log('rowData');
        var inputs = $("#deleteProjectModal").find('input')
        //var selects = $("#deleteProjectModal").find('select')
        $(inputs[0]).val(rowData.ProjectName)
        $(inputs[1]).val(rowData.ParkName)
        $(inputs[2]).val(rowData.CityName)
        $(inputs[3]).val(rowData.ProjectID)
      } else{
        alert("请输入内容");
      }
    });
  });


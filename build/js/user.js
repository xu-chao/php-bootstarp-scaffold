  $(function () {
    var table = $('#users').DataTable({
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
            "ajax": "../server_processing_user.php",
            "columns": [
              { "data": "UserName" },
              { "data": "RoleName" },
              { "data": "PremissionInfo" },
              { "data": "StaffID" },
              { "data": "Tel" },
              { "data": "Email" },
              { "data": "CityName" },
              { "data": "RoleID" }
              ],
            "columnDefs": [
              {
                "targets": [ 7 ],
                "visible": false,
                "searchable": false
              },
			  {
                "targets": [ 1 ],
                "visible": false,
                "searchable": false
              },
			  {
                "targets": [ 2 ],
                "visible": false,
                "searchable": false
              }
              ],
            "scrollX": true,//关闭自动计算列宽
            "order": [[ 7, "desc" ]]
	          //"stateSave": true
        });

    $('#users tbody').on('click', 'tr', function () {
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
        $("#editUserInfo").modal()
        var rowData = table.rows('.selected').data()[0];
        //console.log(rowData);
        var inputs = $("#editUserModal").find('input')
        //var selects = $("#editUserModal").find('select')
        $(inputs[0]).val(rowData.UserName)
        $(inputs[1]).val(rowData.RoleName)
        $(inputs[2]).val(rowData.PremissionInfo)
        $(inputs[3]).val(rowData.StaffID)
        $(inputs[4]).val(rowData.Tel)
        $(inputs[5]).val(rowData.Email)
        $(inputs[6]).val(rowData.CityName)
		$(inputs[7]).val(rowData.RoleID)
        //console.log(rowData[i]);
      } else {
        alert('请选择项目');
      }
    });

    $("#cancelEdit").click(function() {
      console.log('cancelAdd');
      $("#editUserModal").find('input').val('')
    })

    $('#btn_delete').click(function () {
      if (table.rows('.selected').data().length) {
        $("#deleteUser").modal()
      } else {
        alert('请选择项目');
      }
    });

    $('#btn_delete').click(function () {
      //table.row('.selected').remove().draw(false);
      console.log('delete');
      if(table.rows('.selected').data().length) {
        $("#deleteUser").modal()
        var rowData = table.rows('.selected').data()[0];
        //console.log('rowData');
        var inputs = $("#deleteUserModal").find('input')
        //var selects = $("#deleteUserModal").find('select')
        $(inputs[0]).val(rowData.UserName)
        $(inputs[1]).val(rowData.RoleName)
        $(inputs[2]).val(rowData.PremissionInfo)
        $(inputs[3]).val(rowData.StaffID)
        $(inputs[4]).val(rowData.Tel)
        $(inputs[5]).val(rowData.Email)
        $(inputs[6]).val(rowData.CityName)
		$(inputs[7]).val(rowData.RoleID)
      } else{
        alert("请输入内容");
      }
    });
  });


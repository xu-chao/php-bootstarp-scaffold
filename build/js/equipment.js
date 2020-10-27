 /* var titles = ['序号', '城市', '公园', '设备名称', '设备类型',
                '设备级别', '型号规格', '使用寿命', '设备重量', '出厂编号',
                '设备制造单位', '制造日期', '注册登记号', '安装日期', '下次检验日期',
                '设备到期日期', '是否在用']*/
  $(function () {
    var table = $('#equipments').DataTable({
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
      "ajax": "../server_processing_equipment.php",
      "columns": [
      { "data": "CityName" },
	  { "data": "ParkName" },
	  { "data": "ProjectName" },                    
      { "data": "EquipmentType" },
      { "data": "EquipmentLevel" },                      
      { "data": "EquipmentModel" },
      { "data": "WorkingLife" },
      { "data": "EquipmentWeight" },
	  { "data": "FactoryNum" },
      { "data": "Manufactor" },
      { "data": "ProductionDate" },
	  { "data": "RegistrationNum" },
      { "data": "InstallDate" },
      { "data": "NextDate" },
      { "data": "EndDate" },                     
      { "data": "UseOrNo" },
      { "data": "ID" }
      ],
	  "columnDefs": [
      {
        "targets": [ 16 ],
        "visible": false,
        "searchable": false
      },
	  {
        "targets": [ 0 ],
        "visible": false,
        "searchable": false
      }
      ],
      "autoWidth": false,
      "order": [[16, 'desc']],
	    "scrollX": true,
	    //"stateSave": true
    });

    $('#equipments tbody').on('click', 'tr', function () {
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
      $("#addEquipmentModal").find('input').val('')
    })    

    $("#btn_add").click(function(){
      console.log('add');
      $("#addEquipment").modal()
    });

    $('#btn_edit').click(function () {
      console.log('edit');
      if (table.rows('.selected').data().length) {
        $("#editEquipmentInfo").modal()
        var rowData = table.rows('.selected').data()[0];
        //console.log(rowData);
        var inputs = $("#editEquipmentModal").find('input')
        //var selects = $("#editEquipmentModal").find('select')
        $(inputs[0]).val(rowData.CityName)
        $(inputs[1]).val(rowData.ParkName)
        $(inputs[2]).val(rowData.ProjectName)
        $(inputs[3]).val(rowData.EquipmentType)
        $(inputs[4]).val(rowData.EquipmentLevel)
        $(inputs[5]).val(rowData.EquipmentModel)
        $(inputs[6]).val(rowData.WorkingLife)
        $(inputs[7]).val(rowData.EquipmentWeight)
        $(inputs[8]).val(rowData.FactoryNum)
        $(inputs[9]).val(rowData.Manufactor)
        $(inputs[10]).val(rowData.ProductionDate)
        $(inputs[11]).val(rowData.RegistrationNum)
        $(inputs[12]).val(rowData.InstallDate)
        $(inputs[13]).val(rowData.NextDate)
        $(inputs[14]).val(rowData.EndDate)
        $(inputs[15]).val(rowData.UseOrNo)
        $(inputs[16]).val(rowData.ID)
        //console.log(rowData[i]);
      } else {
        alert('请选择详细信息');
      }
    });

    $("#cancelEdit").click(function() {
      console.log('cancelAdd');
      $("#editEquipmentModal").find('input').val('')
    })

    $('#btn_delete').click(function () {
      if (table.rows('.selected').data().length) {
        $("#deleteEquipment").modal()
      } else {
        alert('请选择详细信息');
      }
    });

    $('#btn_delete').click(function () {
      //table.row('.selected').remove().draw(false);
      console.log('delete');
      if(table.rows('.selected').data().length) {
        $("#deleteEquipment").modal()
        var rowData = table.rows('.selected').data()[0];
        //console.log('rowData');
        var inputs = $("#deleteEquipmentModal").find('input')
        var selects = $("#deleteEquipmentModal").find('select')
        $(inputs[0]).val(rowData.CityName)
        $(inputs[1]).val(rowData.ParkName)
        $(inputs[2]).val(rowData.ProjectName)
        $(inputs[3]).val(rowData.EquipmentType)
        $(inputs[4]).val(rowData.EquipmentLevel)
        $(inputs[5]).val(rowData.EquipmentModel)
        $(inputs[6]).val(rowData.WorkingLife)
        $(inputs[7]).val(rowData.EquipmentWeight)
        $(inputs[8]).val(rowData.FactoryNum)
        $(inputs[9]).val(rowData.Manufactor)
        $(inputs[10]).val(rowData.ProductionDate)
        $(inputs[11]).val(rowData.RegistrationNum)
        $(inputs[12]).val(rowData.InstallDate)
        $(inputs[13]).val(rowData.NextDate)
        $(inputs[14]).val(rowData.EndDate)
        $(inputs[15]).val(rowData.UseOrNo)
        $(inputs[16]).val(rowData.ID)
      } else{
        alert("请选择详细信息");
      }
    });
  })

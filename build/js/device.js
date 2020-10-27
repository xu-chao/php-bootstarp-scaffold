 /* var titles = ['序号', '城市', '公园', '项目', '系统类型', '系统名称',
                '规格型号', '数量', '部门', '备注', '提单状态',
                '提单日期', '需到货日', '是否到货', '申请人', '采购单号', '采购人',
                '合同状态', '合同厂家', '生产状态', '地址']*/
  $(function () {
    var table = $('#devices').DataTable({
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
      "ajax": "../server_processing_device.php",
      "columns": [
	  { "data": "Arrival" },
      { "data": "BillState" },
	    { "data": "ParkName" },
	    { "data": "ProjectName" },                    
      { "data": "SysType" },
      { "data": "EquName" },                      
      { "data": "Address" },	  
      { "data": "Mount" },
      { "data": "Unit"},
      { "data": "EquType" },	  
      { "data": "Department" },
	    { "data": "Beizhu" },
      { "data": "BillDate" },
	    { "data": "Advanced" },     
      { "data": "Applicant" },
      { "data": "OddNum" },                     
      { "data": "Purchaser" },
      { "data": "ContractStatus" },
      { "data": "Whip" },
      { "data": "ProductionState" },
	  { "data": "CityName" },
      { "data": "ID" }
      ],
	  "columnDefs": [
      {
        "targets": [ 21 ],
        "visible": false,
        "searchable": false
      },
	  {
        "targets": [ 20 ],
        "visible": false,
        "searchable": false
      },
	  {
        "targets": [ 0 ],
        "createdCell": function (td, cellData, rowData, row, col) {
            if (cellData == "已到货"){
            $(td).css('background-color', 'lightgreen');
            }else if(cellData == "未到货"){
            $(td).css('background-color', 'yellow');  
            }
        }
      },
	  {
        "targets": [ 1 ],
        "createdCell": function (td, cellData, rowData, row, col) {
            if (cellData == "已提单"){
            $(td).css('color', '#b25d25');
            }else if(cellData == "未提单"){
            $(td).css('color', '#3d3b4f');  
            }else if(cellData == "新增"){
            $(td).css('color', '#ff4c00');  
            }
        }
      }
      ],
      "autoWidth": false,
      "order": [[21, 'desc']],
	    "scrollX": true,
	    //"stateSave": true
    });

    $('#devices tbody').on('click', 'tr', function () {
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
      $("#addDeviceModal").find('input').val('')
    })    

    $("#btn_add").click(function(){
      console.log('add');
      $("#addDevice").modal()
    });

    $('#btn_edit').click(function () {
      console.log('edit');
      if (table.rows('.selected').data().length) {
        $("#editDeviceInfo").modal()
        var rowData = table.rows('.selected').data()[0];
        //console.log(rowData);
        var inputs = $("#editDeviceModal").find('input')
        var selects = $("#editDeviceModal").find('select')
        var textareas = $("#editDeviceModal").find('textarea')
        $(inputs[0]).val(rowData.CityName)
        $(inputs[1]).val(rowData.ParkName)
        $(inputs[2]).val(rowData.ProjectName)
        $(inputs[3]).val(rowData.SysType)
        $(inputs[4]).val(rowData.EquName)
        $(inputs[5]).val(rowData.EquType)
        $(inputs[6]).val(rowData.Mount)
        $(inputs[7]).val(rowData.Unit)
        $(selects[0]).val(rowData.Department)
        $(textareas[0]).val(rowData.Beizhu)
        $(selects[1]).val(rowData.BillState)
        $(inputs[8]).val(rowData.BillDate)
        $(inputs[9]).val(rowData.Advanced)
        $(selects[2]).val(rowData.Arrival)
        $(inputs[10]).val(rowData.Applicant)
        $(inputs[11]).val(rowData.OddNum)
        $(inputs[12]).val(rowData.Purchaser)
        $(inputs[13]).val(rowData.ContractStatus)
        $(inputs[14]).val(rowData.Whip)
        $(inputs[15]).val(rowData.ProductionState)
        $(selects[3]).val(rowData.Address)
        $(inputs[16]).val(rowData.ID)
        //console.log(rowData[i]);
      } else {
        alert('请选择详细信息');
      }
    });

    $("#cancelEdit").click(function() {
      console.log('cancelAdd');
      $("#editDeviceModal").find('input').val('')
    })

    $('#btn_delete').click(function () {
      if (table.rows('.selected').data().length) {
        $("#deleteDevice").modal()
      } else {
        alert('请选择详细信息');
      }
    });

    $('#btn_delete').click(function () {
      //table.row('.selected').remove().draw(false);
      console.log('delete');
      if(table.rows('.selected').data().length) {
        $("#deleteDevice").modal()
        var rowData = table.rows('.selected').data()[0];
        //console.log('rowData');
        var inputs = $("#deleteDeviceModal").find('input')
        var selects = $("#deleteDeviceModal").find('select')
        var textareas = $("#deleteDeviceModal").find('textarea')
        $(inputs[0]).val(rowData.CityName)
        $(inputs[1]).val(rowData.ParkName)
        $(inputs[2]).val(rowData.ProjectName)
        $(inputs[3]).val(rowData.SysType)
        $(inputs[4]).val(rowData.EquName)
        $(inputs[5]).val(rowData.EquType)
        $(inputs[6]).val(rowData.Mount)
        $(inputs[7]).val(rowData.Unit)
        $(selects[0]).val(rowData.Department)
        $(textareas[0]).val(rowData.Beizhu)
        $(selects[1]).val(rowData.BillState)
        $(inputs[8]).val(rowData.BillDate)
        $(inputs[9]).val(rowData.Advanced)
        $(selects[2]).val(rowData.Arrival)
        $(inputs[10]).val(rowData.Applicant)
        $(inputs[11]).val(rowData.OddNum)
        $(inputs[12]).val(rowData.Purchaser)
        $(inputs[13]).val(rowData.ContractStatus)
        $(inputs[14]).val(rowData.Whip)
        $(inputs[15]).val(rowData.ProductionState)
        $(selects[3]).val(rowData.Address)
        $(inputs[16]).val(rowData.ID)
      } else{
        alert("请选择详细信息");
      }
    });
  })

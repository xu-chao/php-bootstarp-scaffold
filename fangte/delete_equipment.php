    <div class="modal fade" id="deleteEquipment" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">请仔细核查，确认要删除吗？</h4>
          </div>
          <div id="deleteEquipmentModal" class="modal-body">
          <form class="form-horizontal form-label-left"
                action="../delete_info.php" method="post">
              <div class="item form-group">
                <label for="s11" class="control-label col-md-3 col-sm-3 col-xs-12">所属城市
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="s11" type="text" class="form-control" 
                      readonly="readonly" required="required" name="CityName">
                    </div>
              </div>
              <div class="item form-group">
                <label for="s22" class="control-label col-md-3 col-sm-3 col-xs-12">所属公园
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="s22" type="text" class="form-control" 
                       readonly="readonly" required="required" name="ParkName">
                    </div>
              </div>
              <div class="item form-group">
                <label for="s33" class="control-label col-md-3 col-sm-3 col-xs-12">所属设备项目
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="s33" type="text" class="form-control" 
                       readonly="readonly" required="required" name="ProjectName">
                    </div>
              </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">设备类型
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：陀螺类"
                          required="required" name="EquipmentType" readonly="readonly">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">设备级别
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：A级"
                          required="required" name="EquipmentLevel" readonly="readonly">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">型号规格
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：JS-I"
                          required="required" name="EquipmentModel" readonly="readonly">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">使用寿命
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：15年"
                          required="required" name="WorkingLife" readonly="readonly">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">设备重量
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control"
                          required="required" name="EquipmentWeight" readonly="readonly">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">出厂编号
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：20108025"
                          required="required" name="FactoryNum" readonly="readonly">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">设备制造单位
                      <span class="required">:</span></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：20108025"
                          required="required" name="Manufactor" readonly="readonly">
                       </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">制造日期
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker5">
                            <input type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD" name="ProductionDate" readonly="readonly" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">注册登记号
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：64104302002011060001"
                          required="required" name="RegistrationNum" readonly="readonly">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">安装日期
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker6">
                            <input type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD HH:MM" name="InstallDate" readonly="readonly" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">下次检验日期
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker7">
                            <input type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD HH:MM" name="NextDate" readonly="readonly" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">设备到期日期
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker8">
                            <input type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD HH:MM" name="EndDate" readonly="readonly" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">是否在用
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：在用"
                          required="required" name="UseOrNo" readonly="readonly">
                        </div>
                      </div>
              <div class="item form-group hidden">
                <label for="editID" class="control-label col-md-3 col-sm-3 col-xs-12">ID
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="editID" type="text" class="form-control" 
                       readonly="readonly" required="required" name="ID" readonly="readonly">
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button id="delete" type="submit" class="btn btn-danger">删除</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
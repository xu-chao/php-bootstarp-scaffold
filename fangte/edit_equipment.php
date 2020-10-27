      <div class="modal fade" id="editEquipmentInfo" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">修改数据内容</h4>
            </div>
            <div id="editEquipmentModal" class="modal-body">
              <form class="form-horizontal form-label-left"
               action="../update_info.php" method="post">
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
                       required="required" name="ProjectName">
                    </div>
              </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">设备类型
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：陀螺类"
                          required="required" name="EquipmentType">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">设备级别
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：A级"
                          required="required" name="EquipmentLevel">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">型号规格
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：JS-I"
                          required="required" name="EquipmentModel">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">使用寿命
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：15年"
                          required="required" name="WorkingLife">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">设备重量
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control"
                          required="required" name="EquipmentWeight">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">出厂编号
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：20108025"
                          required="required" name="FactoryNum">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">设备制造单位
                      <span class="required">:</span></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：20108025"
                          required="required" name="Manufactor">
                       </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">制造日期
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker5">
                            <input type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD" name="ProductionDate" />
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
                          required="required" name="RegistrationNum">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">安装日期
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker6">
                            <input type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD HH:MM" name="InstallDate" />
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
                            placeholder="YYYY-MM-DD HH:MM" name="NextDate" />
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
                            placeholder="YYYY-MM-DD HH:MM" name="EndDate" />
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
                          required="required" name="UseOrNo">
                        </div>
                      </div>
              <div class="item form-group hidden">
                <label for="editID" class="control-label col-md-3 col-sm-3 col-xs-12">ID
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="editID" type="text" class="form-control" 
                       readonly="readonly" required="required" name="ID">
                    </div>
              </div>
            </div>
            <div class="modal-footer">
              <div class="center-block">
                <button id="cancelEdit" type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button id="resetAdd" type="reset" class="btn btn-primary">重置</button>
                <button id="saveEdit" type="submit" class="btn btn-success">保存</button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
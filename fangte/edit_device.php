      <div class="modal fade" id="editDeviceInfo" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">修改数据内容</h4>
            </div>
            <div id="editDeviceModal" class="modal-body">
              <form class="form-horizontal form-label-left"
               action="../update_device.php" method="post">
              <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">所属城市
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control"
                           readonly="readonly" required="required" name="CityName">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">所属公园
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control"
                           readonly="readonly" required="required" name="ParkName">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">所属项目
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control"
                           readonly="readonly" required="required" name="ProjectName">
                          </div>
                        </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">系统类型
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control"
                           required="required" name="SysType">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">系统名称
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：投影机"
                          required="required" name="EquName">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">规格型号
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：松下 PT-XW3360STC"
                          required="required" name="EquType">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">数量
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：1"
                          required="required" data-validate-minmax="1,200" name="Mount">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">单位
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：台"
                          required="required" name="Unit">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">部门
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1"
                           required="required" name="Department">
                            <option value="S">S</option>
                            <option value="G">G</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">备注
                      <span class="required">:</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" name="Beizhu" class="form-control col-md-6 col-sm-6 col-xs-12" placeholder="例如：祭坛补天1"></textarea>
                        </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">提单状态
                      <span class="required">:</span></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1"
                           required="required" name="BillState">
                            <option value="已提单">已提单</option>
                            <option value="未提单">未提单</option>
                            <option value="新增">新增</option>
                          </select>
                       </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">提单日期
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker3">
                            <input type="date" class="form-control" required="required"
                            placeholder="YYYY-MM-DD" name="BillDate" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">需到货日
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker4">
                            <input type="date" class="form-control" required="required"
                            placeholder="YYYY-MM-DD" name="Advanced" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">是否到货
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1"
                           required="required" name="Arrival">
                            <option value="已到货">已到货</option>
                            <option value="未到货">未到货</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">申请人
                        <span class="required">:</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：张三"
                           name="Applicant">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">采购单号
                        <span class="required">:</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：QGSZN170622017"
                           name="OddNum">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">采购人
                        <span class="required">:</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：李四"
                           name="Purchaser">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">合同状态
                        <span class="required">:</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：OK"
                           name="ContractStatus">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">合同厂家
                        <span class="required">:</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：北京捷成"
                          name="Whip">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">生产状态
                        <span class="required">:</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="例如：OK"
                          name="ProductionState">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">地址
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1"
                           required="required" name="Address">
                            <option value="现场">现场</option>
                            <option value="芜湖">芜湖</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="ID" class="col-sm-2 control-label hidden">ID
                        <span class="required"></span>*</label>
                        <div class="col-sm-10">
                          <input class="form-control hidden" id="ID" type="text" readonly="readonly" name="ID">
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
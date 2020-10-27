      <div class="modal fade" id="editProblemInfo" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">修改数据内容</h4>
            </div>
            <div id="editProblemModal" class="modal-body">
              <form class="form-horizontal form-label-left"
               action="../update_problem.php" method="post">
              <div class="item form-group">
                <label for="editPDTime" class="control-label col-md-3 col-sm-3 col-xs-12">录入时间
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker4">
                          <input id="editPDTime" type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD HH:MM" name="PDTime" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
              </div>
              <div class="item form-group">
                <label for="editRepairTime" class="control-label col-md-3 col-sm-3 col-xs-12">设备故障时间
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker5">
                          <input id="editRepairTime" type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD HH:MM" name="RepairTime" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
              </div>
              <div class="form-group">
                <label for="editProblemType" class="control-label col-md-3 col-sm-3 col-xs-12">问题分类
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select id="editProblemType" class="select2_single form-control" tabindex="-1"
                       required="required" name="ProblemType">
                        <option value="投影">投影</option>
                        <option value="音响">音响</option>
                        <option value="灯光">灯光</option>
                        <option value="特技">特技</option>
                        <option value="室外">室外</option>
                        <option value="其他">其他</option>
                      </select>
                    </div>
              </div>
              <div class="item form-group">
                <label for="editProblem" class="control-label col-md-3 col-sm-3 col-xs-12">问题概要
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="editProblem" type="text" class="form-control" required="required" name="Problem">
                    </div>
              </div>
              <div class="form-group">
                <label for="editInfo" class="control-label col-md-3 col-sm-3 col-xs-12">详细描述
                <span required="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input class="form-control" id="editInfo" type="text"
                  required="required" name="Info">
                </div>
              </div>
              <div class="item form-group">
                <label for="editEngineer" class="control-label col-md-3 col-sm-3 col-xs-12">负责人
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="editEngineer" type="text" class="form-control" required="required" name="Engineer">
                    </div>
              </div>
              <div class="item form-group">
                <label for="editProduct" class="control-label col-md-3 col-sm-3 col-xs-12">更换零件名称
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="editProduct" type="text" class="form-control" required="required" name="Product">
                    </div>
              </div>
              <div class="item form-group">
                <label for="editProType" class="control-label col-md-3 col-sm-3 col-xs-12">零件型号
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="editProType" type="text" class="form-control" required="required" name="ProType">
                    </div>
              </div>
              <div class="item form-group">
                <label for="editMount" class="control-label col-md-3 col-sm-3 col-xs-12">更换数量
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="editMount" type="text" class="form-control" required="required" name="Mount">
                    </div>
              </div>
              <div class="item form-group">
                <label for="editEndTime" class="control-label col-md-3 col-sm-3 col-xs-12">维修结束时间
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker6">
                          <input id="editEndTime" type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD HH:MM" name="EndTime" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
              </div>
              <div class="item form-group">
                <label for="editLastingTime" class="control-label col-md-3 col-sm-3 col-xs-12">维修持续时间
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="editLastingTime" type="text" class="form-control" required="required" name="LastingTime">
                    </div>
              </div>
              <div class="item form-group">
                <label for="editRepairPer" class="control-label col-md-3 col-sm-3 col-xs-12">维修人员
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="editRepairPer" type="text" class="form-control" required="required" name="RepairPer">
                    </div>
              </div>
              <div class="item form-group">
                <label for="editReason" class="control-label col-md-3 col-sm-3 col-xs-12">原因分析
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="editReason" type="text" class="form-control"  required="required" name="Reason">
                    </div>
              </div>
              <div class="item form-group">
                <label for="editNote" class="control-label col-md-3 col-sm-3 col-xs-12">备注
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="editNote" type="text" class="form-control" required="required" name="Note">
                    </div>
              </div>
              <div class="item form-group">
                <label for="editEvacuate" class="control-label col-md-3 col-sm-3 col-xs-12">是否疏散
                  <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="editEvacuate" class="select2_single form-control" tabindex="-1"
                              required="required" name="Evacuate">
                            <option value="是">是</option>
                            <option value="否">否</option>
                        </select>
                      </div>
              </div>
              <div class="item form-group">
                        <label for="DoSolve" class="control-label col-md-3 col-sm-3 col-xs-12">中断时长
                          <span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
						    <input id="RepairPer" type="text" class="form-control" placeholder="例如：10"
                             required="required" name="DoSolve">
                            <!--<select id="DoSolve" class="select2_single form-control" tabindex="-1"
                              required="required" name="DoSolve">
                              <option value="1">是</option>
                              <option value="2">否</option>
                             </select>-->
                          </div>
                      </div>
              <div class="item form-group">
                <label for="s11" class="control-label col-md-3 col-sm-3 col-xs-12">所属城市
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="s11" type="text" class="form-control" 
                      readonly="readonly" required="required" name="CityName">
                    </div>
              </div>
              <!-- <div class="item form-group">
                <label for="s11" class="control-label col-md-3 col-sm-3 col-xs-12">所属城市
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select id="s11" class="select2_single form-control" tabindex="-1"
                       required="required" name="CitytName">
                      </select>
                    </div>
              </div> -->
              <div class="item form-group">
                <label for="s22" class="control-label col-md-3 col-sm-3 col-xs-12">所属公园
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="s22" type="text" class="form-control" 
                       readonly="readonly" required="required" name="ParkName">
                    </div>
              </div>
              <!-- <div class="item form-group">
                <label for="s22" class="control-label col-md-3 col-sm-3 col-xs-12">所属公园
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select id="s22" class="select2_single form-control" tabindex="-1"
                       required="required" name="ParktName">
                      </select>
                    </div>
              </div> -->
              <!-- <div class="item form-group">
                <label for="s33" class="control-label col-md-3 col-sm-3 col-xs-12">所属项目
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select id="s33" class="select2_single form-control" tabindex="-1"
                       required="required" name="ProjectName">
                      </select>
                    </div>
              </div> -->
              <div class="item form-group">
                <label for="s33" class="control-label col-md-3 col-sm-3 col-xs-12">所属项目
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="s33" type="text" class="form-control" 
                       readonly="readonly" required="required" name="ProjectName">
                    </div>
              </div>
              <div class="item form-group hidden">
                <label for="editPDID" class="control-label col-md-3 col-sm-3 col-xs-12">问题ID
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="editPDID" type="text" class="form-control" 
                       readonly="readonly" required="required" name="PDID">
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
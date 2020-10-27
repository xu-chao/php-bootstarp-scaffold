    <div class="modal fade" id="deleteProblem" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">请仔细核查，确认要删除吗？</h4>
          </div>
          <div id="deleteProblemModal" class="modal-body">
          <form class="form-horizontal form-label-left"
                action="../delete_problem.php" method="post">
              <div class="item form-group">
                <label for="deletePDTime" class="control-label col-md-3 col-sm-3 col-xs-12">录入时间
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker4">
                          <input id="deletePDTime" type="datetime" class="form-control" required="required" placeholder="YYYY-MM-DD HH:MM"  readonly="readonly" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
              </div>
              <div class="item form-group">
                <label for="deleteRepairTime" class="control-label col-md-3 col-sm-3 col-xs-12">维修开始时间
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker5">
                          <input id="deleteRepairTime" type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD HH:MM" readonly="readonly" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
              </div>
              <!-- <div class="form-group">
                <label for="deleteProblemType" class="control-label col-md-3 col-sm-3 col-xs-12">问题分类
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select id="deleteProblemType" class="select2_single form-control" tabindex="-1"
                       required="required" readonly="readonly">
                        <option value="投影">投影</option>
                        <option value="音响">音响</option>
                        <option value="灯光">灯光</option>
                        <option value="特技">特技</option>
                        <option value="室外">室外</option>
                        <option value="其他">其他</option>
                      </select>
                    </div>
              </div> -->
              <div class="form-group">
                <label for="deleteProblemType" class="control-label col-md-3 col-sm-3 col-xs-12">问题分类
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="deleteProblemType" type="text" class="form-control"
                       readonly="readonly" required="required" >
                    </div>
              </div>
              <div class="item form-group">
                <label for="deleteProblem" class="control-label col-md-3 col-sm-3 col-xs-12">问题概要
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="deleteProblem" type="text" class="form-control" required="required" readonly="readonly">
                    </div>
              </div>
              <div class="form-group">
                <label for="deleteInfo" class="control-label col-md-3 col-sm-3 col-xs-12">详细描述
                <span required="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input class="form-control" id="editInfo" type="text"
                  required="required" readonly="readonly">
                </div>
              </div>
              <div class="item form-group">
                <label for="deleteEngineer" class="control-label col-md-3 col-sm-3 col-xs-12">负责人
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="deleteEngineer" type="text" class="form-control" required="required" readonly="readonly">
                    </div>
              </div>
              <div class="item form-group">
                <label for="deleteProduct" class="control-label col-md-3 col-sm-3 col-xs-12">更换零件名称
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="deleteProduct" type="text" class="form-control" required="required" readonly="readonly">
                    </div>
              </div>
              <div class="item form-group">
                <label for="deleteProType" class="control-label col-md-3 col-sm-3 col-xs-12">零件型号
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="deleteProType" type="text" class="form-control" required="required" readonly="readonly">
                    </div>
              </div>
              <div class="item form-group">
                <label for="deleteMount" class="control-label col-md-3 col-sm-3 col-xs-12">更换数量
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="deleteMount" type="text" class="form-control" required="required" readonly="readonly">
                    </div>
              </div>
              <div class="item form-group">
                <label for="deleteEndTime" class="control-label col-md-3 col-sm-3 col-xs-12">维修结束时间
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker6">
                          <input id="deleteEndTime" type="datetime" class="form-control" required="required" placeholder="YYYY-MM-DD HH:MM" readonly="readonly" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
              </div>
              <div class="item form-group">
                <label for="deleteLastingTime" class="control-label col-md-3 col-sm-3 col-xs-12">维修持续时间
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="deleteLastingTime" type="text" class="form-control" required="required" readonly="readonly">
                    </div>
              </div>
              <div class="item form-group">
                <label for="deleteRepairPer" class="control-label col-md-3 col-sm-3 col-xs-12">维修人员
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="deleteRepairPer" type="text" class="form-control" required="required" readonly="readonly">
                    </div>
              </div>
              <div class="item form-group">
                <label for="deleteReason" class="control-label col-md-3 col-sm-3 col-xs-12">原因分析
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="deleteReason" type="text" class="form-control" required="required" readonly="readonly">
                    </div>
              </div>
              <div class="item form-group">
                <label for="deleteNote" class="control-label col-md-3 col-sm-3 col-xs-12">备注
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="deleteNote" type="text" class="form-control" required="required" readonly="readonly">
                    </div>
              </div>
              <!-- <div class="item form-group">
                <label for="deleteEvacuate" class="control-label col-md-3 col-sm-3 col-xs-12">是否疏散
                  <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="deleteEvacuate" class="select2_single form-control" tabindex="-1"
                              required="required" readonly="readonly">
                            <option value="1">是</option>
                            <option value="2">否</option>
                        </select>
                      </div>
              </div> -->
              <div class="item form-group">
                <label for="deleteEvacuate" class="control-label col-md-3 col-sm-3 col-xs-12">是否疏散
                  <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="deleteEvacuate" type="text" class="form-control"
                         readonly="readonly" required="required" >
                      </div>
              </div>
              <!-- <div class="item form-group">
                <label for="deleteDoSolve" class="control-label col-md-3 col-sm-3 col-xs-12">是否解决
                  <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="deleteDoSolve" class="select2_single form-control" tabindex="-1"
                              required="required" readonly="readonly">
                            <option value="1">是</option>
                            <option value="2">否</option>
                        </select>
                      </div>
              </div> -->
              <div class="item form-group">
                <label for="deleteDoSolve" class="control-label col-md-3 col-sm-3 col-xs-12">是否解决
                  <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="deleteDoSolve" type="text" class="form-control"
                         readonly="readonly" required="required" >
                      </div>
              </div>
              <div class="item form-group">
                <label for="deleteCityName" class="control-label col-md-3 col-sm-3 col-xs-12">所属城市
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="deleteCityName" type="text" class="form-control" 
                      readonly="readonly" required="required">
                    </div>
              </div>
              <div class="item form-group">
                <label for="deleteParkName" class="control-label col-md-3 col-sm-3 col-xs-12">所属公园
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="deleteParkName" type="text" class="form-control" 
                       readonly="readonly" required="required">
                    </div>
              </div>
              <div class="item form-group">
                <label for="deleteProjectName" class="control-label col-md-3 col-sm-3 col-xs-12">所属项目
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="deleteProjectName" type="text" class="form-control" 
                       readonly="readonly" required="required">
                    </div>
              </div>
              <div class="item form-group">
                <label for="deletePDID" class="control-label col-md-3 col-sm-3 col-xs-12 hidden">问题ID
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="deletePDID" type="text" class="form-control hidden" 
                       readonly="readonly" required="required" name="PDID">
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
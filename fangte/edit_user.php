      <div class="modal fade" id="editUserInfo" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">修改个人信息</h4>
            </div>
            <div id="editUserModal" class="modal-body">
              <form class="form-horizontal form-label-left"
               action="#" method="post">         
              <div class="item form-group">
                <label for="editUserTime" class="control-label col-md-3 col-sm-3 col-xs-12">入职时间
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date">
                          <input id="editUserTime" type="datetime" class="form-control" required="required" value="2018-07-16" name="RepairTime" readonly="readonly" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
              </div>
              <div class="form-group">
                <label for="editProblemType" class="control-label col-md-3 col-sm-3 col-xs-12">所在公司
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select id="editProblemType" class="select2_single form-control" tabindex="-1"
                       required="required" name="ProblemType">
                        <option value="投影">深圳智能</option>
                        <option value="音响">芜湖智能</option>
                        <option value="灯光">方特文化</option>
                        <option value="特技">研究院</option>
                      </select>
                    </div>
              </div>
              <div class="item form-group">
                <label for="editProblem" class="control-label col-md-3 col-sm-3 col-xs-12">角色
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="editProblem" type="text" class="form-control" required="required" name="Problem" value="超级管理员" readonly="readonly">
                    </div>
              </div>
              <div class="item form-group">
                <label for="editProblem" class="control-label col-md-3 col-sm-3 col-xs-12">工号
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="editProblem" type="text" class="form-control" required="required" name="Problem" value="185506" readonly="readonly">
                    </div>
              </div>
              <div class="form-group">
                <label for="editInfo" class="control-label col-md-3 col-sm-3 col-xs-12">职位
                <span required="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input class="form-control" id="editInfo" type="text"
                  required="required" name="Info" value="无">
                </div>
              </div>
              <div class="item form-group">
                <label for="editEngineer" class="control-label col-md-3 col-sm-3 col-xs-12">手机号码
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="editEngineer" type="text" class="form-control" required="required" name="Engineer" value="13812345678">
                    </div>
              </div>
              <div class="item form-group">
                <label for="editProduct" class="control-label col-md-3 col-sm-3 col-xs-12">邮箱
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="editProduct" type="text" class="form-control" required="required" name="Product" value="znxuchao@hytch.com">
                    </div>
              </div>
              <div class="item form-group">
                <label for="editProType" class="control-label col-md-3 col-sm-3 col-xs-12">所在城市
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="editProType" type="text" class="form-control" required="required" name="ProType" value="芜湖" readonly="readonly">
                    </div>
              </div>
              <div class="item form-group">
                <label for="editMount" class="control-label col-md-3 col-sm-3 col-xs-12">所在公园
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="editMount" type="text" class="form-control" required="required" name="Mount" value="无">
                    </div>
              </div>
            </div>
            <div class="modal-footer">
              <div class="center-block">
                <button id="cancelEditUser" type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button id="resetAddUser" type="reset" class="btn btn-primary">重置</button>
                <button id="saveEditUser" type="submit" class="btn btn-success">保存</button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
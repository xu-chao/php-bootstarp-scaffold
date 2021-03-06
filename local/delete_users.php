    <div class="modal fade" id="deleteUser" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">请仔细核查，确认要删除吗？</h4>
          </div>
          <div id="deleteUserModal" class="modal-body">
          <form class="form-horizontal form-label-left"
                action="../delete_user.php" method="post">
              <div class="item form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12">姓名
                         <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="text" class="form-control" placeholder="例如：张三"
                           required="required" name="UserName" readonly="readonly">
                         </div>
                       </div>
              <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">角色名称
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly"
                          placeholder="默认技术中心" required="required" name="RoleName" value="技术中心">
                        </div>
                      </div>
              <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">角色信息
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly"
                          placeholder="部分权限查看录入" required="required"  
                          name="PremissionInfo" value="部分权限查看录入">
                        </div>
                      </div>
              <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">工号
                          <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="number" class="form-control" placeholder="例如：185506"
                               required="required" data-validate-minmax="1,999999" name="StaffID"
                               readonly="readonly">
                            </div>
                      </div>
              <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telephone
                          <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" class="form-control" placeholder="例如：13812345678"
                              required="required" data-validate-length-range="11,11" name="Tel" readonly="readonly">
                            </div>
                      </div>
              <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Email
                      <span class="required">*</span></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" name="email" required="required" class="form-control" placeholder="例如：111@qq.com" readonly="readonly">
                       </div>
                      </div>
              <div class="item form-group">
                <label for="s11" class="control-label col-md-3 col-sm-3 col-xs-12">所属城市
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" class="form-control" readonly="readonly" 
                      readonly="readonly" required="required" name="CityName">
                    </div>
              </div>
			  <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12 hidden">用户ID
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" class="form-control hidden" 
                       required="required" name="RoleID" readonly="readonly">
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
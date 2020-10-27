    <div class="modal fade" id="deleteProject" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">请仔细核查，确认要删除吗？</h4>
          </div>
          <div id="deleteProjectModal" class="modal-body">
          <form class="form-horizontal form-label-left"
                action="../delete_project.php" method="post">
              <div class="item form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12">项目
                         <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="text" class="form-control" readonly="readonly" 
                           required="required" name="ProjectName">
                         </div>
                       </div>
              <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">所属公园
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly"
                           required="required" name="ParkName">
                        </div>
                      </div>
              <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">所属城市
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly"
                           required="required" name="CityName">
                        </div>
                      </div>
			  <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12 hidden">项目ID
                  <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" class="form-control hidden"
                       required="required" name="ProjectID" readonly="readonly">
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
    <div class="modal fade" id="addProblem" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">添加数据</h4>
          </div>
          <div id="addProblemModal" class="modal-body">
            <form class="form-horizontal form-label-left" 
             action="../insert_problem.php" method="post">
                <div class="item form-group">
                  <label for="PDTime" class="control-label col-md-3 col-sm-3 col-xs-12">录入时间
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker3">
                            <input id="PDTime" type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD HH:MM" name="PDTime" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="RepairTime" class="control-label col-md-3 col-sm-3 col-xs-12">设备故障时间
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker">
                            <input id="RepairTime" type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD HH:MM" name="RepairTime" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="ProblemType" class="control-label col-md-3 col-sm-3 col-xs-12">问题分类
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="ProblemType" class="select2_single form-control" tabindex="-1"
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
                      <label for="Problem" class="control-label col-md-3 col-sm-3 col-xs-12">问题概要
                      <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Problem" type="text" class="form-control" placeholder="七号小车出现问题"
                          required="required" name="Problem">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label for="Info" class="control-label col-md-3 col-sm-3 col-xs-12">详细描述
                      <span class="required">:</span></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="Info" name="Info" class="form-control col-md-6 col-sm-6 col-xs-12"></textarea>
                       </div>
                      </div>
                      <div class="item form-group">
                        <label for="Engineer" class="control-label col-md-3 col-sm-3 col-xs-12">负责人
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Engineer" type="text" class="form-control" placeholder="例如：张三"
                          required="required" name="Engineer">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="Product" class="control-label col-md-3 col-sm-3 col-xs-12">零件更换名称
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Product" type="text" class="form-control" placeholder="例如：安卓盒子"
                          required="required" name="Product">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="ProType" class="control-label col-md-3 col-sm-3 col-xs-12">零件型号
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ProType" type="text" class="form-control" placeholder="例如：SONY LMP-F330"
                          required="required" name="ProType">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label for="Mount" class="control-label col-md-3 col-sm-3 col-xs-12">更换数量
                      <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <input id="Mount" type="text" class="form-control" placeholder="例如：2个"
                       required="required" name="Mount">
                      </div>
                      </div>
                      <div class="item form-group">
                        <label for="EndTime" class="control-label col-md-3 col-sm-3 col-xs-12">维修结束时间
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group date" id="myDatepicker2">
                            <input id="EndTime" type="datetime" class="form-control" required="required"
                            placeholder="YYYY-MM-DD HH:MM" name="EndTime" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="LastingTime" class="control-label col-md-3 col-sm-3 col-xs-12">维修持续时间
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="LastingTime" type="text" class="form-control" placeholder="例如：15天"
                          required="required" name="LastingTime">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="RepairPer" class="control-label col-md-3 col-sm-3 col-xs-12">维修人员
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="RepairPer" type="text" class="form-control" placeholder="例如：许超"
                          required="required" name="RepairPer">
                        </div>
                      </div>
                      <div class="item form-group">
                      <label for="Reason" class="control-label col-md-3 col-sm-3 col-xs-12">原因分析
                      <span class="required">:</span></label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="Reason" name="Reason" class="form-control col-md-6 col-sm-6 col-xs-12"></textarea>
                       </div>
                      </div>
                      <div class="item form-group">
                      <label for="Note" class="control-label col-md-3 col-sm-3 col-xs-12">结论
                      <span class="required">:</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="Note" name="Note" class="form-control col-md-6 col-sm-6 col-xs-12"></textarea>
                        </div>
                      </div>
                      <div class="item form-group">
                       <label for="Evacuate" class="control-label col-md-3 col-sm-3 col-xs-12">是否疏散
                       <span class="required">*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="Evacuate" class="select2_single form-control" tabindex="-1"
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
                        <label for="s1" class="control-label col-md-3 col-sm-3 col-xs-12">所属城市
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="s1" class="select2_single form-control" tabindex="-1"
                           required="required" name="CityName">
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="s2" class="control-label col-md-3 col-sm-3 col-xs-12">所属公园
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="s2" class="select2_single form-control" tabindex="-1"
                           required="required" name="ParkName">
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="s3" class="control-label col-md-3 col-sm-3 col-xs-12">所属项目
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="s3" class="select2_single form-control" tabindex="-1"
                           required="required" name="ProjectName">
                          </select>
                        </div>
                      </div>
                      <!-- <div class="form-group">
                        <label for="PDID" class="col-sm-2 control-label hidden">问题ID
                        <span class="required"></span>*</label>
                        <div class="col-sm-10">
                          <input class="form-control hidden" id="PDID" type="text" readonly="readonly" name="PDID">
                        </div>
                      </div> -->
                    <div class="modal-footer">
                      <div class="center-block">
                        <button id="cancelAdd" type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button id="resetAdd" type="reset" class="btn btn-primary">重置</button>
                        <button id="submitAdd" type="submit" class="btn btn-success" title="提交">保存</button>
                      </div>
                    </div>
                 </form>
              </div>
            </div>
         </div>
      </div> 
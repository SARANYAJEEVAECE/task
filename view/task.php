<?php 
include_once 'header.php';
?>
<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Task Deatails</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
			    <div class="card-body">
			        <h4 class="card-title">Task</h4>
			        <div id="basicgrid" class="jsgrid" style="position: relative; height: 500px; width: 100%;">
			        	<div class="jsgrid-grid-header jsgrid-header-scrollbar">
			        		<table class="jsgrid-table table table-striped table-hover">
			        			<tr class="jsgrid-header-row">
			        				<th style="width: 100px;" class="jsgrid-header-cell jsgrid-header-sortable">Name</th>
			        				<th style="width: 200px;" class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable">Task</th>
			        				<th style="width: 150px;" class="jsgrid-header-cell jsgrid-header-sortable">Start Date</th>
			        				<th style="width: 150px;" class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable">Deadline</th>
			        				<!-- <th style="width: 100px;" class="jsgrid-header-cell jsgrid-align-center">Is Married</th> -->
			        				<th style="width: 50px;" class="jsgrid-header-cell jsgrid-control-field jsgrid-align-center">
			        					<button class="jsgrid-button jsgrid-mode-button jsgrid-search-mode-button jsgrid-mode-on-button" type="button" title=""></button>
			        				</th>
			        			</tr>
			        			<!-- <tr class="jsgrid-filter-row">
			        				<td style="width: 150px;" class="jsgrid-cell">
			        					<input class="form-control input-sm" type="text">
			        				</td>
			        				<td style="width: 70px;" class="jsgrid-cell jsgrid-align-right">
			        					<input class="form-control input-sm" type="number">
			        				</td>
			        				<td style="width: 200px;" class="jsgrid-cell">
			        					<input class="form-control input-sm" type="text">
			        				</td>
			        				<td style="width: 100px;" class="jsgrid-cell jsgrid-align-center">
			        					<select class="form-control input-sm">
			        						<option value="0"></option>
			        						<option value="1">United States</option>
			        						<option value="2">Canada</option>
			        						<option value="3">United Kingdom</option>
			        						<option value="4">France</option>
			        						<option value="5">Brazil</option>
			        						<option value="6">China</option>
			        						<option value="7">Russia</option>
			        					</select>
			        				</td>
			        				<td style="width: 100px;" class="jsgrid-cell jsgrid-align-center">
			        					<input readonly="" type="checkbox">
			        				</td>
			        				<td style="width: 50px;" class="jsgrid-cell jsgrid-control-field jsgrid-align-center">
			        					<button class="jsgrid-button jsgrid-search-button" type="button" title="Search"></button>
			        					<button class="jsgrid-button jsgrid-clear-filter-button" type="button" title="Clear filter"></button>
			        				</td>
			        			</tr> -->
			        			<tr class="jsgrid-insert-row" style="display: none;">
			        				<td style="width: 100px;" class="jsgrid-cell">
			        					<input class="form-control input-sm" type="text">
			        				</td>
			        				<td style="width: 200px;" class="jsgrid-cell jsgrid-align-right">
			        					<input class="form-control input-sm" type="number">
			        				</td>
			        				<td style="width: 150px;" class="jsgrid-cell">
			        					<input class="form-control input-sm" type="text">
			        				</td>
			        				<td style="width: 150px;" class="jsgrid-cell jsgrid-align-center">
			        					<select class="form-control input-sm">
			        						<option value="0"></option>
			        						<option value="1">United States</option>
			        						<option value="2">Canada</option>
			        						<option value="3">United Kingdom</option>
			        						<option value="4">France</option>
			        						<option value="5">Brazil</option>
			        						<option value="6">China</option>
			        						<option value="7">Russia</option>
			        					</select>
			        				</td>
			        				<!-- <td style="width: 100px;" class="jsgrid-cell jsgrid-align-center">
			        					<input type="checkbox">
			        				</td> -->
			        				<td style="width: 50px;" class="jsgrid-cell jsgrid-control-field jsgrid-align-center">
			        					<button class="jsgrid-button jsgrid-insert-button" type="button" title="Insert"></button>
			        				</td>
			        			</tr>
			        		</table>
			        	</div>
			        	<div class="jsgrid-grid-body" style="height: 325.5px;">
			        		<table class="jsgrid-table table table-striped table-hover">
			        			<tbody>
			        				<tr class="jsgrid-row">
			        					<td style="width: 100px;" class="jsgrid-cell">Otto Clay</td>
			        					<td style="width: 200px;" class="jsgrid-cell jsgrid-align-right">61</td>
			        					<td style="width: 150px;" class="jsgrid-cell">Ap #897-1459 Quam Avenue</td>
			        					<td style="width: 150px;" class="jsgrid-cell jsgrid-align-center">China</td>
			        					<!-- <td style="width: 100px;" class="jsgrid-cell jsgrid-align-center">
			        						<input disabled="" type="checkbox">
			        					</td> -->
			        					<td style="width: 50px;" class="jsgrid-cell jsgrid-control-field jsgrid-align-center">
			        						<button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button>
			        						<button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button>
			        					</td>
			        				</tr>
			        				<tr class="jsgrid-alt-row">
			        					<td style="width: 100px;" class="jsgrid-cell">Connor Johnston</td>
			        					<td style="width: 200px;" class="jsgrid-cell jsgrid-align-right">73</td>
			        					<td style="width: 150px;" class="jsgrid-cell">Ap #370-4647 Dis Av.</td>
			        					<td style="width: 150px;" class="jsgrid-cell jsgrid-align-center">Russia</td>
			        					<!-- <td style="width: 100px;" class="jsgrid-cell jsgrid-align-center">
			        						<input disabled="" type="checkbox">
			        					</td> -->
			        					<td style="width: 50px;" class="jsgrid-cell jsgrid-control-field jsgrid-align-center">
			        						<button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button>
			        						<button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button>
			        					</td>
			        				</tr>
			        				<tr class="jsgrid-row">
			        					<td style="width: 100px;" class="jsgrid-cell">Lacey Hess</td>
			        					<td style="width: 200px;" class="jsgrid-cell jsgrid-align-right">29</td>
			        					<td style="width: 150px;" class="jsgrid-cell">Ap #365-8835 Integer St.</td>
			        					<td style="width: 150px;" class="jsgrid-cell jsgrid-align-center">Russia</td>
			        					<!-- <td style="width: 100px;" class="jsgrid-cell jsgrid-align-center">
			        						<input disabled="" type="checkbox">
			        					</td> -->
			        					<td style="width: 50px;" class="jsgrid-cell jsgrid-control-field jsgrid-align-center">
			        						<button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button>
			        						<button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button>
			        					</td>
			        				</tr>
			        				<tr class="jsgrid-alt-row">
			        				
								</tbody>
							</table>
						</div>
						<tfoot>
                            <tr>
                                <td colspan="2">
                                    <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Add New Contact</button>
                                </td>
                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">Add New Contact</h4> </div>
                                            <div class="modal-body">
                                                <from class="form-horizontal form-material">
                                                    <div class="form-group">
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" placeholder="Type name"> </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" placeholder="Task"> </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" placeholder="Start Date"> </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <input type="text" class="form-control" placeholder="Deadline"> </div>
                                                        <div class="col-md-12 m-b-20">
                                                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Contact Image</span>
                                                                <input type="file" class="upload"> </div>
                                                        </div>
                                                    </div>
                                                </from>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <td colspan="7">
                                    <div class="text-right">
                                        <ul class="pagination"> </ul>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>

						<!-- <div class="jsgrid-pager-container" style="">
							<div class="jsgrid-pager">Pages: 
								<span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button">
									<a href="javascript:void(0);">First</a>
								</span> 
								<span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button">
									<a href="javascript:void(0);">Prev</a>
								</span> 
								<span class="jsgrid-pager-page jsgrid-pager-current-page">1</span>
								<span class="jsgrid-pager-page"><a href="javascript:void(0);">2</a></span>
								<span class="jsgrid-pager-page"><a href="javascript:void(0);">3</a></span><span class="jsgrid-pager-page">
									<a href="javascript:void(0);">4</a>
								</span>
								<span class="jsgrid-pager-page">
									<a href="javascript:void(0);">5</a>
								</span>
								<span class="jsgrid-pager-nav-button">
									<a href="javascript:void(0);">...</a>
								</span> 
								<span class="jsgrid-pager-nav-button">
									<a href="javascript:void(0);">Next</a>
								</span> 
								<span class="jsgrid-pager-nav-button">
									<a href="javascript:void(0);">Last</a>
								</span> &nbsp;&nbsp; 1 of 7 
							</div>
						</div> -->

						<div class="jsgrid-load-shader" style="display: none; position: absolute; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 1000;">
							
						</div>
						<div class="jsgrid-load-panel" style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please, wait...
						</div>
					</div>
			    </div>
			</div>
        </div>
    </div>
</div>
<?php 
include_once 'footer.php';
?>
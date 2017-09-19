<div class="container" style="margin-top:90px;">
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#sectionA">About Project</a></li>
	</ul>
	<div class="tab-content">
		<div id="sectionA" class="tab-pane active">
			<h3>Edit Project:</h3>
			<p>
			</p>
			<div class="container">
<?php echo form_open_multipart('user/projectedit');?>
					<form class="form-horizontal" role="form" method="post">
                        <div class="form-group">
                            <label class="control-label col-sm-2">Project Title:</label>
                            <div class="col-sm-10">
                                <input type="title" class="form-control" id="title" name='title' placeholder="Enter Project Title" value="<?php  echo $userProject->name; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Funding Goal:</label>
                            <div class="col-sm-10">
                                <input type="goal" class="form-control" id="goal" name='goal' placeholder="Enter Fund Goal" value="<?php echo $userProject->goal; ?>">
                            </div>
                        </div>
                        
						<div class="form-group">
							<label class="control-label col-sm-2">About Project:</label>
							<div class="col-sm-10">          
								<textarea rows="10" style="width:100%;" name='description'><?php echo $userProject->description ?></textarea>
							</div>
						</div>
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<a href="<?= base_url()?>user" class="btn btn-default">Done</a>
								<!--<a href="user/projectedit" type="submit" class="btn btn-default">Cancel</a>-->
                                
                                <button type="submit" class="btn btn-success pull-right">submit</button>
                                <a href="<?= base_url()?>user" class="btn btn-danger pull-right">cancel</a>
                                <!--<button class="btn btn-lg btn-primary btn-block" type="submit">Update</button>
                                <!--<button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>-->
							</div>
						</div>
					</form>
				</div>


		</div>

	</div>        
</div>

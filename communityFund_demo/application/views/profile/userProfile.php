<section class="container-fluid banner page-banner">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class=" col-xs-12">
					<h3><strong>TA的信息</strong></h3>
					<?php echo set_breadcrumb(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container user-profile-wrapper">
	<div class="row">
		<div class="col-xs-12">
			
			<div class="user-profile">

				<div  class="profile-card col-sm-3 col-xs-12">

					<img src="<?= base_url()?>uploads/profile/images/<?=$user_id?>/profile.jpg"/>

				</div>
				<div class="profile-description col-sm-9 col-xs-12">

					<?php if ($user_id != current_user()->getUserId()) {?>
					<div class="profile-actions-wrapper">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					    关注TA <span class="caret"></span>
					  	</button>
						<ul class="dropdown-menu" role="menu">
					    	<li><a href="<?=base_url()?>relationship/<?= ($userHasFollowed AND $userHasFollowed->relationship) == "follow" ? "delete_relationship/$user_id/unfollow" : "save_relationship/$user_id/follow" ?>"><?= ($userHasFollowed AND $userHasFollowed->relationship) == "follow" ? "取消关注" : "关注" ?></a></li>
					    	<li class="divider"></li>
					    	<li><a href="#">送鲜花</a></li>
					    	<li><a href="#">联系TA</a></li>
					  	</ul>
					</div>
					<?php } ?>

					<h3> 姓名：<?= $userProfile->lastname?>, <?= $userProfile->firstname?></h3>
					<p> 邮箱：<?= $userProfile->email ?></p>
					<p> 年龄：<?= $userProfile->age ?></p>
					<p> 所在地：<?= $userProfile->city ?></p>
					<p> 婚姻状况：<?= $userProfile->marritial ?></p>
					<p> 爱好：<?= $userProfile->hobbies ?></p>
					<p> 职业：<?= $userProfile->profession ?></p>
					<p> 寻找中的TA：<?= $userProfile->lookingDescription ?></p>
				

				</div>

			</div>
		</div>
	</div>
</section>
<section class="container tab-wrapper">
	<div class="row">
		<div class="col-xs-12">
			<ul class="nav nav-tabs" id="jiujiu-tab" >
			  <li role="presentation" class="active" data-toggle="tab"><a href="#jiujiu-description">久久介绍</a></li>
			  <li role="presentation" data-toggle="tab"><a href="#gallery">个人相册</a></li>
			  <li role="presentation" data-toggle="tab"><a href="#contact-detail">联系TA</a></li>
			</ul>
		</div>

		<div class="col-xs-12 tab-content">
		  	<div class="tab-pane fade in active" id="jiujiu-description">久久介绍</div>
		  	<div class="tab-pane fade" id="gallery">
		  		<div class="gallery-wrapper col-sm-6 col-sm-offset-3">
				  	<ul class="photo-gallery">
					  	<?php foreach ($userPictureSettingsList as $pictureObj) { ?>
					  		<li>
					  			<a href="#">
					  				<img src="<?= base_url()?>/<?= $pictureObj->get_picture_file_path(); ?>" />
					  			</a>
					  		</li>	
					  	<?php } ?>
				  	</ul>
			  	</div>
		  	</div>
		  	<div class="tab-pane fade" id="contact-detail">联系TA</div>
		</div>
	</div>
</section>


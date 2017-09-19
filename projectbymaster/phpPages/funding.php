<?php include("../htmlPages/header.php"); ?>
<link src="../resources/css/funding.css">
  <body>
        
        
    <div class="container" style="margin-top:75px;">
        
       <div class = "page-header">
         <h1> Project Title <small> Created by Name</small></h1>
      </div>
        <!--<div class="container">-->
        <div class="panel panel-default">
          <div class="form-amount">
            <form class="donation-form" role="form">
              <label for="amount"><h2><span class="label label-success">Enter donation amount</span></h2></label>
              <br/>
              <br/>
				<div class="col-xs-3">
				  <div class="input-group">
					<span class="input-group-addon">$</span>
					<input id="amount"type="text" value=""class="form-control" placeholder="Enter amount" maxlength="9"/> 
				  </div>
				</div>
            </form>
          </div>
		  <br/>
		  <br/>
        </div>
        <legend><h4><strong>Select your reward</strong></h4> </legend>
        <div id="rewards"></div>
          
       
		<legend><strong> Total: $<div class="pull-right"> 
          
           <div id="output"></div>
            
			<a class="btn btn-success btn-lg" href="#" role="button"> Continue </a>
		</div>	
        </strong> </legend>
		
			
      </div> 

    </div>
	<script src="../includes/jquery/dist/jquery.min.js"></script>
    <script src="../includes/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../includes/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../resources/js/funding.js"></script>

  </body>
<?php include("../htmlPages/footer.html"); ?>

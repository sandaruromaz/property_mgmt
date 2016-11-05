<!--FOR SAVE PNG-->
   <script src=" <?php echo base_url(); ?>assets/js/design/FileSaver.js"></script>
   <script src=" <?php echo base_url(); ?>assets/js/design/html2canvas.js"></script>
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" /> 




<!--FOE GET DIFFERENT FONTS-->
<style type="text/css">


  .ui-datepicker-title{
    color: #000 !important;
  				}

		 .footer {
			padding: 70px 0;
			margin-top: 70px;
			border-top: 1px solid #E5E5E5;
			background-color: whiteSmoke;
			}			
	      body {
	        padding-top: 60px;	        
	      }
	      .color-preview {
	      	border: 1px solid #CCC;
	      	margin: 2px;
	      	zoom: 1;
	      	vertical-align: top;
	      	display: inline-block;
	      	cursor: pointer;
	      	overflow: hidden;
	      	width: 20px;
	      	height: 20px;
	      }
	      .rotate {  
		    -webkit-transform:rotate(90deg);
		    -moz-transform:rotate(90deg);
		    -o-transform:rotate(90deg);
		    /* filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1.5); */
		    -ms-transform:rotate(90deg);		   
		}		
		.Arial{font-family:"Arial";}
		.Helvetica{font-family:"Helvetica";}
		.MyriadPro{font-family:"Myriad Pro";}
		.Delicious{font-family:"Delicious";}
		.Verdana{font-family:"Verdana";}
		.Georgia{font-family:"Georgia";}
		.Courier{font-family:"Courier";}
		.ComicSansMS{font-family:"Comic Sans MS";}
		.Impact{font-family:"Impact";}
		.Monaco{font-family:"Monaco";}
		.Optima{font-family:"Optima";}
		.HoeflerText{font-family:"Hoefler Text";}
		.Plaster{font-family:"Plaster";}
		.Engagement{font-family:"Engagement";}
		.Times New Roman{font-family:"Times New Roman";}

	 </style>	
		<!-- BREADCRUMBS -->
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="content">

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="body-content">
<div class="page-header">
<h2 itemprop="name"> Customize Cake
</h2>  
		
		
		<!-- customize T-SHIRT DESIGN BLOCK -->
		<section class="love_list_block">
			
			

		<section id="typography">
		  <div class="">
		   
		  </div>
		<?php if (count($products_details)){ 
						  foreach ($products_details-> result_array() as $row){
						  $product = array('apparel' => $row);	//we make new array so we can use it anyware	  
						  }
						
		}?>
		  <!-- Headings & Paragraph Copy -->
		  <div class="row">	
                                <?php if($this -> session -> userdata('errordesign')){ ?>		
                                <div class="alert alert-danger">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <strong><?php echo $this -> session -> userdata('errordesign'); ?></strong> 
                                </div>
                                <?php $this->session->unset_userdata('errordesign');}?>
                                <!-- Error Message-->
								<?php if($this -> session -> userdata('Successdesign')){ ?>		
                                <div class="alert alert-success">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <strong><?php echo $this -> session -> userdata('Successdesign'); ?></strong>
                                </div>                               
                                <?php $this->session->unset_userdata('Successdesign');}?>		
		    <div class="col-lg-3 col-md-3 col-sm-3 padbot50">
		    	
		    	<div class="tabbable"> <!-- Only required for left/right tabs -->
				  <ul class="nav nav-tabs">
				  	<li class="active"><a href="#tab1" data-toggle="tab">Cake Options</a></li>				    
				    <li><a href="#tab2" data-toggle="tab">Editor</a></li>
				  </ul>
				  <div class="tab-content">
				     <div class="tab-pane active" id="tab1">
				     	<div class="well">
<!--					      	<h3>colors Styles</h3>-->
<!--						      <p>-->
						      	<a href="<?php echo base_url(); ?>index.php/pages/design_category/1" class="btn btn-sm"  style=" padding:8px 55px 8px 55px">Change Product</a>				
<!--						      </p>-->								
					      </div>
                          <?php if($this->uri->segment(3)!=3){?>
                          <p>Select color </p>
					      <div class="well">
							<ul class="nav" style="display: inline-block;margin-left: 20px;">
								<li class="color-preview" title="White" style="background-color:#ffffff; display: inline-block;"></li>
								<li class="color-preview" title="Dark Heather" style="background-color:#616161;display: inline-block;"></li>
								<li class="color-preview" title="Gray" style="background-color:#f0f0f0;display: inline-block;"></li>
								<li class="color-preview" title="Charcoal" style="background-color:#5b5b5b;display: inline-block;"></li>
								<li class="color-preview" title="Black" style="background-color:#222222;display: inline-block;"></li>
								<li class="color-preview" title="Heather Orange" style="background-color:#fc8d74;display: inline-block;"></li>
								<li class="color-preview" title="Heather Dark Chocolate" style="background-color:#432d26;display: inline-block;"></li>
								<li class="color-preview" title="Salmon" style="background-color:#eead91;display: inline-block;"></li>
								<li class="color-preview" title="Chesnut" style="background-color:#806355;display: inline-block;"></li>
								<li class="color-preview" title="Dark Chocolate" style="background-color:#382d21;display: inline-block;"></li>
								<li class="color-preview" title="Citrus Yellow" style="background-color:#faef93;display: inline-block;"></li>
								<li class="color-preview" title="Avocado" style="background-color:#aeba5e;display: inline-block;"></li>
								<li class="color-preview" title="Kiwi" style="background-color:#8aa140;display: inline-block;"></li>
								<li class="color-preview" title="Irish Green" style="background-color:#1f6522;display: inline-block;"></li>
								<li class="color-preview" title="Scrub Green" style="background-color:#13afa2;display: inline-block;"></li>
								<li class="color-preview" title="Teal Ice" style="background-color:#b8d5d7;display: inline-block;"></li>
								<li class="color-preview" title="Heather Sapphire" style="background-color:#15aeda;display: inline-block;"></li>
								<li class="color-preview" title="Sky" style="background-color:#a5def8;display: inline-block;"></li>
								<li class="color-preview" title="Antique Sapphire" style="background-color:#0f77c0;display: inline-block;"></li>
								<li class="color-preview" title="Heather Navy" style="background-color:#3469b7;display: inline-block;"></li>							
								<li class="color-preview" title="Cherry Red" style="background-color:#c50404;display: inline-block;"></li>
							</ul>
						</div>
                        <?php }?>			      
				     </div>				   
				    <div class="tab-pane" id="tab2">
				    	<div class="well">
				    		<div class="input-append">
							  <input class="span2"  name="200" id="text-string" type="text" placeholder="ADD TEXT HERE..." style="padding: 5px 10px 5px 10px;height:35px;">
							  <button id="add-text" class="btn inactive btn-sm" title="Add text"><i class="fa fa-share"></i></button>
							  <hr />
                              <div id=""><form action="<?php echo base_url();?>index.php/shop/add" method="post">
								Art Work Category
                                            <select name="artwork"  id="artwork" onchange="artWork(this.value);" style=" width:100%" >
                                           <option value=" "> --- Please Select --- </option>
                                           
										 <?php if (count($ArtWorkCategory)){ 
										 foreach ($ArtWorkCategory-> result_array() as $ArtWorkCategory){
										 ?> 
                                       
                                         <option  value="<?php echo $ArtWorkCategory['art_cat_name']; ?> "><?php echo $ArtWorkCategory['art_cat_name']; ?> </option>
                                          <?php }} ?>
                                          </select>
                               </form>             
							</div><hr />
                            </div>
							<div id="avatarlist">
                            	<input type="file" name="dataFile" onchange="return ValidateFileUpload()" id="fileChooser"  />
                                <hr />
                                <img style="cursor:pointer;" class="img-polaroid" src="<?php echo base_url(); ?>assets/images/design/artworks/sample.jpg" width="105" height="120"  id="blah" alt="200"/>
								<?php if (count($ArtWork)){ 
		foreach ($ArtWork-> result_array() as $Artwork){?>
        <img style="cursor:pointer;" class="img-polaroid artwork <?php echo $Artwork['art_cat_name']; ?>" src="<?php echo base_url(); ?>assets/images/design/artworks/<?php echo $Artwork['img']; ?>" width="100" alt="<?php echo $Artwork['unit_price']; ?>">
        
        <?php }}?>
        </div>				    		
				    	</div>				      
				    </div>
				  </div>
				</div>				
		    </div>	
			<div class="col-md-6">
			<div class="clearfix">
			<button id="flip" type="button" class="btn inactive btn-sm" title="Show Back View"><i class="fa fa-retweet" style="height:19px;"></i></button>
							<div class="btn-group inline pull-left" id="texteditor" style="display:none">						  
								<button id="font-family" class="btn inactive btn-sm dropdown-toggle" data-toggle="dropdown" title="Font Style"><i class="fa fa-font" style="width:19px;height:19px;"></i></button>		                      
							    <ul class="dropdown-menu" role="menu" aria-labelledby="font-family-X">
								    <li><a tabindex="-1" href="javascript:void(0);" onclick="setFont('Arial');" class="Arial">Arial</a></li>
								    <li><a tabindex="-1" href="javascript:void(0);" onclick="setFont('Helvetica');" class="Helvetica">Helvetica</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Myriad Pro');" class="MyriadPro">Myriad Pro</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Delicious');" class="Delicious">Delicious</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Verdana');" class="Verdana">Verdana</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Georgia');" class="Georgia">Georgia</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Courier');" class="Courier">Courier</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Comic Sans MS');" class="ComicSansMS">Comic Sans MS</a></li>
								    <li><a tabindex="-1" href="javascript:void(0);" onclick="setFont('Impact');" class="Impact">Impact</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Monaco');" class="Monaco">Monaco</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Optima');" class="Optima">Optima</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Hoefler Text');" class="Hoefler Text">Hoefler Text</a></li>
								 <!--   <li><a tabindex="-1" href="#" onclick="setFont('Plaster');" class="Plaster">Plaster</a></li>
								    <li><a tabindex="-1" href="#" onclick="setFont('Engagement');" class="Engagement">Engagement</a></li>
                                    <li><a tabindex="-1" href="#" onclick="setFont('Times New Roman');" class="Times New Roman">Times New Roman</a></li>-->
				                </ul>
							    <button id="text-bold" class="btn inactive btn-sm" data-original-title="Bold"><img src="<?php echo base_url(); ?>assets/images/design/font_bold.png" height="" width=""></button>
							    <button id="text-italic" class="btn inactive btn-sm" data-original-title="Italic"><img src="<?php echo base_url(); ?>assets/images/design/font_italic.png" height="" width=""></button>
							    <button id="text-strike" class="btn inactive btn-sm" title="Strike" style=""><img src="<?php echo base_url(); ?>assets/images/design/font_strikethrough.png" height="" width=""></button>
							 	<button id="text-underline" class="btn inactive btn-sm" title="Underline" style=""><img src="<?php echo base_url(); ?>assets/images/design/font_underline.png"></button>
							 	<a class="btn inactive btn-sm" href="#" rel="tooltip" data-placement="top" data-original-title="Font Color"><input type="hidden" id="text-fontcolor" class="color-picker" size="7" value="#000000"></a>
						 		<a class="btn inactive btn-sm" href="#" rel="tooltip" data-placement="top" data-original-title="Font Border Color"><input type="hidden" id="text-strokecolor" class="color-picker" size="7" value="#000000"></a>
								  <!--- Background <input type="hidden" id="text-bgcolor" class="color-picker" size="7" value="#ffffff"> --->
							</div>							  
							<div class="pull-right" align="" id="imageeditor" style="display:none">
							  <div class="btn-group">										      
							      <button class="btn inactive btn-sm" id="bring-to-front" title="Bring to Front"><i class="fa fa-fast-backward rotate" style="height:19px;"></i></button>
							      <button class="btn inactive btn-sm" id="send-to-back" title="Send to Back"><i class="fa fa-fast-forward rotate" style="height:19px;"></i></button>
							      <!--<button id="flip" type="button" class="btn inactive btn-sm" title="Show Back View"><i class="fa fa-retweet" style="height:19px;"></i></button>
							      --><button id="remove-selected"type="button" class="btn inactive btn-sm" title="Delete selected item"><i class="fa fa-trash-o" style="height:19px;"></i></button>
								  
							  </div>
							</div>			  
						</div>
			</div>
		    <div class="col-md-6" id="widget">
            		    
		    		<div align="center" style="min-height: 32px;">
		    															
					</div>					  		
				<!--	EDITOR      -->					
					<div id="shirtDiv" class="page" style="width: 530px; height: 630px; position: relative; background-color: rgb(255, 255, 255);">
						<img id="tshirtFacing" src="<?php echo base_url(); ?>assets/images/design/<?php  echo $product['apparel']['front_img'];?>"></img>
						<div id="drawingArea" style="position: absolute;top: 100px;left: 160px;z-index: 10;width: 200px;height: 400px;">					
							<canvas id="tcanvas" width=200 height="400" class="hover" style="-webkit-user-select: none;"></canvas>
						</div>
					</div>
				<!--	<div id="shirtBack" class="page" style="width: 530px; height: 630px; position: relative; background-color: rgb(255, 255, 255); display:none;">
                    						<img src="<?php echo base_url(); ?>assets/images/design/<?php  echo $product['apparel']['back_img'];?>">"></img>
					<div id="drawingArea" style="position: absolute;top: 100px;left: 160px;z-index: 10;width: 200px;height: 400px;">					
							<canvas id="backCanvas" width=200 height="400" class="hover" style="-webkit-user-select: none;"></canvas>
						</div>
					</div>-->						
								
		<!--	/EDITOR		-->
		    </div>
			<!--DESIGN TOTAL-->
		    <div class="col-lg-3 col-md-3 col-sm-3 padbot50">
		      <div class="well">
		      	<h3>Total Prices</h3>
			      <p>
			      	<table class="table">
			      		<!--<tr>
			      			<td>Short Sleeve</td>
			      			<td align="right">LKR:</td>
			      		</tr>
			      		<tr>
			      			<td>Front Design</td>
			      			<td align="right">LKR:</td>
			      		</tr>
			      		<tr>
			      			<td>Back Design</td>
			      			<td align="right">LKR:</td>
			      		</tr>-->
			      		<tr>
			      			<td><strong>Total</strong></td>
			      			<td align="right"><strong>LKR: <span id="price"><?php  echo $product['apparel']['price'];?></span></strong></td>
			      		</tr>
			      	</table>
                    			
			      </p>
					
		      </div>
              <p><button class="btn inactive btn-sm" id="btnSave" title="save"><i class="fa fa-print" style="height:19px;"></i> SAVE AS PNG</button>
							      </p>	
              <div class="well" style="background-color:#FFE3CE">
              <h3 align="center" style="line-height:30px;">PLEASE LOOK DOWN FOR ODERING</h3><br />
              <div align="center">
              <span style="font-size:36px;"><i class="fa fa-angle-double-down"></i></span>
              </div>              
              </div>            	      		       		   
		    </div>
		
		  </div>
          <hr />
		  <div class="row">
          <h3>Order Details</h3>
           <div style="background-color:#FFE3CE" class="well">
              <span style="color:#C00; font-size:12px">Online cake customization functionality will provides you to customize cakes, view the corresponding quotation (amount of cost) details as well as get reports of your customized cake details. But
please note that you can not fully order your customized cakes through the online because you have to agree with following conditions.
<br />
<br />
1. After you submit the order our Design handler will call you for get the order confirmation details. You have to confirm your order details.
<br />
2. You have to visit our branch and pay an advance in order to confirm your customized cake orders.

Thank you.</span><br>
                            
              </div>
          <div class="col-lg-6 col-md-3 col-sm-3 padbot50">
          
          <form action="<?php echo base_url(); ?>index.php/Customize/addorder/<?php echo $this->uri->segment(3); ?>/<?php echo $this->uri->segment(4); ?>" method="post" enctype="multipart/form-data" onsubmit="return designordervalidation()" >
          <table width="100%" border="0">
              <tr >
                <td style="padding:10px" width="50%" valign="top">Front Design</td>
                <td>
                <div class="has-error">
                <input type="file" name="front" onchange="return ValidateFileUpload1()" id="fileChooser1"  />
                <span class='error'></span> </div>
                </td>
              </tr>
              <tr>
                <td style="padding:10px" valign="top">Back Design</td>
                <td>
                <div class="has-error">
                <input type="file" name="back" onchange="return ValidateFileUpload2()" id="fileChooser2"  />
                <span class='error'></span> </div>
                </td>
              </tr>
              <tr>
                <td style="padding:10px">Price</td>
                <td>
                
                LKR: <span id="price2"><?php  echo $product['apparel']['price'];?></span>
                <input name="price" type="hidden" id="price3" value="<?php  echo $product['apparel']['price'];?>" />
                </td>
              </tr>
           </table>
           <div class="colorsize">
           <table width="100%" border="0">
              <tr>
                <td style="padding:10px" width="50%">Size</td>
                <td>Quantity</td>
                <td><!--<button  type="button" name="add" id="addnew" type="button" ><i class="fa fa-plus"></i></button>--></td>
              </tr>
              <tr>
                <td style="padding:8px" valign="top">
                <div class="has-error">
                <select name="size"  id="dsize" style="height:30px" >
                    <option value="" selected="selected"> Select </option>
              		<option value="1kg"> S (1kg)</option>
                    <option value="2kg"> L (2kg)</option>
     			</select><br />
                <span class='error'></span> </div>
                </td>
                <td  valign="top"><div class="has-error">
                <input type="number" min="1" max="99" name="qty" id="dqty" placeholder="Qty"  style="padding:5px; width:20%; margin-top:7px; height:30px" maxlength="2"/><br /><span class='error'></span> </div></td>
              <td>&nbsp;</td>
              </tr>
            </table>
            </div>
          </div>
           <div class="col-lg-6 col-md-3 col-sm-3 padbot50">
           
           <table width="100%" border="0">
              <tr>
                <td style="padding:5px" valign="top">Comment</td>
              </tr>
              <tr>
                <td>
                <div class="has-error">
                <textarea name="comment" cols="" rows="5" id="dcomment"></textarea>
                <span class='error'></span> </div>
                </td>
              </tr>
              <tr>
                <td style="padding:5px" valign="top">Diliver Date</td>
              </tr>
              <tr>
                <td>
                <div class="has-error">
                        <input type="text" class="form-control"  id="dilivery_date" name="dilivery_date" readonly="readonly" placeholder="Enter your date of birth "/>
                     
                <span class='error'></span> </div>
                </td>
              </tr>
              <tr>
                <td style="padding:5px"><button type="submit"  class="btn active btn-sm" style="float:right" id="confirm">CONFIRM</button></td>
              </tr>
            </table>
			<input type="hidden" value="1520"  name="amount" />
          </form>
          </div>
          
          
          </div>
         
		</section>
		</section><!-- //customize BLOCK -->
						</div>
</div>
</div>
</div>
        
<!--SAVE PNG-->
 <script>
$(function() { 
	
    $("#btnSave").click(function() { 
	
        html2canvas($("#widget"), {
			
            onrendered: function(canvas) {
                //theCanvas = canvas;
               // document.body.appendChild(canvas);

                canvas.toBlob(function(blob) {
					saveAs(blob, "<?php  echo $product['apparel']['apparel_name']+rand();?>.png"); 
				});
            }
        });
    



    });
}); 

		


</script>

		

<!--DESIGN PART-->
<script type="text/javascript">
var canvas;
var tshirts = new Array(); //prototype: [{style:'x',color:'white',front:'a',back:'b',price:{tshirt:'12.95',frontPrint:'4.99',backPrint:'4.99',total:'22.47'}}]
var a;
var b;
var line1;
var line2;
var line3;
var line4;
 	$(document).ready(function() {
		//setup front side canvas 
 		canvas = new fabric.Canvas('tcanvas', {
		  hoverCursor: 'pointer',
		  selection: true,
		  selectionBorderColor:'blue'
		});
 		canvas.on({
			 'object:moving': function(e) {		  	
			    e.target.opacity = 0.5;
			  },
			  'object:modified': function(e) {		  	
			    e.target.opacity = 1;
			  },
			 'object:selected':onObjectSelected,
			 'selection:cleared':onSelectedCleared
		 });
		// piggyback on `canvas.findTarget`, to fire "object:over" and "object:out" events
 		canvas.findTarget = (function(originalFn) {
		  return function() {
		    var target = originalFn.apply(this, arguments);
		    if (target) {
		      if (this._hoveredTarget !== target) {
		    	  canvas.fire('object:over', { target: target });
		        if (this._hoveredTarget) {
		        	canvas.fire('object:out', { target: this._hoveredTarget });
		        }
		        this._hoveredTarget = target;
		      }
		    }
		    else if (this._hoveredTarget) {
		    	canvas.fire('object:out', { target: this._hoveredTarget });
		      this._hoveredTarget = null;
		    }
		    return target;
		  };
		})(canvas.findTarget);

 		canvas.on('object:over', function(e) {		
		  //e.target.setFill('red');
		  //canvas.renderAll();
		});
		
 		canvas.on('object:out', function(e) {		
		  //e.target.setFill('green');
		  //canvas.renderAll();
		});
		 		 	 
		document.getElementById('add-text').onclick = function() {
			var text = $("#text-string").val();
		    var textSample = new fabric.Text(text, {
		      left: fabric.util.getRandomInt(0, 200),
		      top: fabric.util.getRandomInt(0, 400),
		      fontFamily: 'helvetica',
		      angle: 0,
		      fill: '#000000',
		      scaleX: 0.5,
		      scaleY: 0.5,
		      fontWeight: '',
	  		  hasRotatingPoint:true
			 
		    });
			 //var price =$(this).attr('name');
			var fullprice=$('#price').html();
			var newprice=parseInt(fullprice) + parseInt(258);
			$('#price').html(newprice);		//dispaly total	     
			$('#price2').html(newprice);		    
			$('#price3').val(newprice);	//display total for ordering	    
            canvas.add(textSample);	
            canvas.item(canvas.item.length-1).hasRotatingPoint = true;    
            $("#texteditor").css('display', 'block');
            $("#imageeditor").css('display', 'block');
	  	};
	  	$("#text-string").keyup(function(){	  		
	  		var activeObject = canvas.getActiveObject();
		      if (activeObject && activeObject.type === 'text') {
		    	  activeObject.text = this.value;
		    	  canvas.renderAll();
		      }
	  	});
	  	$(".img-polaroid").click(function(e){
	  		var el = e.target;
	  		/*temp code*/
	  		var offset = 50;
	        var left = fabric.util.getRandomInt(0 + offset, 200 - offset);
	        var top = fabric.util.getRandomInt(0 + offset, 400 - offset);
	        var angle = fabric.util.getRandomInt(-20, 40);
	        var width = fabric.util.getRandomInt(30, 50);
	        var opacity = (function(min, max){ return Math.random() * (max - min) + min; })(0.5, 1);
	        /**/
			var price =$(this).attr('alt');
			var fullprice=$('#price').html();
			var newprice=parseInt(fullprice) + parseInt(258);
			$('#price').html(newprice);	//dispaly total	    
			$('#price2').html(newprice);		    
			$('#price3').val(newprice);	//display total for ordering
			/**/
	  		fabric.Image.fromURL(el.src, function(image) {
		          image.set({
		            left: left,
		            top: top,
		            angle: 0,
		            padding: 10,
		            cornersize: 10,
	      	  		hasRotatingPoint:true
		          });
		          //image.scale(getRandomNum(0.1, 0.25)).setCoords();
		          canvas.add(image);
		        });
	  	});	  		  
	  document.getElementById('remove-selected').onclick = function() {		  
		    var activeObject = canvas.getActiveObject(),
		        activeGroup = canvas.getActiveGroup();
				
			var price =$('this').attr('alt');
			//alert('Do you want to delete it?');
			var fullprice=$('#price').html();
			var newprice=parseInt(fullprice) - parseInt(258);			
			$('#price').html(newprice);
			$('#price2').html(newprice);		    
			$('#price3').val(newprice);
			
			
		    if (activeObject) {
		      canvas.remove(activeObject);
		      $("#text-string").val("");
		    }
		    else if (activeGroup) {
		      var objectsInGroup = activeGroup.getObjects();
		      canvas.discardActiveGroup();
		      objectsInGroup.forEach(function(object) {
		        canvas.remove(object);
				
		      });
			  
		    }
	  };
	  document.getElementById('bring-to-front').onclick = function() {		  
		    var activeObject = canvas.getActiveObject(),
		        activeGroup = canvas.getActiveGroup();
		    if (activeObject) {
		      activeObject.bringToFront();
		    }
		    else if (activeGroup) {
		      var objectsInGroup = activeGroup.getObjects();
		      canvas.discardActiveGroup();
		      objectsInGroup.forEach(function(object) {
		        object.bringToFront();
		      });
		    }
	  };
	  document.getElementById('send-to-back').onclick = function() {		  
		    var activeObject = canvas.getActiveObject(),
		        activeGroup = canvas.getActiveGroup();
		    if (activeObject) {
		      activeObject.sendToBack();
		    }
		    else if (activeGroup) {
		      var objectsInGroup = activeGroup.getObjects();
		      canvas.discardActiveGroup();
		      objectsInGroup.forEach(function(object) {
		        object.sendToBack();
		      });
		    }
	  };		  
	  $("#text-bold").click(function() {		  
		  var activeObject = canvas.getActiveObject();
		  if (activeObject && activeObject.type === 'text') {
		    activeObject.fontWeight = (activeObject.fontWeight == 'bold' ? '' : 'bold');		    
		    canvas.renderAll();
		  }
		});
	  $("#text-italic").click(function() {		 
		  var activeObject = canvas.getActiveObject();
		  if (activeObject && activeObject.type === 'text') {
			  activeObject.fontStyle = (activeObject.fontStyle == 'italic' ? '' : 'italic');		    
		    canvas.renderAll();
		  }
		});
	  $("#text-strike").click(function() {		  
		  var activeObject = canvas.getActiveObject();
		  if (activeObject && activeObject.type === 'text') {
			  activeObject.textDecoration = (activeObject.textDecoration == 'line-through' ? '' : 'line-through');
		    canvas.renderAll();
		  }
		});
	  $("#text-underline").click(function() {		  
		  var activeObject = canvas.getActiveObject();
		  if (activeObject && activeObject.type === 'text') {
			  activeObject.textDecoration = (activeObject.textDecoration == 'underline' ? '' : 'underline');
		    canvas.renderAll();
		  }
		});
	  $("#text-left").click(function() {		  
		  var activeObject = canvas.getActiveObject();
		  if (activeObject && activeObject.type === 'text') {
			  activeObject.textAlign = 'left';
		    canvas.renderAll();
		  }
		});
	  $("#text-center").click(function() {		  
		  var activeObject = canvas.getActiveObject();
		  if (activeObject && activeObject.type === 'text') {
			  activeObject.textAlign = 'center';		    
		    canvas.renderAll();
		  }
		});
	  $("#text-right").click(function() {		  
		  var activeObject = canvas.getActiveObject();
		  if (activeObject && activeObject.type === 'text') {
			  activeObject.textAlign = 'right';		    
		    canvas.renderAll();
		  }
		});	  
	  $("#font-family").change(function() {
	      var activeObject = canvas.getActiveObject();
	      if (activeObject && activeObject.type === 'text') {
	        activeObject.fontFamily = this.value;
	        canvas.renderAll();
	      }
	    });	  
		$('#text-bgcolor').miniColors({
			change: function(hex, rgb) {
			  var activeObject = canvas.getActiveObject();
		      if (activeObject && activeObject.type === 'text') {
		    	  activeObject.backgroundColor = this.value;
		        canvas.renderAll();
		      }
			},
			open: function(hex, rgb) {
				//
			},
			close: function(hex, rgb) {
				//
			}
		});		
		$('#text-fontcolor').miniColors({
			change: function(hex, rgb) {
			  var activeObject = canvas.getActiveObject();
		      if (activeObject && activeObject.type === 'text') {
		    	  activeObject.fill = this.value;
		    	  canvas.renderAll();
		      }
			},
			open: function(hex, rgb) {
				//
			},
			close: function(hex, rgb) {
				//
			}
		});
		
		$('#text-strokecolor').miniColors({
			change: function(hex, rgb) {
			  var activeObject = canvas.getActiveObject();
		      if (activeObject && activeObject.type === 'text') {
		    	  activeObject.strokeStyle = this.value;
		    	  canvas.renderAll();
		      }
			},
			open: function(hex, rgb) {
				//
			},
			close: function(hex, rgb) {
				//
			}
		});
	
		//canvas.add(new fabric.fabric.Object({hasBorders:true,hasControls:false,hasRotatingPoint:false,selectable:false,type:'rect'}));
	   $("#drawingArea").hover(
	        function() { 	        	
	        	 canvas.add(line1);
		         canvas.add(line2);
		         canvas.add(line3);
		         canvas.add(line4); 
		         canvas.renderAll();
	        },
	        function() {	        	
	        	 canvas.remove(line1);
		         canvas.remove(line2);
		         canvas.remove(line3);
		         canvas.remove(line4);
		         canvas.renderAll();
	        }
	    );
	   
	   $('.color-preview').click(function(){
		   var color = $(this).css("background-color");
		   document.getElementById("shirtDiv").style.backgroundColor = color;		   
	   });
	   
	   $('#flip').click(
		   function() {			   
			   	if ($(this).attr("data-original-title") == "Show Back View") {
			   		$(this).attr('data-original-title', 'Show Front View');			        		       
			        $("#tshirtFacing").attr("src","<?php echo base_url(); ?>assets/images/design/<?php  echo $product['apparel']['back_img'];?>");			        
			        a = JSON.stringify(canvas);
			        canvas.clear();
			        try
			        {
			           var json = JSON.parse(b);
			           canvas.loadFromJSON(b);
			        }
			        catch(e)
			        {}
			        
			    } else {
			    	$(this).attr('data-original-title', 'Show Back View');			    				    	
			    	$("#tshirtFacing").attr("src","<?php echo base_url(); ?>assets/images/design/<?php  echo $product['apparel']['front_img'];?>");			    	
			    	b = JSON.stringify(canvas);
			    	canvas.clear();
			    	try
			        {
			           var json = JSON.parse(a);
			           canvas.loadFromJSON(a);			           
			        }
			        catch(e)
			        {}
			    }		
			   	canvas.renderAll();
			   	setTimeout(function() {
			   		canvas.calcOffset();
			    },200);			   	
        });	   
	   $(".clearfix button,a").tooltip();
	   line1 = new fabric.Line([0,0,200,0], {"stroke":"#000000", "strokeWidth":1,hasBorders:false,hasControls:false,hasRotatingPoint:false,selectable:false});
	   line2 = new fabric.Line([199,0,200,399], {"stroke":"#000000", "strokeWidth":1,hasBorders:false,hasControls:false,hasRotatingPoint:false,selectable:false});
	   line3 = new fabric.Line([0,0,0,400], {"stroke":"#000000", "strokeWidth":1,hasBorders:false,hasControls:false,hasRotatingPoint:false,selectable:false});
	   line4 = new fabric.Line([0,400,200,399], {"stroke":"#000000", "strokeWidth":1,hasBorders:false,hasControls:false,hasRotatingPoint:false,selectable:false});
	 });//doc ready
	 
	 
	 function getRandomNum(min, max) {
	    return Math.random() * (max - min) + min;
	 }
	 
	 function onObjectSelected(e) {	 
	    var selectedObject = e.target;
	    $("#text-string").val("");
	    selectedObject.hasRotatingPoint = true
	    if (selectedObject && selectedObject.type === 'text') {
	    	//display text editor	    	
	    	$("#texteditor").css('display', 'block');
	    	$("#text-string").val(selectedObject.getText());	    	
	    	$('#text-fontcolor').miniColors('value',selectedObject.fill);
	    	$('#text-strokecolor').miniColors('value',selectedObject.strokeStyle);	
	    	$("#imageeditor").css('display', 'block');
	    }
	    else if (selectedObject && selectedObject.type === 'image'){
	    	//display image editor
	    	$("#texteditor").css('display', 'none');	
	    	$("#imageeditor").css('display', 'block');
	    }
	  }
	 function onSelectedCleared(e){
		 $("#texteditor").css('display', 'none');
		 $("#text-string").val("");
		 $("#imageeditor").css('display', 'none');
	 }
	 function setFont(font){
		  var activeObject = canvas.getActiveObject();
	      if (activeObject && activeObject.type === 'text') {
	        activeObject.fontFamily = font;
	        canvas.renderAll();
	      }
	  }
	 function removeWhite(){
		  var activeObject = canvas.getActiveObject();
		  if (activeObject && activeObject.type === 'image') {			  
			  activeObject.filters[2] =  new fabric.Image.filters.RemoveWhite({hreshold: 100, distance: 10});//0-255, 0-255
			  activeObject.applyFilters(canvas.renderAll.bind(canvas));
		  }	        
	 }

</script>	
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35639689-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

	    <SCRIPT type="text/javascript">
    function ValidateFileUpload() {
        var fuData = document.getElementById('fileChooser');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '') {
            alert("Please upload an image");

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {

// To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 

//The file upload is NOT an image
else {
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");

            }
        }
    }
</SCRIPT>
<SCRIPT type="text/javascript">
    function ValidateFileUpload1() {
        var fuData = document.getElementById('fileChooser1');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '') {
            alert("Please upload an image");

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {
				document.getElementById("confirm").disabled = false; 
// To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 

//The file upload is NOT an image
else {
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
                document.getElementById("confirm").disabled = true;

            }
        }
    }
</SCRIPT>
<SCRIPT type="text/javascript">
    function ValidateFileUpload2() {
        var fuData = document.getElementById('fileChooser2');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '') {
            alert("Please upload an image");

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

				if (Extension == "gif" || Extension == "png" || Extension == "bmp"
				|| Extension == "jpeg" || Extension == "jpg") {
				document.getElementById("confirm").disabled = false; 
// To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 

//The file upload is NOT an image
else {
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
                document.getElementById("confirm").disabled = true;
            }
        }
    }
</SCRIPT>

<script type="text/javascript">
$('img.artwork').hide();
function artWork(artwork){
	//alert(artwork);
	$('img.artwork').hide();		
    $('img.' + artwork).show();	            
               
	}
</script>
<script type="text/javascript">	
$('#addnew').click(function(){ 
			
				$(".colorsize").append("<table width='100%' border='1'><tr><td style='padding:10px' width='50%'>Size</td><td>Quantity</td><td>Quantity</td></tr><tr><td style='padding:10px'><select style='height:30px' id='size' name='size[]'><option selected='selected' value=''> Select </option><option value='S'> S</option><option value='M'> M</option><option value='L'> L</option><option value='XL'> XL</option></select></td><td><input type='number' min='1' max='99' name='qty[]' id='qty' placeholder='Qty'  style='padding:5px; width:20%; margin-top:7px; height:30px' maxlength='2'/></td><td>&nbsp;</td></tr></table>");
				



				});	
</script>

		<script src="<?php echo base_url(); ?>assets/js/jquery.equalheights.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
        

			<script type="text/javascript">

			jQuery(document).ready(function(){
        
			jQuery('#equalheight .eq_height').equalHeights();  
			});    
	


 $( "#dilivery_date" ).datepicker({ 
  dateFormat: "yy-mm-dd",
  changeMonth: true,//this option for allowing user to select month
      changeYear: true, //this option for allowing user to select from year range
 // maxDate: '-18Y',
  //maxDate: new Date() 
  });


    </script>
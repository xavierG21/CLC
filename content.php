<!-- View Cart Box End -->
	
					<div class='row'>
					<h2 class='tt_uppercase m_bottom_20 color_dark heading1 animate_ftr'>All Products</h2>

<!-- Products List Start -->

<?php
		
$results = $mysqli->query("SELECT id, product_code, product_name, product_desc, product_img_name, price FROM products ORDER BY id ASC");
if($results){ 
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{



$products_item .= <<<EOT

<div class='col-md-3'>
							<!--products-->

<section class='products_container clearfix m_bottom_25 m_sm_bottom_15'>
						<!--product item-->
						<div class='product_item'>
							<figure class='r_corners photoframe shadow relative hit animate_ftb long'>
								<!--product preview-->
								<a href='#' class='d_block relative pp_wrap'>
									
									<img src='photo/{$obj->product_img_name}' class='tr_all_hover' alt='' width='200' height='200'>
									<span data-toggle='modal' data-target='#view-modal' id='getProduct' data-id='{$obj->id}' class='button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none'>Quick View</span>
								</a>
								<!--description and price of product-->
								<figcaption>
									<h5 class='m_bottom_10'><a href='#' class='color_dark'> {$obj->product_name} </a></h5>
									<div class='clearfix'>
										<p class='scheme_color f_left f_size_large m_bottom_15'>{$obj->price}</p>
									</div>
									<a href='product_detail.php?id="{$obj->id}"' class='button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0'>View Description</a>
								</figcaption>
							</figure>
						</div>

						<!--product item-->
						
					</section> 
</div>

<!-- M O D A L-->
<div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog"> 
     <div class="modal-content">  
   
        <div class="modal-header"> 
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
           <h4 class="modal-title">
           <i class="glyphicon glyphicon-user"></i> Products
           </h4> 
        </div> 
            
        <div class="modal-body">                     
        	<div id="modal-loader" style="display: none; text-align: center;">
           <!-- ajax loader -->
           <img src="images/loader.gif">
           </div>
                            
           <!-- mysql data will be load here -->                          
           <div id="dynamic-content"></div>

        </div> 
                        
        <div class="modal-footer"> 
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
        </div> 
                        
    </div> 
  </div>
</div>

		
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>

</div>


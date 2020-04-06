@extends('home')
@section('populer')
<div class="title text-xs-center m-b-30">
    <h2>Popular Dishes of the Month</h2>
    <p class="lead">The easiest way to your favourite food</p>
</div>
<div class="row">		
<?php 
	// fetch records from database to display popular first 3 dishes from table
	/*$query_res= mysqli_query($db,"select * from dishes LIMIT 3"); 
      while($r=mysqli_fetch_array($query_res))
	  {
													
        echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
    			    <div class="food-item-wrap">
				        <div class="figure-wrap bg-image" data-image-src="admin/Res_img/dishes/'.$r['img'].'">
				            <div class="distance"><i class="fa fa-pin"></i>1240m</div>
				            <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
				            <div class="review pull-right"><a href="#">198 reviews</a> </div>
				        </div>
						<div class="content">
							<h5><a href="dishes.php?res_id='.$r['rs_id'].'">'.$r['title'].'</a></h5>
							<div class="product-name">'.$r['slogan'].'</div>
							<div class="price-btn-block"> <span class="price">Rs'.$r['price'].'</span> <a href="dishes.php?res_id='.$r['rs_id'].'" class="btn theme-btn-dash pull-right">Order Now</a> </div>
						</div>
				    </div>
				</div>';											
	  }	*/					
?>   
</div>

@endsection

@section('Food_categories')
<div class="row">
    <div class="col-sm-4">
        <div class="title-block pull-left">
            <h4>Food categories</h4> </div>
        </div>
        <div class="col-sm-8">
        <!-- food category filter nav starts -->
            <div class="restaurants-filter pull-right">
                <nav class="primary pull-left">
                    <ul>
                        <li><a href="#" class="selected" data-filter="*">all</a> </li>
                        <?php 
                        // display categories here
                            /*$res= mysqli_query($db,"select * from res_category");
                            while($row=mysqli_fetch_array($res))
                            {
                                echo '<li><a href="#" data-filter=".'.$row['c_name'].'"> '.$row['c_name'].'</a> </li>';
                            }
                        */?>
                                    
                    </ul>
                </nav>
            </div>
            <!-- food category filter nav ends -->
        </div>
</div>
            <!-- food category listing starts -->
<div class="row">
    <div class="restaurant-listing">
    	<?php  //fetching records from table and filter using html data-filter tag
			/*$ress= mysqli_query($db,"select * from restaurant");  
		      while($rows=mysqli_fetch_array($ress))
			  {
			// fetch records from res_category table according to catgory ID
				$query= mysqli_query($db,"select * from res_category where c_id='".$rows['c_id']."' ");
		    	 $rowss=mysqli_fetch_array($query);
				 echo ' <div class="col-xs-12 col-sm-12 col-md-6 single-restaurant all '.$rowss['c_name'].'">
			    			<div class="restaurant-wrap">
				        		<div class="row">
						    		<div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 text-xs-center">
							    		<a class="restaurant-logo" href="dishes.php?res_id='.$rows['rs_id'].'" > <img src="admin/Res_img/'.$rows['image'].'" alt="Restaurant logo"> </a>
                                    </div>
                                    <!--end:col -->
									<div class="col-xs-12 col-sm-9 col-md-12 col-lg-9">
										<h5><a href="dishes.php?res_id='.$rows['rs_id'].'" >'.$rows['title'].'</a></h5> <span>'.$rows['address'].'</span>
										<div class="bottom-part">
									    	<div class="cost"><i class="fa fa-check"></i> Min Rs 100</div>
											<div class="mins"><i class="fa fa-motorcycle"></i> 30 min</div>
											<div class="ratings"> <span>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											</span> (122) </div>
										</div>
									</div>
									<!-- end:col -->
								</div>
								<!-- end:row -->
							</div>
							<!--end:Restaurant wrap -->
						</div>';
			 }*/		
		?>
	</div>
</div>
<!-- Food category listing ends -->
@endsection
<?php

 $con = mysqli_connect("localhost","root","","electronix");

 if(mysqli_connect_errno()){
  
  echo"Failed to connect : " . mysqli_connect_error(); 
  
}


 //slider data

function sliderdata(){

	global $con;

    $get_pro = "select * from products order by RAND() LIMIT 0,1";
    $run_pro = mysqli_query($con,$get_pro);
    


    while($row_pro = mysqli_fetch_array($run_pro)){


        $product_id = $row_pro['prd_id'];
        $product_title = $row_pro['prd_title']; 
        $product_image = $row_pro['prd_img'];
        $product_description = $row_pro['prd_desc'];
          echo "
                      
       
        
        

		<div class='container'>
			<a href='register.html'><img width='1170' height='480'  src='admin_area/product_images/$product_image' alt='special offers'/></a>
				<div class='carousel-caption'>
				  <h4>$product_title</h4>
				  <p>$product_description</p>
				</div>
		 </div>




          ";


}



}


//getting categories

function getcats(){

	global $con;

	$get_cats = "select * from categories";
	$run_cats = mysqli_query($con,$get_cats);

	while($row_cats=mysqli_fetch_array($run_cats)){


		$cat_title = $row_cats['cat_title'];
        $cat_id = $row_cats['cat_id'];
	
    echo "
	
	<li class='subMenu open'><a href='index.php?cat=$cat_id'>$cat_title</a>
				
			</li>
			
			
			
			
			
			
	
	
	
	
	";
	}



}


//special producr,whats new


function special(){

	global $con;

    $get_pro = "select * from products order by RAND() LIMIT 0,1";
    $run_pro = mysqli_query($con,$get_pro);
    


    while($row_pro = mysqli_fetch_array($run_pro)){


        $product_id = $row_pro['prd_id'];
        $product_title = $row_pro['prd_title']; 
        $product_image = $row_pro['prd_img'];
        $product_price= $row_pro['prd_price'];


        echo"

       

<img src='admin_area/product_images/$product_image' alt=''/>
			<div class='caption'>
			  <h5>$product_title</h5>
				<h4 style='text-align:center'><a class='btn' href='details.php?pro_id=$product_id'> <i class='icon-zoom-in'></i></a> <a class='btn' href='details.php?pro_id=$product_id'>Add to <i class='icon-shopping-cart'></i></a> <a class='btn btn-primary' href='#'>$ $product_price</a></h4>
			</div>




        ";

}
}


function getpro3(){

	global $con;

    $get_pro = "select * from products order by RAND() LIMIT 1,1";
    $run_pro = mysqli_query($con,$get_pro);
    


    while($row_pro = mysqli_fetch_array($run_pro)){


        $product_id = $row_pro['prd_id'];
        $product_category = $row_pro['prd_cat'];
        $product_brand = $row_pro['prd_brand'];
        $product_title = $row_pro['prd_title']; 
        $product_price = $row_pro['prd_price'];
        $product_image = $row_pro['prd_img'];
        
          /*echo "<img src = 'admin_area/product_images/$row_pro[prd_img]' height=110 width=90>";*/



        echo"
                


             
			 
			 
			 
			
					<a href='details.php?pro_id=$product_id'><img src='admin_area/product_images/$product_image' alt='' width='160' height='160' border='0' ></a>
					<div class='caption'>
					  <h5>$product_title</h5>
					  <h4><a class='btn' href='details.php?pro_id=$product_id'>VIEW</a> <span class='pull-right'>$ $product_price</span></h4>
					</div>
					
				  

              


        ";


    }

}


//getting products randomly

function getpro(){


	if(!isset($_GET['cat'])){

		if(!isset($_GET['brand'])){

	global $con;

    $get_pro = "select * from products order by RAND() LIMIT 0,6";
    $run_pro = mysqli_query($con,$get_pro);
    


    while($row_pro = mysqli_fetch_array($run_pro)){


        $product_id = $row_pro['prd_id'];
        $product_category = $row_pro['prd_cat'];
        $product_brand = $row_pro['prd_brand'];
        $product_title = $row_pro['prd_title']; 
        $product_price = $row_pro['prd_price'];
        $product_image = $row_pro['prd_img'];
        
          /*echo "<img src = 'admin_area/product_images/$row_pro[prd_img]' height=110 width=90>";*/



        echo"
                
               
     

               <li class='span3'>
				  <div class='thumbnail'>
					<a  href='details.php?pro_id=$product_id'><img src='admin_area/product_images/$product_image' alt='' width='160' height='160' border='0'/></a>
					<div class='caption'>
					  <h5>$product_title</h5>
					  <p> 
						Lorem Ipsum is simply dummy text. 
					  </p>
					 
					  <h4 style='text-align:center'><a class='btn' href='details.php?pro_id=$product_id'> <i class='icon-zoom-in'></i></a> <a class='btn' href='index.php?addcart=$product_id' title='header=[Add to cart] body=[&nbsp;] fade=[on]''>Add to <i class='icon-shopping-cart'></i></a> <a class='btn btn-primary' href=''>$ $product_price</a></h4>
					</div>
				  </div>
				</li>

              


        ";


    }

    }

    }


}


function get_pro_cat(){


	if(isset($_GET['cat'])){


		$cat_id = $_GET['cat'];

		

	global $con;

    $get_pro_cat = "select * from products where prd_cat ='$cat_id' ";
    $run_pro_cat = mysqli_query($con,$get_pro_cat);
    
    $count_row = mysqli_num_rows($run_pro_cat);

     if($count_row==0){

    	echo "<script>alert('OUT OF STOCK')</script>";

    	echo "<script>window.open('index.php','_self')</script>";
    }


    while($row_pro_cat = mysqli_fetch_array($run_pro_cat)){

           


           $product_id = $row_pro_cat['prd_id'];
        $product_category = $row_pro_cat['prd_cat'];
        $product_brand = $row_pro_cat['prd_brand'];
        $product_title = $row_pro_cat['prd_title']; 
        $product_price = $row_pro_cat['prd_price'];
        $product_image = $row_pro_cat['prd_img'];
       
        

       
          /*echo "<img src = 'admin_area/product_images/$row_pro[prd_img]' height=110 width=90>";*/



        echo"
                 <li class='span3'>
				  <div class='thumbnail'>
					<a  href='details.php?pro_id=$product_id'><img src='admin_area/product_images/$product_image' alt='' width='160' height='160' border='0' /></a>
					<div class='caption'>
					  <h5>$product_title</h5>
					  <p> 
						Lorem Ipsum is simply dummy text. 
					  </p>
					 
					  <h4 style='text-align:center'><a class='btn' href='details.php?pro_id=$product_id'> <i class='icon-zoom-in'></i></a> <a class='btn' href='index.php?addcart=$product_id' title='header=[Add to cart] body=[&nbsp;] fade=[on]''>Add to <i class='icon-shopping-cart'></i></a> <a class='btn btn-primary' href=''>$ $product_price</a></h4>
					</div>
				  </div>
				</li>


               

              



        ";


    }

    }



    


}

function get_pro_brand(){


	

		if(isset($_GET['brand'])){

			$brand_id = $_GET['brand'];

	global $con;

    $get_pro = "select * from products where prd_brand = '$brand_id'";
    $run_pro = mysqli_query($con,$get_pro);
    


    while($row_pro = mysqli_fetch_array($run_pro)){


        $product_id = $row_pro['prd_id'];
        $product_category = $row_pro['prd_cat'];
        $product_brand = $row_pro['prd_brand'];
        $product_title = $row_pro['prd_title']; 
        $product_price = $row_pro['prd_price'];
        $product_image = $row_pro['prd_img'];
        
          /*echo "<img src = 'admin_area/product_images/$row_pro[prd_img]' height=110 width=90>";*/



        echo"
                 <li class='span3'>
				  <div class='thumbnail'>
					<a  href='details.php?pro_id=$product_id'><img src='admin_area/product_images/$product_image' alt='' width='160' height='160' border='0'/></a>
					<div class='caption'>
					  <h5>$product_title</h5>
					  <p> 
						Lorem Ipsum is simply dummy text. 
					  </p>
					 
					  <h4 style='text-align:center'><a class='btn' href='details.php?pro_id=$product_id'> <i class='icon-zoom-in'></i></a> <a class='btn' href='index.php?addcart=$product_id' title='header=[Add to cart] body=[&nbsp;] fade=[on]''>Add to <i class='icon-shopping-cart'></i></a> <a class='btn btn-primary' href=''>$ $product_price</a></h4>
					</div>
				  </div>
				</li>


               

              


        ";


    

    }

    }


}


function getip(){

   $ip = $_SERVER['REMOTE_ADDR'];


   if(!empty($_SERVER['HTTP_CLIENT_IP'])){
     
     $ip = $_SERVER['HTTP_CLIENT_IP'];


   }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){

     $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];


   }

    return $ip;
}


function cart(){
   
   if(isset($_GET['addcart'])) {

     global $con;
     $ip = getip();
     $pro_id = $_GET['addcart'];

     $checkpro = "select * from cart where ip_add = '$ip' AND p_id = '$pro_id'";
     $run_checkpro = mysqli_query($con,$checkpro);


     if(mysqli_num_rows($run_checkpro)>0){


       echo "";


     }else{


               $insertpro = "insert into cart (p_id,ip_add,qty) values ('$pro_id','$ip','1')";  


               $run_insertpro = mysqli_query($con,$insertpro);
               echo $ip;

               echo "<script>window.open('','_self')</script>";        



     }



     
    

   }

}

function total_items(){


   if(isset($_GET['addcart'])){

     global $con;

     $ip = getip();

     $getitems = "select * from cart where ip_add = '$ip'";
     $run_getitems = mysqli_query($con,$getitems);

     $count_items = mysqli_num_rows($run_getitems);


   }

  else{

     global $con;

     $ip = getip();

     $getitems = "select * from cart where ip_add = '$ip'";
     $run_getitems = mysqli_query($con,$getitems);

     $count_items = mysqli_num_rows($run_getitems);


  }

   echo $count_items;
}


function total_price(){

   $total = 0;
   global $con;

   $ip = getip();

   $price = "select * from cart where ip_add = '$ip'";

   $run_price = mysqli_query($con,$price) ;

   while($pprice = mysqli_fetch_array($run_price)){

      $pro_id = $pprice['p_id'];
      
      $prod_price = "select * from products where prd_id = '$pro_id'";

      $run_pro_price = mysqli_query($con,$prod_price);


      while($ppprice = mysqli_fetch_array($run_pro_price)){

         $product_price = array($ppprice['prd_price']);

         $price_sum = array_sum($product_price);

         $total +=$price_sum;

         //echo  $product_price;
         




      }
      
      

   }

   echo  $total. "&nbsp;Rs";   

}


//details data

function details(){

	global $con;


	if(isset($_GET['pro_id'])){

		$prod_id = $_GET['pro_id']; 
 
    $get_pro = "select * from products where prd_id = '$prod_id'";
    $run_pro = mysqli_query($con,$get_pro);
    


    while($row_pro = mysqli_fetch_array($run_pro)){


        $product_id = $row_pro['prd_id'];
        $product_description = $row_pro['prd_desc'];
        $product_brand = $row_pro['prd_brand'];
        $product_title = $row_pro['prd_title']; 
        $product_price = $row_pro['prd_price'];
        $product_image = $row_pro['prd_img'];
		$product_image1 = $row_pro['prd_img1'];
		$product_image2 = $row_pro['prd_img2'];
		$product_image3 = $row_pro['prd_img3'];
		


    echo"
                  

                 <div class='center_title_bar'>$product_title</div>
                 <div class='prod_box_big'>
        <div class='top_prod_box_big'></div>
        <div class='center_prod_box_big'>
          <div class='product_img_big'> <a href='javascript:popImage('admin_area/product_images/$product_image','Some Title')' title='header=[<img src=admin_area/product_images/$product_image>] body=[&nbsp;] fade=[on]'><img src='admin_area/product_images/$product_image' height=200 width=185 alt='' border='0' /></a>
            </div>
          <div class='details_big_box'>
            <div class='product_title_big'>$product_title</div>
            <div class='specifications'>
            $product_description
            </div>
            <div class='prod_price_big'> <span class='price'>Rs $product_price</span></div>
            <a href='details.php?addcart=$product_id' class='addtocart'>add to cart</a> <a href='index.php' class='compare'>Home</a> </div>
        </div>
        <div class='bottom_prod_box_big'></div>
      </div>


<div id='gallery' class='span3'>
            <a href='admin_area/product_images/$product_image' title='header=[<img src=admin_area/product_images/$product_image>] body=[&nbsp;] fade=[on]'>
				<img src='admin_area/product_images/$product_image' style='width:100%' alt='$product_title'/>
            </a>
			<div id='differentview' class='moreOptopm carousel slide'>
                <div class='carousel-inner'>
                  <div class='item active'>
                   <a href='admin_area/product_images/$product_image1'> <img style='width:29%' src='admin_area/product_images/$product_image1' alt=''/></a>
                   <a href='admin_area/product_images/$product_image2' > <img style='width:29%' src='admin_area/product_images/$product_image2' alt=''/></a>
                   <a href='admin_area/product_images/$product_image3' > <img style='width:29%' src='admin_area/product_images/$product_image3' alt=''/></a>
                  </div>
                  <div class='item'>
                   <a href='themes/images/products/large/f3.jpg' > <img style='width:29%' src='admin_area/product_images/$product_image1' alt=''/></a>
                   <a href='themes/images/products/large/f1.jpg'> <img style='width:29%' src='admin_area/product_images/$product_image2' alt=''/></a>
                   <a href='themes/images/products/large/f2.jpg'> <img style='width:29%' src='admin_area/product_images/$product_image3' alt=''/></a>
                  </div>
                </div>
             
              </div>
			  
			 <div class='btn-toolbar'>
			  <div class='btn-group'>
				<span class='btn'><i class='icon-envelope'></i></span>
				<span class='btn' ><i class='icon-print'></i></span>
				<span class='btn' ><i class='icon-zoom-in'></i></span>
				<span class='btn' ><i class='icon-star'></i></span>
				<span class='btn' ><i class=' icon-thumbs-up'></i></span>
				<span class='btn'><i class='icon-thumbs-down'></i></span>
			  </div>
			</div>
			</div>
			<div class='span6'>
				<h3>$product_title  </h3>
				<small>- $product_title</small>
				<hr class='soft'/>
				<form class='form-horizontal qtyFrm'>
				  <div class='control-group'>
					<label class='control-label'><span>$$product_price</span></label>
					<div class='controls'>
			
					 <a class='btn btn-large btn-primary pull-right' href='details.php?addcart=$product_id'> Add to cart <i class=' icon-shopping-cart'></i></a>
					</div>
				  </div>
				</form>
				
				<hr class='soft'/>
				<h4>100 items in stock</h4>
				<form class='form-horizontal qtyFrm pull-right'>
				  <div class='control-group'>
					<label class='control-label'><span>Color</span></label>
					<div class='controls'>
					  <select class='span2'>
						  <option>Black</option>
						  <option>Red</option>
						  <option>Blue</option>
						  <option>Brown</option>
						</select>
					</div>
				  </div>
				</form>
				<hr class='soft clr'/>
				<p>
				$product_description
				
				</p>




    ";
}
}
}


function Simpro1(){

	global $con;

    $get_pro = "select * from products order by RAND() LIMIT 1,1";
    $run_pro = mysqli_query($con,$get_pro);
    


    while($row_pro = mysqli_fetch_array($run_pro)){


        $product_id = $row_pro['prd_id'];
        $product_category = $row_pro['prd_cat'];
        $product_brand = $row_pro['prd_brand'];
        $product_title = $row_pro['prd_title']; 
        $product_price = $row_pro['prd_price'];
        $product_image = $row_pro['prd_img'];
        
          /*echo "<img src = 'admin_area/product_images/$row_pro[prd_img]' height=110 width=90>";*/



        echo"
                


             
			 
			 
					
					
					
				  <div class='row'>	  
					<div class='span2'>
						<img src='admin_area/product_images/$product_image' alt=''/>
					</div>
					<div class='span4'>
						<h3>New | Available</h3>				
						<hr class='soft'/>
						<h5>$product_title </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
						that is why our goods are so popular..
						</p>
						<a class='btn btn-small pull-right' href='details.php?pro_id=$product_id'>View Details</a>
						<br class='clr'/>
					</div>
					<div class='span3 alignR'>
					<form class='form-horizontal qtyFrm'>
					<h3>$ $product_price</h3>
					
					<div class='btn-group'>
					  <a href='index.php?addcart=$product_id' title='header=[Add to cart] body=[&nbsp;] fade=[on]'' class='btn btn-large btn-primary'> Add to <i class=' icon-shopping-cart'></i></a>
					  <a href='details.php?pro_id=$product_id' class='btn btn-large'><i class='icon-zoom-in'></i></a>
					 </div>
						</form>
					</div>
			</div>

              


        ";


    }

}


function Simpro2(){

	global $con;

    $get_pro = "select * from products order by RAND() LIMIT 0,3";
    $run_pro = mysqli_query($con,$get_pro);
    


    while($row_pro = mysqli_fetch_array($run_pro)){


        $product_id = $row_pro['prd_id'];
        $product_category = $row_pro['prd_cat'];
        $product_brand = $row_pro['prd_brand'];
        $product_title = $row_pro['prd_title']; 
        $product_price = $row_pro['prd_price'];
        $product_image = $row_pro['prd_img'];
        
          /*echo "<img src = 'admin_area/product_images/$row_pro[prd_img]' height=110 width=90>";*/



        echo"
                




<li class='span3'>
					  <div class='thumbnail'>
						<a href='details.php?pro_id=$product_id'><img src='admin_area/product_images/$product_image' alt=''/></a>
						<div class='caption'>
						  <h5>$product_title</h5>
						  <p> 
							Lorem Ipsum is simply dummy text. 
						  </p>
						  <h4 style='text-align:center'><a class='btn' href='details.php?pro_id=$product_id'> <i class='icon-zoom-in'></i></a> <a class='btn' href='index.php?addcart=$product_id' title='header=[Add to cart] body=[&nbsp;] fade=[on]''>Add to <i class='icon-shopping-cart'></i></a> <a class='btn btn-primary' href=''>$product_price</a></h4>
						</div>
					  </div>
					</li>

               

              


        ";


    }

    

    


}




<?php require_once('private/initiate.php'); ?>

<?php $page_title = "Home" ?>
<?php include(SHARED_PATH.'/index_header.php') ?>
    <section class="row">
    	<div class="col " id="hero">
    		<div class="current">
    			<img class="img-fluid" src="<?php echo url_for_i('images/social.jpg');?>" id="a">
    		</div>
    		<div>
    			<img class="img-fluid" src="<?php echo url_for_i('images/Download+HD+Games+Collections.jpg');?>" id="a">
    		</div>
    		<div>
    			<img class="img-fluid" src="<?php echo url_for_i('images/love-wallpaper-hd-love-wallpapers-for-mobile.jpg');?>" id="a">
    		</div>
    		<div>
    			<img class="img-fluid" src="<?php echo url_for_i('images/customar.jpg');?>" id="a">
    		</div>
    		<div>
    			<img class="img-fluid" src="<?php echo url_for_i('images/hd-game-wallpapers-1080p-hd-wallpaper-background-7521.jpg')?>" id="a">
    		</div>
    		<div>
    			<img class="img-fluid" src="<?php echo url_for_i('images/full+hd+games+widescreen+wallpapers.jpg');?>" id="a">
    		</div>
    	</div>
    </section>
    <div class="container ">
	    	<div >
	    		<h3>Best Cource/Catagory</h3>	
	    	</div><br>
	    	<div class="row">
	    	<section class="col  p-1 rounded " id="col-1"> 
	    		<img src="<?php echo url_for_i('images/system-administrator.jpg" class="rounded img-fluid');?>" id="h1">
	    	</section>
	    	<section class="col   p-1 rounded" id="col-2"> 
	    		<img src="<?php echo url_for_i('images/EthicalHacker_1200x630-01-1503616935348.jpg');?>" class="rounded " id="h2">
	    		<img src="<?php echo url_for_i('images/web dev.jpg');?>" class="rounded " id="h3">
	    	</section>
	    	<section class="col  p-1 " id="col-4"> 
	    		<img src="<?php echo url_for_i('images/software-engineers-vectors.jpg');?>" class="rounded img-fluid" id="h4">
	    	</section>
	    </div>
    </div>
    <article style="background-image: url(<?php echo url_for_i('images/IT_Security_Specialist.jpg');?>); 
            width:100%;
            height:850px;
            background-position:  center center;
            background-attachment: fixed;
            background-size: cover;
            margin-top: 50px;">
    	<h2 style="color: white;"> Tutorial Feature</h2>
    	<div class="container">
		     <div class="row">
		     	<div class="left col">
		     		<ul>
		     	 	<li><a href="#"> 1.Expert Teacher</a></li>
		     	 	<li><a href="#"> 2.Expert Teacher</a></li>
		     	 	<li><a href="#"> 3.Expert Teacher</a></li>
		     	 	<li><a href="#"> 4.Expert Teacher</a></li>
		     	 	<li><a href="#"> 5.Expert Teacher</a></li>
		     	 </ul>
		     	 	</div>
		     	</div>
		     </div>
	     

    </article> 
    
<?php include('private/shared/index_footer.php') ?>

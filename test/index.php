<!DOCTYPE html>
<html lang="en-US">
<head>
	<link rel="icon" type="image/icon" href="files/logo.png">
	<!-- css CDN link//-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<!-- boostrap icon CDN link//-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog-Mindshift</title>
    <body>
	
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
  <div class="container-fluid">
  	<img src="files/logo.png" class="logo" alt="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?#footer">Contact us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sensemaking
          </a>
          <ul class="dropdown-menu dropMenue" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item items" href="#">Mindshift</a></li>
            <li><a class="dropdown-item items" href="#">Designing School for Learning</a></li>
            <li><a class="dropdown-item items" href="#">Implementation Steps and Missteps</a></li> 
            <li><a class="dropdown-item items" href="#">Schools, Districts and States Leading the Way</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

	<!-- display modal//-->
	<div id="disModal"></div>

	<!--// front image//-->
	<img src="https://img.freepik.com/free-photo/successful-happy-business-team_53876-74892.jpg" class="front-img"	alt="image" id="fontImage">
		<div class="container mt-3">	
			<div class="row custom-row p-3">
				<div class="col-sm-10 col-md-12 col-lg-8">
					<!-- display container//-->
					<div id="display">
						<div class="text-wrap">
							<h3>
Mindshift reveals how we can overcome stereotypes and preconceived ideas about what is possible for us to learn and become.
				</h3>
At a time when we are constantly being asked to retrain and reinvent ourselves to adapt to new technologies and changing industries, this book shows us how we can uncover and develop talents we didn’t realize we had—no matter what our age or background. We’re often told to “follow our passions.” But in Mindshift, Dr. Barbara Oakley shows us how we can broaden our passions. Drawing on the latest neuroscientific insights, Dr. Oakley shepherds us past simplistic ideas of “aptitude” and “ability,” which provide only a snapshot of who we are now—with little consideration about how we can change. <br>

Even seemingly “bad” traits, such as a poor memory, come with hidden advantages—like increased creativity. Profiling people from around the world who have overcome learning limitations of all kinds, Dr. Oakley shows us how we can turn perceived weaknesses, such as impostor syndrome and advancing age, into strengths. People may feel like they’re at a disadvantage if they pursue a new field later in life; yet those who change careers can be fertile cross-pollinators
						</div>
					</div>
				<!-- end of display container//-->
				</div>
				<!--sensemaking//-->
				<div class="col-sm-10 col-md-12 col-lg-4" >
					<div class="p-3 bg-primary text-white fs-5"><b>SENSEMAKING</b></div>
			<div class="wrap">
			<div class="wrap-item item2" onclick="getText(text1)" id="text1">MindShift</div>
			<div class="wrap-item item2" onclick="getText(text2)" id="text2">Designing Schools for Learning</div>
			<div class="wrap-item item2" onclick="getText(text3)" id="text3">For Newbies</div>
			<div class="wrap-item item2" onclick="getText(text4)" id="text4">Implementation Steps and Missteps</div>
				<div class="wrap-item item2" onclick="getText(text5)" id="text5">Schools, Districts and States Leading the Way</div>
					</div>
				</div>
			</div>
		</div>
		<!-- view post container//-->
		<div class="container mt-3" id="viewPost">
			<h3>LATEST BLOG</h3>
			<?php require 'view_post.php'; ?>
			<center><button class="p-2 add_post_btn" onclick="document.location='#post'">Add new post</button></center>
		</div>

		<!-- About container//-->
		<div class="container mt-3 about-con p-4" id="about">
			<h3>ABOUT</h3><br>
			<div class="row">
				<div class="col-sm-8 col-md-12 col-lg-7">
					<div class="text-wrap">
						Building healthy leaders @ MIND SHIFT LEADERSHIP CONSULT conferenece, we expect God to raise the next generation of leaders, who are passionate and credible to build other leader too, setting up a healthy succession culture in the face of intergenerational frustration.
						It promised to be engaging, empowering and lives transforming. </br>
					
						Founded by Chris Sturgis, co-founder of CompetencyWorks and a leader in competency education, LearningEdge can help you on the path towards modernizing your school. You don’t have to be confused by all those terms — mastery, personalized, competency-based education, project-based learning and student-centered. What’s important is to build a shared vision and a shared understanding of how schools and learning experiences need to be designed for students to become lifelong learners with the know-how to apply academic knowledge and skills to solve real-world problems. LearningEdge can help.
					</div>
				</div>
				<div class="col-sm-8 col-md-12 col-lg-4">
					<div><img src="files/kenneth.jpg" class="f-img"></div>
				</div>
			</div>
		</div>

		<!-- galary//-->
		<div class="container mt-5 p-3">
			<h3>GALLERY</h3><br>
			<div class="row my-custom-row justify-content-space-around">

				<!-- first column//-->
				<div class="col-sm-8 col-md-6 col-lg-4 p-2 align-item-center">
						<div class="card" style="width: 18rem;">
  						<img src="files/baby.jpg" class="card-img-top" alt="gallery-image">
  				<div class="card-body">
    		<h5 class="card-title">Card title</h5>
    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  		  <a href="#" class="btn btn-primary">more</a>
 			 </div>
			</div>
				</div>

			<!-- second column//-->
				<div class="col-sm-8 col-md-6 col-lg-4 p-2 align-item-center">
					<div class="card" style="width: 18rem;">
  						<img src="files/baby.jpg" class="card-img-top" alt="gallery-image">
  						<div class="card-body">
    					<h5 class="card-title">Card title</h5>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  		  			<a href="#" class="btn btn-primary">more</a>
 			 </div>
			</div>
				</div>

				<!-- second column//-->
				<div class="col-sm-8 col-md-6 col-lg-4 p-2 align-item-center">
					<div class="card" style="width: 18rem;">
  						<img src="files/baby.jpg" class="card-img-top" alt="gallery-image">
  						<div class="card-body">
    					<h5 class="card-title">Skills Learning</h5>
    			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  		 		 <a href="#" class="btn btn-primary">more</a>
 			 </div>
			</div>
				</div>
				
			</div>
		</div>
<!-- post container//-->
		<div class="container p-3" id="post">
			<h3>LET'S US STAY IN TOUCH</h3>
			<div class="row">
				<div class="col-sm-8 col-md-10 col-lg-6">
					<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1" id="clientName">
</div>

<div class="input-group mb-3">
  <input type="Email" class="form-control" placeholder="Email" aria-label="Email" id="clientEmail" >
  <input type="text" class="form-control" placeholder="Tittle" aria-label="Server" id="clientTittle" >
</div>

<div class="input-group">
  <textarea class="form-control p-3 my-textarea" aria-label="With textarea" placeholder="Message"  id="clientText"></textarea>
</div><br>
<div><button class="btn btn-md bg-primary text-white" name="post_btn" id="post_btn">Submit</button></div>
				</div>

			</div>
		</div><br><br>

	<!-- footer//-->
  <footer class="text-center text-white" style="background-color: #f1f1f1;" id="footer">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-facebook"></i></a>

          <!-- Whatsapp -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-whatsapp"></i></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-google"></i></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="bi bi-instagram"></i></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="index.php">Mindshift.com</a>
  </div>
  <!-- Copyright -->
</footer>
		<style type="text/css">
			.custom-row{
				height:;
			}
			.ul{
				display: flex;
				justify-content: space-around;
				flex-direction: row;
				width: 500px;
				margin-left:250px;
				}
				.logo{
					width: 80px;
				}
				.img{
					max-width: 100%;
				}
				
				.front-img{
					width:100%;
					height:400px;
					position: relative;
				}	

				.wrap-item{
					padding-top: 20px;
					padding-bottom:20px; 
					border-bottom: solid 3px #ddd;
					font-size: 20px;
					cursor: pointer;
				}

				.items:hover{
					background: #0275d8;
					color: #fff;
				}
				.itme2{
					transition: 1s;
				}
				.item2:hover{
					color:#0275d8;
				}
				.item2:visited{
					color:#fff;
				}
				.text-wrap{
					line-height: 2.0;
				}
				.f-img{
					width: 300px;
					border:solid 8px #fff;
				}
				.gal-img{
					width: 280px;
				}
				.my-custom-row{
					background:;
				}
				.my-textarea{
					height: 120px;
				}
				.about-con{
					background:#d1d1d1;
				}
				.add_post_btn{
					width: 200px;
					border:solid 2px #0275d8;
				}
				.add_post_btn:hover{
					color: #0275d8;
				}
				.modal-container{
					width: 100%;
					height: 100%;
					position: fixed;
					left: 0;
					top: 0;
					background:rgba(10,10,10,0.7);
					z-index: 1;
				}
				.modal-wrap{
					width: 350px;
					position: absolute;
					transform: translate(-50%,-50%);
					left: 50%;
					top: 20%;

				}
				.close-modal{

					position: relative;
					top: -30px;
					left: 250px;
					border:solid 1px rgba(0,0,0,0.3);
					color:rgba(0,0,0,0.3);
					transition: 0.1s;
				}
				.close-modal:hover{
					color:rgba(0,0,0,0.8);
					border:solid 1px rgba(0,0,0,0.8);
				}
			</style>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	<script type="text/javascript">

		function closeModal(){
					document.getElementById('disModal').innerHTML='';
					document.location='index.php';
				}

		function viewModal(){
					document.getElementById('disModal').innerHTML='';
					document.location='index.php?#viewPost';
				}

		document.getElementById('post_btn').addEventListener('click',function(){
			var clientName =document.getElementById('clientName').value;
			var clientEmail =document.getElementById('clientEmail').value;
			var clientTittle =document.getElementById('clientTittle').value;
			var clientText =document.getElementById('clientText').value;

			function popupModal(sms,texts){

				var dis = '<div class="modal-container">'+
				'<div class="modal-wrap bg-light p-5 mt-5">'+
				'<button class="close-modal" onclick="closeModal()"><i class="bi bi-x"></i></button>'+
				'<div class="alert alert-success" role="alert"><i class="bi bi-check-circle-fill"></i> '+sms+'</div>'+
				'<div class="modal-text">'+texts+'</div>'+
				'<button class="btn btn-light border mt-3" onclick="viewModal()">View post</button>'+
				'</div>'+
				'</div>';

				document.getElementById('disModal').innerHTML=dis;

			}

			//post object function
			var xml = new XMLHttpRequest();
			xml.open("GET", "post_action.php?client_name="+clientName+"&client_email="+clientEmail+"&client_tittle="+clientTittle+"&client_text="+clientText+"&post_btn=", true);
			xml.onload=function(){
				if (this.status==200) {
					popupModal('Post successfully','Thanks for staying in touch with us!');
				}else{
					console.log('fail to post')
				}

			}
			xml.send();
		});





		function getText(clickText){

			//check if the click variable is empty
			if (clickText!='') {
				//document.getElementById('clickText').style.color='#fff';
				// get the text id
			var textname = clickText.id;
			// get the text tittle
			var textTittle = clickText.innerText;
			// creating an ajaxobject
			var xml = new XMLHttpRequest();
			xml.open('GET','textfiles/'+textname+'.html', true);
			xml.onload=function(){

				//check if the function status is ready
				if (this.status==200) {
					var  requestText = this.responseText;
	
					// variable the text required
					var dis =
					'<div class="fs-4"><b id="title">'+textTittle+'</b></div><br>'+
					'<div class="text-wrap">'+requestText+'</div></br>';

					document.getElementById('display').innerHTML=dis;
					document.getElementById('fontImage').src='images/'+textname+'.jpg';
					document.location='#navbar';
				}
			}// uload function end
			xml.send();
		}else{ return }//end of check statement
		}//end of getText function

	</script>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">




	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
    <link rel="stylesheet" href="admin_style.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="main.css">
    

	<title>AdminHub</title>
</head>
<body>

	<header id="header" class="header sticky-top">

		

		
      <div class="d-flex justify-content-center">

     
     

     <nav id="navmenu" class="navmenu">
       <ul>
        <li><a href="{{ route('admin.dashboard') }}" >Dashboard<br></a></li>
        <li><a href="{{ route('admin.members') }}">Members</a></li>
        
        <li><a href="{{ route('admin.Staff') }}">Staffs</a></li>
        
        
        <li><a href="{{ route('admin.event') }}">Events</a></li>
        <li><a href="{{ route('admin.message') }}"class="active">Messages</a></li>
        <li><a href="{{ route('admin.budget') }}">Budget</a></li>

        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#!" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hello, nasif </a>
                       
                        <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="accountDropdown">                          
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a>
                            </li>
                        </ul>
                    </li>
       
       <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
     </nav>
  </div>
     


 </header>


	


	
	
      <main id="content">
      @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

	<!-- CONTENT -->
	<section >
		

		<!-- MAIN -->
		
			<div class="head-title">
				<div class="center">
					<h1>Messages</h1>
					
				</div>
				
			</div>





         <section class="users">
                <div class="box-container">
                    @foreach($contacts as $contact)
                    <div class="box">
                        <p> User ID: <span>{{ $contact->user_id }}</span> </p>
                        <p> User Name: <span>{{ $contact->name }}</span> </p>
                        <p> Message: <span>{{ $contact->message }}</span> </p>
                        <!-- <a href="#" onclick="return confirm('Update this message?');" class="option-btn">Update</a> -->
                        <a href="{{ route('admin.messageEdit', $contact->contact_id) }}" class="option-btn">Update</a>

                       
                        <a href="{{ route('admin.messageDelete', $contact->contact_id) }}" onclick="return confirm('Delete this message?');" class="delete-btn">Delete</a>
                    </div>
                    @endforeach
                </div>
            </section>
        </section>
   

 
   
   


		
	
				
		</main>
		<!-- MAIN -->
	
	<!-- CONTENT -->


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	

	<script src="script.js"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education Template - Meeting Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="main.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

   

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">

        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          Edu Meeting
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li><a href="index.html">Home</a></li>
                          <li><a href="meetings.html" class="active">Meetings</a></li>
                          <li><a href="index.html">Apply Now</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="meetings.html">Upcoming Meetings</a></li>
                                  <li><a href="meeting-details.html">Meeting Details</a></li>
                              </ul>
                          </li>
                          <li><a href="index.html">Courses</a></li> 
                          <li><a href="index.html">Contact Us</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Get all details</h6>
          <h2>Online Teaching and Learning Tools</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
			<?php
$con=mysqli_connect('localhost','root','','addimission');
?>

<?php
   $select="select * from student order by id desc";
   $result=mysqli_query($con,$select);
   $num=mysqli_num_rows($result);
   echo "<table bgcolor='white',align='center'>";
   if($num>0)
   {
	  
	   echo "<tr><td colspan='12' align='center' >list of student</td></tr>";
	   echo "<tr> <td>Sr no</td>
	   <td>FirstName</td>
	   <td>LastName</td>
	   <td>Email</td>
	   <td>Password</td>
	   <td>Birtday</td>
	   <td>Gender</td>
	   <td>contact</td>
	   <td>Address</td>
	   <td>division</td>
	   <td>fees</td>
	   <td>option</td>
	   
	   </tr>";
	   $srno=1;
	   while($row=mysqli_fetch_assoc($result))
	   {
		   echo "<tr>";
		   echo "<td>".$srno."</td>";
		   echo "<td>".$row['firstname']."</td>";
		   echo "<td>".$row['lastname']."</td>";
		   echo "<td>".$row['email']."</td>";
		   echo "<td>".$row['password']."</td>";
		   echo "<td>".$row['birthday']."</td>";
		   echo "<td>".$row['gender']."</td>";
		   echo "<td>".$row['contact']."</td>";
		   echo "<td>".$row['address']."</td>";
		   echo "<td>".$row['salary']."</td>";
		   
		   
		  ?>
		    <td> <a href="delete.php?id=<?php echo $row['id'];  ?> " >Delete</a></td>
		  <td> <a href="edit.php?id=<?php echo $row['id'];  ?> " >Edit</a></td>
		  <?php
		   echo "</tr>";
		   $srno++;
	   }
	   echo "<tr><td colspan='12' align='center'><a href='login.php'>Add student</a></td></tr>";
	   echo "</table>";
   }
   
   else
   {
		echo "<script>alert('Data not Found')</script>";
   }
   
?>
    <div class="footer">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
    </div>
  </section>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>


  </body>

</html>

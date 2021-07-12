<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<?php include 'links/link.php'?>
	<?php include 'css/style.php'?>
	</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3 ">
  <a class="navbar-brand " href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptomsid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventionsid">Preventions</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<section class="corona_update container-fluid">
  <div class="mb-3">
    <h1 class="text-center text-uppercase" id="h"><b>C<span class="a"><img src ="images/1.png"  width="60" height="60" ></span>vid-19 Live Update<b></h1>
  </div>
  <div class="table-responsive">
    <table class="table-bordered table-striped text-center" id="tbval">
     <tr class="row1">
 <th rowspan="2" style="width:5%;" ><strong>S. No.</strong></th>
  <th rowspan="2" style="width:24%;" ><strong>Name of State / UT</strong></th>
  <th colspan="2" style="text-align:center;width:24%;" ><strong>Active Cases</strong></th>
  
  <th colspan="2" style="text-align:center;width:24%;" ><strong>Cured/Discharged/Migrated</strong></th>
  <th colspan="2" style="text-align:center;width:24%;" ><strong>Deaths</strong></th>
  </tr>
  <tr class="row2"><th style='width: 12%;'>Total Active Cases</th><th style='width: 12%;'><span class="mob-hide"></span><span class="mob-show">New Infected</span></th>
  <th style='width: 12%;'>Recovered</th><th style='width: 12%;'>New Recovered</th>
  <th style='width: 12%;'>Deceased</th><th style='width: 12%;'>New Deceased</th></tr>

  
<?php

$data = file_get_contents('https://api.apify.com/v2/key-value-stores/toDWvRj1JpTXiM8FF/records/LATEST?disableRedirect=true');
$coronadata=json_decode($data,true);

$statecount = count($coronadata['regionData']);

$i=0;

while($i < $statecount )
{
 ?>
 <tr>
  <td>
    <?php echo $i+1 ?> 
  </td>

  <td>
<?php echo $coronadata['regionData'][$i]['region'] ?>

  </td>


 
  <td>
<?php echo $coronadata['regionData'][$i]['activeCases'] ?>

  </td>


 
  <td>
<?php echo $coronadata['regionData'][$i]['newInfected'] ?>

  </td>


 
  <td>
<?php echo $coronadata['regionData'][$i]['recovered'] ?>

  </td>
  <td>
<?php echo $coronadata['regionData'][$i]['newRecovered'] ?>

  </td>


 
  <td>
<?php echo $coronadata['regionData'][$i]['deceased'] ?>

  </td>


 

  <td>
<?php echo $coronadata['regionData'][$i]['newDeceased'] ?>

  </td>
 </tr>
<?php

$i++;
}



?>

    </table>

  </div>
</section>
      <div class="something sub_section pt-5 pb-5" id="aboutid">
	       <div class="section text-center mb-5 mt-4">
			   <h1> <b>About COVID-19</b></h1>
		    </div>
		    <div class="row pt-5">
			<div class="col-lg-5 col-md-6 col-12 ml-5">
			<img src="images/2.jpg" class="img-fluid">
		    </div>
	        <div class="col-lg-6 col-md-6 col-12">
			     <h2> What is COVID-19 ? (CORONA VIRUS)</h2>
			     <br>
			     <p>COVID-19 is a disease caused by a new strain of coronavirus. 'CO' stands for corona, 'VI' for virus, and 'D' for disease. Formerly, this disease was referred to as '2019 novel coronavirus' or '2019-nCoV.'</p>
			     <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).</p>
			     <p>The World Health Organization (WHO) has added another COVID strain to its list of coronavirus variants to keep an eye on: the COVID-19 Lambda variant. This particular variant has now spread to more than two dozen countries, with a heavy concentration in South America.</p>
			 </div>
			</div>
		</div>
		
	

	    <div class="s sub  pt-5 pb-5" id="symptomsid">
	         <div class="section text-center mb-5 mt-4">
			      <h1><b>Coronavirus Symotoms</b></h1>
		     </div>
		    <div class="container">
		        <div class="row " >
			        <div class="col-lg-4 col-md-4 col-12 mt-5">
				         <figure class="tex-center">
                             <img src="images/s.png" class="img-fluid" width="180" height="180">
            
                         </figure>
                        </div>
                         <div class="col-lg-4 col-md-4 col-12 mt-5 ">
				         <figure class="tex-center">
                               <img src="images/s1.png" class="img-fluid" width="180" height="180">
                                  
                          </figure>
                      </div>
                     <div class="col-lg-4 col-md-4 col-12 mt-5">
                          <figure class="tex-center">
                              <img src="images/s2.png" class="img-fluid" width="180" height="180">
                                
                          </figure>
                      </div>
                      <div class="col-lg-4 col-md-4 col-12 mt-5">
                          <figure class="tex-center">
                                <img src="images/s3.png" class="img-fluid" width="180" height="180">
                                    
                           </figure>
                    </div>
                     <div class="col-lg-4 col-md-4 col-12 mt-5">
                          <figure class="tex-center">
                                <img src="images/s4.png" class="img-fluid" width="180" height="180">
                                    
                           </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-5 ">
                          <figure class="tex-center">
                                <img src="images/s5.png" class="img-fluid" width="180" height="180">
                                    
                           </figure>
                    </div>
                </div>
            </div>
		 <div class="p sub_section  pt-5 pb-5" id="preventionsid">
           <div class="section text-center mb-5 mt-4">
            <h1><b>Preventions against COVID-19</b></h1>
          </div>
        <div class="container">
            <div class="row " >
              <div class="col-lg-4 col-md-4 col-12 mt-5 pb-5">
                 <figure class="tex-center">
                             <img src="images/p1.png" class="img-fluid" width="130" height="130">
            
                         </figure>
              </div>
              <div class="col-lg-4 col-md-4 col-12 mt-5 pb-5">
                      <figure class="tex-center">
                               <img src="images/p2.png" class="img-fluid" width="130" height="130">
                                  
                          </figure>
              </div>
                     <div class="col-lg-4 col-md-4 col-12 mt-5 pb-5">
                          <figure class="tex-center">
                              <img src="images/p3.png" class="img-fluid" width="130" height="130">
                                
                          </figure>
                      </div>
                      
<div class="col-lg-4 col-md-4 col-12 mt-5 pb-5">
                          <figure class="tex-center">
                                <img src="images/p5.png" class="img-fluid" width="130" height="130">
                                    
                           </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-5 pb-5 ">
                          <figure class="tex-center">
                                <img src="images/p6.png" class="img-fluid" width="130" height="130">
                                    
                           </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-5 pb-5">
                          <figure class="tex-center">
                                <img src="images/p7.png" class="img-fluid" width="130" height="130">
                                    
                           </figure>
                    </div>
                    
                </div>
            </div>
    <div class="container scrolltop float-right pr-5">
      <i class="fa fa-arrow-up" onclick="topFunction()" id="button"></i>
    </div>

</body>
</html>
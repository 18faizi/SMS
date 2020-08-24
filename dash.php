<!doctype html>
<html lang="en">

<style>
    

    /* PRICE TABLE */
.row-flex {
    display: flex;
    flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
}

.price-table {
    max-width: 400px;
    min-height: 320px;
    background-color: #fff;
    border-radius: 0 0 0 25px;
    border: 1px solid #ccc;
    box-shadow: 5px 5px 8px #ccc;
    display: block;
    margin: 10px auto;
    padding: 0 0 8px 0;
    text-align: center;
}

.price-table span {
    display: block;
}


.price-table span:first-child {
    padding: 16px 0 0 0;
    font-size: 2em;
    text-transform: uppercase;
    font-weight: bold;
}

.price-table span:nth-child(2) {
    padding: 0 0 16px 0;
}

.price-table span:nth-child(3) {
    padding: 8px 0;
    font-weight: bold;
    font-size: 1.2em;
}

.price-table > ul {
    list-style: none;
    display: block;
    padding: 0;
    margin: 0;
}

.price-table > ul > li {
    display: block;
    padding: 8px 0;
}

.price-table > ul > li:first-child {
    border-top: 1px solid #ccc;
}

.price-table > ul > li {
    border-bottom: 1px solid #ccc;
}

.price-table a,
.price-table a:active,
.price-table a:focus,
.price-table a:hover,
.price-table a:visited {
    text-transform: uppercase;
    display: inline-block;
    padding: 8px 16px;
    text-decoration: none;
    font-weight: bold;
    transition-duration: .2s;
}

/* Colors */
.pt-bg-black span:first-child {
    background-color: #212121;
    color: #fcfcfc;
}

.pt-bg-black span:nth-child(2) {
    background-color: #212121;
    color: #D5D8DC;
}

.pt-bg-black a {
    border: 3px solid #212121;
    color: #212121;
    margin-top: 8px;
}

.pt-bg-black a:hover {
    background-color: #212121;
    color: #fff;
} /* End Color Black */

.pt-bg-green span:first-child {
    background-color: #27AE60;
    color: #fcfcfc;
}

.pt-bg-green span:nth-child(2) {
    background-color: #27AE60;
    color: #D5D8DC;
}

.pt-bg-green a {
    border: 3px solid #27AE60;
    color: #27AE60;
    margin-top: 8px;
}

.pt-bg-green a:hover {
    background-color: #27AE60;
    color: #fff;
} /* End Color Green */

.pt-bg-red span:first-child {
    background-color: #C0392B;
    color: #fcfcfc;
}

.pt-bg-red span:nth-child(2) {
    background-color: #C0392B;
    color: #D5D8DC;
}

.pt-bg-red a {
    border: 3px solid #C0392B;
    color: #C0392B;
    margin-top: 8px;
}

.pt-bg-red a:hover {
    background-color: #C0392B;
    color: #fff;
} /* End Color Red */

.pt-bg-blue span:first-child {
    background-color: #2980B9;
    color: #fcfcfc;
}

.pt-bg-blue span:nth-child(2) {
    background-color: #2980B9;
    color: #D5D8DC;
}

.pt-bg-blue a {
    border: 3px solid #2980B9;
    color: #2980B9;
    margin-top: 8px;
}

.pt-bg-blue a:hover {
    background-color: #2980B9;
    color: #fff;
} /* End Color Blue */
/* END PRICE TABLE */


</style>
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>AFAQ</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation library for notifications   -->
    <link href="vendor/dist/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
   <link href="vendor/dist/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
              <a href=""><img src="http://test.afaq.edu.pk/wp-content/uploads/2016/11/logo-and-shaping-the-future.png"></a>
            </div>

            <ul class="nav">
                <!-- <li>
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li> -->
                <li class="active">
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p> Sales Email List</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Zone Emails</p>
                    </a>
                </li>
                <li>
                    <a href="ViewReport.html">
                        <i class="pe-7s-science"></i>
                        <p>View Sales Report</p>
                    </a>
                </li>
                    <li >
                    <a href="HODmail.html">
                        <i class="pe-7s-bell"></i>
                        <p>Head Office Mails</p>
                    </a>
                </li>
                <li> 
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <!-- <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li> -->
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">AFAQ Sales Report Emails</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                       <!--  <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li> -->
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">3</span>
									<p class="hidden-lg hidden-md">
										Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                       <!--  <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li> -->
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Options
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                       <!--  <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li> -->
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                 <div class="row row-flex">
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-black">
                <div>
                    <span>Peshawar </span>
                     <span>Devision</span>
                </div>
                <ul>
                    <li><a href="mailto:majirshah@afaq.edu.pk;?subject=[Peshawar Sales Analysis   [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
nmadni@afaq.edu.pk;
mbadshah@afaq.edu.pk;
malam@afaq.edu.pk">Peshawar</a></li>
                    <li><a href="mailto:majirshah@afaq.edu.pk;?subject=[Abbotabad Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
basharat.hussain@afaq.edu.pk;
nmadni@afaq.edu.pk;
mshaban@afaq.edu.pk
">Abbotabad</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-green">
                <div>
                    <span>Mardan </span>
                      <span>Devision</span>
                </div>
                <ul>
                    <li><a href="mailto:ahmadyar@afaq.edu.pk;?subject=[Mardan Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
zahid.rehman@afaq.edu.pk;
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
nmadni@afaq.edu.pk;
hamid.hussain@afaq.edu.pk
">Mardan</a></li>

    <li><a href="mailto:ahmadyar@afaq.edu.pk;?subject=[Mardan Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
zahid.rehman@afaq.edu.pk;
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
nmadni@afaq.edu.pk;
hamid.hussain@afaq.edu.pk
">Nowshera</a></li>
              
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-red">
                <div>
                    <span>Malakand </span>
                    <span>Devision</span>
    
                </div>
                <ul>
                    <li><a href="mailto:mali@afaq.edu.pk?subject=[Malakand Sales Analysis 11-12-2019 [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
nmadni@afaq.edu.pk;
za.khankcl@afaq.edu.pk;
">Malakand</a></li>
                    <li><a href="mailto:mali@afaq.edu.pk?subject=[Swat Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
nmadni@afaq.edu.pk;
zahid.hussain@afaq.edu.pk">Swat</a></li>

  <li><a href="mailto:mali@afaq.edu.pk?subject=[Shangla Buner Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
nmadni@afaq.edu.pk;
aalam@afaq.edu.pk
">Shangla Buner</a></li>
                   
                </ul>
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-blue">
                <div>
                    <span>Islamabad</span>
                    <span>Devision</span>
                 
                </div>
                <ul>
                    <li> <a href="mailto:aqqureshi@afaq.edu.pk?subject=[Islamabad Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
aabbasi@afaq.edu.pk;
sabir@afaq.edu.pk;
nmadni@afaq.edu.pk
">Islamabad</a></li>
            <li><a href="mailto:aqqureshi@afaq.edu.pk?subject=[Rawalpindi Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
ahsan.h@afaq.edu.pk;
nmadni@afaq.edu.pk
">Rawalpindi</a></li>

 <li><a href="mailto:aqqureshi@afaq.edu.pk?subject=[Rawalpindi Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
aaziz@afaq.edu.pk;
nmadni@afaq.edu.pk
">Attock</a></li>

  <li><a href="mailto:aqqureshi@afaq.edu.pk?subject=[Chakwal Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
aaziz@afaq.edu.pk;
nmadni@afaq.edu.pk;
m.mannan.rasheed@afaq.edu.pk
">Chakwal</a></li>
            <li><a href="mailto:aqqureshi@afaq.edu.pk?subject=[Sargodha North Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
abdulr@afaq.edu.pk;
fazal.elahi@afaq.edu.pk;
nmadni@afaq.edu.pk
">Sargodha North</a></li>

            <li><a href="mailto:aqqureshi@afaq.edu.pk?subject=[Sargodha South Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
umar.ali@afaq.edu.pk;
nmadni@afaq.edu.pk
">Sargodha South</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row row-flex">
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-black">
                <div>
                    <span>Cent. Punjab </span>
                     <span>Devision</span>
                </div>
                <ul>
                    <li><a href="mailto:tbasharat@afaq.edu.pk?subject=[Faisalabad Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
aahmad@afaq.edu.pk;
m.habib@afaq.edu.pk
">Faisalabad</a></li>

                    <li><a href="mailto:tbasharat@afaq.edu.pk?subject=[Toba Tek Singh Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
mrizwan@afaq.edu.pk
">Toba Tek Singh</a></li>
                    <li><a href="mailto:tbasharat@afaq.edu.pk?subject=[Sahiwal Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
akarim@afaq.edu.pk;
">Sahiwal</a></li>
                     <li><a href="mailto:tbasharat@afaq.edu.pk?subject=[Sheikhupura Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
kshahzad@afaq.edu.pk
">Sheikhupura</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-green">
                <div>
                    <span>South Punjab </span>
                      <span>Devision</span>
                </div>
                <ul>
         <li><a href="mailto:akhan@afaq.edu.pk?subject=[Bahawalpur Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
zulfiqar.alishad@afaq.edu.pk
">Bahawalpur</a></li>
        <li><a href="mailto:akhan@afaq.edu.pk?subject=[D.I Khan Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
naveedzafar@afaq.edu.pk;
qazis@afaq.edu.pk;
">D.I Khan</a></li>
                <li><a href="mailto:akhan@afaq.edu.pk?subject=[Multan Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
bsiddiqui@afaq.edu.pk;
multan@afaq.edu.pk">Multan</a></li>
              
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-red">
                <div>
                    <span>Lahore </span>
                    <span>Devision</span>
    
                </div>
                <ul>
            <li><a href="mailto:fkhurshid@afaq.edu.pk?subject=[Gujranwala Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
adeelkhan@afaq.edu.pk;
hassankhalid@afaq.edu.pk
">Gujranwala</a></li>
    <li><a href="mailto:fkhurshid@afaq.edu.pk?subject=[Lahore North Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
srehman@afaq.edu.pk;
hassankhalid@afaq.edu.pk
">Lahore North</a></li>
                <li><a href="mailto:fkhurshid@afaq.edu.pk?subject=[Lahore South Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
sukhan@afaq.edu.pk;
hassankhalid@afaq.edu.pk
">Lahore South</a></li>

           <li><a href="mailto:fkhurshid@afaq.edu.pk?subject=[Lahore West Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
sukhan@afaq.edu.pk;
m.shahid@afaq.edu.pk;
hassankhalid@afaq.edu.pk
">Lahore West</a></li>
                   
                </ul>
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-blue">
                <div>
                    <span>Sialkot</span>
                    <span>Devision</span>
                 
                </div>
                <ul>
            <li> <a href="mailto:irasool@afaq.edu.pk?subject=[Gujrat Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
irasool@afaq.edu.pk;
afzal.shakir@afaq.edu.pk
">Gujrat</a></li>
            <li><a href="mailto:irasool@afaq.edu.pk?subject=[Sialkot Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
hmakram@afaq.edu.pk;
">Sialkot</a></li>
                </ul>
            </div>
        </div>
    </div>

      <div class="row row-flex">
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-black">
                <div>
                    <span>Khi South</span>
                     <span>Devision</span>
                </div>
                <ul>
         <li><a href="mailto:zqadri@afaq.edu.pk?subject=[Hyderabad Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
faheem.haider@afaq.edu.pk;
rmustafa@afaq.edu.pk;
mathar@afaq.edu.pk
">Hyderabad</a></li>

     <li><a href="mailto:zqadri@afaq.edu.pk?subject=[Hyderabad Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
arslan.chohan@afaq.edu.pk;
rmustafa@afaq.edu.pk;
mathar@afaq.edu.pk
">Nawabshah</a></li>
            <li><a href="mailto:zqadri@afaq.edu.pk?subject=[Karachi South Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
mfaisal@afaq.edu.pk;
mathar@afaq.edu.pk
">Karachi South</a></li>
         <li><a href="mailto:zqadri@afaq.edu.pk?subject=[Karachi East Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
umair.saeed@afaq.edu.pk;
mathar@afaq.edu.pk;
">Karachi East</a></li>
 <li><a href="mailto:zqadri@afaq.edu.pk?subject=[Karachi Malir Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
iqbal.hussain1@afaq.edu.pk;
mathar@afaq.edu.pk
">Karachi Malir </a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-green">
                <div>
                    <span>Karachi Cent. </span>
                      <span>Devision</span>
                </div>
                <ul>
        <li><a href="mailto:mpervez@afaq.edu.pk?subject=[Quetta Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
mathar@afaq.edu.pk;
quetta@afaq.edu.pk;
m.ejaz@afaq.edu.pk
">Quetta</a></li>

    <li><a href="mailto:mpervez@afaq.edu.pk?subject=[Makran Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
mathar@afaq.edu.pk;
fahmed@afaq.edu.pk
">Makran </a></li>
                <li><a href="mailto:mpervez@afaq.edu.pk?subject=[Karachi CW Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
mathar@afaq.edu.pk;
ealam@afaq.edu.pk;
">Karachi C&W</a></li>
                    <li><a href="mailto:mpervez@afaq.edu.pk?subject=[Sukkur-1 Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
mathar@afaq.edu.pk;
shoaiburrehman@afaq.edu.pk;
imemon@afaq.edu.pk;
">Sukkur</a></li>

        <li><a href="mailto:mpervez@afaq.edu.pk?subject=[Sukkur-2 Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
mathar@afaq.edu.pk;
waqar.mazhar@afaq.edu.pk;
imemon@afaq.edu.pk;
">Sukkur2</a></li>
              
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-red">
                <div>
                    <span>AJK </span>
                    <span>Devision</span>
    
                </div>
                <ul>
                    <li><a href="mailto:sabbasi@afaq.edu.pk?subject=[AJK Poonch Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
msagheer@afaq.edu.pk;
nmadni@afaq.edu.pk
">Poonch</a></li>

     <li><a href="mailto:sabbasi@afaq.edu.pk?subject=[AJK Mirpur Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
gulraiz.ansari@afaq.edu.pk;
nmadni@afaq.edu.pk
">Mirpur</a></li>
               <li><a href="mailto:sabbasi@afaq.edu.pk?subject=[Gilgit Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
nmadni@afaq.edu.pk;
welayat.begal@hotmail.com;
sabbasi@afaq.edu.pk">Gilgit</a></li>
           <li><a href="mailto:sabbasi@afaq.edu.pk?subject=[Muzaffarabad Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
sabbasi@afaq.edu.pk;
nmadni@afaq.edu.pk;
naeem.ur.rehman@afaq.edu.pk;
gmtabassum@afaq.edu.pk
">Muzaffarabad North</a></li>

   <li><a href="mailto:sabbasi@afaq.edu.pk?subject=[Muzaffarabad Sales Analysis 11-12-2019  [2019-20]%20&cc=warsishahid@yahoo.com; 
marketing@afaq.edu.pk; 
uayub@afaq.edu.pk; 
kaleem@afaq.edu.pk; 
asif.ali@afaq.edu.pk;
sabbasi@afaq.edu.pk;
nmadni@afaq.edu.pk;
wajid.hamid@afaq.edu.pk;
gmtabassum@afaq.edu.pk
">Muzaffarabad South</a></li>
                   
                   
                </ul>
                
            </div>
        </div>
   
    </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>


    </div>
</div>
<SCRIPT>
	
	n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
</SCRIPT>

</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>

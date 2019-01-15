<?php /*echo "welcome to".$page_name;*/?>
<?php
    $included_page=APPPATH.'/views/shared_pages/input_fields.php';
	include($included_page);
?>
<?php echo validation_errors();?>

<div class="jumbotron" style="background-image: url('<?Php echo base_url();?>assets/images/home/clinic.jpg');border-radius:unset">
	<div class="container">
		<div class="row">
			 <div class="col-lg-8 col-md-5 col-sm-12">
                <h1 class="heading">Delivering World Class Diagnostic &amp; Patient Care.</h1>
                <a href="<?php echo base_url();?>about" class="btn btn-primary" style="color: white;">About Us</a> &nbsp;&nbsp; 
            </div>
            <div class="col-lg-4 col-md-7 col-sm-12">
                <div class="slider-box-appointment appointCol">
                    <div class="header">
                        <h3 class="heading">Book an Appointment</h3>
                    </div>
                    <hr class="hr-2">
	                <div class="body contactMainDiv">                    
						<?php
						 echo form_open('patient_c/book_appointment');					 
						 make_input_fields_other('text','p_name','Your Full Name');
						 make_input_fields_other('email','p_email','Your Email');
	         			?>
			            <div class="form-row">
				            <div class="form-group col-md-6">
				              <!-- <label>Phone Number*</label> -->
				              <input type="number" class="form-control book-input" name='p_phone' placeholder='Your phone No.' autofocus required>
				            </div>
				            <div class="form-group col-md-6">
				              <!-- <label>Medical Service*</label> -->
				              <select class="form-control book-input">
				                <option selected>Select Service</option>
				                    <option value=''>Dental</option>
				                    <option value=''>Family Medicin</option>
				                    <option value=''>Others</option>
				              </select>
				           	</div>            
			          	</div>
			        	<div class="form-row">
				            <div class="form-group col-md-6">
				              <!-- <label>Appointment Date*</label> -->
				              <input type="date" class="form-control book-input" name='appt_date' placeholder='Appointment Date' autofocus required>
							</div>
				            <div class="form-group col-md-6">
				              <!-- <label>Appointment Slot*</label> -->
				              <select id="inputState" class="form-control book-input">
				                <option selected>Appointment Slot</option>
				                    <option value=''>09:00 A.M - 12:00 P.M</option>
				                    <option value=''>12:00 P.M - 04:00 P.M</option>
				                    <option value=''>04:00 P.M - 08:00 P.M</option>
				              </select>
				            </div>            
			          	</div>

				        <?php make_textarea_field_other('appt_note',"Your any notes for the doctor's office");?>         
					 	<button type='submit' class='btn btn-black btn-block'>Book Appointement</button>
					</div><!-- end body-contant div -->
				</div><!-- end slider-box div -->
			</div><!-- end div col-lg-4 -->
		</div><!-- end div row -->
	</div><!-- end div container -->
</div><!-- end tag of jumbornto page -->

   
<div class="home-services">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="heading inverse text-center">Our Services</h2>
			</div>
			<div class="col-md-6">
				<ul class="department-list">
				    <li>
				    <a href="#">
				    <span class="list-icon">
				    <em class="med-icon icon-i-radiology"></em>
				    </span>
				    <span class="list-text">
				    <strong>Radiology</strong>
				    </span>
				    </a>
				    </li>
				    <li>
				    <a href="#">
				    <span class="list-icon">
				    <em class="med-icon icon-i-dental"></em>
				    </span>
				    <span class="list-text">
				    <strong>General Dentistry</strong>
				    </span>
				    </a>
				    </li>
				    
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="department-list">
				    <li>
				    <a href="/our-services/orthodontics">
				    <span class="list-icon">
				    <em class="med-icon icon-i-dental"></em>
				    </span>
				    <span class="list-text">
				    <strong>Orthodontics</strong>
				    </span>
				    </a>
				    </li>
				    <li>
				    <a href="/our-services/homeopathy">
				    <span class="list-icon">
				    <em class="med-icon icon-i-alternative-complementary"></em>
				    </span>
				    <span class="list-text">
				    <strong>Homeopathy</strong>
				    </span>
				    </a>
				    </li>				    
				</ul>
			</div>
		</div>
	</div>
</div>

<div id="dnn_callerDiv" class="home-call">
    <div class="container"> 
        <div class="row">
            <div class="col-sm-6" style="background-color:#007bff">
            	<div>
                <div class="left"  >
                    <h3 class="inverse font-2 font24">Whenever you need. <strong>Wherever you need.</strong></h3>
                    <p class="inverse">We offer free Pickup and Drop-off Services to our patients from anywhere in Dubai. </p>
                </div>
                </div>
            </div>
            <div class="col-sm-6" style="background-color:#303b41">
                <div class="right">
                    <i class="fa fa-headphones"></i>
                    <span class="call-us"><strong class="inverse text-capitalize font20">Call us now!</strong><br>
                        +967 1 457911</span>
                </div>
            </div>
        </div>
    </div>
</div>

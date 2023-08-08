<?php 
/*template name: Calculator Page*/
get_header(); ?>

<style>
.highlight {border: 5px solid #366092; padding: 20px;}
.form-title {text-align: center; margin-bottom: 40px; color: #366092;}
.calc-form-container {margin-left: auto; margin-right: auto;}
#calculator {padding: 30px; color: #366092; margin-left: auto; margin-right: auto;}
#calculator input[type=text],#calculator textarea,#calculator input[type=number], input[type=tel], input[type=email] {
	padding: 10px;
	width: 95%;
	border: 0px;
	border-bottom: 1px solid #fff;
	font-family: 'OpenSansRegular';
    font-size: 12px;
    line-height: 22px;
    color: #555;
    background-color: #efefef; 
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.09) inset;
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.09) inset;
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.09) inset;
    -o-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.09) inset;
    transition: all 0.2s linear;
    -moz-transition: all 0.2s linear;
    -webkit-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
}

.bg-lt-gray {background-color: #dee2e2; padding-top: 10px; padding-left: 10px;}
.bg-dk-gray {background-color: #aaabab; padding-top: 10px; padding-left: 10px;}

.hide-results {opacity: 0; height: 0px;}
.add-results {opacity: 1;}

input#ft-employees-input.empty-input, input#pt-employees-input.empty-input, input#ft-avg-hours-input.empty-input, input#pt-avg-hours-input.empty-input, 
input#ft-avg-pay-rate-input.empty-input, input#pt-avg-pay-rate-input.empty-input, input#ft-fringe-rate-input.empty-input, 
input#pt-fringe-rate-input.empty-input {box-shadow: inset 0 0 2px 2px red;}

.inputcurrency {padding-left: 20px!important;}

.hidden-field, .hidden-field2, .hidden-field3 {opacity: 0; height: 0px;}
#calculator input[type=submit], #calculator button[type=submit], #calculator input[type="button"] {display: block; margin-right: auto; margin-left: auto; width: 50%; max-width: 300px; padding: 15px; background-color: #1c457d;}
#calculator input[type=submit]:hover, #calculator button[type=submit]:hover, #calculator input[type="button"]:hover {opacity: .8;}
.label-title {margin-bottom: -45px;}
#calculator h1 {color: #366092; margin-bottom: 20px; text-align: center;}
#calculator h4 {color: #366092; margin-bottom: 20px; text-align: center; font-size: 1.8em;}
#calculator h5 {color: #366092; margin-bottom: 20px; padding-top: 20px; text-align: center; clear: both;}
.hide {max-height: 0px; opacity: 0;}
.div-wrap-hide {max-height: 0px; opacity: 0; margin-bottom: 0px;}
.col1-hidden, .col2-hidden, .col3-hidden, .col4-hidden {max-height: 0px; opacity: 0; margin-bottom: 0px;}
.hidden-field {max-height: 0px; opacity: 0;}

@media (max-width:600px) {
	#calculator {width: 95%;}
	.calc-form-container {width: 95%;}
}

@media (min-width:1024px) {
	.calc-form-container {width: 67%;}
	#calculator {width: 92%;}
	#mobile-only {display: none;}
	#calculator input[type=submit], #calculator button[type=submit], #calculator input[type="button"] {font-size: 2em;}
	.form-title {font-size: 2em;}
	.divider-wrap {width: 100%; overflow: hidden; margin-bottom: 30px;}
	.divider-1 {width: 50%; float: left;}
	.divider-2 {width: 50%; float: right;}
	.row-wrap {clear: both; min-height: 40px; display: table; width: 100%;}
	.bottom-wrap {min-height: 40px; width: 100%;}
	.col1 {width: 25%; display: table-cell; vertical-align: middle;}
	.col2, .col3, .col4 {width: 25%; display: table-cell; vertical-align: middle;}
	.bottom1 {width: 33.333%; float: left;}
	.bottom2, .bottom3, .bottom4 {width: 33.333%; float: left; text-align: center; max-height: 20px;}
	.bg-lt-gray {border-right: 1px solid gray;}
	.bg-dk-gray {border-right: 1px solid gray;}
	.align-right {text-align: right; padding-right: 10px;}
}
@media (max-width:1023px) {
	#calculator input[type=submit], #calculator button[type=submit], #calculator input[type="button"] {font-size: 1.4em;}
	.divider-wrap {width: 100%; overflow: hidden; margin-bottom: 30px;}
	.form-title {font-size: 1.5em;}
	#desktop-only {display: none;}
	.divider-1 {width: 100%;}
	.divider-2 {width: 100%;}
	.col1 {width: 100%;}
	.col2, .col3, .col4 {width: 100%;}
	.bottom1 {width: 100%;}
	.bottom2, .bottom3, .bottom4 {width: 100%;}
}

.input-icon {
  position: relative;
}

.input-icon > i {
  position: absolute;
  display: block;
  transform: translate(0, -50%);
  top: 50%;
  pointer-events: none;
  width: 25px;
  text-align: center;
  font-style: normal;
}

.input-icon > input {
  padding-left: 25px;
  padding-right: 0;
}

.input-icon-right > i {
  right: 0;
}

.input-icon-right > input {
  padding-left: 0;
  padding-right: 25px;
  text-align: right;
}
</style>

<?php nectar_page_header($post->ID); ?>

<div class="container-wrap">
	
	<div class="container main-content">
		
		<div class="row">
		
		<!-- **************** Calculator Form  *********************** -->
		<form name="calculator" id="calculator" method="post">
		<h1>How much can your company save by providing <br>Bona-Fide Fringe Benefits instead of "Cash in Lieu"</h1>
		<em><p>* Indicates Required Fields</p></em>
			
			<p class="label-title"><strong>* Enter Number of Employees</strong><p>
			<div class="divider-wrap">
				<div class="divider-1">
					<label>Full Time</label>
					<input type="number" placeholder="" id="ft-employees-input" min="1" value="0" required>
				</div>
				<div class="divider-2">
					<label>Part Time</label>
					<input type="number" placeholder="" id="pt-employees-input" min="1" value="0" required>
				</div>
			</div>
			
			<p class="label-title"><strong>Enter Average Weekly Hours</strong><p>
			<div class="divider-wrap">
				<div class="divider-1">
					<label>Full Time</label>
					<input type="number" placeholder="Full Time" value="40" id="ft-avg-hours-input" required>
				</div>
				<div class="divider-2">
					<label>Part Time</label>
					<input type="number" placeholder="Part Time" value="20" id="pt-avg-hours-input" required>
				</div>
			</div>
			
			<p class="label-title"><strong>* Enter Average Employee Hourly Rate of Pay</strong><p>
			<div class="divider-wrap">
				<div class="divider-1">
					<label>Full Time</label>
					<div class="input-icon">
					<i>$</i>
					<input type="number" placeholder=" " class="inputcurrency" value="0" step=".01" id="ft-avg-pay-rate-input" min="1.00" required>
					</div>
				</div>
				<div class="divider-2">
					<label>Part Time</label>
					<div class="input-icon">
					<i>$</i>
					<input type="number" placeholder=" " class="inputcurrency" value="0" step=".01" id="pt-avg-pay-rate-input" min="1.00" required>
					</div>
				</div>
			</div>
			
			<p class="label-title"><strong>Enter Current Fringe Rate</strong><p>
			<div class="divider-wrap">
				<div class="divider-1">
					<label>Full Time</label>
					<div class="input-icon">
					<i>$</i>
					<input type="number" placeholder=" " class="inputcurrency" value="<?php the_field('current_fringe_rate'); ?>" step=".01" id="ft-fringe-rate-input" required>
					</div>
				</div>
				<div class="divider-2">
					<label>Part Time</label>
					<div class="input-icon">
					<i>$</i>
					<input type="number" placeholder=" " class="inputcurrency" value="<?php the_field('current_fringe_rate'); ?>" step=".01" id="pt-fringe-rate-input" required>
					</div>
				</div>
			</div>
			
			<input type="button" value="Calculate" onclick="calculate();">
			<div class="divider-border"></div>
			
			<div id="scroll-to-results"></div>
			<div id="show-results" class="hide-results">
			
				<div class="divider-wrap">
				
				<div class="row-wrap">
				<div class="col1"><p>&nbsp;</p></div>
				<div class="col2 align-right"><p><strong><span id="desktop-only">Full Time</span></strong></p></div>
				<div class="col3 align-right"><p><strong><span id="desktop-only">Part Time</span></strong></p></div>
				<div class="col4 align-right"><p><strong><span id="desktop-only">Total</span></strong></p></div>
				</div>
				
					<div class="row-wrap">
					<div class="col1 bg-dk-gray"><p><strong>Average Annual Hours</strong></p></div>
					<div class="col2 bg-dk-gray align-right"><p><span id="mobile-only">Full Time: </span><span id="ft-avg-annual-hours-wrapper"></span> Hrs.</p></div>
					<div class="col3 bg-dk-gray align-right"><p><span id="mobile-only">Part Time: </span><span id="pt-avg-annual-hours-wrapper"></span> Hrs.</p></div>
					<div class="col4 bg-dk-gray align-right"><p><span id="mobile-only">Total: </span><span id="total-avg-annual-hours-wrapper"></span> Hrs.</p></div>
					</div>
					
					<div class="row-wrap">
					<div class="col1 bg-lt-gray"><p><strong>Gross Wages</strong></p></div>
					<div class="col2 bg-lt-gray align-right"><p><span id="mobile-only">Full Time: </span>$<span id="ft-gross-wages"></span></p></div>
					<div class="col3 bg-lt-gray align-right"><p><span id="mobile-only">Part Time: </span>$<span id="pt-gross-wages"></span></p></div>
					<div class="col4 bg-lt-gray align-right"><p><span id="mobile-only">Total: </span>$<span id="total-gross-wages"></span></p></div>
					</div>
					
					<div class="row-wrap">
					<div class="col1 bg-dk-gray"><p><strong>Employer Payroll Burden %</strong></p></div>
					<div class="col2 bg-dk-gray align-right"><p><span id="mobile-only">Full Time: </span><span id="ft-payroll-burden"></span> %</p></div>
					<div class="col3 bg-dk-gray align-right"><p><span id="mobile-only">Part Time: </span><span id="pt-payroll-burden"></span> %</p></div>
					<div class="col4 bg-dk-gray align-right"><p><span id="mobile-only">Total: </span><span id="total-payroll-burden"></span> %</p></div>
					</div>
					
					<div class="row-wrap">
					<div class="col1 bg-lt-gray"><p><strong>SCA Obligation Per Employee Per Year</strong></p></div>
					<div class="col2 bg-lt-gray align-right"><p><span id="mobile-only">Full Time: </span>$<span id="ft-annual-sca"></span></p></div>
					<div class="col3 bg-lt-gray align-right"><p><span id="mobile-only">Part Time: </span>$<span id="pt-annual-sca"></span></p></div>
					<div class="col4 bg-lt-gray align-right"><p><span id="mobile-only">Total: </span>$<span id="total-annual-sca"></span></p></div>
					</div>
					
					<div class="row-wrap">
					<div class="col1 bg-dk-gray"><p><strong>Company Cost When Providing Fringe Benefits</strong></p></div>
					<div class="col2 bg-dk-gray align-right"><p><span id="mobile-only">Full Time: </span>$<span id="ft-sca-benefits"></span></p></div>
					<div class="col3 bg-dk-gray align-right"><p><span id="mobile-only">Part Time: </span>$<span id="pt-sca-benefits"></span></p></div>
					<div class="col4 bg-dk-gray align-right"><p><span id="mobile-only">Total: </span>$<span id="total-sca-benefits"></span></p></div>
					</div>
					
					<div class="row-wrap">
					<div class="col1 bg-lt-gray"><p><strong>Company Cost When Providing Cash In Lieu of Benefits</strong></p></div>
					<div class="col2 bg-lt-gray align-right"><p><span id="mobile-only">Full Time: </span>$<span id="ft-sca-cash-benefits"></span></p></div>
					<div class="col3 bg-lt-gray align-right"><p><span id="mobile-only">Part Time: </span>$<span id="pt-sca-cash-benefits"></span></p></div>
					<div class="col4 bg-lt-gray align-right"><p><span id="mobile-only">Total: </span>$<span id="total-sca-cash-benefits"></span></p></div>
					</div>
					
				</div>


				<div class="divider-wrap highlight">
				<h4><strong>Total Estimated Savings</strong></h4>
					
					<div class="bottom-wrap">
					<div class="bottom2"><span id="desktop-only"><p><strong>Full Time</strong></p></span></div>
					<div class="bottom3"><span id="desktop-only"><p><strong>Part Time</strong></p></span></div>
					<div class="bottom4"><span id="desktop-only"><p><strong>Total</strong></p></span></div>
					</div>
					
					<div class="bottom-wrap">
					<div class="bottom2"><p><span id="mobile-only">Full Time: </span>$<span id="ft-final-savings"></span></p></div>
					<div class="bottom3"><p><span id="mobile-only">Part Time: </span>$<span id="pt-final-savings"></span></p></div>
					<div class="bottom4"><p><span id="mobile-only">Total: </span>$<span id="total-final-savings"></span></p></div>
					</div>
					
				</div>
		

			<!-- **** DO NOT DISCLOSE THESE VALUES PUBLICLY ON WEBSITE!! *** -->
			<div class="divider-wrap-hide hide">
			<div class="col1-hidden"><p><strong>SOCIAL SECURITY (DELETE WHEN DONE)</strong></p></div>
				<div class="col4-hidden"><p>Total: $<span id="total-social-sec"></span></p></div>
				<div class="col3-hidden"><p>Part Time: $<span id="pt-social-sec"></span></p></div>
				<div class="col2-hidden"><p>Full Time: $<span id="ft-social-sec"></span></p></div>
			</div>

			<div class="divider-wrap-hide hide">
			<div class="col1-hidden"><p><strong>MEDICARE (DELETE WHEN DONE)</strong></p></div>
				<div class="col4-hidden"><p>Total: $<span id="total-medicare"></span></p></div>
				<div class="col3-hidden"><p>Part Time: $<span id="pt-medicare"></span></p></div>
				<div class="col2-hidden"><p>Full Time: $<span id="ft-medicare"></span></p></div>
			</div>

			<div class="divider-wrap-hide hide">
			<div class="col1-hidden"><p><strong>F.U.I (DELETE WHEN DONE)</strong></p></div>
				<div class="col4-hidden"><p>Total: $<span id="total-fui"></span></p></div>
				<div class="col3-hidden"><p>Part Time: $<span id="pt-fui"></span></p></div>
				<div class="col2-hidden"><p>Full Time: $<span id="ft-fui"></span></p></div>
			</div>

			<div class="divider-wrap-hide hide">
			<div class="col1-hidden"><p><strong>S.U.I (DELETE WHEN DONE)</strong></p></div>
				<div class="col4-hidden"><p>Total: $<span id="total-sui"></span></p></div>
				<div class="col3-hidden"><p>Part Time: $<span id="pt-sui"></span></p></div>
				<div class="col2-hidden"><p>Full Time: $<span id="ft-sui"></span></p></div>
			</div>

			<div class="divider-wrap-hide hide">
			<div class="col1-hidden"><p><strong>Wcomp (DELETE WHEN DONE)</strong></p></div>
				<div class="col4-hidden"><p>Total: $<span id="total-wcomp"></span></p></div>
				<div class="col3-hidden"><p>Part Time: $<span id="pt-wcomp"></span></p></div>
				<div class="col2-hidden"><p>Full Time: $<span id="ft-wcomp"></span></p></div>
			</div>

			<div class="divider-wrap-hide hide">
			<div class="col1-hidden"><p><strong>Total Burden (DELETE WHEN DONE)</strong></p></div>
				<div class="col4-hidden"><p>Total: $<span id="total-burden"></span></p></div>
				<div class="col3-hidden"><p>Part Time: $<span id="pt-burden"></span></p></div>
				<div class="col2-hidden"><p>Full Time: $<span id="ft-burden"></span></p></div>
			</div>
				<!-- **** STUFF THAT SHOULD NOT BE PUBLICLY DISCLOSED ON WEBSITE *** -->
		</form>
		<!-- **************** End Calculator Form  *********************** -->
		
		<div id="post-area" class="calc-form-container">
				<?php 
				
				if(have_posts()) : while(have_posts()) : the_post(); ?>
					
					<?php the_content(); ?>
	
				<?php endwhile; endif; ?>
				
			</div><!--end post area -->
			
		</div><!-- End Reveal Class -->
		
		<!-- **************** Calculator Functions *********************** -->
		<script>
			
			function calculate(){

	// *************  Variables & Inputs *********************** //

	
				// Number of Employees (Input Values)
				var ftEmployees = document.getElementById("ft-employees-input").value;
				var ptEmployees = document.getElementById("pt-employees-input").value;
				var allEmployees = ptEmployees + ftEmployees;
				
				// Avg. Weekly Hours (Input Values)
				var ftAvgWeeklyHours = document.getElementById("ft-avg-hours-input").value;
				var ptAvgWeeklyHours = document.getElementById("pt-avg-hours-input").value;
				
				// Current Fringe Rate (Input Values)
				var ftFringeRate = document.getElementById("ft-fringe-rate-input").value;
				var ptFringeRate = document.getElementById("pt-fringe-rate-input").value;
				
				// Avg. Hourly Pay Rate (Input Values)
				var ftAvgHourlyPay = document.getElementById("ft-avg-pay-rate-input").value;
				var ptAvgHourlyPay = document.getElementById("pt-avg-pay-rate-input").value;
				
				// Average Annual Hours (Calculated Values)
				var ftAvgAnnualHours;
				var ptAvgAnnualHours;
				var totalAvgAnnualHours;
				
				

				// VERIFY THAT ALL REQUIRED FIELDS HAVE BEEN FILLED IN
				
					// Verifty # of employees input
					if (ftEmployees < 1 ){
						console.log('Empty');
						document.getElementById("ft-employees-input").classList.add('empty-input');
						alert("Please fill out all required fields");
						return;
					} else {
						document.getElementById("ft-employees-input").classList.remove('empty-input');
					}
					
					if (ptEmployees < 1){
						console.log('Empty');
						document.getElementById("pt-employees-input").classList.add('empty-input');
						alert("Please fill out all required fields");
						return;
					} else {
						document.getElementById("pt-employees-input").classList.remove('empty-input');
					}
					
					// Verifty Avg weekly hours input
					if (ftAvgWeeklyHours === ''){
						console.log('Empty');
						document.getElementById("ft-avg-hours-input").classList.add('empty-input');
						alert("Please fill out all required fields");
						return;
					} else {
						document.getElementById("ft-avg-hours-input").classList.remove('empty-input');
					}
					
					if (ptAvgWeeklyHours === ''){
						console.log('Empty');
						document.getElementById("pt-avg-hours-input").classList.add('empty-input');
						alert("Please fill out all required fields");
						return;
					} else {
						document.getElementById("pt-avg-hours-input").classList.remove('empty-input');
					}
					
					// Verify hourly pay input
					if (ftAvgHourlyPay < 1.00 ){
						console.log('Empty');
						document.getElementById("ft-avg-pay-rate-input").classList.add('empty-input');
						alert("Please fill out all required fields");
						return;
					} else {
						document.getElementById("ft-avg-pay-rate-input").classList.remove('empty-input');
					}
					
					if (ptAvgHourlyPay < 1.00 ){
						console.log('Empty');
						document.getElementById("pt-avg-pay-rate-input").classList.add('empty-input');
						alert("Please fill out all required fields");
						return;
					} else {
						document.getElementById("pt-avg-pay-rate-input").classList.remove('empty-input');
					}
					
					// Verify fringe rate input
					if (ftFringeRate === ''){
						console.log('Empty');
						document.getElementById("ft-fringe-rate-input").classList.add('empty-input');
						alert("Please fill out all required fields");
						return;
					} else {
						document.getElementById("ft-fringe-rate-input").classList.remove('empty-input');
					}
					
					if (ptFringeRate === ''){
						console.log('Empty');
						document.getElementById("pt-fringe-rate-input").classList.add('empty-input');
						alert("Please fill out all required fields");
						return;
					} else {
						document.getElementById("pt-fringe-rate-input").classList.remove('empty-input');
					}
					
				// REVEAL RESULTS SECTION ON BUTTON CLICK
				function showResults() {
					document.getElementById("show-results").classList.remove('hide-results');
					document.getElementById("show-results").classList.add('display-results');
				}
				showResults();
				
				
				//SCROLL TO BEINNING OF RESULTS
				function scrollWin() {
					document.getElementById('scroll-to-results').scrollIntoView() + window.scrollBy(0, -200);
				}
				scrollWin();

				// OTHER NEEDED VALUES FOR CALCULATION OF FRINGE BURDEN

				// Social security
				var socialSecurityRate = '<?php the_field('social_security_rate'); ?>' / 100;  // editable value
				var fullSocialSecurity;
				var partSocialSecurity;
				var totalSocialSecurity;

				//Medicare
				var medicareRate = '<?php the_field('medicare_rate'); ?>' / 100;  // editable value
				var fullMedicare;
				var partMedicare;
				var totalMedicare;

				// F.U.I
				var fuiRate = '<?php the_field('fui_rate'); ?>' / 100;  // editable value
				var fullFui;
				var partFui;
				var totalFui;

				// S.U.I
				var suiRate = '<?php the_field('sui_rate'); ?>' / 100;  // editable value
				var fullSui;
				var partSui;
				var totalSui;

				// Wcomp values
				var WcompRate = '<?php the_field('wcomp_rate'); ?>' / 100;  // editable value
				var fullWcomp;
				var partWcomp;
				var totalWcomp;

				// Payroll Burnden %
				var fullPayrollBurden;
				var partPayrollBurden;
				var totalPayrollBurden;

				// Total Full Burden
				var fullTotalBurden;
				var partTotalBurden;
				var totalTotalBurden;

	// *************  Calculations *********************** //
				
				// Average Annual Hours
				function calculateAvgAnnualHours() {
					ftAvgAnnualHours = ftAvgWeeklyHours * 52;
					ptAvgAnnualHours = ptAvgWeeklyHours * 52;
					totalAvgAnnualHours = (ftAvgAnnualHours + ptAvgAnnualHours) / 2;
									

					document.getElementById("ft-avg-annual-hours-wrapper").innerHTML = ftAvgAnnualHours.toLocaleString();
					document.getElementById("pt-avg-annual-hours-wrapper").innerHTML = ptAvgAnnualHours.toLocaleString();
					document.getElementById("total-avg-annual-hours-wrapper").innerHTML = totalAvgAnnualHours.toLocaleString();
				}
				calculateAvgAnnualHours();
				
				// Average Gross Wages (Calculated Values)
				var annualGrossFullTimeWages;
				var annualGrossPartTimeWages;
				var annualGrossTotalWages;
				
				// Average Gross Wages
				function calculateAnnualGrossWages() {
					annualGrossFullTimeWages = ftEmployees * ftAvgHourlyPay * ftAvgAnnualHours;
					annualGrossPartTimeWages = ptEmployees * ptAvgHourlyPay * ptAvgAnnualHours;
					annualGrossTotalWages = Math.round(annualGrossFullTimeWages) + Math.round(annualGrossPartTimeWages);

					document.getElementById("ft-gross-wages").innerHTML = annualGrossFullTimeWages.toLocaleString();
					document.getElementById("pt-gross-wages").innerHTML = annualGrossPartTimeWages.toLocaleString();
					document.getElementById("total-gross-wages").innerHTML = annualGrossTotalWages.toLocaleString();
				}
				calculateAnnualGrossWages();

				
				// Annual SCA Obligations
				function calculateAnnualSca() {
					annualFullTimeScaOb = ftAvgAnnualHours * ftFringeRate;
					annualPartTimeScaOb = ptAvgAnnualHours * ptFringeRate;
					annualTotalScaOb = annualFullTimeScaOb + annualPartTimeScaOb;
					
					document.getElementById("ft-annual-sca").innerHTML = Math.round(annualFullTimeScaOb).toLocaleString();
					document.getElementById("pt-annual-sca").innerHTML = Math.round(annualPartTimeScaOb).toLocaleString();
					document.getElementById("total-annual-sca").innerHTML = Math.round(annualTotalScaOb).toLocaleString();
				}
				calculateAnnualSca();
				
				
				// Company SCA to apply towards benefits
				function calculateScaBenefits() {
					fullTimeScaBennefits = annualFullTimeScaOb * ftEmployees;
					partTimeScaBennefits = annualPartTimeScaOb * ptEmployees;
					totalScaBennefits = fullTimeScaBennefits + partTimeScaBennefits;
					
					document.getElementById("ft-sca-benefits").innerHTML = Math.round(fullTimeScaBennefits).toLocaleString();
					document.getElementById("pt-sca-benefits").innerHTML = Math.round(partTimeScaBennefits).toLocaleString();
					document.getElementById("total-sca-benefits").innerHTML = Math.round(totalScaBennefits).toLocaleString();
				}
				calculateScaBenefits();


				// Calculate social security figures
				function calculateSocialSecurity() {
					fullSocialSecurity = annualGrossFullTimeWages * socialSecurityRate;
					partSocialSecurity = annualGrossPartTimeWages * socialSecurityRate;
					totalSocialSecurity = fullSocialSecurity + partSocialSecurity;

					
					document.getElementById("ft-social-sec").innerHTML = Math.round(fullSocialSecurity).toLocaleString();
					document.getElementById("pt-social-sec").innerHTML = Math.round(partSocialSecurity).toLocaleString();
					document.getElementById("total-social-sec").innerHTML = Math.round(totalSocialSecurity).toLocaleString();
				}
				calculateSocialSecurity();


				// Calculate medicare figures
				function calculateMedicare() {
					fullMedicare = annualGrossFullTimeWages * medicareRate;
					partMedicare = annualGrossPartTimeWages * medicareRate;
					totalMedicare = fullMedicare + partMedicare;

					
					document.getElementById("ft-medicare").innerHTML = Math.round(fullMedicare).toLocaleString();
					document.getElementById("pt-medicare").innerHTML = Math.round(partMedicare).toLocaleString();
					document.getElementById("total-medicare").innerHTML = Math.round(totalMedicare).toLocaleString();
				}
				calculateMedicare();


				// Calculate F.U.I rates
				function calculateFui() {
					fullFui = 7000 * fuiRate;
					partFui = 7000 * fuiRate;
					totalFui = fullFui + partFui;

					
					document.getElementById("ft-fui").innerHTML = Math.round(fullFui).toLocaleString();
					document.getElementById("pt-fui").innerHTML = Math.round(partFui).toLocaleString();
					document.getElementById("total-fui").innerHTML = Math.round(totalFui).toLocaleString();
				}
				calculateFui();


				// Calculate S.U.I rates
				function calculateSui() {
					fullSui = 8500 * suiRate;
					partSui = 8500 * suiRate;
					totalSui = fullSui + partSui;

					
					document.getElementById("ft-sui").innerHTML = Math.round(fullSui).toLocaleString();
					document.getElementById("pt-sui").innerHTML = Math.round(partSui).toLocaleString();
					document.getElementById("total-sui").innerHTML = totalSui.toLocaleString();
				}
				calculateSui();


				// Calculate Wcomp rates
				function calculateWcomp() {
					fullWcomp = annualGrossFullTimeWages * WcompRate;
					partWcomp = annualGrossPartTimeWages * WcompRate;
					totalWcomp = fullWcomp + partWcomp;

					
					document.getElementById("ft-wcomp").innerHTML = Math.round(fullWcomp).toLocaleString();
					document.getElementById("pt-wcomp").innerHTML = Math.round(partWcomp).toLocaleString();
					document.getElementById("total-wcomp").innerHTML = Math.round(totalWcomp).toLocaleString();
				}
				calculateWcomp();
				

				// Calculate Total Burden
				function calculateTotalBurden() {
					fullTotalBurden = fullSocialSecurity + fullMedicare + fullFui + fullSui + fullWcomp;
					partTotalBurden = partSocialSecurity + partMedicare + partFui + partSui + partWcomp;
					totalTotalBurden = fullTotalBurden + partTotalBurden;

					
					document.getElementById("ft-burden").innerHTML = Math.round(fullTotalBurden).toLocaleString();
					document.getElementById("pt-burden").innerHTML = Math.round(partTotalBurden).toLocaleString();
					document.getElementById("total-burden").innerHTML = Math.round(totalTotalBurden).toLocaleString();
				}
				calculateTotalBurden();


				// Average Payroll Burden %
				function calculateAvgPayrollBurden() {


						// Full Time
					if (annualGrossFullTimeWages == 0) {
						 fullPayrollBurden == 0;
					} else {
						 fullPayrollBurden = Math.round(fullTotalBurden) / annualGrossFullTimeWages;
					}
						// Part Time
					if (annualGrossPartTimeWages == 0) {
						 partPayrollBurden == 0;
					} else {
						 partPayrollBurden = Math.round(partTotalBurden) / annualGrossPartTimeWages;
					}
						// Total
					if (fullPayrollBurden == 0 && partPayrollBurden == 0 ) {
						 totalPayrollBurden == 0;
					} else {
						 totalPayrollBurden = (fullPayrollBurden + partPayrollBurden) / 2;
					}

					document.getElementById("ft-payroll-burden").innerHTML = Math.trunc(fullPayrollBurden * 100);
					document.getElementById("pt-payroll-burden").innerHTML = Math.trunc(partPayrollBurden * 100) ;
					document.getElementById("total-payroll-burden").innerHTML = Math.trunc(totalPayrollBurden * 100);
				}
				calculateAvgPayrollBurden();


				// Company SCA to apply towards benefits in cash Lieu
				function calculateScaCashBenefits() {
					fullTimeScaCashBennefits =  fullTimeScaBennefits * (1 + fullPayrollBurden);
					partTimeScaCashBennefits = partTimeScaBennefits * (1 + partPayrollBurden);
					totalScaCashBennefits = fullTimeScaCashBennefits + partTimeScaCashBennefits;
					
					document.getElementById("ft-sca-cash-benefits").innerHTML = Math.round(fullTimeScaCashBennefits).toLocaleString();
					document.getElementById("pt-sca-cash-benefits").innerHTML = Math.round(partTimeScaCashBennefits).toLocaleString();
					document.getElementById("total-sca-cash-benefits").innerHTML = Math.round(totalScaCashBennefits).toLocaleString();
				}
				calculateScaCashBenefits();


				// Final total savings to apply fringe toward benefits
				function calculateFinalSavings() {
					fullTimeFinalSavings =  fullTimeScaCashBennefits - fullTimeScaBennefits;
					partTimeFinalSavings = partTimeScaCashBennefits - partTimeScaBennefits;
					totalFinalSavings = fullTimeFinalSavings + partTimeFinalSavings;
					
					document.getElementById("ft-final-savings").innerHTML = Math.round(fullTimeFinalSavings).toLocaleString();
					document.getElementById("pt-final-savings").innerHTML = Math.round(partTimeFinalSavings).toLocaleString();
					document.getElementById("total-final-savings").innerHTML = Math.round(totalFinalSavings).toLocaleString();


						var finalFullTimeResults = Math.round(fullTimeFinalSavings).toLocaleString();
						var finalPartTimeResults = Math.round(partTimeFinalSavings).toLocaleString();
						var finalTotalResults = Math.round(totalFinalSavings).toLocaleString();

				// Final results to pass to contact form
				
						var finalFullTimeResultsInput = document.getElementsByClassName('hidden-field')[0];
						finalFullTimeResultsInput.setAttribute('value', finalFullTimeResults);
						
						var finalFullTimeResultsInput = document.getElementsByClassName('hidden-field2')[0];
						finalFullTimeResultsInput.setAttribute('value', finalPartTimeResults);
						
						var finalFullTimeResultsInput = document.getElementsByClassName('hidden-field3')[0];
						finalFullTimeResultsInput.setAttribute('value', finalTotalResults);
				}
				calculateFinalSavings();

			}
			
		</script>
		
			
			
		</div><!--/row-->
		
	</div><!--/container-->

</div><!--/container-wrap-->

<?php get_footer(); ?>
<?php 
/*template name: Calculator Version 3*/
get_header(); ?>

<style>
.highlight {border: 5px solid #366092; padding: 20px;}
.form-title {text-align: center; margin-bottom: 40px; color: #366092;}
.calc-form-container {margin-left: auto; margin-right: auto;}
#calculator {padding: 30px; color: #366092; margin-left: auto; margin-right: auto;}
.wpcf7 input[type=text], .wpcf7 input[type=tel], .wpcf7 input[type=email] {width: 100%; max-width: 100%;}

div#wpcf7-f1049-p1130-o1.wpcf7 form.wpcf7-form p span.wpcf7-form-control-wrap.your-name input.wpcf7-form-control.wpcf7-text.wpcf7-validates-as-required {width: 100%; max-width: 100%;}

#calculator input[type=text],#calculator textarea,#calculator input[type=number], #calculator input[type=tel], #calculator input[type=email] {
	padding: 10px;
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
input#ft-avg-pay-rate-input.empty-input, input#pt-avg-pay-rate-input.empty-input, input#ft-fringe-rate-input.empty-input, input#pt-fringe-rate-input.empty-input, 
input#ft-avg-pay-burden-input.empty-input, input#pt-avg-pay-burden-input.empty-input  {box-shadow: inset 0 0 2px 2px red;}

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

@media (min-width:1350px) {
	#calculator input[type=text],#calculator textarea,#calculator input[type=number], input[type=tel], input[type=email] {width: 73%; max-width: 335px;}
}

@media (min-width:1024px) {
	.calc-container {width: 100%; overflow: hidden;}
	.calc-form-container {width: 67%;}
	#mobile-only {display: none;}
	#calculator input[type=submit], #calculator button[type=submit], #calculator input[type="button"] {font-size: 2em;}
	#calculator input[type=text],#calculator textarea,#calculator input[type=number], input[type=tel], input[type=email] {width: 55%;}
	.form-title {font-size: 2em;}
	.left-side {float: left; width: 40%;}
	.right-side {float: right; width: 60%;}
	.divider-wrap {width: 100%; overflow: hidden; margin-bottom: 30px;}
	.divider-wrap-top {width: 75%; overflow: hidden; margin-bottom: 30px;}
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
	.align-center {text-align: center;}
}
@media (max-width:1023px) {
	#calculator input[type=submit], #calculator button[type=submit], #calculator input[type="button"] {font-size: 1.4em;}
	#calculator input[type=text],#calculator textarea,#calculator input[type=number], input[type=tel], input[type=email] {width: 100%;}
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

/* =============== Tooltip CSS ==================== */
.tooltip {
    position: relative;
    display: inline;
	cursor: pointer;
	background-color: rgba(118,172,35,.9);
    padding: 5px;
    color: #fff;
}


.tooltiptext {
    visibility: hidden;
    width: 350px;
    background-color: #555;
    color: #fff;
    border-radius: 6px;
    padding: 30px;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: -30%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 1s;
}


.tooltip-wrapper {
	position: relative;
	display: inline-block;
}
.tooltip-wrapper:hover .tooltip-text {
	display: block;
}
.tooltip-btn {
	cursor: pointer;
	background-color: #1c457d;
	color: #fff;
    padding: 5px;
	display: inline-block;
	margin-left: 14px;
}
.tooltip-text {
	display: none;
	width: 350px;
    background-color: #555;
    color: #fff;
    border-radius: 6px;
    padding: 20px;
	position: absolute;
	top: 0;
	left: 0;
	transform: translateY(-103%);
}

.in-the-line {display: inline-block;}

</style>

<?php nectar_page_header($post->ID); ?>

<div class="container-wrap">
	
	<div class="container main-content">
		
		<div class="row">
		
		<!-- **************** Calculator Form  *********************** -->
		<form name="calculator" id="calculator" method="post">
		<h1>How much can your company save by providing <br>Bona-Fide Fringe Benefits instead of "Cash in Lieu" of Benefits</h1>
		<p>&nbsp;</p>
		
		<div class="calc-container">
		
		<div class="left-side">
		
		<p><strong>For your company please enter the following:</strong></p>
			
			<p class="label-title"><strong>Number of Employees</strong><p>
			<div class="divider-wrap-top">
				<div class="divider-1">
					<label>Full Time*</label><br>
					<input type="number" placeholder="" id="ft-employees-input" min="1" max="999999" value="0" required>
				</div>
				<div class="divider-2">
					<label>Part Time</label><br>
					<input type="number" placeholder="" id="pt-employees-input" min="0" max="999999" value="0">
				</div>
			</div>
			
			<p class="label-title"><strong>Average Weekly Hours</strong><p>
			<div class="divider-wrap-top">
				<div class="divider-1">
					<label>Full Time</label><br>
					<input type="number" placeholder="Full Time" value="40" max="999" id="ft-avg-hours-input" required>
				</div>
				<div class="divider-2">
					<label>Part Time</label><br>
					<input type="number" placeholder="Part Time" value="0" max="999" id="pt-avg-hours-input" >
				</div>
			</div>
			
			<p class="label-title"><strong>Current Fringe Rate</strong><p>
			<div class="divider-wrap-top">
				<div class="divider-1">
					<label>Full Time</label><br>
					<div class="input-icon">
					<i>$</i>
					<input type="number" placeholder=" " class="inputcurrency" value="<?php the_field('current_fringe_rate'); ?>" step=".01" id="ft-fringe-rate-input" required>
					</div>
				</div>
				<div class="divider-2">
					<label>Part Time</label><br>
					<div class="input-icon">
					<i>$</i>
					<input type="number" placeholder=" " class="inputcurrency" value="<?php the_field('current_fringe_rate'); ?>" step=".01" id="pt-fringe-rate-input" >
					</div>
				</div>
			</div>
			
			<p class="label-title in-the-line"><strong>Average Payroll Burden %</strong>
			<div class="tooltip-wrapper"><div class="tooltip-btn">What is This?</div>
				<div class="tooltip-text">To Calculate Payroll Burden %
					Combine the Following:
					<br>
					<ul>
					  <li>FICA (7.65%)</li>
					  <li>FUTA / SUTA %</li>
					  <li>WORKERS COMP%</li>
					  <li>ER RETIREMENT MATCH%</li>
					 </ul>
				</div>
			</div>
			</p>
			
			<div class="divider-wrap-top">
				<div class="divider-1">
					<label>Full Time*</label><br>
					<div class="">
					<input type="number" placeholder=" " class="inputcurrency" value="<?php the_field('avg_payroll_burden_percentage'); ?>" step=".01" id="ft-avg-pay-burden-input" min="7.65" max="99.99" required>
					<i>%</i>
					</div>
				</div>
				<div class="divider-2">
					<label>Part Time</label><br>
					<div class="">
					<input type="number" placeholder=" " class="inputcurrency" value="<?php the_field('avg_payroll_burden_percentage'); ?>" step=".01" id="pt-avg-pay-burden-input" min="7.65" max="99.99">
					<i>%</i>
					</div>
				</div>
			</div>
			
			<em><p>* Indicates Required Fields</p></em>
			
			</div>
			
			
			<div class="right-side results-top">
			
			<div class="divider-wrap">
				
				<div class="row-wrap">
				<div class="col1"><p>&nbsp;</p></div>
				<div class="col2 align-center"><p><strong><span id="desktop-only">Full Time</span></strong></p></div>
				<div class="col3 align-center"><p><strong><span id="desktop-only">Part Time</span></strong></p></div>
				<div class="col4 align-center"><p><strong><span id="desktop-only">Total</span></strong></p></div>
				</div>
				
					<div class="row-wrap">
					<div class="col1 bg-dk-gray"><p><strong>Average Annual Hours</strong></p></div>
					<div class="col2 bg-dk-gray align-right"><p><span id="mobile-only">Full Time: </span><span id="ft-avg-annual-hours-wrapper"></span> Hrs.</p></div>
					<div class="col3 bg-dk-gray align-right"><p><span id="mobile-only">Part Time: </span><span id="pt-avg-annual-hours-wrapper"></span> Hrs.</p></div>
					<div class="col4 bg-dk-gray align-right"><p><span id="mobile-only">Total: </span><span id="total-avg-annual-hours-wrapper"></span> Hrs.</p></div>
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
			
			</div>
			
			</div>
			
			
			<!-- ============= Bottom Results Section =================== -->
			
			<input type="button" value="Calculate" onclick="calculate();">
			<div class="divider-border"></div>
			
			<div id="show-results" class="hide-results">
			
				

				<!-- ============= End Bottom Results Section =================== -->
				
				<!-- ============= Grand Total Results Section =================== -->
				
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
				<!-- ============= End Grand Total Results Section =================== -->

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
				
				// Avg. Payroll Burden % (Input Values)
				var ftAvgPayRollBurden = document.getElementById("ft-avg-pay-burden-input").value;
				var ptAvgPayRollBurden = document.getElementById("pt-avg-pay-burden-input").value;
				
				// Avg. Payroll Burden % (Decimal Converted Values)
				var ftAvgPayRollBurdenConverted = ftAvgPayRollBurden / 100;
				var ptAvgPayRollBurdenConverted = ptAvgPayRollBurden / 100;
				
				// Average Annual Hours (Calculated Values)
				var ftAvgAnnualHours;
				var ptAvgAnnualHours;
				var totalAvgAnnualHours;
				
				

				// VERIFY THAT ALL REQUIRED FIELDS HAVE BEEN FILLED IN
				
					// Verifty # of employees input
					if (ftEmployees < 1 ){
						console.log('Empty');
						document.getElementById("ft-employees-input").classList.add('empty-input');
						alert("Please enter number of full-time employees");
						return;
					} else {
						document.getElementById("ft-employees-input").classList.remove('empty-input');
					}
					
					if (ptEmployees === ''){
						console.log('Empty');
						document.getElementById("pt-employees-input").classList.add('empty-input');
						alert("Please enter number of part-time employees or enter 0 for none");
						return;
					} else {
						document.getElementById("pt-employees-input").classList.remove('empty-input');
					}
					
					// Verifty Avg weekly hours input
					if (ftAvgWeeklyHours === ''){
						console.log('Empty');
						document.getElementById("ft-avg-hours-input").classList.add('empty-input');
						alert("Please enter full-time employee hours");
						return;
					} else {
						document.getElementById("ft-avg-hours-input").classList.remove('empty-input');
					}
					
					if (ptAvgWeeklyHours === ''){
						console.log('Empty');
						document.getElementById("pt-avg-hours-input").classList.add('empty-input');
						alert("Please enter part-time employee hours or enter 0 for none");
						return;
					} else {
						document.getElementById("pt-avg-hours-input").classList.remove('empty-input');
					}
					
					// Verify fringe rate input
					if (ftFringeRate === ''){
						console.log('Empty');
						document.getElementById("ft-fringe-rate-input").classList.add('empty-input');
						alert("Please enter full-time employee fringe rate");
						return;
					} else {
						document.getElementById("ft-fringe-rate-input").classList.remove('empty-input');
					}
					
					if (ptFringeRate === ''){
						console.log('Empty');
						document.getElementById("pt-fringe-rate-input").classList.add('empty-input');
						alert("Please enter part-time employee fringe rate or enter 0 for none");
						return;
					} else {
						document.getElementById("pt-fringe-rate-input").classList.remove('empty-input');
					}
					
					// Verify Payroll Burden % input
					if (ftAvgPayRollBurden < 7.65 ){
						console.log('Empty');
						document.getElementById("ft-avg-pay-burden-input").classList.add('empty-input');
						alert("Please enter a value of at least 7.65% or higher");
						return;
					} else {
						document.getElementById("ft-avg-pay-burden-input").classList.remove('empty-input');
					}
					
					if (ptAvgPayRollBurden < 7.65 ){
						console.log('Empty');
						document.getElementById("pt-avg-pay-burden-input").classList.add('empty-input');
						alert("Please enter a value of at least 7.65% or higher");
						return;
					} else {
						document.getElementById("pt-avg-pay-burden-input").classList.remove('empty-input');
					}
					
					
					
				// REVEAL RESULTS SECTION ON BUTTON CLICK
				function showResults() {
					document.getElementById("show-results").classList.remove('hide-results');
					document.getElementById("show-results").classList.add('display-results');
				}
				showResults();
				


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



				// Company SCA to apply towards benefits in cash Lieu
				function calculateScaCashBenefits() {
					fullTimeScaCashBennefits =  fullTimeScaBennefits * (1 + ftAvgPayRollBurdenConverted);
					partTimeScaCashBennefits = partTimeScaBennefits * (1 + ptAvgPayRollBurdenConverted);
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
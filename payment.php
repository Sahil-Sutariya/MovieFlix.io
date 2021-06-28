<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Payment Method</title>
		<link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
	<header>
	<div class="icon-bar">
	<a class="active" href="index.html"><i class="fa fa-home"></i></a>
	<a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope"></i></a>
	<a href="https://www.google.com/search?sa=X&sxsrf=ALeKk024KUH25U-QsIueS83J-OP4TYZAvg:1587100407248&q=moviesflix+messenger&tbm=isch&source=univ&ved=2ahUKEwjbtvzf2e7oAhWDd98KHRcsB6sQsAR6BAgJEAE&biw=1366&bih=657"><i class="fa fa-globe"></i></a>
	<a href="#"><i class="fa fa-trash"></i></a>
	<div class="dropdown"><button class="dropbtn">Movie<i class="fa fa-caret-down"></i></button>
	<div class="dropdown-content">
    <a href="game_of_thrones.html">G.O.T.</a>
    <a href="friends.html">FRIENDS</a>
    <a href="narcos.html">NARCOS</a>
    </div>
	</div>
	</div>
	</header>
		
	<main>	
		<div>
			<h1>Unlimited movies, TV shows, and more.</h1>
		</div>

		<div>	
			<h3>Watch anywhere. Cancel anytime.</h3>
		</div>

		<div>	
			<h5>Ready to watch? Enter your email to create or restart your member ship</h5>	
		</div>	
		
		<h1>Payment Method</h1>
		
	
		<div class="row">
  <div class="col-75">
    <div class="container">
      <form>
      
        <div class="row">
          <div class="col-50">
            <h3>Payment Details</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Pratham.Shah">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="pratham@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Pratham Shah">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> 
		</label>
		<input type="submit" onclick="narcos.html" value="Proceed To Start Your Membership" class="btn">
	</form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <br>
	  <p><span class="price">$15 for 1 month</span><input type="radio" id="month" name="Payment" value="15"></p>
	  <p><span class="price">$50 for 6 month</span><input type="radio" id="month" name="Payment" value="60"></p>
	  <p><span class="price">$100 for 1 year</span><input type="radio" id="month" name="Payment" value="100"></p>
	  <hr>
	  
	  <span class="total"><p>Total</p></span>   
	</div>
  </div>
</div>

		</main>
		<footer>
		<center>
	<p><small>©2020 MOVIEFLIX - Free Movies TV Shows - All rights reserved.</small>
		<a href="Privacy-Policy.html">Privacy Policy</a> | 
		<a href="terms-of-use.html" >Terms of Condition*</a>
	</p>
	<p>
	Disclaimer: All of the free movies found on this website are hosted on third-party servers that are freely 
available to watch online on this Website - Free Movies TV Shows for all internet users. Any legal issues
 regarding the free online movies on this website should be taken up with the actual file hosts themselves. 
this Website - Free Movies TV Shows is not responsible for the accuracy, compliance, copyright, legality, 
decency, or any other aspect of the content of other linked sites. In case of any copyright claims, Please 
contact the source websites directly file owners or host sites. By accessing this site you agree to be bound by our Privacy Policy.
	</p>	
		
	</center>
		</footer>
	</body>
</html>

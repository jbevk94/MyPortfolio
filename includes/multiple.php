
<?php?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post" >
<div class="cont-1">
    <div class="contact-info">
<h3 class = "headers">About You</h3>
    <label class="about-info">
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44"  /><br />
    </label>
    <!-- Add padding -->

    <label class="about-info">
        Email:</label><br /><input type="text" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" /><br /> 
    
    <!-- Add padding -->
    <label class="about-info">
        Phone:<br /><input type="text" name="Phone"  placeholder="Phone" tabindex="20" size="22" /><br /> 
    </label>
    
    
</div>
<div class="contact-info">
<h3 class = "headers">How Can I Help?</h3>

    <textarea class="comments" name="Comments" cols="50" rows="8" placeholder="Let's work together to build you an amazing website! Please tell me a little bit about what you're looking for. (i.e. social media links, e-commerce, blog...) " tabindex="60"></textarea>
<br>

<label>Type of Project</label>

<select id="project">
  <option value="new-web">Brand New Website</option>
  <option value="new-app">Brand New App</option>
  <option value="web-redesign">Website Redesign</option>
  <option value="app-redesign">App Redesign</option>
  <option value="new-both-redesign">New App and Website</option>
  <option value="both-redesign">Redesign for App and Website</option>
</select>


<br>
<div>
<label>Project Deadline</label>

<select class='deadline'>
  <option value=""></option>
  <option value="asap">As Soon As Possible</option>
  <option value="1">One Month</option>
  <option value="2">Two Months</option>
  <option value="3">Three Months or More</option>
  <option value="tbd">To Be Determined</option>
</select>
</div>
<br />

   

</div> <button type="submit" value="submit" class="submit">Submit</button>
</form>

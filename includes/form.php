<h2 class="page">Contact</h2>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>
    <div class="marvei">
    <label>Name</label>
    <input class="input" type="text" name="name" placeholder="Enter your name" value="<?php 
     if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
        <span><?php echo $nameErr; ?></span>
    
    <label>Email</label>
    <input class="input" type="email" name="email" placeholder="Enter your email"  value="<?php 
     if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
    
        <span><?php echo $emailErr; ?></span>
    </div>

    <div class="marvel">
     <label>Phone number</label>
    <input class="input" type="tel" name="tel" placeholder="xxx-xxx-xxxx" value="<?php 
     if(isset($_POST['tel'])) echo htmlspecialchars($_POST['tel']); ?>">
    
        <span><?php echo $telErr; ?></span>
    
    <label>Privacy Policy</label>
        <input class="check" type="checkbox" name="privacy" value="<?php 
        if(isset($_Post['privacy'])) echo htmlspecialchars($_POST['privacy']) ;?>"><i>I'm not a Robot</i>
    
    <span class="privacy"><?php echo $privacyErr; ?></span>
    </div>
    
    <input class="submit" type="submit" value="Submit">
    
        </fieldset>    
    
    </form>   

            
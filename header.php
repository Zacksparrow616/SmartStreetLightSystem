<?php 
if(empty($home))
{
    $home=" ";
}
if(empty($contact))
{
    $contact=" ";
}
if(empty($complaint))
{
    $complaint=" ";
}
if(empty($feedback))
{
    $feedback=" ";
}
if(empty($about))
{
    $about=" ";
}
if(empty($knowmore))
{
    $knowmore=" ";
}
if(empty($faq))
{
    $faq=" ";
}
?>
<nav class="navbar">
    <div class="navbar-header">
       <a href="index.php" class="navbar-brand" id="brand_logo">
            Smart Street Light 
       </a>
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
       </button>
    </div>
    <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="nav navbar-nav navbar-right">
            <li class="<?=$home;?>"><a href="index.php">Home</a></li>
            <li class="<?=$complaint;?>"><a href="#complaint">Complaint</a></li>
        <li class="<?=$contact;?>"><a href="#contact-us">Contact Us</a></li>
        <li class="<?=$about;?>"><a href="About-us.php">About Us</a></li>
        <li class="<?=$faq;?>"><a href="knowmore.php">FAQs</a></li>
    </ul>
    </div>
</nav>


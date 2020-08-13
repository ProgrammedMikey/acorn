<?php
include('header.php');
?>

<div class="purple-wrapper">
    <div class="wrapper">
        <ul class="listings">
            <li style="padding-right: 20px">
            <strong>Straight Stairlift</strong>
            <span>The ultimate staircase solution, giving you the full use of the home you love.</span>
            </li>
            <li style="padding: 0 20px 0;">
           <strong>Curved Stairlift</strong> 
           <span>A comfortable and reliable ride designed for any curved staircase.</span>
           </li>
           <li>
           <strong>Outdoor Stairlift</strong> 
           <span>The perfect mobility aid to give you access to those outdoor spaces you love.</span>
           </li>
        </ul>
    </div>

    <div class="extended-wrapper carousal-container">
        <img src="images/arrow.svg" id="left-arrow" class="arrows" alt="Move testimonials to the left">
        <div class="owl-carousel owl-theme">
        <ul class="carousal">
        <li class="item">
            <blockquote>From the beginning on the phone to the sales rep & installer, all were courteous, professional, friendly & empathetic to needs of client, especially elderly</blockquote>
            <cite>Thomas Albert - PA</cite>
        </li>
        <li class="item">
            <blockquote>It's great. It allows me to access our cellar which is finished. We have an office, schwinn bicycle, treadmill, TV, pool table, Universal exercise set up, washer/dryer layout table and a large workshop. So you can see how valuable this charilift is for us.</blockquote>
            <cite>Ray Norton - MA</cite>
        </li>
        <li class="item">
            <blockquote>Everything went as clock work. Everyone I talked to was helpful. The experience & the stairlift were better than I expected</blockquote>
            <cite>Harvey Wohlers - MN</cite>
        </li>
        <li class="item">
            <blockquote>I think I made the best decision, so I don't fall & have a way of getting up & down carrying groceries and laundry. I sure don't plan being in nursing home care. Thank you Thank you my stairlift is great.</blockquote>
            <cite>Lillian Beckett - IL</cite>
        </li>
        </ul>
        </div>

        <img src="images/arrow.svg" id="right-arrow" class="arrows right" alt="Move testimonials to the right">
    </div>
</div>

        <div class="wrapper moveup v-padding">
                <h2>Why choose the world's most innovative stairlift?</h2>
                <ul class="why-choose">
                    <li class="reasons">Fits quickly and easily to the stairs, not the wall</li>
                    <li class="reasons">Requires no structural changes to your home</li> 
                    <li class="reasons">Affordable and reliable with low running costs</li>
                    <li class="reasons">Slimline and folds away conveniently when not in use</li>
                    <li class="reasons">Optional hinged rail designed to eliminate any trip or hazard</li>
                </ul>
        </div>

        <div class="register-wrapper">
        <div class="wrapper">
        <?php 
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                require('register-quote.php');
            }
        ?>
                <div class="col-lg-5">
                        <div class="pb-5">
                            <h1>Get your free quote now</h2>
                            <p class="quoteSpace">Simply enter your details and a trusted Acorn representative will be in touch to arrange a home survey and provide your FREE no obligation quotation.</p> 
                        </div>
                </div>

                <div class="col-lg-7" style="float:right;margin-top: -6.9em;">
                            <div class="d-flex justify-content-center">
                                    <form action="index.php" method="post" enctype="multipart/form-data" id="reg-form">
                                        <div class="form-row">
                                            <div class="col pb-3">
                                                <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First name" required>
                                            </div>
                                            <div class="col pb-3">
                                                <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last name" required>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col pb-3">
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                                            </div>
                                            <div class="col pb-3">
                                                <input type="text" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="Phone number" required>
                                            </div>
                                        </div>

                                        <div class="form-group pb-1">
                                            <input type="text" name="inputAddress" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6 pb-3">
                                                <input type="text" name="inputCity" class="form-control" id="inputCity" placeholder="City" required>
                                            </div>
                                            <div class="form-group col-md-4 pb-3">
                                                <input type="text" name="inputState" class="form-control" id="inputState" placeholder="State" required>
                                            </div>
                                            <div class="form-group col-md-2 pb-3">
                                                <input type="text" name="inputZip" class="form-control" id="inputZip" placeholder="Zip" required>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success mb-5">Submit</button>
                                    </form>
                                </div>
                            </div>  
                    </div>
                 </div>
             </div>    
</div>  


<?php                        
include('footer.php');
?> 

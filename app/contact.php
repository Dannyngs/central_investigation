<?php


    require_once 'init.php';

?>
<?php
require_once 'header.php';
?>

 <!-- BEFORE CONTENT -->
        <div id="outerbeforecontent">
          <div id="beforecontent">
              <section id="beforethecontent">
          <div class="intro-l">
                      <h1 class="pagetitle"><?php echo $lang['contact'];?></h1>
                    </div>
                    <div class="intro-r" style="text-align:right;">
                      <?php echo $lang['cont_word'];?>
                    </div>
                    <div class="clear"></div>
                </section>
            </div>
        </div>
        <!-- END BEFORE CONTENT -->
        
        <!-- MAIN CONTENT -->
        <div id="outermain">
          <div id="maincontent">
          <section id="mainthecontent">
        
                <div class="one_half">
        <article style="line-height:30px">
                    <h2><?php echo $lang['about'];?></h2>
                    <p><?php echo $system[$current_lang.'_description']?></p>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.368570998154!2d114.15083941441071!3d22.339707947109794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3404075181a9a0f9%3A0xa0e9a27987b7b342!2z6ZW35rKZ54Gj6Z2S5bGx6YGTNDY56Jmf6IGv6YKm5buj5aC0!5e0!3m2!1szh-TW!2shk!4v1456893112147" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe><br /><br />


                    Email: <a href="mailto:<?php echo $system['email']?>"><?php echo $system['emai']?></a><br />
                  
                    <?php echo $lang['tel'];?>: <?php echo $system['tel']?><br />
                    Whatsapp: <?php echo $system['whatsapp']?><br />
                    Line ID： <?php echo $system['line']?><br />
                    微信: <?php echo $system['weichat']?><br />
                    QQ：<?php echo $system['qq']?><br />
                    地址：<?php echo $system['address']?>

                  
                </article>
            </div>
                <div class="one_half lastcols">
                  <h2> <?php echo $lang['form'];?></h2>
          <div id="contactform">
                          <form id="contact" action="#" />
                            <fieldset>
                            <span class="error" id="name_error">Please enter name !</span>
                            <span class="error" id="email_error">Please enter email address !</span>
                            <span class="error" id="email_error2">Please enter valid email address !</span>
                            <span class="error" id="msg_error">Please enter message !</span>
                            <input type="text" name="name" id="name" size="50" placeholder="姓名" class="text-input" />
                            <input type="text" name="email" id="email" size="50" placeholder="電郵" class="text-input" />
                            <input type="text" name="subject" id="subject" placeholder="主題" class="text-input" />
                            <textarea cols="60" rows="10" name="msg" id="msg" class="text-input">内容</textarea>
                            <br />
                            <input type="submit" name="submit" class="button" id="submit_btn" value="提交" /><br class="clear" />
                            </fieldset>
                          </form>
                  </div><!-- end contactform -->
                </div>
                <div class="clear"></div>
            </section>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
 
<?php
require_once 'footer.php';
?>
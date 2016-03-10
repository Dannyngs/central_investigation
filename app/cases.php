<?php
require_once 'init.php';
 $rs = $db->query("SELECT* FROM T_Cases order by sort");
    $cases = $rs->fetchAll();

  ?>
<?php
require_once 'header.php';
?>

  
        <!-- BEFORE CONTENT -->
        <div id="outerbeforecontent">
          <div id="beforecontent">
              <section id="beforethecontent">
          <div class="intro-l">
                      <h1 class="pagetitle">成功例子</span>
                    </div>
                    <div class="intro-r">
                      <?php echo $lang['succ'];?>
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

      <div id="ts-display-portfolio">
              
                
                <ul id="ts-display-pf-filterable" class="ts-display-pf-col-4 image-grid">


    <?php  foreach($cases as $case)
{?>
                      
                        <li data-id="id-1" class="business">
                         <div class="ts-display-pf-text">
                                <h2><?php echo  $case[$current_lang.'_case_name'];?></h2>
                            </div>
                            <div class="ts-display-pf-img">
                                <a class="image" href="<?php echo  $imgurl.$case['b_img'];?>" 
                                data-rel="prettyPhoto[<?php echo  $case['case_id'];?>]" title="<?php echo  $case[$current_lang.'_case_name'];?>" >
                                <span class="rollover"></span>
                                <img src="<?php echo  $imgurl.$case['b_img'];?>" alt=""  />
                                
                                </a>              
                            </div>
                            <span class="shadowpfimg"></span>
                           
                            <div class="ts-display-clear"></div>
                        </li>
                       
 <?php
    }
?>
                       
                       
                      
                </ul>
                
                <div class="clear"></div>
                
                </div>
         
                <div class="clear"></div>
            </section>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
             




<!-- 
    <?php  foreach($pros as $pro)
{?>


   <div class="col-md-4 col-sm-6">
             <div class="prodiv text-center">
                 <a href="<?php echo  $imgurl.$pro['image'];?>" data-lightbox="image1" data-title="<?php echo $pro['title'];?>">
                 <img class="img-responsive" src="<?php echo  $imgurl.$pro['image'];?>"/>

                  <div class="moved">
                   <p><?php echo $pro['title'];?></p>
                  </div>
                </a>
             </div>
        </div>

        <?php
    }
?> -->




        <!--
       <nav class="prolist">
  <ul class=" pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
   {% for product in totalpage %}
      <li><a href="#">1</a></li>
   {% endfor %}
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
-->
 
<?php
require_once 'footer.php';
?>

<?php
require_once 'init.php';
  $rs = $db->query("SELECT* FROM T_Page where id=".$_GET['id']);
    $page = $rs->fetch();


?>
<?php
require_once 'header.php';
?>
 
 <div id="outerbeforecontent">
        	<div id="beforecontent">
            	<section id="beforethecontent">
					<div class="intro-l">
                    	<h1 class="pagetitle"><?php echo $page[$current_lang.'_title']?></h1>
                    </div>
                    <div class="intro-r">
                    	<?php echo $page[$current_lang.'_titr']?>
						
                    </div>
                    <div class="clear"></div>
                </section>
            </div>
        </div>
        <!-- END BEFORE CONTENT -->

 <div id="outermain">
        	<div id="maincontent">
        	<section id="mainthecontent">

				<article>
                 <?php echo $page[$current_lang.'_content']?>
                 <!-- <div class="mt20">
                    <div class="one_third">
                        <img src="_/images/master1.jpg" alt="" /> 
                    </div>
                    <div class="two_third">
                        <h3 class="colort">亞贊奴</h3>
                         <p>亞贊奴的家族是法事世家,他的爺爺(阿贊平通)和爸爸(阿贊天龍)也是專門幫善信做法事的,亞贊奴自小除了跟爸爸學法外，也曾在外地學法多年，包括泰國、印度、西藏等…其專長為和合法科。</p> 
                         <p>亞贊奴曾協助不少知名人士(如明星、上市公司主席的太太等...) 處理挽回婚姻等問題故聲譽極高，備受南洋一帶各大傳媒專訪及報導。</p>
                    </div>
                    <div class="clear"></div>
                  </div>

                   <div class="mt20">
                        <div class="one_third">
                            <img src="_/images/master2.jpg" alt="" /> 
                         </div>
                        <div class="two_third">
                             <h3 class="colort">阿贊白礦</h3>
                             <p>阿贊白礦的祖師是當年名極一時的布王干拜奇人，相傳布王干拜在一小島上生活身邊有數十美女相伴。 阿贊白礦年輕時得多位高僧傳授法術，亦曾在屈曼官碰出家，師傅已還俗。 阿贊白礦其中一門最出名的法術便是人緣金針法門,在純金的金片上寫滿咒文,再打入善信身體里,金針會自然遊走而已會避開心臟,當有危險和邪靈出現時金針會發揮效力保護善信,現在很多所謂的金針大師入的金針已不會遊走,只會留在皮下並不正宗。 現今著名金針師傅龍婆弄也曾是白礦師傅門下之徒之一。</p> 
                      
                        </div>
                        <div class="clear"></div>
                  </div>

                  <div class="mt20">
                        <div class="one_third">
                            <img src="_/images/master3.jpg" alt="" /> 
                         </div>
                        <div class="two_third">
                             <h3 class="colort">龍波禪南（Luang Phor Chanan Wat Bangkutitong）</h3>
                             <p>佛寺วัดบางกุฏิทอง﹝譯﹞瓦邦古滴通位於ปทุมธานี巴吞塔尼府 這間佛寺有位หลวงพ่อชำนาญ龍波禪南高僧，年紀非常輕 近幾年的時間於泰國聲名大噪，是一位非常年輕又頗具聲望的師父. 龍波禪南高僧是居住於泰國เชื้อสายมอญ毛族人的後裔(此族原居住於緬甸一帶，後因隨著種種因素而散居各地)。龍波禪南從小就出家為僧了，而且非常認真向每個師父學習各種法術與經典。 此外他在禪定中，亦會感得หลวงปู่ทวด龍普拓、พระอาจารย์โต阿詹多、หลวงพ่อกวย龍波圭、หลวงปู่ศุข龍波速在禪定中教導他各種法術符印，因此他所製作的佛牌效力非常顯著。龍波禪南很尊敬龍普托、帕阿詹多、龍波圭、龍波素和瓦邦古滴通的前任住持，所以他的佛寺裡有掛著這五位師父的法像。 同時他也是瓦撒給寺自古製作四面佛牌法術的傳承者，因此他的寺廟每年都會舉辦四面佛牌的督造活動，而且這類活動均會吸引上千人來共襄盛舉。他的諸多信徒均表示戴了他所製作的四面佛牌後，在事業、運途等各方面都很順利。龍波禪南高僧的靈應事蹟也因為信徒間的口耳相傳而傳揚開來。</p> 
                      
                        </div>
                        <div class="clear"></div>
                  </div>

                   <div class="mt20">
                        <div class="one_third">
                            <img src="_/images/master4.jpg" alt="" /> 
                         </div>
                        <div class="two_third">
                             <h3 class="colort">古巴阿里雅察（Kruba Aliyachart Wat Sangkeowpothiyan）</h3>
                             <p>在泰國諸多新生代的大師之中，古巴阿里雅察大師是泰北最有名氣的大師。大師在泰北還興建了一座佛寺――清萊府。<br/>古巴阿里雅察大師生於佛曆2524年（西曆1981年）1月9日，大師天生就有慧根。在佛曆2540年，16歲的時候就出家為僧，曾經向許多泰北高僧學習，在禪坐入定的修行方面非常有成。大師經常都是一個人，在偏遠山區禪定修行。直到佛曆2545年，21歲的大師，正式成僧，接受了當時大師的上師所給的法號。<br/>大師在禪坐修法各方面，有非常深厚的功力。曾經在寬三尺、深三尺的地洞閉關禪修13日， 期間可以不飲不食。<br/>有一次大師幫善信誦經加持祈福的時候，誦經誦到一半，突然有一支降頭釘掉到大師托的缽裡，大師冷靜地把那支降頭釘用白色經繩綁起來，將此降頭收伏。而那位中降頭的善信則驚訝不已，可見大師的解降法門修得非常厲害。<br/>
大師亦有“孔雀大師”的稱號， 這並不是因為大師親手畫的獨特經文符印，畫起來很像孔雀之故。 其實是因為，無論大師到哪一處的山區修行，都會自然引來一羣孔雀跑近， 一般想在山區見到野生孔雀是不容易的事，因此令人感到非常神奇，相信大師修行極高。<br/>
孔雀是鳥中之王，不僅象徵富貴與權力，也代表吉祥。由於古巴阿里雅察大師，擅長用孔雀經文搭配於佛寶上，所以大師的佛寶深受信眾喜愛。<br/>
目前大師仍致力於弘揚佛法，普渡衆生，不時受邀至泰國中部、及各省份參加加持開光法會。</p> 
                      
                        </div>
                        <div class="clear"></div>
                  </div>
 -->
                
					

                  
                </article>
         
                <div class="clear"></div>
            </section>
            </div>
        </div>
        <!-- END MAIN CONTENT -->



<?php
require_once 'footer.php';
?>


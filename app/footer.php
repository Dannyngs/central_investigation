 <div class="footer">
        <div class="container footer-bg">
           <div class="row">
             <div class="col-md-12">
                <img src="_/images/logo2.png">
             </div>
             <div class="col-md-7 mt4">
               <p>本社是一間經驗豐富，最具規模之香港私家偵探社。部份調查員從事偵探行業經驗超過十年，亦有部份調查員為前狗仔隊要員。業務範圍遍及世界各地，信心保證。<br/>憑多年來所累積的辦案經驗，已成功為香港及世界各地眾多委托人偵破無數各類型案件，如通姦證據、伴侶調查、商業調查、工傷查證、背景調查等案件。</p>
             </div>
             <div class="col-md-5 mt4">
                 <p class="fs19"><b>24小時熱線電話：</b>2370  1160 金先生</p>
                 <p class="fs19"><b>電郵：</b><a class="fcb" href="mailto:central23701160@yahoo.com.hk">central23701160@yahoo.com.hk</a></p>
                   <p class="fs19"><b>地址：</b>香港西營盤正街18號啓正中心18樓1806室</p>
             </div>
           </div>
           <div class="row mt2">
             <div class="col-md-12">
               <p class="fcblue">本公司跟客戶簽訂委託協議書，並承諾所有資料絕對保密。</p>
               <p class="copy">© 2016 central investigations. All rights reserved.</p>
             </div>
           </div>
        </div>
    </div><!--footer end-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="_/js/bootstrap.min.js"></script>
     <script type="text/javascript">
 $(document).ready(function(){
      
 $('#mysubmit').click(function(event){
     event.preventDefault();
 $('#mysubmit').attr("disabled",true); 
     var myname=$('#myname').val();
    var myemail=$('#myemail').val();
     var mymsg=$('#mymsg').val();
console.log(myname);
   if( myname=="" || myemail==""||mymsg=="")
       return alert("請完整填寫信息");
     
     $.post("mail.php",
     {
    myname:myname,
   myemail :myemail,
         mymsg:mymsg
     },
  function(data,status){
         
         
         if(data!="ok"){
              alert("遞交失敗，請重試！");
              $('#mysubmit').attr("disabled",false); 
         }else{
         $('#myname').val("");$('#myemail').val("");$('#mymsg').val("");
         alert("遞交成功！");}
        
  });
     
 });  
   
 });
</script>
  </body>
</html>
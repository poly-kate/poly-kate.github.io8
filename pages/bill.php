<?php
    session_start();
   //  echo "<pre>";
   //  var_dump($_POST);
   //  echo "<pre>";
   //  echo "<pre>";
   //  var_dump($_SESSION);
   //  echo "<pre>";

      
      $_SESSION['data']['hero'] =  $_POST['hero']  ;
      $_SESSION['data']['name'] =  $_POST['name']  ;
      $_SESSION['data']['email'] =  $_POST['email'];
      $_SESSION['data']['phone'] =  $_POST['phone'];
    
?>
<html>
   <head>
      <title>Работа</title>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
      <link href="../css/style.css" rel="stylesheet" type="text/css">
   </head>

   <body topmargin="0" bottommargin="0" rightmargin="0"  leftmargin="0"   background="../images/back_main.gif">
   <form action="basket.php" method="post">
      <table cellpadding="0" cellspacing="0" border="0"  align="center" width="583" height="614">
         <tr>
            <td valign="top" width="583" height="208" background="../images/row1.gif">
               <div style="margin-left:88px; margin-top:57px "><img src="../images/w1.gif"></div>

               <div style="margin-left:50px; margin-top:69px ">
                   <a href="../index.php">Главная<img src="../images/m1.gif" border="0" ></a>
                  <img src="../images/spacer.gif" width="20" height="10">
                                <a href="order.php">Заказ<img src="../images/m2.gif" border="0" ></a>
				<img src="../images/spacer.gif" width="5" height="10">
                                <a href="basket.php">Корзина<img src="../images/m3.gif" border="0" ></a>
                  <img src="../images/spacer.gif" width="5" height="10">
                  <a href="index-3.php">О компании<img src="../images/m4.gif" border="0" ></a>
                  <img src="../images/spacer.gif" width="5" height="10">
                  <a href="index-4.php">Контакты<img src="../images/m5.gif" border="0" ></a>

               </div>
               <div style="margin-left:400px; margin-top:10px "></div>       
            </td>
         </tr>
         <tr>
            <td valign="top" width="583" height="338"  bgcolor="#FFFFFF">
               <table cellpadding="0" cellspacing="0" border="0">
                  <tr>
                     <td valign="top" height="338" width="42"></td>
                     <td valign="top" height="338" width="492">
                        <table cellpadding="0" cellspacing="0" border="0">
                           <tr>
                              <td width="492" valign="top" height="106">


                                 <div style="margin-left:1px; margin-top:2px; margin-right:10px "><br>
                                    <div style="margin-left:5px "><img src="../images/1_p1.gif" align="left"></div>
                                    <div style="margin-left:95px "><font class="title"> Марка машины  </font>
                                    <br>
                                     <?php
                                          switch($_POST['hero'])
                                          {
                                             case '100': {
                                               echo '<input type="radio" name="mark" value="200"> Peugeot (+200)</input><br>';
                                               echo '<input type="radio" name="mark" value="100"> Lada Priora (+100) </input><br>';
                                               echo '<input type="radio" name="mark" value="300"> Nissan (+300)</input><br>';
                                               break;
                                             }
                                             case '500':{
                                               echo '<input type="radio" name="mark" value="500"> Citroen (+500) </input><br>';
                                               echo '<input type="radio" name="mark" value="300"> Skoda (+300)  </input><br>';
                                               echo '<input type="radio" name="mark" value="800"> Lexus (+800)</input><br>';
                                               break;
                                             }
                                             case '2100':{
                                               echo '<input type="radio" name="mark" value="50"> Kia (+50)</input><br>';
                                               echo '<input type="radio" name="mark" value="100"> Honda (+100) </input><br>';
                                               echo '<input type="radio" name="mark" value="80"> Mazda (+80)</input><br>';
                                               break;
                                             }
                                             default: {
                                                echo 'Не полностью оформлен заказ! <a href="/order.php"> Вернитесь и заполните все поля</a>';
                                                break;
                                             }
                                          }   
                                       ?>
                                    </div> 
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td width="492" valign="top" height="232">
                                 <table cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                       <td valign="top" height="232" width="248">
                                          <div style="margin-left:6px; margin-top:2px; "><img src="../images/hl.gif"></div>
                                          <div style="margin-left:6px; margin-top:7px; "><img src="../images/1_w2.gif"></div>
                                          <div style="margin-left:6px; margin-top:11px; margin-right:0px "><font class="title">
                                          <?php
                                             switch($_POST['hero']){
                                                case '100': {
                                                   echo 'A1';
                                                   break;
                                                }
                                                case '500': {
                                                   echo 'A2';
                                                   break;
                                                }
                                                case '2100': {
                                                   echo 'A3';
                                                   break;
                                                }
                                             }
                                          ?>
                                           </font></div>
                                          <div style="margin-top:10px; margin-left:6px ">
                                           
                                          </div>
                                          <div style="margin-top:6px; margin-left:6px ">
                                          <?php
                                             switch($_POST['hero'])
                                             {
                                                case '100': {
                                                   echo '<input type="radio" name="prepare" value="50"> бензин(+50)</input><br>';
                                                   echo '<input type="radio" name="prepare" value="100"> шины(+100) </input><br>';
                                                   echo '<input type="radio" name="prepare" value="200"> омыватель(+200)</input><br>';
                                                   break;
                                                }
                                                case '500':{
                                                   echo '<input type="radio" name="prepare" value="100"> полировка(+100) </input><br>';
                                                   echo '<input type="radio" name="prepare" value="50"> чистка салона(+50) </input><br>';
                                                   echo '<input type="radio" name="prepare" value="200"> ТО(+200)</input><br>';
                                                   break;
                                                }
                                                case '2100':{
                                                   echo '<input type="radio" name="prepare" value="50"> бензин(+50)</input><br>';
                                                   echo '<input type="radio" name="prepare" value="200">чистка салона(+200) </input><br>';
                                                   echo '<input type="radio" name="prepare" value="100"> чистка двигателя(+100)</input><br>';
                                                   break;
                                                }
                                                default: {
                                                   echo 'Не полностью оформлен заказ! <a href="/order.php"> Вернитесь и заполните все поля</a>';
                                                   break;
                                                }
                                             }   
                                          ?>
                                          </div>
                                          <div style="margin-top:6px; margin-left:6px ">
                                           
                                          </div> 
                                          <div style="margin-top:6px; margin-left:6px ">
                                            
                                          </div> 
                                          <div style="margin-top:6px; margin-left:6px ">
                                            
                                          </div> 
                                          <div style="margin-top:6px; margin-left:6px ">
                                          
                                          </div> 

                                       <td valign="top" height="215" width="1" background="../images/tal.gif" style="background-repeat:repeat-y"></td>
                                       <td valign="top" height="215" width="243">
                                          <div style="margin-left:22px; margin-top:2px; "><img src="../images/hl.gif"></div>
                                          <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w2.gif"></div>
                                          <div style="margin-left:22px; margin-top:13px; ">

                                             <div style="margin-left:0px; margin-top:0px; margin-right:0px "><font class="title">  Количество дней для проката и лизинга </font></div>
                                          <div style="margin-top:6px; margin-left:6px ">
                                            <input type="text" name="days_count"></input>
                                          </div> 
                                          <div style="margin-top:6px; margin-left:6px ">
                                             <input type="checkbox" name="fast_form">Ускоренное оформление</input>
                                          </div>
                                          <div style="margin-top:6px; margin-left:6px ">
                                             
                                          </div>

                                             <div style="margin-left:67px; margin-top:7px; margin-right:10px "><img src="../images/pointer.gif"><a href="#"><img src="../images/read_more.gif" border="0"></a></div>
                                          </div>
                                          <div style="margin-left:22px; margin-top:16px; "><img src="../images/hl.gif"></div>
                                          <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w4.gif"></div>
                                          <div style="margin-left:22px; margin-top:9px; ">
                                          <button type="submit" name="next" onclick="document.location='/pages/order.php'">Назад <-</button>
                                          <button type="submit" name="next">Далее -></button>
                                             <img src="../images/1_p3.gif" align="left">
                                         

    
                                             
                                             
                                             <div style="margin-left:67px; margin-top:0px; margin-right:0px ">
<font class="title">

</font><br>

<div> 

</div>

                                            

 
                                             
                                             <div style="margin-left:0px; margin-top:7px; margin-right:10px "><img src="../images/pointer.gif"><a href="#"><img src="../images/read_more.gif" border="0"></a></div>
                                          </div>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                        </table>
                     </td>
                     <td valign="top" height="338" width="49"></td>
                  </tr>
               </table>
            </td>
         </tr>
         <tr>
            <td valign="top" width="583" height="68" background="../images/row3.gif">
               <div style="margin-left:51px; margin-top:31px ">
                  <a href="#"><img src="../images/p1.gif" border="0"></a>
                  <img src="../images/spacer.gif" width="26" height="9">
                  <a href="#"><img src="../images/p2.gif" border="0"></a>
                  <img src="../images/spacer.gif" width="30" height="9">
                  <a href="#"><img src="../images/p3.gif" border="0"></a>
                  <img src="../images/spacer.gif" width="149" height="9">
                  <a href="index-5.php"><img src="../images/copyright.gif" border="0"></a>
               </div>
            </td>
         </tr>
      </table>
   </form>
   </body>
</html>

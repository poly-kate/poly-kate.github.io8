<?php
    session_start();
    // echo "<pre>";
    // var_dump($_POST);
    // echo "<pre>";
    
    
    $_SESSION['data']['mark']       = $_POST['mark'];
    $_SESSION['data']['prepare']    = $_POST['prepare'];
    $_SESSION['data']['days_count'] = $_POST['days_count'];
    $_SESSION['data']['fast_form']  = $_POST['fast_form'];
    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "<pre>";
?>
<html>
    <head>
        <title>Работа</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body topmargin="0" bottommargin="0" rightmargin="0"  leftmargin="0"   background="../images/back_main.gif">
        <table cellpadding="0" cellspacing="0" border="0"  align="center" width="583" height="614">
            <tr>
                <td valign="top" width="583" height="208" background="../images/row1.gif">
                    <div style="margin-left:88px; margin-top:57px "><img src="../images/w1.gif">    </div>
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
                        </form>
                    </div>
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
                                                <div style="margin-left:95px "><font class="title">Информация о заказе</font><br>
                                                    <?php
                                                    $table = "<table>";
                                                                                                        
                                                    try{
                                                        foreach($_SESSION['data'] as $key => $value){
                                                            if(is_null($value)){
                                                                throw new Exception('Недостаточно данных!');

                                                            }
                                                            $table .= "<tr>";
                                                            switch($key){
                                                                case 'hero': {
                                                                    $table .="<td>Услуга</td>";
                                                                    break;
                                                                }
                                                                case 'name': {
                                                                    $table .="<td>Имя </td>";
                                                                    break;
                                                                }
                                                                case 'email': {
                                                                    $table .="<td>Электронная почта</td>";
                                                                    break;
                                                                }
                                                                case 'phone': {
                                                                    $table .="<td>Телефон</td>";
                                                                    break;
                                                                }
                                                                case 'mark': {
                                                                    $table .="<td>Марка</td>";
                                                                    break;
                                                                }
                                                                case 'prepare': {
                                                                    $table .="<td>Предварительная подготовка </td>";
                                                                    break;
                                                                }
                                                                case 'days_count': {
                                                                    $table .="<td>количество дней для проката и лизинга</td>";
                                                                    break;
                                                                }
                                                                case 'fast_form': {
                                                                    $table .="<td>ускоренное оформление</td>";
                                                                    break;
                                                                }
                                                            }
                                                            
                                                            $table .="<td>".$value."</td>";
                                                            $table .="</tr>";
                                                        }
                                                    } catch (Exception $e){
                                                        echo $e->getMessage();
                                                    }
                                                        
                                                    echo $table;
                                                    echo '</table>';
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
                                                       
                                                        <?php
                                                        if($_POST['hero'] != 500){
                                                            $service = ($_SESSION['data']['days_count'] > 0) ? $_SESSION['data']['hero'] * $_SESSION['days']['days_count'] : $_SESSION['data']['hero']; 
                                                        }
                                                            $total = $_SESSION['data']['mark'] +
                                                                     $_SESSION['data']['prepare'] +
                                                                     $_SESSION['data']['service'];
                                                            $total = ($_SESSION['data']['fast_form']) ? $total*2: $total;

                                                            echo "<p>Сумма: ".$total."</p>";
                                                            $message = '<tr><td></td><td>'.$_SESSION['data'].'</td></tr>';

                                                            $f_handle = fopen($_SERVER['DOCUMENT_ROOT'].'/data.txt', 'w+');

                                                            foreach($_SESSION['data'] as $k => $v){
                                                                fwrite($f_handle, $k.' '.$v.'\n');
                                                            }
                                                            fclose($f_handle);
                                                            $date = new DateTimeImmutable('now');
                                                           mail ( $_SESSION['email'] , 'Заказ' , $date->format('Y-m-d').$table.'<tr><td>Сумма:</td><td>'.$total.'</td></tr></table>' );
                                                        ?>
                                                        
                                                        
                                                        <div style="margin-top:10px; margin-left:6px "><img src="../images/pointer.gif"><img src="../images/spacer.gif" width="3">


                                                        </div>
                                                        <div style="margin-top:6px; margin-left:6px "><img src="../images/pointer.gif"><img src="../images/spacer.gif" width="3">

                                                        </div>
                                                        <div style="margin-top:6px; margin-left:6px "><img src="../images/pointer.gif"><img src="../images/spacer.gif" width="3">

                                                        </div> 
                                                 



                                                    <td valign="top" height="215" width="1" background="../images/tal.gif" style="background-repeat:repeat-y"></td>
                                                    <td valign="top" height="215" width="243">
                                                        <div style="margin-left:22px; margin-top:2px; "><img src="../images/hl.gif"></div>
                                                        <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w2.gif"></div>
                                                        <div style="margin-left:22px; margin-top:13px; ">


                                                            
                                                            
<br><br><br><br>
                                                            <div style="margin-left:67px; margin-top:7px; margin-right:10px "><img src="../images/pointer.gif"><a href="#"><img src="../images/read_more.gif" border="0"></a></div>
                                                        </div>
                                                        <div style="margin-left:22px; margin-top:16px; "><img src="../images/hl.gif"></div>
                                                        <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w4.gif"></div>
                                                        <div style="margin-left:22px; margin-top:9px; ">

                                                            
                                                            
                                                            
                                                                </div> 
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
    </body>
</html>

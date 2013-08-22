<?php
defined('_JEXEC') or die;
?>
<div class="visualImg_box">
	<div id="58" class="visualImg" style="background: url('<?php echo json_decode($item->images)->image_fulltext; ?>') no-repeat scroll center 0px #f2f2f2;"></div>
	<div class="article-Visual">

		<h1>Запись на сервис</h1>
		<form method='post' name='service-order'>
			<div class='td-form'>
				<div class='td-slide'>
					<p>Два быстрых шага</p>
					<img src='/templates/ya/images/td-step-1.png'>
					<table>
						<tr>
							<td>
								Выберите марку <span style='color: red'>*</span><br>
								<script>
									jQuery(document).ready(function(){
										jQuery('select[name="brand"]').change(function(){
											jQuery.get('?brand='+this.value, function(data){
												jQuery('#auto').html(data);
											});
											jQuery.get('?brand='+this.value, function(data){
												jQuery('#salon_id').html(data);
											});
										});
										if(jQuery('select[name="brand"]').val()!=""){
											jQuery.get('?brand='+jQuery('select[name="brand"]').val(), function(data){
												jQuery('#auto').html(data);
											});
											jQuery.get('?brand='+jQuery('select[name="brand"]').val(), function(data){
												jQuery('#salon_id').html(data);
											});
										}
									});
								</script>
								<?
								$db	= JFactory::getDbo();
								$query = $db->getQuery(true);
								$query->clear()
									->select('id AS value, name AS text')
									->from('all_salons')
									->where('id IN (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 102, 122)');
								$db->setQuery($query);
								$brands = $db->loadObjectList();
								
								echo JHtml::_('select.genericlist', $brands, 'brand');

								/*
								$p_allowed_salons = array (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 102, 122);
								$ContMain .= "<select name='brand' id='brand' class='fe' style='width: 144px;'>
								<option value=''></option>";
								ob_start ();
								Salon::get_Select("brand=1 AND keyword NOT IN ('ya', 'gm')");
								$ContMain .= ob_get_contents();
								ob_end_clean();
								*/
								?>

							</td>
							<td colspan='2'>
								Модель <span style='color: red'>*</span><br>
								<select name='auto' id='auto' class='fe'>";

								$ContMain .= "</select>
							</td>
						</tr>
						<tr>
							<td>
								Гос. номер<br>
								<input style='width: 140px;' type='text' name='number' value='".(isset($_POST["number"]) ? $_POST["number"] : "")."' class='fe' />
							</td>
							<td>
								Год выпуска<br>
								<input style='width: 140px;' type='text' name='year' value='".(isset($_POST["year"]) ? $_POST["year"] : "")."' class='fe' />
							</td>
							<td>
								Пробег<br>
								<input style='width: 140px;' type='text' MAXLENGTH='15' name='run' value='".(isset($_POST["run"]) ? $_POST["run"] : "")."' class='fe'/>
							</td>
						</tr>
						<tr>
							<td colspan='3'>
								Причина обращения<br>
								<textarea name='comment' class='fe'>".(isset($_POST["comment"]) ? $_POST["comment"] : "")."</textarea>
							</td>
						</tr>
					</table>
					<input type='button' id='form2' class='rounded next' value='Продолжить'>
				</div>
				<div class='td-slide'>
					<p>Два быстрых шага</p>
					<img src="/templates/ya/images/td-step-2.png'>
					<table>
						<tr>
							<td style='width: 144px;'>
								Имя <span style='color: red'>*</span><br>
								<input style='width: 140px;' type='text' name='i' value='".(isset($_POST["i"]) ? $_POST["i"] : "")."' class='fe' />
							</td>
							<td style='width: 165px;'>
								E-mail<br>
								<input style='width: 140px;' type='text' name='email' value='".(isset($_POST["email"]) ? $_POST["email"] : "")."' class='fe' />
							</td>
							<td>
								Контактный телефон <span style='color: red'>*</span><br>
								<input style='width: 140px;' type='text' MAXLENGTH='15' name='phone' value='".(isset($_POST["phone"]) ? $_POST["phone"] : "")."' class='fe'/>
							</td>
						</tr>
						<tr>
							<td>
								Желаемый автоцентр <span style='color: red'>*</span><br>
								<select style='width: 144px;' name='salon_id' id='salon_id'>
									<option value=''></option>";
									$p_allowed_salons = array (103, 21, 22, 23, 3, 4, 5, 6, 7, 8, 9, 10, 102);
									ob_start ();
									Salon::get_Select("id=102 OR (brand=0 AND keyword NOT IN ('ya', 'gm'))");
									$ContMain .= ob_get_contents();
									ob_end_clean();
								$ContMain .= "</select>
							</td>
							<td>
								Дата обслуживания <span style='color: red'>*</span><br>
								<input style='width: 140px;' type='text' readonly name='date' id='form_date' value='".(isset($_POST["date"]) ? $_POST["date"] : "")."' class='fe' />
								<script>
									var opts = {
										formElements:{'form_date':'Y-dt-m-dt-d'}
									};
									datePickerController.createDatePicker(opts);
								</script>
							</td>
							<td>
								Желаемое время<br>
								<input style='width: 140px;' type='text' MAXLENGTH='2' name='time' value='".(isset($_POST["time"]) ? $_POST["time"] : "")."' class='fe' />
							</td>
						</tr>
						<tr>
							<td colspan='3'>
								<input type='checkbox' name='no_promo' class='fe' /> Не получать информацию о специальных предложениях и акциях<br>
								<input type='checkbox' name='connect' checked class='fe' /> Вы согласны, чтобы с Вами связывались, используя указанную информацию<br>
								<input type='checkbox' name='store' checked class='fe' /> Вы согласны с тем, что представленная Вами информация будет сохранена в нашей базе данных
							</td>
						</tr>
					</table>
					<input type='hidden' name='site' value='111' />
					<input type='submit' id='td-send' class='rounded' value='Записаться'>
					<a id='prev' href='#'>назад к первому шагу</a>
				</div>
			</div>
		</form>

<?php 
if( $_SERVER["REQUEST_METHOD"] == "POST" )
{
/*$query = "INSERT INTO all_testdrive (added, site, brand, auto, f, i, o, salon, age, exp, pref, phone, email, date, time, comment, no_promo, connect, store) VALUES 
	(
	NOW(),
	$_POST[site],
	$_POST[brand],
	$_POST[auto],
	'".htmlspecialchars($_POST["f"])."',
	'".htmlspecialchars($_POST["i"])."',
	'".htmlspecialchars($_POST["o"])."',
	$_POST[salon],
	$_POST[age],
	".(empty($_POST['exp'])?"NULL":$_POST['exp']).",
	$_POST[pref],
	'".htmlspecialchars($_POST["phone"])."',
	'".htmlspecialchars($_POST["email"])."',
	'".$_POST[date]."',
	'".htmlspecialchars($_POST["time"])."',
	'".htmlspecialchars($_POST["comment"])."',
	".($_POST[no_promo]=='on' ? 1 : 0).",
	".($_POST[connect]=='on' ? 1 : 0).",
	".($_POST[store]=='on' ? 1 : 0)."
	)";*/
						
	if	(							//------ввели необходимую информацию?
		(empty($_POST["brand"])) ||
		(empty($_POST["auto"])) ||
		(empty($_POST["i"])) ||
		(empty($_POST["phone"])) ||
		(empty($_POST["date"]))
	)
	{
		$ContMain = "<h2 style='color:red;'>Поля c пометкой обязательны для заполнения.</h2>";
		//SHOW_FORM($_POST);
	}
		else//-----проверка правильности ввода email		
		if( ($_POST["email"] != "") && (!EMAIL_NAME_CORRECT($_POST["email"])) )
			{			
				$ContMain = "<h2 style='color:red;'>Неправильно введен адрес электронной почты.</h2>";
				//SHOW_FORM($_POST);
			}	

		else  //-----проверка наличие ввода имени

		if((isset($_POST["i"]))&&($_POST["i"]==""))
		{
			echo"<p style='color:red;'>Вы не указали имя.</p>";
			//SHOW_FORM($_POST);
		}

				else	//-----====== ОТПРАВЛЯЕМ НА ПОЧТУ
				{
					$mes = "";
					$mes .= "<b>Марка:</b> ".get_FieldValue(all_salons, "id=".$_POST["brand"], "name")."<br>";
					if ( $_POST["auto"] ) $mes .= "<b>Модель:</b> ".get_FieldValue($db_prefix["$_POST[brand]"]."_testdrive", "id=".$_POST["auto"], "name")."<br>";
					$mes .= "<b>Желаемый автоцентр:</b> ".Salon::Name($_POST["salon_id"])."<br>";
					$mes .= "<b>Имя, фамилия:</b> ".strip_tags($_POST["i"])." ".strip_tags($_POST["o"])." ".strip_tags($_POST["f"])."<br>";
					$mes .= "<b>Возраст:</b> ".strip_tags($_POST["age"])."<br>";
					$mes .= "<b>Водительский стаж:</b> ".strip_tags($_POST["exp"])."<br>";
					$mes .= "<b>Телефон:</b> ".strip_tags($_POST["phone"])."<br>";
					$mes .= "<b>Email:</b> ".strip_tags($_POST["email"])."<br>";
					$mes .= "<b>Желаемая дата обслуживания:</b> ".strip_tags($_POST["date"])."<br>";
					$mes .= "<b>Желаемое время обслуживания:</b> ".strip_tags($_POST["time"])."<br>";
					$mes .= "<b>Комментарий:</b> ".strip_tags($_POST["comment"])."<br>";
					$mes .= "<br><b>Служебная информация:</b><br>";
					$mes .= "no_promo: $_POST[no_promo]; connect: $_POST[connect]; 	store: $_POST[store]";
					//$to = Mail_list::Service($_POST["salon_id"]);
					$to = 'andreev_a@adv.yug-avto.ru';
					$subj = "Заявка на сервис ".Salon::Name($_POST["salon_id"])."с сайта yug-avto.ru от ".$_POST["i"]." ".$_POST["f"];
					$from = "From: <".$_POST["email"].">";
					if (SEND_MAIL($to, $subj, $mes, $from))
					{
						//$res = @mysql_query($query);	тут пока не сохраняем никуда
						$ContMain = "
						<div class='request_complete'>
							<!-- <img class='ico' alt='' src='/i/request_complete.png'/> -->
							<h1>Спасибо!</h1>
							<p>Ваша заявка принята. Наш менеджер свяжется с Вами в ближайшее время.</p>
							<p><br/><br/>
							<!-- <a href='javascript:history.back()' class='rounded'>Вернуться</a></p> -->
							<a href='/service-order/' class='rounded'>Вернуться</a></p>
						</div>
						
						";
						
						//SHOW_FORM(NULL);
					}
						else
						{
							$ContMain = "<p style='color:red;'>Ошибка отправления заявки. Попробуйте повторить попытку позже.</p>";
							//SHOW_FORM($_POST);
						}
				}


}?>
		
		
	</div>
</div>
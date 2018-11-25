<?php
/*
Template Name: Цены
*/
?>
<?php  get_header(); ?>
<?php $slider_fields = array("slider_photo_1", "slider_photo_2", "slider_photo_3", "slider_photo_4");
$slider_text_fields = array("slider_text_1", "slider_text_2", "slider_text_3", "slider_text_4"); ?>
<div id="main-slider" class="owl-carousel">
    <?
    for ($i = 0; $i < count($slider_fields); $i++) {
        if (get_field($slider_fields[$i])) {
            ?>
            <div class="carousel-content"
                 style="background-image: url(<?php echo get_field($slider_fields[$i]); ?>);">
                <div><?php echo get_field($slider_text_fields[$i]); ?></div>
            </div>
        <? }
    }
    ?>
</div>
<section class="cuisine-section">
    <h1><?php echo $post->post_title;?></h1>
    <div class="cuisine-first-div">
        <p style="text-align: center;"><b style="background-color: initial; text-align: center;"><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">ГОСТЕВОЙ
ДОМ «ВОДОЛЕЙ»
	</span></b>
        </p>
        <p class="MsoNormal" align="center" style="margin-right:-28.4pt;text-align:center; text-indent:-35.45pt"><b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif">центр с. Орловщина</span></b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif">, Новомосковский р-н,
Днепропетровская обл.
	</span><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif"> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span lang="EN-US" style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language: EN-US">c 01</span><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">.</span><span lang="EN-US" style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language: EN-US">11</span><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">.2018</span><span style="font-size:5.0pt;font-family:&quot;Arial&quot;,sans-serif"><o:p></o:p></span>
        </p>
        <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" width="0" style="    width: 100%;">
            <tbody>
            <tr>
                <td width="265" colspan="3" style="width: 198.5pt; border-width: 1pt; border-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">ОТЕЛЬ<o:p></o:p></span></b>
                    </p>
                </td>
                <td width="465" colspan="4" valign="top" style="width: 349.05pt; border-top-width: 1pt; border-right-width: 1pt; border-bottom-width: 1pt; border-top-color: windowtext; border-right-color: windowtext; border-bottom-color: windowtext; border-left: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Заселение <b><span style="text-transform:uppercase">круглосуточно</span></b>.
  Заявки по тел.
			<b>068-034-80-33</b>.<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Расчетное
  время 12-00 часов дня
			</span><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif"><o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="47" rowspan="4" valign="top" style="width: 35.45pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif"><o:p>&nbsp;</o:p></span>
                    </p>
                </td>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">Номер
  люкс двухкомнатн.
			<o:p></o:p></span>
                    </p>
                </td>
                <td width="66" style="width: 49.6pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">1300<o:p></o:p></span>
                    </p>
                </td>
                <td width="399" colspan="3" rowspan="2" style="width: 299.45pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 1.4pt;">
                    <p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif">Кухня (проходная на
  два люкса), мягкая мебель (+2 спальных места в каждом), кондиционер и ТВ
  спутн. в каждой комнате, холодильник, фен, у входа зонт со столиками и
  автостоянка
			<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">Номер
  люкс однокомнатн.
			<o:p></o:p></span>
                    </p>
                </td>
                <td width="66" style="width: 49.6pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">1000<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">Котедж
  однокомнатный
			</span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif"><o:p></o:p></span>
                    </p>
                </td>
                <td width="66" style="width: 49.6pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">750<o:p></o:p></span>
                    </p>
                </td>
                <td width="399" colspan="3" valign="top" style="width: 299.45pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 1.4pt;">
                    <p class="MsoNormal" align="center" style="text-align:center"><span style="font-family:&quot;Arial&quot;,sans-serif">терраса, кондиционер, холодильник, фен,
  ТВ (спутн.)
			<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">Номер
  полулюкс
			<o:p></o:p></span>
                    </p>
                </td>
                <td width="66" style="width: 49.6pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">650<o:p></o:p></span>
                    </p>
                </td>
                <td width="399" colspan="3" valign="top" style="width: 299.45pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 1.4pt;">
                    <p class="MsoNormal" align="center" style="text-align:center"><span style="font-family:&quot;Arial&quot;,sans-serif">2-этаж, терраса, кондиционер, холодильник,
  ТВ (Т2)
			<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="265" colspan="3" style="width: 198.5pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif;text-transform:uppercase">Баня-сауна<o:p></o:p></span></b>
                    </p>
                </td>
                <td width="465" colspan="4" valign="top" style="width: 349.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Работает <b><span style="text-transform:uppercase">круглосуточно</span></b>&nbsp; по&nbsp;
  предварительной&nbsp; заявке
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">по тел. <b>068-034-80-33</b><o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="47" rowspan="5" valign="top" style="width: 35.45pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif"><o:p>&nbsp;</o:p></span>
                    </p>
                </td>
                <td width="161" style="width: 120.55pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:14.0pt;font-family:&quot;Arial&quot;,sans-serif">Баня
  на дровах
			<o:p></o:p></span>
                    </p>
                </td>
                <td width="274" colspan="3" style="width: 205.55pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 2.85pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">250 грн./час
  на 4 человека.
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Более 4-х
  человек – 40 грн./час с чел.
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Дети до 6 лет
  бесплатно.
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><b><span style="font-family:&quot;Arial&quot;,sans-serif">СКИДКИ</span></b><span style="font-family:&quot;Arial&quot;,sans-serif">: <o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif">-
			<b>50 % </b>утром ежедневно с 3-00 до
  10-00;
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif">-
			<b>20 %</b> днем в рабочие дни с 10 до 17
  час. (кроме пятницы и предпраздничных дней)
			</span><span style="font-family: &quot;Arial&quot;,sans-serif"><o:p></o:p></span>
                    </p>
                </td>
                <td width="248" colspan="2" valign="top" style="width: 186pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Минимальный
  заказ 2 часа.
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Максимальное
  кол-во – 8 человек (взрослых).
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Прогрев холодной
  бани – 2 часа.
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">&nbsp;</span>
                    </p>
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">В стоимость
  услуги входит простынь.
			<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:14.0pt;font-family:&quot;Arial&quot;,sans-serif">Карпатский
  чан
			<o:p></o:p></span>
                    </p>
                </td>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">500 грн. <o:p></o:p></span>
                    </p>
                </td>
                <td width="248" colspan="2" valign="top" style="width: 186pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">На всё время
  пребывания в бане.
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Время
  подготовки чана 4 часа.
			<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr style="mso-yfti-irow:8;height:12.35pt">
                <td width="217" colspan="2" valign="top" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 12.35pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Веник&nbsp; дубовый<o:p></o:p></span>
                    </p>
                </td>
                <td width="217" colspan="2" valign="top" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 12.35pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">60 грн.<o:p></o:p></span>
                    </p>
                </td>
                <td width="248" colspan="2" valign="top" style="width: 186pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 12.35pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="217" colspan="2" valign="top" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Тапочки
  одноразовые,
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">шапки и
  рукавицы банные
			<o:p></o:p></span>
                    </p>
                </td>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">20 грн.<o:p></o:p></span>
                    </p>
                </td>
                <td width="248" colspan="2" valign="top" style="width: 186pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Страховочный
  жилет детский для бассейна (на ребенка весом 10-30 кг)
			<o:p></o:p></span>
                    </p>
                </td>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">30 грн. <o:p></o:p></span>
                    </p>
                </td>
                <td width="248" colspan="2" style="width: 186pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">На время
  пребывания ребенка в бане
			<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="265" colspan="3" style="width: 198.5pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">РЕСТОРАН<o:p></o:p></span></b>
                    </p>
                </td>
                <td width="465" colspan="4" valign="top" style="width: 349.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">С 9-00 до 24-00
  ежедневно.
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Вопросы и
  заявки на банкеты по тел.
			<b>095-643-32-47</b><o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr style="mso-yfti-irow:12;height:44.5pt">
                <td width="265" colspan="3" style="width: 198.5pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt; height: 44.5pt;">
                    <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">ДИСКО-БАР<o:p></o:p></span></b>
                    </p>
                </td>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 44.5pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">&nbsp;</span>
                    </p>
                </td>
                <td width="248" colspan="2" valign="top" style="width: 186pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 44.5pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Пятница, суббота,
  предпраздничн., праздничные дни с 18-00 до 24-00 час.
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Тел.&nbsp; <b>095-643-32-47</b><o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr style="mso-yfti-irow:13;height:18.4pt">
                <td width="265" colspan="3" rowspan="2" style="width: 198.5pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt; height: 18.4pt;">
                    <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">АКВАПАРК <o:p></o:p></span></b>
                    </p>
                    <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">с горками и с
  подогревом
			</span></b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif"><o:p></o:p></span>
                    </p>
                </td>
                <td width="217" colspan="2" valign="top" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 18.4pt;">
                    <p class="MsoNormal"><span style="font-size:12pt;font-family:&quot;Arial&quot;,sans-serif">250
  грн. для взрослых.
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-size:12pt;font-family:&quot;Arial&quot;,sans-serif">150
  грн. детям до 12 лет.
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-size:12pt;font-family:&quot;Arial&quot;,sans-serif">Бесплатно
  детям до 6 лет.
			<o:p></o:p></span>
                    </p>
                </td>
                <td width="248" colspan="2" rowspan="2" style="width: 186pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 18.4pt;">
                    <p class="MsoNormal"><span style="font-size:12pt;font-family:&quot;Arial&quot;,sans-serif">Время
  работы:
			<b>закрыт до сезона 2019 г.</b><o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-size:12pt;font-family:&quot;Arial&quot;,sans-serif"><o:p>&nbsp;</o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-size:12pt;font-family:&quot;Arial&quot;,sans-serif">К
  услугам: раздевалки с фенами, душ с горячей водой, шезлонг, маленький столик,
  зонт
			</span><span style="font-family:&quot;Arial&quot;,sans-serif"><o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr style="mso-yfti-irow:14;height:14.45pt">
                <td width="217" colspan="2" valign="top" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt; height: 14.45pt;">
                    <p class="MsoNormal"><span style="font-size:12pt;font-family:&quot;Arial&quot;,sans-serif">Для
  проживающих в отеле
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-size:12pt;font-family:&quot;Arial&quot;,sans-serif">200
  грн. для взрослых,
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-size:12pt;font-family:&quot;Arial&quot;,sans-serif">100
  грн. детям до 12 лет
			<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="265" colspan="3" style="width: 198.5pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">БИЛЬЯРДНЫЙ КЛУБ<o:p></o:p></span></b>
                    </p>
                </td>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">60 грн./час
  русский,
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">50 грн./час
  американка.
			<o:p></o:p></span>
                    </p>
                </td>
                <td width="248" colspan="2" valign="top" style="width: 186pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Ежедневно&nbsp; с 14-00 до 24-00 <o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">(до
  последнего клиента до 5-00)
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><b><span style="font-family:&quot;Arial&quot;,sans-serif">Тел. 098-044-15-95<o:p></o:p></span></b>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="265" colspan="3" style="width: 198.5pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">БАРЫ <o:p></o:p></span></b>
                    </p>
                </td>
                <td width="465" colspan="4" valign="top" style="width: 349.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Работают по
  графику ресторана, диско-бара, аквапарка и
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">бильярдного
  клуба
			<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="265" colspan="3" style="width: 198.5pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">БЕСЕДКИ с мангалом<o:p></o:p></span></b>
                    </p>
                </td>
                <td width="465" colspan="4" valign="top" style="width: 349.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">400 грн.
  маленькая на 10-12 чел. (вмещались до 15 чел.)
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">500 грн.
  большая на 13-15 чел. (вмещались до 19 чел.) или с кострищем;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">&nbsp;- для проживающих в отеле соответственно 200
  и 300 грн.
			<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="265" colspan="3" style="width: 198.5pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">АВТОМОЙКА<o:p></o:p></span></b>
                    </p>
                </td>
                <td width="219" colspan="3" valign="top" style="width: 164pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">наружная
  мойка от 75 грн.
			<o:p></o:p></span>
                    </p>
                </td>
                <td width="247" rowspan="2" valign="top" style="width: 185.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Ежедневно с
  8-00 до 20-00
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><b><span style="font-family:&quot;Arial&quot;,sans-serif">Тел. 098-044-15-95<o:p></o:p></span></b>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="265" colspan="3" style="width: 198.5pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">ШИНОМОНТАЖ<o:p></o:p></span></b>
                    </p>
                </td>
                <td width="219" colspan="3" valign="top" style="width: 164pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Готовится к
  открытию
			<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="265" colspan="3" style="width: 198.5pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">МАГАЗИН «ПРОДУКТЫ»<o:p></o:p></span></b>
                    </p>
                </td>
                <td width="219" colspan="3" style="width: 164pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">&nbsp;</span>
                    </p>
                </td>
                <td width="247" style="width: 185.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Круглосуточно<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="265" colspan="3" style="width: 198.5pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif">СВЕЖЕЕ РАЗЛИВНОЕ ПИВО
			<o:p></o:p></span></b>
                    </p>
                    <p class="MsoNormal"><b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif">«ПИВНАЯ СКВАЖИНА»</span></b><b><span style="font-size:12.0pt;font-family: &quot;Arial&quot;,sans-serif"><o:p></o:p></span></b>
                    </p>
                </td>
                <td width="219" colspan="3" style="width: 164pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">&nbsp;</span>
                    </p>
                </td>
                <td width="247" style="width: 185.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr style="mso-yfti-irow:22;height:9.55pt">
                <td width="730" colspan="7" valign="top" style="width: 547.55pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt; height: 9.55pt;">
                    <p class="MsoNormal" align="center" style="text-align:center"><i><span style="font-family:&quot;Arial&quot;,sans-serif">ДОПОЛНИТЕЛЬНЫЕ&nbsp; УСЛУГИ<o:p></o:p></span></i>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="265" colspan="3" style="width: 198.5pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">Мангал</span></b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif"><o:p></o:p></span>
                    </p>
                </td>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">150 грн. <o:p></o:p></span>
                    </p>
                </td>
                <td width="248" colspan="2" style="width: 186pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">с дровами и
  решеткой
			<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="265" colspan="3" style="width: 198.5pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">Раскладушка<o:p></o:p></span></b>
                    </p>
                </td>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">100 грн.<o:p></o:p></span>
                    </p>
                </td>
                <td width="248" colspan="2" style="width: 186pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">в номер с
  постелью
			<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="265" colspan="3" style="width: 198.5pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif">Стирка белья<o:p></o:p></span></b>
                    </p>
                </td>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">30 грн./кг<o:p></o:p></span>
                    </p>
                </td>
                <td width="248" colspan="2" style="width: 186pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">&nbsp;</span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="265" colspan="3" style="width: 198.5pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif">Электрочайник,
  столовая посуда
			</span></b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif">(в
  т.ч. открывалки, разделочная доска, нож)
			<o:p></o:p></span>
                    </p>
                </td>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">БЕСПЛАТНО<o:p></o:p></span>
                    </p>
                </td>
                <td width="248" colspan="2" style="width: 186pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-family:&quot;Arial&quot;,sans-serif">Предоставляется
  по просьбе гостей в баню, коттедж или номер
			<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            </tbody>
        </table>






        <!--  1111111111111   -->




        <table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0"  style="border-collapse:collapse;width:100%;"  width="0" >
        	<colgroup width="179"></colgroup>
        	<colgroup width="91"></colgroup>
        	<colgroup width="104"></colgroup>
        	<colgroup width="90"></colgroup>
        	<colgroup width="119"></colgroup>
        	<colgroup width="303"></colgroup>
        	<colgroup width="106"></colgroup>
        	<tbody><tr>
        		<td style="border-bottom: 1px solid #000000" colspan="9" height="39" align="center" valign="middle"><font face="Arial" size="4" color="#000000">
                    <b style="background-color: initial; text-align: center;"> <span style="font-size:12.0pt;font-family:"Arial",sans-serif">Новогодние цены с 31.12 по 2.01</span></b>
                </font></td>
        		<!-- <td align="left"><font color="#000000"><br></font></td> -->
        	</tr>
        	<tr>
        		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000;padding: 0cm 5.4pt;" rowspan="4" height="89" valign="middle">
              <p class="MsoNormal"><b><span style="text-transform:uppercase;font-size:12.0pt;color:#44312d;font-family:"Arial",sans-serif;">Номера<o:p></o:p></span></b>
              </p>
          </td>
        		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000;padding: 0cm 5.4pt;" colspan="6" valign="middle">
              <p class="MsoNormal"><b><span style="text-transform:uppercase;font-size:12.0pt;color:#44312d;font-family:"Arial",sans-serif;">Новый год на двоих<o:p></o:p></span></b>
              </p>
            </td>

        		<!-- <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="3" align="center" valign="middle"><b><font face="Arial" color="#000000">Сумма всего с проживанием (2 сут) и с рестораном в Новог. Ночь</font></b></td>
        		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="3" align="center" valign="middle"><b><font face="Arial" color="#000000">Примечание</font></b></td>
        		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="3" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000">Всего номеров</font></b></td> -->
        	</tr>
            <tr>
                <td  colspan='3' style=" border-left: 1px solid #000000; border-right: 1px solid #000000;padding: 0cm 5.4pt;"  >
                    <p class="MsoNormal"><b>
                      <span style="font-size:12.0pt;color:#44312d;font-family:"Arial",sans-serif;">  Новый год на двоих <o:p></o:p></span>
                    </b>
                  </p>
                </td>
                <td rowspan='1'style="border-top: 1px solid transparent; border-bottom: 1px solid transparent; border-left: 1px solid #000000; border-right: 1px solid #000000" ></td>
                <td rowspan='1'style="border-top: 1px solid transparent; border-bottom: 1px solid transparent; border-left: 1px solid #000000; border-right: 1px solid #000000" ></td>
                <td rowspan='1'style="border-top: 1px solid transparent; border-bottom: 1px solid transparent; border-left: 1px solid #000000; border-right: 1px solid #000000" ></td>
            </tr>
        	<tr>
        		<td style="padding: 0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2"  valign="middle">
              <p class="MsoNormal"><b><span style="font-size:12.0pt;color:#44312d;font-family:"Arial",sans-serif;">На один день с завтраком<o:p></o:p></span>
              </b>
            </p>
            </td>
        		<td style="padding: 0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2"  valign="middle">
              <p class="MsoNormal"><b>
                <span style="font-size:12.0pt;color:#44312d;font-family:"Arial",sans-serif;">На два дня с завтраком<o:p></o:p></span>
              </b></p></td>
        		<td style="padding: 0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2"  valign="middle">
              <p class="MsoNormal"><b>
                <span style="font-size:12.0pt;color:#44312d;font-family:"Arial",sans-serif;">Ресторан на в Новог. Ночь на 2 перс<o:p></o:p></span>
              </b></p>
            </td>
        		<td style="padding: 0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" valign="middle">
              <p class="MsoNormal"><b>
                <span style="font-size:12.0pt;color:#44312d;font-family:"Arial",sans-serif;">Сумма всего с проживанием (2 сут) и с рестораном в Новог. Ночь<o:p></o:p></span>
              </b>
              </p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" valign="middle">
              <p class="MsoNormal"><b>
                <span style="text-transform:uppercase;font-size:12.0pt;color:#44312d;font-family:"Arial",sans-serif;">Примечание<o:p></o:p></span>
              </b></p>
            </td>
                <td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan="2" valign="middle">
                  <p class="MsoNormal"><b>
                    <span style="text-transform:uppercase;font-size:12.0pt;color:#44312d;font-family:"Arial",sans-serif;">Всего номеров<o:p></o:p></span>
                  </b></p>
                </td>
        		</tr>
        	<tr>
        		</tr>
        	<tr>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign="middle">
              <p class="MsoNormal">
                <span style="font-size:12.0pt;font-family:"Arial",sans-serif">Котедж<o:p></o:p></span>
              </p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="1700" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">1700<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="3400" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">3400<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="2600" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">2600<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="6000" sdnum="1033;">
              <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:"Arial",sans-serif">6000<o:p></o:p></span></b></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"></p><br></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="4" sdnum="1033;">
              <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:"Arial",sans-serif">4<o:p></o:p></span></b></p></td>
        	</tr>
        	<tr>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="73" align="left" valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">Люкс 1 комн. на 2 человека<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="2250" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">2250<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="4500" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">4500<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="2600" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">2600<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="7100" sdnum="1033;">
              <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:"Arial",sans-serif">7100<o:p></o:p></span></b></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">Есть дополн. 2 места с доп. оплатой за завтраки и ресторан в новог. ночь<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="1" sdnum="1033;">
              <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:"Arial",sans-serif">1<o:p></o:p></span></b></p>
            </td>
        	</tr>
        	<tr>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="48" align="left" valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">Люкс 2 комн. На 4 человека<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle" sdval="3100" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">3100<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle" sdval="6200" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">6200<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle" sdval="5200" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">5200<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle" sdval="11400" sdnum="1033;">
              <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:"Arial",sans-serif">11400<o:p></o:p></span></b></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle">
            <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">  Ресторан и завтраки на 4 человека<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle" sdval="1" sdnum="1033;">
              <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:"Arial",sans-serif">1<o:p></o:p></span></b></p>
            </td>
        	</tr>

        	<tr>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="30" align="left" valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">Полулюкс<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="1500" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">1500<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="3000" sdnum="1033;">
            <p class="MsoNormal"> <span style="font-size:12.0pt;font-family:"Arial",sans-serif"> 3000<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="2600" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">2600<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-t
            op: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="5600" sdnum="1033;">
              <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:"Arial",sans-serif">5600<o:p></o:p></span></b></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">На 2 этаже над баней<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="1" sdnum="1033;">
              <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:"Arial",sans-serif">1<o:p></o:p></span></b></p></td>
        	</tr>
        	<tr>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="41" align="left" valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">Полулюкс<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="1700" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">1700<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" a valign="middle" sdval="3400" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">3400<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="2600" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">2600<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="6000" sdnum="1033;">
              <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:"Arial",sans-serif">6000<o:p></o:p></span></b></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">2-й этаж  с 2-х спальной кроватью<o:p></o:p></span></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="1" sdnum="1033;">
              <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:"Arial",sans-serif">1<o:p></o:p></span>
              </b></p></td>
        	</tr>
        	<tr>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="38" align="left" valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">Стандарт 2-х местный<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="1500" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">1500<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="3000" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">3000<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="2600" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">2600<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="5600" sdnum="1033;">
            <p class="MsoNormal"><b>
              <span style="font-size:12.0pt;font-family:"Arial",sans-serif">5600<o:p></o:p></span></p>
            </b></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">2-й этаж   с 2-х спальной кроватью<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="1" sdnum="1033;">
              <p class="MsoNormal"><b>
              <span style="font-size:12.0pt;font-family:"Arial",sans-serif">1<o:p></o:p></span></b></p>
            </td>
        	</tr>
        	<tr>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="55" align="left" valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">Стандарт 2-х местный<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="1500" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">1500<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="3000" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">3000<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="2600" sdnum="1033;">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">2600<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="5600" sdnum="1033;">
              <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:"Arial",sans-serif">5600<o:p></o:p></span>
              </b></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">2-й этаж  с 2-мя односпальными кроватями<o:p></o:p></span></p>
            </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle" sdval="1" sdnum="1033;">
              <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:"Arial",sans-serif">1<o:p></o:p></span>
              </b></p>
            </td>
        	</tr>
        	<tr style="mso-yfti-irow:22;height:9.55pt">
        		<td style="width: 547.55pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt; height: 9.55pt;" colspan="7" height="32" align="center" valign="top">
              <p class="MsoNormal" align="center" style="text-align:center;">
                <i><span style="text-transform:uppercase;font-size:12.0pt;font-family:"Arial",sans-serif">Беседки<o:p></o:p></span></i></p>
            </td>
        		<!-- <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td> -->
        	</tr>
        	<tr>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="64" align="left" valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">Малая беседка <o:p></o:p></span></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:"Arial",sans-serif">400/200<o:p></o:p></span></b></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><br></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><br></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">на 10-12 чел. (макс. 14 чел.)<o:p></o:p></span></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><br></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><br></p></td>
        	</tr>
        	<tr>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="79" align="left" valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">Большая беседка<o:p></o:p></span></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:"Arial",sans-serif">500/300<o:p></o:p></span></b></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><br></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><br></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
               <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">на 14-16 человек (макс. до 18)<o:p></o:p></span></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><br></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><br></p></td>
        	</tr>
        	<tr>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="68" align="left" valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">Большая беседка с очагом<o:p></o:p></span></p> </td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><b><span style="font-size:12.0pt;font-family:"Arial",sans-serif">600/400<o:p></o:p></span></b></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><br></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><br></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">до 10 человек<o:p></o:p></span></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><br></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><br></p></td>
        	</tr>

            <tr style="mso-yfti-irow:22;height:9.55pt">
        		<td style=" border-left: 1px solid #000000; border-right: 1px solid #000000" colspan="9" height="22" align="center" valign="middle">
              <p class="MsoNormal" align="center" style="text-align:center;">
                <i><span style="text-transform:uppercase;font-size:12.0pt;font-family:"Arial",sans-serif">Баня<o:p></o:p></span></i></p>
            </td>
        	</tr>
        	<tr>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="35" align="left" valign="middle">
              <p class="MsoNormal"><br></p></td>
        		<td colspan='2' style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">Обычная цена<o:p></o:p></span></p></td>
                <td colspan='3' style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
                  <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">Новогодняя цена<o:p></o:p></span></p></td>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="35" align="left" valign="middle">
              <p class="MsoNormal"><br></p></td>
        	</tr>
        	<tr>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="184" align="left" valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">Баня<o:p></o:p></span></p></td>
        		<td colspan='2' style="padding:0cm 5.4pt;font-size: 12pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
            <p class="MsoNormal">  <br><span style="font-size:12.0pt;font-family:"Arial",sans-serif">350 грн./час на 4 чел. Более 4-х чел. - 50 грн./час с чел. Скидка - 50 % утром ежедневно с 3-00 до 10-00; <o:p></o:p></span> </p></td>
                <td colspan='3'  style="padding:0cm 5.4pt;font-size: 12pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
                <p class="MsoNormal"><br><span style="font-size:12.0pt;font-family:"Arial",sans-serif"><b>250 грн./час</b> на 4 человека. Более 4-х человек – <b>40 грн./час</b> с чел. Дети до 6 лет бесплатно. СКИДКИ: - 50 % утром ежедневно с 3-00 до 10-00;<o:p></o:p></span></p></td>
                <td   style="padding:0cm 5.4pt;font-size: 12pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  valign="middle">
                <p class="MsoNormal">  <b><br></b></p></td>
        	</tr>
        	<tr>
        		<td style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">Чан<o:p></o:p></span></p></td>
        		<td colspan="2" style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" valign="middle">
              <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Arial",sans-serif">500 грн<o:p></o:p></span><br></p></td>
                <td colspan="3" style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"  height="21" align="left" valign="middle">
                  <p class="MsoNormal"> <b><span style="font-size:12.0pt;font-family:"Arial",sans-serif">600 грн<o:p></o:p></span></b></p> </td>

                <td colspan="3" style="padding:0cm 5.4pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" height="21" align="left" valign="middle">
                  <p class="MsoNormal"></p></td>
        	</tr>
        </tbody>
        </table>
            <!-- <table class="bottomtable" style="max-width: 996px;">
        	<tr>
        		<td style=" border-left: 1px solid #000000; border-right: 1px solid #000000" colspan="9" height="22" align="center" valign="middle"><font face="Arial" size="3" color="#000000">Баня</font></td>
        	</tr>
        	<tr>
        		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="35" align="left" valign="middle"><font face="Arial" size="3" color="#000000"><br></font></td>
        		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
        	</tr>
        	<tr>
        		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="184" align="left" valign="middle"><font face="Arial" size="3" color="#000000">Баня</font></td>
        		<td style="font-size: 12pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle"><b><font style="font-size: 12pt;" face="Arial" size="1" color="#000000"><br>350 грн./час на 4 человека. Более 4-х человек – 50 грн./час с чел. Дети до 6 лет бесплатно. СКИДКИ: - 50 % утром ежедневно с 3-00 до 10-00; </font></b></td>
            <td style="font-size: 12pt;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle"><b><font style="font-size: 12pt;" face="Arial" size="1" color="#000000"><br>250 грн./час на 4 чел. Более 4-х чел. - 40 грн./час с чел. Скидка - 50 % утром ежедневно с 3-00 до 10-00; </font></b></td>
        	</tr>
        	<tr>
        		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign="middle"><font face="Arial" size="3" color="#000000">Чан</font></td>
        		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle"><b><font face="Arial" size="1" color="#000000"><br></font></b></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign="middle"><font face="Arial" size="3" color="#000000"></font></td>
        	</tr>
        </tbody></table> -->



        <!--<p class="MsoNormal" align="center" style="text-align:center"><b><span style="font-size:26.0pt">НОВЫЙ ГОД И РОЖДЕСТВО<o:p></o:p></span></b>
        </p>
        <p class="MsoNormal" align="center" style="text-align:center"><b><span style="font-size:26.0pt">В ГОСТЕВОМ ДОМЕ «ВОДОЛЕЙ»</span></b><span style="font-size:26.0pt"><o:p></o:p></span>
        </p>
        <p class="MsoNormal"><o:p>&nbsp;</o:p>
        </p>
        <table class="1" border="1" cellspacing="0" cellpadding="0" width="0" style="width: 100%;">
            <tbody>
            <tr>
                <td width="265" colspan="3" style="width: 198.5pt; border-width: 1pt; border-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><b>ОТЕЛЬ<o:p></o:p></b>
                    </p>
                    <p class="MsoNormal"><b>&nbsp;</b>
                    </p>
                    <p class="MsoNormal"><b><span style="font-size:14.0pt">31 дек–1 янв,&nbsp;&nbsp;
  1–2 янв
			<o:p></o:p></span></b>
                    </p>
                    <p class="MsoNormal"><b><span style="font-size:14.0pt">6-7&nbsp; и&nbsp; 7-8 янв</span><o:p></o:p></b>
                    </p>
                </td>
                <td width="473" colspan="3" valign="top" style="width: 354.4pt; border-top-width: 1pt; border-right-width: 1pt; border-bottom-width: 1pt; border-top-color: windowtext; border-right-color: windowtext; border-bottom-color: windowtext; border-left: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal">Заселение <b><span style="text-transform:uppercase">круглосуточно</span></b>. Заявки по тел. <b>068-034-80-33</b>.<o:p></o:p>
                    </p>
                    <p class="MsoNormal">Расчетное время 12-00 часов дня<o:p></o:p>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="47" rowspan="4" valign="top" style="width: 35.45pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><o:p>&nbsp;</o:p>
                    </p>
                </td>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal">Номер люкс двухкомнатн. <o:p></o:p>
                    </p>
                </td>
                <td width="66" style="width: 49.6pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:14.0pt">2000<o:p></o:p></span>
                    </p>
                </td>
                <td width="406" colspan="2" rowspan="2" style="width: 304.8pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 1.4pt;">
                    <p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:10.0pt">Кухня (проходная на два люкса), мягкая мебель (+2
  спальных места в каждом), кондиционер и ТВ спутн. в каждой комнате,
  холодильник, фен, у входа зонт со столиками и автостоянка
			<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal">Номер люкс однокомнатн. <o:p></o:p>
                    </p>
                </td>
                <td width="66" style="width: 49.6pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:14.0pt">1500<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal">Котедж однокомнатный<span style="font-size:10.0pt"><o:p></o:p></span>
                    </p>
                </td>
                <td width="66" style="width: 49.6pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:14.0pt">1000<o:p></o:p></span>
                    </p>
                </td>
                <td width="406" colspan="2" valign="top" style="width: 304.8pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 1.4pt;">
                    <p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:11.0pt">терраса, кондиционер, холодильник, фен, ТВ (спутн.)<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal">Номер полулюкс<o:p></o:p>
                    </p>
                </td>
                <td width="66" style="width: 49.6pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:14.0pt">900<o:p></o:p></span>
                    </p>
                </td>
                <td width="406" colspan="2" valign="top" style="width: 304.8pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 1.4pt;">
                    <p class="MsoNormal" align="center" style="text-align:center"><span style="font-size:11.0pt">2-этаж, терраса, кондиционер, холодильник, ТВ (Т2)<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="265" colspan="3" style="width: 198.5pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><b><span style="text-transform:uppercase">Баня-сауна<o:p></o:p></span></b>
                    </p>
                    <p class="MsoNormal"><b><span style="text-transform:uppercase">&nbsp;</span></b>
                    </p>
                    <p class="MsoNormal"><b><span style="font-size:14.0pt">31 дек, 1, 6 и 7 янв<o:p></o:p></span></b>
                    </p>
                </td>
                <td width="473" colspan="3" valign="top" style="width: 354.4pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:11.0pt">&nbsp;</span>
                    </p>
                    <p class="MsoNormal"><span style="font-size:11.0pt">Работает <b><span style="text-transform:uppercase">круглосуточно</span></b>&nbsp; по&nbsp;
  предварительной&nbsp; заявке
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-size:11.0pt">по тел. <b>068-034-80-33</b><o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="47" rowspan="2" valign="top" style="width: 35.45pt; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; border-right-color: windowtext; border-bottom-color: windowtext; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><o:p>&nbsp;</o:p>
                    </p>
                </td>
                <td width="161" style="width: 120.55pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:14.0pt">Баня на дровах<o:p></o:p></span>
                    </p>
                </td>
                <td width="274" colspan="3" style="width: 205.55pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 2.85pt;">
                    <p class="MsoNormal"><span style="font-size:12.0pt">350</span><span style="font-size:11.0pt"> грн./час на 4 человека. <o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-size:11.0pt">Более 4-х человек – </span><span style="font-size:11.0pt">50</span><span style="font-size:11.0pt"> грн./час с чел.
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-size:11.0pt">Дети до 6 лет бесплатно.<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><b><span style="font-size:11.0pt">СКИДКИ</span></b><span style="font-size:11.0pt">: <o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-size:10.0pt">- <b>50 % </b>утром ежедневно с 3-00 до 10-00; <o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-size:10.0pt">&nbsp;</span><span style="font-size:11.0pt"><o:p></o:p></span>
                    </p>
                </td>
                <td width="255" valign="top" style="width: 191.35pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:11.0pt">Минимальный заказ 2 часа. <o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-size:11.0pt">Максимальное кол-во – 8
  человек (взрослых).
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-size:11.0pt">Прогрев холодной бани – 2
  часа.
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-size:11.0pt">&nbsp;</span>
                    </p>
                    <p class="MsoNormal"><span style="font-size:11.0pt">В стоимость услуги входит
  простынь.
			<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:14.0pt">Карпатский чан<o:p></o:p></span>
                    </p>
                </td>
                <td width="217" colspan="2" style="width: 163.05pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:12.0pt">600<b> </b></span><span style="font-size:11.0pt">грн. <o:p></o:p></span>
                    </p>
                </td>
                <td width="255" valign="top" style="width: 191.35pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;">
                    <p class="MsoNormal"><span style="font-size:11.0pt">На всё время пребывания в
  бане.
			<o:p></o:p></span>
                    </p>
                    <p class="MsoNormal"><span style="font-size:11.0pt">Время подготовки чана 4
  часа.
			<o:p></o:p></span>
                    </p>
                </td>
            </tr>
            </tbody>
        </table>-->





        <!--  1111111111111111   -->

    </div>
    <?php echo $post->post_content;?>
</section>

<?php get_footer();?>

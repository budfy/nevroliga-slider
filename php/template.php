<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<section class="intro" style="background-image: url(<?= $templateFolder . '/assets/images/intro/1.jpg' ?>);">
	<div class="container">
		<div class="intro__holder">
			<div class="intro__info">
				<div class="intro__pretitle">портал</div>
				<h1 class="intro__title">nevrologia.info</h1>
				<div class="intro__text">
					<p>О неврологии из первых рук.</p>
					<p>Портал с актуальной информацией для практикующих врачей, созданный при поддержке экспертов «НИИ Инсульта» 	и «РНИУ Минздравсоцразвития». </p>
					<p>Разбор клинических случаев, обучающие программы, мероприятия и только проверенные материалы. Повышайте свою квалификацию вместе с профессиональным сообществом!</p>
				</div>
			</div>
			<div class="intro__slider">
				<div class="intro-slider swiper-container" id="intro-slider">
					<div class="intro-slider__holder swiper-wrapper">
						<div class="intro-slider__item swiper-slide">
							<div class="intro-slider__plate">
								<img src="<?= $templateFolder . '/assets/images/intro/plate.png' ?>" alt="">
							</div>
							<div class="intro-slider__info">
								<div class="intro-slider__title">Новый вебинар</div>
								<p class="intro-slider__text">Роль короновирусной инфекции (COVID-19) в развитии хронической ишимии мозга. Опыт невролога из «красной зоны». Часть 2</p>
							</div>
							<div class="intro-slider__presenters">
								<ul>
									<li class="presenter">
										<div class="presenter__photo">
											<img src="<?= $templateFolder . '/assets/images/intro/presenter/1.jpg' ?>" alt="">
										</div>
										<div class="presenter__label">
											Ведущий: <br> 
											Зотова Наталья Павловна <br>	
											невролог высшей категории
										</div>
									</li>
									<li class="presenter">
										<div class="presenter__photo">
											<img src="<?= $templateFolder . '/assets/images/intro/presenter/2.jpg' ?>" alt="">
										</div>
										<div class="presenter__label">
											Ведущий: <br> 
											Зотова Наталья Павловна <br>	 
											невролог высшей категории
										</div>
									</li>
								</ul>
							</div>
							<div class="intro-slider__detail">
								<a href="#">подробнее</a>
							</div>
						</div>
						<div class="intro-slider__item swiper-slide" style="background-image: url(<?= $templateFolder . '/assets/images/intro/slider/space.jpg' ?>);">
							<div class="intro-slider__info">
								<div class="intro-slider__title">Новый вебинар</div>
								<p class="intro-slider__text">Роль короновирусной инфекции (COVID-19) в развитии хронической ишимии мозга. Опыт невролога из «красной зоны». Часть 2</p>
							</div>
							<div class="intro-slider__detail">
								<a href="#">подробнее</a>
							</div>
						</div>
						
					</div>
					<div class="intro-slider__dots"></div>
				</div>
			</div>
		</div>
	</div>	
</section>

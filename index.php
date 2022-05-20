<?php
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$product_settings = array(
    'coast' => 129.90,
    'coast_sale' => 106.90,
    'buy_now_link' => '#',
    'image_url' => './assets/images/product.png',
)
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>CBD for Sports Recovery and Performance</title>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link
        href='https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap'
        rel='stylesheet'>
    <link rel="stylesheet" href="./assets/libs/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="./assets/libs/fancybox/jquery.fancybox.css">
    <link rel='stylesheet' href='./assets/style.css'>

</head>
<body>
<header class='top-img' style='background-image: url("./assets/images/header-bg.png");'></header>
<div class='page-content'>
    <div class='page-content__left'>
        <div class='page-content__left_content'>
            <div>
                <p class='page-content__left_title'>content</p>
                <p class='page-content__left_item'>CBD Can Improve Performance</p>
                <p class='page-content__left_item'>CBD Can Enhance Recovery</p>
                <p class='page-content__left_item'>CBD Can Help With Injuries</p>
                <p class='page-content__left_item'>Does CBD Show Up On Drug Tests?</p>
                <p class='page-content__left_item'>Try CBD for Your Sports Recovery Regiment</p>
                <div class="page-content__left_share">
                    <a class="cannab-product__desc_tabs-share--item"
                       target="_blank"
                       href="https://twitter.com/intent/tweet?url=<?php echo $actual_link; ?>">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 20.1514C8.76139 20.5277 14.2729 23.3685 18.1921 21.1791C22.1112 18.9897 21.895 15.2176 21.895 13.4892C22.25 12.8242 23 12.4861 23 10.686C22.2633 11.2945 21.5311 11.5016 20.8033 11.3072C20.0903 10.3351 19.1093 9.90522 17.8603 10.0174C15.9868 10.1857 15.3014 11.8291 15.5031 13.9553C12.6144 15.2614 10.3493 13.0085 9.18191 11.3072C8.79187 12.647 8.41578 14.2556 9.18191 16.0351C9.69267 17.2214 10.9205 18.2244 12.8653 19.044C10.8943 19.9991 9.27256 20.3682 8 20.1514Z"
                                fill="#05B9FF" />
                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#EDEDED" />
                        </svg>

                    </a>
                    <a target="_blank"
                       href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link; ?>"
                       class="cannab-product__desc_tabs-share--item">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 11.1999H18.8224H18.2441C17.7462 11.1999 17.3426 11.5707 17.3426 12.028V14.9336H21L20.4643 18.1323H17.3426V24H13.3207V18.1323H10V14.9336H13.2778L13.3207 11.8974L13.3146 11.3461C13.2945 9.51671 14.8925 8.01867 16.8839 8.00017C16.896 8.00005 16.9082 8 16.9203 8H21V11.1999Z"
                                fill="#05B9FF" />
                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#EDEDED" />
                        </svg>

                    </a>
                    <a target="_blank"
                       href="mailto:?subject=CBD for Sports Recovery and Performance&amp;body=<?php echo $actual_link; ?>"
                       class="cannab-product__desc_tabs-share--item">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.33398 20C9.33398 20.5523 9.7817 21 10.334 21H21.6673C22.2196 21 22.6673 20.5523 22.6673 20V16V12C22.6673 11.4477 22.2196 11 21.6673 11H16.0007H10.334C9.7817 11 9.33398 11.4477 9.33398 12V16V20Z"
                                fill="#05B9FF" />
                            <path d="M9.33398 11L16.0007 16L19.334 13.5L22.6673 11" fill="#05B9FF" />
                            <path d="M9.33398 11L16.0007 16L19.334 13.5L22.6673 11" stroke="white"
                                  stroke-linecap="round" stroke-linejoin="round" />
                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#EDEDED" />
                        </svg>

                    </a>
                    <a href="<?php echo $actual_link; ?>"
                       class="copy">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M10.0909 10.1012C11.1884 9.00369 12.963 8.96629 14.0542 10.0575L17.1009 13.1042C17.2962 13.2995 17.2962 13.616 17.1009 13.8113C16.9056 14.0066 16.589 14.0066 16.3938 13.8113L13.3471 10.7646C13.3471 10.7646 13.3471 10.7646 13.3471 10.7646C12.6641 10.0817 11.523 10.0833 10.798 10.8083C10.0731 11.5332 10.0714 12.6744 10.7544 13.3574L13.3995 16.0025C13.5948 16.1977 13.5948 16.5143 13.3995 16.7096C13.2042 16.9048 12.8876 16.9048 12.6924 16.7096L10.0473 14.0645C10.0473 14.0645 10.0473 14.0645 10.0473 14.0645C8.95603 12.9732 8.99344 11.1987 10.0909 10.1012Z"
                                  fill="#05B9FF" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M18.6135 15.3142C18.8087 15.1189 19.1253 15.1189 19.3206 15.3142L21.9657 17.9593C21.9657 17.9593 21.9657 17.9593 21.9657 17.9593C23.057 19.0505 23.0195 20.825 21.922 21.9225C20.8245 23.02 19.05 23.0575 17.9588 21.9662L14.9121 18.9195C14.7168 18.7242 14.7168 18.4077 14.9121 18.2124C15.1073 18.0171 15.4239 18.0171 15.6192 18.2124L18.6659 21.2591C19.3488 21.9421 20.49 21.9404 21.2149 21.2154C21.9399 20.4905 21.9416 19.3493 21.2586 18.6664L21.2586 18.6664L18.6135 16.0213C18.4182 15.826 18.4182 15.5094 18.6135 15.3142Z"
                                  fill="#05B9FF" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M16.3932 13.1041C16.5885 12.9088 16.905 12.9088 17.1003 13.1041C18.1916 14.1954 18.1541 15.9699 17.0567 17.0674C16.8614 17.2627 16.5448 17.2627 16.3496 17.0674C16.1543 16.8721 16.1543 16.5556 16.3496 16.3603C17.0745 15.6353 17.0762 14.4942 16.3932 13.8112C16.1979 13.6159 16.1979 13.2994 16.3932 13.1041Z"
                                  fill="#05B9FF" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M15.6203 14.9126C15.8156 15.1078 15.8156 15.4244 15.6203 15.6197C14.8954 16.3446 14.8937 17.4858 15.5767 18.1688C15.7719 18.364 15.7719 18.6806 15.5767 18.8759C15.3814 19.0711 15.0648 19.0711 14.8696 18.8759C13.7783 17.7846 13.8157 16.0101 14.9132 14.9126C15.1084 14.7173 15.425 14.7173 15.6203 14.9126Z"
                                  fill="#05B9FF" />
                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#EDEDED" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class='page-content__right'>
        <div class='page-content__right_content'>
            <figure class='page-content__right_img'>
                <img src='<?php echo $product_settings['image_url'] ?>' alt='img'>
            </figure>
            <p class='page-content__right_title'>Hempura Precision
                <br>CBD Sport
                <br>for Athletes</p>
            <a href='<?php echo $product_settings['buy_now_link']?>' class='page-content__right_btn'>try now</a>
        </div>
    </div>
    <article class='container page-content__center'>
        <div class='header'>
            <p class='page-content__title'>CBD for Sports Recovery and Performance</p>
            <div class='header-info'>
                <div class='header-info__left'>
                    <figure class='header-info__img'>
                        <img src='./assets/images/avatar.png' alt='img'>
                    </figure>
                    <div class='header-info__data'>
                        <p class='header-info__data_top'>Ph.D.</p>
                        <p class='header-info__data_bottom'>Mitch Earleywine</p>
                    </div>
                </div>
                <p class='header-info__date'>20.02.2022</p>
            </div>
        </div>
        <div class='content'>
            <div class='content__item'>
                <p class='content__text first'>Everyone can use CBD safely and effectively; from the daily walker, to
                    the
                    occasional runner, to the true weekend warrior, to the pro-athlete.</p>
                <p class='content__text'>Sports leagues are starting to consider cannabis because cannabidiol (CBD), one
                    of the prevalent cannabinoids in cannabis, can help athletic performance, as well as recovery from
                    training. For both the office worker and pro-athlete, CBD, unlike its cousin molecule THC, will not
                    trigger a failed drug test.</p>
            </div>
            <div class='content__item'>
                <p class='content__caption'>CBD Can Improve Performance</p>
                <p class='content__text'>The chance to improve performance stems from CBD’s intriguing ability to
                    decrease anxiety without creating any subjective high or alteration in thinking. Laboratory research
                    with humans confirms that CBD decreases anxiety, even in tough situations. Many athletes emphasize
                    that CBD helps them approach big contests without fretting, while their minds remain sharp for
                    strategy and split-second decisions.</p>
                <figure class='content__img'>
                    <img src='./assets/images/content-img-1.png' alt='img'>
                </figure>
            </div>
            <div class='content__item'>
                <p class='content__caption'>CBD Can Enhance Recovery</p>
                <p class='content__text'>CBD should also speed workout recovery. Unlike other anti-inflammatories, CBD
                    does not harm the stomach lining or increase the rates of certain strokes. Research confirms that
                    CBD suppresses the main contributors to inflammation, swelling, and soreness potentially protecting
                    muscle cells for growth. The molecule’s delightful enhancement of sleep also should make recovery
                    fast and efficient. New data on CBD’s ability to balance immune function suggest that it could
                    prevent the annoying colds that often make training less than optimal, too.</p>
                <figure class='content__img'>
                    <img src='./assets/images/content-img-2.png' alt='img'>
                </figure>
            </div>
            <div class='content__item'>
                <p class='content__caption'>CBD Can Help With Injuries</p>
                <p class='content__text'>In addition, CBD’s legendary role as an anti-inflammatory make it an ideal aid
                    to recovery from injury or training. Animal research confirms that the unfortunate traumatic effects
                    of brain injury decrease in the presence of CBD, so everyone playing a rough-and-tumble game should
                    have a source of CBD on the sidelines. A 60 mg dose immediately after a bump to the head should
                    become a standard addition to the concussion protocol. There are no intoxicating effects and the
                    anti-oxidant properties literally prevent the death of cells.</p>
                <figure class='content__img'>
                    <img src='./assets/images/content-img-3.png' alt='img'>
                </figure>
            </div>
            <div class='content__item'>
                <p class='content__caption'>Does CBD Show Up On Drug Tests?</p>
                <p class='content__text'>Drug testing in sports can be a moving target. Currently, cannabinoids are
                    listed as banned substances but the test employed focuses on metabolites of THC. CBD will not appear
                    on a drug screen currently, so athletes can rest assured that they are not violating the rules of
                    the game. The spirit of drug testing in sports concerns unfair advantage. CBD is a gentle molecule
                    with no potential for intoxication, addiction, or stimulation. It’s keen ability to enhance
                    performance and recovery should make it a superb addition to any athlete’s training regimen.
                    Unfortunately, a handful of prohibitionists want to add CBD to the list of banned substances in a
                    knee-jerk reaction to its link to cannabis. A bit of education should ensure that the International
                    Olympic Committee won’t sacrifice the brains and recovery of athletes to political correctness.</p>
                <figure class='content__img'>
                    <img src='./assets/images/content-img-4.png' alt='img'>
                </figure>
            </div>
            <div class='content__item'>
                <p class='content__caption'>Try CBD for Your Sports Recovery Regiment</p>
                <p class='content__text'>Case reports reveal that experienced athletes using 30 mg (or more) of CBD per
                    day notice less angst before big games, quicker recovery, and easier sleep in as little as five
                    days. Sometimes, however, the most convincing research stems from the data you gather yourself. Give
                    it a try!</p>
            </div>
            <div class='product'>
                <p class='product_note'>Try this</p>
                <p class='product__title'>Hempura Precision CBD Sport for Athletes – Pure 3000mg Orange Flavoured CBD
                    Oil (30ml)</p>
                <div class='product__content'>
                    <figure class='product__img pc'>
                        <img src='./assets/images/product.png'
                             alt='img'
                             loading='lazy'>
                    </figure>
                    <div class='product__info'>
                        <p class='product__info_vendor'>Sold by <span class='bold'>HEMPURA</span></p>
                        <div class='product__info_rating'>
                            <img src='./assets/images/stars.svg'
                                 alt='img'
                                 width='168'
                                 class='product__info_stars'>
                            <p class='product__info_reviews'>5.0 | 37 Reviews</p>
                        </div>
                        <figure class='product__img mob'>
                            <img src='<?php echo $product_settings['image_url']?>'
                                 alt='img'
                                 loading='lazy'>
                        </figure>
                        <div class='product__info_effects'>
                            <div class='product__info_effect'>
                                <img src='./assets/images/effect1.svg'
                                     class='product__info_effect-img'
                                     alt='img'>
                                <p class='product__info_effect-text'>Relief and recovery</p>
                            </div>
                            <div class='product__info_effect'>
                                <img src='./assets/images/effect2.svg'
                                     class='product__info_effect-img'
                                     alt='img'>
                                <p class='product__info_effect-text'>Stress relief</p>
                            </div>
                        </div>
                        <p class='product__info_desc'>• 25mg CBD per 0.25ml serving
                            <br>• 120 servings per bottle, can last months
                            <br>• Rich in natural hemp terpenes
                            <br>• Absolute zero THC – sport safe!
                            <br>• Perfect performance partner</p>
                        <div class='product__info_footer'>
                            <p class='product__info_footer-mob-text'>unique sport product</p>
                            <a href='<?php echo $product_settings['buy_now_link']?>' class='product__info_btn'>I want it!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='certificate'>
                <a href='./assets/images/certificate-big.png'
                   data-fancybox="gallery"
                   class='certificate__img'>
                    <img src='./assets/images/certificate.png' alt='img'>
                </a>
                <div class='certificate__info'>
                    <p class='certificate__text'>Certificate number</p>
                    <p class='certificate__text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </article>
</div>
<footer class='footer'>
    <div class='container'>
        <p class='footer__text'>THIS IS AN ADVERTISEMENT AND NOT AN ACTUAL NEWS ARTICLE, BLOG, OR CONSUMER PROTECTION
            UPDATE ?
            <br><br>THE STORY DEPICTED ON THIS SITE AND THE PERSON DEPICTED IN THE STORY ARE NOT ACTUAL NEWS. RATHER,
            THIS STORY IS BASED ON THE RESULTS THAT SOME PEOPLE WHO HAVE USED THESE PRODUCTS HAVE ACHIEVED. THE RESULTS
            PORTRAYED IN THE STORY AND IN THE COMMENTS ARE ILLUSTRATIVE, AND MAY NOT BE THE RESULTS THAT YOU ACHIEVE
            WITH THESE PRODUCTS. THIS PAGE COULD RECEIVE COMPENSATION FOR CLICKS ON OR PURCHASE OF PRODUCTS FEATURED ON
            THIS SITE.
            <br><br>*THESE STATEMENTS HAVE NOT BEEN EVALUATED BY THE FOOD AND DRUG ADMINISTRATION. THESE PRODUCTS ARE
            NOT INTENDED TO DIAGNOSE, TREAT, CURE, OR PREVENT ANY DISEASE. THIS PRODUCT DOES NOT REQUIRE A PRESCRIPTION
            OR DOCTOR APPROVAL AS THEY ARE HERBAL AND DO NOT CONTAIN ANY PRESCRIPTION INGREDIENTS. RESULTS IN THE
            TESTIMONIALS MAY NOT BE TYPICAL AND YOUR RESULTS MAY VARY. NOT ALL PEOPLE WILL OBTAIN THE SAME RESULTS. THIS
            PRODUCT IS INTENDED TO BE USED IN CONJUNCTION WITH A HEALTHY DIET AND REGULAR EXERCISE. CONSULT YOUR
            PHYSICIAN BEFORE STARTING ANY DIET, EXERCISE PROGRAM OR TAKING ANY DIET PILL TO AVOID ANY HEALTH ISSUES.</p>
    </div>
</footer>
<div class='mobile-offer'>
    <figure class='mobile-offer__img'>
        <img src='<?php echo $product_settings['image_url']?>'
             loading='lazy'
             alt='img'>
    </figure>
    <div class='mobile-offer__info'>
        <p class='mobile-offer__info_text'>unique sport product</p>
        <a href='<?php echo $product_settings['buy_now_link']?>' class='mobile-offer__btn'>I want it!</a>
    </div>
</div>
<script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
<script src="./assets/libs/jquery-ui/jquery-ui.js"></script>
<script src="./assets/libs/fancybox/jquery.fancybox.min.js"></script>
<script src='./assets/script.js'></script>
</body>
</html>
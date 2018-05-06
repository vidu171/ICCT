<!DOCTYPE html>
<html lang="en-US">

<title>Home | ICCT'19</title>
  <?php include('head.php')?>

   <body class="home page-template-default page page-id-39 wpb-js-composer js-comp-ver-4.12 vc_responsive" onload=" setTimeout(showNotification, 1500);">
      <div id="page" class="cs-wide">
         <?php
                $tabToSelect = 1;
                include('header.php');
         ?>

        <!-- Main Content starts here -->
         <div id="main">
            <div id="primary" class="page-content">
               <div id="content"  role="main" >
                  <article id="post-39" class="post-39 page type-page status-publish hentry">
                     <div class="entry-content">
                        <div  class="secsion clearfix "  style ="">
                           <div class="container-fluid clearfix">
                              <div class="row ">
                                 <div class="vc_col-sm-12 wpb_column vc_column_container    " style="">
                                    <div class="vc_column-inner clearfix ">
                                       <div class="wrapper-content">
                                          <div class="wpb_revslider_element wpb_content_element">
                                             <link href="http://fonts.googleapis.com/css?family=Montserrat%3A400%2C600%2C700" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
                                             <link href="http://fonts.googleapis.com/css?family=Lato%3A400%2C600%2C700" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
                                             <link href="http://fonts.googleapis.com/css?family=Lato%3A500%2C700%2C900" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
                                             <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;padding:0px;margin-top:0px;margin-bottom:0px;">
                                                <!-- START REVOLUTION SLIDER 5.2.5.3 fullwidth mode -->
                                                <div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.2.5.3">
                                                   <ul>
                                                      <!-- SLIDE  -->
                                                      <li data-index="rs-2" data-transition="slotzoom-vertical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                         <img src="images/icct.jpg"  alt="" title="bag"  width="1919" height="1271" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                      </li>
                                                   </ul>
                                                </div>
                                                <script type="text/javascript">
                                                   /******************************************
                                                   -	PREPARE PLACEHOLDER FOR SLIDER	-
                                                   ******************************************/

                                                   var setREVStartSize=function(){
                                                   try{var e=new Object,i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
                                                   e.c = jQuery('#rev_slider_2_1');
                                                   e.responsiveLevels = [1240,1240,1240,480];
                                                   e.gridwidth = [1920,1920,1920,1920];
                                                   e.gridheight = [990,980,900,1000];

                                                   e.sliderLayout = "fullwidth";
                                                   if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})

                                                   }catch(d){console.log("Failure at Presize of Slider:"+d)}
                                                   };

                                                   setREVStartSize();

                                                   var tpj=jQuery;
                                                   tpj.noConflict();
                                                   var revapi2;
                                                   tpj(document).ready(function() {
                                                   if(tpj("#rev_slider_2_1").revolution == undefined){
                                                   revslider_showDoubleJqueryError("#rev_slider_2_1");
                                                   }else{
                                                   revapi2 = tpj("#rev_slider_2_1").show().revolution({
                                                   sliderType:"standard",
                                                   jsFileLocation:"//bolina.zooka.io/wp-content/plugins/revslider/public/assets/js/",
                                                   sliderLayout:"fullwidth",
                                                   delay:7000,
                                                   navigation: {
                                                   	keyboardNavigation:"on",
                                                   	keyboard_direction: "horizontal",
                                                   	mouseScrollNavigation:"off",
                                                   		mouseScrollReverse:"default",
                                                   	onHoverStop:"on",
                                                   	touch:{
                                                   		touchenabled:"on",
                                                   		swipe_threshold: 75,
                                                   		swipe_min_touches: 1,
                                                   		swipe_direction: "horizontal",
                                                   		drag_block_vertical: false
                                                   	}
                                                   },
                                                   responsiveLevels:[1240,1240,1240,480],
                                                   visibilityLevels:[1240,1240,1240,480],
                                                   gridwidth:[1920,1920,1920,1920],
                                                   gridheight:[500, 868, 960, 720],
                                                   lazyType:"none",
                                                   shadow:0,
                                                   spinner:"spinner0",
                                                   stopLoop:"off",
                                                   stopAfterLoops:-1,
                                                   stopAtSlide:-1,
                                                   shuffle:"off",
                                                   autoHeight:"off",
                                                   hideThumbsOnMobile:"off",
                                                   hideSliderAtLimit:0,
                                                   hideCaptionAtLimit:0,
                                                   hideAllCaptionAtLilmit:0,
                                                   debugMode:false,
                                                   fallbacks: {
                                                   	simplifyAll:"off",
                                                   	nextSlideOnWindowFocus:"off",
                                                   	disableFocusListener:false,
                                                   }
                                                   });
                                                   }
                                                   });	/*ready*/
                                                </script>
                                             </div>
                                             <!-- END REVOLUTION SLIDER -->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                         <div  class="secsion clearfix "  style ="">
                             <div class="container-fluid clearfix">
                                 <div class="row ">
                                     <div class="vc_col-sm-12 wpb_column vc_column_container    " style="">
                                         <div class="vc_column-inner clearfix ">
                                             <div class="wrapper-content">
                                                 <div class="vc_empty_space"  style="height: 72px" ><span class="vc_empty_space_inner"></span></div>
                                                 <div class="vc_custom_heading" >
                                                     <h2 style="text-align: center;font-family:Lato;font-weight:900;font-style:normal;letter-spacing:2pt" >ABOUT THE CONFERENCE</h2>
                                                     <div class="line_bottom_heading" style="width:150px;
                                                height:3px;
                                                margin:30px 0 0 0;
                                                background:#ffbf00;
                                                position: relative;
                                                bottom: 0;
                                                left: 50%;
                                                -webkit-transform: translateX(-50%);
                                                -khtml-transform: translateX(-50%);
                                                -moz-transform: translateX(-50%);
                                                -ms-transform: translateX(-50%);
                                                -o-transform: translateX(-50%);
                                                transform: translateX(-50%);"></div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div  class="secsion clearfix  vc_custom_1439979297102"  style ="">
                             <div class="container clearfix">
                                 <div class="row ">
                                     <div class="vc_col-sm-3 wpb_column vc_column_container    " style="">
                                         <div class="vc_column-inner clearfix ">
                                             <div class="wrapper-content">
                                                 <div class="wpb_text_column wpb_content_element ">
                                                     <div class="wpb_wrapper clearfix" style="">
                                                         <p></p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="vc_col-sm-6 wpb_column vc_column_container    " style="">
                                         <div class="vc_column-inner clearfix ">
                                             <div class="wrapper-content">
                                                 <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_left-to-right">
                                                     <div class="wpb_wrapper clearfix" style="font-size:16px;">
                                                         <p style="text-align: center;">ICCT19 will serve as a platform for knowledge sharing about the recent trends and advancements in the field of networking and high end data handling and how these domains are playing role in research and market development of the industries. It will provide great opportunity for our students and faculties to interact and share ideas with the top-notch in the field face to face. This knowledge sharing may inspire and thrill many young minds and help us bring collaborations and global partners to work together. This will enable us to solve challenging problems in our society so that we may contribute to our world. The whole idea of the forum is to exchange thoughts and ideas, transform those in real time to solve the problems. Conference will also create awareness in students about the importance of scientific research in related fields and synchronizing with product market.
                                                         </p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="vc_col-sm-3 wpb_column vc_column_container    " style="">
                                         <div class="vc_column-inner clearfix ">
                                             <div class="wrapper-content">
                                                 <div class="wpb_text_column wpb_content_element ">
                                                     <div class="wpb_wrapper clearfix" style="">
                                                         <p></p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>




                        <div  class="secsion clearfix "  style ="">
                           <div class="container-fluid clearfix">
                              <div class="row ">
                                 <div class="vc_col-sm-12 wpb_column vc_column_container    " style="">
                                    <div class="vc_column-inner clearfix ">
                                       <div class="wrapper-content">
                                          <div class="vc_empty_space"  style="height: 72px" ><span class="vc_empty_space_inner"></span></div>
                                          <div class="vc_custom_heading" >
                                             <h2 style="text-align: center;font-family:Lato;font-weight:900;font-style:normal;letter-spacing:2pt" >Call for Special Issue</h2>
                                             <div class="line_bottom_heading" style="width:150px;
                                                height:3px;
                                                margin:30px 0 0 0;
                                                background:#ffbf00;
                                                position: relative;
                                                bottom: 0;
                                                left: 50%;
                                                -webkit-transform: translateX(-50%);
                                                -khtml-transform: translateX(-50%);
                                                -moz-transform: translateX(-50%);
                                                -ms-transform: translateX(-50%);
                                                -o-transform: translateX(-50%);
                                                transform: translateX(-50%);"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div  class="secsion clearfix  vc_custom_1439979297102"  style ="">
                           <div class="container clearfix">
                              <div class="row ">
                                 <div class="vc_col-sm-3 wpb_column vc_column_container    " style="">
                                    <div class="vc_column-inner clearfix ">
                                       <div class="wrapper-content">
                                          <div class="wpb_text_column wpb_content_element ">
                                             <div class="wpb_wrapper clearfix" style="">
                                                <p></p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="vc_col-sm-6 wpb_column vc_column_container    " style="">
                                    <div class="vc_column-inner clearfix ">
                                       <div class="wrapper-content">
                                          <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_left-to-right">
                                             <div class="wpb_wrapper clearfix" style="font-size:16px;">
                                                <p style="text-align: center;">Proceedings will be submitted for inclusion to IEEE Xplore.
                                                   IEEE Conference Record No. : 41378   |   Catalog No. : CFP17L93-ART (Xplore Compliant)   |   ISBN NO: 978-1-5386-3030-3
                                                   Some Selected and Extended Papers (with major revision) will be referred for Special Issue in Journals of Taylor and Francis and Inderscience
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="vc_col-sm-3 wpb_column vc_column_container    " style="">
                                    <div class="vc_column-inner clearfix ">
                                       <div class="wrapper-content">
                                          <div class="wpb_text_column wpb_content_element ">
                                             <div class="wpb_wrapper clearfix" style="">
                                                <p></p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

<!--                         <div class="vc_custom_heading" >-->
<!--                             <h2 style="color: #010101;text-align: center;font-family:Lato;font-weight:900;font-style:normal;letter-spacing:2pt;margin-top:0.2em" >SPONSORS</h2>-->
<!--                             <div class="line_bottom_heading" style="width:150px;-->
<!--                              height:1px;-->
<!--                              margin:30px 0 0 0;-->
<!--                              background:#ffbf00;-->
<!--                              position: relative;-->
<!--                              bottom: 0;-->
<!--                              left: 50%;-->
<!--                              -webkit-transform: translateX(-50%);-->
<!--                              -khtml-transform: translateX(-50%);-->
<!--                              -moz-transform: translateX(-50%);-->
<!--                              -ms-transform: translateX(-50%);-->
<!--                              -o-transform: translateX(-50%);-->
<!--                              transform: translateX(-50%);"></div>-->
<!--                         </div>-->
<!---->
<!--                         <div class="cms-carousel template-cms_carousel--clients " id="cms-carousel">-->
<!--                             <div class="cms-carousel-item">-->
<!--                                 <div class="cms-grid-media  has-thumbnail"><img class="img-responsive" src="images/client/client6.png" alt=""></div>-->
<!--                             </div>-->
<!--                             <div class="cms-carousel-item">-->
<!--                                 <div class="cms-grid-media  has-thumbnail"><img class="img-responsive" src="images/client/client5.png" alt=""></div>-->
<!--                             </div>-->
<!--                             <div class="cms-carousel-item">-->
<!--                                 <div class="cms-grid-media  has-thumbnail"><img class="img-responsive" src="images/client/client4.png" alt=""></div>-->
<!--                             </div>-->
<!--                             <div class="cms-carousel-item">-->
<!--                                 <div class="cms-grid-media  has-thumbnail"><img class="img-responsive" src="images/client/client3.png" alt=""></div>-->
<!--                             </div>-->
<!--                             <div class="cms-carousel-item">-->
<!--                                 <div class="cms-grid-media  has-thumbnail"><img class="img-responsive" src="images/client/client2.png" alt=""></div>-->
<!--                             </div>-->
<!--                             <div class="cms-carousel-item">-->
<!--                                 <div class="cms-grid-media  has-thumbnail"><img class="img-responsive" src="images/client/client1.png" alt=""></div>-->
<!--                             </div>-->
<!--                         </div>-->


                         <div  class="secsion clearfix  vc_custom_1443147497373"  style ="">
                           <div class="container clearfix">
                              <div class="row ">
                                 <div class="vc_col-sm-6 wpb_column vc_column_container    " style="">
                                    <div class="vc_column-inner clearfix ">
                                       <div class="wrapper-content">
                                          <div class="cms-fancyboxes-wraper template-cms_fancybox_single--layout1 content-align-center  wow fadeIn style-1" id="cms-fancy-box-single"
                                             style="
                                             " data-wow-delay =400ms >
                                             <div class="cms-fancyboxes-body">
                                                <div class="cms-fancybox-item">
                                                   <div class="fancy-box-icon" onclick="">
                                                      <div class="icon" style="border: 1px solid #dddddd;">
                                                         <i style="
                                                            color:#000000;
                                                            font-size:50px;
                                                            " class="pe-7s-album"></i>
                                                         <span class="overlay" style="background:#ffbf00;"></span>
                                                      </div>
                                                   </div>
                                                   <h3 class="facybox-title" style="
                                                      ">
                                                      Track 1
                                                   </h3>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="vc_col-sm-6 wpb_column vc_column_container    " style="">
                                    <div class="vc_column-inner clearfix ">
                                       <div class="wrapper-content">
                                          <div class="cms-fancyboxes-wraper template-cms_fancybox_single--layout1 content-align-center  wow fadeIn style-1" id="cms-fancy-box-single-2"
                                             style="
                                             " data-wow-delay =600ms >
                                             <div class="cms-fancyboxes-body">
                                                <div class="cms-fancybox-item">
                                                   <div class="fancy-box-icon" onclick="">
                                                      <div class="icon" style="border: 1px solid #dddddd;">
                                                         <i style="
                                                            color:#000000;
                                                            font-size:50px;
                                                            " class="pe-7s-pen"></i>
                                                         <span class="overlay" style="background:#ffbf00;"></span>
                                                      </div>
                                                   </div>
                                                   <h3 class="facybox-title" style="
                                                      ">
                                                      Track 2
                                                   </h3>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
<!--                                 <div class="vc_col-sm-4 wpb_column vc_column_container    " style="">-->
<!--                                    <div class="vc_column-inner clearfix ">-->
<!--                                       <div class="wrapper-content">-->
<!--                                          <div class="cms-fancyboxes-wraper template-cms_fancybox_single--layout1 content-align-center  wow fadeIn style-1" id="cms-fancy-box-single-3"-->
<!--                                             style="-->
<!--                                             " data-wow-delay =800ms >-->
<!--                                             <div class="cms-fancyboxes-body">-->
<!--                                                <div class="cms-fancybox-item">-->
<!--                                                   <div class="fancy-box-icon" onclick="">-->
<!--                                                      <div class="icon" style="border: 1px solid #dddddd;">-->
<!--                                                         <i style="-->
<!--                                                            color:#000000;-->
<!--                                                            font-size:50px;-->
<!--                                                            " class="pe-7s-look"></i>-->
<!--                                                         <span class="overlay" style="background:#ffbf00;"></span>-->
<!--                                                      </div>-->
<!--                                                   </div>-->
<!--                                                   <h3 class="facybox-title" style="-->
<!--                                                      ">-->
<!--                                                      About ICCT 19-->
<!--                                                   </h3>-->
<!--                                                </div>-->
<!--                                             </div>-->
<!--                                          </div>-->
<!--                                       </div>-->
<!--                                    </div>-->
<!--                                 </div>-->
                              </div>
                           </div>
                        </div>
<!--                        <div  class="secsion clearfix "  style ="margin-top:-9em;margin-bottom:5em">-->
<!--                           <div class="container-fluid clearfix">-->
<!--                              <div class="row ">-->
<!--                                 <div class="vc_col-sm-12 wpb_column vc_column_container    " style="">-->
<!--                                    <div class="vc_column-inner clearfix ">-->
<!--                                       <div class="wrapper-content">-->
<!--                                          <div class="vc_empty_space"  style="height: 102px" ><span class="vc_empty_space_inner"></span></div>-->
<!--                                          <div class="vc_custom_heading" >-->
<!--                                             <h2 style="text-align: center;font-family:Lato;font-weight:900;font-style:normal;letter-spacing:2pt" >Speakers</h2>-->
<!--                                             <div class="line_bottom_heading" style="width:150px;-->
<!--                                                height:3px;-->
<!--                                                margin:30px 0 0 0;-->
<!--                                                background:#ffbf00;-->
<!--                                                position: relative;-->
<!--                                                bottom: 0;-->
<!--                                                left: 50%;-->
<!--                                                -webkit-transform: translateX(-50%);-->
<!--                                                -khtml-transform: translateX(-50%);-->
<!--                                                -moz-transform: translateX(-50%);-->
<!--                                                -ms-transform: translateX(-50%);-->
<!--                                                -o-transform: translateX(-50%);-->
<!--                                                transform: translateX(-50%);"></div>-->
<!--                                          </div>-->
<!--                                       </div>-->
<!--                                    </div>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div  class="secsion clearfix  vc_custom_1453351131776"  style ="">-->
<!--                           <div class="container-fluid clearfix">-->
<!--                              <div class="row ">-->
<!--                                 <div class="vc_col-sm-12 wpb_column vc_column_container  vc_custom_1453351085654   " style="">-->
<!--                                    <div class="vc_column-inner clearfix vc_custom_1453351085654">-->
<!--                                       <div class="wrapper-content">-->
<!--                                          <div class="cms-grid-wraper  template-cms_grid--gallery  style1  no-space"-->
<!--                                             id="cms-grid">-->
<!--                                             <div class="cms-grid cms-grid cms-grid-masonry">-->
<!--                                                <div class="cms-grid-item cms-grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12"-->
<!--                                                   data-groups='["all","category-photography"]'>-->
<!--                                                   <div class="cms-grid-media  has-thumbnail">-->
<!--                                                      <img width="800" height="600" src="images/speaker.jpg" class="attachment-wp-bolina-gallery size-wp-bolina-gallery wp-post-image" alt="" />-->
<!--                                                      <div class="popup"><a class="button-popup" href="uploads/2015/08/shutterstock_104386421_supersize-800x450.jpg" data-effect="mfp-zoom-in">+</a></div>-->
<!--                                                      <div class="primary-content">-->
<!--                                                         <div class="cms-grid-title">-->
<!--                                                            <h4>-->
<!--                                                               <a href="gallery/women-in-the-dark-concept-12/index.html" style="font-size:14px">-->
<!--                                                               Women In The Dark Concept                            </a>-->
<!--                                                            </h4>-->
<!--                                                         </div>-->
<!--                                                         <div class="cms-grid-categories">-->
<!--                                                            <a href="gallery_categories/photography/index.html" rel="tag">Photography</a>-->
<!--                                                         </div>-->
<!--                                                      </div>-->
<!--                                                   </div>-->
<!--                                                </div>-->
<!--                                                <div class="cms-grid-item cms-grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12"-->
<!--                                                   data-groups='["all","category-stylish-make-up"]'>-->
<!--                                                   <div class="cms-grid-media  has-thumbnail">-->
<!--                                                      <img width="800" height="600" src="images/speaker.jpg" class="attachment-wp-bolina-gallery size-wp-bolina-gallery wp-post-image" alt="" />-->
<!--                                                      <div class="popup"><a class="button-popup" href="uploads/2015/08/shutterstock_59710015_supersize-800x450.jpg" data-effect="mfp-zoom-in">+</a></div>-->
<!--                                                      <div class="primary-content">-->
<!--                                                         <div class="cms-grid-title">-->
<!--                                                            <h4>-->
<!--                                                               <a href="gallery/women-in-the-dark-concept-11/index.html" style="font-size:14px">-->
<!--                                                               Women In The Dark Concept                            </a>-->
<!--                                                            </h4>-->
<!--                                                         </div>-->
<!--                                                         <div class="cms-grid-categories">-->
<!--                                                            <a href="gallery_categories/stylish-make-up/index.html" rel="tag">Stylish &amp; Make up</a>-->
<!--                                                         </div>-->
<!--                                                      </div>-->
<!--                                                   </div>-->
<!--                                                </div>-->
<!--                                                <div class="cms-grid-item cms-grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12"-->
<!--                                                   data-groups='["all","category-retouching"]'>-->
<!--                                                   <div class="cms-grid-media  has-thumbnail">-->
<!--                                                      <img width="800" height="600" src="images/speaker.jpg" class="attachment-wp-bolina-gallery size-wp-bolina-gallery wp-post-image" alt="" />-->
<!--                                                      <div class="popup"><a class="button-popup" href="uploads/2015/08/shutterstock_79711114_supersize-800x450.jpg" data-effect="mfp-zoom-in">+</a></div>-->
<!--                                                      <div class="primary-content">-->
<!--                                                         <div class="cms-grid-title">-->
<!--                                                            <h4>-->
<!--                                                               <a href="gallery/women-in-the-dark-concept-10/index.html" style="font-size:14px">-->
<!--                                                               Women In The Dark Concept                            </a>-->
<!--                                                            </h4>-->
<!--                                                         </div>-->
<!--                                                         <div class="cms-grid-categories">-->
<!--                                                            <a href="gallery_categories/retouching/index.html" rel="tag">Retouching</a>-->
<!--                                                         </div>-->
<!--                                                      </div>-->
<!--                                                   </div>-->
<!--                                                </div>-->
<!--                                                <div class="cms-grid-item cms-grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12"-->
<!--                                                   data-groups='["all","category-retouching","category-stylish-make-up"]'>-->
<!--                                                   <div class="cms-grid-media  has-thumbnail">-->
<!--                                                      <img width="800" height="600" src="images/speaker.jpg" class="attachment-wp-bolina-gallery size-wp-bolina-gallery wp-post-image" alt="" />-->
<!--                                                      <div class="popup"><a class="button-popup" href="uploads/2015/08/shutterstock_112762954_supersize-800x450.jpg" data-effect="mfp-zoom-in">+</a></div>-->
<!--                                                      <div class="primary-content">-->
<!--                                                         <div class="cms-grid-title">-->
<!--                                                            <h4>-->
<!--                                                               <a href="gallery/women-in-the-dark-concept-9/index.html" style="font-size:14px">-->
<!--                                                               Women In The Dark Concept                            </a>-->
<!--                                                            </h4>-->
<!--                                                         </div>-->
<!--                                                         <div class="cms-grid-categories">-->
<!--                                                            <a href="gallery_categories/retouching/index.html" rel="tag">Retouching</a>/ <a href="gallery_categories/stylish-make-up/index.html" rel="tag">Stylish &amp; Make up</a>-->
<!--                                                         </div>-->
<!--                                                      </div>-->
<!--                                                   </div>-->
<!--                                                </div>-->
<!--                                                <div class="cms-grid-item cms-grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12"-->
<!--                                                   data-groups='["all","category-photography","category-stylish-make-up"]'>-->
<!--                                                   <div class="cms-grid-media  has-thumbnail">-->
<!--                                                      <img width="800" height="600" src="images/speaker.jpg" class="attachment-wp-bolina-gallery size-wp-bolina-gallery wp-post-image" alt="" />-->
<!--                                                      <div class="popup"><a class="button-popup" href="uploads/2015/08/shutterstock_9811654_supersize-800x450.jpg" data-effect="mfp-zoom-in">+</a></div>-->
<!--                                                      <div class="primary-content">-->
<!--                                                         <div class="cms-grid-title">-->
<!--                                                            <h4>-->
<!--                                                               <a href="gallery/women-in-the-dark-concept-8/index.html" style="font-size:14px">-->
<!--                                                               Women In The Dark Concept                            </a>-->
<!--                                                            </h4>-->
<!--                                                         </div>-->
<!--                                                         <div class="cms-grid-categories">-->
<!--                                                            <a href="gallery_categories/photography/index.html" rel="tag">Photography</a>/ <a href="gallery_categories/stylish-make-up/index.html" rel="tag">Stylish &amp; Make up</a>-->
<!--                                                         </div>-->
<!--                                                      </div>-->
<!--                                                   </div>-->
<!--                                                </div>-->
<!--                                                <div class="cms-grid-item cms-grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12"-->
<!--                                                   data-groups='["all","category-retouching"]'>-->
<!--                                                   <div class="cms-grid-media  has-thumbnail">-->
<!--                                                      <img width="800" height="600" src="images/speaker.jpg" class="attachment-wp-bolina-gallery size-wp-bolina-gallery wp-post-image" alt="" />-->
<!--                                                      <div class="popup"><a class="button-popup" href="uploads/2015/08/shutterstock_79509322_huge-800x450.jpg" data-effect="mfp-zoom-in">+</a></div>-->
<!--                                                      <div class="primary-content">-->
<!--                                                         <div class="cms-grid-title">-->
<!--                                                            <h4>-->
<!--                                                               <a href="gallery/women-in-the-dark-concept-7/index.html" style="font-size:14px">-->
<!--                                                               Women In The Dark Concept                            </a>-->
<!--                                                            </h4>-->
<!--                                                         </div>-->
<!--                                                         <div class="cms-grid-categories">-->
<!--                                                            <a href="gallery_categories/retouching/index.html" rel="tag">Retouching</a>-->
<!--                                                         </div>-->
<!--                                                      </div>-->
<!--                                                   </div>-->
<!--                                                </div>-->
<!--                                                <div class="cms-grid-item cms-grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12"-->
<!--                                                   data-groups='["all","category-photography","category-retouching"]'>-->
<!--                                                   <div class="cms-grid-media  has-thumbnail">-->
<!--                                                      <img width="800" height="600" src="images/speaker.jpg" class="attachment-wp-bolina-gallery size-wp-bolina-gallery wp-post-image" alt="" />-->
<!--                                                      <div class="popup"><a class="button-popup" href="uploads/2015/09/shutterstock_93400783_supersize-800x450.jpg" data-effect="mfp-zoom-in">+</a></div>-->
<!--                                                      <div class="primary-content">-->
<!--                                                         <div class="cms-grid-title">-->
<!--                                                            <h4>-->
<!--                                                               <a href="gallery/women-in-the-dark-concept-6/index.html" style="font-size:14px">-->
<!--                                                               Women In The Dark Concept                            </a>-->
<!--                                                            </h4>-->
<!--                                                         </div>-->
<!--                                                         <div class="cms-grid-categories">-->
<!--                                                            <a href="gallery_categories/photography/index.html" rel="tag">Photography</a>/ <a href="gallery_categories/retouching/index.html" rel="tag">Retouching</a>-->
<!--                                                         </div>-->
<!--                                                      </div>-->
<!--                                                   </div>-->
<!--                                                </div>-->
<!--                                                <div class="cms-grid-item cms-grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12"-->
<!--                                                   data-groups='["all","category-retouching"]'>-->
<!--                                                   <div class="cms-grid-media  has-thumbnail">-->
<!--                                                      <img width="800" height="600" src="images/speaker.jpg" class="attachment-wp-bolina-gallery size-wp-bolina-gallery wp-post-image" alt="" />-->
<!--                                                      <div class="popup"><a class="button-popup" href="uploads/2015/08/shutterstock_239356933_supersize-800x450.jpg" data-effect="mfp-zoom-in">+</a></div>-->
<!--                                                      <div class="primary-content">-->
<!--                                                         <div class="cms-grid-title">-->
<!--                                                            <h4>-->
<!--                                                               <a href="gallery/women-in-the-dark-concept-5/index.html" style="font-size:14px">-->
<!--                                                               Women In The Dark Concept                            </a>-->
<!--                                                            </h4>-->
<!--                                                         </div>-->
<!--                                                         <div class="cms-grid-categories">-->
<!--                                                            <a href="gallery_categories/retouching/index.html" rel="tag">Retouching</a>-->
<!--                                                         </div>-->
<!--                                                      </div>-->
<!--                                                   </div>-->
<!--                                                </div>-->
<!--                                             </div>-->
<!--                                          </div>-->
<!--                                       </div>-->
<!--                                    </div>-->
<!--                                 </div>-->
<!--                              </div>-->
<!--                           </div>-->
<!--                        </div>-->
                        <div  class="secsion clearfix "  style ="margin-bottom:2em">
                           <div class="container-fluid clearfix">
                              <div class="row ">
                                 <div class="vc_col-sm-12 wpb_column vc_column_container" style="">
                                    <div class="vc_column-inner clearfix ">
                                       <div class="wrapper-content">
                                          <div class="vc_empty_space"  style="height: 102px" ><span class="vc_empty_space_inner"></span></div>
                                          <div class="vc_custom_heading" >
                                             <h2 style="text-align: center;font-family:Lato;font-weight:900;font-style:normal;letter-spacing:2pt" >Glimpse of Jaipur</h2>
                                             <div class="line_bottom_heading" style="width:150px;
                                                height:3px;
                                                margin:30px 0 0 0;
                                                background:#ffbf00;
                                                position: relative;
                                                bottom: 0;
                                                left: 50%;
                                                -webkit-transform: translateX(-50%);
                                                -khtml-transform: translateX(-50%);
                                                -moz-transform: translateX(-50%);
                                                -ms-transform: translateX(-50%);
                                                -o-transform: translateX(-50%);
                                                transform: translateX(-50%);"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div  class="secsion clearfix "  style ="">
                           <div class="container-fluid clearfix">
                              <div class="row  same-height">
                                 <div class="vc_col-sm-4 wpb_column vc_column_container  vc_custom_1440002709619   " style="">
                                    <div class="vc_column-inner clearfix vc_custom_1440002709619">
                                       <div class="wrapper-content">
                                          <div class="row cms-fancyboxes-wraper template-cms_fancybox_single--layout2 content-align-default " id="cms-fancy-box-single-4"
                                             style="
                                             background-image: url(images/jaipur3.jpg);background-size: cover;background-position: center top;background-repeat: no-repeat;
                                             min-height:438px;
                                             ">
                                             <div class="cms-fancyboxes-body">
                                                <div class="cms-fancybox-item">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="vc_col-sm-4 wpb_column vc_column_container  vc_custom_1443408260985   " style="">
                                    <div class="vc_column-inner clearfix vc_custom_1443408260985">
                                       <div class="wrapper-content">
                                          <div class="row cms-fancyboxes-wraper template-cms_fancybox_single--layout2 content-align-center " id="cms-fancy-box-single-5"
                                             style="
                                             background-color:#f7f7f7;background-image: url(images/gb.png);background-size: cover;background-position: center top;background-repeat: no-repeat;
                                             min-height:438px;
                                             ">
                                             <div class="cms-fancyboxes-body">
                                                <div class="cms-fancybox-item">
                                                   <h3 class="facybox-title" style="
                                                      font-size: ;
                                                      color: ;
                                                      ">
                                                      Jaipur                                            <span class="line-title" style="
                                                         background: #ffbf00;
                                                         width: 100px;
                                                         height: 3px;
                                                         margin: 20px auto 0;
                                                         "></span>
                                                   </h3>
                                                   <div class="fancy-box-content" style="">
                                                      <p>Jaipur, the largest city of Rajasthan is an epitome of magnificence and vibrancy. This royal place is rich in heritage, culture and architecture. With splendid fortresses, majestic palaces, tranquil temples and beautiful havelis;Jaipur displays exquisite handicrafts and spectacular jewellery. These intricate works of art add life and colour to this Pink City's uniqueness. </p>
                                                   </div>

                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="vc_col-sm-4 wpb_column vc_column_container  vc_custom_1440002723751   " style="">
                                    <div class="vc_column-inner clearfix vc_custom_1440002723751">
                                       <div class="wrapper-content">
                                          <div class="row cms-fancyboxes-wraper template-cms_fancybox_single--layout2 content-align-default " id="cms-fancy-box-single-6"
                                             style="
                                             background-image: url(images/jaipur1.jpg);background-size: cover;background-position: center top;background-repeat: no-repeat;
                                             min-height:438px;
                                             ">
                                             <div class="cms-fancyboxes-body">
                                                <div class="cms-fancybox-item">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div  class="secsion clearfix "  style ="">
                           <div class="container-fluid clearfix">
                              <div class="row  same-height">
                                 <div class="vc_col-sm-4 wpb_column vc_column_container  vc_custom_1443407455571   " style="">
                                    <div class="vc_column-inner clearfix vc_custom_1443407455571">
                                       <div class="wrapper-content">
                                          <div class="row cms-fancyboxes-wraper template-cms_fancybox_single--layout2 content-align-center " id="cms-fancy-box-single-7"
                                             style="
                                             background-color:#f7f7f7;background-image: url(images/gb.png);background-size: cover;background-position: center top;background-repeat: no-repeat;
                                             min-height:438px;
                                             ">
                                             <div class="cms-fancyboxes-body">
                                                <div class="cms-fancybox-item">
                                                   <h3 class="facybox-title" style="
                                                      font-size: ;
                                                      color: ;
                                                      ">
                                                      Pink City                                            <span class="line-title" style="
                                                         background: #ffbf00;
                                                         width: 100px;
                                                         height: 3px;
                                                         margin: 20px auto 0;
                                                         "></span>
                                                   </h3>
                                                   <div class="fancy-box-content" style="">
                                                      <p>Jaipur is known as the Pink City and on arrival visitors will immediately understand the reasoning behind the name. Every building within the walled historic centre is painted a terracotta “pink” colour and there are few exceptions to this uniformly colour scheme.The historical reason for the uniform colour of central Jaipur lies with the absolute power of the Maharaja (Sawai Ram Singh) over his capital and his extreme strategy to impress Prince Albert during his 1876 tour of India.</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="vc_col-sm-4 wpb_column vc_column_container  vc_custom_1440002295125   " style="">
                                    <div class="vc_column-inner clearfix vc_custom_1440002295125">
                                       <div class="wrapper-content">
                                          <div class="row cms-fancyboxes-wraper template-cms_fancybox_single--layout2 content-align-default " id="cms-fancy-box-single-8"
                                             style="
                                             background-image: url(images/jaipur2.jpg);background-size: cover;background-position: center top;background-repeat: no-repeat;
                                             min-height:438px;
                                             ">
                                             <div class="cms-fancyboxes-body">
                                                <div class="cms-fancybox-item">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="vc_col-sm-4 wpb_column vc_column_container  vc_custom_1443407464843   " style="">
                                    <div class="vc_column-inner clearfix vc_custom_1443407464843">
                                       <div class="wrapper-content">
                                          <div class="row cms-fancyboxes-wraper template-cms_fancybox_single--layout2 content-align-center " id="cms-fancy-box-single-9"
                                             style="
                                             background-color:#f7f7f7;background-image: url(images/gb.png);background-size: cover;background-position: center top;background-repeat: no-repeat;
                                             min-height:438px;
                                             ">
                                             <div class="cms-fancyboxes-body">
                                                <div class="cms-fancybox-item">
                                                   <h3 class="facybox-title" style="
                                                      font-size: ;
                                                      color: ;
                                                      ">
                                                      Tourism                                            <span class="line-title" style="
                                                         background: #ffbf00;
                                                         width: 100px;
                                                         height: 3px;
                                                         margin: 20px auto 0;
                                                         "></span>
                                                   </h3>
                                                   <div class="fancy-box-content" style="">
                                                      <p>Jaipur is a major tourist destination in India forming a part of the Golden Triangle.Jaipur was ranked the 7th best place to visit in Asia.Visitor attractions include the Hawa Mahal, Jal Mahal, City Palace, Amer Fort, Jantar Mantar, Nahargarh Fort, Jaigarh Fort, Birla Mandir, Galtaji, Govind Dev Ji Temple, Garh Ganesh Temple, Moti Dungri Ganesh Temple, Sanghiji Jain temple and the Jaipur Zoo.</p>
                                                   </div>

                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div  class="secsion clearfix "  style ="">
                           <div class="container clearfix">
                              <div class="row ">
                                 <div class="vc_col-sm-12 wpb_column vc_column_container    " style="">
                                    <div class="vc_column-inner clearfix ">
                                       <div class="wrapper-content">
                                          <div class="wpb_text_column wpb_content_element ">
                                             <div class="wpb_wrapper clearfix" style="">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                  </article>
                  <!-- #post -->
                  <div id="comments" class="secsion comments-area">
                     <div class="comment-content">
                     </div>
                  </div>

               </div>
               <!-- #content -->
            </div>
            <!-- #primary -->
         </div>
         <?php include('footer.php') ?>
      </div>
      <!-- #page -->
    <?php include('extras.php') ?>
   </body>


   <!-- clicking the important information link -->
   <script>
function showNotification(){
  var iIconOnTop = document.getElementById("clicker");
    iIconOnTop.click();
}

   </script>
</html>

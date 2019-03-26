(function( $ ) {
    
    // wait until window is loaded - all images, styles-sheets, fonts, links, and other media assets
      
    // OPTIONAL - waits til next tick render to run code (prevents running in the middle of render tick)
    window.requestAnimationFrame(function() {
    
        var casepage = Barba.BaseView.extend({
          namespace: 'casepage',
          onEnter: function() {
              // The new Container is ready and attached to the DOM.
              var svgLoadedHolder = document.querySelector('#logo__holder');
              var svgLoadedHolderLoaded = "<div id='logo__holder_loaded'></div>";


              var caseStudyHeight = $('.case-study-slide-container .swiper-slide');
              let $wwCh = window.innerHeight;
              TweenMax.set(caseStudyHeight,{height: $wwCh});
    
              var menuHeight = $('.menu');
              TweenMax.set(menuHeight,{height: $wwCh});
    
              if (svgLoadedHolder.getElementsByTagName('div').length) {
                console.log('div already added.');
              }else{
                $(svgLoadedHolder).append(svgLoadedHolderLoaded);        
                var logoLoaded = {
                  container: document.getElementById('logo__holder_loaded'),
                  renderer: 'svg',
                  loop: false,
                  // yoyo: true,
                  autoplay: true,
                  path: 'http://www.gcreativelab.com/wp-content/themes/gcreativelab_v2/assets/images/bodymovin/logo_loaded.json'
                };
                
                // http://localhost:8888/DEV/gcreative/wp-content/themes/gcreativelab/assets/images/bodymovin/logo_loaded.json
      
                var xspan = document.getElementById("logo__holder_loaded");
      
                if (xspan.getElementsByTagName('svg').length) {
                  console.log('svg already added.');
                }else{
                  var animLogoLoaded;
                  animLogoLoaded = bodymovin.loadAnimation(logoLoaded);
                }    
              }
          },
          onEnterCompleted: function() {
              // The Transition has just finished.

              var loadIndicator = {
                container: document.getElementById('indicator_loader'),
                renderer: 'svg',
                loop: true,
                // yoyo: true,
                autoplay: true,
                path: 'http://www.gcreativelab.com/wp-content/themes/gcreativelab_v2/assets/images/bodymovin/indicator.json'
              };
              
              var indicatorLoaded;
              indicatorLoaded = bodymovin.loadAnimation(loadIndicator);
          
              var indicatorText = new TimelineMax({repeat: -1, delay: 1});
              
              indicatorText.to(".indicatorText", 1, 
              {text:{value:"DRAG", delimiter:" "},ease:Expo.easeInOut})
                .to(".indicatorText", 1, 
              {text:{value:"SCROLL", delimiter:" "},ease:Expo.easeInOut,delay: 0.4});


              var menuButton = document.querySelector('.menu-button');
              var swiper = new Swiper('.swiper-container', {
                slidesPerView: 'auto',
                initialSlide: 1,
                resistanceRatio: 0,
                simulateTouch: false,
                touchRatio: 0,
                freeMode: true,
                resizeReInit: true,
                observer: true,
                // mousewheel: true,
                slideToClickedSlide: true,
                on: {
                  init: function () {
                    var slider = this;
                    menuButton.addEventListener('click', function () {
                      if (slider.activeIndex === 0) {
                        slider.slideNext();
                      } else {
                        slider.slidePrev();
                      }
                    }, true);
                  },
                  slideChange: function () {
                    var slider = this;

                    let $wwCh = window.innerWidth;
                    
                    if (slider.activeIndex === 0) {
                      menuButton.classList.add('cross');
                      let src = 'http://www.gcreativelab.com/wp-content/themes/gcreativelab_v2/assets/images/gcreative_logo_white.svg';
                      $('.glogo').attr('src', src);
    
                      let menuIcon = 'http://www.gcreativelab.com/wp-content/themes/gcreativelab_v2/assets/images/menu_close.svg';
                      $('.menu-icn').attr('src', menuIcon);
    
                      TweenMax.staggerFromTo('#menu li a', 0.1,{x: '-140',autoAlpha:0},{x: '0',autoAlpha:1, ease:Power4.easeInOut}, 0.1);

                      if($wwCh<=415){
                        
                            TweenLite.to('#logo__holder_loaded',1,{
                              top: 0,
                              left: 2.5,
                              width: '50px',
                              height: '65px',
                              ease: Expo.easeInOut, 
                            });
                      }
      
                      if($wwCh<=376){
                        
                            TweenLite.to('#logo__holder_loaded',1,{
                              top: 0,
                              left: 1,
                              width: '50px',
                              height: '65px',
                              ease: Expo.easeInOut, 
                            });
                          
                      }
    
                    } else {
                      menuButton.classList.remove('cross');
                      let src = 'http://www.gcreativelab.com/wp-content/themes/gcreativelab_v2/assets/images/gcreative_logo.svg';
                      $('.glogo').attr('src', src);
    
                      let menuIcon = 'http://www.gcreativelab.com/wp-content/themes/gcreativelab_v2/assets/images/menu-lines.svg';
                      $('.menu-icn').attr('src', menuIcon);

                      if($wwCh<=415){
                        TweenLite.to('#logo__holder_loaded',1,{
                          top: 32,
                              left: 80,
                              width: '103px',
                              height: '115px',
                              ease: Expo.easeInOut, 
                        });
                      }
    
                      if($wwCh<=376){
                        
                          TweenLite.to('#logo__holder_loaded',1,{
                            top: 32,
                                left: 80,
                                width: '103px',
                                height: '115px',
                                ease: Expo.easeInOut, 
                          });
                          
                      }

                    }
                  },
                  resize: function(){
                    let resizeThis = this;
                    // location.reload();
                    window.location.href = window.location.href;
                }
                }
              });
      
              swiper.update()
      

              let pageWidth = window.innerWidth;

              if(pageWidth<=414){

                TweenLite.to('#logo__holder_loaded',1,{
                  top: 0,
                  left: 2.5,
                  width: '50px',
                  height: '65px',
                  ease: Expo.easeInOut, 
                });

                var caseStudy = new Swiper('.case-study-slide-container', {
                  direction: 'vertical',
                  mousewheel: true,
                  grabCursor: true,
                  autoHeight: true,
                  freeMode: true,
                  freeModeFluid: true,
                  freeModeMomentumVelocityRatio: 0.5,
                  on:{
                    init: function(){
                      let $wwCh = window.innerHeight;
                      var caseHeight = $('.case-study-slide-container .swiper-slide');
                      TweenMax.set(caseHeight,{height: $wwCh});
                    },
                    slideChangeTransitionEnd: function (){
                      let transEndSlider = this;
                      let slider = this;
                      
                      let slideWrapper = $('.case-study-slide-container > .swiper-wrapper');
        
                      let slideLength = $('.case-study-slide-container .swiper-slide').length-1;
                      let slideHeight = window.innerHeight;
        
                      let slideTotalHeight = -(slideHeight*slideLength);
                      let slideMaxHeight = slider.getTranslate();
        
                      if(slideTotalHeight>=slideMaxHeight+5){
                        TweenLite.to(slideWrapper,1,{force3D:true,y: slideTotalHeight})
                      }
        
                    }
                }
              });

              }else{
                var caseStudy = new Swiper('.case-study-slide-container', {
                  direction: 'horizontal',
                  slidesPerView: 'auto',
                  mousewheel: true,
                  freeMode: true,
                  infinite: true,
                  mousewheelSensitivity: 0.02,
                  freeModeFluid: true,
                  freeModeMomentumVelocityRatio: 0.5,
                  pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                  },
                  on:{
                    slideChangeTransitionEnd: function (){
                        let transEndSlider = this;
            
                        let $wwCh = window.innerWidth;
            
  
                        if($wwCh>=768){
                          console.log(transEndSlider.getTranslate());
                          if(transEndSlider.getTranslate()<=(-300)){
                              TweenLite.to('#logo__holder_loaded',1,{
                                top: 0,
                                left: 2.5,
                                width: '50px',
                                height: '65px',
                                ease: Expo.easeInOut, 
                              });
                          }else{
                            TweenLite.to('#logo__holder_loaded',1,{
                              top: 32,
                                  left: 80,
                                  width: '103px',
                                  height: '115px',
                                  ease: Expo.easeInOut, 
                            });
                            
                          }
                        }
            
                        if($wwCh<=415){
            
            
                          if(transEndSlider.getTranslate()<=(-300)){
                              TweenLite.to('#logo__holder_loaded',1,{
                                top: 0,
                                left: 2.5,
                                width: '50px',
                                height: '65px',
                                ease: Expo.easeInOut, 
                              });
                          }else{
                            TweenLite.to('#logo__holder_loaded',1,{
                              top: 32,
                                  left: 80,
                                  width: '103px',
                                  height: '115px',
                                  ease: Expo.easeInOut, 
                            });
                            
                          }
                        }
            
            
                      }
                }
              });
              }
            
            
         
             
          },
          onLeave: function() {
              // A new Transition toward a new page has just started.
              instaStat = false;
          },
          onLeaveCompleted: function() {
              // The Container has just been removed from the DOM.
          }
        });
        
        // Don't forget to init the view!
        
        casepage.init();
        Barba.Prefetch.init();
        
    
    
    
    });
            
     })( jQuery );
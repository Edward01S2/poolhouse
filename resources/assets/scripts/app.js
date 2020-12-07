/**
 * External Dependencies
 */
import 'jquery';
import 'alpinejs';
import 'lity';
import 'lottie-web';
import Swiper, { Navigation, Autoplay, Pagination, EffectFade } from 'swiper';

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
Swiper.use([Navigation, Autoplay, Pagination, EffectFade]);

$(document).ready(() => {


  $(window).smartresize(function(e){

    //strategySwiper.update();

  });

  gsap.config({
    nullTargetWarn: false,
  });

  gsap.to('#nav', {
    scrollTrigger: {
      trigger: '.main',
      start: "top",
      endTrigger: "html",
      end:"bottom top",
      toggleClass: {targets: "#nav", className: "active"},
      // markers: true,
    }
  });

  $('.return-top').on('click', function(e) {
    e.preventDefault();
    gsap.to(window, {duration: 2, scrollTo: {y: 0}});
  });

  const navLinks = gsap.utils.toArray(".nav-container .nav-link");
  //console.log(navLinks);
  navLinks.forEach((link, i) => {
    link.addEventListener("click", function(e) {
      var href = e.currentTarget.getAttribute("href")
      var anchor = href.substring(href.indexOf("#"))

      if(document.querySelectorAll(anchor).length > 0) {
        e.preventDefault();
        gsap.to(window, {duration: 1.5, scrollTo: {y: anchor, offsetY: 100 }});
      }
    });
  });

  gsap.utils.toArray(".section").forEach((box, i) => {
    var id = box.getAttribute("id");
    gsap.to(box, {
      scrollTrigger: {
        trigger: box,
        start: "top 60%",
        end: "bottom 20%",
        //markers: true,
        toggleClass: {targets: ".nav-container a[href='#" + id + "']", className: "active"},
      },
    });
  });

  gsap.utils.toArray(".text-block h1").forEach((item, i) => {
    gsap.fromTo(item, {
      y: 10,
      autoAlpha: 0,
      duration: 2
    }, {
      scrollTrigger: {
        trigger: item,
        start: "top 60%",
        //markers: true,
      },
      autoAlpha: 1,
      y: 0,
      duration: 1.5,
    });
  });

  // gsap.fromTo('#block_5fad93c7ff22b h1', {
  //   y: 10,
  //   autoAlpha: 0,
  //   duration: 2
  // }, {
  //   scrollTrigger: {
  //     trigger: '#block_5fad93c7ff22b',
  //     start: "top 60%",
  //     //markers: true,
  //   },
  //   autoAlpha: 1,
  //   y: 0,
  //   duration: 1.5,
  // });
  
  // gsap.fromTo('#block_5fad948fff22c h1', {
  //   y: 10,
  //   autoAlpha: 0,
  //   duration: 2
  // }, {
  //   scrollTrigger: {
  //     trigger: '#block_5fad948fff22c',
  //     start: "top 60%",
  //     //markers: true,
  //   },
  //   autoAlpha: 1,
  //   y: 0,
  //   duration: 1.5,
  // }); 



});

(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');
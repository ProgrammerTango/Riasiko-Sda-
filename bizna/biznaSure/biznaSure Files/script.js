jQuery(document).ready(function ($) {

  var options = {
      $FillMode: 2,                                       
      $AutoPlay: 1,                                       
      $Idle: 3000,                                        
      $PauseOnHover: 2,                                   
      
      $ArrowKeyNavigation: 1,   			                
      $SlideEasing: $Jease$.$OutQuint,                    
      $SlideDuration: 800,                                
      $MinDragOffsetToSlide: 5,                          
      //$SlideWidth: 600,                                 
      //$SlideHeight: 300,                                
      $SlideSpacing: 0, 					                
      $UISearchMode: 1,                                  
      $PlayOrientation: 1,                                
      $DragOrientation: 1,                                
      $BulletNavigatorOptions: {                          
          $Class: $JssorBulletNavigator$,                 
          $ChanceToShow: 2,                               
          $SpacingX: 8,                                   
          $Orientation: 1                                
      },

      $ArrowNavigatorOptions: {                           
          $Class: $JssorArrowNavigator$,                  
          $ChanceToShow: 2                                 
      }
  };

  var jssor_slider1 = new $JssorSlider$("slider1_container", options);

 
  function ScaleSlider() {
      var bodyWidth = document.body.clientWidth;
      if (bodyWidth)
          jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
      else
          window.setTimeout(ScaleSlider, 30);
  }
  ScaleSlider();

  $(window).bind("load", ScaleSlider);
  $(window).bind("resize", ScaleSlider);
  $(window).bind("orientationchange", ScaleSlider);
  //responsive code end
});
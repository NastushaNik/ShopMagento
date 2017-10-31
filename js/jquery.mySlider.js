$.fn.mySlider = function(options) {
    //задаем свойства по умолчанию
      var options = $.extend ({
        imgSlides: ['images/0.jpg'],
        animationSpeed : 2500,
        delay: 7000,
        autoPlay : true
      },options);
     
      //устанавливаем счетчик   
      var count = 0;
      //массив текста
      var arrTextSlider = options.textSlider;     
      //кнопки навигации
      var navBtns = $('.navigation div');
      //записываем индекс последнего слайда
      var lengthImg = options.imgSlides.length-1;
      //первый див активный
      $('.navigation div:eq(0)').addClass("active");
      
      //перелистывание кнопками навигации
      $(navBtns).click(function(){
        var count = $(this).data('nav');
        //меняем картинку в зависимсти от data
        $('img.slider').attr({ src : 'images/'+count+'.jpg'});
        //делаем навигацию активной
        $('.navigation div').removeClass('active')
                            .eq(count)
                            .addClass('active'); 
        var textSlider = $('<div/>', { 
          class: 'text-slider', 
        }) 
          .append( 
          $('<h2/>',{ 
          class:'header'+count, 
          text: arrTextSlider[count][0] }), 
          $('<p/>',{ 
          class:'txt'+count,
          text: arrTextSlider[count][1]}), 
          $('<h3/>',{ 
          class:'head-h'+count,
          text: arrTextSlider[count][2] }),
          $('<a/>',{ 
          href : '#',
          class:'slider-btn',
          text: 'shop now!' })
          ); 
          $('.text-slider').html(textSlider);
          
          

      });        
      
      //слайдер
      setInterval(function(){
        if (count>=lengthImg) {
          count=0;
        }else{
          count++
        }
        changePhoto()

       },options.delay)

      function changePhoto(){
        if (options.autoPlay) {
        //добавляем элемент слайда перед имеющимся
        $('img.slider:first').before($('<img class="slider" src="'+options.imgSlides[count]+'">'));

        //вызываем анимацию слайда и его удаление
        $('img.slider:last').fadeOut(options.animationSpeed, function(){$('img.slider:last').remove()});
        $('.navigation div').removeClass('active')
                            .eq(count)
                            .addClass('active'); 

        var textSlider = $('<div/>', { 
          class: 'text-slider', 
        }) 
          .append( 
          $('<h2/>',{ 
          class:'header'+count, 
          text: arrTextSlider[count][0] }), 
          $('<p/>',{ 
          class:'txt'+count,
          text: arrTextSlider[count][1]}), 
          $('<h3/>',{ 
          class:'head-h'+count,
          text: arrTextSlider[count][2] }),
          $('<a/>',{ 
          href : '#',
          class:'slider-btn',
          text: 'shop now!' })
          ); 
          $('.text-slider').replaceWith(textSlider);
          }
        }


      return this;
  };
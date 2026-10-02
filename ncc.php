<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPS Eldeco| NCC</title>
    <?php include "includes/head.php" ?>
</head>
<style>
  
  *:focus {
  outline: 1px dotted blue;
}

.tabs > ul {
  position: relative;
  margin: 0;
  padding: 0;
  list-style: none;
  border-bottom: 1px solid #ccc;
  font-size: 0;
}

.tabs > ul .indicator {
  display: block;
  position: absolute;
  bottom: 0;
  left: 0;
  height: 3px;
  background: #005224;
  transform: translateZ(0) translateX(0);
  transition: all 0.3s ease;
}

.tabs > ul li {
  display: inline-block;
  font-size: 14px;
  width: 20%;
}

.tabs > ul li a {
  display: block;
  position: relative;
  overflow: hidden;
  padding: 20px;
  text-decoration: none;
  text-align: center;
  font-weight: bold;
  color: black;
  transition: all 0.3s ease 0.4s;
}

.tabs > ul li a:before {
  content: '';
  display: block;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  background: #005224; 
  transform: translateZ(0) translateY(100%);
  transition: all 0.3s ease 0.3s;
  z-index: -1;
}

.tabs > ul li a[aria-selected] {
  color: white;
}

.tabs > ul li a[aria-selected]:before {
  transform: translateZ(0) translateY(0);
}

.tabs > section[aria-hidden="true"] {
  display: none;
}
</style>

<body>

    <?php include "includes/header.php" ?>
    <div class="main relative sm:top-[20px] mb-[40px] sm:mb-[120px] mx-0 sm:mx-2">
        <div class="mt-8 mx-3 sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">

                <h1
                    class="text-[32px] sm:hidden block font-[700] text-blue-main uppercase text-center mb-5 sm:mb-8 hr-line relative leading-9">
                    National Cadet Corps
                </h1>
                <div>

                    <div class="md:w-[100%]">
                        <h1
                            class="sm:text-[32px] sm:block hidden font-[700] text-blue-main uppercase text-center sm:mb-1 hr-line relative leading-9">
                            National Cadet Corps
                        </h1>


                        <div>
                            <div class="mt-10">
                            <div class="tabs">
    <ul class="flex ml-4 mr-4">
      <li><a href="#section1">About NCC</a></li>
      <li><a href="#section2">NCC Incharge</a></li>
      <li><a href="#section3">Achievements</a></li>
      <li><a href="#section4">Picture Gallery</a></li>
      <li><a href="#section5">Camp</a></li>
      <li><a href="#section6">Certificate Exam</a></li>
      <li><a href="#section7">Parade</a></li>
      <li><a href="#section8">School Activities</a></li>
      <li><a href="#section9">In News</a></li>
    </ul>
    <section id="section1">
      <h2>Section 1</h2>
       </section>
    <section id="section2">
      <h2>Section 2</h2>
         </section>
    <section id="section3">
      <h2>Section 3</h2>
       </section>
    <section id="section4">
      <h2>Section 4</h2>
      </section>
    <section id="section5">
      <h2>Section 5</h2>
      </section>
      <section id="section6">
      <h2>Section 6</h2>
         </section>
    <section id="section7">
      <h2>Section 7</h2>
       </section>
    <section id="section8">
      <h2>Section 8</h2>
      </section>
    <section id="section9">
      <h2>Section 9</h2>
      </section>
  </div>



                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed bottom-0 w-full">
    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>
    <script>

var Tabs = function($) {
  return {
    
    init: function() {
      this.cacheDom();
      this.setupAria();
      this.appendIndicator();
      this.bindEvents();
    },
    
    cacheDom: function() {
      this.$el = $('.tabs');
      this.$tabList = this.$el.find('ul');
      this.$tab = this.$tabList.find('li');
      this.$tabFirst = this.$tabList.find('li:first-child a');
      this.$tabLink = this.$tab.find('a');
      this.$tabPanel = this.$el.find('section');
      this.$tabPanelFirstContent = this.$el.find('section > *:first-child');
      this.$tabPanelFirst = this.$el.find('section:first-child');
      this.$tabPanelNotFirst = this.$el.find('section:not(:first-of-type)');
    },
    
    bindEvents: function() {
      this.$tabLink.on('click', function(){
        this.changeTab();
        this.animateIndicator($(event.currentTarget));
      }.bind(this));
      this.$tabLink.on('keydown', function() {
        this.changeTabKey();
      }.bind(this));
    },
    
    changeTab: function() {
      var self = $(event.target);
      event.preventDefault();
      this.removeTabFocus();
      this.setSelectedTab(self);
      this.hideAllTabPanels();
      this.setSelectedTabPanel(self);
    },
    
    animateIndicator: function(elem) {
      var offset = elem.offset().left;
      var width = elem.width();    
      var $indicator = this.$tabList.find('.indicator');
      
      console.log(elem.width());
      
      $indicator.transition({ 
        x: offset,
        width: elem.width()
      })
    },
    
    appendIndicator: function() {
      this.$tabList.append('<div class="indicator"></div>');
    },
    
    changeTabKey: function() {
      var self = $(event.target),
        $target = this.setKeyboardDirection(self, event.keyCode);
      
      if ($target.length) {
        this.removeTabFocus(self);
        this.setSelectedTab($target);
      }
      this.hideAllTabPanels();
      this.setSelectedTabPanel($(document.activeElement));
      this.animateIndicator($target);
    },
    
    hideAllTabPanels: function() {
      this.$tabPanel.attr('aria-hidden', 'true');
    },
    
    removeTabFocus: function(self) {
      var $this = self || $('[role="tab"]');
      
      $this.attr({
        'tabindex': '-1',
        'aria-selected': null
      });
    },
    
    selectFirstTab: function() {
      this.$tabFirst.attr({
        'aria-selected': 'true',
        'tabindex': '0'
      });
    },
    
    setupAria: function() {
      this.$tabList.attr('role', 'tablist');
      this.$tab.attr('role', 'presentation');
      this.$tabLink.attr({
        'role': 'tab',
        'tabindex': '-1'
      });
      this.$tabLink.each(function() {
        var $this = $(this);
        
        $this.attr('aria-controls', $this.attr('href').substring(1));
      });
      this.$tabPanel.attr({
        'role': 'tabpanel'
      });
      this.$tabPanelFirstContent.attr({
        'tabindex': '0'
      });
      this.$tabPanelNotFirst.attr({
        'aria-hidden': 'true'
      });
      this.selectFirstTab();
    },
    
    setKeyboardDirection: function(self, keycode) {
      var $prev = self.parents('li').prev().children('[role="tab"]'),
          $next = self.parents('li').next().children('[role="tab"]');
      
      switch (keycode) {
        case 37:
          return $prev;
          break;
        case 39:
          return $next;
          break;
        default:
          return false;
          break;
      }
    },
    
    setSelectedTab: function(self) {
      self.attr({
        'aria-selected': true,
        'tabindex': '0'
      }).focus();
    },
    
    setSelectedTabPanel: function(self) {
      $('#' + self.attr('href').substring(1)).attr('aria-hidden', null);
    },
    
  };
}(jQuery);

Tabs.init();
</script>

</body>

</html>
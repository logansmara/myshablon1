<div class="board-max">
<?php for($i=0; $i<24; $i++): ?>
<div class="draggable max" href="<?= $moves1[$i]['id'] ?>" style="background: <?= $moves1[$i]['color'] ?>;left: <?= $moves1[$i]['pagex'] ?>px; top: <?= $moves1[$i]['pagey'] ?>px"><?= $moves1[$i]['id'] ?></div>
<?php endfor; ?>
</div>

<div class="board-min">
<?php for($i=24; $i<48; $i++): ?>
<div class="draggable min" href="<?= $moves1[$i]['id'] ?>" style="background: <?= $moves1[$i]['color'] ?>;left: <?= $moves1[$i]['pagex'] ?>px; top: <?= $moves1[$i]['pagey'] ?>px"><?= $moves1[$i]['id'] ?></div>
<?php endfor; ?>
</div>

<a href="<?= \yii\helpers\Url::to(['jui/update1']) ?>">начать новую игру</a>
<p>
	На этой странице добавлен в javascript jQuery UI Touch Punch <a href="http://touchpunch.furf.com/" target="_blank">http://touchpunch.furf.com/</a>
</p>
<?php

$css = <<< CSS
@media screen and (min-width:480px) {
.board-max {
display: block;
}
.board-min {
display: none;
}
}
@media screen and (max-width:479px) {
.board-max {
display: none;
}
.board-min {
display: block;
}	
}
.board-max {
  clear: both;
	position: relative;
	width: 400px;
	height: 400px;
  background-image: url(/images/board.png);
  background-repeat: no-repeat;
  background-size: cover;
}
.board-min {
  clear: both;
  position: relative;
  width: 300px;
  height: 300px;
  background-image: url(/images/board.png);
  background-repeat: no-repeat;
  background-size: cover;
}
.draggable {
position: absolute;
border: 1px solid #999;
border-radius: 5em;
}
.max {
width: 40px;
height: 40px;
}
.min {
width: 30px;
height: 30px;
}

CSS;

$js = <<< JS
    $(function() {
      $('.draggable').each(function() {

        var id = $(this).attr('href');
        $(this).draggable({
          stop: function(event,ui) {

            window.location.href = "/jui/move1?top=" + ui.position.top + "&left=" + ui.position.left + "&id=" + id;
          }
        });
      });
    });
    (function ($) {

  // Detect touch support
  $.support.touch = 'ontouchend' in document;

  // Ignore browsers without touch support
  if (!$.support.touch) {
    return;
  }

  var mouseProto = $.ui.mouse.prototype,
      _mouseInit = mouseProto._mouseInit,
      _mouseDestroy = mouseProto._mouseDestroy,
      touchHandled;

  /**
   * Simulate a mouse event based on a corresponding touch event
   * @param {Object} event A touch event
   * @param {String} simulatedType The corresponding mouse event
   */
  function simulateMouseEvent (event, simulatedType) {

    // Ignore multi-touch events
    if (event.originalEvent.touches.length > 1) {
      return;
    }

    event.preventDefault();

    var touch = event.originalEvent.changedTouches[0],
        simulatedEvent = document.createEvent('MouseEvents');
    
    // Initialize the simulated mouse event using the touch event's coordinates
    simulatedEvent.initMouseEvent(
      simulatedType,    // type
      true,             // bubbles                    
      true,             // cancelable                 
      window,           // view                       
      1,                // detail                     
      touch.screenX,    // screenX                    
      touch.screenY,    // screenY                    
      touch.clientX,    // clientX                    
      touch.clientY,    // clientY                    
      false,            // ctrlKey                    
      false,            // altKey                     
      false,            // shiftKey                   
      false,            // metaKey                    
      0,                // button                     
      null              // relatedTarget              
    );

    // Dispatch the simulated event to the target element
    event.target.dispatchEvent(simulatedEvent);
  }

  /**
   * Handle the jQuery UI widget's touchstart events
   * @param {Object} event The widget element's touchstart event
   */
  mouseProto._touchStart = function (event) {

    var self = this;

    // Ignore the event if another widget is already being handled
    if (touchHandled || !self._mouseCapture(event.originalEvent.changedTouches[0])) {
      return;
    }

    // Set the flag to prevent other widgets from inheriting the touch event
    touchHandled = true;

    // Track movement to determine if interaction was a click
    self._touchMoved = false;

    // Simulate the mouseover event
    simulateMouseEvent(event, 'mouseover');

    // Simulate the mousemove event
    simulateMouseEvent(event, 'mousemove');

    // Simulate the mousedown event
    simulateMouseEvent(event, 'mousedown');
  };

  /**
   * Handle the jQuery UI widget's touchmove events
   * @param {Object} event The document's touchmove event
   */
  mouseProto._touchMove = function (event) {

    // Ignore event if not handled
    if (!touchHandled) {
      return;
    }

    // Interaction was not a click
    this._touchMoved = true;

    // Simulate the mousemove event
    simulateMouseEvent(event, 'mousemove');
  };

  /**
   * Handle the jQuery UI widget's touchend events
   * @param {Object} event The document's touchend event
   */
  mouseProto._touchEnd = function (event) {

    // Ignore event if not handled
    if (!touchHandled) {
      return;
    }

    // Simulate the mouseup event
    simulateMouseEvent(event, 'mouseup');

    // Simulate the mouseout event
    simulateMouseEvent(event, 'mouseout');

    // If the touch interaction did not move, it should trigger a click
    if (!this._touchMoved) {

      // Simulate the click event
      simulateMouseEvent(event, 'click');
    }

    // Unset the flag to allow other widgets to inherit the touch event
    touchHandled = false;
  };

  /**
   * A duck punch of the $.ui.mouse _mouseInit method to support touch events.
   * This method extends the widget with bound touch event handlers that
   * translate touch events to mouse events and pass them to the widget's
   * original mouse event handling methods.
   */
  mouseProto._mouseInit = function () {
    
    var self = this;

    // Delegate the touch handlers to the widget's element
    self.element.bind({
      touchstart: $.proxy(self, '_touchStart'),
      touchmove: $.proxy(self, '_touchMove'),
      touchend: $.proxy(self, '_touchEnd')
    });

    // Call the original $.ui.mouse init method
    _mouseInit.call(self);
  };

  /**
   * Remove the touch event handlers
   */
  mouseProto._mouseDestroy = function () {
    
    var self = this;

    // Delegate the touch handlers to the widget's element
    self.element.unbind({
      touchstart: $.proxy(self, '_touchStart'),
      touchmove: $.proxy(self, '_touchMove'),
      touchend: $.proxy(self, '_touchEnd')
    });

    // Call the original $.ui.mouse destroy method
    _mouseDestroy.call(self);
  };

})(jQuery);
JS;

$this->registerCss($css);
$this->registerJs($js);

?>


jQuery(document).ready(function($){
  // Note how these are 'string' values, not numbers.
  // Math.ceil(2344444 / 100000.0) * 100000
  // $('#calculated-cost-input').val().replace(/,/g,'')
  var calCostInputValue = parseInt($('#calculated-cost-input').val().replace(/,/g,''));
  function generateRangeByCostValue(newRangeValue){
    var costValue = parseInt(newRangeValue);
    var defaultRange = [
	  '3500000','4000000','5000000','6000000','7000000','8000000','9000000',
      '10000000','15000000','20000000',
      '25000000','30000000','35000000','40000000','45000000','50000000',
      '60000000','70000000',
      '80000000','90000000',
      '100000000'
    ];
    if(costValue > 10000000 && costValue <= 100000000){
      return defaultRange;
    }else if (costValue <= 10000000) {
      var range = [
        '3500000','4000000','5000000','6000000','7000000','8000000','9000000','10000000'
      ];
      return range;
    }else if (costValue > 100000000) {
      var lastRangeValue = parseInt(defaultRange[defaultRange.length - 1]);
      var mulValue = parseInt(costValue/40);
      var rangezz = defaultRange;
      console.log("lastRangeValue: "+lastRangeValue);
      for(var i = 1; i < 40; i++){
        var item = getRoundNumber1(i * mulValue);
        if(item > lastRangeValue){
          rangezz.push(item.toString());
        }
      }
      rangezz.push(costValue.toString());
      return rangezz;
    }
  }
  function getRoundNumber1(value){
    return Math.ceil(value / 1000000.0) * 1000000;
  }
  function getServiceCost(value){
    if(value != 0){
      if(value < 5000000){
        return 1000000;
      }else if (value >= 5000000 && value < 15000000) {
        return Math.ceil( (value * 0.2) / 100.0) * 100;
      }else if (value >= 15000000 && value < 30000000) {
        return Math.ceil( (value * 0.17) / 100.0) * 100;
      }else if (value >= 30000000 && value < 100000000) {
        return Math.ceil( (value * 0.15) / 100.0) * 100;
      }else{
        return Math.ceil( (value * 0.12) / 100.0) * 100;
      }
    }else{
      return 0;
    }
  }
  function formatToNumber(string){
    return parseInt(string.replace(/,/g,''));
  }
  function setLargeRange(calCostInputValuez){
    var rangeTest = generateRangeByCostValue(calCostInputValuez);
    var newRange = rangeTest?rangeTest:[
      '3500000','4000000','5000000','6000000','7000000','8000000','9000000',
      '10000000','15000000','20000000',
      '25000000','30000000','35000000','40000000','45000000','50000000',
      '60000000','70000000',
      '80000000','90000000',
      '100000000'
    ];
    bigValueSlider.noUiSlider.destroy()
    noUiSlider.create(bigValueSlider, {
      start: 0,
      step: 1,
      connect: [true, false],
      format: wNumb({
            decimals: 0
        }),
      range: {
        min: 0,
        max: newRange.length?newRange.length-1:13 //
      }
    });
    bindingNoUiSlider(newRange);
  }
  // var rangeTest = generateRangeByCostValue();
  // var range = rangeTest?rangeTest:[];
  var moneyFormat = wNumb({
    mark: '.',
    thousand: ','
  });
  var moneyFormatWithCurrency = wNumb({
    mark: '.',
    thousand: ',',
  });
  $('#calculated-cost-input').on('change', function(){
    setLargeRange(formatToNumber($(this).val()));
  });
  var bigValueSlider = document.getElementById('slider-huge');
  var rangeTest = generateRangeByCostValue();
  var range = rangeTest?rangeTest:[
    '3500000','4000000','5000000','6000000','7000000','8000000','9000000',
    '10000000','15000000','20000000',
    '25000000','30000000','35000000','40000000','45000000','50000000',
    '60000000','70000000',
    '80000000','90000000',
    '100000000'
  ];
  noUiSlider.create(bigValueSlider, {
    start: 0,
    step: 1,
    connect: [true, false],
    format: wNumb({
          decimals: 0
      }),
    range: {
      min: 0,
      max: range.length?range.length-1:13 //
    }
  });
  bindingNoUiSlider(range);
  console.log("Please :( !!!! Work!!!!! ");
  function bindingNoUiSlider(newRangez){
    var noUiHandle = jQuery('.noUi-handle');
    noUiHandle.attr('data-toggle', 'popover');
    noUiHandle.attr('data-placement', 'bottom');
    noUiHandle.attr('data-trigger', 'click');
    noUiHandle.attr('data-content', '<input id="popoverInput" class="cost-input cost-input_box" type="text" value="0" />');
    noUiHandle.popover({
      html: true
    })
    noUiHandle.popover("show");
    noUiHandle.on('hide.bs.popover', function () { return false;});
    // BEGIN - Handle exception
    // END - Set UiSlider on type
    $('input.cost-input').on('change', function(){
      var o = $(this);
      o.val(moneyFormat.to(parseInt(o.val().replace(/,/g,''))));
    })
    $('#popoverInput').on('change', function(e){
      var o = $(this);
      var valuePopoverInput = o.val().replace(/,/g,'');
      if(valuePopoverInput.trim() != ""){
        if (parseInt(valuePopoverInput.trim()) > parseInt(newRangez[newRangez.length -1])) {
          console.log("LARge num: "+parseInt(valuePopoverInput));
          setLargeRange(parseInt(valuePopoverInput));
          setSliderHandle(0, 40);
        }else{
          var valuePopover = parseInt(valuePopoverInput.replace(/,/g,'')); //Get value from input field and replace "," = "" => parseInt
          // setLargeRange(parseInt(valuePopoverInput));
          setSliderHandle(0, getUiSliderPos(valuePopover, newRangez));
        }
      }else{
        // setLargeRange(parseInt(valuePopoverInput));
        setSliderHandle(0, 1);
      }
    })
    // BEGIN - Binding update UiSlider
    bigValueSlider.noUiSlider.on('update', function ( values, handle ) {
      var valueUpdate = moneyFormatWithCurrency.to(parseInt(newRangez[parseInt(values)]));
      var valueUpdateFormated = parseInt(valueUpdate.toString().replace(/,/g,''));
      var serviceCost = getServiceCost(parseInt(valueUpdateFormated));
      console.log("valueUpdateFormated: "+ valueUpdateFormated);
      console.log("serviceCost: "+ serviceCost);
      $('#popoverInput').val(valueUpdate);
      $('#service-cost-input').val(moneyFormatWithCurrency.to(serviceCost));
      $('#sum-cost').val(moneyFormatWithCurrency.to(parseInt(valueUpdateFormated + serviceCost)));
      // noUiHandle.popover('show');
      jQuery('.popover').on('mouseover', function(){
        jQuery('#popoverInput').focus();
      });
      jQuery('.popover').on('mouseout', function(){
        jQuery('#popoverInput').blur();
      });
    });
    // END - Binding update UiSlider
  }
  function setSliderHandle(i, value) {
    var r = [null,null];
    r[i] = value;
    bigValueSlider.noUiSlider.set(r);
  }
  function getUiSliderPos(value, rangez){
    var rangeLen = rangez.length;
    for(var i = 0; i < rangeLen; i++){
      if(parseInt(rangez[i])>= value){
        console.log("VALUE ON CHANGE: "+ rangez[i]);
        // $('#popoverInput').attr('value', moneyFormatWithCurrency.to(parseInt(range[i])));
        $('#popoverInput').val(moneyFormatWithCurrency.to(parseInt(rangez[i])));
        return i;
      }
    }
    return 12;
  }
  $('.serivce-page_contact-us-btn').on('click', function(){
    console.log("popoverNum before format: "+ $('#popoverInput').val().trim());
    var popoverNum = parseInt($('#popoverInput').val().trim()?formatToNumber($('#popoverInput').val().trim()):0);
    console.log("popoverNum formated: "+ popoverNum);
    $('.your-budget input[type="text"]').val(popoverNum);
  });
})

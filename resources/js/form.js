var inpsToMonitor = document.querySelectorAll (
    "form input"
);
for (var J = inpsToMonitor.length - 1;  J >= 0;  --J) {
    inpsToMonitor[J].addEventListener ("change",    adjustStyling, false);
    inpsToMonitor[J].addEventListener ("keyup",     adjustStyling, false);
    inpsToMonitor[J].addEventListener ("focus",     adjustStyling, false);
    inpsToMonitor[J].addEventListener ("blur",      adjustStyling, false);
    inpsToMonitor[J].addEventListener ("mousedown", adjustStyling, false);

    //-- Initial update. note that IE support is NOT needed.
    var evt = document.createEvent ("HTMLEvents");
    evt.initEvent ("change", false, true);
    inpsToMonitor[J].dispatchEvent (evt);
}

function adjustStyling (zEvent) {
  var inpVal  = zEvent.target.value;
  if (inpVal  &&  inpVal.replace (/^\s+|\s+$/g, "") ){
    zEvent.target.classList.add('filled')
  } else {
    zEvent.target.classList.remove('filled')
  }
}
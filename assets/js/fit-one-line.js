// Minimal auto-fit text script for buttons (no dependencies)
// Usage: Add class 'fit-one-line' to any element you want to auto-fit
(function() {
  function fitTextToOneLine(el, minFont = 12, maxFont = 32, minLetter = -2, maxLetter = 0) {
    if (!el) return;
    el.style.whiteSpace = 'nowrap';
    el.style.display = 'inline-block';
    let parent = el.parentElement;
    if (!parent) return;
    let fontSize = maxFont;
    let letterSpacing = maxLetter;
    el.style.fontSize = fontSize + 'px';
    el.style.letterSpacing = letterSpacing + 'px';
    // Ensure parent has fixed width or max-width for best results
    while ((el.scrollWidth > parent.clientWidth || el.offsetHeight > el.scrollHeight) && (fontSize > minFont || letterSpacing > minLetter)) {
      if (fontSize > minFont) fontSize -= 1;
      else if (letterSpacing > minLetter) letterSpacing -= 0.5;
      el.style.fontSize = fontSize + 'px';
      el.style.letterSpacing = letterSpacing + 'px';
    }
  }
  function fitAll() {
    document.querySelectorAll('.fit-one-line').forEach(function(el) {
      fitTextToOneLine(el);
    });
  }
  window.addEventListener('resize', fitAll);
  document.addEventListener('DOMContentLoaded', fitAll);
})();

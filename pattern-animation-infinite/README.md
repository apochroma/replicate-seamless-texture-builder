# Pattern Animation (Infinite)

A Pen created on CodePen.io. Original URL: [https://codepen.io/adamabundis/pen/PoYgvYQ](https://codepen.io/adamabundis/pen/PoYgvYQ).

Used 2 tutorials for inspiration:

1. https://codepen.io/ScottMarshall/pen/fnmtx -Infinite Scrolling Background

2. https://www.divinector.com/2019/09/background-pattern-animation-using-html-css.html - Divinector Background pattern animation

I used the following techniques:

* `flexbox` to vertically and horizontally center text. 
* `keyframes` to set an infinite scroll. 
*  A `prefers-reduced-motion`  media query (more information can be found on the MDN article here: https://developer.mozilla.org/en-US/docs/Web/CSS/@media/prefers-reduced-motion) to slow down the animation when animation is turned off on your operating system (Windows, Mac, Linux). <strong>(Updated 04/2021)</strong>

If you would like to see the reduced motion media query in action, you can do the following:

<figure>
<blockquote cite="https://developer.mozilla.org/en-US/docs/Web/CSS/@media/prefers-reduced-motion">
  <ul>
     <li><strong>In Plasma/KDE:</strong> System Settings > Workspace Behavior -> General Behavior > “Animation speed” is set all the way to right to “Instant”</li>
    <li><strong>In Windows 10:</strong> Settings > Ease of Access > Display > Show animations in Windows</li>
      <li><strong>In Windows 7:</strong> Control Panel > Ease of Access > Make the computer easier to see > Turn off all unnecessary animations (when possible)</li>
     <li><strong>In macOS:</strong> System Preferences > Accessibility > Display > Reduce motion.</li>
     <li><strong>In iOS:</strong> Settings > General > Accessibility > Reduce Motion.</li>
     <li><strong>In Android 9+:</strong> Settings > Accessibility > Remove animations</li>
     <li><strong>In Firefox about:config:</strong> Add a number preference called ui.prefersReducedMotion and set its value to either 0 for full animation or to 1 to indicate a preference for reduced motion. Changes to this preference take effect immediately.</li>
  </ul>
</blockquote>
<figcaption>
  MDN article <cite>prefers-reduced-motion</cite>
</figcaption>
<figure>
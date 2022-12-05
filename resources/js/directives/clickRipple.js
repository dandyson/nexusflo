/*
 * Ripple effect fuctionality
 */

export default {
  beforeMount: function (el) {
    // Add specific CSS styles to element
    el.style.overflow = "hidden";
    el.style.position = "relative";
    el.style.zIndex = 1;

    // Setup ripple functionality
    el.clickRipple = (event, el) => {
      let cssClass = "click-ripple";
      let ripple = el.querySelectorAll("." + cssClass);
      let d, x, y;

      // If the ripple element doesn't exist in this element, add it..
      if (ripple.length === 0) {
        let elChild = document.createElement("span");
        elChild.classList.add(cssClass);

        el.insertBefore(elChild, el.firstChild);
      } else {
        // ..else remove .animate class from ripple element
        ripple[0].classList.remove("animate");
      }

      // Get the ripple element
      ripple = el.querySelectorAll("." + cssClass)[0];

      // If the ripple element doesn't have dimensions, set them accordingly
      if (
        getComputedStyle(ripple).height === "0px" ||
        getComputedStyle(ripple).width === "0px"
      ) {
        d = Math.max(el.offsetWidth, el.offsetHeight);

        ripple.style.height = d + "px";
        ripple.style.width = d + "px";
      }

      // Get coordinates for our ripple element
      x =
        event.pageX -
        (el.getBoundingClientRect().left + window.scrollX) -
        parseFloat(getComputedStyle(ripple).width.replace("px", "")) / 2;
      y =
        event.pageY -
        (el.getBoundingClientRect().top + window.scrollY) -
        parseFloat(getComputedStyle(ripple).height.replace("px", "")) / 2;

      // Position the ripple element and add the class .animate to it
      ripple.style.top = y + "px";
      ripple.style.left = x + "px";
      ripple.classList.add("animate");
    };

    // Attach the click event to the element
    el.addEventListener("click", (event) => {
      el.clickRipple(event, el);
    });
  },
  unmounted: (el) => {
    el.removeEventListener("click", el.clickRipple);
  },
};

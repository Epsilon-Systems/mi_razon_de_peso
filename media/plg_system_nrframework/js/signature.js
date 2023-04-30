var NRF_Signature=function(){function t(){this.init()}var e=t.prototype;return e.init=function(){var u=this;document.querySelectorAll(".nrf-signature-global-wrap").forEach(function(t){var e=t.querySelector("canvas"),n=t.querySelector('input[type="hidden"]'),a=t.querySelector(".nrf-signature-reset");u.autoSizeWrapper(t),NRFCanvasUpdateRatio(e);var i={backgroundColor:e.dataset.backgroundColor?e.dataset.backgroundColor:"rgba(255, 255, 255)",onEnd:function(){e.nextElementSibling.value=this.toDataURL(),e.parentElement.classList.add("painted")}},r=new SignaturePad(e,i),o=new NRF_Signature_Item(r,e,n);o.setValue(),a.addEventListener("click",function(t){t.preventDefault(),o.clear()}),e.closest(".convertforms")&&e.closest(".convertforms").addEventListener("success",function(){o.clear()})})},e.autoSizeWrapper=function(t){"true"===t.querySelector("canvas").dataset.widthAuto&&(t.querySelector(".nrf-signature-wrap").style.width=t.offsetWidth+"px",t.querySelector(".nrf-signature-wrap").style.height=t.offsetHeight+"px")},t}(),NRF_Signature_Item=function(){function t(t,e,n){this.signature=t,this.canvas=e,this.input=n,this.signatureBody=e.parentElement}var e=t.prototype;return e.setValue=function(){""!=this.input.value&&this.signature.fromDataURL(this.input.value)},e.clear=function(){this.signatureBody.classList.remove("painted"),this.signature.clear(),this.input.value=""},t}();function NRFCanvasUpdateRatio(t){var e=Math.max(window.devicePixelRatio||1,1);t.width=t.offsetWidth*e,t.height=t.offsetHeight*e,t.getContext("2d").scale(e,e)}"loading"==document.readyState?document.addEventListener("DOMContentLoaded",function(){new NRF_Signature}):new NRF_Signature;


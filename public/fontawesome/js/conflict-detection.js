!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?t():"function"==typeof define&&define.amd?define(t):t()}(0,(function(){"use strict";function e(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);t&&(o=o.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,o)}return n}function t(t){for(var n=1;n<arguments.length;n++){var r=null!=arguments[n]?arguments[n]:{};n%2?e(Object(r),!0).forEach((function(e){o(t,e,r[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):e(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}function n(e){return n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},n(e)}function o(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}function r(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,o=new Array(t);n<t;n++)o[n]=e[n];return o}var i={},c={};try{"undefined"!=typeof window&&(i=window),"undefined"!=typeof document&&(c=document)}catch(e){}var a=(i.navigator||{}).userAgent,s=void 0===a?"":a,f=i,l=c,u=!!f.document,d=!!l.documentElement&&!!l.head&&"function"==typeof l.addEventListener&&"function"==typeof l.createElement,m=(~s.indexOf("MSIE")||s.indexOf("Trident/"),[]),p=!1;function g(e){d&&(p?setTimeout(e,0):m.push(e))}d&&((p=(l.documentElement.doScroll?/^loaded|^c/:/^loaded|^i|^c/).test(l.readyState))||l.addEventListener("DOMContentLoaded",(function e(){l.removeEventListener("DOMContentLoaded",e),p=1,m.map((function(e){return e()}))})));var h="undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self?self:{};var y=function(e,t){return e(t={exports:{}},t.exports),t.exports}((function(e){!function(t){function n(e,t){var n=(65535&e)+(65535&t);return(e>>16)+(t>>16)+(n>>16)<<16|65535&n}function o(e,t,o,r,i,c){return n((a=n(n(t,e),n(r,c)))<<(s=i)|a>>>32-s,o);var a,s}function r(e,t,n,r,i,c,a){return o(t&n|~t&r,e,t,i,c,a)}function i(e,t,n,r,i,c,a){return o(t&r|n&~r,e,t,i,c,a)}function c(e,t,n,r,i,c,a){return o(t^n^r,e,t,i,c,a)}function a(e,t,n,r,i,c,a){return o(n^(t|~r),e,t,i,c,a)}function s(e,t){var o,s,f,l,u;e[t>>5]|=128<<t%32,e[14+(t+64>>>9<<4)]=t;var d=1732584193,m=-271733879,p=-1732584194,g=271733878;for(o=0;o<e.length;o+=16)s=d,f=m,l=p,u=g,d=r(d,m,p,g,e[o],7,-680876936),g=r(g,d,m,p,e[o+1],12,-389564586),p=r(p,g,d,m,e[o+2],17,606105819),m=r(m,p,g,d,e[o+3],22,-1044525330),d=r(d,m,p,g,e[o+4],7,-176418897),g=r(g,d,m,p,e[o+5],12,1200080426),p=r(p,g,d,m,e[o+6],17,-1473231341),m=r(m,p,g,d,e[o+7],22,-45705983),d=r(d,m,p,g,e[o+8],7,1770035416),g=r(g,d,m,p,e[o+9],12,-1958414417),p=r(p,g,d,m,e[o+10],17,-42063),m=r(m,p,g,d,e[o+11],22,-1990404162),d=r(d,m,p,g,e[o+12],7,1804603682),g=r(g,d,m,p,e[o+13],12,-40341101),p=r(p,g,d,m,e[o+14],17,-1502002290),d=i(d,m=r(m,p,g,d,e[o+15],22,1236535329),p,g,e[o+1],5,-165796510),g=i(g,d,m,p,e[o+6],9,-1069501632),p=i(p,g,d,m,e[o+11],14,643717713),m=i(m,p,g,d,e[o],20,-373897302),d=i(d,m,p,g,e[o+5],5,-701558691),g=i(g,d,m,p,e[o+10],9,38016083),p=i(p,g,d,m,e[o+15],14,-660478335),m=i(m,p,g,d,e[o+4],20,-405537848),d=i(d,m,p,g,e[o+9],5,568446438),g=i(g,d,m,p,e[o+14],9,-1019803690),p=i(p,g,d,m,e[o+3],14,-187363961),m=i(m,p,g,d,e[o+8],20,1163531501),d=i(d,m,p,g,e[o+13],5,-1444681467),g=i(g,d,m,p,e[o+2],9,-51403784),p=i(p,g,d,m,e[o+7],14,1735328473),d=c(d,m=i(m,p,g,d,e[o+12],20,-1926607734),p,g,e[o+5],4,-378558),g=c(g,d,m,p,e[o+8],11,-2022574463),p=c(p,g,d,m,e[o+11],16,1839030562),m=c(m,p,g,d,e[o+14],23,-35309556),d=c(d,m,p,g,e[o+1],4,-1530992060),g=c(g,d,m,p,e[o+4],11,1272893353),p=c(p,g,d,m,e[o+7],16,-155497632),m=c(m,p,g,d,e[o+10],23,-1094730640),d=c(d,m,p,g,e[o+13],4,681279174),g=c(g,d,m,p,e[o],11,-358537222),p=c(p,g,d,m,e[o+3],16,-722521979),m=c(m,p,g,d,e[o+6],23,76029189),d=c(d,m,p,g,e[o+9],4,-640364487),g=c(g,d,m,p,e[o+12],11,-421815835),p=c(p,g,d,m,e[o+15],16,530742520),d=a(d,m=c(m,p,g,d,e[o+2],23,-995338651),p,g,e[o],6,-198630844),g=a(g,d,m,p,e[o+7],10,1126891415),p=a(p,g,d,m,e[o+14],15,-1416354905),m=a(m,p,g,d,e[o+5],21,-57434055),d=a(d,m,p,g,e[o+12],6,1700485571),g=a(g,d,m,p,e[o+3],10,-1894986606),p=a(p,g,d,m,e[o+10],15,-1051523),m=a(m,p,g,d,e[o+1],21,-2054922799),d=a(d,m,p,g,e[o+8],6,1873313359),g=a(g,d,m,p,e[o+15],10,-30611744),p=a(p,g,d,m,e[o+6],15,-1560198380),m=a(m,p,g,d,e[o+13],21,1309151649),d=a(d,m,p,g,e[o+4],6,-145523070),g=a(g,d,m,p,e[o+11],10,-1120210379),p=a(p,g,d,m,e[o+2],15,718787259),m=a(m,p,g,d,e[o+9],21,-343485551),d=n(d,s),m=n(m,f),p=n(p,l),g=n(g,u);return[d,m,p,g]}function f(e){var t,n="",o=32*e.length;for(t=0;t<o;t+=8)n+=String.fromCharCode(e[t>>5]>>>t%32&255);return n}function l(e){var t,n=[];for(n[(e.length>>2)-1]=void 0,t=0;t<n.length;t+=1)n[t]=0;var o=8*e.length;for(t=0;t<o;t+=8)n[t>>5]|=(255&e.charCodeAt(t/8))<<t%32;return n}function u(e){var t,n,o="0123456789abcdef",r="";for(n=0;n<e.length;n+=1)t=e.charCodeAt(n),r+=o.charAt(t>>>4&15)+o.charAt(15&t);return r}function d(e){return unescape(encodeURIComponent(e))}function m(e){return function(e){return f(s(l(e),8*e.length))}(d(e))}function p(e,t){return function(e,t){var n,o,r=l(e),i=[],c=[];for(i[15]=c[15]=void 0,r.length>16&&(r=s(r,8*e.length)),n=0;n<16;n+=1)i[n]=909522486^r[n],c[n]=1549556828^r[n];return o=s(i.concat(l(t)),512+8*t.length),f(s(c.concat(o),640))}(d(e),d(t))}function g(e,t,n){return t?n?p(t,e):u(p(t,e)):n?m(e):u(m(e))}e.exports?e.exports=g:t.md5=g}(h)}));function b(e){if(null!==e&&"object"===n(e))return e.src?y(e.src):e.href?y(e.href):e.innerText&&""!==e.innerText?y(e.innerText):void 0}var v="fa-kits-diag",w="fa-kits-node-under-test",A="data-md5",x="data-fa-detection-ignore",T="data-fa-detection-timeout",D="data-fa-detection-results-collection-max-wait",E=function(e){e.preventDefault(),e.stopPropagation()};function O(e){var t=e.fn,n=void 0===t?function(){return!0}:t,o=e.initialDuration,r=void 0===o?1:o,i=e.maxDuration,c=void 0===i?f.FontAwesomeDetection.timeout:i,a=e.showProgress,s=void 0!==a&&a,l=e.progressIndicator;return new Promise((function(e,t){!function o(r,i){setTimeout((function(){var r=n();if(s&&console.info(l),r)e(r);else{var a=250+i;a<=c?o(250,a):t("timeout")}}),r)}(r,0)}))}function F(){var e=Array.from(l.getElementsByTagName("link")).filter((function(e){return!e.hasAttribute(x)})),t=Array.from(l.getElementsByTagName("style")).filter((function(e){return!e.hasAttribute(x)&&(!f.FontAwesomeConfig||!e.innerText.match(new RegExp("svg:not\\(:root\\)\\.".concat(f.FontAwesomeConfig.replacementClass))))}));function n(e,t){var n=l.createElement("iframe");n.setAttribute("style","visibility: hidden; position: absolute; height: 0; width: 0;");var o="fa-test-icon-"+t,r=l.createElement("i");r.setAttribute("class","fa fa-coffee"),r.setAttribute("id",o);var i=l.createElement("script");i.setAttribute("id",v);var c="file://"===f.location.origin?"*":f.location.origin;i.innerText="(".concat(function(e,t,n,o){parent.FontAwesomeDetection.__pollUntil({fn:function(){var e=document.getElementById(t),n=window.getComputedStyle(e).getPropertyValue("font-family");return!(!n.match(/FontAwesome/)&&!n.match(/Font Awesome [56]/))}}).then((function(){var t=document.getElementById(e);parent.postMessage({type:"fontawesome-conflict",technology:"webfont",href:t.href,innerText:t.innerText,tagName:t.tagName,md5:n},o)})).catch((function(t){var r=document.getElementById(e);"timeout"===t?parent.postMessage({type:"no-conflict",technology:"webfont",href:r.src,innerText:r.innerText,tagName:r.tagName,md5:n},o):console.error(t)}))}.toString(),")('").concat(w,"', '").concat(o||"foo","', '").concat(t,"', '").concat(c,"');"),n.onload=function(){n.contentWindow.addEventListener("error",E,!0),n.contentDocument.head.appendChild(i),n.contentDocument.head.appendChild(e),n.contentDocument.body.appendChild(r)},g((function(){return l.body.appendChild(n)}))}for(var o={},r=0;r<e.length;r++){var i=l.createElement("link");i.setAttribute("id",w),i.setAttribute("href",e[r].href),i.setAttribute("rel",e[r].rel);var c=b(e[r]);i.setAttribute(A,c),o[c]=e[r],n(i,c)}for(var a=0;a<t.length;a++){var s=l.createElement("style");s.setAttribute("id",w);var u=b(t[a]);s.setAttribute(A,u),s.innerText=t[a].innerText,o[u]=t[a],n(s,u)}return o}function C(e){for(var t=Array.from(l.scripts).filter((function(t){return!t.hasAttribute(x)&&t!==e})),n={},o=function(e){var o=l.createElement("iframe");o.setAttribute("style","display:none;");var r=l.createElement("script");r.setAttribute("id",w);var i=b(t[e]);r.setAttribute(A,i),n[i]=t[e],""!==t[e].src&&(r.src=t[e].src),""!==t[e].innerText&&(r.innerText=t[e].innerText),r.async=!0;var c=l.createElement("script");c.setAttribute("id",v);var a="file://"===f.location.origin?"*":f.location.origin;c.innerText="(".concat(function(e,t,n){parent.FontAwesomeDetection.__pollUntil({fn:function(){return!!window.FontAwesomeConfig||!!window.FontAwesomeKitConfig}}).then((function(){var o=document.getElementById(e);parent.postMessage({type:"fontawesome-conflict",technology:"js",src:o.src,innerText:o.innerText,tagName:o.tagName,md5:t},n)})).catch((function(o){var r=document.getElementById(e);"timeout"===o?parent.postMessage({type:"no-conflict",src:r.src,innerText:r.innerText,tagName:r.tagName,md5:t},n):console.error(o)}))}.toString(),")('").concat(w,"', '").concat(i,"', '").concat(a,"');"),o.onload=function(){o.contentWindow.addEventListener("error",E,!0),o.contentDocument.head.appendChild(c),o.contentDocument.head.appendChild(r)},g((function(){return l.body.appendChild(o)}))},r=0;r<t.length;r++)o(r);return n}function j(e){var t=e.nodesTested,n=e.nodesFound;f.FontAwesomeDetection=f.FontAwesomeDetection||{},f.FontAwesomeDetection.nodesTested=t,f.FontAwesomeDetection.nodesFound=n,f.FontAwesomeDetection.detectionDone=!0}var S=f.FontAwesomeDetection||{},N={report:function(e){var t=e.nodesTested,n=e.nodesFound,o={};for(var r in n)t.conflict[r]||t.noConflict[r]||(o[r]=n[r]);var i=Object.keys(t.conflict).length;if(i>0){console.info("%cConflict".concat(i>1?"s":""," found:"),"color: darkred; font-size: large");var c={};for(var a in t.conflict){var s=t.conflict[a];c[a]={tagName:s.tagName,"src/href":s.src||s.href||"n/a","innerText excerpt":s.innerText&&""!==s.innerText?s.innerText.slice(0,200)+"...":"(empty)"}}console.table(c)}var f=Object.keys(t.noConflict).length;if(f>0){console.info("%cNo conflict".concat(f>1?"s":""," found with ").concat(1===f?"this":"these",":"),"color: green; font-size: large");var l={};for(var u in t.noConflict){var d=t.noConflict[u];l[u]={tagName:d.tagName,"src/href":d.src||d.href||"n/a","innerText excerpt":d.innerText&&""!==d.innerText?d.innerText.slice(0,200)+"...":"(empty)"}}console.table(l)}var m=Object.keys(o).length;if(m>0){console.info("%cLeftovers--we timed out before collecting test results for ".concat(1===m?"this":"these",":"),"color: blue; font-size: large");var p={};for(var g in o){var h=o[g];p[g]={tagName:h.tagName,"src/href":h.src||h.href||"n/a","innerText excerpt":h.innerText&&""!==h.innerText?h.innerText.slice(0,200)+"...":"(empty)"}}console.table(p)}},timeout:+(l.currentScript.getAttribute(T)||"2000"),resultsCollectionMaxWait:+(l.currentScript.getAttribute(D)||"5000")},k=t(t(t({},N),S),{},{__pollUntil:O,md5ForNode:b,detectionDone:!1,nodesTested:null,nodesFound:null});f.FontAwesomeDetection=k;var M,P=function(){try{return"production"===process.env.NODE_ENV}catch(e){return!1}}(),I=[1,2,3,4,5,6,7,8,9,10],W=I.concat([11,12,13,14,15,16,17,18,19,20]),B="duotone-group",L="swap-opacity",z="primary",_="secondary";[].concat((M=Object.keys({solid:"fas",regular:"far",light:"fal",thin:"fat",duotone:"fad",brands:"fab",kit:"fak"}),function(e){if(Array.isArray(e))return r(e)}(M)||function(e){if("undefined"!=typeof Symbol&&null!=e[Symbol.iterator]||null!=e["@@iterator"])return Array.from(e)}(M)||function(e,t){if(e){if("string"==typeof e)return r(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?r(e,t):void 0}}(M)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()),["2xs","xs","sm","lg","xl","2xl","beat","border","fade","beat-fade","bounce","flip-both","flip-horizontal","flip-vertical","flip","fw","inverse","layers-counter","layers-text","layers","li","pull-left","pull-right","pulse","rotate-180","rotate-270","rotate-90","rotate-by","shake","spin-pulse","spin-reverse","spin","stack-1x","stack-2x","stack","ul",B,L,z,_]).concat(I.map((function(e){return"".concat(e,"x")}))).concat(W.map((function(e){return"w-".concat(e)})));!function(e){try{for(var t=arguments.length,n=new Array(t>1?t-1:0),o=1;o<t;o++)n[o-1]=arguments[o];e.apply(void 0,n)}catch(e){if(!P)throw e}}((function(){u&&d&&function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:function(){},n={conflict:{},noConflict:{}};f.onmessage=function(e){"file://"!==f.location.origin&&e.origin!==f.location.origin||e&&e.data&&("fontawesome-conflict"===e.data.type?n.conflict[e.data.md5]=e.data:"no-conflict"===e.data.type&&(n.noConflict[e.data.md5]=e.data))};var o=C(l.currentScript),r=F(),i=t(t({},o),r),c=Object.keys(o).length+Object.keys(r).length,a=f.FontAwesomeDetection.timeout+f.FontAwesomeDetection.resultsCollectionMaxWait;console.group("Font Awesome Detector"),0===c?(console.info("%cAll Good!","color: green; font-size: large"),console.info("We didn't find anything that needs testing for conflicts. Ergo, no conflicts.")):(console.info("Testing ".concat(c," possible conflicts.")),console.info("We'll wait about ".concat(Math.round(f.FontAwesomeDetection.timeout/10)/100," seconds while testing these and\n")+"then up to another ".concat(Math.round(f.FontAwesomeDetection.resultsCollectionMaxWait/10)/100," to allow the browser time\n")+"to accumulate the results. But we'll probably be outta here way before then.\n\n"),console.info("You can adjust those durations by assigning values to these attributes on the <script> element that loads this detection:"),console.info("\t%c".concat(T,"%c: milliseconds to wait for each test before deciding whether it's a conflict."),"font-weight: bold;","font-size: normal;"),console.info("\t%c".concat(D,"%c: milliseconds to wait for the browser to accumulate test results before giving up."),"font-weight: bold;","font-size: normal;"),O({maxDuration:a,showProgress:!0,progressIndicator:"waiting...",fn:function(){return Object.keys(n.conflict).length+Object.keys(n.noConflict).length>=c}}).then((function(){console.info("DONE!"),j({nodesTested:n,nodesFound:i}),e({nodesTested:n,nodesFound:i}),console.groupEnd()})).catch((function(t){"timeout"===t?(console.info("TIME OUT! We waited until we got tired. Here's what we found:"),j({nodesTested:n,nodesFound:i}),e({nodesTested:n,nodesFound:i})):(console.info("Whoops! We hit an error:",t),console.info("Here's what we'd found up until that error:"),j({nodesTested:n,nodesFound:i}),e({nodesTested:n,nodesFound:i})),console.groupEnd()})))}(window.FontAwesomeDetection.report)}))}));

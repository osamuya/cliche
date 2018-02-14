!function(t){if("object"==typeof exports&&"undefined"!=typeof module)module.exports=t();else if("function"==typeof define&&define.amd)define([],t);else{var e;e="undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self?self:this,e.superagent=t()}}(function(){return function t(e,r,i){function s(o,a){if(!r[o]){if(!e[o]){var u="function"==typeof require&&require;if(!a&&u)return u(o,!0);if(n)return n(o,!0);var h=new Error("Cannot find module '"+o+"'");throw h.code="MODULE_NOT_FOUND",h}var p=r[o]={exports:{}};e[o][0].call(p.exports,function(t){var r=e[o][1][t];return s(r?r:t)},p,p.exports,t,e,r,i)}return r[o].exports}for(var n="function"==typeof require&&require,o=0;o<i.length;o++)s(i[o]);return s}({1:[function(t,e,r){function i(){this._defaults=[]}["use","on","once","set","query","type","accept","auth","withCredentials","sortQuery","retry","ok","redirects","timeout","buffer","serialize","parse","ca","key","pfx","cert"].forEach(function(t){i.prototype[t]=function(){return this._defaults.push({fn:t,arguments:arguments}),this}}),i.prototype._setDefaults=function(t){this._defaults.forEach(function(e){t[e.fn].apply(t,e.arguments)})},e.exports=i},{}],2:[function(t,e,r){"use strict";function i(t){return null!==t&&"object"==typeof t}e.exports=i},{}],3:[function(t,e,r){function i(){}function s(t){if(!y(t))return t;var e=[];for(var r in t)n(e,r,t[r]);return e.join("&")}function n(t,e,r){if(null!=r)if(Array.isArray(r))r.forEach(function(r){n(t,e,r)});else if(y(r))for(var i in r)n(t,e+"["+i+"]",r[i]);else t.push(encodeURIComponent(e)+"="+encodeURIComponent(r));else null===r&&t.push(encodeURIComponent(e))}function o(t){for(var e,r,i={},s=t.split("&"),n=0,o=s.length;n<o;++n)e=s[n],r=e.indexOf("="),r==-1?i[decodeURIComponent(e)]="":i[decodeURIComponent(e.slice(0,r))]=decodeURIComponent(e.slice(r+1));return i}function a(t){for(var e,r,i,s,n=t.split(/\r?\n/),o={},a=0,u=n.length;a<u;++a)r=n[a],e=r.indexOf(":"),e!==-1&&(i=r.slice(0,e).toLowerCase(),s=w(r.slice(e+1)),o[i]=s);return o}function u(t){return/[\/+]json($|[^-\w])/.test(t)}function h(t){this.req=t,this.xhr=this.req.xhr,this.text="HEAD"!=this.req.method&&(""===this.xhr.responseType||"text"===this.xhr.responseType)||"undefined"==typeof this.xhr.responseType?this.xhr.responseText:null,this.statusText=this.req.xhr.statusText;var e=this.xhr.status;1223===e&&(e=204),this._setStatusProperties(e),this.header=this.headers=a(this.xhr.getAllResponseHeaders()),this.header["content-type"]=this.xhr.getResponseHeader("content-type"),this._setHeaderProperties(this.header),null===this.text&&t._responseType?this.body=this.xhr.response:this.body="HEAD"!=this.req.method?this._parseBody(this.text?this.text:this.xhr.response):null}function p(t,e){var r=this;this._query=this._query||[],this.method=t,this.url=e,this.header={},this._header={},this.on("end",function(){var t=null,e=null;try{e=new h(r)}catch(e){return t=new Error("Parser is unable to parse the response"),t.parse=!0,t.original=e,r.xhr?(t.rawResponse="undefined"==typeof r.xhr.responseType?r.xhr.responseText:r.xhr.response,t.status=r.xhr.status?r.xhr.status:null,t.statusCode=t.status):(t.rawResponse=null,t.status=null),r.callback(t)}r.emit("response",e);var i;try{r._isResponseOK(e)||(i=new Error(e.statusText||"Unsuccessful HTTP response"))}catch(t){i=t}i?(i.original=t,i.response=e,i.status=e.status,r.callback(i,e)):r.callback(null,e)})}function c(t,e,r){var i=b("DELETE",t);return"function"==typeof e&&(r=e,e=null),e&&i.send(e),r&&i.end(r),i}var l;"undefined"!=typeof window?l=window:"undefined"!=typeof self?l=self:(console.warn("Using browser-only version of superagent in non-browser environment"),l=this);var f=t("component-emitter"),d=t("./request-base"),y=t("./is-object"),_=t("./response-base"),m=t("./agent-base"),b=r=e.exports=function(t,e){return"function"==typeof e?new r.Request("GET",t).end(e):1==arguments.length?new r.Request("GET",t):new r.Request(t,e)};r.Request=p,b.getXHR=function(){if(!(!l.XMLHttpRequest||l.location&&"file:"==l.location.protocol&&l.ActiveXObject))return new XMLHttpRequest;try{return new ActiveXObject("Microsoft.XMLHTTP")}catch(t){}try{return new ActiveXObject("Msxml2.XMLHTTP.6.0")}catch(t){}try{return new ActiveXObject("Msxml2.XMLHTTP.3.0")}catch(t){}try{return new ActiveXObject("Msxml2.XMLHTTP")}catch(t){}throw Error("Browser-only version of superagent could not find XHR")};var w="".trim?function(t){return t.trim()}:function(t){return t.replace(/(^\s*|\s*$)/g,"")};b.serializeObject=s,b.parseString=o,b.types={html:"text/html",json:"application/json",xml:"text/xml",urlencoded:"application/x-www-form-urlencoded",form:"application/x-www-form-urlencoded","form-data":"application/x-www-form-urlencoded"},b.serialize={"application/x-www-form-urlencoded":s,"application/json":JSON.stringify},b.parse={"application/x-www-form-urlencoded":o,"application/json":JSON.parse},_(h.prototype),h.prototype._parseBody=function(t){var e=b.parse[this.type];return this.req._parser?this.req._parser(this,t):(!e&&u(this.type)&&(e=b.parse["application/json"]),e&&t&&(t.length||t instanceof Object)?e(t):null)},h.prototype.toError=function(){var t=this.req,e=t.method,r=t.url,i="cannot "+e+" "+r+" ("+this.status+")",s=new Error(i);return s.status=this.status,s.method=e,s.url=r,s},b.Response=h,f(p.prototype),d(p.prototype),p.prototype.type=function(t){return this.set("Content-Type",b.types[t]||t),this},p.prototype.accept=function(t){return this.set("Accept",b.types[t]||t),this},p.prototype.auth=function(t,e,r){1===arguments.length&&(e=""),"object"==typeof e&&null!==e&&(r=e,e=""),r||(r={type:"function"==typeof btoa?"basic":"auto"});var i=function(t){if("function"==typeof btoa)return btoa(t);throw new Error("Cannot use basic auth, btoa is not a function")};return this._auth(t,e,r,i)},p.prototype.query=function(t){return"string"!=typeof t&&(t=s(t)),t&&this._query.push(t),this},p.prototype.attach=function(t,e,r){if(e){if(this._data)throw Error("superagent can't mix .send() and .attach()");this._getFormData().append(t,e,r||e.name)}return this},p.prototype._getFormData=function(){return this._formData||(this._formData=new l.FormData),this._formData},p.prototype.callback=function(t,e){if(this._shouldRetry(t,e))return this._retry();var r=this._callback;this.clearTimeout(),t&&(this._maxRetries&&(t.retries=this._retries-1),this.emit("error",t)),r(t,e)},p.prototype.crossDomainError=function(){var t=new Error("Request has been terminated\nPossible causes: the network is offline, Origin is not allowed by Access-Control-Allow-Origin, the page is being unloaded, etc.");t.crossDomain=!0,t.status=this.status,t.method=this.method,t.url=this.url,this.callback(t)},p.prototype.buffer=p.prototype.ca=p.prototype.agent=function(){return console.warn("This is not supported in browser version of superagent"),this},p.prototype.pipe=p.prototype.write=function(){throw Error("Streaming is not supported in browser version of superagent")},p.prototype._isHost=function(t){return t&&"object"==typeof t&&!Array.isArray(t)&&"[object Object]"!==Object.prototype.toString.call(t)},p.prototype.end=function(t){return this._endCalled&&console.warn("Warning: .end() was called twice. This is not supported in superagent"),this._endCalled=!0,this._callback=t||i,this._finalizeQueryString(),this._end()},p.prototype._end=function(){var t=this,e=this.xhr=b.getXHR(),r=this._formData||this._data;this._setTimeouts(),e.onreadystatechange=function(){var r=e.readyState;if(r>=2&&t._responseTimeoutTimer&&clearTimeout(t._responseTimeoutTimer),4==r){var i;try{i=e.status}catch(t){i=0}if(!i){if(t.timedout||t._aborted)return;return t.crossDomainError()}t.emit("end")}};var i=function(e,r){r.total>0&&(r.percent=r.loaded/r.total*100),r.direction=e,t.emit("progress",r)};if(this.hasListeners("progress"))try{e.onprogress=i.bind(null,"download"),e.upload&&(e.upload.onprogress=i.bind(null,"upload"))}catch(t){}try{this.username&&this.password?e.open(this.method,this.url,!0,this.username,this.password):e.open(this.method,this.url,!0)}catch(t){return this.callback(t)}if(this._withCredentials&&(e.withCredentials=!0),!this._formData&&"GET"!=this.method&&"HEAD"!=this.method&&"string"!=typeof r&&!this._isHost(r)){var s=this._header["content-type"],n=this._serializer||b.serialize[s?s.split(";")[0]:""];!n&&u(s)&&(n=b.serialize["application/json"]),n&&(r=n(r))}for(var o in this.header)null!=this.header[o]&&this.header.hasOwnProperty(o)&&e.setRequestHeader(o,this.header[o]);return this._responseType&&(e.responseType=this._responseType),this.emit("request",this),e.send("undefined"!=typeof r?r:null),this},b.agent=function(){return new m},["GET","POST","OPTIONS","PATCH","PUT","DELETE"].forEach(function(t){m.prototype[t.toLowerCase()]=function(e,r){var i=new b.Request(t,e);return this._setDefaults(i),r&&i.end(r),i}}),m.prototype.del=m.prototype.delete,b.get=function(t,e,r){var i=b("GET",t);return"function"==typeof e&&(r=e,e=null),e&&i.query(e),r&&i.end(r),i},b.head=function(t,e,r){var i=b("HEAD",t);return"function"==typeof e&&(r=e,e=null),e&&i.query(e),r&&i.end(r),i},b.options=function(t,e,r){var i=b("OPTIONS",t);return"function"==typeof e&&(r=e,e=null),e&&i.send(e),r&&i.end(r),i},b.del=c,b.delete=c,b.patch=function(t,e,r){var i=b("PATCH",t);return"function"==typeof e&&(r=e,e=null),e&&i.send(e),r&&i.end(r),i},b.post=function(t,e,r){var i=b("POST",t);return"function"==typeof e&&(r=e,e=null),e&&i.send(e),r&&i.end(r),i},b.put=function(t,e,r){var i=b("PUT",t);return"function"==typeof e&&(r=e,e=null),e&&i.send(e),r&&i.end(r),i}},{"./agent-base":1,"./is-object":2,"./request-base":4,"./response-base":5,"component-emitter":7}],4:[function(t,e,r){"use strict";function i(t){if(t)return s(t)}function s(t){for(var e in i.prototype)t[e]=i.prototype[e];return t}var n=t("./is-object");e.exports=i,i.prototype.clearTimeout=function(){return clearTimeout(this._timer),clearTimeout(this._responseTimeoutTimer),delete this._timer,delete this._responseTimeoutTimer,this},i.prototype.parse=function(t){return this._parser=t,this},i.prototype.responseType=function(t){return this._responseType=t,this},i.prototype.serialize=function(t){return this._serializer=t,this},i.prototype.timeout=function(t){if(!t||"object"!=typeof t)return this._timeout=t,this._responseTimeout=0,this;for(var e in t)switch(e){case"deadline":this._timeout=t.deadline;break;case"response":this._responseTimeout=t.response;break;default:console.warn("Unknown timeout option",e)}return this},i.prototype.retry=function(t,e){return 0!==arguments.length&&t!==!0||(t=1),t<=0&&(t=0),this._maxRetries=t,this._retries=0,this._retryCallback=e,this};var o=["ECONNRESET","ETIMEDOUT","EADDRINFO","ESOCKETTIMEDOUT"];i.prototype._shouldRetry=function(t,e){if(!this._maxRetries||this._retries++>=this._maxRetries)return!1;if(this._retryCallback)try{var r=this._retryCallback(t,e);if(r===!0)return!0;if(r===!1)return!1}catch(t){console.error(t)}if(e&&e.status&&e.status>=500&&501!=e.status)return!0;if(t){if(t.code&&~o.indexOf(t.code))return!0;if(t.timeout&&"ECONNABORTED"==t.code)return!0;if(t.crossDomain)return!0}return!1},i.prototype._retry=function(){return this.clearTimeout(),this.req&&(this.req=null,this.req=this.request()),this._aborted=!1,this.timedout=!1,this._end()},i.prototype.then=function(t,e){if(!this._fullfilledPromise){var r=this;this._endCalled&&console.warn("Warning: superagent request was sent twice, because both .end() and .then() were called. Never call .end() if you use promises"),this._fullfilledPromise=new Promise(function(t,e){r.end(function(r,i){r?e(r):t(i)})})}return this._fullfilledPromise.then(t,e)},i.prototype.catch=function(t){return this.then(void 0,t)},i.prototype.use=function(t){return t(this),this},i.prototype.ok=function(t){if("function"!=typeof t)throw Error("Callback required");return this._okCallback=t,this},i.prototype._isResponseOK=function(t){return!!t&&(this._okCallback?this._okCallback(t):t.status>=200&&t.status<300)},i.prototype.get=function(t){return this._header[t.toLowerCase()]},i.prototype.getHeader=i.prototype.get,i.prototype.set=function(t,e){if(n(t)){for(var r in t)this.set(r,t[r]);return this}return this._header[t.toLowerCase()]=e,this.header[t]=e,this},i.prototype.unset=function(t){return delete this._header[t.toLowerCase()],delete this.header[t],this},i.prototype.field=function(t,e){if(null===t||void 0===t)throw new Error(".field(name, val) name can not be empty");if(this._data&&console.error(".field() can't be used if .send() is used. Please use only .send() or only .field() & .attach()"),n(t)){for(var r in t)this.field(r,t[r]);return this}if(Array.isArray(e)){for(var i in e)this.field(t,e[i]);return this}if(null===e||void 0===e)throw new Error(".field(name, val) val can not be empty");return"boolean"==typeof e&&(e=""+e),this._getFormData().append(t,e),this},i.prototype.abort=function(){return this._aborted?this:(this._aborted=!0,this.xhr&&this.xhr.abort(),this.req&&this.req.abort(),this.clearTimeout(),this.emit("abort"),this)},i.prototype._auth=function(t,e,r,i){switch(r.type){case"basic":this.set("Authorization","Basic "+i(t+":"+e));break;case"auto":this.username=t,this.password=e;break;case"bearer":this.set("Authorization","Bearer "+t)}return this},i.prototype.withCredentials=function(t){return void 0==t&&(t=!0),this._withCredentials=t,this},i.prototype.redirects=function(t){return this._maxRedirects=t,this},i.prototype.maxResponseSize=function(t){if("number"!=typeof t)throw TypeError("Invalid argument");return this._maxResponseSize=t,this},i.prototype.toJSON=function(){return{method:this.method,url:this.url,data:this._data,headers:this._header}},i.prototype.send=function(t){var e=n(t),r=this._header["content-type"];if(this._formData&&console.error(".send() can't be used if .attach() or .field() is used. Please use only .send() or only .field() & .attach()"),e&&!this._data)Array.isArray(t)?this._data=[]:this._isHost(t)||(this._data={});else if(t&&this._data&&this._isHost(this._data))throw Error("Can't merge these send calls");if(e&&n(this._data))for(var i in t)this._data[i]=t[i];else"string"==typeof t?(r||this.type("form"),r=this._header["content-type"],"application/x-www-form-urlencoded"==r?this._data=this._data?this._data+"&"+t:t:this._data=(this._data||"")+t):this._data=t;return!e||this._isHost(t)?this:(r||this.type("json"),this)},i.prototype.sortQuery=function(t){return this._sort="undefined"==typeof t||t,this},i.prototype._finalizeQueryString=function(){var t=this._query.join("&");if(t&&(this.url+=(this.url.indexOf("?")>=0?"&":"?")+t),this._query.length=0,this._sort){var e=this.url.indexOf("?");if(e>=0){var r=this.url.substring(e+1).split("&");"function"==typeof this._sort?r.sort(this._sort):r.sort(),this.url=this.url.substring(0,e)+"?"+r.join("&")}}},i.prototype._appendQueryString=function(){console.trace("Unsupported")},i.prototype._timeoutError=function(t,e,r){if(!this._aborted){var i=new Error(t+e+"ms exceeded");i.timeout=e,i.code="ECONNABORTED",i.errno=r,this.timedout=!0,this.abort(),this.callback(i)}},i.prototype._setTimeouts=function(){var t=this;this._timeout&&!this._timer&&(this._timer=setTimeout(function(){t._timeoutError("Timeout of ",t._timeout,"ETIME")},this._timeout)),this._responseTimeout&&!this._responseTimeoutTimer&&(this._responseTimeoutTimer=setTimeout(function(){t._timeoutError("Response timeout of ",t._responseTimeout,"ETIMEDOUT")},this._responseTimeout))}},{"./is-object":2}],5:[function(t,e,r){"use strict";function i(t){if(t)return s(t)}function s(t){for(var e in i.prototype)t[e]=i.prototype[e];return t}var n=t("./utils");e.exports=i,i.prototype.get=function(t){return this.header[t.toLowerCase()]},i.prototype._setHeaderProperties=function(t){var e=t["content-type"]||"";this.type=n.type(e);var r=n.params(e);for(var i in r)this[i]=r[i];this.links={};try{t.link&&(this.links=n.parseLinks(t.link))}catch(t){}},i.prototype._setStatusProperties=function(t){var e=t/100|0;this.status=this.statusCode=t,this.statusType=e,this.info=1==e,this.ok=2==e,this.redirect=3==e,this.clientError=4==e,this.serverError=5==e,this.error=(4==e||5==e)&&this.toError(),this.accepted=202==t,this.noContent=204==t,this.badRequest=400==t,this.unauthorized=401==t,this.notAcceptable=406==t,this.forbidden=403==t,this.notFound=404==t}},{"./utils":6}],6:[function(t,e,r){"use strict";r.type=function(t){return t.split(/ *; */).shift()},r.params=function(t){return t.split(/ *; */).reduce(function(t,e){var r=e.split(/ *= */),i=r.shift(),s=r.shift();return i&&s&&(t[i]=s),t},{})},r.parseLinks=function(t){return t.split(/ *, */).reduce(function(t,e){var r=e.split(/ *; */),i=r[0].slice(1,-1),s=r[1].split(/ *= */)[1].slice(1,-1);return t[s]=i,t},{})},r.cleanHeader=function(t,e){return delete t["content-type"],delete t["content-length"],delete t["transfer-encoding"],delete t.host,e&&(delete t.authorization,delete t.cookie),t}},{}],7:[function(t,e,r){function i(t){if(t)return s(t)}function s(t){for(var e in i.prototype)t[e]=i.prototype[e];return t}"undefined"!=typeof e&&(e.exports=i),i.prototype.on=i.prototype.addEventListener=function(t,e){return this._callbacks=this._callbacks||{},(this._callbacks["$"+t]=this._callbacks["$"+t]||[]).push(e),this},i.prototype.once=function(t,e){function r(){this.off(t,r),e.apply(this,arguments)}return r.fn=e,this.on(t,r),this},i.prototype.off=i.prototype.removeListener=i.prototype.removeAllListeners=i.prototype.removeEventListener=function(t,e){if(this._callbacks=this._callbacks||{},0==arguments.length)return this._callbacks={},this;var r=this._callbacks["$"+t];if(!r)return this;if(1==arguments.length)return delete this._callbacks["$"+t],this;for(var i,s=0;s<r.length;s++)if(i=r[s],i===e||i.fn===e){r.splice(s,1);break}return this},i.prototype.emit=function(t){this._callbacks=this._callbacks||{};var e=[].slice.call(arguments,1),r=this._callbacks["$"+t];if(r){r=r.slice(0);for(var i=0,s=r.length;i<s;++i)r[i].apply(this,e)}return this},i.prototype.listeners=function(t){return this._callbacks=this._callbacks||{},this._callbacks["$"+t]||[]},i.prototype.hasListeners=function(t){return!!this.listeners(t).length}},{}]},{},[3])(3)});
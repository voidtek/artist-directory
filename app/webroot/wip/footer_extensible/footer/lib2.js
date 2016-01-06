
function $dom(id){
    try {
        return document.getElementById(id) ? document.getElementById(id) : parent.document.getElementById(id) ? parent.document.getElementById(id) : null;
    } 
    catch (e) {
        pmWarn(e);
        return false;
    }
}

function $class(id, pos){
    try {
        var classFunction = document.getElementsByClassName || parent.document.getElementsByClassName || false;
        if (!pos) 
            pos = 0;
        return classFunction ? document.getElementsByClassName(id)[pos] : pmGetElementsByClassName(id)[pos];
    } 
    catch (e) {
        pmWarn(e);
        return false;
    }
}

function $tag(id, pos){
    try {
        if (!pos) 
            pos = 0;
        return document.getElementsByTagName(id)[pos] ? document.getElementsByTagName(id)[pos] : parent.document.getElementsByTagName(id)[pos] ? parent.document.getElementsByTagName(id)[pos] : null;
    } 
    catch (e) {
        pmWarn(e);
        return false;
    }
}

function $flash(movieName, action, trial){
    pmLog("trial :" + trial);
    if (!trial) {
        var trial = 1;
    }
    else {
        trial = trial + 1;
    }
    var flashObj = parent.window[movieName] || parent.document[movieName] || window[movieName] || document[movieName] || false;
    if (flashObj && flashObj.videoControl && action) {
        if (typeof action === 'object') 
            return flashObj.videoControl(action[0], action[1]);
        else 
            return flashObj.videoControl(action);
    }
    else {
        pmWarn(movieName + " - " + action + ": Impossible to send action to flash - " + trial);
        if (trial < 4) 
            if (typeof action === 'object') 
                setTimeout("$flash('" + movieName + "'," + action.toSource() + "," + trial + ")", 400);
            else 
                setTimeout("$flash('" + movieName + "','" + action + "'," + trial + ")", 400);
        return false;
    }
};
function $$videoLoad(movieName, action, trial){
    pmLog("trial :" + trial);
    if (!trial) {
        var trial = 1;
    }
    else {
        trial = trial + 1;
    }
    var flashObj = parent.window[movieName] || parent.document[movieName] || window[movieName] || document[movieName] || false;
    if (flashObj && flashObj.videoLoad && action) {
        if (typeof action === 'object') 
            return flashObj.videoLoad(action[0], action[1]);
        else 
            return flashObj.videoLoad(action);
    }
    else {
        pmWarn(movieName + " - " + action + ": Impossible to send action to flash - " + trial);
        if (trial < 4) {
            if (typeof action === 'object') 
                setTimeout("$$videoLoad('" + movieName + "'," + action.toSource() + "," + trial + ")", 400);
            else 
                setTimeout("$$videoLoad('" + movieName + "','" + action + "'," + trial + ")", 400);
        }
        return false;
    }
}

function controlForm(action){
    var x;
    var msie6 = /MSIE 6/i.test(navigator.userAgent);
    if (document.getElementsByTagName && msie6) {
        if (action == "show") {
            x = document.getElementsByTagName("select");
            for (i = 0; i < x.length; i++) {
                x[i].style.visibility = 'visible';
            }
        }
        else 
            if (action == "hide") {
                x = document.getElementsByTagName("select");
                for (i = 0; i < x.length; i++) {
                    x[i].style.visibility = 'hidden';
                }
            }
    }
}

var pmGetElementsByClassName = function(className, tag, elm){
    if (document.getElementsByClassName) {
        getElementsByClassName = function(className, tag, elm){
            elm = elm || document;
            var elements = elm.getElementsByClassName(className), nodeName = (tag) ? new RegExp("\\b" + tag + "\\b", "i") : null, returnElements = [], current;
            for (var i = 0, il = elements.length; i < il; i += 1) {
                current = elements[i];
                if (!nodeName || nodeName.test(current.nodeName)) {
                    returnElements.push(current);
                }
            }
            return returnElements;
        };
    }
    else 
        if (document.evaluate) {
            getElementsByClassName = function(className, tag, elm){
                tag = tag || "*";
                elm = elm || document;
                var classes = className.split(" "), classesToCheck = "", xhtmlNamespace = "http://www.w3.org/1999/xhtml", namespaceResolver = (document.documentElement.namespaceURI === xhtmlNamespace) ? xhtmlNamespace : null, returnElements = [], elements, node;
                for (var j = 0, jl = classes.length; j < jl; j += 1) {
                    classesToCheck += "[contains(concat(' ', @class, ' '), ' " + classes[j] + " ')]";
                }
                try {
                    elements = document.evaluate(".//" + tag + classesToCheck, elm, namespaceResolver, 0, null);
                } 
                catch (e) {
                    elements = document.evaluate(".//" + tag + classesToCheck, elm, null, 0, null);
                }
                while ((node = elements.iterateNext())) {
                    returnElements.push(node);
                }
                return returnElements;
            };
        }
        else {
            getElementsByClassName = function(className, tag, elm){
                tag = tag || "*";
                elm = elm || document;
                var classes = className.split(" "), classesToCheck = [], elements = (tag === "*" && elm.all) ? elm.all : elm.getElementsByTagName(tag), current, returnElements = [], match;
                for (var k = 0, kl = classes.length; k < kl; k += 1) {
                    classesToCheck.push(new RegExp("(^|\\s)" + classes[k] + "(\\s|$)"));
                }
                for (var l = 0, ll = elements.length; l < ll; l += 1) {
                    current = elements[l];
                    match = false;
                    for (var m = 0, ml = classesToCheck.length; m < ml; m += 1) {
                        match = classesToCheck[m].test(current.className);
                        if (!match) {
                            break;
                        }
                    }
                    if (match) {
                        returnElements.push(current);
                    }
                }
                return returnElements;
            };
        }
    return getElementsByClassName(className, tag, elm);
};



function pmSendEvent(eventId){
    try {
        var eventId = event[1];
        var custom3 = event[1] || pmData.c3;
        if (pmNamedEvents && pmNamedEvents[eventId]) {
            if (!pmNamedEvents[eventId].unique || isNaN(pmNamedEvents[eventId].called)) {
                if (!isNaN(pmNamedEvents[eventId].called)) 
                    pmNamedEvents[eventId].called += 1;
                else 
                    pmNamedEvents[eventId].called = 1;
                var ord = Math.random() * 10000000000000;
                var doPing = new Image();
                doPing.src = 'http://rm.piximedia.fr/v2/track2.php?custom3=' + custom3 + '&custom2=' + pmData.c2 + '&custom1=' + pmData.c1 + '&creativeid=' + pmData.creativeId + '&campaignid=' + pmData.campaignId + '&event=' + pmNamedEvents[eventId].id + '&ord=' + ord;
                pmLog("Tracking Event : " + pmEvents[eventId].name + "(" + eventId + ") - Total count : " + pmEvents[eventId].called);
            }
            else {
                pmWarn("Ignore Event : " + pmEvents[eventId].name + "(" + eventId + ") - Total count : " + pmEvents[eventId].called);
            }
        }
        else {
            pmWarn("Tracking Event : Impossible to find event - id = " + eventId);
        }
    } 
    catch (e) {
        pmWarn(e);
        return false;
    }
}

function pmSendNamedEvent(event){
    var eventId = event[1];
    var custom3 = event[2] || pmData.c3;
    if (pmNamedEvents && pmNamedEvents[eventId]) {
        if (!pmNamedEvents[eventId].unique || isNaN(pmNamedEvents[eventId].called)) {
            if (!isNaN(pmNamedEvents[eventId].called)) 
                pmNamedEvents[eventId].called += 1;
            else 
                pmNamedEvents[eventId].called = 1;
            var ord = Math.random() * 10000000000000;
            var doPing = new Image();
            // doPing.src = 'http://rm.piximedia.fr/v2/track2.php?custom3=' + custom3 + '&custom2=' + pmData.c2 + '&custom1=' + pmData.c1 + '&creativeid=' + pmData.creativeId + '&campaignid=' + pmData.campaignId + '&event=' + pmNamedEvents[eventId].id + '&ord=' + ord;
            pmLog("Tracking Event : " + eventId + "(" + custom3 + ") - Total count : " + pmNamedEvents[eventId].called);
        }
        else {
            pmWarn("Ignore Event : " + eventId + "(" + custom3 + ") - Total count : " + pmNamedEvents[eventId].called);
        }
    }
    else {
        pmWarn("Tracking Event : Impossible to find event - Name = " + event[1]);
    }
}

function setStage(step, option){
    try {
		pmLog("setStage : " + step)
		if (step == "tracking") {
			pmLog("setStage (tracking) : " + step + " called");
			pmSendNamedEvent(arguments);
			return true;
		}
        else if (pmCreativeOptions.siteCode[step] && typeof(pmCreativeOptions.siteCode[step]) == "function") {
			
			pmLog("setStage (site level) : " + step + " called");
            if (option) 
                pmCreativeOptions.siteCode[step](option);
            else
                pmCreativeOptions.siteCode[step](); 
        }
        else 
            if (pmCreativeOptions.customCode[step] && typeof(pmCreativeOptions.customCode[step]) == "function") {
		        pmLog("setStage (main level) : " + step + " called");
                if (option) 
                    pmCreativeOptions.customCode[step](option);
                else 
                    pmCreativeOptions.customCode[step]();
            }
            else {
                pmWarn("setStage : " + step + " not found");
            }
    } 
    catch (e) {
        pmWarn("setStage : " + e);
        return false;
    }
}

function pmAddEvent(obj, evType, fn){
    if (obj.addEventListener) {
        obj.addEventListener(evType, fn, false);
        return true;
    }
    else 
        if (obj.attachEvent) {
            var r = obj.attachEvent("on" + evType, fn);
            return r;
        }
        else {
            return false;
        }
}

function $innerInsert(where, el, html){
    try {
        switch (where) {
            case "before":
                where = "afterbegin";
                break;
            case "after":
                where = "beforeend";
                break;
            default:
                throw 'Illegal argument : use before or after -> ' + where;
                break;
        }
        return $insert(where, el, html)
    } 
    catch (e) {
        pmWarn(e);
        return false;
    }
}

function $outerInsert(where, el, html){
    try {
        switch (where) {
            case "before":
                where = "beforebegin";
                break;
            case "after":
                where = "afterend";
                break;
            default:
                throw 'Illegal argument : use before or after -> ' + where;
                break;
        }
        return $insert(where, el, html)
    } 
    catch (e) {
        pmWarn(e);
        return false;
    }
}

function $insert(where, el, html){
    try {
        where = where.toLowerCase();
        if (!el.nodeName) 
            throw 'DOM Node does not exist : "' + el + '"';
        if (el.insertAdjacentHTML) {
            switch (where) {
                case "beforebegin":
                    el.insertAdjacentHTML('BeforeBegin', html);
                    return el.previousSibling;
                case "afterbegin":
                    el.insertAdjacentHTML('AfterBegin', html);
                    return el.firstChild;
                case "beforeend":
                    el.insertAdjacentHTML('BeforeEnd', html);
                    return el.lastChild;
                case "afterend":
                    el.insertAdjacentHTML('AfterEnd', html);
                    return el.nextSibling;
            }
            throw 'Illegal insertion point : "' + where + '"';
        }
        var range = el.ownerDocument.createRange();
        var frag;
        switch (where) {
            case "beforebegin":
                range.setStartBefore(el);
                frag = range.createContextualFragment(html);
                el.parentNode.insertBefore(frag, el);
                return el.previousSibling;
            case "afterbegin":
                if (el.firstChild) {
                    range.setStartBefore(el.firstChild);
                    frag = range.createContextualFragment(html);
                    el.insertBefore(frag, el.firstChild);
                    return el.firstChild;
                }
                else {
                    el.innerHTML = html;
                    return el.firstChild;
                }
            case "beforeend":
                if (el.lastChild) {
                    range.setStartAfter(el.lastChild);
                    frag = range.createContextualFragment(html);
                    el.appendChild(frag);
                    return el.lastChild;
                }
                else {
                    el.innerHTML = html;
                    return el.lastChild;
                }
            case "afterend":
                range.setStartAfter(el);
                frag = range.createContextualFragment(html);
                el.parentNode.insertBefore(frag, el.nextSibling);
                return el.nextSibling;
        }
        throw 'Illegal insertion point : "' + where + '"';
    } 
    catch (e) {
        pmWarn(e);
        return false;
    }
}


function loadCss(location, id, disable){
    var docRoot = parent.document || document;
    if (docRoot.createElement) {
        var newSS = docRoot.createElement('link');
        newSS.rel = 'stylesheet';
        newSS.title = id;
        newSS.id = id;
        newSS.href = pmData["baseUrl"] + pmData["cssFolder"] + location;
        docRoot.getElementsByTagName("head")[0].appendChild(newSS);
        
        if (disable) {
            $dom(id).disabled = true;
        }
        return $dom(id);
    }
}

function $addCssRule(selector, declaration){
    try {
        var msie = getInternetExplorerVersion();
        // create the style node for all browsers
        var docRoot = parent.document || document;
        var style_node = docRoot.createElement("style");
        style_node.setAttribute("type", "text/css");
        style_node.setAttribute("media", "screen");
        // append a rule for good browsers
        if (!msie) {
            style_node.appendChild(docRoot.createTextNode(selector + " {" + declaration + "}"));
        }
        else {
            style_node.innerHTML = selector + " {" + declaration + "}";
        }
        
        // append the style node
        //var newNode = docRoot.getElementsByTagName("head")[0].appendChild(style_node);
        //alert(newNode.innerHTML);
        // use alternative methods for IE
        /*if (msie && docRoot.styleSheets && docRoot.styleSheets.length > 0) {
         var last_style_node = docRoot.styleSheets[docRoot.styleSheets.length - 1];
         if (typeof(last_style_node.addRule) == "object") {
         last_style_node.addRule(selector, declaration);
         }
         }*/
    } 
    catch (e) {
        pmWarn(e);
    }
    
}

function pmLog(msg){
    try {
        console.info(msg);
    } 
    catch (fberror) {
    }
}

function pmWarn(msg){
    try {
        console.warn(msg);
    } 
    catch (fberror) {
    }
}
function pmSetCookie(name, value, expires, path, domain, secure){

    var today = new Date();
    today.setTime(today.getTime());
    if (expires) {
        expires = expires * 1000 * 60;
    }
    var expires_date = new Date(today.getTime() + (expires));
    
    document.cookie = name + "=" + escape(value) +
    ((expires) ? ";expires=" + expires_date.toGMTString() : "") +
    ((path) ? ";path=" + path : "") +
    ((domain) ? ";domain=" + domain : "") +
    ((secure) ? ";secure" : "");
}

function pmGetCookie(check_name){
    // first we'll split this cookie up into name/value pairs
    // note: document.cookie only returns name=value, not the other components
    var a_all_cookies = document.cookie.split(';');
    var a_temp_cookie = '';
    var cookie_name = '';
    var cookie_value = '';
    var b_cookie_found = false; // set boolean t/f default f
    for (i = 0; i < a_all_cookies.length; i++) {
        // now we'll split apart each name=value pair
        a_temp_cookie = a_all_cookies[i].split('=');
        
        
        // and trim left/right whitespace while we're at it
        cookie_name = a_temp_cookie[0].replace(/^\s+|\s+$/g, '');
        
        // if the extracted name matches passed check_name
        if (cookie_name == check_name) {
            b_cookie_found = true;
            // we need to handle case where cookie has no value but exists (no = sign, that is):
            if (a_temp_cookie.length > 1) {
                cookie_value = unescape(a_temp_cookie[1].replace(/^\s+|\s+$/g, ''));
            }
            // note that in cases where cookie is initialized but no value, null is returned
            return cookie_value;
            break;
        }
        a_temp_cookie = null;
        cookie_name = '';
    }
    if (!b_cookie_found) {
        return null;
    }
}

 setStage("init");
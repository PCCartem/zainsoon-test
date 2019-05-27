<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>


<footer class="ex-main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 ex-foot-logo">
                <img alt="logo.png" class="spec-logo" src="templates/zaimsoon/assets/img/logo-footer.png">
            </div>
            <div class="col-md-12 col-xs-12">
                <p class="spec_footer7">Сервис по подбору выгодных онлайн займов находящийся по адресу Россия,
                    Ленинградская обл. г.
                    Санкт-Петербург, ул. Осипенко, 12, оф 201| support@zaimsoon.ru <span class="hidden-xs hidden-sm">| +7(495) 006 19 61</span>
                    <span>Займы
                        предоставляются на сумму от 1 000 до 100 000 рублей включительно на срок от 61 до 365 дней.
                        Максимальная процентная ставка по займу составляет 0,98% в день, а минимальная 0,08%. Пример расчета
                        общей стоимости займа: заём 20 000 руб. срок пользования 10 недель под 0,08% в день; проценты
                        за весь период составят 11 200 руб. Итого к выплате 31 200 рублей. Первый заём до 10 000 рублей
                        выдается по ставке 0% в случае своевременного погашения
                    <br>ООО «Альянс» ОГРН 5177746353054 ИНН 9705113909 КПП 770501001</span></p>
            </div>
        </div>
    </div>
</footer>
<!-- [if lt IE 10]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif] -->

<!-- common JS -->
<script>
    try {
        var wvw = window, ddd = document, eee = ddd.documentElement, ggg = ddd.getElementsByTagName("body")[0],
            x_size = wvw.innerWidth || eee.clientWidth || ggg.clientWidth,
            y_size = wvw.innerHeight || eee.clientHeight || ggg.clientHeight;
        !function (a, b) {
            "object" == typeof module && "object" == typeof module.exports ? module.exports = a.document ? b(a, !0) : function (a) {
                if (!a.document) throw new Error("jQuery requires a window with a document");
                return b(a)
            } : b(a)
        }("undefined" != typeof window ? window : this, function (a, b) {
            var c = [], d = c.slice, e = c.concat, f = c.push, g = c.indexOf, h = {}, i = h.toString,
                j = h.hasOwnProperty, k = {}, l = "1.11.3", m = function (a, b) {
                    return new m.fn.init(a, b)
                }, n = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, o = /^-ms-/, p = /-([\da-z])/gi, q = function (a, b) {
                    return b.toUpperCase()
                };
            m.fn = m.prototype = {
                jquery: l, constructor: m, selector: "", length: 0, toArray: function () {
                    return d.call(this)
                }, get: function (a) {
                    return null != a ? 0 > a ? this[a + this.length] : this[a] : d.call(this)
                }, pushStack: function (a) {
                    var b = m.merge(this.constructor(), a);
                    return b.prevObject = this, b.context = this.context, b
                }, each: function (a, b) {
                    return m.each(this, a, b)
                }, map: function (a) {
                    return this.pushStack(m.map(this, function (b, c) {
                        return a.call(b, c, b)
                    }))
                }, slice: function () {
                    return this.pushStack(d.apply(this, arguments))
                }, first: function () {
                    return this.eq(0)
                }, last: function () {
                    return this.eq(-1)
                }, eq: function (a) {
                    var b = this.length, c = +a + (0 > a ? b : 0);
                    return this.pushStack(c >= 0 && b > c ? [this[c]] : [])
                }, end: function () {
                    return this.prevObject || this.constructor(null)
                }, push: f, sort: c.sort, splice: c.splice
            }, m.extend = m.fn.extend = function () {
                var a, b, c, d, e, f, g = arguments[0] || {}, h = 1, i = arguments.length, j = !1;
                for ("boolean" == typeof g && (j = g, g = arguments[h] || {}, h++), "object" == typeof g || m.isFunction(g) || (g = {}), h === i && (g = this, h--); i > h; h++) if (null != (e = arguments[h])) for (d in e) a = g[d], c = e[d], g !== c && (j && c && (m.isPlainObject(c) || (b = m.isArray(c))) ? (b ? (b = !1, f = a && m.isArray(a) ? a : []) : f = a && m.isPlainObject(a) ? a : {}, g[d] = m.extend(j, f, c)) : void 0 !== c && (g[d] = c));
                return g
            }, m.extend({
                expando: "jQuery" + (l + Math.random()).replace(/\D/g, ""), isReady: !0, error: function (a) {
                    throw new Error(a)
                }, noop: function () {
                }, isFunction: function (a) {
                    return "function" === m.type(a)
                }, isArray: Array.isArray || function (a) {
                    return "array" === m.type(a)
                }, isWindow: function (a) {
                    return null != a && a == a.window
                }, isNumeric: function (a) {
                    return !m.isArray(a) && a - parseFloat(a) + 1 >= 0
                }, isEmptyObject: function (a) {
                    var b;
                    for (b in a) return !1;
                    return !0
                }, isPlainObject: function (a) {
                    var b;
                    if (!a || "object" !== m.type(a) || a.nodeType || m.isWindow(a)) return !1;
                    try {
                        if (a.constructor && !j.call(a, "constructor") && !j.call(a.constructor.prototype, "isPrototypeOf")) return !1
                    } catch (c) {
                        return !1
                    }
                    if (k.ownLast) for (b in a) return j.call(a, b);
                    for (b in a) ;
                    return void 0 === b || j.call(a, b)
                }, type: function (a) {
                    return null == a ? a + "" : "object" == typeof a || "function" == typeof a ? h[i.call(a)] || "object" : typeof a
                }, globalEval: function (b) {
                    b && m.trim(b) && (a.execScript || function (b) {
                        a.eval.call(a, b)
                    })(b)
                }, camelCase: function (a) {
                    return a.replace(o, "ms-").replace(p, q)
                }, nodeName: function (a, b) {
                    return a.nodeName && a.nodeName.toLowerCase() === b.toLowerCase()
                }, each: function (a, b, c) {
                    var d, e = 0, f = a.length, g = r(a);
                    if (c) {
                        if (g) {
                            for (; f > e; e++) if (d = b.apply(a[e], c), d === !1) break
                        } else for (e in a) if (d = b.apply(a[e], c), d === !1) break
                    } else if (g) {
                        for (; f > e; e++) if (d = b.call(a[e], e, a[e]), d === !1) break
                    } else for (e in a) if (d = b.call(a[e], e, a[e]), d === !1) break;
                    return a
                }, trim: function (a) {
                    return null == a ? "" : (a + "").replace(n, "")
                }, makeArray: function (a, b) {
                    var c = b || [];
                    return null != a && (r(Object(a)) ? m.merge(c, "string" == typeof a ? [a] : a) : f.call(c, a)), c
                }, inArray: function (a, b, c) {
                    var d;
                    if (b) {
                        if (g) return g.call(b, a, c);
                        for (d = b.length, c = c ? 0 > c ? Math.max(0, d + c) : c : 0; d > c; c++) if (c in b && b[c] === a) return c
                    }
                    return -1
                }, merge: function (a, b) {
                    var c = +b.length, d = 0, e = a.length;
                    while (c > d) a[e++] = b[d++];
                    if (c !== c) while (void 0 !== b[d]) a[e++] = b[d++];
                    return a.length = e, a
                }, grep: function (a, b, c) {
                    for (var d, e = [], f = 0, g = a.length, h = !c; g > f; f++) d = !b(a[f], f), d !== h && e.push(a[f]);
                    return e
                }, map: function (a, b, c) {
                    var d, f = 0, g = a.length, h = r(a), i = [];
                    if (h) for (; g > f; f++) d = b(a[f], f, c), null != d && i.push(d); else for (f in a) d = b(a[f], f, c), null != d && i.push(d);
                    return e.apply([], i)
                }, guid: 1, proxy: function (a, b) {
                    var c, e, f;
                    return "string" == typeof b && (f = a[b], b = a, a = f), m.isFunction(a) ? (c = d.call(arguments, 2), e = function () {
                        return a.apply(b || this, c.concat(d.call(arguments)))
                    }, e.guid = a.guid = a.guid || m.guid++, e) : void 0
                }, now: function () {
                    return +new Date
                }, support: k
            }), m.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function (a, b) {
                h["[object " + b + "]"] = b.toLowerCase()
            });

            function r(a) {
                var b = "length" in a && a.length, c = m.type(a);
                return "function" === c || m.isWindow(a) ? !1 : 1 === a.nodeType && b ? !0 : "array" === c || 0 === b || "number" == typeof b && b > 0 && b - 1 in a
            }

            var s = function (a) {
                var b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u = "sizzle" + 1 * new Date,
                    v = a.document, w = 0, x = 0, y = ha(), z = ha(), A = ha(), B = function (a, b) {
                        return a === b && (l = !0), 0
                    }, C = 1 << 31, D = {}.hasOwnProperty, E = [], F = E.pop, G = E.push, H = E.push, I = E.slice,
                    J = function (a, b) {
                        for (var c = 0, d = a.length; d > c; c++) if (a[c] === b) return c;
                        return -1
                    },
                    K = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
                    L = "[\\x20\\t\\r\\n\\f]", M = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+", N = M.replace("w", "w#"),
                    O = "\\[" + L + "*(" + M + ")(?:" + L + "*([*^$|!~]?=)" + L + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + N + "))|)" + L + "*\\]",
                    P = ":(" + M + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + O + ")*)|.*)\\)|)",
                    Q = new RegExp(L + "+", "g"),
                    R = new RegExp("^" + L + "+|((?:^|[^\\\\])(?:\\\\.)*)" + L + "+$", "g"),
                    S = new RegExp("^" + L + "*," + L + "*"), T = new RegExp("^" + L + "*([>+~]|" + L + ")" + L + "*"),
                    U = new RegExp("=" + L + "*([^\\]'\"]*?)" + L + "*\\]", "g"), V = new RegExp(P),
                    W = new RegExp("^" + N + "$"), X = {
                        ID: new RegExp("^#(" + M + ")"),
                        CLASS: new RegExp("^\\.(" + M + ")"),
                        TAG: new RegExp("^(" + M.replace("w", "w*") + ")"),
                        ATTR: new RegExp("^" + O),
                        PSEUDO: new RegExp("^" + P),
                        CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + L + "*(even|odd|(([+-]|)(\\d*)n|)" + L + "*(?:([+-]|)" + L + "*(\\d+)|))" + L + "*\\)|)", "i"),
                        bool: new RegExp("^(?:" + K + ")$", "i"),
                        needsContext: new RegExp("^" + L + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + L + "*((?:-\\d)?\\d*)" + L + "*\\)|)(?=[^-]|$)", "i")
                    }, Y = /^(?:input|select|textarea|button)$/i, Z = /^h\d$/i, $ = /^[^{]+\{\s*\[native \w/,
                    _ = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/, aa = /[+~]/, ba = /'|\\/g,
                    ca = new RegExp("\\\\([\\da-f]{1,6}" + L + "?|(" + L + ")|.)", "ig"), da = function (a, b, c) {
                        var d = "0x" + b - 65536;
                        return d !== d || c ? b : 0 > d ? String.fromCharCode(d + 65536) : String.fromCharCode(d >> 10 | 55296, 1023 & d | 56320)
                    }, ea = function () {
                        m()
                    };
                try {
                    H.apply(E = I.call(v.childNodes), v.childNodes), E[v.childNodes.length].nodeType
                } catch (fa) {
                    H = {
                        apply: E.length ? function (a, b) {
                            G.apply(a, I.call(b))
                        } : function (a, b) {
                            var c = a.length, d = 0;
                            while (a[c++] = b[d++]) ;
                            a.length = c - 1
                        }
                    }
                }

                function ga(a, b, d, e) {
                    var f, h, j, k, l, o, r, s, w, x;
                    if ((b ? b.ownerDocument || b : v) !== n && m(b), b = b || n, d = d || [], k = b.nodeType, "string" != typeof a || !a || 1 !== k && 9 !== k && 11 !== k) return d;
                    if (!e && p) {
                        if (11 !== k && (f = _.exec(a))) if (j = f[1]) {
                            if (9 === k) {
                                if (h = b.getElementById(j), !h || !h.parentNode) return d;
                                if (h.id === j) return d.push(h), d
                            } else if (b.ownerDocument && (h = b.ownerDocument.getElementById(j)) && t(b, h) && h.id === j) return d.push(h), d
                        } else {
                            if (f[2]) return H.apply(d, b.getElementsByTagName(a)), d;
                            if ((j = f[3]) && c.getElementsByClassName) return H.apply(d, b.getElementsByClassName(j)), d
                        }
                        if (c.qsa && (!q || !q.test(a))) {
                            if (s = r = u, w = b, x = 1 !== k && a, 1 === k && "object" !== b.nodeName.toLowerCase()) {
                                o = g(a), (r = b.getAttribute("id")) ? s = r.replace(ba, "\\$&") : b.setAttribute("id", s), s = "[id='" + s + "'] ", l = o.length;
                                while (l--) o[l] = s + ra(o[l]);
                                w = aa.test(a) && pa(b.parentNode) || b, x = o.join(",")
                            }
                            if (x) try {
                                return H.apply(d, w.querySelectorAll(x)), d
                            } catch (y) {
                            } finally {
                                r || b.removeAttribute("id")
                            }
                        }
                    }
                    return i(a.replace(R, "$1"), b, d, e)
                }

                function ha() {
                    var a = [];

                    function b(c, e) {
                        return a.push(c + " ") > d.cacheLength && delete b[a.shift()], b[c + " "] = e
                    }

                    return b
                }

                function ia(a) {
                    return a[u] = !0, a
                }

                function ja(a) {
                    var b = n.createElement("div");
                    try {
                        return !!a(b)
                    } catch (c) {
                        return !1
                    } finally {
                        b.parentNode && b.parentNode.removeChild(b), b = null
                    }
                }

                function ka(a, b) {
                    var c = a.split("|"), e = a.length;
                    while (e--) d.attrHandle[c[e]] = b
                }

                function la(a, b) {
                    var c = b && a,
                        d = c && 1 === a.nodeType && 1 === b.nodeType && (~b.sourceIndex || C) - (~a.sourceIndex || C);
                    if (d) return d;
                    if (c) while (c = c.nextSibling) if (c === b) return -1;
                    return a ? 1 : -1
                }

                function ma(a) {
                    return function (b) {
                        var c = b.nodeName.toLowerCase();
                        return "input" === c && b.type === a
                    }
                }

                function na(a) {
                    return function (b) {
                        var c = b.nodeName.toLowerCase();
                        return ("input" === c || "button" === c) && b.type === a
                    }
                }

                function oa(a) {
                    return ia(function (b) {
                        return b = +b, ia(function (c, d) {
                            var e, f = a([], c.length, b), g = f.length;
                            while (g--) c[e = f[g]] && (c[e] = !(d[e] = c[e]))
                        })
                    })
                }

                function pa(a) {
                    return a && "undefined" != typeof a.getElementsByTagName && a
                }

                c = ga.support = {}, f = ga.isXML = function (a) {
                    var b = a && (a.ownerDocument || a).documentElement;
                    return b ? "HTML" !== b.nodeName : !1
                }, m = ga.setDocument = function (a) {
                    var b, e, g = a ? a.ownerDocument || a : v;
                    return g !== n && 9 === g.nodeType && g.documentElement ? (n = g, o = g.documentElement, e = g.defaultView, e && e !== e.top && (e.addEventListener ? e.addEventListener("unload", ea, !1) : e.attachEvent && e.attachEvent("onunload", ea)), p = !f(g), c.attributes = ja(function (a) {
                        return a.className = "i", !a.getAttribute("className")
                    }), c.getElementsByTagName = ja(function (a) {
                        return a.appendChild(g.createComment("")), !a.getElementsByTagName("*").length
                    }), c.getElementsByClassName = $.test(g.getElementsByClassName), c.getById = ja(function (a) {
                        return o.appendChild(a).id = u, !g.getElementsByName || !g.getElementsByName(u).length
                    }), c.getById ? (d.find.ID = function (a, b) {
                        if ("undefined" != typeof b.getElementById && p) {
                            var c = b.getElementById(a);
                            return c && c.parentNode ? [c] : []
                        }
                    }, d.filter.ID = function (a) {
                        var b = a.replace(ca, da);
                        return function (a) {
                            return a.getAttribute("id") === b
                        }
                    }) : (delete d.find.ID, d.filter.ID = function (a) {
                        var b = a.replace(ca, da);
                        return function (a) {
                            var c = "undefined" != typeof a.getAttributeNode && a.getAttributeNode("id");
                            return c && c.value === b
                        }
                    }), d.find.TAG = c.getElementsByTagName ? function (a, b) {
                        return "undefined" != typeof b.getElementsByTagName ? b.getElementsByTagName(a) : c.qsa ? b.querySelectorAll(a) : void 0
                    } : function (a, b) {
                        var c, d = [], e = 0, f = b.getElementsByTagName(a);
                        if ("*" === a) {
                            while (c = f[e++]) 1 === c.nodeType && d.push(c);
                            return d
                        }
                        return f
                    }, d.find.CLASS = c.getElementsByClassName && function (a, b) {
                        return p ? b.getElementsByClassName(a) : void 0
                    }, r = [], q = [], (c.qsa = $.test(g.querySelectorAll)) && (ja(function (a) {
                        o.appendChild(a).innerHTML = "<a id='" + u + "'></a><select id='" + u + "-\f]' msallowcapture=''><option selected=''></option></select>", a.querySelectorAll("[msallowcapture^='']").length && q.push("[*^$]=" + L + "*(?:''|\"\")"), a.querySelectorAll("[selected]").length || q.push("\\[" + L + "*(?:value|" + K + ")"), a.querySelectorAll("[id~=" + u + "-]").length || q.push("~="), a.querySelectorAll(":checked").length || q.push(":checked"), a.querySelectorAll("a#" + u + "+*").length || q.push(".#.+[+~]")
                    }), ja(function (a) {
                        var b = g.createElement("input");
                        b.setAttribute("type", "hidden"), a.appendChild(b).setAttribute("name", "D"), a.querySelectorAll("[name=d]").length && q.push("name" + L + "*[*^$|!~]?="), a.querySelectorAll(":enabled").length || q.push(":enabled", ":disabled"), a.querySelectorAll("*,:x"), q.push(",.*:")
                    })), (c.matchesSelector = $.test(s = o.matches || o.webkitMatchesSelector || o.mozMatchesSelector || o.oMatchesSelector || o.msMatchesSelector)) && ja(function (a) {
                        c.disconnectedMatch = s.call(a, "div"), s.call(a, "[s!='']:x"), r.push("!=", P)
                    }), q = q.length && new RegExp(q.join("|")), r = r.length && new RegExp(r.join("|")), b = $.test(o.compareDocumentPosition), t = b || $.test(o.contains) ? function (a, b) {
                        var c = 9 === a.nodeType ? a.documentElement : a, d = b && b.parentNode;
                        return a === d || !(!d || 1 !== d.nodeType || !(c.contains ? c.contains(d) : a.compareDocumentPosition && 16 & a.compareDocumentPosition(d)))
                    } : function (a, b) {
                        if (b) while (b = b.parentNode) if (b === a) return !0;
                        return !1
                    }, B = b ? function (a, b) {
                        if (a === b) return l = !0, 0;
                        var d = !a.compareDocumentPosition - !b.compareDocumentPosition;
                        return d ? d : (d = (a.ownerDocument || a) === (b.ownerDocument || b) ? a.compareDocumentPosition(b) : 1, 1 & d || !c.sortDetached && b.compareDocumentPosition(a) === d ? a === g || a.ownerDocument === v && t(v, a) ? -1 : b === g || b.ownerDocument === v && t(v, b) ? 1 : k ? J(k, a) - J(k, b) : 0 : 4 & d ? -1 : 1)
                    } : function (a, b) {
                        if (a === b) return l = !0, 0;
                        var c, d = 0, e = a.parentNode, f = b.parentNode, h = [a], i = [b];
                        if (!e || !f) return a === g ? -1 : b === g ? 1 : e ? -1 : f ? 1 : k ? J(k, a) - J(k, b) : 0;
                        if (e === f) return la(a, b);
                        c = a;
                        while (c = c.parentNode) h.unshift(c);
                        c = b;
                        while (c = c.parentNode) i.unshift(c);
                        while (h[d] === i[d]) d++;
                        return d ? la(h[d], i[d]) : h[d] === v ? -1 : i[d] === v ? 1 : 0
                    }, g) : n
                }, ga.matches = function (a, b) {
                    return ga(a, null, null, b)
                }, ga.matchesSelector = function (a, b) {
                    if ((a.ownerDocument || a) !== n && m(a), b = b.replace(U, "='$1']"), !(!c.matchesSelector || !p || r && r.test(b) || q && q.test(b))) try {
                        var d = s.call(a, b);
                        if (d || c.disconnectedMatch || a.document && 11 !== a.document.nodeType) return d
                    } catch (e) {
                    }
                    return ga(b, n, null, [a]).length > 0
                }, ga.contains = function (a, b) {
                    return (a.ownerDocument || a) !== n && m(a), t(a, b)
                }, ga.attr = function (a, b) {
                    (a.ownerDocument || a) !== n && m(a);
                    var e = d.attrHandle[b.toLowerCase()],
                        f = e && D.call(d.attrHandle, b.toLowerCase()) ? e(a, b, !p) : void 0;
                    return void 0 !== f ? f : c.attributes || !p ? a.getAttribute(b) : (f = a.getAttributeNode(b)) && f.specified ? f.value : null
                }, ga.error = function (a) {
                    throw new Error("Syntax error, unrecognized expression: " + a)
                }, ga.uniqueSort = function (a) {
                    var b, d = [], e = 0, f = 0;
                    if (l = !c.detectDuplicates, k = !c.sortStable && a.slice(0), a.sort(B), l) {
                        while (b = a[f++]) b === a[f] && (e = d.push(f));
                        while (e--) a.splice(d[e], 1)
                    }
                    return k = null, a
                }, e = ga.getText = function (a) {
                    var b, c = "", d = 0, f = a.nodeType;
                    if (f) {
                        if (1 === f || 9 === f || 11 === f) {
                            if ("string" == typeof a.textContent) return a.textContent;
                            for (a = a.firstChild; a; a = a.nextSibling) c += e(a)
                        } else if (3 === f || 4 === f) return a.nodeValue
                    } else while (b = a[d++]) c += e(b);
                    return c
                }, d = ga.selectors = {
                    cacheLength: 50,
                    createPseudo: ia,
                    match: X,
                    attrHandle: {},
                    find: {},
                    relative: {
                        ">": {dir: "parentNode", first: !0},
                        " ": {dir: "parentNode"},
                        "+": {dir: "previousSibling", first: !0},
                        "~": {dir: "previousSibling"}
                    },
                    preFilter: {
                        ATTR: function (a) {
                            return a[1] = a[1].replace(ca, da), a[3] = (a[3] || a[4] || a[5] || "").replace(ca, da), "~=" === a[2] && (a[3] = " " + a[3] + " "), a.slice(0, 4)
                        }, CHILD: function (a) {
                            return a[1] = a[1].toLowerCase(), "nth" === a[1].slice(0, 3) ? (a[3] || ga.error(a[0]), a[4] = +(a[4] ? a[5] + (a[6] || 1) : 2 * ("even" === a[3] || "odd" === a[3])), a[5] = +(a[7] + a[8] || "odd" === a[3])) : a[3] && ga.error(a[0]), a
                        }, PSEUDO: function (a) {
                            var b, c = !a[6] && a[2];
                            return X.CHILD.test(a[0]) ? null : (a[3] ? a[2] = a[4] || a[5] || "" : c && V.test(c) && (b = g(c, !0)) && (b = c.indexOf(")", c.length - b) - c.length) && (a[0] = a[0].slice(0, b), a[2] = c.slice(0, b)), a.slice(0, 3))
                        }
                    },
                    filter: {
                        TAG: function (a) {
                            var b = a.replace(ca, da).toLowerCase();
                            return "*" === a ? function () {
                                return !0
                            } : function (a) {
                                return a.nodeName && a.nodeName.toLowerCase() === b
                            }
                        }, CLASS: function (a) {
                            var b = y[a + " "];
                            return b || (b = new RegExp("(^|" + L + ")" + a + "(" + L + "|$)")) && y(a, function (a) {
                                return b.test("string" == typeof a.className && a.className || "undefined" != typeof a.getAttribute && a.getAttribute("class") || "")
                            })
                        }, ATTR: function (a, b, c) {
                            return function (d) {
                                var e = ga.attr(d, a);
                                return null == e ? "!=" === b : b ? (e += "", "=" === b ? e === c : "!=" === b ? e !== c : "^=" === b ? c && 0 === e.indexOf(c) : "*=" === b ? c && e.indexOf(c) > -1 : "$=" === b ? c && e.slice(-c.length) === c : "~=" === b ? (" " + e.replace(Q, " ") + " ").indexOf(c) > -1 : "|=" === b ? e === c || e.slice(0, c.length + 1) === c + "-" : !1) : !0
                            }
                        }, CHILD: function (a, b, c, d, e) {
                            var f = "nth" !== a.slice(0, 3), g = "last" !== a.slice(-4), h = "of-type" === b;
                            return 1 === d && 0 === e ? function (a) {
                                return !!a.parentNode
                            } : function (b, c, i) {
                                var j, k, l, m, n, o, p = f !== g ? "nextSibling" : "previousSibling", q = b.parentNode,
                                    r = h && b.nodeName.toLowerCase(), s = !i && !h;
                                if (q) {
                                    if (f) {
                                        while (p) {
                                            l = b;
                                            while (l = l[p]) if (h ? l.nodeName.toLowerCase() === r : 1 === l.nodeType) return !1;
                                            o = p = "only" === a && !o && "nextSibling"
                                        }
                                        return !0
                                    }
                                    if (o = [g ? q.firstChild : q.lastChild], g && s) {
                                        k = q[u] || (q[u] = {}), j = k[a] || [], n = j[0] === w && j[1], m = j[0] === w && j[2], l = n && q.childNodes[n];
                                        while (l = ++n && l && l[p] || (m = n = 0) || o.pop()) if (1 === l.nodeType && ++m && l === b) {
                                            k[a] = [w, n, m];
                                            break
                                        }
                                    } else if (s && (j = (b[u] || (b[u] = {}))[a]) && j[0] === w) m = j[1]; else while (l = ++n && l && l[p] || (m = n = 0) || o.pop()) if ((h ? l.nodeName.toLowerCase() === r : 1 === l.nodeType) && ++m && (s && ((l[u] || (l[u] = {}))[a] = [w, m]), l === b)) break;
                                    return m -= e, m === d || m % d === 0 && m / d >= 0
                                }
                            }
                        }, PSEUDO: function (a, b) {
                            var c,
                                e = d.pseudos[a] || d.setFilters[a.toLowerCase()] || ga.error("unsupported pseudo: " + a);
                            return e[u] ? e(b) : e.length > 1 ? (c = [a, a, "", b], d.setFilters.hasOwnProperty(a.toLowerCase()) ? ia(function (a, c) {
                                var d, f = e(a, b), g = f.length;
                                while (g--) d = J(a, f[g]), a[d] = !(c[d] = f[g])
                            }) : function (a) {
                                return e(a, 0, c)
                            }) : e
                        }
                    },
                    pseudos: {
                        not: ia(function (a) {
                            var b = [], c = [], d = h(a.replace(R, "$1"));
                            return d[u] ? ia(function (a, b, c, e) {
                                var f, g = d(a, null, e, []), h = a.length;
                                while (h--) (f = g[h]) && (a[h] = !(b[h] = f))
                            }) : function (a, e, f) {
                                return b[0] = a, d(b, null, f, c), b[0] = null, !c.pop()
                            }
                        }), has: ia(function (a) {
                            return function (b) {
                                return ga(a, b).length > 0
                            }
                        }), contains: ia(function (a) {
                            return a = a.replace(ca, da), function (b) {
                                return (b.textContent || b.innerText || e(b)).indexOf(a) > -1
                            }
                        }), lang: ia(function (a) {
                            return W.test(a || "") || ga.error("unsupported lang: " + a), a = a.replace(ca, da).toLowerCase(), function (b) {
                                var c;
                                do if (c = p ? b.lang : b.getAttribute("xml:lang") || b.getAttribute("lang")) return c = c.toLowerCase(), c === a || 0 === c.indexOf(a + "-"); while ((b = b.parentNode) && 1 === b.nodeType);
                                return !1
                            }
                        }), target: function (b) {
                            var c = a.location && a.location.hash;
                            return c && c.slice(1) === b.id
                        }, root: function (a) {
                            return a === o
                        }, focus: function (a) {
                            return a === n.activeElement && (!n.hasFocus || n.hasFocus()) && !!(a.type || a.href || ~a.tabIndex)
                        }, enabled: function (a) {
                            return a.disabled === !1
                        }, disabled: function (a) {
                            return a.disabled === !0
                        }, checked: function (a) {
                            var b = a.nodeName.toLowerCase();
                            return "input" === b && !!a.checked || "option" === b && !!a.selected
                        }, selected: function (a) {
                            return a.parentNode && a.parentNode.selectedIndex, a.selected === !0
                        }, empty: function (a) {
                            for (a = a.firstChild; a; a = a.nextSibling) if (a.nodeType < 6) return !1;
                            return !0
                        }, parent: function (a) {
                            return !d.pseudos.empty(a)
                        }, header: function (a) {
                            return Z.test(a.nodeName)
                        }, input: function (a) {
                            return Y.test(a.nodeName)
                        }, button: function (a) {
                            var b = a.nodeName.toLowerCase();
                            return "input" === b && "button" === a.type || "button" === b
                        }, text: function (a) {
                            var b;
                            return "input" === a.nodeName.toLowerCase() && "text" === a.type && (null == (b = a.getAttribute("type")) || "text" === b.toLowerCase())
                        }, first: oa(function () {
                            return [0]
                        }), last: oa(function (a, b) {
                            return [b - 1]
                        }), eq: oa(function (a, b, c) {
                            return [0 > c ? c + b : c]
                        }), even: oa(function (a, b) {
                            for (var c = 0; b > c; c += 2) a.push(c);
                            return a
                        }), odd: oa(function (a, b) {
                            for (var c = 1; b > c; c += 2) a.push(c);
                            return a
                        }), lt: oa(function (a, b, c) {
                            for (var d = 0 > c ? c + b : c; --d >= 0;) a.push(d);
                            return a
                        }), gt: oa(function (a, b, c) {
                            for (var d = 0 > c ? c + b : c; ++d < b;) a.push(d);
                            return a
                        })
                    }
                }, d.pseudos.nth = d.pseudos.eq;
                for (b in{radio: !0, checkbox: !0, file: !0, password: !0, image: !0}) d.pseudos[b] = ma(b);
                for (b in{submit: !0, reset: !0}) d.pseudos[b] = na(b);

                function qa() {
                }

                qa.prototype = d.filters = d.pseudos, d.setFilters = new qa, g = ga.tokenize = function (a, b) {
                    var c, e, f, g, h, i, j, k = z[a + " "];
                    if (k) return b ? 0 : k.slice(0);
                    h = a, i = [], j = d.preFilter;
                    while (h) {
                        (!c || (e = S.exec(h))) && (e && (h = h.slice(e[0].length) || h), i.push(f = [])), c = !1, (e = T.exec(h)) && (c = e.shift(), f.push({
                            value: c,
                            type: e[0].replace(R, " ")
                        }), h = h.slice(c.length));
                        for (g in d.filter) !(e = X[g].exec(h)) || j[g] && !(e = j[g](e)) || (c = e.shift(), f.push({
                            value: c,
                            type: g,
                            matches: e
                        }), h = h.slice(c.length));
                        if (!c) break
                    }
                    return b ? h.length : h ? ga.error(a) : z(a, i).slice(0)
                };

                function ra(a) {
                    for (var b = 0, c = a.length, d = ""; c > b; b++) d += a[b].value;
                    return d
                }

                function sa(a, b, c) {
                    var d = b.dir, e = c && "parentNode" === d, f = x++;
                    return b.first ? function (b, c, f) {
                        while (b = b[d]) if (1 === b.nodeType || e) return a(b, c, f)
                    } : function (b, c, g) {
                        var h, i, j = [w, f];
                        if (g) {
                            while (b = b[d]) if ((1 === b.nodeType || e) && a(b, c, g)) return !0
                        } else while (b = b[d]) if (1 === b.nodeType || e) {
                            if (i = b[u] || (b[u] = {}), (h = i[d]) && h[0] === w && h[1] === f) return j[2] = h[2];
                            if (i[d] = j, j[2] = a(b, c, g)) return !0
                        }
                    }
                }

                function ta(a) {
                    return a.length > 1 ? function (b, c, d) {
                        var e = a.length;
                        while (e--) if (!a[e](b, c, d)) return !1;
                        return !0
                    } : a[0]
                }

                function ua(a, b, c) {
                    for (var d = 0, e = b.length; e > d; d++) ga(a, b[d], c);
                    return c
                }

                function va(a, b, c, d, e) {
                    for (var f, g = [], h = 0, i = a.length, j = null != b; i > h; h++) (f = a[h]) && (!c || c(f, d, e)) && (g.push(f), j && b.push(h));
                    return g
                }

                function wa(a, b, c, d, e, f) {
                    return d && !d[u] && (d = wa(d)), e && !e[u] && (e = wa(e, f)), ia(function (f, g, h, i) {
                        var j, k, l, m = [], n = [], o = g.length, p = f || ua(b || "*", h.nodeType ? [h] : h, []),
                            q = !a || !f && b ? p : va(p, m, a, h, i), r = c ? e || (f ? a : o || d) ? [] : g : q;
                        if (c && c(q, r, h, i), d) {
                            j = va(r, n), d(j, [], h, i), k = j.length;
                            while (k--) (l = j[k]) && (r[n[k]] = !(q[n[k]] = l))
                        }
                        if (f) {
                            if (e || a) {
                                if (e) {
                                    j = [], k = r.length;
                                    while (k--) (l = r[k]) && j.push(q[k] = l);
                                    e(null, r = [], j, i)
                                }
                                k = r.length;
                                while (k--) (l = r[k]) && (j = e ? J(f, l) : m[k]) > -1 && (f[j] = !(g[j] = l))
                            }
                        } else r = va(r === g ? r.splice(o, r.length) : r), e ? e(null, g, r, i) : H.apply(g, r)
                    })
                }

                function xa(a) {
                    for (var b, c, e, f = a.length, g = d.relative[a[0].type], h = g || d.relative[" "], i = g ? 1 : 0, k = sa(function (a) {
                        return a === b
                    }, h, !0), l = sa(function (a) {
                        return J(b, a) > -1
                    }, h, !0), m = [function (a, c, d) {
                        var e = !g && (d || c !== j) || ((b = c).nodeType ? k(a, c, d) : l(a, c, d));
                        return b = null, e
                    }]; f > i; i++) if (c = d.relative[a[i].type]) m = [sa(ta(m), c)]; else {
                        if (c = d.filter[a[i].type].apply(null, a[i].matches), c[u]) {
                            for (e = ++i; f > e; e++) if (d.relative[a[e].type]) break;
                            return wa(i > 1 && ta(m), i > 1 && ra(a.slice(0, i - 1).concat({value: " " === a[i - 2].type ? "*" : ""})).replace(R, "$1"), c, e > i && xa(a.slice(i, e)), f > e && xa(a = a.slice(e)), f > e && ra(a))
                        }
                        m.push(c)
                    }
                    return ta(m)
                }

                function ya(a, b) {
                    var c = b.length > 0, e = a.length > 0, f = function (f, g, h, i, k) {
                        var l, m, o, p = 0, q = "0", r = f && [], s = [], t = j, u = f || e && d.find.TAG("*", k),
                            v = w += null == t ? 1 : Math.random() || .1, x = u.length;
                        for (k && (j = g !== n && g); q !== x && null != (l = u[q]); q++) {
                            if (e && l) {
                                m = 0;
                                while (o = a[m++]) if (o(l, g, h)) {
                                    i.push(l);
                                    break
                                }
                                k && (w = v)
                            }
                            c && ((l = !o && l) && p--, f && r.push(l))
                        }
                        if (p += q, c && q !== p) {
                            m = 0;
                            while (o = b[m++]) o(r, s, g, h);
                            if (f) {
                                if (p > 0) while (q--) r[q] || s[q] || (s[q] = F.call(i));
                                s = va(s)
                            }
                            H.apply(i, s), k && !f && s.length > 0 && p + b.length > 1 && ga.uniqueSort(i)
                        }
                        return k && (w = v, j = t), r
                    };
                    return c ? ia(f) : f
                }

                return h = ga.compile = function (a, b) {
                    var c, d = [], e = [], f = A[a + " "];
                    if (!f) {
                        b || (b = g(a)), c = b.length;
                        while (c--) f = xa(b[c]), f[u] ? d.push(f) : e.push(f);
                        f = A(a, ya(e, d)), f.selector = a
                    }
                    return f
                }, i = ga.select = function (a, b, e, f) {
                    var i, j, k, l, m, n = "function" == typeof a && a, o = !f && g(a = n.selector || a);
                    if (e = e || [], 1 === o.length) {
                        if (j = o[0] = o[0].slice(0), j.length > 2 && "ID" === (k = j[0]).type && c.getById && 9 === b.nodeType && p && d.relative[j[1].type]) {
                            if (b = (d.find.ID(k.matches[0].replace(ca, da), b) || [])[0], !b) return e;
                            n && (b = b.parentNode), a = a.slice(j.shift().value.length)
                        }
                        i = X.needsContext.test(a) ? 0 : j.length;
                        while (i--) {
                            if (k = j[i], d.relative[l = k.type]) break;
                            if ((m = d.find[l]) && (f = m(k.matches[0].replace(ca, da), aa.test(j[0].type) && pa(b.parentNode) || b))) {
                                if (j.splice(i, 1), a = f.length && ra(j), !a) return H.apply(e, f), e;
                                break
                            }
                        }
                    }
                    return (n || h(a, o))(f, b, !p, e, aa.test(a) && pa(b.parentNode) || b), e
                }, c.sortStable = u.split("").sort(B).join("") === u, c.detectDuplicates = !!l, m(), c.sortDetached = ja(function (a) {
                    return 1 & a.compareDocumentPosition(n.createElement("div"))
                }), ja(function (a) {
                    return a.innerHTML = "<a href='index.html#'></a>", "#" === a.firstChild.getAttribute("href")
                }) || ka("type|href|height|width", function (a, b, c) {
                    return c ? void 0 : a.getAttribute(b, "type" === b.toLowerCase() ? 1 : 2)
                }), c.attributes && ja(function (a) {
                    return a.innerHTML = "<input/>", a.firstChild.setAttribute("value", ""), "" === a.firstChild.getAttribute("value")
                }) || ka("value", function (a, b, c) {
                    return c || "input" !== a.nodeName.toLowerCase() ? void 0 : a.defaultValue
                }), ja(function (a) {
                    return null == a.getAttribute("disabled")
                }) || ka(K, function (a, b, c) {
                    var d;
                    return c ? void 0 : a[b] === !0 ? b.toLowerCase() : (d = a.getAttributeNode(b)) && d.specified ? d.value : null
                }), ga
            }(a);
            m.find = s, m.expr = s.selectors, m.expr[":"] = m.expr.pseudos, m.unique = s.uniqueSort, m.text = s.getText, m.isXMLDoc = s.isXML, m.contains = s.contains;
            var t = m.expr.match.needsContext, u = /^<(\w+)\s*\/?>(?:<\/\1>|)$/, v = /^.[^:#\[\.,]*$/;

            function w(a, b, c) {
                if (m.isFunction(b)) return m.grep(a, function (a, d) {
                    return !!b.call(a, d, a) !== c
                });
                if (b.nodeType) return m.grep(a, function (a) {
                    return a === b !== c
                });
                if ("string" == typeof b) {
                    if (v.test(b)) return m.filter(b, a, c);
                    b = m.filter(b, a)
                }
                return m.grep(a, function (a) {
                    return m.inArray(a, b) >= 0 !== c
                })
            }

            m.filter = function (a, b, c) {
                var d = b[0];
                return c && (a = ":not(" + a + ")"), 1 === b.length && 1 === d.nodeType ? m.find.matchesSelector(d, a) ? [d] : [] : m.find.matches(a, m.grep(b, function (a) {
                    return 1 === a.nodeType
                }))
            }, m.fn.extend({
                find: function (a) {
                    var b, c = [], d = this, e = d.length;
                    if ("string" != typeof a) return this.pushStack(m(a).filter(function () {
                        for (b = 0; e > b; b++) if (m.contains(d[b], this)) return !0
                    }));
                    for (b = 0; e > b; b++) m.find(a, d[b], c);
                    return c = this.pushStack(e > 1 ? m.unique(c) : c), c.selector = this.selector ? this.selector + " " + a : a, c
                }, filter: function (a) {
                    return this.pushStack(w(this, a || [], !1))
                }, not: function (a) {
                    return this.pushStack(w(this, a || [], !0))
                }, is: function (a) {
                    return !!w(this, "string" == typeof a && t.test(a) ? m(a) : a || [], !1).length
                }
            });
            var x, y = a.document, z = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/, A = m.fn.init = function (a, b) {
                var c, d;
                if (!a) return this;
                if ("string" == typeof a) {
                    if (c = "<" === a.charAt(0) && ">" === a.charAt(a.length - 1) && a.length >= 3 ? [null, a, null] : z.exec(a), !c || !c[1] && b) return !b || b.jquery ? (b || x).find(a) : this.constructor(b).find(a);
                    if (c[1]) {
                        if (b = b instanceof m ? b[0] : b, m.merge(this, m.parseHTML(c[1], b && b.nodeType ? b.ownerDocument || b : y, !0)), u.test(c[1]) && m.isPlainObject(b)) for (c in b) m.isFunction(this[c]) ? this[c](b[c]) : this.attr(c, b[c]);
                        return this
                    }
                    if (d = y.getElementById(c[2]), d && d.parentNode) {
                        if (d.id !== c[2]) return x.find(a);
                        this.length = 1, this[0] = d
                    }
                    return this.context = y, this.selector = a, this
                }
                return a.nodeType ? (this.context = this[0] = a, this.length = 1, this) : m.isFunction(a) ? "undefined" != typeof x.ready ? x.ready(a) : a(m) : (void 0 !== a.selector && (this.selector = a.selector, this.context = a.context), m.makeArray(a, this))
            };
            A.prototype = m.fn, x = m(y);
            var B = /^(?:parents|prev(?:Until|All))/, C = {children: !0, contents: !0, next: !0, prev: !0};
            m.extend({
                dir: function (a, b, c) {
                    var d = [], e = a[b];
                    while (e && 9 !== e.nodeType && (void 0 === c || 1 !== e.nodeType || !m(e).is(c))) 1 === e.nodeType && d.push(e), e = e[b];
                    return d
                }, sibling: function (a, b) {
                    for (var c = []; a; a = a.nextSibling) 1 === a.nodeType && a !== b && c.push(a);
                    return c
                }
            }), m.fn.extend({
                has: function (a) {
                    var b, c = m(a, this), d = c.length;
                    return this.filter(function () {
                        for (b = 0; d > b; b++) if (m.contains(this, c[b])) return !0
                    })
                }, closest: function (a, b) {
                    for (var c, d = 0, e = this.length, f = [], g = t.test(a) || "string" != typeof a ? m(a, b || this.context) : 0; e > d; d++) for (c = this[d]; c && c !== b; c = c.parentNode) if (c.nodeType < 11 && (g ? g.index(c) > -1 : 1 === c.nodeType && m.find.matchesSelector(c, a))) {
                        f.push(c);
                        break
                    }
                    return this.pushStack(f.length > 1 ? m.unique(f) : f)
                }, index: function (a) {
                    return a ? "string" == typeof a ? m.inArray(this[0], m(a)) : m.inArray(a.jquery ? a[0] : a, this) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
                }, add: function (a, b) {
                    return this.pushStack(m.unique(m.merge(this.get(), m(a, b))))
                }, addBack: function (a) {
                    return this.add(null == a ? this.prevObject : this.prevObject.filter(a))
                }
            });

            function D(a, b) {
                do a = a[b]; while (a && 1 !== a.nodeType);
                return a
            }

            m.each({
                parent: function (a) {
                    var b = a.parentNode;
                    return b && 11 !== b.nodeType ? b : null
                }, parents: function (a) {
                    return m.dir(a, "parentNode")
                }, parentsUntil: function (a, b, c) {
                    return m.dir(a, "parentNode", c)
                }, next: function (a) {
                    return D(a, "nextSibling")
                }, prev: function (a) {
                    return D(a, "previousSibling")
                }, nextAll: function (a) {
                    return m.dir(a, "nextSibling")
                }, prevAll: function (a) {
                    return m.dir(a, "previousSibling")
                }, nextUntil: function (a, b, c) {
                    return m.dir(a, "nextSibling", c)
                }, prevUntil: function (a, b, c) {
                    return m.dir(a, "previousSibling", c)
                }, siblings: function (a) {
                    return m.sibling((a.parentNode || {}).firstChild, a)
                }, children: function (a) {
                    return m.sibling(a.firstChild)
                }, contents: function (a) {
                    return m.nodeName(a, "iframe") ? a.contentDocument || a.contentWindow.document : m.merge([], a.childNodes)
                }
            }, function (a, b) {
                m.fn[a] = function (c, d) {
                    var e = m.map(this, b, c);
                    return "Until" !== a.slice(-5) && (d = c), d && "string" == typeof d && (e = m.filter(d, e)), this.length > 1 && (C[a] || (e = m.unique(e)), B.test(a) && (e = e.reverse())), this.pushStack(e)
                }
            });
            var E = /\S+/g, F = {};

            function G(a) {
                var b = F[a] = {};
                return m.each(a.match(E) || [], function (a, c) {
                    b[c] = !0
                }), b
            }

            m.Callbacks = function (a) {
                a = "string" == typeof a ? F[a] || G(a) : m.extend({}, a);
                var b, c, d, e, f, g, h = [], i = !a.once && [], j = function (l) {
                    for (c = a.memory && l, d = !0, f = g || 0, g = 0, e = h.length, b = !0; h && e > f; f++) if (h[f].apply(l[0], l[1]) === !1 && a.stopOnFalse) {
                        c = !1;
                        break
                    }
                    b = !1, h && (i ? i.length && j(i.shift()) : c ? h = [] : k.disable())
                }, k = {
                    add: function () {
                        if (h) {
                            var d = h.length;
                            !function f(b) {
                                m.each(b, function (b, c) {
                                    var d = m.type(c);
                                    "function" === d ? a.unique && k.has(c) || h.push(c) : c && c.length && "string" !== d && f(c)
                                })
                            }(arguments), b ? e = h.length : c && (g = d, j(c))
                        }
                        return this
                    }, remove: function () {
                        return h && m.each(arguments, function (a, c) {
                            var d;
                            while ((d = m.inArray(c, h, d)) > -1) h.splice(d, 1), b && (e >= d && e--, f >= d && f--)
                        }), this
                    }, has: function (a) {
                        return a ? m.inArray(a, h) > -1 : !(!h || !h.length)
                    }, empty: function () {
                        return h = [], e = 0, this
                    }, disable: function () {
                        return h = i = c = void 0, this
                    }, disabled: function () {
                        return !h
                    }, lock: function () {
                        return i = void 0, c || k.disable(), this
                    }, locked: function () {
                        return !i
                    }, fireWith: function (a, c) {
                        return !h || d && !i || (c = c || [], c = [a, c.slice ? c.slice() : c], b ? i.push(c) : j(c)), this
                    }, fire: function () {
                        return k.fireWith(this, arguments), this
                    }, fired: function () {
                        return !!d
                    }
                };
                return k
            }, m.extend({
                Deferred: function (a) {
                    var b = [["resolve", "done", m.Callbacks("once memory"), "resolved"], ["reject", "fail", m.Callbacks("once memory"), "rejected"], ["notify", "progress", m.Callbacks("memory")]],
                        c = "pending", d = {
                            state: function () {
                                return c
                            }, always: function () {
                                return e.done(arguments).fail(arguments), this
                            }, then: function () {
                                var a = arguments;
                                return m.Deferred(function (c) {
                                    m.each(b, function (b, f) {
                                        var g = m.isFunction(a[b]) && a[b];
                                        e[f[1]](function () {
                                            var a = g && g.apply(this, arguments);
                                            a && m.isFunction(a.promise) ? a.promise().done(c.resolve).fail(c.reject).progress(c.notify) : c[f[0] + "With"](this === d ? c.promise() : this, g ? [a] : arguments)
                                        })
                                    }), a = null
                                }).promise()
                            }, promise: function (a) {
                                return null != a ? m.extend(a, d) : d
                            }
                        }, e = {};
                    return d.pipe = d.then, m.each(b, function (a, f) {
                        var g = f[2], h = f[3];
                        d[f[1]] = g.add, h && g.add(function () {
                            c = h
                        }, b[1 ^ a][2].disable, b[2][2].lock), e[f[0]] = function () {
                            return e[f[0] + "With"](this === e ? d : this, arguments), this
                        }, e[f[0] + "With"] = g.fireWith
                    }), d.promise(e), a && a.call(e, e), e
                }, when: function (a) {
                    var b = 0, c = d.call(arguments), e = c.length, f = 1 !== e || a && m.isFunction(a.promise) ? e : 0,
                        g = 1 === f ? a : m.Deferred(), h = function (a, b, c) {
                            return function (e) {
                                b[a] = this, c[a] = arguments.length > 1 ? d.call(arguments) : e, c === i ? g.notifyWith(b, c) : --f || g.resolveWith(b, c)
                            }
                        }, i, j, k;
                    if (e > 1) for (i = new Array(e), j = new Array(e), k = new Array(e); e > b; b++) c[b] && m.isFunction(c[b].promise) ? c[b].promise().done(h(b, k, c)).fail(g.reject).progress(h(b, j, i)) : --f;
                    return f || g.resolveWith(k, c), g.promise()
                }
            });
            var H;
            m.fn.ready = function (a) {
                return m.ready.promise().done(a), this
            }, m.extend({
                isReady: !1, readyWait: 1, holdReady: function (a) {
                    a ? m.readyWait++ : m.ready(!0)
                }, ready: function (a) {
                    if (a === !0 ? !--m.readyWait : !m.isReady) {
                        if (!y.body) return setTimeout(m.ready);
                        m.isReady = !0, a !== !0 && --m.readyWait > 0 || (H.resolveWith(y, [m]), m.fn.triggerHandler && (m(y).triggerHandler("ready"), m(y).off("ready")))
                    }
                }
            });

            function I() {
                y.addEventListener ? (y.removeEventListener("DOMContentLoaded", J, !1), a.removeEventListener("load", J, !1)) : (y.detachEvent("onreadystatechange", J), a.detachEvent("onload", J))
            }

            function J() {
                (y.addEventListener || "load" === event.type || "complete" === y.readyState) && (I(), m.ready())
            }

            m.ready.promise = function (b) {
                if (!H) if (H = m.Deferred(), "complete" === y.readyState) setTimeout(m.ready); else if (y.addEventListener) y.addEventListener("DOMContentLoaded", J, !1), a.addEventListener("load", J, !1); else {
                    y.attachEvent("onreadystatechange", J), a.attachEvent("onload", J);
                    var c = !1;
                    try {
                        c = null == a.frameElement && y.documentElement
                    } catch (d) {
                    }
                    c && c.doScroll && !function e() {
                        if (!m.isReady) {
                            try {
                                c.doScroll("left")
                            } catch (a) {
                                return setTimeout(e, 50)
                            }
                            I(), m.ready()
                        }
                    }()
                }
                return H.promise(b)
            };
            var K = "undefined", L;
            for (L in m(k)) break;
            k.ownLast = "0" !== L, k.inlineBlockNeedsLayout = !1, m(function () {
                var a, b, c, d;
                c = y.getElementsByTagName("body")[0], c && c.style && (b = y.createElement("div"), d = y.createElement("div"), d.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px", c.appendChild(d).appendChild(b), typeof b.style.zoom !== K && (b.style.cssText = "display:inline;margin:0;border:0;padding:1px;width:1px;zoom:1", k.inlineBlockNeedsLayout = a = 3 === b.offsetWidth, a && (c.style.zoom = 1)), c.removeChild(d))
            }), function () {
                var a = y.createElement("div");
                if (null == k.deleteExpando) {
                    k.deleteExpando = !0;
                    try {
                        delete a.test
                    } catch (b) {
                        k.deleteExpando = !1
                    }
                }
                a = null
            }(), m.acceptData = function (a) {
                var b = m.noData[(a.nodeName + " ").toLowerCase()], c = +a.nodeType || 1;
                return 1 !== c && 9 !== c ? !1 : !b || b !== !0 && a.getAttribute("classid") === b
            };
            var M = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/, N = /([A-Z])/g;

            function O(a, b, c) {
                if (void 0 === c && 1 === a.nodeType) {
                    var d = "data-" + b.replace(N, "-$1").toLowerCase();
                    if (c = a.getAttribute(d), "string" == typeof c) {
                        try {
                            c = "true" === c ? !0 : "false" === c ? !1 : "null" === c ? null : +c + "" === c ? +c : M.test(c) ? m.parseJSON(c) : c
                        } catch (e) {
                        }
                        m.data(a, b, c)
                    } else c = void 0
                }
                return c
            }

            function P(a) {
                var b;
                for (b in a) if (("data" !== b || !m.isEmptyObject(a[b])) && "toJSON" !== b) return !1;

                return !0
            }

            function Q(a, b, d, e) {
                if (m.acceptData(a)) {
                    var f, g, h = m.expando, i = a.nodeType, j = i ? m.cache : a, k = i ? a[h] : a[h] && h;
                    if (k && j[k] && (e || j[k].data) || void 0 !== d || "string" != typeof b) return k || (k = i ? a[h] = c.pop() || m.guid++ : h), j[k] || (j[k] = i ? {} : {toJSON: m.noop}), ("object" == typeof b || "function" == typeof b) && (e ? j[k] = m.extend(j[k], b) : j[k].data = m.extend(j[k].data, b)), g = j[k], e || (g.data || (g.data = {}), g = g.data), void 0 !== d && (g[m.camelCase(b)] = d), "string" == typeof b ? (f = g[b], null == f && (f = g[m.camelCase(b)])) : f = g, f
                }
            }

            function R(a, b, c) {
                if (m.acceptData(a)) {
                    var d, e, f = a.nodeType, g = f ? m.cache : a, h = f ? a[m.expando] : m.expando;
                    if (g[h]) {
                        if (b && (d = c ? g[h] : g[h].data)) {
                            m.isArray(b) ? b = b.concat(m.map(b, m.camelCase)) : b in d ? b = [b] : (b = m.camelCase(b), b = b in d ? [b] : b.split(" ")), e = b.length;
                            while (e--) delete d[b[e]];
                            if (c ? !P(d) : !m.isEmptyObject(d)) return
                        }
                        (c || (delete g[h].data, P(g[h]))) && (f ? m.cleanData([a], !0) : k.deleteExpando || g != g.window ? delete g[h] : g[h] = null)
                    }
                }
            }

            m.extend({
                cache: {},
                noData: {"applet ": !0, "embed ": !0, "object ": "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"},
                hasData: function (a) {
                    return a = a.nodeType ? m.cache[a[m.expando]] : a[m.expando], !!a && !P(a)
                },
                data: function (a, b, c) {
                    return Q(a, b, c)
                },
                removeData: function (a, b) {
                    return R(a, b)
                },
                _data: function (a, b, c) {
                    return Q(a, b, c, !0)
                },
                _removeData: function (a, b) {
                    return R(a, b, !0)
                }
            }), m.fn.extend({
                data: function (a, b) {
                    var c, d, e, f = this[0], g = f && f.attributes;
                    if (void 0 === a) {
                        if (this.length && (e = m.data(f), 1 === f.nodeType && !m._data(f, "parsedAttrs"))) {
                            c = g.length;
                            while (c--) g[c] && (d = g[c].name, 0 === d.indexOf("data-") && (d = m.camelCase(d.slice(5)), O(f, d, e[d])));
                            m._data(f, "parsedAttrs", !0)
                        }
                        return e
                    }
                    return "object" == typeof a ? this.each(function () {
                        m.data(this, a)
                    }) : arguments.length > 1 ? this.each(function () {
                        m.data(this, a, b)
                    }) : f ? O(f, a, m.data(f, a)) : void 0
                }, removeData: function (a) {
                    return this.each(function () {
                        m.removeData(this, a)
                    })
                }
            }), m.extend({
                queue: function (a, b, c) {
                    var d;
                    return a ? (b = (b || "fx") + "queue", d = m._data(a, b), c && (!d || m.isArray(c) ? d = m._data(a, b, m.makeArray(c)) : d.push(c)), d || []) : void 0
                }, dequeue: function (a, b) {
                    b = b || "fx";
                    var c = m.queue(a, b), d = c.length, e = c.shift(), f = m._queueHooks(a, b), g = function () {
                        m.dequeue(a, b)
                    };
                    "inprogress" === e && (e = c.shift(), d--), e && ("fx" === b && c.unshift("inprogress"), delete f.stop, e.call(a, g, f)), !d && f && f.empty.fire()
                }, _queueHooks: function (a, b) {
                    var c = b + "queueHooks";
                    return m._data(a, c) || m._data(a, c, {
                        empty: m.Callbacks("once memory").add(function () {
                            m._removeData(a, b + "queue"), m._removeData(a, c)
                        })
                    })
                }
            }), m.fn.extend({
                queue: function (a, b) {
                    var c = 2;
                    return "string" != typeof a && (b = a, a = "fx", c--), arguments.length < c ? m.queue(this[0], a) : void 0 === b ? this : this.each(function () {
                        var c = m.queue(this, a, b);
                        m._queueHooks(this, a), "fx" === a && "inprogress" !== c[0] && m.dequeue(this, a)
                    })
                }, dequeue: function (a) {
                    return this.each(function () {
                        m.dequeue(this, a)
                    })
                }, clearQueue: function (a) {
                    return this.queue(a || "fx", [])
                }, promise: function (a, b) {
                    var c, d = 1, e = m.Deferred(), f = this, g = this.length, h = function () {
                        --d || e.resolveWith(f, [f])
                    };
                    "string" != typeof a && (b = a, a = void 0), a = a || "fx";
                    while (g--) c = m._data(f[g], a + "queueHooks"), c && c.empty && (d++, c.empty.add(h));
                    return h(), e.promise(b)
                }
            });
            var S = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source, T = ["Top", "Right", "Bottom", "Left"],
                U = function (a, b) {
                    return a = b || a, "none" === m.css(a, "display") || !m.contains(a.ownerDocument, a)
                }, V = m.access = function (a, b, c, d, e, f, g) {
                    var h = 0, i = a.length, j = null == c;
                    if ("object" === m.type(c)) {
                        e = !0;
                        for (h in c) m.access(a, b, h, c[h], !0, f, g)
                    } else if (void 0 !== d && (e = !0, m.isFunction(d) || (g = !0), j && (g ? (b.call(a, d), b = null) : (j = b, b = function (a, b, c) {
                        return j.call(m(a), c)
                    })), b)) for (; i > h; h++) b(a[h], c, g ? d : d.call(a[h], h, b(a[h], c)));
                    return e ? a : j ? b.call(a) : i ? b(a[0], c) : f
                }, W = /^(?:checkbox|radio)$/i;
            !function () {
                var a = y.createElement("input"), b = y.createElement("div"), c = y.createDocumentFragment();
                if (b.innerHTML = "  <link/><table></table><a href='a.html'>a</a><input type='checkbox'/>", k.leadingWhitespace = 3 === b.firstChild.nodeType, k.tbody = !b.getElementsByTagName("tbody").length, k.htmlSerialize = !!b.getElementsByTagName("link").length, k.html5Clone = "<:nav></:nav>" !== y.createElement("nav").cloneNode(!0).outerHTML, a.type = "checkbox", a.checked = !0, c.appendChild(a), k.appendChecked = a.checked, b.innerHTML = "<textarea>x</textarea>", k.noCloneChecked = !!b.cloneNode(!0).lastChild.defaultValue, c.appendChild(b), b.innerHTML = "<input type='radio' checked='checked' name='t'/>", k.checkClone = b.cloneNode(!0).cloneNode(!0).lastChild.checked, k.noCloneEvent = !0, b.attachEvent && (b.attachEvent("onclick", function () {
                    k.noCloneEvent = !1
                }), b.cloneNode(!0).click()), null == k.deleteExpando) {
                    k.deleteExpando = !0;
                    try {
                        delete b.test
                    } catch (d) {
                        k.deleteExpando = !1
                    }
                }
            }(), function () {
                var b, c, d = y.createElement("div");
                for (b in{
                    submit: !0,
                    change: !0,
                    focusin: !0
                }) c = "on" + b, (k[b + "Bubbles"] = c in a) || (d.setAttribute(c, "t"), k[b + "Bubbles"] = d.attributes[c].expando === !1);
                d = null
            }();
            var X = /^(?:input|select|textarea)$/i, Y = /^key/, Z = /^(?:mouse|pointer|contextmenu)|click/,
                $ = /^(?:focusinfocus|focusoutblur)$/, _ = /^([^.]*)(?:\.(.+)|)$/;

            function aa() {
                return !0
            }

            function ba() {
                return !1
            }

            function ca() {
                try {
                    return y.activeElement
                } catch (a) {
                }
            }

            m.event = {
                global: {},
                add: function (a, b, c, d, e) {
                    var f, g, h, i, j, k, l, n, o, p, q, r = m._data(a);
                    if (r) {
                        c.handler && (i = c, c = i.handler, e = i.selector), c.guid || (c.guid = m.guid++), (g = r.events) || (g = r.events = {}), (k = r.handle) || (k = r.handle = function (a) {
                            return typeof m === K || a && m.event.triggered === a.type ? void 0 : m.event.dispatch.apply(k.elem, arguments)
                        }, k.elem = a), b = (b || "").match(E) || [""], h = b.length;
                        while (h--) f = _.exec(b[h]) || [], o = q = f[1], p = (f[2] || "").split(".").sort(), o && (j = m.event.special[o] || {}, o = (e ? j.delegateType : j.bindType) || o, j = m.event.special[o] || {}, l = m.extend({
                            type: o,
                            origType: q,
                            data: d,
                            handler: c,
                            guid: c.guid,
                            selector: e,
                            needsContext: e && m.expr.match.needsContext.test(e),
                            namespace: p.join(".")
                        }, i), (n = g[o]) || (n = g[o] = [], n.delegateCount = 0, j.setup && j.setup.call(a, d, p, k) !== !1 || (a.addEventListener ? a.addEventListener(o, k, !1) : a.attachEvent && a.attachEvent("on" + o, k))), j.add && (j.add.call(a, l), l.handler.guid || (l.handler.guid = c.guid)), e ? n.splice(n.delegateCount++, 0, l) : n.push(l), m.event.global[o] = !0);
                        a = null
                    }
                },
                remove: function (a, b, c, d, e) {
                    var f, g, h, i, j, k, l, n, o, p, q, r = m.hasData(a) && m._data(a);
                    if (r && (k = r.events)) {
                        b = (b || "").match(E) || [""], j = b.length;
                        while (j--) if (h = _.exec(b[j]) || [], o = q = h[1], p = (h[2] || "").split(".").sort(), o) {
                            l = m.event.special[o] || {}, o = (d ? l.delegateType : l.bindType) || o, n = k[o] || [], h = h[2] && new RegExp("(^|\\.)" + p.join("\\.(?:.*\\.|)") + "(\\.|$)"), i = f = n.length;
                            while (f--) g = n[f], !e && q !== g.origType || c && c.guid !== g.guid || h && !h.test(g.namespace) || d && d !== g.selector && ("**" !== d || !g.selector) || (n.splice(f, 1), g.selector && n.delegateCount--, l.remove && l.remove.call(a, g));
                            i && !n.length && (l.teardown && l.teardown.call(a, p, r.handle) !== !1 || m.removeEvent(a, o, r.handle), delete k[o])
                        } else for (o in k) m.event.remove(a, o + b[j], c, d, !0);
                        m.isEmptyObject(k) && (delete r.handle, m._removeData(a, "events"))
                    }
                },
                trigger: function (b, c, d, e) {
                    var f, g, h, i, k, l, n, o = [d || y], p = j.call(b, "type") ? b.type : b,
                        q = j.call(b, "namespace") ? b.namespace.split(".") : [];
                    if (h = l = d = d || y, 3 !== d.nodeType && 8 !== d.nodeType && !$.test(p + m.event.triggered) && (p.indexOf(".") >= 0 && (q = p.split("."), p = q.shift(), q.sort()), g = p.indexOf(":") < 0 && "on" + p, b = b[m.expando] ? b : new m.Event(p, "object" == typeof b && b), b.isTrigger = e ? 2 : 3, b.namespace = q.join("."), b.namespace_re = b.namespace ? new RegExp("(^|\\.)" + q.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, b.result = void 0, b.target || (b.target = d), c = null == c ? [b] : m.makeArray(c, [b]), k = m.event.special[p] || {}, e || !k.trigger || k.trigger.apply(d, c) !== !1)) {
                        if (!e && !k.noBubble && !m.isWindow(d)) {
                            for (i = k.delegateType || p, $.test(i + p) || (h = h.parentNode); h; h = h.parentNode) o.push(h), l = h;
                            l === (d.ownerDocument || y) && o.push(l.defaultView || l.parentWindow || a)
                        }
                        n = 0;
                        while ((h = o[n++]) && !b.isPropagationStopped()) b.type = n > 1 ? i : k.bindType || p, f = (m._data(h, "events") || {})[b.type] && m._data(h, "handle"), f && f.apply(h, c), f = g && h[g], f && f.apply && m.acceptData(h) && (b.result = f.apply(h, c), b.result === !1 && b.preventDefault());
                        if (b.type = p, !e && !b.isDefaultPrevented() && (!k._default || k._default.apply(o.pop(), c) === !1) && m.acceptData(d) && g && d[p] && !m.isWindow(d)) {
                            l = d[g], l && (d[g] = null), m.event.triggered = p;
                            try {
                                d[p]()
                            } catch (r) {
                            }
                            m.event.triggered = void 0, l && (d[g] = l)
                        }
                        return b.result
                    }
                },
                dispatch: function (a) {
                    a = m.event.fix(a);
                    var b, c, e, f, g, h = [], i = d.call(arguments), j = (m._data(this, "events") || {})[a.type] || [],
                        k = m.event.special[a.type] || {};
                    if (i[0] = a, a.delegateTarget = this, !k.preDispatch || k.preDispatch.call(this, a) !== !1) {
                        h = m.event.handlers.call(this, a, j), b = 0;
                        while ((f = h[b++]) && !a.isPropagationStopped()) {
                            a.currentTarget = f.elem, g = 0;
                            while ((e = f.handlers[g++]) && !a.isImmediatePropagationStopped()) (!a.namespace_re || a.namespace_re.test(e.namespace)) && (a.handleObj = e, a.data = e.data, c = ((m.event.special[e.origType] || {}).handle || e.handler).apply(f.elem, i), void 0 !== c && (a.result = c) === !1 && (a.preventDefault(), a.stopPropagation()))
                        }
                        return k.postDispatch && k.postDispatch.call(this, a), a.result
                    }
                },
                handlers: function (a, b) {
                    var c, d, e, f, g = [], h = b.delegateCount, i = a.target;
                    if (h && i.nodeType && (!a.button || "click" !== a.type)) for (; i != this; i = i.parentNode || this) if (1 === i.nodeType && (i.disabled !== !0 || "click" !== a.type)) {
                        for (e = [], f = 0; h > f; f++) d = b[f], c = d.selector + " ", void 0 === e[c] && (e[c] = d.needsContext ? m(c, this).index(i) >= 0 : m.find(c, this, null, [i]).length), e[c] && e.push(d);
                        e.length && g.push({elem: i, handlers: e})
                    }
                    return h < b.length && g.push({elem: this, handlers: b.slice(h)}), g
                },
                fix: function (a) {
                    if (a[m.expando]) return a;
                    var b, c, d, e = a.type, f = a, g = this.fixHooks[e];
                    g || (this.fixHooks[e] = g = Z.test(e) ? this.mouseHooks : Y.test(e) ? this.keyHooks : {}), d = g.props ? this.props.concat(g.props) : this.props, a = new m.Event(f), b = d.length;
                    while (b--) c = d[b], a[c] = f[c];
                    return a.target || (a.target = f.srcElement || y), 3 === a.target.nodeType && (a.target = a.target.parentNode), a.metaKey = !!a.metaKey, g.filter ? g.filter(a, f) : a
                },
                props: "altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),
                fixHooks: {},
                keyHooks: {
                    props: "char charCode key keyCode".split(" "), filter: function (a, b) {
                        return null == a.which && (a.which = null != b.charCode ? b.charCode : b.keyCode), a
                    }
                },
                mouseHooks: {
                    props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),
                    filter: function (a, b) {
                        var c, d, e, f = b.button, g = b.fromElement;
                        return null == a.pageX && null != b.clientX && (d = a.target.ownerDocument || y, e = d.documentElement, c = d.body, a.pageX = b.clientX + (e && e.scrollLeft || c && c.scrollLeft || 0) - (e && e.clientLeft || c && c.clientLeft || 0), a.pageY = b.clientY + (e && e.scrollTop || c && c.scrollTop || 0) - (e && e.clientTop || c && c.clientTop || 0)), !a.relatedTarget && g && (a.relatedTarget = g === a.target ? b.toElement : g), a.which || void 0 === f || (a.which = 1 & f ? 1 : 2 & f ? 3 : 4 & f ? 2 : 0), a
                    }
                },
                special: {
                    load: {noBubble: !0}, focus: {
                        trigger: function () {
                            if (this !== ca() && this.focus) try {
                                return this.focus(), !1
                            } catch (a) {
                            }
                        }, delegateType: "focusin"
                    }, blur: {
                        trigger: function () {
                            return this === ca() && this.blur ? (this.blur(), !1) : void 0
                        }, delegateType: "focusout"
                    }, click: {
                        trigger: function () {
                            return m.nodeName(this, "input") && "checkbox" === this.type && this.click ? (this.click(), !1) : void 0
                        }, _default: function (a) {
                            return m.nodeName(a.target, "a")
                        }
                    }, beforeunload: {
                        postDispatch: function (a) {
                            void 0 !== a.result && a.originalEvent && (a.originalEvent.returnValue = a.result)
                        }
                    }
                },
                simulate: function (a, b, c, d) {
                    var e = m.extend(new m.Event, c, {type: a, isSimulated: !0, originalEvent: {}});
                    d ? m.event.trigger(e, null, b) : m.event.dispatch.call(b, e), e.isDefaultPrevented() && c.preventDefault()
                }
            }, m.removeEvent = y.removeEventListener ? function (a, b, c) {
                a.removeEventListener && a.removeEventListener(b, c, !1)
            } : function (a, b, c) {
                var d = "on" + b;
                a.detachEvent && (typeof a[d] === K && (a[d] = null), a.detachEvent(d, c))
            }, m.Event = function (a, b) {
                return this instanceof m.Event ? (a && a.type ? (this.originalEvent = a, this.type = a.type, this.isDefaultPrevented = a.defaultPrevented || void 0 === a.defaultPrevented && a.returnValue === !1 ? aa : ba) : this.type = a, b && m.extend(this, b), this.timeStamp = a && a.timeStamp || m.now(), void (this[m.expando] = !0)) : new m.Event(a, b)
            }, m.Event.prototype = {
                isDefaultPrevented: ba,
                isPropagationStopped: ba,
                isImmediatePropagationStopped: ba,
                preventDefault: function () {
                    var a = this.originalEvent;
                    this.isDefaultPrevented = aa, a && (a.preventDefault ? a.preventDefault() : a.returnValue = !1)
                },
                stopPropagation: function () {
                    var a = this.originalEvent;
                    this.isPropagationStopped = aa, a && (a.stopPropagation && a.stopPropagation(), a.cancelBubble = !0)
                },
                stopImmediatePropagation: function () {
                    var a = this.originalEvent;
                    this.isImmediatePropagationStopped = aa, a && a.stopImmediatePropagation && a.stopImmediatePropagation(), this.stopPropagation()
                }
            }, m.each({
                mouseenter: "mouseover",
                mouseleave: "mouseout",
                pointerenter: "pointerover",
                pointerleave: "pointerout"
            }, function (a, b) {
                m.event.special[a] = {
                    delegateType: b, bindType: b, handle: function (a) {
                        var c, d = this, e = a.relatedTarget, f = a.handleObj;
                        return (!e || e !== d && !m.contains(d, e)) && (a.type = f.origType, c = f.handler.apply(this, arguments), a.type = b), c
                    }
                }
            }), k.submitBubbles || (m.event.special.submit = {
                setup: function () {
                    return m.nodeName(this, "form") ? !1 : void m.event.add(this, "click._submit keypress._submit", function (a) {
                        var b = a.target, c = m.nodeName(b, "input") || m.nodeName(b, "button") ? b.form : void 0;
                        c && !m._data(c, "submitBubbles") && (m.event.add(c, "submit._submit", function (a) {
                            a._submit_bubble = !0
                        }), m._data(c, "submitBubbles", !0))
                    })
                }, postDispatch: function (a) {
                    a._submit_bubble && (delete a._submit_bubble, this.parentNode && !a.isTrigger && m.event.simulate("submit", this.parentNode, a, !0))
                }, teardown: function () {
                    return m.nodeName(this, "form") ? !1 : void m.event.remove(this, "._submit")
                }
            }), k.changeBubbles || (m.event.special.change = {
                setup: function () {
                    return X.test(this.nodeName) ? (("checkbox" === this.type || "radio" === this.type) && (m.event.add(this, "propertychange._change", function (a) {
                        "checked" === a.originalEvent.propertyName && (this._just_changed = !0)
                    }), m.event.add(this, "click._change", function (a) {
                        this._just_changed && !a.isTrigger && (this._just_changed = !1), m.event.simulate("change", this, a, !0)
                    })), !1) : void m.event.add(this, "beforeactivate._change", function (a) {
                        var b = a.target;
                        X.test(b.nodeName) && !m._data(b, "changeBubbles") && (m.event.add(b, "change._change", function (a) {
                            !this.parentNode || a.isSimulated || a.isTrigger || m.event.simulate("change", this.parentNode, a, !0)
                        }), m._data(b, "changeBubbles", !0))
                    })
                }, handle: function (a) {
                    var b = a.target;
                    return this !== b || a.isSimulated || a.isTrigger || "radio" !== b.type && "checkbox" !== b.type ? a.handleObj.handler.apply(this, arguments) : void 0
                }, teardown: function () {
                    return m.event.remove(this, "._change"), !X.test(this.nodeName)
                }
            }), k.focusinBubbles || m.each({focus: "focusin", blur: "focusout"}, function (a, b) {
                var c = function (a) {
                    m.event.simulate(b, a.target, m.event.fix(a), !0)
                };
                m.event.special[b] = {
                    setup: function () {
                        var d = this.ownerDocument || this, e = m._data(d, b);
                        e || d.addEventListener(a, c, !0), m._data(d, b, (e || 0) + 1)
                    }, teardown: function () {
                        var d = this.ownerDocument || this, e = m._data(d, b) - 1;
                        e ? m._data(d, b, e) : (d.removeEventListener(a, c, !0), m._removeData(d, b))
                    }
                }
            }), m.fn.extend({
                on: function (a, b, c, d, e) {
                    var f, g;
                    if ("object" == typeof a) {
                        "string" != typeof b && (c = c || b, b = void 0);
                        for (f in a) this.on(f, b, c, a[f], e);
                        return this
                    }
                    if (null == c && null == d ? (d = b, c = b = void 0) : null == d && ("string" == typeof b ? (d = c, c = void 0) : (d = c, c = b, b = void 0)), d === !1) d = ba; else if (!d) return this;
                    return 1 === e && (g = d, d = function (a) {
                        return m().off(a), g.apply(this, arguments)
                    }, d.guid = g.guid || (g.guid = m.guid++)), this.each(function () {
                        m.event.add(this, a, d, c, b)
                    })
                }, one: function (a, b, c, d) {
                    return this.on(a, b, c, d, 1)
                }, off: function (a, b, c) {
                    var d, e;
                    if (a && a.preventDefault && a.handleObj) return d = a.handleObj, m(a.delegateTarget).off(d.namespace ? d.origType + "." + d.namespace : d.origType, d.selector, d.handler), this;
                    if ("object" == typeof a) {
                        for (e in a) this.off(e, b, a[e]);
                        return this
                    }
                    return (b === !1 || "function" == typeof b) && (c = b, b = void 0), c === !1 && (c = ba), this.each(function () {
                        m.event.remove(this, a, c, b)
                    })
                }, trigger: function (a, b) {
                    return this.each(function () {
                        m.event.trigger(a, b, this)
                    })
                }, triggerHandler: function (a, b) {
                    var c = this[0];
                    return c ? m.event.trigger(a, b, c, !0) : void 0
                }
            });

            function da(a) {
                var b = ea.split("|"), c = a.createDocumentFragment();
                if (c.createElement) while (b.length) c.createElement(b.pop());
                return c
            }

            var ea = "abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",
                fa = / jQuery\d+="(?:null|\d+)"/g, ga = new RegExp("<(?:" + ea + ")[\\s/>]", "i"), ha = /^\s+/,
                ia = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi, ja = /<([\w:]+)/,
                ka = /<tbody/i, la = /<|&#?\w+;/, ma = /<(?:script|style|link)/i,
                na = /checked\s*(?:[^=]|=\s*.checked.)/i, oa = /^$|\/(?:java|ecma)script/i, pa = /^true\/(.*)/,
                qa = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g, ra = {
                    option: [1, "<select multiple='multiple'>", "</select>"],
                    legend: [1, "<fieldset>", "</fieldset>"],
                    area: [1, "<map>", "</map>"],
                    param: [1, "<object>", "</object>"],
                    thead: [1, "<table>", "</table>"],
                    tr: [2, "<table><tbody>", "</tbody></table>"],
                    col: [2, "<table><tbody></tbody><colgroup>", "</colgroup></table>"],
                    td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
                    _default: k.htmlSerialize ? [0, "", ""] : [1, "X<div>", "</div>"]
                }, sa = da(y), ta = sa.appendChild(y.createElement("div"));
            ra.optgroup = ra.option, ra.tbody = ra.tfoot = ra.colgroup = ra.caption = ra.thead, ra.th = ra.td;

            function ua(a, b) {
                var c, d, e = 0,
                    f = typeof a.getElementsByTagName !== K ? a.getElementsByTagName(b || "*") : typeof a.querySelectorAll !== K ? a.querySelectorAll(b || "*") : void 0;
                if (!f) for (f = [], c = a.childNodes || a; null != (d = c[e]); e++) !b || m.nodeName(d, b) ? f.push(d) : m.merge(f, ua(d, b));
                return void 0 === b || b && m.nodeName(a, b) ? m.merge([a], f) : f
            }

            function va(a) {
                W.test(a.type) && (a.defaultChecked = a.checked)
            }

            function wa(a, b) {
                return m.nodeName(a, "table") && m.nodeName(11 !== b.nodeType ? b : b.firstChild, "tr") ? a.getElementsByTagName("tbody")[0] || a.appendChild(a.ownerDocument.createElement("tbody")) : a
            }

            function xa(a) {
                return a.type = (null !== m.find.attr(a, "type")) + "/" + a.type, a
            }

            function ya(a) {
                var b = pa.exec(a.type);
                return b ? a.type = b[1] : a.removeAttribute("type"), a
            }

            function za(a, b) {
                for (var c, d = 0; null != (c = a[d]); d++) m._data(c, "globalEval", !b || m._data(b[d], "globalEval"))
            }

            function Aa(a, b) {
                if (1 === b.nodeType && m.hasData(a)) {
                    var c, d, e, f = m._data(a), g = m._data(b, f), h = f.events;
                    if (h) {
                        delete g.handle, g.events = {};
                        for (c in h) for (d = 0, e = h[c].length; e > d; d++) m.event.add(b, c, h[c][d])
                    }
                    g.data && (g.data = m.extend({}, g.data))
                }
            }

            function Ba(a, b) {
                var c, d, e;
                if (1 === b.nodeType) {
                    if (c = b.nodeName.toLowerCase(), !k.noCloneEvent && b[m.expando]) {
                        e = m._data(b);
                        for (d in e.events) m.removeEvent(b, d, e.handle);
                        b.removeAttribute(m.expando)
                    }
                    "script" === c && b.text !== a.text ? (xa(b).text = a.text, ya(b)) : "object" === c ? (b.parentNode && (b.outerHTML = a.outerHTML), k.html5Clone && a.innerHTML && !m.trim(b.innerHTML) && (b.innerHTML = a.innerHTML)) : "input" === c && W.test(a.type) ? (b.defaultChecked = b.checked = a.checked, b.value !== a.value && (b.value = a.value)) : "option" === c ? b.defaultSelected = b.selected = a.defaultSelected : ("input" === c || "textarea" === c) && (b.defaultValue = a.defaultValue)
                }
            }

            m.extend({
                clone: function (a, b, c) {
                    var d, e, f, g, h, i = m.contains(a.ownerDocument, a);
                    if (k.html5Clone || m.isXMLDoc(a) || !ga.test("<" + a.nodeName + ">") ? f = a.cloneNode(!0) : (ta.innerHTML = a.outerHTML, ta.removeChild(f = ta.firstChild)), !(k.noCloneEvent && k.noCloneChecked || 1 !== a.nodeType && 11 !== a.nodeType || m.isXMLDoc(a))) for (d = ua(f), h = ua(a), g = 0; null != (e = h[g]); ++g) d[g] && Ba(e, d[g]);
                    if (b) if (c) for (h = h || ua(a), d = d || ua(f), g = 0; null != (e = h[g]); g++) Aa(e, d[g]); else Aa(a, f);
                    return d = ua(f, "script"), d.length > 0 && za(d, !i && ua(a, "script")), d = h = e = null, f
                }, buildFragment: function (a, b, c, d) {
                    for (var e, f, g, h, i, j, l, n = a.length, o = da(b), p = [], q = 0; n > q; q++) if (f = a[q], f || 0 === f) if ("object" === m.type(f)) m.merge(p, f.nodeType ? [f] : f); else if (la.test(f)) {
                        h = h || o.appendChild(b.createElement("div")), i = (ja.exec(f) || ["", ""])[1].toLowerCase(), l = ra[i] || ra._default, h.innerHTML = l[1] + f.replace(ia, "<$1></$2>") + l[2], e = l[0];
                        while (e--) h = h.lastChild;
                        if (!k.leadingWhitespace && ha.test(f) && p.push(b.createTextNode(ha.exec(f)[0])), !k.tbody) {
                            f = "table" !== i || ka.test(f) ? "<table>" !== l[1] || ka.test(f) ? 0 : h : h.firstChild, e = f && f.childNodes.length;
                            while (e--) m.nodeName(j = f.childNodes[e], "tbody") && !j.childNodes.length && f.removeChild(j)
                        }
                        m.merge(p, h.childNodes), h.textContent = "";
                        while (h.firstChild) h.removeChild(h.firstChild);
                        h = o.lastChild
                    } else p.push(b.createTextNode(f));
                    h && o.removeChild(h), k.appendChecked || m.grep(ua(p, "input"), va), q = 0;
                    while (f = p[q++]) if ((!d || -1 === m.inArray(f, d)) && (g = m.contains(f.ownerDocument, f), h = ua(o.appendChild(f), "script"), g && za(h), c)) {
                        e = 0;
                        while (f = h[e++]) oa.test(f.type || "") && c.push(f)
                    }
                    return h = null, o
                }, cleanData: function (a, b) {
                    for (var d, e, f, g, h = 0, i = m.expando, j = m.cache, l = k.deleteExpando, n = m.event.special; null != (d = a[h]); h++) if ((b || m.acceptData(d)) && (f = d[i], g = f && j[f])) {
                        if (g.events) for (e in g.events) n[e] ? m.event.remove(d, e) : m.removeEvent(d, e, g.handle);
                        j[f] && (delete j[f], l ? delete d[i] : typeof d.removeAttribute !== K ? d.removeAttribute(i) : d[i] = null, c.push(f))
                    }
                }
            }), m.fn.extend({
                text: function (a) {
                    return V(this, function (a) {
                        return void 0 === a ? m.text(this) : this.empty().append((this[0] && this[0].ownerDocument || y).createTextNode(a))
                    }, null, a, arguments.length)
                }, append: function () {
                    return this.domManip(arguments, function (a) {
                        if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                            var b = wa(this, a);
                            b.appendChild(a)
                        }
                    })
                }, prepend: function () {
                    return this.domManip(arguments, function (a) {
                        if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                            var b = wa(this, a);
                            b.insertBefore(a, b.firstChild)
                        }
                    })
                }, before: function () {
                    return this.domManip(arguments, function (a) {
                        this.parentNode && this.parentNode.insertBefore(a, this)
                    })
                }, after: function () {
                    return this.domManip(arguments, function (a) {
                        this.parentNode && this.parentNode.insertBefore(a, this.nextSibling)
                    })
                }, remove: function (a, b) {
                    for (var c, d = a ? m.filter(a, this) : this, e = 0; null != (c = d[e]); e++) b || 1 !== c.nodeType || m.cleanData(ua(c)), c.parentNode && (b && m.contains(c.ownerDocument, c) && za(ua(c, "script")), c.parentNode.removeChild(c));
                    return this
                }, empty: function () {
                    for (var a, b = 0; null != (a = this[b]); b++) {
                        1 === a.nodeType && m.cleanData(ua(a, !1));
                        while (a.firstChild) a.removeChild(a.firstChild);
                        a.options && m.nodeName(a, "select") && (a.options.length = 0)
                    }
                    return this
                }, clone: function (a, b) {
                    return a = null == a ? !1 : a, b = null == b ? a : b, this.map(function () {
                        return m.clone(this, a, b)
                    })
                }, html: function (a) {
                    return V(this, function (a) {
                        var b = this[0] || {}, c = 0, d = this.length;
                        if (void 0 === a) return 1 === b.nodeType ? b.innerHTML.replace(fa, "") : void 0;
                        if (!("string" != typeof a || ma.test(a) || !k.htmlSerialize && ga.test(a) || !k.leadingWhitespace && ha.test(a) || ra[(ja.exec(a) || ["", ""])[1].toLowerCase()])) {
                            a = a.replace(ia, "<$1></$2>");
                            try {
                                for (; d > c; c++) b = this[c] || {}, 1 === b.nodeType && (m.cleanData(ua(b, !1)), b.innerHTML = a);
                                b = 0
                            } catch (e) {
                            }
                        }
                        b && this.empty().append(a)
                    }, null, a, arguments.length)
                }, replaceWith: function () {
                    var a = arguments[0];
                    return this.domManip(arguments, function (b) {
                        a = this.parentNode, m.cleanData(ua(this)), a && a.replaceChild(b, this)
                    }), a && (a.length || a.nodeType) ? this : this.remove()
                }, detach: function (a) {
                    return this.remove(a, !0)
                }, domManip: function (a, b) {
                    a = e.apply([], a);
                    var c, d, f, g, h, i, j = 0, l = this.length, n = this, o = l - 1, p = a[0], q = m.isFunction(p);
                    if (q || l > 1 && "string" == typeof p && !k.checkClone && na.test(p)) return this.each(function (c) {
                        var d = n.eq(c);
                        q && (a[0] = p.call(this, c, d.html())), d.domManip(a, b)
                    });
                    if (l && (i = m.buildFragment(a, this[0].ownerDocument, !1, this), c = i.firstChild, 1 === i.childNodes.length && (i = c), c)) {
                        for (g = m.map(ua(i, "script"), xa), f = g.length; l > j; j++) d = i, j !== o && (d = m.clone(d, !0, !0), f && m.merge(g, ua(d, "script"))), b.call(this[j], d, j);
                        if (f) for (h = g[g.length - 1].ownerDocument, m.map(g, ya), j = 0; f > j; j++) d = g[j], oa.test(d.type || "") && !m._data(d, "globalEval") && m.contains(h, d) && (d.src ? m._evalUrl && m._evalUrl(d.src) : m.globalEval((d.text || d.textContent || d.innerHTML || "").replace(qa, "")));
                        i = c = null
                    }
                    return this
                }
            }), m.each({
                appendTo: "append",
                prependTo: "prepend",
                insertBefore: "before",
                insertAfter: "after",
                replaceAll: "replaceWith"
            }, function (a, b) {
                m.fn[a] = function (a) {
                    for (var c, d = 0, e = [], g = m(a), h = g.length - 1; h >= d; d++) c = d === h ? this : this.clone(!0), m(g[d])[b](c), f.apply(e, c.get());
                    return this.pushStack(e)
                }
            });
            var Ca, Da = {};

            function Ea(b, c) {
                var d, e = m(c.createElement(b)).appendTo(c.body),
                    f = a.getDefaultComputedStyle && (d = a.getDefaultComputedStyle(e[0])) ? d.display : m.css(e[0], "display");
                return e.detach(), f
            }

            function Fa(a) {
                var b = y, c = Da[a];
                return c || (c = Ea(a, b), "none" !== c && c || (Ca = (Ca || m("<iframe frameborder='0' width='0' height='0'/>")).appendTo(b.documentElement), b = (Ca[0].contentWindow || Ca[0].contentDocument).document, b.write(), b.close(), c = Ea(a, b), Ca.detach()), Da[a] = c), c
            }

            !function () {
                var a;
                k.shrinkWrapBlocks = function () {
                    if (null != a) return a;
                    a = !1;
                    var b, c, d;
                    return c = y.getElementsByTagName("body")[0], c && c.style ? (b = y.createElement("div"), d = y.createElement("div"), d.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px", c.appendChild(d).appendChild(b), typeof b.style.zoom !== K && (b.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:1px;width:1px;zoom:1", b.appendChild(y.createElement("div")).style.width = "5px", a = 3 !== b.offsetWidth), c.removeChild(d), a) : void 0
                }
            }();
            var Ga = /^margin/, Ha = new RegExp("^(" + S + ")(?!px)[a-z%]+$", "i"), Ia, Ja,
                Ka = /^(top|right|bottom|left)$/;
            a.getComputedStyle ? (Ia = function (b) {
                return b.ownerDocument.defaultView.opener ? b.ownerDocument.defaultView.getComputedStyle(b, null) : a.getComputedStyle(b, null)
            }, Ja = function (a, b, c) {
                var d, e, f, g, h = a.style;
                return c = c || Ia(a), g = c ? c.getPropertyValue(b) || c[b] : void 0, c && ("" !== g || m.contains(a.ownerDocument, a) || (g = m.style(a, b)), Ha.test(g) && Ga.test(b) && (d = h.width, e = h.minWidth, f = h.maxWidth, h.minWidth = h.maxWidth = h.width = g, g = c.width, h.width = d, h.minWidth = e, h.maxWidth = f)), void 0 === g ? g : g + ""
            }) : y.documentElement.currentStyle && (Ia = function (a) {
                return a.currentStyle
            }, Ja = function (a, b, c) {
                var d, e, f, g, h = a.style;
                return c = c || Ia(a), g = c ? c[b] : void 0, null == g && h && h[b] && (g = h[b]), Ha.test(g) && !Ka.test(b) && (d = h.left, e = a.runtimeStyle, f = e && e.left, f && (e.left = a.currentStyle.left), h.left = "fontSize" === b ? "1em" : g, g = h.pixelLeft + "px", h.left = d, f && (e.left = f)), void 0 === g ? g : g + "" || "auto"
            });

            function La(a, b) {
                return {
                    get: function () {
                        var c = a();
                        if (null != c) return c ? void delete this.get : (this.get = b).apply(this, arguments)
                    }
                }
            }

            !function () {
                var b, c, d, e, f, g, h;
                if (b = y.createElement("div"), b.innerHTML = "  <link/><table></table><a href='a.html'>a</a><input type='checkbox'/>", d = b.getElementsByTagName("a")[0], c = d && d.style) {
                    c.cssText = "float:left;opacity:.5", k.opacity = "0.5" === c.opacity, k.cssFloat = !!c.cssFloat, b.style.backgroundClip = "content-box", b.cloneNode(!0).style.backgroundClip = "", k.clearCloneStyle = "content-box" === b.style.backgroundClip, k.boxSizing = "" === c.boxSizing || "" === c.MozBoxSizing || "" === c.WebkitBoxSizing, m.extend(k, {
                        reliableHiddenOffsets: function () {
                            return null == g && i(), g
                        }, boxSizingReliable: function () {
                            return null == f && i(), f
                        }, pixelPosition: function () {
                            return null == e && i(), e
                        }, reliableMarginRight: function () {
                            return null == h && i(), h
                        }
                    });

                    function i() {
                        var b, c, d, i;
                        c = y.getElementsByTagName("body")[0], c && c.style && (b = y.createElement("div"), d = y.createElement("div"), d.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px", c.appendChild(d).appendChild(b), b.style.cssText = "-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;display:block;margin-top:1%;top:1%;border:1px;padding:1px;width:4px;position:absolute", e = f = !1, h = !0, a.getComputedStyle && (e = "1%" !== (a.getComputedStyle(b, null) || {}).top, f = "4px" === (a.getComputedStyle(b, null) || {width: "4px"}).width, i = b.appendChild(y.createElement("div")), i.style.cssText = b.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0", i.style.marginRight = i.style.width = "0", b.style.width = "1px", h = !parseFloat((a.getComputedStyle(i, null) || {}).marginRight), b.removeChild(i)), b.innerHTML = "<table><tr><td></td><td>t</td></tr></table>", i = b.getElementsByTagName("td"), i[0].style.cssText = "margin:0;border:0;padding:0;display:none", g = 0 === i[0].offsetHeight, g && (i[0].style.display = "", i[1].style.display = "none", g = 0 === i[0].offsetHeight), c.removeChild(d))
                    }
                }
            }(), m.swap = function (a, b, c, d) {
                var e, f, g = {};
                for (f in b) g[f] = a.style[f], a.style[f] = b[f];
                e = c.apply(a, d || []);
                for (f in b) a.style[f] = g[f];
                return e
            };
            var Ma = /alpha\([^)]*\)/i, Na = /opacity\s*=\s*([^)]*)/, Oa = /^(none|table(?!-c[ea]).+)/,
                Pa = new RegExp("^(" + S + ")(.*)$", "i"), Qa = new RegExp("^([+-])=(" + S + ")", "i"),
                Ra = {position: "absolute", visibility: "hidden", display: "block"},
                Sa = {letterSpacing: "0", fontWeight: "400"}, Ta = ["Webkit", "O", "Moz", "ms"];

            function Ua(a, b) {
                if (b in a) return b;
                var c = b.charAt(0).toUpperCase() + b.slice(1), d = b, e = Ta.length;
                while (e--) if (b = Ta[e] + c, b in a) return b;
                return d
            }

            function Va(a, b) {
                for (var c, d, e, f = [], g = 0, h = a.length; h > g; g++) d = a[g], d.style && (f[g] = m._data(d, "olddisplay"), c = d.style.display, b ? (f[g] || "none" !== c || (d.style.display = ""), "" === d.style.display && U(d) && (f[g] = m._data(d, "olddisplay", Fa(d.nodeName)))) : (e = U(d), (c && "none" !== c || !e) && m._data(d, "olddisplay", e ? c : m.css(d, "display"))));
                for (g = 0; h > g; g++) d = a[g], d.style && (b && "none" !== d.style.display && "" !== d.style.display || (d.style.display = b ? f[g] || "" : "none"));
                return a
            }

            function Wa(a, b, c) {
                var d = Pa.exec(b);
                return d ? Math.max(0, d[1] - (c || 0)) + (d[2] || "px") : b
            }

            function Xa(a, b, c, d, e) {
                for (var f = c === (d ? "border" : "content") ? 4 : "width" === b ? 1 : 0, g = 0; 4 > f; f += 2) "margin" === c && (g += m.css(a, c + T[f], !0, e)), d ? ("content" === c && (g -= m.css(a, "padding" + T[f], !0, e)), "margin" !== c && (g -= m.css(a, "border" + T[f] + "Width", !0, e))) : (g += m.css(a, "padding" + T[f], !0, e), "padding" !== c && (g += m.css(a, "border" + T[f] + "Width", !0, e)));
                return g
            }

            function Ya(a, b, c) {
                var d = !0, e = "width" === b ? a.offsetWidth : a.offsetHeight, f = Ia(a),
                    g = k.boxSizing && "border-box" === m.css(a, "boxSizing", !1, f);
                if (0 >= e || null == e) {
                    if (e = Ja(a, b, f), (0 > e || null == e) && (e = a.style[b]), Ha.test(e)) return e;
                    d = g && (k.boxSizingReliable() || e === a.style[b]), e = parseFloat(e) || 0
                }
                return e + Xa(a, b, c || (g ? "border" : "content"), d, f) + "px"
            }

            m.extend({
                cssHooks: {
                    opacity: {
                        get: function (a, b) {
                            if (b) {
                                var c = Ja(a, "opacity");
                                return "" === c ? "1" : c
                            }
                        }
                    }
                },
                cssNumber: {
                    columnCount: !0,
                    fillOpacity: !0,
                    flexGrow: !0,
                    flexShrink: !0,
                    fontWeight: !0,
                    lineHeight: !0,
                    opacity: !0,
                    order: !0,
                    orphans: !0,
                    widows: !0,
                    zIndex: !0,
                    zoom: !0
                },
                cssProps: {"float": k.cssFloat ? "cssFloat" : "styleFloat"},
                style: function (a, b, c, d) {
                    if (a && 3 !== a.nodeType && 8 !== a.nodeType && a.style) {
                        var e, f, g, h = m.camelCase(b), i = a.style;
                        if (b = m.cssProps[h] || (m.cssProps[h] = Ua(i, h)), g = m.cssHooks[b] || m.cssHooks[h], void 0 === c) return g && "get" in g && void 0 !== (e = g.get(a, !1, d)) ? e : i[b];
                        if (f = typeof c, "string" === f && (e = Qa.exec(c)) && (c = (e[1] + 1) * e[2] + parseFloat(m.css(a, b)), f = "number"), null != c && c === c && ("number" !== f || m.cssNumber[h] || (c += "px"), k.clearCloneStyle || "" !== c || 0 !== b.indexOf("background") || (i[b] = "inherit"), !(g && "set" in g && void 0 === (c = g.set(a, c, d))))) try {
                            i[b] = c
                        } catch (j) {
                        }
                    }
                },
                css: function (a, b, c, d) {
                    var e, f, g, h = m.camelCase(b);
                    return b = m.cssProps[h] || (m.cssProps[h] = Ua(a.style, h)), g = m.cssHooks[b] || m.cssHooks[h], g && "get" in g && (f = g.get(a, !0, c)), void 0 === f && (f = Ja(a, b, d)), "normal" === f && b in Sa && (f = Sa[b]), "" === c || c ? (e = parseFloat(f), c === !0 || m.isNumeric(e) ? e || 0 : f) : f
                }
            }), m.each(["height", "width"], function (a, b) {
                m.cssHooks[b] = {
                    get: function (a, c, d) {
                        return c ? Oa.test(m.css(a, "display")) && 0 === a.offsetWidth ? m.swap(a, Ra, function () {
                            return Ya(a, b, d)
                        }) : Ya(a, b, d) : void 0
                    }, set: function (a, c, d) {
                        var e = d && Ia(a);
                        return Wa(a, c, d ? Xa(a, b, d, k.boxSizing && "border-box" === m.css(a, "boxSizing", !1, e), e) : 0)
                    }
                }
            }), k.opacity || (m.cssHooks.opacity = {
                get: function (a, b) {
                    return Na.test((b && a.currentStyle ? a.currentStyle.filter : a.style.filter) || "") ? .01 * parseFloat(RegExp.$1) + "" : b ? "1" : ""
                }, set: function (a, b) {
                    var c = a.style, d = a.currentStyle, e = m.isNumeric(b) ? "alpha(opacity=" + 100 * b + ")" : "",
                        f = d && d.filter || c.filter || "";
                    c.zoom = 1, (b >= 1 || "" === b) && "" === m.trim(f.replace(Ma, "")) && c.removeAttribute && (c.removeAttribute("filter"), "" === b || d && !d.filter) || (c.filter = Ma.test(f) ? f.replace(Ma, e) : f + " " + e)
                }
            }), m.cssHooks.marginRight = La(k.reliableMarginRight, function (a, b) {
                return b ? m.swap(a, {display: "inline-block"}, Ja, [a, "marginRight"]) : void 0
            }), m.each({margin: "", padding: "", border: "Width"}, function (a, b) {
                m.cssHooks[a + b] = {
                    expand: function (c) {
                        for (var d = 0, e = {}, f = "string" == typeof c ? c.split(" ") : [c]; 4 > d; d++) e[a + T[d] + b] = f[d] || f[d - 2] || f[0];
                        return e
                    }
                }, Ga.test(a) || (m.cssHooks[a + b].set = Wa)
            }), m.fn.extend({
                css: function (a, b) {
                    return V(this, function (a, b, c) {
                        var d, e, f = {}, g = 0;
                        if (m.isArray(b)) {
                            for (d = Ia(a), e = b.length; e > g; g++) f[b[g]] = m.css(a, b[g], !1, d);
                            return f
                        }
                        return void 0 !== c ? m.style(a, b, c) : m.css(a, b)
                    }, a, b, arguments.length > 1)
                }, show: function () {
                    return Va(this, !0)
                }, hide: function () {
                    return Va(this)
                }, toggle: function (a) {
                    return "boolean" == typeof a ? a ? this.show() : this.hide() : this.each(function () {
                        U(this) ? m(this).show() : m(this).hide()
                    })
                }
            });

            function Za(a, b, c, d, e) {
                return new Za.prototype.init(a, b, c, d, e)
            }

            m.Tween = Za, Za.prototype = {
                constructor: Za, init: function (a, b, c, d, e, f) {
                    this.elem = a, this.prop = c, this.easing = e || "swing", this.options = b, this.start = this.now = this.cur(), this.end = d, this.unit = f || (m.cssNumber[c] ? "" : "px")
                }, cur: function () {
                    var a = Za.propHooks[this.prop];
                    return a && a.get ? a.get(this) : Za.propHooks._default.get(this)
                }, run: function (a) {
                    var b, c = Za.propHooks[this.prop];
                    return this.options.duration ? this.pos = b = m.easing[this.easing](a, this.options.duration * a, 0, 1, this.options.duration) : this.pos = b = a, this.now = (this.end - this.start) * b + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), c && c.set ? c.set(this) : Za.propHooks._default.set(this), this
                }
            }, Za.prototype.init.prototype = Za.prototype, Za.propHooks = {
                _default: {
                    get: function (a) {
                        var b;
                        return null == a.elem[a.prop] || a.elem.style && null != a.elem.style[a.prop] ? (b = m.css(a.elem, a.prop, ""), b && "auto" !== b ? b : 0) : a.elem[a.prop]
                    }, set: function (a) {
                        m.fx.step[a.prop] ? m.fx.step[a.prop](a) : a.elem.style && (null != a.elem.style[m.cssProps[a.prop]] || m.cssHooks[a.prop]) ? m.style(a.elem, a.prop, a.now + a.unit) : a.elem[a.prop] = a.now
                    }
                }
            }, Za.propHooks.scrollTop = Za.propHooks.scrollLeft = {
                set: function (a) {
                    a.elem.nodeType && a.elem.parentNode && (a.elem[a.prop] = a.now)
                }
            }, m.easing = {
                linear: function (a) {
                    return a
                }, swing: function (a) {
                    return .5 - Math.cos(a * Math.PI) / 2
                }
            }, m.fx = Za.prototype.init, m.fx.step = {};
            var $a, _a, ab = /^(?:toggle|show|hide)$/, bb = new RegExp("^(?:([+-])=|)(" + S + ")([a-z%]*)$", "i"),
                cb = /queueHooks$/, db = [ib], eb = {
                    "*": [function (a, b) {
                        var c = this.createTween(a, b), d = c.cur(), e = bb.exec(b),
                            f = e && e[3] || (m.cssNumber[a] ? "" : "px"),
                            g = (m.cssNumber[a] || "px" !== f && +d) && bb.exec(m.css(c.elem, a)), h = 1, i = 20;
                        if (g && g[3] !== f) {
                            f = f || g[3], e = e || [], g = +d || 1;
                            do h = h || ".5", g /= h, m.style(c.elem, a, g + f); while (h !== (h = c.cur() / d) && 1 !== h && --i)
                        }
                        return e && (g = c.start = +g || +d || 0, c.unit = f, c.end = e[1] ? g + (e[1] + 1) * e[2] : +e[2]), c
                    }]
                };

            function fb() {
                return setTimeout(function () {
                    $a = void 0
                }), $a = m.now()
            }

            function gb(a, b) {
                var c, d = {height: a}, e = 0;
                for (b = b ? 1 : 0; 4 > e; e += 2 - b) c = T[e], d["margin" + c] = d["padding" + c] = a;
                return b && (d.opacity = d.width = a), d
            }

            function hb(a, b, c) {
                for (var d, e = (eb[b] || []).concat(eb["*"]), f = 0, g = e.length; g > f; f++) if (d = e[f].call(c, b, a)) return d
            }

            function ib(a, b, c) {
                var d, e, f, g, h, i, j, l, n = this, o = {}, p = a.style, q = a.nodeType && U(a),
                    r = m._data(a, "fxshow");
                c.queue || (h = m._queueHooks(a, "fx"), null == h.unqueued && (h.unqueued = 0, i = h.empty.fire, h.empty.fire = function () {
                    h.unqueued || i()
                }), h.unqueued++, n.always(function () {
                    n.always(function () {
                        h.unqueued--, m.queue(a, "fx").length || h.empty.fire()
                    })
                })), 1 === a.nodeType && ("height" in b || "width" in b) && (c.overflow = [p.overflow, p.overflowX, p.overflowY], j = m.css(a, "display"), l = "none" === j ? m._data(a, "olddisplay") || Fa(a.nodeName) : j, "inline" === l && "none" === m.css(a, "float") && (k.inlineBlockNeedsLayout && "inline" !== Fa(a.nodeName) ? p.zoom = 1 : p.display = "inline-block")), c.overflow && (p.overflow = "hidden", k.shrinkWrapBlocks() || n.always(function () {
                    p.overflow = c.overflow[0], p.overflowX = c.overflow[1], p.overflowY = c.overflow[2]
                }));
                for (d in b) if (e = b[d], ab.exec(e)) {
                    if (delete b[d], f = f || "toggle" === e, e === (q ? "hide" : "show")) {
                        if ("show" !== e || !r || void 0 === r[d]) continue;
                        q = !0
                    }
                    o[d] = r && r[d] || m.style(a, d)
                } else j = void 0;
                if (m.isEmptyObject(o)) "inline" === ("none" === j ? Fa(a.nodeName) : j) && (p.display = j); else {
                    r ? "hidden" in r && (q = r.hidden) : r = m._data(a, "fxshow", {}), f && (r.hidden = !q), q ? m(a).show() : n.done(function () {
                        m(a).hide()
                    }), n.done(function () {
                        var b;
                        m._removeData(a, "fxshow");
                        for (b in o) m.style(a, b, o[b])
                    });
                    for (d in o) g = hb(q ? r[d] : 0, d, n), d in r || (r[d] = g.start, q && (g.end = g.start, g.start = "width" === d || "height" === d ? 1 : 0))
                }
            }

            function jb(a, b) {
                var c, d, e, f, g;
                for (c in a) if (d = m.camelCase(c), e = b[d], f = a[c], m.isArray(f) && (e = f[1], f = a[c] = f[0]), c !== d && (a[d] = f, delete a[c]), g = m.cssHooks[d], g && "expand" in g) {
                    f = g.expand(f), delete a[d];
                    for (c in f) c in a || (a[c] = f[c], b[c] = e)
                } else b[d] = e
            }

            function kb(a, b, c) {
                var d, e, f = 0, g = db.length, h = m.Deferred().always(function () {
                    delete i.elem
                }), i = function () {
                    if (e) return !1;
                    for (var b = $a || fb(), c = Math.max(0, j.startTime + j.duration - b), d = c / j.duration || 0, f = 1 - d, g = 0, i = j.tweens.length; i > g; g++) j.tweens[g].run(f);
                    return h.notifyWith(a, [j, f, c]), 1 > f && i ? c : (h.resolveWith(a, [j]), !1)
                }, j = h.promise({
                    elem: a,
                    props: m.extend({}, b),
                    opts: m.extend(!0, {specialEasing: {}}, c),
                    originalProperties: b,
                    originalOptions: c,
                    startTime: $a || fb(),
                    duration: c.duration,
                    tweens: [],
                    createTween: function (b, c) {
                        var d = m.Tween(a, j.opts, b, c, j.opts.specialEasing[b] || j.opts.easing);
                        return j.tweens.push(d), d
                    },
                    stop: function (b) {
                        var c = 0, d = b ? j.tweens.length : 0;
                        if (e) return this;
                        for (e = !0; d > c; c++) j.tweens[c].run(1);
                        return b ? h.resolveWith(a, [j, b]) : h.rejectWith(a, [j, b]), this
                    }
                }), k = j.props;
                for (jb(k, j.opts.specialEasing); g > f; f++) if (d = db[f].call(j, a, k, j.opts)) return d;
                return m.map(k, hb, j), m.isFunction(j.opts.start) && j.opts.start.call(a, j), m.fx.timer(m.extend(i, {
                    elem: a,
                    anim: j,
                    queue: j.opts.queue
                })), j.progress(j.opts.progress).done(j.opts.done, j.opts.complete).fail(j.opts.fail).always(j.opts.always)
            }

            m.Animation = m.extend(kb, {
                tweener: function (a, b) {
                    m.isFunction(a) ? (b = a, a = ["*"]) : a = a.split(" ");
                    for (var c, d = 0, e = a.length; e > d; d++) c = a[d], eb[c] = eb[c] || [], eb[c].unshift(b)
                }, prefilter: function (a, b) {
                    b ? db.unshift(a) : db.push(a)
                }
            }), m.speed = function (a, b, c) {
                var d = a && "object" == typeof a ? m.extend({}, a) : {
                    complete: c || !c && b || m.isFunction(a) && a,
                    duration: a,
                    easing: c && b || b && !m.isFunction(b) && b
                };
                return d.duration = m.fx.off ? 0 : "number" == typeof d.duration ? d.duration : d.duration in m.fx.speeds ? m.fx.speeds[d.duration] : m.fx.speeds._default, (null == d.queue || d.queue === !0) && (d.queue = "fx"), d.old = d.complete, d.complete = function () {
                    m.isFunction(d.old) && d.old.call(this), d.queue && m.dequeue(this, d.queue)
                }, d
            }, m.fn.extend({
                fadeTo: function (a, b, c, d) {
                    return this.filter(U).css("opacity", 0).show().end().animate({opacity: b}, a, c, d)
                }, animate: function (a, b, c, d) {
                    var e = m.isEmptyObject(a), f = m.speed(b, c, d), g = function () {
                        var b = kb(this, m.extend({}, a), f);
                        (e || m._data(this, "finish")) && b.stop(!0)
                    };
                    return g.finish = g, e || f.queue === !1 ? this.each(g) : this.queue(f.queue, g)
                }, stop: function (a, b, c) {
                    var d = function (a) {
                        var b = a.stop;
                        delete a.stop, b(c)
                    };
                    return "string" != typeof a && (c = b, b = a, a = void 0), b && a !== !1 && this.queue(a || "fx", []), this.each(function () {
                        var b = !0, e = null != a && a + "queueHooks", f = m.timers, g = m._data(this);
                        if (e) g[e] && g[e].stop && d(g[e]); else for (e in g) g[e] && g[e].stop && cb.test(e) && d(g[e]);
                        for (e = f.length; e--;) f[e].elem !== this || null != a && f[e].queue !== a || (f[e].anim.stop(c), b = !1, f.splice(e, 1));
                        (b || !c) && m.dequeue(this, a)
                    })
                }, finish: function (a) {
                    return a !== !1 && (a = a || "fx"), this.each(function () {
                        var b, c = m._data(this), d = c[a + "queue"], e = c[a + "queueHooks"], f = m.timers,
                            g = d ? d.length : 0;
                        for (c.finish = !0, m.queue(this, a, []), e && e.stop && e.stop.call(this, !0), b = f.length; b--;) f[b].elem === this && f[b].queue === a && (f[b].anim.stop(!0), f.splice(b, 1));
                        for (b = 0; g > b; b++) d[b] && d[b].finish && d[b].finish.call(this);
                        delete c.finish
                    })
                }
            }), m.each(["toggle", "show", "hide"], function (a, b) {
                var c = m.fn[b];
                m.fn[b] = function (a, d, e) {
                    return null == a || "boolean" == typeof a ? c.apply(this, arguments) : this.animate(gb(b, !0), a, d, e)
                }
            }), m.each({
                slideDown: gb("show"),
                slideUp: gb("hide"),
                slideToggle: gb("toggle"),
                fadeIn: {opacity: "show"},
                fadeOut: {opacity: "hide"},
                fadeToggle: {opacity: "toggle"}
            }, function (a, b) {
                m.fn[a] = function (a, c, d) {
                    return this.animate(b, a, c, d)
                }
            }), m.timers = [], m.fx.tick = function () {
                var a, b = m.timers, c = 0;
                for ($a = m.now(); c < b.length; c++) a = b[c], a() || b[c] !== a || b.splice(c--, 1);
                b.length || m.fx.stop(), $a = void 0
            }, m.fx.timer = function (a) {
                m.timers.push(a), a() ? m.fx.start() : m.timers.pop()
            }, m.fx.interval = 13, m.fx.start = function () {
                _a || (_a = setInterval(m.fx.tick, m.fx.interval))
            }, m.fx.stop = function () {
                clearInterval(_a), _a = null
            }, m.fx.speeds = {slow: 600, fast: 200, _default: 400}, m.fn.delay = function (a, b) {
                return a = m.fx ? m.fx.speeds[a] || a : a, b = b || "fx", this.queue(b, function (b, c) {
                    var d = setTimeout(b, a);
                    c.stop = function () {
                        clearTimeout(d)
                    }
                })
            }, function () {
                var a, b, c, d, e;
                b = y.createElement("div"), b.setAttribute("className", "t"), b.innerHTML = "  <link/><table></table><a href='a.html'>a</a><input type='checkbox'/>", d = b.getElementsByTagName("a")[0], c = y.createElement("select"), e = c.appendChild(y.createElement("option")), a = b.getElementsByTagName("input")[0], d.style.cssText = "top:1px", k.getSetAttribute = "t" !== b.className, k.style = /top/.test(d.getAttribute("style")), k.hrefNormalized = "/a" === d.getAttribute("href"), k.checkOn = !!a.value, k.optSelected = e.selected, k.enctype = !!y.createElement("form").enctype, c.disabled = !0, k.optDisabled = !e.disabled, a = y.createElement("input"), a.setAttribute("value", ""), k.input = "" === a.getAttribute("value"), a.value = "t", a.setAttribute("type", "radio"), k.radioValue = "t" === a.value
            }();
            var lb = /\r/g;
            m.fn.extend({
                val: function (a) {
                    var b, c, d, e = this[0];
                    {
                        if (arguments.length) return d = m.isFunction(a), this.each(function (c) {
                            var e;
                            1 === this.nodeType && (e = d ? a.call(this, c, m(this).val()) : a, null == e ? e = "" : "number" == typeof e ? e += "" : m.isArray(e) && (e = m.map(e, function (a) {
                                return null == a ? "" : a + ""
                            })), b = m.valHooks[this.type] || m.valHooks[this.nodeName.toLowerCase()], b && "set" in b && void 0 !== b.set(this, e, "value") || (this.value = e))
                        });
                        if (e) return b = m.valHooks[e.type] || m.valHooks[e.nodeName.toLowerCase()], b && "get" in b && void 0 !== (c = b.get(e, "value")) ? c : (c = e.value, "string" == typeof c ? c.replace(lb, "") : null == c ? "" : c)
                    }
                }
            }), m.extend({
                valHooks: {
                    option: {
                        get: function (a) {
                            var b = m.find.attr(a, "value");
                            return null != b ? b : m.trim(m.text(a))
                        }
                    }, select: {
                        get: function (a) {
                            for (var b, c, d = a.options, e = a.selectedIndex, f = "select-one" === a.type || 0 > e, g = f ? null : [], h = f ? e + 1 : d.length, i = 0 > e ? h : f ? e : 0; h > i; i++) if (c = d[i], !(!c.selected && i !== e || (k.optDisabled ? c.disabled : null !== c.getAttribute("disabled")) || c.parentNode.disabled && m.nodeName(c.parentNode, "optgroup"))) {
                                if (b = m(c).val(), f) return b;
                                g.push(b)
                            }
                            return g
                        }, set: function (a, b) {
                            var c, d, e = a.options, f = m.makeArray(b), g = e.length;
                            while (g--) if (d = e[g], m.inArray(m.valHooks.option.get(d), f) >= 0) try {
                                d.selected = c = !0
                            } catch (h) {
                                d.scrollHeight
                            } else d.selected = !1;
                            return c || (a.selectedIndex = -1), e
                        }
                    }
                }
            }), m.each(["radio", "checkbox"], function () {
                m.valHooks[this] = {
                    set: function (a, b) {
                        return m.isArray(b) ? a.checked = m.inArray(m(a).val(), b) >= 0 : void 0
                    }
                }, k.checkOn || (m.valHooks[this].get = function (a) {
                    return null === a.getAttribute("value") ? "on" : a.value
                })
            });
            var mb, nb, ob = m.expr.attrHandle, pb = /^(?:checked|selected)$/i, qb = k.getSetAttribute, rb = k.input;
            m.fn.extend({
                attr: function (a, b) {
                    return V(this, m.attr, a, b, arguments.length > 1)
                }, removeAttr: function (a) {
                    return this.each(function () {
                        m.removeAttr(this, a)
                    })
                }
            }), m.extend({
                attr: function (a, b, c) {
                    var d, e, f = a.nodeType;
                    if (a && 3 !== f && 8 !== f && 2 !== f) return typeof a.getAttribute === K ? m.prop(a, b, c) : (1 === f && m.isXMLDoc(a) || (b = b.toLowerCase(), d = m.attrHooks[b] || (m.expr.match.bool.test(b) ? nb : mb)), void 0 === c ? d && "get" in d && null !== (e = d.get(a, b)) ? e : (e = m.find.attr(a, b), null == e ? void 0 : e) : null !== c ? d && "set" in d && void 0 !== (e = d.set(a, c, b)) ? e : (a.setAttribute(b, c + ""), c) : void m.removeAttr(a, b))
                }, removeAttr: function (a, b) {
                    var c, d, e = 0, f = b && b.match(E);
                    if (f && 1 === a.nodeType) while (c = f[e++]) d = m.propFix[c] || c, m.expr.match.bool.test(c) ? rb && qb || !pb.test(c) ? a[d] = !1 : a[m.camelCase("default-" + c)] = a[d] = !1 : m.attr(a, c, ""), a.removeAttribute(qb ? c : d)
                }, attrHooks: {
                    type: {
                        set: function (a, b) {
                            if (!k.radioValue && "radio" === b && m.nodeName(a, "input")) {
                                var c = a.value;
                                return a.setAttribute("type", b), c && (a.value = c), b
                            }
                        }
                    }
                }
            }), nb = {
                set: function (a, b, c) {
                    return b === !1 ? m.removeAttr(a, c) : rb && qb || !pb.test(c) ? a.setAttribute(!qb && m.propFix[c] || c, c) : a[m.camelCase("default-" + c)] = a[c] = !0, c
                }
            }, m.each(m.expr.match.bool.source.match(/\w+/g), function (a, b) {
                var c = ob[b] || m.find.attr;
                ob[b] = rb && qb || !pb.test(b) ? function (a, b, d) {
                    var e, f;
                    return d || (f = ob[b], ob[b] = e, e = null != c(a, b, d) ? b.toLowerCase() : null, ob[b] = f), e
                } : function (a, b, c) {
                    return c ? void 0 : a[m.camelCase("default-" + b)] ? b.toLowerCase() : null
                }
            }), rb && qb || (m.attrHooks.value = {
                set: function (a, b, c) {
                    return m.nodeName(a, "input") ? void (a.defaultValue = b) : mb && mb.set(a, b, c)
                }
            }), qb || (mb = {
                set: function (a, b, c) {
                    var d = a.getAttributeNode(c);
                    return d || a.setAttributeNode(d = a.ownerDocument.createAttribute(c)), d.value = b += "", "value" === c || b === a.getAttribute(c) ? b : void 0
                }
            }, ob.id = ob.name = ob.coords = function (a, b, c) {
                var d;
                return c ? void 0 : (d = a.getAttributeNode(b)) && "" !== d.value ? d.value : null
            }, m.valHooks.button = {
                get: function (a, b) {
                    var c = a.getAttributeNode(b);
                    return c && c.specified ? c.value : void 0
                }, set: mb.set
            }, m.attrHooks.contenteditable = {
                set: function (a, b, c) {
                    mb.set(a, "" === b ? !1 : b, c)
                }
            }, m.each(["width", "height"], function (a, b) {
                m.attrHooks[b] = {
                    set: function (a, c) {
                        return "" === c ? (a.setAttribute(b, "auto"), c) : void 0
                    }
                }
            })), k.style || (m.attrHooks.style = {
                get: function (a) {
                    return a.style.cssText || void 0
                }, set: function (a, b) {
                    return a.style.cssText = b + ""
                }
            });
            var sb = /^(?:input|select|textarea|button|object)$/i, tb = /^(?:a|area)$/i;
            m.fn.extend({
                prop: function (a, b) {
                    return V(this, m.prop, a, b, arguments.length > 1)
                }, removeProp: function (a) {
                    return a = m.propFix[a] || a, this.each(function () {
                        try {
                            this[a] = void 0, delete this[a]
                        } catch (b) {
                        }
                    })
                }
            }), m.extend({
                propFix: {"for": "htmlFor", "class": "className"}, prop: function (a, b, c) {
                    var d, e, f, g = a.nodeType;
                    if (a && 3 !== g && 8 !== g && 2 !== g) return f = 1 !== g || !m.isXMLDoc(a), f && (b = m.propFix[b] || b, e = m.propHooks[b]), void 0 !== c ? e && "set" in e && void 0 !== (d = e.set(a, c, b)) ? d : a[b] = c : e && "get" in e && null !== (d = e.get(a, b)) ? d : a[b]
                }, propHooks: {
                    tabIndex: {
                        get: function (a) {
                            var b = m.find.attr(a, "tabindex");
                            return b ? parseInt(b, 10) : sb.test(a.nodeName) || tb.test(a.nodeName) && a.href ? 0 : -1
                        }
                    }
                }
            }), k.hrefNormalized || m.each(["href", "src"], function (a, b) {
                m.propHooks[b] = {
                    get: function (a) {
                        return a.getAttribute(b, 4)
                    }
                }
            }), k.optSelected || (m.propHooks.selected = {
                get: function (a) {
                    var b = a.parentNode;
                    return b && (b.selectedIndex, b.parentNode && b.parentNode.selectedIndex), null
                }
            }), m.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () {
                m.propFix[this.toLowerCase()] = this
            }), k.enctype || (m.propFix.enctype = "encoding");
            var ub = /[\t\r\n\f]/g;
            m.fn.extend({
                addClass: function (a) {
                    var b, c, d, e, f, g, h = 0, i = this.length, j = "string" == typeof a && a;
                    if (m.isFunction(a)) return this.each(function (b) {
                        m(this).addClass(a.call(this, b, this.className))
                    });
                    if (j) for (b = (a || "").match(E) || []; i > h; h++) if (c = this[h], d = 1 === c.nodeType && (c.className ? (" " + c.className + " ").replace(ub, " ") : " ")) {
                        f = 0;
                        while (e = b[f++]) d.indexOf(" " + e + " ") < 0 && (d += e + " ");
                        g = m.trim(d), c.className !== g && (c.className = g)
                    }
                    return this
                }, removeClass: function (a) {
                    var b, c, d, e, f, g, h = 0, i = this.length,
                        j = 0 === arguments.length || "string" == typeof a && a;
                    if (m.isFunction(a)) return this.each(function (b) {
                        m(this).removeClass(a.call(this, b, this.className))
                    });
                    if (j) for (b = (a || "").match(E) || []; i > h; h++) if (c = this[h], d = 1 === c.nodeType && (c.className ? (" " + c.className + " ").replace(ub, " ") : "")) {
                        f = 0;
                        while (e = b[f++]) while (d.indexOf(" " + e + " ") >= 0) d = d.replace(" " + e + " ", " ");
                        g = a ? m.trim(d) : "", c.className !== g && (c.className = g)
                    }
                    return this
                }, toggleClass: function (a, b) {
                    var c = typeof a;
                    return "boolean" == typeof b && "string" === c ? b ? this.addClass(a) : this.removeClass(a) : this.each(m.isFunction(a) ? function (c) {
                        m(this).toggleClass(a.call(this, c, this.className, b), b)
                    } : function () {
                        if ("string" === c) {
                            var b, d = 0, e = m(this), f = a.match(E) || [];
                            while (b = f[d++]) e.hasClass(b) ? e.removeClass(b) : e.addClass(b)
                        } else (c === K || "boolean" === c) && (this.className && m._data(this, "__className__", this.className), this.className = this.className || a === !1 ? "" : m._data(this, "__className__") || "")
                    })
                }, hasClass: function (a) {
                    for (var b = " " + a + " ", c = 0, d = this.length; d > c; c++) if (1 === this[c].nodeType && (" " + this[c].className + " ").replace(ub, " ").indexOf(b) >= 0) return !0;
                    return !1
                }
            }), m.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "), function (a, b) {
                m.fn[b] = function (a, c) {
                    return arguments.length > 0 ? this.on(b, null, a, c) : this.trigger(b)
                }
            }), m.fn.extend({
                hover: function (a, b) {
                    return this.mouseenter(a).mouseleave(b || a)
                }, bind: function (a, b, c) {
                    return this.on(a, null, b, c)
                }, unbind: function (a, b) {
                    return this.off(a, null, b)
                }, delegate: function (a, b, c, d) {
                    return this.on(b, a, c, d)
                }, undelegate: function (a, b, c) {
                    return 1 === arguments.length ? this.off(a, "**") : this.off(b, a || "**", c)
                }
            });
            var vb = m.now(), wb = /\?/,
                xb = /(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;
            m.parseJSON = function (b) {
                if (a.JSON && a.JSON.parse) return a.JSON.parse(b + "");
                var c, d = null, e = m.trim(b + "");
                return e && !m.trim(e.replace(xb, function (a, b, e, f) {
                    return c && b && (d = 0), 0 === d ? a : (c = e || b, d += !f - !e, "")
                })) ? Function("return " + e)() : m.error("Invalid JSON: " + b)
            }, m.parseXML = function (b) {
                var c, d;
                if (!b || "string" != typeof b) return null;
                try {
                    a.DOMParser ? (d = new DOMParser, c = d.parseFromString(b, "text/xml")) : (c = new ActiveXObject("Microsoft.XMLDOM"), c.async = "false", c.loadXML(b))
                } catch (e) {
                    c = void 0
                }
                return c && c.documentElement && !c.getElementsByTagName("parsererror").length || m.error("Invalid XML: " + b), c
            };
            var yb, zb, Ab = /#.*$/, Bb = /([?&])_=[^&]*/, Cb = /^(.*?):[ \t]*([^\r\n]*)\r?$/gm,
                Db = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/, Eb = /^(?:GET|HEAD)$/, Fb = /^\/\//,
                Gb = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/, Hb = {}, Ib = {},
                Jb = "*/".concat("*");
            try {
                zb = location.href
            } catch (Kb) {
                zb = y.createElement("a"), zb.href = "", zb = zb.href
            }
            yb = Gb.exec(zb.toLowerCase()) || [];

            function Lb(a) {
                return function (b, c) {
                    "string" != typeof b && (c = b, b = "*");
                    var d, e = 0, f = b.toLowerCase().match(E) || [];
                    if (m.isFunction(c)) while (d = f[e++]) "+" === d.charAt(0) ? (d = d.slice(1) || "*", (a[d] = a[d] || []).unshift(c)) : (a[d] = a[d] || []).push(c)
                }
            }

            function Mb(a, b, c, d) {
                var e = {}, f = a === Ib;

                function g(h) {
                    var i;
                    return e[h] = !0, m.each(a[h] || [], function (a, h) {
                        var j = h(b, c, d);
                        return "string" != typeof j || f || e[j] ? f ? !(i = j) : void 0 : (b.dataTypes.unshift(j), g(j), !1)
                    }), i
                }

                return g(b.dataTypes[0]) || !e["*"] && g("*")
            }

            function Nb(a, b) {
                var c, d, e = m.ajaxSettings.flatOptions || {};
                for (d in b) void 0 !== b[d] && ((e[d] ? a : c || (c = {}))[d] = b[d]);
                return c && m.extend(!0, a, c), a
            }

            function Ob(a, b, c) {
                var d, e, f, g, h = a.contents, i = a.dataTypes;
                while ("*" === i[0]) i.shift(), void 0 === e && (e = a.mimeType || b.getResponseHeader("Content-Type"));
                if (e) for (g in h) if (h[g] && h[g].test(e)) {
                    i.unshift(g);
                    break
                }
                if (i[0] in c) f = i[0]; else {
                    for (g in c) {
                        if (!i[0] || a.converters[g + " " + i[0]]) {
                            f = g;
                            break
                        }
                        d || (d = g)
                    }
                    f = f || d
                }
                return f ? (f !== i[0] && i.unshift(f), c[f]) : void 0
            }

            function Pb(a, b, c, d) {
                var e, f, g, h, i, j = {}, k = a.dataTypes.slice();
                if (k[1]) for (g in a.converters) j[g.toLowerCase()] = a.converters[g];
                f = k.shift();
                while (f) if (a.responseFields[f] && (c[a.responseFields[f]] = b), !i && d && a.dataFilter && (b = a.dataFilter(b, a.dataType)), i = f, f = k.shift()) if ("*" === f) f = i; else if ("*" !== i && i !== f) {
                    if (g = j[i + " " + f] || j["* " + f], !g) for (e in j) if (h = e.split(" "), h[1] === f && (g = j[i + " " + h[0]] || j["* " + h[0]])) {
                        g === !0 ? g = j[e] : j[e] !== !0 && (f = h[0], k.unshift(h[1]));
                        break
                    }
                    if (g !== !0) if (g && a["throws"]) b = g(b); else try {
                        b = g(b)
                    } catch (l) {
                        return {state: "parsererror", error: g ? l : "No conversion from " + i + " to " + f}
                    }
                }
                return {state: "success", data: b}
            }

            m.extend({
                active: 0,
                lastModified: {},
                etag: {},
                ajaxSettings: {
                    url: zb,
                    type: "GET",
                    isLocal: Db.test(yb[1]),
                    global: !0,
                    processData: !0,
                    async: !0,
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    accepts: {
                        "*": Jb,
                        text: "text/plain",
                        html: "text/html",
                        xml: "application/xml, text/xml",
                        json: "application/json, text/javascript"
                    },
                    contents: {xml: /xml/, html: /html/, json: /json/},
                    responseFields: {xml: "responseXML", text: "responseText", json: "responseJSON"},
                    converters: {"* text": String, "text html": !0, "text json": m.parseJSON, "text xml": m.parseXML},
                    flatOptions: {url: !0, context: !0}
                },
                ajaxSetup: function (a, b) {
                    return b ? Nb(Nb(a, m.ajaxSettings), b) : Nb(m.ajaxSettings, a)
                },
                ajaxPrefilter: Lb(Hb),
                ajaxTransport: Lb(Ib),
                ajax: function (a, b) {
                    "object" == typeof a && (b = a, a = void 0), b = b || {};
                    var c, d, e, f, g, h, i, j, k = m.ajaxSetup({}, b), l = k.context || k,
                        n = k.context && (l.nodeType || l.jquery) ? m(l) : m.event, o = m.Deferred(),
                        p = m.Callbacks("once memory"), q = k.statusCode || {}, r = {}, s = {}, t = 0, u = "canceled",
                        v = {
                            readyState: 0, getResponseHeader: function (a) {
                                var b;
                                if (2 === t) {
                                    if (!j) {
                                        j = {};
                                        while (b = Cb.exec(f)) j[b[1].toLowerCase()] = b[2]
                                    }
                                    b = j[a.toLowerCase()]
                                }
                                return null == b ? null : b
                            }, getAllResponseHeaders: function () {
                                return 2 === t ? f : null
                            }, setRequestHeader: function (a, b) {
                                var c = a.toLowerCase();
                                return t || (a = s[c] = s[c] || a, r[a] = b), this
                            }, overrideMimeType: function (a) {
                                return t || (k.mimeType = a), this
                            }, statusCode: function (a) {
                                var b;
                                if (a) if (2 > t) for (b in a) q[b] = [q[b], a[b]]; else v.always(a[v.status]);
                                return this
                            }, abort: function (a) {
                                var b = a || u;
                                return i && i.abort(b), x(0, b), this
                            }
                        };
                    if (o.promise(v).complete = p.add, v.success = v.done, v.error = v.fail, k.url = ((a || k.url || zb) + "").replace(Ab, "").replace(Fb, yb[1] + "//"), k.type = b.method || b.type || k.method || k.type, k.dataTypes = m.trim(k.dataType || "*").toLowerCase().match(E) || [""], null == k.crossDomain && (c = Gb.exec(k.url.toLowerCase()), k.crossDomain = !(!c || c[1] === yb[1] && c[2] === yb[2] && (c[3] || ("http:" === c[1] ? "80" : "443")) === (yb[3] || ("http:" === yb[1] ? "80" : "443")))), k.data && k.processData && "string" != typeof k.data && (k.data = m.param(k.data, k.traditional)), Mb(Hb, k, b, v), 2 === t) return v;
                    h = m.event && k.global, h && 0 === m.active++ && m.event.trigger("ajaxStart"), k.type = k.type.toUpperCase(), k.hasContent = !Eb.test(k.type), e = k.url, k.hasContent || (k.data && (e = k.url += (wb.test(e) ? "&" : "?") + k.data, delete k.data), k.cache === !1 && (k.url = Bb.test(e) ? e.replace(Bb, "$1_=" + vb++) : e + (wb.test(e) ? "&" : "?") + "_=" + vb++)), k.ifModified && (m.lastModified[e] && v.setRequestHeader("If-Modified-Since", m.lastModified[e]), m.etag[e] && v.setRequestHeader("If-None-Match", m.etag[e])), (k.data && k.hasContent && k.contentType !== !1 || b.contentType) && v.setRequestHeader("Content-Type", k.contentType), v.setRequestHeader("Accept", k.dataTypes[0] && k.accepts[k.dataTypes[0]] ? k.accepts[k.dataTypes[0]] + ("*" !== k.dataTypes[0] ? ", " + Jb + "; q=0.01" : "") : k.accepts["*"]);
                    for (d in k.headers) v.setRequestHeader(d, k.headers[d]);
                    if (k.beforeSend && (k.beforeSend.call(l, v, k) === !1 || 2 === t)) return v.abort();
                    u = "abort";
                    for (d in{success: 1, error: 1, complete: 1}) v[d](k[d]);
                    if (i = Mb(Ib, k, b, v)) {
                        v.readyState = 1, h && n.trigger("ajaxSend", [v, k]), k.async && k.timeout > 0 && (g = setTimeout(function () {
                            v.abort("timeout")
                        }, k.timeout));
                        try {
                            t = 1, i.send(r, x)
                        } catch (w) {
                            if (!(2 > t)) throw w;
                            x(-1, w)
                        }
                    } else x(-1, "No Transport");

                    function x(a, b, c, d) {
                        var j, r, s, u, w, x = b;
                        2 !== t && (t = 2, g && clearTimeout(g), i = void 0, f = d || "", v.readyState = a > 0 ? 4 : 0, j = a >= 200 && 300 > a || 304 === a, c && (u = Ob(k, v, c)), u = Pb(k, u, v, j), j ? (k.ifModified && (w = v.getResponseHeader("Last-Modified"), w && (m.lastModified[e] = w), w = v.getResponseHeader("etag"), w && (m.etag[e] = w)), 204 === a || "HEAD" === k.type ? x = "nocontent" : 304 === a ? x = "notmodified" : (x = u.state, r = u.data, s = u.error, j = !s)) : (s = x, (a || !x) && (x = "error", 0 > a && (a = 0))), v.status = a, v.statusText = (b || x) + "", j ? o.resolveWith(l, [r, x, v]) : o.rejectWith(l, [v, x, s]), v.statusCode(q), q = void 0, h && n.trigger(j ? "ajaxSuccess" : "ajaxError", [v, k, j ? r : s]), p.fireWith(l, [v, x]), h && (n.trigger("ajaxComplete", [v, k]), --m.active || m.event.trigger("ajaxStop")))
                    }

                    return v
                },
                getJSON: function (a, b, c) {
                    return m.get(a, b, c, "json")
                },
                getScript: function (a, b) {
                    return m.get(a, void 0, b, "script")
                }
            }), m.each(["get", "post"], function (a, b) {
                m[b] = function (a, c, d, e) {
                    return m.isFunction(c) && (e = e || d, d = c, c = void 0), m.ajax({
                        url: a,
                        type: b,
                        dataType: e,
                        data: c,
                        success: d
                    })
                }
            }), m._evalUrl = function (a) {
                return m.ajax({url: a, type: "GET", dataType: "script", async: !1, global: !1, "throws": !0})
            }, m.fn.extend({
                wrapAll: function (a) {
                    if (m.isFunction(a)) return this.each(function (b) {
                        m(this).wrapAll(a.call(this, b))
                    });
                    if (this[0]) {
                        var b = m(a, this[0].ownerDocument).eq(0).clone(!0);
                        this[0].parentNode && b.insertBefore(this[0]), b.map(function () {
                            var a = this;
                            while (a.firstChild && 1 === a.firstChild.nodeType) a = a.firstChild;
                            return a
                        }).append(this)
                    }
                    return this
                }, wrapInner: function (a) {
                    return this.each(m.isFunction(a) ? function (b) {
                        m(this).wrapInner(a.call(this, b))
                    } : function () {
                        var b = m(this), c = b.contents();
                        c.length ? c.wrapAll(a) : b.append(a)
                    })
                }, wrap: function (a) {
                    var b = m.isFunction(a);
                    return this.each(function (c) {
                        m(this).wrapAll(b ? a.call(this, c) : a)
                    })
                }, unwrap: function () {
                    return this.parent().each(function () {
                        m.nodeName(this, "body") || m(this).replaceWith(this.childNodes)
                    }).end()
                }
            }), m.expr.filters.hidden = function (a) {
                return a.offsetWidth <= 0 && a.offsetHeight <= 0 || !k.reliableHiddenOffsets() && "none" === (a.style && a.style.display || m.css(a, "display"))
            }, m.expr.filters.visible = function (a) {
                return !m.expr.filters.hidden(a)
            };
            var Qb = /%20/g, Rb = /\[\]$/, Sb = /\r?\n/g, Tb = /^(?:submit|button|image|reset|file)$/i,
                Ub = /^(?:input|select|textarea|keygen)/i;

            function Vb(a, b, c, d) {
                var e;
                if (m.isArray(b)) m.each(b, function (b, e) {
                    c || Rb.test(a) ? d(a, e) : Vb(a + "[" + ("object" == typeof e ? b : "") + "]", e, c, d)
                }); else if (c || "object" !== m.type(b)) d(a, b); else for (e in b) Vb(a + "[" + e + "]", b[e], c, d)
            }

            m.param = function (a, b) {
                var c, d = [], e = function (a, b) {
                    b = m.isFunction(b) ? b() : null == b ? "" : b, d[d.length] = encodeURIComponent(a) + "=" + encodeURIComponent(b)
                };
                if (void 0 === b && (b = m.ajaxSettings && m.ajaxSettings.traditional), m.isArray(a) || a.jquery && !m.isPlainObject(a)) m.each(a, function () {
                    e(this.name, this.value)
                }); else for (c in a) Vb(c, a[c], b, e);
                return d.join("&").replace(Qb, "+")
            }, m.fn.extend({
                serialize: function () {
                    return m.param(this.serializeArray())
                }, serializeArray: function () {
                    return this.map(function () {
                        var a = m.prop(this, "elements");
                        return a ? m.makeArray(a) : this
                    }).filter(function () {
                        var a = this.type;
                        return this.name && !m(this).is(":disabled") && Ub.test(this.nodeName) && !Tb.test(a) && (this.checked || !W.test(a))
                    }).map(function (a, b) {
                        var c = m(this).val();
                        return null == c ? null : m.isArray(c) ? m.map(c, function (a) {
                            return {name: b.name, value: a.replace(Sb, "\r\n")}
                        }) : {name: b.name, value: c.replace(Sb, "\r\n")}
                    }).get()
                }
            }), m.ajaxSettings.xhr = void 0 !== a.ActiveXObject ? function () {
                return !this.isLocal && /^(get|post|head|put|delete|options)$/i.test(this.type) && Zb() || $b()
            } : Zb;
            var Wb = 0, Xb = {}, Yb = m.ajaxSettings.xhr();
            a.attachEvent && a.attachEvent("onunload", function () {
                for (var a in Xb) Xb[a](void 0, !0)
            }), k.cors = !!Yb && "withCredentials" in Yb, Yb = k.ajax = !!Yb, Yb && m.ajaxTransport(function (a) {
                if (!a.crossDomain || k.cors) {
                    var b;
                    return {
                        send: function (c, d) {
                            var e, f = a.xhr(), g = ++Wb;
                            if (f.open(a.type, a.url, a.async, a.username, a.password), a.xhrFields) for (e in a.xhrFields) f[e] = a.xhrFields[e];
                            a.mimeType && f.overrideMimeType && f.overrideMimeType(a.mimeType), a.crossDomain || c["X-Requested-With"] || (c["X-Requested-With"] = "XMLHttpRequest");
                            for (e in c) void 0 !== c[e] && f.setRequestHeader(e, c[e] + "");
                            f.send(a.hasContent && a.data || null), b = function (c, e) {
                                var h, i, j;
                                if (b && (e || 4 === f.readyState)) if (delete Xb[g], b = void 0, f.onreadystatechange = m.noop, e) 4 !== f.readyState && f.abort(); else {
                                    j = {}, h = f.status, "string" == typeof f.responseText && (j.text = f.responseText);
                                    try {
                                        i = f.statusText
                                    } catch (k) {
                                        i = ""
                                    }
                                    h || !a.isLocal || a.crossDomain ? 1223 === h && (h = 204) : h = j.text ? 200 : 404
                                }
                                j && d(h, i, j, f.getAllResponseHeaders())
                            }, a.async ? 4 === f.readyState ? setTimeout(b) : f.onreadystatechange = Xb[g] = b : b()
                        }, abort: function () {
                            b && b(void 0, !0)
                        }
                    }
                }
            });

            function Zb() {
                try {
                    return new a.XMLHttpRequest
                } catch (b) {
                }
            }

            function $b() {
                try {
                    return new a.ActiveXObject("Microsoft.XMLHTTP")
                } catch (b) {
                }
            }

            m.ajaxSetup({
                accepts: {script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},
                contents: {script: /(?:java|ecma)script/},
                converters: {
                    "text script": function (a) {
                        return m.globalEval(a), a
                    }
                }
            }), m.ajaxPrefilter("script", function (a) {
                void 0 === a.cache && (a.cache = !1), a.crossDomain && (a.type = "GET", a.global = !1)
            }), m.ajaxTransport("script", function (a) {
                if (a.crossDomain) {
                    var b, c = y.head || m("head")[0] || y.documentElement;
                    return {
                        send: function (d, e) {
                            b = y.createElement("script"), b.async = !0, a.scriptCharset && (b.charset = a.scriptCharset), b.src = a.url, b.onload = b.onreadystatechange = function (a, c) {
                                (c || !b.readyState || /loaded|complete/.test(b.readyState)) && (b.onload = b.onreadystatechange = null, b.parentNode && b.parentNode.removeChild(b), b = null, c || e(200, "success"))
                            }, c.insertBefore(b, c.firstChild)
                        }, abort: function () {
                            b && b.onload(void 0, !0)
                        }
                    }
                }
            });
            var _b = [], ac = /(=)\?(?=&|$)|\?\?/;
            m.ajaxSetup({
                jsonp: "callback", jsonpCallback: function () {
                    var a = _b.pop() || m.expando + "_" + vb++;
                    return this[a] = !0, a
                }
            }), m.ajaxPrefilter("json jsonp", function (b, c, d) {
                var e, f, g,
                    h = b.jsonp !== !1 && (ac.test(b.url) ? "url" : "string" == typeof b.data && !(b.contentType || "").indexOf("application/x-www-form-urlencoded") && ac.test(b.data) && "data");
                return h || "jsonp" === b.dataTypes[0] ? (e = b.jsonpCallback = m.isFunction(b.jsonpCallback) ? b.jsonpCallback() : b.jsonpCallback, h ? b[h] = b[h].replace(ac, "$1" + e) : b.jsonp !== !1 && (b.url += (wb.test(b.url) ? "&" : "?") + b.jsonp + "=" + e), b.converters["script json"] = function () {
                    return g || m.error(e + " was not called"), g[0]
                }, b.dataTypes[0] = "json", f = a[e], a[e] = function () {
                    g = arguments
                }, d.always(function () {
                    a[e] = f, b[e] && (b.jsonpCallback = c.jsonpCallback, _b.push(e)), g && m.isFunction(f) && f(g[0]), g = f = void 0
                }), "script") : void 0
            }), m.parseHTML = function (a, b, c) {
                if (!a || "string" != typeof a) return null;
                "boolean" == typeof b && (c = b, b = !1), b = b || y;
                var d = u.exec(a), e = !c && [];
                return d ? [b.createElement(d[1])] : (d = m.buildFragment([a], b, e), e && e.length && m(e).remove(), m.merge([], d.childNodes))
            };
            var bc = m.fn.load;
            m.fn.load = function (a, b, c) {
                if ("string" != typeof a && bc) return bc.apply(this, arguments);
                var d, e, f, g = this, h = a.indexOf(" ");
                return h >= 0 && (d = m.trim(a.slice(h, a.length)), a = a.slice(0, h)), m.isFunction(b) ? (c = b, b = void 0) : b && "object" == typeof b && (f = "POST"), g.length > 0 && m.ajax({
                    url: a,
                    type: f,
                    dataType: "html",
                    data: b
                }).done(function (a) {
                    e = arguments, g.html(d ? m("<div>").append(m.parseHTML(a)).find(d) : a)
                }).complete(c && function (a, b) {
                    g.each(c, e || [a.responseText, b, a])
                }), this
            }, m.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (a, b) {
                m.fn[b] = function (a) {
                    return this.on(b, a)
                }
            }), m.expr.filters.animated = function (a) {
                return m.grep(m.timers, function (b) {
                    return a === b.elem
                }).length
            };
            var cc = a.document.documentElement;

            function dc(a) {
                return m.isWindow(a) ? a : 9 === a.nodeType ? a.defaultView || a.parentWindow : !1
            }

            m.offset = {
                setOffset: function (a, b, c) {
                    var d, e, f, g, h, i, j, k = m.css(a, "position"), l = m(a), n = {};
                    "static" === k && (a.style.position = "relative"), h = l.offset(), f = m.css(a, "top"), i = m.css(a, "left"), j = ("absolute" === k || "fixed" === k) && m.inArray("auto", [f, i]) > -1, j ? (d = l.position(), g = d.top, e = d.left) : (g = parseFloat(f) || 0, e = parseFloat(i) || 0), m.isFunction(b) && (b = b.call(a, c, h)), null != b.top && (n.top = b.top - h.top + g), null != b.left && (n.left = b.left - h.left + e), "using" in b ? b.using.call(a, n) : l.css(n)
                }
            }, m.fn.extend({
                offset: function (a) {
                    if (arguments.length) return void 0 === a ? this : this.each(function (b) {
                        m.offset.setOffset(this, a, b)
                    });
                    var b, c, d = {top: 0, left: 0}, e = this[0], f = e && e.ownerDocument;
                    if (f) return b = f.documentElement, m.contains(b, e) ? (typeof e.getBoundingClientRect !== K && (d = e.getBoundingClientRect()), c = dc(f), {
                        top: d.top + (c.pageYOffset || b.scrollTop) - (b.clientTop || 0),
                        left: d.left + (c.pageXOffset || b.scrollLeft) - (b.clientLeft || 0)
                    }) : d
                }, position: function () {
                    if (this[0]) {
                        var a, b, c = {top: 0, left: 0}, d = this[0];
                        return "fixed" === m.css(d, "position") ? b = d.getBoundingClientRect() : (a = this.offsetParent(), b = this.offset(), m.nodeName(a[0], "html") || (c = a.offset()), c.top += m.css(a[0], "borderTopWidth", !0), c.left += m.css(a[0], "borderLeftWidth", !0)), {
                            top: b.top - c.top - m.css(d, "marginTop", !0),
                            left: b.left - c.left - m.css(d, "marginLeft", !0)
                        }
                    }
                }, offsetParent: function () {
                    return this.map(function () {
                        var a = this.offsetParent || cc;
                        while (a && !m.nodeName(a, "html") && "static" === m.css(a, "position")) a = a.offsetParent;
                        return a || cc
                    })
                }
            }), m.each({scrollLeft: "pageXOffset", scrollTop: "pageYOffset"}, function (a, b) {
                var c = /Y/.test(b);
                m.fn[a] = function (d) {
                    return V(this, function (a, d, e) {
                        var f = dc(a);
                        return void 0 === e ? f ? b in f ? f[b] : f.document.documentElement[d] : a[d] : void (f ? f.scrollTo(c ? m(f).scrollLeft() : e, c ? e : m(f).scrollTop()) : a[d] = e)
                    }, a, d, arguments.length, null)
                }
            }), m.each(["top", "left"], function (a, b) {
                m.cssHooks[b] = La(k.pixelPosition, function (a, c) {
                    return c ? (c = Ja(a, b), Ha.test(c) ? m(a).position()[b] + "px" : c) : void 0
                })
            }), m.each({Height: "height", Width: "width"}, function (a, b) {
                m.each({padding: "inner" + a, content: b, "": "outer" + a}, function (c, d) {
                    m.fn[d] = function (d, e) {
                        var f = arguments.length && (c || "boolean" != typeof d),
                            g = c || (d === !0 || e === !0 ? "margin" : "border");
                        return V(this, function (b, c, d) {
                            var e;
                            return m.isWindow(b) ? b.document.documentElement["client" + a] : 9 === b.nodeType ? (e = b.documentElement, Math.max(b.body["scroll" + a], e["scroll" + a], b.body["offset" + a], e["offset" + a], e["client" + a])) : void 0 === d ? m.css(b, c, g) : m.style(b, c, d, g)
                        }, b, f ? d : void 0, f, null)
                    }
                })
            }), m.fn.size = function () {
                return this.length
            }, m.fn.andSelf = m.fn.addBack, "function" == typeof define && define.amd && define("jquery", [], function () {
                return m
            });
            var ec = a.jQuery, fc = a.$;
            return m.noConflict = function (b) {
                return a.$ === m && (a.$ = fc), b && a.jQuery === m && (a.jQuery = ec), m
            }, typeof b === K && (a.jQuery = a.$ = m), m
        });
        if ("undefined" == typeof jQuery) throw new Error("Bootstrap's JavaScript requires jQuery");
        +function (a) {
            "use strict";
            var b = a.fn.jquery.split(" ")[0].split(".");
            if (b[0] < 2 && b[1] < 9 || 1 == b[0] && 9 == b[1] && b[2] < 1 || b[0] > 2) throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 3")
        }(jQuery), +function (a) {
            "use strict";

            function b() {
                var a = document.createElement("bootstrap"), b = {
                    WebkitTransition: "webkitTransitionEnd",
                    MozTransition: "transitionend",
                    OTransition: "oTransitionEnd otransitionend",
                    transition: "transitionend"
                };
                for (var c in b) if (void 0 !== a.style[c]) return {end: b[c]};
                return !1
            }

            a.fn.emulateTransitionEnd = function (b) {
                var c = !1, d = this;
                a(this).one("bsTransitionEnd", function () {
                    c = !0
                });
                var e = function () {
                    c || a(d).trigger(a.support.transition.end)
                };
                return setTimeout(e, b), this
            }, a(function () {
                a.support.transition = b(), a.support.transition && (a.event.special.bsTransitionEnd = {
                    bindType: a.support.transition.end,
                    delegateType: a.support.transition.end,
                    handle: function (b) {
                        return a(b.target).is(this) ? b.handleObj.handler.apply(this, arguments) : void 0
                    }
                })
            })
        }(jQuery), +function (a) {
            "use strict";

            function b(b) {
                return this.each(function () {
                    var c = a(this), e = c.data("bs.alert");
                    e || c.data("bs.alert", e = new d(this)), "string" == typeof b && e[b].call(c)
                })
            }

            var c = '[data-dismiss="alert"]', d = function (b) {
                a(b).on("click", c, this.close)
            };
            d.VERSION = "3.3.6", d.TRANSITION_DURATION = 150, d.prototype.close = function (b) {
                function c() {
                    g.detach().trigger("closed.bs.alert").remove()
                }

                var e = a(this), f = e.attr("data-target");
                f || (f = e.attr("href"), f = f && f.replace(/.*(?=#[^\s]*$)/, ""));
                var g = a(f);
                b && b.preventDefault(), g.length || (g = e.closest(".alert")), g.trigger(b = a.Event("close.bs.alert")), b.isDefaultPrevented() || (g.removeClass("in"), a.support.transition && g.hasClass("fade") ? g.one("bsTransitionEnd", c).emulateTransitionEnd(d.TRANSITION_DURATION) : c())
            };
            var e = a.fn.alert;
            a.fn.alert = b, a.fn.alert.Constructor = d, a.fn.alert.noConflict = function () {
                return a.fn.alert = e, this
            }, a(document).on("click.bs.alert.data-api", c, d.prototype.close)
        }(jQuery), +function (a) {
            "use strict";

            function b(b) {
                return this.each(function () {
                    var d = a(this), e = d.data("bs.button"), f = "object" == typeof b && b;
                    e || d.data("bs.button", e = new c(this, f)), "toggle" == b ? e.toggle() : b && e.setState(b)
                })
            }

            var c = function (b, d) {
                this.$element = a(b), this.options = a.extend({}, c.DEFAULTS, d), this.isLoading = !1
            };
            c.VERSION = "3.3.6", c.DEFAULTS = {loadingText: "loading..."}, c.prototype.setState = function (b) {
                var c = "disabled", d = this.$element, e = d.is("input") ? "val" : "html", f = d.data();
                b += "Text", null == f.resetText && d.data("resetText", d[e]()), setTimeout(a.proxy(function () {
                    d[e](null == f[b] ? this.options[b] : f[b]), "loadingText" == b ? (this.isLoading = !0, d.addClass(c).attr(c, c)) : this.isLoading && (this.isLoading = !1, d.removeClass(c).removeAttr(c))
                }, this), 0)
            }, c.prototype.toggle = function () {
                var a = !0, b = this.$element.closest('[data-toggle="buttons"]');
                if (b.length) {
                    var c = this.$element.find("input");
                    "radio" == c.prop("type") ? (c.prop("checked") && (a = !1), b.find(".active").removeClass("active"), this.$element.addClass("active")) : "checkbox" == c.prop("type") && (c.prop("checked") !== this.$element.hasClass("active") && (a = !1), this.$element.toggleClass("active")), c.prop("checked", this.$element.hasClass("active")), a && c.trigger("change")
                } else this.$element.attr("aria-pressed", !this.$element.hasClass("active")), this.$element.toggleClass("active")
            };
            var d = a.fn.button;
            a.fn.button = b, a.fn.button.Constructor = c, a.fn.button.noConflict = function () {
                return a.fn.button = d, this
            }, a(document).on("click.bs.button.data-api", '[data-toggle^="button"]', function (c) {
                var d = a(c.target);
                d.hasClass("btn") || (d = d.closest(".btn")), b.call(d, "toggle"), a(c.target).is('input[type="radio"]') || a(c.target).is('input[type="checkbox"]') || c.preventDefault()
            }).on("focus.bs.button.data-api blur.bs.button.data-api", '[data-toggle^="button"]', function (b) {
                a(b.target).closest(".btn").toggleClass("focus", /^focus(in)?$/.test(b.type))
            })
        }(jQuery), +function (a) {
            "use strict";

            function b(b) {
                return this.each(function () {
                    var d = a(this), e = d.data("bs.carousel"),
                        f = a.extend({}, c.DEFAULTS, d.data(), "object" == typeof b && b),
                        g = "string" == typeof b ? b : f.slide;
                    e || d.data("bs.carousel", e = new c(this, f)), "number" == typeof b ? e.to(b) : g ? e[g]() : f.interval && e.pause().cycle()
                })
            }

            var c = function (b, c) {
                this.$element = a(b), this.$indicators = this.$element.find(".carousel-indicators"), this.options = c, this.paused = null, this.sliding = null, this.interval = null, this.$active = null, this.$items = null, this.options.keyboard && this.$element.on("keydown.bs.carousel", a.proxy(this.keydown, this)), "hover" == this.options.pause && !("ontouchstart" in document.documentElement) && this.$element.on("mouseenter.bs.carousel", a.proxy(this.pause, this)).on("mouseleave.bs.carousel", a.proxy(this.cycle, this))
            };
            c.VERSION = "3.3.6", c.TRANSITION_DURATION = 600, c.DEFAULTS = {
                interval: 5e3,
                pause: "hover",
                wrap: !0,
                keyboard: !0
            }, c.prototype.keydown = function (a) {
                if (!/input|textarea/i.test(a.target.tagName)) {
                    switch (a.which) {
                        case 37:
                            this.prev();
                            break;
                        case 39:
                            this.next();
                            break;
                        default:
                            return
                    }
                    a.preventDefault()
                }
            }, c.prototype.cycle = function (b) {
                return b || (this.paused = !1), this.interval && clearInterval(this.interval), this.options.interval && !this.paused && (this.interval = setInterval(a.proxy(this.next, this), this.options.interval)), this
            }, c.prototype.getItemIndex = function (a) {
                return this.$items = a.parent().children(".item"), this.$items.index(a || this.$active)
            }, c.prototype.getItemForDirection = function (a, b) {
                var c = this.getItemIndex(b), d = "prev" == a && 0 === c || "next" == a && c == this.$items.length - 1;
                if (d && !this.options.wrap) return b;
                var e = "prev" == a ? -1 : 1, f = (c + e) % this.$items.length;
                return this.$items.eq(f)
            }, c.prototype.to = function (a) {
                var b = this, c = this.getItemIndex(this.$active = this.$element.find(".item.active"));
                return a > this.$items.length - 1 || 0 > a ? void 0 : this.sliding ? this.$element.one("slid.bs.carousel", function () {
                    b.to(a)
                }) : c == a ? this.pause().cycle() : this.slide(a > c ? "next" : "prev", this.$items.eq(a))
            }, c.prototype.pause = function (b) {
                return b || (this.paused = !0), this.$element.find(".next, .prev").length && a.support.transition && (this.$element.trigger(a.support.transition.end), this.cycle(!0)), this.interval = clearInterval(this.interval), this
            }, c.prototype.next = function () {
                return this.sliding ? void 0 : this.slide("next")
            }, c.prototype.prev = function () {
                return this.sliding ? void 0 : this.slide("prev")
            }, c.prototype.slide = function (b, d) {
                var e = this.$element.find(".item.active"), f = d || this.getItemForDirection(b, e), g = this.interval,
                    h = "next" == b ? "left" : "right", i = this;
                if (f.hasClass("active")) return this.sliding = !1;
                var j = f[0], k = a.Event("slide.bs.carousel", {relatedTarget: j, direction: h});
                if (this.$element.trigger(k), !k.isDefaultPrevented()) {
                    if (this.sliding = !0, g && this.pause(), this.$indicators.length) {
                        this.$indicators.find(".active").removeClass("active");
                        var l = a(this.$indicators.children()[this.getItemIndex(f)]);
                        l && l.addClass("active")
                    }
                    var m = a.Event("slid.bs.carousel", {relatedTarget: j, direction: h});
                    return a.support.transition && this.$element.hasClass("slide") ? (f.addClass(b), f[0].offsetWidth, e.addClass(h), f.addClass(h), e.one("bsTransitionEnd", function () {
                        f.removeClass([b, h].join(" ")).addClass("active"), e.removeClass(["active", h].join(" ")), i.sliding = !1, setTimeout(function () {
                            i.$element.trigger(m)
                        }, 0)
                    }).emulateTransitionEnd(c.TRANSITION_DURATION)) : (e.removeClass("active"), f.addClass("active"), this.sliding = !1, this.$element.trigger(m)), g && this.cycle(), this
                }
            };
            var d = a.fn.carousel;
            a.fn.carousel = b, a.fn.carousel.Constructor = c, a.fn.carousel.noConflict = function () {
                return a.fn.carousel = d, this
            };
            var e = function (c) {
                var d, e = a(this),
                    f = a(e.attr("data-target") || (d = e.attr("href")) && d.replace(/.*(?=#[^\s]+$)/, ""));
                if (f.hasClass("carousel")) {
                    var g = a.extend({}, f.data(), e.data()), h = e.attr("data-slide-to");
                    h && (g.interval = !1), b.call(f, g), h && f.data("bs.carousel").to(h), c.preventDefault()
                }
            };
            a(document).on("click.bs.carousel.data-api", "[data-slide]", e).on("click.bs.carousel.data-api", "[data-slide-to]", e), a(window).on("load", function () {
                a('[data-ride="carousel"]').each(function () {
                    var c = a(this);
                    b.call(c, c.data())
                })
            })
        }(jQuery), +function (a) {
            "use strict";

            function b(b) {
                var c, d = b.attr("data-target") || (c = b.attr("href")) && c.replace(/.*(?=#[^\s]+$)/, "");
                return a(d)
            }

            function c(b) {
                return this.each(function () {
                    var c = a(this), e = c.data("bs.collapse"),
                        f = a.extend({}, d.DEFAULTS, c.data(), "object" == typeof b && b);
                    !e && f.toggle && /show|hide/.test(b) && (f.toggle = !1), e || c.data("bs.collapse", e = new d(this, f)), "string" == typeof b && e[b]()
                })
            }

            var d = function (b, c) {
                this.$element = a(b), this.options = a.extend({}, d.DEFAULTS, c), this.$trigger = a('[data-toggle="collapse"][href="#' + b.id + '"],[data-toggle="collapse"][data-target="#' + b.id + '"]'), this.transitioning = null, this.options.parent ? this.$parent = this.getParent() : this.addAriaAndCollapsedClass(this.$element, this.$trigger), this.options.toggle && this.toggle()
            };
            d.VERSION = "3.3.6", d.TRANSITION_DURATION = 350, d.DEFAULTS = {toggle: !0}, d.prototype.dimension = function () {
                var a = this.$element.hasClass("width");
                return a ? "width" : "height"
            }, d.prototype.show = function () {
                if (!this.transitioning && !this.$element.hasClass("in")) {
                    var b, e = this.$parent && this.$parent.children(".panel").children(".in, .collapsing");
                    if (!(e && e.length && (b = e.data("bs.collapse"), b && b.transitioning))) {
                        var f = a.Event("show.bs.collapse");
                        if (this.$element.trigger(f), !f.isDefaultPrevented()) {
                            e && e.length && (c.call(e, "hide"), b || e.data("bs.collapse", null));
                            var g = this.dimension();
                            this.$element.removeClass("collapse").addClass("collapsing")[g](0).attr("aria-expanded", !0), this.$trigger.removeClass("collapsed").attr("aria-expanded", !0), this.transitioning = 1;
                            var h = function () {
                                this.$element.removeClass("collapsing").addClass("collapse in")[g](""), this.transitioning = 0, this.$element.trigger("shown.bs.collapse")
                            };
                            if (!a.support.transition) return h.call(this);
                            var i = a.camelCase(["scroll", g].join("-"));
                            this.$element.one("bsTransitionEnd", a.proxy(h, this)).emulateTransitionEnd(d.TRANSITION_DURATION)[g](this.$element[0][i])
                        }
                    }
                }
            }, d.prototype.hide = function () {
                if (!this.transitioning && this.$element.hasClass("in")) {
                    var b = a.Event("hide.bs.collapse");
                    if (this.$element.trigger(b), !b.isDefaultPrevented()) {
                        var c = this.dimension();
                        this.$element[c](this.$element[c]())[0].offsetHeight, this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded", !1), this.$trigger.addClass("collapsed").attr("aria-expanded", !1), this.transitioning = 1;
                        var e = function () {
                            this.transitioning = 0, this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")
                        };
                        return a.support.transition ? void this.$element[c](0).one("bsTransitionEnd", a.proxy(e, this)).emulateTransitionEnd(d.TRANSITION_DURATION) : e.call(this)
                    }
                }
            }, d.prototype.toggle = function () {
                this[this.$element.hasClass("in") ? "hide" : "show"]()
            }, d.prototype.getParent = function () {
                return a(this.options.parent).find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]').each(a.proxy(function (c, d) {
                    var e = a(d);
                    this.addAriaAndCollapsedClass(b(e), e)
                }, this)).end()
            }, d.prototype.addAriaAndCollapsedClass = function (a, b) {
                var c = a.hasClass("in");
                a.attr("aria-expanded", c), b.toggleClass("collapsed", !c).attr("aria-expanded", c)
            };
            var e = a.fn.collapse;
            a.fn.collapse = c, a.fn.collapse.Constructor = d, a.fn.collapse.noConflict = function () {
                return a.fn.collapse = e, this
            }, a(document).on("click.bs.collapse.data-api", '[data-toggle="collapse"]', function (d) {
                var e = a(this);
                e.attr("data-target") || d.preventDefault();
                var f = b(e), g = f.data("bs.collapse"), h = g ? "toggle" : e.data();
                c.call(f, h)
            })
        }(jQuery), +function (a) {
            "use strict";

            function b(b) {
                var c = b.attr("data-target");
                c || (c = b.attr("href"), c = c && /#[A-Za-z]/.test(c) && c.replace(/.*(?=#[^\s]*$)/, ""));
                var d = c && a(c);
                return d && d.length ? d : b.parent()
            }

            function c(c) {
                c && 3 === c.which || (a(e).remove(), a(f).each(function () {
                    var d = a(this), e = b(d), f = {relatedTarget: this};
                    e.hasClass("open") && (c && "click" == c.type && /input|textarea/i.test(c.target.tagName) && a.contains(e[0], c.target) || (e.trigger(c = a.Event("hide.bs.dropdown", f)), c.isDefaultPrevented() || (d.attr("aria-expanded", "false"), e.removeClass("open").trigger(a.Event("hidden.bs.dropdown", f)))))
                }))
            }

            function d(b) {
                return this.each(function () {
                    var c = a(this), d = c.data("bs.dropdown");
                    d || c.data("bs.dropdown", d = new g(this)), "string" == typeof b && d[b].call(c)
                })
            }

            var e = ".dropdown-backdrop", f = '[data-toggle="dropdown"]', g = function (b) {
                a(b).on("click.bs.dropdown", this.toggle)
            };
            g.VERSION = "3.3.6", g.prototype.toggle = function (d) {
                var e = a(this);
                if (!e.is(".disabled, :disabled")) {
                    var f = b(e), g = f.hasClass("open");
                    if (c(), !g) {
                        "ontouchstart" in document.documentElement && !f.closest(".navbar-nav").length && a(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(a(this)).on("click", c);
                        var h = {relatedTarget: this};
                        if (f.trigger(d = a.Event("show.bs.dropdown", h)), d.isDefaultPrevented()) return;
                        e.trigger("focus").attr("aria-expanded", "true"), f.toggleClass("open").trigger(a.Event("shown.bs.dropdown", h))
                    }
                    return !1
                }
            }, g.prototype.keydown = function (c) {
                if (/(38|40|27|32)/.test(c.which) && !/input|textarea/i.test(c.target.tagName)) {
                    var d = a(this);
                    if (c.preventDefault(), c.stopPropagation(), !d.is(".disabled, :disabled")) {
                        var e = b(d), g = e.hasClass("open");
                        if (!g && 27 != c.which || g && 27 == c.which) return 27 == c.which && e.find(f).trigger("focus"), d.trigger("click");
                        var h = " li:not(.disabled):visible a", i = e.find(".dropdown-menu" + h);
                        if (i.length) {
                            var j = i.index(c.target);
                            38 == c.which && j > 0 && j--, 40 == c.which && j < i.length - 1 && j++, ~j || (j = 0), i.eq(j).trigger("focus")
                        }
                    }
                }
            };
            var h = a.fn.dropdown;
            a.fn.dropdown = d, a.fn.dropdown.Constructor = g, a.fn.dropdown.noConflict = function () {
                return a.fn.dropdown = h, this
            }, a(document).on("click.bs.dropdown.data-api", c).on("click.bs.dropdown.data-api", ".dropdown form", function (a) {
                a.stopPropagation()
            }).on("click.bs.dropdown.data-api", f, g.prototype.toggle).on("keydown.bs.dropdown.data-api", f, g.prototype.keydown).on("keydown.bs.dropdown.data-api", ".dropdown-menu", g.prototype.keydown)
        }(jQuery), +function (a) {
            "use strict";

            function b(b, d) {
                return this.each(function () {
                    var e = a(this), f = e.data("bs.modal"),
                        g = a.extend({}, c.DEFAULTS, e.data(), "object" == typeof b && b);
                    f || e.data("bs.modal", f = new c(this, g)), "string" == typeof b ? f[b](d) : g.show && f.show(d)
                })
            }

            var c = function (b, c) {
                this.options = c, this.$body = a(document.body), this.$element = a(b), this.$dialog = this.$element.find(".modal-dialog"), this.$backdrop = null, this.isShown = null, this.originalBodyPad = null, this.scrollbarWidth = 0, this.ignoreBackdropClick = !1, this.options.remote && this.$element.find(".modal-content").load(this.options.remote, a.proxy(function () {
                    this.$element.trigger("loaded.bs.modal")
                }, this))
            };
            c.VERSION = "3.3.6", c.TRANSITION_DURATION = 300, c.BACKDROP_TRANSITION_DURATION = 150, c.DEFAULTS = {
                backdrop: !0,
                keyboard: !0,
                show: !0
            }, c.prototype.toggle = function (a) {
                return this.isShown ? this.hide() : this.show(a)
            }, c.prototype.show = function (b) {
                var d = this, e = a.Event("show.bs.modal", {relatedTarget: b});
                this.$element.trigger(e), this.isShown || e.isDefaultPrevented() || (this.isShown = !0, this.checkScrollbar(), this.setScrollbar(), this.$body.addClass("modal-open"), this.escape(), this.resize(), this.$element.on("click.dismiss.bs.modal", '[data-dismiss="modal"]', a.proxy(this.hide, this)), this.$dialog.on("mousedown.dismiss.bs.modal", function () {
                    d.$element.one("mouseup.dismiss.bs.modal", function (b) {
                        a(b.target).is(d.$element) && (d.ignoreBackdropClick = !0)
                    })
                }), this.backdrop(function () {
                    var e = a.support.transition && d.$element.hasClass("fade");
                    d.$element.parent().length || d.$element.appendTo(d.$body), d.$element.show().scrollTop(0), d.adjustDialog(), e && d.$element[0].offsetWidth, d.$element.addClass("in"), d.enforceFocus();
                    var f = a.Event("shown.bs.modal", {relatedTarget: b});
                    e ? d.$dialog.one("bsTransitionEnd", function () {
                        d.$element.trigger("focus").trigger(f)
                    }).emulateTransitionEnd(c.TRANSITION_DURATION) : d.$element.trigger("focus").trigger(f)
                }))
            }, c.prototype.hide = function (b) {
                b && b.preventDefault(), b = a.Event("hide.bs.modal"), this.$element.trigger(b), this.isShown && !b.isDefaultPrevented() && (this.isShown = !1, this.escape(), this.resize(), a(document).off("focusin.bs.modal"), this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"), this.$dialog.off("mousedown.dismiss.bs.modal"), a.support.transition && this.$element.hasClass("fade") ? this.$element.one("bsTransitionEnd", a.proxy(this.hideModal, this)).emulateTransitionEnd(c.TRANSITION_DURATION) : this.hideModal())
            }, c.prototype.enforceFocus = function () {
                a(document).off("focusin.bs.modal").on("focusin.bs.modal", a.proxy(function (a) {
                    this.$element[0] === a.target || this.$element.has(a.target).length || this.$element.trigger("focus")
                }, this))
            }, c.prototype.escape = function () {
                this.isShown && this.options.keyboard ? this.$element.on("keydown.dismiss.bs.modal", a.proxy(function (a) {
                    27 == a.which && this.hide()
                }, this)) : this.isShown || this.$element.off("keydown.dismiss.bs.modal")
            }, c.prototype.resize = function () {
                this.isShown ? a(window).on("resize.bs.modal", a.proxy(this.handleUpdate, this)) : a(window).off("resize.bs.modal")
            }, c.prototype.hideModal = function () {
                var a = this;
                this.$element.hide(), this.backdrop(function () {
                    a.$body.removeClass("modal-open"), a.resetAdjustments(), a.resetScrollbar(), a.$element.trigger("hidden.bs.modal")
                })
            }, c.prototype.removeBackdrop = function () {
                this.$backdrop && this.$backdrop.remove(), this.$backdrop = null
            }, c.prototype.backdrop = function (b) {
                var d = this, e = this.$element.hasClass("fade") ? "fade" : "";
                if (this.isShown && this.options.backdrop) {
                    var f = a.support.transition && e;
                    if (this.$backdrop = a(document.createElement("div")).addClass("modal-backdrop " + e).appendTo(this.$body), this.$element.on("click.dismiss.bs.modal", a.proxy(function (a) {
                        return this.ignoreBackdropClick ? void (this.ignoreBackdropClick = !1) : void (a.target === a.currentTarget && ("static" == this.options.backdrop ? this.$element[0].focus() : this.hide()))
                    }, this)), f && this.$backdrop[0].offsetWidth, this.$backdrop.addClass("in"), !b) return;
                    f ? this.$backdrop.one("bsTransitionEnd", b).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION) : b()
                } else if (!this.isShown && this.$backdrop) {
                    this.$backdrop.removeClass("in");
                    var g = function () {
                        d.removeBackdrop(), b && b()
                    };
                    a.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one("bsTransitionEnd", g).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION) : g()
                } else b && b()
            }, c.prototype.handleUpdate = function () {
                this.adjustDialog()
            }, c.prototype.adjustDialog = function () {
                var a = this.$element[0].scrollHeight > document.documentElement.clientHeight;
                this.$element.css({
                    paddingLeft: !this.bodyIsOverflowing && a ? this.scrollbarWidth : "",
                    paddingRight: this.bodyIsOverflowing && !a ? this.scrollbarWidth : ""
                })
            }, c.prototype.resetAdjustments = function () {
                this.$element.css({paddingLeft: "", paddingRight: ""})
            }, c.prototype.checkScrollbar = function () {
                var a = window.innerWidth;
                if (!a) {
                    var b = document.documentElement.getBoundingClientRect();
                    a = b.right - Math.abs(b.left)
                }
                this.bodyIsOverflowing = document.body.clientWidth < a, this.scrollbarWidth = this.measureScrollbar()
            }, c.prototype.setScrollbar = function () {
                var a = parseInt(this.$body.css("padding-right") || 0, 10);
                this.originalBodyPad = document.body.style.paddingRight || "", this.bodyIsOverflowing && this.$body.css("padding-right", a + this.scrollbarWidth)
            }, c.prototype.resetScrollbar = function () {
                this.$body.css("padding-right", this.originalBodyPad)
            }, c.prototype.measureScrollbar = function () {
                var a = document.createElement("div");
                a.className = "modal-scrollbar-measure", this.$body.append(a);
                var b = a.offsetWidth - a.clientWidth;
                return this.$body[0].removeChild(a), b
            };
            var d = a.fn.modal;
            a.fn.modal = b, a.fn.modal.Constructor = c, a.fn.modal.noConflict = function () {
                return a.fn.modal = d, this
            }, a(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function (c) {
                var d = a(this), e = d.attr("href"),
                    f = a(d.attr("data-target") || e && e.replace(/.*(?=#[^\s]+$)/, "")),
                    g = f.data("bs.modal") ? "toggle" : a.extend({remote: !/#/.test(e) && e}, f.data(), d.data());
                d.is("a") && c.preventDefault(), f.one("show.bs.modal", function (a) {
                    a.isDefaultPrevented() || f.one("hidden.bs.modal", function () {
                        d.is(":visible") && d.trigger("focus")
                    })
                }), b.call(f, g, this)
            })
        }(jQuery), +function (a) {
            "use strict";

            function b(b) {
                return this.each(function () {
                    var d = a(this), e = d.data("bs.tooltip"), f = "object" == typeof b && b;
                    (e || !/destroy|hide/.test(b)) && (e || d.data("bs.tooltip", e = new c(this, f)), "string" == typeof b && e[b]())
                })
            }

            var c = function (a, b) {
                this.type = null, this.options = null, this.enabled = null, this.timeout = null, this.hoverState = null, this.$element = null, this.inState = null, this.init("tooltip", a, b)
            };
            c.VERSION = "3.3.6", c.TRANSITION_DURATION = 150, c.DEFAULTS = {
                animation: !0,
                placement: "top",
                selector: !1,
                template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
                trigger: "hover focus",
                title: "",
                delay: 0,
                html: !1,
                container: !1,
                viewport: {selector: "body", padding: 0}
            }, c.prototype.init = function (b, c, d) {
                if (this.enabled = !0, this.type = b, this.$element = a(c), this.options = this.getOptions(d), this.$viewport = this.options.viewport && a(a.isFunction(this.options.viewport) ? this.options.viewport.call(this, this.$element) : this.options.viewport.selector || this.options.viewport), this.inState = {
                    click: !1,
                    hover: !1,
                    focus: !1
                }, this.$element[0] instanceof document.constructor && !this.options.selector) throw new Error("`selector` option must be specified when initializing " + this.type + " on the window.document object!");
                for (var e = this.options.trigger.split(" "), f = e.length; f--;) {
                    var g = e[f];
                    if ("click" == g) this.$element.on("click." + this.type, this.options.selector, a.proxy(this.toggle, this)); else if ("manual" != g) {
                        var h = "hover" == g ? "mouseenter" : "focusin", i = "hover" == g ? "mouseleave" : "focusout";
                        this.$element.on(h + "." + this.type, this.options.selector, a.proxy(this.enter, this)), this.$element.on(i + "." + this.type, this.options.selector, a.proxy(this.leave, this))
                    }
                }
                this.options.selector ? this._options = a.extend({}, this.options, {
                    trigger: "manual",
                    selector: ""
                }) : this.fixTitle()
            }, c.prototype.getDefaults = function () {
                return c.DEFAULTS
            }, c.prototype.getOptions = function (b) {
                return b = a.extend({}, this.getDefaults(), this.$element.data(), b), b.delay && "number" == typeof b.delay && (b.delay = {
                    show: b.delay,
                    hide: b.delay
                }), b
            }, c.prototype.getDelegateOptions = function () {
                var b = {}, c = this.getDefaults();
                return this._options && a.each(this._options, function (a, d) {
                    c[a] != d && (b[a] = d)
                }), b
            }, c.prototype.enter = function (b) {
                var c = b instanceof this.constructor ? b : a(b.currentTarget).data("bs." + this.type);
                return c || (c = new this.constructor(b.currentTarget, this.getDelegateOptions()), a(b.currentTarget).data("bs." + this.type, c)), b instanceof a.Event && (c.inState["focusin" == b.type ? "focus" : "hover"] = !0), c.tip().hasClass("in") || "in" == c.hoverState ? void (c.hoverState = "in") : (clearTimeout(c.timeout), c.hoverState = "in", c.options.delay && c.options.delay.show ? void (c.timeout = setTimeout(function () {
                    "in" == c.hoverState && c.show()
                }, c.options.delay.show)) : c.show())
            }, c.prototype.isInStateTrue = function () {
                for (var a in this.inState) if (this.inState[a]) return !0;
                return !1
            }, c.prototype.leave = function (b) {
                var c = b instanceof this.constructor ? b : a(b.currentTarget).data("bs." + this.type);
                return c || (c = new this.constructor(b.currentTarget, this.getDelegateOptions()), a(b.currentTarget).data("bs." + this.type, c)), b instanceof a.Event && (c.inState["focusout" == b.type ? "focus" : "hover"] = !1), c.isInStateTrue() ? void 0 : (clearTimeout(c.timeout), c.hoverState = "out", c.options.delay && c.options.delay.hide ? void (c.timeout = setTimeout(function () {
                    "out" == c.hoverState && c.hide()
                }, c.options.delay.hide)) : c.hide())
            }, c.prototype.show = function () {
                var b = a.Event("show.bs." + this.type);
                if (this.hasContent() && this.enabled) {
                    this.$element.trigger(b);
                    var d = a.contains(this.$element[0].ownerDocument.documentElement, this.$element[0]);
                    if (b.isDefaultPrevented() || !d) return;
                    var e = this, f = this.tip(), g = this.getUID(this.type);
                    this.setContent(), f.attr("id", g), this.$element.attr("aria-describedby", g), this.options.animation && f.addClass("fade");
                    var h = "function" == typeof this.options.placement ? this.options.placement.call(this, f[0], this.$element[0]) : this.options.placement,
                        i = /\s?auto?\s?/i, j = i.test(h);
                    j && (h = h.replace(i, "") || "top"), f.detach().css({
                        top: 0,
                        left: 0,
                        display: "block"
                    }).addClass(h).data("bs." + this.type, this), this.options.container ? f.appendTo(this.options.container) : f.insertAfter(this.$element), this.$element.trigger("inserted.bs." + this.type);
                    var k = this.getPosition(), l = f[0].offsetWidth, m = f[0].offsetHeight;
                    if (j) {
                        var n = h, o = this.getPosition(this.$viewport);
                        h = "bottom" == h && k.bottom + m > o.bottom ? "top" : "top" == h && k.top - m < o.top ? "bottom" : "right" == h && k.right + l > o.width ? "left" : "left" == h && k.left - l < o.left ? "right" : h, f.removeClass(n).addClass(h)
                    }
                    var p = this.getCalculatedOffset(h, k, l, m);
                    this.applyPlacement(p, h);
                    var q = function () {
                        var a = e.hoverState;
                        e.$element.trigger("shown.bs." + e.type), e.hoverState = null, "out" == a && e.leave(e)
                    };
                    a.support.transition && this.$tip.hasClass("fade") ? f.one("bsTransitionEnd", q).emulateTransitionEnd(c.TRANSITION_DURATION) : q()
                }
            }, c.prototype.applyPlacement = function (b, c) {
                var d = this.tip(), e = d[0].offsetWidth, f = d[0].offsetHeight, g = parseInt(d.css("margin-top"), 10),
                    h = parseInt(d.css("margin-left"), 10);
                isNaN(g) && (g = 0), isNaN(h) && (h = 0), b.top += g, b.left += h, a.offset.setOffset(d[0], a.extend({
                    using: function (a) {
                        d.css({top: Math.round(a.top), left: Math.round(a.left)})
                    }
                }, b), 0), d.addClass("in");
                var i = d[0].offsetWidth, j = d[0].offsetHeight;
                "top" == c && j != f && (b.top = b.top + f - j);
                var k = this.getViewportAdjustedDelta(c, b, i, j);
                k.left ? b.left += k.left : b.top += k.top;
                var l = /top|bottom/.test(c), m = l ? 2 * k.left - e + i : 2 * k.top - f + j,
                    n = l ? "offsetWidth" : "offsetHeight";
                d.offset(b), this.replaceArrow(m, d[0][n], l)
            }, c.prototype.replaceArrow = function (a, b, c) {
                this.arrow().css(c ? "left" : "top", 50 * (1 - a / b) + "%").css(c ? "top" : "left", "")
            }, c.prototype.setContent = function () {
                var a = this.tip(), b = this.getTitle();
                a.find(".tooltip-inner")[this.options.html ? "html" : "text"](b), a.removeClass("fade in top bottom left right")
            }, c.prototype.hide = function (b) {
                function d() {
                    "in" != e.hoverState && f.detach(), e.$element.removeAttr("aria-describedby").trigger("hidden.bs." + e.type), b && b()
                }

                var e = this, f = a(this.$tip), g = a.Event("hide.bs." + this.type);
                return this.$element.trigger(g), g.isDefaultPrevented() ? void 0 : (f.removeClass("in"), a.support.transition && f.hasClass("fade") ? f.one("bsTransitionEnd", d).emulateTransitionEnd(c.TRANSITION_DURATION) : d(), this.hoverState = null, this)
            }, c.prototype.fixTitle = function () {
                var a = this.$element;
                (a.attr("title") || "string" != typeof a.attr("data-original-title")) && a.attr("data-original-title", a.attr("title") || "").attr("title", "")
            }, c.prototype.hasContent = function () {
                return this.getTitle()
            }, c.prototype.getPosition = function (b) {
                b = b || this.$element;
                var c = b[0], d = "BODY" == c.tagName, e = c.getBoundingClientRect();
                null == e.width && (e = a.extend({}, e, {width: e.right - e.left, height: e.bottom - e.top}));
                var f = d ? {top: 0, left: 0} : b.offset(),
                    g = {scroll: d ? document.documentElement.scrollTop || document.body.scrollTop : b.scrollTop()},
                    h = d ? {width: a(window).width(), height: a(window).height()} : null;
                return a.extend({}, e, g, h, f)
            }, c.prototype.getCalculatedOffset = function (a, b, c, d) {
                return "bottom" == a ? {
                    top: b.top + b.height,
                    left: b.left + b.width / 2 - c / 2
                } : "top" == a ? {
                    top: b.top - d,
                    left: b.left + b.width / 2 - c / 2
                } : "left" == a ? {
                    top: b.top + b.height / 2 - d / 2,
                    left: b.left - c
                } : {top: b.top + b.height / 2 - d / 2, left: b.left + b.width}
            }, c.prototype.getViewportAdjustedDelta = function (a, b, c, d) {
                var e = {top: 0, left: 0};
                if (!this.$viewport) return e;
                var f = this.options.viewport && this.options.viewport.padding || 0,
                    g = this.getPosition(this.$viewport);
                if (/right|left/.test(a)) {
                    var h = b.top - f - g.scroll, i = b.top + f - g.scroll + d;
                    h < g.top ? e.top = g.top - h : i > g.top + g.height && (e.top = g.top + g.height - i)
                } else {
                    var j = b.left - f, k = b.left + f + c;
                    j < g.left ? e.left = g.left - j : k > g.right && (e.left = g.left + g.width - k)
                }
                return e
            }, c.prototype.getTitle = function () {
                var a, b = this.$element, c = this.options;
                return a = b.attr("data-original-title") || ("function" == typeof c.title ? c.title.call(b[0]) : c.title)
            }, c.prototype.getUID = function (a) {
                do a += ~~(1e6 * Math.random()); while (document.getElementById(a));
                return a
            }, c.prototype.tip = function () {
                if (!this.$tip && (this.$tip = a(this.options.template), 1 != this.$tip.length)) throw new Error(this.type + " `template` option must consist of exactly 1 top-level element!");
                return this.$tip
            }, c.prototype.arrow = function () {
                return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow")
            }, c.prototype.enable = function () {
                this.enabled = !0
            }, c.prototype.disable = function () {
                this.enabled = !1
            }, c.prototype.toggleEnabled = function () {
                this.enabled = !this.enabled
            }, c.prototype.toggle = function (b) {
                var c = this;
                b && (c = a(b.currentTarget).data("bs." + this.type), c || (c = new this.constructor(b.currentTarget, this.getDelegateOptions()), a(b.currentTarget).data("bs." + this.type, c))), b ? (c.inState.click = !c.inState.click, c.isInStateTrue() ? c.enter(c) : c.leave(c)) : c.tip().hasClass("in") ? c.leave(c) : c.enter(c)
            }, c.prototype.destroy = function () {
                var a = this;
                clearTimeout(this.timeout), this.hide(function () {
                    a.$element.off("." + a.type).removeData("bs." + a.type), a.$tip && a.$tip.detach(), a.$tip = null, a.$arrow = null, a.$viewport = null
                })
            };
            var d = a.fn.tooltip;
            a.fn.tooltip = b, a.fn.tooltip.Constructor = c, a.fn.tooltip.noConflict = function () {
                return a.fn.tooltip = d, this
            }
        }(jQuery), +function (a) {
            "use strict";

            function b(b) {
                return this.each(function () {
                    var d = a(this), e = d.data("bs.popover"), f = "object" == typeof b && b;
                    (e || !/destroy|hide/.test(b)) && (e || d.data("bs.popover", e = new c(this, f)), "string" == typeof b && e[b]())
                })
            }

            var c = function (a, b) {
                this.init("popover", a, b)
            };
            if (!a.fn.tooltip) throw new Error("Popover requires tooltip.js");
            c.VERSION = "3.3.6", c.DEFAULTS = a.extend({}, a.fn.tooltip.Constructor.DEFAULTS, {
                placement: "right",
                trigger: "click",
                content: "",
                template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
            }), c.prototype = a.extend({}, a.fn.tooltip.Constructor.prototype), c.prototype.constructor = c, c.prototype.getDefaults = function () {
                return c.DEFAULTS
            }, c.prototype.setContent = function () {
                var a = this.tip(), b = this.getTitle(), c = this.getContent();
                a.find(".popover-title")[this.options.html ? "html" : "text"](b), a.find(".popover-content").children().detach().end()[this.options.html ? "string" == typeof c ? "html" : "append" : "text"](c), a.removeClass("fade top bottom left right in"), a.find(".popover-title").html() || a.find(".popover-title").hide()
            }, c.prototype.hasContent = function () {
                return this.getTitle() || this.getContent()
            }, c.prototype.getContent = function () {
                var a = this.$element, b = this.options;
                return a.attr("data-content") || ("function" == typeof b.content ? b.content.call(a[0]) : b.content)
            }, c.prototype.arrow = function () {
                return this.$arrow = this.$arrow || this.tip().find(".arrow")
            };
            var d = a.fn.popover;
            a.fn.popover = b, a.fn.popover.Constructor = c, a.fn.popover.noConflict = function () {
                return a.fn.popover = d, this
            }
        }(jQuery), +function (a) {
            "use strict";

            function b(c, d) {
                this.$body = a(document.body), this.$scrollElement = a(a(c).is(document.body) ? window : c), this.options = a.extend({}, b.DEFAULTS, d), this.selector = (this.options.target || "") + " .nav li > a", this.offsets = [], this.targets = [], this.activeTarget = null, this.scrollHeight = 0, this.$scrollElement.on("scroll.bs.scrollspy", a.proxy(this.process, this)), this.refresh(), this.process()
            }

            function c(c) {
                return this.each(function () {
                    var d = a(this), e = d.data("bs.scrollspy"), f = "object" == typeof c && c;
                    e || d.data("bs.scrollspy", e = new b(this, f)), "string" == typeof c && e[c]()
                })
            }

            b.VERSION = "3.3.6", b.DEFAULTS = {offset: 10}, b.prototype.getScrollHeight = function () {
                return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight)
            }, b.prototype.refresh = function () {
                var b = this, c = "offset", d = 0;
                this.offsets = [], this.targets = [], this.scrollHeight = this.getScrollHeight(), a.isWindow(this.$scrollElement[0]) || (c = "position", d = this.$scrollElement.scrollTop()), this.$body.find(this.selector).map(function () {
                    var b = a(this), e = b.data("target") || b.attr("href"), f = /^#./.test(e) && a(e);
                    return f && f.length && f.is(":visible") && [[f[c]().top + d, e]] || null
                }).sort(function (a, b) {
                    return a[0] - b[0]
                }).each(function () {
                    b.offsets.push(this[0]), b.targets.push(this[1])
                })
            }, b.prototype.process = function () {
                var a, b = this.$scrollElement.scrollTop() + this.options.offset, c = this.getScrollHeight(),
                    d = this.options.offset + c - this.$scrollElement.height(), e = this.offsets, f = this.targets,
                    g = this.activeTarget;
                if (this.scrollHeight != c && this.refresh(), b >= d) return g != (a = f[f.length - 1]) && this.activate(a);
                if (g && b < e[0]) return this.activeTarget = null, this.clear();
                for (a = e.length; a--;) g != f[a] && b >= e[a] && (void 0 === e[a + 1] || b < e[a + 1]) && this.activate(f[a])
            }, b.prototype.activate = function (b) {
                this.activeTarget = b, this.clear();
                var c = this.selector + '[data-target="' + b + '"],' + this.selector + '[href="' + b + '"]',
                    d = a(c).parents("li").addClass("active");
                d.parent(".dropdown-menu").length && (d = d.closest("li.dropdown").addClass("active")), d.trigger("activate.bs.scrollspy")
            }, b.prototype.clear = function () {
                a(this.selector).parentsUntil(this.options.target, ".active").removeClass("active")
            };
            var d = a.fn.scrollspy;
            a.fn.scrollspy = c, a.fn.scrollspy.Constructor = b, a.fn.scrollspy.noConflict = function () {
                return a.fn.scrollspy = d, this
            }, a(window).on("load.bs.scrollspy.data-api", function () {
                a('[data-spy="scroll"]').each(function () {
                    var b = a(this);
                    c.call(b, b.data())
                })
            })
        }(jQuery), +function (a) {
            "use strict";

            function b(b) {
                return this.each(function () {
                    var d = a(this), e = d.data("bs.tab");
                    e || d.data("bs.tab", e = new c(this)), "string" == typeof b && e[b]()
                })
            }

            var c = function (b) {
                this.element = a(b)
            };
            c.VERSION = "3.3.6", c.TRANSITION_DURATION = 150, c.prototype.show = function () {
                var b = this.element, c = b.closest("ul:not(.dropdown-menu)"), d = b.data("target");
                if (d || (d = b.attr("href"), d = d && d.replace(/.*(?=#[^\s]*$)/, "")), !b.parent("li").hasClass("active")) {
                    var e = c.find(".active:last a"), f = a.Event("hide.bs.tab", {relatedTarget: b[0]}),
                        g = a.Event("show.bs.tab", {relatedTarget: e[0]});
                    if (e.trigger(f), b.trigger(g), !g.isDefaultPrevented() && !f.isDefaultPrevented()) {
                        var h = a(d);
                        this.activate(b.closest("li"), c), this.activate(h, h.parent(), function () {
                            e.trigger({type: "hidden.bs.tab", relatedTarget: b[0]}), b.trigger({
                                type: "shown.bs.tab",
                                relatedTarget: e[0]
                            })
                        })
                    }
                }
            }, c.prototype.activate = function (b, d, e) {
                function f() {
                    g.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !1), b.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded", !0), h ? (b[0].offsetWidth, b.addClass("in")) : b.removeClass("fade"), b.parent(".dropdown-menu").length && b.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !0), e && e()
                }

                var g = d.find("> .active"),
                    h = e && a.support.transition && (g.length && g.hasClass("fade") || !!d.find("> .fade").length);
                g.length && h ? g.one("bsTransitionEnd", f).emulateTransitionEnd(c.TRANSITION_DURATION) : f(), g.removeClass("in")
            };
            var d = a.fn.tab;
            a.fn.tab = b, a.fn.tab.Constructor = c, a.fn.tab.noConflict = function () {
                return a.fn.tab = d, this
            };
            var e = function (c) {
                c.preventDefault(), b.call(a(this), "show")
            };
            a(document).on("click.bs.tab.data-api", '[data-toggle="tab"]', e).on("click.bs.tab.data-api", '[data-toggle="pill"]', e)
        }(jQuery), +function (a) {
            "use strict";

            function b(b) {
                return this.each(function () {
                    var d = a(this), e = d.data("bs.affix"), f = "object" == typeof b && b;
                    e || d.data("bs.affix", e = new c(this, f)), "string" == typeof b && e[b]()
                })
            }

            var c = function (b, d) {
                this.options = a.extend({}, c.DEFAULTS, d), this.$target = a(this.options.target).on("scroll.bs.affix.data-api", a.proxy(this.checkPosition, this)).on("click.bs.affix.data-api", a.proxy(this.checkPositionWithEventLoop, this)), this.$element = a(b), this.affixed = null, this.unpin = null, this.pinnedOffset = null, this.checkPosition()
            };
            c.VERSION = "3.3.6", c.RESET = "affix affix-top affix-bottom", c.DEFAULTS = {
                offset: 0,
                target: window
            }, c.prototype.getState = function (a, b, c, d) {
                var e = this.$target.scrollTop(), f = this.$element.offset(), g = this.$target.height();
                if (null != c && "top" == this.affixed) return c > e ? "top" : !1;
                if ("bottom" == this.affixed) return null != c ? e + this.unpin <= f.top ? !1 : "bottom" : a - d >= e + g ? !1 : "bottom";
                var h = null == this.affixed, i = h ? e : f.top, j = h ? g : b;
                return null != c && c >= e ? "top" : null != d && i + j >= a - d ? "bottom" : !1
            }, c.prototype.getPinnedOffset = function () {
                if (this.pinnedOffset) return this.pinnedOffset;
                this.$element.removeClass(c.RESET).addClass("affix");
                var a = this.$target.scrollTop(), b = this.$element.offset();
                return this.pinnedOffset = b.top - a
            }, c.prototype.checkPositionWithEventLoop = function () {
                setTimeout(a.proxy(this.checkPosition, this), 1)
            }, c.prototype.checkPosition = function () {
                if (this.$element.is(":visible")) {
                    var b = this.$element.height(), d = this.options.offset, e = d.top, f = d.bottom,
                        g = Math.max(a(document).height(), a(document.body).height());
                    "object" != typeof d && (f = e = d), "function" == typeof e && (e = d.top(this.$element)), "function" == typeof f && (f = d.bottom(this.$element));
                    var h = this.getState(g, b, e, f);
                    if (this.affixed != h) {
                        null != this.unpin && this.$element.css("top", "");
                        var i = "affix" + (h ? "-" + h : ""), j = a.Event(i + ".bs.affix");
                        if (this.$element.trigger(j), j.isDefaultPrevented()) return;
                        this.affixed = h, this.unpin = "bottom" == h ? this.getPinnedOffset() : null, this.$element.removeClass(c.RESET).addClass(i).trigger(i.replace("affix", "affixed") + ".bs.affix")
                    }
                    "bottom" == h && this.$element.offset({top: g - b - f})
                }
            };
            var d = a.fn.affix;
            a.fn.affix = b, a.fn.affix.Constructor = c, a.fn.affix.noConflict = function () {
                return a.fn.affix = d, this
            }, a(window).on("load", function () {
                a('[data-spy="affix"]').each(function () {
                    var c = a(this), d = c.data();
                    d.offset = d.offset || {}, null != d.offsetBottom && (d.offset.bottom = d.offsetBottom), null != d.offsetTop && (d.offset.top = d.offsetTop), b.call(c, d)
                })
            })
        }(jQuery);
        (function (i, s) {
            "use strict";
            var e = "0.7.17", o = "", r = "?", n = "function", a = "undefined", d = "object", t = "string", l = "major",
                w = "model", u = "name", m = "type", c = "vendor", b = "version", p = "architecture", g = "console",
                f = "mobile", h = "tablet", v = "smarttv", x = "wearable", S = "embedded", k = {
                    extend: function (i, s) {
                        var e = {};
                        for (var o in i) s[o] && s[o].length % 2 === 0 ? e[o] = s[o].concat(i[o]) : e[o] = i[o];
                        return e
                    }, has: function (i, s) {
                        return "string" == typeof i && s.toLowerCase().indexOf(i.toLowerCase()) !== -1
                    }, lowerize: function (i) {
                        return i.toLowerCase()
                    }, major: function (i) {
                        return typeof i === t ? i.replace(/[^\d\.]/g, "").split(".")[0] : s
                    }, trim: function (i) {
                        return i.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, "")
                    }
                }, y = {
                    rgx: function (i, e) {
                        for (var o, r, a, t, l, w, u = 0; u < e.length && !l;) {
                            var m = e[u], c = e[u + 1];
                            for (o = r = 0; o < m.length && !l;) if (l = m[o++].exec(i)) for (a = 0; a < c.length; a++) w = l[++r], t = c[a], typeof t === d && t.length > 0 ? 2 == t.length ? typeof t[1] == n ? this[t[0]] = t[1].call(this, w) : this[t[0]] = t[1] : 3 == t.length ? typeof t[1] !== n || t[1].exec && t[1].test ? this[t[0]] = w ? w.replace(t[1], t[2]) : s : this[t[0]] = w ? t[1].call(this, w, t[2]) : s : 4 == t.length && (this[t[0]] = w ? t[3].call(this, w.replace(t[1], t[2])) : s) : this[t] = w ? w : s;
                            u += 2
                        }
                    }, str: function (i, e) {
                        for (var o in e) if (typeof e[o] === d && e[o].length > 0) {
                            for (var n = 0; n < e[o].length; n++) if (k.has(e[o][n], i)) return o === r ? s : o
                        } else if (k.has(e[o], i)) return o === r ? s : o;
                        return i
                    }
                }, T = {
                    browser: {
                        oldsafari: {
                            version: {
                                "1.0": "/8",
                                1.2: "/1",
                                1.3: "/3",
                                "2.0": "/412",
                                "2.0.2": "/416",
                                "2.0.3": "/417",
                                "2.0.4": "/419",
                                "?": "/"
                            }
                        }
                    },
                    device: {
                        amazon: {model: {"Fire Phone": ["SD", "KF"]}},
                        sprint: {model: {"Evo Shift 4G": "7373KT"}, vendor: {HTC: "APA", Sprint: "Sprint"}}
                    },
                    os: {
                        windows: {
                            version: {
                                ME: "4.90",
                                "NT 3.11": "NT3.51",
                                "NT 4.0": "NT4.0",
                                2000: "NT 5.0",
                                XP: ["NT 5.1", "NT 5.2"],
                                Vista: "NT 6.0",
                                7: "NT 6.1",
                                8: "NT 6.2",
                                8.1: "NT 6.3",
                                10: ["NT 6.4", "NT 10.0"],
                                RT: "ARM"
                            }
                        }
                    }
                }, A = {
                    browser: [[/(opera\smini)\/([\w\.-]+)/i, /(opera\s[mobiletab]+).+version\/([\w\.-]+)/i, /(opera).+version\/([\w\.]+)/i, /(opera)[\/\s]+([\w\.]+)/i], [u, b], [/(opios)[\/\s]+([\w\.]+)/i], [[u, "Opera Mini"], b], [/\s(opr)\/([\w\.]+)/i], [[u, "Opera"], b], [/(kindle)\/([\w\.]+)/i, /(lunascape|maxthon|netfront|jasmine|blazer)[\/\s]?([\w\.]+)*/i, /(avant\s|iemobile|slim|baidu)(?:browser)?[\/\s]?([\w\.]*)/i, /(?:ms|\()(ie)\s([\w\.]+)/i, /(rekonq)\/([\w\.]+)*/i, /(chromium|flock|rockmelt|midori|epiphany|silk|skyfire|ovibrowser|bolt|iron|vivaldi|iridium|phantomjs|bowser|quark)\/([\w\.-]+)/i], [u, b], [/(trident).+rv[:\s]([\w\.]+).+like\sgecko/i], [[u, "IE"], b], [/(edge)\/((\d+)?[\w\.]+)/i], [u, b], [/(yabrowser)\/([\w\.]+)/i], [[u, "Yandex"], b], [/(puffin)\/([\w\.]+)/i], [[u, "Puffin"], b], [/((?:[\s\/])uc?\s?browser|(?:juc.+)ucweb)[\/\s]?([\w\.]+)/i], [[u, "UCBrowser"], b], [/(comodo_dragon)\/([\w\.]+)/i], [[u, /_/g, " "], b], [/(micromessenger)\/([\w\.]+)/i], [[u, "WeChat"], b], [/(QQ)\/([\d\.]+)/i], [u, b], [/m?(qqbrowser)[\/\s]?([\w\.]+)/i], [u, b], [/xiaomi\/miuibrowser\/([\w\.]+)/i], [b, [u, "MIUI Browser"]], [/;fbav\/([\w\.]+);/i], [b, [u, "Facebook"]], [/headlesschrome(?:\/([\w\.]+)|\s)/i], [b, [u, "Chrome Headless"]], [/\swv\).+(chrome)\/([\w\.]+)/i], [[u, /(.+)/, "$1 WebView"], b], [/((?:oculus|samsung)browser)\/([\w\.]+)/i], [[u, /(.+(?:g|us))(.+)/, "$1 $2"], b], [/android.+version\/([\w\.]+)\s+(?:mobile\s?safari|safari)*/i], [b, [u, "Android Browser"]], [/(chrome|omniweb|arora|[tizenoka]{5}\s?browser)\/v?([\w\.]+)/i], [u, b], [/(dolfin)\/([\w\.]+)/i], [[u, "Dolphin"], b], [/((?:android.+)crmo|crios)\/([\w\.]+)/i], [[u, "Chrome"], b], [/(coast)\/([\w\.]+)/i], [[u, "Opera Coast"], b], [/fxios\/([\w\.-]+)/i], [b, [u, "Firefox"]], [/version\/([\w\.]+).+?mobile\/\w+\s(safari)/i], [b, [u, "Mobile Safari"]], [/version\/([\w\.]+).+?(mobile\s?safari|safari)/i], [b, u], [/webkit.+?(gsa)\/([\w\.]+).+?(mobile\s?safari|safari)(\/[\w\.]+)/i], [[u, "GSA"], b], [/webkit.+?(mobile\s?safari|safari)(\/[\w\.]+)/i], [u, [b, y.str, T.browser.oldsafari.version]], [/(konqueror)\/([\w\.]+)/i, /(webkit|khtml)\/([\w\.]+)/i], [u, b], [/(navigator|netscape)\/([\w\.-]+)/i], [[u, "Netscape"], b], [/(swiftfox)/i, /(icedragon|iceweasel|camino|chimera|fennec|maemo\sbrowser|minimo|conkeror)[\/\s]?([\w\.\+]+)/i, /(firefox|seamonkey|k-meleon|icecat|iceape|firebird|phoenix|palemoon|basilisk|waterfox)\/([\w\.-]+)$/i, /(mozilla)\/([\w\.]+).+rv\:.+gecko\/\d+/i, /(polaris|lynx|dillo|icab|doris|amaya|w3m|netsurf|sleipnir)[\/\s]?([\w\.]+)/i, /(links)\s\(([\w\.]+)/i, /(gobrowser)\/?([\w\.]+)*/i, /(ice\s?browser)\/v?([\w\._]+)/i, /(mosaic)[\/\s]([\w\.]+)/i], [u, b]],
                    cpu: [[/(?:(amd|x(?:(?:86|64)[_-])?|wow|win)64)[;\)]/i], [[p, "amd64"]], [/(ia32(?=;))/i], [[p, k.lowerize]], [/((?:i[346]|x)86)[;\)]/i], [[p, "ia32"]], [/windows\s(ce|mobile);\sppc;/i], [[p, "arm"]], [/((?:ppc|powerpc)(?:64)?)(?:\smac|;|\))/i], [[p, /ower/, "", k.lowerize]], [/(sun4\w)[;\)]/i], [[p, "sparc"]], [/((?:avr32|ia64(?=;))|68k(?=\))|arm(?:64|(?=v\d+;))|(?=atmel\s)avr|(?:irix|mips|sparc)(?:64)?(?=;)|pa-risc)/i], [[p, k.lowerize]]],
                    device: [[/\((ipad|playbook);[\w\s\);-]+(rim|apple)/i], [w, c, [m, h]], [/applecoremedia\/[\w\.]+ \((ipad)/], [w, [c, "Apple"], [m, h]], [/(apple\s{0,1}tv)/i], [[w, "Apple TV"], [c, "Apple"]], [/(archos)\s(gamepad2?)/i, /(hp).+(touchpad)/i, /(hp).+(tablet)/i, /(kindle)\/([\w\.]+)/i, /\s(nook)[\w\s]+build\/(\w+)/i, /(dell)\s(strea[kpr\s\d]*[\dko])/i], [c, w, [m, h]], [/(kf[A-z]+)\sbuild\/[\w\.]+.*silk\//i], [w, [c, "Amazon"], [m, h]], [/(sd|kf)[0349hijorstuw]+\sbuild\/[\w\.]+.*silk\//i], [[w, y.str, T.device.amazon.model], [c, "Amazon"], [m, f]], [/\((ip[honed|\s\w*]+);.+(apple)/i], [w, c, [m, f]], [/\((ip[honed|\s\w*]+);/i], [w, [c, "Apple"], [m, f]], [/(blackberry)[\s-]?(\w+)/i, /(blackberry|benq|palm(?=\-)|sonyericsson|acer|asus|dell|meizu|motorola|polytron)[\s_-]?([\w-]+)*/i, /(hp)\s([\w\s]+\w)/i, /(asus)-?(\w+)/i], [c, w, [m, f]], [/\(bb10;\s(\w+)/i], [w, [c, "BlackBerry"], [m, f]], [/android.+(transfo[prime\s]{4,10}\s\w+|eeepc|slider\s\w+|nexus 7|padfone)/i], [w, [c, "Asus"], [m, h]], [/(sony)\s(tablet\s[ps])\sbuild\//i, /(sony)?(?:sgp.+)\sbuild\//i], [[c, "Sony"], [w, "Xperia Tablet"], [m, h]], [/android.+\s([c-g]\d{4}|so[-l]\w+)\sbuild\//i], [w, [c, "Sony"], [m, f]], [/\s(ouya)\s/i, /(nintendo)\s([wids3u]+)/i], [c, w, [m, g]], [/android.+;\s(shield)\sbuild/i], [w, [c, "Nvidia"], [m, g]], [/(playstation\s[34portablevi]+)/i], [w, [c, "Sony"], [m, g]], [/(sprint\s(\w+))/i], [[c, y.str, T.device.sprint.vendor], [w, y.str, T.device.sprint.model], [m, f]], [/(lenovo)\s?(S(?:5000|6000)+(?:[-][\w+]))/i], [c, w, [m, h]], [/(htc)[;_\s-]+([\w\s]+(?=\))|\w+)*/i, /(zte)-(\w+)*/i, /(alcatel|geeksphone|lenovo|nexian|panasonic|(?=;\s)sony)[_\s-]?([\w-]+)*/i], [c, [w, /_/g, " "], [m, f]], [/(nexus\s9)/i], [w, [c, "HTC"], [m, h]], [/d\/huawei([\w\s-]+)[;\)]/i, /(nexus\s6p)/i], [w, [c, "Huawei"], [m, f]], [/(microsoft);\s(lumia[\s\w]+)/i], [c, w, [m, f]], [/[\s\(;](xbox(?:\sone)?)[\s\);]/i], [w, [c, "Microsoft"], [m, g]], [/(kin\.[onetw]{3})/i], [[w, /\./g, " "], [c, "Microsoft"], [m, f]], [/\s(milestone|droid(?:[2-4x]|\s(?:bionic|x2|pro|razr))?(:?\s4g)?)[\w\s]+build\//i, /mot[\s-]?(\w+)*/i, /(XT\d{3,4}) build\//i, /(nexus\s6)/i], [w, [c, "Motorola"], [m, f]], [/android.+\s(mz60\d|xoom[\s2]{0,2})\sbuild\//i], [w, [c, "Motorola"], [m, h]], [/hbbtv\/\d+\.\d+\.\d+\s+\([\w\s]*;\s*(\w[^;]*);([^;]*)/i], [[c, k.trim], [w, k.trim], [m, v]], [/hbbtv.+maple;(\d+)/i], [[w, /^/, "SmartTV"], [c, "Samsung"], [m, v]], [/\(dtv[\);].+(aquos)/i], [w, [c, "Sharp"], [m, v]], [/android.+((sch-i[89]0\d|shw-m380s|gt-p\d{4}|gt-n\d+|sgh-t8[56]9|nexus 10))/i, /((SM-T\w+))/i], [[c, "Samsung"], w, [m, h]], [/smart-tv.+(samsung)/i], [c, [m, v], w], [/((s[cgp]h-\w+|gt-\w+|galaxy\snexus|sm-\w[\w\d]+))/i, /(sam[sung]*)[\s-]*(\w+-?[\w-]*)*/i, /sec-((sgh\w+))/i], [[c, "Samsung"], w, [m, f]], [/sie-(\w+)*/i], [w, [c, "Siemens"], [m, f]], [/(maemo|nokia).*(n900|lumia\s\d+)/i, /(nokia)[\s_-]?([\w-]+)*/i], [[c, "Nokia"], w, [m, f]], [/android\s3\.[\s\w;-]{10}(a\d{3})/i], [w, [c, "Acer"], [m, h]], [/android.+([vl]k\-?\d{3})\s+build/i], [w, [c, "LG"], [m, h]], [/android\s3\.[\s\w;-]{10}(lg?)-([06cv9]{3,4})/i], [[c, "LG"], w, [m, h]], [/(lg) netcast\.tv/i], [c, w, [m, v]], [/(nexus\s[45])/i, /lg[e;\s\/-]+(\w+)*/i, /android.+lg(\-?[\d\w]+)\s+build/i], [w, [c, "LG"], [m, f]], [/android.+(ideatab[a-z0-9\-\s]+)/i], [w, [c, "Lenovo"], [m, h]], [/linux;.+((jolla));/i], [c, w, [m, f]], [/((pebble))app\/[\d\.]+\s/i], [c, w, [m, x]], [/android.+;\s(oppo)\s?([\w\s]+)\sbuild/i], [c, w, [m, f]], [/crkey/i], [[w, "Chromecast"], [c, "Google"]], [/android.+;\s(glass)\s\d/i], [w, [c, "Google"], [m, x]], [/android.+;\s(pixel c)\s/i], [w, [c, "Google"], [m, h]], [/android.+;\s(pixel xl|pixel)\s/i], [w, [c, "Google"], [m, f]], [/android.+(\w+)\s+build\/hm\1/i, /android.+(hm[\s\-_]*note?[\s_]*(?:\d\w)?)\s+build/i, /android.+(mi[\s\-_]*(?:one|one[\s_]plus|note lte)?[\s_]*(?:\d\w?)?[\s_]*(?:plus)?)\s+build/i, /android.+(redmi[\s\-_]*(?:note)?(?:[\s_]*[\w\s]+)?)\s+build/i], [[w, /_/g, " "], [c, "Xiaomi"], [m, f]], [/android.+(mi[\s\-_]*(?:pad)(?:[\s_]*[\w\s]+)?)\s+build/i], [[w, /_/g, " "], [c, "Xiaomi"], [m, h]], [/android.+;\s(m[1-5]\snote)\sbuild/i], [w, [c, "Meizu"], [m, h]], [/android.+a000(1)\s+build/i, /android.+oneplus\s(a\d{4})\s+build/i], [w, [c, "OnePlus"], [m, f]], [/android.+[;\/]\s*(RCT[\d\w]+)\s+build/i], [w, [c, "RCA"], [m, h]], [/android.+[;\/]\s*(Venue[\d\s]*)\s+build/i], [w, [c, "Dell"], [m, h]], [/android.+[;\/]\s*(Q[T|M][\d\w]+)\s+build/i], [w, [c, "Verizon"], [m, h]], [/android.+[;\/]\s+(Barnes[&\s]+Noble\s+|BN[RT])(V?.*)\s+build/i], [[c, "Barnes & Noble"], w, [m, h]], [/android.+[;\/]\s+(TM\d{3}.*\b)\s+build/i], [w, [c, "NuVision"], [m, h]], [/android.+[;\/]\s*(zte)?.+(k\d{2})\s+build/i], [[c, "ZTE"], w, [m, h]], [/android.+[;\/]\s*(gen\d{3})\s+build.*49h/i], [w, [c, "Swiss"], [m, f]], [/android.+[;\/]\s*(zur\d{3})\s+build/i], [w, [c, "Swiss"], [m, h]], [/android.+[;\/]\s*((Zeki)?TB.*\b)\s+build/i], [w, [c, "Zeki"], [m, h]], [/(android).+[;\/]\s+([YR]\d{2}x?.*)\s+build/i, /android.+[;\/]\s+(Dragon[\-\s]+Touch\s+|DT)(.+)\s+build/i], [[c, "Dragon Touch"], w, [m, h]], [/android.+[;\/]\s*(NS-?.+)\s+build/i], [w, [c, "Insignia"], [m, h]], [/android.+[;\/]\s*((NX|Next)-?.+)\s+build/i], [w, [c, "NextBook"], [m, h]], [/android.+[;\/]\s*(Xtreme\_?)?(V(1[045]|2[015]|30|40|60|7[05]|90))\s+build/i], [[c, "Voice"], w, [m, f]], [/android.+[;\/]\s*(LVTEL\-?)?(V1[12])\s+build/i], [[c, "LvTel"], w, [m, f]], [/android.+[;\/]\s*(V(100MD|700NA|7011|917G).*\b)\s+build/i], [w, [c, "Envizen"], [m, h]], [/android.+[;\/]\s*(Le[\s\-]+Pan)[\s\-]+(.*\b)\s+build/i], [c, w, [m, h]], [/android.+[;\/]\s*(Trio[\s\-]*.*)\s+build/i], [w, [c, "MachSpeed"], [m, h]], [/android.+[;\/]\s*(Trinity)[\-\s]*(T\d{3})\s+build/i], [c, w, [m, h]], [/android.+[;\/]\s*TU_(1491)\s+build/i], [w, [c, "Rotor"], [m, h]], [/android.+(KS(.+))\s+build/i], [w, [c, "Amazon"], [m, h]], [/android.+(Gigaset)[\s\-]+(Q.+)\s+build/i], [c, w, [m, h]], [/\s(tablet|tab)[;\/]/i, /\s(mobile)(?:[;\/]|\ssafari)/i], [[m, k.lowerize], c, w], [/(android.+)[;\/].+build/i], [w, [c, "Generic"]], [/(C6603)/i], [[w, "Xperia Z C6603"], [c, "Sony"], [m, f]], [/(C6903)/i], [[w, "Xperia Z 1"], [c, "Sony"], [m, f]], [/(SM-G900[F|H])/i], [[w, "Galaxy S5"], [c, "Samsung"], [m, f]], [/(SM-G7102)/i], [[w, "Galaxy Grand 2"], [c, "Samsung"], [m, f]], [/(SM-G530H)/i], [[w, "Galaxy Grand Prime"], [c, "Samsung"], [m, f]], [/(SM-G313HZ)/i], [[w, "Galaxy V"], [c, "Samsung"], [m, f]], [/(SM-T805)/i], [[w, "Galaxy Tab S 10.5"], [c, "Samsung"], [m, h]], [/(SM-G800F)/i], [[w, "Galaxy S5 Mini"], [c, "Samsung"], [m, f]], [/(SM-T311)/i], [[w, "Galaxy Tab 3 8.0"], [c, "Samsung"], [m, h]], [/(T3C)/i], [w, [c, "Advan"], [m, h]], [/(ADVAN T1J\+)/i], [[w, "Vandroid T1J+"], [c, "Advan"], [m, h]], [/(ADVAN S4A)/i], [[w, "Vandroid S4A"], [c, "Advan"], [m, f]], [/(V972M)/i], [w, [c, "ZTE"], [m, f]], [/(i-mobile)\s(IQ\s[\d\.]+)/i], [c, w, [m, f]], [/(IQ6.3)/i], [[w, "IQ 6.3"], [c, "i-mobile"], [m, f]], [/(i-mobile)\s(i-style\s[\d\.]+)/i], [c, w, [m, f]], [/(i-STYLE2.1)/i], [[w, "i-STYLE 2.1"], [c, "i-mobile"], [m, f]], [/(mobiistar touch LAI 512)/i], [[w, "Touch LAI 512"], [c, "mobiistar"], [m, f]], []],
                    engine: [[/windows.+\sedge\/([\w\.]+)/i], [b, [u, "EdgeHTML"]], [/(presto)\/([\w\.]+)/i, /(webkit|trident|netfront|netsurf|amaya|lynx|w3m)\/([\w\.]+)/i, /(khtml|tasman|links)[\/\s]\(?([\w\.]+)/i, /(icab)[\/\s]([23]\.[\d\.]+)/i], [u, b], [/rv\:([\w\.]+).*(gecko)/i], [b, u]],
                    os: [[/microsoft\s(windows)\s(vista|xp)/i], [u, b], [/(windows)\snt\s6\.2;\s(arm)/i, /(windows\sphone(?:\sos)*)[\s\/]?([\d\.\s]+\w)*/i, /(windows\smobile|windows)[\s\/]?([ntce\d\.\s]+\w)/i], [u, [b, y.str, T.os.windows.version]], [/(win(?=3|9|n)|win\s9x\s)([nt\d\.]+)/i], [[u, "Windows"], [b, y.str, T.os.windows.version]], [/\((bb)(10);/i], [[u, "BlackBerry"], b], [/(blackberry)\w*\/?([\w\.]+)*/i, /(tizen)[\/\s]([\w\.]+)/i, /(android|webos|palm\sos|qnx|bada|rim\stablet\sos|meego|contiki)[\/\s-]?([\w\.]+)*/i, /linux;.+(sailfish);/i], [u, b], [/(symbian\s?os|symbos|s60(?=;))[\/\s-]?([\w\.]+)*/i], [[u, "Symbian"], b], [/\((series40);/i], [u], [/mozilla.+\(mobile;.+gecko.+firefox/i], [[u, "Firefox OS"], b], [/(nintendo|playstation)\s([wids34portablevu]+)/i, /(mint)[\/\s\(]?(\w+)*/i, /(mageia|vectorlinux)[;\s]/i, /(joli|[kxln]?ubuntu|debian|[open]*suse|gentoo|(?=\s)arch|slackware|fedora|mandriva|centos|pclinuxos|redhat|zenwalk|linpus)[\/\s-]?(?!chrom)([\w\.-]+)*/i, /(hurd|linux)\s?([\w\.]+)*/i, /(gnu)\s?([\w\.]+)*/i], [u, b], [/(cros)\s[\w]+\s([\w\.]+\w)/i], [[u, "Chromium OS"], b], [/(sunos)\s?([\w\.]+\d)*/i], [[u, "Solaris"], b], [/\s([frentopc-]{0,4}bsd|dragonfly)\s?([\w\.]+)*/i], [u, b], [/(haiku)\s(\w+)/i], [u, b], [/cfnetwork\/.+darwin/i, /ip[honead]+(?:.*os\s([\w]+)\slike\smac|;\sopera)/i], [[b, /_/g, "."], [u, "iOS"]], [/(mac\sos\sx)\s?([\w\s\.]+\w)*/i, /(macintosh|mac(?=_powerpc)\s)/i], [[u, "Mac OS"], [b, /_/g, "."]], [/((?:open)?solaris)[\/\s-]?([\w\.]+)*/i, /(aix)\s((\d)(?=\.|\)|\s)[\w\.]*)*/i, /(plan\s9|minix|beos|os\/2|amigaos|morphos|risc\sos|openvms)/i, /(unix)\s?([\w\.]+)*/i], [u, b]]
                }, E = function (e, r) {
                    if ("object" == typeof e && (r = e, e = s), !(this instanceof E)) return new E(e, r).getResult();
                    var n = e || (i && i.navigator && i.navigator.userAgent ? i.navigator.userAgent : o),
                        a = r ? k.extend(A, r) : A;
                    return this.getBrowser = function () {
                        var i = {name: s, version: s};
                        return y.rgx.call(i, n, a.browser), i.major = k.major(i.version), i
                    }, this.getCPU = function () {
                        var i = {architecture: s};
                        return y.rgx.call(i, n, a.cpu), i
                    }, this.getDevice = function () {
                        var i = {vendor: s, model: s, type: s};
                        return y.rgx.call(i, n, a.device), i
                    }, this.getEngine = function () {
                        var i = {name: s, version: s};
                        return y.rgx.call(i, n, a.engine), i
                    }, this.getOS = function () {
                        var i = {name: s, version: s};
                        return y.rgx.call(i, n, a.os), i
                    }, this.getResult = function () {
                        return {
                            ua: this.getUA(),
                            browser: this.getBrowser(),
                            engine: this.getEngine(),
                            os: this.getOS(),
                            device: this.getDevice(),
                            cpu: this.getCPU()
                        }
                    }, this.getUA = function () {
                        return n
                    }, this.setUA = function (i) {
                        return n = i, this
                    }, this
                };
            E.VERSION = e, E.BROWSER = {NAME: u, MAJOR: l, VERSION: b}, E.CPU = {ARCHITECTURE: p}, E.DEVICE = {
                MODEL: w,
                VENDOR: c,
                TYPE: m,
                CONSOLE: g,
                MOBILE: f,
                SMARTTV: v,
                TABLET: h,
                WEARABLE: x,
                EMBEDDED: S
            }, E.ENGINE = {NAME: u, VERSION: b}, E.OS = {
                NAME: u,
                VERSION: b
            }, typeof exports !== a ? (typeof module !== a && module.exports && (exports = module.exports = E), exports.UAParser = E) : typeof define === n && define.amd ? define(function () {
                return E
            }) : i && (i.UAParser = E);
            var N = i && (i.jQuery || i.Zepto);
            if (typeof N !== a) {
                var M = new E;
                N.ua = M.getResult(), N.ua.get = function () {
                    return M.getUA()
                }, N.ua.set = function (i) {
                    M.setUA(i);
                    var s = M.getResult();
                    for (var e in s) N.ua[e] = s[e]
                }
            }
        })("object" == typeof window ? window : this);
        var parser = new UAParser;
        parser.setUA(navigator.userAgent);
        var result = parser.getResult(),
            _info = "\n | Операционная система: " + result.os.name + " " + result.os.version + "\n | Устройство: " + result.device.vendor + " " + result.device.type + "\n | Браузер: " + result.browser.name + " " + result.browser.version;

        function getParameterByName(e, n) {
            n || (n = window.location.href), e = e.replace(/[\[\]]/g, "\\$&");
            var r = new RegExp("[?&]" + e + "(=([^&#]*)|&|#|$)"), a = r.exec(n);
            return a ? a[2] ? decodeURIComponent(a[2].replace(/\+/g, " ")) : "" : null
        }
        (function (f, r, h, t, v) {
            var u = 0, p = function () {
                var a = t.userAgent, b = /msie\s\d+/i;
                return 0 < a.search(b) && (a = b.exec(a).toString(), a = a.split(" ")[1], 9 > a) ? (f("html").addClass("lt-ie9"), !0) : !1
            }();
            Function.prototype.bind || (Function.prototype.bind = function (a) {
                var b = this, d = [].slice;
                if ("function" != typeof b) throw new TypeError;
                var c = d.call(arguments, 1), e = function () {
                    if (this instanceof e) {
                        var g = function () {
                        };
                        g.prototype = b.prototype;
                        var g = new g, l = b.apply(g, c.concat(d.call(arguments)));
                        return Object(l) === l ? l : g
                    }
                    return b.apply(a,
                        c.concat(d.call(arguments)))
                };
                return e
            });
            Array.prototype.indexOf || (Array.prototype.indexOf = function (a, b) {
                var d;
                if (null == this) throw new TypeError('"this" is null or not defined');
                var c = Object(this), e = c.length >>> 0;
                if (0 === e) return -1;
                d = +b || 0;
                Infinity === Math.abs(d) && (d = 0);
                if (d >= e) return -1;
                for (d = Math.max(0 <= d ? d : e - Math.abs(d), 0); d < e;) {
                    if (d in c && c[d] === a) return d;
                    d++
                }
                return -1
            });
            var q = function (a, b, d) {
                this.VERSION = "2.1.2";
                this.input = a;
                this.plugin_count = d;
                this.old_to = this.old_from = this.update_tm = this.calc_count =
                    this.current_plugin = 0;
                this.raf_id = this.old_min_interval = null;
                this.is_update = this.is_key = this.no_diapason = this.force_redraw = this.dragging = !1;
                this.is_start = !0;
                this.is_click = this.is_resize = this.is_active = this.is_finish = !1;
                this.$cache = {
                    win: f(h),
                    body: f(r.body),
                    input: f(a),
                    cont: null,
                    rs: null,
                    min: null,
                    max: null,
                    from: null,
                    to: null,
                    single: null,
                    bar: null,
                    line: null,
                    s_single: null,
                    s_from: null,
                    s_to: null,
                    shad_single: null,
                    shad_from: null,
                    shad_to: null,
                    edge: null,
                    grid: null,
                    grid_labels: []
                };
                this.coords = {
                    x_gap: 0,
                    x_pointer: 0,
                    w_rs: 0,
                    w_rs_old: 0,
                    w_handle: 0,
                    p_gap: 0,
                    p_gap_left: 0,
                    p_gap_right: 0,
                    p_step: 0,
                    p_pointer: 0,
                    p_handle: 0,
                    p_single_fake: 0,
                    p_single_real: 0,
                    p_from_fake: 0,
                    p_from_real: 0,
                    p_to_fake: 0,
                    p_to_real: 0,
                    p_bar_x: 0,
                    p_bar_w: 0,
                    grid_gap: 0,
                    big_num: 0,
                    big: [],
                    big_w: [],
                    big_p: [],
                    big_x: []
                };
                this.labels = {
                    w_min: 0,
                    w_max: 0,
                    w_from: 0,
                    w_to: 0,
                    w_single: 0,
                    p_min: 0,
                    p_max: 0,
                    p_from_fake: 0,
                    p_from_left: 0,
                    p_to_fake: 0,
                    p_to_left: 0,
                    p_single_fake: 0,
                    p_single_left: 0
                };
                var c = this.$cache.input;
                a = c.prop("value");
                var e;
                d = {
                    type: "single",
                    min: 10,
                    max: 100,
                    from: null,
                    to: null,
                    step: 1,
                    min_interval: 0,
                    max_interval: 0,
                    drag_interval: !1,
                    values: [],
                    p_values: [],
                    from_fixed: !1,
                    from_min: null,
                    from_max: null,
                    from_shadow: !1,
                    to_fixed: !1,
                    to_min: null,
                    to_max: null,
                    to_shadow: !1,
                    prettify_enabled: !0,
                    prettify_separator: " ",
                    prettify: null,
                    force_edges: !1,
                    keyboard: !1,
                    keyboard_step: 5,
                    grid: !1,
                    grid_margin: !0,
                    grid_num: 4,
                    grid_snap: !1,
                    hide_min_max: !1,
                    hide_from_to: !1,
                    prefix: "",
                    postfix: "",
                    max_postfix: "",
                    decorate_both: !0,
                    values_separator: " \u2014 ",
                    input_values_separator: ";",
                    disable: !1,
                    onStart: null,
                    onChange: null,
                    onFinish: null,
                    onUpdate: null
                };
                c = {
                    type: c.data("type"),
                    min: c.data("min"),
                    max: c.data("max"),
                    from: c.data("from"),
                    to: c.data("to"),
                    step: c.data("step"),
                    min_interval: c.data("minInterval"),
                    max_interval: c.data("maxInterval"),
                    drag_interval: c.data("dragInterval"),
                    values: c.data("values"),
                    from_fixed: c.data("fromFixed"),
                    from_min: c.data("fromMin"),
                    from_max: c.data("fromMax"),
                    from_shadow: c.data("fromShadow"),
                    to_fixed: c.data("toFixed"),
                    to_min: c.data("toMin"),
                    to_max: c.data("toMax"),
                    to_shadow: c.data("toShadow"),
                    prettify_enabled: c.data("prettifyEnabled"),
                    prettify_separator: c.data("prettifySeparator"),
                    force_edges: c.data("forceEdges"),
                    keyboard: c.data("keyboard"),
                    keyboard_step: c.data("keyboardStep"),
                    grid: c.data("grid"),
                    grid_margin: c.data("gridMargin"),
                    grid_num: c.data("gridNum"),
                    grid_snap: c.data("gridSnap"),
                    hide_min_max: c.data("hideMinMax"),
                    hide_from_to: c.data("hideFromTo"),
                    prefix: c.data("prefix"),
                    postfix: c.data("postfix"),
                    max_postfix: c.data("maxPostfix"),
                    decorate_both: c.data("decorateBoth"),
                    values_separator: c.data("valuesSeparator"),
                    input_values_separator: c.data("inputValuesSeparator"),
                    disable: c.data("disable")
                };
                c.values = c.values && c.values.split(",");
                for (e in c) c.hasOwnProperty(e) && (c[e] || 0 === c[e] || delete c[e]);
                a && (a = a.split(c.input_values_separator || b.input_values_separator || ";"), a[0] && a[0] == +a[0] && (a[0] = +a[0]), a[1] && a[1] == +a[1] && (a[1] = +a[1]), b && b.values && b.values.length ? (d.from = a[0] && b.values.indexOf(a[0]), d.to = a[1] && b.values.indexOf(a[1])) : (d.from = a[0] && +a[0], d.to = a[1] && +a[1]));
                f.extend(d, b);
                f.extend(d, c);
                this.options = d;
                this.validate();
                this.result = {
                    input: this.$cache.input,
                    slider: null,
                    min: this.options.min,
                    max: this.options.max,
                    from: this.options.from,
                    from_percent: 0,
                    from_value: null,
                    to: this.options.to,
                    to_percent: 0,
                    to_value: null
                };
                this.init()
            };
            q.prototype = {
                init: function (a) {
                    this.no_diapason = !1;
                    this.coords.p_step = this.convertToPercent(this.options.step, !0);
                    this.target = "base";
                    this.toggleInput();
                    this.append();
                    this.setMinMax();
                    a ? (this.force_redraw = !0, this.calc(!0), this.callOnUpdate()) : (this.force_redraw = !0, this.calc(!0), this.callOnStart());
                    this.updateScene()
                }, append: function () {
                    this.$cache.input.before('<span class="irs js-irs-' + this.plugin_count + '"></span>');
                    this.$cache.input.prop("readonly", !0);
                    this.$cache.cont = this.$cache.input.prev();
                    this.result.slider = this.$cache.cont;
                    this.$cache.cont.html('<span class="irs"><span class="irs-line" tabindex="-1"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min">0</span><span class="irs-max">1</span><span class="irs-from">0</span><span class="irs-to">0</span><span class="irs-single">0</span></span><span class="irs-grid"></span><span class="irs-bar"></span>');
                    this.$cache.rs = this.$cache.cont.find(".irs");
                    this.$cache.min = this.$cache.cont.find(".irs-min");
                    this.$cache.max = this.$cache.cont.find(".irs-max");
                    this.$cache.from = this.$cache.cont.find(".irs-from");
                    this.$cache.to = this.$cache.cont.find(".irs-to");
                    this.$cache.single = this.$cache.cont.find(".irs-single");
                    this.$cache.bar = this.$cache.cont.find(".irs-bar");
                    this.$cache.line = this.$cache.cont.find(".irs-line");
                    this.$cache.grid = this.$cache.cont.find(".irs-grid");
                    "single" === this.options.type ? (this.$cache.cont.append('<span class="irs-bar-edge"></span><span class="irs-shadow shadow-single"></span><span class="irs-slider single"></span>'),
                        this.$cache.edge = this.$cache.cont.find(".irs-bar-edge"), this.$cache.s_single = this.$cache.cont.find(".single"), this.$cache.from[0].style.visibility = "hidden", this.$cache.to[0].style.visibility = "hidden", this.$cache.shad_single = this.$cache.cont.find(".shadow-single")) : (this.$cache.cont.append('<span class="irs-shadow shadow-from"></span><span class="irs-shadow shadow-to"></span><span class="irs-slider from"></span><span class="irs-slider to"></span>'), this.$cache.s_from = this.$cache.cont.find(".from"),
                        this.$cache.s_to = this.$cache.cont.find(".to"), this.$cache.shad_from = this.$cache.cont.find(".shadow-from"), this.$cache.shad_to = this.$cache.cont.find(".shadow-to"), this.setTopHandler());
                    this.options.hide_from_to && (this.$cache.from[0].style.display = "none", this.$cache.to[0].style.display = "none", this.$cache.single[0].style.display = "none");
                    this.appendGrid();
                    this.options.disable ? (this.appendDisableMask(), this.$cache.input[0].disabled = !0) : (this.$cache.cont.removeClass("irs-disabled"), this.$cache.input[0].disabled =
                        !1, this.bindEvents());
                    this.options.drag_interval && (this.$cache.bar[0].style.cursor = "ew-resize")
                }, setTopHandler: function () {
                    var a = this.options.max, b = this.options.to;
                    this.options.from > this.options.min && b === a ? this.$cache.s_from.addClass("type_last") : b < a && this.$cache.s_to.addClass("type_last")
                }, changeLevel: function (a) {
                    switch (a) {
                        case "single":
                            this.coords.p_gap = this.toFixed(this.coords.p_pointer - this.coords.p_single_fake);
                            break;
                        case "from":
                            this.coords.p_gap = this.toFixed(this.coords.p_pointer - this.coords.p_from_fake);
                            this.$cache.s_from.addClass("state_hover");
                            this.$cache.s_from.addClass("type_last");
                            this.$cache.s_to.removeClass("type_last");
                            break;
                        case "to":
                            this.coords.p_gap = this.toFixed(this.coords.p_pointer - this.coords.p_to_fake);
                            this.$cache.s_to.addClass("state_hover");
                            this.$cache.s_to.addClass("type_last");
                            this.$cache.s_from.removeClass("type_last");
                            break;
                        case "both":
                            this.coords.p_gap_left = this.toFixed(this.coords.p_pointer - this.coords.p_from_fake), this.coords.p_gap_right = this.toFixed(this.coords.p_to_fake -
                                this.coords.p_pointer), this.$cache.s_to.removeClass("type_last"), this.$cache.s_from.removeClass("type_last")
                    }
                }, appendDisableMask: function () {
                    this.$cache.cont.append('<span class="irs-disable-mask"></span>');
                    this.$cache.cont.addClass("irs-disabled")
                }, remove: function () {
                    this.$cache.cont.remove();
                    this.$cache.cont = null;
                    this.$cache.line.off("keydown.irs_" + this.plugin_count);
                    this.$cache.body.off("touchmove.irs_" + this.plugin_count);
                    this.$cache.body.off("mousemove.irs_" + this.plugin_count);
                    this.$cache.win.off("touchend.irs_" +
                        this.plugin_count);
                    this.$cache.win.off("mouseup.irs_" + this.plugin_count);
                    p && (this.$cache.body.off("mouseup.irs_" + this.plugin_count), this.$cache.body.off("mouseleave.irs_" + this.plugin_count));
                    this.$cache.grid_labels = [];
                    this.coords.big = [];
                    this.coords.big_w = [];
                    this.coords.big_p = [];
                    this.coords.big_x = [];
                    cancelAnimationFrame(this.raf_id)
                }, bindEvents: function () {
                    if (!this.no_diapason) {
                        this.$cache.body.on("touchmove.irs_" + this.plugin_count, this.pointerMove.bind(this));
                        this.$cache.body.on("mousemove.irs_" + this.plugin_count,
                            this.pointerMove.bind(this));
                        this.$cache.win.on("touchend.irs_" + this.plugin_count, this.pointerUp.bind(this));
                        this.$cache.win.on("mouseup.irs_" + this.plugin_count, this.pointerUp.bind(this));
                        this.$cache.line.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click"));
                        this.$cache.line.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click"));
                        this.options.drag_interval && "double" === this.options.type ? (this.$cache.bar.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this,
                            "both")), this.$cache.bar.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "both"))) : (this.$cache.bar.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.bar.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")));
                        "single" === this.options.type ? (this.$cache.single.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "single")), this.$cache.s_single.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "single")),
                            this.$cache.shad_single.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.single.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "single")), this.$cache.s_single.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "single")), this.$cache.edge.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.shad_single.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click"))) : (this.$cache.single.on("touchstart.irs_" +
                            this.plugin_count, this.pointerDown.bind(this, null)), this.$cache.single.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, null)), this.$cache.from.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "from")), this.$cache.s_from.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "from")), this.$cache.to.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "to")), this.$cache.s_to.on("touchstart.irs_" + this.plugin_count, this.pointerDown.bind(this, "to")),
                            this.$cache.shad_from.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.shad_to.on("touchstart.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.from.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "from")), this.$cache.s_from.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "from")), this.$cache.to.on("mousedown.irs_" + this.plugin_count, this.pointerDown.bind(this, "to")), this.$cache.s_to.on("mousedown.irs_" +
                            this.plugin_count, this.pointerDown.bind(this, "to")), this.$cache.shad_from.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")), this.$cache.shad_to.on("mousedown.irs_" + this.plugin_count, this.pointerClick.bind(this, "click")));
                        if (this.options.keyboard) this.$cache.line.on("keydown.irs_" + this.plugin_count, this.key.bind(this, "keyboard"));
                        p && (this.$cache.body.on("mouseup.irs_" + this.plugin_count, this.pointerUp.bind(this)), this.$cache.body.on("mouseleave.irs_" + this.plugin_count, this.pointerUp.bind(this)))
                    }
                },
                pointerMove: function (a) {
                    this.dragging && (this.coords.x_pointer = (a.pageX || a.originalEvent.touches && a.originalEvent.touches[0].pageX) - this.coords.x_gap, this.calc())
                }, pointerUp: function (a) {
                    if (this.current_plugin === this.plugin_count && this.is_active) {
                        this.is_active = !1;
                        this.$cache.cont.find(".state_hover").removeClass("state_hover");
                        this.force_redraw = !0;
                        p && f("*").prop("unselectable", !1);
                        this.updateScene();
                        this.restoreOriginalMinInterval();
                        if (f.contains(this.$cache.cont[0], a.target) || this.dragging) this.is_finish =
                            !0, this.callOnFinish();
                        this.dragging = !1
                    }
                }, pointerDown: function (a, b) {
                    b.preventDefault();
                    var d = b.pageX || b.originalEvent.touches && b.originalEvent.touches[0].pageX;
                    2 !== b.button && ("both" === a && this.setTempMinInterval(), a || (a = this.target), this.current_plugin = this.plugin_count, this.target = a, this.dragging = this.is_active = !0, this.coords.x_gap = this.$cache.rs.offset().left, this.coords.x_pointer = d - this.coords.x_gap, this.calcPointerPercent(), this.changeLevel(a), p && f("*").prop("unselectable", !0), this.$cache.line.trigger("focus"),
                        this.updateScene())
                }, pointerClick: function (a, b) {
                    b.preventDefault();
                    var d = b.pageX || b.originalEvent.touches && b.originalEvent.touches[0].pageX;
                    2 !== b.button && (this.current_plugin = this.plugin_count, this.target = a, this.is_click = !0, this.coords.x_gap = this.$cache.rs.offset().left, this.coords.x_pointer = +(d - this.coords.x_gap).toFixed(), this.force_redraw = !0, this.calc(), this.$cache.line.trigger("focus"))
                }, key: function (a, b) {
                    if (!(this.current_plugin !== this.plugin_count || b.altKey || b.ctrlKey || b.shiftKey || b.metaKey)) {
                        switch (b.which) {
                            case 83:
                            case 65:
                            case 40:
                            case 37:
                                b.preventDefault();
                                this.moveByKey(!1);
                                break;
                            case 87:
                            case 68:
                            case 38:
                            case 39:
                                b.preventDefault(), this.moveByKey(!0)
                        }
                        return !0
                    }
                }, moveByKey: function (a) {
                    var b = this.coords.p_pointer,
                        b = a ? b + this.options.keyboard_step : b - this.options.keyboard_step;
                    this.coords.x_pointer = this.toFixed(this.coords.w_rs / 100 * b);
                    this.is_key = !0;
                    this.calc()
                }, setMinMax: function () {
                    this.options && (this.options.hide_min_max ? (this.$cache.min[0].style.display = "none", this.$cache.max[0].style.display = "none") : (this.options.values.length ? (this.$cache.min.html(this.decorate(this.options.p_values[this.options.min])),
                        this.$cache.max.html(this.decorate(this.options.p_values[this.options.max]))) : (this.$cache.min.html(this.decorate(this._prettify(this.options.min), this.options.min)), this.$cache.max.html(this.decorate(this._prettify(this.options.max), this.options.max))), this.labels.w_min = this.$cache.min.outerWidth(!1), this.labels.w_max = this.$cache.max.outerWidth(!1)))
                }, setTempMinInterval: function () {
                    var a = this.result.to - this.result.from;
                    null === this.old_min_interval && (this.old_min_interval = this.options.min_interval);
                    this.options.min_interval = a
                }, restoreOriginalMinInterval: function () {
                    null !== this.old_min_interval && (this.options.min_interval = this.old_min_interval, this.old_min_interval = null)
                }, calc: function (a) {
                    if (this.options) {
                        this.calc_count++;
                        if (10 === this.calc_count || a) this.calc_count = 0, this.coords.w_rs = this.$cache.rs.outerWidth(!1), this.calcHandlePercent();
                        if (this.coords.w_rs) {
                            this.calcPointerPercent();
                            a = this.getHandleX();
                            "click" === this.target && (this.coords.p_gap = this.coords.p_handle / 2, a = this.getHandleX(), this.target =
                                this.options.drag_interval ? "both_one" : this.chooseHandle(a));
                            switch (this.target) {
                                case "base":
                                    var b = (this.options.max - this.options.min) / 100;
                                    a = (this.result.from - this.options.min) / b;
                                    b = (this.result.to - this.options.min) / b;
                                    this.coords.p_single_real = this.toFixed(a);
                                    this.coords.p_from_real = this.toFixed(a);
                                    this.coords.p_to_real = this.toFixed(b);
                                    this.coords.p_single_real = this.checkDiapason(this.coords.p_single_real, this.options.from_min, this.options.from_max);
                                    this.coords.p_from_real = this.checkDiapason(this.coords.p_from_real,
                                        this.options.from_min, this.options.from_max);
                                    this.coords.p_to_real = this.checkDiapason(this.coords.p_to_real, this.options.to_min, this.options.to_max);
                                    this.coords.p_single_fake = this.convertToFakePercent(this.coords.p_single_real);
                                    this.coords.p_from_fake = this.convertToFakePercent(this.coords.p_from_real);
                                    this.coords.p_to_fake = this.convertToFakePercent(this.coords.p_to_real);
                                    this.target = null;
                                    break;
                                case "single":
                                    if (this.options.from_fixed) break;
                                    this.coords.p_single_real = this.convertToRealPercent(a);
                                    this.coords.p_single_real =
                                        this.calcWithStep(this.coords.p_single_real);
                                    this.coords.p_single_real = this.checkDiapason(this.coords.p_single_real, this.options.from_min, this.options.from_max);
                                    this.coords.p_single_fake = this.convertToFakePercent(this.coords.p_single_real);
                                    break;
                                case "from":
                                    if (this.options.from_fixed) break;
                                    this.coords.p_from_real = this.convertToRealPercent(a);
                                    this.coords.p_from_real = this.calcWithStep(this.coords.p_from_real);
                                    this.coords.p_from_real > this.coords.p_to_real && (this.coords.p_from_real = this.coords.p_to_real);
                                    this.coords.p_from_real = this.checkDiapason(this.coords.p_from_real, this.options.from_min, this.options.from_max);
                                    this.coords.p_from_real = this.checkMinInterval(this.coords.p_from_real, this.coords.p_to_real, "from");
                                    this.coords.p_from_real = this.checkMaxInterval(this.coords.p_from_real, this.coords.p_to_real, "from");
                                    this.coords.p_from_fake = this.convertToFakePercent(this.coords.p_from_real);
                                    break;
                                case "to":
                                    if (this.options.to_fixed) break;
                                    this.coords.p_to_real = this.convertToRealPercent(a);
                                    this.coords.p_to_real =
                                        this.calcWithStep(this.coords.p_to_real);
                                    this.coords.p_to_real < this.coords.p_from_real && (this.coords.p_to_real = this.coords.p_from_real);
                                    this.coords.p_to_real = this.checkDiapason(this.coords.p_to_real, this.options.to_min, this.options.to_max);
                                    this.coords.p_to_real = this.checkMinInterval(this.coords.p_to_real, this.coords.p_from_real, "to");
                                    this.coords.p_to_real = this.checkMaxInterval(this.coords.p_to_real, this.coords.p_from_real, "to");
                                    this.coords.p_to_fake = this.convertToFakePercent(this.coords.p_to_real);
                                    break;
                                case "both":
                                    if (this.options.from_fixed || this.options.to_fixed) break;
                                    a = this.toFixed(a + .1 * this.coords.p_handle);
                                    this.coords.p_from_real = this.convertToRealPercent(a) - this.coords.p_gap_left;
                                    this.coords.p_from_real = this.calcWithStep(this.coords.p_from_real);
                                    this.coords.p_from_real = this.checkDiapason(this.coords.p_from_real, this.options.from_min, this.options.from_max);
                                    this.coords.p_from_real = this.checkMinInterval(this.coords.p_from_real, this.coords.p_to_real, "from");
                                    this.coords.p_from_fake = this.convertToFakePercent(this.coords.p_from_real);
                                    this.coords.p_to_real = this.convertToRealPercent(a) + this.coords.p_gap_right;
                                    this.coords.p_to_real = this.calcWithStep(this.coords.p_to_real);
                                    this.coords.p_to_real = this.checkDiapason(this.coords.p_to_real, this.options.to_min, this.options.to_max);
                                    this.coords.p_to_real = this.checkMinInterval(this.coords.p_to_real, this.coords.p_from_real, "to");
                                    this.coords.p_to_fake = this.convertToFakePercent(this.coords.p_to_real);
                                    break;
                                case "both_one":
                                    if (this.options.from_fixed || this.options.to_fixed) break;
                                    var d = this.convertToRealPercent(a);
                                    a = this.result.to_percent - this.result.from_percent;
                                    var c = a / 2, b = d - c, d = d + c;
                                    0 > b && (b = 0, d = b + a);
                                    100 < d && (d = 100, b = d - a);
                                    this.coords.p_from_real = this.calcWithStep(b);
                                    this.coords.p_from_real = this.checkDiapason(this.coords.p_from_real, this.options.from_min, this.options.from_max);
                                    this.coords.p_from_fake = this.convertToFakePercent(this.coords.p_from_real);
                                    this.coords.p_to_real = this.calcWithStep(d);
                                    this.coords.p_to_real = this.checkDiapason(this.coords.p_to_real, this.options.to_min, this.options.to_max);
                                    this.coords.p_to_fake =
                                        this.convertToFakePercent(this.coords.p_to_real)
                            }
                            "single" === this.options.type ? (this.coords.p_bar_x = this.coords.p_handle / 2, this.coords.p_bar_w = this.coords.p_single_fake, this.result.from_percent = this.coords.p_single_real, this.result.from = this.convertToValue(this.coords.p_single_real), this.options.values.length && (this.result.from_value = this.options.values[this.result.from])) : (this.coords.p_bar_x = this.toFixed(this.coords.p_from_fake + this.coords.p_handle / 2), this.coords.p_bar_w = this.toFixed(this.coords.p_to_fake -
                                this.coords.p_from_fake), this.result.from_percent = this.coords.p_from_real, this.result.from = this.convertToValue(this.coords.p_from_real), this.result.to_percent = this.coords.p_to_real, this.result.to = this.convertToValue(this.coords.p_to_real), this.options.values.length && (this.result.from_value = this.options.values[this.result.from], this.result.to_value = this.options.values[this.result.to]));
                            this.calcMinMax();
                            this.calcLabels()
                        }
                    }
                }, calcPointerPercent: function () {
                    this.coords.w_rs ? (0 > this.coords.x_pointer || isNaN(this.coords.x_pointer) ?
                        this.coords.x_pointer = 0 : this.coords.x_pointer > this.coords.w_rs && (this.coords.x_pointer = this.coords.w_rs), this.coords.p_pointer = this.toFixed(this.coords.x_pointer / this.coords.w_rs * 100)) : this.coords.p_pointer = 0
                }, convertToRealPercent: function (a) {
                    return a / (100 - this.coords.p_handle) * 100
                }, convertToFakePercent: function (a) {
                    return a / 100 * (100 - this.coords.p_handle)
                }, getHandleX: function () {
                    var a = 100 - this.coords.p_handle, b = this.toFixed(this.coords.p_pointer - this.coords.p_gap);
                    0 > b ? b = 0 : b > a && (b = a);
                    return b
                }, calcHandlePercent: function () {
                    this.coords.w_handle =
                        "single" === this.options.type ? this.$cache.s_single.outerWidth(!1) : this.$cache.s_from.outerWidth(!1);
                    this.coords.p_handle = this.toFixed(this.coords.w_handle / this.coords.w_rs * 100)
                }, chooseHandle: function (a) {
                    return "single" === this.options.type ? "single" : a >= this.coords.p_from_real + (this.coords.p_to_real - this.coords.p_from_real) / 2 ? this.options.to_fixed ? "from" : "to" : this.options.from_fixed ? "to" : "from"
                }, calcMinMax: function () {
                    this.coords.w_rs && (this.labels.p_min = this.labels.w_min / this.coords.w_rs * 100, this.labels.p_max =
                        this.labels.w_max / this.coords.w_rs * 100)
                }, calcLabels: function () {
                    this.coords.w_rs && !this.options.hide_from_to && ("single" === this.options.type ? (this.labels.w_single = this.$cache.single.outerWidth(!1), this.labels.p_single_fake = this.labels.w_single / this.coords.w_rs * 100, this.labels.p_single_left = this.coords.p_single_fake + this.coords.p_handle / 2 - this.labels.p_single_fake / 2) : (this.labels.w_from = this.$cache.from.outerWidth(!1), this.labels.p_from_fake = this.labels.w_from / this.coords.w_rs * 100, this.labels.p_from_left =
                        this.coords.p_from_fake + this.coords.p_handle / 2 - this.labels.p_from_fake / 2, this.labels.p_from_left = this.toFixed(this.labels.p_from_left), this.labels.p_from_left = this.checkEdges(this.labels.p_from_left, this.labels.p_from_fake), this.labels.w_to = this.$cache.to.outerWidth(!1), this.labels.p_to_fake = this.labels.w_to / this.coords.w_rs * 100, this.labels.p_to_left = this.coords.p_to_fake + this.coords.p_handle / 2 - this.labels.p_to_fake / 2, this.labels.p_to_left = this.toFixed(this.labels.p_to_left), this.labels.p_to_left =
                        this.checkEdges(this.labels.p_to_left, this.labels.p_to_fake), this.labels.w_single = this.$cache.single.outerWidth(!1), this.labels.p_single_fake = this.labels.w_single / this.coords.w_rs * 100, this.labels.p_single_left = (this.labels.p_from_left + this.labels.p_to_left + this.labels.p_to_fake) / 2 - this.labels.p_single_fake / 2, this.labels.p_single_left = this.toFixed(this.labels.p_single_left)), this.labels.p_single_left = this.checkEdges(this.labels.p_single_left, this.labels.p_single_fake))
                }, updateScene: function () {
                    this.raf_id &&
                    (cancelAnimationFrame(this.raf_id), this.raf_id = null);
                    clearTimeout(this.update_tm);
                    this.update_tm = null;
                    this.options && (this.drawHandles(), this.is_active ? this.raf_id = requestAnimationFrame(this.updateScene.bind(this)) : this.update_tm = setTimeout(this.updateScene.bind(this), 300))
                }, drawHandles: function () {
                    this.coords.w_rs = this.$cache.rs.outerWidth(!1);
                    if (this.coords.w_rs) {
                        this.coords.w_rs !== this.coords.w_rs_old && (this.target = "base", this.is_resize = !0);
                        if (this.coords.w_rs !== this.coords.w_rs_old || this.force_redraw) this.setMinMax(),
                            this.calc(!0), this.drawLabels(), this.options.grid && (this.calcGridMargin(), this.calcGridLabels()), this.force_redraw = !0, this.coords.w_rs_old = this.coords.w_rs, this.drawShadow();
                        if (this.coords.w_rs && (this.dragging || this.force_redraw || this.is_key)) {
                            if (this.old_from !== this.result.from || this.old_to !== this.result.to || this.force_redraw || this.is_key) {
                                this.drawLabels();
                                this.$cache.bar[0].style.left = this.coords.p_bar_x + "%";
                                this.$cache.bar[0].style.width = this.coords.p_bar_w + "%";
                                if ("single" === this.options.type) this.$cache.s_single[0].style.left =
                                    this.coords.p_single_fake + "%", this.$cache.single[0].style.left = this.labels.p_single_left + "%", this.options.values.length ? this.$cache.input.prop("value", this.result.from_value) : this.$cache.input.prop("value", this.result.from), this.$cache.input.data("from", this.result.from); else {
                                    this.$cache.s_from[0].style.left = this.coords.p_from_fake + "%";
                                    this.$cache.s_to[0].style.left = this.coords.p_to_fake + "%";
                                    if (this.old_from !== this.result.from || this.force_redraw) this.$cache.from[0].style.left = this.labels.p_from_left +
                                        "%";
                                    if (this.old_to !== this.result.to || this.force_redraw) this.$cache.to[0].style.left = this.labels.p_to_left + "%";
                                    this.$cache.single[0].style.left = this.labels.p_single_left + "%";
                                    this.options.values.length ? this.$cache.input.prop("value", this.result.from_value + this.options.input_values_separator + this.result.to_value) : this.$cache.input.prop("value", this.result.from + this.options.input_values_separator + this.result.to);
                                    this.$cache.input.data("from", this.result.from);
                                    this.$cache.input.data("to", this.result.to)
                                }
                                this.old_from ===
                                this.result.from && this.old_to === this.result.to || this.is_start || this.$cache.input.trigger("change");
                                this.old_from = this.result.from;
                                this.old_to = this.result.to;
                                this.is_resize || this.is_update || this.is_start || this.is_finish || this.callOnChange();
                                if (this.is_key || this.is_click) this.is_click = this.is_key = !1, this.callOnFinish();
                                this.is_finish = this.is_resize = this.is_update = !1
                            }
                            this.force_redraw = this.is_click = this.is_key = this.is_start = !1
                        }
                    }
                }, drawLabels: function () {
                    if (this.options) {
                        var a = this.options.values.length,
                            b = this.options.p_values, d;
                        if (!this.options.hide_from_to) if ("single" === this.options.type) a = a ? this.decorate(b[this.result.from]) : this.decorate(this._prettify(this.result.from), this.result.from), this.$cache.single.html(a), this.calcLabels(), this.$cache.min[0].style.visibility = this.labels.p_single_left < this.labels.p_min + 1 ? "hidden" : "visible", this.$cache.max[0].style.visibility = this.labels.p_single_left + this.labels.p_single_fake > 100 - this.labels.p_max - 1 ? "hidden" : "visible"; else {
                            a ? (this.options.decorate_both ?
                                (a = this.decorate(b[this.result.from]), a += this.options.values_separator, a += this.decorate(b[this.result.to])) : a = this.decorate(b[this.result.from] + this.options.values_separator + b[this.result.to]), d = this.decorate(b[this.result.from]), b = this.decorate(b[this.result.to])) : (this.options.decorate_both ? (a = this.decorate(this._prettify(this.result.from), this.result.from), a += this.options.values_separator, a += this.decorate(this._prettify(this.result.to), this.result.to)) : a = this.decorate(this._prettify(this.result.from) +
                                this.options.values_separator + this._prettify(this.result.to), this.result.to), d = this.decorate(this._prettify(this.result.from), this.result.from), b = this.decorate(this._prettify(this.result.to), this.result.to));
                            this.$cache.single.html(a);
                            this.$cache.from.html(d);
                            this.$cache.to.html(b);
                            this.calcLabels();
                            b = Math.min(this.labels.p_single_left, this.labels.p_from_left);
                            a = this.labels.p_single_left + this.labels.p_single_fake;
                            d = this.labels.p_to_left + this.labels.p_to_fake;
                            var c = Math.max(a, d);
                            this.labels.p_from_left +
                            this.labels.p_from_fake >= this.labels.p_to_left ? (this.$cache.from[0].style.visibility = "hidden", this.$cache.to[0].style.visibility = "hidden", this.$cache.single[0].style.visibility = "visible", this.result.from === this.result.to ? ("from" === this.target ? this.$cache.from[0].style.visibility = "visible" : "to" === this.target && (this.$cache.to[0].style.visibility = "visible"), this.$cache.single[0].style.visibility = "hidden", c = d) : (this.$cache.from[0].style.visibility = "hidden", this.$cache.to[0].style.visibility = "hidden",
                                this.$cache.single[0].style.visibility = "visible", c = Math.max(a, d))) : (this.$cache.from[0].style.visibility = "visible", this.$cache.to[0].style.visibility = "visible", this.$cache.single[0].style.visibility = "hidden");
                            this.$cache.min[0].style.visibility = b < this.labels.p_min + 1 ? "hidden" : "visible";
                            this.$cache.max[0].style.visibility = c > 100 - this.labels.p_max - 1 ? "hidden" : "visible"
                        }
                    }
                }, drawShadow: function () {
                    var a = this.options, b = this.$cache, d = "number" === typeof a.from_min && !isNaN(a.from_min),
                        c = "number" === typeof a.from_max &&
                            !isNaN(a.from_max), e = "number" === typeof a.to_min && !isNaN(a.to_min),
                        g = "number" === typeof a.to_max && !isNaN(a.to_max);
                    "single" === a.type ? a.from_shadow && (d || c) ? (d = this.convertToPercent(d ? a.from_min : a.min), c = this.convertToPercent(c ? a.from_max : a.max) - d, d = this.toFixed(d - this.coords.p_handle / 100 * d), c = this.toFixed(c - this.coords.p_handle / 100 * c), d += this.coords.p_handle / 2, b.shad_single[0].style.display = "block", b.shad_single[0].style.left = d + "%", b.shad_single[0].style.width = c + "%") : b.shad_single[0].style.display = "none" :
                        (a.from_shadow && (d || c) ? (d = this.convertToPercent(d ? a.from_min : a.min), c = this.convertToPercent(c ? a.from_max : a.max) - d, d = this.toFixed(d - this.coords.p_handle / 100 * d), c = this.toFixed(c - this.coords.p_handle / 100 * c), d += this.coords.p_handle / 2, b.shad_from[0].style.display = "block", b.shad_from[0].style.left = d + "%", b.shad_from[0].style.width = c + "%") : b.shad_from[0].style.display = "none", a.to_shadow && (e || g) ? (e = this.convertToPercent(e ? a.to_min : a.min), a = this.convertToPercent(g ? a.to_max : a.max) - e, e = this.toFixed(e - this.coords.p_handle /
                            100 * e), a = this.toFixed(a - this.coords.p_handle / 100 * a), e += this.coords.p_handle / 2, b.shad_to[0].style.display = "block", b.shad_to[0].style.left = e + "%", b.shad_to[0].style.width = a + "%") : b.shad_to[0].style.display = "none")
                }, callOnStart: function () {
                    if (this.options.onStart && "function" === typeof this.options.onStart) this.options.onStart(this.result)
                }, callOnChange: function () {
                    if (this.options.onChange && "function" === typeof this.options.onChange) this.options.onChange(this.result)
                }, callOnFinish: function () {
                    if (this.options.onFinish &&
                        "function" === typeof this.options.onFinish) this.options.onFinish(this.result)
                }, callOnUpdate: function () {
                    if (this.options.onUpdate && "function" === typeof this.options.onUpdate) this.options.onUpdate(this.result)
                }, toggleInput: function () {
                    this.$cache.input.toggleClass("irs-hidden-input")
                }, convertToPercent: function (a, b) {
                    var d = this.options.max - this.options.min;
                    return d ? this.toFixed((b ? a : a - this.options.min) / (d / 100)) : (this.no_diapason = !0, 0)
                }, convertToValue: function (a) {
                    var b = this.options.min, d = this.options.max,
                        c = b.toString().split(".")[1], e = d.toString().split(".")[1], g, l, k = 0, f = 0;
                    if (0 === a) return this.options.min;
                    if (100 === a) return this.options.max;
                    c && (k = g = c.length);
                    e && (k = l = e.length);
                    g && l && (k = g >= l ? g : l);
                    0 > b && (f = Math.abs(b), b = +(b + f).toFixed(k), d = +(d + f).toFixed(k));
                    a = (d - b) / 100 * a + b;
                    (b = this.options.step.toString().split(".")[1]) ? a = +a.toFixed(b.length) : (a /= this.options.step, a *= this.options.step, a = +a.toFixed(0));
                    f && (a -= f);
                    f = b ? +a.toFixed(b.length) : this.toFixed(a);
                    f < this.options.min ? f = this.options.min : f > this.options.max &&
                        (f = this.options.max);
                    return f
                }, calcWithStep: function (a) {
                    var b = Math.round(a / this.coords.p_step) * this.coords.p_step;
                    100 < b && (b = 100);
                    100 === a && (b = 100);
                    return this.toFixed(b)
                }, checkMinInterval: function (a, b, d) {
                    var c = this.options;
                    if (!c.min_interval) return a;
                    a = this.convertToValue(a);
                    b = this.convertToValue(b);
                    "from" === d ? b - a < c.min_interval && (a = b - c.min_interval) : a - b < c.min_interval && (a = b + c.min_interval);
                    return this.convertToPercent(a)
                }, checkMaxInterval: function (a, b, d) {
                    var c = this.options;
                    if (!c.max_interval) return a;
                    a = this.convertToValue(a);
                    b = this.convertToValue(b);
                    "from" === d ? b - a > c.max_interval && (a = b - c.max_interval) : a - b > c.max_interval && (a = b + c.max_interval);
                    return this.convertToPercent(a)
                }, checkDiapason: function (a, b, d) {
                    a = this.convertToValue(a);
                    var c = this.options;
                    "number" !== typeof b && (b = c.min);
                    "number" !== typeof d && (d = c.max);
                    a < b && (a = b);
                    a > d && (a = d);
                    return this.convertToPercent(a)
                }, toFixed: function (a) {
                    a = a.toFixed(9);
                    return +a
                }, _prettify: function (a) {
                    return this.options.prettify_enabled ? this.options.prettify && "function" ===
                    typeof this.options.prettify ? this.options.prettify(a) : this.prettify(a) : a
                }, prettify: function (a) {
                    return a.toString().replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g, "$1" + this.options.prettify_separator)
                }, checkEdges: function (a, b) {
                    if (!this.options.force_edges) return this.toFixed(a);
                    0 > a ? a = 0 : a > 100 - b && (a = 100 - b);
                    return this.toFixed(a)
                }, validate: function () {
                    var a = this.options, b = this.result, d = a.values, c = d.length, e, g;
                    "string" === typeof a.min && (a.min = +a.min);
                    "string" === typeof a.max && (a.max = +a.max);
                    "string" === typeof a.from &&
                    (a.from = +a.from);
                    "string" === typeof a.to && (a.to = +a.to);
                    "string" === typeof a.step && (a.step = +a.step);
                    "string" === typeof a.from_min && (a.from_min = +a.from_min);
                    "string" === typeof a.from_max && (a.from_max = +a.from_max);
                    "string" === typeof a.to_min && (a.to_min = +a.to_min);
                    "string" === typeof a.to_max && (a.to_max = +a.to_max);
                    "string" === typeof a.keyboard_step && (a.keyboard_step = +a.keyboard_step);
                    "string" === typeof a.grid_num && (a.grid_num = +a.grid_num);
                    a.max < a.min && (a.max = a.min);
                    if (c) for (a.p_values = [], a.min = 0, a.max = c - 1, a.step =
                        1, a.grid_num = a.max, a.grid_snap = !0, g = 0; g < c; g++) e = +d[g], isNaN(e) ? e = d[g] : (d[g] = e, e = this._prettify(e)), a.p_values.push(e);
                    if ("number" !== typeof a.from || isNaN(a.from)) a.from = a.min;
                    if ("number" !== typeof a.to || isNaN(a.from)) a.to = a.max;
                    if ("single" === a.type) a.from < a.min && (a.from = a.min), a.from > a.max && (a.from = a.max); else {
                        if (a.from < a.min || a.from > a.max) a.from = a.min;
                        if (a.to > a.max || a.to < a.min) a.to = a.max;
                        a.from > a.to && (a.from = a.to)
                    }
                    if ("number" !== typeof a.step || isNaN(a.step) || !a.step || 0 > a.step) a.step = 1;
                    if ("number" !==
                        typeof a.keyboard_step || isNaN(a.keyboard_step) || !a.keyboard_step || 0 > a.keyboard_step) a.keyboard_step = 5;
                    "number" === typeof a.from_min && a.from < a.from_min && (a.from = a.from_min);
                    "number" === typeof a.from_max && a.from > a.from_max && (a.from = a.from_max);
                    "number" === typeof a.to_min && a.to < a.to_min && (a.to = a.to_min);
                    "number" === typeof a.to_max && a.from > a.to_max && (a.to = a.to_max);
                    if (b) {
                        b.min !== a.min && (b.min = a.min);
                        b.max !== a.max && (b.max = a.max);
                        if (b.from < b.min || b.from > b.max) b.from = a.from;
                        if (b.to < b.min || b.to > b.max) b.to = a.to
                    }
                    if ("number" !==
                        typeof a.min_interval || isNaN(a.min_interval) || !a.min_interval || 0 > a.min_interval) a.min_interval = 0;
                    if ("number" !== typeof a.max_interval || isNaN(a.max_interval) || !a.max_interval || 0 > a.max_interval) a.max_interval = 0;
                    a.min_interval && a.min_interval > a.max - a.min && (a.min_interval = a.max - a.min);
                    a.max_interval && a.max_interval > a.max - a.min && (a.max_interval = a.max - a.min)
                }, decorate: function (a, b) {
                    var d = "", c = this.options;
                    c.prefix && (d += c.prefix);
                    d += a;
                    c.max_postfix && (c.values.length && a === c.p_values[c.max] ? (d += c.max_postfix,
                    c.postfix && (d += " ")) : b === c.max && (d += c.max_postfix, c.postfix && (d += " ")));
                    c.postfix && (d += c.postfix);
                    return d
                }, updateFrom: function () {
                    this.result.from = this.options.from;
                    this.result.from_percent = this.convertToPercent(this.result.from);
                    this.options.values && (this.result.from_value = this.options.values[this.result.from])
                }, updateTo: function () {
                    this.result.to = this.options.to;
                    this.result.to_percent = this.convertToPercent(this.result.to);
                    this.options.values && (this.result.to_value = this.options.values[this.result.to])
                },
                updateResult: function () {
                    this.result.min = this.options.min;
                    this.result.max = this.options.max;
                    this.updateFrom();
                    this.updateTo()
                }, appendGrid: function () {
                    if (this.options.grid) {
                        var a = this.options, b, d;
                        b = a.max - a.min;
                        var c = a.grid_num, e = 0, g = 0, f = 4, k, h, m = 0, n = "";
                        this.calcGridMargin();
                        a.grid_snap ? (c = b / a.step, e = this.toFixed(a.step / (b / 100))) : e = this.toFixed(100 / c);
                        4 < c && (f = 3);
                        7 < c && (f = 2);
                        14 < c && (f = 1);
                        28 < c && (f = 0);
                        for (b = 0; b < c + 1; b++) {
                            k = f;
                            g = this.toFixed(e * b);
                            100 < g && (g = 100, k -= 2, 0 > k && (k = 0));
                            this.coords.big[b] = g;
                            h = (g - e * (b - 1)) /
                                (k + 1);
                            for (d = 1; d <= k && 0 !== g; d++) m = this.toFixed(g - h * d), n += '<span class="irs-grid-pol small" style="left: ' + m + '%"></span>';
                            n += '<span class="irs-grid-pol" style="left: ' + g + '%"></span>';
                            m = this.convertToValue(g);
                            m = a.values.length ? a.p_values[m] : this._prettify(m);
                            n += '<span class="irs-grid-text js-grid-text-' + b + '" style="left: ' + g + '%">' + m + "</span>"
                        }
                        this.coords.big_num = Math.ceil(c + 1);
                        this.$cache.cont.addClass("irs-with-grid");
                        this.$cache.grid.html(n);
                        this.cacheGridLabels()
                    }
                }, cacheGridLabels: function () {
                    var a,
                        b, d = this.coords.big_num;
                    for (b = 0; b < d; b++) a = this.$cache.grid.find(".js-grid-text-" + b), this.$cache.grid_labels.push(a);
                    this.calcGridLabels()
                }, calcGridLabels: function () {
                    var a, b;
                    b = [];
                    var d = [], c = this.coords.big_num;
                    for (a = 0; a < c; a++) this.coords.big_w[a] = this.$cache.grid_labels[a].outerWidth(!1), this.coords.big_p[a] = this.toFixed(this.coords.big_w[a] / this.coords.w_rs * 100), this.coords.big_x[a] = this.toFixed(this.coords.big_p[a] / 2), b[a] = this.toFixed(this.coords.big[a] - this.coords.big_x[a]), d[a] = this.toFixed(b[a] +
                        this.coords.big_p[a]);
                    this.options.force_edges && (b[0] < -this.coords.grid_gap && (b[0] = -this.coords.grid_gap, d[0] = this.toFixed(b[0] + this.coords.big_p[0]), this.coords.big_x[0] = this.coords.grid_gap), d[c - 1] > 100 + this.coords.grid_gap && (d[c - 1] = 100 + this.coords.grid_gap, b[c - 1] = this.toFixed(d[c - 1] - this.coords.big_p[c - 1]), this.coords.big_x[c - 1] = this.toFixed(this.coords.big_p[c - 1] - this.coords.grid_gap)));
                    this.calcGridCollision(2, b, d);
                    this.calcGridCollision(4, b, d);
                    for (a = 0; a < c; a++) b = this.$cache.grid_labels[a][0],
                        b.style.marginLeft = -this.coords.big_x[a] + "%"
                }, calcGridCollision: function (a, b, d) {
                    var c, e, g, f = this.coords.big_num;
                    for (c = 0; c < f; c += a) {
                        e = c + a / 2;
                        if (e >= f) break;
                        g = this.$cache.grid_labels[e][0];
                        g.style.visibility = d[c] <= b[e] ? "visible" : "hidden"
                    }
                }, calcGridMargin: function () {
                    this.options.grid_margin && (this.coords.w_rs = this.$cache.rs.outerWidth(!1), this.coords.w_rs && (this.coords.w_handle = "single" === this.options.type ? this.$cache.s_single.outerWidth(!1) : this.$cache.s_from.outerWidth(!1), this.coords.p_handle = this.toFixed(this.coords.w_handle /
                        this.coords.w_rs * 100), this.coords.grid_gap = this.toFixed(this.coords.p_handle / 2 - .1), this.$cache.grid[0].style.width = this.toFixed(100 - this.coords.p_handle) + "%", this.$cache.grid[0].style.left = this.coords.grid_gap + "%"))
                }, update: function (a) {
                    this.input && (this.is_update = !0, this.options.from = this.result.from, this.options.to = this.result.to, this.options = f.extend(this.options, a), this.validate(), this.updateResult(a), this.toggleInput(), this.remove(), this.init(!0))
                }, reset: function () {
                    this.input && (this.updateResult(),
                        this.update())
                }, destroy: function () {
                    this.input && (this.toggleInput(), this.$cache.input.prop("readonly", !1), f.data(this.input, "ionRangeSlider", null), this.remove(), this.options = this.input = null)
                }
            };
            f.fn.ionRangeSlider = function (a) {
                return this.each(function () {
                    f.data(this, "ionRangeSlider") || f.data(this, "ionRangeSlider", new q(this, a, u++))
                })
            };
            (function () {
                for (var a = 0, b = ["ms", "moz", "webkit", "o"], d = 0; d < b.length && !h.requestAnimationFrame; ++d) h.requestAnimationFrame = h[b[d] + "RequestAnimationFrame"], h.cancelAnimationFrame =
                    h[b[d] + "CancelAnimationFrame"] || h[b[d] + "CancelRequestAnimationFrame"];
                h.requestAnimationFrame || (h.requestAnimationFrame = function (b, d) {
                    var g = (new Date).getTime(), f = Math.max(0, 16 - (g - a)), k = h.setTimeout(function () {
                        b(g + f)
                    }, f);
                    a = g + f;
                    return k
                });
                h.cancelAnimationFrame || (h.cancelAnimationFrame = function (a) {
                    clearTimeout(a)
                })
            })()
        })(jQuery, document, window, navigator);
        !function (a) {
            "function" == typeof define && define.amd ? define(["jquery"], a) : a("object" == typeof exports ? require("jquery") : jQuery)
        }(function (a) {
            var b, c = navigator.userAgent, d = /iphone/i.test(c), e = /chrome/i.test(c), f = /android/i.test(c);
            a.mask = {
                definitions: {'n': "[0-9]", a: "[A-Za-z]", "*": "[Р°-СЏС‘Рђ-РЇРЃA-Za-z0-9\/\-_]"},
                autoclear: !0,
                dataName: "rawMaskFn",
                placeholder: "_"
            }, a.fn.extend({
                caret: function (a, b) {
                    var c;
                    if (0 !== this.length && !this.is(":hidden")) return "number" == typeof a ? (b = "number" == typeof b ? b : a, this.each(function () {
                        this.setSelectionRange ? this.setSelectionRange(a, b) : this.createTextRange && (c = this.createTextRange(), c.collapse(!0), c.moveEnd("character", b), c.moveStart("character", a), c.select())
                    })) : (this[0].setSelectionRange ? (a = this[0].selectionStart, b = this[0].selectionEnd) : document.selection && document.selection.createRange && (c = document.selection.createRange(), a = 0 - c.duplicate().moveStart("character", -1e5), b = a + c.text.length), {
                        begin: a,
                        end: b
                    })
                }, unmask: function () {
                    return this.trigger("unmask")
                }, mask: function (c, g) {
                    var h, i, j, k, l, m, n, o;
                    if (!c && this.length > 0) {
                        h = a(this[0]);
                        var p = h.data(a.mask.dataName);
                        return p ? p() : void 0
                    }
                    return g = a.extend({
                        autoclear: a.mask.autoclear,
                        placeholder: a.mask.placeholder,
                        completed: null
                    }, g), i = a.mask.definitions, j = [], k = n = c.length, l = null, a.each(c.split(""), function (a, b) {
                        "?" == b ? (n--, k = a) : i[b] ? (j.push(new RegExp(i[b])), null === l && (l = j.length - 1), k > a && (m = j.length - 1)) : j.push(null)
                    }), this.trigger("unmask").each(function () {
                        function h() {
                            if (g.completed) {
                                for (var a = l; m >= a; a++) if (j[a] && C[a] === p(a)) return;
                                g.completed.call(B)
                            }
                        }

                        function p(a) {
                            return g.placeholder.charAt(a < g.placeholder.length ? a : 0)
                        }

                        function q(a) {
                            for (; ++a < n && !j[a];) ;
                            return a
                        }

                        function r(a) {
                            for (; --a >= 0 && !j[a];) ;
                            return a
                        }

                        function s(a, b) {
                            var c, d;
                            if (!(0 > a)) {
                                for (c = a, d = q(b); n > c; c++) if (j[c]) {
                                    if (!(n > d && j[c].test(C[d]))) break;
                                    C[c] = C[d], C[d] = p(d), d = q(d)
                                }
                                z(), B.caret(Math.max(l, a))
                            }
                        }

                        function t(a) {
                            var b, c, d, e;
                            for (b = a, c = p(a); n > b; b++) if (j[b]) {
                                if (d = q(b), e = C[b], C[b] = c, !(n > d && j[d].test(e))) break;
                                c = e
                            }
                        }

                        function u() {
                            var a = B.val(), b = B.caret();
                            if (o && o.length && o.length > a.length) {
                                for (A(!0); b.begin > 0 && !j[b.begin - 1];) b.begin--;
                                if (0 === b.begin) for (; b.begin < l && !j[b.begin];) b.begin++;
                                B.caret(b.begin, b.begin)
                            } else {
                                for (A(!0); b.begin < n && !j[b.begin];) b.begin++;
                                B.caret(b.begin, b.begin)
                            }
                            h()
                        }

                        function v() {
                            A(), B.val() != E && B.change()
                        }

                        function w(a) {
                            if (!B.prop("readonly")) {
                                var b, c, e, f = a.which || a.keyCode;
                                o = B.val(), 8 === f || 46 === f || d && 127 === f ? (b = B.caret(), c = b.begin, e = b.end, e - c === 0 && (c = 46 !== f ? r(c) : e = q(c - 1), e = 46 === f ? q(e) : e), y(c, e), s(c, e - 1), a.preventDefault()) : 13 === f ? v.call(this, a) : 27 === f && (B.val(E), B.caret(0, A()), a.preventDefault())
                            }
                        }

                        function x(b) {
                            if (!B.prop("readonly")) {
                                var c, d, e, g = b.which || b.keyCode, i = B.caret();
                                if (!(b.ctrlKey || b.altKey || b.metaKey || 32 > g) && g && 13 !== g) {
                                    if (i.end - i.begin !== 0 && (y(i.begin, i.end), s(i.begin, i.end - 1)), c = q(i.begin - 1), n > c && (d = String.fromCharCode(g), j[c].test(d))) {
                                        if (t(c), C[c] = d, z(), e = q(c), f) {
                                            var k = function () {
                                                a.proxy(a.fn.caret, B, e)()
                                            };
                                            setTimeout(k, 0)
                                        } else B.caret(e);
                                        i.begin <= m && h()
                                    }
                                    b.preventDefault()
                                }
                            }
                        }

                        function y(a, b) {
                            var c;
                            for (c = a; b > c && n > c; c++) j[c] && (C[c] = p(c))
                        }

                        function z() {
                            B.val(C.join(""))
                        }

                        function A(a) {
                            var b, c, d, e = B.val(), f = -1;
                            for (b = 0, d = 0; n > b; b++) if (j[b]) {
                                for (C[b] = p(b); d++ < e.length;) if (c = e.charAt(d - 1), j[b].test(c)) {
                                    C[b] = c, f = b;
                                    break
                                }
                                if (d > e.length) {
                                    y(b + 1, n);
                                    break
                                }
                            } else C[b] === e.charAt(d) && d++, k > b && (f = b);
                            return a ? z() : k > f + 1 ? g.autoclear || C.join("") === D ? (B.val() && B.val(""), y(0, n)) : z() : (z(), B.val(B.val().substring(0, f + 1))), k ? b : l
                        }

                        var B = a(this), C = a.map(c.split(""), function (a, b) {
                            return "?" != a ? i[a] ? p(b) : a : void 0
                        }), D = C.join(""), E = B.val();
                        B.data(a.mask.dataName, function () {
                            return a.map(C, function (a, b) {
                                return j[b] && a != p(b) ? a : null
                            }).join("")
                        }), B.one("unmask", function () {
                            B.off(".mask").removeData(a.mask.dataName)
                        }).on("focus.mask", function () {
                            if (!B.prop("readonly")) {
                                clearTimeout(b);
                                var a;
                                E = B.val(), a = A(), b = setTimeout(function () {
                                    B.get(0) === document.activeElement && (z(), a == c.replace("?", "").length ? B.caret(0, a) : B.caret(a))
                                }, 10)
                            }
                        }).on("blur.mask", v).on("keydown.mask", w).on("keypress.mask", x).on("input.mask paste.mask", function () {
                            B.prop("readonly") || setTimeout(function () {
                                var a = A(!0);
                                B.caret(a), h()
                            }, 0)
                        }), e && f && B.off("input.mask").on("input.mask", u), A()
                    })
                }
            })
        });
        (function (e) {
            var a = [], d = /^url\(["']?([^"'\)]*)["']?\);?$/i, c = /\.png$/i,
                b = !!window.createPopup && document.documentElement.currentStyle.minWidth == "undefined";

            function f() {
                e.each(a, function () {
                    this.refresh(true)
                })
            }

            e(window).resize(f);
            e.Poshytip = function (h, g) {
                this.$elm = e(h);
                this.opts = e.extend({}, e.fn.poshytip.defaults, g);
                this.$tip = e(['<div class="', this.opts.className, '">', '<div class="tip-inner tip-bg-image"></div>', '<div class="tip-arrow tip-arrow-top tip-arrow-right tip-arrow-bottom tip-arrow-left"></div>', "</div>"].join("")).appendTo(document.body);
                this.$arrow = this.$tip.find("div.tip-arrow");
                this.$inner = this.$tip.find("div.tip-inner");
                this.disabled = false;
                this.content = null;
                this.init()
            };
            e.Poshytip.prototype = {
                init: function () {
                    a.push(this);
                    var g = this.$elm.attr("title");
                    this.$elm.data("title.poshytip", g !== undefined ? g : null).data("poshytip", this);
                    if (this.opts.showOn != "none") {
                        this.$elm.bind({
                            "mouseenter.poshytip": e.proxy(this.mouseenter, this),
                            "mouseleave.poshytip": e.proxy(this.mouseleave, this)
                        });
                        switch (this.opts.showOn) {
                            case"hover":
                                if (this.opts.alignTo == "cursor") {
                                    this.$elm.bind("mousemove.poshytip", e.proxy(this.mousemove, this))
                                }
                                if (this.opts.allowTipHover) {
                                    this.$tip.hover(e.proxy(this.clearTimeouts, this), e.proxy(this.mouseleave, this))
                                }
                                break;
                            case"focus":
                                this.$elm.bind({
                                    "focus.poshytip": e.proxy(this.showDelayed, this),
                                    "blur.poshytip": e.proxy(this.hideDelayed, this)
                                });
                                break
                        }
                    }
                }, mouseenter: function (g) {
                    if (this.disabled) {
                        return true
                    }
                    this.$elm.attr("title", "");
                    if (this.opts.showOn == "focus") {
                        return true
                    }
                    this.showDelayed()
                }, mouseleave: function (g) {
                    if (this.disabled || this.asyncAnimating && (this.$tip[0] === g.relatedTarget || jQuery.contains(this.$tip[0], g.relatedTarget))) {
                        return true
                    }
                    if (!this.$tip.data("active")) {
                        var h = this.$elm.data("title.poshytip");
                        if (h !== null) {
                            this.$elm.attr("title", h)
                        }
                    }
                    if (this.opts.showOn == "focus") {
                        return true
                    }
                    this.hideDelayed()
                }, mousemove: function (g) {
                    if (this.disabled) {
                        return true
                    }
                    this.eventX = g.pageX;
                    this.eventY = g.pageY;
                    if (this.opts.followCursor && this.$tip.data("active")) {
                        this.calcPos();
                        this.$tip.css({left: this.pos.l, top: this.pos.t});
                        if (this.pos.arrow) {
                            this.$arrow[0].className = "tip-arrow tip-arrow-" + this.pos.arrow
                        }
                    }
                }, show: function () {
                    if (this.disabled || this.$tip.data("active")) {
                        return
                    }
                    this.reset();
                    this.update();
                    if (!this.content) {
                        return
                    }
                    this.display();
                    if (this.opts.timeOnScreen) {
                        this.hideDelayed(this.opts.timeOnScreen)
                    }
                }, showDelayed: function (g) {
                    this.clearTimeouts();
                    this.showTimeout = setTimeout(e.proxy(this.show, this), typeof g == "number" ? g : this.opts.showTimeout)
                }, hide: function () {
                    if (this.disabled || !this.$tip.data("active")) {
                        return
                    }
                    this.display(true)
                }, hideDelayed: function (g) {
                    this.clearTimeouts();
                    this.hideTimeout = setTimeout(e.proxy(this.hide, this), typeof g == "number" ? g : this.opts.hideTimeout)
                }, reset: function () {
                    this.$tip.queue([]).detach().css("visibility", "hidden").data("active", false);
                    this.$inner.find("*").poshytip("hide");
                    if (this.opts.fade) {
                        this.$tip.css("opacity", this.opacity)
                    }
                    this.$arrow[0].className = "tip-arrow tip-arrow-top tip-arrow-right tip-arrow-bottom tip-arrow-left";
                    this.asyncAnimating = false
                }, update: function (j, k) {
                    if (this.disabled) {
                        return
                    }
                    var i = j !== undefined;
                    if (i) {
                        if (!k) {
                            this.opts.content = j
                        }
                        if (!this.$tip.data("active")) {
                            return
                        }
                    } else {
                        j = this.opts.content
                    }
                    var h = this, g = typeof j == "function" ? j.call(this.$elm[0], function (l) {
                        h.update(l)
                    }) : j == "[title]" ? this.$elm.data("title.poshytip") : j;
                    if (this.content !== g) {
                        this.$inner.empty().append(g);
                        this.content = g
                    }
                    this.refresh(i)
                }, refresh: function (h) {
                    if (this.disabled) {
                        return
                    }
                    if (h) {
                        if (!this.$tip.data("active")) {
                            return
                        }
                        var k = {left: this.$tip.css("left"), top: this.$tip.css("top")}
                    }
                    this.$tip.css({left: 0, top: 0}).appendTo(document.body);
                    if (this.opacity === undefined) {
                        this.opacity = this.$tip.css("opacity")
                    }
                    var l = this.$tip.css("background-image").match(d),
                        m = this.$arrow.css("background-image").match(d);
                    if (l) {
                        var i = c.test(l[1]);
                        if (b && i) {
                            this.$tip.css("background-image", "none");
                            this.$inner.css({margin: 0, border: 0, padding: 0});
                            l = i = false
                        } else {
                            this.$tip.prepend('<table class="tip-table" border="0" cellpadding="0" cellspacing="0"><tr><td class="tip-top tip-bg-image" colspan="2"><span></span></td><td class="tip-right tip-bg-image" rowspan="2"><span></span></td></tr><tr><td class="tip-left tip-bg-image" rowspan="2"><span></span></td><td></td></tr><tr><td class="tip-bottom tip-bg-image" colspan="2"><span></span></td></tr></table>').css({
                                border: 0,
                                padding: 0,
                                "background-image": "none",
                                "background-color": "transparent"
                            }).find(".tip-bg-image").css("background-image", 'url("' + l[1] + '")').end().find("td").eq(3).append(this.$inner)
                        }
                        if (i && !e.support.opacity) {
                            this.opts.fade = false
                        }
                    }
                    if (m && !e.support.opacity) {
                        if (b && c.test(m[1])) {
                            m = false;
                            this.$arrow.css("background-image", "none")
                        }
                        this.opts.fade = false
                    }
                    var o = this.$tip.find("> table.tip-table");
                    if (b) {
                        this.$tip[0].style.width = "";
                        o.width("auto").find("td").eq(3).width("auto");
                        var n = this.$tip.width(), j = parseInt(this.$tip.css("min-width")),
                            g = parseInt(this.$tip.css("max-width"));
                        if (!isNaN(j) && n < j) {
                            n = j
                        } else {
                            if (!isNaN(g) && n > g) {
                                n = g
                            }
                        }
                        this.$tip.add(o).width(n).eq(0).find("td").eq(3).width("100%")
                    } else {
                        if (o[0]) {
                            o.width("auto").find("td").eq(3).width("auto").end().end().width(document.defaultView && document.defaultView.getComputedStyle && parseFloat(document.defaultView.getComputedStyle(this.$tip[0], null).width) || this.$tip.width()).find("td").eq(3).width("100%")
                        }
                    }
                    this.tipOuterW = this.$tip.outerWidth();
                    this.tipOuterH = this.$tip.outerHeight();
                    this.calcPos();
                    if (m && this.pos.arrow) {
                        this.$arrow[0].className = "tip-arrow tip-arrow-" + this.pos.arrow;
                        this.$arrow.css("visibility", "inherit")
                    }
                    if (h && this.opts.refreshAniDuration) {
                        this.asyncAnimating = true;
                        var p = this;
                        this.$tip.css(k).animate({
                            left: this.pos.l,
                            top: this.pos.t
                        }, this.opts.refreshAniDuration, function () {
                            p.asyncAnimating = false
                        })
                    } else {
                        this.$tip.css({left: this.pos.l, top: this.pos.t})
                    }
                }, display: function (h) {
                    var i = this.$tip.data("active");
                    if (i && !h || !i && h) {
                        return
                    }
                    this.$tip.stop();
                    if ((this.opts.slide && this.pos.arrow || this.opts.fade) && (h && this.opts.hideAniDuration || !h && this.opts.showAniDuration)) {
                        var n = {}, m = {};
                        if (this.opts.slide && this.pos.arrow) {
                            var l, g;
                            if (this.pos.arrow == "bottom" || this.pos.arrow == "top") {
                                l = "top";
                                g = "bottom"
                            } else {
                                l = "left";
                                g = "right"
                            }
                            var k = parseInt(this.$tip.css(l));
                            n[l] = k + (h ? 0 : (this.pos.arrow == g ? -this.opts.slideOffset : this.opts.slideOffset));
                            m[l] = k + (h ? (this.pos.arrow == g ? this.opts.slideOffset : -this.opts.slideOffset) : 0) + "px"
                        }
                        if (this.opts.fade) {
                            n.opacity = h ? this.$tip.css("opacity") : 0;
                            m.opacity = h ? 0 : this.opacity
                        }
                        this.$tip.css(n).animate(m, this.opts[h ? "hideAniDuration" : "showAniDuration"])
                    }
                    h ? this.$tip.queue(e.proxy(this.reset, this)) : this.$tip.css("visibility", "inherit");
                    if (i) {
                        var j = this.$elm.data("title.poshytip");
                        if (j !== null) {
                            this.$elm.attr("title", j)
                        }
                    }
                    this.$tip.data("active", !i)
                }, disable: function () {
                    this.reset();
                    this.disabled = true
                }, enable: function () {
                    this.disabled = false
                }, destroy: function () {
                    this.reset();
                    this.$tip.remove();
                    delete this.$tip;
                    this.content = null;
                    this.$elm.unbind(".poshytip").removeData("title.poshytip").removeData("poshytip");
                    a.splice(e.inArray(this, a), 1)
                }, clearTimeouts: function () {
                    if (this.showTimeout) {
                        clearTimeout(this.showTimeout);
                        this.showTimeout = 0
                    }
                    if (this.hideTimeout) {
                        clearTimeout(this.hideTimeout);
                        this.hideTimeout = 0
                    }
                }, calcPos: function () {
                    var n = {l: 0, t: 0, arrow: ""}, h = e(window),
                        k = {l: h.scrollLeft(), t: h.scrollTop(), w: h.width(), h: h.height()}, p, j, m, i, q, g;
                    if (this.opts.alignTo == "cursor") {
                        p = j = m = this.eventX;
                        i = q = g = this.eventY
                    } else {
                        var o = this.$elm.offset(),
                            l = {l: o.left, t: o.top, w: this.$elm.outerWidth(), h: this.$elm.outerHeight()};
                        p = l.l + (this.opts.alignX != "inner-right" ? 0 : l.w);
                        j = p + Math.floor(l.w / 2);
                        m = p + (this.opts.alignX != "inner-left" ? l.w : 0);
                        i = l.t + (this.opts.alignY != "inner-bottom" ? 0 : l.h);
                        q = i + Math.floor(l.h / 2);
                        g = i + (this.opts.alignY != "inner-top" ? l.h : 0)
                    }
                    switch (this.opts.alignX) {
                        case"right":
                        case"inner-left":
                            n.l = m + this.opts.offsetX;
                            if (this.opts.keepInViewport && n.l + this.tipOuterW > k.l + k.w) {
                                n.l = k.l + k.w - this.tipOuterW
                            }
                            if (this.opts.alignX == "right" || this.opts.alignY == "center") {
                                n.arrow = "left"
                            }
                            break;
                        case"center":
                            n.l = j - Math.floor(this.tipOuterW / 2);
                            if (this.opts.keepInViewport) {
                                if (n.l + this.tipOuterW > k.l + k.w) {
                                    n.l = k.l + k.w - this.tipOuterW
                                } else {
                                    if (n.l < k.l) {
                                        n.l = k.l
                                    }
                                }
                            }
                            break;
                        default:
                            n.l = p - this.tipOuterW - this.opts.offsetX;
                            if (this.opts.keepInViewport && n.l < k.l) {
                                n.l = k.l
                            }
                            if (this.opts.alignX == "left" || this.opts.alignY == "center") {
                                n.arrow = "right"
                            }
                    }
                    switch (this.opts.alignY) {
                        case"bottom":
                        case"inner-top":
                            n.t = g + this.opts.offsetY;
                            if (!n.arrow || this.opts.alignTo == "cursor") {
                                n.arrow = "top"
                            }
                            if (this.opts.keepInViewport && n.t + this.tipOuterH > k.t + k.h) {
                                n.t = i - this.tipOuterH - this.opts.offsetY;
                                if (n.arrow == "top") {
                                    n.arrow = "bottom"
                                }
                            }
                            break;
                        case"center":
                            n.t = q - Math.floor(this.tipOuterH / 2);
                            if (this.opts.keepInViewport) {
                                if (n.t + this.tipOuterH > k.t + k.h) {
                                    n.t = k.t + k.h - this.tipOuterH
                                } else {
                                    if (n.t < k.t) {
                                        n.t = k.t
                                    }
                                }
                            }
                            break;
                        default:
                            n.t = i - this.tipOuterH - this.opts.offsetY;
                            if (!n.arrow || this.opts.alignTo == "cursor") {
                                n.arrow = "bottom"
                            }
                            if (this.opts.keepInViewport && n.t < k.t) {
                                n.t = g + this.opts.offsetY;
                                if (n.arrow == "bottom") {
                                    n.arrow = "top"
                                }
                            }
                    }
                    this.pos = n
                }
            };
            e.fn.poshytip = function (h) {
                if (typeof h == "string") {
                    var g = arguments, l = h;
                    Array.prototype.shift.call(g);
                    if (l == "destroy") {
                        this.die ? this.die("mouseenter.poshytip").die("focus.poshytip") : e(document).undelegate(this.selector, "mouseenter.poshytip").undelegate(this.selector, "focus.poshytip")
                    }
                    return this.each(function () {
                        var m = e(this).data("poshytip");
                        if (m && m[l]) {
                            m[l].apply(m, g)
                        }
                    })
                }
                var j = e.extend({}, e.fn.poshytip.defaults, h);
                if (!e("#poshytip-css-" + j.className)[0]) {
                    e(['<style id="poshytip-css-', j.className, '" type="text/css">', "div.", j.className, "{visibility:hidden;position:absolute;top:0;left:0;}", "div.", j.className, " table.tip-table, div.", j.className, " table.tip-table td{margin:0;font-family:inherit;font-size:inherit;font-weight:inherit;font-style:inherit;font-variant:inherit;vertical-align:middle;}", "div.", j.className, " td.tip-bg-image span{display:block;font:1px/1px sans-serif;height:", j.bgImageFrameSize, "px;width:", j.bgImageFrameSize, "px;overflow:hidden;}", "div.", j.className, " td.tip-right{background-position:100% 0;}", "div.", j.className, " td.tip-bottom{background-position:100% 100%;}", "div.", j.className, " td.tip-left{background-position:0 100%;}", "div.", j.className, " div.tip-inner{background-position:-", j.bgImageFrameSize, "px -", j.bgImageFrameSize, "px;}", "div.", j.className, " div.tip-arrow{visibility:hidden;position:absolute;overflow:hidden;font:1px/1px sans-serif;}", "</style>"].join("")).appendTo("head")
                }
                if (j.liveEvents && j.showOn != "none") {
                    var i, k = e.extend({}, j, {liveEvents: false});
                    switch (j.showOn) {
                        case"hover":
                            i = function () {
                                var m = e(this);
                                if (!m.data("poshytip")) {
                                    m.poshytip(k).poshytip("mouseenter")
                                }
                            };
                            this.live ? this.live("mouseenter.poshytip", i) : e(document).delegate(this.selector, "mouseenter.poshytip", i);
                            break;
                        case"focus":
                            i = function () {
                                var m = e(this);
                                if (!m.data("poshytip")) {
                                    m.poshytip(k).poshytip("showDelayed")
                                }
                            };
                            this.live ? this.live("focus.poshytip", i) : e(document).delegate(this.selector, "focus.poshytip", i);
                            break
                    }
                    return this
                }
                return this.each(function () {
                    new e.Poshytip(this, j)
                })
            };
            e.fn.poshytip.defaults = {
                content: "[title]",
                className: "tip-yellow",
                bgImageFrameSize: 10,
                showTimeout: 500,
                hideTimeout: 100,
                timeOnScreen: 0,
                showOn: "hover",
                liveEvents: false,
                alignTo: "cursor",
                alignX: "right",
                alignY: "top",
                offsetX: -22,
                offsetY: 18,
                keepInViewport: true,
                allowTipHover: true,
                followCursor: false,
                fade: true,
                slide: true,
                slideOffset: 8,
                showAniDuration: 300,
                hideAniDuration: 300,
                refreshAniDuration: 200
            }
        })(jQuery);
        !function (a, b) {
            "function" == typeof define && define.amd ? define(["jquery"], function (a) {
                return b(a)
            }) : "object" == typeof exports ? module.exports = b(require("jquery")) : b(jQuery)
        }(this, function (a) {
            !function (a, b) {
                "use strict";

                function c(b) {
                    b && "custom" === b.errorMessagePosition && "function" == typeof b.errorMessageCustom && (a.formUtils.warn("Use of deprecated function errorMessageCustom, use config.submitErrorMessageCallback instead"), b.submitErrorMessageCallback = function (a, c) {
                        b.errorMessageCustom(a, b.language.errorTitle, c, b)
                    })
                }

                function d(b) {
                    if (b.errorMessagePosition && "object" == typeof b.errorMessagePosition) {
                        a.formUtils.warn("Deprecated use of config parameter errorMessagePosition, use config.submitErrorMessageCallback instead");
                        var c = b.errorMessagePosition;
                        b.errorMessagePosition = "top", b.submitErrorMessageCallback = function () {
                            return c
                        }
                    }
                }

                function e(b) {
                    var c = b.find("[data-validation-if-checked]");
                    c.length && a.formUtils.warn('Detected use of attribute "data-validation-if-checked" which is deprecated. Use "data-validation-depends-on" provided by module "logic"'), c.on("beforeValidation", function () {
                        var c = a(this),
                            d = c.valAttr("if-checked"),
                            e = a('input[name="' + d + '"]', b),
                            f = e.is(":checked"),
                            g = (a.formUtils.getValue(e) || "").toString(),
                            h = c.valAttr("if-checked-value");
                        (!f || h && h !== g) && c.valAttr("skipped", !0)
                    })
                }

                a.fn.validateForm = function (b, c) {
                    return a.formUtils.warn("Use of deprecated function $.validateForm, use $.isValid instead"), this.isValid(b, c, !0)
                }, a(window).on("validatorsLoaded formValidationSetup", function (b, f, g) {
                    f || (f = a("form")), c(g), d(g), e(f)
                })
            }(a),
                function (a) {
                    "use strict";
                    var b = {
                        resolveErrorMessage: function (a, b, c, d, e) {
                            var f = d.validationErrorMsgAttribute + "-" + c.replace("validate_", ""),
                                g = a.attr(f);
                            return g || (g = a.attr(d.validationErrorMsgAttribute), g || (g = "function" != typeof b.errorMessageKey ? e[b.errorMessageKey] : e[b.errorMessageKey(d)], g || (g = b.errorMessage))), g
                        },
                        getParentContainer: function (b) {
                            if (b.valAttr("error-msg-container")) return a(b.valAttr("error-msg-container"));
                            var c = b.parent();
                            if (!c.hasClass("form-group") && !c.closest("form").hasClass("form-horizontal")) {
                                var d = c.closest(".form-group");
                                if (d.length) return d.eq(0)
                            }
                            return c
                        },
                        applyInputErrorStyling: function (a, b) {
                            a.addClass(b.errorElementClass).removeClass("valid"), this.getParentContainer(a).addClass(b.inputParentClassOnError).removeClass(b.inputParentClassOnSuccess), "" !== b.borderColorOnError && a.css("border-color", b.borderColorOnError)
                        },
                        applyInputSuccessStyling: function (a, b) {
                            a.addClass("valid"), this.getParentContainer(a).addClass(b.inputParentClassOnSuccess)
                        },
                        removeInputStylingAndMessage: function (a, c) {
                            a.removeClass("valid").removeClass(c.errorElementClass).css("border-color", "");
                            var d = b.getParentContainer(a);
                            if (d.removeClass(c.inputParentClassOnError).removeClass(c.inputParentClassOnSuccess), "function" == typeof c.inlineErrorMessageCallback) {
                                var e = c.inlineErrorMessageCallback(a, !1, c);
                                e && e.html("")
                            } else d.find("." + c.errorMessageClass).remove()
                        },
                        removeAllMessagesAndStyling: function (c, d) {
                            if ("function" == typeof d.submitErrorMessageCallback) {
                                var e = d.submitErrorMessageCallback(c, d);
                                e && e.html("")
                            } else c.find("." + d.errorMessageClass + ".alert").remove();
                            c.find("." + d.errorElementClass + ",.valid").each(function () {
                                b.removeInputStylingAndMessage(a(this), d)
                            })
                        },
                        setInlineMessage: function (b, c, d) {
                            this.applyInputErrorStyling(b, d);
                            var e, f = document.getElementById(b.attr("name") + "_err_msg"),
                                g = !1,
                                h = function (d) {
                                    a.formUtils.$win.trigger("validationErrorDisplay", [b, d]), d.html(c)
                                },
                                i = function () {
                                    var f = !1;
                                    g.find("." + d.errorMessageClass).each(function () {
                                        return this.inputReferer === b[0] ? (f = a(this), !1) : void 0
                                    }), f ? c ? h(f) : f.remove() : "" !== c && (e = a('<div class="' + d.errorMessageClass + ' alert"></div>'), h(e), e[0].inputReferer = b[0], g.prepend(e))
                                };
                            if (f) a.formUtils.warn("Using deprecated element reference " + f.id), g = a(f), i();
                            else if ("function" == typeof d.inlineErrorMessageCallback) {
                                if (g = d.inlineErrorMessageCallback(b, c, d), !g) return;
                                i()
                            } else {
                                // var j = this.getParentContainer(b);
                                // e = j.find("." + d.errorMessageClass + ".help-block"), 0 === e.length && (e = a("<span></span>").addClass("help-block").addClass(d.errorMessageClass), e.appendTo(j)), h(e)
                            }
                        },
                        setMessageInTopOfForm: function (b, c, d, e) {
                            var f = '<div class="{errorMessageClass} alert alert-danger"><strong>{errorTitle}</strong><ul>{fields}</ul></div>',
                                g = !1;
                            if ("function" != typeof d.submitErrorMessageCallback || (g = d.submitErrorMessageCallback(b, c, d))) {
                                var h = {
                                    errorTitle: e.errorTitle,
                                    fields: "",
                                    errorMessageClass: d.errorMessageClass
                                };
                                a.each(c, function (a, b) {
                                    h.fields += "<li>" + b + "</li>"
                                }), a.each(h, function (a, b) {
                                    f = f.replace("{" + a + "}", b)
                                }), g ? g.html(f) : b.children().eq(0).before(a(f))
                            }
                        }
                    };
                    a.formUtils = a.extend(a.formUtils || {}, {
                        dialogs: b
                    })
                }(a),
                function (a, b, c) {
                    "use strict";
                    var d = 0;
                    a.fn.validateOnBlur = function (b, c) {
                        var d = this,
                            e = this.find("*[data-validation]");
                        return e.each(function () {
                            var e = a(this);
                            if (e.is("[type=radio]")) {
                                var f = d.find('[type=radio][name="' + e.attr("name") + '"]');
                                f.bind("blur.validation", function () {
                                    e.validateInputOnBlur(b, c, !0, "blur")
                                }), c.validateCheckboxRadioOnClick && f.bind("click.validation", function () {
                                    e.validateInputOnBlur(b, c, !0, "click")
                                })
                            }
                        }), e.bind("blur.validation", function () {
                            a(this).validateInputOnBlur(b, c, !0, "blur")
                        }), c.validateCheckboxRadioOnClick && this.find("input[type=checkbox][data-validation],input[type=radio][data-validation]").bind("click.validation", function () {
                            a(this).validateInputOnBlur(b, c, !0, "click")
                        }), this
                    }, a.fn.validateOnEvent = function (b, c) {
                        var d = "FORM" === this[0].nodeName ? this.find("*[data-validation-event]") : this;
                        return d.each(function () {
                            var d = a(this),
                                e = d.valAttr("event");
                            e && d.unbind(e + ".validation").bind(e + ".validation", function (d) {
                                9 !== (d || {}).keyCode && a(this).validateInputOnBlur(b, c, !0, e)
                            })
                        }), this
                    }, a.fn.showHelpOnFocus = function (b) {
                        return b || (b = "data-validation-help"), this.find(".has-help-txt").valAttr("has-keyup-event", !1).removeClass("has-help-txt"), this.find("textarea,input").each(function () {
                            var c = a(this),
                                e = "jquery_form_help_" + ++d,
                                f = c.attr(b);
                            f && c.addClass("has-help-txt").unbind("focus.help").bind("focus.help", function () {
                                // var b = c.parent().find("." + e);
                                // 0 === b.length && (b = a("<span />").addClass(e).addClass("help").addClass("help-block").text(f).hide(), c.after(b)), b.fadeIn()
                            }).unbind("blur.help").bind("blur.help", function () {
                                a(this).parent().find("." + e).fadeOut("slow")
                            })
                        }), this
                    }, a.fn.validate = function (b, c, d) {
                        var e = a.extend({}, a.formUtils.LANG, d || {});
                        this.each(function () {
                            var d = a(this),
                                f = d.closest("form").get(0).validationConfig || {};
                            d.one("validation", function (a, c) {
                                "function" == typeof b && b(c, this, a)
                            }), d.validateInputOnBlur(e, a.extend({}, f, c || {}), !0)
                        })
                    }, a.fn.willPostponeValidation = function () {
                        return (this.valAttr("suggestion-nr") || this.valAttr("postpone") || this.hasClass("hasDatepicker")) && !b.postponedValidation
                    }, a.fn.validateInputOnBlur = function (c, d, e, f) {
                        if (a.formUtils.eventType = f, this.willPostponeValidation()) {
                            var g = this,
                                h = this.valAttr("postpone") || 200;
                            return b.postponedValidation = function () {
                                g.validateInputOnBlur(c, d, e, f), b.postponedValidation = !1
                            }, setTimeout(function () {
                                b.postponedValidation && b.postponedValidation()
                            }, h), this
                        }
                        c = a.extend({}, a.formUtils.LANG, c || {}), a.formUtils.dialogs.removeInputStylingAndMessage(this, d);
                        var i = this,
                            j = i.closest("form"),
                            k = a.formUtils.validateInput(i, c, d, j, f);
                        return e && i.unbind("keyup.validation"), k.shouldChangeDisplay && (k.isValid ? a.formUtils.dialogs.applyInputSuccessStyling(i, d) : a.formUtils.dialogs.setInlineMessage(i, k.errorMsg, d)), !k.isValid && e && i.bind("keyup.validation", function (b) {
                            9 !== b.keyCode && a(this).validateInputOnBlur(c, d, !1, "keyup")
                        }), this
                    }, a.fn.valAttr = function (a, b) {
                        return b === c ? this.attr("data-validation-" + a) : b === !1 || null === b ? this.removeAttr("data-validation-" + a) : (a = a.length > 0 ? "-" + a : "", this.attr("data-validation" + a, b))
                    }, a.fn.isValid = function (b, c, d) {
                        if (a.formUtils.isLoadingModules) {
                            var e = this;
                            return setTimeout(function () {
                                e.isValid(b, c, d)
                            }, 200), null
                        }
                        c = a.extend({}, a.formUtils.defaultConfig(), c || {}), b = a.extend({}, a.formUtils.LANG, b || {}), d = d !== !1, a.formUtils.errorDisplayPreventedWhenHalted && (delete a.formUtils.errorDisplayPreventedWhenHalted, d = !1), a.formUtils.isValidatingEntireForm = !0, a.formUtils.haltValidation = !1;
                        var f = function (b, e) {
                                a.inArray(b, h) < 0 && h.push(b), i.push(e), e.attr("current-error", b), d && a.formUtils.dialogs.applyInputErrorStyling(e, c)
                            },
                            g = [],
                            h = [],
                            i = [],
                            j = this,
                            k = function (b, d) {
                                return "submit" === d || "button" === d || "reset" === d ? !0 : a.inArray(b, c.ignore || []) > -1
                            };
                        if (d && a.formUtils.dialogs.removeAllMessagesAndStyling(j, c), j.find("input,textarea,select").filter(':not([type="submit"],[type="button"])').each(function () {
                            var d = a(this),
                                e = d.attr("type"),
                                h = "radio" === e || "checkbox" === e,
                                i = d.attr("name");
                            if (!k(i, e) && (!h || a.inArray(i, g) < 0)) {
                                h && g.push(i);
                                var l = a.formUtils.validateInput(d, b, c, j, "submit");
                                l.isValid ? l.isValid && l.shouldChangeDisplay && (d.valAttr("current-error", !1), a.formUtils.dialogs.applyInputSuccessStyling(d, c)) : f(l.errorMsg, d)
                            }
                        }), "function" == typeof c.onValidate) {
                            var l = c.onValidate(j);
                            a.isArray(l) ? a.each(l, function (a, b) {
                                f(b.message, b.element)
                            }) : l && l.element && l.message && f(l.message, l.element)
                        }
                        return a.formUtils.isValidatingEntireForm = !1, !a.formUtils.haltValidation && i.length > 0 ? (d && ("top" === c.errorMessagePosition ? a.formUtils.dialogs.setMessageInTopOfForm(j, h, c, b) : a.each(i, function (b, d) {
                            a.formUtils.dialogs.setInlineMessage(d, d.attr("current-error"), c)
                        }), c.scrollToTopOnError && a.formUtils.$win.scrollTop(j.offset().top - 20)), !1) : (!d && a.formUtils.haltValidation && (a.formUtils.errorDisplayPreventedWhenHalted = !0), !a.formUtils.haltValidation)
                    }, a.fn.restrictLength = function (b) {
                        return new a.formUtils.lengthRestriction(this, b), this
                    }, a.fn.addSuggestions = function (b) {
                        var c = !1;
                        return this.find("input").each(function () {
                            var d = a(this);
                            c = a.split(d.attr("data-suggestions")), c.length > 0 && !d.hasClass("has-suggestions") && (a.formUtils.suggest(d, c, b), d.addClass("has-suggestions"))
                        }), this
                    }
                }(a, window),
                function (a) {
                    "use strict";
                    a.formUtils = a.extend(a.formUtils || {}, {
                        isLoadingModules: !1,
                        loadedModules: {},
                        loadModules: function (b, c, d) {
                            if (a.formUtils.isLoadingModules) return void setTimeout(function () {
                                a.formUtils.loadModules(b, c, d)
                            }, 10);
                            var e = !1,
                                f = function (b, c) {
                                    var f = a.split(b),
                                        g = f.length,
                                        h = function () {
                                            g--, 0 === g && (a.formUtils.isLoadingModules = !1, d && e && "function" == typeof d && d())
                                        };
                                    g > 0 && (a.formUtils.isLoadingModules = !0);
                                    var i = "?_=" + (new Date).getTime(),
                                        j = document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0];
                                    a.each(f, function (b, d) {
                                        if (d = a.trim(d), 0 === d.length) h();
                                        else {
                                            var f = c + d + (".js" === d.slice(-3) ? "" : ".js"),
                                                g = document.createElement("SCRIPT");
                                            f in a.formUtils.loadedModules ? h() : (a.formUtils.loadedModules[f] = 1, e = !0, g.type = "text/javascript", g.onload = h, g.src = f + (".dev.js" === f.slice(-7) ? i : ""), g.onerror = function () {
                                                a.formUtils.warn("Unable to load form validation module " + f)
                                            }, g.onreadystatechange = function () {
                                                "complete" !== this.readyState && "loaded" !== this.readyState || (h(), this.onload = null, this.onreadystatechange = null)
                                            }, j.appendChild(g))
                                        }
                                    })
                                };
                            if (c) f(b, c);
                            else {
                                var g = function () {
                                    var c = !1;
                                    return a('script[src*="form-validator"]').each(function () {
                                        return c = this.src.substr(0, this.src.lastIndexOf("/")) + "/", "/" === c && (c = ""), !1
                                    }), c !== !1 ? (f(b, c), !0) : !1
                                };
                                g() || a(g)
                            }
                        }
                    })
                }(a),
                function (a) {
                    "use strict";
                    a.split = function (b, c) {
                        if ("function" != typeof c) {
                            if (!b) return [];
                            var d = [];
                            return a.each(b.split(c ? c : /[,|\-\s]\s*/g), function (b, c) {
                                c = a.trim(c), c.length && d.push(c)
                            }), d
                        }
                        b && a.each(b.split(/[,|\-\s]\s*/g), function (b, d) {
                            return d = a.trim(d), d.length ? c(d, b) : void 0
                        })
                    }, a.validate = function (b) {
                        var c = a.extend(a.formUtils.defaultConfig(), {
                            form: "form",
                            validateOnEvent: !1,
                            validateOnBlur: !0,
                            validateCheckboxRadioOnClick: !0,
                            showHelpOnFocus: !0,
                            addSuggestions: !0,
                            modules: "",
                            onModulesLoaded: null,
                            language: !1,
                            onSuccess: !1,
                            onError: !1,
                            onElementValidate: !1
                        });
                        if (b = a.extend(c, b || {}), b.lang && "en" !== b.lang) {
                            var d = "lang/" + b.lang + ".js";
                            b.modules += b.modules.length ? "," + d : d
                        }
                        a(b.form).each(function (c, d) {
                            d.validationConfig = b;
                            var e = a(d);
                            e.trigger("formValidationSetup", [e, b]), e.find(".has-help-txt").unbind("focus.validation").unbind("blur.validation"), e.removeClass("has-validation-callback").unbind("submit.validation").unbind("reset.validation").find("input[data-validation],textarea[data-validation]").unbind("blur.validation"), e.bind("submit.validation", function (c) {
                                var d = a(this),
                                    e = function () {
                                        return c.stopImmediatePropagation(), !1
                                    };
                                if (a.formUtils.haltValidation) return e();
                                if (a.formUtils.isLoadingModules) return setTimeout(function () {
                                    d.trigger("submit.validation")
                                }, 200), e();
                                var f = d.isValid(b.language, b);
                                if (a.formUtils.haltValidation) return e();
                                if (!f || "function" != typeof b.onSuccess) return f || "function" != typeof b.onError ? f ? !0 : e() : (b.onError(d), e());
                                var g = b.onSuccess(d);
                                return g === !1 ? e() : void 0
                            }).bind("reset.validation", function () {
                                a.formUtils.dialogs.removeAllMessagesAndStyling(e, b)
                            }).addClass("has-validation-callback"), b.showHelpOnFocus && e.showHelpOnFocus(), b.addSuggestions && e.addSuggestions(), b.validateOnBlur && (e.validateOnBlur(b.language, b), e.bind("html5ValidationAttrsFound", function () {
                                e.validateOnBlur(b.language, b)
                            })), b.validateOnEvent && e.validateOnEvent(b.language, b)
                        }), "" !== b.modules && a.formUtils.loadModules(b.modules, !1, function () {
                            "function" == typeof b.onModulesLoaded && b.onModulesLoaded();
                            var c = "string" == typeof b.form ? a(b.form) : b.form;
                            a.formUtils.$win.trigger("validatorsLoaded", [c, b])
                        })
                    }
                }(a),
                function (a, b) {
                    "use strict";
                    var c = a(b);
                    a.formUtils = a.extend(a.formUtils || {}, {
                        $win: c,
                        defaultConfig: function () {
                            return {
                                ignore: [],
                                errorElementClass: "error",
                                borderColorOnError: "#b94a48",
                                errorMessageClass: "form-error",
                                validationRuleAttribute: "data-validation",
                                validationErrorMsgAttribute: "data-validation-error-msg",
                                errorMessagePosition: "inline",
                                errorMessageTemplate: {
                                    container: '<div class="{errorMessageClass} alert alert-danger">{messages}</div>',
                                    messages: "<strong>{errorTitle}</strong><ul>{fields}</ul>",
                                    field: "<li>{msg}</li>"
                                },
                                scrollToTopOnError: !0,
                                dateFormat: "yyyy-mm-dd",
                                addValidClassOnAll: !1,
                                decimalSeparator: ".",
                                inputParentClassOnError: "ex-error",
                                inputParentClassOnSuccess: "ex-success",
                                validateHiddenInputs: !1,
                                inlineErrorMessageCallback: !1,
                                submitErrorMessageCallback: !1
                            }
                        },
                        validators: {},
                        _events: {
                            load: [],
                            valid: [],
                            invalid: []
                        },
                        haltValidation: !1,
                        isValidatingEntireForm: !1,
                        addValidator: function (a) {
                            var b = 0 === a.name.indexOf("validate_") ? a.name : "validate_" + a.name;
                            void 0 === a.validateOnKeyUp && (a.validateOnKeyUp = !0), this.validators[b] = a
                        },
                        warn: function (a) {
                            "console" in b ? "function" == typeof b.console.warn ? b.console.warn(a) : "function" == typeof b.console.log && b.console.log(a) : alert(a)
                        },
                        getValue: function (a, b) {
                            var c = b ? b.find(a) : a;
                            if (c.length > 0) {
                                var d = c.eq(0).attr("type");
                                return "radio" === d || "checkbox" === d ? c.filter(":checked").val() : c.val()
                            }
                            return !1
                        },
                        validateInput: function (b, c, d, e, f) {
                            d = d || a.formUtils.defaultConfig(), c = c || a.formUtils.LANG;
                            var g = this.getValue(b);
                            b.valAttr("skipped", !1).one("beforeValidation", function () {
                                (b.attr("disabled") || !b.is(":visible") && !d.validateHiddenInputs) && b.valAttr("skipped", 1)
                            }).trigger("beforeValidation", [g, d, c]);
                            var h = "true" === b.valAttr("optional"),
                                i = !g && h,
                                j = b.attr(d.validationRuleAttribute),
                                k = !0,
                                l = "",
                                m = {
                                    isValid: !0,
                                    shouldChangeDisplay: !0,
                                    errorMsg: ""
                                };
                            if (!j || i || b.valAttr("skipped")) return m.shouldChangeDisplay = d.addValidClassOnAll, m;
                            var n = b.valAttr("ignore");
                            return n && a.each(n.split(""), function (a, b) {
                                g = g.replace(new RegExp("\\" + b), "")
                            }), a.split(j, function (h) {
                                0 !== h.indexOf("validate_") && (h = "validate_" + h);
                                var i = a.formUtils.validators[h];
                                if (!i) throw new Error('Using undefined validator "' + h + '". Maybe you have forgotten to load the module that "' + h + '" belongs to?');
                                return "validate_checkbox_group" === h && (b = e.find('[name="' + b.attr("name") + '"]:eq(0)')), ("keyup" !== f || i.validateOnKeyUp) && (k = i.validatorFunction(g, b, d, c, e)), k ? void 0 : (l = a.formUtils.dialogs.resolveErrorMessage(b, i, h, d, c), !1)
                            }, " "), k === !1 ? (b.trigger("validation", !1), m.errorMsg = l, m.isValid = !1, m.shouldChangeDisplay = !0) : null === k ? m.shouldChangeDisplay = !1 : (b.trigger("validation", !0), m.shouldChangeDisplay = !0), "function" == typeof d.onElementValidate && null !== l && d.onElementValidate(m.isValid, b, e, l), b.trigger("afterValidation", [m, f]), m
                        },
                        parseDate: function (b, c, d) {
                            var e, f, g, h, i = c.replace(/[a-zA-Z]/gi, "").substring(0, 1),
                                j = "^",
                                k = c.split(i || null);
                            if (a.each(k, function (a, b) {
                                j += (a > 0 ? "\\" + i : "") + "(\\d{" + b.length + "})"
                            }), j += "$", d) {
                                var l = [];
                                a.each(b.split(i), function (a, b) {
                                    1 === b.length && (b = "0" + b), l.push(b)
                                }), b = l.join(i)
                            }
                            if (e = b.match(new RegExp(j)), null === e) return !1;
                            var m = function (b, c, d) {
                                for (var e = 0; e < c.length; e++)
                                    if (c[e].substring(0, 1) === b) return a.formUtils.parseDateInt(d[e + 1]);
                                return -1
                            };
                            return g = m("m", k, e), f = m("d", k, e), h = m("y", k, e), 2 === g && f > 28 && (h % 4 !== 0 || h % 100 === 0 && h % 400 !== 0) || 2 === g && f > 29 && (h % 4 === 0 || h % 100 !== 0 && h % 400 === 0) || g > 12 || 0 === g ? !1 : this.isShortMonth(g) && f > 30 || !this.isShortMonth(g) && f > 31 || 0 === f ? !1 : [h, g, f]
                        },
                        parseDateInt: function (a) {
                            return 0 === a.indexOf("0") && (a = a.replace("0", "")), parseInt(a, 10)
                        },
                        isShortMonth: function (a) {
                            return a % 2 === 0 && 7 > a || a % 2 !== 0 && a > 7
                        },
                        lengthRestriction: function (b, c) {
                            var d = parseInt(c.text(), 10),
                                e = 0,
                                f = function () {
                                    var a = b.val().length;
                                    if (a > d) {
                                        var f = b.scrollTop();
                                        b.val(b.val().substring(0, d)), b.scrollTop(f)
                                    }
                                    e = d - a, 0 > e && (e = 0), c.text(e)
                                };
                            a(b).bind("keydown keyup keypress focus blur", f).bind("cut paste", function () {
                                setTimeout(f, 100)
                            }), a(document).bind("ready", f)
                        },
                        numericRangeCheck: function (b, c) {
                            var d = a.split(c),
                                e = parseInt(c.substr(3), 10);
                            return 1 === d.length && -1 === c.indexOf("min") && -1 === c.indexOf("max") && (d = [c, c]), 2 === d.length && (b < parseInt(d[0], 10) || b > parseInt(d[1], 10)) ? ["out", d[0], d[1]] : 0 === c.indexOf("min") && e > b ? ["min", e] : 0 === c.indexOf("max") && b > e ? ["max", e] : ["ok"]
                        },
                        _numSuggestionElements: 0,
                        _selectedSuggestion: null,
                        _previousTypedVal: null,
                        suggest: function (b, d, e) {
                            var f = {
                                    css: {
                                        maxHeight: "150px",
                                        background: "#FFF",
                                        lineHeight: "150%",
                                        textDecoration: "underline",
                                        overflowX: "hidden",
                                        overflowY: "auto",
                                        border: "#CCC solid 1px",
                                        borderTop: "none",
                                        cursor: "pointer"
                                    },
                                    activeSuggestionCSS: {
                                        background: "#E9E9E9"
                                    }
                                },
                                g = function (a, b) {
                                    var c = b.offset();
                                    a.css({
                                        width: b.outerWidth(),
                                        left: c.left + "px",
                                        top: c.top + b.outerHeight() + "px"
                                    })
                                };
                            e && a.extend(f, e), f.css.position = "absolute", f.css["z-index"] = 9999, b.attr("autocomplete", "on"), 0 === this._numSuggestionElements && c.bind("resize", function () {
                                a(".jquery-form-suggestions").each(function () {
                                    var b = a(this),
                                        c = b.attr("data-suggest-container");
                                    g(b, a(".suggestions-" + c).eq(0))
                                })
                            }), this._numSuggestionElements++;
                            var h = function (b) {
                                var c = b.valAttr("suggestion-nr");
                                a.formUtils._selectedSuggestion = null, a.formUtils._previousTypedVal = null, a(".jquery-form-suggestion-" + c).fadeOut("fast")
                            };
                            return b.data("suggestions", d).valAttr("suggestion-nr", this._numSuggestionElements).unbind("focus.suggest").bind("focus.suggest", function () {
                                a(this).trigger("keyup"), a.formUtils._selectedSuggestion = null
                            }).unbind("keyup.suggest").bind("keyup.suggest", function () {
                                var c = a(this),
                                    d = [],
                                    e = a.trim(c.val()).toLocaleLowerCase();
                                if (e !== a.formUtils._previousTypedVal) {
                                    a.formUtils._previousTypedVal = e;
                                    var i = !1,
                                        j = c.valAttr("suggestion-nr"),
                                        k = a(".jquery-form-suggestion-" + j);
                                    if (k.scrollTop(0), "" !== e) {
                                        var l = e.length > 2;
                                        a.each(c.data("suggestions"), function (a, b) {
                                            var c = b.toLocaleLowerCase();
                                            return c === e ? (d.push("<strong>" + b + "</strong>"), i = !0, !1) : void ((0 === c.indexOf(e) || l && c.indexOf(e) > -1) && d.push(b.replace(new RegExp(e, "gi"), "<strong>$&</strong>")))
                                        })
                                    }
                                    i || 0 === d.length && k.length > 0 ? k.hide() : d.length > 0 && 0 === k.length ? (k = a("<div></div>").css(f.css).appendTo("body"), b.addClass("suggestions-" + j), k.attr("data-suggest-container", j).addClass("jquery-form-suggestions").addClass("jquery-form-suggestion-" + j)) : d.length > 0 && !k.is(":visible") && k.show(), d.length > 0 && e.length !== d[0].length && (g(k, c), k.html(""), a.each(d, function (b, d) {
                                        a("<div></div>").append(d).css({
                                            overflow: "hidden",
                                            textOverflow: "ellipsis",
                                            whiteSpace: "nowrap",
                                            padding: "5px"
                                        }).addClass("form-suggest-element").appendTo(k).click(function () {
                                            c.focus(), c.val(a(this).text()), c.trigger("change"), h(c)
                                        })
                                    }))
                                }
                            }).unbind("keydown.validation").bind("keydown.validation", function (b) {
                                var c, d, e = b.keyCode ? b.keyCode : b.which,
                                    g = a(this);
                                if (13 === e && null !== a.formUtils._selectedSuggestion) {
                                    if (c = g.valAttr("suggestion-nr"), d = a(".jquery-form-suggestion-" + c), d.length > 0) {
                                        var i = d.find("div").eq(a.formUtils._selectedSuggestion).text();
                                        g.val(i), g.trigger("change"), h(g), b.preventDefault()
                                    }
                                } else {
                                    c = g.valAttr("suggestion-nr"), d = a(".jquery-form-suggestion-" + c);
                                    var j = d.children();
                                    if (j.length > 0 && a.inArray(e, [38, 40]) > -1) {
                                        38 === e ? (null === a.formUtils._selectedSuggestion ? a.formUtils._selectedSuggestion = j.length - 1 : a.formUtils._selectedSuggestion--, a.formUtils._selectedSuggestion < 0 && (a.formUtils._selectedSuggestion = j.length - 1)) : 40 === e && (null === a.formUtils._selectedSuggestion ? a.formUtils._selectedSuggestion = 0 : a.formUtils._selectedSuggestion++, a.formUtils._selectedSuggestion > j.length - 1 && (a.formUtils._selectedSuggestion = 0));
                                        var k = d.innerHeight(),
                                            l = d.scrollTop(),
                                            m = d.children().eq(0).outerHeight(),
                                            n = m * a.formUtils._selectedSuggestion;
                                        return (l > n || n > l + k) && d.scrollTop(n), j.removeClass("active-suggestion").css("background", "none").eq(a.formUtils._selectedSuggestion).addClass("active-suggestion").css(f.activeSuggestionCSS), b.preventDefault(), !1
                                    }
                                }
                            }).unbind("blur.suggest").bind("blur.suggest", function () {
                                h(a(this))
                            }), b
                        },
                        LANG: {
                            errorTitle: "Form submission failed!",
                            requiredField: "This is a required field",
                            requiredFields: "You have not answered all required fields",
                            badTime: "You have not given a correct time",
                            badEmail: "You have not given a correct e-mail address",
                            badTelephone: "You have not given a correct phone number",
                            badSecurityAnswer: "You have not given a correct answer to the security question",
                            badDate: "You have not given a correct date",
                            lengthBadStart: "The input value must be between ",
                            lengthBadEnd: " characters",
                            lengthTooLongStart: "The input value is longer than ",
                            lengthTooShortStart: "The input value is shorter than ",
                            notConfirmed: "Input values could not be confirmed",
                            badDomain: "Incorrect domain value",
                            badUrl: "The input value is not a correct URL",
                            badCustomVal: "The input value is incorrect",
                            andSpaces: " and spaces ",
                            badInt: "The input value was not a correct number",
                            badSecurityNumber: "Your social security number was incorrect",
                            badUKVatAnswer: "Incorrect UK VAT Number",
                            badUKNin: "Incorrect UK NIN",
                            badUKUtr: "Incorrect UK UTR Number",
                            badStrength: "The password isn't strong enough",
                            badNumberOfSelectedOptionsStart: "You have to choose at least ",
                            badNumberOfSelectedOptionsEnd: " answers",
                            badAlphaNumeric: "The input value can only contain alphanumeric characters ",
                            badAlphaNumericExtra: " and ",
                            wrongFileSize: "The file you are trying to upload is too large (max %s)",
                            wrongFileType: "Only files of type %s is allowed",
                            groupCheckedRangeStart: "Please choose between ",
                            groupCheckedTooFewStart: "Please choose at least ",
                            groupCheckedTooManyStart: "Please choose a maximum of ",
                            groupCheckedEnd: " item(s)",
                            badCreditCard: "The credit card number is not correct",
                            badCVV: "The CVV number was not correct",
                            wrongFileDim: "Incorrect image dimensions,",
                            imageTooTall: "the image can not be taller than",
                            imageTooWide: "the image can not be wider than",
                            imageTooSmall: "the image was too small",
                            min: "min",
                            max: "max",
                            imageRatioNotAccepted: "Image ratio is not be accepted",
                            badBrazilTelephoneAnswer: "The phone number entered is invalid",
                            badBrazilCEPAnswer: "The CEP entered is invalid",
                            badBrazilCPFAnswer: "The CPF entered is invalid",
                            badPlPesel: "The PESEL entered is invalid",
                            badPlNip: "The NIP entered is invalid",
                            badPlRegon: "The REGON entered is invalid",
                            badreCaptcha: "Please confirm that you are not a bot"
                        }
                    })
                }(a, window),
                function (a) {
                    a.formUtils.addValidator({
                        name: "email",
                        validatorFunction: function (b) {
                            var c = b.toLowerCase().split("@"),
                                d = c[0],
                                e = c[1];
                            if (d && e) {
                                if (0 === d.indexOf('"')) {
                                    var f = d.length;
                                    if (d = d.replace(/\"/g, ""), d.length !== f - 2) return !1
                                }
                                return a.formUtils.validators.validate_domain.validatorFunction(c[1]) && 0 !== d.indexOf(".") && "." !== d.substring(d.length - 1, d.length) && -1 === d.indexOf("..") && !/[^\w\+\.\-\#\-\_\~\!\$\&\'\(\)\*\+\,\;\=\:]/.test(d)
                            }
                            return !1
                        },
                        errorMessage: "",
                        errorMessageKey: "badEmail"
                    }), a.formUtils.addValidator({
                        name: "domain",
                        validatorFunction: function (a) {
                            return a.length > 0 && a.length <= 253 && !/[^a-zA-Z0-9]/.test(a.slice(-2)) && !/[^a-zA-Z0-9]/.test(a.substr(0, 1)) && !/[^a-zA-Z0-9\.\-]/.test(a) && 1 === a.split("..").length && a.split(".").length > 1
                        },
                        errorMessage: "",
                        errorMessageKey: "badDomain"
                    }), a.formUtils.addValidator({
                        name: "required",
                        validatorFunction: function (b, c, d, e, f) {
                            switch (c.attr("type")) {
                                case "checkbox":
                                    return c.is(":checked");
                                case "radio":
                                    return f.find('input[name="' + c.attr("name") + '"]').filter(":checked").length > 0;
                                default:
                                    return "" !== a.trim(b)
                            }
                        },
                        errorMessage: "",
                        errorMessageKey: function (a) {
                            return "top" === a.errorMessagePosition || "function" == typeof a.errorMessagePosition ? "requiredFields" : "requiredField"
                        }
                    }), a.formUtils.addValidator({
                        name: "length",
                        validatorFunction: function (b, c, d, e) {
                            var f = c.valAttr("length"),
                                g = c.attr("type");
                            if (void 0 === f) return alert('Please add attribute "data-validation-length" to ' + c[0].nodeName + " named " + c.attr("name")), !0;
                            var h, i = "file" === g && void 0 !== c.get(0).files ? c.get(0).files.length : b.length,
                                j = a.formUtils.numericRangeCheck(i, f);
                            switch (j[0]) {
                                case "out":
                                    this.errorMessage = e.lengthBadStart + f + e.lengthBadEnd, h = !1;
                                    break;
                                case "min":
                                    this.errorMessage = e.lengthTooShortStart + j[1] + e.lengthBadEnd, h = !1;
                                    break;
                                case "max":
                                    this.errorMessage = e.lengthTooLongStart + j[1] + e.lengthBadEnd, h = !1;
                                    break;
                                default:
                                    h = !0
                            }
                            return h
                        },
                        errorMessage: "",
                        errorMessageKey: ""
                    }), a.formUtils.addValidator({
                        name: "url",
                        validatorFunction: function (b) {
                            var c = /^(https?|ftp):\/\/((((\w|-|\.|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])(\w|-|\.|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])(\w|-|\.|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/(((\w|-|\.|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/((\w|-|\.|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|\[|\]|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#(((\w|-|\.|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i;
                            if (c.test(b)) {
                                var d = b.split("://")[1],
                                    e = d.indexOf("/");
                                return e > -1 && (d = d.substr(0, e)), a.formUtils.validators.validate_domain.validatorFunction(d)
                            }
                            return !1
                        },
                        errorMessage: "",
                        errorMessageKey: "badUrl"
                    }), a.formUtils.addValidator({
                        name: "number",
                        validatorFunction: function (a, b, c) {
                            if ("" !== a) {
                                var d, e, f = b.valAttr("allowing") || "",
                                    g = b.valAttr("decimal-separator") || c.decimalSeparator,
                                    h = !1,
                                    i = b.valAttr("step") || "",
                                    j = !1,
                                    k = b.attr("data-sanitize") || "",
                                    l = k.match(/(^|[\s])numberFormat([\s]|$)/i);
                                if (l) {
                                    if (!window.numeral) throw new ReferenceError("The data-sanitize value numberFormat cannot be used without the numeral library. Please see Data Validation in http://www.formvalidator.net for more information.");
                                    a.length && (a = String(numeral().unformat(a)))
                                }
                                if (-1 === f.indexOf("number") && (f += ",number"), -1 === f.indexOf("negative") && 0 === a.indexOf("-")) return !1;
                                if (f.indexOf("range") > -1 && (d = parseFloat(f.substring(f.indexOf("[") + 1, f.indexOf(";"))), e = parseFloat(f.substring(f.indexOf(";") + 1, f.indexOf("]"))), h = !0), "" !== i && (j = !0), "," === g) {
                                    if (a.indexOf(".") > -1) return !1;
                                    a = a.replace(",", ".")
                                }
                                if ("" === a.replace(/[0-9-]/g, "") && (!h || a >= d && e >= a) && (!j || a % i === 0)) return !0;
                                if (f.indexOf("float") > -1 && null !== a.match(new RegExp("^([0-9-]+)\\.([0-9]+)$")) && (!h || a >= d && e >= a) && (!j || a % i === 0)) return !0
                            }
                            return !1
                        },
                        errorMessage: "",
                        errorMessageKey: "badInt"
                    }), a.formUtils.addValidator({
                        name: "alphanumeric",
                        validatorFunction: function (b, c, d, e) {
                            var f = "^([a-zA-Z0-9",
                                g = "]+)$",
                                h = c.valAttr("allowing"),
                                i = "";
                            if (h) {
                                i = f + h + g;
                                var j = h.replace(/\\/g, "");
                                j.indexOf(" ") > -1 && (j = j.replace(" ", ""), j += e.andSpaces || a.formUtils.LANG.andSpaces), this.errorMessage = e.badAlphaNumeric + e.badAlphaNumericExtra + j
                            } else i = f + g, this.errorMessage = e.badAlphaNumeric;
                            return new RegExp(i).test(b)
                        },
                        errorMessage: "",
                        errorMessageKey: ""
                    }), a.formUtils.addValidator({
                        name: "custom",
                        validatorFunction: function (a, b) {
                            var c = new RegExp(b.valAttr("regexp"));
                            return c.test(a)
                        },
                        errorMessage: "",
                        errorMessageKey: "badCustomVal"
                    }), a.formUtils.addValidator({
                        name: "date",
                        validatorFunction: function (b, c, d) {
                            var e = c.valAttr("format") || d.dateFormat || "yyyy-mm-dd",
                                f = "false" === c.valAttr("require-leading-zero");
                            return a.formUtils.parseDate(b, e, f) !== !1
                        },
                        errorMessage: "",
                        errorMessageKey: "badDate"
                    }), a.formUtils.addValidator({
                        name: "checkbox_group",
                        validatorFunction: function (b, c, d, e, f) {
                            var g = !0,
                                h = c.attr("name"),
                                i = a('input[type=checkbox][name^="' + h + '"]', f),
                                j = i.filter(":checked").length,
                                k = c.valAttr("qty");
                            if (void 0 === k) {
                                var l = c.get(0).nodeName;
                                alert('Attribute "data-validation-qty" is missing from ' + l + " named " + c.attr("name"))
                            }
                            var m = a.formUtils.numericRangeCheck(j, k);
                            switch (m[0]) {
                                case "out":
                                    this.errorMessage = e.groupCheckedRangeStart + k + e.groupCheckedEnd, g = !1;
                                    break;
                                case "min":
                                    this.errorMessage = e.groupCheckedTooFewStart + m[1] + e.groupCheckedEnd, g = !1;
                                    break;
                                case "max":
                                    this.errorMessage = e.groupCheckedTooManyStart + m[1] + e.groupCheckedEnd, g = !1;
                                    break;
                                default:
                                    g = !0
                            }
                            if (!g) {
                                var n = function () {
                                    i.unbind("click", n), i.filter("*[data-validation]").validateInputOnBlur(e, d, !1, "blur")
                                };
                                i.bind("click", n)
                            }
                            return g
                        }
                    })
                }(a)
        });
        !function (a) {
            "use strict";
            "function" == typeof define && define.amd ? define(["jquery"], a) : a(jQuery)
        }(function (a) {
            "use strict";

            function b(b, c) {
                var d = this;
                d.element = b, d.el = a(b), d.suggestions = [], d.badQueries = [], d.selectedIndex = -1, d.currentValue = d.element.value, d.intervalId = 0, d.cachedResponse = {}, d.enrichmentCache = {}, d.currentRequest = null, d.inputPhase = a.Deferred(), d.fetchPhase = a.Deferred(), d.enrichPhase = a.Deferred(), d.onChangeTimeout = null, d.triggering = {}, d.$wrapper = null, d.options = a.extend({}, k, c), d.classes = {
                    hint: "suggestions-hint",
                    mobile: "suggestions-mobile",
                    nowrap: "suggestions-nowrap",
                    selected: "suggestions-selected",
                    suggestion: "suggestions-suggestion",
                    subtext: "suggestions-subtext",
                    subtext_inline: "suggestions-subtext suggestions-subtext_inline",
                    subtext_delimiter: "suggestions-subtext-delimiter",
                    subtext_label: "suggestions-subtext suggestions-subtext_label",
                    removeConstraint: "suggestions-remove",
                    value: "suggestions-value"
                }, d.disabled = !1, d.selection = null, d.$viewport = a(window), d.$body = a(document.body), d.type = null, d.status = {}, d.setupElement(), d.initializer = a.Deferred(), d.el.is(":visible") ? d.initializer.resolve() : d.deferInitialization(), d.initializer.done(a.proxy(d.initialize, d))
            }

            var c = {ENTER: 13, ESC: 27, TAB: 9, SPACE: 32, UP: 38, DOWN: 40}, d = {}, e = ".suggestions",
                f = "suggestions", g = "\\s\"'~\\*\\.,:\\|\\[\\]\\(\\)\\{\\}<>№", h = new RegExp("[" + g + "]+", "g"),
                i = "\\-\\+\\/\\\\\\?!@#$%^&", j = new RegExp("[" + i + "]+", "g"), k = {
                    autoSelectFirst: !1,
                    serviceUrl: null,
                    onSearchStart: a.noop,
                    onSearchComplete: a.noop,
                    onSearchError: a.noop,
                    onSuggestionsFetch: null,
                    onSelect: null,
                    onSelectNothing: null,
                    onInvalidateSelection: null,
                    minChars: 1,
                    deferRequestBy: 100,
                    params: {},
                    paramName: "query",
                    timeout: 3e3,
                    formatResult: null,
                    formatSelected: null,
                    noCache: !1,
                    containerClass: "suggestions-suggestions",
                    tabDisabled: !1,
                    triggerSelectOnSpace: !1,
                    triggerSelectOnEnter: !0,
                    triggerSelectOnBlur: !0,
                    preventBadQueries: !1,
                    hint: "Выберите вариант или продолжите ввод",
                    type: null,
                    requestMode: "suggest",
                    count: 5,
                    $helpers: null,
                    headers: null,
                    scrollOnFocus: !0,
                    mobileWidth: 980,
                    initializeInterval: 100
                }, l = {
                    chains: {}, on: function (a, b) {
                        return this.get(a).push(b), this
                    }, get: function (a) {
                        var b = this.chains;
                        return b[a] || (b[a] = [])
                    }
                }, m = function () {
                    var b = 0;
                    return {
                        escapeRegExChars: function (a) {
                            return a.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&")
                        }, escapeHtml: function (b) {
                            var c = {"&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#x27;", "/": "&#x2F;"};
                            return b && a.each(c, function (a, c) {
                                b = b.replace(new RegExp(a, "g"), c)
                            }), b
                        }, getDefaultType: function () {
                            return a.support.cors ? "POST" : "GET"
                        }, getDefaultContentType: function () {
                            return a.support.cors ? "application/json" : "application/x-www-form-urlencoded"
                        }, fixURLProtocol: function (b) {
                            return a.support.cors ? b : b.replace(/^https?:/, location.protocol)
                        }, addUrlParams: function (b, c) {
                            return b + (/\?/.test(b) ? "&" : "?") + a.param(c)
                        }, serialize: function (b) {
                            return a.support.cors ? JSON.stringify(b, function (a, b) {
                                return null === b ? void 0 : b
                            }) : a.param(b, !0)
                        }, compact: function (b) {
                            return a.grep(b, function (a) {
                                return !!a
                            })
                        }, delay: function (a, b) {
                            return setTimeout(a, b || 0)
                        }, uniqueId: function (a) {
                            return (a || "") + ++b
                        }, slice: function (a, b) {
                            return Array.prototype.slice.call(a, b)
                        }, indexBy: function (b, c, d) {
                            var e = {};
                            return a.each(b, function (b, f) {
                                var g = f[c], h = {};
                                d && (h[d] = b), e[g] = a.extend(!0, h, f)
                            }), e
                        }, areSame: function c(b, d) {
                            var e = !0;
                            return typeof b != typeof d ? !1 : "object" == typeof b && null != b && null != d ? (a.each(b, function (a, b) {
                                return e = c(b, d[a])
                            }), e) : b === d
                        }, arrayMinus: function (b, c) {
                            return c ? a.grep(b, function (b, d) {
                                return -1 === a.inArray(b, c)
                            }) : b
                        }, arrayMinusWithPartialMatching: function (b, c) {
                            return c ? a.grep(b, function (a, b) {
                                return !c.some(function (b) {
                                    return 0 === b.indexOf(a)
                                })
                            }) : b
                        }, getWords: function (a, b) {
                            a = a.replace(/(\d+)([а-яА-ЯёЁ]{2,})/g, "$1 $2").replace(/([а-яА-ЯёЁ]+)(\d+)/g, "$1 $2");
                            var c = this.compact(a.split(h)), d = c.pop(), e = this.arrayMinus(c, b);
                            return e.push(d), e
                        }, normalize: function (a, b) {
                            var c = this;
                            return c.getWords(a, b).join(" ")
                        }, stringEncloses: function (a, b) {
                            return a.length > b.length && -1 !== a.indexOf(b)
                        }, fieldsNotEmpty: function (b, c) {
                            if (!a.isPlainObject(b)) return !1;
                            var d = !0;
                            return a.each(c, function (a, c) {
                                return d = !!b[c]
                            }), d
                        }, getDeepValue: function d(a, b) {
                            var c = b.split("."), e = c.shift();
                            return a && (c.length ? d(a[e], c.join(".")) : a[e])
                        }, reWordExtractor: function () {
                            return new RegExp("([^" + g + "]*)([" + g + "]*)", "g")
                        }, formatToken: function (a) {
                            return a && a.toLowerCase().replace(/[ёЁ]/g, "е")
                        }, withSubTokens: function (b) {
                            var c = [];
                            return a.each(b, function (a, b) {
                                var d = b.split(j);
                                c.push(b), d.length > 1 && (c = c.concat(m.compact(d)))
                            }), c
                        }
                    }
                }(), n = function () {
                    function b(b) {
                        return function (c) {
                            if (0 === c.length) return !1;
                            if (1 === c.length) return !0;
                            var d = b(c[0].value), e = a.grep(c, function (a) {
                                return 0 === b(a.value).indexOf(d)
                            }, !0);
                            return 0 === e.length
                        }
                    }

                    var c = b(function (a) {
                        return a
                    }), d = b(function (a) {
                        return a.replace(/, (?:д|вл|двлд|к) .+$/, "")
                    });
                    return {
                        matchByNormalizedQuery: function (b, c) {
                            var d = b.toLowerCase(), e = this && this.stopwords, f = m.normalize(d, e), g = [];
                            return a.each(c, function (a, b) {
                                var c = b.value.toLowerCase();
                                return m.stringEncloses(d, c) ? !1 : c.indexOf(f) > 0 ? !1 : void (f === m.normalize(c, e) && g.push(a))
                            }), 1 === g.length ? g[0] : -1
                        }, matchByWords: function (b, d) {
                            var e, f = this && this.stopwords, g = b.toLowerCase(), h = [];
                            return c(d) && (e = m.withSubTokens(m.getWords(g, f)), a.each(d, function (a, b) {
                                var c = b.value.toLowerCase();
                                if (m.stringEncloses(g, c)) return !1;
                                var d = m.withSubTokens(m.getWords(c, f));
                                0 === m.arrayMinus(e, d).length && h.push(a)
                            })), 1 === h.length ? h[0] : -1
                        }, matchByWordsAddress: function (b, c) {
                            var e, f = this && this.stopwords, g = b.toLowerCase(), h = -1;
                            return d(c) && (e = m.withSubTokens(m.getWords(g, f)), a.each(c, function (a, b) {
                                var c = b.value.toLowerCase();
                                if (m.stringEncloses(g, c)) return !1;
                                var d = m.withSubTokens(m.getWords(c, f));
                                return 0 === m.arrayMinus(e, d).length ? (h = a, !1) : void 0
                            })), h
                        }, matchByFields: function (b, c) {
                            var d = this && this.stopwords, e = this && this.fieldsStopwords,
                                f = m.withSubTokens(m.getWords(b.toLowerCase(), d)), g = [];
                            return 1 === c.length && (e && a.each(e, function (a, b) {
                                var d = m.getDeepValue(c[0], a), e = d && m.withSubTokens(m.getWords(d.toLowerCase(), b));
                                e && e.length && (g = g.concat(e))
                            }), 0 === m.arrayMinusWithPartialMatching(f, g).length) ? 0 : -1
                        }
                    }
                }();
            !function () {
                function b(a, b) {
                    var c = a.data && a.data[b];
                    return c && new RegExp("^" + m.escapeRegExChars(c) + "([" + g + "]|$)", "i").test(a.value)
                }

                function c(a, b) {
                    return i.test(b) && !i.test(a) ? b : a
                }

                function e(a, b, d, e, f) {
                    var g = this, h = g.highlightMatches(a, d, e, f), i = g.highlightMatches(b, d, e, f);
                    return c(h, i)
                }

                var f = ["ао", "аобл", "дом", "респ", "а/я", "аал", "автодорога", "аллея", "арбан", "аул", "б-р", "берег", "бугор", "вал", "вл", "волость", "въезд", "высел", "г", "городок", "гск", "д", "двлд", "днп", "дор", "дп", "ж/д_будка", "ж/д_казарм", "ж/д_оп", "ж/д_платф", "ж/д_пост", "ж/д_рзд", "ж/д_ст", "жилзона", "жилрайон", "жт", "заезд", "заимка", "зона", "к", "казарма", "канал", "кв", "кв-л", "км", "кольцо", "комн", "кордон", "коса", "кп", "край", "линия", "лпх", "м", "массив", "местность", "мкр", "мост", "н/п", "наб", "нп", "обл", "округ", "остров", "оф", "п", "п/о", "п/р", "п/ст", "парк", "пгт", "пер", "переезд", "пл", "пл-ка", "платф", "погост", "полустанок", "починок", "пр-кт", "проезд", "промзона", "просек", "просека", "проселок", "проток", "протока", "проулок", "р-н", "рзд", "россия", "рп", "ряды", "с", "с/а", "с/мо", "с/о", "с/п", "с/с", "сад", "сквер", "сл", "снт", "спуск", "ст", "ст-ца", "стр", "тер", "тракт", "туп", "у", "ул", "уч-к", "ф/х", "ферма", "х", "ш", "бульвар", "владение", "выселки", "гаражно-строительный", "город", "деревня", "домовладение", "дорога", "квартал", "километр", "комната", "корпус", "литер", "леспромхоз", "местечко", "микрорайон", "набережная", "область", "переулок", "платформа", "площадка", "площадь", "поселение", "поселок", "проспект", "разъезд", "район", "республика", "село", "сельсовет", "слобода", "сооружение", "станица", "станция", "строение", "территория", "тупик", "улица", "улус", "участок", "хутор", "шоссе"],
                    h = [{id: "kladr_id", fields: ["kladr_id"], forBounds: !1, forLocations: !0}, {
                        id: "postal_code",
                        fields: ["postal_code"],
                        forBounds: !1,
                        forLocations: !0
                    }, {id: "country", fields: ["country"], forBounds: !1, forLocations: !0}, {
                        id: "region",
                        fields: ["region", "region_type", "region_type_full", "region_with_type"],
                        forBounds: !0,
                        forLocations: !0,
                        kladrFormat: {digits: 2, zeros: 11}
                    }, {
                        id: "area",
                        fields: ["area", "area_type", "area_type_full", "area_with_type"],
                        forBounds: !0,
                        forLocations: !0,
                        kladrFormat: {digits: 5, zeros: 8}
                    }, {
                        id: "city",
                        fields: ["city", "city_type", "city_type_full", "city_with_type"],
                        forBounds: !0,
                        forLocations: !0,
                        kladrFormat: {digits: 8, zeros: 5}
                    }, {
                        id: "city_district",
                        fields: ["city_district", "city_district_type", "city_district_type_full", "city_district_with_type"],
                        forBounds: !1,
                        forLocations: !1
                    }, {
                        id: "settlement",
                        fields: ["settlement", "settlement_type", "settlement_type_full", "settlement_with_type"],
                        forBounds: !0,
                        forLocations: !0,
                        kladrFormat: {digits: 11, zeros: 2}
                    }, {
                        id: "street",
                        fields: ["street", "street_type", "street_type_full", "street_with_type"],
                        forBounds: !0,
                        forLocations: !0,
                        kladrFormat: {digits: 15, zeros: 2}
                    }, {
                        id: "house",
                        fields: ["house", "house_type", "house_type_full", "block", "block_type"],
                        forBounds: !0,
                        forLocations: !1,
                        kladrFormat: {digits: 19}
                    }], i = /<strong>/, j = {LEGAL: [2, 2, 5, 1], INDIVIDUAL: [2, 2, 6, 2]};
                d.NAME = {
                    urlSuffix: "fio",
                    matchers: [n.matchByNormalizedQuery, n.matchByWords],
                    fieldNames: {surname: "фамилия", name: "имя", patronymic: "отчество"},
                    alwaysContinueSelecting: !0,
                    isDataComplete: function (c) {
                        var d, e = this, f = e.options.params, g = c.data;
                        return a.isFunction(f) && (f = f.call(e.element, c.value)), f && f.parts ? d = a.map(f.parts, function (a) {
                            return a.toLowerCase()
                        }) : (d = ["surname", "name"], b(c, "surname") && d.push("patronymic")), m.fieldsNotEmpty(g, d)
                    },
                    composeValue: function (a) {
                        return m.compact([a.surname, a.name, a.patronymic]).join(" ")
                    }
                }, d.ADDRESS = {
                    urlSuffix: "address",
                    matchers: [a.proxy(n.matchByNormalizedQuery, {stopwords: f}), a.proxy(n.matchByWordsAddress, {stopwords: f})],
                    dataComponents: h,
                    dataComponentsById: m.indexBy(h, "id", "index"),
                    unformattableTokens: f,
                    enrichmentEnabled: !0,
                    geoEnabled: !0,
                    isDataComplete: function (b) {
                        var c = [this.bounds.to || "flat"], d = b.data;
                        return !a.isPlainObject(d) || m.fieldsNotEmpty(d, c)
                    },
                    composeValue: function (b, c) {
                        return m.compact([b.region_with_type || m.compact([b.region, b.region_type]).join(" "), b.area_with_type || m.compact([b.area_type, b.area]).join(" "), b.city_with_type || m.compact([b.city_type, b.city]).join(" "), a.inArray("city_district", c) >= 0 && (b.city_district_with_type || m.compact([b.city_district_type, b.city_district]).join(" ")), b.settlement_with_type || m.compact([b.settlement_type, b.settlement]).join(" "), b.street_with_type || m.compact([b.street_type, b.street]).join(" "), m.compact([b.house_type, b.house, b.block_type, b.block]).join(" "), m.compact([b.flat_type, b.flat]).join(" "), b.postal_box && "а/я " + b.postal_box]).join(", ")
                    },
                    formatResult: function () {
                        var b = [], c = !1;
                        return a.each(h, function () {
                            c && b.push(this.id), "city_district" === this.id && (c = !0)
                        }), function (c, d, e, f) {
                            var g = this, h = e.data && e.data.city_district_with_type;
                            return c = g.highlightMatches(c, d, e, f), c = g.wrapFormattedValue(c, e), h && (!g.bounds.own.length || g.bounds.own.indexOf("street") >= 0) && !a.isEmptyObject(g.copyDataComponents(e.data, b)) && (c += '<div class="' + g.classes.subtext + '">' + g.highlightMatches(h, d, e) + "</div>"), c
                        }
                    }()
                }, d.PARTY = {
                    urlSuffix: "party",
                    matchers: [a.proxy(n.matchByFields, {
                        fieldsStopwords: {
                            value: null,
                            "data.address.value": f,
                            "data.inn": null,
                            "data.ogrn": null
                        }
                    })],
                    dataComponents: h,
                    geoEnabled: !0,
                    formatResult: function (a, b, d, h) {
                        var i = this, j = i.type.formatResultInn.call(i, d, b),
                            k = i.highlightMatches(m.getDeepValue(d.data, "ogrn"), b, d), l = c(j, k),
                            n = i.highlightMatches(m.getDeepValue(d.data, "management.name"), b, d),
                            o = m.getDeepValue(d.data, "address.value") || "";
                        return i.isMobile && ((h || (h = {})).maxLength = 50), a = e.call(i, a, m.getDeepValue(d.data, "name.latin"), b, d, h), a = i.wrapFormattedValue(a, d), o && (o = o.replace(/^(\d{6}?\s+|Россия,\s+)/i, ""), o = i.isMobile ? o.replace(new RegExp("^([^" + g + "]+[" + g + "]+[^" + g + "]+).*"), "$1") : i.highlightMatches(o, b, d, {unformattableTokens: f})), (l || o || n) && (a += '<div class="' + i.classes.subtext + '"><span class="' + i.classes.subtext_inline + '">' + (l || "") + "</span>" + (c(o, n) || "") + "</div>"), a
                    },
                    formatResultInn: function (b, c) {
                        var d, e, f = this, g = b.data && b.data.inn, h = j[b.data && b.data.type], i = /\d/;
                        return g ? (e = f.highlightMatches(g, c, b), h && (e = e.split(""), d = a.map(h, function (a) {
                            for (var b, c = ""; a && (b = e.shift());) c += b, i.test(b) && a--;
                            return c
                        }), e = d.join('<span class="' + f.classes.subtext_delimiter + '"></span>') + e.join("")), e) : void 0
                    }
                }, d.EMAIL = {
                    urlSuffix: "email",
                    matchers: [n.matchByNormalizedQuery],
                    isQueryRequestable: function (a) {
                        return this.options.suggest_local || a.indexOf("@") >= 0
                    }
                }, d.BANK = {
                    urlSuffix: "bank",
                    matchers: [a.proxy(n.matchByFields, {
                        fieldsStopwords: {
                            value: null,
                            "data.bic": null,
                            "data.swift": null
                        }
                    })],
                    formatResult: function (a, b, c, d) {
                        var e = this, h = e.highlightMatches(m.getDeepValue(c.data, "bic"), b, c),
                            i = m.getDeepValue(c.data, "address.value") || "";
                        return a = e.highlightMatches(a, b, c, d), a = e.wrapFormattedValue(a, c), i && (i = i.replace(/^\d{6}( РОССИЯ)?, /i, ""), i = e.isMobile ? i.replace(new RegExp("^([^" + g + "]+[" + g + "]+[^" + g + "]+).*"), "$1") : e.highlightMatches(i, b, c, {unformattableTokens: f})), (h || i) && (a += '<div class="' + e.classes.subtext + '"><span class="' + e.classes.subtext_inline + '">' + h + "</span>" + i + "</div>"), a
                    },
                    formatSelected: function (a) {
                        return m.getDeepValue(a, "data.name.payment")
                    }
                }, a.extend(k, {suggest_local: !0})
            }();
            var o = {
                suggest: {
                    defaultParams: {
                        type: m.getDefaultType(),
                        dataType: "json",
                        contentType: m.getDefaultContentType()
                    }, addTypeInUrl: !0
                },
                detectAddressByIp: {defaultParams: {type: "GET", dataType: "json"}, addTypeInUrl: !1},
                status: {defaultParams: {type: "GET", dataType: "json"}, addTypeInUrl: !0},
                findById: {
                    defaultParams: {
                        type: m.getDefaultType(),
                        dataType: "json",
                        contentType: m.getDefaultContentType()
                    }, addTypeInUrl: !0
                }
            }, p = {
                suggest: {method: "suggest", userSelect: !0, updateValue: !0, enrichmentEnabled: !0},
                findById: {method: "findById", userSelect: !1, updateValue: !1, enrichmentEnabled: !1}
            };
            b.utils = m, b.defaultOptions = k, b.version = "16.8.9", a.Suggestions = b, b.prototype = {
                initialize: function () {
                    var a = this;
                    a.uniqueId = m.uniqueId("i"), a.createWrapper(), a.notify("initialize"), a.bindWindowEvents(), a.setOptions(), a.fixPosition()
                }, deferInitialization: function () {
                    var a, b = this, c = "mouseover focus keydown", d = function () {
                        b.initializer.resolve(), b.enable()
                    };
                    b.initializer.always(function () {
                        b.el.off(c, d), clearInterval(a)
                    }), b.disabled = !0, b.el.on(c, d), a = setInterval(function () {
                        b.el.is(":visible") && d()
                    }, b.options.initializeInterval)
                }, isInitialized: function () {
                    return "resolved" === this.initializer.state()
                }, dispose: function () {
                    var a = this;
                    a.initializer.reject(), a.notify("dispose"), a.el.removeData(f).removeClass("suggestions-input"), a.unbindWindowEvents(), a.removeWrapper(), a.el.trigger("suggestions-dispose")
                }, notify: function (b) {
                    var c = this, d = m.slice(arguments, 1);
                    return a.map(l.get(b), function (a) {
                        return a.apply(c, d)
                    })
                }, createWrapper: function () {
                    var b = this;
                    b.$wrapper = a('<div class="suggestions-wrapper"/>'), b.el.after(b.$wrapper), b.$wrapper.on("mousedown" + e, a.proxy(b.onMousedown, b))
                }, removeWrapper: function () {
                    var b = this;
                    b.$wrapper && b.$wrapper.remove(), a(b.options.$helpers).off(e)
                }, onMousedown: function (b) {
                    var c = this;
                    b.preventDefault(), c.cancelBlur = !0, m.delay(function () {
                        delete c.cancelBlur
                    }), 0 == a(b.target).closest(".ui-menu-item").length && m.delay(function () {
                        a(document).one("mousedown", function (b) {
                            var d = c.el.add(c.$wrapper).add(c.options.$helpers);
                            c.options.floating && (d = d.add(c.$container)), d = d.filter(function () {
                                return this === b.target || a.contains(this, b.target)
                            }), d.length || c.hide()
                        })
                    })
                }, bindWindowEvents: function () {
                    var b = this, c = a.proxy(b.fixPosition, b);
                    b.$viewport.on("resize" + e + b.uniqueId, c).on("scroll" + e + b.uniqueId, c)
                }, unbindWindowEvents: function () {
                    this.$viewport.off("resize" + e + this.uniqueId).off("scroll" + e + this.uniqueId)
                }, scrollToTop: function () {
                    var b = this, c = b.options.scrollOnFocus;
                    c === !0 && (c = b.el), c instanceof a && c.length > 0 && a("body,html").animate({scrollTop: c.offset().top}, "fast")
                }, setOptions: function (b) {
                    var c = this;
                    a.extend(c.options, b), a.each({type: d, requestMode: p}, function (b, d) {
                        if (c[b] = d[c.options[b]], !c[b]) throw c.disable(), "`" + b + "` option is incorrect! Must be one of: " + a.map(d, function (a, b) {
                            return '"' + b + '"'
                        }).join(", ")
                    }), a(c.options.$helpers).off(e).on("mousedown" + e, a.proxy(c.onMousedown, c)), c.isInitialized() && c.notify("setOptions")
                }, fixPosition: function (b) {
                    var c, d, e = this, f = {};
                    e.isMobile = e.$viewport.width() <= e.options.mobileWidth, e.isInitialized() && (!b || "scroll" != b.type || e.options.floating || e.isMobile) && (e.$container.appendTo(e.options.floating ? e.$body : e.$wrapper), e.notify("resetPosition"), e.el.css("paddingLeft", ""), e.el.css("paddingRight", ""), f.paddingLeft = parseFloat(e.el.css("paddingLeft")), f.paddingRight = parseFloat(e.el.css("paddingRight")), a.extend(f, e.el.offset()), f.borderTop = "none" == e.el.css("border-top-style") ? 0 : parseFloat(e.el.css("border-top-width")), f.borderLeft = "none" == e.el.css("border-left-style") ? 0 : parseFloat(e.el.css("border-left-width")), f.innerHeight = e.el.innerHeight(), f.innerWidth = e.el.innerWidth(), f.outerHeight = e.el.outerHeight(), f.componentsLeft = 0, f.componentsRight = 0, c = e.$wrapper.offset(), d = {
                        top: f.top - c.top,
                        left: f.left - c.left
                    }, e.notify("fixPosition", d, f), f.componentsLeft > f.paddingLeft && e.el.css("paddingLeft", f.componentsLeft + "px"), f.componentsRight > f.paddingRight && e.el.css("paddingRight", f.componentsRight + "px"))
                }, clearCache: function () {
                    this.cachedResponse = {}, this.enrichmentCache = {}, this.badQueries = []
                }, clear: function () {
                    var a = this;
                    a.isInitialized() && (a.clearCache(), a.currentValue = "", a.selection = null, a.hide(), a.suggestions = [], a.el.val(""), a.el.trigger("suggestions-clear"), a.notify("clear"))
                }, disable: function () {
                    var a = this;
                    a.disabled = !0, a.abortRequest(), a.visible && a.hide()
                }, enable: function () {
                    this.disabled = !1
                }, isUnavailable: function () {
                    return this.disabled
                }, update: function () {
                    var a = this, b = a.el.val();
                    a.isInitialized() && (a.currentValue = b, a.isQueryRequestable(b) ? a.updateSuggestions(b) : a.hide())
                }, setSuggestion: function (b) {
                    var c, d, e = this;
                    a.isPlainObject(b) && a.isPlainObject(b.data) && (b = a.extend(!0, {}, b), e.bounds.own.length && (e.checkValueBounds(b), c = e.copyDataComponents(b.data, e.bounds.all), b.data.kladr_id && (c.kladr_id = e.getBoundedKladrId(b.data.kladr_id, e.bounds.all)), b.data = c), e.selection = b, e.suggestions = [b], d = e.getSuggestionValue(b) || "", e.currentValue = d, e.el.val(d), e.abortRequest(), e.el.trigger("suggestions-set"))
                }, fixData: function () {
                    var b = this, c = b.extendedCurrentValue(), d = b.el.val(), e = a.Deferred();
                    e.done(function (a) {
                        b.selectSuggestion(a, 0, d, {hasBeenEnriched: !0}), b.el.trigger("suggestions-fixdata", a)
                    }).fail(function () {
                        b.selection = null, b.currentValue = "", b.el.val(b.currentValue), b.el.trigger("suggestions-fixdata")
                    }), b.isQueryRequestable(c) ? (b.currentValue = c, b.getSuggestions(c, {
                        count: 1,
                        from_bound: null,
                        to_bound: null
                    }).done(function (a) {
                        var b = a[0];
                        b ? e.resolve(b) : e.reject()
                    }).fail(function () {
                        e.reject()
                    })) : e.reject()
                }, extendedCurrentValue: function () {
                    var b = this, c = b.getParentInstance(), d = c && c.extendedCurrentValue(), e = a.trim(b.el.val());
                    return m.compact([d, e]).join(" ")
                }, getAjaxParams: function (c, d) {
                    var e = this, f = a.trim(e.options.token), g = a.trim(e.options.partner), h = e.options.serviceUrl,
                        i = o[c], j = a.extend({timeout: e.options.timeout}, i.defaultParams), k = {};
                    return /\/$/.test(h) || (h += "/"), h += c, i.addTypeInUrl && (h += "/" + e.type.urlSuffix), h = m.fixURLProtocol(h), a.support.cors ? (f && (k.Authorization = "Token " + f), g && (k["X-Partner"] = g), k["X-Version"] = b.version, j.headers || (j.headers = {}), a.extend(j.headers, e.options.headers, k)) : (f && (k.token = f), g && (k.partner = g), k.version = b.version, h = m.addUrlParams(h, k)), j.url = h, a.extend(j, d)
                }, isQueryRequestable: function (a) {
                    var b, c = this;
                    return b = a.length >= c.options.minChars, b && c.type.isQueryRequestable && (b = c.type.isQueryRequestable.call(c, a)), b
                }, constructRequestParams: function (b, c) {
                    var d = this, e = d.options,
                        f = a.isFunction(e.params) ? e.params.call(d.element, b) : a.extend({}, e.params);
                    return d.type.constructRequestParams && a.extend(f, d.type.constructRequestParams.call(d)), a.each(d.notify("requestParams"), function (b, c) {
                        a.extend(f, c)
                    }), f[e.paramName] = b, a.isNumeric(e.count) && e.count > 0 && (f.count = e.count), a.extend(f, c)
                }, updateSuggestions: function (a) {
                    var b = this;
                    b.fetchPhase = b.getSuggestions(a).done(function (c) {
                        b.assignSuggestions(c, a)
                    })
                }, getSuggestions: function (b, c, d) {
                    var e, f = this, g = f.options, h = d && d.noCallbacks, i = d && d.useEnrichmentCache,
                        j = f.constructRequestParams(b, c), k = a.param(j || {}), l = a.Deferred();
                    return e = f.cachedResponse[k], e && a.isArray(e.suggestions) ? l.resolve(e.suggestions) : f.isBadQuery(b) ? l.reject() : h || g.onSearchStart.call(f.element, j) !== !1 ? f.doGetSuggestions(j).done(function (a) {
                        f.processResponse(a) && b == f.currentValue ? (g.noCache || (i ? f.enrichmentCache[b] = a.suggestions[0] : (f.enrichResponse(a, b), f.cachedResponse[k] = a, g.preventBadQueries && 0 === a.suggestions.length && f.badQueries.push(b))), l.resolve(a.suggestions)) : l.reject(), h || g.onSearchComplete.call(f.element, b, a.suggestions)
                    }).fail(function (a, c, d) {
                        l.reject(), h || "abort" === c || g.onSearchError.call(f.element, b, a, c, d)
                    }) : l.reject(), l
                }, doGetSuggestions: function (b) {
                    var c = this, d = a.ajax(c.getAjaxParams(c.requestMode.method, {data: m.serialize(b)}));
                    return c.abortRequest(), c.currentRequest = d, c.notify("request"), d.always(function () {
                        c.currentRequest = null, c.notify("request")
                    }), d
                }, isBadQuery: function (b) {
                    if (!this.options.preventBadQueries) return !1;
                    var c = !1;
                    return a.each(this.badQueries, function (a, d) {
                        return !(c = 0 === b.indexOf(d))
                    }), c
                }, abortRequest: function () {
                    var a = this;
                    a.currentRequest && a.currentRequest.abort()
                }, processResponse: function (b) {
                    var c, d = this;
                    return b && a.isArray(b.suggestions) ? (d.verifySuggestionsFormat(b.suggestions), d.setUnrestrictedValues(b.suggestions), a.isFunction(d.options.onSuggestionsFetch) && (c = d.options.onSuggestionsFetch.call(d.element, b.suggestions), a.isArray(c) && (b.suggestions = c)), !0) : !1
                }, verifySuggestionsFormat: function (b) {
                    "string" == typeof b[0] && a.each(b, function (a, c) {
                        b[a] = {value: c, data: null}
                    })
                }, getSuggestionValue: function (b, c) {
                    var d, e = this, f = e.options.formatSelected || e.type.formatSelected, g = c && c.hasSameValues,
                        h = c && c.hasBeenEnriched;
                    return a.isFunction(f) && (d = f.call(e, b)), ("string" != typeof d || 0 == d.length) && (d = b.value, e.type.composeValue && (h ? e.options.restrict_value ? d = e.type.composeValue(e.getUnrestrictedData(b.data), g && ["city_district"]) : e.bounds.own.indexOf("street") >= 0 && (d = e.type.composeValue(e.copyDataComponents(b.data, e.bounds.own.concat(["city_district"])), g && ["city_district"])) : g && (d = e.options.restrict_value ? e.type.composeValue(e.getUnrestrictedData(b.data), ["city_district"]) : e.bounds.own.indexOf("street") >= 0 ? e.type.composeValue(e.copyDataComponents(b.data, e.bounds.own.concat(["city_district"])), ["city_district"]) : b.unrestricted_value))), d
                }, hasSameValues: function (b) {
                    var c = !1;
                    return a.each(this.suggestions, function (a, d) {
                        return d.value === b.value && d !== b ? (c = !0, !1) : void 0
                    }), c
                }, assignSuggestions: function (a, b) {
                    var c = this;
                    c.suggestions = a, c.notify("assignSuggestions", b)
                }, shouldRestrictValues: function () {
                    var a = this;
                    return a.options.restrict_value && a.constraints && 1 == Object.keys(a.constraints).length
                }, setUnrestrictedValues: function (b) {
                    var c = this, d = c.shouldRestrictValues(), e = c.getFirstConstraintLabel();
                    a.each(b, function (a, b) {
                        b.unrestricted_value || (b.unrestricted_value = d ? e + ", " + b.value : b.value)
                    })
                }, areSuggestionsSame: function (a, b) {
                    return a && b && a.value === b.value && m.areSame(a.data, b.data)
                }
            }, function () {
                var d = {
                    setupElement: function () {
                        this.el.attr("autocomplete", "on").addClass("suggestions-input").css("box-sizing", "border-box")
                    }, bindElementEvents: function () {
                        var b = this;
                        b.el.on("keydown" + e, a.proxy(b.onElementKeyDown, b)), b.el.on(["keyup" + e, "cut" + e, "paste" + e, "input" + e].join(" "), a.proxy(b.onElementKeyUp, b)), b.el.on("blur" + e, a.proxy(b.onElementBlur, b)), b.el.on("focus" + e, a.proxy(b.onElementFocus, b))
                    }, unbindElementEvents: function () {
                        this.el.off(e)
                    }, onElementBlur: function () {
                        var a = this;
                        return a.cancelBlur ? void (a.cancelBlur = !1) : (a.options.triggerSelectOnBlur ? a.isUnavailable() || a.selectCurrentValue({noSpace: !0}).always(function () {
                            a.hide()
                        }) : a.hide(), void (a.fetchPhase.abort && a.fetchPhase.abort()))
                    }, onElementFocus: function () {
                        var b = this;
                        b.cancelFocus || m.delay(a.proxy(b.completeOnFocus, b)), b.cancelFocus = !1
                    }, onElementKeyDown: function (a) {
                        var b = this;
                        if (!b.isUnavailable()) if (b.visible) {
                            switch (a.which) {
                                case c.ESC:
                                    b.el.val(b.currentValue), b.hide(), b.abortRequest();
                                    break;
                                case c.TAB:
                                    if (b.options.tabDisabled === !1) return;
                                    break;
                                case c.ENTER:
                                    b.options.triggerSelectOnEnter && b.selectCurrentValue();
                                    break;
                                case c.SPACE:
                                    return void (b.options.triggerSelectOnSpace && b.isCursorAtEnd() && (a.preventDefault(), b.selectCurrentValue({
                                        continueSelecting: !0,
                                        dontEnrich: !0
                                    }).fail(function () {
                                        b.currentValue += " ", b.el.val(b.currentValue), b.proceedChangedValue()
                                    })));
                                case c.UP:
                                    b.moveUp();
                                    break;
                                case c.DOWN:
                                    b.moveDown();
                                    break;
                                default:
                                    return
                            }
                            a.stopImmediatePropagation(), a.preventDefault()
                        } else switch (a.which) {
                            case c.DOWN:
                                b.suggest();
                                break;
                            case c.ENTER:
                                b.options.triggerSelectOnEnter && b.triggerOnSelectNothing()
                        }
                    }, onElementKeyUp: function (a) {
                        var b = this;
                        if (!b.isUnavailable()) {
                            switch (a.which) {
                                case c.UP:
                                case c.DOWN:
                                case c.ENTER:
                                    return
                            }
                            clearTimeout(b.onChangeTimeout), b.inputPhase.reject(), b.currentValue !== b.el.val() && b.proceedChangedValue()
                        }
                    }, proceedChangedValue: function () {
                        var b = this;
                        b.abortRequest(), b.inputPhase = a.Deferred().done(a.proxy(b.onValueChange, b)), b.options.deferRequestBy > 0 ? b.onChangeTimeout = m.delay(function () {
                            b.inputPhase.resolve()
                        }, b.options.deferRequestBy) : b.inputPhase.resolve()
                    }, onValueChange: function () {
                        var a, b = this;
                        b.selection && (a = b.selection, b.selection = null, b.trigger("InvalidateSelection", a)), b.selectedIndex = -1, b.update(), b.notify("valueChange")
                    }, completeOnFocus: function () {
                        var a = this;
                        a.isUnavailable() || a.isElementFocused() && (a.fixPosition(), a.update(), a.isMobile && (a.setCursorAtEnd(), a.scrollToTop()))
                    }, isElementFocused: function () {
                        return document.activeElement === this.element
                    }, isCursorAtEnd: function () {
                        var a, b, c = this, d = c.el.val().length;
                        try {
                            if (a = c.element.selectionStart, "number" == typeof a) return a === d
                        } catch (e) {
                        }
                        return document.selection ? (b = document.selection.createRange(), b.moveStart("character", -d), d === b.text.length) : !0
                    }, setCursorAtEnd: function () {
                        var a = this.element;
                        try {
                            a.selectionEnd = a.selectionStart = a.value.length, a.scrollLeft = a.scrollWidth
                        } catch (b) {
                            a.value = a.value
                        }
                    }
                };
                a.extend(b.prototype, d), l.on("initialize", d.bindElementEvents).on("dispose", d.unbindElementEvents)
            }(), function () {
                function c() {
                    a.each(d, function () {
                        this.abort()
                    }), d = {}
                }

                var d = {};
                c();
                var e = {
                    checkStatus: function () {
                        function b(b) {
                            a.isFunction(c.options.onSearchError) && c.options.onSearchError.call(c.element, null, g, "error", b)
                        }

                        var c = this, e = a.trim(c.options.token), f = c.options.type + e, g = d[f];
                        g || (g = d[f] = a.ajax(c.getAjaxParams("status"))), g.done(function (d) {
                            d.search ? a.extend(c.status, d) : b("Service Unavailable")
                        }).fail(function () {
                            b(g.statusText)
                        })
                    }
                };
                b.resetTokens = c, a.extend(b.prototype, e), l.on("setOptions", e.checkStatus)
            }(), function () {
                function c() {
                    d = null, b.defaultOptions.geoLocation = e
                }

                if ("GET" != m.getDefaultType()) {
                    var d, e = !0, f = {
                        checkLocation: function () {
                            var b = this, c = b.options.geoLocation;
                            b.type.geoEnabled && c && (b.geoLocation = a.Deferred(), a.isPlainObject(c) || a.isArray(c) ? b.geoLocation.resolve(c) : (d || (d = a.ajax(b.getAjaxParams("detectAddressByIp"))), d.done(function (a) {
                                var c = a && a.location && a.location.data;
                                c && c.kladr_id ? b.geoLocation.resolve(c) : b.geoLocation.reject()
                            }).fail(function () {
                                b.geoLocation.reject()
                            })))
                        }, getGeoLocation: function () {
                            return this.geoLocation
                        }, constructParams: function () {
                            var b = this, c = {};
                            return b.geoLocation && a.isFunction(b.geoLocation.promise) && "resolved" == b.geoLocation.state() && b.geoLocation.done(function (b) {
                                c.locations_boost = a.makeArray(b)
                            }), c
                        }
                    };
                    a.extend(k, {geoLocation: e}), a.extend(b, {resetLocation: c}), a.extend(b.prototype, {getGeoLocation: f.getGeoLocation}), l.on("setOptions", f.checkLocation).on("requestParams", f.constructParams)
                }
            }(), function () {
                var c = {
                    enrichSuggestion: function (b, c) {
                        var d = this, e = a.Deferred();
                        return !d.status.enrich || !d.type.enrichmentEnabled || !d.requestMode.enrichmentEnabled || c && c.dontEnrich ? e.resolve(b) : b.data && null != b.data.qc ? e.resolve(b) : (d.disableDropdown(), d.currentValue = b.unrestricted_value, d.enrichPhase = d.getSuggestions(b.unrestricted_value, {
                            count: 1,
                            locations: null,
                            locations_boost: null,
                            from_bound: null,
                            to_bound: null
                        }, {noCallbacks: !0, useEnrichmentCache: !0}).always(function () {
                            d.enableDropdown()
                        }).done(function (a) {
                            var c = a && a[0];
                            e.resolve(c || b, !!c)
                        }).fail(function () {
                            e.resolve(b)
                        }), e)
                    }, enrichResponse: function (b, c) {
                        var d = this, e = d.enrichmentCache[c];
                        e && a.each(b.suggestions, function (a, d) {
                            return d.value === c ? (b.suggestions[a] = e, !1) : void 0
                        })
                    }
                };
                a.extend(b.prototype, c)
            }(), function () {
                function c(b) {
                    return a.map(b, function (a) {
                        var b = m.escapeHtml(a.text);
                        return b && a.matched && (b = "<strong>" + b + "</strong>"), b
                    }).join("")
                }

                function d(b, c) {
                    var d = b.split(", ");
                    return 1 === d.length ? b : a.map(d, function (a) {
                        return '<span class="' + c + '">' + a + "</span>"
                    }).join(", ")
                }

                function f(b, c) {
                    var d = !1;
                    return a.each(b, function (a, b) {
                        return d = b.value == c.value && b != c, d ? !1 : void 0
                    }), d
                }

                var g = {width: "auto", floating: !1}, j = {
                    createContainer: function () {
                        var b = this, c = "." + b.classes.suggestion, d = b.options,
                            f = a("<div/>").addClass(d.containerClass).css({position: "absolute", display: "none"});
                        b.$container = f, f.on("click" + e, c, a.proxy(b.onSuggestionClick, b))
                    }, removeContainer: function () {
                        var a = this;
                        a.options.floating && a.$container.remove()
                    }, setContainerOptions: function () {
                        var b = this, c = "mousedown" + e;
                        b.$container.off(c), b.options.floating && b.$container.on(c, a.proxy(b.onMousedown, b))
                    }, onSuggestionClick: function (b) {
                        var c, d = this, e = a(b.target);
                        if (!d.dropdownDisabled) {
                            for (d.cancelFocus = !0, d.el.focus(); e.length && !(c = e.attr("data-index"));) e = e.closest("." + d.classes.suggestion);
                            c && !isNaN(c) && d.select(+c)
                        }
                    }, setDropdownPosition: function (a, b) {
                        var c, d = this, e = d.$viewport.scrollLeft();
                        d.isMobile ? (c = d.options.floating ? {
                            left: e + "px",
                            top: b.top + b.outerHeight + "px"
                        } : {
                            left: a.left - b.left + e + "px",
                            top: a.top + b.outerHeight + "px"
                        }, c.width = d.$viewport.width() + "px") : (c = d.options.floating ? {
                            left: b.left + "px",
                            top: b.top + b.borderTop + b.innerHeight + "px"
                        } : {
                            left: a.left + "px",
                            top: a.top + b.borderTop + b.innerHeight + "px"
                        }, m.delay(function () {
                            var a = d.options.width;
                            "auto" === a && (a = d.el.outerWidth()), d.$container.outerWidth(a)
                        })), d.$container.toggleClass(d.classes.mobile, d.isMobile).css(c), d.containerItemsPadding = b.left + b.borderLeft + b.paddingLeft - e
                    }, setItemsPositions: function () {
                        var a = this, b = a.getSuggestionsItems();
                        b.css("paddingLeft", a.isMobile ? a.containerItemsPadding + "px" : "")
                    }, getSuggestionsItems: function () {
                        return this.$container.children("." + this.classes.suggestion)
                    }, toggleDropdownEnabling: function (a) {
                        this.dropdownDisabled = !a, this.$container.attr("disabled", !a)
                    }, disableDropdown: function () {
                        this.toggleDropdownEnabling(!1)
                    }, enableDropdown: function () {
                        this.toggleDropdownEnabling(!0)
                    }, hasSuggestionsToChoose: function () {
                        var b = this;
                        return b.suggestions.length > 1 || 1 === b.suggestions.length && (!b.selection || a.trim(b.suggestions[0].value) !== a.trim(b.selection.value))
                    }, suggest: function () {
                        var b, c, d = this, e = d.options;
                        if (d.requestMode.userSelect) {
                            if (!d.hasSuggestionsToChoose()) return void d.hide();
                            b = e.formatResult || d.type.formatResult || d.formatResult, c = [], !d.isMobile && e.hint && d.suggestions.length && c.push('<div class="' + d.classes.hint + '">' + e.hint + "</div>"), d.selectedIndex = -1, a.each(d.suggestions, function (a, e) {
                                var f = d.makeSuggestionLabel(d.suggestions, e);
                                e == d.selection && (d.selectedIndex = a), c.push('<div class="' + d.classes.suggestion + '" data-index="' + a + '">'), c.push(b.call(d, e.value, d.currentValue, e, {unformattableTokens: d.type.unformattableTokens})), f && c.push('<span class="' + d.classes.subtext_label + '">' + m.escapeHtml(f) + "</span>"), c.push("</div>")
                            }), d.$container.html(c.join("")), e.autoSelectFirst && -1 === d.selectedIndex && (d.selectedIndex = 0), -1 !== d.selectedIndex && d.getSuggestionsItems().eq(d.selectedIndex).addClass(d.classes.selected), a.isFunction(e.beforeRender) && e.beforeRender.call(d.element, d.$container), d.$container.show(), d.visible = !0, d.fixPosition(), d.setItemsPositions()
                        }
                    }, wrapFormattedValue: function (a, b) {
                        var c = this, d = m.getDeepValue(b.data, "state.status");
                        return '<span class="' + c.classes.value + '"' + (d ? ' data-suggestion-status="' + d + '"' : "") + ">" + a + "</span>"
                    }, formatResult: function (a, b, c, d) {
                        var e = this;
                        return a = e.highlightMatches(a, b, c, d), e.wrapFormattedValue(a, c)
                    }, highlightMatches: function (b, e, f, g) {
                        var j, k, l, n, o, p, q, r, s = this, t = [], u = g && g.unformattableTokens,
                            v = g && g.maxLength, w = m.reWordExtractor();
                        if (!b) return "";
                        for (j = m.compact(m.formatToken(e).split(h)), l = m.arrayMinus(j, u), j = m.withSubTokens(l.concat(m.arrayMinus(j, l))), k = a.map(j, function (a) {
                            return new RegExp("^((.*)([" + i + "]+))?(" + m.escapeRegExChars(a) + ")([^" + i + "]*[" + i + "]*)", "i")
                        }); (n = w.exec(b)) && n[0];) o = n[1],
                            t.push({
                                text: o,
                                hasUpperCase: o.toLowerCase() !== o,
                                formatted: m.formatToken(o),
                                matchable: !0
                            }), n[2] && t.push({text: n[2]});
                        for (p = 0; p < t.length; p++) q = t[p], !q.matchable || q.matched || -1 !== a.inArray(q.formatted, u) && !q.hasUpperCase || a.each(k, function (a, b) {
                            var c, d = b.exec(q.formatted), e = p + 1;
                            return d ? (d = {
                                before: d[1] || "",
                                beforeText: d[2] || "",
                                beforeDelimiter: d[3] || "",
                                text: d[4] || "",
                                after: d[5] || ""
                            }, d.before && (t.splice(p, 0, {
                                text: q.text.substr(0, d.beforeText.length),
                                formatted: d.beforeText,
                                matchable: !0
                            }, {text: d.beforeDelimiter}), e += 2, c = d.before.length, q.text = q.text.substr(c), q.formatted = q.formatted.substr(c), p--), c = d.text.length + d.after.length, q.formatted.length > c && (t.splice(e, 0, {
                                text: q.text.substr(c),
                                formatted: q.formatted.substr(c),
                                matchable: !0
                            }), q.text = q.text.substr(0, c), q.formatted = q.formatted.substr(0, c)), d.after && (c = d.text.length, t.splice(e, 0, {
                                text: q.text.substr(c),
                                formatted: q.formatted.substr(c)
                            }), q.text = q.text.substr(0, c), q.formatted = q.formatted.substr(0, c)), q.matched = !0, !1) : void 0
                        });
                        if (v) {
                            for (p = 0; p < t.length && v >= 0; p++) q = t[p], v -= q.text.length, 0 > v && (q.text = q.text.substr(0, q.text.length + v) + "...");
                            t.length = p
                        }
                        return r = c(t), d(r, s.classes.nowrap)
                    }, makeSuggestionLabel: function (b, c) {
                        var d, e, g = this, h = g.type.fieldNames, i = {}, j = m.reWordExtractor(), k = [];
                        if (h && f(b, c) && c.data && (a.each(h, function (a) {
                            var b = c.data[a];
                            b && (i[a] = m.formatToken(b))
                        }), !a.isEmptyObject(i))) {
                            for (; (d = j.exec(m.formatToken(c.value))) && (e = d[1]);) a.each(i, function (a, b) {
                                return b == e ? (k.push(h[a]), delete i[a], !1) : void 0
                            });
                            if (k.length) return k.join(", ")
                        }
                    }, hide: function () {
                        var a = this;
                        a.visible = !1, a.selectedIndex = -1, a.$container.hide().empty()
                    }, activate: function (a) {
                        var b, c, d = this, e = d.classes.selected;
                        return !d.dropdownDisabled && (c = d.getSuggestionsItems(), c.removeClass(e), d.selectedIndex = a, -1 !== d.selectedIndex && c.length > d.selectedIndex) ? (b = c.eq(d.selectedIndex), b.addClass(e), b) : null
                    }, deactivate: function (a) {
                        var b = this;
                        b.dropdownDisabled || (b.selectedIndex = -1, b.getSuggestionsItems().removeClass(b.classes.selected), a && b.el.val(b.currentValue))
                    }, moveUp: function () {
                        var a = this;
                        if (!a.dropdownDisabled) return -1 === a.selectedIndex ? void (a.suggestions.length && a.adjustScroll(a.suggestions.length - 1)) : 0 === a.selectedIndex ? void a.deactivate(!0) : void a.adjustScroll(a.selectedIndex - 1)
                    }, moveDown: function () {
                        var a = this;
                        if (!a.dropdownDisabled) return a.selectedIndex === a.suggestions.length - 1 ? void a.deactivate(!0) : void a.adjustScroll(a.selectedIndex + 1)
                    }, adjustScroll: function (a) {
                        var b, c, d, e = this, f = e.activate(a), g = e.$container.scrollTop();
                        f && f.length && (b = f.position().top, 0 > b ? e.$container.scrollTop(g + b) : (c = b + f.outerHeight(), d = e.$container.innerHeight(), c > d && e.$container.scrollTop(g - d + c)), e.el.val(e.suggestions[a].value))
                    }
                };
                a.extend(k, g), a.extend(b.prototype, j), l.on("initialize", j.createContainer).on("dispose", j.removeContainer).on("setOptions", j.setContainerOptions).on("fixPosition", j.setDropdownPosition).on("fixPosition", j.setItemsPositions).on("assignSuggestions", j.suggest)
            }(), function () {
                var b = "addon", c = 50, d = 1e3, e = {addon: null},
                    f = {NONE: "none", SPINNER: "spinner", CLEAR: "clear"}, g = function (b) {
                        var c = this, d = a('<span class="suggestions-addon"/>');
                        c.owner = b, c.$el = d, c.type = f.NONE, c.visible = !1, c.initialPadding = null, d.on("click", a.proxy(c, "onClick"))
                    };
                g.prototype = {
                    checkType: function () {
                        var b = this, c = b.owner.options.addon, d = !1;
                        a.each(f, function (a, b) {
                            return d = b == c, d ? !1 : void 0
                        }), d || (c = b.owner.isMobile ? f.CLEAR : f.SPINNER), c != b.type && (b.type = c, b.$el.attr("data-addon-type", c), b.toggle(!0))
                    }, toggle: function (a) {
                        var b, c = this;
                        switch (c.type) {
                            case f.CLEAR:
                                b = !!c.owner.currentValue;
                                break;
                            case f.SPINNER:
                                b = !!c.owner.currentRequest;
                                break;
                            default:
                                b = !1
                        }
                        b != c.visible && (c.visible = b, b ? c.show(a) : c.hide(a))
                    }, show: function (a) {
                        var b = this, d = {opacity: 1};
                        a ? (b.$el.show().css(d), b.showBackground(!0)) : b.$el.stop(!0, !0).delay(c).queue(function () {
                            b.$el.show(), b.showBackground(), b.$el.dequeue()
                        }).animate(d, "fast")
                    }, hide: function (a) {
                        var b = this, c = {opacity: 0};
                        a && b.$el.hide().css(c), b.$el.stop(!0).animate(c, {
                            duration: "fast", complete: function () {
                                b.$el.hide(), b.hideBackground()
                            }
                        })
                    }, fixPosition: function (a, b) {
                        var c = this, d = b.innerHeight;
                        c.checkType(), c.$el.css({
                            left: a.left + b.borderLeft + b.innerWidth - d + "px",
                            top: a.top + b.borderTop + "px",
                            height: d,
                            width: d
                        }), c.initialPadding = b.paddingRight, c.width = d, c.visible && (b.componentsRight += d)
                    }, showBackground: function (a) {
                        var c = this, d = c.owner.el, e = {paddingRight: c.width};
                        c.width > c.initialPadding && (c.stopBackground(), a ? d.css(e) : d.animate(e, {
                            duration: "fast",
                            queue: b
                        }).dequeue(b))
                    }, hideBackground: function (a) {
                        var c = this, e = c.owner.el, f = {paddingRight: c.initialPadding};
                        c.width > c.initialPadding && (c.stopBackground(!0), a ? e.css(f) : e.delay(d, b).animate(f, {
                            duration: "fast",
                            queue: b
                        }).dequeue(b))
                    }, stopBackground: function (a) {
                        this.owner.el.stop(b, !0, a)
                    }, onClick: function (a) {
                        var b = this;
                        b.type == f.CLEAR && b.owner.clear()
                    }
                };
                var h = {
                    createAddon: function () {
                        var a = this, b = new g(a);
                        a.$wrapper.append(b.$el), a.addon = b
                    }, fixAddonPosition: function (a, b) {
                        this.addon.fixPosition(a, b)
                    }, checkAddonType: function () {
                        this.addon.checkType()
                    }, checkAddonVisibility: function () {
                        this.addon.toggle()
                    }, stopBackground: function () {
                        this.addon.stopBackground()
                    }
                };
                a.extend(k, e), l.on("initialize", h.createAddon).on("setOptions", h.checkAddonType).on("fixPosition", h.fixAddonPosition).on("clear", h.checkAddonVisibility).on("valueChange", h.checkAddonVisibility).on("request", h.checkAddonVisibility).on("resetPosition", h.stopBackground)
            }(), function () {
                function c(b, c) {
                    var d = c.selection, e = d && d.data && c.bounds;
                    return e && a.each(c.bounds.all, function (a, c) {
                        return e = d.data[c] === b.data[c]
                    }), e
                }

                var d = {constraints: null, restrict_value: !1}, e = function (b, c) {
                    var d = this;
                    d.instance = c, d.fields = {}, d.specificity = -1, a.isPlainObject(b) && c.type.dataComponents && a.each(c.type.dataComponents, function (a, c) {
                        var e = c.id;
                        c.forLocations && b[e] && (d.fields[e] = b[e], d.specificity = a)
                    }), d.fields.kladr_id && (d.fields = {kladr_id: d.fields.kladr_id}, d.specificity = d.getKladrSpecificity(d.fields.kladr_id))
                };
                a.extend(e.prototype, {
                    getLabel: function () {
                        return this.instance.type.composeValue(this.fields)
                    }, getFields: function () {
                        return this.fields
                    }, isValid: function () {
                        return !a.isEmptyObject(this.fields)
                    }, getKladrSpecificity: function (b) {
                        var c, d = -1;
                        return this.significantKladr = b.replace(/^(\d{2})(\d*?)(0+)$/g, "$1$2"), c = this.significantKladr.length, a.each(this.instance.type.dataComponents, function (a, b) {
                            b.kladrFormat && c === b.kladrFormat.digits && (d = a)
                        }), d
                    }, containsData: function (b) {
                        var c = !0;
                        return this.fields.kladr_id ? !!b.kladr_id && 0 === b.kladr_id.indexOf(this.significantKladr) : (a.each(this.fields, function (a, d) {
                            return c = !!b[a] && b[a].toLowerCase() === d.toLowerCase()
                        }), c)
                    }
                }), b.ConstraintLocation = e;
                var f = function (b, c) {
                    this.id = m.uniqueId("c"), this.deletable = !!b.deletable, this.instance = c, this.locations = a.map(a.makeArray(b && (b.locations || b.restrictions)), function (a) {
                        return new e(a, c)
                    }), this.locations = a.grep(this.locations, function (a) {
                        return a.isValid()
                    }), this.label = b.label, null == this.label && c.type.composeValue && (this.label = a.map(this.locations, function (a) {
                        return a.getLabel()
                    }).join(", ")), this.label && this.isValid() && (this.$el = a(document.createElement("li")).append(a(document.createElement("span")).text(this.label)).attr("data-constraint-id", this.id), this.deletable && this.$el.append(a(document.createElement("span")).addClass(c.classes.removeConstraint)))
                };
                a.extend(f.prototype, {
                    isValid: function () {
                        return this.locations.length > 0
                    }, getFields: function () {
                        return a.map(this.locations, function (a) {
                            return a.getFields()
                        })
                    }
                });
                var g = {
                    createConstraints: function () {
                        var b = this;
                        b.constraints = {}, b.$constraints = a('<ul class="suggestions-constraints"/>'), b.$wrapper.append(b.$constraints), b.$constraints.on("click", "." + b.classes.removeConstraint, a.proxy(b.onConstraintRemoveClick, b))
                    }, setConstraintsPosition: function (a, b) {
                        var c = this;
                        c.$constraints.css({
                            left: a.left + b.borderLeft + b.paddingLeft + "px",
                            top: a.top + b.borderTop + Math.round((b.innerHeight - c.$constraints.height()) / 2) + "px"
                        }), b.componentsLeft += c.$constraints.outerWidth(!0) + b.paddingLeft
                    }, onConstraintRemoveClick: function (b) {
                        var c = this, d = a(b.target).closest("li"), e = d.attr("data-constraint-id");
                        delete c.constraints[e], c.update(), d.fadeOut("fast", function () {
                            c.removeConstraint(e)
                        })
                    }, setupConstraints: function () {
                        var b, c = this, d = c.options.constraints;
                        return d ? void (d instanceof a || "string" == typeof d || "number" == typeof d.nodeType ? (b = a(d), b.is(c.constraints) || (c.unbindFromParent(), b.is(c.el) || (c.constraints = b, c.bindToParent()))) : (c._constraintsUpdating = !0, a.each(c.constraints, a.proxy(c.removeConstraint, c)), a.each(a.makeArray(d), function (a, b) {
                            c.addConstraint(b)
                        }), c._constraintsUpdating = !1, c.fixPosition())) : void c.unbindFromParent()
                    }, filteredLocation: function (b) {
                        var c = [], d = {};
                        return a.each(this.type.dataComponents, function () {
                            this.forLocations && c.push(this.id)
                        }), a.isPlainObject(b) && a.each(b, function (a, b) {
                            b && c.indexOf(a) >= 0 && (d[a] = b)
                        }), a.isEmptyObject(d) ? void 0 : d.kladr_id ? {kladr_id: d.kladr_id} : d
                    }, addConstraint: function (a) {
                        var b = this;
                        a = new f(a, b), a.isValid() && (b.constraints[a.id] = a, a.$el && (b.$constraints.append(a.$el), b._constraintsUpdating || b.fixPosition()))
                    }, removeConstraint: function (a) {
                        var b = this;
                        delete b.constraints[a], b.$constraints.children('[data-constraint-id="' + a + '"]').remove(), b._constraintsUpdating || b.fixPosition()
                    }, constructConstraintsParams: function () {
                        for (var b, c, d = this, f = [], g = d.constraints, h = {}; g instanceof a && (b = g.suggestions()) && !(c = m.getDeepValue(b, "selection.data"));) g = b.constraints;
                        return g instanceof a ? (c = new e(c, b).getFields(), c && (h.locations = [c], h.restrict_value = !0)) : g && (a.each(g, function (a, b) {
                            f = f.concat(b.getFields())
                        }), f.length && (h.locations = f, h.restrict_value = d.options.restrict_value)), h
                    }, getFirstConstraintLabel: function () {
                        var b = this, c = a.isPlainObject(b.constraints) && Object.keys(b.constraints)[0];
                        return c ? b.constraints[c].label : ""
                    }, bindToParent: function () {
                        var b = this;
                        b.constraints.on(["suggestions-select." + b.uniqueId, "suggestions-invalidateselection." + b.uniqueId, "suggestions-clear." + b.uniqueId].join(" "), a.proxy(b.onParentSelectionChanged, b)).on("suggestions-dispose." + b.uniqueId, a.proxy(b.onParentDispose, b))
                    }, unbindFromParent: function () {
                        var b = this, c = b.constraints;
                        c instanceof a && c.off("." + b.uniqueId)
                    }, onParentSelectionChanged: function (a, b, c) {
                        ("suggestions-select" !== a.type || c) && this.clear()
                    }, onParentDispose: function (a) {
                        this.unbindFromParent()
                    }, getParentInstance: function () {
                        return this.constraints instanceof a && this.constraints.suggestions()
                    }, shareWithParent: function (a) {
                        var b = this.getParentInstance();
                        b && b.type === this.type && !c(a, b) && (b.shareWithParent(a), b.setSuggestion(a))
                    }, getUnrestrictedData: function (b) {
                        var c = this, d = [], e = {}, f = -1;
                        return a.each(c.constraints, function (c, d) {
                            a.each(d.locations, function (a, c) {
                                c.containsData(b) && c.specificity > f && (f = c.specificity)
                            })
                        }), f >= 0 ? (b.region_kladr_id && b.region_kladr_id === b.city_kladr_id && d.push.apply(d, c.type.dataComponentsById.city.fields), a.each(c.type.dataComponents.slice(0, f + 1), function (a, b) {
                            d.push.apply(d, b.fields)
                        }), a.each(b, function (a, b) {
                            -1 === d.indexOf(a) && (e[a] = b)
                        })) : e = b, e
                    }
                };
                a.extend(k, d), a.extend(b.prototype, g), "GET" != m.getDefaultType() && l.on("initialize", g.createConstraints).on("setOptions", g.setupConstraints).on("fixPosition", g.setConstraintsPosition).on("requestParams", g.constructConstraintsParams).on("dispose", g.unbindFromParent)
            }(), function () {
                var c = {
                    proceedQuery: function (a) {
                        var b = this;
                        a.length >= b.options.minChars ? b.updateSuggestions(a) : b.hide()
                    }, selectCurrentValue: function (b) {
                        var c = this, d = a.Deferred();
                        return c.inputPhase.resolve(), c.fetchPhase.done(function () {
                            var a;
                            c.selection && !c.visible ? d.reject() : (a = c.findSuggestionIndex(), c.select(a, b), -1 === a ? d.reject() : d.resolve(a))
                        }).fail(function () {
                            d.reject()
                        }), d
                    }, selectFoundSuggestion: function () {
                        var a = this;
                        a.requestMode.userSelect || a.select(0)
                    }, findSuggestionIndex: function () {
                        var b, c = this, d = c.selectedIndex;
                        return -1 === d && (b = a.trim(c.el.val()), b && a.each(c.type.matchers, function (a, e) {
                            return d = e(b, c.suggestions), -1 === d
                        })), d
                    }, select: function (b, c) {
                        var d, e = this, f = e.suggestions[b], g = c && c.continueSelecting, h = e.currentValue;
                        if (!e.triggering.Select) {
                            if (!f) return g || e.selection || e.triggerOnSelectNothing(), void e.onSelectComplete(g);
                            d = e.hasSameValues(f), e.enrichSuggestion(f, c).done(function (f, g) {
                                e.selectSuggestion(f, b, h, a.extend({hasBeenEnriched: g, hasSameValues: d}, c))
                            })
                        }
                    }, selectSuggestion: function (a, b, c, d) {
                        var e = this, f = d.continueSelecting,
                            g = !e.type.isDataComplete || e.type.isDataComplete.call(e, a), h = e.selection;
                        e.triggering.Select || (e.type.alwaysContinueSelecting && (f = !0), g && (f = !1), d.hasBeenEnriched && e.suggestions[b] && (e.suggestions[b].data = a.data), e.requestMode.updateValue && (e.checkValueBounds(a), e.currentValue = e.getSuggestionValue(a, d), !e.currentValue || d.noSpace || g || (e.currentValue += " "), e.el.val(e.currentValue)), e.currentValue ? (e.selection = a, e.areSuggestionsSame(a, h) || e.trigger("Select", a, e.currentValue != c), e.requestMode.userSelect && e.onSelectComplete(f)) : (e.selection = null, e.triggerOnSelectNothing()), e.shareWithParent(a))
                    }, onSelectComplete: function (a) {
                        var b = this;
                        a ? (b.selectedIndex = -1, b.updateSuggestions(b.currentValue)) : b.hide()
                    }, triggerOnSelectNothing: function () {
                        var a = this;
                        a.triggering.SelectNothing || a.trigger("SelectNothing", a.currentValue)
                    }, trigger: function (b) {
                        var c = this, d = m.slice(arguments, 1), e = c.options["on" + b];
                        c.triggering[b] = !0, a.isFunction(e) && e.apply(c.element, d), c.el.trigger.call(c.el, "suggestions-" + b.toLowerCase(), d), c.triggering[b] = !1
                    }
                };
                a.extend(b.prototype, c), l.on("assignSuggestions", c.selectFoundSuggestion)
            }(), function () {
                var b = {bounds: null}, c = {
                    setupBounds: function () {
                        this.bounds = {from: null, to: null}
                    }, setBoundsOptions: function () {
                        var b, c, d = this, e = [], f = a.trim(d.options.bounds).split("-"), g = f[0],
                            h = f[f.length - 1], i = [], j = [];
                        d.type.dataComponents && a.each(d.type.dataComponents, function () {
                            this.forBounds && e.push(this.id)
                        }), -1 === a.inArray(g, e) && (g = null), c = a.inArray(h, e), (-1 === c || c === e.length - 1) && (h = null), (g || h) && (b = !g, a.each(e, function (a, c) {
                            return c == g && (b = !0), j.push(c), b && i.push(c), c == h ? !1 : void 0
                        })), d.bounds.from = g, d.bounds.to = h, d.bounds.all = j, d.bounds.own = i
                    }, constructBoundsParams: function () {
                        var a = this, b = {};
                        return a.bounds.from && (b.from_bound = {value: a.bounds.from}), a.bounds.to && (b.to_bound = {value: a.bounds.to}), b
                    }, checkValueBounds: function (a) {
                        var b, c = this;
                        c.bounds.own.length && c.type.composeValue && (b = c.copyDataComponents(a.data, c.bounds.own), a.value = c.type.composeValue(b))
                    }, copyDataComponents: function (b, c) {
                        var d = {}, e = this.type.dataComponentsById;
                        return e && a.each(c, function (c, f) {
                            a.each(e[f].fields, function (a, c) {
                                null != b[c] && (d[c] = b[c])
                            })
                        }), d
                    }, getBoundedKladrId: function (b, c) {
                        var d, e = c[c.length - 1];
                        return a.each(this.type.dataComponents, function (a, b) {
                            return b.id === e ? (d = b.kladrFormat, !1) : void 0
                        }), b.substr(0, d.digits) + new Array((d.zeros || 0) + 1).join("0")
                    }
                };
                a.extend(k, b), a.extend(a.Suggestions.prototype, c), l.on("initialize", c.setupBounds).on("setOptions", c.setBoundsOptions).on("requestParams", c.constructBoundsParams)
            }(), a.fn.suggestions = function (c, d) {
                return 0 === arguments.length ? this.first().data(f) : this.each(function () {
                    var e = a(this), g = e.data(f);
                    "string" == typeof c ? g && "function" == typeof g[c] && g[c](d) : (g && g.dispose && g.dispose(), g = new b(this, c), e.data(f, g))
                })
            }
        });

        function setcookie(name, value, expires, path, domain, secure) {
            document.cookie = name + "=" + escape(value) +
                ((expires) ? "; expires=" + (new Date(expires)) : "") +
                ((path) ? "; path=" + path : "; path=/") +
                ((domain) ? "; domain=" + domain : "") +
                ((secure) ? "; secure" : "");
        }

        function setcookies() {
            $('.ec').each(function () {
                var variant = $(this).attr('name');
                var value = $(this).val();
                if ($(this).tagName == 'INPUT') {
                    if ($(this).context.type == 'radio') {
                        if ($(this).prop('checked')) setcookie(variant, value);
                    } else setcookie(variant, value);
                } else setcookie(variant, value);
            });
            setcookie('lk', '1');
        }

        function getcookie(name) {
            var cookie = " " + document.cookie;
            var search = " " + name + "=";
            var setStr = null;
            var offset = 0;
            var end = 0;

            if (cookie.length > 0) {
                offset = cookie.indexOf(search);

                if (offset != -1) {
                    offset += search.length;
                    end = cookie.indexOf(";", offset);

                    if (end == -1) {
                        end = cookie.length;
                    }

                    setStr = unescape(cookie.substring(offset, end));
                }
            }

            return (setStr);
        }

        function deleteAllCookies() {
            var cookies = document.cookie.split(";");

            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i];
                var eqPos = cookie.indexOf("=");
                var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
                document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
            }
        }
        function traffic(a, c) {

        }

        function Loading(e) {
            "undefined" == typeof e ? ($("#feedback-send").prop("disabled", !1), $("#feedback-send").html('Отправляется <i class="fa fa-spinner fa-spin fa-pulse"></i>')) : e || ($("#feedback-send").html("Отправлено"), $("#feedback-send").prop("disabled", !0), location.href = '/form')
        }

        function Loading2(e) {
            "undefined" == typeof e ? ($("#feedback-send2").prop("disabled", !1), $("#feedback-send2").html('Отправляется <i class="fa fa-spinner fa-spin fa-pulse"></i>')) : e || ($("#feedback-send2").html("Отправлено"), $("#feedback-send2").prop("disabled", !0))
        }

        $("#feedback-send").click(function () {
            if (Loading(), !re_email.test($("#feedback-email").val())) return Loading(0), alert('Пожалуйста, заполните поле "ваш емаил" корректно.'), $("#feedback-send").prop("disabled", !1), void $("#feedback-send").html("Отправить");
            var e;
            if ("/form" == window.location.pathname) {
                var a = $("#anketa").serialize();
                a = decodeURIComponent(a), a = a.replace(new RegExp("&step", "g"), "&Шаг"), a = a.replace(new RegExp("&period", "g"), "&Срок"), a = a.replace(new RegExp("display=0", "g"), "Декстоп версия"), a = a.replace(new RegExp("display=1", "g"), "Мобайл версия"), a = a.replace(new RegExp("referer", "g"), "Откуда пришли"), a = a.replace(new RegExp("&f=", "g"), "&Фамилия="), a = a.replace(new RegExp("&i=", "g"), "&Имя="), a = a.replace(new RegExp("&o=", "g"), "&Отчество="), a = a.replace(new RegExp("gender=0", "g"), "Пол женский"), a = a.replace(new RegExp("gender=1", "g"), "Пол мужской"), a = a.replace(new RegExp("&birth_dd=0&birth_mm=0&birth_yyyy=0", "g"), ""), a = a.replace(new RegExp("birthdate", "g"), "Дата рождения"), a = a.replace(new RegExp("&phone=", "g"), "&Телефон="), a = a.replace(new RegExp("&email", "g"), "&Емаил"), a = a.replace(new RegExp("&delays_type=never", "g"), "&Никогда не брал(а) кредитов"), a = a.replace(new RegExp("&delays_type=credit_closed_no_delay", "g"), "&Кредиты закрыты, просрочек не было"), a = a.replace(new RegExp("&delays_type=credit_open_no_delay", "g"), "&Кредиты есть, просрочек нет"), a = a.replace(new RegExp("&delays_type=credit_closed_had_delay", "g"), "&Кредиты закрыты, просрочки были"), a = a.replace(new RegExp("&delays_type=had_delay", "g"), "&Просрочки были, сейчас нет"), a = a.replace(new RegExp("&delays_type=had_delay", "g"), "&Просрочки сейчас есть"), a = a.replace(new RegExp("rangeSlider", "g"), "Сумма"), a = a.replace(new RegExp("ammount", "g"), "Сумма"), a = a.replace(new RegExp("amount", "g"), "Сумма"), a = a.replace(new RegExp("&passport=", "g"), "&Серия и номер паспорта="), a = a.replace(new RegExp("passport_s", "g"), "Серия паспорта"), a = a.replace(new RegExp("passport_n", "g"), "Номер паспорта"), a = a.replace(new RegExp("passport_dd", "g"), "День выдачи"), a = a.replace(new RegExp("passport_mm", "g"), "Месяц выдачи"), a = a.replace(new RegExp("passport_yyyy", "g"), "Год выдачи"), a = a.replace(new RegExp("passportdate", "g"), "Дата выдачи"), a = a.replace(new RegExp("passport_code", "g"), "Код подразделения"), a = a.replace(new RegExp("passport_who", "g"), "Кем выдан"), a = a.replace(new RegExp("birthplace", "g"), "Место рождения"), a = a.replace(new RegExp("&region=", "g"), "&Регион="), a = a.replace(new RegExp("&city=", "g"), "&Населённый пункт="), a = a.replace(new RegExp("&street=", "g"), "&Улица проживания="), a = a.replace(new RegExp("&building=", "g"), "&Дом="), a = a.replace(new RegExp("&housing=", "g"), "&Корпус="), a = a.replace(new RegExp("flat=", "g"), "Квартира="), a = a.replace(new RegExp("reg_type=1", "g"), "Постоянная регистрация"), a = a.replace(new RegExp("reg_type=0", "g"), "Без регистрации"), a = a.replace(new RegExp("reg_type=2", "g"), "Временная регистрация"), a = a.replace(new RegExp("&reg_same=1", "g"), ""), a = a.replace(new RegExp("&work=", "g"), "&Вид трудоустройства="), a = a.replace(new RegExp("work_name", "g"), "Место работы"), a = a.replace(new RegExp("work_occupation", "g"), "Должность"), a = a.replace(new RegExp("work_phone", "g"), "Рабочий телефон"), a = a.replace(new RegExp("work_experience", "g"), "Стаж"), a = a.replace(new RegExp("work_salary", "g"), "Зарплата"), a = a.replace(new RegExp("work_region", "g"), "Регион работы"), a = a.replace(new RegExp("work_city", "g"), "Город работы"), a = a.replace(new RegExp("work_street", "g"), "Улица работы"), a = a.replace(new RegExp("work_house", "g"), "Номер дома работы"), a = a.replace(new RegExp("work_office", "g"), "Офис работы"), _info = _info.replace(new RegExp("undefined", "g"), "неопределено"), e = {
                    name: $("#feedback-name").val(),
                    phone: $("#feedback-phone").val(),
                    email: $("#feedback-email").val(),
                    comment: "" + $("#feedback-comment").val() + _info + "\n | Разрешение экрана: " + x_size + " x " + y_size + "\n | Данные:" + a
                }
            } else e = {
                name: $("#feedback-name").val(),
                phone: $("#feedback-phone").val(),
                email: $("#feedback-email").val(),
                comment: "" + $("#feedback-comment").val() + _info + "\n | Разрешение экрана: " + x_size + " x " + y_size
            };
            "undefined" != typeof e.phone && "" != e.phone && "undefined" != typeof e.email && "" != e.email && "undefined" != typeof e.comment && "" != e.comment ? $.ajax({
                url: "/main/",
                type: "POST",
                dataType: "json",
                data: e
            }).done(function (e) {
                null != e ? "undefined" != typeof e.error ? alert("Ошибка. " + e.error) : ($("#feedbackModal").modal("hide"), Loading(0), alert("Заявка отправлена. Мы ответим вам в ближайшее время.")) : alert("Не получилось отправить. Попробуйте ещё раз.")
            }).fail(function (e, a, n) {
                alert("Не получилось отправить. Попробуйте ещё раз.")
            }).always(function () {
                Loading(0)
            }) : (Loading(0), alert("Пожалуйста, заполните все поля."))
        }), $("#feedback-send2").click(function () {
            Loading2();
            var e = {
                name: $("#feedback-name2").val(),
                phone: $("#feedback-phone2").val(),
                email: $("#feedback-email2").val(),
                comment: $("#feedback-comment2").val()
            };
            "undefined" != typeof e.phone && "" != e.phone && "undefined" != typeof e.email && "" != e.email && "undefined" != typeof e.comment && "" != e.comment ? $.ajax({
                url: "/main/",
                type: "POST",
                dataType: "json",
                data: e
            }).done(function (e) {
                null != e ? "undefined" != typeof e.error ? alert("Ошибка. " + e.error) : (Loading(0), alert("Заявка отправлена. Мы ответим вам в ближайшее время."), $("#feedback-send2").prop("disabled", !0)) : alert("Не получилось отправить. Попробуйте ещё раз.")
            }).fail(function (e, a, n) {
                alert("Не получилось отправить. Попробуйте ещё раз.")
            }).always(function () {
                Loading(0)
            }) : (Loading2(0), alert("Пожалуйста, заполните все поля."))
        });
        !function (a, b, c, d) {
            function e(b, c) {
                this.settings = null, this.options = a.extend({}, e.Defaults, c), this.$element = a(b), this._handlers = {}, this._plugins = {}, this._supress = {}, this._current = null, this._speed = null, this._coordinates = [], this._breakpoint = null, this._width = null, this._items = [], this._clones = [], this._mergers = [], this._widths = [], this._invalidated = {}, this._pipe = [], this._drag = {
                    time: null,
                    target: null,
                    pointer: null,
                    stage: {start: null, current: null},
                    direction: null
                }, this._states = {
                    current: {},
                    tags: {initializing: ["busy"], animating: ["busy"], dragging: ["interacting"]}
                }, a.each(["onResize", "onThrottledResize"], a.proxy(function (b, c) {
                    this._handlers[c] = a.proxy(this[c], this)
                }, this)), a.each(e.Plugins, a.proxy(function (a, b) {
                    this._plugins[a.charAt(0).toLowerCase() + a.slice(1)] = new b(this)
                }, this)), a.each(e.Workers, a.proxy(function (b, c) {
                    this._pipe.push({filter: c.filter, run: a.proxy(c.run, this)})
                }, this)), this.setup(), this.initialize()
            }

            e.Defaults = {
                items: 3,
                loop: !1,
                center: !1,
                rewind: !1,
                mouseDrag: !0,
                touchDrag: !0,
                pullDrag: !0,
                freeDrag: !1,
                margin: 0,
                stagePadding: 0,
                merge: !1,
                mergeFit: !0,
                autoWidth: !1,
                startPosition: 0,
                rtl: !1,
                smartSpeed: 250,
                fluidSpeed: !1,
                dragEndSpeed: !1,
                responsive: {},
                responsiveRefreshRate: 200,
                responsiveBaseElement: b,
                fallbackEasing: "swing",
                info: !1,
                nestedItemSelector: !1,
                itemElement: "div",
                stageElement: "div",
                refreshClass: "owl-refresh",
                loadedClass: "owl-loaded",
                loadingClass: "owl-loading",
                rtlClass: "owl-rtl",
                responsiveClass: "owl-responsive",
                dragClass: "owl-drag",
                itemClass: "owl-item",
                stageClass: "owl-stage",
                stageOuterClass: "owl-stage-outer",
                grabClass: "owl-grab"
            }, e.Width = {Default: "default", Inner: "inner", Outer: "outer"}, e.Type = {
                Event: "event",
                State: "state"
            }, e.Plugins = {}, e.Workers = [{
                filter: ["width", "settings"], run: function () {
                    this._width = this.$element.width()
                }
            }, {
                filter: ["width", "items", "settings"], run: function (a) {
                    a.current = this._items && this._items[this.relative(this._current)]
                }
            }, {
                filter: ["items", "settings"], run: function () {
                    this.$stage.children(".cloned").remove()
                }
            }, {
                filter: ["width", "items", "settings"], run: function (a) {
                    var b = this.settings.margin || "", c = !this.settings.autoWidth, d = this.settings.rtl,
                        e = {width: "auto", "margin-left": d ? b : "", "margin-right": d ? "" : b};
                    !c && this.$stage.children().css(e), a.css = e
                }
            }, {
                filter: ["width", "items", "settings"], run: function (a) {
                    var b = (this.width() / this.settings.items).toFixed(3) - this.settings.margin, c = null,
                        d = this._items.length, e = !this.settings.autoWidth, f = [];
                    for (a.items = {
                        merge: !1,
                        width: b
                    }; d--;) c = this._mergers[d], c = this.settings.mergeFit && Math.min(c, this.settings.items) || c, a.items.merge = c > 1 || a.items.merge, f[d] = e ? b * c : this._items[d].width();
                    this._widths = f
                }
            }, {
                filter: ["items", "settings"], run: function () {
                    var b = [], c = this._items, d = this.settings, e = Math.max(2 * d.items, 4),
                        f = 2 * Math.ceil(c.length / 2), g = d.loop && c.length ? d.rewind ? e : Math.max(e, f) : 0,
                        h = "", i = "";
                    for (g /= 2; g--;) b.push(this.normalize(b.length / 2, !0)), h += c[b[b.length - 1]][0].outerHTML, b.push(this.normalize(c.length - 1 - (b.length - 1) / 2, !0)), i = c[b[b.length - 1]][0].outerHTML + i;
                    this._clones = b, a(h).addClass("cloned").appendTo(this.$stage), a(i).addClass("cloned").prependTo(this.$stage)
                }
            }, {
                filter: ["width", "items", "settings"], run: function () {
                    for (var a = this.settings.rtl ? 1 : -1, b = this._clones.length + this._items.length, c = -1, d = 0, e = 0, f = []; ++c < b;) d = f[c - 1] || 0, e = this._widths[this.relative(c)] + this.settings.margin, f.push(d + e * a);
                    this._coordinates = f
                }
            }, {
                filter: ["width", "items", "settings"], run: function () {
                    var a = this.settings.stagePadding, b = this._coordinates, c = {
                        width: Math.ceil(Math.abs(b[b.length - 1])) + 2 * a,
                        "padding-left": a || "",
                        "padding-right": a || ""
                    };
                    this.$stage.css(c)
                }
            }, {
                filter: ["width", "items", "settings"], run: function (a) {
                    var b = this._coordinates.length, c = !this.settings.autoWidth, d = this.$stage.children();
                    if (c && a.items.merge) for (; b--;) a.css.width = this._widths[this.relative(b)], d.eq(b).css(a.css); else c && (a.css.width = a.items.width, d.css(a.css))
                }
            }, {
                filter: ["items"], run: function () {
                    this._coordinates.length < 1 && this.$stage.removeAttr("style")
                }
            }, {
                filter: ["width", "items", "settings"], run: function (a) {
                    a.current = a.current ? this.$stage.children().index(a.current) : 0, a.current = Math.max(this.minimum(), Math.min(this.maximum(), a.current)), this.reset(a.current)
                }
            }, {
                filter: ["position"], run: function () {
                    this.animate(this.coordinates(this._current))
                }
            }, {
                filter: ["width", "position", "items", "settings"], run: function () {
                    var a, b, c, d, e = this.settings.rtl ? 1 : -1, f = 2 * this.settings.stagePadding,
                        g = this.coordinates(this.current()) + f, h = g + this.width() * e, i = [];
                    for (c = 0, d = this._coordinates.length; c < d; c++) a = this._coordinates[c - 1] || 0, b = Math.abs(this._coordinates[c]) + f * e, (this.op(a, "<=", g) && this.op(a, ">", h) || this.op(b, "<", g) && this.op(b, ">", h)) && i.push(c);
                    this.$stage.children(".active").removeClass("active"), this.$stage.children(":eq(" + i.join("), :eq(") + ")").addClass("active"), this.settings.center && (this.$stage.children(".center").removeClass("center"), this.$stage.children().eq(this.current()).addClass("center"))
                }
            }], e.prototype.initialize = function () {
                if (this.enter("initializing"), this.trigger("initialize"), this.$element.toggleClass(this.settings.rtlClass, this.settings.rtl), this.settings.autoWidth && !this.is("pre-loading")) {
                    var b, c, e;
                    b = this.$element.find("img"), c = this.settings.nestedItemSelector ? "." + this.settings.nestedItemSelector : d, e = this.$element.children(c).width(), b.length && e <= 0 && this.preloadAutoWidthImages(b)
                }
                this.$element.addClass(this.options.loadingClass), this.$stage = a("<" + this.settings.stageElement + ' class="' + this.settings.stageClass + '"/>').wrap('<div class="' + this.settings.stageOuterClass + '"/>'), this.$element.append(this.$stage.parent()), this.replace(this.$element.children().not(this.$stage.parent())), this.$element.is(":visible") ? this.refresh() : this.invalidate("width"), this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass), this.registerEventHandlers(), this.leave("initializing"), this.trigger("initialized")
            }, e.prototype.setup = function () {
                var b = this.viewport(), c = this.options.responsive, d = -1, e = null;
                c ? (a.each(c, function (a) {
                    a <= b && a > d && (d = Number(a))
                }), e = a.extend({}, this.options, c[d]), "function" == typeof e.stagePadding && (e.stagePadding = e.stagePadding()), delete e.responsive, e.responsiveClass && this.$element.attr("class", this.$element.attr("class").replace(new RegExp("(" + this.options.responsiveClass + "-)\\S+\\s", "g"), "$1" + d))) : e = a.extend({}, this.options), this.trigger("change", {
                    property: {
                        name: "settings",
                        value: e
                    }
                }), this._breakpoint = d, this.settings = e, this.invalidate("settings"), this.trigger("changed", {
                    property: {
                        name: "settings",
                        value: this.settings
                    }
                })
            }, e.prototype.optionsLogic = function () {
                this.settings.autoWidth && (this.settings.stagePadding = !1, this.settings.merge = !1)
            }, e.prototype.prepare = function (b) {
                var c = this.trigger("prepare", {content: b});
                return c.data || (c.data = a("<" + this.settings.itemElement + "/>").addClass(this.options.itemClass).append(b)), this.trigger("prepared", {content: c.data}), c.data
            }, e.prototype.update = function () {
                for (var b = 0, c = this._pipe.length, d = a.proxy(function (a) {
                    return this[a]
                }, this._invalidated), e = {}; b < c;) (this._invalidated.all || a.grep(this._pipe[b].filter, d).length > 0) && this._pipe[b].run(e), b++;
                this._invalidated = {}, !this.is("valid") && this.enter("valid")
            }, e.prototype.width = function (a) {
                switch (a = a || e.Width.Default) {
                    case e.Width.Inner:
                    case e.Width.Outer:
                        return this._width;
                    default:
                        return this._width - 2 * this.settings.stagePadding + this.settings.margin
                }
            }, e.prototype.refresh = function () {
                this.enter("refreshing"), this.trigger("refresh"), this.setup(), this.optionsLogic(), this.$element.addClass(this.options.refreshClass), this.update(), this.$element.removeClass(this.options.refreshClass), this.leave("refreshing"), this.trigger("refreshed")
            }, e.prototype.onThrottledResize = function () {
                b.clearTimeout(this.resizeTimer), this.resizeTimer = b.setTimeout(this._handlers.onResize, this.settings.responsiveRefreshRate)
            }, e.prototype.onResize = function () {
                return !!this._items.length && (this._width !== this.$element.width() && (!!this.$element.is(":visible") && (this.enter("resizing"), this.trigger("resize").isDefaultPrevented() ? (this.leave("resizing"), !1) : (this.invalidate("width"), this.refresh(), this.leave("resizing"), void this.trigger("resized")))))
            }, e.prototype.registerEventHandlers = function () {
                a.support.transition && this.$stage.on(a.support.transition.end + ".owl.core", a.proxy(this.onTransitionEnd, this)), this.settings.responsive !== !1 && this.on(b, "resize", this._handlers.onThrottledResize), this.settings.mouseDrag && (this.$element.addClass(this.options.dragClass), this.$stage.on("mousedown.owl.core", a.proxy(this.onDragStart, this)), this.$stage.on("dragstart.owl.core selectstart.owl.core", function () {
                    return !1
                })), this.settings.touchDrag && (this.$stage.on("touchstart.owl.core", a.proxy(this.onDragStart, this)), this.$stage.on("touchcancel.owl.core", a.proxy(this.onDragEnd, this)))
            }, e.prototype.onDragStart = function (b) {
                var d = null;
                3 !== b.which && (a.support.transform ? (d = this.$stage.css("transform").replace(/.*\(|\)| /g, "").split(","), d = {
                    x: d[16 === d.length ? 12 : 4],
                    y: d[16 === d.length ? 13 : 5]
                }) : (d = this.$stage.position(), d = {
                    x: this.settings.rtl ? d.left + this.$stage.width() - this.width() + this.settings.margin : d.left,
                    y: d.top
                }), this.is("animating") && (a.support.transform ? this.animate(d.x) : this.$stage.stop(), this.invalidate("position")), this.$element.toggleClass(this.options.grabClass, "mousedown" === b.type), this.speed(0), this._drag.time = (new Date).getTime(), this._drag.target = a(b.target), this._drag.stage.start = d, this._drag.stage.current = d, this._drag.pointer = this.pointer(b), a(c).on("mouseup.owl.core touchend.owl.core", a.proxy(this.onDragEnd, this)), a(c).one("mousemove.owl.core touchmove.owl.core", a.proxy(function (b) {
                    var d = this.difference(this._drag.pointer, this.pointer(b));
                    a(c).on("mousemove.owl.core touchmove.owl.core", a.proxy(this.onDragMove, this)), Math.abs(d.x) < Math.abs(d.y) && this.is("valid") || (b.preventDefault(), this.enter("dragging"), this.trigger("drag"))
                }, this)))
            }, e.prototype.onDragMove = function (a) {
                var b = null, c = null, d = null, e = this.difference(this._drag.pointer, this.pointer(a)),
                    f = this.difference(this._drag.stage.start, e);
                this.is("dragging") && (a.preventDefault(), this.settings.loop ? (b = this.coordinates(this.minimum()), c = this.coordinates(this.maximum() + 1) - b, f.x = ((f.x - b) % c + c) % c + b) : (b = this.settings.rtl ? this.coordinates(this.maximum()) : this.coordinates(this.minimum()), c = this.settings.rtl ? this.coordinates(this.minimum()) : this.coordinates(this.maximum()), d = this.settings.pullDrag ? -1 * e.x / 5 : 0, f.x = Math.max(Math.min(f.x, b + d), c + d)), this._drag.stage.current = f, this.animate(f.x))
            }, e.prototype.onDragEnd = function (b) {
                var d = this.difference(this._drag.pointer, this.pointer(b)), e = this._drag.stage.current,
                    f = d.x > 0 ^ this.settings.rtl ? "left" : "right";
                a(c).off(".owl.core"), this.$element.removeClass(this.options.grabClass), (0 !== d.x && this.is("dragging") || !this.is("valid")) && (this.speed(this.settings.dragEndSpeed || this.settings.smartSpeed), this.current(this.closest(e.x, 0 !== d.x ? f : this._drag.direction)), this.invalidate("position"), this.update(), this._drag.direction = f, (Math.abs(d.x) > 3 || (new Date).getTime() - this._drag.time > 300) && this._drag.target.one("click.owl.core", function () {
                    return !1
                })), this.is("dragging") && (this.leave("dragging"), this.trigger("dragged"))
            }, e.prototype.closest = function (b, c) {
                var d = -1, e = 30, f = this.width(), g = this.coordinates();
                return this.settings.freeDrag || a.each(g, a.proxy(function (a, h) {
                    return "left" === c && b > h - e && b < h + e ? d = a : "right" === c && b > h - f - e && b < h - f + e ? d = a + 1 : this.op(b, "<", h) && this.op(b, ">", g[a + 1] || h - f) && (d = "left" === c ? a + 1 : a), d === -1
                }, this)), this.settings.loop || (this.op(b, ">", g[this.minimum()]) ? d = b = this.minimum() : this.op(b, "<", g[this.maximum()]) && (d = b = this.maximum())), d
            }, e.prototype.animate = function (b) {
                var c = this.speed() > 0;
                this.is("animating") && this.onTransitionEnd(), c && (this.enter("animating"), this.trigger("translate")), a.support.transform3d && a.support.transition ? this.$stage.css({
                    transform: "translate3d(" + b + "px,0px,0px)",
                    transition: this.speed() / 1e3 + "s"
                }) : c ? this.$stage.animate({left: b + "px"}, this.speed(), this.settings.fallbackEasing, a.proxy(this.onTransitionEnd, this)) : this.$stage.css({left: b + "px"})
            }, e.prototype.is = function (a) {
                return this._states.current[a] && this._states.current[a] > 0
            }, e.prototype.current = function (a) {
                if (a === d) return this._current;
                if (0 === this._items.length) return d;
                if (a = this.normalize(a), this._current !== a) {
                    var b = this.trigger("change", {property: {name: "position", value: a}});
                    b.data !== d && (a = this.normalize(b.data)), this._current = a, this.invalidate("position"), this.trigger("changed", {
                        property: {
                            name: "position",
                            value: this._current
                        }
                    })
                }
                return this._current
            }, e.prototype.invalidate = function (b) {
                return "string" === a.type(b) && (this._invalidated[b] = !0, this.is("valid") && this.leave("valid")), a.map(this._invalidated, function (a, b) {
                    return b
                })
            }, e.prototype.reset = function (a) {
                a = this.normalize(a), a !== d && (this._speed = 0, this._current = a, this.suppress(["translate", "translated"]), this.animate(this.coordinates(a)), this.release(["translate", "translated"]))
            }, e.prototype.normalize = function (a, b) {
                var c = this._items.length, e = b ? 0 : this._clones.length;
                return !this.isNumeric(a) || c < 1 ? a = d : (a < 0 || a >= c + e) && (a = ((a - e / 2) % c + c) % c + e / 2), a
            }, e.prototype.relative = function (a) {
                return a -= this._clones.length / 2, this.normalize(a, !0)
            }, e.prototype.maximum = function (a) {
                var b, c, d, e = this.settings, f = this._coordinates.length;
                if (e.loop) f = this._clones.length / 2 + this._items.length - 1; else if (e.autoWidth || e.merge) {
                    for (b = this._items.length, c = this._items[--b].width(), d = this.$element.width(); b-- && (c += this._items[b].width() + this.settings.margin, !(c > d));) ;
                    f = b + 1
                } else f = e.center ? this._items.length - 1 : this._items.length - e.items;
                return a && (f -= this._clones.length / 2), Math.max(f, 0)
            }, e.prototype.minimum = function (a) {
                return a ? 0 : this._clones.length / 2
            }, e.prototype.items = function (a) {
                return a === d ? this._items.slice() : (a = this.normalize(a, !0), this._items[a])
            }, e.prototype.mergers = function (a) {
                return a === d ? this._mergers.slice() : (a = this.normalize(a, !0), this._mergers[a])
            }, e.prototype.clones = function (b) {
                var c = this._clones.length / 2, e = c + this._items.length, f = function (a) {
                    return a % 2 === 0 ? e + a / 2 : c - (a + 1) / 2
                };
                return b === d ? a.map(this._clones, function (a, b) {
                    return f(b)
                }) : a.map(this._clones, function (a, c) {
                    return a === b ? f(c) : null
                })
            }, e.prototype.speed = function (a) {
                return a !== d && (this._speed = a), this._speed
            }, e.prototype.coordinates = function (b) {
                var c, e = 1, f = b - 1;
                return b === d ? a.map(this._coordinates, a.proxy(function (a, b) {
                    return this.coordinates(b)
                }, this)) : (this.settings.center ? (this.settings.rtl && (e = -1, f = b + 1), c = this._coordinates[b], c += (this.width() - c + (this._coordinates[f] || 0)) / 2 * e) : c = this._coordinates[f] || 0, c = Math.ceil(c))
            }, e.prototype.duration = function (a, b, c) {
                return 0 === c ? 0 : Math.min(Math.max(Math.abs(b - a), 1), 6) * Math.abs(c || this.settings.smartSpeed)
            }, e.prototype.to = function (a, b) {
                var c = this.current(), d = null, e = a - this.relative(c), f = (e > 0) - (e < 0),
                    g = this._items.length, h = this.minimum(), i = this.maximum();
                this.settings.loop ? (!this.settings.rewind && Math.abs(e) > g / 2 && (e += f * -1 * g), a = c + e, d = ((a - h) % g + g) % g + h, d !== a && d - e <= i && d - e > 0 && (c = d - e, a = d, this.reset(c))) : this.settings.rewind ? (i += 1, a = (a % i + i) % i) : a = Math.max(h, Math.min(i, a)), this.speed(this.duration(c, a, b)), this.current(a), this.$element.is(":visible") && this.update()
            }, e.prototype.next = function (a) {
                a = a || !1, this.to(this.relative(this.current()) + 1, a)
            }, e.prototype.prev = function (a) {
                a = a || !1, this.to(this.relative(this.current()) - 1, a)
            }, e.prototype.onTransitionEnd = function (a) {
                if (a !== d && (a.stopPropagation(), (a.target || a.srcElement || a.originalTarget) !== this.$stage.get(0))) return !1;
                this.leave("animating"), this.trigger("translated")
            }, e.prototype.viewport = function () {
                var d;
                return this.options.responsiveBaseElement !== b ? d = a(this.options.responsiveBaseElement).width() : b.innerWidth ? d = b.innerWidth : c.documentElement && c.documentElement.clientWidth ? d = c.documentElement.clientWidth : console.warn("Can not detect viewport width."), d
            }, e.prototype.replace = function (b) {
                this.$stage.empty(), this._items = [], b && (b = b instanceof jQuery ? b : a(b)), this.settings.nestedItemSelector && (b = b.find("." + this.settings.nestedItemSelector)), b.filter(function () {
                    return 1 === this.nodeType
                }).each(a.proxy(function (a, b) {
                    b = this.prepare(b), this.$stage.append(b), this._items.push(b), this._mergers.push(1 * b.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)
                }, this)), this.reset(this.isNumeric(this.settings.startPosition) ? this.settings.startPosition : 0), this.invalidate("items")
            }, e.prototype.add = function (b, c) {
                var e = this.relative(this._current);
                c = c === d ? this._items.length : this.normalize(c, !0), b = b instanceof jQuery ? b : a(b), this.trigger("add", {
                    content: b,
                    position: c
                }), b = this.prepare(b), 0 === this._items.length || c === this._items.length ? (0 === this._items.length && this.$stage.append(b), 0 !== this._items.length && this._items[c - 1].after(b), this._items.push(b), this._mergers.push(1 * b.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)) : (this._items[c].before(b), this._items.splice(c, 0, b), this._mergers.splice(c, 0, 1 * b.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)), this._items[e] && this.reset(this._items[e].index()), this.invalidate("items"), this.trigger("added", {
                    content: b,
                    position: c
                })
            }, e.prototype.remove = function (a) {
                a = this.normalize(a, !0), a !== d && (this.trigger("remove", {
                    content: this._items[a],
                    position: a
                }), this._items[a].remove(), this._items.splice(a, 1), this._mergers.splice(a, 1), this.invalidate("items"), this.trigger("removed", {
                    content: null,
                    position: a
                }))
            }, e.prototype.preloadAutoWidthImages = function (b) {
                b.each(a.proxy(function (b, c) {
                    this.enter("pre-loading"), c = a(c), a(new Image).one("load", a.proxy(function (a) {
                        c.attr("src", a.target.src), c.css("opacity", 1), this.leave("pre-loading"), !this.is("pre-loading") && !this.is("initializing") && this.refresh()
                    }, this)).attr("src", c.attr("src") || c.attr("data-src") || c.attr("data-src-retina"))
                }, this))
            }, e.prototype.destroy = function () {
                this.$element.off(".owl.core"), this.$stage.off(".owl.core"), a(c).off(".owl.core"), this.settings.responsive !== !1 && (b.clearTimeout(this.resizeTimer), this.off(b, "resize", this._handlers.onThrottledResize));
                for (var d in this._plugins) this._plugins[d].destroy();
                this.$stage.children(".cloned").remove(), this.$stage.unwrap(), this.$stage.children().contents().unwrap(), this.$stage.children().unwrap(), this.$element.removeClass(this.options.refreshClass).removeClass(this.options.loadingClass).removeClass(this.options.loadedClass).removeClass(this.options.rtlClass).removeClass(this.options.dragClass).removeClass(this.options.grabClass).attr("class", this.$element.attr("class").replace(new RegExp(this.options.responsiveClass + "-\\S+\\s", "g"), "")).removeData("owl.carousel")
            }, e.prototype.op = function (a, b, c) {
                var d = this.settings.rtl;
                switch (b) {
                    case"<":
                        return d ? a > c : a < c;
                    case">":
                        return d ? a < c : a > c;
                    case">=":
                        return d ? a <= c : a >= c;
                    case"<=":
                        return d ? a >= c : a <= c
                }
            }, e.prototype.on = function (a, b, c, d) {
                a.addEventListener ? a.addEventListener(b, c, d) : a.attachEvent && a.attachEvent("on" + b, c)
            }, e.prototype.off = function (a, b, c, d) {
                a.removeEventListener ? a.removeEventListener(b, c, d) : a.detachEvent && a.detachEvent("on" + b, c)
            }, e.prototype.trigger = function (b, c, d, f, g) {
                var h = {item: {count: this._items.length, index: this.current()}},
                    i = a.camelCase(a.grep(["on", b, d], function (a) {
                        return a
                    }).join("-").toLowerCase()),
                    j = a.Event([b, "owl", d || "carousel"].join(".").toLowerCase(), a.extend({relatedTarget: this}, h, c));
                return this._supress[b] || (a.each(this._plugins, function (a, b) {
                    b.onTrigger && b.onTrigger(j)
                }), this.register({
                    type: e.Type.Event,
                    name: b
                }), this.$element.trigger(j), this.settings && "function" == typeof this.settings[i] && this.settings[i].call(this, j)), j
            }, e.prototype.enter = function (b) {
                a.each([b].concat(this._states.tags[b] || []), a.proxy(function (a, b) {
                    this._states.current[b] === d && (this._states.current[b] = 0), this._states.current[b]++
                }, this))
            }, e.prototype.leave = function (b) {
                a.each([b].concat(this._states.tags[b] || []), a.proxy(function (a, b) {
                    this._states.current[b]--
                }, this))
            }, e.prototype.register = function (b) {
                if (b.type === e.Type.Event) {
                    if (a.event.special[b.name] || (a.event.special[b.name] = {}), !a.event.special[b.name].owl) {
                        var c = a.event.special[b.name]._default;
                        a.event.special[b.name]._default = function (a) {
                            return !c || !c.apply || a.namespace && a.namespace.indexOf("owl") !== -1 ? a.namespace && a.namespace.indexOf("owl") > -1 : c.apply(this, arguments)
                        }, a.event.special[b.name].owl = !0
                    }
                } else b.type === e.Type.State && (this._states.tags[b.name] ? this._states.tags[b.name] = this._states.tags[b.name].concat(b.tags) : this._states.tags[b.name] = b.tags, this._states.tags[b.name] = a.grep(this._states.tags[b.name], a.proxy(function (c, d) {
                    return a.inArray(c, this._states.tags[b.name]) === d
                }, this)))
            }, e.prototype.suppress = function (b) {
                a.each(b, a.proxy(function (a, b) {
                    this._supress[b] = !0
                }, this))
            }, e.prototype.release = function (b) {
                a.each(b, a.proxy(function (a, b) {
                    delete this._supress[b]
                }, this))
            }, e.prototype.pointer = function (a) {
                var c = {x: null, y: null};
                return a = a.originalEvent || a || b.event, a = a.touches && a.touches.length ? a.touches[0] : a.changedTouches && a.changedTouches.length ? a.changedTouches[0] : a, a.pageX ? (c.x = a.pageX, c.y = a.pageY) : (c.x = a.clientX, c.y = a.clientY), c
            }, e.prototype.isNumeric = function (a) {
                return !isNaN(parseFloat(a))
            }, e.prototype.difference = function (a, b) {
                return {x: a.x - b.x, y: a.y - b.y}
            }, a.fn.owlCarousel = function (b) {
                var c = Array.prototype.slice.call(arguments, 1);
                return this.each(function () {
                    var d = a(this), f = d.data("owl.carousel");
                    f || (f = new e(this, "object" == typeof b && b), d.data("owl.carousel", f), a.each(["next", "prev", "to", "destroy", "refresh", "replace", "add", "remove"], function (b, c) {
                        f.register({
                            type: e.Type.Event,
                            name: c
                        }), f.$element.on(c + ".owl.carousel.core", a.proxy(function (a) {
                            a.namespace && a.relatedTarget !== this && (this.suppress([c]), f[c].apply(this, [].slice.call(arguments, 1)), this.release([c]))
                        }, f))
                    })), "string" == typeof b && "_" !== b.charAt(0) && f[b].apply(f, c)
                })
            }, a.fn.owlCarousel.Constructor = e
        }(window.Zepto || window.jQuery, window, document), function (a, b, c, d) {
            var e = function (b) {
                this._core = b, this._interval = null, this._visible = null, this._handlers = {
                    "initialized.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._core.settings.autoRefresh && this.watch()
                    }, this)
                }, this._core.options = a.extend({}, e.Defaults, this._core.options), this._core.$element.on(this._handlers)
            };
            e.Defaults = {autoRefresh: !0, autoRefreshInterval: 500}, e.prototype.watch = function () {
                this._interval || (this._visible = this._core.$element.is(":visible"), this._interval = b.setInterval(a.proxy(this.refresh, this), this._core.settings.autoRefreshInterval))
            }, e.prototype.refresh = function () {
                this._core.$element.is(":visible") !== this._visible && (this._visible = !this._visible, this._core.$element.toggleClass("owl-hidden", !this._visible), this._visible && this._core.invalidate("width") && this._core.refresh())
            }, e.prototype.destroy = function () {
                var a, c;
                b.clearInterval(this._interval);
                for (a in this._handlers) this._core.$element.off(a, this._handlers[a]);
                for (c in Object.getOwnPropertyNames(this)) "function" != typeof this[c] && (this[c] = null)
            }, a.fn.owlCarousel.Constructor.Plugins.AutoRefresh = e
        }(window.Zepto || window.jQuery, window, document), function (a, b, c, d) {
            var e = function (b) {
                this._core = b, this._loaded = [], this._handlers = {
                    "initialized.owl.carousel change.owl.carousel resized.owl.carousel": a.proxy(function (b) {
                        if (b.namespace && this._core.settings && this._core.settings.lazyLoad && (b.property && "position" == b.property.name || "initialized" == b.type)) for (var c = this._core.settings, e = c.center && Math.ceil(c.items / 2) || c.items, f = c.center && e * -1 || 0, g = (b.property && b.property.value !== d ? b.property.value : this._core.current()) + f, h = this._core.clones().length, i = a.proxy(function (a, b) {
                            this.load(b)
                        }, this); f++ < e;) this.load(h / 2 + this._core.relative(g)), h && a.each(this._core.clones(this._core.relative(g)), i), g++
                    }, this)
                }, this._core.options = a.extend({}, e.Defaults, this._core.options), this._core.$element.on(this._handlers)
            };
            e.Defaults = {lazyLoad: !1}, e.prototype.load = function (c) {
                var d = this._core.$stage.children().eq(c), e = d && d.find(".owl-lazy");
                !e || a.inArray(d.get(0), this._loaded) > -1 || (e.each(a.proxy(function (c, d) {
                    var e, f = a(d), g = b.devicePixelRatio > 1 && f.attr("data-src-retina") || f.attr("data-src");
                    this._core.trigger("load", {
                        element: f,
                        url: g
                    }, "lazy"), f.is("img") ? f.one("load.owl.lazy", a.proxy(function () {
                        f.css("opacity", 1), this._core.trigger("loaded", {element: f, url: g}, "lazy")
                    }, this)).attr("src", g) : (e = new Image, e.onload = a.proxy(function () {
                        f.css({
                            "background-image": 'url("' + g + '")',
                            opacity: "1"
                        }), this._core.trigger("loaded", {element: f, url: g}, "lazy")
                    }, this), e.src = g)
                }, this)), this._loaded.push(d.get(0)))
            }, e.prototype.destroy = function () {
                var a, b;
                for (a in this.handlers) this._core.$element.off(a, this.handlers[a]);
                for (b in Object.getOwnPropertyNames(this)) "function" != typeof this[b] && (this[b] = null)
            }, a.fn.owlCarousel.Constructor.Plugins.Lazy = e
        }(window.Zepto || window.jQuery, window, document), function (a, b, c, d) {
            var e = function (b) {
                this._core = b, this._handlers = {
                    "initialized.owl.carousel refreshed.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._core.settings.autoHeight && this.update()
                    }, this), "changed.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._core.settings.autoHeight && "position" == a.property.name && this.update()
                    }, this), "loaded.owl.lazy": a.proxy(function (a) {
                        a.namespace && this._core.settings.autoHeight && a.element.closest("." + this._core.settings.itemClass).index() === this._core.current() && this.update()
                    }, this)
                }, this._core.options = a.extend({}, e.Defaults, this._core.options), this._core.$element.on(this._handlers)
            };
            e.Defaults = {autoHeight: !1, autoHeightClass: "owl-height"}, e.prototype.update = function () {
                var b = this._core._current, c = b + this._core.settings.items,
                    d = this._core.$stage.children().toArray().slice(b, c), e = [], f = 0;
                a.each(d, function (b, c) {
                    e.push(a(c).height())
                }), f = Math.max.apply(null, e), this._core.$stage.parent().height(f).addClass(this._core.settings.autoHeightClass)
            }, e.prototype.destroy = function () {
                var a, b;
                for (a in this._handlers) this._core.$element.off(a, this._handlers[a]);
                for (b in Object.getOwnPropertyNames(this)) "function" != typeof this[b] && (this[b] = null)
            }, a.fn.owlCarousel.Constructor.Plugins.AutoHeight = e
        }(window.Zepto || window.jQuery, window, document), function (a, b, c, d) {
            var e = function (b) {
                this._core = b, this._videos = {}, this._playing = null, this._handlers = {
                    "initialized.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._core.register({type: "state", name: "playing", tags: ["interacting"]})
                    }, this), "resize.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._core.settings.video && this.isInFullScreen() && a.preventDefault()
                    }, this), "refreshed.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._core.is("resizing") && this._core.$stage.find(".cloned .owl-video-frame").remove()
                    }, this), "changed.owl.carousel": a.proxy(function (a) {
                        a.namespace && "position" === a.property.name && this._playing && this.stop()
                    }, this), "prepared.owl.carousel": a.proxy(function (b) {
                        if (b.namespace) {
                            var c = a(b.content).find(".owl-video");
                            c.length && (c.css("display", "none"), this.fetch(c, a(b.content)))
                        }
                    }, this)
                }, this._core.options = a.extend({}, e.Defaults, this._core.options), this._core.$element.on(this._handlers), this._core.$element.on("click.owl.video", ".owl-video-play-icon", a.proxy(function (a) {
                    this.play(a)
                }, this))
            };
            e.Defaults = {video: !1, videoHeight: !1, videoWidth: !1}, e.prototype.fetch = function (a, b) {
                var c = function () {
                        return a.attr("data-vimeo-id") ? "vimeo" : a.attr("data-vzaar-id") ? "vzaar" : "youtube"
                    }(), d = a.attr("data-vimeo-id") || a.attr("data-youtube-id") || a.attr("data-vzaar-id"),
                    e = a.attr("data-width") || this._core.settings.videoWidth,
                    f = a.attr("data-height") || this._core.settings.videoHeight, g = a.attr("href");
                if (!g) throw new Error("Missing video URL.");
                if (d = g.match(/(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/), d[3].indexOf("youtu") > -1) c = "youtube"; else if (d[3].indexOf("vimeo") > -1) c = "vimeo"; else {
                    if (!(d[3].indexOf("vzaar") > -1)) throw new Error("Video URL not supported.");
                    c = "vzaar"
                }
                d = d[6], this._videos[g] = {
                    type: c,
                    id: d,
                    width: e,
                    height: f
                }, b.attr("data-video", g), this.thumbnail(a, this._videos[g])
            }, e.prototype.thumbnail = function (b, c) {
                var d, e, f,
                    g = c.width && c.height ? 'style="width:' + c.width + "px;height:" + c.height + 'px;"' : "",
                    h = b.find("img"), i = "src", j = "", k = this._core.settings, l = function (a) {
                        e = '<div class="owl-video-play-icon"></div>', d = k.lazyLoad ? '<div class="owl-video-tn ' + j + '" ' + i + '="' + a + '"></div>' : '<div class="owl-video-tn" style="opacity:1;background-image:url("https://zaimsoon.ru/' + a + ')"></div>', b.after(d), b.after(e)
                    };
                if (b.wrap('<div class="owl-video-wrapper"' + g + "></div>"), this._core.settings.lazyLoad && (i = "data-src", j = "owl-lazy"), h.length) return l(h.attr(i)), h.remove(), !1;
                "youtube" === c.type ? (f = "//img.youtube.com/vi/" + c.id + "/hqdefault.jpg", l(f)) : "vimeo" === c.type ? a.ajax({
                    type: "GET",
                    url: "//vimeo.com/api/v2/video/" + c.id + ".json",
                    jsonp: "callback",
                    dataType: "jsonp",
                    success: function (a) {
                        f = a[0].thumbnail_large, l(f)
                    }
                }) : "vzaar" === c.type && a.ajax({
                    type: "GET",
                    url: "//vzaar.com/api/videos/" + c.id + ".json",
                    jsonp: "callback",
                    dataType: "jsonp",
                    success: function (a) {
                        f = a.framegrab_url, l(f)
                    }
                })
            }, e.prototype.stop = function () {
                this._core.trigger("stop", null, "video"), this._playing.find(".owl-video-frame").remove(), this._playing.removeClass("owl-video-playing"), this._playing = null, this._core.leave("playing"), this._core.trigger("stopped", null, "video")
            }, e.prototype.play = function (b) {
                var c, d = a(b.target), e = d.closest("." + this._core.settings.itemClass),
                    f = this._videos[e.attr("data-video")], g = f.width || "100%",
                    h = f.height || this._core.$stage.height();
                this._playing || (this._core.enter("playing"), this._core.trigger("play", null, "video"), e = this._core.items(this._core.relative(e.index())), this._core.reset(e.index()), "youtube" === f.type ? c = '<iframe width="' + g + '" height="' + h + '" src="https://www.youtube.com/embed/' + f.id + "?autoplay=1&rel=0&v=" + f.id + '" frameborder="0" allowfullscreen></iframe>' : "vimeo" === f.type ? c = '<iframe src="https://player.vimeo.com/video/' + f.id + '?autoplay=1" width="' + g + '" height="' + h + '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>' : "vzaar" === f.type && (c = '<iframe frameborder="0"height="' + h + '"width="' + g + '" allowfullscreen mozallowfullscreen webkitAllowFullScreen src="https://view.vzaar.com/' + f.id + '/player?autoplay=true"></iframe>'), a('<div class="owl-video-frame">' + c + "</div>").insertAfter(e.find(".owl-video")), this._playing = e.addClass("owl-video-playing"))
            }, e.prototype.isInFullScreen = function () {
                var b = c.fullscreenElement || c.mozFullScreenElement || c.webkitFullscreenElement;
                return b && a(b).parent().hasClass("owl-video-frame")
            }, e.prototype.destroy = function () {
                var a, b;
                this._core.$element.off("click.owl.video");
                for (a in this._handlers) this._core.$element.off(a, this._handlers[a]);
                for (b in Object.getOwnPropertyNames(this)) "function" != typeof this[b] && (this[b] = null)
            }, a.fn.owlCarousel.Constructor.Plugins.Video = e
        }(window.Zepto || window.jQuery, window, document), function (a, b, c, d) {
            var e = function (b) {
                this.core = b, this.core.options = a.extend({}, e.Defaults, this.core.options), this.swapping = !0, this.previous = d, this.next = d, this.handlers = {
                    "change.owl.carousel": a.proxy(function (a) {
                        a.namespace && "position" == a.property.name && (this.previous = this.core.current(), this.next = a.property.value)
                    }, this), "drag.owl.carousel dragged.owl.carousel translated.owl.carousel": a.proxy(function (a) {
                        a.namespace && (this.swapping = "translated" == a.type)
                    }, this), "translate.owl.carousel": a.proxy(function (a) {
                        a.namespace && this.swapping && (this.core.options.animateOut || this.core.options.animateIn) && this.swap()
                    }, this)
                }, this.core.$element.on(this.handlers)
            };
            e.Defaults = {animateOut: !1, animateIn: !1}, e.prototype.swap = function () {
                if (1 === this.core.settings.items && a.support.animation && a.support.transition) {
                    this.core.speed(0);
                    var b, c = a.proxy(this.clear, this), d = this.core.$stage.children().eq(this.previous),
                        e = this.core.$stage.children().eq(this.next), f = this.core.settings.animateIn,
                        g = this.core.settings.animateOut;
                    this.core.current() !== this.previous && (g && (b = this.core.coordinates(this.previous) - this.core.coordinates(this.next), d.one(a.support.animation.end, c).css({left: b + "px"}).addClass("animated owl-animated-out").addClass(g)), f && e.one(a.support.animation.end, c).addClass("animated owl-animated-in").addClass(f))
                }
            }, e.prototype.clear = function (b) {
                a(b.target).css({left: ""}).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut), this.core.onTransitionEnd()
            }, e.prototype.destroy = function () {
                var a, b;
                for (a in this.handlers) this.core.$element.off(a, this.handlers[a]);
                for (b in Object.getOwnPropertyNames(this)) "function" != typeof this[b] && (this[b] = null)
            },
                a.fn.owlCarousel.Constructor.Plugins.Animate = e
        }(window.Zepto || window.jQuery, window, document), function (a, b, c, d) {
            var e = function (b) {
                this._core = b, this._timeout = null, this._paused = !1, this._handlers = {
                    "changed.owl.carousel": a.proxy(function (a) {
                        a.namespace && "settings" === a.property.name ? this._core.settings.autoplay ? this.play() : this.stop() : a.namespace && "position" === a.property.name && this._core.settings.autoplay && this._setAutoPlayInterval()
                    }, this), "initialized.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._core.settings.autoplay && this.play()
                    }, this), "play.owl.autoplay": a.proxy(function (a, b, c) {
                        a.namespace && this.play(b, c)
                    }, this), "stop.owl.autoplay": a.proxy(function (a) {
                        a.namespace && this.stop()
                    }, this), "mouseover.owl.autoplay": a.proxy(function () {
                        this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause()
                    }, this), "mouseleave.owl.autoplay": a.proxy(function () {
                        this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.play()
                    }, this), "touchstart.owl.core": a.proxy(function () {
                        this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause()
                    }, this), "touchend.owl.core": a.proxy(function () {
                        this._core.settings.autoplayHoverPause && this.play()
                    }, this)
                }, this._core.$element.on(this._handlers), this._core.options = a.extend({}, e.Defaults, this._core.options)
            };
            e.Defaults = {
                autoplay: !1,
                autoplayTimeout: 5e3,
                autoplayHoverPause: !1,
                autoplaySpeed: !1
            }, e.prototype.play = function (a, b) {
                this._paused = !1, this._core.is("rotating") || (this._core.enter("rotating"), this._setAutoPlayInterval())
            }, e.prototype._getNextTimeout = function (d, e) {
                return this._timeout && b.clearTimeout(this._timeout), b.setTimeout(a.proxy(function () {
                    this._paused || this._core.is("busy") || this._core.is("interacting") || c.hidden || this._core.next(e || this._core.settings.autoplaySpeed)
                }, this), d || this._core.settings.autoplayTimeout)
            }, e.prototype._setAutoPlayInterval = function () {
                this._timeout = this._getNextTimeout()
            }, e.prototype.stop = function () {
                this._core.is("rotating") && (b.clearTimeout(this._timeout), this._core.leave("rotating"))
            }, e.prototype.pause = function () {
                this._core.is("rotating") && (this._paused = !0)
            }, e.prototype.destroy = function () {
                var a, b;
                this.stop();
                for (a in this._handlers) this._core.$element.off(a, this._handlers[a]);
                for (b in Object.getOwnPropertyNames(this)) "function" != typeof this[b] && (this[b] = null)
            }, a.fn.owlCarousel.Constructor.Plugins.autoplay = e
        }(window.Zepto || window.jQuery, window, document), function (a, b, c, d) {
            "use strict";
            var e = function (b) {
                this._core = b, this._initialized = !1, this._pages = [], this._controls = {}, this._templates = [], this.$element = this._core.$element, this._overrides = {
                    next: this._core.next,
                    prev: this._core.prev,
                    to: this._core.to
                }, this._handlers = {
                    "prepared.owl.carousel": a.proxy(function (b) {
                        b.namespace && this._core.settings.dotsData && this._templates.push('<div class="' + this._core.settings.dotClass + '">' + a(b.content).find("[data-dot]").addBack("[data-dot]").attr("data-dot") + "</div>")
                    }, this), "added.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._core.settings.dotsData && this._templates.splice(a.position, 0, this._templates.pop())
                    }, this), "remove.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._core.settings.dotsData && this._templates.splice(a.position, 1)
                    }, this), "changed.owl.carousel": a.proxy(function (a) {
                        a.namespace && "position" == a.property.name && this.draw()
                    }, this), "initialized.owl.carousel": a.proxy(function (a) {
                        a.namespace && !this._initialized && (this._core.trigger("initialize", null, "navigation"), this.initialize(), this.update(), this.draw(), this._initialized = !0, this._core.trigger("initialized", null, "navigation"))
                    }, this), "refreshed.owl.carousel": a.proxy(function (a) {
                        a.namespace && this._initialized && (this._core.trigger("refresh", null, "navigation"), this.update(), this.draw(), this._core.trigger("refreshed", null, "navigation"))
                    }, this)
                }, this._core.options = a.extend({}, e.Defaults, this._core.options), this.$element.on(this._handlers)
            };
            e.Defaults = {
                nav: !1,
                navText: ["prev", "next"],
                navSpeed: !1,
                navElement: "div",
                navContainer: !1,
                navContainerClass: "owl-nav",
                navClass: ["owl-prev", "owl-next"],
                slideBy: 1,
                dotClass: "owl-dot",
                dotsClass: "owl-dots",
                dots: !0,
                dotsEach: !1,
                dotsData: !1,
                dotsSpeed: !1,
                dotsContainer: !1
            }, e.prototype.initialize = function () {
                var b, c = this._core.settings;
                this._controls.$relative = (c.navContainer ? a(c.navContainer) : a("<div>").addClass(c.navContainerClass).appendTo(this.$element)).addClass("disabled"), this._controls.$previous = a("<" + c.navElement + ">").addClass(c.navClass[0]).html(c.navText[0]).prependTo(this._controls.$relative).on("click", a.proxy(function (a) {
                    this.prev(c.navSpeed)
                }, this)), this._controls.$next = a("<" + c.navElement + ">").addClass(c.navClass[1]).html(c.navText[1]).appendTo(this._controls.$relative).on("click", a.proxy(function (a) {
                    this.next(c.navSpeed)
                }, this)), c.dotsData || (this._templates = [a("<div>").addClass(c.dotClass).append(a("<span>")).prop("outerHTML")]), this._controls.$absolute = (c.dotsContainer ? a(c.dotsContainer) : a("<div>").addClass(c.dotsClass).appendTo(this.$element)).addClass("disabled"), this._controls.$absolute.on("click", "div", a.proxy(function (b) {
                    var d = a(b.target).parent().is(this._controls.$absolute) ? a(b.target).index() : a(b.target).parent().index();
                    b.preventDefault(), this.to(d, c.dotsSpeed)
                }, this));
                for (b in this._overrides) this._core[b] = a.proxy(this[b], this)
            }, e.prototype.destroy = function () {
                var a, b, c, d;
                for (a in this._handlers) this.$element.off(a, this._handlers[a]);
                for (b in this._controls) this._controls[b].remove();
                for (d in this.overides) this._core[d] = this._overrides[d];
                for (c in Object.getOwnPropertyNames(this)) "function" != typeof this[c] && (this[c] = null)
            }, e.prototype.update = function () {
                var a, b, c, d = this._core.clones().length / 2, e = d + this._core.items().length,
                    f = this._core.maximum(!0), g = this._core.settings,
                    h = g.center || g.autoWidth || g.dotsData ? 1 : g.dotsEach || g.items;
                if ("page" !== g.slideBy && (g.slideBy = Math.min(g.slideBy, g.items)), g.dots || "page" == g.slideBy) for (this._pages = [], a = d, b = 0, c = 0; a < e; a++) {
                    if (b >= h || 0 === b) {
                        if (this._pages.push({
                            start: Math.min(f, a - d),
                            end: a - d + h - 1
                        }), Math.min(f, a - d) === f) break;
                        b = 0, ++c
                    }
                    b += this._core.mergers(this._core.relative(a))
                }
            }, e.prototype.draw = function () {
                var b, c = this._core.settings, d = this._core.items().length <= c.items,
                    e = this._core.relative(this._core.current()), f = c.loop || c.rewind;
                this._controls.$relative.toggleClass("disabled", !c.nav || d), c.nav && (this._controls.$previous.toggleClass("disabled", !f && e <= this._core.minimum(!0)), this._controls.$next.toggleClass("disabled", !f && e >= this._core.maximum(!0))), this._controls.$absolute.toggleClass("disabled", !c.dots || d), c.dots && (b = this._pages.length - this._controls.$absolute.children().length, c.dotsData && 0 !== b ? this._controls.$absolute.html(this._templates.join("")) : b > 0 ? this._controls.$absolute.append(new Array(b + 1).join(this._templates[0])) : b < 0 && this._controls.$absolute.children().slice(b).remove(), this._controls.$absolute.find(".active").removeClass("active"), this._controls.$absolute.children().eq(a.inArray(this.current(), this._pages)).addClass("active"))
            }, e.prototype.onTrigger = function (b) {
                var c = this._core.settings;
                b.page = {
                    index: a.inArray(this.current(), this._pages),
                    count: this._pages.length,
                    size: c && (c.center || c.autoWidth || c.dotsData ? 1 : c.dotsEach || c.items)
                }
            }, e.prototype.current = function () {
                var b = this._core.relative(this._core.current());
                return a.grep(this._pages, a.proxy(function (a, c) {
                    return a.start <= b && a.end >= b
                }, this)).pop()
            }, e.prototype.getPosition = function (b) {
                var c, d, e = this._core.settings;
                return "page" == e.slideBy ? (c = a.inArray(this.current(), this._pages), d = this._pages.length, b ? ++c : --c, c = this._pages[(c % d + d) % d].start) : (c = this._core.relative(this._core.current()), d = this._core.items().length, b ? c += e.slideBy : c -= e.slideBy), c
            }, e.prototype.next = function (b) {
                a.proxy(this._overrides.to, this._core)(this.getPosition(!0), b)
            }, e.prototype.prev = function (b) {
                a.proxy(this._overrides.to, this._core)(this.getPosition(!1), b)
            }, e.prototype.to = function (b, c, d) {
                var e;
                !d && this._pages.length ? (e = this._pages.length, a.proxy(this._overrides.to, this._core)(this._pages[(b % e + e) % e].start, c)) : a.proxy(this._overrides.to, this._core)(b, c)
            }, a.fn.owlCarousel.Constructor.Plugins.Navigation = e
        }(window.Zepto || window.jQuery, window, document), function (a, b, c, d) {
            "use strict";
            var e = function (c) {
                this._core = c, this._hashes = {}, this.$element = this._core.$element, this._handlers = {
                    "initialized.owl.carousel": a.proxy(function (c) {
                        c.namespace && "URLHash" === this._core.settings.startPosition && a(b).trigger("hashchange.owl.navigation")
                    }, this), "prepared.owl.carousel": a.proxy(function (b) {
                        if (b.namespace) {
                            var c = a(b.content).find("[data-hash]").addBack("[data-hash]").attr("data-hash");
                            if (!c) return;
                            this._hashes[c] = b.content
                        }
                    }, this), "changed.owl.carousel": a.proxy(function (c) {
                        if (c.namespace && "position" === c.property.name) {
                            var d = this._core.items(this._core.relative(this._core.current())),
                                e = a.map(this._hashes, function (a, b) {
                                    return a === d ? b : null
                                }).join();
                            if (!e || b.location.hash.slice(1) === e) return;
                            b.location.hash = e
                        }
                    }, this)
                }, this._core.options = a.extend({}, e.Defaults, this._core.options), this.$element.on(this._handlers), a(b).on("hashchange.owl.navigation", a.proxy(function (a) {
                    var c = b.location.hash.substring(1), e = this._core.$stage.children(),
                        f = this._hashes[c] && e.index(this._hashes[c]);
                    f !== d && f !== this._core.current() && this._core.to(this._core.relative(f), !1, !0)
                }, this))
            };
            e.Defaults = {URLhashListener: !1}, e.prototype.destroy = function () {
                var c, d;
                a(b).off("hashchange.owl.navigation");
                for (c in this._handlers) this._core.$element.off(c, this._handlers[c]);
                for (d in Object.getOwnPropertyNames(this)) "function" != typeof this[d] && (this[d] = null)
            }, a.fn.owlCarousel.Constructor.Plugins.Hash = e
        }(window.Zepto || window.jQuery, window, document), function (a, b, c, d) {
            function e(b, c) {
                var e = !1, f = b.charAt(0).toUpperCase() + b.slice(1);
                return a.each((b + " " + h.join(f + " ") + f).split(" "), function (a, b) {
                    if (g[b] !== d) return e = !c || b, !1
                }), e
            }

            function f(a) {
                return e(a, !0)
            }

            var g = a("<support>").get(0).style, h = "Webkit Moz O ms".split(" "), i = {
                transition: {
                    end: {
                        WebkitTransition: "webkitTransitionEnd",
                        MozTransition: "transitionend",
                        OTransition: "oTransitionEnd",
                        transition: "transitionend"
                    }
                },
                animation: {
                    end: {
                        WebkitAnimation: "webkitAnimationEnd",
                        MozAnimation: "animationend",
                        OAnimation: "oAnimationEnd",
                        animation: "animationend"
                    }
                }
            }, j = {
                csstransforms: function () {
                    return !!e("transform")
                }, csstransforms3d: function () {
                    return !!e("perspective")
                }, csstransitions: function () {
                    return !!e("transition")
                }, cssanimations: function () {
                    return !!e("animation")
                }
            };
            j.csstransitions() && (a.support.transition = String(f("transition")), a.support.transition.end = i.transition.end[a.support.transition]), j.cssanimations() && (a.support.animation = String(f("animation")), a.support.animation.end = i.animation.end[a.support.animation]), j.csstransforms() && (a.support.transform = String(f("transform")), a.support.transform3d = j.csstransforms3d())
        }(window.Zepto || window.jQuery, window, document);
        var fingerprint0 = $("#fingerprint").val(), ip = $("#ip").val(), my_timer = 0;
        $(function () {
            var i = setTimeout(function n() {
                if (my_timer++ , fingerprint0 = $("#fingerprint").val(), "" != fingerprint0) {
                    clearInterval(i);
                    var r = document.location.host, t = document.location.href;
                    // return console.log(ip), false, !1
                }
                i = setTimeout(n, 700)
            }, 700)
        });

        var loans = 0;
        var count_touch = 0;
        var scroll_sizeX = 0;
        var scroll_sizeY = 0;
        var ahctpac = 0;
        var isMobile2 = 0;
        var count_errors = 0;
        var time_to_come_now = new Date();

        if (typeof isMobile2 === "undefined") {
            var isMobile2 = false;
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
                /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile2 = true;
            else isMobile2 = false;
        }

        if (isMobile2) {
            document.querySelector('body').addEventListener('touchstart', function () {
                count_touch++;
            });
            document.body.addEventListener('touchmove', function (evt) {
                scroll_sizeX += parseInt(evt.changedTouches[0].pageX);
                scroll_sizeY += parseInt(evt.changedTouches[0].pageY);
            });
        } else {
            window.onscroll = function () {
                scroll_sizeY += window.pageYOffset || document.documentElement.scrollTop;
            };
            document.querySelector('body').addEventListener('click', function () {
                count_touch++;
            });
        }

        function addDate(numberOfYears) {
            var startDate = new Date();
            var returnDate = new Date(
                startDate.getFullYear() - numberOfYears,
                startDate.getMonth(),
                startDate.getDate(),
                startDate.getHours(),
                startDate.getMinutes(),
                startDate.getSeconds()
            );
            return returnDate;
        }
        function addDate2(numberOfDays, numberOfMonth, numberOfYears) {
            var startDate = new Date();
            var returnDate = new Date(
                numberOfYears,
                numberOfMonth - 1,
                numberOfDays,
                startDate.getHours(),
                startDate.getMinutes(),
                startDate.getSeconds());
            return returnDate;
        }
        function CheckTime() {
            var today = addDate2($('#birthdate').val().split('/')[0], $('#birthdate').val().split('/')[1], $('#birthdate').val().split('/')[2]).getTime();
            var from = addDate(18).getTime();
            var to = addDate(70).getTime();
            var withinRange = today <= from && today >= to;

            if (withinRange) {
                $('#birthdate').parent($('#birthdate')).find('.help-block2').css('display', 'none');
                $('#birthdate').parent().parent().prev().removeClass('label_er').addClass('label_true');
                $('#birthdate').removeClass('er');
                $('#birthdate').parent().removeClass('ex-error').addClass('ex-success');
                $('#birthdatestatus').removeClass('glyphicon-remove').addClass('glyphicon-ok');

                return true;
            } else {
                $('#birthdate').parent().parent().prev().addClass('label_er').removeClass('label_true');
                $('#birthdate').addClass('er');
                $('#birthdate').parent().removeClass('ex-success').addClass('ex-error');
                $('#birthdate').attr('placeholder', "Возраст должен быть от 18 до 70 лет");
                $('#birthdate').parent($('#birthdate')).find('.help-block2').css('display', 'inline-block');
                $('#birthdate').parent($('#birthdate')).find('.help-block2').text("Возраст должен быть от 18 до 70 лет");
                return false;
            }
        }

        function isInArray(value, array) {
            return array.indexOf(value) > -1;
        }

        function CheckTime2() {
            var today = addDate2($('#passportdate').val().split('/')[0], $('#passportdate').val().split('/')[1], $('#passportdate').val().split('/')[2]).getTime();
            var from = addDate(0).getTime();
            var to = addDate(100).getTime();
            var withinRange = today <= from && today >= to;

            if (withinRange) {
                $('#passportdate').parent($('#passportdate')).find('.help-block2').css('display', 'none');
                $('#passportdate').parent().parent().prev().removeClass('label_er').addClass('label_true');
                $('#passportdate').removeClass('er');
                $('#passportdate').parent().removeClass('ex-error').addClass('ex-success');
                $('#passportdatestatus').removeClass('glyphicon-remove').addClass('glyphicon-ok');
                var birth = $('#passportdate').val().split('/');
                $('select#passport_dd').append($("<option></option>").attr("value", birth[0]).text(birth[0]));
                $("select#passport_dd").val(birth[0]);
                $('select#passport_mm').append($("<option></option>").attr("value", birth[1]).text(birth[1]));
                $("select#passport_mm").val(birth[1]);
                $('select#passport_yyyy').append($("<option></option>").attr("value", birth[2]).text(birth[2]));
                $("select#passport_yyyy").val(birth[2]);
                return true;
            } else {
                $('#passportdate').parent().parent().prev().addClass('label_er').removeClass('label_true');
                $('#passportdate').addClass('er');
                $('#passportdate').parent().removeClass('ex-success').addClass('ex-error');
                $('#passportdate').attr('placeholder', "Возраст должен быть от 18 до 100 лет");
                $('#passportdate').parent($('#passportdate')).find('.help-block2').css('display', 'inline-block');
                $('#passportdate').parent($('#passportdate')).find('.help-block2').text("Возраст должен быть от 18 до 100 лет");
                return false;
            }
        }

        if (document.querySelector("#agree") != null && document.querySelector("#marketing") != null) {
            document.querySelector("#agree").addEventListener('click', function () {
                if (document.querySelector('#agree').checked && document.querySelector('#marketing').checked) {
                    if (document.querySelector('#next1') != null)
                        document.querySelector('#next1').style.visibility = 'visible';
                    else if (document.querySelector('#next1f') != null)
                        document.querySelector('#next1f').style.visibility = 'visible';
                } else {
                    if (document.querySelector('#next1') != null)
                        document.querySelector('#next1').style.visibility = 'hidden';
                    else if (document.querySelector('#next1f') != null)
                        document.querySelector('#next1f').style.visibility = 'hidden';
                }
            }, false);

            document.querySelector("#marketing").addEventListener('click', function () {
                if (document.querySelector('#agree').checked && document.querySelector('#marketing').checked) {
                    if (document.querySelector('#next1') != null)
                        document.querySelector('#next1').style.visibility = 'visible';
                    else if (document.querySelector('#next1f') != null)
                        document.querySelector('#next1f').style.visibility = 'visible';
                    else if (document.querySelector('#next1ff') != null)
                        document.querySelector('#next1ff').style.visibility = 'visible';
                } else {
                    if (document.querySelector('#next1') != null)
                        document.querySelector('#next1').style.visibility = 'hidden';
                    else if (document.querySelector('#next1f') != null)
                        document.querySelector('#next1f').style.visibility = 'hidden';
                }
            }, false);
        }

        var re = /^[а-яА-Я0-9\/]+$/i;
        var re_rc = /^[а-яА-Яё,\W\.\s-]+$/i;
        var re_email = /^[A-Z0-9._%+-]+(@mail.ru|@bk.ru|@inbox.ru|@list.ru|@yandex.ru|@ya.ru|@gmail.com|@rambler.ru|@mail.ua)$/i;
        var re_gmail = /^[A-Z0-9._%+-]+@gmail.com$/i;
        var re_int = /^\d+$/;
        var re_name = /^[а-яА-Яё,\W\.\s-]+$/i;
        var isWebvisor = new RegExp('^https?:\/\/([^/]+metrika.yandex\.(ru|ua|com|com\.tr|by|kz)|([^/]+\.)?webvisor\.com)').test(document.referrer);

        function error(msg, elem) {
            $('html, body').animate({
                scrollTop: elem.offset().top - 160
            }, 1000);
            elem.click();
            elem.blur();
            elem.parent(elem).find('.help-block2').css('display', 'inline-block');
        }

        function send_form(send, href) {

            if (typeof send == 'undefined') send = '';
            else send = 'send=true&';
            $.ajax({
                url:'/form/index',
                typeData: "json",
                method: "POST",
                async: false,
                data: $('form#anketa').serialize(),
                success: function(msg){
                    alert(msg);
                }
            });
            return false;
            $.get('/form/?' + send + $('form#anketa').serialize()).done(function (data) {
                if (typeof data.result != 'undefined' && data.result == 'OK') {
                    if (typeof data.id != 'undefined')
                        $('form#anketa input[name="id"]').val(data.id);
                    if (typeof data.redirect != 'undefined' && data.redirect) {
                        if (typeof window.obUnloader != 'undefined')
                            window.obUnloader.resetUnload();
                    }
                }
            });
        }

        function send_stats() {
            var xhr = new XMLHttpRequest();
            xhr.withCredentials = true;

            var _email, _display, _fingerprint = '';

            if (document.querySelector('#fingerprint')) {
                _fingerprint = document.querySelector('#fingerprint').value
            }

            if (document.querySelector('#email')) {
                _email = document.querySelector('#email').value
            }

            if (document.querySelector('#display').value == 1)
                _display = 'мобильник';
            else
                _display = 'декстоп';

            var body = 'fingerprint=' + encodeURIComponent(_fingerprint) +
                '&site=' + encodeURIComponent(document.location.href) +
                '&ip=' + encodeURIComponent('46.146.115.217') +
                '&email=' + encodeURIComponent(_email) +
                '&count_touch=' + encodeURIComponent(count_touch) +
                '&scroll_sizeX=' + encodeURIComponent(scroll_sizeX) +
                '&scroll_sizeY=' + encodeURIComponent(scroll_sizeY) +
                '&ahctpac=' + encodeURIComponent(ahctpac) +
                '&display=' + encodeURIComponent(_display) +
                '&count_errors=' + encodeURIComponent(count_errors) +
                '&time_to_come=' + encodeURIComponent(new Date(time_to_come_now).toLocaleString()) +
                // '&time_to_come_timestamp=' + encodeURIComponent(toTimestamp(data_in_site.time_to_come)) +
                '&is_localstorage=' + encodeURIComponent(data_in_site.is_localstorage) +
                '&is_coockie=' + encodeURIComponent(data_in_site.is_coockie) +
                '&count_visit=' + encodeURIComponent(data_in_site.count_visit) +
                '&time_spend=' + encodeURIComponent(
                    Math.ceil(Math.abs(new Date().getTime() - new Date(data_in_site.time_to_come).getTime()) / 1000)
                );
            '&refferer=' + encodeURIComponent(document.querySelector('[name=referer]').value);

            xhr.open("POST", 'https://zaimhome.ru/news7', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onreadystatechange == function () {
                if (rrr.readyState != 4 || rrr.status != 200) return;
                console.log(rrr.responseText);
            };

            xhr.send(body);
        }

        function send_clickfrod() {
            var xhr = new XMLHttpRequest();

            var _email, _fingerprint = '';

            if (document.querySelector('#fingerprint')) {
                _fingerprint = document.querySelector('#fingerprint').value
            }

            if (document.querySelector('#email')) {
                _email = document.querySelector('#email').value
            }

            var body = 'fingerprint=' + encodeURIComponent(_fingerprint) +
                '&site=' + encodeURIComponent(document.location.href) +
                '&email=' + encodeURIComponent(_email);

            xhr.open("POST", '/clickfrods', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onreadystatechange == function () {
                if (rrr.readyState != 4 || rrr.status != 200) return;
                console.log(rrr.responseText);
            };

            xhr.send(body);
        }

        function validate() {
            if (isWebvisor) return true;

            if (!validate1()) return false;
            if (!validate2()) return false;
            if (!validate3()) return false;
            else $('input[name="step"]').val('3');

            if (typeof window.obUnloader != 'undefined') {
                window.obUnloader.resetUnload();
            }

            return true;
        }

        function utf8_encode(str_data) {	// Encodes an ISO-8859-1 string to UTF-8
            //
            // +   original by: Webtoolkit.info (http://www.webtoolkit.info/)

            str_data = str_data.replace(/\r\n/g, "\n");
            var utftext = "";

            for (var n = 0; n < str_data.length; n++) {
                var c = str_data.charCodeAt(n);
                if (c < 128) {
                    utftext += String.fromCharCode(c);
                } else if ((c > 127) && (c < 2048)) {
                    utftext += String.fromCharCode((c >> 6) | 192);
                    utftext += String.fromCharCode((c & 63) | 128);
                } else {
                    utftext += String.fromCharCode((c >> 12) | 224);
                    utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                    utftext += String.fromCharCode((c & 63) | 128);
                }
            }

            return utftext;
        }


        function sha1(str) {	// Calculate the sha1 hash of a string
            //
            // +   original by: Webtoolkit.info (http://www.webtoolkit.info/)
            // + namespaced by: Michael White (http://crestidg.com)

            var rotate_left = function (n, s) {
                var t4 = (n << s) | (n >>> (32 - s));
                return t4;
            };

            var lsb_hex = function (val) {
                var str = "";
                var i;
                var vh;
                var vl;

                for (i = 0; i <= 6; i += 2) {
                    vh = (val >>> (i * 4 + 4)) & 0x0f;
                    vl = (val >>> (i * 4)) & 0x0f;
                    str += vh.toString(16) + vl.toString(16);
                }
                return str;
            };

            var cvt_hex = function (val) {
                var str = "";
                var i;
                var v;

                for (i = 7; i >= 0; i--) {
                    v = (val >>> (i * 4)) & 0x0f;
                    str += v.toString(16);
                }
                return str;
            };

            var blockstart;
            var i, j;
            var W = new Array(80);
            var H0 = 0x67452301;
            var H1 = 0xEFCDAB89;
            var H2 = 0x98BADCFE;
            var H3 = 0x10325476;
            var H4 = 0xC3D2E1F0;
            var A, B, C, D, E;
            var temp;

            str = this.utf8_encode(str);
            var str_len = str.length;

            var word_array = [];
            for (i = 0; i < str_len - 3; i += 4) {
                j = str.charCodeAt(i) << 24 | str.charCodeAt(i + 1) << 16 |
                    str.charCodeAt(i + 2) << 8 | str.charCodeAt(i + 3);
                word_array.push(j);
            }

            switch (str_len % 4) {
                case 0:
                    i = 0x080000000;
                    break;
                case 1:
                    i = str.charCodeAt(str_len - 1) << 24 | 0x0800000;
                    break;
                case 2:
                    i = str.charCodeAt(str_len - 2) << 24 | str.charCodeAt(str_len - 1) << 16 | 0x08000;
                    break;
                case 3:
                    i = str.charCodeAt(str_len - 3) << 24 | str.charCodeAt(str_len - 2) << 16 | str.charCodeAt(str_len - 1) << 8 | 0x80;
                    break;
            }

            word_array.push(i);

            while ((word_array.length % 16) != 14) word_array.push(0);

            word_array.push(str_len >>> 29);
            word_array.push((str_len << 3) & 0x0ffffffff);

            for (blockstart = 0; blockstart < word_array.length; blockstart += 16) {
                for (i = 0; i < 16; i++) W[i] = word_array[blockstart + i];
                for (i = 16; i <= 79; i++) W[i] = rotate_left(W[i - 3] ^ W[i - 8] ^ W[i - 14] ^ W[i - 16], 1);

                A = H0;
                B = H1;
                C = H2;
                D = H3;
                E = H4;

                for (i = 0; i <= 19; i++) {
                    temp = (rotate_left(A, 5) + ((B & C) | (~B & D)) + E + W[i] + 0x5A827999) & 0x0ffffffff;
                    E = D;
                    D = C;
                    C = rotate_left(B, 30);
                    B = A;
                    A = temp;
                }

                for (i = 20; i <= 39; i++) {
                    temp = (rotate_left(A, 5) + (B ^ C ^ D) + E + W[i] + 0x6ED9EBA1) & 0x0ffffffff;
                    E = D;
                    D = C;
                    C = rotate_left(B, 30);
                    B = A;
                    A = temp;
                }

                for (i = 40; i <= 59; i++) {
                    temp = (rotate_left(A, 5) + ((B & C) | (B & D) | (C & D)) + E + W[i] + 0x8F1BBCDC) & 0x0ffffffff;
                    E = D;
                    D = C;
                    C = rotate_left(B, 30);
                    B = A;
                    A = temp;
                }

                for (i = 60; i <= 79; i++) {
                    temp = (rotate_left(A, 5) + (B ^ C ^ D) + E + W[i] + 0xCA62C1D6) & 0x0ffffffff;
                    E = D;
                    D = C;
                    C = rotate_left(B, 30);
                    B = A;
                    A = temp;
                }

                H0 = (H0 + A) & 0x0ffffffff;
                H1 = (H1 + B) & 0x0ffffffff;
                H2 = (H2 + C) & 0x0ffffffff;
                H3 = (H3 + D) & 0x0ffffffff;
                H4 = (H4 + E) & 0x0ffffffff;
            }

            var temp = cvt_hex(H0) + cvt_hex(H1) + cvt_hex(H2) + cvt_hex(H3) + cvt_hex(H4);
            return temp.toLowerCase();
        }


        function validate0() {
            if (isWebvisor) return true;

            if (document.location.host == 'edenga.ru') {
                if (ahctpac2.toUpperCase() != sha1($('input[name="ahctpac"]').val()).toUpperCase()) {
                    error('Неправильно ввели капчу.', $('input[name="ahctpac"]'));
                    return false;
                } else {
                    ahctpac = 1;
                }
            }

            if ($('input[name="amount"]').val() < 1000 || $('input[name="amount"]').val() > 1000000) {
                error('Вы не указали сумму.', $('input[name="amount"]'));
                return false;
            } else if ($('input[name="period"]').val() < 5 || $('input[name="period"]').val() > 30) {
                error('Вы не указали срок займа.', $('input[name="period"]'));
                return false;
            } else if ($('input[name="i"]').val().length < 2 || !re_name.test($('input[name="i"]').val())) {
                error('Необходимо указать имя.', $('input[name="i"]'));
                return false;
            } else if ($('input[name="phone"]').val().length != 16) {
                error('Номер телефона указан неверно.', $('input[name="phone"]'));
                return false;
            } else if ($('input[name="email"]').val().length < 7 || !re_email.test($('input[name="email"]').val())) {
                error('Email указан неверно.', $('input[name="email"]'));
                return false;
            } else if (!$('#agree').prop('checked')) {
                error('Вы не подтвердили своё согласие с условиями сервиса.', $('#agree'));
                return false;
            } else return true;
            return false;
        }

        function validate1() {
            if (isWebvisor) return true;

            if ($('input[name="amount"]').val() < 1000 || $('input[name="amount"]').val() > 100000) {
                error('Вы не указали сумму.', $('input[name="amount"]'));
                return false;
            } else if ($('input[name="period"]').val() < 5 || $('input[name="period"]').val() > 30) {
                error('Вы не указали срок займа.', $('input[name="period"]'));
                return false;
            } else if ($('input[name="f"]').val().length < 2 || !re_name.test($('input[name="f"]').val())) {
                error('Необходимо указать фамилию.', $('input[name="f"]'));
                return false;
            } else if ($('input[name="i"]').val().length < 2 || !re_name.test($('input[name="i"]').val())) {
                error('Необходимо указать имя.', $('input[name="i"]'));
                return false;
            } else if ($('input[name="o"]').val().length < 2 || !re_name.test($('input[name="o"]').val())) {
                error('Необходимо указать отчество.', $('input[name="o"]'));
                return false;
            } else if ($('input[name="gender"]').val() != '0' && $('input[name="gender"]').val() != '1') {
                error('Вы не указали пол.', $('input[name="gender"]'));
                return false;
            } else if (!CheckTime()) {
                error('Возраст должен быть от 18 до 70 лет', $('input[name="birthdate"]'));
                return false;
            } else if ($('input[name="phone"]').val().length != 16) {
                error('Номер телефона указан неверно.', $('input[name="phone"]'));
                return false;
            } else if ($('input[name="email"]').val().length < 7 || !re_email.test($('input[name="email"]').val())) {
                error('Email указан неверно.', $('input[name="email"]'));
                return false;
            } else if (!$('#agree').prop('checked')) {
                error('Вы не подтвердили своё согласие с условиями сервиса.', $('#agree'));
                return false;
            } else return true;
            return false;
        }

        function validate2() {
            if (isWebvisor) return true;
            if ($('input[name="passport"]').val().length < 11) {
                error('Вы не указали номер и серию паспорта.', $('input[name="passport"]'));
                return false;
            } else if (!CheckTime2()) {
                error('Возраст должен быть от 18 до 70 лет', $('input[name="passportdate"]'));
                return false;
            } else if ($('input[name="passport_who"]').val().length < 3) {
                error('Необходимо указать, кем выдан паспорт.', $('input[name="passport_who"]'));
                return false;
            } else if ($('input[name="passport_code"]').val().length < 7) {
                error('Необходимо указать, код подразделения, выдавшего паспорт.', $('input[name="passport_code"]'));
                return false;
            } else if ($('input[name="birthplace"]').val().length < 3) {
                error('Необходимо указать место рождения.', $('input[name="birthplace"]'));
                return false;
            } else if ($('#region').val().length < 2 || !re_rc.test($('#region').val())) {
                error('Необходимо указать регион проживания.', $('#region'));
                return false;
            } else if ($('input[name="city"]').val().length < 2 || !re_rc.test($('input[name="city"]').val())) {
                error('<p>Ошибка в указании населённого пункта места жительства.</p><p>Данное поле может содержать только русские символы, символы пробела, запятую, точку или тире.</p>', $('input[name="city"]'));
                return false;
            } else if ($('input[name="street"]').val().length < 2) {
                error('Необходимо указать улицу места жительства.', $('input[name="street"]'));
                return false;
            } else if (!$('input[name="building"]').val().length || !re.test($('input[name="building"]').val())) {
                error('Ошибочно указан номер дома места жительства. Указывайте только номер дома и литеру, если она есть.', $('input[name="building"]'));
                return false;
            } else if ($('input[name="housing"]').val().length && !re.test($('input[name="housing"]').val())) {
                error('Ошибочно указан номер строения места жительства. Указывайте только номер дома и литеру, если она есть.', $('input[name="housing"]'));
                return false;
            } else if ($('input[name="flat"]').val().length && !re.test($('input[name="flat"]').val())) {
                error('Ошибочно указан номер квартиры места жительства. Указывайте только номер дома и литеру, если она есть.', $('input[name="flat"]'));
                return false;
            } else if ($('.reg_same:checked').val() == '0' && ($('#reg_region').val().length < 2 || !re_rc.test($('#reg_region').val()))) {
                error('Вы не указали регион регистрации.', $('.reg_same:checked'));
                return false;
            } else return true;
            return false;
        }

        function validate3() {
            if (isWebvisor) return true;
            if ($('input[name="work_name"]').val().length < 2) {
                error('Вы не указали название места работы.', $('input[name="work_name"]'));
                return false;
            } else if ($('input[name="work_occupation"]').val().length < 2) {
                error('Вы не указали вашу должность.', $('input[name="work_occupation"]'));
                return false;
            } else if ($('input[name="work_phone"]').val().length != 16) {
                error('Номер телефона указан неверно.', $('input[name="work_phone"]'));
                return false;
            } else if (!re_int.test($('input[name="work_experience"]').val())) {
                error('Вы не указали стаж работы.', $('input[name="work_experience"]'));
                return false;
            } else if (!re_int.test($('input[name="work_salary"]').val())) {
                error('Вы не указали доход.', $('input[name="work_salary"]'));
                return false;
            } else if ($('input[name="work_region"]').val() == '0') {
                error('Вы не указали регион работы.', $('input[name="work_region"]'));
                return false;
            } else if ($('input[name="work_city"]').val().length < 2) {
                error('Необходимо указать город работы.', $('input[name="work_city"]'));
                return false;
            } else if ($('input[name="work_street"]').val().length < 2) {
                error('Необходимо указать улицу работы.', $('input[name="work_street"]'));
                return false;
            } else if (!re.test($('input[name="work_house"]').val())) {
                error('Ошибочно указан номер дома работы. Указывайте только номер дома и литеру, если она есть.', $('input[name="work_house"]'));
                return false;
            } else return true;
            return false;
        }

        function start_check() {
        }

        $(document).ready(function () {

            $(document).mousemove(function (e) {
                if (e.pageY <= 5) {
                    if (document.location.host == 'zaimhome.ru') {
                        //send_stats();
                    }
                    // prompt('Вы в одном шаге от займа! Получите займ уже в '+ DateFormat(AddMinutesToDate(new Date(),15))+ '. Какая сумма вам нужна?',10000);
                    // document.location.href = 'https://pxl.leads.su/click/762f05fbbdde479f81315e58b8557785?source=Vkredito';

                }
            });

            new Fingerprint2().get(function (result, components) {
                $('#fingerprint').val(result);
                start_check();
            });
            //checkMe();

            var adsence_about = document.querySelector('#adsence_about');
            var ins = document.querySelector('ins');
            if (adsence_about != null && ins != null) {
                adsence_about.append(ins)
            }


            $.mask.definitions['*'] = "[а-яёА-ЯЁA-Za-z0-9\/\-_]";
            $('[data-toggle="popover"]').popover();
            $('input#phone').mask("8 (9nn) nnn nnnn", {
                "placeholder": "8 (9__) ___ ____"
            });
            $('input#feedback-phone').mask("8 (9nn) nnn nnnn", {
                "placeholder": "8 (9__) ___ ____"
            });
            $('input#work_phone').mask("8 (9nn) nnn nnnn", {
                "placeholder": "8 (9__) ___ ____"
            });
            $('input#passport').mask("nnnn nnnnnn", {
                "placeholder": "____ ______"
            });
            $('#passport_code').mask("nnn-nnn", {
                "placeholder": "___-___"
            });
            $('input#birthdate').mask("nn/nn/nnnn", {"placeholder": "__/__/__"});
            $('input#passportdate').mask("nn/nn/nnnn", {"placeholder": "__/__/__"});
            $('input#work_salary').mask("nnnn?nn", {
                "placeholder": ""
            });
            $('input#work_experience').mask("n?nn", {
                "placeholder": ""
            });
            $('input#flat').mask("n?***", {
                "placeholder": ""
            });
            $('input#building').mask("n?***", {
                "placeholder": ""
            });
            $('input#work_house').mask("n?***", {
                "placeholder": ""
            });

            function init($surname, $name, $patronymic) {
                var self = {};
                self.$surname = $surname;
                self.$name = $name;
                self.$patronymic = $patronymic;
                var fioParts = ["SURNAME", "NAME", "PATRONYMIC"];
                $.each([$surname, $name, $patronymic], function (index, $el) {
                    var sgt = $el.suggestions({
                        serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs",
                        token: "78fc76023580df0ec78566913b31a87d909f1ec0",
                        type: "NAME",
                        triggerSelectOnSpace: false,
                        hint: "",
                        noCache: true,
                        scrollOnFocus: false,
                        minChars: 2,
                        addon: "none",
                        params: {
                            // каждому полю --- соответствующая подсказка
                            parts: [fioParts[index]]
                        },
                        onSearchStart: function (params) {
                            // если пол известен на основании других полей,
                            // используем его
                            var $el = $(this);
                            var $gender = 0;
                            params.gender = isGenderKnown.call(self, $el) ? self.gender : "UNKNOWN";
                            if (params.gender == "MALE") {
                                $gender = 1;
                            } else {
                                $gender = 0;
                            }
                            $('#gender').val($gender);
                        },
                        onSelect: function (suggestion) {
                            // определяем пол по выбранной подсказке
                            self.gender = suggestion.data.gender;
                            if (self.gender == "MALE") {
                                $gender = 1;
                            } else {
                                $gender = 0;
                            }
                            $('#gender').val($gender);
                            $(this).blur();
                        }
                    });
                });
            }
            // Проверяет, известен ли пол на данный момент
            function isGenderKnown($el) {
                var self = this;
                var surname = self.$surname.val(),
                    name = self.$name.val(),
                    patronymic = self.$patronymic.val();
                if (($el.attr('id') == self.$surname.attr('id') && !name && !patronymic) ||
                    ($el.attr('id') == self.$name.attr('id') && !surname && !patronymic) ||
                    ($el.attr('id') == self.$patronymic.attr('id') && !surname && !name)) {
                    return false;
                } else {
                    return true;
                }
            }

            init($("#f"), $("#i"), $("#o"));

            function init2($name) {
                var self = {};
                self.$name = $name;
                var fioParts = ["NAME"];
                $.each([$name], function (index, $el) {
                    var sgt = $el.suggestions({
                        serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs",
                        token: "78fc76023580df0ec78566913b31a87d909f1ec0",
                        type: "NAME",
                        triggerSelectOnSpace: false,
                        hint: "",
                        noCache: true,
                        scrollOnFocus: false,
                        minChars: 2,
                        addon: "none",
                        params: {
                            // каждому полю --- соответствующая подсказка
                            parts: [fioParts[index]]
                        },
                        onSelect: function (suggestion) {
                            $(this).blur();
                        }
                    });
                });
            }
            init2($("#feedback-name"));
            if (document.location.host != 'forzaim.ru') {
                $("#email").suggestions({
                    serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs",
                    token: "78fc76023580df0ec78566913b31a87d909f1ec0",
                    type: "EMAIL",
                    count: 3,
                    addon: "none",
                    scrollOnFocus: false
                });
            }
            $("#feedback-email").suggestions({
                serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs",
                token: "78fc76023580df0ec78566913b31a87d909f1ec0",
                type: "EMAIL",
                count: 3,
                addon: "none",
                scrollOnFocus: false
            });
            $.validate({
                lang: 'ru',
                modules: 'date,sanitize'
            });
            $('input').click(function () {
                if (document.location.host == 'forzaim.ru' && $(this).hasClass('pulse')) {
                    $('#i').removeClass('pulse');
                    $('#phone').removeClass('pulse');
                    $('#email').removeClass('pulse');
                }
                if ($(this).attr("type") == "checkbox") {
                    return;
                }
                if ($(this).attr("name") == "feedback-name" || $(this).attr("name") == "feedback-email" || $(this).attr("name") == "feedback-comment") {
                    return;
                }

                // отключил перемещение к инпутам при клике
                if (document.location.host == 'forzaim22.ru') {
                    $('html, body').animate({
                        scrollTop: $(this).offset().top - 100
                    }, 1000);
                }

            });
            $('input').on('validation', function (evt, valid) {
                if ($('input').name == 'rangeSlider')
                    return;
                if (valid) {
                    $('#' + this.id + 'status').removeClass('glyphicon-remove').addClass('glyphicon-ok');
                    var w = $('.form-group').find('[for=' + this.id + ']');
                    w.parent().removeClass('ex-error').addClass('ex-success');
                    $(this).parent($(this)).find('.help-block2').css('display', 'none');

                    $(this).parent($(this)).find('.help-block2').text(evt.currentTarget.dataset.validationErrorMsg);

                    if (this.name == 'email') {
                        if ($('input[name="email"]').val().length < 7 || !re_email.test($('input[name="email"]').val())) {
                            $('#' + this.id + 'status').removeClass('glyphicon-ok').addClass('glyphicon-remove');
                            $(this).parent().addClass('ex-error');
                            count_errors++;
                            $(this).parent($(this)).find('.help-block2').text('Укажите свой email адрес. Адрес должен заканчиваться на @mail.ru, @bk.ru, @inbox.ru, @list.ru, @yandex.ru, @ya.ru, @gmail.com, @rambler.ru, @mail.ua');
                            $(this).parent($(this)).find('.help-block2').css('display', 'inline-block');

                        } else {
                            if (re_gmail.test($('input[name="email"]').val())) {
                                //gmail.com
                                $('#' + this.id + 'status').removeClass('glyphicon-remove').addClass('glyphicon-ok');
                                $(this).parent().removeClass('ex-error');
                                $(this).parent($(this)).find('.help-block2').html('<span style="font-size: 12px;color: green !important;">Введите почту mail.ru или yandex.ru. Вероятность получения займа будет выше. </span>');
                                $(this).parent($(this)).find('.help-block2').css('display', 'inline-block');
                            } else {
                                $('#' + this.id + 'status').removeClass('glyphicon-remove').addClass('glyphicon-ok');
                                $(this).parent().removeClass('ex-error');
                                $(this).parent($(this)).find('.help-block2').html('<span style="font-size: 12px;color: green !important;">Отправьте анкету и вам на почту ' + $('input[name="email"]').val() + ' будет отправлено письмо с предложением займа.</span>');
                                $(this).parent($(this)).find('.help-block2').css('display', 'inline-block');
                                $('#next1').addClass('pulse');
                            }
                        }
                    }

                } else {
                    $('#' + this.id + 'status').removeClass('glyphicon-ok').addClass('glyphicon-remove');

                    var w = $('.form-group').find('[for=' + this.id + ']');
                    w.parent().removeClass('ex-success').addClass('ex-error');
                    count_errors++;

                    if (this.name !== 'f' && this.name !== 'i' && this.name !== 'o') {
                        $(this).attr('placeholder', evt.currentTarget.dataset.validationErrorMsg);
                    }

                    $(this).parent($(this)).find('.help-block2').text(evt.currentTarget.dataset.validationErrorMsg);
                    $(this).parent($(this)).find('.help-block2').css('display', 'inline-block');
                }
            });
            $('#phone').blur(function () {
                $.ajax({
                    type: 'POST',
                    url: 'https://zaimsoon.ru/validate/phone/',
                    data: 'phone=' + $('#phone').val(),
                    success: function (data) {
                        validator = JSON.parse(data);
                        if (validator.status) {
                            $('#phonestatus').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
                            $('#phonestatus').html('<img src="https://zaimsoon.ru/templates/common/img/mobile/' + validator.operator + '.png" width="24px" />');
                            $('input#phone').removeClass('error').addClass('valid');

                            var w = $('.form-group').find('[for=phone]');
                            w.parent().removeClass('ex-error').addClass('ex-success');

                            // $('#phonestatus').closest('.form-group').removeClass('ex-error').addClass('ex-success');
                            if (validator.operator == 'undefined') {
                                $('#phonestatus').html('');
                                $('#phonestatus').removeClass('glyphicon-remove').addClass('glyphicon-ok');
                            }
                        } else {
                            $('#phonestatus').html('');
                            $('#phonestatus').removeClass('glyphicon-ok').addClass('glyphicon-remove');
                            count_errors++;
                            var w = $('.form-group').find('[for=phone]');
                            w.parent().removeClass('ex-success').addClass('ex-error');
                            $('input#phone').removeClass('valid').addClass('error');
                        }
                    }
                });
            });
            $('#work_phone').blur(function () {
                $.ajax({
                    type: 'POST',
                    url: 'https://zaimsoon.ru/validate/phone/',
                    data: 'phone=' + $('#work_phone').val(),
                    success: function (data) {
                        validator = JSON.parse(data);
                        if (validator.status) {
                            $('#work_phonestatus').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
                            $('#work_phonestatus').html('<img src="https://zaimsoon.ru/templates/common/img/mobile/' + validator.operator + '.png" width="24px" />');
                            $('input#work_phone').removeClass('error').addClass('valid');

                            var w = $('.form-group').find('[for=work_phonestatus]');
                            w.parent().removeClass('ex-error').addClass('ex-success');


                            if (validator.operator == 'undefined') {
                                $('#work_phonestatus').html('');
                                $('#work_phonestatus').removeClass('glyphicon-remove').addClass('glyphicon-ok');
                            }
                        } else {
                            $('#work_phonestatus').html('');
                            $('#work_phonestatus').removeClass('glyphicon-ok').addClass('glyphicon-remove');
                            count_errors++;
                            var w = $('.form-group').find('[for=work_phonestatus]');
                            w.parent().removeClass('ex-success').addClass('ex-error');
                            $('input#work_phone').removeClass('valid').addClass('error');
                        }
                    }
                });
            });
            $('#passport_code').blur(function () {
                $.ajax({
                    type: 'POST',
                    url: 'https://zaimsoon.ru/validate/passport_code/',
                    data: 'passport_code=' + $('#passport_code').val(),
                    success: function (data) {
                        validator = JSON.parse(data);
                        if (validator.status) {
                            $('#passport_who').val(validator.who);
                            $('#passportdate').focus();
                        }
                    }
                });
            });
            var lang = 0;
            $('#f, #i, #o, #passport_who, #birthplace, #city, #reg_city, #street, #reg_street, #work_occupation, #work_experience, #work_region, #work_city, #work_street, #feedback-name').on('keyup keypress', function (e) {
                if ($(this).val().match(/([a-zA-Z]+)/)) {
                    lang++;
                    var input = $(this),
                        text = input.val().replace(/[^а-яёА-ЯЁ0-9-_\s]/g, "");
                    input.val(text);
                    if (lang == 1) {
                        $(this).parent().addClass('ex-error');
                        $(this).after('<span class="help-block form-error">Пожалуйста, смените раскладку клавиатуры на <span class="label label-info">RU</span></span>');
                        count_errors++;
                    }
                } else {
                    lang = 0;
                    $(this).parent().removeClass('ex-error');
                    $(this).next("span").text(' ');
                }
            });
            $('#email').on('keyup keypress', function (e) {
                if ($(this).val().match(/([а-яёА-ЯЁ]+)/)) {
                    lang++;
                    $(this).val('');
                    if (lang == 1) {
                        $(this).parent().addClass('ex-error');
                        $(this).after('<span class="help-block form-error">Пожалуйста, смените раскладку клавиатуры на <span class="label label-info">EN</span></span>');
                        count_errors++;
                    }
                } else {
                    lang = 0;

                    $(this).parent().removeClass('ex-error');
                    $(this).next("span").text(' ');
                }
            });
            $('#feedback-email').on('keyup keypress', function (e) {
                if ($(this).val().match(/([а-яёА-ЯЁ]+)/)) {
                    lang++;
                    $(this).val('');
                    if (lang == 1) {
                        $(this).parent().addClass('ex-error');
                        $(this).after('<span class="help-block form-error">Пожалуйста, смените раскладку клавиатуры на <span class="label label-info">EN</span></span>');
                    }
                } else {
                    lang = 0;
                    $(this).parent().removeClass('ex-error');
                    $(this).next("span").text(' ');
                    count_errors++;
                }
            });
            $('#next1f').click(function () {
                if (validate1()) {

                    $('input[name="step"]').val('1');
                    send_form();
                    $('#form1').removeClass('in').removeClass('active');
                    $('#form2').addClass('in').addClass('active');
                    $('.ex-indicator-scope').addClass('ex-on-second-step');
                    $('#firstTabContent').removeClass('in active');
                    $('#secondTabContent').addClass('in active');
                    $('#step2').removeClass('off');
                    $('.form-steps-green-line').addClass('step2');
                    $('.form-steps-line').show();
                    $('#form-steps a[href="#form2"]').tab('show');
                    $('#firstStep').removeClass('in active');
                    $('#secondStep').addClass('in active');
                    $('.ex-step-counter').addClass('ex-on-second-step');

                    if (document.location.host == 'zaimoking.ru') {
                        $('.ex-step-counter').removeClass('ex-step-active');
                        $('.ex-step-2').addClass('ex-step-active');
                        $('#firstStep').removeClass('in active');
                        $('#secondStep').addClass('in active');
                    }

                    traffic(document.location.host, 2);
                    $('html, body').animate({
                        scrollTop: $('#to_scroll').offset().top
                    }, 1000);
                    markTarget('form-step-1');

                    if ($('#amount').val() > 100000)
                        loans = 1;
                }
                showBzzz = false;
                $('.reg_same').change();
                setcookies();
                $('select[name="reg_type"]').change();
            });
            $('#next1ff').click(function () {
                if (validate1()) {

                    $('input[name="step"]').val('1');
                    send_form();

                    $('#form1').removeClass('in').removeClass('active');
                    $('#form2').addClass('in').addClass('active');
                    $('.ex-indicator-scope').addClass('ex-on-second-step');
                    $('#firstTabContent').removeClass('in active');
                    $('#secondTabContent').addClass('in active');
                    $('#step2').removeClass('off');
                    $('.form-steps-green-line').addClass('step2');
                    $('.form-steps-line').show();
                    $('#form-steps a[href="#form2"]').tab('show');
                    $('#firstStep').removeClass('in active');
                    $('#secondStep').addClass('in active');
                    $('.ex-step-counter').addClass('ex-on-second-step');

                    traffic(document.location.host, 2);
                    $('html, body').animate({
                        scrollTop: $('#to_scroll').offset().top
                    }, 1000);
                    markTarget('form-step-1');

                    if ($('#amount').val() > 100000)
                        loans = 1;
                }
                showBzzz = false;
                $('.reg_same').change();
                setcookies();
                $('select[name="reg_type"]').change();
            });
            $('#next1').click(function () {
                if (validate0()) {

                    if ($('#amount').val() > 100000)
                        loans = 1;
                    $('input[name="step"]').val('3');
                    //send_form(true, '/lk?loan='+loans+'&keyword=' + ((getParameterByName('keyword') === null) ? window.location.hostname : getParameterByName('keyword')) + '&campaign_id=' + ((getParameterByName('campaign_id') === null) ? window.location.hostname : getParameterByName('campaign_id')) + '&utm_source=' + ((getParameterByName('utm_source') === null) ? window.location.hostname : getParameterByName('utm_source')));
                    send_form(true, '/lk' + document.location.search);
                    markTarget('form-step-3');
                    //window.location = '/lk' + document.location.search;
                    window.location.href = '/';
                    window.open(
                        '/lk' + document.location.search,
                        '_blank' //'_self'
                    );
                    //window.location = '/lk?loan='+loans+'&keyword=' + ((getParameterByName('keyword') === null) ? window.location.hostname : getParameterByName('keyword')) + '&campaign_id=' + ((getParameterByName('campaign_id') === null) ? window.location.hostname : getParameterByName('campaign_id')) + '&utm_source=' + ((getParameterByName('utm_source') === null) ? window.location.hostname : getParameterByName('utm_source'));
                }
                count_errors++;
                showBzzz = false;
                $('.reg_same').change();
                setcookies();
                $('select[name="reg_type"]').change();
            });
            $('#next1b').click(function () {
                if (validate0()) {

                    if ($('#amount').val() > 100000)
                        loans = 1;

                    $('input[name="step"]').val('3');
                    send_form(true, '/lk' + document.location.search);
                    markTarget('form-step-3');
                    //window.location = '/lk' + document.location.search;
                    window.location.href = '/';
                    window.open(
                        '/lk' + document.location.search,
                        '_blank'
                    );
                }
                showBzzz = false;
                $('.reg_same').change();
                setcookies();
                $('select[name="reg_type"]').change();
            });
            $('#next2').click(function () {
                if (validate2()) {
                    $('input[name="step"]').val('2');
                    send_form();
                    $('.ex-indicator-scope').removeClass('ex-on-second-step').addClass('ex-on-last-step');
                    $('#secondTabContent').removeClass('in active');
                    $('#lastTabContent').addClass('in active');


                    $('#form2').removeClass('in').removeClass('active');
                    $('#form3').addClass('in').addClass('active');
                    $('#step3').removeClass('off');
                    $('.form-steps-green-line').addClass('step3');
                    $('.form-steps-line').show();
                    $('#form-steps a[href="#form3"]').tab('show');
                    $('#secondStep').removeClass('in active');
                    $('#thirdStep').addClass('in active');
                    $('#secondTabContent').removeClass('in active');
                    $('#lastTabContent').addClass('in active');
                    $('.ex-step-counter').removeClass('ex-on-second-step').addClass('ex-on-last-step');

                    if (document.location.host == 'zaimoking.ru') {
                        $('.ex-step-counter').removeClass('ex-step-active');
                        $('.ex-step-3').addClass('ex-step-active');
                        $('#secondStep').removeClass('in active');
                        $('#thirdStep').addClass('in active');
                    }

                    traffic(document.location.host, 3);
                    $('html, body').animate({
                        scrollTop: $('#to_scroll').offset().top
                    }, 1000);
                    markTarget('form-step-2');
                }
                showBzzz = false;
                setcookies();
            });
            $('#getmoney').click(function () {
                if (validate()) {
                    $('input[name="step"]').val('3');
                    send_form(true, '/lk' + document.location.search);
                    markTarget('form-step-3');
                    //window.location = '/lk' + document.location.search;
                    window.location.href = '/';
                    window.open(
                        '/lk' + document.location.search,
                        '_blank'
                    );
                }
                showBzzz = false;
                setcookies();
            });
            $('#submitOne').click(function () {
                if (validate()) {
                    $('input[name="step"]').val('3');
                    send_form(true, '/lk' + document.location.search);
                    markTarget('form-step-3');
                    //window.location = '/lk' + document.location.search;
                    window.location.href = '/';
                    window.open(
                        '/lk' + document.location.search,
                        '_blank'
                    );
                }
                showBzzz = false;
                setcookies();
            });
            $('#submitOneb').click(function () {
                if (validate()) {
                    $('input[name="step"]').val('3');
                    send_form(true, '/lk' + document.location.search);
                    markTarget('form-step-3');
                    //window.location = '/lk' + document.location.search;
                    window.location.href = '/';
                    window.open(
                        '/lk' + document.location.search,
                        '_blank'
                    );
                }
                showBzzz = false;
                setcookies();
            });

            $('#getmoneyb').click(function () {
                if (validate()) {
                    $('input[name="step"]').val('3');
                    send_form(true, '/lk' + document.location.search);
                    markTarget('form-step-3');
                    window.location = '/lk' + document.location.search;
                }
                showBzzz = false;
                setcookies();
            });
            $('select[name="reg_type"]').change(function () {
                if ($(this).val() == '0') {
                    $('.reg_same[value="1"]').prop('checked', true);
                    $('#reg_same').hide();
                    $('#reg_address').hide();
                    $('#reg_address').prop('disabled', true);
                } else $('#reg_same').show();
            }).change();
            $('.reg_same').change(function () {
                if ($('.reg_same:checked').val() == '1' || $('select[name="reg_type"]').val() == '0') {
                    $('#reg_address').prop('disabled', true);
                    $('#reg_address').hide();
                } else {
                    $('#reg_address').prop('disabled', false);
                    $('#reg_address').show();
                }
            }).change();
            $('#passport').blur(function () {
                var pass = $('#passport').val().split(' ');
                $('#passport-s').val(pass[0]);
                $('#passport-n').val(pass[1]);
            });
            var isMobile = false; //initiate as false
            // device detection
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
                /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) isMobile = true;
            if (isMobile) {
                $('#display').val(1);
            } else {
                $('.tip').poshytip({
                    className: 'tip-twitter',
                    showTimeout: 100,
                    alignTo: 'target',
                    alignX: 'right',
                    alignY: 'center',
                    offsetX: 5,
                    allowTipHover: false,
                    fade: false,
                    slide: false
                });
            }
            $("#work").change(function () {
                if ($(this).val().toLowerCase() == "пенсионер" || $(this).val().toLowerCase() == "безработный") {
                    $("#work").addClass("valid");
                    $("#work").parent().addClass("has-success").removeClass("has-error");
                    $("#work").parent().parent().prev().removeClass("label_er").addClass("label_true");
                    $("#work").removeClass("er").removeClass("error");
                    $("#work_name").addClass("valid");
                    $("#work_name").parent().addClass("has-success").removeClass("has-error");
                    $("#work_name").parent().prev().removeClass("label_er").addClass("label_true");
                    $("#work_name").removeClass("er").removeClass("error");
                    $("#work_namestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
                    $("#work_occupation").addClass("valid");
                    $("#work_occupation").parent().addClass("has-success").removeClass("has-error");
                    $("#work_occupation").parent().prev().removeClass("label_er").addClass("label_true");
                    $("#work_occupation").removeClass("er").removeClass("error");
                    $("#work_occupationstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
                    $("#work_phone").addClass("valid");
                    $("#work_phone").parent().addClass("has-success").removeClass("has-error");
                    $("#work_phone").parent().prev().removeClass("label_er").addClass("label_true");
                    $("#work_phone").removeClass("er").removeClass("error");
                    $("#work_phonestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
                    $("#work_experience").addClass("valid");
                    $("#work_experience").parent().addClass("has-success").removeClass("has-error");
                    $("#work_experience").parent().prev().removeClass("label_er").addClass("label_true");
                    $("#work_experience").removeClass("er").removeClass("error");
                    $("#work_experiencestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
                    $("#work_salary").removeClass("valid");
                    $("#work_salary").parent().addClass("has-error").removeClass("has-success");
                    $("#work_salary").parent().prev().removeClass("label_true").addClass("label_er");
                    $("#work_salary").addClass("er");
                    $("#work_salary").focus();
                    $("#work_salarystatus").addClass("glyphicon-remove");

                    $("#work_region").addClass("valid");
                    $("#work_region").parent().addClass("has-success").removeClass("has-error");
                    $("#work_region").parent().parent().prev().removeClass("label_er").addClass("label_true");
                    $("#work_region").removeClass("er").removeClass("error");
                    $("#work_city").addClass("valid");
                    $("#work_city").parent().addClass("has-success").removeClass("has-error");
                    $("#work_city").parent().prev().removeClass("label_er").addClass("label_true");
                    $("#work_city").removeClass("er").removeClass("error");
                    $("#work_citystatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
                    $("#work_street").addClass("valid");
                    $("#work_street").parent().addClass("has-success").removeClass("has-error");
                    $("#work_street").parent().prev().removeClass("label_er").addClass("label_true");
                    $("#work_street").removeClass("er").removeClass("error");
                    $("#work_streetstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
                    $("#work_house").addClass("valid");
                    $("#work_house").parent().addClass("has-success").removeClass("has-error");
                    $("#work_house").parent().prev().removeClass("label_er").addClass("label_true");
                    $("#work_house").removeClass("er").removeClass("error");
                    $("#work_streetstatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");
                    $("#work_office").addClass("valid");
                    $("#work_office").parent().addClass("has-success").removeClass("has-error");
                    $("#work_office").parent().prev().removeClass("label_er").addClass("label_true");
                    $("#work_office").removeClass("er").removeClass("error");
                    $("#work_officestatus").removeClass("glyphicon-remove").addClass("glyphicon-ok");

                    if ($(this).val().toLowerCase() == "пенсионер")
                        $("#work_name").val("пенсионер");
                    else $("#work_name").val("безработный");
                    if ($(this).val().toLowerCase() == "пенсионер")
                        $("#work_occupation").val("пенсионер");
                    else $("#work_occupation").val("безработный");
                    var teemp = $("#phone").val();
                    $("#work_phone").val(teemp);
                    $("#work_experience").val(100);
                    $("#work_salary").val("");
                    var teemp2 = Number($("#region").find(":selected").index());
                    $("#work_region option").eq(teemp2).prop("selected", true);
                    var teemp3 = $("#city").val();
                    $("#work_city").val(teemp3);
                    var teemp4 = $("#street").val();
                    $("#work_street").val(teemp4);
                    var teemp5 = $("#building").val();
                    $("#work_house").val(teemp5);
                    $("#work_building").val(" ");
                    var teemp6 = $("#flat").val();
                    $("#work_office").val(teemp6);
                } else {

                    $("#work").removeClass("valid");
                    $("#work").parent().parent().removeClass("has-success");
                    $("#work").parent().parent().prev().removeClass("label_true");
                    $("#work_name").val("");
                    $("#work_name").focus();
                    $("#work_name").removeClass("valid");
                    $("#work_name").parent().removeClass("has-success");
                    $("#work_name").parent().prev().removeClass("label_true");
                    $("#work_namestatus").removeClass("glyphicon-ok");
                    $("#work_occupation").val("");
                    $("#work_occupation").removeClass("valid");
                    $("#work_occupation").parent().removeClass("has-success");
                    $("#work_occupation").parent().prev().removeClass("label_true");
                    $("#work_occupationstatus").removeClass("glyphicon-ok");
                    $("#work_phone").val("");
                    $("#work_phone").removeClass("valid");
                    $("#work_phone").parent().removeClass("has-success");
                    $("#work_phone").parent().prev().removeClass("label_true");
                    $("#work_phonestatus").removeClass("glyphicon-ok");
                    $("#work_experience").val("");
                    $("#work_experience").removeClass("valid");
                    $("#work_experience").parent().removeClass("has-success");
                    $("#work_experience").parent().prev().removeClass("label_true");
                    $("#work_experiencestatus").removeClass("glyphicon-ok");
                    $("#work_salary").val("");
                    $("#work_salary").removeClass("valid");
                    $("#work_salary").parent().removeClass("has-success");
                    $("#work_salary").parent().prev().removeClass("label_true");
                    $("#work_salarystatus").removeClass("glyphicon-ok");

                    $("#work_region").removeClass("valid");
                    $("#work_region").parent().parent().removeClass("has-success");
                    $("#work_region").parent().parent().prev().removeClass("label_true");
                    $("#work_city").val("");
                    $("#work_city").removeClass("valid");
                    $("#work_city").parent().removeClass("has-success");
                    $("#work_city").parent().prev().removeClass("label_true");
                    $("#work_citystatus").removeClass("glyphicon-ok");
                    $("#work_street").val("");
                    $("#work_street").removeClass("valid");
                    $("#work_street").parent().removeClass("has-success");
                    $("#work_street").parent().prev().removeClass("label_true");
                    $("#work_streetstatus").removeClass("glyphicon-ok");
                    $("#work_house").val("");
                    $("#work_house").removeClass("valid");
                    $("#work_house").parent().removeClass("has-success");
                    $("#work_house").parent().prev().removeClass("label_true");
                    $("#work_housestatus").removeClass("glyphicon-ok");
                    $("#work_office").val("");
                    $("#work_office").removeClass("valid");
                    $("#work_office").parent().removeClass("has-success");
                    $("#work_office").parent().prev().removeClass("label_true");
                    $("#work_officestatus").removeClass("glyphicon-ok");
                    $("#work_name").val("");
                    $("#work_occupation").val("");
                    $("#work_phone").val("");
                    $("#work_experience").val("");
                    $("#work_salary").val("");
                    $("#work_region option").eq(0, true).prop("selected", true);
                    $("#work_city").val("");
                    $("#work_street").val("");
                    $("#work_house").val("");
                    $("#work_building").val("");
                    $("#work_office").val("");
                }
            });
        });
        jQuery(document).ready(function (o) {
            var l = 300, s = 1200, c = 700, d = o(".cd-top");
            o(window).scroll(function () {
                o(this).scrollTop() > l ? d.addClass("cd-is-visible") : d.removeClass("cd-is-visible cd-fade-out"), o(this).scrollTop() > s && d.addClass("cd-fade-out")
            }), d.on("click", function (l) {
                l.preventDefault(), o("body,html").animate({scrollTop: 0}, c)
            })
        });
        !function (e, t, r) {
            "use strict";
            "function" == typeof window.define && window.define.amd ? window.define(r) : "undefined" != typeof module && module.exports ? module.exports = r() : t.exports ? t.exports = r() : t.Fingerprint2 = r()
        }(0, this, function () {
            "use strict";
            var t = function (e) {
                if (!(this instanceof t)) return new t(e);
                this.options = this.extend(e, {
                    swfContainerId: "fingerprintjs2",
                    swfPath: "flash/compiled/FontList.swf",
                    detectScreenOrientation: !0,
                    sortPluginsFor: [/palemoon/i],
                    userDefinedFonts: [],
                    excludeDoNotTrack: !0,
                    excludePixelRatio: !0
                }), this.nativeForEach = Array.prototype.forEach, this.nativeMap = Array.prototype.map
            };
            return t.prototype = {
                extend: function (e, t) {
                    if (null == e) return t;
                    for (var r in e) null != e[r] && t[r] !== e[r] && (t[r] = e[r]);
                    return t
                }, get: function (n) {
                    var i = this, r = {
                        data: [], addPreprocessedComponent: function (e) {
                            var t = e.value;
                            "function" == typeof i.options.preprocessor && (t = i.options.preprocessor(e.key, t)), r.data.push({
                                key: e.key,
                                value: t
                            })
                        }
                    };
                    r = this.userAgentKey(r), r = this.languageKey(r), r = this.colorDepthKey(r), r = this.deviceMemoryKey(r), r = this.pixelRatioKey(r), r = this.hardwareConcurrencyKey(r), r = this.screenResolutionKey(r), r = this.availableScreenResolutionKey(r), r = this.timezoneOffsetKey(r), r = this.sessionStorageKey(r), r = this.localStorageKey(r), r = this.indexedDbKey(r), r = this.addBehaviorKey(r), r = this.openDatabaseKey(r), r = this.cpuClassKey(r), r = this.platformKey(r), r = this.doNotTrackKey(r), r = this.pluginsKey(r), r = this.canvasKey(r), r = this.webglKey(r), r = this.webglVendorAndRendererKey(r), r = this.adBlockKey(r), r = this.hasLiedLanguagesKey(r), r = this.hasLiedResolutionKey(r), r = this.hasLiedOsKey(r), r = this.hasLiedBrowserKey(r), r = this.touchSupportKey(r), r = this.customEntropyFunction(r), this.fontsKey(r, function (e) {
                        var r = [];
                        i.each(e.data, function (e) {
                            var t = e.value;
                            t && "function" == typeof t.join && (t = t.join(";")), r.push(t)
                        });
                        var t = i.x64hash128(r.join("~~~"), 31);
                        return n(t, e.data)
                    })
                }, customEntropyFunction: function (e) {
                    return "function" == typeof this.options.customFunction && e.addPreprocessedComponent({
                        key: "custom",
                        value: this.options.customFunction()
                    }), e
                }, userAgentKey: function (e) {
                    return this.options.excludeUserAgent || e.addPreprocessedComponent({
                        key: "user_agent",
                        value: this.getUserAgent()
                    }), e
                }, getUserAgent: function () {
                    return navigator.userAgent
                }, languageKey: function (e) {
                    return this.options.excludeLanguage || e.addPreprocessedComponent({
                        key: "language",
                        value: navigator.language || navigator.userLanguage || navigator.browserLanguage || navigator.systemLanguage || ""
                    }), e
                }, colorDepthKey: function (e) {
                    return this.options.excludeColorDepth || e.addPreprocessedComponent({
                        key: "color_depth",
                        value: window.screen.colorDepth || -1
                    }), e
                }, deviceMemoryKey: function (e) {
                    return this.options.excludeDeviceMemory || e.addPreprocessedComponent({
                        key: "device_memory",
                        value: this.getDeviceMemory()
                    }), e
                }, getDeviceMemory: function () {
                    return navigator.deviceMemory || -1
                }, pixelRatioKey: function (e) {
                    return this.options.excludePixelRatio || e.addPreprocessedComponent({
                        key: "pixel_ratio",
                        value: this.getPixelRatio()
                    }), e
                }, getPixelRatio: function () {
                    return window.devicePixelRatio || ""
                }, screenResolutionKey: function (e) {
                    return this.options.excludeScreenResolution ? e : this.getScreenResolution(e)
                }, getScreenResolution: function (e) {
                    var t;
                    return t = this.options.detectScreenOrientation && window.screen.height > window.screen.width ? [window.screen.height, window.screen.width] : [window.screen.width, window.screen.height], e.addPreprocessedComponent({
                        key: "resolution",
                        value: t
                    }), e
                }, availableScreenResolutionKey: function (e) {
                    return this.options.excludeAvailableScreenResolution ? e : this.getAvailableScreenResolution(e)
                }, getAvailableScreenResolution: function (e) {
                    var t;
                    return window.screen.availWidth && window.screen.availHeight && (t = this.options.detectScreenOrientation ? window.screen.availHeight > window.screen.availWidth ? [window.screen.availHeight, window.screen.availWidth] : [window.screen.availWidth, window.screen.availHeight] : [window.screen.availHeight, window.screen.availWidth]), void 0 !== t && e.addPreprocessedComponent({
                        key: "available_resolution",
                        value: t
                    }), e
                }, timezoneOffsetKey: function (e) {
                    return this.options.excludeTimezoneOffset || e.addPreprocessedComponent({
                        key: "timezone_offset",
                        value: (new Date).getTimezoneOffset()
                    }), e
                }, sessionStorageKey: function (e) {
                    return !this.options.excludeSessionStorage && this.hasSessionStorage() && e.addPreprocessedComponent({
                        key: "session_storage",
                        value: 1
                    }), e
                }, localStorageKey: function (e) {
                    return !this.options.excludeSessionStorage && this.hasLocalStorage() && e.addPreprocessedComponent({
                        key: "local_storage",
                        value: 1
                    }), e
                }, indexedDbKey: function (e) {
                    return !this.options.excludeIndexedDB && this.hasIndexedDB() && e.addPreprocessedComponent({
                        key: "indexed_db",
                        value: 1
                    }), e
                }, addBehaviorKey: function (e) {
                    return !this.options.excludeAddBehavior && document.body && document.body.addBehavior && e.addPreprocessedComponent({
                        key: "add_behavior",
                        value: 1
                    }), e
                }, openDatabaseKey: function (e) {
                    return !this.options.excludeOpenDatabase && window.openDatabase && e.addPreprocessedComponent({
                        key: "open_database",
                        value: 1
                    }), e
                }, cpuClassKey: function (e) {
                    return this.options.excludeCpuClass || e.addPreprocessedComponent({
                        key: "cpu_class",
                        value: this.getNavigatorCpuClass()
                    }), e
                }, platformKey: function (e) {
                    return this.options.excludePlatform || e.addPreprocessedComponent({
                        key: "navigator_platform",
                        value: this.getNavigatorPlatform()
                    }), e
                }, doNotTrackKey: function (e) {
                    return this.options.excludeDoNotTrack || e.addPreprocessedComponent({
                        key: "do_not_track",
                        value: this.getDoNotTrack()
                    }), e
                }, canvasKey: function (e) {
                    return !this.options.excludeCanvas && this.isCanvasSupported() && e.addPreprocessedComponent({
                        key: "canvas",
                        value: this.getCanvasFp()
                    }), e
                }, webglKey: function (e) {
                    return !this.options.excludeWebGL && this.isWebGlSupported() && e.addPreprocessedComponent({
                        key: "webgl",
                        value: this.getWebglFp()
                    }), e
                }, webglVendorAndRendererKey: function (e) {
                    return !this.options.excludeWebGLVendorAndRenderer && this.isWebGlSupported() && e.addPreprocessedComponent({
                        key: "webgl_vendor",
                        value: this.getWebglVendorAndRenderer()
                    }), e
                }, adBlockKey: function (e) {
                    return this.options.excludeAdBlock || e.addPreprocessedComponent({
                        key: "adblock",
                        value: this.getAdBlock()
                    }), e
                }, hasLiedLanguagesKey: function (e) {
                    return this.options.excludeHasLiedLanguages || e.addPreprocessedComponent({
                        key: "has_lied_languages",
                        value: this.getHasLiedLanguages()
                    }), e
                }, hasLiedResolutionKey: function (e) {
                    return this.options.excludeHasLiedResolution || e.addPreprocessedComponent({
                        key: "has_lied_resolution",
                        value: this.getHasLiedResolution()
                    }), e
                }, hasLiedOsKey: function (e) {
                    return this.options.excludeHasLiedOs || e.addPreprocessedComponent({
                        key: "has_lied_os",
                        value: this.getHasLiedOs()
                    }), e
                }, hasLiedBrowserKey: function (e) {
                    return this.options.excludeHasLiedBrowser || e.addPreprocessedComponent({
                        key: "has_lied_browser",
                        value: this.getHasLiedBrowser()
                    }), e
                }, fontsKey: function (e, t) {
                    return this.options.excludeJsFonts ? this.flashFontsKey(e, t) : this.jsFontsKey(e, t)
                }, flashFontsKey: function (t, r) {
                    return this.options.excludeFlashFonts ? r(t) : this.hasSwfObjectLoaded() && this.hasMinFlashInstalled() ? void 0 === this.options.swfPath ? r(t) : void this.loadSwfAndDetectFonts(function (e) {
                        t.addPreprocessedComponent({key: "swf_fonts", value: e.join(";")}), r(t)
                    }) : r(t)
                }, jsFontsKey: function (f, S) {
                    var T = this;
                    return setTimeout(function () {
                        var h = ["monospace", "sans-serif", "serif"],
                            c = ["Andale Mono", "Arial", "Arial Black", "Arial Hebrew", "Arial MT", "Arial Narrow", "Arial Rounded MT Bold", "Arial Unicode MS", "Bitstream Vera Sans Mono", "Book Antiqua", "Bookman Old Style", "Calibri", "Cambria", "Cambria Math", "Century", "Century Gothic", "Century Schoolbook", "Comic Sans", "Comic Sans MS", "Consolas", "Courier", "Courier New", "Geneva", "Georgia", "Helvetica", "Helvetica Neue", "Impact", "Lucida Bright", "Lucida Calligraphy", "Lucida Console", "Lucida Fax", "LUCIDA GRANDE", "Lucida Handwriting", "Lucida Sans", "Lucida Sans Typewriter", "Lucida Sans Unicode", "Microsoft Sans Serif", "Monaco", "Monotype Corsiva", "MS Gothic", "MS Outlook", "MS PGothic", "MS Reference Sans Serif", "MS Sans Serif", "MS Serif", "MYRIAD", "MYRIAD PRO", "Palatino", "Palatino Linotype", "Segoe Print", "Segoe Script", "Segoe UI", "Segoe UI Light", "Segoe UI Semibold", "Segoe UI Symbol", "Tahoma", "Times", "Times New Roman", "Times New Roman PS", "Trebuchet MS", "Verdana", "Wingdings", "Wingdings 2", "Wingdings 3"];
                        T.options.extendedJsFonts && (c = c.concat(["Abadi MT Condensed Light", "Academy Engraved LET", "ADOBE CASLON PRO", "Adobe Garamond", "ADOBE GARAMOND PRO", "Agency FB", "Aharoni", "Albertus Extra Bold", "Albertus Medium", "Algerian", "Amazone BT", "American Typewriter", "American Typewriter Condensed", "AmerType Md BT", "Andalus", "Angsana New", "AngsanaUPC", "Antique Olive", "Aparajita", "Apple Chancery", "Apple Color Emoji", "Apple SD Gothic Neo", "Arabic Typesetting", "ARCHER", "ARNO PRO", "Arrus BT", "Aurora Cn BT", "AvantGarde Bk BT", "AvantGarde Md BT", "AVENIR", "Ayuthaya", "Bandy", "Bangla Sangam MN", "Bank Gothic", "BankGothic Md BT", "Baskerville", "Baskerville Old Face", "Batang", "BatangChe", "Bauer Bodoni", "Bauhaus 93", "Bazooka", "Bell MT", "Bembo", "Benguiat Bk BT", "Berlin Sans FB", "Berlin Sans FB Demi", "Bernard MT Condensed", "BernhardFashion BT", "BernhardMod BT", "Big Caslon", "BinnerD", "Blackadder ITC", "BlairMdITC TT", "Bodoni 72", "Bodoni 72 Oldstyle", "Bodoni 72 Smallcaps", "Bodoni MT", "Bodoni MT Black", "Bodoni MT Condensed", "Bodoni MT Poster Compressed", "Bookshelf Symbol 7", "Boulder", "Bradley Hand", "Bradley Hand ITC", "Bremen Bd BT", "Britannic Bold", "Broadway", "Browallia New", "BrowalliaUPC", "Brush Script MT", "Californian FB", "Calisto MT", "Calligrapher", "Candara", "CaslonOpnface BT", "Castellar", "Centaur", "Cezanne", "CG Omega", "CG Times", "Chalkboard", "Chalkboard SE", "Chalkduster", "Charlesworth", "Charter Bd BT", "Charter BT", "Chaucer", "ChelthmITC Bk BT", "Chiller", "Clarendon", "Clarendon Condensed", "CloisterBlack BT", "Cochin", "Colonna MT", "Constantia", "Cooper Black", "Copperplate", "Copperplate Gothic", "Copperplate Gothic Bold", "Copperplate Gothic Light", "CopperplGoth Bd BT", "Corbel", "Cordia New", "CordiaUPC", "Cornerstone", "Coronet", "Cuckoo", "Curlz MT", "DaunPenh", "Dauphin", "David", "DB LCD Temp", "DELICIOUS", "Denmark", "DFKai-SB", "Didot", "DilleniaUPC", "DIN", "DokChampa", "Dotum", "DotumChe", "Ebrima", "Edwardian Script ITC", "Elephant", "English 111 Vivace BT", "Engravers MT", "EngraversGothic BT", "Eras Bold ITC", "Eras Demi ITC", "Eras Light ITC", "Eras Medium ITC", "EucrosiaUPC", "Euphemia", "Euphemia UCAS", "EUROSTILE", "Exotc350 Bd BT", "FangSong", "Felix Titling", "Fixedsys", "FONTIN", "Footlight MT Light", "Forte", "FrankRuehl", "Fransiscan", "Freefrm721 Blk BT", "FreesiaUPC", "Freestyle Script", "French Script MT", "FrnkGothITC Bk BT", "Fruitger", "FRUTIGER", "Futura", "Futura Bk BT", "Futura Lt BT", "Futura Md BT", "Futura ZBlk BT", "FuturaBlack BT", "Gabriola", "Galliard BT", "Gautami", "Geeza Pro", "Geometr231 BT", "Geometr231 Hv BT", "Geometr231 Lt BT", "GeoSlab 703 Lt BT", "GeoSlab 703 XBd BT", "Gigi", "Gill Sans", "Gill Sans MT", "Gill Sans MT Condensed", "Gill Sans MT Ext Condensed Bold", "Gill Sans Ultra Bold", "Gill Sans Ultra Bold Condensed", "Gisha", "Gloucester MT Extra Condensed", "GOTHAM", "GOTHAM BOLD", "Goudy Old Style", "Goudy Stout", "GoudyHandtooled BT", "GoudyOLSt BT", "Gujarati Sangam MN", "Gulim", "GulimChe", "Gungsuh", "GungsuhChe", "Gurmukhi MN", "Haettenschweiler", "Harlow Solid Italic", "Harrington", "Heather", "Heiti SC", "Heiti TC", "HELV", "Herald", "High Tower Text", "Hiragino Kaku Gothic ProN", "Hiragino Mincho ProN", "Hoefler Text", "Humanst 521 Cn BT", "Humanst521 BT", "Humanst521 Lt BT", "Imprint MT Shadow", "Incised901 Bd BT", "Incised901 BT", "Incised901 Lt BT", "INCONSOLATA", "Informal Roman", "Informal011 BT", "INTERSTATE", "IrisUPC", "Iskoola Pota", "JasmineUPC", "Jazz LET", "Jenson", "Jester", "Jokerman", "Juice ITC", "Kabel Bk BT", "Kabel Ult BT", "Kailasa", "KaiTi", "Kalinga", "Kannada Sangam MN", "Kartika", "Kaufmann Bd BT", "Kaufmann BT", "Khmer UI", "KodchiangUPC", "Kokila", "Korinna BT", "Kristen ITC", "Krungthep", "Kunstler Script", "Lao UI", "Latha", "Leelawadee", "Letter Gothic", "Levenim MT", "LilyUPC", "Lithograph", "Lithograph Light", "Long Island", "Lydian BT", "Magneto", "Maiandra GD", "Malayalam Sangam MN", "Malgun Gothic", "Mangal", "Marigold", "Marion", "Marker Felt", "Market", "Marlett", "Matisse ITC", "Matura MT Script Capitals", "Meiryo", "Meiryo UI", "Microsoft Himalaya", "Microsoft JhengHei", "Microsoft New Tai Lue", "Microsoft PhagsPa", "Microsoft Tai Le", "Microsoft Uighur", "Microsoft YaHei", "Microsoft Yi Baiti", "MingLiU", "MingLiU_HKSCS", "MingLiU_HKSCS-ExtB", "MingLiU-ExtB", "Minion", "Minion Pro", "Miriam", "Miriam Fixed", "Mistral", "Modern", "Modern No. 20", "Mona Lisa Solid ITC TT", "Mongolian Baiti", "MONO", "MoolBoran", "Mrs Eaves", "MS LineDraw", "MS Mincho", "MS PMincho", "MS Reference Specialty", "MS UI Gothic", "MT Extra", "MUSEO", "MV Boli", "Nadeem", "Narkisim", "NEVIS", "News Gothic", "News GothicMT", "NewsGoth BT", "Niagara Engraved", "Niagara Solid", "Noteworthy", "NSimSun", "Nyala", "OCR A Extended", "Old Century", "Old English Text MT", "Onyx", "Onyx BT", "OPTIMA", "Oriya Sangam MN", "OSAKA", "OzHandicraft BT", "Palace Script MT", "Papyrus", "Parchment", "Party LET", "Pegasus", "Perpetua", "Perpetua Titling MT", "PetitaBold", "Pickwick", "Plantagenet Cherokee", "Playbill", "PMingLiU", "PMingLiU-ExtB", "Poor Richard", "Poster", "PosterBodoni BT", "PRINCETOWN LET", "Pristina", "PTBarnum BT", "Pythagoras", "Raavi", "Rage Italic", "Ravie", "Ribbon131 Bd BT", "Rockwell", "Rockwell Condensed", "Rockwell Extra Bold", "Rod", "Roman", "Sakkal Majalla", "Santa Fe LET", "Savoye LET", "Sceptre", "Script", "Script MT Bold", "SCRIPTINA", "Serifa", "Serifa BT", "Serifa Th BT", "ShelleyVolante BT", "Sherwood", "Shonar Bangla", "Showcard Gothic", "Shruti", "Signboard", "SILKSCREEN", "SimHei", "Simplified Arabic", "Simplified Arabic Fixed", "SimSun", "SimSun-ExtB", "Sinhala Sangam MN", "Sketch Rockwell", "Skia", "Small Fonts", "Snap ITC", "Snell Roundhand", "Socket", "Souvenir Lt BT", "Staccato222 BT", "Steamer", "Stencil", "Storybook", "Styllo", "Subway", "Swis721 BlkEx BT", "Swiss911 XCm BT", "Sylfaen", "Synchro LET", "System", "Tamil Sangam MN", "Technical", "Teletype", "Telugu Sangam MN", "Tempus Sans ITC", "Terminal", "Thonburi", "Traditional Arabic", "Trajan", "TRAJAN PRO", "Tristan", "Tubular", "Tunga", "Tw Cen MT", "Tw Cen MT Condensed", "Tw Cen MT Condensed Extra Bold", "TypoUpright BT", "Unicorn", "Univers", "Univers CE 55 Medium", "Univers Condensed", "Utsaah", "Vagabond", "Vani", "Vijaya", "Viner Hand ITC", "VisualUI", "Vivaldi", "Vladimir Script", "Vrinda", "Westminster", "WHITNEY", "Wide Latin", "ZapfEllipt BT", "ZapfHumnst BT", "ZapfHumnst Dm BT", "Zapfino", "Zurich BlkEx BT", "Zurich Ex BT", "ZWAdobeF"])), c = (c = c.concat(T.options.userDefinedFonts)).filter(function (e, t) {
                            return c.indexOf(e) === t
                        });
                        var e = document.getElementsByTagName("body")[0], i = document.createElement("div"),
                            u = document.createElement("div"), n = {}, a = {}, g = function () {
                                var e = document.createElement("span");
                                return e.style.position = "absolute", e.style.left = "-9999px", e.style.fontSize = "72px", e.style.fontStyle = "normal", e.style.fontWeight = "normal", e.style.letterSpacing = "normal", e.style.lineBreak = "auto", e.style.lineHeight = "normal", e.style.textTransform = "none", e.style.textAlign = "left", e.style.textDecoration = "none", e.style.textShadow = "none", e.style.whiteSpace = "normal", e.style.wordBreak = "normal", e.style.wordSpacing = "normal", e.innerHTML = "mmmmmmmmmmlli", e
                            }, t = function (e) {
                                for (var t = !1, r = 0; r < h.length; r++) if (t = e[r].offsetWidth !== n[h[r]] || e[r].offsetHeight !== a[h[r]]) return t;
                                return t
                            }, r = function () {
                                for (var e = [], t = 0, r = h.length; t < r; t++) {
                                    var n = g();
                                    n.style.fontFamily = h[t], i.appendChild(n), e.push(n)
                                }
                                return e
                            }();
                        e.appendChild(i);
                        for (var o = 0, s = h.length; o < s; o++) n[h[o]] = r[o].offsetWidth, a[h[o]] = r[o].offsetHeight;
                        var l = function () {
                            for (var e, t, r, n = {}, i = 0, a = c.length; i < a; i++) {
                                for (var o = [], s = 0, l = h.length; s < l; s++) {
                                    var d = (e = c[i], t = h[s], r = void 0, (r = g()).style.fontFamily = "'" + e + "'," + t, r);
                                    u.appendChild(d), o.push(d)
                                }
                                n[c[i]] = o
                            }
                            return n
                        }();
                        e.appendChild(u);
                        for (var d = [], p = 0, m = c.length; p < m; p++) t(l[c[p]]) && d.push(c[p]);
                        e.removeChild(u), e.removeChild(i), f.addPreprocessedComponent({
                            key: "js_fonts",
                            value: d
                        }), S(f)
                    }, 1)
                }, pluginsKey: function (e) {
                    return this.options.excludePlugins || (this.isIE() ? this.options.excludeIEPlugins || e.addPreprocessedComponent({
                        key: "ie_plugins",
                        value: this.getIEPlugins()
                    }) : e.addPreprocessedComponent({key: "regular_plugins", value: this.getRegularPlugins()})), e
                }, getRegularPlugins: function () {
                    var e = [];
                    if (navigator.plugins) for (var t = 0, r = navigator.plugins.length; t < r; t++) navigator.plugins[t] && e.push(navigator.plugins[t]);
                    return this.pluginsShouldBeSorted() && (e = e.sort(function (e, t) {
                        return e.name > t.name ? 1 : e.name < t.name ? -1 : 0
                    })), this.map(e, function (e) {
                        var t = this.map(e, function (e) {
                            return [e.type, e.suffixes].join("~")
                        }).join(",");
                        return [e.name, e.description, t].join("::")
                    }, this)
                }, getIEPlugins: function () {
                    var e = [];
                    if (Object.getOwnPropertyDescriptor && Object.getOwnPropertyDescriptor(window, "ActiveXObject") || "ActiveXObject" in window) {
                        e = this.map(["AcroPDF.PDF", "Adodb.Stream", "AgControl.AgControl", "DevalVRXCtrl.DevalVRXCtrl.1", "MacromediaFlashPaper.MacromediaFlashPaper", "Msxml2.DOMDocument", "Msxml2.XMLHTTP", "PDF.PdfCtrl", "QuickTime.QuickTime", "QuickTimeCheckObject.QuickTimeCheck.1", "RealPlayer", "RealPlayer.RealPlayer(tm) ActiveX Control (32-bit)", "RealVideo.RealVideo(tm) ActiveX Control (32-bit)", "Scripting.Dictionary", "SWCtl.SWCtl", "Shell.UIHelper", "ShockwaveFlash.ShockwaveFlash", "Skype.Detection", "TDCCtl.TDCCtl", "WMPlayer.OCX", "rmocx.RealPlayer G2 Control", "rmocx.RealPlayer G2 Control.1"], function (e) {
                            try {
                                return new window.ActiveXObject(e), e
                            } catch (e) {
                                return null
                            }
                        })
                    }
                    return navigator.plugins && (e = e.concat(this.getRegularPlugins())), e
                }, pluginsShouldBeSorted: function () {
                    for (var e = !1, t = 0, r = this.options.sortPluginsFor.length; t < r; t++) {
                        var n = this.options.sortPluginsFor[t];
                        if (navigator.userAgent.match(n)) {
                            e = !0;
                            break
                        }
                    }
                    return e
                }, touchSupportKey: function (e) {
                    return this.options.excludeTouchSupport || e.addPreprocessedComponent({
                        key: "touch_support",
                        value: this.getTouchSupport()
                    }), e
                }, hardwareConcurrencyKey: function (e) {
                    return this.options.excludeHardwareConcurrency || e.addPreprocessedComponent({
                        key: "hardware_concurrency",
                        value: this.getHardwareConcurrency()
                    }), e
                }, hasSessionStorage: function () {
                    try {
                        return !!window.sessionStorage
                    } catch (e) {
                        return !0
                    }
                }, hasLocalStorage: function () {
                    try {
                        return !!window.localStorage
                    } catch (e) {
                        return !0
                    }
                }, hasIndexedDB: function () {
                    try {
                        return !!window.indexedDB
                    } catch (e) {
                        return !0
                    }
                }, getHardwareConcurrency: function () {
                    return navigator.hardwareConcurrency ? navigator.hardwareConcurrency : "unknown"
                }, getNavigatorCpuClass: function () {
                    return navigator.cpuClass ? navigator.cpuClass : "unknown"
                }, getNavigatorPlatform: function () {
                    return navigator.platform ? navigator.platform : "unknown"
                }, getDoNotTrack: function () {
                    return navigator.doNotTrack ? navigator.doNotTrack : navigator.msDoNotTrack ? navigator.msDoNotTrack : window.doNotTrack ? window.doNotTrack : "unknown"
                }, getTouchSupport: function () {
                    var e = 0, t = !1;
                    void 0 !== navigator.maxTouchPoints ? e = navigator.maxTouchPoints : void 0 !== navigator.msMaxTouchPoints && (e = navigator.msMaxTouchPoints);
                    try {
                        document.createEvent("TouchEvent"), t = !0
                    } catch (e) {
                    }
                    return [e, t, "ontouchstart" in window]
                }, getCanvasFp: function () {
                    var e = [], t = document.createElement("canvas");
                    t.width = 2e3, t.height = 200, t.style.display = "inline";
                    var r = t.getContext("2d");
                    return r.rect(0, 0, 10, 10), r.rect(2, 2, 6, 6), e.push("canvas winding:" + (!1 === r.isPointInPath(5, 5, "evenodd") ? "yes" : "no")), r.textBaseline = "alphabetic", r.fillStyle = "#f60", r.fillRect(125, 1, 62, 20), r.fillStyle = "#069", this.options.dontUseFakeFontInCanvas ? r.font = "11pt Arial" : r.font = "11pt no-real-font-123", r.fillText("Cwm fjordbank glyphs vext quiz, 😃", 2, 15), r.fillStyle = "rgba(102, 204, 0, 0.2)", r.font = "18pt Arial", r.fillText("Cwm fjordbank glyphs vext quiz, 😃", 4, 45), r.globalCompositeOperation = "multiply", r.fillStyle = "rgb(255,0,255)", r.beginPath(), r.arc(50, 50, 50, 0, 2 * Math.PI, !0), r.closePath(), r.fill(), r.fillStyle = "rgb(0,255,255)", r.beginPath(), r.arc(100, 50, 50, 0, 2 * Math.PI, !0), r.closePath(), r.fill(), r.fillStyle = "rgb(255,255,0)", r.beginPath(), r.arc(75, 100, 50, 0, 2 * Math.PI, !0), r.closePath(), r.fill(), r.fillStyle = "rgb(255,0,255)", r.arc(75, 75, 75, 0, 2 * Math.PI, !0), r.arc(75, 75, 25, 0, 2 * Math.PI, !0), r.fill("evenodd"), t.toDataURL && e.push("canvas fp:" + t.toDataURL()), e.join("~")
                }, getWebglFp: function () {
                    var t, e = function (e) {
                        return t.clearColor(0, 0, 0, 1), t.enable(t.DEPTH_TEST), t.depthFunc(t.LEQUAL), t.clear(t.COLOR_BUFFER_BIT | t.DEPTH_BUFFER_BIT), "[" + e[0] + ", " + e[1] + "]"
                    };
                    if (!(t = this.getWebglCanvas())) return null;
                    var r = [], n = t.createBuffer();
                    t.bindBuffer(t.ARRAY_BUFFER, n);
                    var i = new Float32Array([-.2, -.9, 0, .4, -.26, 0, 0, .732134444, 0]);
                    t.bufferData(t.ARRAY_BUFFER, i, t.STATIC_DRAW), n.itemSize = 3, n.numItems = 3;
                    var a = t.createProgram(), o = t.createShader(t.VERTEX_SHADER);
                    t.shaderSource(o, "attribute vec2 attrVertex;varying vec2 varyinTexCoordinate;uniform vec2 uniformOffset;void main(){varyinTexCoordinate=attrVertex+uniformOffset;gl_Position=vec4(attrVertex,0,1);}"), t.compileShader(o);
                    var s = t.createShader(t.FRAGMENT_SHADER);
                    t.shaderSource(s, "precision mediump float;varying vec2 varyinTexCoordinate;void main() {gl_FragColor=vec4(varyinTexCoordinate,0,1);}"), t.compileShader(s), t.attachShader(a, o), t.attachShader(a, s), t.linkProgram(a), t.useProgram(a), a.vertexPosAttrib = t.getAttribLocation(a, "attrVertex"), a.offsetUniform = t.getUniformLocation(a, "uniformOffset"), t.enableVertexAttribArray(a.vertexPosArray), t.vertexAttribPointer(a.vertexPosAttrib, n.itemSize, t.FLOAT, !1, 0, 0), t.uniform2f(a.offsetUniform, 1, 1), t.drawArrays(t.TRIANGLE_STRIP, 0, n.numItems);
                    try {
                        r.push(t.canvas.toDataURL())
                    } catch (e) {
                    }
                    r.push("extensions:" + (t.getSupportedExtensions() || []).join(";")), r.push("webgl aliased line width range:" + e(t.getParameter(t.ALIASED_LINE_WIDTH_RANGE))), r.push("webgl aliased point size range:" + e(t.getParameter(t.ALIASED_POINT_SIZE_RANGE))), r.push("webgl alpha bits:" + t.getParameter(t.ALPHA_BITS)), r.push("webgl antialiasing:" + (t.getContextAttributes().antialias ? "yes" : "no")), r.push("webgl blue bits:" + t.getParameter(t.BLUE_BITS)), r.push("webgl depth bits:" + t.getParameter(t.DEPTH_BITS)), r.push("webgl green bits:" + t.getParameter(t.GREEN_BITS)), r.push("webgl max anisotropy:" + function (e) {
                        var t = e.getExtension("EXT_texture_filter_anisotropic") || e.getExtension("WEBKIT_EXT_texture_filter_anisotropic") || e.getExtension("MOZ_EXT_texture_filter_anisotropic");
                        if (t) {
                            var r = e.getParameter(t.MAX_TEXTURE_MAX_ANISOTROPY_EXT);
                            return 0 === r && (r = 2), r
                        }
                        return null
                    }(t)), r.push("webgl max combined texture image units:" + t.getParameter(t.MAX_COMBINED_TEXTURE_IMAGE_UNITS)), r.push("webgl max cube map texture size:" + t.getParameter(t.MAX_CUBE_MAP_TEXTURE_SIZE)), r.push("webgl max fragment uniform vectors:" + t.getParameter(t.MAX_FRAGMENT_UNIFORM_VECTORS)), r.push("webgl max render buffer size:" + t.getParameter(t.MAX_RENDERBUFFER_SIZE)), r.push("webgl max texture image units:" + t.getParameter(t.MAX_TEXTURE_IMAGE_UNITS)), r.push("webgl max texture size:" + t.getParameter(t.MAX_TEXTURE_SIZE)), r.push("webgl max varying vectors:" + t.getParameter(t.MAX_VARYING_VECTORS)), r.push("webgl max vertex attribs:" + t.getParameter(t.MAX_VERTEX_ATTRIBS)), r.push("webgl max vertex texture image units:" + t.getParameter(t.MAX_VERTEX_TEXTURE_IMAGE_UNITS)), r.push("webgl max vertex uniform vectors:" + t.getParameter(t.MAX_VERTEX_UNIFORM_VECTORS)), r.push("webgl max viewport dims:" + e(t.getParameter(t.MAX_VIEWPORT_DIMS))), r.push("webgl red bits:" + t.getParameter(t.RED_BITS)), r.push("webgl renderer:" + t.getParameter(t.RENDERER)), r.push("webgl shading language version:" + t.getParameter(t.SHADING_LANGUAGE_VERSION)), r.push("webgl stencil bits:" + t.getParameter(t.STENCIL_BITS)), r.push("webgl vendor:" + t.getParameter(t.VENDOR)), r.push("webgl version:" + t.getParameter(t.VERSION));
                    try {
                        var l = t.getExtension("WEBGL_debug_renderer_info");
                        l && (r.push("webgl unmasked vendor:" + t.getParameter(l.UNMASKED_VENDOR_WEBGL)), r.push("webgl unmasked renderer:" + t.getParameter(l.UNMASKED_RENDERER_WEBGL)))
                    } catch (e) {
                    }
                    return t.getShaderPrecisionFormat && (r.push("webgl vertex shader high float precision:" + t.getShaderPrecisionFormat(t.VERTEX_SHADER, t.HIGH_FLOAT).precision), r.push("webgl vertex shader high float precision rangeMin:" + t.getShaderPrecisionFormat(t.VERTEX_SHADER, t.HIGH_FLOAT).rangeMin), r.push("webgl vertex shader high float precision rangeMax:" + t.getShaderPrecisionFormat(t.VERTEX_SHADER, t.HIGH_FLOAT).rangeMax), r.push("webgl vertex shader medium float precision:" + t.getShaderPrecisionFormat(t.VERTEX_SHADER, t.MEDIUM_FLOAT).precision), r.push("webgl vertex shader medium float precision rangeMin:" + t.getShaderPrecisionFormat(t.VERTEX_SHADER, t.MEDIUM_FLOAT).rangeMin), r.push("webgl vertex shader medium float precision rangeMax:" + t.getShaderPrecisionFormat(t.VERTEX_SHADER, t.MEDIUM_FLOAT).rangeMax), r.push("webgl vertex shader low float precision:" + t.getShaderPrecisionFormat(t.VERTEX_SHADER, t.LOW_FLOAT).precision), r.push("webgl vertex shader low float precision rangeMin:" + t.getShaderPrecisionFormat(t.VERTEX_SHADER, t.LOW_FLOAT).rangeMin), r.push("webgl vertex shader low float precision rangeMax:" + t.getShaderPrecisionFormat(t.VERTEX_SHADER, t.LOW_FLOAT).rangeMax), r.push("webgl fragment shader high float precision:" + t.getShaderPrecisionFormat(t.FRAGMENT_SHADER, t.HIGH_FLOAT).precision), r.push("webgl fragment shader high float precision rangeMin:" + t.getShaderPrecisionFormat(t.FRAGMENT_SHADER, t.HIGH_FLOAT).rangeMin), r.push("webgl fragment shader high float precision rangeMax:" + t.getShaderPrecisionFormat(t.FRAGMENT_SHADER, t.HIGH_FLOAT).rangeMax), r.push("webgl fragment shader medium float precision:" + t.getShaderPrecisionFormat(t.FRAGMENT_SHADER, t.MEDIUM_FLOAT).precision), r.push("webgl fragment shader medium float precision rangeMin:" + t.getShaderPrecisionFormat(t.FRAGMENT_SHADER, t.MEDIUM_FLOAT).rangeMin), r.push("webgl fragment shader medium float precision rangeMax:" + t.getShaderPrecisionFormat(t.FRAGMENT_SHADER, t.MEDIUM_FLOAT).rangeMax), r.push("webgl fragment shader low float precision:" + t.getShaderPrecisionFormat(t.FRAGMENT_SHADER, t.LOW_FLOAT).precision), r.push("webgl fragment shader low float precision rangeMin:" + t.getShaderPrecisionFormat(t.FRAGMENT_SHADER, t.LOW_FLOAT).rangeMin), r.push("webgl fragment shader low float precision rangeMax:" + t.getShaderPrecisionFormat(t.FRAGMENT_SHADER, t.LOW_FLOAT).rangeMax), r.push("webgl vertex shader high int precision:" + t.getShaderPrecisionFormat(t.VERTEX_SHADER, t.HIGH_INT).precision), r.push("webgl vertex shader high int precision rangeMin:" + t.getShaderPrecisionFormat(t.VERTEX_SHADER, t.HIGH_INT).rangeMin), r.push("webgl vertex shader high int precision rangeMax:" + t.getShaderPrecisionFormat(t.VERTEX_SHADER, t.HIGH_INT).rangeMax), r.push("webgl vertex shader medium int precision:" + t.getShaderPrecisionFormat(t.VERTEX_SHADER, t.MEDIUM_INT).precision), r.push("webgl vertex shader medium int precision rangeMin:" + t.getShaderPrecisionFormat(t.VERTEX_SHADER, t.MEDIUM_INT).rangeMin), r.push("webgl vertex shader medium int precision rangeMax:" + t.getShaderPrecisionFormat(t.VERTEX_SHADER, t.MEDIUM_INT).rangeMax), r.push("webgl vertex shader low int precision:" + t.getShaderPrecisionFormat(t.VERTEX_SHADER, t.LOW_INT).precision), r.push("webgl vertex shader low int precision rangeMin:" + t.getShaderPrecisionFormat(t.VERTEX_SHADER, t.LOW_INT).rangeMin), r.push("webgl vertex shader low int precision rangeMax:" + t.getShaderPrecisionFormat(t.VERTEX_SHADER, t.LOW_INT).rangeMax), r.push("webgl fragment shader high int precision:" + t.getShaderPrecisionFormat(t.FRAGMENT_SHADER, t.HIGH_INT).precision), r.push("webgl fragment shader high int precision rangeMin:" + t.getShaderPrecisionFormat(t.FRAGMENT_SHADER, t.HIGH_INT).rangeMin), r.push("webgl fragment shader high int precision rangeMax:" + t.getShaderPrecisionFormat(t.FRAGMENT_SHADER, t.HIGH_INT).rangeMax), r.push("webgl fragment shader medium int precision:" + t.getShaderPrecisionFormat(t.FRAGMENT_SHADER, t.MEDIUM_INT).precision), r.push("webgl fragment shader medium int precision rangeMin:" + t.getShaderPrecisionFormat(t.FRAGMENT_SHADER, t.MEDIUM_INT).rangeMin), r.push("webgl fragment shader medium int precision rangeMax:" + t.getShaderPrecisionFormat(t.FRAGMENT_SHADER, t.MEDIUM_INT).rangeMax), r.push("webgl fragment shader low int precision:" + t.getShaderPrecisionFormat(t.FRAGMENT_SHADER, t.LOW_INT).precision), r.push("webgl fragment shader low int precision rangeMin:" + t.getShaderPrecisionFormat(t.FRAGMENT_SHADER, t.LOW_INT).rangeMin), r.push("webgl fragment shader low int precision rangeMax:" + t.getShaderPrecisionFormat(t.FRAGMENT_SHADER, t.LOW_INT).rangeMax)), r.join("~")
                }, getWebglVendorAndRenderer: function () {
                    try {
                        var e = this.getWebglCanvas(), t = e.getExtension("WEBGL_debug_renderer_info");
                        return e.getParameter(t.UNMASKED_VENDOR_WEBGL) + "~" + e.getParameter(t.UNMASKED_RENDERER_WEBGL)
                    } catch (e) {
                        return null
                    }
                }, getAdBlock: function () {
                    var e = document.createElement("div");
                    e.innerHTML = "&nbsp;";
                    var t = !(e.className = "adsbox");
                    try {
                        document.body.appendChild(e), t = 0 === document.getElementsByClassName("adsbox")[0].offsetHeight, document.body.removeChild(e)
                    } catch (e) {
                        t = !1
                    }
                    return t
                }, getHasLiedLanguages: function () {
                    if (void 0 !== navigator.languages) try {
                        if (navigator.languages[0].substr(0, 2) !== navigator.language.substr(0, 2)) return !0
                    } catch (e) {
                        return !0
                    }
                    return !1
                }, getHasLiedResolution: function () {
                    return window.screen.width < window.screen.availWidth || window.screen.height < window.screen.availHeight
                }, getHasLiedOs: function () {
                    var e, t = navigator.userAgent.toLowerCase(), r = navigator.oscpu,
                        n = navigator.platform.toLowerCase();
                    if (e = 0 <= t.indexOf("windows phone") ? "Windows Phone" : 0 <= t.indexOf("win") ? "Windows" : 0 <= t.indexOf("android") ? "Android" : 0 <= t.indexOf("linux") ? "Linux" : 0 <= t.indexOf("iphone") || 0 <= t.indexOf("ipad") ? "iOS" : 0 <= t.indexOf("mac") ? "Mac" : "Other", ("ontouchstart" in window || 0 < navigator.maxTouchPoints || 0 < navigator.msMaxTouchPoints) && "Windows Phone" !== e && "Android" !== e && "iOS" !== e && "Other" !== e) return !0;
                    if (void 0 !== r) {
                        if (0 <= (r = r.toLowerCase()).indexOf("win") && "Windows" !== e && "Windows Phone" !== e) return !0;
                        if (0 <= r.indexOf("linux") && "Linux" !== e && "Android" !== e) return !0;
                        if (0 <= r.indexOf("mac") && "Mac" !== e && "iOS" !== e) return !0;
                        if ((-1 === r.indexOf("win") && -1 === r.indexOf("linux") && -1 === r.indexOf("mac")) != ("Other" === e)) return !0
                    }
                    return 0 <= n.indexOf("win") && "Windows" !== e && "Windows Phone" !== e || ((0 <= n.indexOf("linux") || 0 <= n.indexOf("android") || 0 <= n.indexOf("pike")) && "Linux" !== e && "Android" !== e || ((0 <= n.indexOf("mac") || 0 <= n.indexOf("ipad") || 0 <= n.indexOf("ipod") || 0 <= n.indexOf("iphone")) && "Mac" !== e && "iOS" !== e || ((-1 === n.indexOf("win") && -1 === n.indexOf("linux") && -1 === n.indexOf("mac")) != ("Other" === e) || void 0 === navigator.plugins && "Windows" !== e && "Windows Phone" !== e)))
                }, getHasLiedBrowser: function () {
                    var e, t = navigator.userAgent.toLowerCase(), r = navigator.productSub;
                    if (("Chrome" === (e = 0 <= t.indexOf("firefox") ? "Firefox" : 0 <= t.indexOf("opera") || 0 <= t.indexOf("opr") ? "Opera" : 0 <= t.indexOf("chrome") ? "Chrome" : 0 <= t.indexOf("safari") ? "Safari" : 0 <= t.indexOf("trident") ? "Internet Explorer" : "Other") || "Safari" === e || "Opera" === e) && "20030107" !== r) return !0;
                    var n, i = eval.toString().length;
                    if (37 === i && "Safari" !== e && "Firefox" !== e && "Other" !== e) return !0;
                    if (39 === i && "Internet Explorer" !== e && "Other" !== e) return !0;
                    if (33 === i && "Chrome" !== e && "Opera" !== e && "Other" !== e) return !0;
                    try {
                        throw"a"
                    } catch (e) {
                        try {
                            e.toSource(), n = !0
                        } catch (e) {
                            n = !1
                        }
                    }
                    return !(!n || "Firefox" === e || "Other" === e)
                }, isCanvasSupported: function () {
                    var e = document.createElement("canvas");
                    return !(!e.getContext || !e.getContext("2d"))
                }, isWebGlSupported: function () {
                    if (!this.isCanvasSupported()) return !1;
                    var e = this.getWebglCanvas();
                    return !!window.WebGLRenderingContext && !!e
                }, isIE: function () {
                    return "Microsoft Internet Explorer" === navigator.appName || !("Netscape" !== navigator.appName || !/Trident/.test(navigator.userAgent))
                }, hasSwfObjectLoaded: function () {
                    return void 0 !== window.swfobject
                }, hasMinFlashInstalled: function () {
                    return window.swfobject.hasFlashPlayerVersion("9.0.0")
                }, addFlashDivNode: function () {
                    var e = document.createElement("div");
                    e.setAttribute("id", this.options.swfContainerId), document.body.appendChild(e)
                }, loadSwfAndDetectFonts: function (t) {
                    var e = "___fp_swf_loaded";
                    window[e] = function (e) {
                        t(e)
                    };
                    var r = this.options.swfContainerId;
                    this.addFlashDivNode();
                    var n = {onReady: e};
                    window.swfobject.embedSWF(this.options.swfPath, r, "1", "1", "9.0.0", !1, n, {
                        allowScriptAccess: "always",
                        menu: "false"
                    }, {})
                }, getWebglCanvas: function () {
                    var e = document.createElement("canvas"), t = null;
                    try {
                        t = e.getContext("webgl") || e.getContext("experimental-webgl")
                    } catch (e) {
                    }
                    return t || (t = null), t
                }, each: function (e, t, r) {
                    if (null !== e) if (this.nativeForEach && e.forEach === this.nativeForEach) e.forEach(t, r); else if (e.length === +e.length) {
                        for (var n = 0, i = e.length; n < i; n++) if (t.call(r, e[n], n, e) === {}) return
                    } else for (var a in e) if (e.hasOwnProperty(a) && t.call(r, e[a], a, e) === {}) return
                }, map: function (e, n, i) {
                    var a = [];
                    return null == e ? a : this.nativeMap && e.map === this.nativeMap ? e.map(n, i) : (this.each(e, function (e, t, r) {
                        a[a.length] = n.call(i, e, t, r)
                    }), a)
                }, x64Add: function (e, t) {
                    e = [e[0] >>> 16, 65535 & e[0], e[1] >>> 16, 65535 & e[1]], t = [t[0] >>> 16, 65535 & t[0], t[1] >>> 16, 65535 & t[1]];
                    var r = [0, 0, 0, 0];
                    return r[3] += e[3] + t[3], r[2] += r[3] >>> 16, r[3] &= 65535, r[2] += e[2] + t[2], r[1] += r[2] >>> 16, r[2] &= 65535, r[1] += e[1] + t[1], r[0] += r[1] >>> 16, r[1] &= 65535, r[0] += e[0] + t[0], r[0] &= 65535, [r[0] << 16 | r[1], r[2] << 16 | r[3]]
                }, x64Multiply: function (e, t) {
                    e = [e[0] >>> 16, 65535 & e[0], e[1] >>> 16, 65535 & e[1]], t = [t[0] >>> 16, 65535 & t[0], t[1] >>> 16, 65535 & t[1]];
                    var r = [0, 0, 0, 0];
                    return r[3] += e[3] * t[3], r[2] += r[3] >>> 16, r[3] &= 65535, r[2] += e[2] * t[3], r[1] += r[2] >>> 16, r[2] &= 65535, r[2] += e[3] * t[2], r[1] += r[2] >>> 16, r[2] &= 65535, r[1] += e[1] * t[3], r[0] += r[1] >>> 16, r[1] &= 65535, r[1] += e[2] * t[2], r[0] += r[1] >>> 16, r[1] &= 65535, r[1] += e[3] * t[1], r[0] += r[1] >>> 16, r[1] &= 65535, r[0] += e[0] * t[3] + e[1] * t[2] + e[2] * t[1] + e[3] * t[0], r[0] &= 65535, [r[0] << 16 | r[1], r[2] << 16 | r[3]]
                }, x64Rotl: function (e, t) {
                    return 32 === (t %= 64) ? [e[1], e[0]] : t < 32 ? [e[0] << t | e[1] >>> 32 - t, e[1] << t | e[0] >>> 32 - t] : (t -= 32, [e[1] << t | e[0] >>> 32 - t, e[0] << t | e[1] >>> 32 - t])
                }, x64LeftShift: function (e, t) {
                    return 0 === (t %= 64) ? e : t < 32 ? [e[0] << t | e[1] >>> 32 - t, e[1] << t] : [e[1] << t - 32, 0]
                }, x64Xor: function (e, t) {
                    return [e[0] ^ t[0], e[1] ^ t[1]]
                }, x64Fmix: function (e) {
                    return e = this.x64Xor(e, [0, e[0] >>> 1]), e = this.x64Multiply(e, [4283543511, 3981806797]), e = this.x64Xor(e, [0, e[0] >>> 1]), e = this.x64Multiply(e, [3301882366, 444984403]), e = this.x64Xor(e, [0, e[0] >>> 1])
                }, x64hash128: function (e, t) {
                    t = t || 0;
                    for (var r = (e = e || "").length % 16, n = e.length - r, i = [0, t], a = [0, t], o = [0, 0], s = [0, 0], l = [2277735313, 289559509], d = [1291169091, 658871167], h = 0; h < n; h += 16) o = [255 & e.charCodeAt(h + 4) | (255 & e.charCodeAt(h + 5)) << 8 | (255 & e.charCodeAt(h + 6)) << 16 | (255 & e.charCodeAt(h + 7)) << 24, 255 & e.charCodeAt(h) | (255 & e.charCodeAt(h + 1)) << 8 | (255 & e.charCodeAt(h + 2)) << 16 | (255 & e.charCodeAt(h + 3)) << 24], s = [255 & e.charCodeAt(h + 12) | (255 & e.charCodeAt(h + 13)) << 8 | (255 & e.charCodeAt(h + 14)) << 16 | (255 & e.charCodeAt(h + 15)) << 24, 255 & e.charCodeAt(h + 8) | (255 & e.charCodeAt(h + 9)) << 8 | (255 & e.charCodeAt(h + 10)) << 16 | (255 & e.charCodeAt(h + 11)) << 24], o = this.x64Multiply(o, l), o = this.x64Rotl(o, 31), o = this.x64Multiply(o, d), i = this.x64Xor(i, o), i = this.x64Rotl(i, 27), i = this.x64Add(i, a), i = this.x64Add(this.x64Multiply(i, [0, 5]), [0, 1390208809]), s = this.x64Multiply(s, d), s = this.x64Rotl(s, 33), s = this.x64Multiply(s, l), a = this.x64Xor(a, s), a = this.x64Rotl(a, 31), a = this.x64Add(a, i), a = this.x64Add(this.x64Multiply(a, [0, 5]), [0, 944331445]);
                    switch (o = [0, 0], s = [0, 0], r) {
                        case 15:
                            s = this.x64Xor(s, this.x64LeftShift([0, e.charCodeAt(h + 14)], 48));
                        case 14:
                            s = this.x64Xor(s, this.x64LeftShift([0, e.charCodeAt(h + 13)], 40));
                        case 13:
                            s = this.x64Xor(s, this.x64LeftShift([0, e.charCodeAt(h + 12)], 32));
                        case 12:
                            s = this.x64Xor(s, this.x64LeftShift([0, e.charCodeAt(h + 11)], 24));
                        case 11:
                            s = this.x64Xor(s, this.x64LeftShift([0, e.charCodeAt(h + 10)], 16));
                        case 10:
                            s = this.x64Xor(s, this.x64LeftShift([0, e.charCodeAt(h + 9)], 8));
                        case 9:
                            s = this.x64Xor(s, [0, e.charCodeAt(h + 8)]), s = this.x64Multiply(s, d), s = this.x64Rotl(s, 33), s = this.x64Multiply(s, l), a = this.x64Xor(a, s);
                        case 8:
                            o = this.x64Xor(o, this.x64LeftShift([0, e.charCodeAt(h + 7)], 56));
                        case 7:
                            o = this.x64Xor(o, this.x64LeftShift([0, e.charCodeAt(h + 6)], 48));
                        case 6:
                            o = this.x64Xor(o, this.x64LeftShift([0, e.charCodeAt(h + 5)], 40));
                        case 5:
                            o = this.x64Xor(o, this.x64LeftShift([0, e.charCodeAt(h + 4)], 32));
                        case 4:
                            o = this.x64Xor(o, this.x64LeftShift([0, e.charCodeAt(h + 3)], 24));
                        case 3:
                            o = this.x64Xor(o, this.x64LeftShift([0, e.charCodeAt(h + 2)], 16));
                        case 2:
                            o = this.x64Xor(o, this.x64LeftShift([0, e.charCodeAt(h + 1)], 8));
                        case 1:
                            o = this.x64Xor(o, [0, e.charCodeAt(h)]), o = this.x64Multiply(o, l), o = this.x64Rotl(o, 31), o = this.x64Multiply(o, d), i = this.x64Xor(i, o)
                    }
                    return i = this.x64Xor(i, [0, e.length]), a = this.x64Xor(a, [0, e.length]), i = this.x64Add(i, a), a = this.x64Add(a, i), i = this.x64Fmix(i), a = this.x64Fmix(a), i = this.x64Add(i, a), a = this.x64Add(a, i), ("00000000" + (i[0] >>> 0).toString(16)).slice(-8) + ("00000000" + (i[1] >>> 0).toString(16)).slice(-8) + ("00000000" + (a[0] >>> 0).toString(16)).slice(-8) + ("00000000" + (a[1] >>> 0).toString(16)).slice(-8)
                }
            }, t.VERSION = "1.8.0", t
        });
        var data_in_site = {
            time_to_come: new Date(),
            time_to_come_timestamp: new Date().getTime() / 1000,
            is_localstorage: 'нет',
            is_coockie: 'нет',
            count_visit: 1
        };

        function toTimestamp(strDate) {
            var datum = Date.parse(strDate);
            return datum;
        }

        try {
            // сохраняем информацию о времени проведенного на сайте
            // через localStorage
            if (window.localStorage) {
                data_in_site.is_localstorage = 'да';

                // если пользователь не новый
                if (window.localStorage.length != 0) {
                    var _data_in_site = JSON.parse(localStorage.getItem('data_in_site'));
                    if (_data_in_site) {
                        if (Date.parse(_data_in_site.time_to_come) < (new Date() - 1000 * 60 * 60 * 24 * 2)) {
                            localStorage.removeItem("data_in_site");
                        } else {
                            data_in_site.time_to_come = (JSON.parse(localStorage.getItem('data_in_site'))).time_to_come;
                            data_in_site.time_to_come_timestamp = (JSON.parse(localStorage.getItem('data_in_site'))).time_to_come_timestamp;
                            data_in_site.count_visit = (JSON.parse(localStorage.getItem('data_in_site'))).count_visit;
                            data_in_site.count_visit++;
                        }
                    } else {
                        localStorage.setItem("data_in_site", JSON.stringify(data_in_site));
                    }

                }

                localStorage.setItem("data_in_site", JSON.stringify(data_in_site));

            } else {
                // сохраняем информацию о времени проведенного на сайте через печеньки
                var _data_in_site = Cookies.get('data_in_site');
                if (typeof _data_in_site === 'undefined') {
                    Cookies.set('data_in_site', 'sadg6453wesdx', {expires: 2});
                    Cookies.set('time_to_come', data_in_site.time_to_come, {expires: 2});
                    Cookies.set('time_to_come_timestamp', data_in_site.time_to_come_timestamp, {expires: 2});
                    Cookies.set('is_localstorage', 'нет', {expires: 2});
                    Cookies.set('is_coockie', 'да', {expires: 2});
                    Cookies.set('count_visit', 1, {expires: 2});
                } else {
                    var time_to_come = Cookies.get('time_to_come');

                    if (Date.parse(time_to_come) < (new Date() - 1000 * 60 * 60 * 24 * 2)) {
                        Cookies.remove('data_in_site');
                        Cookies.remove('time_to_come');
                        Cookies.remove('time_to_come_timestamp');
                        Cookies.remove('is_localstorage');
                        Cookies.remove('is_coockie');
                        Cookies.remove('count_visit');
                        Cookies.set('data_in_site', 'sadg6453wesdx', {expires: 2});
                        Cookies.set('time_to_come', data_in_site.time_to_come, {expires: 2});
                        Cookies.set('time_to_come_timestamp', data_in_site.time_to_come_timestamp, {expires: 2});
                        Cookies.set('is_localstorage', 'нет', {expires: 2});
                        Cookies.set('is_coockie', 'да', {expires: 2});
                        Cookies.set('count_visit', 1, {expires: 2});
                    } else {
                        data_in_site.time_to_come = Cookies.get('time_to_come');
                        data_in_site.time_to_come_timestamp = Cookies.get('time_to_come_timestamp');
                        data_in_site.count_visit = Cookies.get('count_visit');
                        data_in_site.is_localstorage = 'нет';
                        data_in_site.is_coockie = 'да';
                        data_in_site.count_visit++;
                        Cookies.remove('count_visit');
                        Cookies.set('count_visit', data_in_site.count_visit, {expires: 2});
                    }
                }
            }
        } catch (e) {
            console.log(e);
        }


        /*!
             * JavaScript Cookie v2.2.0
             * https://github.com/js-cookie/js-cookie
             *
             * Copyright 2006, 2015 Klaus Hartl & Fagner Brack
             * Released under the MIT license
             */
        (function (factory) {
            var registeredInModuleLoader;
            if (typeof define === 'function' && define.amd) {
                define(factory);
                registeredInModuleLoader = true;
            }
            if (typeof exports === 'object') {
                module.exports = factory();
                registeredInModuleLoader = true;
            }
            if (!registeredInModuleLoader) {
                var OldCookies = window.Cookies;
                var api = window.Cookies = factory();
                api.noConflict = function () {
                    window.Cookies = OldCookies;
                    return api;
                };
            }
        }(function () {
            function extend() {
                var i = 0;
                var result = {};
                for (; i < arguments.length; i++) {
                    var attributes = arguments[i];
                    for (var key in attributes) {
                        result[key] = attributes[key];
                    }
                }
                return result;
            }

            function decode(s) {
                return s.replace(/(%[0-9A-Z]{2})+/g, decodeURIComponent);
            }

            function init(converter) {
                function api() {
                }

                function set(key, value, attributes) {
                    if (typeof document === 'undefined') {
                        return;
                    }

                    attributes = extend({
                        path: '/'
                    }, api.defaults, attributes);

                    if (typeof attributes.expires === 'number') {
                        attributes.expires = new Date(new Date() * 1 + attributes.expires * 864e+5);
                    }

                    // We're using "expires" because "max-age" is not supported by IE
                    attributes.expires = attributes.expires ? attributes.expires.toUTCString() : '';

                    try {
                        var result = JSON.stringify(value);
                        if (/^[\{\[]/.test(result)) {
                            value = result;
                        }
                    } catch (e) {
                    }

                    value = converter.write ?
                        converter.write(value, key) :
                        encodeURIComponent(String(value))
                            .replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent);

                    key = encodeURIComponent(String(key))
                        .replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent)
                        .replace(/[\(\)]/g, escape);

                    var stringifiedAttributes = '';
                    for (var attributeName in attributes) {
                        if (!attributes[attributeName]) {
                            continue;
                        }
                        stringifiedAttributes += '; ' + attributeName;
                        if (attributes[attributeName] === true) {
                            continue;
                        }

                        // Considers RFC 6265 section 5.2:
                        // ...
                        // 3.  If the remaining unparsed-attributes contains a %x3B (";")
                        //     character:
                        // Consume the characters of the unparsed-attributes up to,
                        // not including, the first %x3B (";") character.
                        // ...
                        stringifiedAttributes += '=' + attributes[attributeName].split(';')[0];
                    }

                    return (document.cookie = key + '=' + value + stringifiedAttributes);
                }

                function get(key, json) {
                    if (typeof document === 'undefined') {
                        return;
                    }

                    var jar = {};
                    // To prevent the for loop in the first place assign an empty array
                    // in case there are no cookies at all.
                    var cookies = document.cookie ? document.cookie.split('; ') : [];
                    var i = 0;

                    for (; i < cookies.length; i++) {
                        var parts = cookies[i].split('=');
                        var cookie = parts.slice(1).join('=');

                        if (!json && cookie.charAt(0) === '"') {
                            cookie = cookie.slice(1, -1);
                        }

                        try {
                            var name = decode(parts[0]);
                            cookie = (converter.read || converter)(cookie, name) ||
                                decode(cookie);

                            if (json) {
                                try {
                                    cookie = JSON.parse(cookie);
                                } catch (e) {
                                }
                            }

                            jar[name] = cookie;

                            if (key === name) {
                                break;
                            }
                        } catch (e) {
                        }
                    }

                    return key ? jar[key] : jar;
                }

                api.set = set;
                api.get = function (key) {
                    return get(key, false /* read as raw */);
                };
                api.getJSON = function (key) {
                    return get(key, true /* read as json */);
                };
                api.remove = function (key, attributes) {
                    set(key, '', extend(attributes, {
                        expires: -1
                    }));
                };

                api.defaults = {};

                api.withConverter = init;

                return api;
            }

            return init(function () {
            });
        }));

        function showBlock() {
            if (!document.querySelector('.notificate-wrapper').classList.contains('shown')) {
                document.querySelector('.notificate-wrapper').classList.add('notificate-wrapper-show');
                document.querySelector('.notificate-wrapper').classList.add('shown');
            }
        }

        setTimeout(function () {
            showBlock();
        }, _show_modal_timer);

        function hideBlock() {
            document.querySelector('.notificate-wrapper').classList.remove('notificate-wrapper-show');
        }

        document.querySelector('.close-btn').addEventListener('click', hideBlock);
        document.querySelector('.close-btn').addEventListener('touchstart', hideBlock);/*<!--
var fingerprint0 = $("#fingerprint").val(), ip = $("#ip").val(), my_timer = 0; $(function () {
    var i = setTimeout(function n() {
        if (my_timer++ , fingerprint0 = $("#fingerprint").val(), "" != fingerprint0) {
            clearInterval(i); var r = document.location.host, t = document.location.href; return console.log(ip), $.ajax({
                type: "POST", url: "/fingerprint/", data: "fingerprint=" + fingerprint0 + "&site=" + r + "&url=" + t + "&ip=" + ip, success: function (i) {
                    start_check();
                }
            }), !1
        } i = setTimeout(n, 700)
    }, 700)
});
-->
    */

        function start_check() {
        }

        $(document).on('click', '.main-btn-offerwall', function () {
            $('#askQuestion').modal('show');

            return false;
        });
        document.querySelectorAll("a[href='/form']").forEach((item, i) => {
            item.onclick = function () {
                window.location.href = '/pixell';
                window.open(
                    '/form/',
                    '_blank'
                );
                return false;
            };
        });/* private JS */
        function checkMe() {
            var e = document.getElementById("agree");
            null != e && (e.checked ? $("#my_btn").css("display", "block") : $("#my_btn").css("display", "none"))
        }

        function checkMee() {
            var e = document.getElementById("agree");
            null != e && (e.checked ? ($("#next1").css("visibility", "visible"), $("#next1b").css("visibility", "visible")) : ($("#next1").css("visibility", "hidden"), $("#next1b").css("visibility", "hidden")))
        }

        function goToForm() {
            $("#anketa").submit()
        }

        function goToUp() {
            $("html, body").animate({scrollTop: $(".toUp").offset().top}, 1e3)
        }

        var equalheight = function (e) {
            var n, s = 0, a = 0, t = [];
            $(e).each(function () {
                n = $(this), $(n).height("auto");
                var e = n.position().top;
                if (a != e) {
                    for (var i = 0; i < t.length; i++) t[i].height(s);
                    t.length = 0, a = e, s = n.height(), t.push(n)
                } else t.push(n), s = s < n.height() ? n.height() : s;
                for (i = 0; i < t.length; i++) t[i].height(s)
            })
        };
        $(document).ready(function () {
            var e = $("body"), n = $(".ex-main-footer").outerHeight(), s = $(".panel-collapse"),
                a = $(".ex-indicator-scope"),
                t = ($(".ex-first-step"), $(".ex-second-step").find("span"), $(".ex-last-step"), $("#submitOne")),
                i = $("#submitTwo");
            e.css("padding-bottom", n), $(window).resize(function () {
                n = $(".ex-main-footer").outerHeight(), e.css("padding-bottom", n)
            }), s.on("show.bs.collapse", function () {
                $(this).prev(".panel-heading").find(".ex-plus-icon").removeClass("ex-plus-icon").addClass("ex-minus-icon")
            }), s.on("hide.bs.collapse", function () {
                $(this).prev(".panel-heading").find(".ex-minus-icon").removeClass("ex-minus-icon").addClass("ex-plus-icon")
            }), $(t).on("click", function () {
                a.addClass("ex-on-second-step")
            }), $(i).on("click", function () {
                a.removeClass("ex-on-second-step").addClass("ex-on-last-step")
            });
            var l = $(".ex-hidden"), o = $(".ex-collapse");
            l.each(function (e) {
                var n = $(this);
                $.trim(n.html()).length > 0 && n.hasClass("ex-active") ? n.next(".ex-footer").append("<span class='ex-close ex-collapse'>- Закрыть</span>") : n.next(".ex-footer").append("<span class='ex-collapse'>+ Подробнее</span>")
            }), $(".ex-footer").on("click", o, function () {
                var e = $(this);
                e.prev(l).toggleClass("ex-active"), e.find($(".ex-collapse")).toggleClass("ex-blinked ex-shown"), e.prev(l).hasClass("ex-active") ? (e.closest("article").css("height", "auto"), e.find($(".ex-collapse")).addClass("ex-close").text("- Закрыть"), e.find(".ex-main-btn").slideDown("500")) : (e.find($(".ex-collapse")).removeClass("ex-close").text("+ Подробнее"), e.find(".ex-main-btn").removeAttr("style").hide(), equalheight("#ex-equal-blocks article"))
            }), equalheight("#ex-equal-blocks article")
        }), $(window).on("resize", function () {
            equalheight("#ex-equal-blocks article")
        }), $(document).ready(function () {
            if (void 0 != $("#amount").val()) {
                var e = getParameterByName("amount"),
                    n = parseInt($("#amount").val().trim().length < 1 ? 2e4 : $("#amount").val());
                null != e && ((e > 1e5 || e < 1e3) && (e = 2e4), n = e);
                var s = parseInt(n), a = $("#rangeSlider"), t = 13, l = $(".ex-slider-val"), o = $(".ex-current-val"),
                    p = $(".ex-time"), c = $(".ex-Commission"), d = $(".ex-total"), r = $(".irs-single"),
                    h = $(".ex-prob"), x = 95, g = "от 61 дня", u = s * t / 100, m = s + u, f = function () {
                        s >= 3e4 && s < 5e4 ? (x = 85, r.text("вероятность " + x).append("%"), h.html("<span>" + x + "%</span>")) : s >= 5e4 && s < 8e4 ? (x = 77, r.text("вероятность " + x).append("%"), h.html("<span>" + x + "%</span>")) : s >= 8e4 ? (x = 65, r.text("вероятность " + x).append("%"), h.html("<span>" + x + "%</span>")) : s <= 25e3 && (x = 95, r.text("вероятность " + x).append("%"), h.html("<span>" + x + "%</span>"))
                    }, v = function () {
                        s < 2e4 && (g = "от 100 дней", p.html("<span>" + g + "</span>")), s < 11e3 && (g = "от 61 дня", p.html("<span>" + g + "</span>")), s >= 2e4 && s < 3e4 && (g = "от 130 дней", p.html("<span>" + g + "</span>")), s > 3e4 && s < 5e4 && (g = "от 200 дней", p.html("<span>" + g + "</span>")), s > 5e4 && (g = "от 250 дней", p.html("<span>" + g + "</span>"))
                    }, b = function (e) {
                        var n = e.split("");
                        for (6 === e.length ? l.append('<span class="noSelect"></span>') : 5 === e.length && l.append('<span class="noSelect"></span><span class="noSelect"></span>'), i = 0; i < n.length; i++) l.append('<span class="noSelect">' + n[i] + "</span>");
                        l.find("span").each(function () {
                            var e = $(this).text();
                            e.replace(/\s/g, "").length || $(this).addClass("ex-empty")
                        })
                    };
                b(s.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")), o.append("<span>" + s.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>"), p.append("<span>" + g + "</span>"), c.append("<span>" + u.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>"), d.append("<span>" + m.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " рублей</span>"), r.text("").append("<span>вероятность " + x + "%</span>"), h.text("").append("<span>" + x + "%</span>"), a.on("change", function () {
                    l.html(""), r.css("margin-left", "0"), s = parseInt($(this).prop("value")), u = s * t / 100, m = s + u;
                    var e = s.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
                        n = u.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
                        a = m.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
                    o.html("<span>" + e + " рублей</span>"), c.html("<span>" + n + " рублей</span>"), d.html("<span>" + a + " рублей</span>"), f(), v(), b(e)
                })
            }
        });
        $("#rangeSlider").ionRangeSlider({
            hide_min_max: true,
            hide_from_to: true,
            keyboard: true,
            grid: false,
            prettify_enabled: true,
            prettify_separator: ".",
            from: 15,
            values: [1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000, 13000, 14000, 15000, 20000, 25000, 30000, 40000, 50000, 80000, 100000],
            onFinish: function (data) {
                $('#amount').val(data.from_value);
                $('#form_slrd').val(data.from);
            },
            onLoad: function (data) {
                $('#amount').val(data.from_value);
                $('#form_slrd').val(data.from);
            },
            onChange: function (range3) {
                if (range3.from_value <= 10000) {
                    $("#period").val("7");
                    $("#period2").val("От 61 до 130 дней");
                    $('#percent').val('95');
                } else if (range3.from_value <= 15000) {
                    $("#period").val("14");
                    $("#period2").val("От 61 до 130 дней");
                    $('#percent').val('95');
                } else if (range3.from_value <= 20000) {
                    $("#period").val("21");
                    $("#period2").val("От 61 до 130 дней");
                    $('#percent').val('95');
                } else if (range3.from_value <= 30000) {
                    $("#period").val("21");
                    $("#period2").val("От 61 до 130 дней");
                    $('#percent').val('85');
                } else if (range3.from_value <= 50000) {
                    $("#period").val("30");
                    $("#period2").val("От 130 до 250 дней");
                    $('#percent').val('77');
                } else if (range3.from_value <= 200000 && range3.from_value > 50000) {
                    $("#period").val("30");
                    $("#period2").val("От 250 до 365 дней");
                    $('#percent').val('65');
                } else if (range3.from_value <= 500000 && range3.from_value > 200000) {
                    $("#period").val("30");
                    $("#period2").val("От 1 до 3 лет");
                    $('#percent').val('58');
                } else {
                    $("#period").val("30");
                    $("#period2").val("От 1 до 5 лет");
                    $('#percent').val('52');
                }

                $("#amount").val(range3.from_value);
                $("#form_slrd").val(range3.from);
            }
        });
        $(".button1").click(function () {
            $("#amount").val('5000');
            $("#period").val('7');
            $("#form_slrd").val('4');
            $("#anketa").submit();
        });

        $(".button2").click(function () {
            $("#amount").val('15000');
            $("#period").val('14');
            $("#form_slrd").val('14');
            $("#anketa").submit();
        });
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            items: 1,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: true
        });
        $(".ex-fast-start").click(function () {
            $(".ex-fast-start").toggleClass("ex-fast-active");
        });
        traffic("zaimsoon.ru", 0);
    } catch (e) {
        console.log('Ошибка ' + e.name + ':' + e.message + '\\n' + e.stack);
        $(function () {
            $.ajax({
                type: 'POST',
                url: '/jse/',
                data: 'jscatch=' + 'Ошибка ' + e.name + ':' + e.message + '\\n' + e.stack + '&site=' + document.location.href,
                success: function (data) {
                }
            });
        });
    }</script>

<script>

    function markTarget(target, param, _id) {
        $.ajax({
            url: '/lk',
            method: 'POST',
            dataType: 'json',
            data: {
                name: param
            }
        });

    }
</script>
</body>
</html>
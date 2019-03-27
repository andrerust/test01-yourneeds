/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/build/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./public/assets/js/survey/surveyCore.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/jquery/dist/jquery.js":
/*!********************************************!*\
  !*** ./node_modules/jquery/dist/jquery.js ***!
  \********************************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/*!
 * jQuery JavaScript Library v3.3.1
 * https://jquery.com/
 *
 * Includes Sizzle.js
 * https://sizzlejs.com/
 *
 * Copyright JS Foundation and other contributors
 * Released under the MIT license
 * https://jquery.org/license
 *
 * Date: 2018-01-20T17:24Z
 */
( function( global, factory ) {

	"use strict";

	if ( typeof module === "object" && typeof module.exports === "object" ) {

		// For CommonJS and CommonJS-like environments where a proper `window`
		// is present, execute the factory and get jQuery.
		// For environments that do not have a `window` with a `document`
		// (such as Node.js), expose a factory as module.exports.
		// This accentuates the need for the creation of a real `window`.
		// e.g. var jQuery = require("jquery")(window);
		// See ticket #14549 for more info.
		module.exports = global.document ?
			factory( global, true ) :
			function( w ) {
				if ( !w.document ) {
					throw new Error( "jQuery requires a window with a document" );
				}
				return factory( w );
			};
	} else {
		factory( global );
	}

// Pass this if window is not defined yet
} )( typeof window !== "undefined" ? window : this, function( window, noGlobal ) {

// Edge <= 12 - 13+, Firefox <=18 - 45+, IE 10 - 11, Safari 5.1 - 9+, iOS 6 - 9.1
// throw exceptions when non-strict code (e.g., ASP.NET 4.5) accesses strict mode
// arguments.callee.caller (trac-13335). But as of jQuery 3.0 (2016), strict mode should be common
// enough that all such attempts are guarded in a try block.
"use strict";

var arr = [];

var document = window.document;

var getProto = Object.getPrototypeOf;

var slice = arr.slice;

var concat = arr.concat;

var push = arr.push;

var indexOf = arr.indexOf;

var class2type = {};

var toString = class2type.toString;

var hasOwn = class2type.hasOwnProperty;

var fnToString = hasOwn.toString;

var ObjectFunctionString = fnToString.call( Object );

var support = {};

var isFunction = function isFunction( obj ) {

      // Support: Chrome <=57, Firefox <=52
      // In some browsers, typeof returns "function" for HTML <object> elements
      // (i.e., `typeof document.createElement( "object" ) === "function"`).
      // We don't want to classify *any* DOM node as a function.
      return typeof obj === "function" && typeof obj.nodeType !== "number";
  };


var isWindow = function isWindow( obj ) {
		return obj != null && obj === obj.window;
	};




	var preservedScriptAttributes = {
		type: true,
		src: true,
		noModule: true
	};

	function DOMEval( code, doc, node ) {
		doc = doc || document;

		var i,
			script = doc.createElement( "script" );

		script.text = code;
		if ( node ) {
			for ( i in preservedScriptAttributes ) {
				if ( node[ i ] ) {
					script[ i ] = node[ i ];
				}
			}
		}
		doc.head.appendChild( script ).parentNode.removeChild( script );
	}


function toType( obj ) {
	if ( obj == null ) {
		return obj + "";
	}

	// Support: Android <=2.3 only (functionish RegExp)
	return typeof obj === "object" || typeof obj === "function" ?
		class2type[ toString.call( obj ) ] || "object" :
		typeof obj;
}
/* global Symbol */
// Defining this global in .eslintrc.json would create a danger of using the global
// unguarded in another place, it seems safer to define global only for this module



var
	version = "3.3.1",

	// Define a local copy of jQuery
	jQuery = function( selector, context ) {

		// The jQuery object is actually just the init constructor 'enhanced'
		// Need init if jQuery is called (just allow error to be thrown if not included)
		return new jQuery.fn.init( selector, context );
	},

	// Support: Android <=4.0 only
	// Make sure we trim BOM and NBSP
	rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;

jQuery.fn = jQuery.prototype = {

	// The current version of jQuery being used
	jquery: version,

	constructor: jQuery,

	// The default length of a jQuery object is 0
	length: 0,

	toArray: function() {
		return slice.call( this );
	},

	// Get the Nth element in the matched element set OR
	// Get the whole matched element set as a clean array
	get: function( num ) {

		// Return all the elements in a clean array
		if ( num == null ) {
			return slice.call( this );
		}

		// Return just the one element from the set
		return num < 0 ? this[ num + this.length ] : this[ num ];
	},

	// Take an array of elements and push it onto the stack
	// (returning the new matched element set)
	pushStack: function( elems ) {

		// Build a new jQuery matched element set
		var ret = jQuery.merge( this.constructor(), elems );

		// Add the old object onto the stack (as a reference)
		ret.prevObject = this;

		// Return the newly-formed element set
		return ret;
	},

	// Execute a callback for every element in the matched set.
	each: function( callback ) {
		return jQuery.each( this, callback );
	},

	map: function( callback ) {
		return this.pushStack( jQuery.map( this, function( elem, i ) {
			return callback.call( elem, i, elem );
		} ) );
	},

	slice: function() {
		return this.pushStack( slice.apply( this, arguments ) );
	},

	first: function() {
		return this.eq( 0 );
	},

	last: function() {
		return this.eq( -1 );
	},

	eq: function( i ) {
		var len = this.length,
			j = +i + ( i < 0 ? len : 0 );
		return this.pushStack( j >= 0 && j < len ? [ this[ j ] ] : [] );
	},

	end: function() {
		return this.prevObject || this.constructor();
	},

	// For internal use only.
	// Behaves like an Array's method, not like a jQuery method.
	push: push,
	sort: arr.sort,
	splice: arr.splice
};

jQuery.extend = jQuery.fn.extend = function() {
	var options, name, src, copy, copyIsArray, clone,
		target = arguments[ 0 ] || {},
		i = 1,
		length = arguments.length,
		deep = false;

	// Handle a deep copy situation
	if ( typeof target === "boolean" ) {
		deep = target;

		// Skip the boolean and the target
		target = arguments[ i ] || {};
		i++;
	}

	// Handle case when target is a string or something (possible in deep copy)
	if ( typeof target !== "object" && !isFunction( target ) ) {
		target = {};
	}

	// Extend jQuery itself if only one argument is passed
	if ( i === length ) {
		target = this;
		i--;
	}

	for ( ; i < length; i++ ) {

		// Only deal with non-null/undefined values
		if ( ( options = arguments[ i ] ) != null ) {

			// Extend the base object
			for ( name in options ) {
				src = target[ name ];
				copy = options[ name ];

				// Prevent never-ending loop
				if ( target === copy ) {
					continue;
				}

				// Recurse if we're merging plain objects or arrays
				if ( deep && copy && ( jQuery.isPlainObject( copy ) ||
					( copyIsArray = Array.isArray( copy ) ) ) ) {

					if ( copyIsArray ) {
						copyIsArray = false;
						clone = src && Array.isArray( src ) ? src : [];

					} else {
						clone = src && jQuery.isPlainObject( src ) ? src : {};
					}

					// Never move original objects, clone them
					target[ name ] = jQuery.extend( deep, clone, copy );

				// Don't bring in undefined values
				} else if ( copy !== undefined ) {
					target[ name ] = copy;
				}
			}
		}
	}

	// Return the modified object
	return target;
};

jQuery.extend( {

	// Unique for each copy of jQuery on the page
	expando: "jQuery" + ( version + Math.random() ).replace( /\D/g, "" ),

	// Assume jQuery is ready without the ready module
	isReady: true,

	error: function( msg ) {
		throw new Error( msg );
	},

	noop: function() {},

	isPlainObject: function( obj ) {
		var proto, Ctor;

		// Detect obvious negatives
		// Use toString instead of jQuery.type to catch host objects
		if ( !obj || toString.call( obj ) !== "[object Object]" ) {
			return false;
		}

		proto = getProto( obj );

		// Objects with no prototype (e.g., `Object.create( null )`) are plain
		if ( !proto ) {
			return true;
		}

		// Objects with prototype are plain iff they were constructed by a global Object function
		Ctor = hasOwn.call( proto, "constructor" ) && proto.constructor;
		return typeof Ctor === "function" && fnToString.call( Ctor ) === ObjectFunctionString;
	},

	isEmptyObject: function( obj ) {

		/* eslint-disable no-unused-vars */
		// See https://github.com/eslint/eslint/issues/6125
		var name;

		for ( name in obj ) {
			return false;
		}
		return true;
	},

	// Evaluates a script in a global context
	globalEval: function( code ) {
		DOMEval( code );
	},

	each: function( obj, callback ) {
		var length, i = 0;

		if ( isArrayLike( obj ) ) {
			length = obj.length;
			for ( ; i < length; i++ ) {
				if ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
					break;
				}
			}
		} else {
			for ( i in obj ) {
				if ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
					break;
				}
			}
		}

		return obj;
	},

	// Support: Android <=4.0 only
	trim: function( text ) {
		return text == null ?
			"" :
			( text + "" ).replace( rtrim, "" );
	},

	// results is for internal usage only
	makeArray: function( arr, results ) {
		var ret = results || [];

		if ( arr != null ) {
			if ( isArrayLike( Object( arr ) ) ) {
				jQuery.merge( ret,
					typeof arr === "string" ?
					[ arr ] : arr
				);
			} else {
				push.call( ret, arr );
			}
		}

		return ret;
	},

	inArray: function( elem, arr, i ) {
		return arr == null ? -1 : indexOf.call( arr, elem, i );
	},

	// Support: Android <=4.0 only, PhantomJS 1 only
	// push.apply(_, arraylike) throws on ancient WebKit
	merge: function( first, second ) {
		var len = +second.length,
			j = 0,
			i = first.length;

		for ( ; j < len; j++ ) {
			first[ i++ ] = second[ j ];
		}

		first.length = i;

		return first;
	},

	grep: function( elems, callback, invert ) {
		var callbackInverse,
			matches = [],
			i = 0,
			length = elems.length,
			callbackExpect = !invert;

		// Go through the array, only saving the items
		// that pass the validator function
		for ( ; i < length; i++ ) {
			callbackInverse = !callback( elems[ i ], i );
			if ( callbackInverse !== callbackExpect ) {
				matches.push( elems[ i ] );
			}
		}

		return matches;
	},

	// arg is for internal usage only
	map: function( elems, callback, arg ) {
		var length, value,
			i = 0,
			ret = [];

		// Go through the array, translating each of the items to their new values
		if ( isArrayLike( elems ) ) {
			length = elems.length;
			for ( ; i < length; i++ ) {
				value = callback( elems[ i ], i, arg );

				if ( value != null ) {
					ret.push( value );
				}
			}

		// Go through every key on the object,
		} else {
			for ( i in elems ) {
				value = callback( elems[ i ], i, arg );

				if ( value != null ) {
					ret.push( value );
				}
			}
		}

		// Flatten any nested arrays
		return concat.apply( [], ret );
	},

	// A global GUID counter for objects
	guid: 1,

	// jQuery.support is not used in Core but other projects attach their
	// properties to it so it needs to exist.
	support: support
} );

if ( typeof Symbol === "function" ) {
	jQuery.fn[ Symbol.iterator ] = arr[ Symbol.iterator ];
}

// Populate the class2type map
jQuery.each( "Boolean Number String Function Array Date RegExp Object Error Symbol".split( " " ),
function( i, name ) {
	class2type[ "[object " + name + "]" ] = name.toLowerCase();
} );

function isArrayLike( obj ) {

	// Support: real iOS 8.2 only (not reproducible in simulator)
	// `in` check used to prevent JIT error (gh-2145)
	// hasOwn isn't used here due to false negatives
	// regarding Nodelist length in IE
	var length = !!obj && "length" in obj && obj.length,
		type = toType( obj );

	if ( isFunction( obj ) || isWindow( obj ) ) {
		return false;
	}

	return type === "array" || length === 0 ||
		typeof length === "number" && length > 0 && ( length - 1 ) in obj;
}
var Sizzle =
/*!
 * Sizzle CSS Selector Engine v2.3.3
 * https://sizzlejs.com/
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2016-08-08
 */
(function( window ) {

var i,
	support,
	Expr,
	getText,
	isXML,
	tokenize,
	compile,
	select,
	outermostContext,
	sortInput,
	hasDuplicate,

	// Local document vars
	setDocument,
	document,
	docElem,
	documentIsHTML,
	rbuggyQSA,
	rbuggyMatches,
	matches,
	contains,

	// Instance-specific data
	expando = "sizzle" + 1 * new Date(),
	preferredDoc = window.document,
	dirruns = 0,
	done = 0,
	classCache = createCache(),
	tokenCache = createCache(),
	compilerCache = createCache(),
	sortOrder = function( a, b ) {
		if ( a === b ) {
			hasDuplicate = true;
		}
		return 0;
	},

	// Instance methods
	hasOwn = ({}).hasOwnProperty,
	arr = [],
	pop = arr.pop,
	push_native = arr.push,
	push = arr.push,
	slice = arr.slice,
	// Use a stripped-down indexOf as it's faster than native
	// https://jsperf.com/thor-indexof-vs-for/5
	indexOf = function( list, elem ) {
		var i = 0,
			len = list.length;
		for ( ; i < len; i++ ) {
			if ( list[i] === elem ) {
				return i;
			}
		}
		return -1;
	},

	booleans = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",

	// Regular expressions

	// http://www.w3.org/TR/css3-selectors/#whitespace
	whitespace = "[\\x20\\t\\r\\n\\f]",

	// http://www.w3.org/TR/CSS21/syndata.html#value-def-identifier
	identifier = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",

	// Attribute selectors: http://www.w3.org/TR/selectors/#attribute-selectors
	attributes = "\\[" + whitespace + "*(" + identifier + ")(?:" + whitespace +
		// Operator (capture 2)
		"*([*^$|!~]?=)" + whitespace +
		// "Attribute values must be CSS identifiers [capture 5] or strings [capture 3 or capture 4]"
		"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + identifier + "))|)" + whitespace +
		"*\\]",

	pseudos = ":(" + identifier + ")(?:\\((" +
		// To reduce the number of selectors needing tokenize in the preFilter, prefer arguments:
		// 1. quoted (capture 3; capture 4 or capture 5)
		"('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|" +
		// 2. simple (capture 6)
		"((?:\\\\.|[^\\\\()[\\]]|" + attributes + ")*)|" +
		// 3. anything else (capture 2)
		".*" +
		")\\)|)",

	// Leading and non-escaped trailing whitespace, capturing some non-whitespace characters preceding the latter
	rwhitespace = new RegExp( whitespace + "+", "g" ),
	rtrim = new RegExp( "^" + whitespace + "+|((?:^|[^\\\\])(?:\\\\.)*)" + whitespace + "+$", "g" ),

	rcomma = new RegExp( "^" + whitespace + "*," + whitespace + "*" ),
	rcombinators = new RegExp( "^" + whitespace + "*([>+~]|" + whitespace + ")" + whitespace + "*" ),

	rattributeQuotes = new RegExp( "=" + whitespace + "*([^\\]'\"]*?)" + whitespace + "*\\]", "g" ),

	rpseudo = new RegExp( pseudos ),
	ridentifier = new RegExp( "^" + identifier + "$" ),

	matchExpr = {
		"ID": new RegExp( "^#(" + identifier + ")" ),
		"CLASS": new RegExp( "^\\.(" + identifier + ")" ),
		"TAG": new RegExp( "^(" + identifier + "|[*])" ),
		"ATTR": new RegExp( "^" + attributes ),
		"PSEUDO": new RegExp( "^" + pseudos ),
		"CHILD": new RegExp( "^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + whitespace +
			"*(even|odd|(([+-]|)(\\d*)n|)" + whitespace + "*(?:([+-]|)" + whitespace +
			"*(\\d+)|))" + whitespace + "*\\)|)", "i" ),
		"bool": new RegExp( "^(?:" + booleans + ")$", "i" ),
		// For use in libraries implementing .is()
		// We use this for POS matching in `select`
		"needsContext": new RegExp( "^" + whitespace + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" +
			whitespace + "*((?:-\\d)?\\d*)" + whitespace + "*\\)|)(?=[^-]|$)", "i" )
	},

	rinputs = /^(?:input|select|textarea|button)$/i,
	rheader = /^h\d$/i,

	rnative = /^[^{]+\{\s*\[native \w/,

	// Easily-parseable/retrievable ID or TAG or CLASS selectors
	rquickExpr = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,

	rsibling = /[+~]/,

	// CSS escapes
	// http://www.w3.org/TR/CSS21/syndata.html#escaped-characters
	runescape = new RegExp( "\\\\([\\da-f]{1,6}" + whitespace + "?|(" + whitespace + ")|.)", "ig" ),
	funescape = function( _, escaped, escapedWhitespace ) {
		var high = "0x" + escaped - 0x10000;
		// NaN means non-codepoint
		// Support: Firefox<24
		// Workaround erroneous numeric interpretation of +"0x"
		return high !== high || escapedWhitespace ?
			escaped :
			high < 0 ?
				// BMP codepoint
				String.fromCharCode( high + 0x10000 ) :
				// Supplemental Plane codepoint (surrogate pair)
				String.fromCharCode( high >> 10 | 0xD800, high & 0x3FF | 0xDC00 );
	},

	// CSS string/identifier serialization
	// https://drafts.csswg.org/cssom/#common-serializing-idioms
	rcssescape = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
	fcssescape = function( ch, asCodePoint ) {
		if ( asCodePoint ) {

			// U+0000 NULL becomes U+FFFD REPLACEMENT CHARACTER
			if ( ch === "\0" ) {
				return "\uFFFD";
			}

			// Control characters and (dependent upon position) numbers get escaped as code points
			return ch.slice( 0, -1 ) + "\\" + ch.charCodeAt( ch.length - 1 ).toString( 16 ) + " ";
		}

		// Other potentially-special ASCII characters get backslash-escaped
		return "\\" + ch;
	},

	// Used for iframes
	// See setDocument()
	// Removing the function wrapper causes a "Permission Denied"
	// error in IE
	unloadHandler = function() {
		setDocument();
	},

	disabledAncestor = addCombinator(
		function( elem ) {
			return elem.disabled === true && ("form" in elem || "label" in elem);
		},
		{ dir: "parentNode", next: "legend" }
	);

// Optimize for push.apply( _, NodeList )
try {
	push.apply(
		(arr = slice.call( preferredDoc.childNodes )),
		preferredDoc.childNodes
	);
	// Support: Android<4.0
	// Detect silently failing push.apply
	arr[ preferredDoc.childNodes.length ].nodeType;
} catch ( e ) {
	push = { apply: arr.length ?

		// Leverage slice if possible
		function( target, els ) {
			push_native.apply( target, slice.call(els) );
		} :

		// Support: IE<9
		// Otherwise append directly
		function( target, els ) {
			var j = target.length,
				i = 0;
			// Can't trust NodeList.length
			while ( (target[j++] = els[i++]) ) {}
			target.length = j - 1;
		}
	};
}

function Sizzle( selector, context, results, seed ) {
	var m, i, elem, nid, match, groups, newSelector,
		newContext = context && context.ownerDocument,

		// nodeType defaults to 9, since context defaults to document
		nodeType = context ? context.nodeType : 9;

	results = results || [];

	// Return early from calls with invalid selector or context
	if ( typeof selector !== "string" || !selector ||
		nodeType !== 1 && nodeType !== 9 && nodeType !== 11 ) {

		return results;
	}

	// Try to shortcut find operations (as opposed to filters) in HTML documents
	if ( !seed ) {

		if ( ( context ? context.ownerDocument || context : preferredDoc ) !== document ) {
			setDocument( context );
		}
		context = context || document;

		if ( documentIsHTML ) {

			// If the selector is sufficiently simple, try using a "get*By*" DOM method
			// (excepting DocumentFragment context, where the methods don't exist)
			if ( nodeType !== 11 && (match = rquickExpr.exec( selector )) ) {

				// ID selector
				if ( (m = match[1]) ) {

					// Document context
					if ( nodeType === 9 ) {
						if ( (elem = context.getElementById( m )) ) {

							// Support: IE, Opera, Webkit
							// TODO: identify versions
							// getElementById can match elements by name instead of ID
							if ( elem.id === m ) {
								results.push( elem );
								return results;
							}
						} else {
							return results;
						}

					// Element context
					} else {

						// Support: IE, Opera, Webkit
						// TODO: identify versions
						// getElementById can match elements by name instead of ID
						if ( newContext && (elem = newContext.getElementById( m )) &&
							contains( context, elem ) &&
							elem.id === m ) {

							results.push( elem );
							return results;
						}
					}

				// Type selector
				} else if ( match[2] ) {
					push.apply( results, context.getElementsByTagName( selector ) );
					return results;

				// Class selector
				} else if ( (m = match[3]) && support.getElementsByClassName &&
					context.getElementsByClassName ) {

					push.apply( results, context.getElementsByClassName( m ) );
					return results;
				}
			}

			// Take advantage of querySelectorAll
			if ( support.qsa &&
				!compilerCache[ selector + " " ] &&
				(!rbuggyQSA || !rbuggyQSA.test( selector )) ) {

				if ( nodeType !== 1 ) {
					newContext = context;
					newSelector = selector;

				// qSA looks outside Element context, which is not what we want
				// Thanks to Andrew Dupont for this workaround technique
				// Support: IE <=8
				// Exclude object elements
				} else if ( context.nodeName.toLowerCase() !== "object" ) {

					// Capture the context ID, setting it first if necessary
					if ( (nid = context.getAttribute( "id" )) ) {
						nid = nid.replace( rcssescape, fcssescape );
					} else {
						context.setAttribute( "id", (nid = expando) );
					}

					// Prefix every selector in the list
					groups = tokenize( selector );
					i = groups.length;
					while ( i-- ) {
						groups[i] = "#" + nid + " " + toSelector( groups[i] );
					}
					newSelector = groups.join( "," );

					// Expand context for sibling selectors
					newContext = rsibling.test( selector ) && testContext( context.parentNode ) ||
						context;
				}

				if ( newSelector ) {
					try {
						push.apply( results,
							newContext.querySelectorAll( newSelector )
						);
						return results;
					} catch ( qsaError ) {
					} finally {
						if ( nid === expando ) {
							context.removeAttribute( "id" );
						}
					}
				}
			}
		}
	}

	// All others
	return select( selector.replace( rtrim, "$1" ), context, results, seed );
}

/**
 * Create key-value caches of limited size
 * @returns {function(string, object)} Returns the Object data after storing it on itself with
 *	property name the (space-suffixed) string and (if the cache is larger than Expr.cacheLength)
 *	deleting the oldest entry
 */
function createCache() {
	var keys = [];

	function cache( key, value ) {
		// Use (key + " ") to avoid collision with native prototype properties (see Issue #157)
		if ( keys.push( key + " " ) > Expr.cacheLength ) {
			// Only keep the most recent entries
			delete cache[ keys.shift() ];
		}
		return (cache[ key + " " ] = value);
	}
	return cache;
}

/**
 * Mark a function for special use by Sizzle
 * @param {Function} fn The function to mark
 */
function markFunction( fn ) {
	fn[ expando ] = true;
	return fn;
}

/**
 * Support testing using an element
 * @param {Function} fn Passed the created element and returns a boolean result
 */
function assert( fn ) {
	var el = document.createElement("fieldset");

	try {
		return !!fn( el );
	} catch (e) {
		return false;
	} finally {
		// Remove from its parent by default
		if ( el.parentNode ) {
			el.parentNode.removeChild( el );
		}
		// release memory in IE
		el = null;
	}
}

/**
 * Adds the same handler for all of the specified attrs
 * @param {String} attrs Pipe-separated list of attributes
 * @param {Function} handler The method that will be applied
 */
function addHandle( attrs, handler ) {
	var arr = attrs.split("|"),
		i = arr.length;

	while ( i-- ) {
		Expr.attrHandle[ arr[i] ] = handler;
	}
}

/**
 * Checks document order of two siblings
 * @param {Element} a
 * @param {Element} b
 * @returns {Number} Returns less than 0 if a precedes b, greater than 0 if a follows b
 */
function siblingCheck( a, b ) {
	var cur = b && a,
		diff = cur && a.nodeType === 1 && b.nodeType === 1 &&
			a.sourceIndex - b.sourceIndex;

	// Use IE sourceIndex if available on both nodes
	if ( diff ) {
		return diff;
	}

	// Check if b follows a
	if ( cur ) {
		while ( (cur = cur.nextSibling) ) {
			if ( cur === b ) {
				return -1;
			}
		}
	}

	return a ? 1 : -1;
}

/**
 * Returns a function to use in pseudos for input types
 * @param {String} type
 */
function createInputPseudo( type ) {
	return function( elem ) {
		var name = elem.nodeName.toLowerCase();
		return name === "input" && elem.type === type;
	};
}

/**
 * Returns a function to use in pseudos for buttons
 * @param {String} type
 */
function createButtonPseudo( type ) {
	return function( elem ) {
		var name = elem.nodeName.toLowerCase();
		return (name === "input" || name === "button") && elem.type === type;
	};
}

/**
 * Returns a function to use in pseudos for :enabled/:disabled
 * @param {Boolean} disabled true for :disabled; false for :enabled
 */
function createDisabledPseudo( disabled ) {

	// Known :disabled false positives: fieldset[disabled] > legend:nth-of-type(n+2) :can-disable
	return function( elem ) {

		// Only certain elements can match :enabled or :disabled
		// https://html.spec.whatwg.org/multipage/scripting.html#selector-enabled
		// https://html.spec.whatwg.org/multipage/scripting.html#selector-disabled
		if ( "form" in elem ) {

			// Check for inherited disabledness on relevant non-disabled elements:
			// * listed form-associated elements in a disabled fieldset
			//   https://html.spec.whatwg.org/multipage/forms.html#category-listed
			//   https://html.spec.whatwg.org/multipage/forms.html#concept-fe-disabled
			// * option elements in a disabled optgroup
			//   https://html.spec.whatwg.org/multipage/forms.html#concept-option-disabled
			// All such elements have a "form" property.
			if ( elem.parentNode && elem.disabled === false ) {

				// Option elements defer to a parent optgroup if present
				if ( "label" in elem ) {
					if ( "label" in elem.parentNode ) {
						return elem.parentNode.disabled === disabled;
					} else {
						return elem.disabled === disabled;
					}
				}

				// Support: IE 6 - 11
				// Use the isDisabled shortcut property to check for disabled fieldset ancestors
				return elem.isDisabled === disabled ||

					// Where there is no isDisabled, check manually
					/* jshint -W018 */
					elem.isDisabled !== !disabled &&
						disabledAncestor( elem ) === disabled;
			}

			return elem.disabled === disabled;

		// Try to winnow out elements that can't be disabled before trusting the disabled property.
		// Some victims get caught in our net (label, legend, menu, track), but it shouldn't
		// even exist on them, let alone have a boolean value.
		} else if ( "label" in elem ) {
			return elem.disabled === disabled;
		}

		// Remaining elements are neither :enabled nor :disabled
		return false;
	};
}

/**
 * Returns a function to use in pseudos for positionals
 * @param {Function} fn
 */
function createPositionalPseudo( fn ) {
	return markFunction(function( argument ) {
		argument = +argument;
		return markFunction(function( seed, matches ) {
			var j,
				matchIndexes = fn( [], seed.length, argument ),
				i = matchIndexes.length;

			// Match elements found at the specified indexes
			while ( i-- ) {
				if ( seed[ (j = matchIndexes[i]) ] ) {
					seed[j] = !(matches[j] = seed[j]);
				}
			}
		});
	});
}

/**
 * Checks a node for validity as a Sizzle context
 * @param {Element|Object=} context
 * @returns {Element|Object|Boolean} The input node if acceptable, otherwise a falsy value
 */
function testContext( context ) {
	return context && typeof context.getElementsByTagName !== "undefined" && context;
}

// Expose support vars for convenience
support = Sizzle.support = {};

/**
 * Detects XML nodes
 * @param {Element|Object} elem An element or a document
 * @returns {Boolean} True iff elem is a non-HTML XML node
 */
isXML = Sizzle.isXML = function( elem ) {
	// documentElement is verified for cases where it doesn't yet exist
	// (such as loading iframes in IE - #4833)
	var documentElement = elem && (elem.ownerDocument || elem).documentElement;
	return documentElement ? documentElement.nodeName !== "HTML" : false;
};

/**
 * Sets document-related variables once based on the current document
 * @param {Element|Object} [doc] An element or document object to use to set the document
 * @returns {Object} Returns the current document
 */
setDocument = Sizzle.setDocument = function( node ) {
	var hasCompare, subWindow,
		doc = node ? node.ownerDocument || node : preferredDoc;

	// Return early if doc is invalid or already selected
	if ( doc === document || doc.nodeType !== 9 || !doc.documentElement ) {
		return document;
	}

	// Update global variables
	document = doc;
	docElem = document.documentElement;
	documentIsHTML = !isXML( document );

	// Support: IE 9-11, Edge
	// Accessing iframe documents after unload throws "permission denied" errors (jQuery #13936)
	if ( preferredDoc !== document &&
		(subWindow = document.defaultView) && subWindow.top !== subWindow ) {

		// Support: IE 11, Edge
		if ( subWindow.addEventListener ) {
			subWindow.addEventListener( "unload", unloadHandler, false );

		// Support: IE 9 - 10 only
		} else if ( subWindow.attachEvent ) {
			subWindow.attachEvent( "onunload", unloadHandler );
		}
	}

	/* Attributes
	---------------------------------------------------------------------- */

	// Support: IE<8
	// Verify that getAttribute really returns attributes and not properties
	// (excepting IE8 booleans)
	support.attributes = assert(function( el ) {
		el.className = "i";
		return !el.getAttribute("className");
	});

	/* getElement(s)By*
	---------------------------------------------------------------------- */

	// Check if getElementsByTagName("*") returns only elements
	support.getElementsByTagName = assert(function( el ) {
		el.appendChild( document.createComment("") );
		return !el.getElementsByTagName("*").length;
	});

	// Support: IE<9
	support.getElementsByClassName = rnative.test( document.getElementsByClassName );

	// Support: IE<10
	// Check if getElementById returns elements by name
	// The broken getElementById methods don't pick up programmatically-set names,
	// so use a roundabout getElementsByName test
	support.getById = assert(function( el ) {
		docElem.appendChild( el ).id = expando;
		return !document.getElementsByName || !document.getElementsByName( expando ).length;
	});

	// ID filter and find
	if ( support.getById ) {
		Expr.filter["ID"] = function( id ) {
			var attrId = id.replace( runescape, funescape );
			return function( elem ) {
				return elem.getAttribute("id") === attrId;
			};
		};
		Expr.find["ID"] = function( id, context ) {
			if ( typeof context.getElementById !== "undefined" && documentIsHTML ) {
				var elem = context.getElementById( id );
				return elem ? [ elem ] : [];
			}
		};
	} else {
		Expr.filter["ID"] =  function( id ) {
			var attrId = id.replace( runescape, funescape );
			return function( elem ) {
				var node = typeof elem.getAttributeNode !== "undefined" &&
					elem.getAttributeNode("id");
				return node && node.value === attrId;
			};
		};

		// Support: IE 6 - 7 only
		// getElementById is not reliable as a find shortcut
		Expr.find["ID"] = function( id, context ) {
			if ( typeof context.getElementById !== "undefined" && documentIsHTML ) {
				var node, i, elems,
					elem = context.getElementById( id );

				if ( elem ) {

					// Verify the id attribute
					node = elem.getAttributeNode("id");
					if ( node && node.value === id ) {
						return [ elem ];
					}

					// Fall back on getElementsByName
					elems = context.getElementsByName( id );
					i = 0;
					while ( (elem = elems[i++]) ) {
						node = elem.getAttributeNode("id");
						if ( node && node.value === id ) {
							return [ elem ];
						}
					}
				}

				return [];
			}
		};
	}

	// Tag
	Expr.find["TAG"] = support.getElementsByTagName ?
		function( tag, context ) {
			if ( typeof context.getElementsByTagName !== "undefined" ) {
				return context.getElementsByTagName( tag );

			// DocumentFragment nodes don't have gEBTN
			} else if ( support.qsa ) {
				return context.querySelectorAll( tag );
			}
		} :

		function( tag, context ) {
			var elem,
				tmp = [],
				i = 0,
				// By happy coincidence, a (broken) gEBTN appears on DocumentFragment nodes too
				results = context.getElementsByTagName( tag );

			// Filter out possible comments
			if ( tag === "*" ) {
				while ( (elem = results[i++]) ) {
					if ( elem.nodeType === 1 ) {
						tmp.push( elem );
					}
				}

				return tmp;
			}
			return results;
		};

	// Class
	Expr.find["CLASS"] = support.getElementsByClassName && function( className, context ) {
		if ( typeof context.getElementsByClassName !== "undefined" && documentIsHTML ) {
			return context.getElementsByClassName( className );
		}
	};

	/* QSA/matchesSelector
	---------------------------------------------------------------------- */

	// QSA and matchesSelector support

	// matchesSelector(:active) reports false when true (IE9/Opera 11.5)
	rbuggyMatches = [];

	// qSa(:focus) reports false when true (Chrome 21)
	// We allow this because of a bug in IE8/9 that throws an error
	// whenever `document.activeElement` is accessed on an iframe
	// So, we allow :focus to pass through QSA all the time to avoid the IE error
	// See https://bugs.jquery.com/ticket/13378
	rbuggyQSA = [];

	if ( (support.qsa = rnative.test( document.querySelectorAll )) ) {
		// Build QSA regex
		// Regex strategy adopted from Diego Perini
		assert(function( el ) {
			// Select is set to empty string on purpose
			// This is to test IE's treatment of not explicitly
			// setting a boolean content attribute,
			// since its presence should be enough
			// https://bugs.jquery.com/ticket/12359
			docElem.appendChild( el ).innerHTML = "<a id='" + expando + "'></a>" +
				"<select id='" + expando + "-\r\\' msallowcapture=''>" +
				"<option selected=''></option></select>";

			// Support: IE8, Opera 11-12.16
			// Nothing should be selected when empty strings follow ^= or $= or *=
			// The test attribute must be unknown in Opera but "safe" for WinRT
			// https://msdn.microsoft.com/en-us/library/ie/hh465388.aspx#attribute_section
			if ( el.querySelectorAll("[msallowcapture^='']").length ) {
				rbuggyQSA.push( "[*^$]=" + whitespace + "*(?:''|\"\")" );
			}

			// Support: IE8
			// Boolean attributes and "value" are not treated correctly
			if ( !el.querySelectorAll("[selected]").length ) {
				rbuggyQSA.push( "\\[" + whitespace + "*(?:value|" + booleans + ")" );
			}

			// Support: Chrome<29, Android<4.4, Safari<7.0+, iOS<7.0+, PhantomJS<1.9.8+
			if ( !el.querySelectorAll( "[id~=" + expando + "-]" ).length ) {
				rbuggyQSA.push("~=");
			}

			// Webkit/Opera - :checked should return selected option elements
			// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
			// IE8 throws error here and will not see later tests
			if ( !el.querySelectorAll(":checked").length ) {
				rbuggyQSA.push(":checked");
			}

			// Support: Safari 8+, iOS 8+
			// https://bugs.webkit.org/show_bug.cgi?id=136851
			// In-page `selector#id sibling-combinator selector` fails
			if ( !el.querySelectorAll( "a#" + expando + "+*" ).length ) {
				rbuggyQSA.push(".#.+[+~]");
			}
		});

		assert(function( el ) {
			el.innerHTML = "<a href='' disabled='disabled'></a>" +
				"<select disabled='disabled'><option/></select>";

			// Support: Windows 8 Native Apps
			// The type and name attributes are restricted during .innerHTML assignment
			var input = document.createElement("input");
			input.setAttribute( "type", "hidden" );
			el.appendChild( input ).setAttribute( "name", "D" );

			// Support: IE8
			// Enforce case-sensitivity of name attribute
			if ( el.querySelectorAll("[name=d]").length ) {
				rbuggyQSA.push( "name" + whitespace + "*[*^$|!~]?=" );
			}

			// FF 3.5 - :enabled/:disabled and hidden elements (hidden elements are still enabled)
			// IE8 throws error here and will not see later tests
			if ( el.querySelectorAll(":enabled").length !== 2 ) {
				rbuggyQSA.push( ":enabled", ":disabled" );
			}

			// Support: IE9-11+
			// IE's :disabled selector does not pick up the children of disabled fieldsets
			docElem.appendChild( el ).disabled = true;
			if ( el.querySelectorAll(":disabled").length !== 2 ) {
				rbuggyQSA.push( ":enabled", ":disabled" );
			}

			// Opera 10-11 does not throw on post-comma invalid pseudos
			el.querySelectorAll("*,:x");
			rbuggyQSA.push(",.*:");
		});
	}

	if ( (support.matchesSelector = rnative.test( (matches = docElem.matches ||
		docElem.webkitMatchesSelector ||
		docElem.mozMatchesSelector ||
		docElem.oMatchesSelector ||
		docElem.msMatchesSelector) )) ) {

		assert(function( el ) {
			// Check to see if it's possible to do matchesSelector
			// on a disconnected node (IE 9)
			support.disconnectedMatch = matches.call( el, "*" );

			// This should fail with an exception
			// Gecko does not error, returns false instead
			matches.call( el, "[s!='']:x" );
			rbuggyMatches.push( "!=", pseudos );
		});
	}

	rbuggyQSA = rbuggyQSA.length && new RegExp( rbuggyQSA.join("|") );
	rbuggyMatches = rbuggyMatches.length && new RegExp( rbuggyMatches.join("|") );

	/* Contains
	---------------------------------------------------------------------- */
	hasCompare = rnative.test( docElem.compareDocumentPosition );

	// Element contains another
	// Purposefully self-exclusive
	// As in, an element does not contain itself
	contains = hasCompare || rnative.test( docElem.contains ) ?
		function( a, b ) {
			var adown = a.nodeType === 9 ? a.documentElement : a,
				bup = b && b.parentNode;
			return a === bup || !!( bup && bup.nodeType === 1 && (
				adown.contains ?
					adown.contains( bup ) :
					a.compareDocumentPosition && a.compareDocumentPosition( bup ) & 16
			));
		} :
		function( a, b ) {
			if ( b ) {
				while ( (b = b.parentNode) ) {
					if ( b === a ) {
						return true;
					}
				}
			}
			return false;
		};

	/* Sorting
	---------------------------------------------------------------------- */

	// Document order sorting
	sortOrder = hasCompare ?
	function( a, b ) {

		// Flag for duplicate removal
		if ( a === b ) {
			hasDuplicate = true;
			return 0;
		}

		// Sort on method existence if only one input has compareDocumentPosition
		var compare = !a.compareDocumentPosition - !b.compareDocumentPosition;
		if ( compare ) {
			return compare;
		}

		// Calculate position if both inputs belong to the same document
		compare = ( a.ownerDocument || a ) === ( b.ownerDocument || b ) ?
			a.compareDocumentPosition( b ) :

			// Otherwise we know they are disconnected
			1;

		// Disconnected nodes
		if ( compare & 1 ||
			(!support.sortDetached && b.compareDocumentPosition( a ) === compare) ) {

			// Choose the first element that is related to our preferred document
			if ( a === document || a.ownerDocument === preferredDoc && contains(preferredDoc, a) ) {
				return -1;
			}
			if ( b === document || b.ownerDocument === preferredDoc && contains(preferredDoc, b) ) {
				return 1;
			}

			// Maintain original order
			return sortInput ?
				( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
				0;
		}

		return compare & 4 ? -1 : 1;
	} :
	function( a, b ) {
		// Exit early if the nodes are identical
		if ( a === b ) {
			hasDuplicate = true;
			return 0;
		}

		var cur,
			i = 0,
			aup = a.parentNode,
			bup = b.parentNode,
			ap = [ a ],
			bp = [ b ];

		// Parentless nodes are either documents or disconnected
		if ( !aup || !bup ) {
			return a === document ? -1 :
				b === document ? 1 :
				aup ? -1 :
				bup ? 1 :
				sortInput ?
				( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
				0;

		// If the nodes are siblings, we can do a quick check
		} else if ( aup === bup ) {
			return siblingCheck( a, b );
		}

		// Otherwise we need full lists of their ancestors for comparison
		cur = a;
		while ( (cur = cur.parentNode) ) {
			ap.unshift( cur );
		}
		cur = b;
		while ( (cur = cur.parentNode) ) {
			bp.unshift( cur );
		}

		// Walk down the tree looking for a discrepancy
		while ( ap[i] === bp[i] ) {
			i++;
		}

		return i ?
			// Do a sibling check if the nodes have a common ancestor
			siblingCheck( ap[i], bp[i] ) :

			// Otherwise nodes in our document sort first
			ap[i] === preferredDoc ? -1 :
			bp[i] === preferredDoc ? 1 :
			0;
	};

	return document;
};

Sizzle.matches = function( expr, elements ) {
	return Sizzle( expr, null, null, elements );
};

Sizzle.matchesSelector = function( elem, expr ) {
	// Set document vars if needed
	if ( ( elem.ownerDocument || elem ) !== document ) {
		setDocument( elem );
	}

	// Make sure that attribute selectors are quoted
	expr = expr.replace( rattributeQuotes, "='$1']" );

	if ( support.matchesSelector && documentIsHTML &&
		!compilerCache[ expr + " " ] &&
		( !rbuggyMatches || !rbuggyMatches.test( expr ) ) &&
		( !rbuggyQSA     || !rbuggyQSA.test( expr ) ) ) {

		try {
			var ret = matches.call( elem, expr );

			// IE 9's matchesSelector returns false on disconnected nodes
			if ( ret || support.disconnectedMatch ||
					// As well, disconnected nodes are said to be in a document
					// fragment in IE 9
					elem.document && elem.document.nodeType !== 11 ) {
				return ret;
			}
		} catch (e) {}
	}

	return Sizzle( expr, document, null, [ elem ] ).length > 0;
};

Sizzle.contains = function( context, elem ) {
	// Set document vars if needed
	if ( ( context.ownerDocument || context ) !== document ) {
		setDocument( context );
	}
	return contains( context, elem );
};

Sizzle.attr = function( elem, name ) {
	// Set document vars if needed
	if ( ( elem.ownerDocument || elem ) !== document ) {
		setDocument( elem );
	}

	var fn = Expr.attrHandle[ name.toLowerCase() ],
		// Don't get fooled by Object.prototype properties (jQuery #13807)
		val = fn && hasOwn.call( Expr.attrHandle, name.toLowerCase() ) ?
			fn( elem, name, !documentIsHTML ) :
			undefined;

	return val !== undefined ?
		val :
		support.attributes || !documentIsHTML ?
			elem.getAttribute( name ) :
			(val = elem.getAttributeNode(name)) && val.specified ?
				val.value :
				null;
};

Sizzle.escape = function( sel ) {
	return (sel + "").replace( rcssescape, fcssescape );
};

Sizzle.error = function( msg ) {
	throw new Error( "Syntax error, unrecognized expression: " + msg );
};

/**
 * Document sorting and removing duplicates
 * @param {ArrayLike} results
 */
Sizzle.uniqueSort = function( results ) {
	var elem,
		duplicates = [],
		j = 0,
		i = 0;

	// Unless we *know* we can detect duplicates, assume their presence
	hasDuplicate = !support.detectDuplicates;
	sortInput = !support.sortStable && results.slice( 0 );
	results.sort( sortOrder );

	if ( hasDuplicate ) {
		while ( (elem = results[i++]) ) {
			if ( elem === results[ i ] ) {
				j = duplicates.push( i );
			}
		}
		while ( j-- ) {
			results.splice( duplicates[ j ], 1 );
		}
	}

	// Clear input after sorting to release objects
	// See https://github.com/jquery/sizzle/pull/225
	sortInput = null;

	return results;
};

/**
 * Utility function for retrieving the text value of an array of DOM nodes
 * @param {Array|Element} elem
 */
getText = Sizzle.getText = function( elem ) {
	var node,
		ret = "",
		i = 0,
		nodeType = elem.nodeType;

	if ( !nodeType ) {
		// If no nodeType, this is expected to be an array
		while ( (node = elem[i++]) ) {
			// Do not traverse comment nodes
			ret += getText( node );
		}
	} else if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {
		// Use textContent for elements
		// innerText usage removed for consistency of new lines (jQuery #11153)
		if ( typeof elem.textContent === "string" ) {
			return elem.textContent;
		} else {
			// Traverse its children
			for ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
				ret += getText( elem );
			}
		}
	} else if ( nodeType === 3 || nodeType === 4 ) {
		return elem.nodeValue;
	}
	// Do not include comment or processing instruction nodes

	return ret;
};

Expr = Sizzle.selectors = {

	// Can be adjusted by the user
	cacheLength: 50,

	createPseudo: markFunction,

	match: matchExpr,

	attrHandle: {},

	find: {},

	relative: {
		">": { dir: "parentNode", first: true },
		" ": { dir: "parentNode" },
		"+": { dir: "previousSibling", first: true },
		"~": { dir: "previousSibling" }
	},

	preFilter: {
		"ATTR": function( match ) {
			match[1] = match[1].replace( runescape, funescape );

			// Move the given value to match[3] whether quoted or unquoted
			match[3] = ( match[3] || match[4] || match[5] || "" ).replace( runescape, funescape );

			if ( match[2] === "~=" ) {
				match[3] = " " + match[3] + " ";
			}

			return match.slice( 0, 4 );
		},

		"CHILD": function( match ) {
			/* matches from matchExpr["CHILD"]
				1 type (only|nth|...)
				2 what (child|of-type)
				3 argument (even|odd|\d*|\d*n([+-]\d+)?|...)
				4 xn-component of xn+y argument ([+-]?\d*n|)
				5 sign of xn-component
				6 x of xn-component
				7 sign of y-component
				8 y of y-component
			*/
			match[1] = match[1].toLowerCase();

			if ( match[1].slice( 0, 3 ) === "nth" ) {
				// nth-* requires argument
				if ( !match[3] ) {
					Sizzle.error( match[0] );
				}

				// numeric x and y parameters for Expr.filter.CHILD
				// remember that false/true cast respectively to 0/1
				match[4] = +( match[4] ? match[5] + (match[6] || 1) : 2 * ( match[3] === "even" || match[3] === "odd" ) );
				match[5] = +( ( match[7] + match[8] ) || match[3] === "odd" );

			// other types prohibit arguments
			} else if ( match[3] ) {
				Sizzle.error( match[0] );
			}

			return match;
		},

		"PSEUDO": function( match ) {
			var excess,
				unquoted = !match[6] && match[2];

			if ( matchExpr["CHILD"].test( match[0] ) ) {
				return null;
			}

			// Accept quoted arguments as-is
			if ( match[3] ) {
				match[2] = match[4] || match[5] || "";

			// Strip excess characters from unquoted arguments
			} else if ( unquoted && rpseudo.test( unquoted ) &&
				// Get excess from tokenize (recursively)
				(excess = tokenize( unquoted, true )) &&
				// advance to the next closing parenthesis
				(excess = unquoted.indexOf( ")", unquoted.length - excess ) - unquoted.length) ) {

				// excess is a negative index
				match[0] = match[0].slice( 0, excess );
				match[2] = unquoted.slice( 0, excess );
			}

			// Return only captures needed by the pseudo filter method (type and argument)
			return match.slice( 0, 3 );
		}
	},

	filter: {

		"TAG": function( nodeNameSelector ) {
			var nodeName = nodeNameSelector.replace( runescape, funescape ).toLowerCase();
			return nodeNameSelector === "*" ?
				function() { return true; } :
				function( elem ) {
					return elem.nodeName && elem.nodeName.toLowerCase() === nodeName;
				};
		},

		"CLASS": function( className ) {
			var pattern = classCache[ className + " " ];

			return pattern ||
				(pattern = new RegExp( "(^|" + whitespace + ")" + className + "(" + whitespace + "|$)" )) &&
				classCache( className, function( elem ) {
					return pattern.test( typeof elem.className === "string" && elem.className || typeof elem.getAttribute !== "undefined" && elem.getAttribute("class") || "" );
				});
		},

		"ATTR": function( name, operator, check ) {
			return function( elem ) {
				var result = Sizzle.attr( elem, name );

				if ( result == null ) {
					return operator === "!=";
				}
				if ( !operator ) {
					return true;
				}

				result += "";

				return operator === "=" ? result === check :
					operator === "!=" ? result !== check :
					operator === "^=" ? check && result.indexOf( check ) === 0 :
					operator === "*=" ? check && result.indexOf( check ) > -1 :
					operator === "$=" ? check && result.slice( -check.length ) === check :
					operator === "~=" ? ( " " + result.replace( rwhitespace, " " ) + " " ).indexOf( check ) > -1 :
					operator === "|=" ? result === check || result.slice( 0, check.length + 1 ) === check + "-" :
					false;
			};
		},

		"CHILD": function( type, what, argument, first, last ) {
			var simple = type.slice( 0, 3 ) !== "nth",
				forward = type.slice( -4 ) !== "last",
				ofType = what === "of-type";

			return first === 1 && last === 0 ?

				// Shortcut for :nth-*(n)
				function( elem ) {
					return !!elem.parentNode;
				} :

				function( elem, context, xml ) {
					var cache, uniqueCache, outerCache, node, nodeIndex, start,
						dir = simple !== forward ? "nextSibling" : "previousSibling",
						parent = elem.parentNode,
						name = ofType && elem.nodeName.toLowerCase(),
						useCache = !xml && !ofType,
						diff = false;

					if ( parent ) {

						// :(first|last|only)-(child|of-type)
						if ( simple ) {
							while ( dir ) {
								node = elem;
								while ( (node = node[ dir ]) ) {
									if ( ofType ?
										node.nodeName.toLowerCase() === name :
										node.nodeType === 1 ) {

										return false;
									}
								}
								// Reverse direction for :only-* (if we haven't yet done so)
								start = dir = type === "only" && !start && "nextSibling";
							}
							return true;
						}

						start = [ forward ? parent.firstChild : parent.lastChild ];

						// non-xml :nth-child(...) stores cache data on `parent`
						if ( forward && useCache ) {

							// Seek `elem` from a previously-cached index

							// ...in a gzip-friendly way
							node = parent;
							outerCache = node[ expando ] || (node[ expando ] = {});

							// Support: IE <9 only
							// Defend against cloned attroperties (jQuery gh-1709)
							uniqueCache = outerCache[ node.uniqueID ] ||
								(outerCache[ node.uniqueID ] = {});

							cache = uniqueCache[ type ] || [];
							nodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
							diff = nodeIndex && cache[ 2 ];
							node = nodeIndex && parent.childNodes[ nodeIndex ];

							while ( (node = ++nodeIndex && node && node[ dir ] ||

								// Fallback to seeking `elem` from the start
								(diff = nodeIndex = 0) || start.pop()) ) {

								// When found, cache indexes on `parent` and break
								if ( node.nodeType === 1 && ++diff && node === elem ) {
									uniqueCache[ type ] = [ dirruns, nodeIndex, diff ];
									break;
								}
							}

						} else {
							// Use previously-cached element index if available
							if ( useCache ) {
								// ...in a gzip-friendly way
								node = elem;
								outerCache = node[ expando ] || (node[ expando ] = {});

								// Support: IE <9 only
								// Defend against cloned attroperties (jQuery gh-1709)
								uniqueCache = outerCache[ node.uniqueID ] ||
									(outerCache[ node.uniqueID ] = {});

								cache = uniqueCache[ type ] || [];
								nodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
								diff = nodeIndex;
							}

							// xml :nth-child(...)
							// or :nth-last-child(...) or :nth(-last)?-of-type(...)
							if ( diff === false ) {
								// Use the same loop as above to seek `elem` from the start
								while ( (node = ++nodeIndex && node && node[ dir ] ||
									(diff = nodeIndex = 0) || start.pop()) ) {

									if ( ( ofType ?
										node.nodeName.toLowerCase() === name :
										node.nodeType === 1 ) &&
										++diff ) {

										// Cache the index of each encountered element
										if ( useCache ) {
											outerCache = node[ expando ] || (node[ expando ] = {});

											// Support: IE <9 only
											// Defend against cloned attroperties (jQuery gh-1709)
											uniqueCache = outerCache[ node.uniqueID ] ||
												(outerCache[ node.uniqueID ] = {});

											uniqueCache[ type ] = [ dirruns, diff ];
										}

										if ( node === elem ) {
											break;
										}
									}
								}
							}
						}

						// Incorporate the offset, then check against cycle size
						diff -= last;
						return diff === first || ( diff % first === 0 && diff / first >= 0 );
					}
				};
		},

		"PSEUDO": function( pseudo, argument ) {
			// pseudo-class names are case-insensitive
			// http://www.w3.org/TR/selectors/#pseudo-classes
			// Prioritize by case sensitivity in case custom pseudos are added with uppercase letters
			// Remember that setFilters inherits from pseudos
			var args,
				fn = Expr.pseudos[ pseudo ] || Expr.setFilters[ pseudo.toLowerCase() ] ||
					Sizzle.error( "unsupported pseudo: " + pseudo );

			// The user may use createPseudo to indicate that
			// arguments are needed to create the filter function
			// just as Sizzle does
			if ( fn[ expando ] ) {
				return fn( argument );
			}

			// But maintain support for old signatures
			if ( fn.length > 1 ) {
				args = [ pseudo, pseudo, "", argument ];
				return Expr.setFilters.hasOwnProperty( pseudo.toLowerCase() ) ?
					markFunction(function( seed, matches ) {
						var idx,
							matched = fn( seed, argument ),
							i = matched.length;
						while ( i-- ) {
							idx = indexOf( seed, matched[i] );
							seed[ idx ] = !( matches[ idx ] = matched[i] );
						}
					}) :
					function( elem ) {
						return fn( elem, 0, args );
					};
			}

			return fn;
		}
	},

	pseudos: {
		// Potentially complex pseudos
		"not": markFunction(function( selector ) {
			// Trim the selector passed to compile
			// to avoid treating leading and trailing
			// spaces as combinators
			var input = [],
				results = [],
				matcher = compile( selector.replace( rtrim, "$1" ) );

			return matcher[ expando ] ?
				markFunction(function( seed, matches, context, xml ) {
					var elem,
						unmatched = matcher( seed, null, xml, [] ),
						i = seed.length;

					// Match elements unmatched by `matcher`
					while ( i-- ) {
						if ( (elem = unmatched[i]) ) {
							seed[i] = !(matches[i] = elem);
						}
					}
				}) :
				function( elem, context, xml ) {
					input[0] = elem;
					matcher( input, null, xml, results );
					// Don't keep the element (issue #299)
					input[0] = null;
					return !results.pop();
				};
		}),

		"has": markFunction(function( selector ) {
			return function( elem ) {
				return Sizzle( selector, elem ).length > 0;
			};
		}),

		"contains": markFunction(function( text ) {
			text = text.replace( runescape, funescape );
			return function( elem ) {
				return ( elem.textContent || elem.innerText || getText( elem ) ).indexOf( text ) > -1;
			};
		}),

		// "Whether an element is represented by a :lang() selector
		// is based solely on the element's language value
		// being equal to the identifier C,
		// or beginning with the identifier C immediately followed by "-".
		// The matching of C against the element's language value is performed case-insensitively.
		// The identifier C does not have to be a valid language name."
		// http://www.w3.org/TR/selectors/#lang-pseudo
		"lang": markFunction( function( lang ) {
			// lang value must be a valid identifier
			if ( !ridentifier.test(lang || "") ) {
				Sizzle.error( "unsupported lang: " + lang );
			}
			lang = lang.replace( runescape, funescape ).toLowerCase();
			return function( elem ) {
				var elemLang;
				do {
					if ( (elemLang = documentIsHTML ?
						elem.lang :
						elem.getAttribute("xml:lang") || elem.getAttribute("lang")) ) {

						elemLang = elemLang.toLowerCase();
						return elemLang === lang || elemLang.indexOf( lang + "-" ) === 0;
					}
				} while ( (elem = elem.parentNode) && elem.nodeType === 1 );
				return false;
			};
		}),

		// Miscellaneous
		"target": function( elem ) {
			var hash = window.location && window.location.hash;
			return hash && hash.slice( 1 ) === elem.id;
		},

		"root": function( elem ) {
			return elem === docElem;
		},

		"focus": function( elem ) {
			return elem === document.activeElement && (!document.hasFocus || document.hasFocus()) && !!(elem.type || elem.href || ~elem.tabIndex);
		},

		// Boolean properties
		"enabled": createDisabledPseudo( false ),
		"disabled": createDisabledPseudo( true ),

		"checked": function( elem ) {
			// In CSS3, :checked should return both checked and selected elements
			// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
			var nodeName = elem.nodeName.toLowerCase();
			return (nodeName === "input" && !!elem.checked) || (nodeName === "option" && !!elem.selected);
		},

		"selected": function( elem ) {
			// Accessing this property makes selected-by-default
			// options in Safari work properly
			if ( elem.parentNode ) {
				elem.parentNode.selectedIndex;
			}

			return elem.selected === true;
		},

		// Contents
		"empty": function( elem ) {
			// http://www.w3.org/TR/selectors/#empty-pseudo
			// :empty is negated by element (1) or content nodes (text: 3; cdata: 4; entity ref: 5),
			//   but not by others (comment: 8; processing instruction: 7; etc.)
			// nodeType < 6 works because attributes (2) do not appear as children
			for ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
				if ( elem.nodeType < 6 ) {
					return false;
				}
			}
			return true;
		},

		"parent": function( elem ) {
			return !Expr.pseudos["empty"]( elem );
		},

		// Element/input types
		"header": function( elem ) {
			return rheader.test( elem.nodeName );
		},

		"input": function( elem ) {
			return rinputs.test( elem.nodeName );
		},

		"button": function( elem ) {
			var name = elem.nodeName.toLowerCase();
			return name === "input" && elem.type === "button" || name === "button";
		},

		"text": function( elem ) {
			var attr;
			return elem.nodeName.toLowerCase() === "input" &&
				elem.type === "text" &&

				// Support: IE<8
				// New HTML5 attribute values (e.g., "search") appear with elem.type === "text"
				( (attr = elem.getAttribute("type")) == null || attr.toLowerCase() === "text" );
		},

		// Position-in-collection
		"first": createPositionalPseudo(function() {
			return [ 0 ];
		}),

		"last": createPositionalPseudo(function( matchIndexes, length ) {
			return [ length - 1 ];
		}),

		"eq": createPositionalPseudo(function( matchIndexes, length, argument ) {
			return [ argument < 0 ? argument + length : argument ];
		}),

		"even": createPositionalPseudo(function( matchIndexes, length ) {
			var i = 0;
			for ( ; i < length; i += 2 ) {
				matchIndexes.push( i );
			}
			return matchIndexes;
		}),

		"odd": createPositionalPseudo(function( matchIndexes, length ) {
			var i = 1;
			for ( ; i < length; i += 2 ) {
				matchIndexes.push( i );
			}
			return matchIndexes;
		}),

		"lt": createPositionalPseudo(function( matchIndexes, length, argument ) {
			var i = argument < 0 ? argument + length : argument;
			for ( ; --i >= 0; ) {
				matchIndexes.push( i );
			}
			return matchIndexes;
		}),

		"gt": createPositionalPseudo(function( matchIndexes, length, argument ) {
			var i = argument < 0 ? argument + length : argument;
			for ( ; ++i < length; ) {
				matchIndexes.push( i );
			}
			return matchIndexes;
		})
	}
};

Expr.pseudos["nth"] = Expr.pseudos["eq"];

// Add button/input type pseudos
for ( i in { radio: true, checkbox: true, file: true, password: true, image: true } ) {
	Expr.pseudos[ i ] = createInputPseudo( i );
}
for ( i in { submit: true, reset: true } ) {
	Expr.pseudos[ i ] = createButtonPseudo( i );
}

// Easy API for creating new setFilters
function setFilters() {}
setFilters.prototype = Expr.filters = Expr.pseudos;
Expr.setFilters = new setFilters();

tokenize = Sizzle.tokenize = function( selector, parseOnly ) {
	var matched, match, tokens, type,
		soFar, groups, preFilters,
		cached = tokenCache[ selector + " " ];

	if ( cached ) {
		return parseOnly ? 0 : cached.slice( 0 );
	}

	soFar = selector;
	groups = [];
	preFilters = Expr.preFilter;

	while ( soFar ) {

		// Comma and first run
		if ( !matched || (match = rcomma.exec( soFar )) ) {
			if ( match ) {
				// Don't consume trailing commas as valid
				soFar = soFar.slice( match[0].length ) || soFar;
			}
			groups.push( (tokens = []) );
		}

		matched = false;

		// Combinators
		if ( (match = rcombinators.exec( soFar )) ) {
			matched = match.shift();
			tokens.push({
				value: matched,
				// Cast descendant combinators to space
				type: match[0].replace( rtrim, " " )
			});
			soFar = soFar.slice( matched.length );
		}

		// Filters
		for ( type in Expr.filter ) {
			if ( (match = matchExpr[ type ].exec( soFar )) && (!preFilters[ type ] ||
				(match = preFilters[ type ]( match ))) ) {
				matched = match.shift();
				tokens.push({
					value: matched,
					type: type,
					matches: match
				});
				soFar = soFar.slice( matched.length );
			}
		}

		if ( !matched ) {
			break;
		}
	}

	// Return the length of the invalid excess
	// if we're just parsing
	// Otherwise, throw an error or return tokens
	return parseOnly ?
		soFar.length :
		soFar ?
			Sizzle.error( selector ) :
			// Cache the tokens
			tokenCache( selector, groups ).slice( 0 );
};

function toSelector( tokens ) {
	var i = 0,
		len = tokens.length,
		selector = "";
	for ( ; i < len; i++ ) {
		selector += tokens[i].value;
	}
	return selector;
}

function addCombinator( matcher, combinator, base ) {
	var dir = combinator.dir,
		skip = combinator.next,
		key = skip || dir,
		checkNonElements = base && key === "parentNode",
		doneName = done++;

	return combinator.first ?
		// Check against closest ancestor/preceding element
		function( elem, context, xml ) {
			while ( (elem = elem[ dir ]) ) {
				if ( elem.nodeType === 1 || checkNonElements ) {
					return matcher( elem, context, xml );
				}
			}
			return false;
		} :

		// Check against all ancestor/preceding elements
		function( elem, context, xml ) {
			var oldCache, uniqueCache, outerCache,
				newCache = [ dirruns, doneName ];

			// We can't set arbitrary data on XML nodes, so they don't benefit from combinator caching
			if ( xml ) {
				while ( (elem = elem[ dir ]) ) {
					if ( elem.nodeType === 1 || checkNonElements ) {
						if ( matcher( elem, context, xml ) ) {
							return true;
						}
					}
				}
			} else {
				while ( (elem = elem[ dir ]) ) {
					if ( elem.nodeType === 1 || checkNonElements ) {
						outerCache = elem[ expando ] || (elem[ expando ] = {});

						// Support: IE <9 only
						// Defend against cloned attroperties (jQuery gh-1709)
						uniqueCache = outerCache[ elem.uniqueID ] || (outerCache[ elem.uniqueID ] = {});

						if ( skip && skip === elem.nodeName.toLowerCase() ) {
							elem = elem[ dir ] || elem;
						} else if ( (oldCache = uniqueCache[ key ]) &&
							oldCache[ 0 ] === dirruns && oldCache[ 1 ] === doneName ) {

							// Assign to newCache so results back-propagate to previous elements
							return (newCache[ 2 ] = oldCache[ 2 ]);
						} else {
							// Reuse newcache so results back-propagate to previous elements
							uniqueCache[ key ] = newCache;

							// A match means we're done; a fail means we have to keep checking
							if ( (newCache[ 2 ] = matcher( elem, context, xml )) ) {
								return true;
							}
						}
					}
				}
			}
			return false;
		};
}

function elementMatcher( matchers ) {
	return matchers.length > 1 ?
		function( elem, context, xml ) {
			var i = matchers.length;
			while ( i-- ) {
				if ( !matchers[i]( elem, context, xml ) ) {
					return false;
				}
			}
			return true;
		} :
		matchers[0];
}

function multipleContexts( selector, contexts, results ) {
	var i = 0,
		len = contexts.length;
	for ( ; i < len; i++ ) {
		Sizzle( selector, contexts[i], results );
	}
	return results;
}

function condense( unmatched, map, filter, context, xml ) {
	var elem,
		newUnmatched = [],
		i = 0,
		len = unmatched.length,
		mapped = map != null;

	for ( ; i < len; i++ ) {
		if ( (elem = unmatched[i]) ) {
			if ( !filter || filter( elem, context, xml ) ) {
				newUnmatched.push( elem );
				if ( mapped ) {
					map.push( i );
				}
			}
		}
	}

	return newUnmatched;
}

function setMatcher( preFilter, selector, matcher, postFilter, postFinder, postSelector ) {
	if ( postFilter && !postFilter[ expando ] ) {
		postFilter = setMatcher( postFilter );
	}
	if ( postFinder && !postFinder[ expando ] ) {
		postFinder = setMatcher( postFinder, postSelector );
	}
	return markFunction(function( seed, results, context, xml ) {
		var temp, i, elem,
			preMap = [],
			postMap = [],
			preexisting = results.length,

			// Get initial elements from seed or context
			elems = seed || multipleContexts( selector || "*", context.nodeType ? [ context ] : context, [] ),

			// Prefilter to get matcher input, preserving a map for seed-results synchronization
			matcherIn = preFilter && ( seed || !selector ) ?
				condense( elems, preMap, preFilter, context, xml ) :
				elems,

			matcherOut = matcher ?
				// If we have a postFinder, or filtered seed, or non-seed postFilter or preexisting results,
				postFinder || ( seed ? preFilter : preexisting || postFilter ) ?

					// ...intermediate processing is necessary
					[] :

					// ...otherwise use results directly
					results :
				matcherIn;

		// Find primary matches
		if ( matcher ) {
			matcher( matcherIn, matcherOut, context, xml );
		}

		// Apply postFilter
		if ( postFilter ) {
			temp = condense( matcherOut, postMap );
			postFilter( temp, [], context, xml );

			// Un-match failing elements by moving them back to matcherIn
			i = temp.length;
			while ( i-- ) {
				if ( (elem = temp[i]) ) {
					matcherOut[ postMap[i] ] = !(matcherIn[ postMap[i] ] = elem);
				}
			}
		}

		if ( seed ) {
			if ( postFinder || preFilter ) {
				if ( postFinder ) {
					// Get the final matcherOut by condensing this intermediate into postFinder contexts
					temp = [];
					i = matcherOut.length;
					while ( i-- ) {
						if ( (elem = matcherOut[i]) ) {
							// Restore matcherIn since elem is not yet a final match
							temp.push( (matcherIn[i] = elem) );
						}
					}
					postFinder( null, (matcherOut = []), temp, xml );
				}

				// Move matched elements from seed to results to keep them synchronized
				i = matcherOut.length;
				while ( i-- ) {
					if ( (elem = matcherOut[i]) &&
						(temp = postFinder ? indexOf( seed, elem ) : preMap[i]) > -1 ) {

						seed[temp] = !(results[temp] = elem);
					}
				}
			}

		// Add elements to results, through postFinder if defined
		} else {
			matcherOut = condense(
				matcherOut === results ?
					matcherOut.splice( preexisting, matcherOut.length ) :
					matcherOut
			);
			if ( postFinder ) {
				postFinder( null, results, matcherOut, xml );
			} else {
				push.apply( results, matcherOut );
			}
		}
	});
}

function matcherFromTokens( tokens ) {
	var checkContext, matcher, j,
		len = tokens.length,
		leadingRelative = Expr.relative[ tokens[0].type ],
		implicitRelative = leadingRelative || Expr.relative[" "],
		i = leadingRelative ? 1 : 0,

		// The foundational matcher ensures that elements are reachable from top-level context(s)
		matchContext = addCombinator( function( elem ) {
			return elem === checkContext;
		}, implicitRelative, true ),
		matchAnyContext = addCombinator( function( elem ) {
			return indexOf( checkContext, elem ) > -1;
		}, implicitRelative, true ),
		matchers = [ function( elem, context, xml ) {
			var ret = ( !leadingRelative && ( xml || context !== outermostContext ) ) || (
				(checkContext = context).nodeType ?
					matchContext( elem, context, xml ) :
					matchAnyContext( elem, context, xml ) );
			// Avoid hanging onto element (issue #299)
			checkContext = null;
			return ret;
		} ];

	for ( ; i < len; i++ ) {
		if ( (matcher = Expr.relative[ tokens[i].type ]) ) {
			matchers = [ addCombinator(elementMatcher( matchers ), matcher) ];
		} else {
			matcher = Expr.filter[ tokens[i].type ].apply( null, tokens[i].matches );

			// Return special upon seeing a positional matcher
			if ( matcher[ expando ] ) {
				// Find the next relative operator (if any) for proper handling
				j = ++i;
				for ( ; j < len; j++ ) {
					if ( Expr.relative[ tokens[j].type ] ) {
						break;
					}
				}
				return setMatcher(
					i > 1 && elementMatcher( matchers ),
					i > 1 && toSelector(
						// If the preceding token was a descendant combinator, insert an implicit any-element `*`
						tokens.slice( 0, i - 1 ).concat({ value: tokens[ i - 2 ].type === " " ? "*" : "" })
					).replace( rtrim, "$1" ),
					matcher,
					i < j && matcherFromTokens( tokens.slice( i, j ) ),
					j < len && matcherFromTokens( (tokens = tokens.slice( j )) ),
					j < len && toSelector( tokens )
				);
			}
			matchers.push( matcher );
		}
	}

	return elementMatcher( matchers );
}

function matcherFromGroupMatchers( elementMatchers, setMatchers ) {
	var bySet = setMatchers.length > 0,
		byElement = elementMatchers.length > 0,
		superMatcher = function( seed, context, xml, results, outermost ) {
			var elem, j, matcher,
				matchedCount = 0,
				i = "0",
				unmatched = seed && [],
				setMatched = [],
				contextBackup = outermostContext,
				// We must always have either seed elements or outermost context
				elems = seed || byElement && Expr.find["TAG"]( "*", outermost ),
				// Use integer dirruns iff this is the outermost matcher
				dirrunsUnique = (dirruns += contextBackup == null ? 1 : Math.random() || 0.1),
				len = elems.length;

			if ( outermost ) {
				outermostContext = context === document || context || outermost;
			}

			// Add elements passing elementMatchers directly to results
			// Support: IE<9, Safari
			// Tolerate NodeList properties (IE: "length"; Safari: <number>) matching elements by id
			for ( ; i !== len && (elem = elems[i]) != null; i++ ) {
				if ( byElement && elem ) {
					j = 0;
					if ( !context && elem.ownerDocument !== document ) {
						setDocument( elem );
						xml = !documentIsHTML;
					}
					while ( (matcher = elementMatchers[j++]) ) {
						if ( matcher( elem, context || document, xml) ) {
							results.push( elem );
							break;
						}
					}
					if ( outermost ) {
						dirruns = dirrunsUnique;
					}
				}

				// Track unmatched elements for set filters
				if ( bySet ) {
					// They will have gone through all possible matchers
					if ( (elem = !matcher && elem) ) {
						matchedCount--;
					}

					// Lengthen the array for every element, matched or not
					if ( seed ) {
						unmatched.push( elem );
					}
				}
			}

			// `i` is now the count of elements visited above, and adding it to `matchedCount`
			// makes the latter nonnegative.
			matchedCount += i;

			// Apply set filters to unmatched elements
			// NOTE: This can be skipped if there are no unmatched elements (i.e., `matchedCount`
			// equals `i`), unless we didn't visit _any_ elements in the above loop because we have
			// no element matchers and no seed.
			// Incrementing an initially-string "0" `i` allows `i` to remain a string only in that
			// case, which will result in a "00" `matchedCount` that differs from `i` but is also
			// numerically zero.
			if ( bySet && i !== matchedCount ) {
				j = 0;
				while ( (matcher = setMatchers[j++]) ) {
					matcher( unmatched, setMatched, context, xml );
				}

				if ( seed ) {
					// Reintegrate element matches to eliminate the need for sorting
					if ( matchedCount > 0 ) {
						while ( i-- ) {
							if ( !(unmatched[i] || setMatched[i]) ) {
								setMatched[i] = pop.call( results );
							}
						}
					}

					// Discard index placeholder values to get only actual matches
					setMatched = condense( setMatched );
				}

				// Add matches to results
				push.apply( results, setMatched );

				// Seedless set matches succeeding multiple successful matchers stipulate sorting
				if ( outermost && !seed && setMatched.length > 0 &&
					( matchedCount + setMatchers.length ) > 1 ) {

					Sizzle.uniqueSort( results );
				}
			}

			// Override manipulation of globals by nested matchers
			if ( outermost ) {
				dirruns = dirrunsUnique;
				outermostContext = contextBackup;
			}

			return unmatched;
		};

	return bySet ?
		markFunction( superMatcher ) :
		superMatcher;
}

compile = Sizzle.compile = function( selector, match /* Internal Use Only */ ) {
	var i,
		setMatchers = [],
		elementMatchers = [],
		cached = compilerCache[ selector + " " ];

	if ( !cached ) {
		// Generate a function of recursive functions that can be used to check each element
		if ( !match ) {
			match = tokenize( selector );
		}
		i = match.length;
		while ( i-- ) {
			cached = matcherFromTokens( match[i] );
			if ( cached[ expando ] ) {
				setMatchers.push( cached );
			} else {
				elementMatchers.push( cached );
			}
		}

		// Cache the compiled function
		cached = compilerCache( selector, matcherFromGroupMatchers( elementMatchers, setMatchers ) );

		// Save selector and tokenization
		cached.selector = selector;
	}
	return cached;
};

/**
 * A low-level selection function that works with Sizzle's compiled
 *  selector functions
 * @param {String|Function} selector A selector or a pre-compiled
 *  selector function built with Sizzle.compile
 * @param {Element} context
 * @param {Array} [results]
 * @param {Array} [seed] A set of elements to match against
 */
select = Sizzle.select = function( selector, context, results, seed ) {
	var i, tokens, token, type, find,
		compiled = typeof selector === "function" && selector,
		match = !seed && tokenize( (selector = compiled.selector || selector) );

	results = results || [];

	// Try to minimize operations if there is only one selector in the list and no seed
	// (the latter of which guarantees us context)
	if ( match.length === 1 ) {

		// Reduce context if the leading compound selector is an ID
		tokens = match[0] = match[0].slice( 0 );
		if ( tokens.length > 2 && (token = tokens[0]).type === "ID" &&
				context.nodeType === 9 && documentIsHTML && Expr.relative[ tokens[1].type ] ) {

			context = ( Expr.find["ID"]( token.matches[0].replace(runescape, funescape), context ) || [] )[0];
			if ( !context ) {
				return results;

			// Precompiled matchers will still verify ancestry, so step up a level
			} else if ( compiled ) {
				context = context.parentNode;
			}

			selector = selector.slice( tokens.shift().value.length );
		}

		// Fetch a seed set for right-to-left matching
		i = matchExpr["needsContext"].test( selector ) ? 0 : tokens.length;
		while ( i-- ) {
			token = tokens[i];

			// Abort if we hit a combinator
			if ( Expr.relative[ (type = token.type) ] ) {
				break;
			}
			if ( (find = Expr.find[ type ]) ) {
				// Search, expanding context for leading sibling combinators
				if ( (seed = find(
					token.matches[0].replace( runescape, funescape ),
					rsibling.test( tokens[0].type ) && testContext( context.parentNode ) || context
				)) ) {

					// If seed is empty or no tokens remain, we can return early
					tokens.splice( i, 1 );
					selector = seed.length && toSelector( tokens );
					if ( !selector ) {
						push.apply( results, seed );
						return results;
					}

					break;
				}
			}
		}
	}

	// Compile and execute a filtering function if one is not provided
	// Provide `match` to avoid retokenization if we modified the selector above
	( compiled || compile( selector, match ) )(
		seed,
		context,
		!documentIsHTML,
		results,
		!context || rsibling.test( selector ) && testContext( context.parentNode ) || context
	);
	return results;
};

// One-time assignments

// Sort stability
support.sortStable = expando.split("").sort( sortOrder ).join("") === expando;

// Support: Chrome 14-35+
// Always assume duplicates if they aren't passed to the comparison function
support.detectDuplicates = !!hasDuplicate;

// Initialize against the default document
setDocument();

// Support: Webkit<537.32 - Safari 6.0.3/Chrome 25 (fixed in Chrome 27)
// Detached nodes confoundingly follow *each other*
support.sortDetached = assert(function( el ) {
	// Should return 1, but returns 4 (following)
	return el.compareDocumentPosition( document.createElement("fieldset") ) & 1;
});

// Support: IE<8
// Prevent attribute/property "interpolation"
// https://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx
if ( !assert(function( el ) {
	el.innerHTML = "<a href='#'></a>";
	return el.firstChild.getAttribute("href") === "#" ;
}) ) {
	addHandle( "type|href|height|width", function( elem, name, isXML ) {
		if ( !isXML ) {
			return elem.getAttribute( name, name.toLowerCase() === "type" ? 1 : 2 );
		}
	});
}

// Support: IE<9
// Use defaultValue in place of getAttribute("value")
if ( !support.attributes || !assert(function( el ) {
	el.innerHTML = "<input/>";
	el.firstChild.setAttribute( "value", "" );
	return el.firstChild.getAttribute( "value" ) === "";
}) ) {
	addHandle( "value", function( elem, name, isXML ) {
		if ( !isXML && elem.nodeName.toLowerCase() === "input" ) {
			return elem.defaultValue;
		}
	});
}

// Support: IE<9
// Use getAttributeNode to fetch booleans when getAttribute lies
if ( !assert(function( el ) {
	return el.getAttribute("disabled") == null;
}) ) {
	addHandle( booleans, function( elem, name, isXML ) {
		var val;
		if ( !isXML ) {
			return elem[ name ] === true ? name.toLowerCase() :
					(val = elem.getAttributeNode( name )) && val.specified ?
					val.value :
				null;
		}
	});
}

return Sizzle;

})( window );



jQuery.find = Sizzle;
jQuery.expr = Sizzle.selectors;

// Deprecated
jQuery.expr[ ":" ] = jQuery.expr.pseudos;
jQuery.uniqueSort = jQuery.unique = Sizzle.uniqueSort;
jQuery.text = Sizzle.getText;
jQuery.isXMLDoc = Sizzle.isXML;
jQuery.contains = Sizzle.contains;
jQuery.escapeSelector = Sizzle.escape;




var dir = function( elem, dir, until ) {
	var matched = [],
		truncate = until !== undefined;

	while ( ( elem = elem[ dir ] ) && elem.nodeType !== 9 ) {
		if ( elem.nodeType === 1 ) {
			if ( truncate && jQuery( elem ).is( until ) ) {
				break;
			}
			matched.push( elem );
		}
	}
	return matched;
};


var siblings = function( n, elem ) {
	var matched = [];

	for ( ; n; n = n.nextSibling ) {
		if ( n.nodeType === 1 && n !== elem ) {
			matched.push( n );
		}
	}

	return matched;
};


var rneedsContext = jQuery.expr.match.needsContext;



function nodeName( elem, name ) {

  return elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase();

};
var rsingleTag = ( /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i );



// Implement the identical functionality for filter and not
function winnow( elements, qualifier, not ) {
	if ( isFunction( qualifier ) ) {
		return jQuery.grep( elements, function( elem, i ) {
			return !!qualifier.call( elem, i, elem ) !== not;
		} );
	}

	// Single element
	if ( qualifier.nodeType ) {
		return jQuery.grep( elements, function( elem ) {
			return ( elem === qualifier ) !== not;
		} );
	}

	// Arraylike of elements (jQuery, arguments, Array)
	if ( typeof qualifier !== "string" ) {
		return jQuery.grep( elements, function( elem ) {
			return ( indexOf.call( qualifier, elem ) > -1 ) !== not;
		} );
	}

	// Filtered directly for both simple and complex selectors
	return jQuery.filter( qualifier, elements, not );
}

jQuery.filter = function( expr, elems, not ) {
	var elem = elems[ 0 ];

	if ( not ) {
		expr = ":not(" + expr + ")";
	}

	if ( elems.length === 1 && elem.nodeType === 1 ) {
		return jQuery.find.matchesSelector( elem, expr ) ? [ elem ] : [];
	}

	return jQuery.find.matches( expr, jQuery.grep( elems, function( elem ) {
		return elem.nodeType === 1;
	} ) );
};

jQuery.fn.extend( {
	find: function( selector ) {
		var i, ret,
			len = this.length,
			self = this;

		if ( typeof selector !== "string" ) {
			return this.pushStack( jQuery( selector ).filter( function() {
				for ( i = 0; i < len; i++ ) {
					if ( jQuery.contains( self[ i ], this ) ) {
						return true;
					}
				}
			} ) );
		}

		ret = this.pushStack( [] );

		for ( i = 0; i < len; i++ ) {
			jQuery.find( selector, self[ i ], ret );
		}

		return len > 1 ? jQuery.uniqueSort( ret ) : ret;
	},
	filter: function( selector ) {
		return this.pushStack( winnow( this, selector || [], false ) );
	},
	not: function( selector ) {
		return this.pushStack( winnow( this, selector || [], true ) );
	},
	is: function( selector ) {
		return !!winnow(
			this,

			// If this is a positional/relative selector, check membership in the returned set
			// so $("p:first").is("p:last") won't return true for a doc with two "p".
			typeof selector === "string" && rneedsContext.test( selector ) ?
				jQuery( selector ) :
				selector || [],
			false
		).length;
	}
} );


// Initialize a jQuery object


// A central reference to the root jQuery(document)
var rootjQuery,

	// A simple way to check for HTML strings
	// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
	// Strict HTML recognition (#11290: must start with <)
	// Shortcut simple #id case for speed
	rquickExpr = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/,

	init = jQuery.fn.init = function( selector, context, root ) {
		var match, elem;

		// HANDLE: $(""), $(null), $(undefined), $(false)
		if ( !selector ) {
			return this;
		}

		// Method init() accepts an alternate rootjQuery
		// so migrate can support jQuery.sub (gh-2101)
		root = root || rootjQuery;

		// Handle HTML strings
		if ( typeof selector === "string" ) {
			if ( selector[ 0 ] === "<" &&
				selector[ selector.length - 1 ] === ">" &&
				selector.length >= 3 ) {

				// Assume that strings that start and end with <> are HTML and skip the regex check
				match = [ null, selector, null ];

			} else {
				match = rquickExpr.exec( selector );
			}

			// Match html or make sure no context is specified for #id
			if ( match && ( match[ 1 ] || !context ) ) {

				// HANDLE: $(html) -> $(array)
				if ( match[ 1 ] ) {
					context = context instanceof jQuery ? context[ 0 ] : context;

					// Option to run scripts is true for back-compat
					// Intentionally let the error be thrown if parseHTML is not present
					jQuery.merge( this, jQuery.parseHTML(
						match[ 1 ],
						context && context.nodeType ? context.ownerDocument || context : document,
						true
					) );

					// HANDLE: $(html, props)
					if ( rsingleTag.test( match[ 1 ] ) && jQuery.isPlainObject( context ) ) {
						for ( match in context ) {

							// Properties of context are called as methods if possible
							if ( isFunction( this[ match ] ) ) {
								this[ match ]( context[ match ] );

							// ...and otherwise set as attributes
							} else {
								this.attr( match, context[ match ] );
							}
						}
					}

					return this;

				// HANDLE: $(#id)
				} else {
					elem = document.getElementById( match[ 2 ] );

					if ( elem ) {

						// Inject the element directly into the jQuery object
						this[ 0 ] = elem;
						this.length = 1;
					}
					return this;
				}

			// HANDLE: $(expr, $(...))
			} else if ( !context || context.jquery ) {
				return ( context || root ).find( selector );

			// HANDLE: $(expr, context)
			// (which is just equivalent to: $(context).find(expr)
			} else {
				return this.constructor( context ).find( selector );
			}

		// HANDLE: $(DOMElement)
		} else if ( selector.nodeType ) {
			this[ 0 ] = selector;
			this.length = 1;
			return this;

		// HANDLE: $(function)
		// Shortcut for document ready
		} else if ( isFunction( selector ) ) {
			return root.ready !== undefined ?
				root.ready( selector ) :

				// Execute immediately if ready is not present
				selector( jQuery );
		}

		return jQuery.makeArray( selector, this );
	};

// Give the init function the jQuery prototype for later instantiation
init.prototype = jQuery.fn;

// Initialize central reference
rootjQuery = jQuery( document );


var rparentsprev = /^(?:parents|prev(?:Until|All))/,

	// Methods guaranteed to produce a unique set when starting from a unique set
	guaranteedUnique = {
		children: true,
		contents: true,
		next: true,
		prev: true
	};

jQuery.fn.extend( {
	has: function( target ) {
		var targets = jQuery( target, this ),
			l = targets.length;

		return this.filter( function() {
			var i = 0;
			for ( ; i < l; i++ ) {
				if ( jQuery.contains( this, targets[ i ] ) ) {
					return true;
				}
			}
		} );
	},

	closest: function( selectors, context ) {
		var cur,
			i = 0,
			l = this.length,
			matched = [],
			targets = typeof selectors !== "string" && jQuery( selectors );

		// Positional selectors never match, since there's no _selection_ context
		if ( !rneedsContext.test( selectors ) ) {
			for ( ; i < l; i++ ) {
				for ( cur = this[ i ]; cur && cur !== context; cur = cur.parentNode ) {

					// Always skip document fragments
					if ( cur.nodeType < 11 && ( targets ?
						targets.index( cur ) > -1 :

						// Don't pass non-elements to Sizzle
						cur.nodeType === 1 &&
							jQuery.find.matchesSelector( cur, selectors ) ) ) {

						matched.push( cur );
						break;
					}
				}
			}
		}

		return this.pushStack( matched.length > 1 ? jQuery.uniqueSort( matched ) : matched );
	},

	// Determine the position of an element within the set
	index: function( elem ) {

		// No argument, return index in parent
		if ( !elem ) {
			return ( this[ 0 ] && this[ 0 ].parentNode ) ? this.first().prevAll().length : -1;
		}

		// Index in selector
		if ( typeof elem === "string" ) {
			return indexOf.call( jQuery( elem ), this[ 0 ] );
		}

		// Locate the position of the desired element
		return indexOf.call( this,

			// If it receives a jQuery object, the first element is used
			elem.jquery ? elem[ 0 ] : elem
		);
	},

	add: function( selector, context ) {
		return this.pushStack(
			jQuery.uniqueSort(
				jQuery.merge( this.get(), jQuery( selector, context ) )
			)
		);
	},

	addBack: function( selector ) {
		return this.add( selector == null ?
			this.prevObject : this.prevObject.filter( selector )
		);
	}
} );

function sibling( cur, dir ) {
	while ( ( cur = cur[ dir ] ) && cur.nodeType !== 1 ) {}
	return cur;
}

jQuery.each( {
	parent: function( elem ) {
		var parent = elem.parentNode;
		return parent && parent.nodeType !== 11 ? parent : null;
	},
	parents: function( elem ) {
		return dir( elem, "parentNode" );
	},
	parentsUntil: function( elem, i, until ) {
		return dir( elem, "parentNode", until );
	},
	next: function( elem ) {
		return sibling( elem, "nextSibling" );
	},
	prev: function( elem ) {
		return sibling( elem, "previousSibling" );
	},
	nextAll: function( elem ) {
		return dir( elem, "nextSibling" );
	},
	prevAll: function( elem ) {
		return dir( elem, "previousSibling" );
	},
	nextUntil: function( elem, i, until ) {
		return dir( elem, "nextSibling", until );
	},
	prevUntil: function( elem, i, until ) {
		return dir( elem, "previousSibling", until );
	},
	siblings: function( elem ) {
		return siblings( ( elem.parentNode || {} ).firstChild, elem );
	},
	children: function( elem ) {
		return siblings( elem.firstChild );
	},
	contents: function( elem ) {
        if ( nodeName( elem, "iframe" ) ) {
            return elem.contentDocument;
        }

        // Support: IE 9 - 11 only, iOS 7 only, Android Browser <=4.3 only
        // Treat the template element as a regular one in browsers that
        // don't support it.
        if ( nodeName( elem, "template" ) ) {
            elem = elem.content || elem;
        }

        return jQuery.merge( [], elem.childNodes );
	}
}, function( name, fn ) {
	jQuery.fn[ name ] = function( until, selector ) {
		var matched = jQuery.map( this, fn, until );

		if ( name.slice( -5 ) !== "Until" ) {
			selector = until;
		}

		if ( selector && typeof selector === "string" ) {
			matched = jQuery.filter( selector, matched );
		}

		if ( this.length > 1 ) {

			// Remove duplicates
			if ( !guaranteedUnique[ name ] ) {
				jQuery.uniqueSort( matched );
			}

			// Reverse order for parents* and prev-derivatives
			if ( rparentsprev.test( name ) ) {
				matched.reverse();
			}
		}

		return this.pushStack( matched );
	};
} );
var rnothtmlwhite = ( /[^\x20\t\r\n\f]+/g );



// Convert String-formatted options into Object-formatted ones
function createOptions( options ) {
	var object = {};
	jQuery.each( options.match( rnothtmlwhite ) || [], function( _, flag ) {
		object[ flag ] = true;
	} );
	return object;
}

/*
 * Create a callback list using the following parameters:
 *
 *	options: an optional list of space-separated options that will change how
 *			the callback list behaves or a more traditional option object
 *
 * By default a callback list will act like an event callback list and can be
 * "fired" multiple times.
 *
 * Possible options:
 *
 *	once:			will ensure the callback list can only be fired once (like a Deferred)
 *
 *	memory:			will keep track of previous values and will call any callback added
 *					after the list has been fired right away with the latest "memorized"
 *					values (like a Deferred)
 *
 *	unique:			will ensure a callback can only be added once (no duplicate in the list)
 *
 *	stopOnFalse:	interrupt callings when a callback returns false
 *
 */
jQuery.Callbacks = function( options ) {

	// Convert options from String-formatted to Object-formatted if needed
	// (we check in cache first)
	options = typeof options === "string" ?
		createOptions( options ) :
		jQuery.extend( {}, options );

	var // Flag to know if list is currently firing
		firing,

		// Last fire value for non-forgettable lists
		memory,

		// Flag to know if list was already fired
		fired,

		// Flag to prevent firing
		locked,

		// Actual callback list
		list = [],

		// Queue of execution data for repeatable lists
		queue = [],

		// Index of currently firing callback (modified by add/remove as needed)
		firingIndex = -1,

		// Fire callbacks
		fire = function() {

			// Enforce single-firing
			locked = locked || options.once;

			// Execute callbacks for all pending executions,
			// respecting firingIndex overrides and runtime changes
			fired = firing = true;
			for ( ; queue.length; firingIndex = -1 ) {
				memory = queue.shift();
				while ( ++firingIndex < list.length ) {

					// Run callback and check for early termination
					if ( list[ firingIndex ].apply( memory[ 0 ], memory[ 1 ] ) === false &&
						options.stopOnFalse ) {

						// Jump to end and forget the data so .add doesn't re-fire
						firingIndex = list.length;
						memory = false;
					}
				}
			}

			// Forget the data if we're done with it
			if ( !options.memory ) {
				memory = false;
			}

			firing = false;

			// Clean up if we're done firing for good
			if ( locked ) {

				// Keep an empty list if we have data for future add calls
				if ( memory ) {
					list = [];

				// Otherwise, this object is spent
				} else {
					list = "";
				}
			}
		},

		// Actual Callbacks object
		self = {

			// Add a callback or a collection of callbacks to the list
			add: function() {
				if ( list ) {

					// If we have memory from a past run, we should fire after adding
					if ( memory && !firing ) {
						firingIndex = list.length - 1;
						queue.push( memory );
					}

					( function add( args ) {
						jQuery.each( args, function( _, arg ) {
							if ( isFunction( arg ) ) {
								if ( !options.unique || !self.has( arg ) ) {
									list.push( arg );
								}
							} else if ( arg && arg.length && toType( arg ) !== "string" ) {

								// Inspect recursively
								add( arg );
							}
						} );
					} )( arguments );

					if ( memory && !firing ) {
						fire();
					}
				}
				return this;
			},

			// Remove a callback from the list
			remove: function() {
				jQuery.each( arguments, function( _, arg ) {
					var index;
					while ( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {
						list.splice( index, 1 );

						// Handle firing indexes
						if ( index <= firingIndex ) {
							firingIndex--;
						}
					}
				} );
				return this;
			},

			// Check if a given callback is in the list.
			// If no argument is given, return whether or not list has callbacks attached.
			has: function( fn ) {
				return fn ?
					jQuery.inArray( fn, list ) > -1 :
					list.length > 0;
			},

			// Remove all callbacks from the list
			empty: function() {
				if ( list ) {
					list = [];
				}
				return this;
			},

			// Disable .fire and .add
			// Abort any current/pending executions
			// Clear all callbacks and values
			disable: function() {
				locked = queue = [];
				list = memory = "";
				return this;
			},
			disabled: function() {
				return !list;
			},

			// Disable .fire
			// Also disable .add unless we have memory (since it would have no effect)
			// Abort any pending executions
			lock: function() {
				locked = queue = [];
				if ( !memory && !firing ) {
					list = memory = "";
				}
				return this;
			},
			locked: function() {
				return !!locked;
			},

			// Call all callbacks with the given context and arguments
			fireWith: function( context, args ) {
				if ( !locked ) {
					args = args || [];
					args = [ context, args.slice ? args.slice() : args ];
					queue.push( args );
					if ( !firing ) {
						fire();
					}
				}
				return this;
			},

			// Call all the callbacks with the given arguments
			fire: function() {
				self.fireWith( this, arguments );
				return this;
			},

			// To know if the callbacks have already been called at least once
			fired: function() {
				return !!fired;
			}
		};

	return self;
};


function Identity( v ) {
	return v;
}
function Thrower( ex ) {
	throw ex;
}

function adoptValue( value, resolve, reject, noValue ) {
	var method;

	try {

		// Check for promise aspect first to privilege synchronous behavior
		if ( value && isFunction( ( method = value.promise ) ) ) {
			method.call( value ).done( resolve ).fail( reject );

		// Other thenables
		} else if ( value && isFunction( ( method = value.then ) ) ) {
			method.call( value, resolve, reject );

		// Other non-thenables
		} else {

			// Control `resolve` arguments by letting Array#slice cast boolean `noValue` to integer:
			// * false: [ value ].slice( 0 ) => resolve( value )
			// * true: [ value ].slice( 1 ) => resolve()
			resolve.apply( undefined, [ value ].slice( noValue ) );
		}

	// For Promises/A+, convert exceptions into rejections
	// Since jQuery.when doesn't unwrap thenables, we can skip the extra checks appearing in
	// Deferred#then to conditionally suppress rejection.
	} catch ( value ) {

		// Support: Android 4.0 only
		// Strict mode functions invoked without .call/.apply get global-object context
		reject.apply( undefined, [ value ] );
	}
}

jQuery.extend( {

	Deferred: function( func ) {
		var tuples = [

				// action, add listener, callbacks,
				// ... .then handlers, argument index, [final state]
				[ "notify", "progress", jQuery.Callbacks( "memory" ),
					jQuery.Callbacks( "memory" ), 2 ],
				[ "resolve", "done", jQuery.Callbacks( "once memory" ),
					jQuery.Callbacks( "once memory" ), 0, "resolved" ],
				[ "reject", "fail", jQuery.Callbacks( "once memory" ),
					jQuery.Callbacks( "once memory" ), 1, "rejected" ]
			],
			state = "pending",
			promise = {
				state: function() {
					return state;
				},
				always: function() {
					deferred.done( arguments ).fail( arguments );
					return this;
				},
				"catch": function( fn ) {
					return promise.then( null, fn );
				},

				// Keep pipe for back-compat
				pipe: function( /* fnDone, fnFail, fnProgress */ ) {
					var fns = arguments;

					return jQuery.Deferred( function( newDefer ) {
						jQuery.each( tuples, function( i, tuple ) {

							// Map tuples (progress, done, fail) to arguments (done, fail, progress)
							var fn = isFunction( fns[ tuple[ 4 ] ] ) && fns[ tuple[ 4 ] ];

							// deferred.progress(function() { bind to newDefer or newDefer.notify })
							// deferred.done(function() { bind to newDefer or newDefer.resolve })
							// deferred.fail(function() { bind to newDefer or newDefer.reject })
							deferred[ tuple[ 1 ] ]( function() {
								var returned = fn && fn.apply( this, arguments );
								if ( returned && isFunction( returned.promise ) ) {
									returned.promise()
										.progress( newDefer.notify )
										.done( newDefer.resolve )
										.fail( newDefer.reject );
								} else {
									newDefer[ tuple[ 0 ] + "With" ](
										this,
										fn ? [ returned ] : arguments
									);
								}
							} );
						} );
						fns = null;
					} ).promise();
				},
				then: function( onFulfilled, onRejected, onProgress ) {
					var maxDepth = 0;
					function resolve( depth, deferred, handler, special ) {
						return function() {
							var that = this,
								args = arguments,
								mightThrow = function() {
									var returned, then;

									// Support: Promises/A+ section 2.3.3.3.3
									// https://promisesaplus.com/#point-59
									// Ignore double-resolution attempts
									if ( depth < maxDepth ) {
										return;
									}

									returned = handler.apply( that, args );

									// Support: Promises/A+ section 2.3.1
									// https://promisesaplus.com/#point-48
									if ( returned === deferred.promise() ) {
										throw new TypeError( "Thenable self-resolution" );
									}

									// Support: Promises/A+ sections 2.3.3.1, 3.5
									// https://promisesaplus.com/#point-54
									// https://promisesaplus.com/#point-75
									// Retrieve `then` only once
									then = returned &&

										// Support: Promises/A+ section 2.3.4
										// https://promisesaplus.com/#point-64
										// Only check objects and functions for thenability
										( typeof returned === "object" ||
											typeof returned === "function" ) &&
										returned.then;

									// Handle a returned thenable
									if ( isFunction( then ) ) {

										// Special processors (notify) just wait for resolution
										if ( special ) {
											then.call(
												returned,
												resolve( maxDepth, deferred, Identity, special ),
												resolve( maxDepth, deferred, Thrower, special )
											);

										// Normal processors (resolve) also hook into progress
										} else {

											// ...and disregard older resolution values
											maxDepth++;

											then.call(
												returned,
												resolve( maxDepth, deferred, Identity, special ),
												resolve( maxDepth, deferred, Thrower, special ),
												resolve( maxDepth, deferred, Identity,
													deferred.notifyWith )
											);
										}

									// Handle all other returned values
									} else {

										// Only substitute handlers pass on context
										// and multiple values (non-spec behavior)
										if ( handler !== Identity ) {
											that = undefined;
											args = [ returned ];
										}

										// Process the value(s)
										// Default process is resolve
										( special || deferred.resolveWith )( that, args );
									}
								},

								// Only normal processors (resolve) catch and reject exceptions
								process = special ?
									mightThrow :
									function() {
										try {
											mightThrow();
										} catch ( e ) {

											if ( jQuery.Deferred.exceptionHook ) {
												jQuery.Deferred.exceptionHook( e,
													process.stackTrace );
											}

											// Support: Promises/A+ section 2.3.3.3.4.1
											// https://promisesaplus.com/#point-61
											// Ignore post-resolution exceptions
											if ( depth + 1 >= maxDepth ) {

												// Only substitute handlers pass on context
												// and multiple values (non-spec behavior)
												if ( handler !== Thrower ) {
													that = undefined;
													args = [ e ];
												}

												deferred.rejectWith( that, args );
											}
										}
									};

							// Support: Promises/A+ section 2.3.3.3.1
							// https://promisesaplus.com/#point-57
							// Re-resolve promises immediately to dodge false rejection from
							// subsequent errors
							if ( depth ) {
								process();
							} else {

								// Call an optional hook to record the stack, in case of exception
								// since it's otherwise lost when execution goes async
								if ( jQuery.Deferred.getStackHook ) {
									process.stackTrace = jQuery.Deferred.getStackHook();
								}
								window.setTimeout( process );
							}
						};
					}

					return jQuery.Deferred( function( newDefer ) {

						// progress_handlers.add( ... )
						tuples[ 0 ][ 3 ].add(
							resolve(
								0,
								newDefer,
								isFunction( onProgress ) ?
									onProgress :
									Identity,
								newDefer.notifyWith
							)
						);

						// fulfilled_handlers.add( ... )
						tuples[ 1 ][ 3 ].add(
							resolve(
								0,
								newDefer,
								isFunction( onFulfilled ) ?
									onFulfilled :
									Identity
							)
						);

						// rejected_handlers.add( ... )
						tuples[ 2 ][ 3 ].add(
							resolve(
								0,
								newDefer,
								isFunction( onRejected ) ?
									onRejected :
									Thrower
							)
						);
					} ).promise();
				},

				// Get a promise for this deferred
				// If obj is provided, the promise aspect is added to the object
				promise: function( obj ) {
					return obj != null ? jQuery.extend( obj, promise ) : promise;
				}
			},
			deferred = {};

		// Add list-specific methods
		jQuery.each( tuples, function( i, tuple ) {
			var list = tuple[ 2 ],
				stateString = tuple[ 5 ];

			// promise.progress = list.add
			// promise.done = list.add
			// promise.fail = list.add
			promise[ tuple[ 1 ] ] = list.add;

			// Handle state
			if ( stateString ) {
				list.add(
					function() {

						// state = "resolved" (i.e., fulfilled)
						// state = "rejected"
						state = stateString;
					},

					// rejected_callbacks.disable
					// fulfilled_callbacks.disable
					tuples[ 3 - i ][ 2 ].disable,

					// rejected_handlers.disable
					// fulfilled_handlers.disable
					tuples[ 3 - i ][ 3 ].disable,

					// progress_callbacks.lock
					tuples[ 0 ][ 2 ].lock,

					// progress_handlers.lock
					tuples[ 0 ][ 3 ].lock
				);
			}

			// progress_handlers.fire
			// fulfilled_handlers.fire
			// rejected_handlers.fire
			list.add( tuple[ 3 ].fire );

			// deferred.notify = function() { deferred.notifyWith(...) }
			// deferred.resolve = function() { deferred.resolveWith(...) }
			// deferred.reject = function() { deferred.rejectWith(...) }
			deferred[ tuple[ 0 ] ] = function() {
				deferred[ tuple[ 0 ] + "With" ]( this === deferred ? undefined : this, arguments );
				return this;
			};

			// deferred.notifyWith = list.fireWith
			// deferred.resolveWith = list.fireWith
			// deferred.rejectWith = list.fireWith
			deferred[ tuple[ 0 ] + "With" ] = list.fireWith;
		} );

		// Make the deferred a promise
		promise.promise( deferred );

		// Call given func if any
		if ( func ) {
			func.call( deferred, deferred );
		}

		// All done!
		return deferred;
	},

	// Deferred helper
	when: function( singleValue ) {
		var

			// count of uncompleted subordinates
			remaining = arguments.length,

			// count of unprocessed arguments
			i = remaining,

			// subordinate fulfillment data
			resolveContexts = Array( i ),
			resolveValues = slice.call( arguments ),

			// the master Deferred
			master = jQuery.Deferred(),

			// subordinate callback factory
			updateFunc = function( i ) {
				return function( value ) {
					resolveContexts[ i ] = this;
					resolveValues[ i ] = arguments.length > 1 ? slice.call( arguments ) : value;
					if ( !( --remaining ) ) {
						master.resolveWith( resolveContexts, resolveValues );
					}
				};
			};

		// Single- and empty arguments are adopted like Promise.resolve
		if ( remaining <= 1 ) {
			adoptValue( singleValue, master.done( updateFunc( i ) ).resolve, master.reject,
				!remaining );

			// Use .then() to unwrap secondary thenables (cf. gh-3000)
			if ( master.state() === "pending" ||
				isFunction( resolveValues[ i ] && resolveValues[ i ].then ) ) {

				return master.then();
			}
		}

		// Multiple arguments are aggregated like Promise.all array elements
		while ( i-- ) {
			adoptValue( resolveValues[ i ], updateFunc( i ), master.reject );
		}

		return master.promise();
	}
} );


// These usually indicate a programmer mistake during development,
// warn about them ASAP rather than swallowing them by default.
var rerrorNames = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;

jQuery.Deferred.exceptionHook = function( error, stack ) {

	// Support: IE 8 - 9 only
	// Console exists when dev tools are open, which can happen at any time
	if ( window.console && window.console.warn && error && rerrorNames.test( error.name ) ) {
		window.console.warn( "jQuery.Deferred exception: " + error.message, error.stack, stack );
	}
};




jQuery.readyException = function( error ) {
	window.setTimeout( function() {
		throw error;
	} );
};




// The deferred used on DOM ready
var readyList = jQuery.Deferred();

jQuery.fn.ready = function( fn ) {

	readyList
		.then( fn )

		// Wrap jQuery.readyException in a function so that the lookup
		// happens at the time of error handling instead of callback
		// registration.
		.catch( function( error ) {
			jQuery.readyException( error );
		} );

	return this;
};

jQuery.extend( {

	// Is the DOM ready to be used? Set to true once it occurs.
	isReady: false,

	// A counter to track how many items to wait for before
	// the ready event fires. See #6781
	readyWait: 1,

	// Handle when the DOM is ready
	ready: function( wait ) {

		// Abort if there are pending holds or we're already ready
		if ( wait === true ? --jQuery.readyWait : jQuery.isReady ) {
			return;
		}

		// Remember that the DOM is ready
		jQuery.isReady = true;

		// If a normal DOM Ready event fired, decrement, and wait if need be
		if ( wait !== true && --jQuery.readyWait > 0 ) {
			return;
		}

		// If there are functions bound, to execute
		readyList.resolveWith( document, [ jQuery ] );
	}
} );

jQuery.ready.then = readyList.then;

// The ready event handler and self cleanup method
function completed() {
	document.removeEventListener( "DOMContentLoaded", completed );
	window.removeEventListener( "load", completed );
	jQuery.ready();
}

// Catch cases where $(document).ready() is called
// after the browser event has already occurred.
// Support: IE <=9 - 10 only
// Older IE sometimes signals "interactive" too soon
if ( document.readyState === "complete" ||
	( document.readyState !== "loading" && !document.documentElement.doScroll ) ) {

	// Handle it asynchronously to allow scripts the opportunity to delay ready
	window.setTimeout( jQuery.ready );

} else {

	// Use the handy event callback
	document.addEventListener( "DOMContentLoaded", completed );

	// A fallback to window.onload, that will always work
	window.addEventListener( "load", completed );
}




// Multifunctional method to get and set values of a collection
// The value/s can optionally be executed if it's a function
var access = function( elems, fn, key, value, chainable, emptyGet, raw ) {
	var i = 0,
		len = elems.length,
		bulk = key == null;

	// Sets many values
	if ( toType( key ) === "object" ) {
		chainable = true;
		for ( i in key ) {
			access( elems, fn, i, key[ i ], true, emptyGet, raw );
		}

	// Sets one value
	} else if ( value !== undefined ) {
		chainable = true;

		if ( !isFunction( value ) ) {
			raw = true;
		}

		if ( bulk ) {

			// Bulk operations run against the entire set
			if ( raw ) {
				fn.call( elems, value );
				fn = null;

			// ...except when executing function values
			} else {
				bulk = fn;
				fn = function( elem, key, value ) {
					return bulk.call( jQuery( elem ), value );
				};
			}
		}

		if ( fn ) {
			for ( ; i < len; i++ ) {
				fn(
					elems[ i ], key, raw ?
					value :
					value.call( elems[ i ], i, fn( elems[ i ], key ) )
				);
			}
		}
	}

	if ( chainable ) {
		return elems;
	}

	// Gets
	if ( bulk ) {
		return fn.call( elems );
	}

	return len ? fn( elems[ 0 ], key ) : emptyGet;
};


// Matches dashed string for camelizing
var rmsPrefix = /^-ms-/,
	rdashAlpha = /-([a-z])/g;

// Used by camelCase as callback to replace()
function fcamelCase( all, letter ) {
	return letter.toUpperCase();
}

// Convert dashed to camelCase; used by the css and data modules
// Support: IE <=9 - 11, Edge 12 - 15
// Microsoft forgot to hump their vendor prefix (#9572)
function camelCase( string ) {
	return string.replace( rmsPrefix, "ms-" ).replace( rdashAlpha, fcamelCase );
}
var acceptData = function( owner ) {

	// Accepts only:
	//  - Node
	//    - Node.ELEMENT_NODE
	//    - Node.DOCUMENT_NODE
	//  - Object
	//    - Any
	return owner.nodeType === 1 || owner.nodeType === 9 || !( +owner.nodeType );
};




function Data() {
	this.expando = jQuery.expando + Data.uid++;
}

Data.uid = 1;

Data.prototype = {

	cache: function( owner ) {

		// Check if the owner object already has a cache
		var value = owner[ this.expando ];

		// If not, create one
		if ( !value ) {
			value = {};

			// We can accept data for non-element nodes in modern browsers,
			// but we should not, see #8335.
			// Always return an empty object.
			if ( acceptData( owner ) ) {

				// If it is a node unlikely to be stringify-ed or looped over
				// use plain assignment
				if ( owner.nodeType ) {
					owner[ this.expando ] = value;

				// Otherwise secure it in a non-enumerable property
				// configurable must be true to allow the property to be
				// deleted when data is removed
				} else {
					Object.defineProperty( owner, this.expando, {
						value: value,
						configurable: true
					} );
				}
			}
		}

		return value;
	},
	set: function( owner, data, value ) {
		var prop,
			cache = this.cache( owner );

		// Handle: [ owner, key, value ] args
		// Always use camelCase key (gh-2257)
		if ( typeof data === "string" ) {
			cache[ camelCase( data ) ] = value;

		// Handle: [ owner, { properties } ] args
		} else {

			// Copy the properties one-by-one to the cache object
			for ( prop in data ) {
				cache[ camelCase( prop ) ] = data[ prop ];
			}
		}
		return cache;
	},
	get: function( owner, key ) {
		return key === undefined ?
			this.cache( owner ) :

			// Always use camelCase key (gh-2257)
			owner[ this.expando ] && owner[ this.expando ][ camelCase( key ) ];
	},
	access: function( owner, key, value ) {

		// In cases where either:
		//
		//   1. No key was specified
		//   2. A string key was specified, but no value provided
		//
		// Take the "read" path and allow the get method to determine
		// which value to return, respectively either:
		//
		//   1. The entire cache object
		//   2. The data stored at the key
		//
		if ( key === undefined ||
				( ( key && typeof key === "string" ) && value === undefined ) ) {

			return this.get( owner, key );
		}

		// When the key is not a string, or both a key and value
		// are specified, set or extend (existing objects) with either:
		//
		//   1. An object of properties
		//   2. A key and value
		//
		this.set( owner, key, value );

		// Since the "set" path can have two possible entry points
		// return the expected data based on which path was taken[*]
		return value !== undefined ? value : key;
	},
	remove: function( owner, key ) {
		var i,
			cache = owner[ this.expando ];

		if ( cache === undefined ) {
			return;
		}

		if ( key !== undefined ) {

			// Support array or space separated string of keys
			if ( Array.isArray( key ) ) {

				// If key is an array of keys...
				// We always set camelCase keys, so remove that.
				key = key.map( camelCase );
			} else {
				key = camelCase( key );

				// If a key with the spaces exists, use it.
				// Otherwise, create an array by matching non-whitespace
				key = key in cache ?
					[ key ] :
					( key.match( rnothtmlwhite ) || [] );
			}

			i = key.length;

			while ( i-- ) {
				delete cache[ key[ i ] ];
			}
		}

		// Remove the expando if there's no more data
		if ( key === undefined || jQuery.isEmptyObject( cache ) ) {

			// Support: Chrome <=35 - 45
			// Webkit & Blink performance suffers when deleting properties
			// from DOM nodes, so set to undefined instead
			// https://bugs.chromium.org/p/chromium/issues/detail?id=378607 (bug restricted)
			if ( owner.nodeType ) {
				owner[ this.expando ] = undefined;
			} else {
				delete owner[ this.expando ];
			}
		}
	},
	hasData: function( owner ) {
		var cache = owner[ this.expando ];
		return cache !== undefined && !jQuery.isEmptyObject( cache );
	}
};
var dataPriv = new Data();

var dataUser = new Data();



//	Implementation Summary
//
//	1. Enforce API surface and semantic compatibility with 1.9.x branch
//	2. Improve the module's maintainability by reducing the storage
//		paths to a single mechanism.
//	3. Use the same single mechanism to support "private" and "user" data.
//	4. _Never_ expose "private" data to user code (TODO: Drop _data, _removeData)
//	5. Avoid exposing implementation details on user objects (eg. expando properties)
//	6. Provide a clear path for implementation upgrade to WeakMap in 2014

var rbrace = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
	rmultiDash = /[A-Z]/g;

function getData( data ) {
	if ( data === "true" ) {
		return true;
	}

	if ( data === "false" ) {
		return false;
	}

	if ( data === "null" ) {
		return null;
	}

	// Only convert to a number if it doesn't change the string
	if ( data === +data + "" ) {
		return +data;
	}

	if ( rbrace.test( data ) ) {
		return JSON.parse( data );
	}

	return data;
}

function dataAttr( elem, key, data ) {
	var name;

	// If nothing was found internally, try to fetch any
	// data from the HTML5 data-* attribute
	if ( data === undefined && elem.nodeType === 1 ) {
		name = "data-" + key.replace( rmultiDash, "-$&" ).toLowerCase();
		data = elem.getAttribute( name );

		if ( typeof data === "string" ) {
			try {
				data = getData( data );
			} catch ( e ) {}

			// Make sure we set the data so it isn't changed later
			dataUser.set( elem, key, data );
		} else {
			data = undefined;
		}
	}
	return data;
}

jQuery.extend( {
	hasData: function( elem ) {
		return dataUser.hasData( elem ) || dataPriv.hasData( elem );
	},

	data: function( elem, name, data ) {
		return dataUser.access( elem, name, data );
	},

	removeData: function( elem, name ) {
		dataUser.remove( elem, name );
	},

	// TODO: Now that all calls to _data and _removeData have been replaced
	// with direct calls to dataPriv methods, these can be deprecated.
	_data: function( elem, name, data ) {
		return dataPriv.access( elem, name, data );
	},

	_removeData: function( elem, name ) {
		dataPriv.remove( elem, name );
	}
} );

jQuery.fn.extend( {
	data: function( key, value ) {
		var i, name, data,
			elem = this[ 0 ],
			attrs = elem && elem.attributes;

		// Gets all values
		if ( key === undefined ) {
			if ( this.length ) {
				data = dataUser.get( elem );

				if ( elem.nodeType === 1 && !dataPriv.get( elem, "hasDataAttrs" ) ) {
					i = attrs.length;
					while ( i-- ) {

						// Support: IE 11 only
						// The attrs elements can be null (#14894)
						if ( attrs[ i ] ) {
							name = attrs[ i ].name;
							if ( name.indexOf( "data-" ) === 0 ) {
								name = camelCase( name.slice( 5 ) );
								dataAttr( elem, name, data[ name ] );
							}
						}
					}
					dataPriv.set( elem, "hasDataAttrs", true );
				}
			}

			return data;
		}

		// Sets multiple values
		if ( typeof key === "object" ) {
			return this.each( function() {
				dataUser.set( this, key );
			} );
		}

		return access( this, function( value ) {
			var data;

			// The calling jQuery object (element matches) is not empty
			// (and therefore has an element appears at this[ 0 ]) and the
			// `value` parameter was not undefined. An empty jQuery object
			// will result in `undefined` for elem = this[ 0 ] which will
			// throw an exception if an attempt to read a data cache is made.
			if ( elem && value === undefined ) {

				// Attempt to get data from the cache
				// The key will always be camelCased in Data
				data = dataUser.get( elem, key );
				if ( data !== undefined ) {
					return data;
				}

				// Attempt to "discover" the data in
				// HTML5 custom data-* attrs
				data = dataAttr( elem, key );
				if ( data !== undefined ) {
					return data;
				}

				// We tried really hard, but the data doesn't exist.
				return;
			}

			// Set the data...
			this.each( function() {

				// We always store the camelCased key
				dataUser.set( this, key, value );
			} );
		}, null, value, arguments.length > 1, null, true );
	},

	removeData: function( key ) {
		return this.each( function() {
			dataUser.remove( this, key );
		} );
	}
} );


jQuery.extend( {
	queue: function( elem, type, data ) {
		var queue;

		if ( elem ) {
			type = ( type || "fx" ) + "queue";
			queue = dataPriv.get( elem, type );

			// Speed up dequeue by getting out quickly if this is just a lookup
			if ( data ) {
				if ( !queue || Array.isArray( data ) ) {
					queue = dataPriv.access( elem, type, jQuery.makeArray( data ) );
				} else {
					queue.push( data );
				}
			}
			return queue || [];
		}
	},

	dequeue: function( elem, type ) {
		type = type || "fx";

		var queue = jQuery.queue( elem, type ),
			startLength = queue.length,
			fn = queue.shift(),
			hooks = jQuery._queueHooks( elem, type ),
			next = function() {
				jQuery.dequeue( elem, type );
			};

		// If the fx queue is dequeued, always remove the progress sentinel
		if ( fn === "inprogress" ) {
			fn = queue.shift();
			startLength--;
		}

		if ( fn ) {

			// Add a progress sentinel to prevent the fx queue from being
			// automatically dequeued
			if ( type === "fx" ) {
				queue.unshift( "inprogress" );
			}

			// Clear up the last queue stop function
			delete hooks.stop;
			fn.call( elem, next, hooks );
		}

		if ( !startLength && hooks ) {
			hooks.empty.fire();
		}
	},

	// Not public - generate a queueHooks object, or return the current one
	_queueHooks: function( elem, type ) {
		var key = type + "queueHooks";
		return dataPriv.get( elem, key ) || dataPriv.access( elem, key, {
			empty: jQuery.Callbacks( "once memory" ).add( function() {
				dataPriv.remove( elem, [ type + "queue", key ] );
			} )
		} );
	}
} );

jQuery.fn.extend( {
	queue: function( type, data ) {
		var setter = 2;

		if ( typeof type !== "string" ) {
			data = type;
			type = "fx";
			setter--;
		}

		if ( arguments.length < setter ) {
			return jQuery.queue( this[ 0 ], type );
		}

		return data === undefined ?
			this :
			this.each( function() {
				var queue = jQuery.queue( this, type, data );

				// Ensure a hooks for this queue
				jQuery._queueHooks( this, type );

				if ( type === "fx" && queue[ 0 ] !== "inprogress" ) {
					jQuery.dequeue( this, type );
				}
			} );
	},
	dequeue: function( type ) {
		return this.each( function() {
			jQuery.dequeue( this, type );
		} );
	},
	clearQueue: function( type ) {
		return this.queue( type || "fx", [] );
	},

	// Get a promise resolved when queues of a certain type
	// are emptied (fx is the type by default)
	promise: function( type, obj ) {
		var tmp,
			count = 1,
			defer = jQuery.Deferred(),
			elements = this,
			i = this.length,
			resolve = function() {
				if ( !( --count ) ) {
					defer.resolveWith( elements, [ elements ] );
				}
			};

		if ( typeof type !== "string" ) {
			obj = type;
			type = undefined;
		}
		type = type || "fx";

		while ( i-- ) {
			tmp = dataPriv.get( elements[ i ], type + "queueHooks" );
			if ( tmp && tmp.empty ) {
				count++;
				tmp.empty.add( resolve );
			}
		}
		resolve();
		return defer.promise( obj );
	}
} );
var pnum = ( /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/ ).source;

var rcssNum = new RegExp( "^(?:([+-])=|)(" + pnum + ")([a-z%]*)$", "i" );


var cssExpand = [ "Top", "Right", "Bottom", "Left" ];

var isHiddenWithinTree = function( elem, el ) {

		// isHiddenWithinTree might be called from jQuery#filter function;
		// in that case, element will be second argument
		elem = el || elem;

		// Inline style trumps all
		return elem.style.display === "none" ||
			elem.style.display === "" &&

			// Otherwise, check computed style
			// Support: Firefox <=43 - 45
			// Disconnected elements can have computed display: none, so first confirm that elem is
			// in the document.
			jQuery.contains( elem.ownerDocument, elem ) &&

			jQuery.css( elem, "display" ) === "none";
	};

var swap = function( elem, options, callback, args ) {
	var ret, name,
		old = {};

	// Remember the old values, and insert the new ones
	for ( name in options ) {
		old[ name ] = elem.style[ name ];
		elem.style[ name ] = options[ name ];
	}

	ret = callback.apply( elem, args || [] );

	// Revert the old values
	for ( name in options ) {
		elem.style[ name ] = old[ name ];
	}

	return ret;
};




function adjustCSS( elem, prop, valueParts, tween ) {
	var adjusted, scale,
		maxIterations = 20,
		currentValue = tween ?
			function() {
				return tween.cur();
			} :
			function() {
				return jQuery.css( elem, prop, "" );
			},
		initial = currentValue(),
		unit = valueParts && valueParts[ 3 ] || ( jQuery.cssNumber[ prop ] ? "" : "px" ),

		// Starting value computation is required for potential unit mismatches
		initialInUnit = ( jQuery.cssNumber[ prop ] || unit !== "px" && +initial ) &&
			rcssNum.exec( jQuery.css( elem, prop ) );

	if ( initialInUnit && initialInUnit[ 3 ] !== unit ) {

		// Support: Firefox <=54
		// Halve the iteration target value to prevent interference from CSS upper bounds (gh-2144)
		initial = initial / 2;

		// Trust units reported by jQuery.css
		unit = unit || initialInUnit[ 3 ];

		// Iteratively approximate from a nonzero starting point
		initialInUnit = +initial || 1;

		while ( maxIterations-- ) {

			// Evaluate and update our best guess (doubling guesses that zero out).
			// Finish if the scale equals or crosses 1 (making the old*new product non-positive).
			jQuery.style( elem, prop, initialInUnit + unit );
			if ( ( 1 - scale ) * ( 1 - ( scale = currentValue() / initial || 0.5 ) ) <= 0 ) {
				maxIterations = 0;
			}
			initialInUnit = initialInUnit / scale;

		}

		initialInUnit = initialInUnit * 2;
		jQuery.style( elem, prop, initialInUnit + unit );

		// Make sure we update the tween properties later on
		valueParts = valueParts || [];
	}

	if ( valueParts ) {
		initialInUnit = +initialInUnit || +initial || 0;

		// Apply relative offset (+=/-=) if specified
		adjusted = valueParts[ 1 ] ?
			initialInUnit + ( valueParts[ 1 ] + 1 ) * valueParts[ 2 ] :
			+valueParts[ 2 ];
		if ( tween ) {
			tween.unit = unit;
			tween.start = initialInUnit;
			tween.end = adjusted;
		}
	}
	return adjusted;
}


var defaultDisplayMap = {};

function getDefaultDisplay( elem ) {
	var temp,
		doc = elem.ownerDocument,
		nodeName = elem.nodeName,
		display = defaultDisplayMap[ nodeName ];

	if ( display ) {
		return display;
	}

	temp = doc.body.appendChild( doc.createElement( nodeName ) );
	display = jQuery.css( temp, "display" );

	temp.parentNode.removeChild( temp );

	if ( display === "none" ) {
		display = "block";
	}
	defaultDisplayMap[ nodeName ] = display;

	return display;
}

function showHide( elements, show ) {
	var display, elem,
		values = [],
		index = 0,
		length = elements.length;

	// Determine new display value for elements that need to change
	for ( ; index < length; index++ ) {
		elem = elements[ index ];
		if ( !elem.style ) {
			continue;
		}

		display = elem.style.display;
		if ( show ) {

			// Since we force visibility upon cascade-hidden elements, an immediate (and slow)
			// check is required in this first loop unless we have a nonempty display value (either
			// inline or about-to-be-restored)
			if ( display === "none" ) {
				values[ index ] = dataPriv.get( elem, "display" ) || null;
				if ( !values[ index ] ) {
					elem.style.display = "";
				}
			}
			if ( elem.style.display === "" && isHiddenWithinTree( elem ) ) {
				values[ index ] = getDefaultDisplay( elem );
			}
		} else {
			if ( display !== "none" ) {
				values[ index ] = "none";

				// Remember what we're overwriting
				dataPriv.set( elem, "display", display );
			}
		}
	}

	// Set the display of the elements in a second loop to avoid constant reflow
	for ( index = 0; index < length; index++ ) {
		if ( values[ index ] != null ) {
			elements[ index ].style.display = values[ index ];
		}
	}

	return elements;
}

jQuery.fn.extend( {
	show: function() {
		return showHide( this, true );
	},
	hide: function() {
		return showHide( this );
	},
	toggle: function( state ) {
		if ( typeof state === "boolean" ) {
			return state ? this.show() : this.hide();
		}

		return this.each( function() {
			if ( isHiddenWithinTree( this ) ) {
				jQuery( this ).show();
			} else {
				jQuery( this ).hide();
			}
		} );
	}
} );
var rcheckableType = ( /^(?:checkbox|radio)$/i );

var rtagName = ( /<([a-z][^\/\0>\x20\t\r\n\f]+)/i );

var rscriptType = ( /^$|^module$|\/(?:java|ecma)script/i );



// We have to close these tags to support XHTML (#13200)
var wrapMap = {

	// Support: IE <=9 only
	option: [ 1, "<select multiple='multiple'>", "</select>" ],

	// XHTML parsers do not magically insert elements in the
	// same way that tag soup parsers do. So we cannot shorten
	// this by omitting <tbody> or other required elements.
	thead: [ 1, "<table>", "</table>" ],
	col: [ 2, "<table><colgroup>", "</colgroup></table>" ],
	tr: [ 2, "<table><tbody>", "</tbody></table>" ],
	td: [ 3, "<table><tbody><tr>", "</tr></tbody></table>" ],

	_default: [ 0, "", "" ]
};

// Support: IE <=9 only
wrapMap.optgroup = wrapMap.option;

wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
wrapMap.th = wrapMap.td;


function getAll( context, tag ) {

	// Support: IE <=9 - 11 only
	// Use typeof to avoid zero-argument method invocation on host objects (#15151)
	var ret;

	if ( typeof context.getElementsByTagName !== "undefined" ) {
		ret = context.getElementsByTagName( tag || "*" );

	} else if ( typeof context.querySelectorAll !== "undefined" ) {
		ret = context.querySelectorAll( tag || "*" );

	} else {
		ret = [];
	}

	if ( tag === undefined || tag && nodeName( context, tag ) ) {
		return jQuery.merge( [ context ], ret );
	}

	return ret;
}


// Mark scripts as having already been evaluated
function setGlobalEval( elems, refElements ) {
	var i = 0,
		l = elems.length;

	for ( ; i < l; i++ ) {
		dataPriv.set(
			elems[ i ],
			"globalEval",
			!refElements || dataPriv.get( refElements[ i ], "globalEval" )
		);
	}
}


var rhtml = /<|&#?\w+;/;

function buildFragment( elems, context, scripts, selection, ignored ) {
	var elem, tmp, tag, wrap, contains, j,
		fragment = context.createDocumentFragment(),
		nodes = [],
		i = 0,
		l = elems.length;

	for ( ; i < l; i++ ) {
		elem = elems[ i ];

		if ( elem || elem === 0 ) {

			// Add nodes directly
			if ( toType( elem ) === "object" ) {

				// Support: Android <=4.0 only, PhantomJS 1 only
				// push.apply(_, arraylike) throws on ancient WebKit
				jQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );

			// Convert non-html into a text node
			} else if ( !rhtml.test( elem ) ) {
				nodes.push( context.createTextNode( elem ) );

			// Convert html into DOM nodes
			} else {
				tmp = tmp || fragment.appendChild( context.createElement( "div" ) );

				// Deserialize a standard representation
				tag = ( rtagName.exec( elem ) || [ "", "" ] )[ 1 ].toLowerCase();
				wrap = wrapMap[ tag ] || wrapMap._default;
				tmp.innerHTML = wrap[ 1 ] + jQuery.htmlPrefilter( elem ) + wrap[ 2 ];

				// Descend through wrappers to the right content
				j = wrap[ 0 ];
				while ( j-- ) {
					tmp = tmp.lastChild;
				}

				// Support: Android <=4.0 only, PhantomJS 1 only
				// push.apply(_, arraylike) throws on ancient WebKit
				jQuery.merge( nodes, tmp.childNodes );

				// Remember the top-level container
				tmp = fragment.firstChild;

				// Ensure the created nodes are orphaned (#12392)
				tmp.textContent = "";
			}
		}
	}

	// Remove wrapper from fragment
	fragment.textContent = "";

	i = 0;
	while ( ( elem = nodes[ i++ ] ) ) {

		// Skip elements already in the context collection (trac-4087)
		if ( selection && jQuery.inArray( elem, selection ) > -1 ) {
			if ( ignored ) {
				ignored.push( elem );
			}
			continue;
		}

		contains = jQuery.contains( elem.ownerDocument, elem );

		// Append to fragment
		tmp = getAll( fragment.appendChild( elem ), "script" );

		// Preserve script evaluation history
		if ( contains ) {
			setGlobalEval( tmp );
		}

		// Capture executables
		if ( scripts ) {
			j = 0;
			while ( ( elem = tmp[ j++ ] ) ) {
				if ( rscriptType.test( elem.type || "" ) ) {
					scripts.push( elem );
				}
			}
		}
	}

	return fragment;
}


( function() {
	var fragment = document.createDocumentFragment(),
		div = fragment.appendChild( document.createElement( "div" ) ),
		input = document.createElement( "input" );

	// Support: Android 4.0 - 4.3 only
	// Check state lost if the name is set (#11217)
	// Support: Windows Web Apps (WWA)
	// `name` and `type` must use .setAttribute for WWA (#14901)
	input.setAttribute( "type", "radio" );
	input.setAttribute( "checked", "checked" );
	input.setAttribute( "name", "t" );

	div.appendChild( input );

	// Support: Android <=4.1 only
	// Older WebKit doesn't clone checked state correctly in fragments
	support.checkClone = div.cloneNode( true ).cloneNode( true ).lastChild.checked;

	// Support: IE <=11 only
	// Make sure textarea (and checkbox) defaultValue is properly cloned
	div.innerHTML = "<textarea>x</textarea>";
	support.noCloneChecked = !!div.cloneNode( true ).lastChild.defaultValue;
} )();
var documentElement = document.documentElement;



var
	rkeyEvent = /^key/,
	rmouseEvent = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
	rtypenamespace = /^([^.]*)(?:\.(.+)|)/;

function returnTrue() {
	return true;
}

function returnFalse() {
	return false;
}

// Support: IE <=9 only
// See #13393 for more info
function safeActiveElement() {
	try {
		return document.activeElement;
	} catch ( err ) { }
}

function on( elem, types, selector, data, fn, one ) {
	var origFn, type;

	// Types can be a map of types/handlers
	if ( typeof types === "object" ) {

		// ( types-Object, selector, data )
		if ( typeof selector !== "string" ) {

			// ( types-Object, data )
			data = data || selector;
			selector = undefined;
		}
		for ( type in types ) {
			on( elem, type, selector, data, types[ type ], one );
		}
		return elem;
	}

	if ( data == null && fn == null ) {

		// ( types, fn )
		fn = selector;
		data = selector = undefined;
	} else if ( fn == null ) {
		if ( typeof selector === "string" ) {

			// ( types, selector, fn )
			fn = data;
			data = undefined;
		} else {

			// ( types, data, fn )
			fn = data;
			data = selector;
			selector = undefined;
		}
	}
	if ( fn === false ) {
		fn = returnFalse;
	} else if ( !fn ) {
		return elem;
	}

	if ( one === 1 ) {
		origFn = fn;
		fn = function( event ) {

			// Can use an empty set, since event contains the info
			jQuery().off( event );
			return origFn.apply( this, arguments );
		};

		// Use same guid so caller can remove using origFn
		fn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
	}
	return elem.each( function() {
		jQuery.event.add( this, types, fn, data, selector );
	} );
}

/*
 * Helper functions for managing events -- not part of the public interface.
 * Props to Dean Edwards' addEvent library for many of the ideas.
 */
jQuery.event = {

	global: {},

	add: function( elem, types, handler, data, selector ) {

		var handleObjIn, eventHandle, tmp,
			events, t, handleObj,
			special, handlers, type, namespaces, origType,
			elemData = dataPriv.get( elem );

		// Don't attach events to noData or text/comment nodes (but allow plain objects)
		if ( !elemData ) {
			return;
		}

		// Caller can pass in an object of custom data in lieu of the handler
		if ( handler.handler ) {
			handleObjIn = handler;
			handler = handleObjIn.handler;
			selector = handleObjIn.selector;
		}

		// Ensure that invalid selectors throw exceptions at attach time
		// Evaluate against documentElement in case elem is a non-element node (e.g., document)
		if ( selector ) {
			jQuery.find.matchesSelector( documentElement, selector );
		}

		// Make sure that the handler has a unique ID, used to find/remove it later
		if ( !handler.guid ) {
			handler.guid = jQuery.guid++;
		}

		// Init the element's event structure and main handler, if this is the first
		if ( !( events = elemData.events ) ) {
			events = elemData.events = {};
		}
		if ( !( eventHandle = elemData.handle ) ) {
			eventHandle = elemData.handle = function( e ) {

				// Discard the second event of a jQuery.event.trigger() and
				// when an event is called after a page has unloaded
				return typeof jQuery !== "undefined" && jQuery.event.triggered !== e.type ?
					jQuery.event.dispatch.apply( elem, arguments ) : undefined;
			};
		}

		// Handle multiple events separated by a space
		types = ( types || "" ).match( rnothtmlwhite ) || [ "" ];
		t = types.length;
		while ( t-- ) {
			tmp = rtypenamespace.exec( types[ t ] ) || [];
			type = origType = tmp[ 1 ];
			namespaces = ( tmp[ 2 ] || "" ).split( "." ).sort();

			// There *must* be a type, no attaching namespace-only handlers
			if ( !type ) {
				continue;
			}

			// If event changes its type, use the special event handlers for the changed type
			special = jQuery.event.special[ type ] || {};

			// If selector defined, determine special event api type, otherwise given type
			type = ( selector ? special.delegateType : special.bindType ) || type;

			// Update special based on newly reset type
			special = jQuery.event.special[ type ] || {};

			// handleObj is passed to all event handlers
			handleObj = jQuery.extend( {
				type: type,
				origType: origType,
				data: data,
				handler: handler,
				guid: handler.guid,
				selector: selector,
				needsContext: selector && jQuery.expr.match.needsContext.test( selector ),
				namespace: namespaces.join( "." )
			}, handleObjIn );

			// Init the event handler queue if we're the first
			if ( !( handlers = events[ type ] ) ) {
				handlers = events[ type ] = [];
				handlers.delegateCount = 0;

				// Only use addEventListener if the special events handler returns false
				if ( !special.setup ||
					special.setup.call( elem, data, namespaces, eventHandle ) === false ) {

					if ( elem.addEventListener ) {
						elem.addEventListener( type, eventHandle );
					}
				}
			}

			if ( special.add ) {
				special.add.call( elem, handleObj );

				if ( !handleObj.handler.guid ) {
					handleObj.handler.guid = handler.guid;
				}
			}

			// Add to the element's handler list, delegates in front
			if ( selector ) {
				handlers.splice( handlers.delegateCount++, 0, handleObj );
			} else {
				handlers.push( handleObj );
			}

			// Keep track of which events have ever been used, for event optimization
			jQuery.event.global[ type ] = true;
		}

	},

	// Detach an event or set of events from an element
	remove: function( elem, types, handler, selector, mappedTypes ) {

		var j, origCount, tmp,
			events, t, handleObj,
			special, handlers, type, namespaces, origType,
			elemData = dataPriv.hasData( elem ) && dataPriv.get( elem );

		if ( !elemData || !( events = elemData.events ) ) {
			return;
		}

		// Once for each type.namespace in types; type may be omitted
		types = ( types || "" ).match( rnothtmlwhite ) || [ "" ];
		t = types.length;
		while ( t-- ) {
			tmp = rtypenamespace.exec( types[ t ] ) || [];
			type = origType = tmp[ 1 ];
			namespaces = ( tmp[ 2 ] || "" ).split( "." ).sort();

			// Unbind all events (on this namespace, if provided) for the element
			if ( !type ) {
				for ( type in events ) {
					jQuery.event.remove( elem, type + types[ t ], handler, selector, true );
				}
				continue;
			}

			special = jQuery.event.special[ type ] || {};
			type = ( selector ? special.delegateType : special.bindType ) || type;
			handlers = events[ type ] || [];
			tmp = tmp[ 2 ] &&
				new RegExp( "(^|\\.)" + namespaces.join( "\\.(?:.*\\.|)" ) + "(\\.|$)" );

			// Remove matching events
			origCount = j = handlers.length;
			while ( j-- ) {
				handleObj = handlers[ j ];

				if ( ( mappedTypes || origType === handleObj.origType ) &&
					( !handler || handler.guid === handleObj.guid ) &&
					( !tmp || tmp.test( handleObj.namespace ) ) &&
					( !selector || selector === handleObj.selector ||
						selector === "**" && handleObj.selector ) ) {
					handlers.splice( j, 1 );

					if ( handleObj.selector ) {
						handlers.delegateCount--;
					}
					if ( special.remove ) {
						special.remove.call( elem, handleObj );
					}
				}
			}

			// Remove generic event handler if we removed something and no more handlers exist
			// (avoids potential for endless recursion during removal of special event handlers)
			if ( origCount && !handlers.length ) {
				if ( !special.teardown ||
					special.teardown.call( elem, namespaces, elemData.handle ) === false ) {

					jQuery.removeEvent( elem, type, elemData.handle );
				}

				delete events[ type ];
			}
		}

		// Remove data and the expando if it's no longer used
		if ( jQuery.isEmptyObject( events ) ) {
			dataPriv.remove( elem, "handle events" );
		}
	},

	dispatch: function( nativeEvent ) {

		// Make a writable jQuery.Event from the native event object
		var event = jQuery.event.fix( nativeEvent );

		var i, j, ret, matched, handleObj, handlerQueue,
			args = new Array( arguments.length ),
			handlers = ( dataPriv.get( this, "events" ) || {} )[ event.type ] || [],
			special = jQuery.event.special[ event.type ] || {};

		// Use the fix-ed jQuery.Event rather than the (read-only) native event
		args[ 0 ] = event;

		for ( i = 1; i < arguments.length; i++ ) {
			args[ i ] = arguments[ i ];
		}

		event.delegateTarget = this;

		// Call the preDispatch hook for the mapped type, and let it bail if desired
		if ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
			return;
		}

		// Determine handlers
		handlerQueue = jQuery.event.handlers.call( this, event, handlers );

		// Run delegates first; they may want to stop propagation beneath us
		i = 0;
		while ( ( matched = handlerQueue[ i++ ] ) && !event.isPropagationStopped() ) {
			event.currentTarget = matched.elem;

			j = 0;
			while ( ( handleObj = matched.handlers[ j++ ] ) &&
				!event.isImmediatePropagationStopped() ) {

				// Triggered event must either 1) have no namespace, or 2) have namespace(s)
				// a subset or equal to those in the bound event (both can have no namespace).
				if ( !event.rnamespace || event.rnamespace.test( handleObj.namespace ) ) {

					event.handleObj = handleObj;
					event.data = handleObj.data;

					ret = ( ( jQuery.event.special[ handleObj.origType ] || {} ).handle ||
						handleObj.handler ).apply( matched.elem, args );

					if ( ret !== undefined ) {
						if ( ( event.result = ret ) === false ) {
							event.preventDefault();
							event.stopPropagation();
						}
					}
				}
			}
		}

		// Call the postDispatch hook for the mapped type
		if ( special.postDispatch ) {
			special.postDispatch.call( this, event );
		}

		return event.result;
	},

	handlers: function( event, handlers ) {
		var i, handleObj, sel, matchedHandlers, matchedSelectors,
			handlerQueue = [],
			delegateCount = handlers.delegateCount,
			cur = event.target;

		// Find delegate handlers
		if ( delegateCount &&

			// Support: IE <=9
			// Black-hole SVG <use> instance trees (trac-13180)
			cur.nodeType &&

			// Support: Firefox <=42
			// Suppress spec-violating clicks indicating a non-primary pointer button (trac-3861)
			// https://www.w3.org/TR/DOM-Level-3-Events/#event-type-click
			// Support: IE 11 only
			// ...but not arrow key "clicks" of radio inputs, which can have `button` -1 (gh-2343)
			!( event.type === "click" && event.button >= 1 ) ) {

			for ( ; cur !== this; cur = cur.parentNode || this ) {

				// Don't check non-elements (#13208)
				// Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)
				if ( cur.nodeType === 1 && !( event.type === "click" && cur.disabled === true ) ) {
					matchedHandlers = [];
					matchedSelectors = {};
					for ( i = 0; i < delegateCount; i++ ) {
						handleObj = handlers[ i ];

						// Don't conflict with Object.prototype properties (#13203)
						sel = handleObj.selector + " ";

						if ( matchedSelectors[ sel ] === undefined ) {
							matchedSelectors[ sel ] = handleObj.needsContext ?
								jQuery( sel, this ).index( cur ) > -1 :
								jQuery.find( sel, this, null, [ cur ] ).length;
						}
						if ( matchedSelectors[ sel ] ) {
							matchedHandlers.push( handleObj );
						}
					}
					if ( matchedHandlers.length ) {
						handlerQueue.push( { elem: cur, handlers: matchedHandlers } );
					}
				}
			}
		}

		// Add the remaining (directly-bound) handlers
		cur = this;
		if ( delegateCount < handlers.length ) {
			handlerQueue.push( { elem: cur, handlers: handlers.slice( delegateCount ) } );
		}

		return handlerQueue;
	},

	addProp: function( name, hook ) {
		Object.defineProperty( jQuery.Event.prototype, name, {
			enumerable: true,
			configurable: true,

			get: isFunction( hook ) ?
				function() {
					if ( this.originalEvent ) {
							return hook( this.originalEvent );
					}
				} :
				function() {
					if ( this.originalEvent ) {
							return this.originalEvent[ name ];
					}
				},

			set: function( value ) {
				Object.defineProperty( this, name, {
					enumerable: true,
					configurable: true,
					writable: true,
					value: value
				} );
			}
		} );
	},

	fix: function( originalEvent ) {
		return originalEvent[ jQuery.expando ] ?
			originalEvent :
			new jQuery.Event( originalEvent );
	},

	special: {
		load: {

			// Prevent triggered image.load events from bubbling to window.load
			noBubble: true
		},
		focus: {

			// Fire native event if possible so blur/focus sequence is correct
			trigger: function() {
				if ( this !== safeActiveElement() && this.focus ) {
					this.focus();
					return false;
				}
			},
			delegateType: "focusin"
		},
		blur: {
			trigger: function() {
				if ( this === safeActiveElement() && this.blur ) {
					this.blur();
					return false;
				}
			},
			delegateType: "focusout"
		},
		click: {

			// For checkbox, fire native event so checked state will be right
			trigger: function() {
				if ( this.type === "checkbox" && this.click && nodeName( this, "input" ) ) {
					this.click();
					return false;
				}
			},

			// For cross-browser consistency, don't fire native .click() on links
			_default: function( event ) {
				return nodeName( event.target, "a" );
			}
		},

		beforeunload: {
			postDispatch: function( event ) {

				// Support: Firefox 20+
				// Firefox doesn't alert if the returnValue field is not set.
				if ( event.result !== undefined && event.originalEvent ) {
					event.originalEvent.returnValue = event.result;
				}
			}
		}
	}
};

jQuery.removeEvent = function( elem, type, handle ) {

	// This "if" is needed for plain objects
	if ( elem.removeEventListener ) {
		elem.removeEventListener( type, handle );
	}
};

jQuery.Event = function( src, props ) {

	// Allow instantiation without the 'new' keyword
	if ( !( this instanceof jQuery.Event ) ) {
		return new jQuery.Event( src, props );
	}

	// Event object
	if ( src && src.type ) {
		this.originalEvent = src;
		this.type = src.type;

		// Events bubbling up the document may have been marked as prevented
		// by a handler lower down the tree; reflect the correct value.
		this.isDefaultPrevented = src.defaultPrevented ||
				src.defaultPrevented === undefined &&

				// Support: Android <=2.3 only
				src.returnValue === false ?
			returnTrue :
			returnFalse;

		// Create target properties
		// Support: Safari <=6 - 7 only
		// Target should not be a text node (#504, #13143)
		this.target = ( src.target && src.target.nodeType === 3 ) ?
			src.target.parentNode :
			src.target;

		this.currentTarget = src.currentTarget;
		this.relatedTarget = src.relatedTarget;

	// Event type
	} else {
		this.type = src;
	}

	// Put explicitly provided properties onto the event object
	if ( props ) {
		jQuery.extend( this, props );
	}

	// Create a timestamp if incoming event doesn't have one
	this.timeStamp = src && src.timeStamp || Date.now();

	// Mark it as fixed
	this[ jQuery.expando ] = true;
};

// jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding
// https://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
jQuery.Event.prototype = {
	constructor: jQuery.Event,
	isDefaultPrevented: returnFalse,
	isPropagationStopped: returnFalse,
	isImmediatePropagationStopped: returnFalse,
	isSimulated: false,

	preventDefault: function() {
		var e = this.originalEvent;

		this.isDefaultPrevented = returnTrue;

		if ( e && !this.isSimulated ) {
			e.preventDefault();
		}
	},
	stopPropagation: function() {
		var e = this.originalEvent;

		this.isPropagationStopped = returnTrue;

		if ( e && !this.isSimulated ) {
			e.stopPropagation();
		}
	},
	stopImmediatePropagation: function() {
		var e = this.originalEvent;

		this.isImmediatePropagationStopped = returnTrue;

		if ( e && !this.isSimulated ) {
			e.stopImmediatePropagation();
		}

		this.stopPropagation();
	}
};

// Includes all common event props including KeyEvent and MouseEvent specific props
jQuery.each( {
	altKey: true,
	bubbles: true,
	cancelable: true,
	changedTouches: true,
	ctrlKey: true,
	detail: true,
	eventPhase: true,
	metaKey: true,
	pageX: true,
	pageY: true,
	shiftKey: true,
	view: true,
	"char": true,
	charCode: true,
	key: true,
	keyCode: true,
	button: true,
	buttons: true,
	clientX: true,
	clientY: true,
	offsetX: true,
	offsetY: true,
	pointerId: true,
	pointerType: true,
	screenX: true,
	screenY: true,
	targetTouches: true,
	toElement: true,
	touches: true,

	which: function( event ) {
		var button = event.button;

		// Add which for key events
		if ( event.which == null && rkeyEvent.test( event.type ) ) {
			return event.charCode != null ? event.charCode : event.keyCode;
		}

		// Add which for click: 1 === left; 2 === middle; 3 === right
		if ( !event.which && button !== undefined && rmouseEvent.test( event.type ) ) {
			if ( button & 1 ) {
				return 1;
			}

			if ( button & 2 ) {
				return 3;
			}

			if ( button & 4 ) {
				return 2;
			}

			return 0;
		}

		return event.which;
	}
}, jQuery.event.addProp );

// Create mouseenter/leave events using mouseover/out and event-time checks
// so that event delegation works in jQuery.
// Do the same for pointerenter/pointerleave and pointerover/pointerout
//
// Support: Safari 7 only
// Safari sends mouseenter too often; see:
// https://bugs.chromium.org/p/chromium/issues/detail?id=470258
// for the description of the bug (it existed in older Chrome versions as well).
jQuery.each( {
	mouseenter: "mouseover",
	mouseleave: "mouseout",
	pointerenter: "pointerover",
	pointerleave: "pointerout"
}, function( orig, fix ) {
	jQuery.event.special[ orig ] = {
		delegateType: fix,
		bindType: fix,

		handle: function( event ) {
			var ret,
				target = this,
				related = event.relatedTarget,
				handleObj = event.handleObj;

			// For mouseenter/leave call the handler if related is outside the target.
			// NB: No relatedTarget if the mouse left/entered the browser window
			if ( !related || ( related !== target && !jQuery.contains( target, related ) ) ) {
				event.type = handleObj.origType;
				ret = handleObj.handler.apply( this, arguments );
				event.type = fix;
			}
			return ret;
		}
	};
} );

jQuery.fn.extend( {

	on: function( types, selector, data, fn ) {
		return on( this, types, selector, data, fn );
	},
	one: function( types, selector, data, fn ) {
		return on( this, types, selector, data, fn, 1 );
	},
	off: function( types, selector, fn ) {
		var handleObj, type;
		if ( types && types.preventDefault && types.handleObj ) {

			// ( event )  dispatched jQuery.Event
			handleObj = types.handleObj;
			jQuery( types.delegateTarget ).off(
				handleObj.namespace ?
					handleObj.origType + "." + handleObj.namespace :
					handleObj.origType,
				handleObj.selector,
				handleObj.handler
			);
			return this;
		}
		if ( typeof types === "object" ) {

			// ( types-object [, selector] )
			for ( type in types ) {
				this.off( type, selector, types[ type ] );
			}
			return this;
		}
		if ( selector === false || typeof selector === "function" ) {

			// ( types [, fn] )
			fn = selector;
			selector = undefined;
		}
		if ( fn === false ) {
			fn = returnFalse;
		}
		return this.each( function() {
			jQuery.event.remove( this, types, fn, selector );
		} );
	}
} );


var

	/* eslint-disable max-len */

	// See https://github.com/eslint/eslint/issues/3229
	rxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,

	/* eslint-enable */

	// Support: IE <=10 - 11, Edge 12 - 13 only
	// In IE/Edge using regex groups here causes severe slowdowns.
	// See https://connect.microsoft.com/IE/feedback/details/1736512/
	rnoInnerhtml = /<script|<style|<link/i,

	// checked="checked" or checked
	rchecked = /checked\s*(?:[^=]|=\s*.checked.)/i,
	rcleanScript = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

// Prefer a tbody over its parent table for containing new rows
function manipulationTarget( elem, content ) {
	if ( nodeName( elem, "table" ) &&
		nodeName( content.nodeType !== 11 ? content : content.firstChild, "tr" ) ) {

		return jQuery( elem ).children( "tbody" )[ 0 ] || elem;
	}

	return elem;
}

// Replace/restore the type attribute of script elements for safe DOM manipulation
function disableScript( elem ) {
	elem.type = ( elem.getAttribute( "type" ) !== null ) + "/" + elem.type;
	return elem;
}
function restoreScript( elem ) {
	if ( ( elem.type || "" ).slice( 0, 5 ) === "true/" ) {
		elem.type = elem.type.slice( 5 );
	} else {
		elem.removeAttribute( "type" );
	}

	return elem;
}

function cloneCopyEvent( src, dest ) {
	var i, l, type, pdataOld, pdataCur, udataOld, udataCur, events;

	if ( dest.nodeType !== 1 ) {
		return;
	}

	// 1. Copy private data: events, handlers, etc.
	if ( dataPriv.hasData( src ) ) {
		pdataOld = dataPriv.access( src );
		pdataCur = dataPriv.set( dest, pdataOld );
		events = pdataOld.events;

		if ( events ) {
			delete pdataCur.handle;
			pdataCur.events = {};

			for ( type in events ) {
				for ( i = 0, l = events[ type ].length; i < l; i++ ) {
					jQuery.event.add( dest, type, events[ type ][ i ] );
				}
			}
		}
	}

	// 2. Copy user data
	if ( dataUser.hasData( src ) ) {
		udataOld = dataUser.access( src );
		udataCur = jQuery.extend( {}, udataOld );

		dataUser.set( dest, udataCur );
	}
}

// Fix IE bugs, see support tests
function fixInput( src, dest ) {
	var nodeName = dest.nodeName.toLowerCase();

	// Fails to persist the checked state of a cloned checkbox or radio button.
	if ( nodeName === "input" && rcheckableType.test( src.type ) ) {
		dest.checked = src.checked;

	// Fails to return the selected option to the default selected state when cloning options
	} else if ( nodeName === "input" || nodeName === "textarea" ) {
		dest.defaultValue = src.defaultValue;
	}
}

function domManip( collection, args, callback, ignored ) {

	// Flatten any nested arrays
	args = concat.apply( [], args );

	var fragment, first, scripts, hasScripts, node, doc,
		i = 0,
		l = collection.length,
		iNoClone = l - 1,
		value = args[ 0 ],
		valueIsFunction = isFunction( value );

	// We can't cloneNode fragments that contain checked, in WebKit
	if ( valueIsFunction ||
			( l > 1 && typeof value === "string" &&
				!support.checkClone && rchecked.test( value ) ) ) {
		return collection.each( function( index ) {
			var self = collection.eq( index );
			if ( valueIsFunction ) {
				args[ 0 ] = value.call( this, index, self.html() );
			}
			domManip( self, args, callback, ignored );
		} );
	}

	if ( l ) {
		fragment = buildFragment( args, collection[ 0 ].ownerDocument, false, collection, ignored );
		first = fragment.firstChild;

		if ( fragment.childNodes.length === 1 ) {
			fragment = first;
		}

		// Require either new content or an interest in ignored elements to invoke the callback
		if ( first || ignored ) {
			scripts = jQuery.map( getAll( fragment, "script" ), disableScript );
			hasScripts = scripts.length;

			// Use the original fragment for the last item
			// instead of the first because it can end up
			// being emptied incorrectly in certain situations (#8070).
			for ( ; i < l; i++ ) {
				node = fragment;

				if ( i !== iNoClone ) {
					node = jQuery.clone( node, true, true );

					// Keep references to cloned scripts for later restoration
					if ( hasScripts ) {

						// Support: Android <=4.0 only, PhantomJS 1 only
						// push.apply(_, arraylike) throws on ancient WebKit
						jQuery.merge( scripts, getAll( node, "script" ) );
					}
				}

				callback.call( collection[ i ], node, i );
			}

			if ( hasScripts ) {
				doc = scripts[ scripts.length - 1 ].ownerDocument;

				// Reenable scripts
				jQuery.map( scripts, restoreScript );

				// Evaluate executable scripts on first document insertion
				for ( i = 0; i < hasScripts; i++ ) {
					node = scripts[ i ];
					if ( rscriptType.test( node.type || "" ) &&
						!dataPriv.access( node, "globalEval" ) &&
						jQuery.contains( doc, node ) ) {

						if ( node.src && ( node.type || "" ).toLowerCase()  !== "module" ) {

							// Optional AJAX dependency, but won't run scripts if not present
							if ( jQuery._evalUrl ) {
								jQuery._evalUrl( node.src );
							}
						} else {
							DOMEval( node.textContent.replace( rcleanScript, "" ), doc, node );
						}
					}
				}
			}
		}
	}

	return collection;
}

function remove( elem, selector, keepData ) {
	var node,
		nodes = selector ? jQuery.filter( selector, elem ) : elem,
		i = 0;

	for ( ; ( node = nodes[ i ] ) != null; i++ ) {
		if ( !keepData && node.nodeType === 1 ) {
			jQuery.cleanData( getAll( node ) );
		}

		if ( node.parentNode ) {
			if ( keepData && jQuery.contains( node.ownerDocument, node ) ) {
				setGlobalEval( getAll( node, "script" ) );
			}
			node.parentNode.removeChild( node );
		}
	}

	return elem;
}

jQuery.extend( {
	htmlPrefilter: function( html ) {
		return html.replace( rxhtmlTag, "<$1></$2>" );
	},

	clone: function( elem, dataAndEvents, deepDataAndEvents ) {
		var i, l, srcElements, destElements,
			clone = elem.cloneNode( true ),
			inPage = jQuery.contains( elem.ownerDocument, elem );

		// Fix IE cloning issues
		if ( !support.noCloneChecked && ( elem.nodeType === 1 || elem.nodeType === 11 ) &&
				!jQuery.isXMLDoc( elem ) ) {

			// We eschew Sizzle here for performance reasons: https://jsperf.com/getall-vs-sizzle/2
			destElements = getAll( clone );
			srcElements = getAll( elem );

			for ( i = 0, l = srcElements.length; i < l; i++ ) {
				fixInput( srcElements[ i ], destElements[ i ] );
			}
		}

		// Copy the events from the original to the clone
		if ( dataAndEvents ) {
			if ( deepDataAndEvents ) {
				srcElements = srcElements || getAll( elem );
				destElements = destElements || getAll( clone );

				for ( i = 0, l = srcElements.length; i < l; i++ ) {
					cloneCopyEvent( srcElements[ i ], destElements[ i ] );
				}
			} else {
				cloneCopyEvent( elem, clone );
			}
		}

		// Preserve script evaluation history
		destElements = getAll( clone, "script" );
		if ( destElements.length > 0 ) {
			setGlobalEval( destElements, !inPage && getAll( elem, "script" ) );
		}

		// Return the cloned set
		return clone;
	},

	cleanData: function( elems ) {
		var data, elem, type,
			special = jQuery.event.special,
			i = 0;

		for ( ; ( elem = elems[ i ] ) !== undefined; i++ ) {
			if ( acceptData( elem ) ) {
				if ( ( data = elem[ dataPriv.expando ] ) ) {
					if ( data.events ) {
						for ( type in data.events ) {
							if ( special[ type ] ) {
								jQuery.event.remove( elem, type );

							// This is a shortcut to avoid jQuery.event.remove's overhead
							} else {
								jQuery.removeEvent( elem, type, data.handle );
							}
						}
					}

					// Support: Chrome <=35 - 45+
					// Assign undefined instead of using delete, see Data#remove
					elem[ dataPriv.expando ] = undefined;
				}
				if ( elem[ dataUser.expando ] ) {

					// Support: Chrome <=35 - 45+
					// Assign undefined instead of using delete, see Data#remove
					elem[ dataUser.expando ] = undefined;
				}
			}
		}
	}
} );

jQuery.fn.extend( {
	detach: function( selector ) {
		return remove( this, selector, true );
	},

	remove: function( selector ) {
		return remove( this, selector );
	},

	text: function( value ) {
		return access( this, function( value ) {
			return value === undefined ?
				jQuery.text( this ) :
				this.empty().each( function() {
					if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
						this.textContent = value;
					}
				} );
		}, null, value, arguments.length );
	},

	append: function() {
		return domManip( this, arguments, function( elem ) {
			if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
				var target = manipulationTarget( this, elem );
				target.appendChild( elem );
			}
		} );
	},

	prepend: function() {
		return domManip( this, arguments, function( elem ) {
			if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
				var target = manipulationTarget( this, elem );
				target.insertBefore( elem, target.firstChild );
			}
		} );
	},

	before: function() {
		return domManip( this, arguments, function( elem ) {
			if ( this.parentNode ) {
				this.parentNode.insertBefore( elem, this );
			}
		} );
	},

	after: function() {
		return domManip( this, arguments, function( elem ) {
			if ( this.parentNode ) {
				this.parentNode.insertBefore( elem, this.nextSibling );
			}
		} );
	},

	empty: function() {
		var elem,
			i = 0;

		for ( ; ( elem = this[ i ] ) != null; i++ ) {
			if ( elem.nodeType === 1 ) {

				// Prevent memory leaks
				jQuery.cleanData( getAll( elem, false ) );

				// Remove any remaining nodes
				elem.textContent = "";
			}
		}

		return this;
	},

	clone: function( dataAndEvents, deepDataAndEvents ) {
		dataAndEvents = dataAndEvents == null ? false : dataAndEvents;
		deepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;

		return this.map( function() {
			return jQuery.clone( this, dataAndEvents, deepDataAndEvents );
		} );
	},

	html: function( value ) {
		return access( this, function( value ) {
			var elem = this[ 0 ] || {},
				i = 0,
				l = this.length;

			if ( value === undefined && elem.nodeType === 1 ) {
				return elem.innerHTML;
			}

			// See if we can take a shortcut and just use innerHTML
			if ( typeof value === "string" && !rnoInnerhtml.test( value ) &&
				!wrapMap[ ( rtagName.exec( value ) || [ "", "" ] )[ 1 ].toLowerCase() ] ) {

				value = jQuery.htmlPrefilter( value );

				try {
					for ( ; i < l; i++ ) {
						elem = this[ i ] || {};

						// Remove element nodes and prevent memory leaks
						if ( elem.nodeType === 1 ) {
							jQuery.cleanData( getAll( elem, false ) );
							elem.innerHTML = value;
						}
					}

					elem = 0;

				// If using innerHTML throws an exception, use the fallback method
				} catch ( e ) {}
			}

			if ( elem ) {
				this.empty().append( value );
			}
		}, null, value, arguments.length );
	},

	replaceWith: function() {
		var ignored = [];

		// Make the changes, replacing each non-ignored context element with the new content
		return domManip( this, arguments, function( elem ) {
			var parent = this.parentNode;

			if ( jQuery.inArray( this, ignored ) < 0 ) {
				jQuery.cleanData( getAll( this ) );
				if ( parent ) {
					parent.replaceChild( elem, this );
				}
			}

		// Force callback invocation
		}, ignored );
	}
} );

jQuery.each( {
	appendTo: "append",
	prependTo: "prepend",
	insertBefore: "before",
	insertAfter: "after",
	replaceAll: "replaceWith"
}, function( name, original ) {
	jQuery.fn[ name ] = function( selector ) {
		var elems,
			ret = [],
			insert = jQuery( selector ),
			last = insert.length - 1,
			i = 0;

		for ( ; i <= last; i++ ) {
			elems = i === last ? this : this.clone( true );
			jQuery( insert[ i ] )[ original ]( elems );

			// Support: Android <=4.0 only, PhantomJS 1 only
			// .get() because push.apply(_, arraylike) throws on ancient WebKit
			push.apply( ret, elems.get() );
		}

		return this.pushStack( ret );
	};
} );
var rnumnonpx = new RegExp( "^(" + pnum + ")(?!px)[a-z%]+$", "i" );

var getStyles = function( elem ) {

		// Support: IE <=11 only, Firefox <=30 (#15098, #14150)
		// IE throws on elements created in popups
		// FF meanwhile throws on frame elements through "defaultView.getComputedStyle"
		var view = elem.ownerDocument.defaultView;

		if ( !view || !view.opener ) {
			view = window;
		}

		return view.getComputedStyle( elem );
	};

var rboxStyle = new RegExp( cssExpand.join( "|" ), "i" );



( function() {

	// Executing both pixelPosition & boxSizingReliable tests require only one layout
	// so they're executed at the same time to save the second computation.
	function computeStyleTests() {

		// This is a singleton, we need to execute it only once
		if ( !div ) {
			return;
		}

		container.style.cssText = "position:absolute;left:-11111px;width:60px;" +
			"margin-top:1px;padding:0;border:0";
		div.style.cssText =
			"position:relative;display:block;box-sizing:border-box;overflow:scroll;" +
			"margin:auto;border:1px;padding:1px;" +
			"width:60%;top:1%";
		documentElement.appendChild( container ).appendChild( div );

		var divStyle = window.getComputedStyle( div );
		pixelPositionVal = divStyle.top !== "1%";

		// Support: Android 4.0 - 4.3 only, Firefox <=3 - 44
		reliableMarginLeftVal = roundPixelMeasures( divStyle.marginLeft ) === 12;

		// Support: Android 4.0 - 4.3 only, Safari <=9.1 - 10.1, iOS <=7.0 - 9.3
		// Some styles come back with percentage values, even though they shouldn't
		div.style.right = "60%";
		pixelBoxStylesVal = roundPixelMeasures( divStyle.right ) === 36;

		// Support: IE 9 - 11 only
		// Detect misreporting of content dimensions for box-sizing:border-box elements
		boxSizingReliableVal = roundPixelMeasures( divStyle.width ) === 36;

		// Support: IE 9 only
		// Detect overflow:scroll screwiness (gh-3699)
		div.style.position = "absolute";
		scrollboxSizeVal = div.offsetWidth === 36 || "absolute";

		documentElement.removeChild( container );

		// Nullify the div so it wouldn't be stored in the memory and
		// it will also be a sign that checks already performed
		div = null;
	}

	function roundPixelMeasures( measure ) {
		return Math.round( parseFloat( measure ) );
	}

	var pixelPositionVal, boxSizingReliableVal, scrollboxSizeVal, pixelBoxStylesVal,
		reliableMarginLeftVal,
		container = document.createElement( "div" ),
		div = document.createElement( "div" );

	// Finish early in limited (non-browser) environments
	if ( !div.style ) {
		return;
	}

	// Support: IE <=9 - 11 only
	// Style of cloned element affects source element cloned (#8908)
	div.style.backgroundClip = "content-box";
	div.cloneNode( true ).style.backgroundClip = "";
	support.clearCloneStyle = div.style.backgroundClip === "content-box";

	jQuery.extend( support, {
		boxSizingReliable: function() {
			computeStyleTests();
			return boxSizingReliableVal;
		},
		pixelBoxStyles: function() {
			computeStyleTests();
			return pixelBoxStylesVal;
		},
		pixelPosition: function() {
			computeStyleTests();
			return pixelPositionVal;
		},
		reliableMarginLeft: function() {
			computeStyleTests();
			return reliableMarginLeftVal;
		},
		scrollboxSize: function() {
			computeStyleTests();
			return scrollboxSizeVal;
		}
	} );
} )();


function curCSS( elem, name, computed ) {
	var width, minWidth, maxWidth, ret,

		// Support: Firefox 51+
		// Retrieving style before computed somehow
		// fixes an issue with getting wrong values
		// on detached elements
		style = elem.style;

	computed = computed || getStyles( elem );

	// getPropertyValue is needed for:
	//   .css('filter') (IE 9 only, #12537)
	//   .css('--customProperty) (#3144)
	if ( computed ) {
		ret = computed.getPropertyValue( name ) || computed[ name ];

		if ( ret === "" && !jQuery.contains( elem.ownerDocument, elem ) ) {
			ret = jQuery.style( elem, name );
		}

		// A tribute to the "awesome hack by Dean Edwards"
		// Android Browser returns percentage for some values,
		// but width seems to be reliably pixels.
		// This is against the CSSOM draft spec:
		// https://drafts.csswg.org/cssom/#resolved-values
		if ( !support.pixelBoxStyles() && rnumnonpx.test( ret ) && rboxStyle.test( name ) ) {

			// Remember the original values
			width = style.width;
			minWidth = style.minWidth;
			maxWidth = style.maxWidth;

			// Put in the new values to get a computed value out
			style.minWidth = style.maxWidth = style.width = ret;
			ret = computed.width;

			// Revert the changed values
			style.width = width;
			style.minWidth = minWidth;
			style.maxWidth = maxWidth;
		}
	}

	return ret !== undefined ?

		// Support: IE <=9 - 11 only
		// IE returns zIndex value as an integer.
		ret + "" :
		ret;
}


function addGetHookIf( conditionFn, hookFn ) {

	// Define the hook, we'll check on the first run if it's really needed.
	return {
		get: function() {
			if ( conditionFn() ) {

				// Hook not needed (or it's not possible to use it due
				// to missing dependency), remove it.
				delete this.get;
				return;
			}

			// Hook needed; redefine it so that the support test is not executed again.
			return ( this.get = hookFn ).apply( this, arguments );
		}
	};
}


var

	// Swappable if display is none or starts with table
	// except "table", "table-cell", or "table-caption"
	// See here for display values: https://developer.mozilla.org/en-US/docs/CSS/display
	rdisplayswap = /^(none|table(?!-c[ea]).+)/,
	rcustomProp = /^--/,
	cssShow = { position: "absolute", visibility: "hidden", display: "block" },
	cssNormalTransform = {
		letterSpacing: "0",
		fontWeight: "400"
	},

	cssPrefixes = [ "Webkit", "Moz", "ms" ],
	emptyStyle = document.createElement( "div" ).style;

// Return a css property mapped to a potentially vendor prefixed property
function vendorPropName( name ) {

	// Shortcut for names that are not vendor prefixed
	if ( name in emptyStyle ) {
		return name;
	}

	// Check for vendor prefixed names
	var capName = name[ 0 ].toUpperCase() + name.slice( 1 ),
		i = cssPrefixes.length;

	while ( i-- ) {
		name = cssPrefixes[ i ] + capName;
		if ( name in emptyStyle ) {
			return name;
		}
	}
}

// Return a property mapped along what jQuery.cssProps suggests or to
// a vendor prefixed property.
function finalPropName( name ) {
	var ret = jQuery.cssProps[ name ];
	if ( !ret ) {
		ret = jQuery.cssProps[ name ] = vendorPropName( name ) || name;
	}
	return ret;
}

function setPositiveNumber( elem, value, subtract ) {

	// Any relative (+/-) values have already been
	// normalized at this point
	var matches = rcssNum.exec( value );
	return matches ?

		// Guard against undefined "subtract", e.g., when used as in cssHooks
		Math.max( 0, matches[ 2 ] - ( subtract || 0 ) ) + ( matches[ 3 ] || "px" ) :
		value;
}

function boxModelAdjustment( elem, dimension, box, isBorderBox, styles, computedVal ) {
	var i = dimension === "width" ? 1 : 0,
		extra = 0,
		delta = 0;

	// Adjustment may not be necessary
	if ( box === ( isBorderBox ? "border" : "content" ) ) {
		return 0;
	}

	for ( ; i < 4; i += 2 ) {

		// Both box models exclude margin
		if ( box === "margin" ) {
			delta += jQuery.css( elem, box + cssExpand[ i ], true, styles );
		}

		// If we get here with a content-box, we're seeking "padding" or "border" or "margin"
		if ( !isBorderBox ) {

			// Add padding
			delta += jQuery.css( elem, "padding" + cssExpand[ i ], true, styles );

			// For "border" or "margin", add border
			if ( box !== "padding" ) {
				delta += jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );

			// But still keep track of it otherwise
			} else {
				extra += jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );
			}

		// If we get here with a border-box (content + padding + border), we're seeking "content" or
		// "padding" or "margin"
		} else {

			// For "content", subtract padding
			if ( box === "content" ) {
				delta -= jQuery.css( elem, "padding" + cssExpand[ i ], true, styles );
			}

			// For "content" or "padding", subtract border
			if ( box !== "margin" ) {
				delta -= jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );
			}
		}
	}

	// Account for positive content-box scroll gutter when requested by providing computedVal
	if ( !isBorderBox && computedVal >= 0 ) {

		// offsetWidth/offsetHeight is a rounded sum of content, padding, scroll gutter, and border
		// Assuming integer scroll gutter, subtract the rest and round down
		delta += Math.max( 0, Math.ceil(
			elem[ "offset" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 ) ] -
			computedVal -
			delta -
			extra -
			0.5
		) );
	}

	return delta;
}

function getWidthOrHeight( elem, dimension, extra ) {

	// Start with computed style
	var styles = getStyles( elem ),
		val = curCSS( elem, dimension, styles ),
		isBorderBox = jQuery.css( elem, "boxSizing", false, styles ) === "border-box",
		valueIsBorderBox = isBorderBox;

	// Support: Firefox <=54
	// Return a confounding non-pixel value or feign ignorance, as appropriate.
	if ( rnumnonpx.test( val ) ) {
		if ( !extra ) {
			return val;
		}
		val = "auto";
	}

	// Check for style in case a browser which returns unreliable values
	// for getComputedStyle silently falls back to the reliable elem.style
	valueIsBorderBox = valueIsBorderBox &&
		( support.boxSizingReliable() || val === elem.style[ dimension ] );

	// Fall back to offsetWidth/offsetHeight when value is "auto"
	// This happens for inline elements with no explicit setting (gh-3571)
	// Support: Android <=4.1 - 4.3 only
	// Also use offsetWidth/offsetHeight for misreported inline dimensions (gh-3602)
	if ( val === "auto" ||
		!parseFloat( val ) && jQuery.css( elem, "display", false, styles ) === "inline" ) {

		val = elem[ "offset" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 ) ];

		// offsetWidth/offsetHeight provide border-box values
		valueIsBorderBox = true;
	}

	// Normalize "" and auto
	val = parseFloat( val ) || 0;

	// Adjust for the element's box model
	return ( val +
		boxModelAdjustment(
			elem,
			dimension,
			extra || ( isBorderBox ? "border" : "content" ),
			valueIsBorderBox,
			styles,

			// Provide the current computed size to request scroll gutter calculation (gh-3589)
			val
		)
	) + "px";
}

jQuery.extend( {

	// Add in style property hooks for overriding the default
	// behavior of getting and setting a style property
	cssHooks: {
		opacity: {
			get: function( elem, computed ) {
				if ( computed ) {

					// We should always get a number back from opacity
					var ret = curCSS( elem, "opacity" );
					return ret === "" ? "1" : ret;
				}
			}
		}
	},

	// Don't automatically add "px" to these possibly-unitless properties
	cssNumber: {
		"animationIterationCount": true,
		"columnCount": true,
		"fillOpacity": true,
		"flexGrow": true,
		"flexShrink": true,
		"fontWeight": true,
		"lineHeight": true,
		"opacity": true,
		"order": true,
		"orphans": true,
		"widows": true,
		"zIndex": true,
		"zoom": true
	},

	// Add in properties whose names you wish to fix before
	// setting or getting the value
	cssProps: {},

	// Get and set the style property on a DOM Node
	style: function( elem, name, value, extra ) {

		// Don't set styles on text and comment nodes
		if ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {
			return;
		}

		// Make sure that we're working with the right name
		var ret, type, hooks,
			origName = camelCase( name ),
			isCustomProp = rcustomProp.test( name ),
			style = elem.style;

		// Make sure that we're working with the right name. We don't
		// want to query the value if it is a CSS custom property
		// since they are user-defined.
		if ( !isCustomProp ) {
			name = finalPropName( origName );
		}

		// Gets hook for the prefixed version, then unprefixed version
		hooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

		// Check if we're setting a value
		if ( value !== undefined ) {
			type = typeof value;

			// Convert "+=" or "-=" to relative numbers (#7345)
			if ( type === "string" && ( ret = rcssNum.exec( value ) ) && ret[ 1 ] ) {
				value = adjustCSS( elem, name, ret );

				// Fixes bug #9237
				type = "number";
			}

			// Make sure that null and NaN values aren't set (#7116)
			if ( value == null || value !== value ) {
				return;
			}

			// If a number was passed in, add the unit (except for certain CSS properties)
			if ( type === "number" ) {
				value += ret && ret[ 3 ] || ( jQuery.cssNumber[ origName ] ? "" : "px" );
			}

			// background-* props affect original clone's values
			if ( !support.clearCloneStyle && value === "" && name.indexOf( "background" ) === 0 ) {
				style[ name ] = "inherit";
			}

			// If a hook was provided, use that value, otherwise just set the specified value
			if ( !hooks || !( "set" in hooks ) ||
				( value = hooks.set( elem, value, extra ) ) !== undefined ) {

				if ( isCustomProp ) {
					style.setProperty( name, value );
				} else {
					style[ name ] = value;
				}
			}

		} else {

			// If a hook was provided get the non-computed value from there
			if ( hooks && "get" in hooks &&
				( ret = hooks.get( elem, false, extra ) ) !== undefined ) {

				return ret;
			}

			// Otherwise just get the value from the style object
			return style[ name ];
		}
	},

	css: function( elem, name, extra, styles ) {
		var val, num, hooks,
			origName = camelCase( name ),
			isCustomProp = rcustomProp.test( name );

		// Make sure that we're working with the right name. We don't
		// want to modify the value if it is a CSS custom property
		// since they are user-defined.
		if ( !isCustomProp ) {
			name = finalPropName( origName );
		}

		// Try prefixed name followed by the unprefixed name
		hooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

		// If a hook was provided get the computed value from there
		if ( hooks && "get" in hooks ) {
			val = hooks.get( elem, true, extra );
		}

		// Otherwise, if a way to get the computed value exists, use that
		if ( val === undefined ) {
			val = curCSS( elem, name, styles );
		}

		// Convert "normal" to computed value
		if ( val === "normal" && name in cssNormalTransform ) {
			val = cssNormalTransform[ name ];
		}

		// Make numeric if forced or a qualifier was provided and val looks numeric
		if ( extra === "" || extra ) {
			num = parseFloat( val );
			return extra === true || isFinite( num ) ? num || 0 : val;
		}

		return val;
	}
} );

jQuery.each( [ "height", "width" ], function( i, dimension ) {
	jQuery.cssHooks[ dimension ] = {
		get: function( elem, computed, extra ) {
			if ( computed ) {

				// Certain elements can have dimension info if we invisibly show them
				// but it must have a current display style that would benefit
				return rdisplayswap.test( jQuery.css( elem, "display" ) ) &&

					// Support: Safari 8+
					// Table columns in Safari have non-zero offsetWidth & zero
					// getBoundingClientRect().width unless display is changed.
					// Support: IE <=11 only
					// Running getBoundingClientRect on a disconnected node
					// in IE throws an error.
					( !elem.getClientRects().length || !elem.getBoundingClientRect().width ) ?
						swap( elem, cssShow, function() {
							return getWidthOrHeight( elem, dimension, extra );
						} ) :
						getWidthOrHeight( elem, dimension, extra );
			}
		},

		set: function( elem, value, extra ) {
			var matches,
				styles = getStyles( elem ),
				isBorderBox = jQuery.css( elem, "boxSizing", false, styles ) === "border-box",
				subtract = extra && boxModelAdjustment(
					elem,
					dimension,
					extra,
					isBorderBox,
					styles
				);

			// Account for unreliable border-box dimensions by comparing offset* to computed and
			// faking a content-box to get border and padding (gh-3699)
			if ( isBorderBox && support.scrollboxSize() === styles.position ) {
				subtract -= Math.ceil(
					elem[ "offset" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 ) ] -
					parseFloat( styles[ dimension ] ) -
					boxModelAdjustment( elem, dimension, "border", false, styles ) -
					0.5
				);
			}

			// Convert to pixels if value adjustment is needed
			if ( subtract && ( matches = rcssNum.exec( value ) ) &&
				( matches[ 3 ] || "px" ) !== "px" ) {

				elem.style[ dimension ] = value;
				value = jQuery.css( elem, dimension );
			}

			return setPositiveNumber( elem, value, subtract );
		}
	};
} );

jQuery.cssHooks.marginLeft = addGetHookIf( support.reliableMarginLeft,
	function( elem, computed ) {
		if ( computed ) {
			return ( parseFloat( curCSS( elem, "marginLeft" ) ) ||
				elem.getBoundingClientRect().left -
					swap( elem, { marginLeft: 0 }, function() {
						return elem.getBoundingClientRect().left;
					} )
				) + "px";
		}
	}
);

// These hooks are used by animate to expand properties
jQuery.each( {
	margin: "",
	padding: "",
	border: "Width"
}, function( prefix, suffix ) {
	jQuery.cssHooks[ prefix + suffix ] = {
		expand: function( value ) {
			var i = 0,
				expanded = {},

				// Assumes a single number if not a string
				parts = typeof value === "string" ? value.split( " " ) : [ value ];

			for ( ; i < 4; i++ ) {
				expanded[ prefix + cssExpand[ i ] + suffix ] =
					parts[ i ] || parts[ i - 2 ] || parts[ 0 ];
			}

			return expanded;
		}
	};

	if ( prefix !== "margin" ) {
		jQuery.cssHooks[ prefix + suffix ].set = setPositiveNumber;
	}
} );

jQuery.fn.extend( {
	css: function( name, value ) {
		return access( this, function( elem, name, value ) {
			var styles, len,
				map = {},
				i = 0;

			if ( Array.isArray( name ) ) {
				styles = getStyles( elem );
				len = name.length;

				for ( ; i < len; i++ ) {
					map[ name[ i ] ] = jQuery.css( elem, name[ i ], false, styles );
				}

				return map;
			}

			return value !== undefined ?
				jQuery.style( elem, name, value ) :
				jQuery.css( elem, name );
		}, name, value, arguments.length > 1 );
	}
} );


function Tween( elem, options, prop, end, easing ) {
	return new Tween.prototype.init( elem, options, prop, end, easing );
}
jQuery.Tween = Tween;

Tween.prototype = {
	constructor: Tween,
	init: function( elem, options, prop, end, easing, unit ) {
		this.elem = elem;
		this.prop = prop;
		this.easing = easing || jQuery.easing._default;
		this.options = options;
		this.start = this.now = this.cur();
		this.end = end;
		this.unit = unit || ( jQuery.cssNumber[ prop ] ? "" : "px" );
	},
	cur: function() {
		var hooks = Tween.propHooks[ this.prop ];

		return hooks && hooks.get ?
			hooks.get( this ) :
			Tween.propHooks._default.get( this );
	},
	run: function( percent ) {
		var eased,
			hooks = Tween.propHooks[ this.prop ];

		if ( this.options.duration ) {
			this.pos = eased = jQuery.easing[ this.easing ](
				percent, this.options.duration * percent, 0, 1, this.options.duration
			);
		} else {
			this.pos = eased = percent;
		}
		this.now = ( this.end - this.start ) * eased + this.start;

		if ( this.options.step ) {
			this.options.step.call( this.elem, this.now, this );
		}

		if ( hooks && hooks.set ) {
			hooks.set( this );
		} else {
			Tween.propHooks._default.set( this );
		}
		return this;
	}
};

Tween.prototype.init.prototype = Tween.prototype;

Tween.propHooks = {
	_default: {
		get: function( tween ) {
			var result;

			// Use a property on the element directly when it is not a DOM element,
			// or when there is no matching style property that exists.
			if ( tween.elem.nodeType !== 1 ||
				tween.elem[ tween.prop ] != null && tween.elem.style[ tween.prop ] == null ) {
				return tween.elem[ tween.prop ];
			}

			// Passing an empty string as a 3rd parameter to .css will automatically
			// attempt a parseFloat and fallback to a string if the parse fails.
			// Simple values such as "10px" are parsed to Float;
			// complex values such as "rotate(1rad)" are returned as-is.
			result = jQuery.css( tween.elem, tween.prop, "" );

			// Empty strings, null, undefined and "auto" are converted to 0.
			return !result || result === "auto" ? 0 : result;
		},
		set: function( tween ) {

			// Use step hook for back compat.
			// Use cssHook if its there.
			// Use .style if available and use plain properties where available.
			if ( jQuery.fx.step[ tween.prop ] ) {
				jQuery.fx.step[ tween.prop ]( tween );
			} else if ( tween.elem.nodeType === 1 &&
				( tween.elem.style[ jQuery.cssProps[ tween.prop ] ] != null ||
					jQuery.cssHooks[ tween.prop ] ) ) {
				jQuery.style( tween.elem, tween.prop, tween.now + tween.unit );
			} else {
				tween.elem[ tween.prop ] = tween.now;
			}
		}
	}
};

// Support: IE <=9 only
// Panic based approach to setting things on disconnected nodes
Tween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {
	set: function( tween ) {
		if ( tween.elem.nodeType && tween.elem.parentNode ) {
			tween.elem[ tween.prop ] = tween.now;
		}
	}
};

jQuery.easing = {
	linear: function( p ) {
		return p;
	},
	swing: function( p ) {
		return 0.5 - Math.cos( p * Math.PI ) / 2;
	},
	_default: "swing"
};

jQuery.fx = Tween.prototype.init;

// Back compat <1.8 extension point
jQuery.fx.step = {};




var
	fxNow, inProgress,
	rfxtypes = /^(?:toggle|show|hide)$/,
	rrun = /queueHooks$/;

function schedule() {
	if ( inProgress ) {
		if ( document.hidden === false && window.requestAnimationFrame ) {
			window.requestAnimationFrame( schedule );
		} else {
			window.setTimeout( schedule, jQuery.fx.interval );
		}

		jQuery.fx.tick();
	}
}

// Animations created synchronously will run synchronously
function createFxNow() {
	window.setTimeout( function() {
		fxNow = undefined;
	} );
	return ( fxNow = Date.now() );
}

// Generate parameters to create a standard animation
function genFx( type, includeWidth ) {
	var which,
		i = 0,
		attrs = { height: type };

	// If we include width, step value is 1 to do all cssExpand values,
	// otherwise step value is 2 to skip over Left and Right
	includeWidth = includeWidth ? 1 : 0;
	for ( ; i < 4; i += 2 - includeWidth ) {
		which = cssExpand[ i ];
		attrs[ "margin" + which ] = attrs[ "padding" + which ] = type;
	}

	if ( includeWidth ) {
		attrs.opacity = attrs.width = type;
	}

	return attrs;
}

function createTween( value, prop, animation ) {
	var tween,
		collection = ( Animation.tweeners[ prop ] || [] ).concat( Animation.tweeners[ "*" ] ),
		index = 0,
		length = collection.length;
	for ( ; index < length; index++ ) {
		if ( ( tween = collection[ index ].call( animation, prop, value ) ) ) {

			// We're done with this property
			return tween;
		}
	}
}

function defaultPrefilter( elem, props, opts ) {
	var prop, value, toggle, hooks, oldfire, propTween, restoreDisplay, display,
		isBox = "width" in props || "height" in props,
		anim = this,
		orig = {},
		style = elem.style,
		hidden = elem.nodeType && isHiddenWithinTree( elem ),
		dataShow = dataPriv.get( elem, "fxshow" );

	// Queue-skipping animations hijack the fx hooks
	if ( !opts.queue ) {
		hooks = jQuery._queueHooks( elem, "fx" );
		if ( hooks.unqueued == null ) {
			hooks.unqueued = 0;
			oldfire = hooks.empty.fire;
			hooks.empty.fire = function() {
				if ( !hooks.unqueued ) {
					oldfire();
				}
			};
		}
		hooks.unqueued++;

		anim.always( function() {

			// Ensure the complete handler is called before this completes
			anim.always( function() {
				hooks.unqueued--;
				if ( !jQuery.queue( elem, "fx" ).length ) {
					hooks.empty.fire();
				}
			} );
		} );
	}

	// Detect show/hide animations
	for ( prop in props ) {
		value = props[ prop ];
		if ( rfxtypes.test( value ) ) {
			delete props[ prop ];
			toggle = toggle || value === "toggle";
			if ( value === ( hidden ? "hide" : "show" ) ) {

				// Pretend to be hidden if this is a "show" and
				// there is still data from a stopped show/hide
				if ( value === "show" && dataShow && dataShow[ prop ] !== undefined ) {
					hidden = true;

				// Ignore all other no-op show/hide data
				} else {
					continue;
				}
			}
			orig[ prop ] = dataShow && dataShow[ prop ] || jQuery.style( elem, prop );
		}
	}

	// Bail out if this is a no-op like .hide().hide()
	propTween = !jQuery.isEmptyObject( props );
	if ( !propTween && jQuery.isEmptyObject( orig ) ) {
		return;
	}

	// Restrict "overflow" and "display" styles during box animations
	if ( isBox && elem.nodeType === 1 ) {

		// Support: IE <=9 - 11, Edge 12 - 15
		// Record all 3 overflow attributes because IE does not infer the shorthand
		// from identically-valued overflowX and overflowY and Edge just mirrors
		// the overflowX value there.
		opts.overflow = [ style.overflow, style.overflowX, style.overflowY ];

		// Identify a display type, preferring old show/hide data over the CSS cascade
		restoreDisplay = dataShow && dataShow.display;
		if ( restoreDisplay == null ) {
			restoreDisplay = dataPriv.get( elem, "display" );
		}
		display = jQuery.css( elem, "display" );
		if ( display === "none" ) {
			if ( restoreDisplay ) {
				display = restoreDisplay;
			} else {

				// Get nonempty value(s) by temporarily forcing visibility
				showHide( [ elem ], true );
				restoreDisplay = elem.style.display || restoreDisplay;
				display = jQuery.css( elem, "display" );
				showHide( [ elem ] );
			}
		}

		// Animate inline elements as inline-block
		if ( display === "inline" || display === "inline-block" && restoreDisplay != null ) {
			if ( jQuery.css( elem, "float" ) === "none" ) {

				// Restore the original display value at the end of pure show/hide animations
				if ( !propTween ) {
					anim.done( function() {
						style.display = restoreDisplay;
					} );
					if ( restoreDisplay == null ) {
						display = style.display;
						restoreDisplay = display === "none" ? "" : display;
					}
				}
				style.display = "inline-block";
			}
		}
	}

	if ( opts.overflow ) {
		style.overflow = "hidden";
		anim.always( function() {
			style.overflow = opts.overflow[ 0 ];
			style.overflowX = opts.overflow[ 1 ];
			style.overflowY = opts.overflow[ 2 ];
		} );
	}

	// Implement show/hide animations
	propTween = false;
	for ( prop in orig ) {

		// General show/hide setup for this element animation
		if ( !propTween ) {
			if ( dataShow ) {
				if ( "hidden" in dataShow ) {
					hidden = dataShow.hidden;
				}
			} else {
				dataShow = dataPriv.access( elem, "fxshow", { display: restoreDisplay } );
			}

			// Store hidden/visible for toggle so `.stop().toggle()` "reverses"
			if ( toggle ) {
				dataShow.hidden = !hidden;
			}

			// Show elements before animating them
			if ( hidden ) {
				showHide( [ elem ], true );
			}

			/* eslint-disable no-loop-func */

			anim.done( function() {

			/* eslint-enable no-loop-func */

				// The final step of a "hide" animation is actually hiding the element
				if ( !hidden ) {
					showHide( [ elem ] );
				}
				dataPriv.remove( elem, "fxshow" );
				for ( prop in orig ) {
					jQuery.style( elem, prop, orig[ prop ] );
				}
			} );
		}

		// Per-property setup
		propTween = createTween( hidden ? dataShow[ prop ] : 0, prop, anim );
		if ( !( prop in dataShow ) ) {
			dataShow[ prop ] = propTween.start;
			if ( hidden ) {
				propTween.end = propTween.start;
				propTween.start = 0;
			}
		}
	}
}

function propFilter( props, specialEasing ) {
	var index, name, easing, value, hooks;

	// camelCase, specialEasing and expand cssHook pass
	for ( index in props ) {
		name = camelCase( index );
		easing = specialEasing[ name ];
		value = props[ index ];
		if ( Array.isArray( value ) ) {
			easing = value[ 1 ];
			value = props[ index ] = value[ 0 ];
		}

		if ( index !== name ) {
			props[ name ] = value;
			delete props[ index ];
		}

		hooks = jQuery.cssHooks[ name ];
		if ( hooks && "expand" in hooks ) {
			value = hooks.expand( value );
			delete props[ name ];

			// Not quite $.extend, this won't overwrite existing keys.
			// Reusing 'index' because we have the correct "name"
			for ( index in value ) {
				if ( !( index in props ) ) {
					props[ index ] = value[ index ];
					specialEasing[ index ] = easing;
				}
			}
		} else {
			specialEasing[ name ] = easing;
		}
	}
}

function Animation( elem, properties, options ) {
	var result,
		stopped,
		index = 0,
		length = Animation.prefilters.length,
		deferred = jQuery.Deferred().always( function() {

			// Don't match elem in the :animated selector
			delete tick.elem;
		} ),
		tick = function() {
			if ( stopped ) {
				return false;
			}
			var currentTime = fxNow || createFxNow(),
				remaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),

				// Support: Android 2.3 only
				// Archaic crash bug won't allow us to use `1 - ( 0.5 || 0 )` (#12497)
				temp = remaining / animation.duration || 0,
				percent = 1 - temp,
				index = 0,
				length = animation.tweens.length;

			for ( ; index < length; index++ ) {
				animation.tweens[ index ].run( percent );
			}

			deferred.notifyWith( elem, [ animation, percent, remaining ] );

			// If there's more to do, yield
			if ( percent < 1 && length ) {
				return remaining;
			}

			// If this was an empty animation, synthesize a final progress notification
			if ( !length ) {
				deferred.notifyWith( elem, [ animation, 1, 0 ] );
			}

			// Resolve the animation and report its conclusion
			deferred.resolveWith( elem, [ animation ] );
			return false;
		},
		animation = deferred.promise( {
			elem: elem,
			props: jQuery.extend( {}, properties ),
			opts: jQuery.extend( true, {
				specialEasing: {},
				easing: jQuery.easing._default
			}, options ),
			originalProperties: properties,
			originalOptions: options,
			startTime: fxNow || createFxNow(),
			duration: options.duration,
			tweens: [],
			createTween: function( prop, end ) {
				var tween = jQuery.Tween( elem, animation.opts, prop, end,
						animation.opts.specialEasing[ prop ] || animation.opts.easing );
				animation.tweens.push( tween );
				return tween;
			},
			stop: function( gotoEnd ) {
				var index = 0,

					// If we are going to the end, we want to run all the tweens
					// otherwise we skip this part
					length = gotoEnd ? animation.tweens.length : 0;
				if ( stopped ) {
					return this;
				}
				stopped = true;
				for ( ; index < length; index++ ) {
					animation.tweens[ index ].run( 1 );
				}

				// Resolve when we played the last frame; otherwise, reject
				if ( gotoEnd ) {
					deferred.notifyWith( elem, [ animation, 1, 0 ] );
					deferred.resolveWith( elem, [ animation, gotoEnd ] );
				} else {
					deferred.rejectWith( elem, [ animation, gotoEnd ] );
				}
				return this;
			}
		} ),
		props = animation.props;

	propFilter( props, animation.opts.specialEasing );

	for ( ; index < length; index++ ) {
		result = Animation.prefilters[ index ].call( animation, elem, props, animation.opts );
		if ( result ) {
			if ( isFunction( result.stop ) ) {
				jQuery._queueHooks( animation.elem, animation.opts.queue ).stop =
					result.stop.bind( result );
			}
			return result;
		}
	}

	jQuery.map( props, createTween, animation );

	if ( isFunction( animation.opts.start ) ) {
		animation.opts.start.call( elem, animation );
	}

	// Attach callbacks from options
	animation
		.progress( animation.opts.progress )
		.done( animation.opts.done, animation.opts.complete )
		.fail( animation.opts.fail )
		.always( animation.opts.always );

	jQuery.fx.timer(
		jQuery.extend( tick, {
			elem: elem,
			anim: animation,
			queue: animation.opts.queue
		} )
	);

	return animation;
}

jQuery.Animation = jQuery.extend( Animation, {

	tweeners: {
		"*": [ function( prop, value ) {
			var tween = this.createTween( prop, value );
			adjustCSS( tween.elem, prop, rcssNum.exec( value ), tween );
			return tween;
		} ]
	},

	tweener: function( props, callback ) {
		if ( isFunction( props ) ) {
			callback = props;
			props = [ "*" ];
		} else {
			props = props.match( rnothtmlwhite );
		}

		var prop,
			index = 0,
			length = props.length;

		for ( ; index < length; index++ ) {
			prop = props[ index ];
			Animation.tweeners[ prop ] = Animation.tweeners[ prop ] || [];
			Animation.tweeners[ prop ].unshift( callback );
		}
	},

	prefilters: [ defaultPrefilter ],

	prefilter: function( callback, prepend ) {
		if ( prepend ) {
			Animation.prefilters.unshift( callback );
		} else {
			Animation.prefilters.push( callback );
		}
	}
} );

jQuery.speed = function( speed, easing, fn ) {
	var opt = speed && typeof speed === "object" ? jQuery.extend( {}, speed ) : {
		complete: fn || !fn && easing ||
			isFunction( speed ) && speed,
		duration: speed,
		easing: fn && easing || easing && !isFunction( easing ) && easing
	};

	// Go to the end state if fx are off
	if ( jQuery.fx.off ) {
		opt.duration = 0;

	} else {
		if ( typeof opt.duration !== "number" ) {
			if ( opt.duration in jQuery.fx.speeds ) {
				opt.duration = jQuery.fx.speeds[ opt.duration ];

			} else {
				opt.duration = jQuery.fx.speeds._default;
			}
		}
	}

	// Normalize opt.queue - true/undefined/null -> "fx"
	if ( opt.queue == null || opt.queue === true ) {
		opt.queue = "fx";
	}

	// Queueing
	opt.old = opt.complete;

	opt.complete = function() {
		if ( isFunction( opt.old ) ) {
			opt.old.call( this );
		}

		if ( opt.queue ) {
			jQuery.dequeue( this, opt.queue );
		}
	};

	return opt;
};

jQuery.fn.extend( {
	fadeTo: function( speed, to, easing, callback ) {

		// Show any hidden elements after setting opacity to 0
		return this.filter( isHiddenWithinTree ).css( "opacity", 0 ).show()

			// Animate to the value specified
			.end().animate( { opacity: to }, speed, easing, callback );
	},
	animate: function( prop, speed, easing, callback ) {
		var empty = jQuery.isEmptyObject( prop ),
			optall = jQuery.speed( speed, easing, callback ),
			doAnimation = function() {

				// Operate on a copy of prop so per-property easing won't be lost
				var anim = Animation( this, jQuery.extend( {}, prop ), optall );

				// Empty animations, or finishing resolves immediately
				if ( empty || dataPriv.get( this, "finish" ) ) {
					anim.stop( true );
				}
			};
			doAnimation.finish = doAnimation;

		return empty || optall.queue === false ?
			this.each( doAnimation ) :
			this.queue( optall.queue, doAnimation );
	},
	stop: function( type, clearQueue, gotoEnd ) {
		var stopQueue = function( hooks ) {
			var stop = hooks.stop;
			delete hooks.stop;
			stop( gotoEnd );
		};

		if ( typeof type !== "string" ) {
			gotoEnd = clearQueue;
			clearQueue = type;
			type = undefined;
		}
		if ( clearQueue && type !== false ) {
			this.queue( type || "fx", [] );
		}

		return this.each( function() {
			var dequeue = true,
				index = type != null && type + "queueHooks",
				timers = jQuery.timers,
				data = dataPriv.get( this );

			if ( index ) {
				if ( data[ index ] && data[ index ].stop ) {
					stopQueue( data[ index ] );
				}
			} else {
				for ( index in data ) {
					if ( data[ index ] && data[ index ].stop && rrun.test( index ) ) {
						stopQueue( data[ index ] );
					}
				}
			}

			for ( index = timers.length; index--; ) {
				if ( timers[ index ].elem === this &&
					( type == null || timers[ index ].queue === type ) ) {

					timers[ index ].anim.stop( gotoEnd );
					dequeue = false;
					timers.splice( index, 1 );
				}
			}

			// Start the next in the queue if the last step wasn't forced.
			// Timers currently will call their complete callbacks, which
			// will dequeue but only if they were gotoEnd.
			if ( dequeue || !gotoEnd ) {
				jQuery.dequeue( this, type );
			}
		} );
	},
	finish: function( type ) {
		if ( type !== false ) {
			type = type || "fx";
		}
		return this.each( function() {
			var index,
				data = dataPriv.get( this ),
				queue = data[ type + "queue" ],
				hooks = data[ type + "queueHooks" ],
				timers = jQuery.timers,
				length = queue ? queue.length : 0;

			// Enable finishing flag on private data
			data.finish = true;

			// Empty the queue first
			jQuery.queue( this, type, [] );

			if ( hooks && hooks.stop ) {
				hooks.stop.call( this, true );
			}

			// Look for any active animations, and finish them
			for ( index = timers.length; index--; ) {
				if ( timers[ index ].elem === this && timers[ index ].queue === type ) {
					timers[ index ].anim.stop( true );
					timers.splice( index, 1 );
				}
			}

			// Look for any animations in the old queue and finish them
			for ( index = 0; index < length; index++ ) {
				if ( queue[ index ] && queue[ index ].finish ) {
					queue[ index ].finish.call( this );
				}
			}

			// Turn off finishing flag
			delete data.finish;
		} );
	}
} );

jQuery.each( [ "toggle", "show", "hide" ], function( i, name ) {
	var cssFn = jQuery.fn[ name ];
	jQuery.fn[ name ] = function( speed, easing, callback ) {
		return speed == null || typeof speed === "boolean" ?
			cssFn.apply( this, arguments ) :
			this.animate( genFx( name, true ), speed, easing, callback );
	};
} );

// Generate shortcuts for custom animations
jQuery.each( {
	slideDown: genFx( "show" ),
	slideUp: genFx( "hide" ),
	slideToggle: genFx( "toggle" ),
	fadeIn: { opacity: "show" },
	fadeOut: { opacity: "hide" },
	fadeToggle: { opacity: "toggle" }
}, function( name, props ) {
	jQuery.fn[ name ] = function( speed, easing, callback ) {
		return this.animate( props, speed, easing, callback );
	};
} );

jQuery.timers = [];
jQuery.fx.tick = function() {
	var timer,
		i = 0,
		timers = jQuery.timers;

	fxNow = Date.now();

	for ( ; i < timers.length; i++ ) {
		timer = timers[ i ];

		// Run the timer and safely remove it when done (allowing for external removal)
		if ( !timer() && timers[ i ] === timer ) {
			timers.splice( i--, 1 );
		}
	}

	if ( !timers.length ) {
		jQuery.fx.stop();
	}
	fxNow = undefined;
};

jQuery.fx.timer = function( timer ) {
	jQuery.timers.push( timer );
	jQuery.fx.start();
};

jQuery.fx.interval = 13;
jQuery.fx.start = function() {
	if ( inProgress ) {
		return;
	}

	inProgress = true;
	schedule();
};

jQuery.fx.stop = function() {
	inProgress = null;
};

jQuery.fx.speeds = {
	slow: 600,
	fast: 200,

	// Default speed
	_default: 400
};


// Based off of the plugin by Clint Helfers, with permission.
// https://web.archive.org/web/20100324014747/http://blindsignals.com/index.php/2009/07/jquery-delay/
jQuery.fn.delay = function( time, type ) {
	time = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
	type = type || "fx";

	return this.queue( type, function( next, hooks ) {
		var timeout = window.setTimeout( next, time );
		hooks.stop = function() {
			window.clearTimeout( timeout );
		};
	} );
};


( function() {
	var input = document.createElement( "input" ),
		select = document.createElement( "select" ),
		opt = select.appendChild( document.createElement( "option" ) );

	input.type = "checkbox";

	// Support: Android <=4.3 only
	// Default value for a checkbox should be "on"
	support.checkOn = input.value !== "";

	// Support: IE <=11 only
	// Must access selectedIndex to make default options select
	support.optSelected = opt.selected;

	// Support: IE <=11 only
	// An input loses its value after becoming a radio
	input = document.createElement( "input" );
	input.value = "t";
	input.type = "radio";
	support.radioValue = input.value === "t";
} )();


var boolHook,
	attrHandle = jQuery.expr.attrHandle;

jQuery.fn.extend( {
	attr: function( name, value ) {
		return access( this, jQuery.attr, name, value, arguments.length > 1 );
	},

	removeAttr: function( name ) {
		return this.each( function() {
			jQuery.removeAttr( this, name );
		} );
	}
} );

jQuery.extend( {
	attr: function( elem, name, value ) {
		var ret, hooks,
			nType = elem.nodeType;

		// Don't get/set attributes on text, comment and attribute nodes
		if ( nType === 3 || nType === 8 || nType === 2 ) {
			return;
		}

		// Fallback to prop when attributes are not supported
		if ( typeof elem.getAttribute === "undefined" ) {
			return jQuery.prop( elem, name, value );
		}

		// Attribute hooks are determined by the lowercase version
		// Grab necessary hook if one is defined
		if ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {
			hooks = jQuery.attrHooks[ name.toLowerCase() ] ||
				( jQuery.expr.match.bool.test( name ) ? boolHook : undefined );
		}

		if ( value !== undefined ) {
			if ( value === null ) {
				jQuery.removeAttr( elem, name );
				return;
			}

			if ( hooks && "set" in hooks &&
				( ret = hooks.set( elem, value, name ) ) !== undefined ) {
				return ret;
			}

			elem.setAttribute( name, value + "" );
			return value;
		}

		if ( hooks && "get" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
			return ret;
		}

		ret = jQuery.find.attr( elem, name );

		// Non-existent attributes return null, we normalize to undefined
		return ret == null ? undefined : ret;
	},

	attrHooks: {
		type: {
			set: function( elem, value ) {
				if ( !support.radioValue && value === "radio" &&
					nodeName( elem, "input" ) ) {
					var val = elem.value;
					elem.setAttribute( "type", value );
					if ( val ) {
						elem.value = val;
					}
					return value;
				}
			}
		}
	},

	removeAttr: function( elem, value ) {
		var name,
			i = 0,

			// Attribute names can contain non-HTML whitespace characters
			// https://html.spec.whatwg.org/multipage/syntax.html#attributes-2
			attrNames = value && value.match( rnothtmlwhite );

		if ( attrNames && elem.nodeType === 1 ) {
			while ( ( name = attrNames[ i++ ] ) ) {
				elem.removeAttribute( name );
			}
		}
	}
} );

// Hooks for boolean attributes
boolHook = {
	set: function( elem, value, name ) {
		if ( value === false ) {

			// Remove boolean attributes when set to false
			jQuery.removeAttr( elem, name );
		} else {
			elem.setAttribute( name, name );
		}
		return name;
	}
};

jQuery.each( jQuery.expr.match.bool.source.match( /\w+/g ), function( i, name ) {
	var getter = attrHandle[ name ] || jQuery.find.attr;

	attrHandle[ name ] = function( elem, name, isXML ) {
		var ret, handle,
			lowercaseName = name.toLowerCase();

		if ( !isXML ) {

			// Avoid an infinite loop by temporarily removing this function from the getter
			handle = attrHandle[ lowercaseName ];
			attrHandle[ lowercaseName ] = ret;
			ret = getter( elem, name, isXML ) != null ?
				lowercaseName :
				null;
			attrHandle[ lowercaseName ] = handle;
		}
		return ret;
	};
} );




var rfocusable = /^(?:input|select|textarea|button)$/i,
	rclickable = /^(?:a|area)$/i;

jQuery.fn.extend( {
	prop: function( name, value ) {
		return access( this, jQuery.prop, name, value, arguments.length > 1 );
	},

	removeProp: function( name ) {
		return this.each( function() {
			delete this[ jQuery.propFix[ name ] || name ];
		} );
	}
} );

jQuery.extend( {
	prop: function( elem, name, value ) {
		var ret, hooks,
			nType = elem.nodeType;

		// Don't get/set properties on text, comment and attribute nodes
		if ( nType === 3 || nType === 8 || nType === 2 ) {
			return;
		}

		if ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {

			// Fix name and attach hooks
			name = jQuery.propFix[ name ] || name;
			hooks = jQuery.propHooks[ name ];
		}

		if ( value !== undefined ) {
			if ( hooks && "set" in hooks &&
				( ret = hooks.set( elem, value, name ) ) !== undefined ) {
				return ret;
			}

			return ( elem[ name ] = value );
		}

		if ( hooks && "get" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
			return ret;
		}

		return elem[ name ];
	},

	propHooks: {
		tabIndex: {
			get: function( elem ) {

				// Support: IE <=9 - 11 only
				// elem.tabIndex doesn't always return the
				// correct value when it hasn't been explicitly set
				// https://web.archive.org/web/20141116233347/http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/
				// Use proper attribute retrieval(#12072)
				var tabindex = jQuery.find.attr( elem, "tabindex" );

				if ( tabindex ) {
					return parseInt( tabindex, 10 );
				}

				if (
					rfocusable.test( elem.nodeName ) ||
					rclickable.test( elem.nodeName ) &&
					elem.href
				) {
					return 0;
				}

				return -1;
			}
		}
	},

	propFix: {
		"for": "htmlFor",
		"class": "className"
	}
} );

// Support: IE <=11 only
// Accessing the selectedIndex property
// forces the browser to respect setting selected
// on the option
// The getter ensures a default option is selected
// when in an optgroup
// eslint rule "no-unused-expressions" is disabled for this code
// since it considers such accessions noop
if ( !support.optSelected ) {
	jQuery.propHooks.selected = {
		get: function( elem ) {

			/* eslint no-unused-expressions: "off" */

			var parent = elem.parentNode;
			if ( parent && parent.parentNode ) {
				parent.parentNode.selectedIndex;
			}
			return null;
		},
		set: function( elem ) {

			/* eslint no-unused-expressions: "off" */

			var parent = elem.parentNode;
			if ( parent ) {
				parent.selectedIndex;

				if ( parent.parentNode ) {
					parent.parentNode.selectedIndex;
				}
			}
		}
	};
}

jQuery.each( [
	"tabIndex",
	"readOnly",
	"maxLength",
	"cellSpacing",
	"cellPadding",
	"rowSpan",
	"colSpan",
	"useMap",
	"frameBorder",
	"contentEditable"
], function() {
	jQuery.propFix[ this.toLowerCase() ] = this;
} );




	// Strip and collapse whitespace according to HTML spec
	// https://infra.spec.whatwg.org/#strip-and-collapse-ascii-whitespace
	function stripAndCollapse( value ) {
		var tokens = value.match( rnothtmlwhite ) || [];
		return tokens.join( " " );
	}


function getClass( elem ) {
	return elem.getAttribute && elem.getAttribute( "class" ) || "";
}

function classesToArray( value ) {
	if ( Array.isArray( value ) ) {
		return value;
	}
	if ( typeof value === "string" ) {
		return value.match( rnothtmlwhite ) || [];
	}
	return [];
}

jQuery.fn.extend( {
	addClass: function( value ) {
		var classes, elem, cur, curValue, clazz, j, finalValue,
			i = 0;

		if ( isFunction( value ) ) {
			return this.each( function( j ) {
				jQuery( this ).addClass( value.call( this, j, getClass( this ) ) );
			} );
		}

		classes = classesToArray( value );

		if ( classes.length ) {
			while ( ( elem = this[ i++ ] ) ) {
				curValue = getClass( elem );
				cur = elem.nodeType === 1 && ( " " + stripAndCollapse( curValue ) + " " );

				if ( cur ) {
					j = 0;
					while ( ( clazz = classes[ j++ ] ) ) {
						if ( cur.indexOf( " " + clazz + " " ) < 0 ) {
							cur += clazz + " ";
						}
					}

					// Only assign if different to avoid unneeded rendering.
					finalValue = stripAndCollapse( cur );
					if ( curValue !== finalValue ) {
						elem.setAttribute( "class", finalValue );
					}
				}
			}
		}

		return this;
	},

	removeClass: function( value ) {
		var classes, elem, cur, curValue, clazz, j, finalValue,
			i = 0;

		if ( isFunction( value ) ) {
			return this.each( function( j ) {
				jQuery( this ).removeClass( value.call( this, j, getClass( this ) ) );
			} );
		}

		if ( !arguments.length ) {
			return this.attr( "class", "" );
		}

		classes = classesToArray( value );

		if ( classes.length ) {
			while ( ( elem = this[ i++ ] ) ) {
				curValue = getClass( elem );

				// This expression is here for better compressibility (see addClass)
				cur = elem.nodeType === 1 && ( " " + stripAndCollapse( curValue ) + " " );

				if ( cur ) {
					j = 0;
					while ( ( clazz = classes[ j++ ] ) ) {

						// Remove *all* instances
						while ( cur.indexOf( " " + clazz + " " ) > -1 ) {
							cur = cur.replace( " " + clazz + " ", " " );
						}
					}

					// Only assign if different to avoid unneeded rendering.
					finalValue = stripAndCollapse( cur );
					if ( curValue !== finalValue ) {
						elem.setAttribute( "class", finalValue );
					}
				}
			}
		}

		return this;
	},

	toggleClass: function( value, stateVal ) {
		var type = typeof value,
			isValidValue = type === "string" || Array.isArray( value );

		if ( typeof stateVal === "boolean" && isValidValue ) {
			return stateVal ? this.addClass( value ) : this.removeClass( value );
		}

		if ( isFunction( value ) ) {
			return this.each( function( i ) {
				jQuery( this ).toggleClass(
					value.call( this, i, getClass( this ), stateVal ),
					stateVal
				);
			} );
		}

		return this.each( function() {
			var className, i, self, classNames;

			if ( isValidValue ) {

				// Toggle individual class names
				i = 0;
				self = jQuery( this );
				classNames = classesToArray( value );

				while ( ( className = classNames[ i++ ] ) ) {

					// Check each className given, space separated list
					if ( self.hasClass( className ) ) {
						self.removeClass( className );
					} else {
						self.addClass( className );
					}
				}

			// Toggle whole class name
			} else if ( value === undefined || type === "boolean" ) {
				className = getClass( this );
				if ( className ) {

					// Store className if set
					dataPriv.set( this, "__className__", className );
				}

				// If the element has a class name or if we're passed `false`,
				// then remove the whole classname (if there was one, the above saved it).
				// Otherwise bring back whatever was previously saved (if anything),
				// falling back to the empty string if nothing was stored.
				if ( this.setAttribute ) {
					this.setAttribute( "class",
						className || value === false ?
						"" :
						dataPriv.get( this, "__className__" ) || ""
					);
				}
			}
		} );
	},

	hasClass: function( selector ) {
		var className, elem,
			i = 0;

		className = " " + selector + " ";
		while ( ( elem = this[ i++ ] ) ) {
			if ( elem.nodeType === 1 &&
				( " " + stripAndCollapse( getClass( elem ) ) + " " ).indexOf( className ) > -1 ) {
					return true;
			}
		}

		return false;
	}
} );




var rreturn = /\r/g;

jQuery.fn.extend( {
	val: function( value ) {
		var hooks, ret, valueIsFunction,
			elem = this[ 0 ];

		if ( !arguments.length ) {
			if ( elem ) {
				hooks = jQuery.valHooks[ elem.type ] ||
					jQuery.valHooks[ elem.nodeName.toLowerCase() ];

				if ( hooks &&
					"get" in hooks &&
					( ret = hooks.get( elem, "value" ) ) !== undefined
				) {
					return ret;
				}

				ret = elem.value;

				// Handle most common string cases
				if ( typeof ret === "string" ) {
					return ret.replace( rreturn, "" );
				}

				// Handle cases where value is null/undef or number
				return ret == null ? "" : ret;
			}

			return;
		}

		valueIsFunction = isFunction( value );

		return this.each( function( i ) {
			var val;

			if ( this.nodeType !== 1 ) {
				return;
			}

			if ( valueIsFunction ) {
				val = value.call( this, i, jQuery( this ).val() );
			} else {
				val = value;
			}

			// Treat null/undefined as ""; convert numbers to string
			if ( val == null ) {
				val = "";

			} else if ( typeof val === "number" ) {
				val += "";

			} else if ( Array.isArray( val ) ) {
				val = jQuery.map( val, function( value ) {
					return value == null ? "" : value + "";
				} );
			}

			hooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

			// If set returns undefined, fall back to normal setting
			if ( !hooks || !( "set" in hooks ) || hooks.set( this, val, "value" ) === undefined ) {
				this.value = val;
			}
		} );
	}
} );

jQuery.extend( {
	valHooks: {
		option: {
			get: function( elem ) {

				var val = jQuery.find.attr( elem, "value" );
				return val != null ?
					val :

					// Support: IE <=10 - 11 only
					// option.text throws exceptions (#14686, #14858)
					// Strip and collapse whitespace
					// https://html.spec.whatwg.org/#strip-and-collapse-whitespace
					stripAndCollapse( jQuery.text( elem ) );
			}
		},
		select: {
			get: function( elem ) {
				var value, option, i,
					options = elem.options,
					index = elem.selectedIndex,
					one = elem.type === "select-one",
					values = one ? null : [],
					max = one ? index + 1 : options.length;

				if ( index < 0 ) {
					i = max;

				} else {
					i = one ? index : 0;
				}

				// Loop through all the selected options
				for ( ; i < max; i++ ) {
					option = options[ i ];

					// Support: IE <=9 only
					// IE8-9 doesn't update selected after form reset (#2551)
					if ( ( option.selected || i === index ) &&

							// Don't return options that are disabled or in a disabled optgroup
							!option.disabled &&
							( !option.parentNode.disabled ||
								!nodeName( option.parentNode, "optgroup" ) ) ) {

						// Get the specific value for the option
						value = jQuery( option ).val();

						// We don't need an array for one selects
						if ( one ) {
							return value;
						}

						// Multi-Selects return an array
						values.push( value );
					}
				}

				return values;
			},

			set: function( elem, value ) {
				var optionSet, option,
					options = elem.options,
					values = jQuery.makeArray( value ),
					i = options.length;

				while ( i-- ) {
					option = options[ i ];

					/* eslint-disable no-cond-assign */

					if ( option.selected =
						jQuery.inArray( jQuery.valHooks.option.get( option ), values ) > -1
					) {
						optionSet = true;
					}

					/* eslint-enable no-cond-assign */
				}

				// Force browsers to behave consistently when non-matching value is set
				if ( !optionSet ) {
					elem.selectedIndex = -1;
				}
				return values;
			}
		}
	}
} );

// Radios and checkboxes getter/setter
jQuery.each( [ "radio", "checkbox" ], function() {
	jQuery.valHooks[ this ] = {
		set: function( elem, value ) {
			if ( Array.isArray( value ) ) {
				return ( elem.checked = jQuery.inArray( jQuery( elem ).val(), value ) > -1 );
			}
		}
	};
	if ( !support.checkOn ) {
		jQuery.valHooks[ this ].get = function( elem ) {
			return elem.getAttribute( "value" ) === null ? "on" : elem.value;
		};
	}
} );




// Return jQuery for attributes-only inclusion


support.focusin = "onfocusin" in window;


var rfocusMorph = /^(?:focusinfocus|focusoutblur)$/,
	stopPropagationCallback = function( e ) {
		e.stopPropagation();
	};

jQuery.extend( jQuery.event, {

	trigger: function( event, data, elem, onlyHandlers ) {

		var i, cur, tmp, bubbleType, ontype, handle, special, lastElement,
			eventPath = [ elem || document ],
			type = hasOwn.call( event, "type" ) ? event.type : event,
			namespaces = hasOwn.call( event, "namespace" ) ? event.namespace.split( "." ) : [];

		cur = lastElement = tmp = elem = elem || document;

		// Don't do events on text and comment nodes
		if ( elem.nodeType === 3 || elem.nodeType === 8 ) {
			return;
		}

		// focus/blur morphs to focusin/out; ensure we're not firing them right now
		if ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
			return;
		}

		if ( type.indexOf( "." ) > -1 ) {

			// Namespaced trigger; create a regexp to match event type in handle()
			namespaces = type.split( "." );
			type = namespaces.shift();
			namespaces.sort();
		}
		ontype = type.indexOf( ":" ) < 0 && "on" + type;

		// Caller can pass in a jQuery.Event object, Object, or just an event type string
		event = event[ jQuery.expando ] ?
			event :
			new jQuery.Event( type, typeof event === "object" && event );

		// Trigger bitmask: & 1 for native handlers; & 2 for jQuery (always true)
		event.isTrigger = onlyHandlers ? 2 : 3;
		event.namespace = namespaces.join( "." );
		event.rnamespace = event.namespace ?
			new RegExp( "(^|\\.)" + namespaces.join( "\\.(?:.*\\.|)" ) + "(\\.|$)" ) :
			null;

		// Clean up the event in case it is being reused
		event.result = undefined;
		if ( !event.target ) {
			event.target = elem;
		}

		// Clone any incoming data and prepend the event, creating the handler arg list
		data = data == null ?
			[ event ] :
			jQuery.makeArray( data, [ event ] );

		// Allow special events to draw outside the lines
		special = jQuery.event.special[ type ] || {};
		if ( !onlyHandlers && special.trigger && special.trigger.apply( elem, data ) === false ) {
			return;
		}

		// Determine event propagation path in advance, per W3C events spec (#9951)
		// Bubble up to document, then to window; watch for a global ownerDocument var (#9724)
		if ( !onlyHandlers && !special.noBubble && !isWindow( elem ) ) {

			bubbleType = special.delegateType || type;
			if ( !rfocusMorph.test( bubbleType + type ) ) {
				cur = cur.parentNode;
			}
			for ( ; cur; cur = cur.parentNode ) {
				eventPath.push( cur );
				tmp = cur;
			}

			// Only add window if we got to document (e.g., not plain obj or detached DOM)
			if ( tmp === ( elem.ownerDocument || document ) ) {
				eventPath.push( tmp.defaultView || tmp.parentWindow || window );
			}
		}

		// Fire handlers on the event path
		i = 0;
		while ( ( cur = eventPath[ i++ ] ) && !event.isPropagationStopped() ) {
			lastElement = cur;
			event.type = i > 1 ?
				bubbleType :
				special.bindType || type;

			// jQuery handler
			handle = ( dataPriv.get( cur, "events" ) || {} )[ event.type ] &&
				dataPriv.get( cur, "handle" );
			if ( handle ) {
				handle.apply( cur, data );
			}

			// Native handler
			handle = ontype && cur[ ontype ];
			if ( handle && handle.apply && acceptData( cur ) ) {
				event.result = handle.apply( cur, data );
				if ( event.result === false ) {
					event.preventDefault();
				}
			}
		}
		event.type = type;

		// If nobody prevented the default action, do it now
		if ( !onlyHandlers && !event.isDefaultPrevented() ) {

			if ( ( !special._default ||
				special._default.apply( eventPath.pop(), data ) === false ) &&
				acceptData( elem ) ) {

				// Call a native DOM method on the target with the same name as the event.
				// Don't do default actions on window, that's where global variables be (#6170)
				if ( ontype && isFunction( elem[ type ] ) && !isWindow( elem ) ) {

					// Don't re-trigger an onFOO event when we call its FOO() method
					tmp = elem[ ontype ];

					if ( tmp ) {
						elem[ ontype ] = null;
					}

					// Prevent re-triggering of the same event, since we already bubbled it above
					jQuery.event.triggered = type;

					if ( event.isPropagationStopped() ) {
						lastElement.addEventListener( type, stopPropagationCallback );
					}

					elem[ type ]();

					if ( event.isPropagationStopped() ) {
						lastElement.removeEventListener( type, stopPropagationCallback );
					}

					jQuery.event.triggered = undefined;

					if ( tmp ) {
						elem[ ontype ] = tmp;
					}
				}
			}
		}

		return event.result;
	},

	// Piggyback on a donor event to simulate a different one
	// Used only for `focus(in | out)` events
	simulate: function( type, elem, event ) {
		var e = jQuery.extend(
			new jQuery.Event(),
			event,
			{
				type: type,
				isSimulated: true
			}
		);

		jQuery.event.trigger( e, null, elem );
	}

} );

jQuery.fn.extend( {

	trigger: function( type, data ) {
		return this.each( function() {
			jQuery.event.trigger( type, data, this );
		} );
	},
	triggerHandler: function( type, data ) {
		var elem = this[ 0 ];
		if ( elem ) {
			return jQuery.event.trigger( type, data, elem, true );
		}
	}
} );


// Support: Firefox <=44
// Firefox doesn't have focus(in | out) events
// Related ticket - https://bugzilla.mozilla.org/show_bug.cgi?id=687787
//
// Support: Chrome <=48 - 49, Safari <=9.0 - 9.1
// focus(in | out) events fire after focus & blur events,
// which is spec violation - http://www.w3.org/TR/DOM-Level-3-Events/#events-focusevent-event-order
// Related ticket - https://bugs.chromium.org/p/chromium/issues/detail?id=449857
if ( !support.focusin ) {
	jQuery.each( { focus: "focusin", blur: "focusout" }, function( orig, fix ) {

		// Attach a single capturing handler on the document while someone wants focusin/focusout
		var handler = function( event ) {
			jQuery.event.simulate( fix, event.target, jQuery.event.fix( event ) );
		};

		jQuery.event.special[ fix ] = {
			setup: function() {
				var doc = this.ownerDocument || this,
					attaches = dataPriv.access( doc, fix );

				if ( !attaches ) {
					doc.addEventListener( orig, handler, true );
				}
				dataPriv.access( doc, fix, ( attaches || 0 ) + 1 );
			},
			teardown: function() {
				var doc = this.ownerDocument || this,
					attaches = dataPriv.access( doc, fix ) - 1;

				if ( !attaches ) {
					doc.removeEventListener( orig, handler, true );
					dataPriv.remove( doc, fix );

				} else {
					dataPriv.access( doc, fix, attaches );
				}
			}
		};
	} );
}
var location = window.location;

var nonce = Date.now();

var rquery = ( /\?/ );



// Cross-browser xml parsing
jQuery.parseXML = function( data ) {
	var xml;
	if ( !data || typeof data !== "string" ) {
		return null;
	}

	// Support: IE 9 - 11 only
	// IE throws on parseFromString with invalid input.
	try {
		xml = ( new window.DOMParser() ).parseFromString( data, "text/xml" );
	} catch ( e ) {
		xml = undefined;
	}

	if ( !xml || xml.getElementsByTagName( "parsererror" ).length ) {
		jQuery.error( "Invalid XML: " + data );
	}
	return xml;
};


var
	rbracket = /\[\]$/,
	rCRLF = /\r?\n/g,
	rsubmitterTypes = /^(?:submit|button|image|reset|file)$/i,
	rsubmittable = /^(?:input|select|textarea|keygen)/i;

function buildParams( prefix, obj, traditional, add ) {
	var name;

	if ( Array.isArray( obj ) ) {

		// Serialize array item.
		jQuery.each( obj, function( i, v ) {
			if ( traditional || rbracket.test( prefix ) ) {

				// Treat each array item as a scalar.
				add( prefix, v );

			} else {

				// Item is non-scalar (array or object), encode its numeric index.
				buildParams(
					prefix + "[" + ( typeof v === "object" && v != null ? i : "" ) + "]",
					v,
					traditional,
					add
				);
			}
		} );

	} else if ( !traditional && toType( obj ) === "object" ) {

		// Serialize object item.
		for ( name in obj ) {
			buildParams( prefix + "[" + name + "]", obj[ name ], traditional, add );
		}

	} else {

		// Serialize scalar item.
		add( prefix, obj );
	}
}

// Serialize an array of form elements or a set of
// key/values into a query string
jQuery.param = function( a, traditional ) {
	var prefix,
		s = [],
		add = function( key, valueOrFunction ) {

			// If value is a function, invoke it and use its return value
			var value = isFunction( valueOrFunction ) ?
				valueOrFunction() :
				valueOrFunction;

			s[ s.length ] = encodeURIComponent( key ) + "=" +
				encodeURIComponent( value == null ? "" : value );
		};

	// If an array was passed in, assume that it is an array of form elements.
	if ( Array.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {

		// Serialize the form elements
		jQuery.each( a, function() {
			add( this.name, this.value );
		} );

	} else {

		// If traditional, encode the "old" way (the way 1.3.2 or older
		// did it), otherwise encode params recursively.
		for ( prefix in a ) {
			buildParams( prefix, a[ prefix ], traditional, add );
		}
	}

	// Return the resulting serialization
	return s.join( "&" );
};

jQuery.fn.extend( {
	serialize: function() {
		return jQuery.param( this.serializeArray() );
	},
	serializeArray: function() {
		return this.map( function() {

			// Can add propHook for "elements" to filter or add form elements
			var elements = jQuery.prop( this, "elements" );
			return elements ? jQuery.makeArray( elements ) : this;
		} )
		.filter( function() {
			var type = this.type;

			// Use .is( ":disabled" ) so that fieldset[disabled] works
			return this.name && !jQuery( this ).is( ":disabled" ) &&
				rsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&
				( this.checked || !rcheckableType.test( type ) );
		} )
		.map( function( i, elem ) {
			var val = jQuery( this ).val();

			if ( val == null ) {
				return null;
			}

			if ( Array.isArray( val ) ) {
				return jQuery.map( val, function( val ) {
					return { name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
				} );
			}

			return { name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
		} ).get();
	}
} );


var
	r20 = /%20/g,
	rhash = /#.*$/,
	rantiCache = /([?&])_=[^&]*/,
	rheaders = /^(.*?):[ \t]*([^\r\n]*)$/mg,

	// #7653, #8125, #8152: local protocol detection
	rlocalProtocol = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
	rnoContent = /^(?:GET|HEAD)$/,
	rprotocol = /^\/\//,

	/* Prefilters
	 * 1) They are useful to introduce custom dataTypes (see ajax/jsonp.js for an example)
	 * 2) These are called:
	 *    - BEFORE asking for a transport
	 *    - AFTER param serialization (s.data is a string if s.processData is true)
	 * 3) key is the dataType
	 * 4) the catchall symbol "*" can be used
	 * 5) execution will start with transport dataType and THEN continue down to "*" if needed
	 */
	prefilters = {},

	/* Transports bindings
	 * 1) key is the dataType
	 * 2) the catchall symbol "*" can be used
	 * 3) selection will start with transport dataType and THEN go to "*" if needed
	 */
	transports = {},

	// Avoid comment-prolog char sequence (#10098); must appease lint and evade compression
	allTypes = "*/".concat( "*" ),

	// Anchor tag for parsing the document origin
	originAnchor = document.createElement( "a" );
	originAnchor.href = location.href;

// Base "constructor" for jQuery.ajaxPrefilter and jQuery.ajaxTransport
function addToPrefiltersOrTransports( structure ) {

	// dataTypeExpression is optional and defaults to "*"
	return function( dataTypeExpression, func ) {

		if ( typeof dataTypeExpression !== "string" ) {
			func = dataTypeExpression;
			dataTypeExpression = "*";
		}

		var dataType,
			i = 0,
			dataTypes = dataTypeExpression.toLowerCase().match( rnothtmlwhite ) || [];

		if ( isFunction( func ) ) {

			// For each dataType in the dataTypeExpression
			while ( ( dataType = dataTypes[ i++ ] ) ) {

				// Prepend if requested
				if ( dataType[ 0 ] === "+" ) {
					dataType = dataType.slice( 1 ) || "*";
					( structure[ dataType ] = structure[ dataType ] || [] ).unshift( func );

				// Otherwise append
				} else {
					( structure[ dataType ] = structure[ dataType ] || [] ).push( func );
				}
			}
		}
	};
}

// Base inspection function for prefilters and transports
function inspectPrefiltersOrTransports( structure, options, originalOptions, jqXHR ) {

	var inspected = {},
		seekingTransport = ( structure === transports );

	function inspect( dataType ) {
		var selected;
		inspected[ dataType ] = true;
		jQuery.each( structure[ dataType ] || [], function( _, prefilterOrFactory ) {
			var dataTypeOrTransport = prefilterOrFactory( options, originalOptions, jqXHR );
			if ( typeof dataTypeOrTransport === "string" &&
				!seekingTransport && !inspected[ dataTypeOrTransport ] ) {

				options.dataTypes.unshift( dataTypeOrTransport );
				inspect( dataTypeOrTransport );
				return false;
			} else if ( seekingTransport ) {
				return !( selected = dataTypeOrTransport );
			}
		} );
		return selected;
	}

	return inspect( options.dataTypes[ 0 ] ) || !inspected[ "*" ] && inspect( "*" );
}

// A special extend for ajax options
// that takes "flat" options (not to be deep extended)
// Fixes #9887
function ajaxExtend( target, src ) {
	var key, deep,
		flatOptions = jQuery.ajaxSettings.flatOptions || {};

	for ( key in src ) {
		if ( src[ key ] !== undefined ) {
			( flatOptions[ key ] ? target : ( deep || ( deep = {} ) ) )[ key ] = src[ key ];
		}
	}
	if ( deep ) {
		jQuery.extend( true, target, deep );
	}

	return target;
}

/* Handles responses to an ajax request:
 * - finds the right dataType (mediates between content-type and expected dataType)
 * - returns the corresponding response
 */
function ajaxHandleResponses( s, jqXHR, responses ) {

	var ct, type, finalDataType, firstDataType,
		contents = s.contents,
		dataTypes = s.dataTypes;

	// Remove auto dataType and get content-type in the process
	while ( dataTypes[ 0 ] === "*" ) {
		dataTypes.shift();
		if ( ct === undefined ) {
			ct = s.mimeType || jqXHR.getResponseHeader( "Content-Type" );
		}
	}

	// Check if we're dealing with a known content-type
	if ( ct ) {
		for ( type in contents ) {
			if ( contents[ type ] && contents[ type ].test( ct ) ) {
				dataTypes.unshift( type );
				break;
			}
		}
	}

	// Check to see if we have a response for the expected dataType
	if ( dataTypes[ 0 ] in responses ) {
		finalDataType = dataTypes[ 0 ];
	} else {

		// Try convertible dataTypes
		for ( type in responses ) {
			if ( !dataTypes[ 0 ] || s.converters[ type + " " + dataTypes[ 0 ] ] ) {
				finalDataType = type;
				break;
			}
			if ( !firstDataType ) {
				firstDataType = type;
			}
		}

		// Or just use first one
		finalDataType = finalDataType || firstDataType;
	}

	// If we found a dataType
	// We add the dataType to the list if needed
	// and return the corresponding response
	if ( finalDataType ) {
		if ( finalDataType !== dataTypes[ 0 ] ) {
			dataTypes.unshift( finalDataType );
		}
		return responses[ finalDataType ];
	}
}

/* Chain conversions given the request and the original response
 * Also sets the responseXXX fields on the jqXHR instance
 */
function ajaxConvert( s, response, jqXHR, isSuccess ) {
	var conv2, current, conv, tmp, prev,
		converters = {},

		// Work with a copy of dataTypes in case we need to modify it for conversion
		dataTypes = s.dataTypes.slice();

	// Create converters map with lowercased keys
	if ( dataTypes[ 1 ] ) {
		for ( conv in s.converters ) {
			converters[ conv.toLowerCase() ] = s.converters[ conv ];
		}
	}

	current = dataTypes.shift();

	// Convert to each sequential dataType
	while ( current ) {

		if ( s.responseFields[ current ] ) {
			jqXHR[ s.responseFields[ current ] ] = response;
		}

		// Apply the dataFilter if provided
		if ( !prev && isSuccess && s.dataFilter ) {
			response = s.dataFilter( response, s.dataType );
		}

		prev = current;
		current = dataTypes.shift();

		if ( current ) {

			// There's only work to do if current dataType is non-auto
			if ( current === "*" ) {

				current = prev;

			// Convert response if prev dataType is non-auto and differs from current
			} else if ( prev !== "*" && prev !== current ) {

				// Seek a direct converter
				conv = converters[ prev + " " + current ] || converters[ "* " + current ];

				// If none found, seek a pair
				if ( !conv ) {
					for ( conv2 in converters ) {

						// If conv2 outputs current
						tmp = conv2.split( " " );
						if ( tmp[ 1 ] === current ) {

							// If prev can be converted to accepted input
							conv = converters[ prev + " " + tmp[ 0 ] ] ||
								converters[ "* " + tmp[ 0 ] ];
							if ( conv ) {

								// Condense equivalence converters
								if ( conv === true ) {
									conv = converters[ conv2 ];

								// Otherwise, insert the intermediate dataType
								} else if ( converters[ conv2 ] !== true ) {
									current = tmp[ 0 ];
									dataTypes.unshift( tmp[ 1 ] );
								}
								break;
							}
						}
					}
				}

				// Apply converter (if not an equivalence)
				if ( conv !== true ) {

					// Unless errors are allowed to bubble, catch and return them
					if ( conv && s.throws ) {
						response = conv( response );
					} else {
						try {
							response = conv( response );
						} catch ( e ) {
							return {
								state: "parsererror",
								error: conv ? e : "No conversion from " + prev + " to " + current
							};
						}
					}
				}
			}
		}
	}

	return { state: "success", data: response };
}

jQuery.extend( {

	// Counter for holding the number of active queries
	active: 0,

	// Last-Modified header cache for next request
	lastModified: {},
	etag: {},

	ajaxSettings: {
		url: location.href,
		type: "GET",
		isLocal: rlocalProtocol.test( location.protocol ),
		global: true,
		processData: true,
		async: true,
		contentType: "application/x-www-form-urlencoded; charset=UTF-8",

		/*
		timeout: 0,
		data: null,
		dataType: null,
		username: null,
		password: null,
		cache: null,
		throws: false,
		traditional: false,
		headers: {},
		*/

		accepts: {
			"*": allTypes,
			text: "text/plain",
			html: "text/html",
			xml: "application/xml, text/xml",
			json: "application/json, text/javascript"
		},

		contents: {
			xml: /\bxml\b/,
			html: /\bhtml/,
			json: /\bjson\b/
		},

		responseFields: {
			xml: "responseXML",
			text: "responseText",
			json: "responseJSON"
		},

		// Data converters
		// Keys separate source (or catchall "*") and destination types with a single space
		converters: {

			// Convert anything to text
			"* text": String,

			// Text to html (true = no transformation)
			"text html": true,

			// Evaluate text as a json expression
			"text json": JSON.parse,

			// Parse text as xml
			"text xml": jQuery.parseXML
		},

		// For options that shouldn't be deep extended:
		// you can add your own custom options here if
		// and when you create one that shouldn't be
		// deep extended (see ajaxExtend)
		flatOptions: {
			url: true,
			context: true
		}
	},

	// Creates a full fledged settings object into target
	// with both ajaxSettings and settings fields.
	// If target is omitted, writes into ajaxSettings.
	ajaxSetup: function( target, settings ) {
		return settings ?

			// Building a settings object
			ajaxExtend( ajaxExtend( target, jQuery.ajaxSettings ), settings ) :

			// Extending ajaxSettings
			ajaxExtend( jQuery.ajaxSettings, target );
	},

	ajaxPrefilter: addToPrefiltersOrTransports( prefilters ),
	ajaxTransport: addToPrefiltersOrTransports( transports ),

	// Main method
	ajax: function( url, options ) {

		// If url is an object, simulate pre-1.5 signature
		if ( typeof url === "object" ) {
			options = url;
			url = undefined;
		}

		// Force options to be an object
		options = options || {};

		var transport,

			// URL without anti-cache param
			cacheURL,

			// Response headers
			responseHeadersString,
			responseHeaders,

			// timeout handle
			timeoutTimer,

			// Url cleanup var
			urlAnchor,

			// Request state (becomes false upon send and true upon completion)
			completed,

			// To know if global events are to be dispatched
			fireGlobals,

			// Loop variable
			i,

			// uncached part of the url
			uncached,

			// Create the final options object
			s = jQuery.ajaxSetup( {}, options ),

			// Callbacks context
			callbackContext = s.context || s,

			// Context for global events is callbackContext if it is a DOM node or jQuery collection
			globalEventContext = s.context &&
				( callbackContext.nodeType || callbackContext.jquery ) ?
					jQuery( callbackContext ) :
					jQuery.event,

			// Deferreds
			deferred = jQuery.Deferred(),
			completeDeferred = jQuery.Callbacks( "once memory" ),

			// Status-dependent callbacks
			statusCode = s.statusCode || {},

			// Headers (they are sent all at once)
			requestHeaders = {},
			requestHeadersNames = {},

			// Default abort message
			strAbort = "canceled",

			// Fake xhr
			jqXHR = {
				readyState: 0,

				// Builds headers hashtable if needed
				getResponseHeader: function( key ) {
					var match;
					if ( completed ) {
						if ( !responseHeaders ) {
							responseHeaders = {};
							while ( ( match = rheaders.exec( responseHeadersString ) ) ) {
								responseHeaders[ match[ 1 ].toLowerCase() ] = match[ 2 ];
							}
						}
						match = responseHeaders[ key.toLowerCase() ];
					}
					return match == null ? null : match;
				},

				// Raw string
				getAllResponseHeaders: function() {
					return completed ? responseHeadersString : null;
				},

				// Caches the header
				setRequestHeader: function( name, value ) {
					if ( completed == null ) {
						name = requestHeadersNames[ name.toLowerCase() ] =
							requestHeadersNames[ name.toLowerCase() ] || name;
						requestHeaders[ name ] = value;
					}
					return this;
				},

				// Overrides response content-type header
				overrideMimeType: function( type ) {
					if ( completed == null ) {
						s.mimeType = type;
					}
					return this;
				},

				// Status-dependent callbacks
				statusCode: function( map ) {
					var code;
					if ( map ) {
						if ( completed ) {

							// Execute the appropriate callbacks
							jqXHR.always( map[ jqXHR.status ] );
						} else {

							// Lazy-add the new callbacks in a way that preserves old ones
							for ( code in map ) {
								statusCode[ code ] = [ statusCode[ code ], map[ code ] ];
							}
						}
					}
					return this;
				},

				// Cancel the request
				abort: function( statusText ) {
					var finalText = statusText || strAbort;
					if ( transport ) {
						transport.abort( finalText );
					}
					done( 0, finalText );
					return this;
				}
			};

		// Attach deferreds
		deferred.promise( jqXHR );

		// Add protocol if not provided (prefilters might expect it)
		// Handle falsy url in the settings object (#10093: consistency with old signature)
		// We also use the url parameter if available
		s.url = ( ( url || s.url || location.href ) + "" )
			.replace( rprotocol, location.protocol + "//" );

		// Alias method option to type as per ticket #12004
		s.type = options.method || options.type || s.method || s.type;

		// Extract dataTypes list
		s.dataTypes = ( s.dataType || "*" ).toLowerCase().match( rnothtmlwhite ) || [ "" ];

		// A cross-domain request is in order when the origin doesn't match the current origin.
		if ( s.crossDomain == null ) {
			urlAnchor = document.createElement( "a" );

			// Support: IE <=8 - 11, Edge 12 - 15
			// IE throws exception on accessing the href property if url is malformed,
			// e.g. http://example.com:80x/
			try {
				urlAnchor.href = s.url;

				// Support: IE <=8 - 11 only
				// Anchor's host property isn't correctly set when s.url is relative
				urlAnchor.href = urlAnchor.href;
				s.crossDomain = originAnchor.protocol + "//" + originAnchor.host !==
					urlAnchor.protocol + "//" + urlAnchor.host;
			} catch ( e ) {

				// If there is an error parsing the URL, assume it is crossDomain,
				// it can be rejected by the transport if it is invalid
				s.crossDomain = true;
			}
		}

		// Convert data if not already a string
		if ( s.data && s.processData && typeof s.data !== "string" ) {
			s.data = jQuery.param( s.data, s.traditional );
		}

		// Apply prefilters
		inspectPrefiltersOrTransports( prefilters, s, options, jqXHR );

		// If request was aborted inside a prefilter, stop there
		if ( completed ) {
			return jqXHR;
		}

		// We can fire global events as of now if asked to
		// Don't fire events if jQuery.event is undefined in an AMD-usage scenario (#15118)
		fireGlobals = jQuery.event && s.global;

		// Watch for a new set of requests
		if ( fireGlobals && jQuery.active++ === 0 ) {
			jQuery.event.trigger( "ajaxStart" );
		}

		// Uppercase the type
		s.type = s.type.toUpperCase();

		// Determine if request has content
		s.hasContent = !rnoContent.test( s.type );

		// Save the URL in case we're toying with the If-Modified-Since
		// and/or If-None-Match header later on
		// Remove hash to simplify url manipulation
		cacheURL = s.url.replace( rhash, "" );

		// More options handling for requests with no content
		if ( !s.hasContent ) {

			// Remember the hash so we can put it back
			uncached = s.url.slice( cacheURL.length );

			// If data is available and should be processed, append data to url
			if ( s.data && ( s.processData || typeof s.data === "string" ) ) {
				cacheURL += ( rquery.test( cacheURL ) ? "&" : "?" ) + s.data;

				// #9682: remove data so that it's not used in an eventual retry
				delete s.data;
			}

			// Add or update anti-cache param if needed
			if ( s.cache === false ) {
				cacheURL = cacheURL.replace( rantiCache, "$1" );
				uncached = ( rquery.test( cacheURL ) ? "&" : "?" ) + "_=" + ( nonce++ ) + uncached;
			}

			// Put hash and anti-cache on the URL that will be requested (gh-1732)
			s.url = cacheURL + uncached;

		// Change '%20' to '+' if this is encoded form body content (gh-2658)
		} else if ( s.data && s.processData &&
			( s.contentType || "" ).indexOf( "application/x-www-form-urlencoded" ) === 0 ) {
			s.data = s.data.replace( r20, "+" );
		}

		// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
		if ( s.ifModified ) {
			if ( jQuery.lastModified[ cacheURL ] ) {
				jqXHR.setRequestHeader( "If-Modified-Since", jQuery.lastModified[ cacheURL ] );
			}
			if ( jQuery.etag[ cacheURL ] ) {
				jqXHR.setRequestHeader( "If-None-Match", jQuery.etag[ cacheURL ] );
			}
		}

		// Set the correct header, if data is being sent
		if ( s.data && s.hasContent && s.contentType !== false || options.contentType ) {
			jqXHR.setRequestHeader( "Content-Type", s.contentType );
		}

		// Set the Accepts header for the server, depending on the dataType
		jqXHR.setRequestHeader(
			"Accept",
			s.dataTypes[ 0 ] && s.accepts[ s.dataTypes[ 0 ] ] ?
				s.accepts[ s.dataTypes[ 0 ] ] +
					( s.dataTypes[ 0 ] !== "*" ? ", " + allTypes + "; q=0.01" : "" ) :
				s.accepts[ "*" ]
		);

		// Check for headers option
		for ( i in s.headers ) {
			jqXHR.setRequestHeader( i, s.headers[ i ] );
		}

		// Allow custom headers/mimetypes and early abort
		if ( s.beforeSend &&
			( s.beforeSend.call( callbackContext, jqXHR, s ) === false || completed ) ) {

			// Abort if not done already and return
			return jqXHR.abort();
		}

		// Aborting is no longer a cancellation
		strAbort = "abort";

		// Install callbacks on deferreds
		completeDeferred.add( s.complete );
		jqXHR.done( s.success );
		jqXHR.fail( s.error );

		// Get transport
		transport = inspectPrefiltersOrTransports( transports, s, options, jqXHR );

		// If no transport, we auto-abort
		if ( !transport ) {
			done( -1, "No Transport" );
		} else {
			jqXHR.readyState = 1;

			// Send global event
			if ( fireGlobals ) {
				globalEventContext.trigger( "ajaxSend", [ jqXHR, s ] );
			}

			// If request was aborted inside ajaxSend, stop there
			if ( completed ) {
				return jqXHR;
			}

			// Timeout
			if ( s.async && s.timeout > 0 ) {
				timeoutTimer = window.setTimeout( function() {
					jqXHR.abort( "timeout" );
				}, s.timeout );
			}

			try {
				completed = false;
				transport.send( requestHeaders, done );
			} catch ( e ) {

				// Rethrow post-completion exceptions
				if ( completed ) {
					throw e;
				}

				// Propagate others as results
				done( -1, e );
			}
		}

		// Callback for when everything is done
		function done( status, nativeStatusText, responses, headers ) {
			var isSuccess, success, error, response, modified,
				statusText = nativeStatusText;

			// Ignore repeat invocations
			if ( completed ) {
				return;
			}

			completed = true;

			// Clear timeout if it exists
			if ( timeoutTimer ) {
				window.clearTimeout( timeoutTimer );
			}

			// Dereference transport for early garbage collection
			// (no matter how long the jqXHR object will be used)
			transport = undefined;

			// Cache response headers
			responseHeadersString = headers || "";

			// Set readyState
			jqXHR.readyState = status > 0 ? 4 : 0;

			// Determine if successful
			isSuccess = status >= 200 && status < 300 || status === 304;

			// Get response data
			if ( responses ) {
				response = ajaxHandleResponses( s, jqXHR, responses );
			}

			// Convert no matter what (that way responseXXX fields are always set)
			response = ajaxConvert( s, response, jqXHR, isSuccess );

			// If successful, handle type chaining
			if ( isSuccess ) {

				// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
				if ( s.ifModified ) {
					modified = jqXHR.getResponseHeader( "Last-Modified" );
					if ( modified ) {
						jQuery.lastModified[ cacheURL ] = modified;
					}
					modified = jqXHR.getResponseHeader( "etag" );
					if ( modified ) {
						jQuery.etag[ cacheURL ] = modified;
					}
				}

				// if no content
				if ( status === 204 || s.type === "HEAD" ) {
					statusText = "nocontent";

				// if not modified
				} else if ( status === 304 ) {
					statusText = "notmodified";

				// If we have data, let's convert it
				} else {
					statusText = response.state;
					success = response.data;
					error = response.error;
					isSuccess = !error;
				}
			} else {

				// Extract error from statusText and normalize for non-aborts
				error = statusText;
				if ( status || !statusText ) {
					statusText = "error";
					if ( status < 0 ) {
						status = 0;
					}
				}
			}

			// Set data for the fake xhr object
			jqXHR.status = status;
			jqXHR.statusText = ( nativeStatusText || statusText ) + "";

			// Success/Error
			if ( isSuccess ) {
				deferred.resolveWith( callbackContext, [ success, statusText, jqXHR ] );
			} else {
				deferred.rejectWith( callbackContext, [ jqXHR, statusText, error ] );
			}

			// Status-dependent callbacks
			jqXHR.statusCode( statusCode );
			statusCode = undefined;

			if ( fireGlobals ) {
				globalEventContext.trigger( isSuccess ? "ajaxSuccess" : "ajaxError",
					[ jqXHR, s, isSuccess ? success : error ] );
			}

			// Complete
			completeDeferred.fireWith( callbackContext, [ jqXHR, statusText ] );

			if ( fireGlobals ) {
				globalEventContext.trigger( "ajaxComplete", [ jqXHR, s ] );

				// Handle the global AJAX counter
				if ( !( --jQuery.active ) ) {
					jQuery.event.trigger( "ajaxStop" );
				}
			}
		}

		return jqXHR;
	},

	getJSON: function( url, data, callback ) {
		return jQuery.get( url, data, callback, "json" );
	},

	getScript: function( url, callback ) {
		return jQuery.get( url, undefined, callback, "script" );
	}
} );

jQuery.each( [ "get", "post" ], function( i, method ) {
	jQuery[ method ] = function( url, data, callback, type ) {

		// Shift arguments if data argument was omitted
		if ( isFunction( data ) ) {
			type = type || callback;
			callback = data;
			data = undefined;
		}

		// The url can be an options object (which then must have .url)
		return jQuery.ajax( jQuery.extend( {
			url: url,
			type: method,
			dataType: type,
			data: data,
			success: callback
		}, jQuery.isPlainObject( url ) && url ) );
	};
} );


jQuery._evalUrl = function( url ) {
	return jQuery.ajax( {
		url: url,

		// Make this explicit, since user can override this through ajaxSetup (#11264)
		type: "GET",
		dataType: "script",
		cache: true,
		async: false,
		global: false,
		"throws": true
	} );
};


jQuery.fn.extend( {
	wrapAll: function( html ) {
		var wrap;

		if ( this[ 0 ] ) {
			if ( isFunction( html ) ) {
				html = html.call( this[ 0 ] );
			}

			// The elements to wrap the target around
			wrap = jQuery( html, this[ 0 ].ownerDocument ).eq( 0 ).clone( true );

			if ( this[ 0 ].parentNode ) {
				wrap.insertBefore( this[ 0 ] );
			}

			wrap.map( function() {
				var elem = this;

				while ( elem.firstElementChild ) {
					elem = elem.firstElementChild;
				}

				return elem;
			} ).append( this );
		}

		return this;
	},

	wrapInner: function( html ) {
		if ( isFunction( html ) ) {
			return this.each( function( i ) {
				jQuery( this ).wrapInner( html.call( this, i ) );
			} );
		}

		return this.each( function() {
			var self = jQuery( this ),
				contents = self.contents();

			if ( contents.length ) {
				contents.wrapAll( html );

			} else {
				self.append( html );
			}
		} );
	},

	wrap: function( html ) {
		var htmlIsFunction = isFunction( html );

		return this.each( function( i ) {
			jQuery( this ).wrapAll( htmlIsFunction ? html.call( this, i ) : html );
		} );
	},

	unwrap: function( selector ) {
		this.parent( selector ).not( "body" ).each( function() {
			jQuery( this ).replaceWith( this.childNodes );
		} );
		return this;
	}
} );


jQuery.expr.pseudos.hidden = function( elem ) {
	return !jQuery.expr.pseudos.visible( elem );
};
jQuery.expr.pseudos.visible = function( elem ) {
	return !!( elem.offsetWidth || elem.offsetHeight || elem.getClientRects().length );
};




jQuery.ajaxSettings.xhr = function() {
	try {
		return new window.XMLHttpRequest();
	} catch ( e ) {}
};

var xhrSuccessStatus = {

		// File protocol always yields status code 0, assume 200
		0: 200,

		// Support: IE <=9 only
		// #1450: sometimes IE returns 1223 when it should be 204
		1223: 204
	},
	xhrSupported = jQuery.ajaxSettings.xhr();

support.cors = !!xhrSupported && ( "withCredentials" in xhrSupported );
support.ajax = xhrSupported = !!xhrSupported;

jQuery.ajaxTransport( function( options ) {
	var callback, errorCallback;

	// Cross domain only allowed if supported through XMLHttpRequest
	if ( support.cors || xhrSupported && !options.crossDomain ) {
		return {
			send: function( headers, complete ) {
				var i,
					xhr = options.xhr();

				xhr.open(
					options.type,
					options.url,
					options.async,
					options.username,
					options.password
				);

				// Apply custom fields if provided
				if ( options.xhrFields ) {
					for ( i in options.xhrFields ) {
						xhr[ i ] = options.xhrFields[ i ];
					}
				}

				// Override mime type if needed
				if ( options.mimeType && xhr.overrideMimeType ) {
					xhr.overrideMimeType( options.mimeType );
				}

				// X-Requested-With header
				// For cross-domain requests, seeing as conditions for a preflight are
				// akin to a jigsaw puzzle, we simply never set it to be sure.
				// (it can always be set on a per-request basis or even using ajaxSetup)
				// For same-domain requests, won't change header if already provided.
				if ( !options.crossDomain && !headers[ "X-Requested-With" ] ) {
					headers[ "X-Requested-With" ] = "XMLHttpRequest";
				}

				// Set headers
				for ( i in headers ) {
					xhr.setRequestHeader( i, headers[ i ] );
				}

				// Callback
				callback = function( type ) {
					return function() {
						if ( callback ) {
							callback = errorCallback = xhr.onload =
								xhr.onerror = xhr.onabort = xhr.ontimeout =
									xhr.onreadystatechange = null;

							if ( type === "abort" ) {
								xhr.abort();
							} else if ( type === "error" ) {

								// Support: IE <=9 only
								// On a manual native abort, IE9 throws
								// errors on any property access that is not readyState
								if ( typeof xhr.status !== "number" ) {
									complete( 0, "error" );
								} else {
									complete(

										// File: protocol always yields status 0; see #8605, #14207
										xhr.status,
										xhr.statusText
									);
								}
							} else {
								complete(
									xhrSuccessStatus[ xhr.status ] || xhr.status,
									xhr.statusText,

									// Support: IE <=9 only
									// IE9 has no XHR2 but throws on binary (trac-11426)
									// For XHR2 non-text, let the caller handle it (gh-2498)
									( xhr.responseType || "text" ) !== "text"  ||
									typeof xhr.responseText !== "string" ?
										{ binary: xhr.response } :
										{ text: xhr.responseText },
									xhr.getAllResponseHeaders()
								);
							}
						}
					};
				};

				// Listen to events
				xhr.onload = callback();
				errorCallback = xhr.onerror = xhr.ontimeout = callback( "error" );

				// Support: IE 9 only
				// Use onreadystatechange to replace onabort
				// to handle uncaught aborts
				if ( xhr.onabort !== undefined ) {
					xhr.onabort = errorCallback;
				} else {
					xhr.onreadystatechange = function() {

						// Check readyState before timeout as it changes
						if ( xhr.readyState === 4 ) {

							// Allow onerror to be called first,
							// but that will not handle a native abort
							// Also, save errorCallback to a variable
							// as xhr.onerror cannot be accessed
							window.setTimeout( function() {
								if ( callback ) {
									errorCallback();
								}
							} );
						}
					};
				}

				// Create the abort callback
				callback = callback( "abort" );

				try {

					// Do send the request (this may raise an exception)
					xhr.send( options.hasContent && options.data || null );
				} catch ( e ) {

					// #14683: Only rethrow if this hasn't been notified as an error yet
					if ( callback ) {
						throw e;
					}
				}
			},

			abort: function() {
				if ( callback ) {
					callback();
				}
			}
		};
	}
} );




// Prevent auto-execution of scripts when no explicit dataType was provided (See gh-2432)
jQuery.ajaxPrefilter( function( s ) {
	if ( s.crossDomain ) {
		s.contents.script = false;
	}
} );

// Install script dataType
jQuery.ajaxSetup( {
	accepts: {
		script: "text/javascript, application/javascript, " +
			"application/ecmascript, application/x-ecmascript"
	},
	contents: {
		script: /\b(?:java|ecma)script\b/
	},
	converters: {
		"text script": function( text ) {
			jQuery.globalEval( text );
			return text;
		}
	}
} );

// Handle cache's special case and crossDomain
jQuery.ajaxPrefilter( "script", function( s ) {
	if ( s.cache === undefined ) {
		s.cache = false;
	}
	if ( s.crossDomain ) {
		s.type = "GET";
	}
} );

// Bind script tag hack transport
jQuery.ajaxTransport( "script", function( s ) {

	// This transport only deals with cross domain requests
	if ( s.crossDomain ) {
		var script, callback;
		return {
			send: function( _, complete ) {
				script = jQuery( "<script>" ).prop( {
					charset: s.scriptCharset,
					src: s.url
				} ).on(
					"load error",
					callback = function( evt ) {
						script.remove();
						callback = null;
						if ( evt ) {
							complete( evt.type === "error" ? 404 : 200, evt.type );
						}
					}
				);

				// Use native DOM manipulation to avoid our domManip AJAX trickery
				document.head.appendChild( script[ 0 ] );
			},
			abort: function() {
				if ( callback ) {
					callback();
				}
			}
		};
	}
} );




var oldCallbacks = [],
	rjsonp = /(=)\?(?=&|$)|\?\?/;

// Default jsonp settings
jQuery.ajaxSetup( {
	jsonp: "callback",
	jsonpCallback: function() {
		var callback = oldCallbacks.pop() || ( jQuery.expando + "_" + ( nonce++ ) );
		this[ callback ] = true;
		return callback;
	}
} );

// Detect, normalize options and install callbacks for jsonp requests
jQuery.ajaxPrefilter( "json jsonp", function( s, originalSettings, jqXHR ) {

	var callbackName, overwritten, responseContainer,
		jsonProp = s.jsonp !== false && ( rjsonp.test( s.url ) ?
			"url" :
			typeof s.data === "string" &&
				( s.contentType || "" )
					.indexOf( "application/x-www-form-urlencoded" ) === 0 &&
				rjsonp.test( s.data ) && "data"
		);

	// Handle iff the expected data type is "jsonp" or we have a parameter to set
	if ( jsonProp || s.dataTypes[ 0 ] === "jsonp" ) {

		// Get callback name, remembering preexisting value associated with it
		callbackName = s.jsonpCallback = isFunction( s.jsonpCallback ) ?
			s.jsonpCallback() :
			s.jsonpCallback;

		// Insert callback into url or form data
		if ( jsonProp ) {
			s[ jsonProp ] = s[ jsonProp ].replace( rjsonp, "$1" + callbackName );
		} else if ( s.jsonp !== false ) {
			s.url += ( rquery.test( s.url ) ? "&" : "?" ) + s.jsonp + "=" + callbackName;
		}

		// Use data converter to retrieve json after script execution
		s.converters[ "script json" ] = function() {
			if ( !responseContainer ) {
				jQuery.error( callbackName + " was not called" );
			}
			return responseContainer[ 0 ];
		};

		// Force json dataType
		s.dataTypes[ 0 ] = "json";

		// Install callback
		overwritten = window[ callbackName ];
		window[ callbackName ] = function() {
			responseContainer = arguments;
		};

		// Clean-up function (fires after converters)
		jqXHR.always( function() {

			// If previous value didn't exist - remove it
			if ( overwritten === undefined ) {
				jQuery( window ).removeProp( callbackName );

			// Otherwise restore preexisting value
			} else {
				window[ callbackName ] = overwritten;
			}

			// Save back as free
			if ( s[ callbackName ] ) {

				// Make sure that re-using the options doesn't screw things around
				s.jsonpCallback = originalSettings.jsonpCallback;

				// Save the callback name for future use
				oldCallbacks.push( callbackName );
			}

			// Call if it was a function and we have a response
			if ( responseContainer && isFunction( overwritten ) ) {
				overwritten( responseContainer[ 0 ] );
			}

			responseContainer = overwritten = undefined;
		} );

		// Delegate to script
		return "script";
	}
} );




// Support: Safari 8 only
// In Safari 8 documents created via document.implementation.createHTMLDocument
// collapse sibling forms: the second one becomes a child of the first one.
// Because of that, this security measure has to be disabled in Safari 8.
// https://bugs.webkit.org/show_bug.cgi?id=137337
support.createHTMLDocument = ( function() {
	var body = document.implementation.createHTMLDocument( "" ).body;
	body.innerHTML = "<form></form><form></form>";
	return body.childNodes.length === 2;
} )();


// Argument "data" should be string of html
// context (optional): If specified, the fragment will be created in this context,
// defaults to document
// keepScripts (optional): If true, will include scripts passed in the html string
jQuery.parseHTML = function( data, context, keepScripts ) {
	if ( typeof data !== "string" ) {
		return [];
	}
	if ( typeof context === "boolean" ) {
		keepScripts = context;
		context = false;
	}

	var base, parsed, scripts;

	if ( !context ) {

		// Stop scripts or inline event handlers from being executed immediately
		// by using document.implementation
		if ( support.createHTMLDocument ) {
			context = document.implementation.createHTMLDocument( "" );

			// Set the base href for the created document
			// so any parsed elements with URLs
			// are based on the document's URL (gh-2965)
			base = context.createElement( "base" );
			base.href = document.location.href;
			context.head.appendChild( base );
		} else {
			context = document;
		}
	}

	parsed = rsingleTag.exec( data );
	scripts = !keepScripts && [];

	// Single tag
	if ( parsed ) {
		return [ context.createElement( parsed[ 1 ] ) ];
	}

	parsed = buildFragment( [ data ], context, scripts );

	if ( scripts && scripts.length ) {
		jQuery( scripts ).remove();
	}

	return jQuery.merge( [], parsed.childNodes );
};


/**
 * Load a url into a page
 */
jQuery.fn.load = function( url, params, callback ) {
	var selector, type, response,
		self = this,
		off = url.indexOf( " " );

	if ( off > -1 ) {
		selector = stripAndCollapse( url.slice( off ) );
		url = url.slice( 0, off );
	}

	// If it's a function
	if ( isFunction( params ) ) {

		// We assume that it's the callback
		callback = params;
		params = undefined;

	// Otherwise, build a param string
	} else if ( params && typeof params === "object" ) {
		type = "POST";
	}

	// If we have elements to modify, make the request
	if ( self.length > 0 ) {
		jQuery.ajax( {
			url: url,

			// If "type" variable is undefined, then "GET" method will be used.
			// Make value of this field explicit since
			// user can override it through ajaxSetup method
			type: type || "GET",
			dataType: "html",
			data: params
		} ).done( function( responseText ) {

			// Save response for use in complete callback
			response = arguments;

			self.html( selector ?

				// If a selector was specified, locate the right elements in a dummy div
				// Exclude scripts to avoid IE 'Permission Denied' errors
				jQuery( "<div>" ).append( jQuery.parseHTML( responseText ) ).find( selector ) :

				// Otherwise use the full result
				responseText );

		// If the request succeeds, this function gets "data", "status", "jqXHR"
		// but they are ignored because response was set above.
		// If it fails, this function gets "jqXHR", "status", "error"
		} ).always( callback && function( jqXHR, status ) {
			self.each( function() {
				callback.apply( this, response || [ jqXHR.responseText, status, jqXHR ] );
			} );
		} );
	}

	return this;
};




// Attach a bunch of functions for handling common AJAX events
jQuery.each( [
	"ajaxStart",
	"ajaxStop",
	"ajaxComplete",
	"ajaxError",
	"ajaxSuccess",
	"ajaxSend"
], function( i, type ) {
	jQuery.fn[ type ] = function( fn ) {
		return this.on( type, fn );
	};
} );




jQuery.expr.pseudos.animated = function( elem ) {
	return jQuery.grep( jQuery.timers, function( fn ) {
		return elem === fn.elem;
	} ).length;
};




jQuery.offset = {
	setOffset: function( elem, options, i ) {
		var curPosition, curLeft, curCSSTop, curTop, curOffset, curCSSLeft, calculatePosition,
			position = jQuery.css( elem, "position" ),
			curElem = jQuery( elem ),
			props = {};

		// Set position first, in-case top/left are set even on static elem
		if ( position === "static" ) {
			elem.style.position = "relative";
		}

		curOffset = curElem.offset();
		curCSSTop = jQuery.css( elem, "top" );
		curCSSLeft = jQuery.css( elem, "left" );
		calculatePosition = ( position === "absolute" || position === "fixed" ) &&
			( curCSSTop + curCSSLeft ).indexOf( "auto" ) > -1;

		// Need to be able to calculate position if either
		// top or left is auto and position is either absolute or fixed
		if ( calculatePosition ) {
			curPosition = curElem.position();
			curTop = curPosition.top;
			curLeft = curPosition.left;

		} else {
			curTop = parseFloat( curCSSTop ) || 0;
			curLeft = parseFloat( curCSSLeft ) || 0;
		}

		if ( isFunction( options ) ) {

			// Use jQuery.extend here to allow modification of coordinates argument (gh-1848)
			options = options.call( elem, i, jQuery.extend( {}, curOffset ) );
		}

		if ( options.top != null ) {
			props.top = ( options.top - curOffset.top ) + curTop;
		}
		if ( options.left != null ) {
			props.left = ( options.left - curOffset.left ) + curLeft;
		}

		if ( "using" in options ) {
			options.using.call( elem, props );

		} else {
			curElem.css( props );
		}
	}
};

jQuery.fn.extend( {

	// offset() relates an element's border box to the document origin
	offset: function( options ) {

		// Preserve chaining for setter
		if ( arguments.length ) {
			return options === undefined ?
				this :
				this.each( function( i ) {
					jQuery.offset.setOffset( this, options, i );
				} );
		}

		var rect, win,
			elem = this[ 0 ];

		if ( !elem ) {
			return;
		}

		// Return zeros for disconnected and hidden (display: none) elements (gh-2310)
		// Support: IE <=11 only
		// Running getBoundingClientRect on a
		// disconnected node in IE throws an error
		if ( !elem.getClientRects().length ) {
			return { top: 0, left: 0 };
		}

		// Get document-relative position by adding viewport scroll to viewport-relative gBCR
		rect = elem.getBoundingClientRect();
		win = elem.ownerDocument.defaultView;
		return {
			top: rect.top + win.pageYOffset,
			left: rect.left + win.pageXOffset
		};
	},

	// position() relates an element's margin box to its offset parent's padding box
	// This corresponds to the behavior of CSS absolute positioning
	position: function() {
		if ( !this[ 0 ] ) {
			return;
		}

		var offsetParent, offset, doc,
			elem = this[ 0 ],
			parentOffset = { top: 0, left: 0 };

		// position:fixed elements are offset from the viewport, which itself always has zero offset
		if ( jQuery.css( elem, "position" ) === "fixed" ) {

			// Assume position:fixed implies availability of getBoundingClientRect
			offset = elem.getBoundingClientRect();

		} else {
			offset = this.offset();

			// Account for the *real* offset parent, which can be the document or its root element
			// when a statically positioned element is identified
			doc = elem.ownerDocument;
			offsetParent = elem.offsetParent || doc.documentElement;
			while ( offsetParent &&
				( offsetParent === doc.body || offsetParent === doc.documentElement ) &&
				jQuery.css( offsetParent, "position" ) === "static" ) {

				offsetParent = offsetParent.parentNode;
			}
			if ( offsetParent && offsetParent !== elem && offsetParent.nodeType === 1 ) {

				// Incorporate borders into its offset, since they are outside its content origin
				parentOffset = jQuery( offsetParent ).offset();
				parentOffset.top += jQuery.css( offsetParent, "borderTopWidth", true );
				parentOffset.left += jQuery.css( offsetParent, "borderLeftWidth", true );
			}
		}

		// Subtract parent offsets and element margins
		return {
			top: offset.top - parentOffset.top - jQuery.css( elem, "marginTop", true ),
			left: offset.left - parentOffset.left - jQuery.css( elem, "marginLeft", true )
		};
	},

	// This method will return documentElement in the following cases:
	// 1) For the element inside the iframe without offsetParent, this method will return
	//    documentElement of the parent window
	// 2) For the hidden or detached element
	// 3) For body or html element, i.e. in case of the html node - it will return itself
	//
	// but those exceptions were never presented as a real life use-cases
	// and might be considered as more preferable results.
	//
	// This logic, however, is not guaranteed and can change at any point in the future
	offsetParent: function() {
		return this.map( function() {
			var offsetParent = this.offsetParent;

			while ( offsetParent && jQuery.css( offsetParent, "position" ) === "static" ) {
				offsetParent = offsetParent.offsetParent;
			}

			return offsetParent || documentElement;
		} );
	}
} );

// Create scrollLeft and scrollTop methods
jQuery.each( { scrollLeft: "pageXOffset", scrollTop: "pageYOffset" }, function( method, prop ) {
	var top = "pageYOffset" === prop;

	jQuery.fn[ method ] = function( val ) {
		return access( this, function( elem, method, val ) {

			// Coalesce documents and windows
			var win;
			if ( isWindow( elem ) ) {
				win = elem;
			} else if ( elem.nodeType === 9 ) {
				win = elem.defaultView;
			}

			if ( val === undefined ) {
				return win ? win[ prop ] : elem[ method ];
			}

			if ( win ) {
				win.scrollTo(
					!top ? val : win.pageXOffset,
					top ? val : win.pageYOffset
				);

			} else {
				elem[ method ] = val;
			}
		}, method, val, arguments.length );
	};
} );

// Support: Safari <=7 - 9.1, Chrome <=37 - 49
// Add the top/left cssHooks using jQuery.fn.position
// Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084
// Blink bug: https://bugs.chromium.org/p/chromium/issues/detail?id=589347
// getComputedStyle returns percent when specified for top/left/bottom/right;
// rather than make the css module depend on the offset module, just check for it here
jQuery.each( [ "top", "left" ], function( i, prop ) {
	jQuery.cssHooks[ prop ] = addGetHookIf( support.pixelPosition,
		function( elem, computed ) {
			if ( computed ) {
				computed = curCSS( elem, prop );

				// If curCSS returns percentage, fallback to offset
				return rnumnonpx.test( computed ) ?
					jQuery( elem ).position()[ prop ] + "px" :
					computed;
			}
		}
	);
} );


// Create innerHeight, innerWidth, height, width, outerHeight and outerWidth methods
jQuery.each( { Height: "height", Width: "width" }, function( name, type ) {
	jQuery.each( { padding: "inner" + name, content: type, "": "outer" + name },
		function( defaultExtra, funcName ) {

		// Margin is only for outerHeight, outerWidth
		jQuery.fn[ funcName ] = function( margin, value ) {
			var chainable = arguments.length && ( defaultExtra || typeof margin !== "boolean" ),
				extra = defaultExtra || ( margin === true || value === true ? "margin" : "border" );

			return access( this, function( elem, type, value ) {
				var doc;

				if ( isWindow( elem ) ) {

					// $( window ).outerWidth/Height return w/h including scrollbars (gh-1729)
					return funcName.indexOf( "outer" ) === 0 ?
						elem[ "inner" + name ] :
						elem.document.documentElement[ "client" + name ];
				}

				// Get document width or height
				if ( elem.nodeType === 9 ) {
					doc = elem.documentElement;

					// Either scroll[Width/Height] or offset[Width/Height] or client[Width/Height],
					// whichever is greatest
					return Math.max(
						elem.body[ "scroll" + name ], doc[ "scroll" + name ],
						elem.body[ "offset" + name ], doc[ "offset" + name ],
						doc[ "client" + name ]
					);
				}

				return value === undefined ?

					// Get width or height on the element, requesting but not forcing parseFloat
					jQuery.css( elem, type, extra ) :

					// Set width or height on the element
					jQuery.style( elem, type, value, extra );
			}, type, chainable ? margin : undefined, chainable );
		};
	} );
} );


jQuery.each( ( "blur focus focusin focusout resize scroll click dblclick " +
	"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave " +
	"change select submit keydown keypress keyup contextmenu" ).split( " " ),
	function( i, name ) {

	// Handle event binding
	jQuery.fn[ name ] = function( data, fn ) {
		return arguments.length > 0 ?
			this.on( name, null, data, fn ) :
			this.trigger( name );
	};
} );

jQuery.fn.extend( {
	hover: function( fnOver, fnOut ) {
		return this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
	}
} );




jQuery.fn.extend( {

	bind: function( types, data, fn ) {
		return this.on( types, null, data, fn );
	},
	unbind: function( types, fn ) {
		return this.off( types, null, fn );
	},

	delegate: function( selector, types, data, fn ) {
		return this.on( types, selector, data, fn );
	},
	undelegate: function( selector, types, fn ) {

		// ( namespace ) or ( selector, types [, fn] )
		return arguments.length === 1 ?
			this.off( selector, "**" ) :
			this.off( types, selector || "**", fn );
	}
} );

// Bind a function to a context, optionally partially applying any
// arguments.
// jQuery.proxy is deprecated to promote standards (specifically Function#bind)
// However, it is not slated for removal any time soon
jQuery.proxy = function( fn, context ) {
	var tmp, args, proxy;

	if ( typeof context === "string" ) {
		tmp = fn[ context ];
		context = fn;
		fn = tmp;
	}

	// Quick check to determine if target is callable, in the spec
	// this throws a TypeError, but we will just return undefined.
	if ( !isFunction( fn ) ) {
		return undefined;
	}

	// Simulated bind
	args = slice.call( arguments, 2 );
	proxy = function() {
		return fn.apply( context || this, args.concat( slice.call( arguments ) ) );
	};

	// Set the guid of unique handler to the same of original handler, so it can be removed
	proxy.guid = fn.guid = fn.guid || jQuery.guid++;

	return proxy;
};

jQuery.holdReady = function( hold ) {
	if ( hold ) {
		jQuery.readyWait++;
	} else {
		jQuery.ready( true );
	}
};
jQuery.isArray = Array.isArray;
jQuery.parseJSON = JSON.parse;
jQuery.nodeName = nodeName;
jQuery.isFunction = isFunction;
jQuery.isWindow = isWindow;
jQuery.camelCase = camelCase;
jQuery.type = toType;

jQuery.now = Date.now;

jQuery.isNumeric = function( obj ) {

	// As of jQuery 3.0, isNumeric is limited to
	// strings and numbers (primitives or objects)
	// that can be coerced to finite numbers (gh-2662)
	var type = jQuery.type( obj );
	return ( type === "number" || type === "string" ) &&

		// parseFloat NaNs numeric-cast false positives ("")
		// ...but misinterprets leading-number strings, particularly hex literals ("0x...")
		// subtraction forces infinities to NaN
		!isNaN( obj - parseFloat( obj ) );
};




// Register as a named AMD module, since jQuery can be concatenated with other
// files that may use define, but not via a proper concatenation script that
// understands anonymous AMD modules. A named AMD is safest and most robust
// way to register. Lowercase jquery is used because AMD module names are
// derived from file names, and jQuery is normally delivered in a lowercase
// file name. Do this after creating the global so that if an AMD module wants
// to call noConflict to hide this version of jQuery, it will work.

// Note that for maximum portability, libraries that are not jQuery should
// declare themselves as anonymous modules, and avoid setting a global if an
// AMD loader is present. jQuery is a special case. For more information, see
// https://github.com/jrburke/requirejs/wiki/Updating-existing-libraries#wiki-anon

if ( true ) {
	!(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_RESULT__ = (function() {
		return jQuery;
	}).apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
}




var

	// Map over jQuery in case of overwrite
	_jQuery = window.jQuery,

	// Map over the $ in case of overwrite
	_$ = window.$;

jQuery.noConflict = function( deep ) {
	if ( window.$ === jQuery ) {
		window.$ = _$;
	}

	if ( deep && window.jQuery === jQuery ) {
		window.jQuery = _jQuery;
	}

	return jQuery;
};

// Expose jQuery and $ identifiers, even in AMD
// (#7102#comment:10, https://github.com/jquery/jquery/pull/557)
// and CommonJS for browser emulators (#13566)
if ( !noGlobal ) {
	window.jQuery = window.$ = jQuery;
}




return jQuery;
} );


/***/ }),

/***/ "./node_modules/webpack/buildin/global.js":
/*!***********************************!*\
  !*** (webpack)/buildin/global.js ***!
  \***********************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports) {

var g;

// This works in non-strict mode
g = (function() {
	return this;
})();

try {
	// This works if eval is allowed (see CSP)
	g = g || Function("return this")() || (1,eval)("this");
} catch(e) {
	// This works if the window reference is available
	if(typeof window === "object")
		g = window;
}

// g can still be undefined, but nothing to do about it...
// We return undefined, instead of nothing here, so it's
// easier to handle this case. if(!global) { ...}

module.exports = g;


/***/ }),

/***/ "./node_modules/webpack/buildin/module.js":
/*!***********************************!*\
  !*** (webpack)/buildin/module.js ***!
  \***********************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports) {

module.exports = function(module) {
	if(!module.webpackPolyfill) {
		module.deprecate = function() {};
		module.paths = [];
		// module.parent = undefined by default
		if(!module.children) module.children = [];
		Object.defineProperty(module, "loaded", {
			enumerable: true,
			get: function() {
				return module.l;
			}
		});
		Object.defineProperty(module, "id", {
			enumerable: true,
			get: function() {
				return module.i;
			}
		});
		module.webpackPolyfill = 1;
	}
	return module;
};


/***/ }),

/***/ "./public/assets/js/survey/extension/EasyAutocomplete/easy-autocomplete.min.css":
/*!**************************************************************************************!*\
  !*** ./public/assets/js/survey/extension/EasyAutocomplete/easy-autocomplete.min.css ***!
  \**************************************************************************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./public/assets/js/survey/extension/EasyAutocomplete/jquery.easy-autocomplete.min.js":
/*!********************************************************************************************!*\
  !*** ./public/assets/js/survey/extension/EasyAutocomplete/jquery.easy-autocomplete.min.js ***!
  \********************************************************************************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($, jQuery) {var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

/*
 * easy-autocomplete
 * jQuery plugin for autocompletion
 * 
 * @author Łukasz Pawełczak (http://github.com/pawelczak)
 * @version 1.3.5
 * Copyright  License: 
 */

var EasyAutocomplete = function (a) {
  return a.Configuration = function (a) {
    function b() {
      if ("xml" === a.dataType && (a.getValue || (a.getValue = function (a) {
        return $(a).text();
      }), a.list || (a.list = {}), a.list.sort || (a.list.sort = {}), a.list.sort.method = function (b, c) {
        return b = a.getValue(b), c = a.getValue(c), c > b ? -1 : b > c ? 1 : 0;
      }, a.list.match || (a.list.match = {}), a.list.match.method = function (a, b) {
        return a.search(b) > -1;
      }), void 0 !== a.categories && a.categories instanceof Array) {
        for (var b = [], c = 0, d = a.categories.length; d > c; c += 1) {
          var e = a.categories[c];for (var f in h.categories[0]) {
            void 0 === e[f] && (e[f] = h.categories[0][f]);
          }b.push(e);
        }a.categories = b;
      }
    }function c() {
      function b(a, c) {
        var d = a || {};for (var e in a) {
          void 0 !== c[e] && null !== c[e] && ("object" != _typeof(c[e]) || c[e] instanceof Array ? d[e] = c[e] : b(a[e], c[e]));
        }return void 0 !== c.data && null !== c.data && "object" == _typeof(c.data) && (d.data = c.data), d;
      }h = b(h, a);
    }function d() {
      if ("list-required" !== h.url && "function" != typeof h.url) {
        var b = h.url;h.url = function () {
          return b;
        };
      }if (void 0 !== h.ajaxSettings.url && "function" != typeof h.ajaxSettings.url) {
        var b = h.ajaxSettings.url;h.ajaxSettings.url = function () {
          return b;
        };
      }if ("string" == typeof h.listLocation) {
        var c = h.listLocation;"XML" === h.dataType.toUpperCase() ? h.listLocation = function (a) {
          return $(a).find(c);
        } : h.listLocation = function (a) {
          return a[c];
        };
      }if ("string" == typeof h.getValue) {
        var d = h.getValue;h.getValue = function (a) {
          return a[d];
        };
      }void 0 !== a.categories && (h.categoriesAssigned = !0);
    }function e() {
      void 0 !== a.ajaxSettings && "object" == _typeof(a.ajaxSettings) ? h.ajaxSettings = a.ajaxSettings : h.ajaxSettings = {};
    }function f(a) {
      return void 0 !== h[a] && null !== h[a];
    }function g(a, b) {
      function c(b, d) {
        for (var e in d) {
          void 0 === b[e] && a.log("Property '" + e + "' does not exist in EasyAutocomplete options API."), "object" == _typeof(b[e]) && -1 === $.inArray(e, i) && c(b[e], d[e]);
        }
      }c(h, b);
    }var h = { data: "list-required", url: "list-required", dataType: "json", listLocation: function listLocation(a) {
        return a;
      }, xmlElementName: "", getValue: function getValue(a) {
        return a;
      }, autocompleteOff: !0, placeholder: !1, ajaxCallback: function ajaxCallback() {}, matchResponseProperty: !1, list: { sort: { enabled: !1, method: function method(a, b) {
            return a = h.getValue(a), b = h.getValue(b), b > a ? -1 : a > b ? 1 : 0;
          } }, maxNumberOfElements: 6, hideOnEmptyPhrase: !0, match: { enabled: !1, caseSensitive: !1, method: function method(a, b) {
            return a.search(b) > -1;
          } }, showAnimation: { type: "normal", time: 400, callback: function callback() {} }, hideAnimation: { type: "normal", time: 400, callback: function callback() {} }, onClickEvent: function onClickEvent() {}, onSelectItemEvent: function onSelectItemEvent() {}, onLoadEvent: function onLoadEvent() {}, onChooseEvent: function onChooseEvent() {}, onKeyEnterEvent: function onKeyEnterEvent() {}, onMouseOverEvent: function onMouseOverEvent() {}, onMouseOutEvent: function onMouseOutEvent() {}, onShowListEvent: function onShowListEvent() {}, onHideListEvent: function onHideListEvent() {} }, highlightPhrase: !0, theme: "", cssClasses: "", minCharNumber: 0, requestDelay: 0, adjustWidth: !0, ajaxSettings: {}, preparePostData: function preparePostData(a, b) {
        return a;
      }, loggerEnabled: !0, template: "", categoriesAssigned: !1, categories: [{ maxNumberOfElements: 4 }] },
        i = ["ajaxSettings", "template"];this.get = function (a) {
      return h[a];
    }, this.equals = function (a, b) {
      return !(!f(a) || h[a] !== b);
    }, this.checkDataUrlProperties = function () {
      return "list-required" !== h.url || "list-required" !== h.data;
    }, this.checkRequiredProperties = function () {
      for (var a in h) {
        if ("required" === h[a]) return logger.error("Option " + a + " must be defined"), !1;
      }return !0;
    }, this.printPropertiesThatDoesntExist = function (a, b) {
      g(a, b);
    }, b(), c(), h.loggerEnabled === !0 && g(console, a), e(), d();
  }, a;
}(EasyAutocomplete || {}),
    EasyAutocomplete = function (a) {
  return a.Logger = function () {
    this.error = function (a) {
      console.log("ERROR: " + a);
    }, this.warning = function (a) {
      console.log("WARNING: " + a);
    };
  }, a;
}(EasyAutocomplete || {}),
    EasyAutocomplete = function (a) {
  return a.Constans = function () {
    var a = { CONTAINER_CLASS: "easy-autocomplete-container", CONTAINER_ID: "eac-container-", WRAPPER_CSS_CLASS: "easy-autocomplete" };this.getValue = function (b) {
      return a[b];
    };
  }, a;
}(EasyAutocomplete || {}),
    EasyAutocomplete = function (a) {
  return a.ListBuilderService = function (a, b) {
    function c(b, c) {
      function d() {
        var d,
            e = {};return void 0 !== b.xmlElementName && (e.xmlElementName = b.xmlElementName), void 0 !== b.listLocation ? d = b.listLocation : void 0 !== a.get("listLocation") && (d = a.get("listLocation")), void 0 !== d ? "string" == typeof d ? e.data = $(c).find(d) : "function" == typeof d && (e.data = d(c)) : e.data = c, e;
      }function e() {
        var a = {};return void 0 !== b.listLocation ? "string" == typeof b.listLocation ? a.data = c[b.listLocation] : "function" == typeof b.listLocation && (a.data = b.listLocation(c)) : a.data = c, a;
      }var f = {};if (f = "XML" === a.get("dataType").toUpperCase() ? d() : e(), void 0 !== b.header && (f.header = b.header), void 0 !== b.maxNumberOfElements && (f.maxNumberOfElements = b.maxNumberOfElements), void 0 !== a.get("list").maxNumberOfElements && (f.maxListSize = a.get("list").maxNumberOfElements), void 0 !== b.getValue) {
        if ("string" == typeof b.getValue) {
          var g = b.getValue;f.getValue = function (a) {
            return a[g];
          };
        } else "function" == typeof b.getValue && (f.getValue = b.getValue);
      } else f.getValue = a.get("getValue");return f;
    }function d(b) {
      var c = [];return void 0 === b.xmlElementName && (b.xmlElementName = a.get("xmlElementName")), $(b.data).find(b.xmlElementName).each(function () {
        c.push(this);
      }), c;
    }this.init = function (b) {
      var c = [],
          d = {};return d.data = a.get("listLocation")(b), d.getValue = a.get("getValue"), d.maxListSize = a.get("list").maxNumberOfElements, c.push(d), c;
    }, this.updateCategories = function (b, d) {
      if (a.get("categoriesAssigned")) {
        b = [];for (var e = 0; e < a.get("categories").length; e += 1) {
          var f = c(a.get("categories")[e], d);b.push(f);
        }
      }return b;
    }, this.convertXml = function (b) {
      if ("XML" === a.get("dataType").toUpperCase()) for (var c = 0; c < b.length; c += 1) {
        b[c].data = d(b[c]);
      }return b;
    }, this.processData = function (c, d) {
      for (var e = 0, f = c.length; f > e; e += 1) {
        c[e].data = b(a, c[e], d);
      }return c;
    }, this.checkIfDataExists = function (a) {
      for (var b = 0, c = a.length; c > b; b += 1) {
        if (void 0 !== a[b].data && a[b].data instanceof Array && a[b].data.length > 0) return !0;
      }return !1;
    };
  }, a;
}(EasyAutocomplete || {}),
    EasyAutocomplete = function (a) {
  return a.proccess = function (b, c, d) {
    function e(a, c) {
      var d = [],
          e = "";if (b.get("list").match.enabled) for (var g = 0, h = a.length; h > g; g += 1) {
        e = b.get("getValue")(a[g]), f(e, c) && d.push(a[g]);
      } else d = a;return d;
    }function f(a, c) {
      return b.get("list").match.caseSensitive || ("string" == typeof a && (a = a.toLowerCase()), c = c.toLowerCase()), !!b.get("list").match.method(a, c);
    }function g(a) {
      return void 0 !== c.maxNumberOfElements && a.length > c.maxNumberOfElements && (a = a.slice(0, c.maxNumberOfElements)), a;
    }function h(a) {
      return b.get("list").sort.enabled && a.sort(b.get("list").sort.method), a;
    }a.proccess.match = f;var i = c.data,
        j = d;return i = e(i, j), i = g(i), i = h(i);
  }, a;
}(EasyAutocomplete || {}),
    EasyAutocomplete = function (a) {
  return a.Template = function (a) {
    var b = { basic: { type: "basic", method: function method(a) {
          return a;
        }, cssClass: "" }, description: { type: "description", fields: { description: "description" }, method: function method(a) {
          return a + " - description";
        }, cssClass: "eac-description" }, iconLeft: { type: "iconLeft", fields: { icon: "" }, method: function method(a) {
          return a;
        }, cssClass: "eac-icon-left" }, iconRight: { type: "iconRight", fields: { iconSrc: "" }, method: function method(a) {
          return a;
        }, cssClass: "eac-icon-right" }, links: { type: "links", fields: { link: "" }, method: function method(a) {
          return a;
        }, cssClass: "" }, custom: { type: "custom", method: function method() {}, cssClass: "" } },
        c = function c(a) {
      var c,
          d = a.fields;return "description" === a.type ? (c = b.description.method, "string" == typeof d.description ? c = function c(a, b) {
        return a + " - <span>" + b[d.description] + "</span>";
      } : "function" == typeof d.description && (c = function c(a, b) {
        return a + " - <span>" + d.description(b) + "</span>";
      }), c) : "iconRight" === a.type ? ("string" == typeof d.iconSrc ? c = function c(a, b) {
        return a + "<img class='eac-icon' src='" + b[d.iconSrc] + "' />";
      } : "function" == typeof d.iconSrc && (c = function c(a, b) {
        return a + "<img class='eac-icon' src='" + d.iconSrc(b) + "' />";
      }), c) : "iconLeft" === a.type ? ("string" == typeof d.iconSrc ? c = function c(a, b) {
        return "<img class='eac-icon' src='" + b[d.iconSrc] + "' />" + a;
      } : "function" == typeof d.iconSrc && (c = function c(a, b) {
        return "<img class='eac-icon' src='" + d.iconSrc(b) + "' />" + a;
      }), c) : "links" === a.type ? ("string" == typeof d.link ? c = function c(a, b) {
        return "<a href='" + b[d.link] + "' >" + a + "</a>";
      } : "function" == typeof d.link && (c = function c(a, b) {
        return "<a href='" + d.link(b) + "' >" + a + "</a>";
      }), c) : "custom" === a.type ? a.method : b.basic.method;
    },
        d = function d(a) {
      return a && a.type && a.type && b[a.type] ? c(a) : b.basic.method;
    },
        e = function e(a) {
      var c = function c() {
        return "";
      };return a && a.type && a.type && b[a.type] ? function () {
        var c = b[a.type].cssClass;return function () {
          return c;
        };
      }() : c;
    };this.getTemplateClass = e(a), this.build = d(a);
  }, a;
}(EasyAutocomplete || {}),
    EasyAutocomplete = function (a) {
  return a.main = function (b, c) {
    function d() {
      return 0 === t.length ? void p.error("Input field doesn't exist.") : o.checkDataUrlProperties() ? o.checkRequiredProperties() ? (e(), void g()) : void p.error("Will not work without mentioned properties.") : void p.error("One of options variables 'data' or 'url' must be defined.");
    }function e() {
      function a() {
        var a = $("<div>"),
            c = n.getValue("WRAPPER_CSS_CLASS");o.get("theme") && "" !== o.get("theme") && (c += " eac-" + o.get("theme")), o.get("cssClasses") && "" !== o.get("cssClasses") && (c += " " + o.get("cssClasses")), "" !== q.getTemplateClass() && (c += " " + q.getTemplateClass()), a.addClass(c), t.wrap(a), o.get("adjustWidth") === !0 && b();
      }function b() {
        var a = t.outerWidth();t.parent().css("width", a);
      }function c() {
        t.unwrap();
      }function d() {
        var a = $("<div>").addClass(n.getValue("CONTAINER_CLASS"));a.attr("id", f()).prepend($("<ul>")), function () {
          a.on("show.eac", function () {
            switch (o.get("list").showAnimation.type) {case "slide":
                var b = o.get("list").showAnimation.time,
                    c = o.get("list").showAnimation.callback;a.find("ul").slideDown(b, c);break;case "fade":
                var b = o.get("list").showAnimation.time,
                    c = o.get("list").showAnimation.callback;a.find("ul").fadeIn(b), c;break;default:
                a.find("ul").show();}o.get("list").onShowListEvent();
          }).on("hide.eac", function () {
            switch (o.get("list").hideAnimation.type) {case "slide":
                var b = o.get("list").hideAnimation.time,
                    c = o.get("list").hideAnimation.callback;a.find("ul").slideUp(b, c);break;case "fade":
                var b = o.get("list").hideAnimation.time,
                    c = o.get("list").hideAnimation.callback;a.find("ul").fadeOut(b, c);break;default:
                a.find("ul").hide();}o.get("list").onHideListEvent();
          }).on("selectElement.eac", function () {
            a.find("ul li").removeClass("selected"), a.find("ul li").eq(w).addClass("selected"), o.get("list").onSelectItemEvent();
          }).on("loadElements.eac", function (b, c, d) {
            var e = "",
                f = a.find("ul");f.empty().detach(), v = [];for (var h = 0, i = 0, k = c.length; k > i; i += 1) {
              var l = c[i].data;if (0 !== l.length) {
                void 0 !== c[i].header && c[i].header.length > 0 && f.append("<div class='eac-category' >" + c[i].header + "</div>");for (var m = 0, n = l.length; n > m && h < c[i].maxListSize; m += 1) {
                  e = $("<li><div class='eac-item'></div></li>"), function () {
                    var a = m,
                        b = h,
                        f = c[i].getValue(l[a]);e.find(" > div").on("click", function () {
                      t.val(f).trigger("change"), w = b, j(b), o.get("list").onClickEvent(), o.get("list").onChooseEvent();
                    }).mouseover(function () {
                      w = b, j(b), o.get("list").onMouseOverEvent();
                    }).mouseout(function () {
                      o.get("list").onMouseOutEvent();
                    }).html(q.build(g(f, d), l[a]));
                  }(), f.append(e), v.push(l[m]), h += 1;
                }
              }
            }a.append(f), o.get("list").onLoadEvent();
          });
        }(), t.after(a);
      }function e() {
        t.next("." + n.getValue("CONTAINER_CLASS")).remove();
      }function g(a, b) {
        return o.get("highlightPhrase") && "" !== b ? i(a, b) : a;
      }function h(a) {
        return a.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&");
      }function i(a, b) {
        var c = h(b);return (a + "").replace(new RegExp("(" + c + ")", "gi"), "<b>$1</b>");
      }t.parent().hasClass(n.getValue("WRAPPER_CSS_CLASS")) && (e(), c()), a(), d(), u = $("#" + f()), o.get("placeholder") && t.attr("placeholder", o.get("placeholder"));
    }function f() {
      var a = t.attr("id");return a = n.getValue("CONTAINER_ID") + a;
    }function g() {
      function a() {
        s("autocompleteOff", !0) && n(), b(), c(), d(), e(), f(), g();
      }function b() {
        t.focusout(function () {
          var a,
              b = t.val();o.get("list").match.caseSensitive || (b = b.toLowerCase());for (var c = 0, d = v.length; d > c; c += 1) {
            if (a = o.get("getValue")(v[c]), o.get("list").match.caseSensitive || (a = a.toLowerCase()), a === b) return w = c, void j(w);
          }
        });
      }function c() {
        t.off("keyup").keyup(function (a) {
          function b(a) {
            function b() {
              var a = {},
                  b = o.get("ajaxSettings") || {};for (var c in b) {
                a[c] = b[c];
              }return a;
            }function c(a, b) {
              return o.get("matchResponseProperty") !== !1 ? "string" == typeof o.get("matchResponseProperty") ? b[o.get("matchResponseProperty")] === a : "function" == typeof o.get("matchResponseProperty") ? o.get("matchResponseProperty")(b) === a : !0 : !0;
            }if (!(a.length < o.get("minCharNumber"))) {
              if ("list-required" !== o.get("data")) {
                var d = o.get("data"),
                    e = r.init(d);e = r.updateCategories(e, d), e = r.processData(e, a), k(e, a), t.parent().find("li").length > 0 ? h() : i();
              }var f = b();void 0 !== f.url && "" !== f.url || (f.url = o.get("url")), void 0 !== f.dataType && "" !== f.dataType || (f.dataType = o.get("dataType")), void 0 !== f.url && "list-required" !== f.url && (f.url = f.url(a), f.data = o.get("preparePostData")(f.data, a), $.ajax(f).done(function (b) {
                var d = r.init(b);d = r.updateCategories(d, b), d = r.convertXml(d), c(a, b) && (d = r.processData(d, a), k(d, a)), r.checkIfDataExists(d) && t.parent().find("li").length > 0 ? h() : i(), o.get("ajaxCallback")();
              }).fail(function () {
                p.warning("Fail to load response data");
              }).always(function () {}));
            }
          }switch (a.keyCode) {case 27:
              i(), l();break;case 38:
              a.preventDefault(), v.length > 0 && w > 0 && (w -= 1, t.val(o.get("getValue")(v[w])), j(w));break;case 40:
              a.preventDefault(), v.length > 0 && w < v.length - 1 && (w += 1, t.val(o.get("getValue")(v[w])), j(w));break;default:
              if (a.keyCode > 40 || 8 === a.keyCode) {
                var c = t.val();o.get("list").hideOnEmptyPhrase !== !0 || 8 !== a.keyCode || "" !== c ? o.get("requestDelay") > 0 ? (void 0 !== m && clearTimeout(m), m = setTimeout(function () {
                  b(c);
                }, o.get("requestDelay"))) : b(c) : i();
              }}
        });
      }function d() {
        t.on("keydown", function (a) {
          a = a || window.event;var b = a.keyCode;return 38 === b ? (suppressKeypress = !0, !1) : void 0;
        }).keydown(function (a) {
          13 === a.keyCode && w > -1 && (t.val(o.get("getValue")(v[w])), o.get("list").onKeyEnterEvent(), o.get("list").onChooseEvent(), w = -1, i(), a.preventDefault());
        });
      }function e() {
        t.off("keypress");
      }function f() {
        t.focus(function () {
          "" !== t.val() && v.length > 0 && (w = -1, h());
        });
      }function g() {
        t.blur(function () {
          setTimeout(function () {
            w = -1, i();
          }, 250);
        });
      }function n() {
        t.attr("autocomplete", "off");
      }a();
    }function h() {
      u.trigger("show.eac");
    }function i() {
      u.trigger("hide.eac");
    }function j(a) {
      u.trigger("selectElement.eac", a);
    }function k(a, b) {
      u.trigger("loadElements.eac", [a, b]);
    }function l() {
      t.trigger("blur");
    }var m,
        n = new a.Constans(),
        o = new a.Configuration(c),
        p = new a.Logger(),
        q = new a.Template(c.template),
        r = new a.ListBuilderService(o, a.proccess),
        s = o.equals,
        t = b,
        u = "",
        v = [],
        w = -1;a.consts = n, this.getConstants = function () {
      return n;
    }, this.getConfiguration = function () {
      return o;
    }, this.getContainer = function () {
      return u;
    }, this.getSelectedItemIndex = function () {
      return w;
    }, this.getItems = function () {
      return v;
    }, this.getItemData = function (a) {
      return v.length < a || void 0 === v[a] ? -1 : v[a];
    }, this.getSelectedItemData = function () {
      return this.getItemData(w);
    }, this.build = function () {
      e();
    }, this.init = function () {
      d();
    };
  }, a.eacHandles = [], a.getHandle = function (b) {
    return a.eacHandles[b];
  }, a.inputHasId = function (a) {
    return void 0 !== $(a).attr("id") && $(a).attr("id").length > 0;
  }, a.assignRandomId = function (b) {
    var c = "";do {
      c = "eac-" + Math.floor(1e4 * Math.random());
    } while (0 !== $("#" + c).length);elementId = a.consts.getValue("CONTAINER_ID") + c, $(b).attr("id", c);
  }, a.setHandle = function (b, c) {
    a.eacHandles[c] = b;
  }, a;
}(EasyAutocomplete || {});!function (a) {
  a.fn.easyAutocomplete = function (b) {
    return this.each(function () {
      var c = a(this),
          d = new EasyAutocomplete.main(c, b);EasyAutocomplete.inputHasId(c) || EasyAutocomplete.assignRandomId(c), d.init(), EasyAutocomplete.setHandle(d, c.attr("id"));
    });
  }, a.fn.getSelectedItemIndex = function () {
    var b = a(this).attr("id");return void 0 !== b ? EasyAutocomplete.getHandle(b).getSelectedItemIndex() : -1;
  }, a.fn.getItems = function () {
    var b = a(this).attr("id");return void 0 !== b ? EasyAutocomplete.getHandle(b).getItems() : -1;
  }, a.fn.getItemData = function (b) {
    var c = a(this).attr("id");return void 0 !== c && b > -1 ? EasyAutocomplete.getHandle(c).getItemData(b) : -1;
  }, a.fn.getSelectedItemData = function () {
    var b = a(this).attr("id");return void 0 !== b ? EasyAutocomplete.getHandle(b).getSelectedItemData() : -1;
  };
}(jQuery);
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js"), __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ "./public/assets/js/survey/survey.jquery.min.js":
/*!******************************************************!*\
  !*** ./public/assets/js/survey/survey.jquery.min.js ***!
  \******************************************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(module) {var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;var _typeof=typeof Symbol==="function"&&typeof Symbol.iterator==="symbol"?function(obj){return typeof obj;}:function(obj){return obj&&typeof Symbol==="function"&&obj.constructor===Symbol&&obj!==Symbol.prototype?"symbol":typeof obj;};/*!
 * surveyjs - Survey JavaScript library v1.0.35
 * Copyright (c) 2015-2018 Devsoft Baltic OÜ  - http://surveyjs.io/
 * License: MIT (http://www.opensource.org/licenses/mit-license.php)
 */!function(e,t){"object"==( false?"undefined":_typeof(exports))&&"object"==( false?"undefined":_typeof(module))?module.exports=t(__webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")): true?!(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")], __WEBPACK_AMD_DEFINE_FACTORY__ = (t),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)):"object"==(typeof exports==="undefined"?"undefined":_typeof(exports))?exports.Survey=t(require("jquery")):e.Survey=t(e.jQuery);}(this,function(e){return function(e){function t(r){if(n[r])return n[r].exports;var i=n[r]={i:r,l:!1,exports:{}};return e[r].call(i.exports,i,i.exports,t),i.l=!0,i.exports;}var n={};return t.m=e,t.c=n,t.i=function(e){return e;},t.d=function(e,n,r){t.o(e,n)||Object.defineProperty(e,n,{configurable:!1,enumerable:!0,get:r});},t.n=function(e){var n=e&&e.__esModule?function(){return e.default;}:function(){return e;};return t.d(n,"a",n),n;},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t);},t.p="",t(t.s=138);}([function(e,t,n){"use strict";function r(e,t){function n(){this.constructor=e;}for(var r in t){t.hasOwnProperty(r)&&(e[r]=t[r]);}e.prototype=null===t?Object.create(t):(n.prototype=t.prototype,new n());}n.d(t,"a",function(){return i;}),t.b=r,n.d(t,"c",function(){return o;});var i=Object.assign||function(e){for(var t,n=1,r=arguments.length;n<r;n++){t=arguments[n];for(var i in t){Object.prototype.hasOwnProperty.call(t,i)&&(e[i]=t[i]);}}return e;},o=function o(e,t,n,r){var i,o=arguments.length,a=o<3?t:null===r?r=Object.getOwnPropertyDescriptor(t,n):r;if("object"==(typeof Reflect==="undefined"?"undefined":_typeof(Reflect))&&"function"==typeof Reflect.decorate)a=Reflect.decorate(e,t,n,r);else for(var s=e.length-1;s>=0;s--){(i=e[s])&&(a=(o<3?i(a):o>3?i(t,n,a):i(t,n))||a);}return o>3&&a&&Object.defineProperty(t,n,a),a;};},function(e,t,n){"use strict";var r=n(0),i=n(5);n.d(t,"i",function(){return o;}),n.d(t,"b",function(){return a;}),n.d(t,"f",function(){return s;}),n.d(t,"e",function(){return u;}),n.d(t,"c",function(){return l;}),n.d(t,"k",function(){return c;}),n.d(t,"h",function(){return p;}),n.d(t,"g",function(){return d;}),n.d(t,"d",function(){return h;}),n.d(t,"j",function(){return f;}),n.d(t,"a",function(){return m;});var o=function(){function e(e,t){void 0===t&&(t=!1),this.name=e,this.typeValue=null,this.choicesValue=null,this.isRequiredValue=!1,this.readOnlyValue=null,this.visibleValue=null,this.isLocalizableValue=null,this.choicesfunc=null,this.isSerializable=!0,this.className=null,this.alternativeName=null,this.classNamePart=null,this.baseClassName=null,this.defaultValue=null,this.serializationProperty=null,this.onGetValue=null,this.onSetValue=null,this.isRequiredValue=t;}return Object.defineProperty(e.prototype,"type",{get:function get(){return this.typeValue?this.typeValue:"string";},set:function set(e){this.typeValue=e;},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"isRequired",{get:function get(){return this.isRequiredValue;},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"hasToUseGetValue",{get:function get(){return this.onGetValue||this.serializationProperty;},enumerable:!0,configurable:!0}),e.prototype.isDefaultValue=function(e){return i.a.isValueEmpty(this.defaultValue)?!1===e||""===e||i.a.isValueEmpty(e):this.defaultValue==e;},e.prototype.getValue=function(e){return this.onGetValue?this.onGetValue(e):this.serializationProperty?e[this.serializationProperty].getJson():e[this.name];},e.prototype.getPropertyValue=function(e){return this.isLocalizable?e[this.serializationProperty].text:this.getValue(e);},Object.defineProperty(e.prototype,"hasToUseSetValue",{get:function get(){return this.onSetValue||this.serializationProperty;},enumerable:!0,configurable:!0}),e.prototype.setValue=function(e,t,n){this.onSetValue?this.onSetValue(e,t,n):this.serializationProperty?e[this.serializationProperty].setJson(t):(t&&"string"==typeof t&&("number"==this.type&&(t=parseInt(t)),"boolean"==this.type&&(t="true"===t.toLowerCase())),e[this.name]=t);},e.prototype.getObjType=function(e){return this.classNamePart?e.replace(this.classNamePart,""):e;},e.prototype.getClassName=function(e){return e&&(e=e.toLowerCase()),this.classNamePart&&e.indexOf(this.classNamePart)<0?e+this.classNamePart:e;},Object.defineProperty(e.prototype,"choices",{get:function get(){return this.getChoices(null);},enumerable:!0,configurable:!0}),e.prototype.getChoices=function(e){return null!=this.choicesValue?this.choicesValue:null!=this.choicesfunc?this.choicesfunc(e):null;},e.prototype.setChoices=function(e,t){this.choicesValue=e,this.choicesfunc=t;},Object.defineProperty(e.prototype,"readOnly",{get:function get(){return null!=this.readOnlyValue&&this.readOnlyValue;},set:function set(e){this.readOnlyValue=e;},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"visible",{get:function get(){return null==this.visibleValue||this.visibleValue;},set:function set(e){this.visibleValue=e;},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"isLocalizable",{get:function get(){return null!=this.isLocalizableValue&&this.isLocalizableValue;},set:function set(e){this.isLocalizableValue=e;},enumerable:!0,configurable:!0}),e.prototype.mergeWith=function(t){for(var n=e.mergableValues,r=0;r<n.length;r++){this.mergeValue(t,n[r]);}},e.prototype.mergeValue=function(e,t){null==this[t]&&null!=e[t]&&(this[t]=e[t]);},e.mergableValues=["typeValue","choicesValue","readOnlyValue","visibleValue","isSerializable","isLocalizableValue","className","alternativeName","classNamePart","baseClassName","defaultValue","serializationProperty","onGetValue","onSetValue"],e;}(),a=function(){function e(){}return e.addProperty=function(t,n){t=t.toLowerCase();var r=e.properties;r[t]||(r[t]=[]),r[t].push(n);},e.removeProperty=function(t,n){t=t.toLowerCase();var r=e.properties;if(r[t])for(var i=r[t],o=0;o<i.length;o++){if(i[o].name==n){r[t].splice(o,1);break;}}},e.addClass=function(t,n){t=t.toLowerCase(),n&&(n=n.toLowerCase()),e.parentClasses[t]=n;},e.getProperties=function(t){t=t.toLowerCase();for(var n=[],r=e.properties;t;){var i=r[t];if(i)for(var o=0;o<i.length;o++){n.push(i[o]);}t=e.parentClasses[t];}return n;},e.createProperties=function(t){t&&t.getType&&e.createPropertiesCore(t,t.getType());},e.createPropertiesCore=function(t,n){var r=e.properties;r[n]&&e.createPropertiesInObj(t,r[n]);var i=e.parentClasses[n];i&&e.createPropertiesCore(t,i);},e.createPropertiesInObj=function(t,n){for(var r=0;r<n.length;r++){e.createPropertyInObj(t,n[r]);}},e.createPropertyInObj=function(e,t){if(!e[t.name]&&!e.hasOwnProperty(t.name))if(t.isLocalizable&&t.serializationProperty&&!e[t.serializationProperty]&&e.createCustomLocalizableObj){e.createCustomLocalizableObj(t.name);var n={get:function get(){return e.getLocalizableString(t.name);}};Object.defineProperty(e,t.serializationProperty,n);var r={get:function get(){return e.getLocalizableStringText(t.name,t.defaultValue);},set:function set(n){e.setLocalizableStringText(t.name,n);}};Object.defineProperty(e,t.name,r);}else{var r={get:function get(){return e.getPropertyValue(t.name,t.defaultValue);},set:function set(n){e.setPropertyValue(t.name,n);}};Object.defineProperty(e,t.name,r);}},e.properties={},e.parentClasses={},e;}(),s=function(){function e(e,t,n,r){void 0===n&&(n=null),void 0===r&&(r=null),this.name=e,this.creator=n,this.parentName=r,this.properties=null,this.requiredProperties=null,e=e.toLowerCase(),r&&(r=r.toLowerCase(),a.addClass(e,r)),this.properties=new Array();for(var i=0;i<t.length;i++){var o=this.createProperty(t[i]);o&&this.properties.push(o);}}return e.prototype.find=function(e){for(var t=0;t<this.properties.length;t++){if(this.properties[t].name==e)return this.properties[t];}return null;},e.prototype.createProperty=function(t){var n="string"==typeof t?t:t.name;if(n){var r=null,a=n.indexOf(e.typeSymbol);a>-1&&(r=n.substring(a+1),n=n.substring(0,a));var s=this.getIsPropertyNameRequired(n);n=this.getPropertyName(n);var u=new o(n,s);if(r&&(u.type=r),"object"==(typeof t==="undefined"?"undefined":_typeof(t))){if(t.type&&(u.type=t.type),i.a.isValueEmpty(t.default)||(u.defaultValue=t.default),i.a.isValueEmpty(t.isSerializable)||(u.isSerializable=t.isSerializable),!1===t.visible&&(u.visible=!1),t.isRequired&&this.makePropertyRequired(u.name),t.choices){var l="function"==typeof t.choices?t.choices:null,c="function"!=typeof t.choices?t.choices:null;u.setChoices(c,l);}if(t.onGetValue&&(u.onGetValue=t.onGetValue),t.onSetValue&&(u.onSetValue=t.onSetValue),t.isLocalizable&&(t.serializationProperty="loc"+t.name),t.serializationProperty){u.serializationProperty=t.serializationProperty;u.serializationProperty&&0==u.serializationProperty.indexOf("loc")&&(u.isLocalizable=!0);}t.isLocalizable&&(u.isLocalizable=t.isLocalizable),t.className&&(u.className=t.className),t.baseClassName&&(u.baseClassName=t.baseClassName),t.classNamePart&&(u.classNamePart=t.classNamePart),t.alternativeName&&(u.alternativeName=t.alternativeName);}return u;}},e.prototype.getIsPropertyNameRequired=function(t){return t.length>0&&t[0]==e.requiredSymbol;},e.prototype.getPropertyName=function(e){return this.getIsPropertyNameRequired(e)?(e=e.slice(1),this.makePropertyRequired(e),e):e;},e.prototype.makePropertyRequired=function(e){this.requiredProperties||(this.requiredProperties=new Array()),this.requiredProperties.push(e);},e.requiredSymbol="!",e.typeSymbol=":",e;}(),u=function(){function e(){this.classes={},this.childrenClasses={},this.classProperties={},this.classRequiredProperties={};}return e.prototype.addClass=function(e,t,n,r){void 0===n&&(n=null),void 0===r&&(r=null),e=e.toLowerCase();var i=new s(e,t,n,r);if(this.classes[e]=i,r){r=r.toLowerCase();this.childrenClasses[r]||(this.childrenClasses[r]=[]),this.childrenClasses[r].push(i);}return i;},e.prototype.overrideClassCreatore=function(e,t){e=e.toLowerCase();var n=this.findClass(e);n&&(n.creator=t);},e.prototype.getProperties=function(e){e=e.toLowerCase();var t=this.classProperties[e];return t||(t=new Array(),this.fillProperties(e,t),this.classProperties[e]=t),t;},e.prototype.getDynamicProperties=function(e){if(e.getDynamicProperties&&e.getDynamicType){var t=e.getDynamicProperties();return m.metaData.findProperties(e.getDynamicType(),t);}return[];},e.prototype.getPropertiesByObj=function(e){if(!e||!e.getType)return[];for(var t=[],n=this.getProperties(e.getType()),r=0;r<n.length;r++){t.push(n[r]);}var i=this.getDynamicProperties(e);if(i&&i.length>0)for(var r=0;r<i.length;r++){t.push(i[r]);}return t;},e.prototype.findProperty=function(e,t){return e=e.toLowerCase(),this.findPropertyCore(this.getProperties(e),t);},e.prototype.findProperties=function(e,t){e=e.toLowerCase();for(var n=[],r=this.getProperties(e),i=0;i<t.length;i++){var o=this.findPropertyCore(r,t[i]);o&&n.push(o);}return n;},e.prototype.findPropertyCore=function(e,t){for(var n=0;n<e.length;n++){if(e[n].name==t)return e[n];}return null;},e.prototype.createClass=function(e){e=e.toLowerCase();var t=this.findClass(e);if(!t)return null;if(t.creator)return t.creator();for(var n=t.parentName;n;){if(!(t=this.findClass(n)))return null;if(n=t.parentName,t.creator)return this.createCustomType(e,t.creator);}return null;},e.prototype.createCustomType=function(e,t){e=e.toLowerCase();var n=t();return n.customTypeName=e,n.customTemplateName=n.getTemplate?n.getTemplate():n.getType(),n.getType=function(){return n.customTypeName;},n.getTemplate=function(){return n.customTemplateName;},a.createProperties(n),n;},e.prototype.getChildrenClasses=function(e,t){void 0===t&&(t=!1),e=e.toLowerCase();var n=[];return this.fillChildrenClasses(e,t,n),n;},e.prototype.getRequiredProperties=function(e){e=e.toLowerCase();var t=this.classRequiredProperties[e];return t||(t=new Array(),this.fillRequiredProperties(e,t),this.classRequiredProperties[e]=t),t;},e.prototype.addProperties=function(e,t){e=e.toLowerCase();for(var n=this.findClass(e),r=0;r<t.length;r++){this.addCustomPropertyCore(n,t[r]);}},e.prototype.addProperty=function(e,t){e=e.toLowerCase(),this.addCustomPropertyCore(this.findClass(e),t);},e.prototype.addCustomPropertyCore=function(e,t){if(e){var n=e.createProperty(t);n&&(this.addPropertyToClass(e,n),this.emptyClassPropertiesHash(e),a.addProperty(e.name,n));}},e.prototype.removeProperty=function(e,t){e=e.toLowerCase();var n=this.findClass(e);if(!n)return!1;var r=n.find(t);r&&(this.removePropertyFromClass(n,r),this.emptyClassPropertiesHash(n),a.removeProperty(e,t));},e.prototype.addPropertyToClass=function(e,t){null==e.find(t.name)&&e.properties.push(t);},e.prototype.removePropertyFromClass=function(e,t){var n=e.properties.indexOf(t);n<0||(e.properties.splice(n,1),e.requiredProperties&&(n=e.requiredProperties.indexOf(t.name))>=0&&e.requiredProperties.splice(n,1));},e.prototype.emptyClassPropertiesHash=function(e){this.classProperties[e.name]=null;for(var t=this.getChildrenClasses(e.name),n=0;n<t.length;n++){this.classProperties[t[n].name]=null;}},e.prototype.fillChildrenClasses=function(e,t,n){var r=this.childrenClasses[e];if(r)for(var i=0;i<r.length;i++){t&&!r[i].creator||n.push(r[i]),this.fillChildrenClasses(r[i].name,t,n);}},e.prototype.findClass=function(e){return e=e.toLowerCase(),this.classes[e];},e.prototype.fillProperties=function(e,t){var n=this.findClass(e);if(n){n.parentName&&this.fillProperties(n.parentName,t);for(var r=0;r<n.properties.length;r++){this.addPropertyCore(n.properties[r],t,t.length);}}},e.prototype.addPropertyCore=function(e,t,n){for(var r=-1,i=0;i<n;i++){if(t[i].name==e.name){r=i;break;}}r<0?t.push(e):(e.mergeWith(t[r]),t[r]=e);},e.prototype.fillRequiredProperties=function(e,t){var n=this.findClass(e);n&&(n.requiredProperties&&Array.prototype.push.apply(t,n.requiredProperties),n.parentName&&this.fillRequiredProperties(n.parentName,t));},e;}(),l=function(){function e(e,t){this.type=e,this.message=t,this.description="",this.at=-1;}return e.prototype.getFullDescription=function(){return this.message+(this.description?"\n"+this.description:"");},e;}(),c=function(e){function t(t,n){var r=e.call(this,"unknownproperty","The property '"+t+"' in class '"+n+"' is unknown.")||this;r.propertyName=t,r.className=n;var i=m.metaData.getProperties(n);if(i){r.description="The list of available properties are: ";for(var o=0;o<i.length;o++){o>0&&(r.description+=", "),r.description+=i[o].name;}r.description+=".";}return r;}return r.b(t,e),t;}(l),p=function(e){function t(t,n,r){var i=e.call(this,n,r)||this;i.baseClassName=t,i.type=n,i.message=r,i.description="The following types are available: ";for(var o=m.metaData.getChildrenClasses(t,!0),a=0;a<o.length;a++){a>0&&(i.description+=", "),i.description+="'"+o[a].name+"'";}return i.description+=".",i;}return r.b(t,e),t;}(l),d=function(e){function t(t,n){var r=e.call(this,n,"missingtypeproperty","The property type is missing in the object. Please take a look at property: '"+t+"'.")||this;return r.propertyName=t,r.baseClassName=n,r;}return r.b(t,e),t;}(p),h=function(e){function t(t,n){var r=e.call(this,n,"incorrecttypeproperty","The property type is incorrect in the object. Please take a look at property: '"+t+"'.")||this;return r.propertyName=t,r.baseClassName=n,r;}return r.b(t,e),t;}(p),f=function(e){function t(t,n){var r=e.call(this,"requiredproperty","The property '"+t+"' is required in class '"+n+"'.")||this;return r.propertyName=t,r.className=n,r;}return r.b(t,e),t;}(l),m=function(){function e(){this.errors=new Array();}return Object.defineProperty(e,"metaData",{get:function get(){return e.metaDataValue;},enumerable:!0,configurable:!0}),e.prototype.toJsonObject=function(e){return this.toJsonObjectCore(e,null);},e.prototype.toObject=function(t,n){if(t){var r=null;if(n.getType&&(r=e.metaData.getProperties(n.getType())),r){n.startLoadingFromJson&&n.startLoadingFromJson(),r=this.addDynamicProperties(n,t,r);for(var i in t){if(i!=e.typePropertyName)if(i!=e.positionPropertyName){var o=this.findProperty(r,i);o?this.valueToObj(t[i],n,o):this.addNewError(new c(i.toString(),n.getType()),t);}else n[i]=t[i];}n.endLoadingFromJson&&n.endLoadingFromJson();}}},e.prototype.toJsonObjectCore=function(t,n){if(!t.getType)return t;var r={};return null==n||n.className||(r[e.typePropertyName]=n.getObjType(t.getType())),this.propertiesToJson(t,e.metaData.getProperties(t.getType()),r),this.propertiesToJson(t,this.getDynamicProperties(t),r),r;},e.prototype.getDynamicProperties=function(t){if(t.getDynamicProperties&&t.getDynamicType){var n=t.getDynamicProperties();return e.metaData.findProperties(t.getDynamicType(),n);}return[];},e.prototype.addDynamicProperties=function(e,t,n){if(!e.getDynamicPropertyName)return n;var r=e.getDynamicPropertyName();if(!r)return n;t[r]&&(e[r]=t[r]);for(var i=this.getDynamicProperties(e),o=[],a=0;a<n.length;a++){o.push(n[a]);}for(var a=0;a<i.length;a++){o.push(i[a]);}return o;},e.prototype.propertiesToJson=function(e,t,n){for(var r=0;r<t.length;r++){this.valueToJson(e,n,t[r]);}},e.prototype.valueToJson=function(e,t,n){if(!1!==n.isSerializable){var r=n.getValue(e);if(!n.isDefaultValue(r)){if(this.isValueArray(r)){for(var i=[],o=0;o<r.length;o++){i.push(this.toJsonObjectCore(r[o],n));}r=i.length>0?i:null;}else r=this.toJsonObjectCore(r,n);n.isDefaultValue(r)||(t[n.name]=r);}}},e.prototype.valueToObj=function(e,t,n){if(null!=e){if(this.removePos(n,e),null!=n&&n.hasToUseSetValue)return void n.setValue(t,e,this);if(this.isValueArray(e))return void this.valueToArray(e,t,n.name,n);var r=this.createNewObj(e,n);r.newObj&&(this.toObject(e,r.newObj),e=r.newObj),r.error||(null!=n?n.setValue(t,e,this):t[n.name]=e);}},e.prototype.removePos=function(e,t){!e||!e.type||e.type.indexOf("value")<0||this.removePosFromObj(t);},e.prototype.removePosFromObj=function(t){if(t){if(Array.isArray(t))for(var n=0;n<t.length;n++){this.removePosFromObj(t[n]);}t[e.positionPropertyName]&&delete t[e.positionPropertyName];}},e.prototype.isValueArray=function(e){return e&&Array.isArray(e);},e.prototype.createNewObj=function(t,n){var r={newObj:null,error:null},i=t[e.typePropertyName];return!i&&null!=n&&n.className&&(i=n.className),i=n.getClassName(i),r.newObj=i?e.metaData.createClass(i):null,r.error=this.checkNewObjectOnErrors(r.newObj,t,n,i),r;},e.prototype.checkNewObjectOnErrors=function(t,n,r,i){var o=null;if(t){var a=e.metaData.getRequiredProperties(i);if(a)for(var s=0;s<a.length;s++){if(!n[a[s]]){o=new f(a[s],i);break;}}}else r.baseClassName&&(o=i?new h(r.name,r.baseClassName):new d(r.name,r.baseClassName));return o&&this.addNewError(o,n),o;},e.prototype.addNewError=function(t,n){n&&n[e.positionPropertyName]&&(t.at=n[e.positionPropertyName].start),this.errors.push(t);},e.prototype.valueToArray=function(e,t,n,r){t[n]&&e.length>0&&t[n].splice(0,t[n].length),t[n]||(t[n]=[]);for(var i=0;i<e.length;i++){var o=this.createNewObj(e[i],r);o.newObj?(t[n].push(o.newObj),this.toObject(e[i],o.newObj)):o.error||t[n].push(e[i]);}},e.prototype.findProperty=function(e,t){if(!e)return null;for(var n=0;n<e.length;n++){var r=e[n];if(r.name==t||r.alternativeName==t)return r;}return null;},e.typePropertyName="type",e.positionPropertyName="pos",e.metaDataValue=new u(),e;}();},function(e,t,n){"use strict";var r=n(39);n.d(t,"a",function(){return i;}),n.d(t,"b",function(){return o;});var i={currentLocale:"",defaultLocale:"en",locales:{},localeNames:{},supportedLocales:[],getString:function getString(e){var t=this.currentLocale?this.locales[this.currentLocale]:this.locales[this.defaultLocale];return t&&t[e]||(t=this.locales[this.defaultLocale]),t[e];},getLocales:function getLocales(){var e=[];if(e.push(""),this.supportedLocales&&this.supportedLocales.length>0)for(var t=0;t<this.supportedLocales.length;t++){e.push(this.supportedLocales[t]);}else for(var n in this.locales){e.push(n);}return e.sort(),e;}},o=r.a;i.locales.en=r.a,i.localeNames.en="english";},function(e,t,n){"use strict";var r=n(2);n.d(t,"a",function(){return i;}),n.d(t,"b",function(){return o;});var i=function(){function e(){this.creatorHash={};}return Object.defineProperty(e,"DefaultChoices",{get:function get(){return[r.a.getString("choices_Item")+"1",r.a.getString("choices_Item")+"2",r.a.getString("choices_Item")+"3"];},enumerable:!0,configurable:!0}),Object.defineProperty(e,"DefaultColums",{get:function get(){var e=r.a.getString("matrix_column")+" ";return[e+"1",e+"2",e+"3"];},enumerable:!0,configurable:!0}),Object.defineProperty(e,"DefaultRows",{get:function get(){var e=r.a.getString("matrix_row")+" ";return[e+"1",e+"2"];},enumerable:!0,configurable:!0}),e.prototype.registerQuestion=function(e,t){this.creatorHash[e]=t;},e.prototype.clear=function(){this.creatorHash={};},e.prototype.getAllTypes=function(){var e=new Array();for(var t in this.creatorHash){e.push(t);}return e.sort();},e.prototype.createQuestion=function(e,t){var n=this.creatorHash[e];return null==n?null:n(t);},e.Instance=new e(),e;}(),o=function(){function e(){this.creatorHash={};}return e.prototype.registerElement=function(e,t){this.creatorHash[e]=t;},e.prototype.clear=function(){this.creatorHash={};},e.prototype.getAllTypes=function(){var e=i.Instance.getAllTypes();for(var t in this.creatorHash){e.push(t);}return e.sort();},e.prototype.createElement=function(e,t){var n=this.creatorHash[e];return null==n?i.Instance.createQuestion(e,t):n(t);},e.Instance=new e(),e;}();},function(e,t,n){"use strict";var r=n(0),i=n(15),o=n(5),a=n(11),s=n(1);n.d(t,"c",function(){return u;}),n.d(t,"d",function(){return l;}),n.d(t,"a",function(){return c;}),n.d(t,"b",function(){return p;});var u=function(){function e(){this.propertyHash={},this.localizableStrings={},this.arraysInfo={},this.onPropChangeFunctions=[],this.isLoadingFromJsonValue=!1,this.onPropertyChanged=new p(),s.b.createProperties(this);}return e.prototype.isValueEmpty=function(e){return o.a.isValueEmpty(e);},e.prototype.IsPropertyEmpty=function(e){return""!==e&&this.isValueEmpty(e);},e.prototype.getType=function(){return"base";},e.prototype.getTemplate=function(){return this.getType();},Object.defineProperty(e.prototype,"isLoadingFromJson",{get:function get(){return this.isLoadingFromJsonValue;},enumerable:!0,configurable:!0}),e.prototype.startLoadingFromJson=function(){this.isLoadingFromJsonValue=!0;},e.prototype.endLoadingFromJson=function(){this.isLoadingFromJsonValue=!1;},e.prototype.toJSON=function(){return new s.a().toJsonObject(this);},e.prototype.locStrsChanged=function(){for(var e in this.arraysInfo){var t=this.arraysInfo[e];if(t&&t.isItemValues){var n=this.getPropertyValue(e);n&&a.a.locStrsChanged(n);}}for(var e in this.localizableStrings){var t=this.getLocalizableString(e);t&&t.strChanged();}},e.prototype.getPropertyValue=function(e,t){void 0===t&&(t=null);var n=this.propertyHash[e];return this.IsPropertyEmpty(n)&&null!=t?t:n;},e.prototype.setPropertyValueCore=function(e,t,n){this.setPropertyValueCoreHandler?this.setPropertyValueCoreHandler(e,t,n):e[t]=n;},e.prototype.setPropertyValue=function(e,t){var n=this.propertyHash[e];if(n&&Array.isArray(n)){if(this.isTwoValueEquals(n,t))return;var r=this.arraysInfo[e];this.setArray(n,t,!!r&&r.isItemValues,r?r.onPush:null),this.propertyValueChanged(e,n,n);}else this.setPropertyValueCore(this.propertyHash,e,t),this.isTwoValueEquals(n,t)||this.propertyValueChanged(e,n,t);},e.prototype.propertyValueChanged=function(e,t,n){if(!this.isLoadingFromJson){this.onPropertyChanged.fire(this,{name:e,oldValue:t,newValue:n});for(var r=0;r<this.onPropChangeFunctions.length;r++){this.onPropChangeFunctions[r].name==e&&this.onPropChangeFunctions[r].func(n);}}},e.prototype.registerFunctionOnPropertyValueChanged=function(e,t,n){if(void 0===n&&(n=null),n)for(var r=0;r<this.onPropChangeFunctions.length;r++){var i=this.onPropChangeFunctions[r];if(i.name==e&&i.key==n)return void(i.func=t);}this.onPropChangeFunctions.push({name:e,func:t,key:n});},e.prototype.registerFunctionOnPropertiesValueChanged=function(e,t,n){void 0===n&&(n=null);for(var r=0;r<e.length;r++){this.registerFunctionOnPropertyValueChanged(e[r],t,n);}},e.prototype.unRegisterFunctionOnPropertyValueChanged=function(e,t){void 0===t&&(t=null);for(var n=0;n<this.onPropChangeFunctions.length;n++){var r=this.onPropChangeFunctions[n];if(r.name==e&&r.key==t)return void this.onPropChangeFunctions.splice(n,1);}},e.prototype.unRegisterFunctionOnPropertiesValueChanged=function(e,t){void 0===t&&(t=null);for(var n=0;n<e.length;n++){this.unRegisterFunctionOnPropertyValueChanged(e[n],t);}},e.prototype.createCustomLocalizableObj=function(e){!this.getLocalizableString(e)&&this.getLocale&&this.createLocalizableString(e,this);},e.prototype.createLocalizableString=function(e,t,n){void 0===n&&(n=!1);var r=new i.a(t,n);return this.localizableStrings[e]=r,r;},e.prototype.getLocalizableString=function(e){return this.localizableStrings[e];},e.prototype.getLocalizableStringText=function(e,t){void 0===t&&(t="");var n=this.getLocalizableString(e);if(!n)return"";var r=n.text;return r||t;},e.prototype.setLocalizableStringText=function(e,t){var n=this.getLocalizableString(e);if(n){var r=n.text;r!==t&&(n.text=t,this.propertyValueChanged(e,r,t));}},e.prototype.createItemValues=function(e){var t=this,n=this.createNewArray(e,function(e){e.locOwner=t;});return this.arraysInfo[e].isItemValues=!0,n;},e.prototype.createNewArray=function(e,t,n){void 0===t&&(t=null),void 0===n&&(n=null);var r=new Array();this.setPropertyValueCore(this.propertyHash,e,r),this.arraysInfo[e]={onPush:t,isItemValues:!1};var i=this;return r.push=function(n){var o=Array.prototype.push.call(r,n);return t&&t(n),i.propertyValueChanged(e,r,r),o;},r.pop=function(){var t=Array.prototype.pop.call(r);return n&&n(t),i.propertyValueChanged(e,r,r),t;},r.splice=function(o,a){for(var s=[],u=2;u<arguments.length;u++){s[u-2]=arguments[u];}o||(o=0),a||(a=0);var l=(p=Array.prototype.splice).call.apply(p,[r,o,a].concat(s));if(s||(s=[]),n&&l)for(var c=0;c<l.length;c++){n(l[c]);}if(t)for(var c=0;c<s.length;c++){t(s[c],o+c);}return i.propertyValueChanged(e,r,r),l;var p;},r;},e.prototype.setArray=function(e,t,n,r){if(e.length=0,t)for(var i=0;i<t.length;i++){if(n){var o=t[i];o=new a.a(null),o.setData(t[i]),Array.prototype.push.call(e,o);}else Array.prototype.push.call(e,t[i]);r&&r(e[i]);}},e.prototype.isTwoValueEquals=function(e,t){return o.a.isTwoValueEquals(e,t);},e.commentPrefix="-Comment",e;}(),l=function(){function e(e,t){void 0===e&&(e=null),void 0===t&&(t=null),this.text=e,this.locTextValue=new i.a(t,!0),this.locText.text=this.getText();}return Object.defineProperty(e.prototype,"locText",{get:function get(){return this.locTextValue;},enumerable:!0,configurable:!0}),e.prototype.getText=function(){var e=this.text;return e||(e=this.getDefaultText()),e;},e.prototype.getDefaultText=function(){return"";},e;}(),c=function(e){function t(t){var n=e.call(this)||this;return n.selectedElementInDesignValue=n,n.errorsValue=[],n.name=t,n;}return r.b(t,e),t.ScrollElementToTop=function(e){if(!e)return!1;var t=document.getElementById(e);if(!t||!t.scrollIntoView)return!1;var n=t.getBoundingClientRect().top;return n<0&&t.scrollIntoView(),n<0;},t.GetFirstNonTextElement=function(e){if(e&&e.length){for(var t=0;t<e.length;t++){if("#text"!=e[t].nodeName&&"#comment"!=e[t].nodeName)return e[t];}return null;}},t.FocusElement=function(e){if(!e)return!1;var t=document.getElementById(e);return!!t&&(t.focus(),!0);},t.prototype.setSurveyImpl=function(e){this.surveyImplValue=e,this.surveyImplValue&&(this.surveyDataValue=this.surveyImplValue.geSurveyData(),this.surveyValue=this.surveyImplValue.getSurvey(),this.textProcessorValue=this.surveyImplValue.getTextProcessor(),this.onSetData());},Object.defineProperty(t.prototype,"surveyImpl",{get:function get(){return this.surveyImplValue;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"data",{get:function get(){return this.surveyDataValue;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"survey",{get:function get(){return this.surveyValue;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isDesignMode",{get:function get(){return this.survey&&this.survey.isDesignMode;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isVisible",{get:function get(){return!0;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isLoadingFromJson",{get:function get(){return this.survey?this.survey.isLoadingFromJson:this.isLoadingFromJsonValue;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"name",{get:function get(){return this.getPropertyValue("name","");},set:function set(e){this.setPropertyValue("name",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"errors",{get:function get(){return this.errorsValue;},set:function set(e){this.errorsValue=e;},enumerable:!0,configurable:!0}),t.prototype.getElementsInDesign=function(e){return void 0===e&&(e=!1),[];},Object.defineProperty(t.prototype,"selectedElementInDesign",{get:function get(){return this.selectedElementInDesignValue;},set:function set(e){this.selectedElementInDesignValue=e;},enumerable:!0,configurable:!0}),t.prototype.updateCustomWidgets=function(){},t.prototype.onSurveyLoad=function(){},t.prototype.endLoadingFromJson=function(){e.prototype.endLoadingFromJson.call(this),this.survey||this.onSurveyLoad();},t.prototype.setVisibleIndex=function(e){return 0;},Object.defineProperty(t.prototype,"textProcessor",{get:function get(){return this.textProcessorValue;},enumerable:!0,configurable:!0}),t.prototype.getProcessedHtml=function(e){return e&&this.textProcessor?this.textProcessor.processText(e,!0):e;},t.prototype.onSetData=function(){},t.prototype.getPage=function(e){for(;e&&e.parent;){e=e.parent;}return e&&"page"==e.getType()?e:null;},t.prototype.setPage=function(e,t){this.getPage(e)!==t&&(e&&e.removeElement(this),t&&t.addElement(this,-1));},t.prototype.copyCssClasses=function(e,t){if(t)if("string"==typeof t||t instanceof String)e.root=t;else for(var n in t){e[n]=t[n];}},t;}(u),p=function(){function e(){}return Object.defineProperty(e.prototype,"isEmpty",{get:function get(){return null==this.callbacks||0==this.callbacks.length;},enumerable:!0,configurable:!0}),e.prototype.fire=function(e,t){if(null!=this.callbacks)for(var n=0;n<this.callbacks.length;n++){this.callbacks[n](e,t);}},e.prototype.clear=function(){this.callbacks=[];},e.prototype.add=function(e){null==this.callbacks&&(this.callbacks=new Array()),this.callbacks.push(e);},e.prototype.remove=function(e){if(null!=this.callbacks){var t=this.callbacks.indexOf(e,0);void 0!=t&&this.callbacks.splice(t,1);}},e;}();},function(e,t,n){"use strict";n.d(t,"a",function(){return r;});var r=function(){function e(){}return e.isValueEmpty=function(e){return!(!Array.isArray(e)||0!==e.length)||(e&&("string"==typeof e||e instanceof String)&&(e=e.trim()),!e&&0!==e&&!1!==e);},e.isArrayContainsEqual=function(t,n){if(!Array.isArray(t)||!Array.isArray(n))return!1;if(t.length!==n.length)return!1;for(var r=0;r<t.length;r++){for(var i=0;i<n.length&&!e.isTwoValueEquals(t[r],n[i]);i++){}if(i===n.length)return!1;}return!0;},e.isArraysEqual=function(t,n,r){if(void 0===r&&(r=!1),!Array.isArray(t)||!Array.isArray(n))return!1;if(t.length!==n.length)return!1;if(r){for(var i=[],o=[],a=0;a<t.length;a++){i.push(t[a]),o.push(n[a]);}i.sort(),o.sort(),t=i,n=o;}for(var a=0;a<t.length;a++){if(!e.isTwoValueEquals(t[a],n[a]))return!1;}return!0;},e.isTwoValueEquals=function(t,n,r){if(void 0===r&&(r=!1),t===n)return!0;if(t&&!n||!t&&n)return!1;if(!(t instanceof Object||n instanceof Object))return t==n;if(!(t instanceof Object&&n instanceof Object))return!1;if(t.equals)return t.equals(n);if(Array.isArray(t)&&Array.isArray(n))return e.isArraysEqual(t,n,r);for(var i in t){if(t.hasOwnProperty(i)){if(!n.hasOwnProperty(i))return!1;if(t[i]!==n[i]){if("object"!=_typeof(t[i]))return!1;if(!this.isTwoValueEquals(t[i],n[i]))return!1;}}}for(i in n){if(n.hasOwnProperty(i)&&!t.hasOwnProperty(i))return!1;}return!0;},e.randomizeArray=function(e){for(var t=e.length-1;t>0;t--){var n=Math.floor(Math.random()*(t+1)),r=e[t];e[t]=e[n],e[n]=r;}return e;},e.getUnbindValue=function(e){return e&&e instanceof Object?JSON.parse(JSON.stringify(e)):e;},e.getMaxLength=function(e,t){return e<0&&(e=t),e>0?e:null;},e;}();String.prototype.format||(String.prototype.format=function(){var e=arguments;return this.replace(/{(\d+)}/g,function(t,n){return void 0!==e[n]?e[n]:t;});});},function(e,t,n){var r,i,o;/*!
 * Knockout JavaScript library v3.4.0
 * (c) Steven Sanderson - http://knockoutjs.com/
 * License: MIT (http://www.opensource.org/licenses/mit-license.php)
 */!function(){var a=!0;!function(s){var u=this||(0,eval)("this"),l=u.document,c=u.navigator,p=u.jQuery,d=u.JSON;!function(a){i=[t,n],r=a,(o="function"==typeof r?r.apply(t,i):r)!==s&&(e.exports=o);}(function(e,t){function n(e,t){return!!(null===e||(typeof e==="undefined"?"undefined":_typeof(e))in b)&&e===t;}function r(e,t){var n;return function(){n||(n=v.utils.setTimeout(function(){n=s,e();},t));};}function i(e,t){var n;return function(){clearTimeout(n),n=v.utils.setTimeout(e,t);};}function o(e){var t=this;return e&&v.utils.objectForEach(e,function(e,n){var r=v.extenders[e];"function"==typeof r&&(t=r(t,n)||t);}),t;}function h(e,t){t&&t!==x?"beforeChange"===t?this._limitBeforeChange(e):this._origNotifySubscribers(e,t):this._limitChange(e);}function f(e,t){null!==t&&t.dispose&&t.dispose();}function m(e,t){var n=this.computedObservable,r=n[T];r.isDisposed||(this.disposalCount&&this.disposalCandidates[t]?(n.addDependencyTracking(t,e,this.disposalCandidates[t]),this.disposalCandidates[t]=null,--this.disposalCount):r.dependencyTracking[t]||n.addDependencyTracking(t,e,r.isSleeping?{_target:e}:n.subscribeToDependency(e)));}function g(e){v.bindingHandlers[e]={init:function init(t,n,r,i,o){var a=function a(){var t={};return t[e]=n(),t;};return v.bindingHandlers.event.init.call(this,t,a,r,i,o);}};}function y(e,t,n,r){v.bindingHandlers[e]={init:function init(e,i,o,a,s){var u,l;return v.computed(function(){var o=v.utils.unwrapObservable(i()),a=!n!=!o,c=!l;(c||t||a!==u)&&(c&&v.computedContext.getDependenciesCount()&&(l=v.utils.cloneNodes(v.virtualElements.childNodes(e),!0)),a?(c||v.virtualElements.setDomNodeChildren(e,v.utils.cloneNodes(l)),v.applyBindingsToDescendants(r?r(s,o):s,e)):v.virtualElements.emptyNode(e),u=a);},null,{disposeWhenNodeIsRemoved:e}),{controlsDescendantBindings:!0};}},v.expressionRewriting.bindingRewriteValidators[e]=!1,v.virtualElements.allowedBindings[e]=!0;}var v=void 0!==e?e:{};v.exportSymbol=function(e,t){for(var n=e.split("."),r=v,i=0;i<n.length-1;i++){r=r[n[i]];}r[n[n.length-1]]=t;},v.exportProperty=function(e,t,n){e[t]=n;},v.version="3.4.0",v.exportSymbol("version",v.version),v.options={deferUpdates:!1,useOnlyNativeEvents:!1},v.utils=function(){function e(e,t){for(var n in e){e.hasOwnProperty(n)&&t(n,e[n]);}}function t(e,t){if(t)for(var n in t){t.hasOwnProperty(n)&&(e[n]=t[n]);}return e;}function n(e,t){return e.__proto__=t,e;}function r(e,t){if("input"!==v.utils.tagNameLower(e)||!e.type)return!1;if("click"!=t.toLowerCase())return!1;var n=e.type;return"checkbox"==n||"radio"==n;}function i(e,t,n){var r;t&&("object"==_typeof(e.classList)?(r=e.classList[n?"add":"remove"],v.utils.arrayForEach(t.match(w),function(t){r.call(e.classList,t);})):"string"==typeof e.className.baseVal?o(e.className,"baseVal",t,n):o(e,"className",t,n));}function o(e,t,n,r){var i=e[t].match(w)||[];v.utils.arrayForEach(n.match(w),function(e){v.utils.addOrRemoveItem(i,e,r);}),e[t]=i.join(" ");}var h={__proto__:[]}instanceof Array,f=!a&&"function"==typeof Symbol,m={},g={};m[c&&/Firefox\/2/i.test(c.userAgent)?"KeyboardEvent":"UIEvents"]=["keyup","keydown","keypress"],m.MouseEvents=["click","dblclick","mousedown","mouseup","mousemove","mouseover","mouseout","mouseenter","mouseleave"],e(m,function(e,t){if(t.length)for(var n=0,r=t.length;n<r;n++){g[t[n]]=e;}});var y={propertychange:!0},b=l&&function(){for(var e=3,t=l.createElement("div"),n=t.getElementsByTagName("i");t.innerHTML="\x3c!--[if gt IE "+ ++e+"]><i></i><![endif]--\x3e",n[0];){}return e>4?e:s;}(),x=6===b,C=7===b,w=/\S+/g;return{fieldsIncludedWithJsonPost:["authenticity_token",/^__RequestVerificationToken(_.*)?$/],arrayForEach:function arrayForEach(e,t){for(var n=0,r=e.length;n<r;n++){t(e[n],n);}},arrayIndexOf:function arrayIndexOf(e,t){if("function"==typeof Array.prototype.indexOf)return Array.prototype.indexOf.call(e,t);for(var n=0,r=e.length;n<r;n++){if(e[n]===t)return n;}return-1;},arrayFirst:function arrayFirst(e,t,n){for(var r=0,i=e.length;r<i;r++){if(t.call(n,e[r],r))return e[r];}return null;},arrayRemoveItem:function arrayRemoveItem(e,t){var n=v.utils.arrayIndexOf(e,t);n>0?e.splice(n,1):0===n&&e.shift();},arrayGetDistinctValues:function arrayGetDistinctValues(e){e=e||[];for(var t=[],n=0,r=e.length;n<r;n++){v.utils.arrayIndexOf(t,e[n])<0&&t.push(e[n]);}return t;},arrayMap:function arrayMap(e,t){e=e||[];for(var n=[],r=0,i=e.length;r<i;r++){n.push(t(e[r],r));}return n;},arrayFilter:function arrayFilter(e,t){e=e||[];for(var n=[],r=0,i=e.length;r<i;r++){t(e[r],r)&&n.push(e[r]);}return n;},arrayPushAll:function arrayPushAll(e,t){if(t instanceof Array)e.push.apply(e,t);else for(var n=0,r=t.length;n<r;n++){e.push(t[n]);}return e;},addOrRemoveItem:function addOrRemoveItem(e,t,n){var r=v.utils.arrayIndexOf(v.utils.peekObservable(e),t);r<0?n&&e.push(t):n||e.splice(r,1);},canSetPrototype:h,extend:t,setPrototypeOf:n,setPrototypeOfOrExtend:h?n:t,objectForEach:e,objectMap:function objectMap(e,t){if(!e)return e;var n={};for(var r in e){e.hasOwnProperty(r)&&(n[r]=t(e[r],r,e));}return n;},emptyDomNode:function emptyDomNode(e){for(;e.firstChild;){v.removeNode(e.firstChild);}},moveCleanedNodesToContainerElement:function moveCleanedNodesToContainerElement(e){for(var t=v.utils.makeArray(e),n=t[0]&&t[0].ownerDocument||l,r=n.createElement("div"),i=0,o=t.length;i<o;i++){r.appendChild(v.cleanNode(t[i]));}return r;},cloneNodes:function cloneNodes(e,t){for(var n=0,r=e.length,i=[];n<r;n++){var o=e[n].cloneNode(!0);i.push(t?v.cleanNode(o):o);}return i;},setDomNodeChildren:function setDomNodeChildren(e,t){if(v.utils.emptyDomNode(e),t)for(var n=0,r=t.length;n<r;n++){e.appendChild(t[n]);}},replaceDomNodes:function replaceDomNodes(e,t){var n=e.nodeType?[e]:e;if(n.length>0){for(var r=n[0],i=r.parentNode,o=0,a=t.length;o<a;o++){i.insertBefore(t[o],r);}for(var o=0,a=n.length;o<a;o++){v.removeNode(n[o]);}}},fixUpContinuousNodeArray:function fixUpContinuousNodeArray(e,t){if(e.length){for(t=8===t.nodeType&&t.parentNode||t;e.length&&e[0].parentNode!==t;){e.splice(0,1);}for(;e.length>1&&e[e.length-1].parentNode!==t;){e.length--;}if(e.length>1){var n=e[0],r=e[e.length-1];for(e.length=0;n!==r;){e.push(n),n=n.nextSibling;}e.push(r);}}return e;},setOptionNodeSelectionState:function setOptionNodeSelectionState(e,t){b<7?e.setAttribute("selected",t):e.selected=t;},stringTrim:function stringTrim(e){return null===e||e===s?"":e.trim?e.trim():e.toString().replace(/^[\s\xa0]+|[\s\xa0]+$/g,"");},stringStartsWith:function stringStartsWith(e,t){return e=e||"",!(t.length>e.length)&&e.substring(0,t.length)===t;},domNodeIsContainedBy:function domNodeIsContainedBy(e,t){if(e===t)return!0;if(11===e.nodeType)return!1;if(t.contains)return t.contains(3===e.nodeType?e.parentNode:e);if(t.compareDocumentPosition)return 16==(16&t.compareDocumentPosition(e));for(;e&&e!=t;){e=e.parentNode;}return!!e;},domNodeIsAttachedToDocument:function domNodeIsAttachedToDocument(e){return v.utils.domNodeIsContainedBy(e,e.ownerDocument.documentElement);},anyDomNodeIsAttachedToDocument:function anyDomNodeIsAttachedToDocument(e){return!!v.utils.arrayFirst(e,v.utils.domNodeIsAttachedToDocument);},tagNameLower:function tagNameLower(e){return e&&e.tagName&&e.tagName.toLowerCase();},catchFunctionErrors:function catchFunctionErrors(e){return v.onError?function(){try{return e.apply(this,arguments);}catch(e){throw v.onError&&v.onError(e),e;}}:e;},setTimeout:function(_setTimeout){function setTimeout(_x,_x2){return _setTimeout.apply(this,arguments);}setTimeout.toString=function(){return _setTimeout.toString();};return setTimeout;}(function(e,t){return setTimeout(v.utils.catchFunctionErrors(e),t);}),deferError:function deferError(e){setTimeout(function(){throw v.onError&&v.onError(e),e;},0);},registerEventHandler:function registerEventHandler(e,t,n){var r=v.utils.catchFunctionErrors(n),i=b&&y[t];if(v.options.useOnlyNativeEvents||i||!p){if(i||"function"!=typeof e.addEventListener){if(void 0===e.attachEvent)throw new Error("Browser doesn't support addEventListener or attachEvent");var o=function o(t){r.call(e,t);},a="on"+t;e.attachEvent(a,o),v.utils.domNodeDisposal.addDisposeCallback(e,function(){e.detachEvent(a,o);});}else e.addEventListener(t,r,!1);}else p(e).bind(t,r);},triggerEvent:function triggerEvent(e,t){if(!e||!e.nodeType)throw new Error("element must be a DOM node when calling triggerEvent");var n=r(e,t);if(v.options.useOnlyNativeEvents||!p||n){if("function"==typeof l.createEvent){if("function"!=typeof e.dispatchEvent)throw new Error("The supplied element doesn't support dispatchEvent");var i=g[t]||"HTMLEvents",o=l.createEvent(i);o.initEvent(t,!0,!0,u,0,0,0,0,0,!1,!1,!1,!1,0,e),e.dispatchEvent(o);}else if(n&&e.click)e.click();else{if(void 0===e.fireEvent)throw new Error("Browser doesn't support triggering events");e.fireEvent("on"+t);}}else p(e).trigger(t);},unwrapObservable:function unwrapObservable(e){return v.isObservable(e)?e():e;},peekObservable:function peekObservable(e){return v.isObservable(e)?e.peek():e;},toggleDomNodeCssClass:i,setTextContent:function setTextContent(e,t){var n=v.utils.unwrapObservable(t);null!==n&&n!==s||(n="");var r=v.virtualElements.firstChild(e);!r||3!=r.nodeType||v.virtualElements.nextSibling(r)?v.virtualElements.setDomNodeChildren(e,[e.ownerDocument.createTextNode(n)]):r.data=n,v.utils.forceRefresh(e);},setElementName:function setElementName(e,t){if(e.name=t,b<=7)try{e.mergeAttributes(l.createElement("<input name='"+e.name+"'/>"),!1);}catch(e){}},forceRefresh:function forceRefresh(e){if(b>=9){var t=1==e.nodeType?e:e.parentNode;t.style&&(t.style.zoom=t.style.zoom);}},ensureSelectElementIsRenderedCorrectly:function ensureSelectElementIsRenderedCorrectly(e){if(b){var t=e.style.width;e.style.width=0,e.style.width=t;}},range:function range(e,t){e=v.utils.unwrapObservable(e),t=v.utils.unwrapObservable(t);for(var n=[],r=e;r<=t;r++){n.push(r);}return n;},makeArray:function makeArray(e){for(var t=[],n=0,r=e.length;n<r;n++){t.push(e[n]);}return t;},createSymbolOrString:function createSymbolOrString(e){return f?Symbol(e):e;},isIe6:x,isIe7:C,ieVersion:b,getFormFields:function getFormFields(e,t){for(var n=v.utils.makeArray(e.getElementsByTagName("input")).concat(v.utils.makeArray(e.getElementsByTagName("textarea"))),r="string"==typeof t?function(e){return e.name===t;}:function(e){return t.test(e.name);},i=[],o=n.length-1;o>=0;o--){r(n[o])&&i.push(n[o]);}return i;},parseJson:function parseJson(e){return"string"==typeof e&&(e=v.utils.stringTrim(e))?d&&d.parse?d.parse(e):new Function("return "+e)():null;},stringifyJson:function stringifyJson(e,t,n){if(!d||!d.stringify)throw new Error("Cannot find JSON.stringify(). Some browsers (e.g., IE < 8) don't support it natively, but you can overcome this by adding a script reference to json2.js, downloadable from http://www.json.org/json2.js");return d.stringify(v.utils.unwrapObservable(e),t,n);},postJson:function postJson(t,n,r){r=r||{};var i=r.params||{},o=r.includeFields||this.fieldsIncludedWithJsonPost,a=t;if("object"==(typeof t==="undefined"?"undefined":_typeof(t))&&"form"===v.utils.tagNameLower(t)){var s=t;a=s.action;for(var u=o.length-1;u>=0;u--){for(var c=v.utils.getFormFields(s,o[u]),p=c.length-1;p>=0;p--){i[c[p].name]=c[p].value;}}}n=v.utils.unwrapObservable(n);var d=l.createElement("form");d.style.display="none",d.action=a,d.method="post";for(var h in n){var f=l.createElement("input");f.type="hidden",f.name=h,f.value=v.utils.stringifyJson(v.utils.unwrapObservable(n[h])),d.appendChild(f);}e(i,function(e,t){var n=l.createElement("input");n.type="hidden",n.name=e,n.value=t,d.appendChild(n);}),l.body.appendChild(d),r.submitter?r.submitter(d):d.submit(),setTimeout(function(){d.parentNode.removeChild(d);},0);}};}(),v.exportSymbol("utils",v.utils),v.exportSymbol("utils.arrayForEach",v.utils.arrayForEach),v.exportSymbol("utils.arrayFirst",v.utils.arrayFirst),v.exportSymbol("utils.arrayFilter",v.utils.arrayFilter),v.exportSymbol("utils.arrayGetDistinctValues",v.utils.arrayGetDistinctValues),v.exportSymbol("utils.arrayIndexOf",v.utils.arrayIndexOf),v.exportSymbol("utils.arrayMap",v.utils.arrayMap),v.exportSymbol("utils.arrayPushAll",v.utils.arrayPushAll),v.exportSymbol("utils.arrayRemoveItem",v.utils.arrayRemoveItem),v.exportSymbol("utils.extend",v.utils.extend),v.exportSymbol("utils.fieldsIncludedWithJsonPost",v.utils.fieldsIncludedWithJsonPost),v.exportSymbol("utils.getFormFields",v.utils.getFormFields),v.exportSymbol("utils.peekObservable",v.utils.peekObservable),v.exportSymbol("utils.postJson",v.utils.postJson),v.exportSymbol("utils.parseJson",v.utils.parseJson),v.exportSymbol("utils.registerEventHandler",v.utils.registerEventHandler),v.exportSymbol("utils.stringifyJson",v.utils.stringifyJson),v.exportSymbol("utils.range",v.utils.range),v.exportSymbol("utils.toggleDomNodeCssClass",v.utils.toggleDomNodeCssClass),v.exportSymbol("utils.triggerEvent",v.utils.triggerEvent),v.exportSymbol("utils.unwrapObservable",v.utils.unwrapObservable),v.exportSymbol("utils.objectForEach",v.utils.objectForEach),v.exportSymbol("utils.addOrRemoveItem",v.utils.addOrRemoveItem),v.exportSymbol("utils.setTextContent",v.utils.setTextContent),v.exportSymbol("unwrap",v.utils.unwrapObservable),Function.prototype.bind||(Function.prototype.bind=function(e){var t=this;if(1===arguments.length)return function(){return t.apply(e,arguments);};var n=Array.prototype.slice.call(arguments,1);return function(){var r=n.slice(0);return r.push.apply(r,arguments),t.apply(e,r);};}),v.utils.domData=new function(){function e(e,i){var o=e[n];if(!o||"null"===o||!r[o]){if(!i)return s;o=e[n]="ko"+t++,r[o]={};}return r[o];}var t=0,n="__ko__"+new Date().getTime(),r={};return{get:function get(t,n){var r=e(t,!1);return r===s?s:r[n];},set:function set(t,n,r){if(r!==s||e(t,!1)!==s){e(t,!0)[n]=r;}},clear:function clear(e){var t=e[n];return!!t&&(delete r[t],e[n]=null,!0);},nextKey:function nextKey(){return t++ +n;}};}(),v.exportSymbol("utils.domData",v.utils.domData),v.exportSymbol("utils.domData.clear",v.utils.domData.clear),v.utils.domNodeDisposal=new function(){function e(e,t){var n=v.utils.domData.get(e,i);return n===s&&t&&(n=[],v.utils.domData.set(e,i,n)),n;}function t(e){v.utils.domData.set(e,i,s);}function n(t){var n=e(t,!1);if(n){n=n.slice(0);for(var i=0;i<n.length;i++){n[i](t);}}v.utils.domData.clear(t),v.utils.domNodeDisposal.cleanExternalData(t),a[t.nodeType]&&r(t);}function r(e){for(var t,r=e.firstChild;t=r;){r=t.nextSibling,8===t.nodeType&&n(t);}}var i=v.utils.domData.nextKey(),o={1:!0,8:!0,9:!0},a={1:!0,9:!0};return{addDisposeCallback:function addDisposeCallback(t,n){if("function"!=typeof n)throw new Error("Callback must be a function");e(t,!0).push(n);},removeDisposeCallback:function removeDisposeCallback(n,r){var i=e(n,!1);i&&(v.utils.arrayRemoveItem(i,r),0==i.length&&t(n));},cleanNode:function cleanNode(e){if(o[e.nodeType]&&(n(e),a[e.nodeType])){var t=[];v.utils.arrayPushAll(t,e.getElementsByTagName("*"));for(var r=0,i=t.length;r<i;r++){n(t[r]);}}return e;},removeNode:function removeNode(e){v.cleanNode(e),e.parentNode&&e.parentNode.removeChild(e);},cleanExternalData:function cleanExternalData(e){p&&"function"==typeof p.cleanData&&p.cleanData([e]);}};}(),v.cleanNode=v.utils.domNodeDisposal.cleanNode,v.removeNode=v.utils.domNodeDisposal.removeNode,v.exportSymbol("cleanNode",v.cleanNode),v.exportSymbol("removeNode",v.removeNode),v.exportSymbol("utils.domNodeDisposal",v.utils.domNodeDisposal),v.exportSymbol("utils.domNodeDisposal.addDisposeCallback",v.utils.domNodeDisposal.addDisposeCallback),v.exportSymbol("utils.domNodeDisposal.removeDisposeCallback",v.utils.domNodeDisposal.removeDisposeCallback),function(){function e(e){var t=e.match(/^<([a-z]+)[ >]/);return t&&d[t[1]]||r;}function t(t,n){n||(n=l);var r=n.parentWindow||n.defaultView||u,i=v.utils.stringTrim(t).toLowerCase(),o=n.createElement("div"),a=e(i),s=a[0],c="ignored<div>"+a[1]+t+a[2]+"</div>";for("function"==typeof r.innerShiv?o.appendChild(r.innerShiv(c)):(h&&n.appendChild(o),o.innerHTML=c,h&&o.parentNode.removeChild(o));s--;){o=o.lastChild;}return v.utils.makeArray(o.lastChild.childNodes);}function n(e,t){if(p.parseHTML)return p.parseHTML(e,t)||[];var n=p.clean([e],t);if(n&&n[0]){for(var r=n[0];r.parentNode&&11!==r.parentNode.nodeType;){r=r.parentNode;}r.parentNode&&r.parentNode.removeChild(r);}return n;}var r=[0,"",""],i=[1,"<table>","</table>"],o=[2,"<table><tbody>","</tbody></table>"],a=[3,"<table><tbody><tr>","</tr></tbody></table>"],c=[1,"<select multiple='multiple'>","</select>"],d={thead:i,tbody:i,tfoot:i,tr:o,td:a,th:a,option:c,optgroup:c},h=v.utils.ieVersion<=8;v.utils.parseHtmlFragment=function(e,r){return p?n(e,r):t(e,r);},v.utils.setHtml=function(e,t){if(v.utils.emptyDomNode(e),null!==(t=v.utils.unwrapObservable(t))&&t!==s)if("string"!=typeof t&&(t=t.toString()),p)p(e).html(t);else for(var n=v.utils.parseHtmlFragment(t,e.ownerDocument),r=0;r<n.length;r++){e.appendChild(n[r]);}};}(),v.exportSymbol("utils.parseHtmlFragment",v.utils.parseHtmlFragment),v.exportSymbol("utils.setHtml",v.utils.setHtml),v.memoization=function(){function e(){return(4294967296*(1+Math.random())|0).toString(16).substring(1);}function t(){return e()+e();}function n(e,t){if(e)if(8==e.nodeType){var r=v.memoization.parseMemoText(e.nodeValue);null!=r&&t.push({domNode:e,memoId:r});}else if(1==e.nodeType)for(var i=0,o=e.childNodes,a=o.length;i<a;i++){n(o[i],t);}}var r={};return{memoize:function memoize(e){if("function"!=typeof e)throw new Error("You can only pass a function to ko.memoization.memoize()");var n=t();return r[n]=e,"\x3c!--[ko_memo:"+n+"]--\x3e";},unmemoize:function unmemoize(e,t){var n=r[e];if(n===s)throw new Error("Couldn't find any memo with ID "+e+". Perhaps it's already been unmemoized.");try{return n.apply(null,t||[]),!0;}finally{delete r[e];}},unmemoizeDomNodeAndDescendants:function unmemoizeDomNodeAndDescendants(e,t){var r=[];n(e,r);for(var i=0,o=r.length;i<o;i++){var a=r[i].domNode,s=[a];t&&v.utils.arrayPushAll(s,t),v.memoization.unmemoize(r[i].memoId,s),a.nodeValue="",a.parentNode&&a.parentNode.removeChild(a);}},parseMemoText:function parseMemoText(e){var t=e.match(/^\[ko_memo\:(.*?)\]$/);return t?t[1]:null;}};}(),v.exportSymbol("memoization",v.memoization),v.exportSymbol("memoization.memoize",v.memoization.memoize),v.exportSymbol("memoization.unmemoize",v.memoization.unmemoize),v.exportSymbol("memoization.parseMemoText",v.memoization.parseMemoText),v.exportSymbol("memoization.unmemoizeDomNodeAndDescendants",v.memoization.unmemoizeDomNodeAndDescendants),v.tasks=function(){function e(){if(o)for(var e,t=o,n=0;s<o;){if(e=i[s++]){if(s>t){if(++n>=5e3){s=o,v.utils.deferError(Error("'Too much recursion' after processing "+n+" task groups."));break;}t=o;}try{e();}catch(e){v.utils.deferError(e);}}}}function t(){e(),s=o=i.length=0;}function n(){v.tasks.scheduler(t);}var r,i=[],o=0,a=1,s=0;return r=u.MutationObserver?function(e){var t=l.createElement("div");return new MutationObserver(e).observe(t,{attributes:!0}),function(){t.classList.toggle("foo");};}(t):l&&"onreadystatechange"in l.createElement("script")?function(e){var t=l.createElement("script");t.onreadystatechange=function(){t.onreadystatechange=null,l.documentElement.removeChild(t),t=null,e();},l.documentElement.appendChild(t);}:function(e){setTimeout(e,0);},{scheduler:r,schedule:function schedule(e){return o||n(),i[o++]=e,a++;},cancel:function cancel(e){var t=e-(a-o);t>=s&&t<o&&(i[t]=null);},resetForTesting:function resetForTesting(){var e=o-s;return s=o=i.length=0,e;},runEarly:e};}(),v.exportSymbol("tasks",v.tasks),v.exportSymbol("tasks.schedule",v.tasks.schedule),v.exportSymbol("tasks.runEarly",v.tasks.runEarly),v.extenders={throttle:function throttle(e,t){e.throttleEvaluation=t;var n=null;return v.dependentObservable({read:e,write:function write(r){clearTimeout(n),n=v.utils.setTimeout(function(){e(r);},t);}});},rateLimit:function rateLimit(e,t){var n,o,a;"number"==typeof t?n=t:(n=t.timeout,o=t.method),e._deferUpdates=!1,a="notifyWhenChangesStop"==o?i:r,e.limit(function(e){return a(e,n);});},deferred:function deferred(e,t){if(!0!==t)throw new Error("The 'deferred' extender only accepts the value 'true', because it is not supported to turn deferral off once enabled.");e._deferUpdates||(e._deferUpdates=!0,e.limit(function(t){var n;return function(){v.tasks.cancel(n),n=v.tasks.schedule(t),e.notifySubscribers(s,"dirty");};}));},notify:function notify(e,t){e.equalityComparer="always"==t?null:n;}};var b={undefined:1,boolean:1,number:1,string:1};v.exportSymbol("extenders",v.extenders),v.subscription=function(e,t,n){this._target=e,this.callback=t,this.disposeCallback=n,this.isDisposed=!1,v.exportProperty(this,"dispose",this.dispose);},v.subscription.prototype.dispose=function(){this.isDisposed=!0,this.disposeCallback();},v.subscribable=function(){v.utils.setPrototypeOfOrExtend(this,C),C.init(this);};var x="change",C={init:function init(e){e._subscriptions={},e._versionNumber=1;},subscribe:function subscribe(e,t,n){var r=this;n=n||x;var i=t?e.bind(t):e,o=new v.subscription(r,i,function(){v.utils.arrayRemoveItem(r._subscriptions[n],o),r.afterSubscriptionRemove&&r.afterSubscriptionRemove(n);});return r.beforeSubscriptionAdd&&r.beforeSubscriptionAdd(n),r._subscriptions[n]||(r._subscriptions[n]=[]),r._subscriptions[n].push(o),o;},notifySubscribers:function notifySubscribers(e,t){if(t=t||x,t===x&&this.updateVersion(),this.hasSubscriptionsForEvent(t))try{v.dependencyDetection.begin();for(var n,r=this._subscriptions[t].slice(0),i=0;n=r[i];++i){n.isDisposed||n.callback(e);}}finally{v.dependencyDetection.end();}},getVersion:function getVersion(){return this._versionNumber;},hasChanged:function hasChanged(e){return this.getVersion()!==e;},updateVersion:function updateVersion(){++this._versionNumber;},limit:function limit(e){var t,n,r,i=this,o=v.isObservable(i),a="beforeChange";i._origNotifySubscribers||(i._origNotifySubscribers=i.notifySubscribers,i.notifySubscribers=h);var s=e(function(){i._notificationIsPending=!1,o&&r===i&&(r=i()),t=!1,i.isDifferent(n,r)&&i._origNotifySubscribers(n=r);});i._limitChange=function(e){i._notificationIsPending=t=!0,r=e,s();},i._limitBeforeChange=function(e){t||(n=e,i._origNotifySubscribers(e,a));};},hasSubscriptionsForEvent:function hasSubscriptionsForEvent(e){return this._subscriptions[e]&&this._subscriptions[e].length;},getSubscriptionsCount:function getSubscriptionsCount(e){if(e)return this._subscriptions[e]&&this._subscriptions[e].length||0;var t=0;return v.utils.objectForEach(this._subscriptions,function(e,n){"dirty"!==e&&(t+=n.length);}),t;},isDifferent:function isDifferent(e,t){return!this.equalityComparer||!this.equalityComparer(e,t);},extend:o};v.exportProperty(C,"subscribe",C.subscribe),v.exportProperty(C,"extend",C.extend),v.exportProperty(C,"getSubscriptionsCount",C.getSubscriptionsCount),v.utils.canSetPrototype&&v.utils.setPrototypeOf(C,Function.prototype),v.subscribable.fn=C,v.isSubscribable=function(e){return null!=e&&"function"==typeof e.subscribe&&"function"==typeof e.notifySubscribers;},v.exportSymbol("subscribable",v.subscribable),v.exportSymbol("isSubscribable",v.isSubscribable),v.computedContext=v.dependencyDetection=function(){function e(){return++o;}function t(e){i.push(r),r=e;}function n(){r=i.pop();}var r,i=[],o=0;return{begin:t,end:n,registerDependency:function registerDependency(t){if(r){if(!v.isSubscribable(t))throw new Error("Only subscribable things can act as dependencies");r.callback.call(r.callbackTarget,t,t._id||(t._id=e()));}},ignore:function ignore(e,r,i){try{return t(),e.apply(r,i||[]);}finally{n();}},getDependenciesCount:function getDependenciesCount(){if(r)return r.computed.getDependenciesCount();},isInitial:function isInitial(){if(r)return r.isInitial;}};}(),v.exportSymbol("computedContext",v.computedContext),v.exportSymbol("computedContext.getDependenciesCount",v.computedContext.getDependenciesCount),v.exportSymbol("computedContext.isInitial",v.computedContext.isInitial),v.exportSymbol("ignoreDependencies",v.ignoreDependencies=v.dependencyDetection.ignore);var w=v.utils.createSymbolOrString("_latestValue");v.observable=function(e){function t(){return arguments.length>0?(t.isDifferent(t[w],arguments[0])&&(t.valueWillMutate(),t[w]=arguments[0],t.valueHasMutated()),this):(v.dependencyDetection.registerDependency(t),t[w]);}return t[w]=e,v.utils.canSetPrototype||v.utils.extend(t,v.subscribable.fn),v.subscribable.fn.init(t),v.utils.setPrototypeOfOrExtend(t,P),v.options.deferUpdates&&v.extenders.deferred(t,!0),t;};var P={equalityComparer:n,peek:function peek(){return this[w];},valueHasMutated:function valueHasMutated(){this.notifySubscribers(this[w]);},valueWillMutate:function valueWillMutate(){this.notifySubscribers(this[w],"beforeChange");}};v.utils.canSetPrototype&&v.utils.setPrototypeOf(P,v.subscribable.fn);var V=v.observable.protoProperty="__ko_proto__";P[V]=v.observable,v.hasPrototype=function(e,t){return null!==e&&e!==s&&e[V]!==s&&(e[V]===t||v.hasPrototype(e[V],t));},v.isObservable=function(e){return v.hasPrototype(e,v.observable);},v.isWriteableObservable=function(e){return"function"==typeof e&&e[V]===v.observable||!("function"!=typeof e||e[V]!==v.dependentObservable||!e.hasWriteFunction);},v.exportSymbol("observable",v.observable),v.exportSymbol("isObservable",v.isObservable),v.exportSymbol("isWriteableObservable",v.isWriteableObservable),v.exportSymbol("isWritableObservable",v.isWriteableObservable),v.exportSymbol("observable.fn",P),v.exportProperty(P,"peek",P.peek),v.exportProperty(P,"valueHasMutated",P.valueHasMutated),v.exportProperty(P,"valueWillMutate",P.valueWillMutate),v.observableArray=function(e){if("object"!=_typeof(e=e||[])||!("length"in e))throw new Error("The argument passed when initializing an observable array must be an array, or null, or undefined.");var t=v.observable(e);return v.utils.setPrototypeOfOrExtend(t,v.observableArray.fn),t.extend({trackArrayChanges:!0});},v.observableArray.fn={remove:function remove(e){for(var t=this.peek(),n=[],r="function"!=typeof e||v.isObservable(e)?function(t){return t===e;}:e,i=0;i<t.length;i++){var o=t[i];r(o)&&(0===n.length&&this.valueWillMutate(),n.push(o),t.splice(i,1),i--);}return n.length&&this.valueHasMutated(),n;},removeAll:function removeAll(e){if(e===s){var t=this.peek(),n=t.slice(0);return this.valueWillMutate(),t.splice(0,t.length),this.valueHasMutated(),n;}return e?this.remove(function(t){return v.utils.arrayIndexOf(e,t)>=0;}):[];},destroy:function destroy(e){var t=this.peek(),n="function"!=typeof e||v.isObservable(e)?function(t){return t===e;}:e;this.valueWillMutate();for(var r=t.length-1;r>=0;r--){n(t[r])&&(t[r]._destroy=!0);}this.valueHasMutated();},destroyAll:function destroyAll(e){return e===s?this.destroy(function(){return!0;}):e?this.destroy(function(t){return v.utils.arrayIndexOf(e,t)>=0;}):[];},indexOf:function indexOf(e){var t=this();return v.utils.arrayIndexOf(t,e);},replace:function replace(e,t){var n=this.indexOf(e);n>=0&&(this.valueWillMutate(),this.peek()[n]=t,this.valueHasMutated());}},v.utils.canSetPrototype&&v.utils.setPrototypeOf(v.observableArray.fn,v.observable.fn),v.utils.arrayForEach(["pop","push","reverse","shift","sort","splice","unshift"],function(e){v.observableArray.fn[e]=function(){var t=this.peek();this.valueWillMutate(),this.cacheDiffForKnownOperation(t,e,arguments);var n=t[e].apply(t,arguments);return this.valueHasMutated(),n===t?this:n;};}),v.utils.arrayForEach(["slice"],function(e){v.observableArray.fn[e]=function(){var t=this();return t[e].apply(t,arguments);};}),v.exportSymbol("observableArray",v.observableArray);var k="arrayChange";v.extenders.trackArrayChanges=function(e,t){function n(){if(!o){o=!0;var t=e.notifySubscribers;e.notifySubscribers=function(e,n){return n&&n!==x||++s,t.apply(this,arguments);};var n=[].concat(e.peek()||[]);a=null,i=e.subscribe(function(t){if(t=[].concat(t||[]),e.hasSubscriptionsForEvent(k))var i=r(n,t);n=t,a=null,s=0,i&&i.length&&e.notifySubscribers(i,k);});}}function r(t,n){return(!a||s>1)&&(a=v.utils.compareArrays(t,n,e.compareArrayOptions)),a;}if(e.compareArrayOptions={},t&&"object"==(typeof t==="undefined"?"undefined":_typeof(t))&&v.utils.extend(e.compareArrayOptions,t),e.compareArrayOptions.sparse=!0,!e.cacheDiffForKnownOperation){var i,o=!1,a=null,s=0,u=e.beforeSubscriptionAdd,l=e.afterSubscriptionRemove;e.beforeSubscriptionAdd=function(t){u&&u.call(e,t),t===k&&n();},e.afterSubscriptionRemove=function(t){l&&l.call(e,t),t!==k||e.hasSubscriptionsForEvent(k)||(i.dispose(),o=!1);},e.cacheDiffForKnownOperation=function(e,t,n){function r(e,t,n){return i[i.length]={status:e,value:t,index:n};}if(o&&!s){var i=[],u=e.length,l=n.length,c=0;switch(t){case"push":c=u;case"unshift":for(var p=0;p<l;p++){r("added",n[p],c+p);}break;case"pop":c=u-1;case"shift":u&&r("deleted",e[c],c);break;case"splice":for(var d=Math.min(Math.max(0,n[0]<0?u+n[0]:n[0]),u),h=1===l?u:Math.min(d+(n[1]||0),u),f=d+l-2,m=Math.max(h,f),g=[],y=[],p=d,b=2;p<m;++p,++b){p<h&&y.push(r("deleted",e[p],p)),p<f&&g.push(r("added",n[b],p));}v.utils.findMovesInArrayComparison(y,g);break;default:return;}a=i;}};}};var T=v.utils.createSymbolOrString("_state");v.computed=v.dependentObservable=function(e,t,n){function r(){if(arguments.length>0){if("function"!=typeof i)throw new Error("Cannot write a value to a ko.computed unless you specify a 'write' option. If you wish to read the current value, don't pass any parameters.");return i.apply(o.evaluatorFunctionTarget,arguments),this;}return v.dependencyDetection.registerDependency(r),(o.isStale||o.isSleeping&&r.haveDependenciesChanged())&&r.evaluateImmediate(),o.latestValue;}if("object"==(typeof e==="undefined"?"undefined":_typeof(e))?n=e:(n=n||{},e&&(n.read=e)),"function"!=typeof n.read)throw Error("Pass a function that returns the value of the ko.computed");var i=n.write,o={latestValue:s,isStale:!0,isBeingEvaluated:!1,suppressDisposalUntilDisposeWhenReturnsFalse:!1,isDisposed:!1,pure:!1,isSleeping:!1,readFunction:n.read,evaluatorFunctionTarget:t||n.owner,disposeWhenNodeIsRemoved:n.disposeWhenNodeIsRemoved||n.disposeWhenNodeIsRemoved||null,disposeWhen:n.disposeWhen||n.disposeWhen,domNodeDisposalCallback:null,dependencyTracking:{},dependenciesCount:0,evaluationTimeoutInstance:null};return r[T]=o,r.hasWriteFunction="function"==typeof i,v.utils.canSetPrototype||v.utils.extend(r,v.subscribable.fn),v.subscribable.fn.init(r),v.utils.setPrototypeOfOrExtend(r,S),n.pure?(o.pure=!0,o.isSleeping=!0,v.utils.extend(r,O)):n.deferEvaluation&&v.utils.extend(r,R),v.options.deferUpdates&&v.extenders.deferred(r,!0),a&&(r._options=n),o.disposeWhenNodeIsRemoved&&(o.suppressDisposalUntilDisposeWhenReturnsFalse=!0,o.disposeWhenNodeIsRemoved.nodeType||(o.disposeWhenNodeIsRemoved=null)),o.isSleeping||n.deferEvaluation||r.evaluateImmediate(),o.disposeWhenNodeIsRemoved&&r.isActive()&&v.utils.domNodeDisposal.addDisposeCallback(o.disposeWhenNodeIsRemoved,o.domNodeDisposalCallback=function(){r.dispose();}),r;};var S={equalityComparer:n,getDependenciesCount:function getDependenciesCount(){return this[T].dependenciesCount;},addDependencyTracking:function addDependencyTracking(e,t,n){if(this[T].pure&&t===this)throw Error("A 'pure' computed must not be called recursively");this[T].dependencyTracking[e]=n,n._order=this[T].dependenciesCount++,n._version=t.getVersion();},haveDependenciesChanged:function haveDependenciesChanged(){var e,t,n=this[T].dependencyTracking;for(e in n){if(n.hasOwnProperty(e)&&(t=n[e],t._target.hasChanged(t._version)))return!0;}},markDirty:function markDirty(){this._evalDelayed&&!this[T].isBeingEvaluated&&this._evalDelayed();},isActive:function isActive(){return this[T].isStale||this[T].dependenciesCount>0;},respondToChange:function respondToChange(){this._notificationIsPending||this.evaluatePossiblyAsync();},subscribeToDependency:function subscribeToDependency(e){if(e._deferUpdates&&!this[T].disposeWhenNodeIsRemoved){var t=e.subscribe(this.markDirty,this,"dirty"),n=e.subscribe(this.respondToChange,this);return{_target:e,dispose:function dispose(){t.dispose(),n.dispose();}};}return e.subscribe(this.evaluatePossiblyAsync,this);},evaluatePossiblyAsync:function evaluatePossiblyAsync(){var e=this,t=e.throttleEvaluation;t&&t>=0?(clearTimeout(this[T].evaluationTimeoutInstance),this[T].evaluationTimeoutInstance=v.utils.setTimeout(function(){e.evaluateImmediate(!0);},t)):e._evalDelayed?e._evalDelayed():e.evaluateImmediate(!0);},evaluateImmediate:function evaluateImmediate(e){var t=this,n=t[T],r=n.disposeWhen;if(!n.isBeingEvaluated&&!n.isDisposed){if(n.disposeWhenNodeIsRemoved&&!v.utils.domNodeIsAttachedToDocument(n.disposeWhenNodeIsRemoved)||r&&r()){if(!n.suppressDisposalUntilDisposeWhenReturnsFalse)return void t.dispose();}else n.suppressDisposalUntilDisposeWhenReturnsFalse=!1;n.isBeingEvaluated=!0;try{this.evaluateImmediate_CallReadWithDependencyDetection(e);}finally{n.isBeingEvaluated=!1;}n.dependenciesCount||t.dispose();}},evaluateImmediate_CallReadWithDependencyDetection:function evaluateImmediate_CallReadWithDependencyDetection(e){var t=this,n=t[T],r=n.pure?s:!n.dependenciesCount,i={computedObservable:t,disposalCandidates:n.dependencyTracking,disposalCount:n.dependenciesCount};v.dependencyDetection.begin({callbackTarget:i,callback:m,computed:t,isInitial:r}),n.dependencyTracking={},n.dependenciesCount=0;var o=this.evaluateImmediate_CallReadThenEndDependencyDetection(n,i);t.isDifferent(n.latestValue,o)&&(n.isSleeping||t.notifySubscribers(n.latestValue,"beforeChange"),n.latestValue=o,n.isSleeping?t.updateVersion():e&&t.notifySubscribers(n.latestValue)),r&&t.notifySubscribers(n.latestValue,"awake");},evaluateImmediate_CallReadThenEndDependencyDetection:function evaluateImmediate_CallReadThenEndDependencyDetection(e,t){try{var n=e.readFunction;return e.evaluatorFunctionTarget?n.call(e.evaluatorFunctionTarget):n();}finally{v.dependencyDetection.end(),t.disposalCount&&!e.isSleeping&&v.utils.objectForEach(t.disposalCandidates,f),e.isStale=!1;}},peek:function peek(){var e=this[T];return(e.isStale&&!e.dependenciesCount||e.isSleeping&&this.haveDependenciesChanged())&&this.evaluateImmediate(),e.latestValue;},limit:function limit(e){v.subscribable.fn.limit.call(this,e),this._evalDelayed=function(){this._limitBeforeChange(this[T].latestValue),this[T].isStale=!0,this._limitChange(this);};},dispose:function dispose(){var e=this[T];!e.isSleeping&&e.dependencyTracking&&v.utils.objectForEach(e.dependencyTracking,function(e,t){t.dispose&&t.dispose();}),e.disposeWhenNodeIsRemoved&&e.domNodeDisposalCallback&&v.utils.domNodeDisposal.removeDisposeCallback(e.disposeWhenNodeIsRemoved,e.domNodeDisposalCallback),e.dependencyTracking=null,e.dependenciesCount=0,e.isDisposed=!0,e.isStale=!1,e.isSleeping=!1,e.disposeWhenNodeIsRemoved=null;}},O={beforeSubscriptionAdd:function beforeSubscriptionAdd(e){var t=this,n=t[T];if(!n.isDisposed&&n.isSleeping&&"change"==e){if(n.isSleeping=!1,n.isStale||t.haveDependenciesChanged())n.dependencyTracking=null,n.dependenciesCount=0,n.isStale=!0,t.evaluateImmediate();else{var r=[];v.utils.objectForEach(n.dependencyTracking,function(e,t){r[t._order]=e;}),v.utils.arrayForEach(r,function(e,r){var i=n.dependencyTracking[e],o=t.subscribeToDependency(i._target);o._order=r,o._version=i._version,n.dependencyTracking[e]=o;});}n.isDisposed||t.notifySubscribers(n.latestValue,"awake");}},afterSubscriptionRemove:function afterSubscriptionRemove(e){var t=this[T];t.isDisposed||"change"!=e||this.hasSubscriptionsForEvent("change")||(v.utils.objectForEach(t.dependencyTracking,function(e,n){n.dispose&&(t.dependencyTracking[e]={_target:n._target,_order:n._order,_version:n._version},n.dispose());}),t.isSleeping=!0,this.notifySubscribers(s,"asleep"));},getVersion:function getVersion(){var e=this[T];return e.isSleeping&&(e.isStale||this.haveDependenciesChanged())&&this.evaluateImmediate(),v.subscribable.fn.getVersion.call(this);}},R={beforeSubscriptionAdd:function beforeSubscriptionAdd(e){"change"!=e&&"beforeChange"!=e||this.peek();}};v.utils.canSetPrototype&&v.utils.setPrototypeOf(S,v.subscribable.fn);var E=v.observable.protoProperty;v.computed[E]=v.observable,S[E]=v.computed,v.isComputed=function(e){return v.hasPrototype(e,v.computed);},v.isPureComputed=function(e){return v.hasPrototype(e,v.computed)&&e[T]&&e[T].pure;},v.exportSymbol("computed",v.computed),v.exportSymbol("dependentObservable",v.computed),v.exportSymbol("isComputed",v.isComputed),v.exportSymbol("isPureComputed",v.isPureComputed),v.exportSymbol("computed.fn",S),v.exportProperty(S,"peek",S.peek),v.exportProperty(S,"dispose",S.dispose),v.exportProperty(S,"isActive",S.isActive),v.exportProperty(S,"getDependenciesCount",S.getDependenciesCount),v.pureComputed=function(e,t){return"function"==typeof e?v.computed(e,t,{pure:!0}):(e=v.utils.extend({},e),e.pure=!0,v.computed(e,t));},v.exportSymbol("pureComputed",v.pureComputed),function(){function e(r,i,o){if(o=o||new n(),!!("object"!=_typeof(r=i(r))||null===r||r===s||r instanceof RegExp||r instanceof Date||r instanceof String||r instanceof Number||r instanceof Boolean))return r;var a=r instanceof Array?[]:{};return o.save(r,a),t(r,function(t){var n=i(r[t]);switch(typeof n==="undefined"?"undefined":_typeof(n)){case"boolean":case"number":case"string":case"function":a[t]=n;break;case"object":case"undefined":var u=o.get(n);a[t]=u!==s?u:e(n,i,o);}}),a;}function t(e,t){if(e instanceof Array){for(var n=0;n<e.length;n++){t(n);}"function"==typeof e.toJSON&&t("toJSON");}else for(var r in e){t(r);}}function n(){this.keys=[],this.values=[];}var r=10;v.toJS=function(t){if(0==arguments.length)throw new Error("When calling ko.toJS, pass the object you want to convert.");return e(t,function(e){for(var t=0;v.isObservable(e)&&t<r;t++){e=e();}return e;});},v.toJSON=function(e,t,n){var r=v.toJS(e);return v.utils.stringifyJson(r,t,n);},n.prototype={constructor:n,save:function save(e,t){var n=v.utils.arrayIndexOf(this.keys,e);n>=0?this.values[n]=t:(this.keys.push(e),this.values.push(t));},get:function get(e){var t=v.utils.arrayIndexOf(this.keys,e);return t>=0?this.values[t]:s;}};}(),v.exportSymbol("toJS",v.toJS),v.exportSymbol("toJSON",v.toJSON),function(){var e="__ko__hasDomDataOptionValue__";v.selectExtensions={readValue:function readValue(t){switch(v.utils.tagNameLower(t)){case"option":return!0===t[e]?v.utils.domData.get(t,v.bindingHandlers.options.optionValueDomDataKey):v.utils.ieVersion<=7?t.getAttributeNode("value")&&t.getAttributeNode("value").specified?t.value:t.text:t.value;case"select":return t.selectedIndex>=0?v.selectExtensions.readValue(t.options[t.selectedIndex]):s;default:return t.value;}},writeValue:function writeValue(t,n,r){switch(v.utils.tagNameLower(t)){case"option":switch(typeof n==="undefined"?"undefined":_typeof(n)){case"string":v.utils.domData.set(t,v.bindingHandlers.options.optionValueDomDataKey,s),e in t&&delete t[e],t.value=n;break;default:v.utils.domData.set(t,v.bindingHandlers.options.optionValueDomDataKey,n),t[e]=!0,t.value="number"==typeof n?n:"";}break;case"select":""!==n&&null!==n||(n=s);for(var i,o=-1,a=0,u=t.options.length;a<u;++a){if((i=v.selectExtensions.readValue(t.options[a]))==n||""==i&&n===s){o=a;break;}}(r||o>=0||n===s&&t.size>1)&&(t.selectedIndex=o);break;default:null!==n&&n!==s||(n=""),t.value=n;}}};}(),v.exportSymbol("selectExtensions",v.selectExtensions),v.exportSymbol("selectExtensions.readValue",v.selectExtensions.readValue),v.exportSymbol("selectExtensions.writeValue",v.selectExtensions.writeValue),v.expressionRewriting=function(){function e(e){if(v.utils.arrayIndexOf(r,e)>=0)return!1;var t=e.match(i);return null!==t&&(t[1]?"Object("+t[1]+")"+t[2]:e);}function t(e){var t=v.utils.stringTrim(e);123===t.charCodeAt(0)&&(t=t.slice(1,-1));var n,r=[],i=t.match(p),o=[],a=0;if(i){i.push(",");for(var s,u=0;s=i[u];++u){var l=s.charCodeAt(0);if(44===l){if(a<=0){r.push(n&&o.length?{key:n,value:o.join("")}:{unknown:n||o.join("")}),n=a=0,o=[];continue;}}else if(58===l){if(!a&&!n&&1===o.length){n=o.pop();continue;}}else if(47===l&&u&&s.length>1){var c=i[u-1].match(d);c&&!h[c[0]]&&(t=t.substr(t.indexOf(s)+1),i=t.match(p),i.push(","),u=-1,s="/");}else 40===l||123===l||91===l?++a:41===l||125===l||93===l?--a:n||o.length||34!==l&&39!==l||(s=s.slice(1,-1));o.push(s);}}return r;}function n(n,r){function i(t,n){function r(e){return!e||!e.preprocess||(n=e.preprocess(n,t,i));}var l;if(!u){if(!r(v.getBindingHandler(t)))return;f[t]&&(l=e(n))&&a.push("'"+t+"':function(_z){"+l+"=_z}");}s&&(n="function(){return "+n+" }"),o.push("'"+t+"':"+n);}r=r||{};var o=[],a=[],s=r.valueAccessors,u=r.bindingParams,l="string"==typeof n?t(n):n;return v.utils.arrayForEach(l,function(e){i(e.key||e.unknown,e.value);}),a.length&&i("_ko_property_writers","{"+a.join(",")+" }"),o.join(",");}var r=["true","false","null","undefined"],i=/^(?:[$_a-z][$\w]*|(.+)(\.\s*[$_a-z][$\w]*|\[.+\]))$/i,o='"(?:[^"\\\\]|\\\\.)*"',a="'(?:[^'\\\\]|\\\\.)*'",s="/(?:[^/\\\\]|\\\\.)*/w*",u=",\"'{}()/:[\\]",l="[^\\s:,/][^"+u+"]*[^\\s"+u+"]",c="[^\\s]",p=RegExp(o+"|"+a+"|"+s+"|"+l+"|"+c,"g"),d=/[\])"'A-Za-z0-9_$]+$/,h={in:1,return:1,typeof:1},f={};return{bindingRewriteValidators:[],twoWayBindings:f,parseObjectLiteral:t,preProcessBindings:n,keyValueArrayContainsKey:function keyValueArrayContainsKey(e,t){for(var n=0;n<e.length;n++){if(e[n].key==t)return!0;}return!1;},writeValueToProperty:function writeValueToProperty(e,t,n,r,i){if(e&&v.isObservable(e))!v.isWriteableObservable(e)||i&&e.peek()===r||e(r);else{var o=t.get("_ko_property_writers");o&&o[n]&&o[n](r);}}};}(),v.exportSymbol("expressionRewriting",v.expressionRewriting),v.exportSymbol("expressionRewriting.bindingRewriteValidators",v.expressionRewriting.bindingRewriteValidators),v.exportSymbol("expressionRewriting.parseObjectLiteral",v.expressionRewriting.parseObjectLiteral),v.exportSymbol("expressionRewriting.preProcessBindings",v.expressionRewriting.preProcessBindings),v.exportSymbol("expressionRewriting._twoWayBindings",v.expressionRewriting.twoWayBindings),v.exportSymbol("jsonExpressionRewriting",v.expressionRewriting),v.exportSymbol("jsonExpressionRewriting.insertPropertyAccessorsIntoJson",v.expressionRewriting.preProcessBindings),function(){function e(e){return 8==e.nodeType&&a.test(o?e.text:e.nodeValue);}function t(e){return 8==e.nodeType&&s.test(o?e.text:e.nodeValue);}function n(n,r){for(var i=n,o=1,a=[];i=i.nextSibling;){if(t(i)&&0===--o)return a;a.push(i),e(i)&&o++;}if(!r)throw new Error("Cannot find closing comment tag to match: "+n.nodeValue);return null;}function r(e,t){var r=n(e,t);return r?r.length>0?r[r.length-1].nextSibling:e.nextSibling:null;}function i(n){var i=n.firstChild,o=null;if(i)do{if(o)o.push(i);else if(e(i)){var a=r(i,!0);a?i=a:o=[i];}else t(i)&&(o=[i]);}while(i=i.nextSibling);return o;}var o=l&&"\x3c!--test--\x3e"===l.createComment("test").text,a=o?/^<!--\s*ko(?:\s+([\s\S]+))?\s*-->$/:/^\s*ko(?:\s+([\s\S]+))?\s*$/,s=o?/^<!--\s*\/ko\s*-->$/:/^\s*\/ko\s*$/,u={ul:!0,ol:!0};v.virtualElements={allowedBindings:{},childNodes:function childNodes(t){return e(t)?n(t):t.childNodes;},emptyNode:function emptyNode(t){if(e(t))for(var n=v.virtualElements.childNodes(t),r=0,i=n.length;r<i;r++){v.removeNode(n[r]);}else v.utils.emptyDomNode(t);},setDomNodeChildren:function setDomNodeChildren(t,n){if(e(t)){v.virtualElements.emptyNode(t);for(var r=t.nextSibling,i=0,o=n.length;i<o;i++){r.parentNode.insertBefore(n[i],r);}}else v.utils.setDomNodeChildren(t,n);},prepend:function prepend(t,n){e(t)?t.parentNode.insertBefore(n,t.nextSibling):t.firstChild?t.insertBefore(n,t.firstChild):t.appendChild(n);},insertAfter:function insertAfter(t,n,r){r?e(t)?t.parentNode.insertBefore(n,r.nextSibling):r.nextSibling?t.insertBefore(n,r.nextSibling):t.appendChild(n):v.virtualElements.prepend(t,n);},firstChild:function firstChild(n){return e(n)?!n.nextSibling||t(n.nextSibling)?null:n.nextSibling:n.firstChild;},nextSibling:function nextSibling(n){return e(n)&&(n=r(n)),n.nextSibling&&t(n.nextSibling)?null:n.nextSibling;},hasBindingValue:e,virtualNodeBindingValue:function virtualNodeBindingValue(e){var t=(o?e.text:e.nodeValue).match(a);return t?t[1]:null;},normaliseVirtualElementDomStructure:function normaliseVirtualElementDomStructure(e){if(u[v.utils.tagNameLower(e)]){var t=e.firstChild;if(t)do{if(1===t.nodeType){var n=i(t);if(n)for(var r=t.nextSibling,o=0;o<n.length;o++){r?e.insertBefore(n[o],r):e.appendChild(n[o]);}}}while(t=t.nextSibling);}}};}(),v.exportSymbol("virtualElements",v.virtualElements),v.exportSymbol("virtualElements.allowedBindings",v.virtualElements.allowedBindings),v.exportSymbol("virtualElements.emptyNode",v.virtualElements.emptyNode),v.exportSymbol("virtualElements.insertAfter",v.virtualElements.insertAfter),v.exportSymbol("virtualElements.prepend",v.virtualElements.prepend),v.exportSymbol("virtualElements.setDomNodeChildren",v.virtualElements.setDomNodeChildren),function(){function e(e,n,r){var i=e+(r&&r.valueAccessors||"");return n[i]||(n[i]=t(e,r));}function t(e,t){var n=v.expressionRewriting.preProcessBindings(e,t),r="with($context){with($data||{}){return{"+n+"}}}";return new Function("$context","$element",r);}var n="data-bind";v.bindingProvider=function(){this.bindingCache={};},v.utils.extend(v.bindingProvider.prototype,{nodeHasBindings:function nodeHasBindings(e){switch(e.nodeType){case 1:return null!=e.getAttribute(n)||v.components.getComponentNameForNode(e);case 8:return v.virtualElements.hasBindingValue(e);default:return!1;}},getBindings:function getBindings(e,t){var n=this.getBindingsString(e,t),r=n?this.parseBindingsString(n,t,e):null;return v.components.addBindingsForCustomElement(r,e,t,!1);},getBindingAccessors:function getBindingAccessors(e,t){var n=this.getBindingsString(e,t),r=n?this.parseBindingsString(n,t,e,{valueAccessors:!0}):null;return v.components.addBindingsForCustomElement(r,e,t,!0);},getBindingsString:function getBindingsString(e,t){switch(e.nodeType){case 1:return e.getAttribute(n);case 8:return v.virtualElements.virtualNodeBindingValue(e);default:return null;}},parseBindingsString:function parseBindingsString(t,n,r,i){try{return e(t,this.bindingCache,i)(n,r);}catch(e){throw e.message="Unable to parse bindings.\nBindings value: "+t+"\nMessage: "+e.message,e;}}}),v.bindingProvider.instance=new v.bindingProvider();}(),v.exportSymbol("bindingProvider",v.bindingProvider),function(){function e(e){return function(){return e;};}function t(e){return e();}function n(e){return v.utils.objectMap(v.dependencyDetection.ignore(e),function(t,n){return function(){return e()[n];};});}function r(t,r,i){return"function"==typeof t?n(t.bind(null,r,i)):v.utils.objectMap(t,e);}function i(e,t){return n(this.getBindings.bind(this,e,t));}function o(e){if(!v.virtualElements.allowedBindings[e])throw new Error("The binding '"+e+"' cannot be used with virtual elements");}function a(e,t,n){var r,i=v.virtualElements.firstChild(t),o=v.bindingProvider.instance,a=o.preprocessNode;if(a){for(;r=i;){i=v.virtualElements.nextSibling(r),a.call(o,r);}i=v.virtualElements.firstChild(t);}for(;r=i;){i=v.virtualElements.nextSibling(r),l(e,r,n);}}function l(e,t,n){var r=!0,i=1===t.nodeType;i&&v.virtualElements.normaliseVirtualElementDomStructure(t),(i&&n||v.bindingProvider.instance.nodeHasBindings(t))&&(r=d(t,null,e,n).shouldBindDescendants),r&&!f[v.utils.tagNameLower(t)]&&a(e,t,!i);}function c(e){var t=[],n={},r=[];return v.utils.objectForEach(e,function i(o){if(!n[o]){var a=v.getBindingHandler(o);a&&(a.after&&(r.push(o),v.utils.arrayForEach(a.after,function(t){if(e[t]){if(-1!==v.utils.arrayIndexOf(r,t))throw Error("Cannot combine the following bindings, because they have a cyclic dependency: "+r.join(", "));i(t);}}),r.length--),t.push({key:o,handler:a})),n[o]=!0;}}),t;}function d(e,n,r,a){function u(){return v.utils.objectMap(f?f():p,t);}var l=v.utils.domData.get(e,m);if(!n){if(l)throw Error("You cannot apply bindings multiple times to the same element.");v.utils.domData.set(e,m,!0);}!l&&a&&v.storedBindingContextForNode(e,r);var p;if(n&&"function"!=typeof n)p=n;else{var d=v.bindingProvider.instance,h=d.getBindingAccessors||i,f=v.dependentObservable(function(){return p=n?n(r,e):h.call(d,e,r),p&&r._subscribable&&r._subscribable(),p;},null,{disposeWhenNodeIsRemoved:e});p&&f.isActive()||(f=null);}var g;if(p){var y=f?function(e){return function(){return t(f()[e]);};}:function(e){return p[e];};u.get=function(e){return p[e]&&t(y(e));},u.has=function(e){return e in p;};var b=c(p);v.utils.arrayForEach(b,function(t){var n=t.handler.init,i=t.handler.update,a=t.key;8===e.nodeType&&o(a);try{"function"==typeof n&&v.dependencyDetection.ignore(function(){var t=n(e,y(a),u,r.$data,r);if(t&&t.controlsDescendantBindings){if(g!==s)throw new Error("Multiple bindings ("+g+" and "+a+") are trying to control descendant bindings of the same element. You cannot use these bindings together on the same element.");g=a;}}),"function"==typeof i&&v.dependentObservable(function(){i(e,y(a),u,r.$data,r);},null,{disposeWhenNodeIsRemoved:e});}catch(e){throw e.message='Unable to process binding "'+a+": "+p[a]+'"\nMessage: '+e.message,e;}});}return{shouldBindDescendants:g===s};}function h(e){return e&&e instanceof v.bindingContext?e:new v.bindingContext(e);}v.bindingHandlers={};var f={script:!0,textarea:!0,template:!0};v.getBindingHandler=function(e){return v.bindingHandlers[e];},v.bindingContext=function(e,t,n,r){function i(){var i=l?e():e,o=v.utils.unwrapObservable(i);return t?(t._subscribable&&t._subscribable(),v.utils.extend(u,t),c&&(u._subscribable=c)):(u.$parents=[],u.$root=o,u.ko=v),u.$rawData=i,u.$data=o,n&&(u[n]=o),r&&r(u,t,o),u.$data;}function o(){return a&&!v.utils.anyDomNodeIsAttachedToDocument(a);}var a,u=this,l="function"==typeof e&&!v.isObservable(e),c=v.dependentObservable(i,null,{disposeWhen:o,disposeWhenNodeIsRemoved:!0});c.isActive()&&(u._subscribable=c,c.equalityComparer=null,a=[],c._addNode=function(e){a.push(e),v.utils.domNodeDisposal.addDisposeCallback(e,function(e){v.utils.arrayRemoveItem(a,e),a.length||(c.dispose(),u._subscribable=c=s);});});},v.bindingContext.prototype.createChildContext=function(e,t,n){return new v.bindingContext(e,this,t,function(e,t){e.$parentContext=t,e.$parent=t.$data,e.$parents=(t.$parents||[]).slice(0),e.$parents.unshift(e.$parent),n&&n(e);});},v.bindingContext.prototype.extend=function(e){return new v.bindingContext(this._subscribable||this.$data,this,null,function(t,n){t.$rawData=n.$rawData,v.utils.extend(t,"function"==typeof e?e():e);});};var m=v.utils.domData.nextKey(),g=v.utils.domData.nextKey();v.storedBindingContextForNode=function(e,t){if(2!=arguments.length)return v.utils.domData.get(e,g);v.utils.domData.set(e,g,t),t._subscribable&&t._subscribable._addNode(e);},v.applyBindingAccessorsToNode=function(e,t,n){return 1===e.nodeType&&v.virtualElements.normaliseVirtualElementDomStructure(e),d(e,t,h(n),!0);},v.applyBindingsToNode=function(e,t,n){var i=h(n);return v.applyBindingAccessorsToNode(e,r(t,i,e),i);},v.applyBindingsToDescendants=function(e,t){1!==t.nodeType&&8!==t.nodeType||a(h(e),t,!0);},v.applyBindings=function(e,t){if(!p&&u.jQuery&&(p=u.jQuery),t&&1!==t.nodeType&&8!==t.nodeType)throw new Error("ko.applyBindings: first parameter should be your view model; second parameter should be a DOM node");t=t||u.document.body,l(h(e),t,!0);},v.contextFor=function(e){switch(e.nodeType){case 1:case 8:var t=v.storedBindingContextForNode(e);if(t)return t;if(e.parentNode)return v.contextFor(e.parentNode);}return s;},v.dataFor=function(e){var t=v.contextFor(e);return t?t.$data:s;},v.exportSymbol("bindingHandlers",v.bindingHandlers),v.exportSymbol("applyBindings",v.applyBindings),v.exportSymbol("applyBindingsToDescendants",v.applyBindingsToDescendants),v.exportSymbol("applyBindingAccessorsToNode",v.applyBindingAccessorsToNode),v.exportSymbol("applyBindingsToNode",v.applyBindingsToNode),v.exportSymbol("contextFor",v.contextFor),v.exportSymbol("dataFor",v.dataFor);}(),function(e){function t(t,n){return t.hasOwnProperty(n)?t[n]:e;}function n(e,n){var i,s=t(o,e);s?s.subscribe(n):(s=o[e]=new v.subscribable(),s.subscribe(n),r(e,function(t,n){var r=!(!n||!n.synchronous);a[e]={definition:t,isSynchronousComponent:r},delete o[e],i||r?s.notifySubscribers(t):v.tasks.schedule(function(){s.notifySubscribers(t);});}),i=!0);}function r(e,t){i("getConfig",[e],function(n){n?i("loadComponent",[e,n],function(e){t(e,n);}):t(null,null);});}function i(t,n,r,o){o||(o=v.components.loaders.slice(0));var a=o.shift();if(a){var s=a[t];if(s){var u=!1;if(s.apply(a,n.concat(function(e){u?r(null):null!==e?r(e):i(t,n,r,o);}))!==e&&(u=!0,!a.suppressLoaderExceptions))throw new Error("Component loaders must supply values by invoking the callback, not by returning values synchronously.");}else i(t,n,r,o);}else r(null);}var o={},a={};v.components={get:function get(e,r){var i=t(a,e);i?i.isSynchronousComponent?v.dependencyDetection.ignore(function(){r(i.definition);}):v.tasks.schedule(function(){r(i.definition);}):n(e,r);},clearCachedDefinition:function clearCachedDefinition(e){delete a[e];},_getFirstResultFromLoaders:i},v.components.loaders=[],v.exportSymbol("components",v.components),v.exportSymbol("components.get",v.components.get),v.exportSymbol("components.clearCachedDefinition",v.components.clearCachedDefinition);}(),function(e){function n(e,t,n,r){var i={},o=2,a=function a(){0==--o&&r(i);},s=n.template,u=n.viewModel;s?c(t,s,function(t){v.components._getFirstResultFromLoaders("loadTemplate",[e,t],function(e){i.template=e,a();});}):a(),u?c(t,u,function(t){v.components._getFirstResultFromLoaders("loadViewModel",[e,t],function(e){i[h]=e,a();});}):a();}function r(e,t,n){if("string"==typeof t)n(v.utils.parseHtmlFragment(t));else if(t instanceof Array)n(t);else if(s(t))n(v.utils.makeArray(t.childNodes));else if(t.element){var r=t.element;if(a(r))n(o(r));else if("string"==typeof r){var i=l.getElementById(r);i?n(o(i)):e("Cannot find element with ID "+r);}else e("Unknown element type: "+r);}else e("Unknown template value: "+t);}function i(e,t,n){if("function"==typeof t)n(function(e){return new t(e);});else if("function"==typeof t[h])n(t[h]);else if("instance"in t){var r=t.instance;n(function(e,t){return r;});}else"viewModel"in t?i(e,t.viewModel,n):e("Unknown viewModel value: "+t);}function o(e){switch(v.utils.tagNameLower(e)){case"script":return v.utils.parseHtmlFragment(e.text);case"textarea":return v.utils.parseHtmlFragment(e.value);case"template":if(s(e.content))return v.utils.cloneNodes(e.content.childNodes);}return v.utils.cloneNodes(e.childNodes);}function a(e){return u.HTMLElement?e instanceof HTMLElement:e&&e.tagName&&1===e.nodeType;}function s(e){return u.DocumentFragment?e instanceof DocumentFragment:e&&11===e.nodeType;}function c(e,n,r){"string"==typeof n.require?t||u.require?(t||u.require)([n.require],r):e("Uses require, but no AMD loader is present"):r(n);}function p(e){return function(t){throw new Error("Component '"+e+"': "+t);};}var d={};v.components.register=function(e,t){if(!t)throw new Error("Invalid configuration for "+e);if(v.components.isRegistered(e))throw new Error("Component "+e+" is already registered");d[e]=t;},v.components.isRegistered=function(e){return d.hasOwnProperty(e);},v.components.unregister=function(e){delete d[e],v.components.clearCachedDefinition(e);},v.components.defaultLoader={getConfig:function getConfig(e,t){t(d.hasOwnProperty(e)?d[e]:null);},loadComponent:function loadComponent(e,t,r){var i=p(e);c(i,t,function(t){n(e,i,t,r);});},loadTemplate:function loadTemplate(e,t,n){r(p(e),t,n);},loadViewModel:function loadViewModel(e,t,n){i(p(e),t,n);}};var h="createViewModel";v.exportSymbol("components.register",v.components.register),v.exportSymbol("components.isRegistered",v.components.isRegistered),v.exportSymbol("components.unregister",v.components.unregister),v.exportSymbol("components.defaultLoader",v.components.defaultLoader),v.components.loaders.push(v.components.defaultLoader),v.components._allRegisteredComponents=d;}(),function(e){function t(e,t){var r=e.getAttribute("params");if(r){var i=n.parseBindingsString(r,t,e,{valueAccessors:!0,bindingParams:!0}),o=v.utils.objectMap(i,function(t,n){return v.computed(t,null,{disposeWhenNodeIsRemoved:e});}),a=v.utils.objectMap(o,function(t,n){var r=t.peek();return t.isActive()?v.computed({read:function read(){return v.utils.unwrapObservable(t());},write:v.isWriteableObservable(r)&&function(e){t()(e);},disposeWhenNodeIsRemoved:e}):r;});return a.hasOwnProperty("$raw")||(a.$raw=o),a;}return{$raw:{}};}v.components.getComponentNameForNode=function(e){var t=v.utils.tagNameLower(e);if(v.components.isRegistered(t)&&(-1!=t.indexOf("-")||""+e=="[object HTMLUnknownElement]"||v.utils.ieVersion<=8&&e.tagName===t))return t;},v.components.addBindingsForCustomElement=function(e,n,r,i){if(1===n.nodeType){var o=v.components.getComponentNameForNode(n);if(o){if(e=e||{},e.component)throw new Error('Cannot use the "component" binding on a custom element matching a component');var a={name:o,params:t(n,r)};e.component=i?function(){return a;}:a;}}return e;};var n=new v.bindingProvider();v.utils.ieVersion<9&&(v.components.register=function(e){return function(t){return l.createElement(t),e.apply(this,arguments);};}(v.components.register),l.createDocumentFragment=function(e){return function(){var t=e(),n=v.components._allRegisteredComponents;for(var r in n){n.hasOwnProperty(r)&&t.createElement(r);}return t;};}(l.createDocumentFragment));}(),function(e){function t(e,t,n){var r=t.template;if(!r)throw new Error("Component '"+e+"' has no template");var i=v.utils.cloneNodes(r);v.virtualElements.setDomNodeChildren(n,i);}function n(e,t,n,r){var i=e.createViewModel;return i?i.call(e,r,{element:t,templateNodes:n}):r;}var r=0;v.bindingHandlers.component={init:function init(i,o,a,s,u){var l,c,p=function p(){var e=l&&l.dispose;"function"==typeof e&&e.call(l),l=null,c=null;},d=v.utils.makeArray(v.virtualElements.childNodes(i));return v.utils.domNodeDisposal.addDisposeCallback(i,p),v.computed(function(){var a,s,h=v.utils.unwrapObservable(o());if("string"==typeof h?a=h:(a=v.utils.unwrapObservable(h.name),s=v.utils.unwrapObservable(h.params)),!a)throw new Error("No component name specified");var f=c=++r;v.components.get(a,function(r){if(c===f){if(p(),!r)throw new Error("Unknown component '"+a+"'");t(a,r,i);var o=n(r,i,d,s),h=u.createChildContext(o,e,function(e){e.$component=o,e.$componentTemplateNodes=d;});l=o,v.applyBindingsToDescendants(h,i);}});},null,{disposeWhenNodeIsRemoved:i}),{controlsDescendantBindings:!0};}},v.virtualElements.allowedBindings.component=!0;}();var q={class:"className",for:"htmlFor"};v.bindingHandlers.attr={update:function update(e,t,n){var r=v.utils.unwrapObservable(t())||{};v.utils.objectForEach(r,function(t,n){n=v.utils.unwrapObservable(n);var r=!1===n||null===n||n===s;r&&e.removeAttribute(t),v.utils.ieVersion<=8&&t in q?(t=q[t],r?e.removeAttribute(t):e[t]=n):r||e.setAttribute(t,n.toString()),"name"===t&&v.utils.setElementName(e,r?"":n.toString());});}},function(){v.bindingHandlers.checked={after:["value","attr"],init:function init(e,t,n){function r(){var r=e.checked,i=h?o():r;if(!v.computedContext.isInitial()&&(!u||r)){var a=v.dependencyDetection.ignore(t);if(c){var s=p?a.peek():a;d!==i?(r&&(v.utils.addOrRemoveItem(s,i,!0),v.utils.addOrRemoveItem(s,d,!1)),d=i):v.utils.addOrRemoveItem(s,i,r),p&&v.isWriteableObservable(a)&&a(s);}else v.expressionRewriting.writeValueToProperty(a,n,"checked",i,!0);}}function i(){var n=v.utils.unwrapObservable(t());e.checked=c?v.utils.arrayIndexOf(n,o())>=0:a?n:o()===n;}var o=v.pureComputed(function(){return n.has("checkedValue")?v.utils.unwrapObservable(n.get("checkedValue")):n.has("value")?v.utils.unwrapObservable(n.get("value")):e.value;}),a="checkbox"==e.type,u="radio"==e.type;if(a||u){var l=t(),c=a&&v.utils.unwrapObservable(l)instanceof Array,p=!(c&&l.push&&l.splice),d=c?o():s,h=u||c;u&&!e.name&&v.bindingHandlers.uniqueName.init(e,function(){return!0;}),v.computed(r,null,{disposeWhenNodeIsRemoved:e}),v.utils.registerEventHandler(e,"click",r),v.computed(i,null,{disposeWhenNodeIsRemoved:e}),l=s;}}},v.expressionRewriting.twoWayBindings.checked=!0,v.bindingHandlers.checkedValue={update:function update(e,t){e.value=v.utils.unwrapObservable(t());}};}();var _="__ko__cssValue";v.bindingHandlers.css={update:function update(e,t){var n=v.utils.unwrapObservable(t());null!==n&&"object"==(typeof n==="undefined"?"undefined":_typeof(n))?v.utils.objectForEach(n,function(t,n){n=v.utils.unwrapObservable(n),v.utils.toggleDomNodeCssClass(e,t,n);}):(n=v.utils.stringTrim(String(n||"")),v.utils.toggleDomNodeCssClass(e,e[_],!1),e[_]=n,v.utils.toggleDomNodeCssClass(e,n,!0));}},v.bindingHandlers.enable={update:function update(e,t){var n=v.utils.unwrapObservable(t());n&&e.disabled?e.removeAttribute("disabled"):n||e.disabled||(e.disabled=!0);}},v.bindingHandlers.disable={update:function update(e,t){v.bindingHandlers.enable.update(e,function(){return!v.utils.unwrapObservable(t());});}},v.bindingHandlers.event={init:function init(e,t,n,r,i){var o=t()||{};v.utils.objectForEach(o,function(o){"string"==typeof o&&v.utils.registerEventHandler(e,o,function(e){var a,s=t()[o];if(s){try{var u=v.utils.makeArray(arguments);r=i.$data,u.unshift(r),a=s.apply(r,u);}finally{!0!==a&&(e.preventDefault?e.preventDefault():e.returnValue=!1);}!1!==n.get(o+"Bubble")||(e.cancelBubble=!0,e.stopPropagation&&e.stopPropagation());}});});}},v.bindingHandlers.foreach={makeTemplateValueAccessor:function makeTemplateValueAccessor(e){return function(){var t=e(),n=v.utils.peekObservable(t);return n&&"number"!=typeof n.length?(v.utils.unwrapObservable(t),{foreach:n.data,as:n.as,includeDestroyed:n.includeDestroyed,afterAdd:n.afterAdd,beforeRemove:n.beforeRemove,afterRender:n.afterRender,beforeMove:n.beforeMove,afterMove:n.afterMove,templateEngine:v.nativeTemplateEngine.instance}):{foreach:t,templateEngine:v.nativeTemplateEngine.instance};};},init:function init(e,t,n,r,i){return v.bindingHandlers.template.init(e,v.bindingHandlers.foreach.makeTemplateValueAccessor(t));},update:function update(e,t,n,r,i){return v.bindingHandlers.template.update(e,v.bindingHandlers.foreach.makeTemplateValueAccessor(t),n,r,i);}},v.expressionRewriting.bindingRewriteValidators.foreach=!1,v.virtualElements.allowedBindings.foreach=!0;var I="__ko_hasfocusUpdating",N="__ko_hasfocusLastValue";v.bindingHandlers.hasfocus={init:function init(e,t,n){var r=function r(_r){e[I]=!0;var i=e.ownerDocument;if("activeElement"in i){var o;try{o=i.activeElement;}catch(e){o=i.body;}_r=o===e;}var a=t();v.expressionRewriting.writeValueToProperty(a,n,"hasfocus",_r,!0),e[N]=_r,e[I]=!1;},i=r.bind(null,!0),o=r.bind(null,!1);v.utils.registerEventHandler(e,"focus",i),v.utils.registerEventHandler(e,"focusin",i),v.utils.registerEventHandler(e,"blur",o),v.utils.registerEventHandler(e,"focusout",o);},update:function update(e,t){var n=!!v.utils.unwrapObservable(t());e[I]||e[N]===n||(n?e.focus():e.blur(),!n&&e[N]&&e.ownerDocument.body.focus(),v.dependencyDetection.ignore(v.utils.triggerEvent,null,[e,n?"focusin":"focusout"]));}},v.expressionRewriting.twoWayBindings.hasfocus=!0,v.bindingHandlers.hasFocus=v.bindingHandlers.hasfocus,v.expressionRewriting.twoWayBindings.hasFocus=!0,v.bindingHandlers.html={init:function init(){return{controlsDescendantBindings:!0};},update:function update(e,t){v.utils.setHtml(e,t());}},y("if"),y("ifnot",!1,!0),y("with",!0,!1,function(e,t){return e.createChildContext(t);});var D={};v.bindingHandlers.options={init:function init(e){if("select"!==v.utils.tagNameLower(e))throw new Error("options binding applies only to SELECT elements");for(;e.length>0;){e.remove(0);}return{controlsDescendantBindings:!0};},update:function update(e,t,n){function r(){return v.utils.arrayFilter(e.options,function(e){return e.selected;});}function i(e,t,n){var r=typeof t==="undefined"?"undefined":_typeof(t);return"function"==r?t(e):"string"==r?e[t]:n;}function o(t,r,o){o.length&&(y=!f&&o[0].selected?[v.selectExtensions.readValue(o[0])]:[],b=!0);var a=e.ownerDocument.createElement("option");if(t===D)v.utils.setTextContent(a,n.get("optionsCaption")),v.selectExtensions.writeValue(a,s);else{var u=i(t,n.get("optionsValue"),t);v.selectExtensions.writeValue(a,v.utils.unwrapObservable(u));var l=i(t,n.get("optionsText"),u);v.utils.setTextContent(a,l);}return[a];}function a(t,r){if(b&&f)v.selectExtensions.writeValue(e,v.utils.unwrapObservable(n.get("value")),!0);else if(y.length){var i=v.utils.arrayIndexOf(y,v.selectExtensions.readValue(r[0]))>=0;v.utils.setOptionNodeSelectionState(r[0],i),b&&!i&&v.dependencyDetection.ignore(v.utils.triggerEvent,null,[e,"change"]);}}var u,l,c=0==e.length,p=e.multiple,d=!c&&p?e.scrollTop:null,h=v.utils.unwrapObservable(t()),f=n.get("valueAllowUnset")&&n.has("value"),m=n.get("optionsIncludeDestroyed"),g={},y=[];f||(p?y=v.utils.arrayMap(r(),v.selectExtensions.readValue):e.selectedIndex>=0&&y.push(v.selectExtensions.readValue(e.options[e.selectedIndex]))),h&&(void 0===h.length&&(h=[h]),l=v.utils.arrayFilter(h,function(e){return m||e===s||null===e||!v.utils.unwrapObservable(e._destroy);}),n.has("optionsCaption")&&null!==(u=v.utils.unwrapObservable(n.get("optionsCaption")))&&u!==s&&l.unshift(D));var b=!1;g.beforeRemove=function(t){e.removeChild(t);};var x=a;n.has("optionsAfterRender")&&"function"==typeof n.get("optionsAfterRender")&&(x=function x(e,t){a(e,t),v.dependencyDetection.ignore(n.get("optionsAfterRender"),null,[t[0],e!==D?e:s]);}),v.utils.setDomNodeChildrenFromArrayMapping(e,l,o,g,x),v.dependencyDetection.ignore(function(){if(f)v.selectExtensions.writeValue(e,v.utils.unwrapObservable(n.get("value")),!0);else{var t;t=p?y.length&&r().length<y.length:y.length&&e.selectedIndex>=0?v.selectExtensions.readValue(e.options[e.selectedIndex])!==y[0]:y.length||e.selectedIndex>=0,t&&v.utils.triggerEvent(e,"change");}}),v.utils.ensureSelectElementIsRenderedCorrectly(e),d&&Math.abs(d-e.scrollTop)>20&&(e.scrollTop=d);}},v.bindingHandlers.options.optionValueDomDataKey=v.utils.domData.nextKey(),v.bindingHandlers.selectedOptions={after:["options","foreach"],init:function init(e,t,n){v.utils.registerEventHandler(e,"change",function(){var r=t(),i=[];v.utils.arrayForEach(e.getElementsByTagName("option"),function(e){e.selected&&i.push(v.selectExtensions.readValue(e));}),v.expressionRewriting.writeValueToProperty(r,n,"selectedOptions",i);});},update:function update(e,t){if("select"!=v.utils.tagNameLower(e))throw new Error("values binding applies only to SELECT elements");var n=v.utils.unwrapObservable(t()),r=e.scrollTop;n&&"number"==typeof n.length&&v.utils.arrayForEach(e.getElementsByTagName("option"),function(e){var t=v.utils.arrayIndexOf(n,v.selectExtensions.readValue(e))>=0;e.selected!=t&&v.utils.setOptionNodeSelectionState(e,t);}),e.scrollTop=r;}},v.expressionRewriting.twoWayBindings.selectedOptions=!0,v.bindingHandlers.style={update:function update(e,t){var n=v.utils.unwrapObservable(t()||{});v.utils.objectForEach(n,function(t,n){n=v.utils.unwrapObservable(n),null!==n&&n!==s&&!1!==n||(n=""),e.style[t]=n;});}},v.bindingHandlers.submit={init:function init(e,t,n,r,i){if("function"!=typeof t())throw new Error("The value for a submit binding must be a function");v.utils.registerEventHandler(e,"submit",function(n){var r,o=t();try{r=o.call(i.$data,e);}finally{!0!==r&&(n.preventDefault?n.preventDefault():n.returnValue=!1);}});}},v.bindingHandlers.text={init:function init(){return{controlsDescendantBindings:!0};},update:function update(e,t){v.utils.setTextContent(e,t());}},v.virtualElements.allowedBindings.text=!0,function(){if(u&&u.navigator)var e=function e(_e){if(_e)return parseFloat(_e[1]);},t=u.opera&&u.opera.version&&parseInt(u.opera.version()),n=u.navigator.userAgent,r=e(n.match(/^(?:(?!chrome).)*version\/([^ ]*) safari/i)),i=e(n.match(/Firefox\/([^ ]*)/));if(v.utils.ieVersion<10)var o=v.utils.domData.nextKey(),l=v.utils.domData.nextKey(),c=function c(e){var t=this.activeElement,n=t&&v.utils.domData.get(t,l);n&&n(e);},p=function p(e,t){var n=e.ownerDocument;v.utils.domData.get(n,o)||(v.utils.domData.set(n,o,!0),v.utils.registerEventHandler(n,"selectionchange",c)),v.utils.domData.set(e,l,t);};v.bindingHandlers.textInput={init:function init(e,n,o){var u,l,c=e.value,d=function d(t){clearTimeout(u),l=u=s;var r=e.value;c!==r&&(a&&t&&(e._ko_textInputProcessedEvent=t.type),c=r,v.expressionRewriting.writeValueToProperty(n(),o,"textInput",r));},h=function h(t){if(!u){l=e.value;var n=a?d.bind(e,{type:t.type}):d;u=v.utils.setTimeout(n,4);}},f=9==v.utils.ieVersion?h:d,m=function m(){var t=v.utils.unwrapObservable(n());if(null!==t&&t!==s||(t=""),l!==s&&t===l)return void v.utils.setTimeout(m,4);e.value!==t&&(c=t,e.value=t);},g=function g(t,n){v.utils.registerEventHandler(e,t,n);};a&&v.bindingHandlers.textInput._forceUpdateOn?v.utils.arrayForEach(v.bindingHandlers.textInput._forceUpdateOn,function(e){"after"==e.slice(0,5)?g(e.slice(5),h):g(e,d);}):v.utils.ieVersion<10?(g("propertychange",function(e){"value"===e.propertyName&&f(e);}),8==v.utils.ieVersion&&(g("keyup",d),g("keydown",d)),v.utils.ieVersion>=8&&(p(e,f),g("dragend",h))):(g("input",d),r<5&&"textarea"===v.utils.tagNameLower(e)?(g("keydown",h),g("paste",h),g("cut",h)):t<11?g("keydown",h):i<4&&(g("DOMAutoComplete",d),g("dragdrop",d),g("drop",d))),g("change",d),v.computed(m,null,{disposeWhenNodeIsRemoved:e});}},v.expressionRewriting.twoWayBindings.textInput=!0,v.bindingHandlers.textinput={preprocess:function preprocess(e,t,n){n("textInput",e);}};}(),v.bindingHandlers.uniqueName={init:function init(e,t){if(t()){var n="ko_unique_"+ ++v.bindingHandlers.uniqueName.currentIndex;v.utils.setElementName(e,n);}}},v.bindingHandlers.uniqueName.currentIndex=0,v.bindingHandlers.value={after:["options","foreach"],init:function init(e,t,n){if("input"==e.tagName.toLowerCase()&&("checkbox"==e.type||"radio"==e.type))return void v.applyBindingAccessorsToNode(e,{checkedValue:t});var r=["change"],i=n.get("valueUpdate"),o=!1,a=null;i&&("string"==typeof i&&(i=[i]),v.utils.arrayPushAll(r,i),r=v.utils.arrayGetDistinctValues(r));var s=function s(){a=null,o=!1;var r=t(),i=v.selectExtensions.readValue(e);v.expressionRewriting.writeValueToProperty(r,n,"value",i);};v.utils.ieVersion&&"input"==e.tagName.toLowerCase()&&"text"==e.type&&"off"!=e.autocomplete&&(!e.form||"off"!=e.form.autocomplete)&&-1==v.utils.arrayIndexOf(r,"propertychange")&&(v.utils.registerEventHandler(e,"propertychange",function(){o=!0;}),v.utils.registerEventHandler(e,"focus",function(){o=!1;}),v.utils.registerEventHandler(e,"blur",function(){o&&s();})),v.utils.arrayForEach(r,function(t){var n=s;v.utils.stringStartsWith(t,"after")&&(n=function n(){a=v.selectExtensions.readValue(e),v.utils.setTimeout(s,0);},t=t.substring("after".length)),v.utils.registerEventHandler(e,t,n);});var u=function u(){var r=v.utils.unwrapObservable(t()),i=v.selectExtensions.readValue(e);if(null!==a&&r===a)return void v.utils.setTimeout(u,0);if(r!==i)if("select"===v.utils.tagNameLower(e)){var o=n.get("valueAllowUnset"),s=function s(){v.selectExtensions.writeValue(e,r,o);};s(),o||r===v.selectExtensions.readValue(e)?v.utils.setTimeout(s,0):v.dependencyDetection.ignore(v.utils.triggerEvent,null,[e,"change"]);}else v.selectExtensions.writeValue(e,r);};v.computed(u,null,{disposeWhenNodeIsRemoved:e});},update:function update(){}},v.expressionRewriting.twoWayBindings.value=!0,v.bindingHandlers.visible={update:function update(e,t){var n=v.utils.unwrapObservable(t()),r=!("none"==e.style.display);n&&!r?e.style.display="":!n&&r&&(e.style.display="none");}},g("click"),v.templateEngine=function(){},v.templateEngine.prototype.renderTemplateSource=function(e,t,n,r){throw new Error("Override renderTemplateSource");},v.templateEngine.prototype.createJavaScriptEvaluatorBlock=function(e){throw new Error("Override createJavaScriptEvaluatorBlock");},v.templateEngine.prototype.makeTemplateSource=function(e,t){if("string"==typeof e){t=t||l;var n=t.getElementById(e);if(!n)throw new Error("Cannot find template with ID "+e);return new v.templateSources.domElement(n);}if(1==e.nodeType||8==e.nodeType)return new v.templateSources.anonymousTemplate(e);throw new Error("Unknown template type: "+e);},v.templateEngine.prototype.renderTemplate=function(e,t,n,r){var i=this.makeTemplateSource(e,r);return this.renderTemplateSource(i,t,n,r);},v.templateEngine.prototype.isTemplateRewritten=function(e,t){return!1===this.allowTemplateRewriting||this.makeTemplateSource(e,t).data("isRewritten");},v.templateEngine.prototype.rewriteTemplate=function(e,t,n){var r=this.makeTemplateSource(e,n),i=t(r.text());r.text(i),r.data("isRewritten",!0);},v.exportSymbol("templateEngine",v.templateEngine),v.templateRewriting=function(){function e(e){for(var t=v.expressionRewriting.bindingRewriteValidators,n=0;n<e.length;n++){var r=e[n].key;if(t.hasOwnProperty(r)){var i=t[r];if("function"==typeof i){var o=i(e[n].value);if(o)throw new Error(o);}else if(!i)throw new Error("This template engine does not support the '"+r+"' binding within its templates");}}}function t(t,n,r,i){var o=v.expressionRewriting.parseObjectLiteral(t);e(o);var a=v.expressionRewriting.preProcessBindings(o,{valueAccessors:!0}),s="ko.__tr_ambtns(function($context,$element){return(function(){return{ "+a+" } })()},'"+r.toLowerCase()+"')";return i.createJavaScriptEvaluatorBlock(s)+n;}var n=/(<([a-z]+\d*)(?:\s+(?!data-bind\s*=\s*)[a-z0-9\-]+(?:=(?:\"[^\"]*\"|\'[^\']*\'|[^>]*))?)*\s+)data-bind\s*=\s*(["'])([\s\S]*?)\3/gi,r=/<!--\s*ko\b\s*([\s\S]*?)\s*-->/g;return{ensureTemplateIsRewritten:function ensureTemplateIsRewritten(e,t,n){t.isTemplateRewritten(e,n)||t.rewriteTemplate(e,function(e){return v.templateRewriting.memoizeBindingAttributeSyntax(e,t);},n);},memoizeBindingAttributeSyntax:function memoizeBindingAttributeSyntax(e,i){return e.replace(n,function(){return t(arguments[4],arguments[1],arguments[2],i);}).replace(r,function(){return t(arguments[1],"\x3c!-- ko --\x3e","#comment",i);});},applyMemoizedBindingsToNextSibling:function applyMemoizedBindingsToNextSibling(e,t){return v.memoization.memoize(function(n,r){var i=n.nextSibling;i&&i.nodeName.toLowerCase()===t&&v.applyBindingAccessorsToNode(i,e,r);});}};}(),v.exportSymbol("__tr_ambtns",v.templateRewriting.applyMemoizedBindingsToNextSibling),function(){function e(e){return v.utils.domData.get(e,u)||{};}function t(e,t){v.utils.domData.set(e,u,t);}v.templateSources={};var n=1,r=2,i=3,o=4;v.templateSources.domElement=function(e){if(this.domElement=e,e){var t=v.utils.tagNameLower(e);this.templateType="script"===t?n:"textarea"===t?r:"template"==t&&e.content&&11===e.content.nodeType?i:o;}},v.templateSources.domElement.prototype.text=function(){var e=this.templateType===n?"text":this.templateType===r?"value":"innerHTML";if(0==arguments.length)return this.domElement[e];var t=arguments[0];"innerHTML"===e?v.utils.setHtml(this.domElement,t):this.domElement[e]=t;};var a=v.utils.domData.nextKey()+"_";v.templateSources.domElement.prototype.data=function(e){if(1===arguments.length)return v.utils.domData.get(this.domElement,a+e);v.utils.domData.set(this.domElement,a+e,arguments[1]);};var u=v.utils.domData.nextKey();v.templateSources.domElement.prototype.nodes=function(){var n=this.domElement;if(0==arguments.length){return e(n).containerData||(this.templateType===i?n.content:this.templateType===o?n:s);}t(n,{containerData:arguments[0]});},v.templateSources.anonymousTemplate=function(e){this.domElement=e;},v.templateSources.anonymousTemplate.prototype=new v.templateSources.domElement(),v.templateSources.anonymousTemplate.prototype.constructor=v.templateSources.anonymousTemplate,v.templateSources.anonymousTemplate.prototype.text=function(){if(0==arguments.length){var n=e(this.domElement);return n.textData===s&&n.containerData&&(n.textData=n.containerData.innerHTML),n.textData;}var r=arguments[0];t(this.domElement,{textData:r});},v.exportSymbol("templateSources",v.templateSources),v.exportSymbol("templateSources.domElement",v.templateSources.domElement),v.exportSymbol("templateSources.anonymousTemplate",v.templateSources.anonymousTemplate);}(),function(){function e(e,t,n){for(var r,i=e,o=v.virtualElements.nextSibling(t);i&&(r=i)!==o;){i=v.virtualElements.nextSibling(r),n(r,i);}}function t(t,n){if(t.length){var r=t[0],i=t[t.length-1],o=r.parentNode,a=v.bindingProvider.instance,s=a.preprocessNode;if(s){if(e(r,i,function(e,t){var n=e.previousSibling,o=s.call(a,e);o&&(e===r&&(r=o[0]||t),e===i&&(i=o[o.length-1]||n));}),t.length=0,!r)return;r===i?t.push(r):(t.push(r,i),v.utils.fixUpContinuousNodeArray(t,o));}e(r,i,function(e){1!==e.nodeType&&8!==e.nodeType||v.applyBindings(n,e);}),e(r,i,function(e){1!==e.nodeType&&8!==e.nodeType||v.memoization.unmemoizeDomNodeAndDescendants(e,[n]);}),v.utils.fixUpContinuousNodeArray(t,o);}}function n(e){return e.nodeType?e:e.length>0?e[0]:null;}function r(e,r,i,o,s){s=s||{};var u=e&&n(e),l=(u||i||{}).ownerDocument,c=s.templateEngine||a;v.templateRewriting.ensureTemplateIsRewritten(i,c,l);var p=c.renderTemplate(i,o,s,l);if("number"!=typeof p.length||p.length>0&&"number"!=typeof p[0].nodeType)throw new Error("Template engine must return an array of DOM nodes");var d=!1;switch(r){case"replaceChildren":v.virtualElements.setDomNodeChildren(e,p),d=!0;break;case"replaceNode":v.utils.replaceDomNodes(e,p),d=!0;break;case"ignoreTargetNode":break;default:throw new Error("Unknown renderMode: "+r);}return d&&(t(p,o),s.afterRender&&v.dependencyDetection.ignore(s.afterRender,null,[p,o.$data])),p;}function i(e,t,n){return v.isObservable(e)?e():"function"==typeof e?e(t,n):e;}function o(e,t){var n=v.utils.domData.get(e,u);n&&"function"==typeof n.dispose&&n.dispose(),v.utils.domData.set(e,u,t&&t.isActive()?t:s);}var a;v.setTemplateEngine=function(e){if(e!=s&&!(e instanceof v.templateEngine))throw new Error("templateEngine must inherit from ko.templateEngine");a=e;},v.renderTemplate=function(e,t,o,u,l){if(o=o||{},(o.templateEngine||a)==s)throw new Error("Set a template engine before calling renderTemplate");if(l=l||"replaceChildren",u){var c=n(u),p=function p(){return!c||!v.utils.domNodeIsAttachedToDocument(c);},d=c&&"replaceNode"==l?c.parentNode:c;return v.dependentObservable(function(){var a=t&&t instanceof v.bindingContext?t:new v.bindingContext(v.utils.unwrapObservable(t)),s=i(e,a.$data,a),p=r(u,l,s,a,o);"replaceNode"==l&&(u=p,c=n(u));},null,{disposeWhen:p,disposeWhenNodeIsRemoved:d});}return v.memoization.memoize(function(n){v.renderTemplate(e,t,o,n,"replaceNode");});},v.renderTemplateForEach=function(e,n,o,a,u){var l,c=function c(t,n){return l=u.createChildContext(t,o.as,function(e){e.$index=n;}),r(null,"ignoreTargetNode",i(e,t,l),l,o);},p=function p(e,n,r){t(n,l),o.afterRender&&o.afterRender(n,e),l=null;};return v.dependentObservable(function(){var e=v.utils.unwrapObservable(n)||[];void 0===e.length&&(e=[e]);var t=v.utils.arrayFilter(e,function(e){return o.includeDestroyed||e===s||null===e||!v.utils.unwrapObservable(e._destroy);});v.dependencyDetection.ignore(v.utils.setDomNodeChildrenFromArrayMapping,null,[a,t,c,o,p]);},null,{disposeWhenNodeIsRemoved:a});};var u=v.utils.domData.nextKey();v.bindingHandlers.template={init:function init(e,t){var n=v.utils.unwrapObservable(t());if("string"==typeof n||n.name)v.virtualElements.emptyNode(e);else if("nodes"in n){var r=n.nodes||[];if(v.isObservable(r))throw new Error('The "nodes" option must be a plain, non-observable array.');var i=v.utils.moveCleanedNodesToContainerElement(r);new v.templateSources.anonymousTemplate(e).nodes(i);}else{var o=v.virtualElements.childNodes(e),i=v.utils.moveCleanedNodesToContainerElement(o);new v.templateSources.anonymousTemplate(e).nodes(i);}return{controlsDescendantBindings:!0};},update:function update(e,t,n,r,i){var a,s,u=t(),l=v.utils.unwrapObservable(u),c=!0,p=null;if("string"==typeof l?(s=u,l={}):(s=l.name,"if"in l&&(c=v.utils.unwrapObservable(l.if)),c&&"ifnot"in l&&(c=!v.utils.unwrapObservable(l.ifnot)),a=v.utils.unwrapObservable(l.data)),"foreach"in l){var d=c&&l.foreach||[];p=v.renderTemplateForEach(s||e,d,l,e,i);}else if(c){var h="data"in l?i.createChildContext(a,l.as):i;p=v.renderTemplate(s||e,h,l,e);}else v.virtualElements.emptyNode(e);o(e,p);}},v.expressionRewriting.bindingRewriteValidators.template=function(e){var t=v.expressionRewriting.parseObjectLiteral(e);return 1==t.length&&t[0].unknown?null:v.expressionRewriting.keyValueArrayContainsKey(t,"name")?null:"This template engine does not support anonymous templates nested within its templates";},v.virtualElements.allowedBindings.template=!0;}(),v.exportSymbol("setTemplateEngine",v.setTemplateEngine),v.exportSymbol("renderTemplate",v.renderTemplate),v.utils.findMovesInArrayComparison=function(e,t,n){if(e.length&&t.length){var r,i,o,a,s;for(r=i=0;(!n||r<n)&&(a=e[i]);++i){for(o=0;s=t[o];++o){if(a.value===s.value){a.moved=s.index,s.moved=a.index,t.splice(o,1),r=o=0;break;}}r+=o;}}},v.utils.compareArrays=function(){function e(e,i,o){return o="boolean"==typeof o?{dontLimitMoves:o}:o||{},e=e||[],i=i||[],e.length<i.length?t(e,i,n,r,o):t(i,e,r,n,o);}function t(e,t,n,r,i){var o,a,s,u,l,c,p=Math.min,d=Math.max,h=[],f=e.length,m=t.length,g=m-f||1,y=f+m+1;for(o=0;o<=f;o++){for(u=s,h.push(s=[]),l=p(m,o+g),c=d(0,o-1),a=c;a<=l;a++){if(a){if(o){if(e[o-1]===t[a-1])s[a]=u[a-1];else{var b=u[a]||y,x=s[a-1]||y;s[a]=p(b,x)+1;}}else s[a]=a+1;}else s[a]=o+1;}}var C,w=[],P=[],V=[];for(o=f,a=m;o||a;){C=h[o][a]-1,a&&C===h[o][a-1]?P.push(w[w.length]={status:n,value:t[--a],index:a}):o&&C===h[o-1][a]?V.push(w[w.length]={status:r,value:e[--o],index:o}):(--a,--o,i.sparse||w.push({status:"retained",value:t[a]}));}return v.utils.findMovesInArrayComparison(V,P,!i.dontLimitMoves&&10*f),w.reverse();}var n="added",r="deleted";return e;}(),v.exportSymbol("utils.compareArrays",v.utils.compareArrays),function(){function e(e,t,n,r,i){var o=[],a=v.dependentObservable(function(){var a=t(n,i,v.utils.fixUpContinuousNodeArray(o,e))||[];o.length>0&&(v.utils.replaceDomNodes(o,a),r&&v.dependencyDetection.ignore(r,null,[n,a,i])),o.length=0,v.utils.arrayPushAll(o,a);},null,{disposeWhenNodeIsRemoved:e,disposeWhen:function disposeWhen(){return!v.utils.anyDomNodeIsAttachedToDocument(o);}});return{mappedNodes:o,dependentObservable:a.isActive()?a:s};}var t=v.utils.domData.nextKey(),n=v.utils.domData.nextKey();v.utils.setDomNodeChildrenFromArrayMapping=function(r,i,o,a,u){function l(e,t){p=m[t],C!==t&&(k[e]=p),p.indexObservable(C++),v.utils.fixUpContinuousNodeArray(p.mappedNodes,r),b.push(p),P.push(p);}function c(e,t){if(e)for(var n=0,r=t.length;n<r;n++){t[n]&&v.utils.arrayForEach(t[n].mappedNodes,function(r){e(r,n,t[n].arrayEntry);});}}i=i||[],a=a||{};for(var p,d,h,f=v.utils.domData.get(r,t)===s,m=v.utils.domData.get(r,t)||[],g=v.utils.arrayMap(m,function(e){return e.arrayEntry;}),y=v.utils.compareArrays(g,i,a.dontLimitMoves),b=[],x=0,C=0,w=[],P=[],V=[],k=[],T=[],S=0;d=y[S];S++){switch(h=d.moved,d.status){case"deleted":h===s&&(p=m[x],p.dependentObservable&&(p.dependentObservable.dispose(),p.dependentObservable=s),v.utils.fixUpContinuousNodeArray(p.mappedNodes,r).length&&(a.beforeRemove&&(b.push(p),P.push(p),p.arrayEntry===n?p=null:V[S]=p),p&&w.push.apply(w,p.mappedNodes))),x++;break;case"retained":l(S,x++);break;case"added":h!==s?l(S,h):(p={arrayEntry:d.value,indexObservable:v.observable(C++)},b.push(p),P.push(p),f||(T[S]=p));}}v.utils.domData.set(r,t,b),c(a.beforeMove,k),v.utils.arrayForEach(w,a.beforeRemove?v.cleanNode:v.removeNode);for(var O,R,S=0,E=v.virtualElements.firstChild(r);p=P[S];S++){p.mappedNodes||v.utils.extend(p,e(r,o,p.arrayEntry,u,p.indexObservable));for(var q=0;R=p.mappedNodes[q];E=R.nextSibling,O=R,q++){R!==E&&v.virtualElements.insertAfter(r,R,O);}!p.initialized&&u&&(u(p.arrayEntry,p.mappedNodes,p.indexObservable),p.initialized=!0);}for(c(a.beforeRemove,V),S=0;S<V.length;++S){V[S]&&(V[S].arrayEntry=n);}c(a.afterMove,k),c(a.afterAdd,T);};}(),v.exportSymbol("utils.setDomNodeChildrenFromArrayMapping",v.utils.setDomNodeChildrenFromArrayMapping),v.nativeTemplateEngine=function(){this.allowTemplateRewriting=!1;},v.nativeTemplateEngine.prototype=new v.templateEngine(),v.nativeTemplateEngine.prototype.constructor=v.nativeTemplateEngine,v.nativeTemplateEngine.prototype.renderTemplateSource=function(e,t,n,r){var i=!(v.utils.ieVersion<9),o=i?e.nodes:null,a=o?e.nodes():null;if(a)return v.utils.makeArray(a.cloneNode(!0).childNodes);var s=e.text();return v.utils.parseHtmlFragment(s,r);},v.nativeTemplateEngine.instance=new v.nativeTemplateEngine(),v.setTemplateEngine(v.nativeTemplateEngine.instance),v.exportSymbol("nativeTemplateEngine",v.nativeTemplateEngine),function(){v.jqueryTmplTemplateEngine=function(){function e(){if(n<2)throw new Error("Your version of jQuery.tmpl is too old. Please upgrade to jQuery.tmpl 1.0.0pre or later.");}function t(e,t,n){return p.tmpl(e,t,n);}var n=this.jQueryTmplVersion=function(){if(!p||!p.tmpl)return 0;try{if(p.tmpl.tag.tmpl.open.toString().indexOf("__")>=0)return 2;}catch(e){}return 1;}();this.renderTemplateSource=function(n,r,i,o){o=o||l,i=i||{},e();var a=n.data("precompiled");if(!a){var s=n.text()||"";s="{{ko_with $item.koBindingContext}}"+s+"{{/ko_with}}",a=p.template(null,s),n.data("precompiled",a);}var u=[r.$data],c=p.extend({koBindingContext:r},i.templateOptions),d=t(a,u,c);return d.appendTo(o.createElement("div")),p.fragments={},d;},this.createJavaScriptEvaluatorBlock=function(e){return"{{ko_code ((function() { return "+e+" })()) }}";},this.addTemplate=function(e,t){l.write("<script type='text/html' id='"+e+"'>"+t+"<\/script>");},n>0&&(p.tmpl.tag.ko_code={open:"__.push($1 || '');"},p.tmpl.tag.ko_with={open:"with($1) {",close:"} "});},v.jqueryTmplTemplateEngine.prototype=new v.templateEngine(),v.jqueryTmplTemplateEngine.prototype.constructor=v.jqueryTmplTemplateEngine;var e=new v.jqueryTmplTemplateEngine();e.jQueryTmplVersion>0&&v.setTemplateEngine(e),v.exportSymbol("jqueryTmplTemplateEngine",v.jqueryTmplTemplateEngine);}();});}();}();},function(e,t,n){"use strict";var r=n(0),i=n(6),o=(n.n(i),n(22)),a=n(4),s=n(5);n.d(t,"a",function(){return u;});var u=function(e){function t(t){var n=e.call(this,t)||this;n.question=t,n.isValueChangedPerforming=!1;var r=n;return t.valueChangedCallback=function(){r.onValueChanged();},t.commentChangedCallback=function(){r.onCommentChanged();},t.errorsChangedCallback=function(){r.onErrorsChanged();},t.registerFunctionOnPropertyValueChanged("visibleIndex",function(){r.onVisibleIndexChanged();}),t.registerFunctionOnPropertyValueChanged("isReadOnly",function(){r.onReadOnlyChanged();}),n.koDummy=i.observable(0),n.koValue=n.createkoValue(),n.koComment=i.observable(n.question.comment),n.koErrors(n.question.errors),n.koIsReadOnly=i.observable(n.question.isReadOnly),n.koValue.subscribe(function(e){r.updateValue(e);}),n.koComment.subscribe(function(e){r.updateComment(e);}),n.question.koValue=n.koValue,n.question.koComment=n.koComment,n.question.koIsReadOnly=n.koIsReadOnly,n.question.koQuestionAfterRender=function(e,t){r.koQuestionAfterRender(e,t);},n;}return r.b(t,e),t.prototype.updateQuestion=function(){this.updateKoDummy();},t.prototype.onValueChanged=function(){var e=this.question.value;s.a.isTwoValueEquals(e,this.koValue())||(this.isValueChangedPerforming=!0,this.setkoValue(e),this.isValueChangedPerforming=!1);},t.prototype.onCommentChanged=function(){var e=this.question.comment;s.a.isTwoValueEquals(e,this.koValue())||this.koComment(e);},t.prototype.onVisibleIndexChanged=function(){this.updateKoDummy();},t.prototype.onSurveyLoad=function(){e.prototype.onSurveyLoad.call(this),this.onReadOnlyChanged();},t.prototype.onReadOnlyChanged=function(){this.koIsReadOnly(this.question.isReadOnly);},t.prototype.onErrorsChanged=function(){this.koErrors(this.question.errors);},t.prototype.createkoValue=function(){return i.observable(this.question.value);},t.prototype.setkoValue=function(e){this.koValue(e);},t.prototype.updateValue=function(e){this.isValueChangedPerforming||s.a.isTwoValueEquals(this.question.value,e)||(this.question.value=s.a.getUnbindValue(e));},t.prototype.updateComment=function(e){this.question.comment=e;},t.prototype.getNo=function(){return this.question.visibleIndex>-1?this.question.visibleIndex+1+". ":"";},t.prototype.updateKoDummy=function(){this.koDummy(this.koDummy()+1),this.question.locTitle.onChanged();},t.prototype.koQuestionAfterRender=function(e,t){var n=a.a.GetFirstNonTextElement(e),r=e[0];"#text"===r.nodeName&&(r.data=""),r=e[e.length-1],"#text"===r.nodeName&&(r.data=""),n&&this.question.customWidget&&this.question.customWidget.afterRender(this.question,n);},t;}(o.a);},function(e,t,n){"use strict";var r=n(0),i=n(1),o=n(28),a=n(4),s=n(2),u=n(10),l=n(29),c=n(18),p=n(9);n.d(t,"a",function(){return d;});var d=function(e){function t(t){var n=e.call(this,t)||this;n.name=t,n.isvalueChangedCallbackFiring=!1,n.isValueChangedInSurvey=!1;var r=n;n.validatorsValue=n.createNewArray("validators",function(e){e.locOwner=r;}),n.createLocalizableString("title",n,!0).onRenderedHtmlCallback=function(e){return r.fullTitle;};n.createLocalizableString("description",n,!0);return n.createLocalizableString("commentText",n,!0),n.createLocalizableString("requiredErrorText",n),n;}return r.b(t,e),t.prototype.getValueName=function(){return this.valueName?this.valueName:this.name;},Object.defineProperty(t.prototype,"valueName",{get:function get(){return this.getPropertyValue("valueName","");},set:function set(e){this.setPropertyValue("valueName",e);},enumerable:!0,configurable:!0}),t.prototype.propertyValueChanged=function(t,n,r){"name"===t&&this.onNameValueChanged(n,r),e.prototype.propertyValueChanged.call(this,t,n,r);},t.prototype.onNameValueChanged=function(e,t){t&&(t.indexOf(".")>-1?this.valueName&&!this.isCorrectedNameEqualsValueName(e)||(this.valueName=this.getCorrectedName(t)):this.valueName&&this.isCorrectedNameEqualsValueName(e)&&(this.valueName=""));},t.prototype.getCorrectedName=function(e){for(;e.indexOf(".")>-1;){e=e.replace("."," ");}return e.trim();},t.prototype.isCorrectedNameEqualsValueName=function(e){return!(!e||e.indexOf(".")<0||!this.valueName)&&this.getCorrectedName(e)==this.valueName;},Object.defineProperty(t.prototype,"isAllowTitleLeft",{get:function get(){return!0;},enumerable:!0,configurable:!0}),t.prototype.getType=function(){return"question";},Object.defineProperty(t.prototype,"hasTitle",{get:function get(){return"hidden"!==this.getTitleLocation();},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"hasDescription",{get:function get(){return""!=this.description;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"titleLocation",{get:function get(){return this.getPropertyValue("questionTitleLocation","default");},set:function set(e){var t="hidden"==this.titleLocation||"hidden"==e;this.setPropertyValue("questionTitleLocation",e.toLowerCase()),t&&this.survey&&this.survey.questionVisibilityChanged(this,this.visible);},enumerable:!0,configurable:!0}),t.prototype.getTitleLocation=function(){var e=this.getTitleLocationCore();return"left"!==e||this.isAllowTitleLeft||(e="top"),e;},t.prototype.getTitleLocationCore=function(){return"default"!==this.titleLocation?this.titleLocation:this.parent?this.parent.getQuestionTitleLocation():this.survey?this.survey.questionTitleLocation:"top";},Object.defineProperty(t.prototype,"hasTitleOnLeft",{get:function get(){return this.hasTitle&&"left"===this.getTitleLocation();},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"hasTitleOnTop",{get:function get(){return this.hasTitle&&"top"===this.getTitleLocation();},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"hasTitleOnBottom",{get:function get(){return this.hasTitle&&"bottom"===this.getTitleLocation();},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"hasTitleOnLeftTop",{get:function get(){if(!this.hasTitle)return!1;var e=this.getTitleLocation();return"left"===e||"top"===e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"errorLocation",{get:function get(){return this.survey?this.survey.questionErrorLocation:"top";},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"hasInput",{get:function get(){return!0;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"inputId",{get:function get(){return this.id+"i";},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"title",{get:function get(){return this.getLocalizableStringText("title",this.name);},set:function set(e){this.setLocalizableStringText("title",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locTitle",{get:function get(){return this.getLocalizableString("title");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"description",{get:function get(){return this.getLocalizableStringText("description");},set:function set(e){this.setLocalizableStringText("description",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locDescription",{get:function get(){return this.getLocalizableString("description");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"requiredErrorText",{get:function get(){return this.getLocalizableStringText("requiredErrorText");},set:function set(e){this.setLocalizableStringText("requiredErrorText",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locRequiredErrorText",{get:function get(){return this.getLocalizableString("requiredErrorText");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"commentText",{get:function get(){return this.getLocalizableStringText("commentText",s.a.getString("otherItemText"));},set:function set(e){this.setLocalizableStringText("commentText",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locCommentText",{get:function get(){return this.getLocalizableString("commentText");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locTitleHtml",{get:function get(){var e=this.locTitle.textOrHtml;return e||this.name;},enumerable:!0,configurable:!0}),t.prototype.getAllErrors=function(){return this.errors.slice();},Object.defineProperty(t.prototype,"processedTitle",{get:function get(){var e=this.locTitle.textOrHtml;return e||this.name;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"fullTitle",{get:function get(){var e=this.calcFullTitle();return this.survey?this.survey.getUpdatedQuestionTitle(this,e):e;},enumerable:!0,configurable:!0}),t.prototype.getQuestionTitleTemplate=function(){return this.questionTitleTemplateCallback?this.questionTitleTemplateCallback():this.survey?this.survey.getQuestionTitleTemplate():null;},t.prototype.calcFullTitle=function(){if(this.getQuestionTitleTemplate()){if(!this.textPreProcessor){var e=this;this.textPreProcessor=new c.a(),this.textPreProcessor.onProcess=function(t){e.getProcessedTextValue(t);};}return this.textPreProcessor.process(this.getQuestionTitleTemplate());}var t=this.requiredText;t&&(t+=" ");var n=this.no;return n&&(n+=". "),n+t+this.processedTitle;},t.prototype.focus=function(e){void 0===e&&(e=!1),a.a.ScrollElementToTop(this.id);var t=e?this.getFirstErrorInputElementId():this.getFirstInputElementId();a.a.FocusElement(t)&&this.fireCallback(this.focusCallback);},t.prototype.updateCssClasses=function(t,n){e.prototype.updateCssClasses.call(this,t,n),this.isRequired&&(n.question.required&&(t.root+=" "+n.question.required),n.question.titleRequired&&(t.title+=" "+n.question.titleRequired));},t.prototype.getFirstInputElementId=function(){return this.inputId;},t.prototype.getFirstErrorInputElementId=function(){return this.getFirstInputElementId();},t.prototype.getProcessedTextValue=function(e){var n=e.name.toLocaleLowerCase();e.isExists=-1!==Object.keys(t.TextPreprocessorValuesMap).indexOf(n)||void 0!==this[e.name],e.value=this[t.TextPreprocessorValuesMap[n]||e.name];},t.prototype.supportComment=function(){return!1;},t.prototype.supportOther=function(){return!1;},Object.defineProperty(t.prototype,"isRequired",{get:function get(){return this.getPropertyValue("isRequired",!1);},set:function set(e){this.isRequired!=e&&(this.setPropertyValue("isRequired",e),this.locTitle.strChanged());},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"hasComment",{get:function get(){return this.getPropertyValue("hasComment",!1);},set:function set(e){this.supportComment()&&(this.setPropertyValue("hasComment",e),this.hasComment&&(this.hasOther=!1));},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"hasOther",{get:function get(){return this.getPropertyValue("hasOther",!1);},set:function set(e){this.supportOther()&&this.hasOther!=e&&(this.setPropertyValue("hasOther",e),this.hasOther&&(this.hasComment=!1),this.hasOtherChanged());},enumerable:!0,configurable:!0}),t.prototype.hasOtherChanged=function(){},Object.defineProperty(t.prototype,"isReadOnly",{get:function get(){return this.readOnly||!!this.parent&&this.parent.isReadOnly||!!this.survey&&this.survey.isDisplayMode;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"readOnly",{get:function get(){return this.getPropertyValue("readOnly",!1);},set:function set(e){this.readOnly!=e&&(this.setPropertyValue("readOnly",e),this.onReadOnlyChanged());},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"enableIf",{get:function get(){return this.getPropertyValue("enableIf","");},set:function set(e){this.setPropertyValue("enableIf",e);},enumerable:!0,configurable:!0}),t.prototype.runCondition=function(t,n){this.isDesignMode||(e.prototype.runCondition.call(this,t,n),this.enableIf&&(this.conditionEnabelRunner||(this.conditionEnabelRunner=new p.a(this.enableIf)),this.conditionEnabelRunner.expression=this.enableIf,this.readOnly=!this.conditionEnabelRunner.run(t,n)));},t.prototype.onReadOnlyChanged=function(){this.setPropertyValue("isReadOnly",this.isReadOnly),this.fireCallback(this.readOnlyChangedCallback);},Object.defineProperty(t.prototype,"no",{get:function get(){if(this.visibleIndex<0)return"";var e=1,t=!0,n="";return this.survey&&this.survey.questionStartIndex&&(n=this.survey.questionStartIndex,parseInt(n)?e=parseInt(n):1==n.length&&(t=!1)),t?(this.visibleIndex+e).toString():String.fromCharCode(n.charCodeAt(0)+this.visibleIndex);},enumerable:!0,configurable:!0}),t.prototype.onSurveyLoad=function(){e.prototype.onSurveyLoad.call(this),this.updateValueWithDefaults();},t.prototype.onSetData=function(){e.prototype.onSetData.call(this),this.onSurveyValueChanged(this.value),this.updateValueWithDefaults();},Object.defineProperty(t.prototype,"value",{get:function get(){return this.valueFromData(this.getValueCore());},set:function set(e){this.setNewValue(e),this.isvalueChangedCallbackFiring||(this.isvalueChangedCallbackFiring=!0,this.fireCallback(this.valueChangedCallback),this.isvalueChangedCallbackFiring=!1);},enumerable:!0,configurable:!0}),t.prototype.clearValue=function(){this.value=null,this.comment=null;},t.prototype.canClearValueAsInvisible=function(){return(!this.isVisible||!this.isParentVisible)&&(!this.survey||!this.valueName||!this.survey.hasVisibleQuestionByValueName(this.valueName));},Object.defineProperty(t.prototype,"isParentVisible",{get:function get(){for(var e=this.parent;e;){if(!e.isVisible)return!1;e=e.parent;}return!0;},enumerable:!0,configurable:!0}),t.prototype.clearValueIfInvisible=function(){this.canClearValueAsInvisible()&&this.clearValue();},t.prototype.getDisplayValue=function(e){if(this.customWidget){var t=this.customWidget.getDisplayValue(this);if(t)return t;}return this.getDisplayValueCore(e);},t.prototype.getDisplayValueCore=function(e){return this.value;},Object.defineProperty(t.prototype,"defaultValue",{get:function get(){return this.getPropertyValue("defaultValue");},set:function set(e){this.setPropertyValue("defaultValue",e),this.updateValueWithDefaults();},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"correctAnswer",{get:function get(){return this.getPropertyValue("correctAnswer");},set:function set(e){this.setPropertyValue("correctAnswer",e);},enumerable:!0,configurable:!0}),t.prototype.isAnswerCorrect=function(){return!this.isValueEmpty(this.value)&&!this.isValueEmpty(this.correctAnswer)&&this.isTwoValueEquals(this.value,this.correctAnswer);},t.prototype.updateValueWithDefaults=function(){this.isLoadingFromJson||!this.isDesignMode&&this.isDefaultValueEmpty()||(this.isDesignMode||this.isEmpty())&&this.setDefaultValue();},t.prototype.isDefaultValueEmpty=function(){return this.isValueEmpty(this.defaultValue);},t.prototype.setDefaultValue=function(){this.value=this.defaultValue;},Object.defineProperty(t.prototype,"comment",{get:function get(){return this.getComment();},set:function set(e){e&&(e=e.trim()),this.comment!=e&&(this.setComment(e),this.fireCallback(this.commentChangedCallback));},enumerable:!0,configurable:!0}),t.prototype.getComment=function(){return null!=this.data?this.data.getComment(this.getValueName()):this.questionComment;},t.prototype.setComment=function(e){this.setNewComment(e);},t.prototype.isEmpty=function(){return this.isValueEmpty(this.value);},Object.defineProperty(t.prototype,"validators",{get:function get(){return this.validatorsValue;},set:function set(e){this.setPropertyValue("validators",e);},enumerable:!0,configurable:!0}),t.prototype.addConditionNames=function(e){e.push(this.name);},t.prototype.getConditionJson=function(e,t){void 0===e&&(e=null),void 0===t&&(t=null);var n=new i.a().toJsonObject(this);return n.type=this.getType(),n;},t.prototype.hasErrors=function(e){return void 0===e&&(e=!0),this.checkForErrors(e),this.errors.length>0;},Object.defineProperty(t.prototype,"currentErrorCount",{get:function get(){return this.errors.length;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"requiredText",{get:function get(){return null!=this.survey&&this.isRequired?this.survey.requiredText:"";},enumerable:!0,configurable:!0}),t.prototype.addError=function(e){this.errors.push(e),this.fireCallback(this.errorsChangedCallback);},t.prototype.checkForErrors=function(e){var t=this.errors?this.errors.length:0;this.errors=[],this.isVisible&&!this.isReadOnly&&this.collectErrors(),e&&(t!=this.errors.length||t>0)&&this.fireCallback(this.errorsChangedCallback);},t.prototype.collectErrors=function(){if(this.onCheckForErrors(this.errors),0==this.errors.length){var e=this.runValidators();e&&(this.errors=[],this.errors.push(e));}if(this.survey&&0==this.errors.length){var e=this.fireSurveyValidation();e&&this.errors.push(e);}},t.prototype.fireSurveyValidation=function(){return this.validateValueCallback?this.validateValueCallback():this.survey?this.survey.validateQuestion(this):null;},t.prototype.onCheckForErrors=function(e){this.hasRequiredError()&&this.errors.push(new u.b(this.requiredErrorText));},t.prototype.hasRequiredError=function(){return this.isRequired&&this.isEmpty();},t.prototype.runValidators=function(){return new l.a().run(this);},t.prototype.setNewValue=function(e){this.setNewValueInData(e),this.onValueChanged();},t.prototype.setNewValueInData=function(e){this.isValueChangedInSurvey||(e=this.valueToData(e),this.setValueCore(e));},t.prototype.getValueCore=function(){return null!=this.data?this.data.getValue(this.getValueName()):this.questionValue;},t.prototype.setValueCore=function(e){null!=this.data?this.data.setValue(this.getValueName(),e):this.questionValue=e;},t.prototype.valueFromData=function(e){return e;},t.prototype.valueToData=function(e){return e;},t.prototype.onValueChanged=function(){},t.prototype.setNewComment=function(e){null!=this.data?this.data.setComment(this.getValueName(),e):this.questionComment=e;},t.prototype.onSurveyValueChanged=function(e){this.isValueChangedInSurvey=!0,this.value=this.valueFromData(e),this.fireCallback(this.commentChangedCallback),this.isValueChangedInSurvey=!1;},t.prototype.getValidatorTitle=function(){return null;},Object.defineProperty(t.prototype,"validatedValue",{get:function get(){return this.value;},set:function set(e){this.value=e;},enumerable:!0,configurable:!0}),t.prototype.getAllValues=function(){return this.data?this.data.getAllValues():null;},t.TextPreprocessorValuesMap={title:"processedTitle",require:"requiredText"},t;}(o.a);i.a.metaData.addClass("question",[{name:"title:text",serializationProperty:"locTitle"},{name:"description:text",serializationProperty:"locDescription"},{name:"commentText",serializationProperty:"locCommentText"},"valueName","enableIf:condition","defaultValue:value","correctAnswer:value","isRequired:boolean",{name:"requiredErrorText:text",serializationProperty:"locRequiredErrorText"},"readOnly:boolean",{name:"validators:validators",baseClassName:"surveyvalidator",classNamePart:"validator"},{name:"titleLocation",default:"default",choices:["default","top","bottom","left","hidden"]}],null,"questionbase");},function(e,t,n){"use strict";var r=n(0),i=n(5),o=n(33),a=n(35),s=n(13);n.d(t,"d",function(){return u;}),n.d(t,"e",function(){return l;}),n.d(t,"f",function(){return c;}),n.d(t,"g",function(){return p;}),n.d(t,"c",function(){return d;}),n.d(t,"b",function(){return h;}),n.d(t,"h",function(){return f;}),n.d(t,"a",function(){return m;});var u=function(){function e(e){this.origionalValue=e;}return e.prototype.getValue=function(t){if(Array.isArray(this.origionalValue)){for(var n=[],r=0;r<this.origionalValue.length;r++){var i=new e(this.origionalValue[r]);n.push(i.getValue(t));}return n;}var o=this.getSimpleValue(this.origionalValue);if(o.isSimple)return o.value;var a=this.removeQuotesAndEscapes(this.origionalValue);if(t){var s=this.getValueName(a);if(s)return t.hasValue(s)?(a=t.getValue(s),this.getSimpleValue(a).value):null;}return a;},Object.defineProperty(e.prototype,"isBoolean",{get:function get(){return this.isBooleanValue(this.origionalValue);},enumerable:!0,configurable:!0}),e.prototype.fillVariables=function(e){var t=this.getValueName(this.origionalValue);t&&e.push(t);},e.prototype.toString=function(){var e=this.origionalValue;return!e||this.isNumeric(e)||this.isBooleanValue(e)||(e="'"+e+"'"),e;},e.prototype.removeQuotesAndEscapes=function(e){e.length>0&&("'"==e[0]||'"'==e[0])&&(e=e.substr(1));var t=e.length;return t>0&&("'"==e[t-1]||'"'==e[t-1])&&(e=e.substr(0,t-1)),e&&(e=e.replace("\\'","'"),e=e.replace('\\"','"')),e;},e.prototype.getValueName=function(e){return e.length<3||"{"!=e[0]||"}"!=e[e.length-1]?null:e.substr(1,e.length-2);},e.prototype.isBooleanValue=function(e){return e&&("true"===e.toLowerCase()||"false"===e.toLowerCase());},e.prototype.isNumeric=function(e){if(e&&(e.indexOf("-")>-1||e.indexOf("+")>1||e.indexOf("*")>-1||e.indexOf("^")>-1||e.indexOf("/")>-1||e.indexOf("%")>-1))return!1;var t=Number(e);return!isNaN(t)&&isFinite(t);},e.prototype.getSimpleValue=function(e){var t={isSimple:!1,value:e};return void 0===e||"undefined"===e?(t.value=null,t.isSimple=!0,t):e&&"string"==typeof e?this.isNumeric(e)?(t.isSimple=!0,0==e.indexOf("0x")?t.value=parseInt(e):t.value=parseFloat(e),t):this.isBooleanValue(e)?(t.value="true"==e.toLowerCase(),t.isSimple=!0,t):t:(t.isSimple=!0,t);},e;}(),l=function(e){function t(t){var n=e.call(this,t)||this;return n.origionalValue=t,n.parameters=new Array(),n;}return r.b(t,e),t.prototype.getValue=function(e){for(var t=[],n=0;n<this.parameters.length;n++){t.push(this.parameters[n].getValue(e));}return a.a.Instance.run(this.origionalValue,t,e.properties);},t.prototype.fillVariables=function(e){for(var t=0;t<this.parameters.length;t++){this.parameters[t].fillVariables(e);}},t.prototype.toString=function(){for(var e=this.origionalValue+"(",t=0;t<this.parameters.length;t++){t>0&&(e+=", "),e+=this.parameters[t].toString();}return e;},t;}(u),c=function(e){function t(){return e.call(this,null)||this;}return r.b(t,e),t.prototype.getValue=function(e){if(i.a.isValueEmpty(this.left)||i.a.isValueEmpty(this.right))return null;var t=this.left.getValue(e),n=this.right.getValue(e);return"+"==this.operator?t+n:"-"==this.operator?t-n:"*"==this.operator?t*n:"^"==this.operator?Math.pow(t,n):"/"==this.operator?n?t/n:null:"%"==this.operator&&n?t%n:null;},t.prototype.fillVariables=function(e){this.left&&this.left.fillVariables(e),this.right&&this.left.fillVariables(e);},t.prototype.toString=function(){var e=this.left?this.left.toString():"";return e+=" "+this.operator+" ",this.right&&(e+=this.right.toString()),e;},t;}(u),p=function(e){function t(t){void 0===t&&(t=null);var n=e.call(this,null)||this;return t&&(n.root=t),n;}return r.b(t,e),t.prototype.getValue=function(e){return!!this.root&&(this.processValue=e,this.runNode(this.root));},t.prototype.fillVariables=function(e){this.root&&this.root.fillVariables(e);},t.prototype.toString=function(){return this.root?this.root.toString():"";},t.prototype.runNode=function(e){for(var t="and"==e.connective,n=0;n<e.children.length;n++){var r=this.runNodeCondition(e.children[n]);if(!r&&t)return e.isNot;if(r&&!t)return!e.isNot;}return e.isNot?!t:t;},t.prototype.runNodeCondition=function(e){return e.children?this.runNode(e):!!e.left&&this.runCondition(e);},t.prototype.runCondition=function(e){return e.performExplicit(e.left,e.right,this.processValue);},t;}(u),d=function(){function e(){this.opValue="equal",this.leftValue=null,this.rightValue=null;}return Object.defineProperty(e,"operators",{get:function get(){return null!=e.operatorsValue?e.operatorsValue:(e.operatorsValue={empty:function empty(e,t){return null==e||!e;},notempty:function notempty(e,t){return null!=e&&!!e;},equal:function equal(e,t){return i.a.isTwoValueEquals(e,t,!0);},notequal:function notequal(e,t){return!i.a.isTwoValueEquals(e,t,!0);},contains:function contains(t,n){return e.operatorsValue.containsCore(t,n,!0);},notcontains:function notcontains(t,n){return!t&&!i.a.isValueEmpty(n)||e.operatorsValue.containsCore(t,n,!1);},containsCore:function containsCore(e,t,n){if(!e)return!1;if(e.length||(e=e.toString()),"string"==typeof e||e instanceof String){if(!t)return!1;t=t.toString();var r=e.indexOf(t)>-1;return n?r:!r;}for(var i=0;i<e.length;i++){if(e[i]==t)return n;}return!n;},greater:function greater(e,t){return null!=e&&null!=t&&e>t;},less:function less(e,t){return null!=e&&null!=t&&e<t;},greaterorequal:function greaterorequal(e,t){return null!=e&&null!=t&&e>=t;},lessorequal:function lessorequal(e,t){return null!=e&&null!=t&&e<=t;}},e.operatorsValue);},enumerable:!0,configurable:!0}),e.getOperator=function(t){return e.operators[t];},e.setOperator=function(t,n){e.operators[t]=n;},e.isCorrectOperator=function(t){return!!t&&(t=t.toLowerCase(),void 0!=e.operators[t]);},e.isNoRightOperation=function(e){return"empty"==e||"notempty"==e;},Object.defineProperty(e.prototype,"left",{get:function get(){return this.leftValue;},set:function set(e){this.leftValue=e;},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"right",{get:function get(){return this.rightValue;},set:function set(e){this.rightValue=e;},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"operator",{get:function get(){return this.opValue;},set:function set(t){t&&(t=t.toLowerCase(),e.operators[t]&&(this.opValue=t));},enumerable:!0,configurable:!0}),e.prototype.perform=function(e,t,n){return void 0===e&&(e=null),void 0===t&&(t=null),void 0===n&&(n=null),e||(e=this.left),t||(t=this.right),this.performExplicit(e,t,n);},e.prototype.performExplicit=function(t,n,r){var i=t?t.getValue(r):null;if(!n&&(!0===i||!1===i))return i;var o=n?n.getValue(r):null;return e.operators[this.operator](i,o);},e.prototype.fillVariables=function(e){this.left&&this.left.fillVariables(e),this.right&&this.right.fillVariables(e);},e.prototype.toString=function(){if(!this.right||!this.operator)return"";var t=this.left.toString(),n=t+" "+this.operationToString();return e.isNoRightOperation(this.operator)?n:n+" "+this.right.toString();},e.prototype.operationToString=function(){var e=this.operator;return"equal"==e?"=":"notequal"==e?"!=":"greater"==e?">":"less"==e?"<":"greaterorequal"==e?">=":"lessorequal"==e?"<=":e;},e.operatorsValue=null,e;}(),h=function(){function e(){this.connectiveValue="and",this.isNot=!1,this.children=[];}return Object.defineProperty(e.prototype,"connective",{get:function get(){return this.connectiveValue;},set:function set(e){e&&(e=e.toLowerCase(),"&"!=e&&"&&"!=e||(e="and"),"|"!=e&&"||"!=e||(e="or"),"and"!=e&&"or"!=e||(this.connectiveValue=e));},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"isEmpty",{get:function get(){return 0==this.children.length;},enumerable:!0,configurable:!0}),e.prototype.clear=function(){this.children=[],this.connective="and";},e.prototype.getVariables=function(){var e=[];return this.fillVariables(e),e;},e.prototype.fillVariables=function(e){for(var t=0;t<this.children.length;t++){this.children[t].fillVariables(e);}},e.prototype.toString=function(){if(this.isEmpty)return"";for(var e="",t=0;t<this.children.length;t++){var n=this.children[t],r=n.toString();n.children&&n.children.length>0&&(r="("+r+")"),r&&(e&&(e+=" "+this.connective+" "),e+=r);}return e;},e;}(),f=function(){function e(e){this.expression=e,this.processValue=new s.a();}return Object.defineProperty(e.prototype,"expression",{get:function get(){return this.expressionValue;},set:function set(e){this.expression!=e&&(this.expressionValue=e,this.operand=new o.a().parseExpression(this.expressionValue));},enumerable:!0,configurable:!0}),e.prototype.canRun=function(){return!!this.operand;},e.prototype.run=function(e,t){return void 0===t&&(t=null),this.operand?(this.processValue.values=e,this.processValue.properties=t,this.operand.getValue(this.processValue)):null;},e;}(),m=function(){function e(e){this.root=new h(),this.expression=e;}return Object.defineProperty(e.prototype,"expression",{get:function get(){return this.expressionValue;},set:function set(e){this.expression!=e&&(this.expressionValue=e,new o.a().parse(this.expressionValue,this.root));},enumerable:!0,configurable:!0}),e.prototype.getVariables=function(){return this.root?this.root.getVariables():[];},e.prototype.run=function(e,t){void 0===t&&(t=null);var n=new p(this.root),r=new s.a();return r.values=e,r.properties=t,n.getValue(r);},e;}();},function(e,t,n){"use strict";var r=n(0),i=n(2),o=n(4);n.d(t,"b",function(){return a;}),n.d(t,"d",function(){return s;}),n.d(t,"c",function(){return u;}),n.d(t,"e",function(){return l;}),n.d(t,"a",function(){return c;});var a=function(e){function t(t,n){void 0===t&&(t=null),void 0===n&&(n=null);var r=e.call(this,t,n)||this;return r.text=t,r;}return r.b(t,e),t.prototype.getDefaultText=function(){return i.a.getString("requiredError");},t;}(o.d),s=function(e){function t(t,n){void 0===t&&(t=null),void 0===n&&(n=null);var r=e.call(this,t,n)||this;return r.text=t,r;}return r.b(t,e),t.prototype.getDefaultText=function(){return i.a.getString("requiredErrorInPanel");},t;}(o.d),u=function(e){function t(t,n){void 0===t&&(t=null),void 0===n&&(n=null);var r=e.call(this,t,n)||this;return r.text=t,r;}return r.b(t,e),t.prototype.getDefaultText=function(){return i.a.getString("numericError");},t;}(o.d),l=function(e){function t(t,n){void 0===n&&(n=null);var r=e.call(this,null,n)||this;return r.maxSize=t,r.locText.text=r.getText(),r;}return r.b(t,e),t.prototype.getDefaultText=function(){return i.a.getString("exceedMaxSize").format(this.getTextSize());},t.prototype.getTextSize=function(){var e=["Bytes","KB","MB","GB","TB"],t=[0,0,2,3,3];if(0===this.maxSize)return"0 Byte";var n=Math.floor(Math.log(this.maxSize)/Math.log(1024));return(this.maxSize/Math.pow(1024,n)).toFixed(t[n])+" "+e[n];},t;}(o.d),c=function(e){function t(t,n){void 0===n&&(n=null);var r=e.call(this,t,n)||this;return r.text=t,r;}return r.b(t,e),t;}(o.d);},function(e,t,n){"use strict";var r=n(15),i=n(1),o=n(5),a=n(9);n.d(t,"a",function(){return s;});var s=function(){function e(e,t){void 0===t&&(t=null),this.visibleIfValue="",this.isVisibleValue=!0,this.locTextValue=new r.a(null,!0);var n=this;this.locTextValue.onGetTextCallback=function(e){return e||(n.isValueEmpty?null:n.value.toString());},t&&(this.locText.text=t),this.value=e;}return e.createArray=function(t){var n=[];return e.setupArray(n,t),n;},e.setupArray=function(e,t){e.push=function(e){var n=Array.prototype.push.call(this,e);return e.locOwner=t,n;},e.splice=function(e,n){for(var r=[],i=2;i<arguments.length;i++){r[i-2]=arguments[i];}var o=(s=Array.prototype.splice).call.apply(s,[this,e,n].concat(r));r||(r=[]);for(var a=0;a<r.length;a++){r[a].locOwner=t;}return o;var s;};},e.setData=function(t,n){t.length=0;for(var r=0;r<n.length;r++){var i=n[r],o=new e(null);o.setData(i),t.push(o);}},e.getData=function(e){for(var t=new Array(),n=0;n<e.length;n++){t.push(e[n].getData());}return t;},e.getItemByValue=function(e,t){for(var n=0;n<e.length;n++){if(o.a.isTwoValueEquals(e[n].value,t))return e[n];}return null;},e.getTextOrHtmlByValue=function(t,n){var r=e.getItemByValue(t,n);return null!==r?r.locText.textOrHtml:"";},e.locStrsChanged=function(e){for(var t=0;t<e.length;t++){e[t].locText.strChanged();}},e.runConditionsForItems=function(e,t,n,r,i){r||(r={});for(var o=r.item,a=r.choice,s=!1,u=0;u<e.length;u++){var l=e[u];r.item=l.value,r.choice=l.value;var c=!!l.getConditionRunner&&l.getConditionRunner();c||(c=n);var p=!0;c?(p=c.run(r,i))&&t.push(l):t.push(l),p!=l.isVisible&&(s=!0,l.setIsVisible&&l.setIsVisible(p));}return o?r.item=o:delete r.item,a?r.choice=a:delete r.choice,s;},e.prototype.getType=function(){return"itemvalue";},Object.defineProperty(e.prototype,"locText",{get:function get(){return this.locTextValue;},enumerable:!0,configurable:!0}),e.prototype.setLocText=function(e){this.locTextValue=e;},Object.defineProperty(e.prototype,"locOwner",{get:function get(){return this.locText.owner;},set:function set(e){this.locText.owner=e;},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"value",{get:function get(){return this.itemValue;},set:function set(t){if(this.itemValue=t,this.itemValue){var n=this.itemValue.toString(),r=n.indexOf(e.Separator);r>-1?(this.itemValue=n.slice(0,r),this.text=n.slice(r+1)):this.hasText||this.locText.onChanged();}},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"hasText",{get:function get(){return!!this.locText.pureText;},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"text",{get:function get(){return this.locText.text;},set:function set(e){this.locText.text=e;},enumerable:!0,configurable:!0}),e.prototype.getData=function(){var e=this.getCustomAttributes(),t=this.locText.getJson();if(!e&&!t&&!this.visibleIf)return this.value;var n=this.value;n&&n.pos&&delete n.pos;var r={value:n};if(t&&(r.text=t),this.visibleIf&&(r.visibleIf=this.visibleIf),e)for(var i in e){r[i]=e[i];}return r;},e.prototype.setData=function(t){if(void 0!==t.value){var n=null;this.isObjItemValue(t)&&(t.itemValue=t.itemValue,this.locText.setJson(t.locText.getJson()),t.visibleIf&&(this.visibleIf=t.visibleIf),n=e.itemValueProp),this.copyAttributes(t,n);}else this.value=t;},Object.defineProperty(e.prototype,"visibleIf",{get:function get(){return this.visibleIfValue;},set:function set(e){this.visibleIfValue=e;},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"isVisible",{get:function get(){return this.isVisibleValue;},enumerable:!0,configurable:!0}),e.prototype.setIsVisible=function(e){this.isVisibleValue=e;},e.prototype.getConditionRunner=function(){return this.visibleIf?(this.conditionRunner||(this.conditionRunner=new a.a(this.visibleIf)),this.conditionRunner.expression=this.visibleIf,this.conditionRunner):null;},Object.defineProperty(e.prototype,"isValueEmpty",{get:function get(){return!this.itemValue&&0!==this.itemValue&&!1!==this.itemValue;},enumerable:!0,configurable:!0}),e.prototype.isObjItemValue=function(e){return void 0!==e.getType&&"itemvalue"==e.getType();},e.prototype.copyAttributes=function(e,t){for(var n in e){"function"!=typeof e[n]&&(t&&t.indexOf(n)>-1||("text"==n?this.locText.setJson(e[n]):this[n]=e[n]));}},e.prototype.getCustomAttributes=function(){var t=null;for(var n in this){"function"==typeof this[n]||e.itemValueProp.indexOf(n)>-1||"itemValue"==n||(null==t&&(t={}),t[n]=this[n]);}return t;},e.Separator="|",e.itemValueProp=["text","value","visibleIfValue","visibleIf","hasText","locOwner","locText","isValueEmpty","isVisible","isVisibleValue","locTextValue","conditionRunner","pos","survey"],e;}();i.a.metaData.addClass("itemvalue",["!value",{name:"text",onGetValue:function onGetValue(e){return e.locText.pureText;}},{name:"visibleIf:condition",visible:!1}]);},function(e,t,n){"use strict";n.d(t,"b",function(){return r;}),n.d(t,"a",function(){return i;});var r={currentType:"",getCss:function getCss(){var e=this.currentType?this[this.currentType]:i;return e||(e=i),e;}},i={root:"sv_main sv_default_css",header:"sv_header",body:"sv_body",footer:"sv_nav",navigationButton:"",completedPage:"sv_completed_page",navigation:{complete:"btn btn--cta fas",prev:"btn fas",next:"btn fas",start:"btn btn--cta fas"},progress:"sv_progress",progressBar:"sv_progress_bar",page:{root:"sv_p_root",title:"",description:""},pageTitle:"sv_page_title",pageDescription:"",row:"sv_row",question:{mainRoot:"sv_q sv_qstn",title:"sv_q_title",description:"sv_q_description",comment:"",required:"",titleRequired:"",hasError:"",indent:20,footer:"sv_q_footer"},panel:{title:"sv_p_title",description:"",container:"sv_p_container"},error:{root:"sv_q_erbox",icon:"",item:""},boolean:{root:"sv_qcbc sv_qbln",item:"sv_q_checkbox",label:"",materialDecorator:"checkbox-material"},checkbox:{root:"sv_qcbc sv_qcbx",item:"sv_q_checkbox",label:"sv_q_checkbox_label",itemControl:"sv_q_checkbox_control_item",controlLabel:"sv_q_checkbox_control_label",materialDecorator:"checkbox-material",other:"sv_q_other sv_q_checkbox_other"},comment:"",dropdown:{root:"",control:"sv_q_dropdown_control",selectWrapper:"sv_select_wrapper",other:"sv_q_dd_other"},matrix:{root:"sv_q_matrix",label:"sv_q_m_label",cellText:"sv_q_m_cell_text",cellTextSelected:"sv_q_m_cell_selected"},matrixdropdown:{root:"sv_q_matrix_dropdown"},matrixdynamic:{root:"sv_q_matrix_dynamic",button:"sv_matrix_dynamic_button",buttonAdd:"",buttonRemove:""},paneldynamic:{root:"sv_panel_dynamic",title:"sv_p_title",button:"",buttonPrev:"",buttonNext:"",buttonAdd:"",buttonRemove:""},multipletext:{root:"sv_q_mt",itemTitle:"sv_q_mt_title",row:"sv_q_mt_row",itemValue:"sv_q_mt_item_value sv_q_text_root"},radiogroup:{root:"sv_qcbc",item:"sv_q_radiogroup",label:"sv_q_radiogroup_label",itemControl:"sv_q_radiogroup_control_item",controlLabel:"",materialDecorator:"circle",other:"sv_q_other sv_q_radiogroup_other",clearButton:"sv_q_radiogroup_clear"},imagepicker:{root:"sv_imgsel",item:"sv_q_imgsel",label:"sv_q_imgsel_label",itemControl:"sv_q_imgsel_control_item",image:"sv_q_imgsel_image",itemText:"sv_q_imgsel_text",clearButton:"sv_q_radiogroup_clear"},rating:{root:"sv_q_rating",item:"sv_q_rating_item",selected:"active",minText:"sv_q_rating_min_text",itemText:"sv_q_rating_item_text",maxText:"sv_q_rating_max_text"},text:"sv_q_text_root",expression:"",file:{root:"sv_q_file",placeholderInput:"sv_q_file_placeholder",preview:"sv_q_file_preview",removeButton:"sv_q_file_remove_button",fileInput:"sv_q_file_input"},saveData:{root:"",saving:"",error:"",success:"",saveAgainButton:""},window:{root:"sv_window",body:"sv_window_content",header:{root:"sv_window_title",title:"",button:"",buttonExpanded:"",buttonCollapsed:""}}};r.standard=i;},function(e,t,n){"use strict";var r=n(5);n.d(t,"a",function(){return i;});var i=function(){function e(){this.values=null,this.properties=null;}return e.prototype.getFirstName=function(e){if(!e)return e;for(var t="",n=0;n<e.length;n++){var r=e[n];if("."==r||"["==r)break;t+=r;}return t;},e.prototype.hasValue=function(e,t){return void 0===t&&(t=null),t||(t=this.values),this.getValueCore(e,t).hasValue;},e.prototype.getValue=function(e,t){return void 0===t&&(t=null),t||(t=this.values),this.getValueCore(e,t).value;},e.prototype.getValueCore=function(e,t){var n={hasValue:!1,value:null},i=t;if(!i)return n;e&&e.lastIndexOf(".length")>-1&&e.lastIndexOf(".length")===e.length-".length".length&&(n.value=0,n.hasValue=!0);for(var o=!0;e&&e.length>0;){if(!o&&"["==e[0]){if(!Array.isArray(i))return n;for(var a=1,s="";a<e.length&&"]"!=e[a];){s+=e[a],a++;}if(e=a<e.length?e.substr(a+1):"",(a=this.getIntValue(s))<0||a>=i.length)return n;i=i[a];}else{o||(e=e.substr(1));var u=this.getFirstName(e);if(!u)return n;if(r.a.isValueEmpty(i[u]))return n;i=i[u],e=e.substr(u.length);}o=!1;}return n.value=i,n.hasValue=!0,n;},e.prototype.getIntValue=function(e){return"0"==e||(0|e)>0&&e%1==0?Number(e):-1;},e;}();},function(e,t,n){"use strict";var r=n(0),i=n(6),o=(n.n(i),n(7));n.d(t,"a",function(){return a;}),n.d(t,"b",function(){return s;});var a=function(e){function t(t){var n=e.call(this,t)||this,r=n;return n.koOtherVisible=i.computed(function(){return r.koValue(),r.isOtherSelected;}),n.koVisibleChoices=i.observableArray(r.question.visibleChoices),t.choicesChangedCallback=function(){r.koVisibleChoices(r.question.visibleChoices);},n.question.koOtherVisible=n.koOtherVisible,n.question.koVisibleChoices=n.koVisibleChoices,n;}return r.b(t,e),Object.defineProperty(t.prototype,"isOtherSelected",{get:function get(){return this.question.isOtherSelected;},enumerable:!0,configurable:!0}),t;}(o.a),s=function(e){function t(t){var n=e.call(this,t)||this;n.koWidth=i.observable(n.colWidth),n.question.koWidth=n.koWidth,n.question.koAfterRender=n.koAfterRender;var r=n;return n.question.colCountChangedCallback=function(){r.onColCountChanged();},n;}return r.b(t,e),t.prototype.onColCountChanged=function(){this.question.koWidth=i.observable(this.colWidth);},Object.defineProperty(t.prototype,"colWidth",{get:function get(){var e=this.question.colCount;return e>0?100/e+"%":"";},enumerable:!0,configurable:!0}),t.prototype.koAfterRender=function(e,t){var n=e[0];"#text"==n.nodeName&&(n.data=""),n=e[e.length-1],"#text"==n.nodeName&&(n.data="");},t;}(a);},function(e,t,n){"use strict";var r=n(5);n.d(t,"a",function(){return i;});var i=function(){function e(e,t){void 0===t&&(t=!1),this.owner=e,this.useMarkdown=t,this.values={},this.htmlValues={},this.renderedText=null,this.calculatedText=null,this.onGetTextCallback=null,this.onCreating();}return Object.defineProperty(e.prototype,"locale",{get:function get(){return this.owner?this.owner.getLocale():"";},enumerable:!0,configurable:!0}),e.prototype.strChanged=function(){null!==this.renderedText&&(this.calculatedText=this.calText(),this.renderedText!==this.calculatedText&&this.onChanged());},Object.defineProperty(e.prototype,"text",{get:function get(){return this.renderedText=null!==this.calculatedText?this.calculatedText:this.calText(),this.calculatedText=null,this.renderedText;},set:function set(e){this.setLocaleText(this.locale,e);},enumerable:!0,configurable:!0}),e.prototype.calText=function(){var e=this.pureText;return e&&this.owner&&this.owner.getProcessedText&&e.indexOf("{")>-1&&(e=this.owner.getProcessedText(e)),this.onGetTextCallback&&(e=this.onGetTextCallback(e)),e;},Object.defineProperty(e.prototype,"pureText",{get:function get(){var t=this.locale;t||(t=e.defaultLocale);var n=this.values[t];return n||t===e.defaultLocale||(n=this.values[e.defaultLocale]),n||(n=""),n;},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"hasHtml",{get:function get(){return this.hasHtmlValue();},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"html",{get:function get(){return this.hasHtml?this.getHtmlValue():"";},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"isEmpty",{get:function get(){return 0==Object.keys(this.values).length;},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"textOrHtml",{get:function get(){return this.hasHtml?this.getHtmlValue():this.text;},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"renderedHtml",{get:function get(){var e=this.textOrHtml;return this.onRenderedHtmlCallback?this.onRenderedHtmlCallback(e):e;},enumerable:!0,configurable:!0}),e.prototype.getLocaleText=function(t){t||(t=e.defaultLocale);var n=this.values[t];return n||"";},e.prototype.setLocaleText=function(t,n){n!=this.getLocaleText(t)&&(n&&t&&t!=e.defaultLocale&&!this.values[t]&&n==this.getLocaleText(e.defaultLocale)||(t||(t=e.defaultLocale),delete this.htmlValues[t],n?"string"==typeof n&&(t!=e.defaultLocale&&n==this.getLocaleText(e.defaultLocale)?this.setLocaleText(t,null):(this.values[t]=n,t==e.defaultLocale&&this.deleteValuesEqualsToDefault(n))):this.values[t]&&delete this.values[t],this.strChanged()));},e.prototype.getJson=function(){var t=Object.keys(this.values);return 0==t.length?null:1==t.length&&t[0]==e.defaultLocale?this.values[t[0]]:this.values;},e.prototype.setJson=function(e){if(this.values={},this.htmlValues={},e){if("string"==typeof e)this.setLocaleText(null,e);else for(var t in e){this.setLocaleText(t,e[t]);}this.strChanged();}},e.prototype.equals=function(e){return!(!e||!e.values)&&r.a.isTwoValueEquals(this.values,e.values);},e.prototype.onChanged=function(){this.onStrChanged&&this.onStrChanged();},e.prototype.onCreating=function(){},e.prototype.hasHtmlValue=function(){if(!this.owner||!this.useMarkdown)return!1;var t=this.text;if(!t)return!1;var n=this.locale;return n||(n=e.defaultLocale),n in this.htmlValues||(this.htmlValues[n]=this.owner.getMarkdownHtml(t)),!!this.htmlValues[n];},e.prototype.getHtmlValue=function(){var t=this.locale;return t||(t=e.defaultLocale),this.htmlValues[t];},e.prototype.deleteValuesEqualsToDefault=function(t){for(var n=Object.keys(this.values),r=0;r<n.length;r++){n[r]!=e.defaultLocale&&this.values[n[r]]==t&&delete this.values[n[r]];}},e.defaultLocale="default",e;}();},function(e,t,n){"use strict";var r=n(0),i=n(1),o=n(8),a=n(11),s=n(5),u=n(2),l=n(10),c=n(32),p=n(9);n.d(t,"b",function(){return d;}),n.d(t,"a",function(){return h;});var d=function(e){function t(t){var n=e.call(this,t)||this;n.visibleChoicesCache=null,n.filteredChoicesValue=null,n.otherItemValue=new a.a("other"),n.choicesFromUrl=null,n.cachedValueForUrlRequests=null,n.isSettingComment=!1,n.isFirstLoadChoicesFromUrl=!0;var r=n;n.choicesValues=n.createItemValues("choices"),n.registerFunctionOnPropertyValueChanged("choices",function(){r.filterItems()||r.onVisibleChoicesChanged();}),n.choicesByUrl=n.createRestfull(),n.choicesByUrl.owner=n;var i=n.createLocalizableString("otherText",n,!0);return n.createLocalizableString("otherErrorText",n,!0),n.otherItemValue.locOwner=n,n.otherItemValue.setLocText(i),i.onGetTextCallback=function(e){return e||u.a.getString("otherItemText");},n.choicesByUrl.getResultCallback=function(e){r.onLoadChoicesFromUrl(e);},n.choicesByUrl.updateResultCallback=function(e,t){return r.survey?r.survey.updateChoicesFromServer(r,e,t):e;},n;}return r.b(t,e),Object.defineProperty(t.prototype,"otherItem",{get:function get(){return this.otherItemValue;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isOtherSelected",{get:function get(){return this.getStoreOthersAsComment()?this.getHasOther(this.value):this.getHasOther(this.cachedValue);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"choicesVisibleIf",{get:function get(){return this.getPropertyValue("choicesVisibleIf","");},set:function set(e){this.setPropertyValue("choicesVisibleIf",e),this.filterItems();},enumerable:!0,configurable:!0}),t.prototype.runCondition=function(t,n){e.prototype.runCondition.call(this,t,n),this.runItemsCondition(t,n);},t.prototype.filterItems=function(){return!(this.isLoadingFromJson||!this.data||this.isDesignMode)&&this.runItemsCondition(this.getDataFilteredValues(),this.getDataFilteredProperties());},t.prototype.runItemsCondition=function(e,t){this.setConditionalChoicesRunner();var n=this.runConditionsForItems(e,t);return this.filteredChoicesValue.length===this.activeChoices.length&&(this.filteredChoicesValue=null),n&&(this.filteredChoicesValue&&this.clearIncorrectValues(),this.onVisibleChoicesChanged()),n;},t.prototype.setConditionalChoicesRunner=function(){this.choicesVisibleIf?(this.conditionChoicesVisibleIfRunner||(this.conditionChoicesVisibleIfRunner=new p.a(this.choicesVisibleIf)),this.conditionChoicesVisibleIfRunner.expression=this.choicesVisibleIf):this.conditionChoicesVisibleIfRunner=null;},t.prototype.runConditionsForItems=function(e,t){return this.filteredChoicesValue=[],a.a.runConditionsForItems(this.activeChoices,this.filteredChoices,this.conditionChoicesVisibleIfRunner,e,t);},t.prototype.getConditionRunnerByItem=function(e){var t=e.getConditionRunner();return t||this.conditionChoicesVisibleIfRunner;},t.prototype.getHasOther=function(e){return e==this.otherItem.value;},Object.defineProperty(t.prototype,"validatedValue",{get:function get(){return this.valueToDataCore(this.value);},enumerable:!0,configurable:!0}),t.prototype.createRestfull=function(){return new c.a();},t.prototype.getComment=function(){return this.getStoreOthersAsComment()?e.prototype.getComment.call(this):this.commentValue;},t.prototype.setComment=function(t){this.getStoreOthersAsComment()?e.prototype.setComment.call(this,t):this.isSettingComment||t==this.commentValue||(this.isSettingComment=!0,this.commentValue=t,this.isOtherSelected&&this.setNewValueInData(this.cachedValue),this.isSettingComment=!1);},t.prototype.setNewValue=function(t){(this.choicesByUrl.isRunning||this.choicesByUrl.isWaitingForParameters)&&this.isValueEmpty(t)||(this.cachedValueForUrlRequests=t),e.prototype.setNewValue.call(this,t);},t.prototype.valueFromData=function(t){return this.getStoreOthersAsComment()?e.prototype.valueFromData.call(this,t):(this.cachedValue=this.valueFromDataCore(t),this.cachedValue);},t.prototype.valueToData=function(t){return this.getStoreOthersAsComment()?e.prototype.valueToData.call(this,t):(this.cachedValue=t,this.valueToDataCore(t));},t.prototype.valueFromDataCore=function(e){return this.hasUnknownValue(e,!0)?(this.comment=e,this.otherItem.value):e;},t.prototype.valueToDataCore=function(e){return e==this.otherItem.value&&this.getComment()&&(e=this.getComment()),e;},t.prototype.hasUnknownValue=function(e,t){return void 0===t&&(t=!1),!!e&&(!t||e!=this.otherItem.value)&&null==a.a.getItemByValue(this.filteredChoices,e);},Object.defineProperty(t.prototype,"choices",{get:function get(){return this.choicesValues;},set:function set(e){this.setPropertyValue("choices",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"storeOthersAsComment",{get:function get(){return this.getPropertyValue("storeOthersAsComment",!0);},set:function set(e){this.setPropertyValue("storeOthersAsComment",e);},enumerable:!0,configurable:!0}),t.prototype.hasOtherChanged=function(){this.onVisibleChoicesChanged();},Object.defineProperty(t.prototype,"choicesOrder",{get:function get(){return this.getPropertyValue("choicesOrder","none");},set:function set(e){(e=e.toLowerCase())!=this.choicesOrder&&(this.setPropertyValue("choicesOrder",e),this.onVisibleChoicesChanged());},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"otherText",{get:function get(){return this.getLocalizableStringText("otherText",u.a.getString("otherItemText"));},set:function set(e){this.setLocalizableStringText("otherText",e),this.onVisibleChoicesChanged();},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locOtherText",{get:function get(){return this.getLocalizableString("otherText");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"otherErrorText",{get:function get(){return this.getLocalizableStringText("otherErrorText",u.a.getString("otherRequiredError"));},set:function set(e){this.setLocalizableStringText("otherErrorText",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locOtherErrorText",{get:function get(){return this.getLocalizableString("otherErrorText");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"visibleChoices",{get:function get(){return this.canUseFilteredChoices()?this.filteredChoices:(this.visibleChoicesCache||(this.visibleChoicesCache=this.sortVisibleChoices(this.filteredChoices.slice()),this.addToVisibleChoices(this.visibleChoicesCache)),this.visibleChoicesCache);},enumerable:!0,configurable:!0}),t.prototype.canUseFilteredChoices=function(){return!this.hasOther&&"none"==this.choicesOrder;},t.prototype.addToVisibleChoices=function(e){this.hasOther&&e.push(this.otherItem);},t.prototype.getDisplayValueCore=function(e){return this.isEmpty()?"":this.getChoicesDisplayValue(this.visibleChoices,this.value);},t.prototype.getChoicesDisplayValue=function(e,t){if(t==this.otherItemValue.value)return this.comment?this.comment:this.locOtherText.textOrHtml;var n=a.a.getTextOrHtmlByValue(e,t);return""==n&&t?t:n;},Object.defineProperty(t.prototype,"filteredChoices",{get:function get(){return this.filteredChoicesValue?this.filteredChoicesValue:this.activeChoices;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"activeChoices",{get:function get(){return this.choicesFromUrl?this.choicesFromUrl:this.choices;},enumerable:!0,configurable:!0}),t.prototype.supportComment=function(){return!0;},t.prototype.supportOther=function(){return!0;},t.prototype.onCheckForErrors=function(t){e.prototype.onCheckForErrors.call(this,t),this.hasOther&&this.isOtherSelected&&!this.comment&&t.push(new l.a(this.otherErrorText,this));},t.prototype.setSurveyImpl=function(t){e.prototype.setSurveyImpl.call(this,t),this.runChoicesByUrl();},t.prototype.getStoreOthersAsComment=function(){return this.storeOthersAsComment&&(null==this.survey||this.survey.storeOthersAsComment)||!this.choicesByUrl.isEmpty&&!this.choicesFromUrl;},t.prototype.onSurveyLoad=function(){e.prototype.onSurveyLoad.call(this),this.runChoicesByUrl(),this.onVisibleChoicesChanged();},t.prototype.onAnyValueChanged=function(t){e.prototype.onAnyValueChanged.call(this,t),t!=this.getValueName()&&this.runChoicesByUrl();},t.prototype.runChoicesByUrl=function(){if(this.choicesByUrl&&!this.isLoadingFromJson){var e=this.surveyImpl?this.surveyImpl.getTextProcessor():this.textProcessor;e||(e=this.survey),e&&this.choicesByUrl.run(e);}},t.prototype.onLoadChoicesFromUrl=function(e){var t=this.errors.length;this.errors=[],this.choicesByUrl&&this.choicesByUrl.error&&this.errors.push(this.choicesByUrl.error),(t>0||this.errors.length>0)&&this.fireCallback(this.errorsChangedCallback);var n=null,r=!0;this.isFirstLoadChoicesFromUrl&&!this.cachedValueForUrlRequests&&this.defaultValue&&(this.cachedValueForUrlRequests=this.defaultValue,r=!1),this.isFirstLoadChoicesFromUrl=!1;var i=this.createCachedValueForUrlRequests(this.cachedValueForUrlRequests,r);if(e&&e.length>0&&(n=new Array(),a.a.setData(n,e)),this.choicesFromUrl=n,this.onVisibleChoicesChanged(),n){var o=this.updateCachedValueForUrlRequests(i);o&&(this.value=o.value);}},t.prototype.createCachedValueForUrlRequests=function(e,t){if(this.isValueEmpty(e))return null;if(Array.isArray(e)){for(var n=[],r=0;r<e.length;r++){n.push(this.createCachedValueForUrlRequests(e[r],!0));}return n;}return{value:e,isExists:!t||!this.hasUnknownValue(e)};},t.prototype.updateCachedValueForUrlRequests=function(e){if(this.isValueEmpty(e))return null;if(Array.isArray(e)){for(var t=[],n=0;n<e.length;n++){var r=this.updateCachedValueForUrlRequests(e[n]);r&&!this.isValueEmpty(r.value)&&t.push(r.value);}return{value:t};}return{value:e.isExists&&this.hasUnknownValue(e.value)?null:e.value};},t.prototype.onVisibleChoicesChanged=function(){this.isLoadingFromJson||(this.visibleChoicesCache=null,this.fireCallback(this.choicesChangedCallback));},t.prototype.sortVisibleChoices=function(e){var t=this.choicesOrder.toLowerCase();return"asc"==t?this.sortArray(e,1):"desc"==t?this.sortArray(e,-1):"random"==t?this.randomizeArray(e):e;},t.prototype.sortArray=function(e,t){return e.sort(function(e,n){return e.text<n.text?-1*t:e.text>n.text?1*t:0;});},t.prototype.randomizeArray=function(e){return s.a.randomizeArray(e);},t.prototype.clearIncorrectValues=function(){var e=this.value;this.hasUnknownValue(e,!0)&&this.clearValue();},t.prototype.clearUnusedValues=function(){e.prototype.clearUnusedValues.call(this),this.isOtherSelected||this.hasComment||(this.comment=null);},t;}(o.a),h=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,n.colCountValue=1,n;}return r.b(t,e),Object.defineProperty(t.prototype,"colCount",{get:function get(){return this.colCountValue;},set:function set(e){e<0||e>5||(this.colCountValue=e,this.fireCallback(this.colCountChangedCallback));},enumerable:!0,configurable:!0}),t;}(d);i.a.metaData.addClass("selectbase",["hasComment:boolean","hasOther:boolean",{name:"choices:itemvalues",onGetValue:function onGetValue(e){return a.a.getData(e.choices);},onSetValue:function onSetValue(e,t){e.choices=t;}},{name:"choicesOrder",default:"none",choices:["none","asc","desc","random"]},{name:"choicesByUrl:restfull",className:"ChoicesRestfull",onGetValue:function onGetValue(e){return e.choicesByUrl.getData();},onSetValue:function onSetValue(e,t){e.choicesByUrl.setData(t);}},"choicesVisibleIf:condition",{name:"otherText",serializationProperty:"locOtherText"},{name:"otherErrorText",serializationProperty:"locOtherErrorText"},{name:"storeOthersAsComment:boolean",default:!0}],null,"question"),i.a.metaData.addClass("checkboxbase",[{name:"colCount:number",default:1,choices:[0,1,2,3,4,5]}],null,"selectbase");},function(e,t,n){"use strict";function r(e,t,n,r){e.hasOther&&(e.storeOthersAsComment=!1),e.choices&&0!=e.choices.length||!e.choicesByUrl.isEmpty||(e.choices=n.choices),e.choicesByUrl.isEmpty||e.choicesByUrl.run(r);}var i=n(0),o=n(1),a=n(8),s=n(5),u=n(4),l=n(18),c=n(13),p=n(11),d=n(2),h=n(3);n.d(t,"e",function(){return f;}),n.d(t,"d",function(){return m;}),n.d(t,"c",function(){return g;}),n.d(t,"b",function(){return y;}),n.d(t,"a",function(){return v;});var f={dropdown:{properties:["choices","choicesOrder","choicesByUrl","optionsCaption","otherText"],onCellQuestionUpdate:function onCellQuestionUpdate(e,t,n,i){r(e,t,n,i),e.optionsCaption||(e.optionsCaption=n.optionsCaption);}},checkbox:{properties:["choices","choicesOrder","choicesByUrl","otherText"],onCellQuestionUpdate:function onCellQuestionUpdate(e,t,n,i){r(e,t,n,i),e.colCount=t.colCount>-1?t.colCount:n.columnColCount;}},radiogroup:{properties:["choices","choicesOrder","choicesByUrl","otherText"],onCellQuestionUpdate:function onCellQuestionUpdate(e,t,n,i){r(e,t,n,i),e.colCount=t.colCount>-1?t.colCount:n.columnColCount;}},text:{properties:["placeHolder","inputType","maxLength"],onCellQuestionUpdate:function onCellQuestionUpdate(e,t,n,r){}},comment:{properties:["placeHolder","rows","maxLength"],onCellQuestionUpdate:function onCellQuestionUpdate(e,t,n,r){}},boolean:{properties:["defaultValue"],onCellQuestionUpdate:function onCellQuestionUpdate(e,t,n,r){e.showTitle=!0;}},expression:{properties:["expression"],onCellQuestionUpdate:function onCellQuestionUpdate(e,t,n,r){}}},m=function(e){function t(t,n){void 0===n&&(n=null);var r=e.call(this)||this;return r.colOwnerValue=null,r.indexValue=-1,r.updateTemplateQuestion(),r.name=t,n&&(r.title=n),r;}return i.b(t,e),t.getColumnTypes=function(){var e=[];for(var t in f){e.push(t);}return e;},t.prototype.getDynamicPropertyName=function(){return"cellType";},t.prototype.getDynamicType=function(){return this.calcCellQuestionType();},t.prototype.getDynamicProperties=function(){var e=this.calcCellQuestionType(),t=f[e];return t?t.properties:[];},Object.defineProperty(t.prototype,"colOwner",{get:function get(){return this.colOwnerValue;},set:function set(e){this.colOwnerValue=e,this.updateTemplateQuestion();},enumerable:!0,configurable:!0}),t.prototype.locStrsChanged=function(){e.prototype.locStrsChanged.call(this),this.locTitle.strChanged();},Object.defineProperty(t.prototype,"index",{get:function get(){return this.indexValue;},enumerable:!0,configurable:!0}),t.prototype.setIndex=function(e){this.indexValue=e;},t.prototype.getType=function(){return"matrixdropdowncolumn";},Object.defineProperty(t.prototype,"cellType",{get:function get(){return this.getPropertyValue("cellType","default");},set:function set(e){e=e.toLocaleLowerCase(),this.setPropertyValue("cellType",e),this.updateTemplateQuestion();},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"templateQuestion",{get:function get(){return this.templateQuestionValue;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"name",{get:function get(){return this.templateQuestion.name;},set:function set(e){this.templateQuestion.name=e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"title",{get:function get(){return this.templateQuestion.title;},set:function set(e){this.templateQuestion.title=e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locTitle",{get:function get(){return this.templateQuestion.locTitle;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"fullTitle",{get:function get(){return this.getFullTitle(this.locTitle.textOrHtml);},enumerable:!0,configurable:!0}),t.prototype.getFullTitle=function(e){if(e||(e=this.name),this.isRequired){var t=this.colOwner?this.colOwner.getRequiredText():"";t&&(t+=" "),e=t+e;}return e;},Object.defineProperty(t.prototype,"isRequired",{get:function get(){return this.templateQuestion.isRequired;},set:function set(e){this.templateQuestion.isRequired=e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"readOnly",{get:function get(){return this.templateQuestion.readOnly;},set:function set(e){this.templateQuestion.readOnly=e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"hasOther",{get:function get(){return this.templateQuestion.hasOther;},set:function set(e){this.templateQuestion.hasOther=e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"visibleIf",{get:function get(){return this.templateQuestion.visibleIf;},set:function set(e){this.templateQuestion.visibleIf=e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"enableIf",{get:function get(){return this.templateQuestion.enableIf;},set:function set(e){this.templateQuestion.enableIf=e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"validators",{get:function get(){return this.templateQuestion.validators;},set:function set(e){this.templateQuestion.validators=e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"minWidth",{get:function get(){return this.getPropertyValue("minWidth","");},set:function set(e){this.setPropertyValue("minWidth",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"colCount",{get:function get(){return this.getPropertyValue("colCount",-1);},set:function set(e){e<-1||e>4||this.setPropertyValue("colCount",e);},enumerable:!0,configurable:!0}),t.prototype.getLocale=function(){return this.colOwner?this.colOwner.getLocale():"";},t.prototype.getMarkdownHtml=function(e){return this.colOwner?this.colOwner.getMarkdownHtml(e):null;},t.prototype.getProcessedText=function(e){return this.colOwner?this.colOwner.getProcessedText(e):e;},t.prototype.createCellQuestion=function(e){var t=this.calcCellQuestionType(),n=this.createNewQuestion(t);return this.updateCellQuestion(n,e),n;},t.prototype.updateCellQuestion=function(e,t){this.setQuestionProperties(e);var n=this.calcCellQuestionType(),r=f[n];r&&r.onCellQuestionUpdate&&r.onCellQuestionUpdate(e,this,this.colOwner,t);},t.prototype.defaultCellTypeChanged=function(){this.updateTemplateQuestion();},t.prototype.calcCellQuestionType=function(){return"default"!==this.cellType?this.cellType:this.colOwner?this.colOwner.getCellType():"dropdown";},t.prototype.updateTemplateQuestion=function(){var e=this.templateQuestion?this.templateQuestion.getType():"",t=this.calcCellQuestionType();if(t!==e){this.templateQuestion&&this.removeProperties(e),this.templateQuestionValue=this.createNewQuestion(t),this.templateQuestion.locOwner=this,this.addProperties(t);var n=this;this.templateQuestion.locTitle.onGetTextCallback=function(e){return n.getFullTitle(e);},this.templateQuestion.onPropertyChanged.add(function(){n.doColumnPropertiesChanged();});}},t.prototype.createNewQuestion=function(e){var t=o.a.metaData.createClass(e);return this.setQuestionProperties(t),t;},t.prototype.setQuestionProperties=function(e){if(this.templateQuestion){var t=new o.a().toJsonObject(this.templateQuestion);t.type=e.getType(),new o.a().toObject(t,e);}},t.prototype.propertyValueChanged=function(t,n,r){e.prototype.propertyValueChanged.call(this,t,n,r),this.doColumnPropertiesChanged();},t.prototype.doColumnPropertiesChanged=function(){null==this.colOwner||this.isLoadingFromJson||this.colOwner.onColumnPropertiesChanged(this);},t.prototype.getProperties=function(e){var t=f[e];return t&&t.properties?o.a.metaData.findProperties(e,t.properties):[];},t.prototype.removeProperties=function(e){for(var t=this.getProperties(e),n=0;n<t.length;n++){var r=t[n];delete this[r.name],r.serializationProperty&&delete this[r.serializationProperty];}},t.prototype.addProperties=function(e){for(var t=this.templateQuestion,n=this.getProperties(e),r=0;r<n.length;r++){var i=n[r];this.addProperty(t,i.name,!1),i.serializationProperty&&this.addProperty(t,i.serializationProperty,!0);}},t.prototype.addProperty=function(e,t,n){var r={configurable:!0,get:function get(){return e[t];}};n||(r.set=function(n){e[t]=n;}),Object.defineProperty(this,t,r);},t;}(u.c),g=function(){function e(e,t,n){var r=this;this.column=e,this.row=t,this.data=n,this.questionValue=n.createQuestion(this.row,this.column),this.questionValue.validateValueCallback=function(){return n.validateCell(t,e.name,t.value);},o.b.getProperties(e.getType()).forEach(function(t){var n=t.name;void 0!==e[n]&&null==r.questionValue.getPropertyValue(n,null)&&(r.questionValue[n]=e[n]);}),Object.keys(e).forEach(function(e){}),this.questionValue.updateCustomWidget();}return Object.defineProperty(e.prototype,"question",{get:function get(){return this.questionValue;},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"value",{get:function get(){return this.question.value;},set:function set(e){this.question.value=e;},enumerable:!0,configurable:!0}),e.prototype.runCondition=function(e,t){this.question.runCondition(e,t);},e;}(),y=function(){function e(t,n){this.rowValues={},this.isSettingValue=!1,this.cells=[],this.data=t,this.value=n,this.textPreProcessor=new l.a();var r=this;this.textPreProcessor.onProcess=function(e){r.getProcessedTextValue(e);};for(var i=0;i<this.data.columns.length;i++){void 0===this.rowValues[this.data.columns[i].name]&&(this.rowValues[this.data.columns[i].name]=null);}this.idValue=e.getId();}return e.getId=function(){return"srow_"+e.idCounter++;},Object.defineProperty(e.prototype,"id",{get:function get(){return this.idValue;},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"rowName",{get:function get(){return null;},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"value",{get:function get(){return this.rowValues;},set:function set(e){if(this.isSettingValue=!0,this.rowValues={},null!=e)for(var t in e){this.rowValues[t]=e[t];}for(var n=0;n<this.cells.length;n++){this.cells[n].question.onSurveyValueChanged(this.getValue(this.cells[n].column.name));}this.isSettingValue=!1;},enumerable:!0,configurable:!0}),e.prototype.getAllValues=function(){return this.value;},e.prototype.getFilteredValues=function(){var e=this.getAllValues(),t={row:e};for(var n in e){t[n]=e[n];}return t;},e.prototype.getFilteredProperties=function(){return{survey:this.getSurvey()};},e.prototype.onReadOnlyChanged=function(){for(var e=0;e<this.cells.length;e++){this.cells[e].question.onReadOnlyChanged();}},e.prototype.onAnyValueChanged=function(e){for(var t=0;t<this.cells.length;t++){this.cells[t].question.onAnyValueChanged(e);}},e.prototype.getValue=function(e){return this.rowValues[e];},e.prototype.setValue=function(t,n){this.isSettingValue||(""===n&&(n=null),null!=n?this.rowValues[t]=n:delete this.rowValues[t],this.data.onRowChanged(this,t,this.value),this.onAnyValueChanged(e.RowVariableName));},e.prototype.getComment=function(e){var t=this.getValue(e+u.c.commentPrefix);return t||"";},e.prototype.setComment=function(e,t){this.setValue(e+u.c.commentPrefix,t);},Object.defineProperty(e.prototype,"isEmpty",{get:function get(){var e=this.value;if(s.a.isValueEmpty(e))return!0;for(var t in e){if(void 0!==e[t]&&null!==e[t])return!1;}return!0;},enumerable:!0,configurable:!0}),e.prototype.getQuestionByColumn=function(e){for(var t=0;t<this.cells.length;t++){if(this.cells[t].column==e)return this.cells[t].question;}return null;},e.prototype.getQuestionByColumnName=function(e){for(var t=0;t<this.cells.length;t++){if(this.cells[t].column.name==e)return this.cells[t].question;}return null;},e.prototype.clearIncorrectValues=function(){var e=this.value;for(var t in e){var n=this.getQuestionByColumnName(t);if(n){var r=n.value;n.clearIncorrectValues(),s.a.isTwoValueEquals(r,n.value)||this.setValue(t,n.value);}else this.setValue(t,null);}},e.prototype.getLocale=function(){return this.data?this.data.getLocale():"";},e.prototype.getMarkdownHtml=function(e){return this.data?this.data.getMarkdownHtml(e):null;},e.prototype.getProcessedText=function(e){return this.data?this.data.getProcessedText(e):e;},e.prototype.locStrsChanged=function(){for(var e=0;e<this.cells.length;e++){this.cells[e].question.locStrsChanged();}},e.prototype.runCondition=function(t,n){t[e.RowVariableName]=this.value,t[e.IndexVariableName]=this.rowIndex;for(var r=0;r<this.cells.length;r++){this.cells[r].runCondition(t,n);}},e.prototype.buildCells=function(){for(var e=this.data.columns,t=0;t<e.length;t++){var n=e[t];this.cells.push(this.createCell(n));}},e.prototype.createCell=function(e){return new g(e,this,this.data);},e.prototype.geSurveyData=function(){return this;},e.prototype.getSurvey=function(){return this.data?this.data.getSurvey():null;},Object.defineProperty(e.prototype,"rowIndex",{get:function get(){return this.data?this.data.getRowIndex(this)+1:-1;},enumerable:!0,configurable:!0}),e.prototype.getProcessedTextValue=function(t){var n=new c.a().getFirstName(t.name);if(t.isExists=n==e.RowVariableName,t.canProcess=t.isExists,t.isExists){var r={row:this.value};t.value=new c.a().getValue(t.name,r);}},e.prototype.getTextProcessor=function(){return this;},e.prototype.processText=function(e,t){return e=this.textPreProcessor.process(e,t),this.getSurvey()?this.getSurvey().processText(e,t):e;},e.prototype.processTextEx=function(e,t){if(e=this.processText(e,t),!this.getSurvey())return e;var n=this.textPreProcessor.hasAllValuesOnLastRun,r=this.getSurvey().processTextEx(e,t);return r.hasAllValuesOnLastRun=r.hasAllValuesOnLastRun&&n,r;},e.RowVariableName="row",e.IndexVariableName="rowIndex",e.idCounter=1,e;}(),v=function(e){function t(t){var n=e.call(this,t)||this;n.name=t,n.isRowChanging=!1,n.generatedVisibleRows=null,n.isDoingonAnyValueChanged=!1;var r=n;return n.columnsValue=n.createNewArray("columns",function(e){e.colOwner=r;}),n.choicesValue=n.createItemValues("choices"),n.createLocalizableString("optionsCaption",n),n.registerFunctionOnPropertyValueChanged("columns",function(e){r.updateColumnsIndexes(e),r.generatedVisibleRows=null,r.fireCallback(r.columnsChangedCallback);}),n.registerFunctionOnPropertiesValueChanged(["columnLayout","addRowLocation"],function(){r.fireCallback(r.columnLayoutChangedCallback);}),n.registerFunctionOnPropertyValueChanged("cellType",function(){r.generatedVisibleRows=null,r.fireCallback(r.columnsChangedCallback);}),n;}return i.b(t,e),t.addDefaultColumns=function(e){for(var t=h.a.DefaultColums,n=0;n<t.length;n++){e.addColumn(t[n]);}},t.prototype.getType=function(){return"matrixdropdownbase";},Object.defineProperty(t.prototype,"isRowsDynamic",{get:function get(){return!1;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isAllowTitleLeft",{get:function get(){return!1;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"columns",{get:function get(){return this.columnsValue;},set:function set(e){this.setPropertyValue("columns",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"columnLayout",{get:function get(){return this.getPropertyValue("columnLayout","horizontal");},set:function set(e){this.setPropertyValue("columnLayout",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"columnsLocation",{get:function get(){return this.columnLayout;},set:function set(e){this.columnLayout=e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isColumnLayoutHorizontal",{get:function get(){return"vertical"!=this.columnLayout;},enumerable:!0,configurable:!0}),t.prototype.onMatrixRowCreated=function(e){if(this.survey)for(var t={rowValue:e.value,row:e,column:null,columnName:null,cell:null,cellQuestion:null,value:null},n=0;n<this.columns.length;n++){t.column=this.columns[n],t.columnName=t.column.name;var r=e.cells[n];t.cell=r,t.cellQuestion=r.question,t.value=r.value,this.survey.matrixCellCreated(this,t);}},Object.defineProperty(t.prototype,"cellType",{get:function get(){return this.getPropertyValue("cellType","dropdown");},set:function set(e){e=e.toLowerCase(),this.cellType!=e&&(this.setPropertyValue("cellType",e),this.updateColumnsCellType(),this.fireCallback(this.updateCellsCallback));},enumerable:!0,configurable:!0}),t.prototype.updateColumnsCellType=function(){for(var e=0;e<this.columns.length;e++){this.columns[e].defaultCellTypeChanged();}},t.prototype.updateColumnsIndexes=function(e){for(var t=0;t<e.length;t++){e[t].setIndex(t);}},Object.defineProperty(t.prototype,"columnColCount",{get:function get(){return this.getPropertyValue("columnColCount",0);},set:function set(e){e<0||e>4||(this.setPropertyValue("columnColCount",e),this.fireCallback(this.updateCellsCallback));},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"columnMinWidth",{get:function get(){return this.getPropertyValue("columnMinWidth","");},set:function set(e){this.setPropertyValue("columnMinWidth",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"horizontalScroll",{get:function get(){return this.getPropertyValue("horizontalScroll",!1);},set:function set(e){this.setPropertyValue("horizontalScroll",e);},enumerable:!0,configurable:!0}),t.prototype.getRequiredText=function(){return this.survey?this.survey.requiredText:"";},t.prototype.onColumnPropertiesChanged=function(e){if(this.generatedVisibleRows)for(var t=0;t<this.generatedVisibleRows.length;t++){for(var n=this.generatedVisibleRows[t],r=0;r<n.cells.length;r++){if(n.cells[r].column===e){e.updateCellQuestion(n.cells[r].question,n);break;}}}},t.prototype.getCellType=function(){return this.cellType;},t.prototype.getConditionJson=function(t,n){if(void 0===t&&(t=null),void 0===n&&(n=null),!n)return e.prototype.getConditionJson.call(this);for(var r="",i=n.length-1;i>=0&&"."!=n[i];i--){r=n[i]+r;}var o=this.getColumnByName(r);if(!o)return null;var a=o.createCellQuestion(null);return a?a.getConditionJson(t):null;},t.prototype.clearIncorrectValues=function(){var e=this.visibleRows;if(e)for(var t=0;t<e.length;t++){e[t].clearIncorrectValues();}},t.prototype.runCondition=function(t,n){e.prototype.runCondition.call(this,t,n),this.runCellsCondition(t,n);},t.prototype.runCellsCondition=function(e,t){if(this.generatedVisibleRows){var n={};e&&e instanceof Object&&(n=JSON.parse(JSON.stringify(e))),n.row={};for(var r=this.generatedVisibleRows,i=0;i<r.length;i++){r[i].runCondition(n,t);}}},t.prototype.locStrsChanged=function(){e.prototype.locStrsChanged.call(this);for(var t=this.columns,n=0;n<t.length;n++){t[n].locStrsChanged();}var r=this.generatedVisibleRows;if(r)for(var n=0;n<r.length;n++){r[n].locStrsChanged();}},t.prototype.getColumnByName=function(e){for(var t=0;t<this.columns.length;t++){if(this.columns[t].name==e)return this.columns[t];}return null;},t.prototype.getColumnName=function(e){return this.getColumnByName(e);},t.prototype.getColumnWidth=function(e){return e.minWidth?e.minWidth:this.columnMinWidth;},Object.defineProperty(t.prototype,"choices",{get:function get(){return this.choicesValue;},set:function set(e){this.setPropertyValue("choices",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"optionsCaption",{get:function get(){return this.getLocalizableStringText("optionsCaption",d.a.getString("optionsCaption"));},set:function set(e){this.setLocalizableStringText("optionsCaption",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locOptionsCaption",{get:function get(){return this.getLocalizableString("optionsCaption");},enumerable:!0,configurable:!0}),t.prototype.addColumn=function(e,t){void 0===t&&(t=null);var n=new m(e,t);return this.columnsValue.push(n),n;},Object.defineProperty(t.prototype,"visibleRows",{get:function get(){if(!this.isLoadingFromJson){if(!this.generatedVisibleRows&&(this.generatedVisibleRows=this.generateRows(),this.data)){var e={survey:this.survey};this.runCellsCondition(this.data.getAllValues(),e);}return this.generatedVisibleRows;}},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"showHeader",{get:function get(){return this.getPropertyValue("showHeader",!0);},set:function set(e){this.setPropertyValue("showHeader",e);},enumerable:!0,configurable:!0}),t.prototype.onSurveyLoad=function(){e.prototype.onSurveyLoad.call(this),this.updateColumnsIndexes(this.columns),this.generatedVisibleRows=null;},t.prototype.getRowValue=function(e){if(e<0)return null;var t=this.visibleRows;if(e>=t.length)return null;var n=this.createNewValue(this.value);return this.getRowValueCore(t[e],n);},t.prototype.setRowValue=function(e,t){if(e<0)return null;var n=this.visibleRows;if(e>=n.length)return null;this.onRowChanged(n[e],"",t),this.onValueChanged();},t.prototype.generateRows=function(){return null;},t.prototype.createNewValue=function(e){return e||{};},t.prototype.getRowValueCore=function(e,t,n){void 0===n&&(n=!1);var r=t[e.rowName]?t[e.rowName]:null;return!r&&n&&(r={},t[e.rowName]=r),r;},t.prototype.getRowDisplayValue=function(e,t){for(var n=0;n<this.columns.length;n++){var r=this.columns[n];t[r.name]&&(t[r.name]=e.cells[n].question.displayValue);}return t;},t.prototype.onBeforeValueChanged=function(e){},t.prototype.onValueChanged=function(){if(!this.isRowChanging&&(this.onBeforeValueChanged(this.value),this.generatedVisibleRows&&0!=this.generatedVisibleRows.length)){this.isRowChanging=!0;for(var e=this.createNewValue(this.value),t=0;t<this.generatedVisibleRows.length;t++){var n=this.generatedVisibleRows[t];this.generatedVisibleRows[t].value=this.getRowValueCore(n,e);}this.isRowChanging=!1;}},t.prototype.supportGoNextPageAutomatic=function(){var e=this.generatedVisibleRows;if(e||(e=this.visibleRows),!e)return!0;for(var t=0;t<e.length;t++){var n=this.generatedVisibleRows[t].cells;if(n)for(var r=0;r<n.length;r++){var i=n[r].question;if(i&&(!i.supportGoNextPageAutomatic()||!i.value))return!1;}}return!0;},t.prototype.hasErrors=function(t){void 0===t&&(t=!0);var n=this.hasErrorInColumns(t);return e.prototype.hasErrors.call(this,t)||n;},t.prototype.getAllErrors=function(){for(var t=e.prototype.getAllErrors.call(this),n=this.generatedVisibleRows,r=0;r<n.length;r++){for(var i=n[r],o=0;o<i.cells.length;o++){var a=i.cells[o].question.getAllErrors();a&&a.length>0&&(t=t.concat(a));}}return t;},t.prototype.hasErrorInColumns=function(e){if(!this.generatedVisibleRows)return!1;for(var t=!1,n=0;n<this.generatedVisibleRows.length;n++){var r=this.generatedVisibleRows[n].cells;if(r)for(var i=0;i<this.columns.length;i++){if(r[i]){var o=r[i].question;t=o&&o.visible&&o.hasErrors(e)||t;}}}return t;},t.prototype.getFirstInputElementId=function(){var t=this.getFirstCellQuestion(!1);return t?t.inputId:e.prototype.getFirstInputElementId.call(this);},t.prototype.getFirstErrorInputElementId=function(){var t=this.getFirstCellQuestion(!0);return t?t.inputId:e.prototype.getFirstErrorInputElementId.call(this);},t.prototype.getFirstCellQuestion=function(e){if(!this.generatedVisibleRows)return null;for(var t=0;t<this.generatedVisibleRows.length;t++){for(var n=this.generatedVisibleRows[t].cells,r=0;r<this.columns.length;r++){if(!e)return n[r].question;if(n[r].question.currentErrorCount>0)return n[r].question;}}return null;},t.prototype.createQuestion=function(e,t){return this.createQuestionCore(e,t);},t.prototype.createQuestionCore=function(e,t){var n=t.createCellQuestion(e);return this.isReadOnly&&(n.readOnly=!0),n.setSurveyImpl(e),n;},t.prototype.deleteRowValue=function(e,t){return delete e[t.rowName],0==Object.keys(e).length?null:e;},t.prototype.onReadOnlyChanged=function(){if(!this.isLoadingFromJson)for(var e=this.visibleRows,t=0;t<e.length;t++){e[t].onReadOnlyChanged();}},t.prototype.onAnyValueChanged=function(e){if(!this.isLoadingFromJson&&!this.isDoingonAnyValueChanged){this.isDoingonAnyValueChanged=!0;for(var t=this.visibleRows,n=0;n<t.length;n++){t[n].onAnyValueChanged(e);}this.isDoingonAnyValueChanged=!1;}},t.prototype.onCellValueChanged=function(e,t,n){if(this.survey){var r=this,i=function i(t){for(var n=0;r.columns.length;n++){if(r.columns[n].name==t)return e.cells[n].question;}return null;},o={row:e,columnName:t,rowValue:n,value:n[t],getCellQuestion:i};this.survey.matrixCellValueChanged(this,o);}},t.prototype.validateCell=function(e,t,n){if(this.survey){var r={row:e,columnName:t,rowValue:n,value:n[t]};return this.survey.matrixCellValidate(this,r);}},t.prototype.onRowChanged=function(e,t,n){var r=this.createNewValue(this.value);this.isMatrixValueEmpty(r)&&(r=null);var i=this.createNewValue(this.value),o=this.getRowValueCore(e,i,!0);o||(o={});for(var a in o){delete o[a];}if(n){n=JSON.parse(JSON.stringify(n));for(var a in n){this.isValueEmpty(n[a])||(o[a]=n[a]);}}0==Object.keys(o).length&&(i=this.deleteRowValue(i,e)),this.isTwoValueEquals(r,i)||(this.isRowChanging=!0,this.setNewValue(i),this.isRowChanging=!1,t&&this.onCellValueChanged(e,t,o));},t.prototype.getRowIndex=function(e){return this.visibleRows.indexOf(e);},t.prototype.isMatrixValueEmpty=function(e){if(e){if(Array.isArray(e)){for(var t=0;t<e.length;t++){if(Object.keys(e[t]).length>0)return!1;}return!0;}return 0==Object.keys(e).length;}},t.prototype.getSurvey=function(){return this.survey;},t;}(a.a);o.a.metaData.addClass("matrixdropdowncolumn",["!name",{name:"title",serializationProperty:"locTitle"},{name:"cellType",default:"default",choices:function choices(){var e=m.getColumnTypes();return e.splice(0,0,"default"),e;}},{name:"colCount",default:-1,choices:[-1,0,1,2,3,4]},"isRequired:boolean","hasOther:boolean","readOnly:boolean","minWidth","visibleIf:condition","enableIf:condition",{name:"validators:validators",baseClassName:"surveyvalidator",classNamePart:"validator"}],function(){return new m("");}),o.a.metaData.addClass("matrixdropdownbase",[{name:"columns:matrixdropdowncolumns",className:"matrixdropdowncolumn"},{name:"columnLayout",alternativeName:"columnsLocation",default:"horizontal",choices:["horizontal","vertical"]},"horizontalScroll:boolean",{name:"choices:itemvalues",onGetValue:function onGetValue(e){return p.a.getData(e.choices);},onSetValue:function onSetValue(e,t){e.choices=t;}},{name:"optionsCaption",serializationProperty:"locOptionsCaption"},{name:"cellType",default:"dropdown",choices:function choices(){return m.getColumnTypes();}},{name:"columnColCount",default:0,choices:[0,1,2,3,4]},"columnMinWidth",{name:"showHeader:boolean",default:!0}],function(){return new v("");},"question");},function(e,t,n){"use strict";n.d(t,"a",function(){return o;});var r=function(){function e(){}return e;}(),i=function(){function e(e,t){this.name=e,this.returnDisplayValue=t,this.isExists=!1,this.canProcess=!0;}return e;}(),o=function(){function e(){this.hasAllValuesOnLastRunValue=!1;}return e.prototype.process=function(e,t){if(void 0===t&&(t=!1),this.hasAllValuesOnLastRunValue=!0,!e)return e;if(!this.onProcess)return e;for(var n=this.getItems(e),r=n.length-1;r>=0;r--){var o=n[r],a=this.getName(e.substring(o.start+1,o.end));if(a){var s=new i(a,t);this.onProcess(s),s.isExists?(null==s.value&&(s.value="",this.hasAllValuesOnLastRunValue=!1),e=e.substr(0,o.start)+s.value+e.substr(o.end+1)):s.canProcess&&(this.hasAllValuesOnLastRunValue=!1);}}return e;},Object.defineProperty(e.prototype,"hasAllValuesOnLastRun",{get:function get(){return this.hasAllValuesOnLastRunValue;},enumerable:!0,configurable:!0}),e.prototype.getItems=function(e){for(var t=[],n=e.length,i=-1,o="",a=0;a<n;a++){if(o=e[a],"{"==o&&(i=a),"}"==o){if(i>-1){var s=new r();s.start=i,s.end=a,t.push(s);}i=-1;}}return t;},e.prototype.getName=function(e){if(e)return e.trim();},e;}();},function(e,t,n){"use strict";var r=n(0),i=n(5),o=n(1),a=n(4),s=n(24),u=n(18),l=n(13),c=n(34),p=n(2),d=n(10),h=n(55),f=n(57);n.d(t,"a",function(){return m;});var m=function(e){function t(t){void 0===t&&(t=null);var n=e.call(this)||this;n.currentPageValue=null,n.valuesHash={},n.variablesHash={},n.localeValue="",n.isCompleted=!1,n.isStartedState=!1,n.isCompletedBefore=!1,n.isLoading=!1,n.completedStateValue="",n.completedStateTextValue="",n.isTimerStarted=!1,n.onCompleting=new a.b(),n.onComplete=new a.b(),n.onStarted=new a.b(),n.onPartialSend=new a.b(),n.onCurrentPageChanging=new a.b(),n.onCurrentPageChanged=new a.b(),n.onValueChanged=new a.b(),n.onVisibleChanged=new a.b(),n.onPageVisibleChanged=new a.b(),n.onPanelVisibleChanged=new a.b(),n.onQuestionAdded=new a.b(),n.onQuestionRemoved=new a.b(),n.onPanelAdded=new a.b(),n.onPanelRemoved=new a.b(),n.onPageAdded=new a.b(),n.onValidateQuestion=new a.b(),n.onValidatePanel=new a.b(),n.onProcessHtml=new a.b(),n.onGetQuestionTitle=new a.b(),n.onTextMarkdown=new a.b(),n.onSendResult=new a.b(),n.onGetResult=new a.b(),n.onUploadFiles=new a.b(),n.onDownloadFile=new a.b(),n.onClearFiles=new a.b(),n.onLoadChoicesFromServer=new a.b(),n.onUpdateQuestionCssClasses=new a.b(),n.onUpdatePanelCssClasses=new a.b(),n.onAfterRenderSurvey=new a.b(),n.onAfterRenderPage=new a.b(),n.onAfterRenderQuestion=new a.b(),n.onAfterRenderPanel=new a.b(),n.onMatrixRowAdded=new a.b(),n.onMatrixRowRemoved=new a.b(),n.onMatrixCellCreated=new a.b(),n.onMatrixAfterCellRender=new a.b(),n.onMatrixCellValueChanged=new a.b(),n.onMatrixCellValidate=new a.b(),n.onDynamicPanelAdded=new a.b(),n.onDynamicPanelRemoved=new a.b(),n.onTimer=new a.b(),n.onTimerPanelInfoText=new a.b(),n.onDynamicPanelItemValueChanged=new a.b(),n.onIsAnswerCorrect=new a.b(),n.jsonErrors=null,n.conditionVersion=0,n.origionalPages=null,n.timerFunc=null;var r=n;return n.createLocalizableString("title",n,!0),n.createLocalizableString("completedHtml",n),n.createLocalizableString("completedBeforeHtml",n),n.createLocalizableString("loadingHtml",n),n.createLocalizableString("startSurvey",n),n.createLocalizableString("pagePrev",n),n.createLocalizableString("pageNext",n),n.createLocalizableString("complete",n),n.createLocalizableString("questionTitleTemplate",n,!0),n.textPreProcessor=new u.a(),n.textPreProcessor.onProcess=function(e){r.getProcessedTextValue(e);},n.pagesValue=n.createNewArray("pages",function(e){r.doOnPageAdded(e);}),n.triggersValue=n.createNewArray("triggers",function(e){e.setOwner(r);}),n.registerFunctionOnPropertyValueChanged("firstPageIsStarted",function(){r.onFirstPageIsStartedChanged();}),n.registerFunctionOnPropertyValueChanged("isSinglePage",function(){r.onIsSinglePageChanged();}),n.onBeforeCreating(),t&&(("string"==typeof t||t instanceof String)&&(t=JSON.parse(t)),t&&t.clientId&&(n.clientId=t.clientId),n.setJsonObject(t),n.surveyId&&n.loadSurveyFromService(n.surveyId,n.clientId)),n.onCreating(),n;}return r.b(t,e),Object.defineProperty(t.prototype,"platformName",{get:function get(){return t.platform;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"commentPrefix",{get:function get(){return a.c.commentPrefix;},set:function set(e){a.c.commentPrefix=e;},enumerable:!0,configurable:!0}),t.prototype.getType=function(){return"survey";},Object.defineProperty(t.prototype,"pages",{get:function get(){return this.pagesValue;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"triggers",{get:function get(){return this.triggersValue;},set:function set(e){this.setPropertyValue("triggers",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"surveyId",{get:function get(){return this.getPropertyValue("surveyId","");},set:function set(e){this.setPropertyValue("surveyId",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"surveyPostId",{get:function get(){return this.getPropertyValue("surveyPostId","");},set:function set(e){this.setPropertyValue("surveyPostId",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"clientId",{get:function get(){return this.getPropertyValue("clientId","");},set:function set(e){this.setPropertyValue("clientId",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"cookieName",{get:function get(){return this.getPropertyValue("cookieName","");},set:function set(e){this.setPropertyValue("cookieName",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"sendResultOnPageNext",{get:function get(){return this.getPropertyValue("sendResultOnPageNext",!1);},set:function set(e){this.setPropertyValue("sendResultOnPageNext",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"surveyShowDataSaving",{get:function get(){return this.getPropertyValue("surveyShowDataSaving",!1);},set:function set(e){this.setPropertyValue("surveyShowDataSaving",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"focusFirstQuestionAutomatic",{get:function get(){return this.getPropertyValue("focusFirstQuestionAutomatic",!0);},set:function set(e){this.setPropertyValue("focusFirstQuestionAutomatic",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"showNavigationButtons",{get:function get(){return this.getPropertyValue("showNavigationButtons",!0);},set:function set(e){this.setPropertyValue("showNavigationButtons",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"showPrevButton",{get:function get(){return this.getPropertyValue("showPrevButton",!0);},set:function set(e){this.setPropertyValue("showPrevButton",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"showTitle",{get:function get(){return this.getPropertyValue("showTitle",!0);},set:function set(e){this.setPropertyValue("showTitle",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"showPageTitles",{get:function get(){return this.getPropertyValue("showPageTitles",!0);},set:function set(e){this.setPropertyValue("showPageTitles",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"showCompletedPage",{get:function get(){return this.getPropertyValue("showCompletedPage",!0);},set:function set(e){this.setPropertyValue("showCompletedPage",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"requiredText",{get:function get(){return this.getPropertyValue("requiredText","*");},set:function set(e){this.setPropertyValue("requiredText",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"questionStartIndex",{get:function get(){return this.getPropertyValue("questionStartIndex","");},set:function set(e){this.setPropertyValue("questionStartIndex",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"storeOthersAsComment",{get:function get(){return this.getPropertyValue("storeOthersAsComment",!0);},set:function set(e){this.setPropertyValue("storeOthersAsComment",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"maxTextLength",{get:function get(){return this.getPropertyValue("maxTextLength",0);},set:function set(e){this.setPropertyValue("maxTextLength",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"maxOthersLength",{get:function get(){return this.getPropertyValue("maxOthersLength",0);},set:function set(e){this.setPropertyValue("maxOthersLength",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"goNextPageAutomatic",{get:function get(){return this.getPropertyValue("goNextPageAutomatic",!1);},set:function set(e){this.setPropertyValue("goNextPageAutomatic",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"checkErrorsMode",{get:function get(){return this.getPropertyValue("checkErrorsMode","onNextPage");},set:function set(e){this.setPropertyValue("checkErrorsMode",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"clearInvisibleValues",{get:function get(){return this.getPropertyValue("clearInvisibleValues","onComplete");},set:function set(e){!0===e&&(e="onComplete"),!1===e&&(e="none"),this.setPropertyValue("clearInvisibleValues",e);},enumerable:!0,configurable:!0}),t.prototype.clearIncorrectValues=function(){for(var e=0;e<this.pages.length;e++){this.pages[e].clearIncorrectValues();}},Object.defineProperty(t.prototype,"locale",{get:function get(){return this.localeValue;},set:function set(e){this.localeValue=e,this.setPropertyValue("locale",e),p.a.currentLocale=e,this.locStrsChanged();},enumerable:!0,configurable:!0}),t.prototype.getLocale=function(){return this.locale;},t.prototype.locStrsChanged=function(){e.prototype.locStrsChanged.call(this),this.currentPage&&this.currentPage.locStrsChanged();},t.prototype.getMarkdownHtml=function(e){return this.getSurveyMarkdownHtml(this,e);},t.prototype.getProcessedText=function(e){return this.processText(e,!0);},t.prototype.getLocString=function(e){return p.a.getString(e);},Object.defineProperty(t.prototype,"emptySurveyText",{get:function get(){return this.getLocString("emptySurvey");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"title",{get:function get(){return this.getLocalizableStringText("title");},set:function set(e){this.setLocalizableStringText("title",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locTitle",{get:function get(){return this.getLocalizableString("title");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"completedHtml",{get:function get(){return this.getLocalizableStringText("completedHtml");},set:function set(e){this.setLocalizableStringText("completedHtml",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locCompletedHtml",{get:function get(){return this.getLocalizableString("completedHtml");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"completedBeforeHtml",{get:function get(){return this.getLocalizableStringText("completedBeforeHtml");},set:function set(e){this.setLocalizableStringText("completedBeforeHtml",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locCompletedBeforeHtml",{get:function get(){return this.getLocalizableString("completedBeforeHtml");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"loadingHtml",{get:function get(){return this.getLocalizableStringText("loadingHtml");},set:function set(e){this.setLocalizableStringText("loadingHtml",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locLoadingHtml",{get:function get(){return this.getLocalizableString("loadingHtml");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"startSurveyText",{get:function get(){return this.getLocalizableStringText("startSurvey",this.getLocString("startSurveyText"));},set:function set(e){this.setLocalizableStringText("startSurvey",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locStartSurveyText",{get:function get(){return this.getLocalizableString("startSurvey");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"pagePrevText",{get:function get(){return this.getLocalizableStringText("pagePrev",this.getLocString("pagePrevText"));},set:function set(e){this.setLocalizableStringText("pagePrev",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locPagePrevText",{get:function get(){return this.getLocalizableString("pagePrev");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"pageNextText",{get:function get(){return this.getLocalizableStringText("pageNext",this.getLocString("pageNextText"));},set:function set(e){this.setLocalizableStringText("pageNext",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locPageNextText",{get:function get(){return this.getLocalizableString("pageNext");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"completeText",{get:function get(){return this.getLocalizableStringText("complete",this.getLocString("completeText"));},set:function set(e){this.setLocalizableStringText("complete",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locCompleteText",{get:function get(){return this.getLocalizableString("complete");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"questionTitleTemplate",{get:function get(){return this.getLocalizableStringText("questionTitleTemplate");},set:function set(e){this.setLocalizableStringText("questionTitleTemplate",e);},enumerable:!0,configurable:!0}),t.prototype.getQuestionTitleTemplate=function(){return this.locQuestionTitleTemplate.textOrHtml;},Object.defineProperty(t.prototype,"locQuestionTitleTemplate",{get:function get(){return this.getLocalizableString("questionTitleTemplate");},enumerable:!0,configurable:!0}),t.prototype.getUpdatedQuestionTitle=function(e,t){if(this.onGetQuestionTitle.isEmpty)return t;var n={question:e,title:t};return this.onGetQuestionTitle.fire(this,n),n.title;},Object.defineProperty(t.prototype,"showPageNumbers",{get:function get(){return this.getPropertyValue("showPageNumbers",!1);},set:function set(e){e!==this.showPageNumbers&&(this.setPropertyValue("showPageNumbers",e),this.updateVisibleIndexes());},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"showQuestionNumbers",{get:function get(){return this.getPropertyValue("showQuestionNumbers","on");},set:function set(e){e=e.toLowerCase(),(e="onpage"===e?"onPage":e)!==this.showQuestionNumbers&&(this.setPropertyValue("showQuestionNumbers",e),this.updateVisibleIndexes());},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"showProgressBar",{get:function get(){return this.getPropertyValue("showProgressBar","off");},set:function set(e){this.setPropertyValue("showProgressBar",e.toLowerCase());},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isShowProgressBarOnTop",{get:function get(){return"top"===this.showProgressBar||"both"===this.showProgressBar;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isShowProgressBarOnBottom",{get:function get(){return"bottom"===this.showProgressBar||"both"===this.showProgressBar;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"processedTitle",{get:function get(){return this.locTitle.renderedHtml;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"questionTitleLocation",{get:function get(){return this.getPropertyValue("questionTitleLocation","top");},set:function set(e){this.setPropertyValue("questionTitleLocation",e.toLowerCase());},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"questionErrorLocation",{get:function get(){return this.getPropertyValue("questionErrorLocation","top");},set:function set(e){this.setPropertyValue("questionErrorLocation",e.toLowerCase());},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"mode",{get:function get(){return this.getPropertyValue("mode","edit");},set:function set(e){if((e=e.toLowerCase())!=this.mode&&("edit"==e||"display"==e)){this.setPropertyValue("mode",e);for(var t=0;t<this.pages.length;t++){this.pages[t].onReadOnlyChanged();}}},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"data",{get:function get(){var e={};for(var t in this.valuesHash){e[t]=this.valuesHash[t];}return e;},set:function set(e){if(this.valuesHash={},e)for(var t in e){this.setDataValueCore(this.valuesHash,t,e[t]);}this.checkTriggers(this.valuesHash,!1),this.notifyAllQuestionsOnValueChanged(),this.notifyElementsOnAnyValueOrVariableChanged(""),this.runConditions();},enumerable:!0,configurable:!0}),t.prototype.getAllValues=function(){return this.data;},t.prototype.getFilteredValues=function(){var e={};for(var t in this.variablesHash){e[t]=this.variablesHash[t];}for(var t in this.valuesHash){e[t]=this.valuesHash[t];}return e.conditionVersion=++this.conditionVersion,e;},t.prototype.getFilteredProperties=function(){return{survey:this};},t.prototype.setDataValueCore=function(e,t,n){e[t]=n;},t.prototype.deleteDataValueCore=function(e,t){delete e[t];},Object.defineProperty(t.prototype,"comments",{get:function get(){var e={};for(var t in this.valuesHash){t.indexOf(this.commentPrefix)>0&&(e[t]=this.valuesHash[t]);}return e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"visiblePages",{get:function get(){if(this.isDesignMode)return this.pages;for(var e=new Array(),t=0;t<this.pages.length;t++){this.pages[t].isVisible&&e.push(this.pages[t]);}return e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isEmpty",{get:function get(){return 0==this.pages.length;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"PageCount",{get:function get(){return this.pageCount;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"pageCount",{get:function get(){return this.pages.length;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"visiblePageCount",{get:function get(){return this.visiblePages.length;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"startedPage",{get:function get(){return this.firstPageIsStarted&&this.pages.length>0?this.pages[0]:null;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"currentPage",{get:function get(){var e=this.visiblePages;return null!=this.currentPageValue&&e.indexOf(this.currentPageValue)<0&&(this.currentPage=null),null==this.currentPageValue&&e.length>0&&(this.currentPage=e[0]),this.currentPageValue;},set:function set(e){var t=this.getPageByObject(e);if(!e||t){var n=this.visiblePages;if(!(null!=t&&n.indexOf(t)<0)&&t!=this.currentPageValue){var r=this.currentPageValue;this.currentPageChanging(t,r)&&(this.currentPageValue=t,t&&(t.updateCustomWidgets(),t.setWasShown(!0)),this.currentPageChanged(t,r));}}},enumerable:!0,configurable:!0}),t.prototype.getPageByObject=function(e){if(!e)return null;if("string"==typeof e||e instanceof String)return this.getPageByName(String(e));if(!isNaN(e)){var t=Number(e),n=this.visiblePages;return e<0||e>=n.length?null:n[t];}return e;},Object.defineProperty(t.prototype,"currentPageNo",{get:function get(){return this.visiblePages.indexOf(this.currentPage);},set:function set(e){var t=this.visiblePages;e<0||e>=t.length||(this.currentPage=t[e]);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"questionsOrder",{get:function get(){return this.getPropertyValue("questionsOrder","initial");},set:function set(e){this.setPropertyValue("questionsOrder",e);},enumerable:!0,configurable:!0}),t.prototype.focusFirstQuestion=function(){var e=this.currentPage;e&&(e.scrollToTop(),e.focusFirstQuestion());},t.prototype.scrollToTopOnPageChange=function(){var e=this.currentPage;e&&(e.scrollToTop(),this.focusFirstQuestionAutomatic&&e.focusFirstQuestion());},Object.defineProperty(t.prototype,"state",{get:function get(){return this.isLoading?"loading":this.isCompleted?"completed":this.isCompletedBefore?"completedbefore":!this.isDesignMode&&this.isEditMode&&this.isStartedState&&this.startedPage?"starting":this.currentPage?"running":"empty";},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"completedState",{get:function get(){return this.completedStateValue;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"completedStateText",{get:function get(){return this.completedStateTextValue;},enumerable:!0,configurable:!0}),t.prototype.setCompletedState=function(e,t){this.completedStateValue=e,t||("saving"==e&&(t=this.getLocString("savingData")),"error"==e&&(t=this.getLocString("savingDataError")),"success"==e&&(t=this.getLocString("savingDataSuccess"))),this.completedStateTextValue=t;},t.prototype.clear=function(e,t){void 0===e&&(e=!0),void 0===t&&(t=!0),e&&(this.data=null,this.variablesHash={}),this.timeSpent=0;for(var n=0;n<this.pages.length;n++){this.pages[n].timeSpent=0,this.pages[n].setWasShown(!1);}this.isCompleted=!1,this.isCompletedBefore=!1,this.isLoading=!1,this.isStartedState=this.firstPageIsStarted,t&&this.visiblePageCount>0&&(this.currentPage=this.visiblePages[0]),e&&this.updateValuesWithDefaults();},t.prototype.mergeValues=function(e,t){if(t&&e)for(var n in e){var r=e[n];r&&"object"==(typeof r==="undefined"?"undefined":_typeof(r))?(t[n]||(t[n]={}),this.mergeValues(r,t[n])):t[n]=r;}},t.prototype.updateValuesWithDefaults=function(){if(!this.isDesignMode&&!this.isLoading)for(var e=0;e<this.pages.length;e++){for(var t=this.pages[0].questions,n=0;n<t.length;n++){t[n].updateValueWithDefaults();}}},t.prototype.updateCustomWidgets=function(e){e&&e.updateCustomWidgets();},t.prototype.currentPageChanging=function(e,t){var n={oldCurrentPage:t,newCurrentPage:e,allowChanging:!0};return this.onCurrentPageChanging.fire(this,n),n.allowChanging;},t.prototype.currentPageChanged=function(e,t){this.onCurrentPageChanged.fire(this,{oldCurrentPage:t,newCurrentPage:e});},t.prototype.getProgress=function(){if(null==this.currentPage)return 0;var e=this.visiblePages.indexOf(this.currentPage)+1;return Math.ceil(100*e/this.visiblePageCount);},Object.defineProperty(t.prototype,"isNavigationButtonsShowing",{get:function get(){if(this.isDesignMode)return!1;var e=this.currentPage;return!!e&&("show"==e.navigationButtonsVisibility||"hide"!=e.navigationButtonsVisibility&&this.showNavigationButtons);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isEditMode",{get:function get(){return"edit"==this.mode;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isDisplayMode",{get:function get(){return"display"==this.mode;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isDesignMode",{get:function get(){return this.getPropertyValue("isDesignMode",!1);},enumerable:!0,configurable:!0}),t.prototype.setDesignMode=function(e){this.setPropertyValue("isDesignMode",e),this.onIsSinglePageChanged();},Object.defineProperty(t.prototype,"hasCookie",{get:function get(){if(!this.cookieName)return!1;var e=document.cookie;return e&&e.indexOf(this.cookieName+"=true")>-1;},enumerable:!0,configurable:!0}),t.prototype.setCookie=function(){this.cookieName&&(document.cookie=this.cookieName+"=true; expires=Fri, 31 Dec 9999 0:0:0 GMT");},t.prototype.deleteCookie=function(){this.cookieName&&(document.cookie=this.cookieName+"=;");},t.prototype.nextPage=function(){return!this.isLastPage&&(!this.isEditMode||!this.isCurrentPageHasErrors)&&!this.doServerValidation()&&(this.doNextPage(),!0);},Object.defineProperty(t.prototype,"isCurrentPageHasErrors",{get:function get(){return null==this.currentPage||this.currentPage.hasErrors(!0,!0);},enumerable:!0,configurable:!0}),t.prototype.prevPage=function(){if(this.isFirstPage)return!1;var e=this.visiblePages,t=e.indexOf(this.currentPage);this.currentPage=e[t-1];},t.prototype.completeLastPage=function(){return(!this.isEditMode||!this.isCurrentPageHasErrors)&&!this.doServerValidation()&&(this.doComplete(),!0);},Object.defineProperty(t.prototype,"isSinglePage",{get:function get(){return this.getPropertyValue("isSinglePage",!1);},set:function set(e){this.setPropertyValue("isSinglePage",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"firstPageIsStarted",{get:function get(){return this.getPropertyValue("firstPageIsStarted",!1);},set:function set(e){this.setPropertyValue("firstPageIsStarted",e);},enumerable:!0,configurable:!0}),t.prototype.isPageStarted=function(e){return this.firstPageIsStarted&&this.pages.length>0&&this.pages[0]===e;},t.prototype.onFirstPageIsStartedChanged=function(){0!=this.pages.length&&(this.isStartedState=this.firstPageIsStarted,this.pageVisibilityChanged(this.pages[0],!this.firstPageIsStarted));},t.prototype.onIsSinglePageChanged=function(){if(!this.isSinglePage||this.isDesignMode){if(this.origionalPages){this.pages.splice(0,this.pages.length);for(var e=0;e<this.origionalPages.length;e++){this.pages.push(this.origionalPages[e]);}}this.origionalPages=null;}else{this.origionalPages=this.pages.slice(0,this.pages.length);var t=this.firstPageIsStarted?1:0,n=this.createSinglePage(t),r=this.pages.length-t;this.pages.splice(t,r,n);}this.updateVisibleIndexes();},t.prototype.createSinglePage=function(e){var t=this.createNewPage("all");t.setSurveyImpl(this);for(var n=e;n<this.pages.length;n++){var r=this.pages[n],i=o.a.metaData.createClass("panel");t.addPanel(i);var a=new o.a().toJsonObject(r);new o.a().toObject(a,i);}return t;},Object.defineProperty(t.prototype,"isFirstPage",{get:function get(){return null==this.currentPage||0==this.visiblePages.indexOf(this.currentPage);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isShowPrevButton",{get:function get(){if(this.isFirstPage||!this.showPrevButton)return!1;var e=this.visiblePages[this.currentPageNo-1];return this.getPageMaxTimeToFinish(e)<=0;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isLastPage",{get:function get(){if(null==this.currentPage)return!0;var e=this.visiblePages;return e.indexOf(this.currentPage)==e.length-1;},enumerable:!0,configurable:!0}),t.prototype.doComplete=function(){var e={allowComplete:!0};if(this.onCompleting.fire(this,e),e.allowComplete){var t=this.hasCookie;this.stopTimer(),this.clearUnusedValues(),this.setCookie(),this.setCompleted();var n=this,r={showDataSaving:function showDataSaving(e){n.setCompletedState("saving",e);},showDataSavingError:function showDataSavingError(e){n.setCompletedState("error",e);},showDataSavingSuccess:function showDataSavingSuccess(e){n.setCompletedState("success",e);},showDataSavingClear:function showDataSavingClear(e){n.setCompletedState("","");}};this.onComplete.fire(this,r),!t&&this.surveyPostId&&this.sendResult();}},t.prototype.start=function(){this.firstPageIsStarted&&(this.isStartedState=!1,this.startTimerFromUI(),this.onStarted.fire(this,{}));},Object.defineProperty(t.prototype,"isValidatingOnServer",{get:function get(){return this.getPropertyValue("isValidatingOnServer",!1);},enumerable:!0,configurable:!0}),t.prototype.setIsValidatingOnServer=function(e){e!=this.isValidatingOnServer&&(this.setPropertyValue("isValidatingOnServer",e),this.onIsValidatingOnServerChanged());},t.prototype.onIsValidatingOnServerChanged=function(){},t.prototype.doServerValidation=function(){if(!this.onServerValidateQuestions)return!1;for(var e=this,t={data:{},errors:{},survey:this,complete:function complete(){e.completeServerValidation(t);}},n=0;n<this.currentPage.questions.length;n++){var r=this.currentPage.questions[n];if(r.visible){var i=this.getValue(r.getValueName());this.isValueEmpty(i)||(t.data[r.getValueName()]=i);}}return this.setIsValidatingOnServer(!0),this.onServerValidateQuestions(this,t),!0;},t.prototype.completeServerValidation=function(e){if(this.setIsValidatingOnServer(!1),e||e.survey){var t=e.survey,n=!1;if(e.errors)for(var r in e.errors){var i=t.getQuestionByName(r);i&&i.errors&&(n=!0,i.addError(new d.a(e.errors[r],this)));}n||(t.isLastPage?t.doComplete():t.doNextPage());}},t.prototype.doNextPage=function(){if(this.checkOnPageTriggers(),this.sendResultOnPageNext&&this.sendResult(this.surveyPostId,this.clientId,!0),!this.isCompleted){var e=this.visiblePages,t=e.indexOf(this.currentPage);this.currentPage=e[t+1];}},t.prototype.setCompleted=function(){this.isCompleted=!0;},Object.defineProperty(t.prototype,"processedCompletedHtml",{get:function get(){return this.completedHtml?this.processHtml(this.completedHtml):"<h3>"+this.getLocString("completingSurvey")+"</h3>";},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"processedCompletedBeforeHtml",{get:function get(){return this.completedBeforeHtml?this.processHtml(this.completedBeforeHtml):"<h3>"+this.getLocString("completingSurveyBefore")+"</h3>";},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"processedLoadingHtml",{get:function get(){return this.loadingHtml?this.processHtml(this.loadingHtml):"<h3>"+this.getLocString("loadingSurvey")+"</h3>";},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"progressText",{get:function get(){if(null==this.currentPage)return"";var e=this.visiblePages,t=e.indexOf(this.currentPage)+1;return this.getLocString("progressText").format(t,e.length);},enumerable:!0,configurable:!0}),t.prototype.afterRenderSurvey=function(e){this.onAfterRenderSurvey.fire(this,{survey:this,htmlElement:e});},t.prototype.updateQuestionCssClasses=function(e,t){this.onUpdateQuestionCssClasses.fire(this,{question:e,cssClasses:t});},t.prototype.updatePanelCssClasses=function(e,t){this.onUpdatePanelCssClasses.fire(this,{panel:e,cssClasses:t});},t.prototype.afterRenderPage=function(e){this.onAfterRenderPage.isEmpty||this.onAfterRenderPage.fire(this,{page:this.currentPage,htmlElement:e});},t.prototype.afterRenderQuestion=function(e,t){this.onAfterRenderQuestion.fire(this,{question:e,htmlElement:t});},t.prototype.afterRenderPanel=function(e,t){this.onAfterRenderPanel.fire(this,{panel:e,htmlElement:t});},t.prototype.matrixRowAdded=function(e){this.onMatrixRowAdded.fire(this,{question:e});},t.prototype.matrixRowRemoved=function(e,t,n){this.onMatrixRowRemoved.fire(this,{question:e,rowIndex:t,row:n});},t.prototype.matrixCellCreated=function(e,t){t.question=e,this.onMatrixCellCreated.fire(this,t);},t.prototype.matrixAfterCellRender=function(e,t){t.question=e,this.onMatrixAfterCellRender.fire(this,t);},t.prototype.matrixCellValueChanged=function(e,t){t.question=e,this.onMatrixCellValueChanged.fire(this,t);},t.prototype.matrixCellValidate=function(e,t){return t.question=e,this.onMatrixCellValidate.fire(this,t),t.error?new d.a(t.error,this):null;},t.prototype.dynamicPanelAdded=function(e){this.onDynamicPanelAdded.fire(this,{question:e});},t.prototype.dynamicPanelRemoved=function(e,t){this.onDynamicPanelRemoved.fire(this,{question:e,panelIndex:t});},t.prototype.dynamicPanelItemValueChanged=function(e,t){t.question=e,this.onDynamicPanelItemValueChanged.fire(this,t);},t.prototype.uploadFiles=function(e,t,n){this.onUploadFiles.isEmpty?n("error",t):this.onUploadFiles.fire(this,{name:e,files:t||[],callback:n}),this.surveyPostId&&this.uploadFilesCore(e,t,n);},t.prototype.downloadFile=function(e,t,n){this.onDownloadFile.isEmpty&&!!n&&n("success",t),this.onDownloadFile.fire(this,{name:name,content:t,callback:n});},t.prototype.clearFiles=function(e,t,n){this.onClearFiles.isEmpty&&!!n&&n("success",t),this.onClearFiles.fire(this,{name:e,value:t,callback:n});},t.prototype.updateChoicesFromServer=function(e,t,n){var r={question:e,choices:t,serverResult:n};return this.onLoadChoicesFromServer.fire(this,r),r.choices;},t.prototype.createSurveyService=function(){return new c.a();},t.prototype.uploadFilesCore=function(e,t,n){var r=this,i=[];t.forEach(function(e){n&&n("uploading",e),r.createSurveyService().sendFile(r.surveyPostId,e,function(r,o){r?(i.push({content:o,file:e}),i.length===t.length&&n&&n("success",i)):n&&n("error",{response:o,file:e});});});},t.prototype.getPage=function(e){return this.pages[e];},t.prototype.addPage=function(e){null!=e&&(this.pages.push(e),this.updateVisibleIndexes());},t.prototype.addNewPage=function(e){void 0===e&&(e=null);var t=this.createNewPage(e);return this.addPage(t),t;},t.prototype.removePage=function(e){var t=this.pages.indexOf(e);t<0||(this.pages.splice(t,1),this.currentPageValue==e&&(this.currentPage=this.pages.length>0?this.pages[0]:null),this.updateVisibleIndexes());},t.prototype.getQuestionByName=function(e,t){void 0===t&&(t=!1);var n=this.getAllQuestions();t&&(e=e.toLowerCase());for(var r=0;r<n.length;r++){var i=n[r].name;if(t&&(i=i.toLowerCase()),i==e)return n[r];}return null;},t.prototype.getQuestionByValueName=function(e,t){void 0===t&&(t=!1);var n=this.getAllQuestions();t&&(e=e.toLowerCase());for(var r=0;r<n.length;r++){var i=n[r].getValueName();if(t&&(i=i.toLowerCase()),i==e)return n[r];}return null;},t.prototype.getQuestionsByNames=function(e,t){void 0===t&&(t=!1);var n=[];if(!e)return n;for(var r=0;r<e.length;r++){if(e[r]){var i=this.getQuestionByName(e[r],t);i&&n.push(i);}}return n;},t.prototype.getPageByElement=function(e){for(var t=0;t<this.pages.length;t++){var n=this.pages[t];if(n.containsElement(e))return n;}return null;},t.prototype.getPageByQuestion=function(e){return this.getPageByElement(e);},t.prototype.getPageByName=function(e){for(var t=0;t<this.pages.length;t++){if(this.pages[t].name==e)return this.pages[t];}return null;},t.prototype.getPagesByNames=function(e){var t=[];if(!e)return t;for(var n=0;n<e.length;n++){if(e[n]){var r=this.getPageByName(e[n]);r&&t.push(r);}}return t;},t.prototype.getAllQuestions=function(e,t){void 0===e&&(e=!1),void 0===t&&(t=!1);for(var n=new Array(),r=0;r<this.pages.length;r++){this.pages[r].addQuestionsToList(n,e,t);}return n;},t.prototype.getQuizQuestions=function(){for(var e=new Array(),t=this.firstPageIsStarted?1:0,n=t;n<this.pages.length;n++){if(this.pages[n].isVisible)for(var r=this.pages[n].questions,i=0;i<r.length;i++){var o=r[i];o.isVisible&&o.hasInput&&e.push(o);}}return e;},t.prototype.getPanelByName=function(e,t){void 0===t&&(t=!1);var n=this.getAllPanels();t&&(e=e.toLowerCase());for(var r=0;r<n.length;r++){var i=n[r].name;if(t&&(i=i.toLowerCase()),i==e)return n[r];}return null;},t.prototype.getAllPanels=function(e,t){void 0===e&&(e=!1),void 0===t&&(t=!1);for(var n=new Array(),r=0;r<this.pages.length;r++){this.pages[r].addPanelsIntoList(n,e,t);}return n;},t.prototype.createNewPage=function(e){return new s.a(e);},t.prototype.notifyQuestionOnValueChanged=function(e,t){if(!this.isLoadingFromJson){for(var n=this.getAllQuestions(),r=null,i=0;i<n.length;i++){n[i].getValueName()==e&&(r=n[i],"onValueChanged"==this.checkErrorsMode&&r.hasErrors(!0),this.doSurveyValueChanged(r,t),this.onValueChanged.fire(this,{name:e,question:r,value:t}));}r||this.onValueChanged.fire(this,{name:e,question:null,value:t}),this.notifyElementsOnAnyValueOrVariableChanged(e);}},t.prototype.notifyElementsOnAnyValueOrVariableChanged=function(e){for(var t=0;t<this.pages.length;t++){this.pages[t].onAnyValueChanged(e);}this.locStrsChanged();},t.prototype.notifyAllQuestionsOnValueChanged=function(){for(var e=this.getAllQuestions(),t=0;t<e.length;t++){this.doSurveyValueChanged(e[t],this.getValue(e[t].getValueName()));}},t.prototype.doSurveyValueChanged=function(e,t){e.onSurveyValueChanged(t);},t.prototype.checkOnPageTriggers=function(){for(var e=this.getCurrentPageQuestions(),t={},n=0;n<e.length;n++){var r=e[n],i=r.getValueName();t[i]=this.getValue(i);}this.checkTriggers(t,!0);},t.prototype.getCurrentPageQuestions=function(){var e=[],t=this.currentPage;if(!t)return e;for(var n=0;n<t.questions.length;n++){var r=t.questions[n];r.visible&&r.name&&e.push(r);}return e;},t.prototype.checkTriggers=function(e,t){for(var n=this.getFilteredValues(),r=this.getFilteredProperties(),i=0;i<this.triggers.length;i++){var o=this.triggers[i];o.isOnNextPage==t&&o.checkExpression(e,n,r);}},t.prototype.doElementsOnLoad=function(){for(var e=0;e<this.pages.length;e++){this.pages[e].onSurveyLoad();}},t.prototype.runConditions=function(){for(var e=this.pages,t=this.getFilteredValues(),n=this.getFilteredProperties(),r=0;r<e.length;r++){e[r].runCondition(t,n);}},t.prototype.sendResult=function(e,t,n){if(void 0===e&&(e=null),void 0===t&&(t=null),void 0===n&&(n=!1),this.isEditMode&&(n&&this.onPartialSend&&this.onPartialSend.fire(this,null),!e&&this.surveyPostId&&(e=this.surveyPostId),e&&(t&&(this.clientId=t),!n||this.clientId))){var r=this;this.surveyShowDataSaving&&this.setCompletedState("saving",""),this.createSurveyService().sendResult(e,this.data,function(e,t){r.surveyShowDataSaving&&(e?r.setCompletedState("success",""):r.setCompletedState("error","")),r.onSendResult.fire(r,{success:e,response:t});},this.clientId,n);}},t.prototype.getResult=function(e,t){var n=this;this.createSurveyService().getResult(e,t,function(e,t,r,i){n.onGetResult.fire(n,{success:e,data:t,dataList:r,response:i});});},t.prototype.loadSurveyFromService=function(e,t){void 0===e&&(e=null),void 0===t&&(t=null),e&&(this.surveyId=e),t&&(this.clientId=t);var n=this;this.isLoading=!0,this.onLoadingSurveyFromService(),t?this.createSurveyService().getSurveyJsonAndIsCompleted(this.surveyId,this.clientId,function(e,t,r,i){n.isLoading=!1,e&&(n.isCompletedBefore="completed"==r,n.loadSurveyFromServiceJson(t));}):this.createSurveyService().loadSurvey(this.surveyId,function(e,t,r){n.isLoading=!1,e&&n.loadSurveyFromServiceJson(t);});},t.prototype.loadSurveyFromServiceJson=function(e){e&&(this.setJsonObject(e),this.notifyAllQuestionsOnValueChanged(),this.onLoadSurveyFromService());},t.prototype.onLoadingSurveyFromService=function(){},t.prototype.onLoadSurveyFromService=function(){},t.prototype.checkPageVisibility=function(e,t){var n=this.getPageByQuestion(e);if(n){var r=n.isVisible;(r!=n.getIsPageVisible(e)||t)&&this.pageVisibilityChanged(n,r);}},t.prototype.updateVisibleIndexes=function(){if(this.updatePageVisibleIndexes(this.showPageNumbers),"onPage"==this.showQuestionNumbers)for(var e=this.visiblePages,t=0;t<e.length;t++){e[t].setVisibleIndex(0);}else for(var n="on"==this.showQuestionNumbers?0:-1,t=0;t<this.pages.length;t++){n+=this.pages[t].setVisibleIndex(n);}},t.prototype.updatePageVisibleIndexes=function(e){for(var t=0,n=0;n<this.pages.length;n++){this.pages[n].visibleIndex=this.pages[n].visible?t++:-1,this.pages[n].num=e&&this.pages[n].visible?this.pages[n].visibleIndex+1:-1;}},t.prototype.setJsonObject=function(e){if(e){this.jsonErrors=null;var t=new o.a();t.toObject(e,this),t.errors.length>0&&(this.jsonErrors=t.errors);}},t.prototype.endLoadingFromJson=function(){this.isStartedState=this.firstPageIsStarted,this.onIsSinglePageChanged(),this.runConditions(),this.updateVisibleIndexes(),e.prototype.endLoadingFromJson.call(this),this.hasCookie&&this.doComplete(),this.doElementsOnLoad();},t.prototype.onBeforeCreating=function(){},t.prototype.onCreating=function(){},t.prototype.getProcessedTextValue=function(e){var t=e.name.toLocaleLowerCase();if("pageno"===t){e.isExists=!0;var n=this.currentPage;return void(e.value=null!=n?this.visiblePages.indexOf(n)+1:0);}if("pagecount"===t)return e.isExists=!0,void(e.value=this.visiblePageCount);if("correctedanswers"===t||"correctedanswercount"===t)return e.isExists=!0,void(e.value=this.getCorrectedAnswerCount());if("incorrectedanswers"===t||"incorrectedanswercount"===t)return e.isExists=!0,void(e.value=this.getInCorrectedAnswerCount());if("questioncount"===t)return e.isExists=!0,void(e.value=this.getQuizQuestions().length);var r=new l.a().getFirstName(t),i=this.getVariable(t);if(void 0!==i)return e.isExists=!0,void(e.value=i);var o=this.getQuestionByValueName(r,!0);if(o){e.isExists=!0,t=o.getValueName()+t.substr(r.length),t=t.toLocaleLowerCase();var a={};return a[r]=e.returnDisplayValue?o.getDisplayValue(!1):o.value,void(e.value=new l.a().getValue(t,a));}var s=this.getValue(e.name);void 0!==s&&(e.isExists=!0,e.value=s);},t.prototype.clearUnusedValues=function(){for(var e=this.getAllQuestions(),t=0;t<e.length;t++){e[t].clearUnusedValues();}"none"!=this.clearInvisibleValues&&this.clearInvisibleQuestionValues();},t.prototype.hasVisibleQuestionByValueName=function(e){for(var t=this.getAllQuestions(),n=0;n<t.length;n++){if(t[n].getValueName()==e&&t[n].isVisible)return!0;}return!1;},t.prototype.clearInvisibleQuestionValues=function(){for(var e=this.getAllQuestions(),t=0;t<e.length;t++){e[t].clearValueIfInvisible();}},t.prototype.getVariable=function(e){return e?(e=e.toLowerCase(),this.variablesHash[e]):null;},t.prototype.setVariable=function(e,t){e&&(e=e.toLowerCase(),this.variablesHash[e]=t,this.notifyElementsOnAnyValueOrVariableChanged(e),this.runConditions());},t.prototype.getUnbindValue=function(e){return i.a.getUnbindValue(e);},t.prototype.getValue=function(e){if(!e||0==e.length)return null;var t=this.valuesHash[e];return this.getUnbindValue(t);},t.prototype.setValue=function(e,t){if(!this.isValueEqual(e,t)){this.isValueEmpty(t)?this.deleteDataValueCore(this.valuesHash,e):(t=this.getUnbindValue(t),this.setDataValueCore(this.valuesHash,e,t)),this.notifyQuestionOnValueChanged(e,t);var n={};n[e]=t,this.checkTriggers(n,!1),this.runConditions(),this.tryGoNextPageAutomatic(e);}},t.prototype.isValueEqual=function(e,t){""!==t&&void 0!==t||(t=null);var n=this.getValue(e);return null===t||null===n?t===n:this.isTwoValueEquals(t,n);},t.prototype.doOnPageAdded=function(e){e.setSurveyImpl(this),e.name||(e.name=this.generateNewName(this.pages,"page"));var t={page:e};this.onPageAdded.fire(this,t);},t.prototype.generateNewName=function(e,t){for(var n={},r=0;r<e.length;r++){n[e[r].name]=!0;}for(var i=1;n[t+i];){i++;}return t+i;},t.prototype.tryGoNextPageAutomatic=function(e){if(this.goNextPageAutomatic&&this.currentPage){var t=this.getQuestionByValueName(e);if(!t||t.visible&&t.supportGoNextPageAutomatic()){for(var n=this.getCurrentPageQuestions(),r=0;r<n.length;r++){var i=this.getValue(n[r].getValueName());if(n[r].hasInput&&this.isValueEmpty(i))return;}this.currentPage.hasErrors(!0,!1)||(this.isLastPage?!0===this.goNextPageAutomatic&&this.completeLastPage():this.nextPage());}}},t.prototype.getComment=function(e){var t=this.data[e+this.commentPrefix];return null==t&&(t=""),t;},t.prototype.setComment=function(e,t){var n=e+this.commentPrefix;""===t||null===t?this.deleteDataValueCore(this.valuesHash,n):(this.setDataValueCore(this.valuesHash,n,t),this.tryGoNextPageAutomatic(e));var r=this.getQuestionByName(e);r&&this.onValueChanged.fire(this,{name:n,question:r,value:t});},t.prototype.clearValue=function(e){this.setValue(e,null),this.setComment(e,null);},t.prototype.questionVisibilityChanged=function(e,t){this.updateVisibleIndexes(),this.onVisibleChanged.fire(this,{question:e,name:e.name,visible:t}),this.checkPageVisibility(e,!t),e&&!e.visible&&"onHidden"==this.clearInvisibleValues&&e.clearValue();},t.prototype.pageVisibilityChanged=function(e,t){this.updateVisibleIndexes(),this.onPageVisibleChanged.fire(this,{page:e,visible:t});},t.prototype.panelVisibilityChanged=function(e,t){this.updateVisibleIndexes(),this.onPanelVisibleChanged.fire(this,{panel:e,visible:t});},t.prototype.questionAdded=function(e,t,n,r){e.name||(e.name=this.generateNewName(this.getAllQuestions(!1,!0),"question")),this.updateVisibleIndexes(),this.onQuestionAdded.fire(this,{question:e,name:e.name,index:t,parentPanel:n,rootPanel:r});},t.prototype.questionRemoved=function(e){this.updateVisibleIndexes(),this.onQuestionRemoved.fire(this,{question:e,name:e.name});},t.prototype.panelAdded=function(e,t,n,r){e.name||(e.name=this.generateNewName(this.getAllPanels(!1,!0),"panel")),this.updateVisibleIndexes(),this.onPanelAdded.fire(this,{panel:e,name:e.name,index:t,parentPanel:n,rootPanel:r});},t.prototype.panelRemoved=function(e){this.updateVisibleIndexes(),this.onPanelRemoved.fire(this,{panel:e,name:e.name});},t.prototype.validateQuestion=function(e){if(this.onValidateQuestion.isEmpty)return null;var t={name:e.name,question:e,value:e.value,error:null};return this.onValidateQuestion.fire(this,t),t.error?new d.a(t.error,this):null;},t.prototype.validatePanel=function(e){if(this.onValidatePanel.isEmpty)return null;var t={name:e.name,panel:e,error:null};return this.onValidatePanel.fire(this,t),t.error?new d.a(t.error,this):null;},t.prototype.processHtml=function(e){var t={html:e};return this.onProcessHtml.fire(this,t),this.processText(t.html,!0);},t.prototype.processText=function(e,t){return this.textPreProcessor.process(e,t);},t.prototype.processTextEx=function(e,t){var n={text:this.textPreProcessor.process(e,t),hasAllValuesOnLastRun:!0};return n.hasAllValuesOnLastRun=this.textPreProcessor.hasAllValuesOnLastRun,n;},t.prototype.getSurveyMarkdownHtml=function(e,t){var n={element:e,text:t,html:null};return this.onTextMarkdown.fire(this,n),n.html;},t.prototype.getCorrectedAnswerCount=function(){for(var e=this.getQuizQuestions(),t=0,n={question:null,result:!1},r=0;r<e.length;r++){n.question=e[r],n.result=n.question.isAnswerCorrect(),this.onIsAnswerCorrect.fire(this,n),n.result&&t++;}return t;},t.prototype.getInCorrectedAnswerCount=function(){return this.getQuizQuestions().length-this.getCorrectedAnswerCount();},t.prototype.getCorrectedAnswers=function(){return this.getCorrectedAnswerCount();},t.prototype.getInCorrectedAnswers=function(){return this.getInCorrectedAnswerCount();},Object.defineProperty(t.prototype,"showTimerPanel",{get:function get(){return this.getPropertyValue("showTimerPanel","none");},set:function set(e){this.setPropertyValue("showTimerPanel",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isTimerPanelShowingOnTop",{get:function get(){return this.isTimerStarted&&"top"==this.showTimerPanel;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isTimerPanelShowingOnBottom",{get:function get(){return this.isTimerStarted&&"bottom"==this.showTimerPanel;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"showTimerPanelMode",{get:function get(){return this.getPropertyValue("showTimerPanelMode","all");},set:function set(e){this.setPropertyValue("showTimerPanelMode",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"timerInfoText",{get:function get(){var e={text:this.getTimerInfoText()};return this.onTimerPanelInfoText.fire(this,e),e.text;},enumerable:!0,configurable:!0}),t.prototype.getTimerInfoText=function(){var e=this.currentPage;if(!e)return"";var t=this.getDisplayTime(e.timeSpent),n=this.getDisplayTime(this.timeSpent),r=this.getPageMaxTimeToFinish(e),i=this.getDisplayTime(r),o=this.getDisplayTime(this.maxTimeToFinish);if("page"==this.showTimerPanelMode)return this.getTimerInfoPageText(e,t,i);if("survey"==this.showTimerPanelMode)return this.getTimerInfoSurveyText(n,o);if("all"==this.showTimerPanelMode){if(r<=0&&this.maxTimeToFinish<=0)return this.getLocString("timerSpentAll").format(t,n);if(r>0&&this.maxTimeToFinish>0)return this.getLocString("timerLimitAll").format(t,i,n,o);return this.getTimerInfoPageText(e,t,i)+" "+this.getTimerInfoSurveyText(n,o);}return"";},t.prototype.getTimerInfoPageText=function(e,t,n){return this.getPageMaxTimeToFinish(e)>0?this.getLocString("timerLimitPage").format(t,n):this.getLocString("timerSpentPage").format(t,n);},t.prototype.getTimerInfoSurveyText=function(e,t){return this.maxTimeToFinish>0?this.getLocString("timerLimitSurvey").format(e,t):this.getLocString("timerSpentSurvey").format(e,t);},t.prototype.getDisplayTime=function(e){var t=Math.floor(e/60),n=e%60,r="";return t>0&&(r+=t+" "+this.getLocString("timerMin")),r&&0==n?r:(r&&(r+=" "),r+n+" "+this.getLocString("timerSec"));},t.prototype.startTimer=function(){if(!this.isTimerStarted&&!this.isDesignMode){var e=this;this.timerFunc=function(){e.doTimer();},this.isTimerStarted=!0,f.a.instance.start(this.timerFunc);}},t.prototype.startTimerFromUI=function(){"none"!=this.showTimerPanel&&"running"===this.state&&this.startTimer();},t.prototype.stopTimer=function(){this.isTimerStarted&&(this.isTimerStarted=!1,f.a.instance.stop(this.timerFunc));},Object.defineProperty(t.prototype,"timeSpent",{get:function get(){return this.getPropertyValue("timeSpent",0);},set:function set(e){this.setPropertyValue("timeSpent",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"maxTimeToFinish",{get:function get(){return this.getPropertyValue("maxTimeToFinish",0);},set:function set(e){this.setPropertyValue("maxTimeToFinish",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"maxTimeToFinishPage",{get:function get(){return this.getPropertyValue("maxTimeToFinishPage",0);},set:function set(e){this.setPropertyValue("maxTimeToFinishPage",e);},enumerable:!0,configurable:!0}),t.prototype.getPageMaxTimeToFinish=function(e){return!e||e.maxTimeToFinish<0?0:e.maxTimeToFinish>0?e.maxTimeToFinish:this.maxTimeToFinishPage;},t.prototype.doTimer=function(){var e=this.currentPage;if(e&&(e.timeSpent=e.timeSpent+1),this.timeSpent=this.timeSpent+1,this.onTimer.fire(this,{}),this.maxTimeToFinish>0&&this.maxTimeToFinish==this.timeSpent&&this.completeLastPage(),e){var t=this.getPageMaxTimeToFinish(e);t>0&&t==e.timeSpent&&(this.isLastPage?this.completeLastPage():this.nextPage());}},t.prototype.geSurveyData=function(){return this;},t.prototype.getSurvey=function(){return this;},t.prototype.getTextProcessor=function(){return this;},t.prototype.getObjects=function(e,t){var n=[];return Array.prototype.push.apply(n,this.getPagesByNames(e)),Array.prototype.push.apply(n,this.getQuestionsByNames(t)),n;},t.prototype.setTriggerValue=function(e,t,n){e&&(n?this.setVariable(e,t):this.setValue(e,t));},t.prototype.copyTriggerValue=function(e,t){e&&t&&this.setValue(e,this.getValue(t));},t.stylesManager=new h.a(),t.platform="unknown",t;}(a.c);o.a.metaData.addClass("survey",[{name:"locale",choices:function choices(){return p.a.getLocales();}},{name:"title:text",serializationProperty:"locTitle"},{name:"focusFirstQuestionAutomatic:boolean",default:!0},{name:"completedHtml:html",serializationProperty:"locCompletedHtml"},{name:"completedBeforeHtml:html",serializationProperty:"locCompletedBeforeHtml"},{name:"loadingHtml:html",serializationProperty:"locLoadingHtml"},{name:"pages",className:"page",visible:!1},{name:"questions",alternativeName:"elements",baseClassName:"question",visible:!1,onGetValue:function onGetValue(e){return null;},onSetValue:function onSetValue(e,t,n){var r=e.addNewPage("");n.toObject({questions:t},r);}},{name:"triggers:triggers",baseClassName:"surveytrigger",classNamePart:"trigger"},{name:"surveyId",visible:!1},{name:"surveyPostId",visible:!1},{name:"surveyShowDataSaving",visible:!1},"cookieName","sendResultOnPageNext:boolean",{name:"showNavigationButtons:boolean",default:!0},{name:"showPrevButton:boolean",default:!0},{name:"showTitle:boolean",default:!0},{name:"showPageTitles:boolean",default:!0},{name:"showCompletedPage:boolean",default:!0},{name:"questionsOrder",default:"initial",choices:["initial","random"]},"showPageNumbers:boolean",{name:"showQuestionNumbers",default:"on",choices:["on","onPage","off"]},{name:"questionTitleLocation",default:"top",choices:["top","bottom","left"]},{name:"questionErrorLocation",default:"top",choices:["top","bottom"]},{name:"showProgressBar",default:"off",choices:["off","top","bottom","both"]},{name:"mode",default:"edit",choices:["edit","display"]},{name:"storeOthersAsComment:boolean",default:!0},{name:"maxTextLength:number",default:0},{name:"maxOthersLength:number",default:0},"goNextPageAutomatic:boolean",{name:"clearInvisibleValues",default:"onComplete",choices:["none","onComplete","onHidden"]},{name:"checkErrorsMode",default:"onNextPage",choices:["onNextPage","onValueChanged"]},{name:"startSurveyText",serializationProperty:"locStartSurveyText"},{name:"pagePrevText",serializationProperty:"locPagePrevText"},{name:"pageNextText",serializationProperty:"locPageNextText"},{name:"completeText",serializationProperty:"locCompleteText"},{name:"requiredText",default:"*"},"questionStartIndex",{name:"questionTitleTemplate",serializationProperty:"locQuestionTitleTemplate"},{name:"firstPageIsStarted:boolean",default:!1},{name:"isSinglePage:boolean",default:!1},{name:"maxTimeToFinish:number",default:0},{name:"maxTimeToFinishPage:number",default:0},{name:"showTimerPanel",default:"none",choices:["none","top","bottom"]},{name:"showTimerPanelMode",default:"all",choices:["all","page","survey"]}]);},function(e,t,n){"use strict";var r=n(0),i=n(1),o=n(4),a=n(9),s=n(3),u=n(12),l=n(10);n.d(t,"b",function(){return c;}),n.d(t,"c",function(){return p;}),n.d(t,"a",function(){return d;});var c=function(){function e(e){this.panel=e,this.elements=[],this.visibleValue=e.isDesignMode;}return Object.defineProperty(e.prototype,"questions",{get:function get(){return this.elements;},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"visible",{get:function get(){return this.visibleValue;},set:function set(e){e!=this.visible&&(this.visibleValue=e,this.onVisibleChanged());},enumerable:!0,configurable:!0}),e.prototype.updateVisible=function(){this.visible=this.calcVisible(),this.setWidth();},e.prototype.addElement=function(e){this.elements.push(e),this.updateVisible();},e.prototype.onVisibleChanged=function(){this.visibilityChangedCallback&&this.visibilityChangedCallback();},e.prototype.setWidth=function(){var e=this.getVisibleCount();if(0!=e)for(var t=0,n=0;n<this.elements.length;n++){if(this.elements[n].isVisible){var r=this.elements[n];r.renderWidth=r.width?r.width:(100/e).toFixed(6)+"%",r.rightIndent=t<e-1?1:0,t++;}else this.elements[n].renderWidth="";}},e.prototype.getVisibleCount=function(){for(var e=0,t=0;t<this.elements.length;t++){this.elements[t].isVisible&&e++;}return e;},e.prototype.calcVisible=function(){return this.getVisibleCount()>0;},e;}(),p=function(e){function t(n){void 0===n&&(n="");var r=e.call(this,n)||this;r.name=n,r.rowValues=null,r.isQuestionsReady=!1,r.questionsValue=new Array(),r.childVisibilityChangeHandler=function(){r.getIsPageVisible(null)!==r.getPropertyValue("isVisible")&&r.onVisibleChanged();},r.conditionVersion=-1,r.elementsValue=r.createNewArray("elements",function(e){i.onAddElement(e,i.elementsValue.length);},function(e){i.onRemoveElement(e);}),r.registerFunctionOnPropertyValueChanged("elements",function(){i.onRowsChanged();}),r.registerFunctionOnPropertyValueChanged("questionTitleLocation",function(){i.onVisibleChanged();}),r.id=t.getPanelId();var i=r;r.createLocalizableString("title",r,!0),r.createLocalizableString("description",r,!0);return r.createLocalizableString("requiredErrorText",r),r;}return r.b(t,e),t.getPanelId=function(){return"sp_"+t.panelCounter++;},t.prototype.setSurveyImpl=function(t){e.prototype.setSurveyImpl.call(this,t),this.isDesignMode&&this.onVisibleChanged();for(var n=0;n<this.elements.length;n++){this.elements[n].setSurveyImpl(t);}},t.prototype.endLoadingFromJson=function(){e.prototype.endLoadingFromJson.call(this),this.markQuestionListDirty(),this.onRowsChanged();},Object.defineProperty(t.prototype,"title",{get:function get(){return this.getLocalizableStringText("title");},set:function set(e){this.setLocalizableStringText("title",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locTitle",{get:function get(){return this.getLocalizableString("title");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"description",{get:function get(){return this.getLocalizableStringText("description");},set:function set(e){this.setLocalizableStringText("description",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locDescription",{get:function get(){return this.getLocalizableString("description");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"hasDescription",{get:function get(){return""!=this.description;},enumerable:!0,configurable:!0}),t.prototype.locStrsChanged=function(){e.prototype.locStrsChanged.call(this);for(var t=0;t<this.elements.length;t++){this.elements[t].locStrsChanged();}},Object.defineProperty(t.prototype,"requiredErrorText",{get:function get(){return this.getLocalizableStringText("requiredErrorText");},set:function set(e){this.setLocalizableStringText("requiredErrorText",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locRequiredErrorText",{get:function get(){return this.getLocalizableString("requiredErrorText");},enumerable:!0,configurable:!0}),t.prototype.getLocale=function(){return this.survey?this.survey.getLocale():"";},t.prototype.getMarkdownHtml=function(e){return this.survey?this.survey.getSurveyMarkdownHtml(this,e):null;},t.prototype.getProcessedText=function(e){return this.textProcessor?this.textProcessor.processText(e,!0):e;},Object.defineProperty(t.prototype,"parent",{get:function get(){return this.getPropertyValue("parent",null);},set:function set(e){this.setPropertyValue("parent",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"visibleIf",{get:function get(){return this.getPropertyValue("visibleIf","");},set:function set(e){this.setPropertyValue("visibleIf",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"cssClasses",{get:function get(){var e={error:{}};return this.copyCssClasses(e,this.css),this.copyCssClasses(e.error,this.css.error),this.survey&&this.survey.updatePanelCssClasses(this,e),e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"css",{get:function get(){return u.b.getCss();},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"id",{get:function get(){return this.getPropertyValue("id");},set:function set(e){this.setPropertyValue("id",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isPanel",{get:function get(){return!1;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"questions",{get:function get(){if(!this.isQuestionsReady){this.questionsValue=[];for(var e=0;e<this.elements.length;e++){var t=this.elements[e];if(t.isPanel)for(var n=t.questions,r=0;r<n.length;r++){this.questionsValue.push(n[r]);}else this.questionsValue.push(t);}this.isQuestionsReady=!0;}return this.questionsValue;},enumerable:!0,configurable:!0}),t.prototype.getQuestionByName=function(e){for(var t=this.questions,n=0;n<t.length;n++){if(t[n].name==e)return t[n];}return null;},t.prototype.getQuestionByValueName=function(e){for(var t=this.questions,n=0;n<t.length;n++){if(t[n].getValueName()==e)return t[n];}return null;},t.prototype.getValue=function(){for(var e={},t=0;t<this.questions.length;t++){var n=this.questions[t];n.isEmpty()||(e[n.getValueName()]=n.value);}return e;},t.prototype.clearIncorrectValues=function(){for(var e=0;e<this.elements.length;e++){this.elements[e].clearIncorrectValues();}},t.prototype.markQuestionListDirty=function(){this.isQuestionsReady=!1,this.parent&&this.parent.markQuestionListDirty();},Object.defineProperty(t.prototype,"elements",{get:function get(){return this.elementsValue;},enumerable:!0,configurable:!0}),t.prototype.getElementsInDesign=function(e){return void 0===e&&(e=!1),this.elements;},t.prototype.containsElement=function(e){for(var t=0;t<this.elements.length;t++){var n=this.elements[t];if(n==e)return!0;if(n.isPanel&&n.containsElement(e))return!0;}return!1;},Object.defineProperty(t.prototype,"isRequired",{get:function get(){return this.getPropertyValue("isRequired",!1);},set:function set(e){this.setPropertyValue("isRequired",e);},enumerable:!0,configurable:!0}),t.prototype.hasErrors=function(e,t){void 0===e&&(e=!0),void 0===t&&(t=!1);var n={fireCallback:e,focuseOnFirstError:t,firstErrorQuestion:null,result:!1};return this.hasErrorsCore(n),n.firstErrorQuestion&&n.firstErrorQuestion.focus(!0),n.result;},t.prototype.hasErrorsInPanels=function(e){var t=this.errors.length;if(this.errors=[],this.hasRequiredError(e),this.survey){var n=this.survey.validatePanel(this);n&&(this.errors.push(n),e.result=!0);}e.fireCallback&&(t!=this.errors.length||t>0)&&this.errorsChangedCallback&&this.errorsChangedCallback();},t.prototype.hasRequiredError=function(e){if(this.isRequired){var t=[];if(this.addQuestionsToList(t,!0),0!=t.length){for(var n=0;n<t.length;n++){if(!t[n].isEmpty())return;}e.result=!0,this.errors.push(new l.d(this.requiredErrorText)),e.firstErrorQuestion||(e.firstErrorQuestion=t[0]);}}},t.prototype.hasErrorsCore=function(e){for(var t=0;t<this.elements.length;t++){if(this.elements[t].isVisible)if(this.elements[t].isPanel)this.elements[t].hasErrorsCore(e);else{var n=this.elements[t];if(n.isReadOnly)continue;n.hasErrors(e.fireCallback)&&(e.focuseOnFirstError&&null==e.firstErrorQuestion&&(e.firstErrorQuestion=n),e.result=!0);}}this.hasErrorsInPanels(e);},t.prototype.addQuestionsToList=function(e,t,n){void 0===t&&(t=!1),void 0===n&&(n=!1),this.addElementsToList(e,t,n,!1);},t.prototype.addPanelsIntoList=function(e,t,n){void 0===t&&(t=!1),void 0===n&&(n=!1),this.addElementsToList(e,t,n,!0);},t.prototype.addElementsToList=function(e,t,n,r){t&&!this.visible||this.addElementsToListCore(e,this.elements,t,n,r);},t.prototype.addElementsToListCore=function(e,t,n,r,i){for(var o=0;o<t.length;o++){var a=t[o];n&&!a.visible||((i&&a.isPanel||!i&&!a.isPanel)&&e.push(a),a.isPanel?a.addElementsToListCore(e,a.elements,n,r,i):r&&this.addElementsToListCore(e,a.getElementsInDesign(!1),n,r,i));}},Object.defineProperty(t.prototype,"rows",{get:function get(){return this.rowValues||(this.rowValues=this.buildRows()),this.rowValues;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isActive",{get:function get(){return!this.survey||this.survey.currentPage==this.root;},enumerable:!0,configurable:!0}),t.prototype.updateCustomWidgets=function(){for(var e=0;e<this.elements.length;e++){this.elements[e].updateCustomWidgets();}},Object.defineProperty(t.prototype,"questionTitleLocation",{get:function get(){return this.getPropertyValue("questionTitleLocation","default");},set:function set(e){this.setPropertyValue("questionTitleLocation",e.toLowerCase());},enumerable:!0,configurable:!0}),t.prototype.getQuestionTitleLocation=function(){return this.onGetQuestionTitleLocation?this.onGetQuestionTitleLocation():"default"!=this.questionTitleLocation?this.questionTitleLocation:this.parent?this.parent.getQuestionTitleLocation():this.survey?this.survey.questionTitleLocation:"top";},Object.defineProperty(t.prototype,"root",{get:function get(){for(var e=this;e.parent;){e=e.parent;}return e;},enumerable:!0,configurable:!0}),t.prototype.createRow=function(){var e=new c(this);return e.visibilityChangedCallback=this.childVisibilityChangeHandler,e;},t.prototype.onSurveyLoad=function(){for(var e=0;e<this.elements.length;e++){this.elements[e].onSurveyLoad();}this.rowsChangedCallback&&this.rowsChangedCallback();},t.prototype.onRowsChanged=function(){this.rowValues=null,this.rowsChangedCallback&&!this.isLoadingFromJson&&this.rowsChangedCallback();},t.prototype.onAddElement=function(e,t){if(e.setSurveyImpl(this.surveyImpl),e.parent=this,this.markQuestionListDirty(),e.isPanel){var n=e;this.survey&&this.survey.panelAdded(n,t,this,this.root);}else if(this.survey){var r=e;this.survey.questionAdded(r,t,this,this.root);}var i=this;e.registerFunctionOnPropertiesValueChanged(["visible","isVisible"],function(){i.onElementVisibilityChanged(e);},this.id),e.registerFunctionOnPropertyValueChanged("startWithNewLine",function(){i.onElementStartWithNewLineChanged(e);},this.id);},t.prototype.onRemoveElement=function(e){e.parent=null,this.markQuestionListDirty(),e.unRegisterFunctionOnPropertiesValueChanged(["visible","isVisible","startWithNewLine"],this.id),e.isPanel?this.survey&&this.survey.panelRemoved(e):this.survey&&this.survey.questionRemoved(e);},t.prototype.onElementVisibilityChanged=function(e){this.rowValues&&this.updateRowsVisibility(e),this.parent&&this.parent.onElementVisibilityChanged(this);},t.prototype.onElementStartWithNewLineChanged=function(e){this.onRowsChanged();},t.prototype.updateRowsVisibility=function(e){for(var t=0;t<this.rowValues.length;t++){var n=this.rowValues[t];if(n.elements.indexOf(e)>-1){n.updateVisible();break;}}},t.prototype.buildRows=function(){for(var e=new Array(),t=0;t<this.elements.length;t++){var n=this.elements[t],r=0==t||n.startWithNewLine,i=r?this.createRow():e[e.length-1];r&&e.push(i),i.addElement(n);}for(var t=0;t<e.length;t++){e[t].updateVisible();}return e;},Object.defineProperty(t.prototype,"processedTitle",{get:function get(){return this.getRenderedTitle(this.locTitle.textOrHtml);},enumerable:!0,configurable:!0}),t.prototype.getRenderedTitle=function(e){return null!=this.textProcessor?this.textProcessor.processText(e,!0):e;},Object.defineProperty(t.prototype,"visible",{get:function get(){return this.getPropertyValue("visible",!0);},set:function set(e){e!==this.visible&&(this.setPropertyValue("visible",e),this.setPropertyValue("isVisible",this.isVisible),this.isLoadingFromJson||this.onVisibleChanged());},enumerable:!0,configurable:!0}),t.prototype.onVisibleChanged=function(){this.setPropertyValue("isVisible",this.isVisible);},Object.defineProperty(t.prototype,"isVisible",{get:function get(){return this.isDesignMode||this.getIsPageVisible(null);},enumerable:!0,configurable:!0}),t.prototype.getIsPageVisible=function(e){if(!this.visible)return!1;for(var t=0;t<this.questions.length;t++){if(this.questions[t]!=e&&this.questions[t].visible)return!0;}return!1;},t.prototype.setVisibleIndex=function(e){if(!this.isVisible||e<0){for(var t=0;t<this.elements.length;t++){this.elements[t].setVisibleIndex(-1);}return 0;}for(var n=e,t=0;t<this.elements.length;t++){e+=this.elements[t].setVisibleIndex(e);}return e-n;},Object.defineProperty(t.prototype,"isReadOnly",{get:function get(){return!!this.readOnly||(this.parent?this.parent.isReadOnly:!(!this.survey||!this.survey.isDisplayMode));},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"readOnly",{get:function get(){return this.getPropertyValue("readOnly",!1);},set:function set(e){this.readOnly!=e&&(this.setPropertyValue("readOnly",e),this.onReadOnlyChanged());},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"enableIf",{get:function get(){return this.getPropertyValue("enableIf","");},set:function set(e){this.setPropertyValue("enableIf",e);},enumerable:!0,configurable:!0}),t.prototype.addElement=function(e,t){void 0===t&&(t=-1),null!=e&&(t<0||t>=this.elements.length?this.elements.push(e):this.elements.splice(t,0,e));},t.prototype.addQuestion=function(e,t){void 0===t&&(t=-1),this.addElement(e,t);},t.prototype.addPanel=function(e,t){void 0===t&&(t=-1),this.addElement(e,t);},t.prototype.addNewQuestion=function(e,t){void 0===t&&(t=null);var n=s.a.Instance.createQuestion(e,t);return this.addQuestion(n),n;},t.prototype.addNewPanel=function(e){void 0===e&&(e=null);var t=this.createNewPanel(e);return this.addPanel(t),t;},t.prototype.createNewPanel=function(e){return new d(e);},t.prototype.removeElement=function(e){var t=this.elements.indexOf(e);if(t<0){for(var n=0;n<this.elements.length;n++){if(this.elements[n].removeElement(e))return!0;}return!1;}return this.elements.splice(t,1),!0;},t.prototype.removeQuestion=function(e){this.removeElement(e);},t.prototype.runCondition=function(e,t){if(!(this.isDesignMode||e.conditionVersion<this.conditionVersion)){this.conditionVersion=e.conditionVersion;for(var n=this.elements.slice(),r=0;r<n.length;r++){if(e.conditionVersion<this.conditionVersion)return;n[r].runCondition(e,t);}e.conditionVersion<this.conditionVersion||(this.runVisibleCondition(e,t),this.runEnableCondition(e,t));}},t.prototype.runVisibleCondition=function(e,t){if(this.visibleIf){var n=new a.a(this.visibleIf);this.visible=n.run(e,t);}},t.prototype.runEnableCondition=function(e,t){if(this.enableIf){var n=new a.a(this.enableIf);this.readOnly=!n.run(e,t);}},t.prototype.onAnyValueChanged=function(e){for(var t=0;t<this.elements.length;t++){this.elements[t].onAnyValueChanged(e);}},t.prototype.onReadOnlyChanged=function(){for(var e=0;e<this.elements.length;e++){this.elements[e].onReadOnlyChanged();}},t.panelCounter=100,t;}(o.a),d=function(e){function t(t){void 0===t&&(t="");var n=e.call(this,t)||this;n.name=t;var r=n;return n.registerFunctionOnPropertyValueChanged("state",function(){r.stateChangedCallback&&r.stateChangedCallback();}),n;}return r.b(t,e),t.prototype.getType=function(){return"panel";},Object.defineProperty(t.prototype,"isPanel",{get:function get(){return!0;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"page",{get:function get(){return this.getPage(this.parent);},set:function set(e){this.setPage(this.parent,e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"state",{get:function get(){return this.getPropertyValue("state","default");},set:function set(e){this.setPropertyValue("state",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isCollapsed",{get:function get(){return"collapsed"==this.state;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isExpanded",{get:function get(){if(!this.isDesignMode)return"expanded"==this.state;},enumerable:!0,configurable:!0}),t.prototype.collapse=function(){this.isDesignMode||(this.state="collapsed");},t.prototype.expand=function(){this.state="expanded";},t.prototype.hasErrorsCore=function(t){e.prototype.hasErrorsCore.call(this,t),this.isCollapsed&&t.result&&t.fireCallback&&this.expand();},t.prototype.getRenderedTitle=function(t){if(!t){if(this.isCollapsed||this.isExpanded)return this.name;if(this.isDesignMode)return"["+this.name+"]";}return e.prototype.getRenderedTitle.call(this,t);},Object.defineProperty(t.prototype,"width",{get:function get(){return this.getPropertyValue("width");},set:function set(e){this.setPropertyValue("width",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"innerIndent",{get:function get(){return this.getPropertyValue("innerIndent",0);},set:function set(e){this.setPropertyValue("innerIndent",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"renderWidth",{get:function get(){return this.getPropertyValue("renderWidth");},set:function set(e){this.setPropertyValue("renderWidth",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"startWithNewLine",{get:function get(){return this.getPropertyValue("startWithNewLine",!0);},set:function set(e){this.setPropertyValue("startWithNewLine",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"rightIndent",{get:function get(){return this.getPropertyValue("rightIndent",0);},set:function set(e){this.setPropertyValue("rightIndent",e);},enumerable:!0,configurable:!0}),t.prototype.onVisibleChanged=function(){e.prototype.onVisibleChanged.call(this),this.setPropertyValue("isVisible",this.isVisible),null!=this.survey&&this.survey.panelVisibilityChanged(this,this.visible);},t;}(p);i.a.metaData.addClass("panelbase",["name",{name:"elements",alternativeName:"questions",baseClassName:"question",visible:!1},{name:"visible:boolean",default:!0},"visibleIf:condition","enableIf:condition","readOnly:boolean",{name:"questionTitleLocation",default:"default",choices:["default","top","bottom","left","hidden"]},{name:"title:text",serializationProperty:"locTitle"},{name:"description:text",serializationProperty:"locDescription"}],function(){return new p();}),i.a.metaData.addClass("panel",[{name:"state",default:"default",choices:["default","collapsed","expanded"]},"isRequired:boolean",{name:"requiredErrorText:text",serializationProperty:"locRequiredErrorText"},{name:"startWithNewLine:boolean",default:!0},{name:"innerIndent:number",default:0,choices:[0,1,2,3]},{name:"page",isSerializable:!1,choices:function choices(e){var t=e?e.survey:null;return t?t.pages:[];}}],function(){return new d();},"panelbase");},function(e,t,n){"use strict";var r=n(0),i=n(6),o=(n.n(i),n(24)),a=n(20),s=n(1),u=n(4),l=n(3);n.d(t,"a",function(){return c;}),n.d(t,"c",function(){return d;}),n.d(t,"b",function(){return h;});var c=function(e){function t(t){var n=e.call(this,t)||this;n.panel=t,n.koVisible=i.observable(n.visible),n.koElements=i.observableArray();var r=n;return n.koGetType=function(e){return r.getElementType(e);},n.koElementAfterRender=function(e,t){return r.elementAfterRender(e,t);},n;}return r.b(t,e),t.prototype.addElement=function(t){e.prototype.addElement.call(this,t),this.koElements(this.elements);},t.prototype.onVisibleChanged=function(){this.koVisible(this.visible),e.prototype.onVisibleChanged.call(this);},t.prototype.getElementType=function(e){return e.isPanel?"survey-panel":"survey-question";},t.prototype.koAfterRender=function(e,t){for(var n=0;n<e.length;n++){var r=e[n];"#text"==r.nodeName&&(r.data="");}},t.prototype.elementAfterRender=function(e,t){if(this.panel&&this.panel.survey){var n=u.a.GetFirstNonTextElement(e);if(n){t.isPanel?this.panel.survey.afterRenderPanel(t,n):this.panel.survey.afterRenderQuestion(t,n);}}},t;}(a.b),p=function(){function e(e){this.panel=e;var t=this;this.koRows=i.observableArray(),this.panel.rowsChangedCallback=function(){t.koRows(t.panel.rows);},this.panel.koRows=this.koRows;}return e;}(),d=function(e){function t(t){void 0===t&&(t="");var n=e.call(this,t)||this;new p(n),n.onCreating();var r=n;return n.koElementType=i.observable("survey-panel"),n.koVisible=i.observable(n.isVisible),n.koRenderWidth=i.observable(n.renderWidth),n.koErrors=i.observable(n.errors),n.koCss=i.pureComputed(function(){return r.cssClasses;}),n.koIsCollapsed=i.observable(n.isCollapsed),n.koIsExpanded=i.observable(n.isExpanded),n.stateChangedCallback=function(){r.onStateChanged();},n.errorsChangedCallback=function(){r.koErrors(r.errors);},n.doExpand=function(){r.changeExpanded();},n.registerFunctionOnPropertiesValueChanged(["renderWidth","innerIndent","rightIndent"],function(){r.onRenderWidthChanged();}),n.koInnerMargin=i.observable(n.getIndentSize(n.innerIndent)),n;}return r.b(t,e),t.prototype.createRow=function(){var e=new c(this);return e.visibilityChangedCallback=this.childVisibilityChangeHandler,e;},t.prototype.onCreating=function(){},t.prototype.onNumChanged=function(e){this.locTitle.onChanged();},t.prototype.onRenderWidthChanged=function(){this.koRenderWidth(this.renderWidth),this.koInnerMargin(this.getIndentSize(this.innerIndent));},t.prototype.onStateChanged=function(){this.koIsCollapsed(this.isCollapsed),this.koIsExpanded(this.isExpanded);},t.prototype.changeExpanded=function(){(this.isCollapsed||this.isExpanded)&&(this.isCollapsed?this.expand():this.collapse());},t.prototype.getTitleStyle=function(){var e=this.cssClasses.panel.title;return(this.koIsCollapsed()||this.koIsExpanded())&&(e+=" sv_p_title_expandable"),e;},t.prototype.endLoadingFromJson=function(){e.prototype.endLoadingFromJson.call(this),this.koVisible(this.isVisible),this.onStateChanged();},t.prototype.onVisibleChanged=function(){e.prototype.onVisibleChanged.call(this),this.koVisible(this.isVisible);},t.prototype.getIndentSize=function(e){if(e<1)return"";if(!this.data)return"";var t=this.survey.css;return t?e*t.question.indent+"px":"";},t;}(a.a),h=function(e){function t(t){void 0===t&&(t="");var n=e.call(this,t)||this;return new p(n),n.onCreating(),n;}return r.b(t,e),t.prototype.createRow=function(){return new c(this);},t.prototype.createNewPanel=function(e){return new d(e);},t.prototype.onCreating=function(){},t.prototype.onNumChanged=function(e){this.locTitle.onChanged();},t;}(o.a);s.a.metaData.overrideClassCreatore("panel",function(){return new d();}),s.a.metaData.overrideClassCreatore("page",function(){return new h();}),l.b.Instance.registerElement("panel",function(e){return new d(e);});},function(e,t,n){"use strict";var r=n(6);n.n(r);n.d(t,"a",function(){return i;});var i=function(){function e(e){this.question=e;var t=this;e.registerFunctionOnPropertyValueChanged("isVisible",function(){t.onVisibilityChanged();}),e.registerFunctionOnPropertiesValueChanged(["renderWidth","indent","rightIndent"],function(){t.onRenderWidthChanged();}),e.surveyLoadCallback=function(){t.onSurveyLoad();},this.koTemplateName=r.pureComputed(function(){return t.getTemplateName();}),this.koElementType=r.observable("survey-question"),this.koVisible=r.observable(this.question.isVisible),this.koRenderWidth=r.observable(this.question.renderWidth),this.koErrors=r.observableArray(),this.koPaddingLeft=r.observable(t.getIndentSize(t.question.indent)),this.koPaddingRight=r.observable(t.getIndentSize(t.question.rightIndent)),this.question.koElementType=this.koElementType,this.question.koTemplateName=this.koTemplateName,this.question.koVisible=this.koVisible,this.question.koRenderWidth=this.koRenderWidth,this.question.koErrors=this.koErrors,this.question.koPaddingLeft=this.koPaddingLeft,this.question.koPaddingRight=this.koPaddingRight,this.question.updateQuestion=function(){t.updateQuestion();},this.question.koCss=r.pureComputed(function(){return t.question.cssClasses;}),this.question.koRootClass=r.pureComputed(function(){var e=t.question.cssClasses.mainRoot;return"left"===t.question.getTitleLocation()&&(e+=" sv_qstn_left"),t.koErrors().length>0&&(e+=" "+t.question.cssClasses.hasError),e;});}return e.prototype.updateQuestion=function(){},e.prototype.onSurveyLoad=function(){this.onVisibilityChanged();},e.prototype.onVisibilityChanged=function(){this.koVisible(this.question.isVisible);},e.prototype.onRenderWidthChanged=function(){this.koRenderWidth(this.question.renderWidth),this.koPaddingLeft(this.getIndentSize(this.question.indent)),this.koPaddingRight(this.getIndentSize(this.question.rightIndent));},e.prototype.getQuestionTemplate=function(){return this.question.getTemplate();},e.prototype.getIndentSize=function(e){return e<1?"":e*this.question.cssClasses.indent+"px";},e.prototype.getTemplateName=function(){return this.question.customWidget&&!this.question.customWidget.widgetJson.isDefaultRender?"survey-widget-"+this.question.customWidget.name:"survey-question-"+this.getQuestionTemplate();},e;}();},function(e,t,n){"use strict";var r=n(0),i=n(6),o=(n.n(i),n(19)),a=n(4),s=n(21),u=n(12),l=n(38),c=n(25),p=n(15);n.d(t,"a",function(){return d;}),c.a.Instance.onCustomWidgetAdded.add(function(e){e.widgetJson.isDefaultRender||(e.htmlTemplate||(e.htmlTemplate="<div>'htmlTemplate' attribute is missed.</div>"),new l.a().replaceText(e.htmlTemplate,"widget",e.name));});var d=function(e){function t(t,n,r){void 0===t&&(t=null),void 0===n&&(n=null),void 0===r&&(r=null);var o=e.call(this,t)||this;if(o.onRendered=new a.b(),o.isFirstRender=!0,r&&(o.css=r),n&&(o.renderedElement=n),void 0===i)throw new Error("knockoutjs library is not loaded.");var s=o;return o.registerFunctionOnPropertyValueChanged("timeSpent",function(){s.onTimeSpentChanged();}),o.render(n),o;}return r.b(t,e),Object.defineProperty(t,"cssType",{get:function get(){return u.b.currentType;},set:function set(e){u.b.currentType=e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"cssNavigationComplete",{get:function get(){return this.getNavigationCss(this.css.navigationButton,this.css.navigation.complete);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"cssNavigationPrev",{get:function get(){return this.getNavigationCss(this.css.navigationButton,this.css.navigation.prev);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"cssNavigationStart",{get:function get(){return this.getNavigationCss(this.css.navigationButton,this.css.navigation.start);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"cssNavigationNext",{get:function get(){return this.getNavigationCss(this.css.navigationButton,this.css.navigation.next);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"completedCss",{get:function get(){var e=u.b.getCss();return e.body+" "+e.completedPage;},enumerable:!0,configurable:!0}),t.prototype.getNavigationCss=function(e,t){var n="";return e&&(n=e),t&&(n+=" "+t),n;},Object.defineProperty(t.prototype,"css",{get:function get(){return u.b.getCss();},set:function set(e){this.mergeValues(e,this.css);},enumerable:!0,configurable:!0}),t.prototype.render=function(e){void 0===e&&(e=null),this.updateKoCurrentPage(),this.updateCustomWidgets(this.currentPage);var t=this;e&&"string"==typeof e&&(e=document.getElementById(e)),e&&(this.renderedElement=e),(e=this.renderedElement)&&(e.innerHTML=this.getHtmlTemplate(),t.startTimerFromUI(),t.applyBinding());},t.prototype.clear=function(t,n){void 0===t&&(t=!0),void 0===n&&(n=!0),e.prototype.clear.call(this,t,n),this.render();},t.prototype.koEventAfterRender=function(e,t){t.onRendered.fire(self,{}),t.afterRenderSurvey(e);},t.prototype.loadSurveyFromService=function(t,n,r){void 0===t&&(t=null),void 0===n&&(n=null),void 0===r&&(r=null),r&&(this.renderedElement=r),e.prototype.loadSurveyFromService.call(this,t,n);},t.prototype.setCompleted=function(){e.prototype.setCompleted.call(this),this.updateKoCurrentPage();},t.prototype.start=function(){e.prototype.start.call(this),this.updateKoCurrentPage();},t.prototype.createNewPage=function(e){return new s.b(e);},t.prototype.getHtmlTemplate=function(){return l.b;},t.prototype.onBeforeCreating=function(){var e=this,t=this;this.dummyObservable=i.observable(0),this.koCurrentPage=i.observable(this.currentPage),this.koIsNavigationButtonsShowing=i.computed(function(){return e.dummyObservable(),e.isNavigationButtonsShowing;}),this.koIsFirstPage=i.computed(function(){return e.dummyObservable(),e.isFirstPage;}),this.koIsLastPage=i.computed(function(){return e.dummyObservable(),e.isLastPage;}),this.koProgressText=i.computed(function(){return e.dummyObservable(),e.progressText;}),this.koProgress=i.computed(function(){return e.dummyObservable(),e.getProgress();}),this.koState=i.observable(this.state),this.koCompletedState=i.observable(""),this.koCompletedStateText=i.observable(""),this.koCompletedStateCss=i.observable(""),this.koTimerInfoText=i.observable(this.timerInfoText),this.koAfterRenderPage=function(e,n){var r=a.a.GetFirstNonTextElement(e);r&&t.afterRenderPage(r);};},t.prototype.currentPageChanged=function(t,n){this.updateKoCurrentPage(),e.prototype.currentPageChanged.call(this,t,n),this.isDesignMode||this.scrollToTopOnPageChange();},t.prototype.pageVisibilityChanged=function(t,n){e.prototype.pageVisibilityChanged.call(this,t,n),this.updateKoCurrentPage();},t.prototype.onLoadSurveyFromService=function(){this.render();},t.prototype.onLoadingSurveyFromService=function(){this.render();},t.prototype.setCompletedState=function(t,n){e.prototype.setCompletedState.call(this,t,n),this.koCompletedState(this.completedState),this.koCompletedStateText(this.completedStateText),this.koCompletedStateCss(""!==this.completedState?this.css.saveData[this.completedState]:"");},t.prototype.onTimeSpentChanged=function(){this.koTimerInfoText(this.timerInfoText);},t.prototype.applyBinding=function(){this.renderedElement&&(this.updateKoCurrentPage(),i.cleanNode(this.renderedElement),this.isFirstRender||this.updateCurrentPageQuestions(),this.isFirstRender=!1,i.applyBindings(this,this.renderedElement));},t.prototype.updateKoCurrentPage=function(){this.isLoadingFromJson||(this.dummyObservable(this.dummyObservable()+1),this.currentPage!==this.koCurrentPage()&&this.koCurrentPage(this.currentPage),this.koState(this.state));},t.prototype.updateCurrentPageQuestions=function(){for(var e=this.currentPage?this.currentPage.questions:[],t=0;t<e.length;t++){var n=e[t];n.visible&&n.updateQuestion();}},t;}(o.a);p.a.prototype.onCreating=function(){var e=this;this.koReRender=i.observable(0),this.koRenderedHtml=i.pureComputed(function(){return e.koReRender(),e.renderedHtml;});},p.a.prototype.onChanged=function(){this.koReRender(this.koReRender()+1);},i.components.register("survey",{viewModel:{createViewModel:function createViewModel(e,t){return i.unwrap(e.survey).render(),e.survey;}},template:l.b}),i.bindingHandlers.surveyProp={update:function update(e,t,n){var r=i.utils.unwrapObservable(t())||{};for(var o in r){if("string"==typeof o){var a=i.utils.unwrapObservable(r[o]);e[o]=a;}}}},o.a.platform="knockout";},function(e,t,n){"use strict";var r=n(0),i=n(1),o=n(5),a=n(4),s=n(20);n.d(t,"a",function(){return u;});var u=function(e){function t(t){void 0===t&&(t="");var n=e.call(this,t)||this;n.name=t,n.hasShownValue=!1;var r=n;return n.locTitle.onRenderedHtmlCallback=function(e){return r.num>0?r.num+". "+e:e;},n;}return r.b(t,e),t.prototype.getType=function(){return"page";},t.prototype.toString=function(){return this.name;},Object.defineProperty(t.prototype,"visibleIndex",{get:function get(){return this.getPropertyValue("visibleIndex",-1);},set:function set(e){this.setPropertyValue("visibleIndex",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isStarted",{get:function get(){return this.survey&&this.survey.isPageStarted(this);},enumerable:!0,configurable:!0}),t.prototype.getIsPageVisible=function(t){return!this.isStarted&&e.prototype.getIsPageVisible.call(this,t);},Object.defineProperty(t.prototype,"num",{get:function get(){return this.getPropertyValue("num",-1);},set:function set(e){this.num!=e&&(this.setPropertyValue("num",e),this.onNumChanged(e));},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"navigationButtonsVisibility",{get:function get(){return this.getPropertyValue("navigationButtonsVisibility","inherit");},set:function set(e){this.setPropertyValue("navigationButtonsVisibility",e.toLowerCase());},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"wasShown",{get:function get(){return this.hasShownValue;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"hasShown",{get:function get(){return this.wasShown;},enumerable:!0,configurable:!0}),t.prototype.setWasShown=function(e){this.isDesignMode||e!=this.hasShownValue&&(1==e&&this.areQuestionsRandomized&&this.randomizeElements(),this.hasShownValue=e);},t.prototype.randomizeElements=function(){for(var e=[],t=0;t<this.elements.length;t++){e.push(this.elements[t]);}var n=o.a.randomizeArray(e);this.elements.splice(0,this.elements.length);for(var t=0;t<n.length;t++){this.elements.push(n[t]);}},Object.defineProperty(t.prototype,"areQuestionsRandomized",{get:function get(){return"random"==("default"==this.questionsOrder&&this.survey?this.survey.questionsOrder:this.questionsOrder);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"questionsOrder",{get:function get(){return this.getPropertyValue("questionsOrder","default");},set:function set(e){this.setPropertyValue("questionsOrder",e);},enumerable:!0,configurable:!0}),t.prototype.focusFirstQuestion=function(){for(var e=0;e<this.questions.length;e++){var t=this.questions[e];if(t.visible&&t.hasInput){this.questions[e].focus();break;}}},t.prototype.focusFirstErrorQuestion=function(){for(var e=0;e<this.questions.length;e++){if(this.questions[e].visible&&0!=this.questions[e].currentErrorCount){this.questions[e].focus(!0);break;}}},t.prototype.scrollToTop=function(){a.a.ScrollElementToTop(this.id);},Object.defineProperty(t.prototype,"timeSpent",{get:function get(){return this.getPropertyValue("timeSpent",0);},set:function set(e){this.setPropertyValue("timeSpent",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"maxTimeToFinish",{get:function get(){return this.getPropertyValue("maxTimeToFinish",0);},set:function set(e){this.setPropertyValue("maxTimeToFinish",e);},enumerable:!0,configurable:!0}),t.prototype.onNumChanged=function(e){},t.prototype.onVisibleChanged=function(){e.prototype.onVisibleChanged.call(this),null!=this.survey&&this.survey.pageVisibilityChanged(this,this.visible);},t;}(s.c);i.a.metaData.addClass("page",[{name:"navigationButtonsVisibility",default:"inherit",choices:["inherit","show","hide"]},{name:"questionsOrder",default:"default",choices:["default","initial","random"]},{name:"maxTimeToFinish:number",default:0}],function(){return new u();},"panelbase");},function(e,t,n){"use strict";var r=n(4);n.d(t,"b",function(){return i;}),n.d(t,"a",function(){return o;});var i=function(){function e(e,t){this.name=e,this.widgetJson=t,this.htmlTemplate=t.htmlTemplate?t.htmlTemplate:"";}return e.prototype.afterRender=function(e,t){this.widgetJson.afterRender&&this.widgetJson.afterRender(e,t);},e.prototype.willUnmount=function(e,t){this.widgetJson.willUnmount&&this.widgetJson.willUnmount(e,t);},e.prototype.getDisplayValue=function(e){return this.widgetJson.getDisplayValue?this.widgetJson.getDisplayValue(e):null;},e.prototype.isFit=function(e){return!(!this.isLibraryLoaded()||!this.widgetJson.isFit)&&this.widgetJson.isFit(e);},e.prototype.activatedByChanged=function(e){this.isLibraryLoaded()&&this.widgetJson.activatedByChanged&&this.widgetJson.activatedByChanged(e);},e.prototype.isLibraryLoaded=function(){return!this.widgetJson.widgetIsLoaded||1==this.widgetJson.widgetIsLoaded();},Object.defineProperty(e.prototype,"isDefaultRender",{get:function get(){return this.widgetJson.isDefaultRender;},enumerable:!0,configurable:!0}),e;}(),o=function(){function e(){this.widgetsValues=[],this.widgetsActivatedBy={},this.onCustomWidgetAdded=new r.b();}return Object.defineProperty(e.prototype,"widgets",{get:function get(){return this.widgetsValues;},enumerable:!0,configurable:!0}),e.prototype.addCustomWidget=function(e,t){void 0===t&&(t="property");var n=e.name;n||(n="widget_"+this.widgets.length+1);var r=new i(n,e);this.widgetsValues.push(r),this.widgetsActivatedBy[n]=t,r.activatedByChanged(t),this.onCustomWidgetAdded.fire(r,null);},e.prototype.getActivatedBy=function(e){var t=this.widgetsActivatedBy[e];return t||"property";},e.prototype.setActivatedBy=function(e,t){if(e&&t){var n=this.getCustomWidgetByName(e);n&&(this.widgetsActivatedBy[e]=t,n.activatedByChanged(t));}},e.prototype.clear=function(){this.widgetsValues=[];},e.prototype.getCustomWidgetByName=function(e){for(var t=0;t<this.widgets.length;t++){if(this.widgets[t].name==e)return this.widgets[t];}return null;},e.prototype.getCustomWidget=function(e){for(var t=0;t<this.widgetsValues.length;t++){if(this.widgetsValues[t].isFit(e))return this.widgetsValues[t];}return null;},e.Instance=new e(),e;}();},function(e,t,n){"use strict";var r=n(0),i=n(1),o=n(3),a=n(16),s=n(2);n.d(t,"a",function(){return u;});var u=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,n.createLocalizableString("optionsCaption",n),n;}return r.b(t,e),Object.defineProperty(t.prototype,"optionsCaption",{get:function get(){return this.getLocalizableStringText("optionsCaption",s.a.getString("optionsCaption"));},set:function set(e){this.setLocalizableStringText("optionsCaption",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locOptionsCaption",{get:function get(){return this.getLocalizableString("optionsCaption");},enumerable:!0,configurable:!0}),t.prototype.getType=function(){return"dropdown";},t.prototype.supportGoNextPageAutomatic=function(){return!0;},t;}(a.b);i.a.metaData.addClass("dropdown",[{name:"optionsCaption",serializationProperty:"locOptionsCaption"}],function(){return new u("");},"selectbase"),o.a.Instance.registerQuestion("dropdown",function(e){var t=new u(e);return t.choices=o.a.DefaultChoices,t;});},function(e,t,n){"use strict";var r=n(0),i=n(3),o=n(1),a=n(8),s=n(5);n.d(t,"a",function(){return u;});var u=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,n.createLocalizableString("placeHolder",n),n;}return r.b(t,e),t.prototype.getType=function(){return"text";},Object.defineProperty(t.prototype,"inputType",{get:function get(){return this.getPropertyValue("inputType","text");},set:function set(e){e=e.toLowerCase(),"datetime_local"==e&&(e="datetime-local"),this.setPropertyValue("inputType",e.toLowerCase());},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"maxLength",{get:function get(){return this.getPropertyValue("maxLength",-1);},set:function set(e){this.setPropertyValue("maxLength",e);},enumerable:!0,configurable:!0}),t.prototype.getMaxLength=function(){return s.a.getMaxLength(this.maxLength,this.survey?this.survey.maxTextLength:-1);},Object.defineProperty(t.prototype,"size",{get:function get(){return this.getPropertyValue("size",25);},set:function set(e){this.setPropertyValue("size",e);},enumerable:!0,configurable:!0}),t.prototype.isEmpty=function(){return e.prototype.isEmpty.call(this)||""===this.value;},t.prototype.supportGoNextPageAutomatic=function(){return!0;},Object.defineProperty(t.prototype,"placeHolder",{get:function get(){return this.getLocalizableStringText("placeHolder");},set:function set(e){this.setLocalizableStringText("placeHolder",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locPlaceHolder",{get:function get(){return this.getLocalizableString("placeHolder");},enumerable:!0,configurable:!0}),t.prototype.setNewValue=function(t){t=this.correctValueType(t),e.prototype.setNewValue.call(this,t);},t.prototype.correctValueType=function(e){return e&&("number"==this.inputType||"range"==this.inputType)?this.isNumber(e)?parseFloat(e):"":e;},t.prototype.isNumber=function(e){return!isNaN(parseFloat(e))&&isFinite(e);},t;}(a.a);o.a.metaData.addClass("text",[{name:"inputType",default:"text",choices:["color","date","datetime","datetime-local","email","month","number","password","range","tel","text","time","url","week"]},{name:"size:number",default:25},{name:"maxLength:number",default:-1},{name:"placeHolder",serializationProperty:"locPlaceHolder"}],function(){return new u("");},"question"),i.a.Instance.registerQuestion("text",function(e){return new u(e);});},function(e,t,n){"use strict";var r=n(0),i=n(4),o=n(1),a=n(9),s=n(12),u=n(25);n.d(t,"a",function(){return l;});var l=function(e){function t(n){var r=e.call(this,n)||this;return r.name=n,r.conditionRunner=null,r.isCustomWidgetRequested=!1,r.customWidgetData={isNeedRender:!0},r.locOwner=null,r.id=t.getQuestionId(),r.onCreating(),r;}return r.b(t,e),t.getQuestionId=function(){return"sq_"+t.questionCounter++;},t.prototype.getType=function(){return"questionbase";},t.prototype.setSurveyImpl=function(t){e.prototype.setSurveyImpl.call(this,t),this.survey&&this.survey.isDesignMode&&this.onVisibleChanged(),this.data&&!this.isLoadingFromJson&&(this.runCondition(this.getDataFilteredValues(),this.getDataFilteredProperties()),this.locStrsChanged());},t.prototype.getDataFilteredValues=function(){return this.data?this.data.getFilteredValues():null;},t.prototype.getDataFilteredProperties=function(){return this.data?this.data.getFilteredProperties():null;},Object.defineProperty(t.prototype,"parent",{get:function get(){return this.getPropertyValue("parent",null);},set:function set(e){this.setPropertyValue("parent",e);},enumerable:!0,configurable:!0}),t.prototype.isAnswerCorrect=function(){return!1;},t.prototype.getValueName=function(){return this.name;},Object.defineProperty(t.prototype,"page",{get:function get(){return this.getPage(this.parent);},set:function set(e){this.setPage(this.parent,e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isPanel",{get:function get(){return!1;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"visible",{get:function get(){return this.getPropertyValue("visible",!0);},set:function set(e){e!=this.visible&&(this.setPropertyValue("visible",e),this.onVisibleChanged(),this.survey&&this.survey.questionVisibilityChanged(this,this.visible));},enumerable:!0,configurable:!0}),t.prototype.onVisibleChanged=function(){this.setPropertyValue("isVisible",this.isVisible),!this.isVisible&&this.errors&&this.errors.length>0&&(this.errors=[],this.fireCallback(this.errorsChangedCallback));},Object.defineProperty(t.prototype,"visibleIf",{get:function get(){return this.getPropertyValue("visibleIf","");},set:function set(e){this.setPropertyValue("visibleIf",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isVisible",{get:function get(){return this.visible||this.isDesignMode;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isReadOnly",{get:function get(){return!0;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"visibleIndex",{get:function get(){return this.getPropertyValue("visibleIndex",-1);},enumerable:!0,configurable:!0}),t.prototype.hasErrors=function(e){return void 0===e&&(e=!0),!1;},t.prototype.isEmpty=function(){return!0;},Object.defineProperty(t.prototype,"currentErrorCount",{get:function get(){return 0;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"hasTitle",{get:function get(){return!1;},enumerable:!0,configurable:!0}),t.prototype.getTitleLocation=function(){return"";},Object.defineProperty(t.prototype,"hasDescription",{get:function get(){return!1;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"hasInput",{get:function get(){return!1;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"hasComment",{get:function get(){return!1;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"id",{get:function get(){return this.getPropertyValue("id");},set:function set(e){this.setPropertyValue("id",e);},enumerable:!0,configurable:!0}),t.prototype.getAllErrors=function(){return[];},Object.defineProperty(t.prototype,"customWidget",{get:function get(){return this.isCustomWidgetRequested||this.customWidgetValue||(this.isCustomWidgetRequested=!0,this.updateCustomWidget()),this.customWidgetValue;},enumerable:!0,configurable:!0}),t.prototype.updateCustomWidget=function(){this.customWidgetValue=u.a.Instance.getCustomWidget(this);},Object.defineProperty(t.prototype,"startWithNewLine",{get:function get(){return this.getPropertyValue("startWithNewLine",!0);},set:function set(e){this.startWithNewLine!=e&&this.setPropertyValue("startWithNewLine",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"cssClasses",{get:function get(){var e=this.css,t={error:{}};return this.copyCssClasses(t,e.question),this.copyCssClasses(t.error,e.error),this.updateCssClasses(t,e),this.survey&&this.survey.updateQuestionCssClasses(this,t),t;},enumerable:!0,configurable:!0}),t.prototype.getRootCss=function(e){return e.question.root;},t.prototype.updateCssClasses=function(e,t){var n=t[this.getType()];if(void 0!==n&&null!==n)if("string"==typeof n||n instanceof String)e.root=n;else for(var r in n){e[r]=n[r];}},Object.defineProperty(t.prototype,"css",{get:function get(){return s.b.getCss();},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"width",{get:function get(){return this.getPropertyValue("width","");},set:function set(e){this.setPropertyValue("width",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"renderWidth",{get:function get(){return this.getPropertyValue("renderWidth","");},set:function set(e){this.setPropertyValue("renderWidth",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"indent",{get:function get(){return this.getPropertyValue("indent",0);},set:function set(e){this.setPropertyValue("indent",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"rightIndent",{get:function get(){return this.getPropertyValue("rightIndent",0);},set:function set(e){this.setPropertyValue("rightIndent",e);},enumerable:!0,configurable:!0}),t.prototype.focus=function(e){void 0===e&&(e=!1);},t.prototype.fireCallback=function(e){e&&e();},t.prototype.getOthersMaxLength=function(){return this.survey&&this.survey.maxOthersLength>0?this.survey.maxOthersLength:null;},t.prototype.onCreating=function(){},t.prototype.runCondition=function(e,t){this.isDesignMode||this.visibleIf&&(this.conditionRunner||(this.conditionRunner=new a.a(this.visibleIf)),this.conditionRunner.expression=this.visibleIf,this.visible=this.conditionRunner.run(e,t));},t.prototype.onSurveyValueChanged=function(e){},t.prototype.onSurveyLoad=function(){this.fireCallback(this.surveyLoadCallback);},t.prototype.setVisibleIndex=function(e){return this.isVisible&&this.hasTitle||(e=-1),this.setPropertyValue("visibleIndex",e),e<0?0:1;},t.prototype.removeElement=function(e){return!1;},t.prototype.supportGoNextPageAutomatic=function(){return!1;},t.prototype.addConditionNames=function(e){},t.prototype.getConditionJson=function(e,t){return void 0===e&&(e=null),void 0===t&&(t=null),null;},t.prototype.clearIncorrectValues=function(){},t.prototype.clearUnusedValues=function(){},t.prototype.updateValueWithDefaults=function(){},t.prototype.getDisplayValue=function(e){return"";},Object.defineProperty(t.prototype,"displayValue",{get:function get(){return this.getDisplayValue(!0);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"value",{get:function get(){return null;},set:function set(e){},enumerable:!0,configurable:!0}),t.prototype.clearValue=function(){},t.prototype.clearValueIfInvisible=function(){},t.prototype.locStrsChanged=function(){e.prototype.locStrsChanged.call(this);},t.prototype.onReadOnlyChanged=function(){},t.prototype.onAnyValueChanged=function(e){},t.prototype.getLocale=function(){return this.survey?this.survey.getLocale():this.locOwner?this.locOwner.getLocale():"";},t.prototype.getMarkdownHtml=function(e){return this.survey?this.survey.getSurveyMarkdownHtml(this,e):this.locOwner?this.locOwner.getMarkdownHtml(e):null;},t.prototype.getProcessedText=function(e){return this.textProcessor?this.textProcessor.processText(e,!0):this.locOwner?this.locOwner.getProcessedText(e):e;},t.questionCounter=100,t;}(i.a);o.a.metaData.addClass("questionbase",["!name",{name:"visible:boolean",default:!0},"visibleIf:condition",{name:"width"},{name:"startWithNewLine:boolean",default:!0},{name:"indent:number",default:0,choices:[0,1,2,3]},{name:"page",isSerializable:!1,choices:function choices(e){var t=e?e.survey:null;return t?t.pages:[];}}]);},function(e,t,n){"use strict";var r=n(0),i=n(4),o=n(10),a=n(2),s=n(1),u=n(9),l=n(5);n.d(t,"h",function(){return c;}),n.d(t,"f",function(){return p;}),n.d(t,"a",function(){return d;}),n.d(t,"d",function(){return h;}),n.d(t,"g",function(){return f;}),n.d(t,"b",function(){return m;}),n.d(t,"e",function(){return g;}),n.d(t,"c",function(){return y;});var c=function(){function e(e,t){void 0===t&&(t=null),this.value=e,this.error=t;}return e;}(),p=function(e){function t(){var t=e.call(this)||this;return t.createLocalizableString("text",t,!0),t;}return r.b(t,e),Object.defineProperty(t.prototype,"text",{get:function get(){return this.getLocalizableStringText("text");},set:function set(e){this.setLocalizableStringText("text",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isValidateAllValues",{get:function get(){return!1;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locText",{get:function get(){return this.getLocalizableString("text");},enumerable:!0,configurable:!0}),t.prototype.getErrorText=function(e){return this.text?this.text:this.getDefaultErrorText(e);},t.prototype.getDefaultErrorText=function(e){return"";},t.prototype.validate=function(e,t){return void 0===t&&(t=null),null;},t.prototype.validateAllValues=function(e,t,n,r){return void 0===r&&(r=null),null;},t.prototype.getLocale=function(){return this.locOwner?this.locOwner.getLocale():"";},t.prototype.getMarkdownHtml=function(e){return this.locOwner?this.locOwner.getMarkdownHtml(e):null;},t.prototype.getProcessedText=function(e){return this.locOwner?this.locOwner.getProcessedText(e):e;},t.prototype.createCustomError=function(e){return new o.a(this.getErrorText(e),this.locOwner);},t;}(i.c),d=function(){function e(){}return e.prototype.run=function(e){for(var t=0;t<e.validators.length;t++){var n=null,r=e.validators[t];if(null!=(n=r.isValidateAllValues?r.validateAllValues(e.validatedValue,e.getDataFilteredValues(),e.getDataFilteredProperties(),e.getValidatorTitle()):r.validate(e.validatedValue,e.getValidatorTitle()))){if(n.error)return n.error;n.value&&(e.validatedValue=n.value);}}return null;},e;}(),h=function(e){function t(t,n){void 0===t&&(t=null),void 0===n&&(n=null);var r=e.call(this)||this;return r.minValue=t,r.maxValue=n,r;}return r.b(t,e),t.prototype.getType=function(){return"numericvalidator";},t.prototype.validate=function(e,t){if(void 0===t&&(t=null),l.a.isValueEmpty(e))return null;if(!this.isNumber(e))return new c(null,new o.c());var n=new c(parseFloat(e));return null!==this.minValue&&this.minValue>n.value?(n.error=this.createCustomError(t),n):null!==this.maxValue&&this.maxValue<n.value?(n.error=this.createCustomError(t),n):"number"==typeof e?null:n;},t.prototype.getDefaultErrorText=function(e){var t=e||a.a.getString("value");return null!==this.minValue&&null!==this.maxValue?a.a.getString("numericMinMax").format(t,this.minValue,this.maxValue):null!==this.minValue?a.a.getString("numericMin").format(t,this.minValue):a.a.getString("numericMax").format(t,this.maxValue);},t.prototype.isNumber=function(e){return!isNaN(parseFloat(e))&&isFinite(e);},t;}(p),f=function(e){function t(t,n,r){void 0===t&&(t=0),void 0===n&&(n=0),void 0===r&&(r=!0);var i=e.call(this)||this;return i.minLength=t,i.maxLength=n,i.allowDigits=r,i;}return r.b(t,e),t.prototype.getType=function(){return"textvalidator";},t.prototype.validate=function(e,t){if(void 0===t&&(t=null),""!==e&&l.a.isValueEmpty(e))return null;if(!this.allowDigits){if(!/^[A-Za-z\s]*$/.test(e))return new c(null,this.createCustomError(t));}return this.minLength>0&&e.length<this.minLength?new c(null,this.createCustomError(t)):this.maxLength>0&&e.length>this.maxLength?new c(null,this.createCustomError(t)):null;},t.prototype.getDefaultErrorText=function(e){return this.minLength>0&&this.maxLength>0?a.a.getString("textMinMaxLength").format(this.minLength,this.maxLength):this.minLength>0?a.a.getString("textMinLength").format(this.minLength):a.a.getString("textMaxLength").format(this.maxLength);},t;}(p),m=function(e){function t(t,n){void 0===t&&(t=null),void 0===n&&(n=null);var r=e.call(this)||this;return r.minCount=t,r.maxCount=n,r;}return r.b(t,e),t.prototype.getType=function(){return"answercountvalidator";},t.prototype.validate=function(e,t){if(void 0===t&&(t=null),null==e||e.constructor!=Array)return null;var n=e.length;return this.minCount&&n<this.minCount?new c(null,this.createCustomError(a.a.getString("minSelectError").format(this.minCount))):this.maxCount&&n>this.maxCount?new c(null,this.createCustomError(a.a.getString("maxSelectError").format(this.maxCount))):null;},t.prototype.getDefaultErrorText=function(e){return e;},t;}(p),g=function(e){function t(t){void 0===t&&(t=null);var n=e.call(this)||this;return n.regex=t,n;}return r.b(t,e),t.prototype.getType=function(){return"regexvalidator";},t.prototype.validate=function(e,t){if(void 0===t&&(t=null),!this.regex||!e)return null;var n=new RegExp(this.regex);if(Array.isArray(e))for(var r=0;r<e.length;r++){var i=this.hasError(n,e[r],t);if(i)return i;}return this.hasError(n,e,t);},t.prototype.hasError=function(e,t,n){return e.test(t)?null:new c(t,this.createCustomError(n));},t;}(p),y=function(e){function t(){var t=e.call(this)||this;return t.re=/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i,t;}return r.b(t,e),t.prototype.getType=function(){return"emailvalidator";},t.prototype.validate=function(e,t){return void 0===t&&(t=null),e?this.re.test(e)?null:new c(e,this.createCustomError(t)):null;},t.prototype.getDefaultErrorText=function(e){return a.a.getString("invalidEmail");},t;}(p),v=function(e){function t(){var t=e.call(this)||this;return t.conditionRunner=null,t;}return r.b(t,e),t.prototype.getType=function(){return"expressionvalidator";},Object.defineProperty(t.prototype,"isValidateAllValues",{get:function get(){return!0;},enumerable:!0,configurable:!0}),t.prototype.validateAllValues=function(e,t,n,r){return void 0===r&&(r=null),this.expression?(this.conditionRunner||(this.conditionRunner=new u.a(this.expression)),this.conditionRunner.expression=this.expression,this.conditionRunner.run(t,n)?null:new c(e,this.createCustomError(r))):null;},t.prototype.getDefaultErrorText=function(e){return a.a.getString("invalidExpression").format(this.expression);},t;}(p);s.a.metaData.addClass("surveyvalidator",[{name:"text",serializationProperty:"locText"}]),s.a.metaData.addClass("numericvalidator",["minValue:number","maxValue:number"],function(){return new h();},"surveyvalidator"),s.a.metaData.addClass("textvalidator",["minLength:number","maxLength:number","allowDigits:boolean"],function(){return new f();},"surveyvalidator"),s.a.metaData.addClass("answercountvalidator",["minCount:number","maxCount:number"],function(){return new m();},"surveyvalidator"),s.a.metaData.addClass("regexvalidator",["regex"],function(){return new g();},"surveyvalidator"),s.a.metaData.addClass("emailvalidator",[],function(){return new y();},"surveyvalidator"),s.a.metaData.addClass("expressionvalidator",["expression:condition"],function(){return new v();},"surveyvalidator");},function(e,t,n){"use strict";var r=n(0),i=n(6),o=(n.n(i),n(56)),a=n(23);n.d(t,"a",function(){return u;});var s=n(91),u=function(e){function t(t,n){void 0===t&&(t=null),void 0===n&&(n=null);var r=e.call(this,t,n)||this;r.koExpanded=i.observable(!1),r.koExpandedCss=i.observable(r.getButtonCss());var o=r;return r.expandedChangedCallback=function(){o.koExpanded(o.isExpanded),o.koExpandedCss(o.getButtonCss());},r.showingChangedCallback=function(){o.doShowingChanged();},r.doExpand=function(){o.changeExpanded();},r;}return r.b(t,e),t.prototype.createSurvey=function(e){return new a.a(e);},t.prototype.closeWindowOnComplete=function(){this.hide();},Object.defineProperty(t.prototype,"template",{get:function get(){return this.templateValue?this.templateValue:this.getDefaultTemplate();},set:function set(e){this.templateValue=e;},enumerable:!0,configurable:!0}),t.prototype.doShowingChanged=function(){this.isShowing?(this.windowElement.innerHTML=this.template,i.cleanNode(this.windowElement),i.applyBindings(this,this.windowElement),document.body.appendChild(this.windowElement),this.survey.render(t.surveyElementName)):(document.body.removeChild(this.windowElement),this.windowElement.innerHTML="");},t.prototype.getDefaultTemplate=function(){return s;},Object.defineProperty(t.prototype,"css",{get:function get(){return this.survey.css;},enumerable:!0,configurable:!0}),t.prototype.changeExpanded=function(){this.expandcollapse(!this.isExpanded);},t.prototype.getButtonCss=function(){return this.koExpanded()?this.css.window.header.buttonCollapsed:this.css.window.header.buttonExpanded;},t;}(o.a);},function(e,t){},function(e,t,n){"use strict";var r=n(0),i=n(4),o=n(11),a=n(1),s=n(2),u=n(10);n.d(t,"a",function(){return c;});var l=function(){function e(){this.parser=new DOMParser();}return e.prototype.assignValue=function(e,t,n){Array.isArray(e[t])?e[t].push(n):void 0!==e[t]?e[t]=[e[t]].concat(n):"object"==(typeof n==="undefined"?"undefined":_typeof(n))&&1===Object.keys(n).length&&Object.keys(n)[0]===t?e[t]=n[t]:e[t]=n;},e.prototype.xml2Json=function(e,t){if(e.children&&e.children.length>0)for(var n=0;n<e.children.length;n++){var r=e.children[n],i={};this.xml2Json(r,i),this.assignValue(t,r.nodeName,i);}else this.assignValue(t,e.nodeName,e.textContent);},e.prototype.parseXmlString=function(e){var t=this.parser.parseFromString(e,"text/xml"),n={};return this.xml2Json(t,n),n;},e;}(),c=function(e){function t(){var t=e.call(this)||this;return t.lastObjHash="",t.isRunningValue=!1,t.processedUrl="",t.processedPath="",t.error=null,t;}return r.b(t,e),t.getCachedItemsResult=function(e){var n=e.objHash,r=t.itemsResult[n];return!!r&&(e.getResultCallback&&e.getResultCallback(r),!0);},t.prototype.run=function(e){if(void 0===e&&(e=null),this.url&&this.getResultCallback){if(this.processedText(e),!this.processedUrl)return void this.doEmptyResultCallback({});this.lastObjHash!=this.objHash&&(this.lastObjHash=this.objHash,this.useChangedItemsResults()||(this.error=null,this.sendRequest()));}},Object.defineProperty(t.prototype,"isRunning",{get:function get(){return this.isRunningValue;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isWaitingForParameters",{get:function get(){return this.url&&!this.processedUrl;},enumerable:!0,configurable:!0}),t.prototype.useChangedItemsResults=function(){return t.getCachedItemsResult(this);},t.prototype.doEmptyResultCallback=function(e){var t=[];this.updateResultCallback&&(t=this.updateResultCallback(t,e)),this.getResultCallback(t);},t.prototype.processedText=function(e){if(e){var t=e.processTextEx(this.url,!1),n=e.processTextEx(this.path,!1);t.hasAllValuesOnLastRun&&n.hasAllValuesOnLastRun?(this.processedUrl=t.text,this.processedPath=n.text):(this.processedUrl="",this.processedPath="");}else this.processedUrl=this.url,this.processedPath=this.path;},t.prototype.parseResponse=function(e){var t;if(e&&"function"==typeof e.indexOf&&0===e.indexOf("<")){var n=new l();t=n.parseXmlString(e);}else try{t=JSON.parse(e);}catch(n){t=(e||"").split("\n").map(function(e){return e.trim(" ");}).filter(function(e){return!!e;});}return t;},t.prototype.sendRequest=function(){this.isRunningValue=!0;var e=new XMLHttpRequest();e.open("GET",this.processedUrl),e.setRequestHeader("Content-Type","application/x-www-form-urlencoded");var n=this;e.onload=function(){n.isRunningValue=!1,200===e.status?n.onLoad(n.parseResponse(e.response)):n.onError(e.statusText,e.responseText);};var r={request:e};t.onBeforeSendRequest&&t.onBeforeSendRequest(this,r),r.request.send();},t.prototype.getType=function(){return"choicesByUrl";},Object.defineProperty(t.prototype,"isEmpty",{get:function get(){return!(this.url||this.path||this.valueName||this.titleName);},enumerable:!0,configurable:!0}),t.prototype.getCustomPropertiesNames=function(){for(var e=this.getCustomProperties(),t=new Array(),n=0;n<e.length;n++){t.push(this.getCustomPropertyName(e[n].name));}return t;},t.prototype.getCustomPropertyName=function(e){return e+"Name";},t.prototype.getCustomProperties=function(){for(var e=a.a.metaData.getProperties(this.itemValueType),t=[],n=0;n<e.length;n++){"value"!==e[n].name&&"text"!==e[n].name&&"visibleIf"!==e[n].name&&t.push(e[n]);}return t;},t.prototype.setData=function(e){this.clear(),e.url&&(this.url=e.url),e.path&&(this.path=e.path),e.valueName&&(this.valueName=e.valueName),e.titleName&&(this.titleName=e.titleName);for(var t=this.getCustomPropertiesNames(),n=0;n<t.length;n++){e[t[n]]&&(this[t[n]]=e[t[n]]);}},t.prototype.getData=function(){if(this.isEmpty)return null;var e={};this.url&&(e.url=this.url),this.path&&(e.path=this.path),this.valueName&&(e.valueName=this.valueName),this.titleName&&(e.titleName=this.titleName);for(var t=this.getCustomPropertiesNames(),n=0;n<t.length;n++){this[t[n]]&&(e[t[n]]=this[t[n]]);}return e;},Object.defineProperty(t.prototype,"url",{get:function get(){return this.getPropertyValue("url","");},set:function set(e){this.setPropertyValue("url",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"path",{get:function get(){return this.getPropertyValue("path","");},set:function set(e){this.setPropertyValue("path",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"valueName",{get:function get(){return this.getPropertyValue("valueName","");},set:function set(e){this.setPropertyValue("valueName",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"titleName",{get:function get(){return this.getPropertyValue("titleName","");},set:function set(e){this.setPropertyValue("titleName",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"itemValueType",{get:function get(){if(!this.owner)return"itemvalue";var e=a.a.metaData.findProperty(this.owner.getType(),"choices");return e?"itemvalues"==e.type?"itemvalue":e.type:"itemvalue";},enumerable:!0,configurable:!0}),t.prototype.clear=function(){this.url="",this.path="",this.valueName="",this.titleName="";for(var e=this.getCustomPropertiesNames(),t=0;t<e.length;t++){this[e[t]]&&(this[e[t]]="");}},t.prototype.onLoad=function(e){var n=[],r=this.getResultAfterPath(e);if(r&&r.length)for(var i=0;i<r.length;i++){var a=r[i];if(a){var l=this.getValue(a),c=this.getTitle(a),p=new o.a(l,c);this.setCustomProperties(p,a),n.push(p);}}else this.error=new u.a(s.a.getString("urlGetChoicesError"));this.updateResultCallback&&(n=this.updateResultCallback(n,e)),t.itemsResult[this.objHash]=n,this.getResultCallback(n);},t.prototype.setCustomProperties=function(e,t){for(var n=this.getCustomProperties(),r=0;r<n.length;r++){var i=n[r],o=this.getValueCore(t,this.getPropertyBinding(i.name));this.isValueEmpty(o)||(e[i.name]=o);}},t.prototype.getPropertyBinding=function(e){return this[this.getCustomPropertyName(e)]?this[this.getCustomPropertyName(e)]:this[e]?this[e]:e;},t.prototype.onError=function(e,t){this.error=new u.a(s.a.getString("urlRequestError").format(e,t)),this.doEmptyResultCallback(t);},t.prototype.getResultAfterPath=function(e){if(!e)return e;if(!this.processedPath)return e;for(var t=this.getPathes(),n=0;n<t.length;n++){if(!(e=e[t[n]]))return null;}return e;},t.prototype.getPathes=function(){var e=[];return e=this.processedPath.indexOf(";")>-1?this.path.split(";"):this.processedPath.split(","),0==e.length&&e.push(this.processedPath),e;},t.prototype.getValue=function(e){return e?this.valueName?this.getValueCore(e,this.valueName):e instanceof Object?Object.keys(e).length<1?null:e[Object.keys(e)[0]]:e:null;},t.prototype.getTitle=function(e){var t=this.titleName?this.titleName:"title";return this.getValueCore(e,t);},t.prototype.getValueCore=function(e,t){if(!e)return null;if(t.indexOf(".")<0)return e[t];for(var n=t.split("."),r=0;r<n.length;r++){if(!(e=e[n[r]]))return null;}return e;},Object.defineProperty(t.prototype,"objHash",{get:function get(){return this.processedUrl+";"+this.processedPath+";"+this.valueName+";"+this.titleName;},enumerable:!0,configurable:!0}),t.itemsResult={},t;}(i.c);a.a.metaData.addClass("choicesByUrl",["url","path","valueName","titleName"],function(){return new c();});},function(e,t,n){"use strict";var r=n(9);n.d(t,"a",function(){return o;});var i=function(){function e(e,t){this.at=e,this.code=t;}return e;}(),o=function(){function e(){this.ERROR_OperatorExpected="OPERATOR_EXPECTED",this.ERROR_RightPartExpected="RIGHTPART_EXPECTED",this.ERROR_ExpressionExpected="EXPRESSION_EXPECTED",this.ERROR_EndExpected="END_EXPECTED";}return e.prototype.parse=function(e,t){return this.setProperties(e,t),this.parseText();},e.prototype.createCondition=function(e){var t=new r.b();return this.parse(e,t)||(t=null),t;},e.prototype.parseExpression=function(e){return this.setProperties(e,new r.b()),this.readExpressionOperand();},Object.defineProperty(e.prototype,"error",{get:function get(){return this.errorValue;},enumerable:!0,configurable:!0}),e.prototype.createError=function(e){this.errorValue||(this.errorValue=new i(this.at,e));},e.prototype.setProperties=function(e,t){this.text=e,this.at=0,this.length=this.text.length,this.root=t,this.root.clear(),this.node=this.root,this.expressionNodes=[],this.expressionNodes.push(this.node),this.errorValue=null;},e.prototype.toString=function(e){return e.toString();},e.prototype.parseText=function(){var e=this.readConditions();return this.at<this.length&&this.createError(this.ERROR_EndExpected),e&&this.at>=this.length;},e.prototype.readConditions=function(){var e=this.readCondition();if(!e)return e;var t=this.readConnective();return!t||(this.addConnective(t),this.readConditions());},e.prototype.readCondition=function(){var e=this.readExpression();if(e<0)return!1;if(1==e)return!0;var t=this.readExpressionOperand();if(!t)return this.createError(this.ERROR_ExpressionExpected),!1;var n=this.readOperator();if(!n){if(t.isBoolean){var i=new r.c();return i.left=t,this.addCondition(i),!0;}return this.createError(this.ERROR_OperatorExpected),!1;}var i=new r.c();if(i.left=t,i.operator=n,!r.c.isNoRightOperation(n)){var o=this.readExpressionOperand();if(!o)return this.createError(this.ERROR_RightPartExpected),!1;i.right=o;}return this.addCondition(i),!0;},e.prototype.readOperand=function(){var e=this.readArray();if(e)return new r.d(e);var t=this.readString();if(!t)return null;var n=this.readParameters();if(n){var i=new r.e(t);return i.parameters=n,i;}return new r.d(t);},e.prototype.readNotOperand=function(){this.skip();var e=this.at,t=this.readString();return!(!t||"not"!=t.toLowerCase()&&"!"!=t)||(this.at=e,!1);},e.prototype.readExpression=function(){var e=this.readNotOperand();if(this.at>=this.length||"("!=this.ch)return 0;this.at++,this.pushExpression();var t=this.readConditions();return t?(this.skip(),t=")"==this.ch,this.at++,this.popExpression(e),1):-1;},e.prototype.readExpressionOperand=function(e,t){void 0===e&&(e=null),void 0===t&&(t=null);var n=this.readNotOperand();if(this.at>=this.length)return null;var i=this.isOpenBracket(this.ch);i&&(this.at++,this.pushExpression());var o=this.readOperand();if(!o)return null;var a=this.readOperandOperator();if(!a){if(null!=e&&(e.right=o,o=e),this.isCloseBracket(this.ch)){e=t&&t.length>0?t.pop():null;var s=this.at;this.at++,a=this.readOperandOperator();var u=a||e&&e.isOpenBracket;a||(this.at=s+(u?1:0)),u&&this.popExpression(n);}if(a){var l=new r.f();return l.left=e||o,l.operator=a,this.readExpressionOperand(l,t);}return o;}var l=new r.f();if(l.isOpenBracket=i,l.left=o,l.operator=a,t||(t=[]),(0==t.length||i)&&t.push(l),e){if(i||!this.isHighPriorityOperand(e.operator)&&this.isHighPriorityOperand(a))return e.right=this.readExpressionOperand(l,t),e;e.right=o,l.left=e;var c=t.indexOf(e);c>-1&&(t[c]=l);}return this.readExpressionOperand(l,t);},Object.defineProperty(e.prototype,"ch",{get:function get(){return this.text.charAt(this.at);},enumerable:!0,configurable:!0}),e.prototype.skip=function(){for(;this.at<this.length&&this.isSpace(this.ch);){this.at++;}},e.prototype.isSpace=function(e){return" "==e||"\n"==e||"\t"==e||"\r"==e;},e.prototype.isQuotes=function(e){return"'"==e||'"'==e;},e.prototype.isComma=function(e){return","==e;},e.prototype.isOperatorChar=function(e){return">"==e||"<"==e||"="==e||"!"==e||"+"==e||"-"==e||"*"==e||"^"==e||"/"==e||"%"==e;},e.prototype.isOpenBracket=function(e){return"("==e;},e.prototype.isCloseBracket=function(e){return")"==e;},e.prototype.isBrackets=function(e){return this.isOpenBracket(e)||this.isCloseBracket(e);},e.prototype.readArray=function(){if(this.skip(),this.at>=this.length)return null;if("["!==this.ch)return null;this.at++;for(var e=[];this.at<this.length;){var t=this.readString();t&&e.push(t),this.skip();var n=this.ch;if(","==n&&this.at++,"]"==n){this.at++;break;}}return e;},e.prototype.readString=function(){if(this.skip(),this.at>=this.length)return null;var e=this.at,t=this.isQuotes(this.ch),n="{"==this.ch;t&&this.at++;for(var r=this.isOperatorChar(this.ch),i=!1;this.at<this.length;){if(n){var o="}"==this.ch;if(this.at++,o)break;}else{if(!t&&this.isSpace(this.ch))break;if(this.isQuotes(this.ch)&&!i){t&&this.at++;break;}if(!t){if("-"!=this.ch&&r!=this.isOperatorChar(this.ch))break;if(this.isBrackets(this.ch)||this.isComma(this.ch))break;if("]"===this.ch)break;}i="\\"===this.ch,this.at++;}}if(this.at<=e)return null;var a=this.text.substr(e,this.at-e);if(a&&a.length>1&&this.isQuotes(a[0])){var s=a.length-1;this.isQuotes(a[a.length-1])&&s--,a=a.substr(1,s);}return a;},e.prototype.readParameter=function(){for(var t=0,n=this.at;this.at<this.length&&(this.isOpenBracket(this.ch)&&t++,this.isCloseBracket(this.ch)&&t--,!(t<0))&&(0!==t||","!==this.ch);){this.at++;}var i=this.text.substring(n,this.at);if(!i)return null;var o=new e(),a=new r.b();return o.parse(i,a)?new r.g(a):o.parseExpression(i);},e.prototype.readParameters=function(){if(!this.isOpenBracket(this.ch))return null;for(var e=[];this.at<this.length&&!this.isCloseBracket(this.ch);){this.at++;var t=this.readParameter();t&&e.push(t);}return this.at++,e;},e.prototype.isHighPriorityOperand=function(e){return"*"==e||"^"==e||"/"==e||"%"==e;},e.prototype.readOperandOperator=function(){if(this.skip(),"+"==this.ch||"-"==this.ch||"*"==this.ch||"^"==this.ch||"/"==this.ch||"%"==this.ch){var e=this.ch;return this.at++,e;}return null;},e.prototype.readOperator=function(){this.skip();var e=this.at,t=this.readString();return t?(t=t.toLowerCase(),">"==t&&(t="greater"),"<"==t&&(t="less"),">="!=t&&"=>"!=t||(t="greaterorequal"),"<="!=t&&"=<"!=t||(t="lessorequal"),"="!=t&&"=="!=t||(t="equal"),"<>"!=t&&"!="!=t||(t="notequal"),"equals"==t&&(t="equal"),"notequals"==t&&(t="notequals"),"contain"!=t&&"*="!=t||(t="contains"),"notcontain"==t&&(t="notcontains"),r.c.isCorrectOperator(t)?t:(this.at=e,null)):null;},e.prototype.readConnective=function(){var e=this.readString();return e?(e=e.toLowerCase(),"&"!=e&&"&&"!=e||(e="and"),"|"!=e&&"||"!=e||(e="or"),"and"!=e&&"or"!=e&&(e=null),e):null;},e.prototype.pushExpression=function(){var e=null;this.expressionNodes.push(e),this.node=e;},e.prototype.makeNodeCondition=function(){this.node&&this.node.children||(this.node=new r.b(),this.expressionNodes[this.expressionNodes.length-1]=this.node);},e.prototype.popExpression=function(e){var t=this.expressionNodes.pop();this.node=this.expressionNodes[this.expressionNodes.length-1],t&&(t.isNot=e,this.makeNodeCondition(),this.node.children.push(t));},e.prototype.addCondition=function(e){this.makeNodeCondition(),this.node.children.push(e);},e.prototype.addConnective=function(e){if(this.makeNodeCondition(),this.node.children.length<2)this.node.connective=e;else if(this.node.connective!=e){var t=this.node.connective,n=this.node.children;this.node.clear(),this.node.connective=e;var i=new r.b();i.connective=t,i.children=n,this.node.children.push(i);var o=new r.b();this.node.children.push(o),this.node=o;}},e;}();},function(e,t,n){"use strict";n.d(t,"a",function(){return r;});var r=function(){function e(){}return e.prototype.loadSurvey=function(t,n){var r=new XMLHttpRequest();r.open("GET",e.serviceUrl+"/getSurvey?surveyId="+t),r.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),r.onload=function(){var e=JSON.parse(r.response);n(200==r.status,e,r.response);},r.send();},e.prototype.getSurveyJsonAndIsCompleted=function(t,n,r){var i=new XMLHttpRequest();i.open("GET",e.serviceUrl+"/getSurveyAndIsCompleted?surveyId="+t+"&clientId="+n),i.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),i.onload=function(){var e=JSON.parse(i.response),t=e?e.survey:null,n=e?e.isCompleted:null;r(200==i.status,t,n,i.response);},i.send();},e.prototype.sendResult=function(t,n,r,i,o){void 0===i&&(i=null),void 0===o&&(o=!1);var a=new XMLHttpRequest();a.open("POST",e.serviceUrl+"/post/"),a.setRequestHeader("Content-Type","application/json; charset=utf-8");var s={postId:t,surveyResult:JSON.stringify(n)};i&&(s.clientId=i),o&&(s.isPartialCompleted=!0);var u=JSON.stringify(s);a.onload=a.onerror=function(){r&&r(200==a.status,a.response);},a.send(u);},e.prototype.sendFile=function(t,n,r){var i=new XMLHttpRequest();i.onload=i.onerror=function(){r&&r(200==i.status,JSON.parse(i.response));},i.open("POST",e.serviceUrl+"/upload/",!0);var o=new FormData();o.append("file",n),o.append("postId",t),i.send(o);},e.prototype.getResult=function(t,n,r){var i=new XMLHttpRequest(),o="resultId="+t+"&name="+n;i.open("GET",e.serviceUrl+"/getResult?"+o),i.setRequestHeader("Content-Type","application/x-www-form-urlencoded");i.onload=function(){var e=null,t=null;if(200==i.status){e=JSON.parse(i.response),t=[];for(var n in e.QuestionResult){var o={name:n,value:e.QuestionResult[n]};t.push(o);}}r(200==i.status,e,t,i.response);},i.send();},e.prototype.isCompleted=function(t,n,r){var i=new XMLHttpRequest(),o="resultId="+t+"&clientId="+n;i.open("GET",e.serviceUrl+"/isCompleted?"+o),i.setRequestHeader("Content-Type","application/x-www-form-urlencoded");i.onload=function(){var e=null;200==i.status&&(e=JSON.parse(i.response)),r(200==i.status,e,i.response);},i.send();},e.serviceUrl="https://dxsurveyapi.azurewebsites.net/api/Survey",e;}();},function(e,t,n){"use strict";function r(e){for(var t=0,n=0;n<e.length;n++){t+=e[n];}return t;}function i(e){for(var t=0,n=0;n<e.length;n++){t+=e[n];}return e.length>0?t/e.length:0;}function o(e){if(2!=e.length)return 0;var t=e[0];if(Array.isArray(t)){var n=e[1];if("string"!=typeof n&&!(n instanceof String))return 0;for(var r=0,i=0;i<t.length;i++){var o=t[i];o&&o[n]&&(r+=o[n]);}return r;}}function a(e){return e||3===e.length?e[0]?e[1]:e[2]:"";}function s(e){if(!e&&e.length<1)return null;if(!e[0])return null;var t=new Date(e[0]),n=Date.now()-t.getTime(),r=new Date(n);return Math.abs(r.getUTCFullYear()-1970);}function u(e){if(!e&&e.length<1)return!1;if(!e[0]||!this.survey)return!1;var t=e[0],n=this.survey.getPageByName(t);if(n||(n=this.survey.getPanelByName(t)),!n)return!1;for(var r=n.questions,i=0;i<r.length;i++){if(r[i].hasErrors(!1))return!1;}return!0;}function l(){return this.survey&&this.survey.isDisplayMode;}n.d(t,"a",function(){return c;});var c=function(){function e(){this.functionHash={};}return e.prototype.register=function(e,t){this.functionHash[e]=t;},e.prototype.unregister=function(e){delete this.functionHash[e];},e.prototype.clear=function(){this.functionHash={};},e.prototype.getAll=function(){var e=[];for(var t in this.functionHash){e.push(t);}return e.sort();},e.prototype.run=function(e,t,n){void 0===n&&(n=null);var r=this.functionHash[e];if(!r)return null;var i={func:r};if(n)for(var o in n){i[o]=n[o];}return i.func(t);},e.Instance=new e(),e;}();c.Instance.register("sum",r),c.Instance.register("avg",i),c.Instance.register("sumInArray",o),c.Instance.register("iif",a),c.Instance.register("age",s),c.Instance.register("isContainerReady",u),c.Instance.register("isDisplayMode",l);},function(e,t,n){"use strict";var r=n(0),i=n(6),o=(n.n(i),n(4)),a=n(49),s=n(17),u=n(1),l=n(3),c=n(7);n.d(t,"b",function(){return p;}),n.d(t,"a",function(){return d;});var p=function(e){function t(t){var n=e.call(this,t)||this,r=n;n.koCellAfterRender=function(e,t){return r.cellAfterRender(e,t);},n.koRecalc=i.observable(0),n.koRows=i.pureComputed(function(){return this.koRecalc(),this.question.visibleRows;},n);var r=n;return n.question.visibleRowsChangedCallback=function(){r.onVisibleRowsChanged();},n.koAddRowClick=function(){r.addRow();},n.koRemoveRowClick=function(e){r.removeRow(e);},n.koIsAddRowOnTop=i.pureComputed(function(){return r.koRecalc(),r.isAddRowTop();}),n.koIsAddRowOnBottom=i.pureComputed(function(){return r.koRecalc(),r.isAddRowBottom();}),n.koCanRemoveRow=i.pureComputed(function(){return r.koRecalc(),r.canRemoveRow();}),n.koIsHorizontalColumnLayout=i.observable(n.question.isColumnLayoutHorizontal),n.question.koRows=n.koRows,n.question.koCellAfterRender=n.koCellAfterRender,n.question.koAddRowClick=n.koAddRowClick,n.question.koRemoveRowClick=n.koRemoveRowClick,n.question.koIsAddRowOnTop=n.koIsAddRowOnTop,n.question.koIsAddRowOnBottom=n.koIsAddRowOnBottom,n.question.koCanRemoveRow=n.koCanRemoveRow,n.question.koIsHorizontalColumnLayout=n.koIsHorizontalColumnLayout,n.question.hasRowText=n.hasRowText(),n.question.columnsChangedCallback=function(){r.onColumnChanged();},n.question.updateCellsCallback=function(){r.onUpdateCells();},n.question.columnLayoutChangedCallback=function(){r.onColumnLayoutChanged();},n;}return r.b(t,e),t.prototype.getQuestionTemplate=function(){return"matrixdynamic";},t.prototype.cellAfterRender=function(e,t){if(this.question.survey){var n=o.a.GetFirstNonTextElement(e);if(n){var r=t;r.question.customWidget&&r.question.customWidget.afterRender(r.question,n);var i={cell:r,cellQuestion:r.question,htmlElement:n,row:r.row,column:r.column};this.question.survey.matrixAfterCellRender(this.question,i);}}},t.prototype.onSurveyLoad=function(){e.prototype.onSurveyLoad.call(this),this.onColumnLayoutChanged();},t.prototype.hasRowText=function(){return!0;},t.prototype.onColumnLayoutChanged=function(){this.koIsHorizontalColumnLayout(this.question.isColumnLayoutHorizontal),this.koRecalc(this.koRecalc()+1);},t.prototype.isAddRowTop=function(){return!1;},t.prototype.isAddRowBottom=function(){return!1;},t.prototype.canRemoveRow=function(){return!1;},t.prototype.onColumnChanged=function(){this.question.visibleRows;this.onVisibleRowsChanged();},t.prototype.onVisibleRowsChanged=function(){this.koRecalc(this.koRecalc()+1);},t.prototype.addRow=function(){},t.prototype.removeRow=function(e){},t.prototype.onUpdateCells=function(){},t;}(c.a),d=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,new p(n),n;}return r.b(t,e),t;}(a.a);u.a.metaData.overrideClassCreatore("matrixdropdown",function(){return new d("");}),l.a.Instance.registerQuestion("matrixdropdown",function(e){var t=new d(e);return t.choices=[1,2,3,4,5],t.rows=l.a.DefaultRows,s.a.addDefaultColumns(t),t;});},function(e,t,n){"use strict";var r=n(0),i=n(27),o=n(1),a=n(3),s=n(7),u=n(5);n.d(t,"a",function(){return c;});var l=function(e){function t(t){var n=e.call(this,t)||this;return n.question=t,n;}return r.b(t,e),t.prototype.updateValue=function(t){e.prototype.updateValue.call(this,t),u.a.isTwoValueEquals(t,this.question.value)||this.koValue(this.question.value);},t;}(s.a),c=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,new l(n),n;}return r.b(t,e),t;}(i.a);o.a.metaData.overrideClassCreatore("text",function(){return new c("");}),a.a.Instance.registerQuestion("text",function(e){return new c(e);});},function(e,t,n){"use strict";n.d(t,"b",function(){return r;}),n.d(t,"a",function(){return i;});var r=n(90),i=function(){function e(){}return e.prototype.addText=function(e,t,n){t=this.getId(t,n),this.text=this.text+'<script type="text/html" '+t+">"+e+"<\/script>";},e.prototype.replaceText=function(e,t,n){void 0===n&&(n=null);var r=this.getId(t,n),i=this.text.indexOf(r);if(i<0)return void this.addText(e,t,n);if(!((i=this.text.indexOf(">",i))<0)){var o=i+1;i=this.text.indexOf("<\/script>",o),i<0||(this.text=this.text.substr(0,o)+e+this.text.substr(i));}},e.prototype.getId=function(e,t){var n='id="survey-'+e;return t&&(n+="-"+t),n+'"';},Object.defineProperty(e.prototype,"text",{get:function get(){return r;},set:function set(e){r=e;},enumerable:!0,configurable:!0}),e;}();},function(e,t,n){"use strict";n.d(t,"a",function(){return r;});var r={pagePrevText:"Previous",pageNextText:"Next",completeText:"Complete",startSurveyText:"Start",otherItemText:"Other (describe)",noneItemText:"None",progressText:"Page {0} of {1}",emptySurvey:"There is no visible page or question in the survey.",completingSurvey:"Thank you for completing the survey!",completingSurveyBefore:"Our records show that you have already completed this survey.",loadingSurvey:"Survey is loading...",optionsCaption:"Choose...",value:"value",requiredError:"Please answer the question.",requiredErrorInPanel:"Please answer at least one question.",requiredInAllRowsError:"Please answer questions in all rows.",numericError:"The value should be numeric.",textMinLength:"Please enter at least {0} characters.",textMaxLength:"Please enter less than {0} characters.",textMinMaxLength:"Please enter more than {0} and less than {1} characters.",minRowCountError:"Please fill in at least {0} rows.",minSelectError:"Please select at least {0} variants.",maxSelectError:"Please select no more than {0} variants.",numericMinMax:"The '{0}' should be equal or more than {1} and equal or less than {2}",numericMin:"The '{0}' should be equal or more than {1}",numericMax:"The '{0}' should be equal or less than {1}",invalidEmail:"Please enter a valid e-mail address.",invalidExpression:"The expression: {0} should return 'true'.",urlRequestError:"The request returned error '{0}'. {1}",urlGetChoicesError:"The request returned empty data or the 'path' property is incorrect",exceedMaxSize:"The file size should not exceed {0}.",otherRequiredError:"Please enter the other value.",uploadingFile:"Your file is uploading. Please wait several seconds and try again.",loadingFile:"Loading...",chooseFile:"Choose file(s)...",confirmDelete:"Do you want to delete the record?",keyDuplicationError:"This value should be unique.",addColumn:"Add column",addRow:"Add row",removeRow:"Remove",addPanel:"Add new",removePanel:"Remove",choices_Item:"item",matrix_column:"Column",matrix_row:"Row",savingData:"The results are saving on the server...",savingDataError:"An error occurred and we could not save the results.",savingDataSuccess:"The results were saved successfully!",saveAgainButton:"Try again",timerMin:"min",timerSec:"sec",timerSpentAll:"You have spent {0} on this page and {1} in total.",timerSpentPage:"You have spent {0} on this page.",timerSpentSurvey:"You have spent {0} in total.",timerLimitAll:"You have spent {0} of {1} on this page and {2} of {3} in total.",timerLimitPage:"You have spent {0} of {1} on this page.",timerLimitSurvey:"You have spent {0} of {1} in total.",cleanCaption:"Clean",clearCaption:"Clear"};},function(e,t,n){"use strict";var r=n(0),i=n(3),o=n(1),a=n(8);n.d(t,"a",function(){return s;});var s=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,n.createLocalizableString("label",n,!0),n;}return r.b(t,e),t.prototype.getType=function(){return"boolean";},Object.defineProperty(t.prototype,"isIndeterminate",{get:function get(){return this.isEmpty();},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"hasTitle",{get:function get(){return this.showTitle;},enumerable:!0,configurable:!0}),t.prototype.supportGoNextPageAutomatic=function(){return!0;},Object.defineProperty(t.prototype,"checkedValue",{get:function get(){return this.isEmpty()?null:this.value==this.getValueTrue();},set:function set(e){this.isValueEmpty(e)?this.value=null:this.value=1==e?this.getValueTrue():this.getValueFalse();},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"defaultValue",{get:function get(){return this.getPropertyValue("defaultValue","indeterminate");},set:function set(e){this.setPropertyValue("defaultValue",e),this.updateValueWithDefaults();},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"label",{get:function get(){return this.getLocalizableStringText("label");},set:function set(e){this.setLocalizableStringText("label",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locLabel",{get:function get(){return this.getLocalizableString("label");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locDisplayLabel",{get:function get(){return this.locLabel.text?this.locLabel:this.showTitle?this.locLabel:this.locTitle;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"showTitle",{get:function get(){return this.getPropertyValue("showTitle");},set:function set(e){this.setPropertyValue("showTitle",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"valueTrue",{get:function get(){return this.getPropertyValue("valueTrue");},set:function set(e){this.setPropertyValue("valueTrue",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"valueFalse",{get:function get(){return this.getPropertyValue("valueFalse");},set:function set(e){this.setPropertyValue("valueFalse",e);},enumerable:!0,configurable:!0}),t.prototype.getValueTrue=function(){return!this.valueTrue||this.valueTrue;},t.prototype.getValueFalse=function(){return!!this.valueFalse&&this.valueFalse;},t.prototype.setDefaultValue=function(){"true"==this.defaultValue&&(this.checkedValue=!0),"false"==this.defaultValue&&(this.checkedValue=!1),"indeterminate"==this.defaultValue&&(this.value=null);},t;}(a.a);o.a.metaData.addClass("boolean",[{name:"defaultValue:dropdown",alternativeName:"booleanDefaultValue",default:"indeterminate",choices:["indeterminate","false","true"]},{name:"label:text",serializationProperty:"locLabel"},"showTitle:boolean","valueTrue","valueFalse"],function(){return new s("");},"question"),i.a.Instance.registerQuestion("boolean",function(e){return new s(e);});},function(e,t,n){"use strict";var r=n(0),i=n(1),o=n(3),a=n(16),s=n(5),u=n(11),l=n(2);n.d(t,"a",function(){return c;});var c=function(e){function t(t){var n=e.call(this,t)||this;n.name=t,n.noneItemValue=new u.a("none");var r=n.createLocalizableString("noneText",n,!0);r.onGetTextCallback=function(e){return e||l.a.getString("noneItemText");},n.noneItemValue.locOwner=n,n.noneItemValue.setLocText(r);var i=n;return n.registerFunctionOnPropertiesValueChanged(["hasNone","noneText"],function(){i.onVisibleChoicesChanged();}),n;}return r.b(t,e),Object.defineProperty(t.prototype,"noneItem",{get:function get(){return this.noneItemValue;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"noneText",{get:function get(){return this.getLocalizableStringText("noneText",l.a.getString("noneItemText"));},set:function set(e){this.setLocalizableStringText("noneText",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locNoneText",{get:function get(){return this.getLocalizableString("noneText");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"hasNone",{get:function get(){return this.getPropertyValue("hasNone",!1);},set:function set(e){this.setPropertyValue("hasNone",e);},enumerable:!0,configurable:!0}),t.prototype.setNewValue=function(t){if(this.hasNone){var n=this.value;if(!s.a.isTwoValueEquals(n,t)){var r=this.noneIndexInArray(n),i=this.noneIndexInArray(t);r>-1?i>-1&&t.length>1&&t.splice(i,1):i>-1&&(t=[this.noneItem.value]);}}e.prototype.setNewValue.call(this,t);},t.prototype.noneIndexInArray=function(e){if(!e||!Array.isArray(e))return-1;for(var t=this.noneItem.value,n=0;n<e.length;n++){if(e[n]==t)return n;}return-1;},t.prototype.canUseFilteredChoices=function(){return!this.hasNone&&e.prototype.canUseFilteredChoices.call(this);},t.prototype.addToVisibleChoices=function(t){this.hasNone&&t.push(this.noneItem),e.prototype.addToVisibleChoices.call(this,t);},t.prototype.getDisplayValueCore=function(e){if(this.isEmpty())return"";for(var t=this.visibleChoices,n=this.value,r="",i=0;i<n.length;i++){var o=this.getChoicesDisplayValue(t,n[i]);o&&(r&&(r+=", "),r+=o);}return r;},t.prototype.clearIncorrectValues=function(){var e=this.value;if(e){if(!Array.isArray(e)||0==e.length)return void this.clearValue();for(var t=[],n=0;n<e.length;n++){this.hasUnknownValue(e[n],!0)||t.push(e[n]);}t.length!=e.length&&(0==t.length?this.clearValue():this.value=t);}},t.prototype.getConditionJson=function(t,n){void 0===t&&(t=null),void 0===n&&(n=null);var r=e.prototype.getConditionJson.call(this);return"contains"!=t&&"notcontains"!=t||(r.type="radiogroup"),r;},t.prototype.getValueCore=function(){return e.prototype.getValueCore.call(this)||[];},t.prototype.isAnswerCorrect=function(){return s.a.isArrayContainsEqual(this.value,this.correctAnswer);},t.prototype.getHasOther=function(e){return!(!e||!Array.isArray(e))&&e.indexOf(this.otherItem.value)>=0;},t.prototype.valueFromData=function(t){return t?Array.isArray(t)?e.prototype.valueFromData.call(this,t):[t]:t;},t.prototype.valueFromDataCore=function(e){for(var t=0;t<e.length;t++){if(e[t]==this.otherItem.value)return e;if(this.hasUnknownValue(e[t])){this.comment=e[t];var n=e.slice();return n[t]=this.otherItem.value,n;}}return e;},t.prototype.valueToDataCore=function(e){if(!e||!e.length)return e;for(var t=0;t<e.length;t++){if(e[t]==this.otherItem.value&&this.getComment()){var n=e.slice();return n[t]=this.getComment(),n;}}return e;},t.prototype.getType=function(){return"checkbox";},t;}(a.a);i.a.metaData.addClass("checkbox",["hasNone:boolean",{name:"noneText",serializationProperty:"locNoneText"}],function(){return new c("");},"checkboxbase"),o.a.Instance.registerQuestion("checkbox",function(e){var t=new c(e);return t.choices=o.a.DefaultChoices,t;});},function(e,t,n){"use strict";var r=n(0),i=n(8),o=n(1),a=n(3),s=n(5);n.d(t,"a",function(){return u;});var u=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,n.createLocalizableString("placeHolder",n),n;}return r.b(t,e),Object.defineProperty(t.prototype,"maxLength",{get:function get(){return this.getPropertyValue("maxLength",-1);},set:function set(e){this.setPropertyValue("maxLength",e);},enumerable:!0,configurable:!0}),t.prototype.getMaxLength=function(){return s.a.getMaxLength(this.maxLength,this.survey?this.survey.maxTextLength:-1);},Object.defineProperty(t.prototype,"placeHolder",{get:function get(){return this.getLocalizableStringText("placeHolder");},set:function set(e){this.setLocalizableStringText("placeHolder",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locPlaceHolder",{get:function get(){return this.getLocalizableString("placeHolder");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"rows",{get:function get(){return this.getPropertyValue("rows",4);},set:function set(e){this.setPropertyValue("rows",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"cols",{get:function get(){return this.getPropertyValue("cols",50);},set:function set(e){this.setPropertyValue("cols",e);},enumerable:!0,configurable:!0}),t.prototype.getType=function(){return"comment";},t.prototype.isEmpty=function(){return e.prototype.isEmpty.call(this)||""===this.value;},t;}(i.a);o.a.metaData.addClass("comment",[{name:"maxLength:number",default:-1},{name:"cols:number",default:50},{name:"rows:number",default:4},{name:"placeHolder",serializationProperty:"locPlaceHolder"}],function(){return new u("");},"question"),a.a.Instance.registerQuestion("comment",function(e){return new u(e);});},function(e,t,n){"use strict";var r=n(0),i=n(1),o=n(8);n.d(t,"a",function(){return a;});var a=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,n;}return r.b(t,e),t.prototype.getType=function(){return"empty";},t;}(o.a);i.a.metaData.addClass("empty",[],function(){return new a("");},"question");},function(e,t,n){"use strict";function r(){return["AED","AFN","ALL","AMD","ANG","AOA","ARS","AUD","AWG","AZN","BAM","BBD","BDT","BGN","BHD","BIF","BMD","BND","BOB","BOV","BRL","BSD","BTN","BWP","BYN","BZD","CAD","CDF","CHE","CHF","CHW","CLF","CLP","CNY","COP","COU","CRC","CUC","CUP","CVE","CZK","DJF","DKK","DOP","DZD","EGP","ERN","ETB","EUR","FJD","FKP","GBP","GEL","GHS","GIP","GMD","GNF","GTQ","GYD","HKD","HNL","HRK","HTG","HUF","IDR","ILS","INR","IQD","IRR","ISK","JMD","JOD","JPY","KES","KGS","KHR","KMF","KPW","KWD","KYD","KZT","LAK","LBP","LKR","LRD","LSL","LYD","MAD","MDL","MGA","MKD","MMK","MNT","MOP","MRO","MUR","MVR","MWK","MXN","MXV","MYR","MZN","NAD","NGN","NIO","NOK","NPR","NZD","OMR","PAB","PEN","PGK","PHP","PKR","PLN","PYG","QAR","RON","RSD","RUB","RWF","SAR","SBD","SCR","SDG","SEK","SGD","SHP","SLL","SOS","SRD","SSP","STD","SVC","SYP","SZL","THB","TJS","TMT","TND","TOP","TRY","TTD","TWD","TZS","UAH","UGX","USD","USN","UYI","UYU","UZS","VEF","VND","VUV","WST","XAF","XAG","XAU","XBA","XBB","XBC","XBD","XCD","XDR","XOF","XPD","XPF","XPT","XSU","XTS","XUA","XXX","YER","ZAR","ZAR","ZMW","ZWL"];}var i=n(0),o=n(8),a=n(1),s=n(3),u=n(9);n.d(t,"a",function(){return l;});var l=function(e){function t(t){var n=e.call(this,t)||this;n.name=t,n.createLocalizableString("format",n);var r=n;return n.registerFunctionOnPropertyValueChanged("expression",function(){r.expressionRunner&&(r.expressionRunner=new u.h(r.expression));}),n;}return i.b(t,e),t.prototype.getType=function(){return"expression";},Object.defineProperty(t.prototype,"format",{get:function get(){return this.getLocalizableStringText("format","");},set:function set(e){this.setLocalizableStringText("format",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locFormat",{get:function get(){return this.getLocalizableString("format");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"expression",{get:function get(){return this.getPropertyValue("expression","");},set:function set(e){this.setPropertyValue("expression",e);},enumerable:!0,configurable:!0}),t.prototype.runCondition=function(t,n){e.prototype.runCondition.call(this,t,n),this.expression&&!this.expressionIsRunning&&(this.expressionIsRunning=!0,this.expressionRunner||(this.expressionRunner=new u.h(this.expression)),this.value=this.expressionRunner.run(t,n),this.expressionIsRunning=!1);},Object.defineProperty(t.prototype,"maximumFractionDigits",{get:function get(){return this.getPropertyValue("maximumFractionDigits",-1);},set:function set(e){e<-1||e>20||this.setPropertyValue("maximumFractionDigits",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"minimumFractionDigits",{get:function get(){return this.getPropertyValue("minimumFractionDigits",-1);},set:function set(e){e<-1||e>20||this.setPropertyValue("minimumFractionDigits",e);},enumerable:!0,configurable:!0}),t.prototype.getDisplayValueCore=function(e){var t=this.isValueEmpty(this.value)?this.defaultValue:this.value;if(this.isValueEmpty(t))return"";var n=this.getValueAsStr(t);return this.format?this.format.format(n):n;},Object.defineProperty(t.prototype,"displayStyle",{get:function get(){return this.getPropertyValue("displayStyle","none");},set:function set(e){this.setPropertyValue("displayStyle",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"currency",{get:function get(){return this.getPropertyValue("currency","USD");},set:function set(e){r().indexOf(e)<0||this.setPropertyValue("currency",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"useGrouping",{get:function get(){return this.getPropertyValue("useGrouping",!0);},set:function set(e){this.setPropertyValue("useGrouping",e);},enumerable:!0,configurable:!0}),t.prototype.getValueAsStr=function(e){if("none"!=this.displayStyle&&!isNaN(parseFloat(e))&&isFinite(e)){var t=this.getLocale();t||(t="en");var n={style:this.displayStyle,currency:this.currency,useGrouping:this.useGrouping};return this.maximumFractionDigits>-1&&(n.maximumFractionDigits=this.maximumFractionDigits),this.minimumFractionDigits>-1&&(n.minimumFractionDigits=this.minimumFractionDigits),e.toLocaleString(t,n);}return e.toString();},t;}(o.a);a.a.metaData.addClass("expression",["expression:expression",{name:"format",serializationProperty:"locFormat"},{name:"displayStyle",default:"decimal",choices:["none","decimal","currency","percent"]},{name:"currency",choices:function choices(){return r();},default:"USD"},{name:"maximumFractionDigits:number",default:-1},{name:"minimumFractionDigits:number",default:-1},{name:"useGrouping:boolean",default:!0},{name:"commentText",visible:!1},{name:"enableIf",visible:!1},{name:"isRequired",visible:!1},{name:"readOnly",visible:!1},{name:"requiredErrorText",visible:!1},{name:"validators",visible:!1}],function(){return new l("");},"question"),s.a.Instance.registerQuestion("expression",function(e){return new l(e);});},function(e,t,n){"use strict";var r=n(0),i=n(8),o=n(1),a=n(3),s=n(4),u=n(10),l=n(2);n.d(t,"a",function(){return c;});var c=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,n.isUploading=!1,n.onStateChanged=new s.b(),n.previewValue=[],n.currentState="empty",n;}return r.b(t,e),t.prototype.getType=function(){return"file";},Object.defineProperty(t.prototype,"showPreview",{get:function get(){return this.getPropertyValue("showPreview",!1);},set:function set(e){this.setPropertyValue("showPreview",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"allowMultiple",{get:function get(){return this.getPropertyValue("allowMultiple",!1);},set:function set(e){this.setPropertyValue("allowMultiple",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"imageHeight",{get:function get(){return this.getPropertyValue("imageHeight");},set:function set(e){this.setPropertyValue("imageHeight",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"imageWidth",{get:function get(){return this.getPropertyValue("imageWidth");},set:function set(e){this.setPropertyValue("imageWidth",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"acceptedTypes",{get:function get(){return this.getPropertyValue("acceptedTypes");},set:function set(e){this.setPropertyValue("acceptedTypes",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"storeDataAsText",{get:function get(){return this.getPropertyValue("storeDataAsText",!0);},set:function set(e){this.setPropertyValue("storeDataAsText",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"waitForUpload",{get:function get(){return this.getPropertyValue("waitForUpload",!1);},set:function set(e){this.setPropertyValue("waitForUpload",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"maxSize",{get:function get(){return this.getPropertyValue("maxSize",0);},set:function set(e){this.setPropertyValue("maxSize",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"cleanButtonCaption",{get:function get(){return l.a.getString("cleanCaption");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"inputTitle",{get:function get(){return this.isUploading?l.a.getString("loadingFile"):this.isEmpty()?l.a.getString("chooseFile"):"";},enumerable:!0,configurable:!0}),t.prototype.clear=function(){var e=this;this.survey.clearFiles(this.name,this.value,function(t,n){"success"===t&&(e.value=void 0);});},t.prototype.loadFiles=function(e){var t=this;if(this.survey&&!e.every(function(e){return t.checkFileForErrors(e);}))if(this.clear(),this.stateChanged("loading"),this.storeDataAsText){var n=[];e.forEach(function(r){var i=new FileReader();i.onload=function(o){n=n.concat([{name:r.name,type:r.type,content:i.result}]),n.length===e.length&&(t.value=n);},i.readAsDataURL(r);});}else this.survey.uploadFiles(this.name,e,function(e,n){"error"===e&&t.stateChanged("error"),"success"===e&&(t.value=n.map(function(e){return{name:e.file.name,type:e.file.type,content:e.content};}));});},t.prototype.setNewValue=function(t){var n=this;if(e.prototype.setNewValue.call(this,t),this.previewValue=[],this.stateChanged(t?this.showPreview?"loading":"loaded":"empty"),this.showPreview&&t){var r=Array.isArray(t)?t:t?[t]:[];this.storeDataAsText?(r.forEach(function(e){var t=e.content||e;n.isFileContentImage(t)&&(n.previewValue=n.previewValue.concat([t]));}),this.stateChanged("loaded")):r.forEach(function(e){var t=e.content||e;n.survey.downloadFile(n.name,t,function(e,t){"success"===e?(n.previewValue=n.previewValue.concat([t]),n.previewValue.length===r.length&&n.stateChanged("loaded")):n.stateChanged("error");});});}},t.prototype.onCheckForErrors=function(t){e.prototype.onCheckForErrors.call(this,t),this.isUploading&&this.waitForUpload&&t.push(new u.a(l.a.getString("uploadingFile"),this));},t.prototype.stateChanged=function(e){"loading"===e&&(this.isUploading=!0),"loaded"===e&&(this.isUploading=!1),this.currentState=e,this.onStateChanged.fire(this,{state:e});},t.prototype.checkFileForErrors=function(e){var t=this.errors?this.errors.length:0;return this.errors=[],this.maxSize>0&&e.size>this.maxSize&&this.errors.push(new u.e(this.maxSize)),(t!=this.errors.length||this.errors.length>0)&&this.fireCallback(this.errorsChangedCallback),this.errors.length>0;},t.prototype.isFileImage=function(e){if(e&&e.type){return 0==e.type.toLowerCase().indexOf("image");}},t.prototype.isFileContentImage=function(e){if(e){return 0==e.toLowerCase().indexOf("data:image");}},t;}(i.a);o.a.metaData.addClass("file",["showPreview:boolean","allowMultiple:boolean","imageHeight","imageWidth","acceptedTypes",{name:"storeDataAsText:boolean",default:!0},{name:"waitForUpload:boolean",default:!1},"maxSize:number"],function(){return new c("");},"question"),a.a.Instance.registerQuestion("file",function(e){return new c(e);});},function(e,t,n){"use strict";var r=n(0),i=n(28),o=n(1),a=n(3);n.d(t,"a",function(){return s;});var s=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,n.createLocalizableString("html",n),n;}return r.b(t,e),t.prototype.getType=function(){return"html";},Object.defineProperty(t.prototype,"html",{get:function get(){return this.getLocalizableStringText("html","");},set:function set(e){this.setLocalizableStringText("html",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locHtml",{get:function get(){return this.getLocalizableString("html");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"processedHtml",{get:function get(){return this.survey?this.survey.processHtml(this.html):this.html;},enumerable:!0,configurable:!0}),t;}(i.a);o.a.metaData.addClass("html",[{name:"html:html",serializationProperty:"locHtml"}],function(){return new s("");},"questionbase"),a.a.Instance.registerQuestion("html",function(e){return new s(e);});},function(e,t,n){"use strict";var r=n(0),i=n(1),o=n(3),a=n(16),s=n(11);n.d(t,"a",function(){return u;});var u=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,n;}return r.b(t,e),t.prototype.getType=function(){return"imagepicker";},t.prototype.supportGoNextPageAutomatic=function(){return!0;},Object.defineProperty(t.prototype,"multiSelect",{get:function get(){return this.getPropertyValue("multiSelect",!1);},set:function set(e){this.setPropertyValue("multiSelect",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"showLabel",{get:function get(){return this.getPropertyValue("showLabel",!1);},set:function set(e){this.setPropertyValue("showLabel",e);},enumerable:!0,configurable:!0}),t.prototype.getValueCore=function(){return e.prototype.getValueCore.call(this)||this.multiSelect&&[]||void 0;},t;}(a.a);i.a.metaData.addClass("imageitemvalues",[],null,"itemvalue"),i.a.metaData.addProperty("imageitemvalues",{name:"imageLink"}),i.a.metaData.addClass("imagepicker",[{name:"hasOther",visible:!1},{name:"otherText",visible:!1},{name:"optionsCaption",visible:!1},{name:"otherErrorText",visible:!1},{name:"storeOthersAsComment",visible:!1}],function(){return new u("");},"checkboxbase"),i.a.metaData.addProperty("imagepicker",{name:"showLabel:boolean",default:!1}),i.a.metaData.addProperty("imagepicker",{name:"colCount:number",default:0,choices:[0,1,2,3,4,5]}),i.a.metaData.addProperty("imagepicker",{name:"multiSelect:boolean",default:!1}),i.a.metaData.addProperty("imagepicker",{name:"choices:imageitemvalues",onGetValue:function onGetValue(e){return s.a.getData(e.choices);},onSetValue:function onSetValue(e,t){e.choices=t;}}),o.a.Instance.registerQuestion("imagepicker",function(e){return new u(e);});},function(e,t,n){"use strict";var r=n(0),i=n(11),o=n(8),a=n(1),s=n(2),u=n(10),l=n(3),c=n(15),p=n(26),d=n(9);n.d(t,"a",function(){return h;}),n.d(t,"c",function(){return f;}),n.d(t,"b",function(){return m;});var h=function(){function e(e,t,n,r){this.fullName=t,this.item=e,this.data=n,this.rowValue=r;}return Object.defineProperty(e.prototype,"name",{get:function get(){return this.item.value;},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"text",{get:function get(){return this.item.text;},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"locText",{get:function get(){return this.item.locText;},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"value",{get:function get(){return this.rowValue;},set:function set(e){this.rowValue=e,this.data&&this.data.onMatrixRowChanged(this),this.onValueChanged();},enumerable:!0,configurable:!0}),e.prototype.onValueChanged=function(){},e;}(),f=function(){function e(e){this.cellsOwner=e,this.values={};}return Object.defineProperty(e.prototype,"isEmpty",{get:function get(){return 0==Object.keys(this.values).length;},enumerable:!0,configurable:!0}),e.prototype.setCellText=function(e,t,n){if(e=this.getCellRowColumnValue(e,this.rows),t=this.getCellRowColumnValue(t,this.columns),e&&t)if(n)this.values[e]||(this.values[e]={}),this.values[e][t]||(this.values[e][t]=this.createString()),this.values[e][t].text=n;else if(this.values[e]&&this.values[e][t]){var r=this.values[e][t];r.text="",r.isEmpty&&(delete this.values[e][t],0==Object.keys(this.values[e]).length&&delete this.values[e]);}},e.prototype.setDefaultCellText=function(t,n){this.setCellText(e.DefaultRowName,t,n);},e.prototype.getCellLocText=function(e,t){return e=this.getCellRowColumnValue(e,this.rows),t=this.getCellRowColumnValue(t,this.columns),e&&t&&this.values[e]&&this.values[e][t]?this.values[e][t]:null;},e.prototype.getDefaultCellLocText=function(t,n){return this.getCellLocText(e.DefaultRowName,t);},e.prototype.getCellDisplayLocText=function(t,n){var r=this.getCellLocText(t,n);return r&&!r.isEmpty?r:(r=this.getCellLocText(e.DefaultRowName,n))&&!r.isEmpty?r:("number"==typeof n&&(n=n>=0&&n<this.columns.length?this.columns[n]:null),n&&n.locText?n.locText:null);},e.prototype.getCellText=function(e,t){var n=this.getCellLocText(e,t);return n?n.text:null;},e.prototype.getDefaultCellText=function(t){var n=this.getCellLocText(e.DefaultRowName,t);return n?n.text:null;},e.prototype.getCellDisplayText=function(e,t){var n=this.getCellDisplayLocText(e,t);return n?n.text:null;},Object.defineProperty(e.prototype,"rows",{get:function get(){return this.cellsOwner?this.cellsOwner.getRows():[];},enumerable:!0,configurable:!0}),Object.defineProperty(e.prototype,"columns",{get:function get(){return this.cellsOwner?this.cellsOwner.getColumns():[];},enumerable:!0,configurable:!0}),e.prototype.getCellRowColumnValue=function(e,t){if("number"==typeof e){if(e<0||e>=t.length)return null;e=t[e].value;}return e.value?e.value:e;},e.prototype.getJson=function(){if(this.isEmpty)return null;var e={};for(var t in this.values){var n={},r=this.values[t];for(var i in r){n[i]=r[i].getJson();}e[t]=n;}return e;},e.prototype.setJson=function(e){if(this.values={},e)for(var t in e){if("pos"!=t){var n=e[t];this.values[t]={};for(var r in n){if("pos"!=r){var i=this.createString();i.setJson(n[r]),this.values[t][r]=i;}}}}},e.prototype.createString=function(){return new c.a(this.cellsOwner,!0);},e.DefaultRowName="default",e;}(),m=function(e){function t(t){var n=e.call(this,t)||this;n.name=t,n.isRowChanging=!1,n.emptyLocalizableString=new c.a(n),n.filteredRows=null,n.filteredColumns=null,n.columnsValue=n.createItemValues("columns"),n.rowsValue=n.createItemValues("rows"),n.cellsValue=new f(n);var r=n;return n.registerFunctionOnPropertyValueChanged("rows",function(){r.filterItems()||r.onRowsChanged();}),n;}return r.b(t,e),t.prototype.getType=function(){return"matrix";},Object.defineProperty(t.prototype,"isAllowTitleLeft",{get:function get(){return!1;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isAllRowRequired",{get:function get(){return this.getPropertyValue("isAllRowRequired",!1);},set:function set(e){this.setPropertyValue("isAllRowRequired",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"hasRows",{get:function get(){return this.rowsValue.length>0;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"columns",{get:function get(){return this.columnsValue;},set:function set(e){this.setPropertyValue("columns",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"visibleColumns",{get:function get(){return this.filteredColumns?this.filteredColumns:this.columns;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"rows",{get:function get(){return this.rowsValue;},set:function set(e){this.setPropertyValue("rows",e),this.filterItems();},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"visibleRows",{get:function get(){var e=new Array(),t=this.value;t||(t={});for(var n=this.filteredRows?this.filteredRows:this.rows,r=0;r<n.length;r++){n[r].value&&e.push(this.createMatrixRow(n[r],this.name+"_"+this.rows[r].value.toString(),t[this.rows[r].value]));}return 0!=e.length||this.filteredRows||e.push(this.createMatrixRow(new i.a(null),this.name,t)),this.generatedVisibleRows=e,e;},enumerable:!0,configurable:!0}),t.prototype.getRows=function(){return this.rows;},t.prototype.getColumns=function(){return this.visibleColumns;},t.prototype.onRowsChanged=function(){this.fireCallback(this.visibleRowsChangedCallback);},Object.defineProperty(t.prototype,"rowsVisibleIf",{get:function get(){return this.getPropertyValue("rowsVisibleIf","");},set:function set(e){this.setPropertyValue("rowsVisibleIf",e),this.filterItems();},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"columnsVisibleIf",{get:function get(){return this.getPropertyValue("columnsVisibleIf","");},set:function set(e){this.setPropertyValue("columnsVisibleIf",e),this.filterItems();},enumerable:!0,configurable:!0}),t.prototype.runCondition=function(t,n){e.prototype.runCondition.call(this,t,n),this.runItemsCondition(t,n);},t.prototype.filterItems=function(){return!(this.isLoadingFromJson||!this.data||this.isDesignMode)&&this.runItemsCondition(this.getDataFilteredValues(),this.getDataFilteredProperties());},t.prototype.runItemsCondition=function(e,t){var n=this.runConditionsForRows(e,t);return n=this.runConditionsForColumns(e,t)||n,n&&((this.filteredColumns||this.filteredRows)&&this.clearIncorrectValues(),this.onRowsChanged()),n;},t.prototype.runConditionsForRows=function(e,t){var n=this.rowsVisibleIf?new d.a(this.rowsVisibleIf):null;this.filteredRows=[];var r=i.a.runConditionsForItems(this.rows,this.filteredRows,n,e,t);return this.filteredRows.length===this.rows.length&&(this.filteredRows=null),r;},t.prototype.runConditionsForColumns=function(e,t){var n=this.columnsVisibleIf?new d.a(this.columnsVisibleIf):null;this.filteredColumns=[];var r=i.a.runConditionsForItems(this.columns,this.filteredColumns,n,e,t);return this.filteredColumns.length===this.columns.length&&(this.filteredColumns=null),r;},Object.defineProperty(t.prototype,"cells",{get:function get(){return this.cellsValue;},set:function set(e){this.cells.setJson(e&&e.getJson?e.getJson():null);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"hasCellText",{get:function get(){return!this.cells.isEmpty;},enumerable:!0,configurable:!0}),t.prototype.setCellText=function(e,t,n){this.cells.setCellText(e,t,n);},t.prototype.getCellText=function(e,t){return this.cells.getCellText(e,t);},t.prototype.setDefaultCellText=function(e,t){this.cells.setDefaultCellText(e,t);},t.prototype.getDefaultCellText=function(e){return this.cells.getDefaultCellText(e);},t.prototype.getCellDisplayText=function(e,t){return this.cells.getCellDisplayText(e,t);},t.prototype.getCellDisplayLocText=function(e,t){var n=this.cells.getCellDisplayLocText(e,t);return n||this.emptyLocalizableString;},t.prototype.clearIncorrectValues=function(){var e=this.value;if(e){var t=null,n=!1,r=this.filteredRows?this.filteredRows:this.rows,o=this.filteredColumns?this.filteredColumns:this.columns;for(var a in e){i.a.getItemByValue(r,a)&&i.a.getItemByValue(o,e[a])?(null==t&&(t={}),t[a]=e[a]):n=!0;}n&&(this.value=t);}},t.prototype.supportGoNextPageAutomatic=function(){return this.hasValuesInAllRows();},t.prototype.onCheckForErrors=function(t){e.prototype.onCheckForErrors.call(this,t),this.hasErrorInRows()&&t.push(new u.a(s.a.getString("requiredInAllRowsError"),this));},t.prototype.hasErrorInRows=function(){return!!this.isAllRowRequired&&!this.hasValuesInAllRows();},t.prototype.hasValuesInAllRows=function(){var e=this.generatedVisibleRows;if(e||(e=this.visibleRows),!e)return!0;for(var t=0;t<e.length;t++){if(!e[t].value)return!1;}return!0;},t.prototype.createMatrixRow=function(e,t,n){return new h(e,t,this,n);},t.prototype.onValueChanged=function(){if(!this.isRowChanging&&this.generatedVisibleRows&&0!=this.generatedVisibleRows.length){this.isRowChanging=!0;var e=this.value;if(e||(e={}),0==this.rows.length)this.generatedVisibleRows[0].value=e;else for(var t=0;t<this.generatedVisibleRows.length;t++){var n=this.generatedVisibleRows[t],r=e[n.name]?e[n.name]:null;this.generatedVisibleRows[t].value=r;}this.isRowChanging=!1;}},t.prototype.getDisplayValueCore=function(e){var t=this.value;if(!t)return t;var n={};for(var r in t){var o=e?i.a.getTextOrHtmlByValue(this.rows,r):r;o||(o=r);var a=i.a.getTextOrHtmlByValue(this.columns,t[r]);a||(a=t[r]),n[o]=a;}return n;},t.prototype.addConditionNames=function(e){for(var t=0;t<this.rows.length;t++){this.rows[t].value&&e.push(this.name+"."+this.rows[t].value);}},t.prototype.getConditionJson=function(t,n){if(void 0===t&&(t=null),void 0===n&&(n=null),!n)return e.prototype.getConditionJson.call(this);var r=new p.a(n);r.choices=this.columns;var i=new a.a().toJsonObject(r);return i.type=r.getType(),i;},t.prototype.onMatrixRowChanged=function(e){if(!this.isRowChanging){if(this.isRowChanging=!0,this.hasRows){var t=this.value;t||(t={}),t[e.name]=e.value,this.setNewValue(t);}else this.setNewValue(e.value);this.isRowChanging=!1;}},t;}(o.a);a.a.metaData.addClass("matrix",[{name:"columns:itemvalues",onGetValue:function onGetValue(e){return i.a.getData(e.columns);},onSetValue:function onSetValue(e,t){e.columns=t;}},{name:"rows:itemvalues",onGetValue:function onGetValue(e){return i.a.getData(e.rows);},onSetValue:function onSetValue(e,t){e.rows=t;}},"columnsVisibleIf:condition","rowsVisibleIf:condition",{name:"cells:cells",serializationProperty:"cells"},"isAllRowRequired:boolean"],function(){return new m("");},"question"),l.a.Instance.registerQuestion("matrix",function(e){var t=new m(e);return t.rows=l.a.DefaultRows,t.columns=l.a.DefaultColums,t;});},function(e,t,n){"use strict";var r=n(0),i=n(17),o=n(1),a=n(11),s=n(3),u=n(9);n.d(t,"b",function(){return l;}),n.d(t,"a",function(){return c;});var l=function(e){function t(t,n,r,i){var o=e.call(this,r,i)||this;return o.name=t,o.item=n,o.buildCells(),o;}return r.b(t,e),Object.defineProperty(t.prototype,"rowName",{get:function get(){return this.name;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"text",{get:function get(){return this.item.text;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locText",{get:function get(){return this.item.locText;},enumerable:!0,configurable:!0}),t;}(i.b),c=function(e){function t(t){var n=e.call(this,t)||this;n.name=t,n.filteredRows=null,n.rowsValue=n.createItemValues("rows");var r=n;return n.registerFunctionOnPropertyValueChanged("rows",function(){r.generatedVisibleRows=null,r.filterItems();}),n;}return r.b(t,e),t.prototype.getType=function(){return"matrixdropdown";},t.prototype.getDisplayValueCore=function(e){var t=this.value;if(!t)return t;for(var n=this.visibleRows,r={},i=0;i<n.length;i++){var o=this.rows[i].value,s=t[o];if(s){if(e){var u=a.a.getTextOrHtmlByValue(this.rows,o);u&&(o=u);}r[o]=this.getRowDisplayValue(n[i],s);}}return t;},t.prototype.addConditionNames=function(e){for(var t=0;t<this.rows.length;t++){if(this.rows[t].value)for(var n=this.name+"."+this.rows[t].value+".",r=0;r<this.columns.length;r++){e.push(n+this.columns[r].name);}}},Object.defineProperty(t.prototype,"rows",{get:function get(){return this.rowsValue;},set:function set(e){this.setPropertyValue("rows",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"rowsVisibleIf",{get:function get(){return this.getPropertyValue("rowsVisibleIf","");},set:function set(e){this.setPropertyValue("rowsVisibleIf",e),this.filterItems();},enumerable:!0,configurable:!0}),t.prototype.clearIncorrectValues=function(){var t=this.value;if(t){var n=null,r=!1,i=this.filteredRows?this.filteredRows:this.rows;for(var o in t){a.a.getItemByValue(i,o)?(null==n&&(n={}),n[o]=t[o]):r=!0;}r&&(this.value=n),e.prototype.clearIncorrectValues.call(this);}},t.prototype.generateRows=function(){var e=new Array(),t=this.filteredRows?this.filteredRows:this.rows;if(!t||0===t.length)return e;var n=this.value;n||(n={});for(var r=0;r<t.length;r++){t[r].value&&e.push(this.createMatrixRow(t[r],n[t[r].value]));}return e;},t.prototype.createMatrixRow=function(e,t){var n=new l(e.value,e,this,t);return this.onMatrixRowCreated(n),n;},t.prototype.runCondition=function(t,n){e.prototype.runCondition.call(this,t,n),this.runItemsCondition(t,n);},t.prototype.filterItems=function(){return!(this.isLoadingFromJson||!this.data||this.isDesignMode)&&this.runItemsCondition(this.getDataFilteredValues(),this.getDataFilteredProperties());},t.prototype.runItemsCondition=function(e,t){var n=this.runConditionsForRows(e,t);return n&&(this.filteredRows&&this.clearIncorrectValues(),this.generatedVisibleRows=null,this.fireCallback(this.visibleRowsChangedCallback)),n;},t.prototype.runConditionsForRows=function(e,t){var n=this.rowsVisibleIf?new u.a(this.rowsVisibleIf):null;this.filteredRows=[];var r=a.a.runConditionsForItems(this.rows,this.filteredRows,n,e,t);return this.filteredRows.length===this.rows.length&&(this.filteredRows=null),r;},t;}(i.a);o.a.metaData.addClass("matrixdropdown",[{name:"rows:itemvalues",onGetValue:function onGetValue(e){return a.a.getData(e.rows);},onSetValue:function onSetValue(e,t){e.rows=t;}},"rowsVisibleIf:condition"],function(){return new c("");},"matrixdropdownbase"),s.a.Instance.registerQuestion("matrixdropdown",function(e){var t=new c(e);return t.choices=[1,2,3,4,5],t.rows=s.a.DefaultColums,i.a.addDefaultColumns(t),t;});},function(e,t,n){"use strict";var r=n(0),i=n(17),o=n(1),a=n(3),s=n(2),u=n(10);n.d(t,"b",function(){return l;}),n.d(t,"a",function(){return c;});var l=function(e){function t(t,n,r){var i=e.call(this,n,r)||this;return i.index=t,i.buildCells(),i;}return r.b(t,e),Object.defineProperty(t.prototype,"rowName",{get:function get(){return this.id;},enumerable:!0,configurable:!0}),t;}(i.b),c=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,n.rowCounter=0,n.rowCountValue=2,n.createLocalizableString("confirmDeleteText",n),n.createLocalizableString("keyDuplicationError",n),n.createLocalizableString("addRowText",n),n.createLocalizableString("removeRowText",n),n;}return r.b(t,e),t.prototype.getType=function(){return"matrixdynamic";},Object.defineProperty(t.prototype,"isRowsDynamic",{get:function get(){return!0;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"confirmDelete",{get:function get(){return this.getPropertyValue("confirmDelete",!1);},set:function set(e){this.setPropertyValue("confirmDelete",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"keyName",{get:function get(){return this.getPropertyValue("keyName","");},set:function set(e){this.setPropertyValue("keyName",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"defaultRowValue",{get:function get(){return this.getPropertyValue("defaultRowValue");},set:function set(e){this.setPropertyValue("defaultRowValue",e);},enumerable:!0,configurable:!0}),t.prototype.isDefaultValueEmpty=function(){return e.prototype.isDefaultValueEmpty.call(this)&&this.isValueEmpty(this.defaultRowValue);},t.prototype.setDefaultValue=function(){if(this.isValueEmpty(this.defaultRowValue)||!this.isValueEmpty(this.defaultValue))return void e.prototype.setDefaultValue.call(this);if(this.isEmpty()&&0!=this.rowCount){for(var t=[],n=0;n<this.rowCount;n++){t.push(this.defaultRowValue);}this.value=t;}},Object.defineProperty(t.prototype,"rowCount",{get:function get(){return this.rowCountValue;},set:function set(e){if(!(e<0||e>t.MaxRowCount)){var n=this.rowCountValue;if(this.rowCountValue=e,this.value&&this.value.length>e){var r=this.value;r.splice(e),this.value=r;}if(!this.isLoadingFromJson){if(this.generatedVisibleRows){this.generatedVisibleRows.splice(e);for(var i=n;i<e;i++){this.generatedVisibleRows.push(this.createMatrixRow(null));}}this.fireCallback(this.visibleRowsChangedCallback);}}},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"minRowCount",{get:function get(){return this.getPropertyValue("minRowCount",0);},set:function set(e){e<0&&(e=0),this.setPropertyValue("minRowCount",e),e>this.maxRowCount&&(this.maxRowCount=e),this.rowCount<e&&(this.rowCount=e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"maxRowCount",{get:function get(){return this.getPropertyValue("maxRowCount",t.MaxRowCount);},set:function set(e){e<=0||(e>t.MaxRowCount&&(e=t.MaxRowCount),e!=this.maxRowCount&&(this.setPropertyValue("maxRowCount",e),e<this.minRowCount&&(this.minRowCount=e),this.rowCount>e&&(this.rowCount=e)));},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"canAddRow",{get:function get(){return!this.isReadOnly&&this.rowCount<this.maxRowCount;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"canRemoveRow",{get:function get(){return!this.isReadOnly&&this.rowCount>this.minRowCount;},enumerable:!0,configurable:!0}),t.prototype.addRow=function(){if(this.canAddRow){var e=this.rowCount;if(this.rowCount=this.rowCount+1,!this.isValueEmpty(this.defaultRowValue)){var t=this.createNewValue(this.value);t.length==this.rowCount&&(t[t.length-1]=this.defaultRowValue,this.value=t);}this.data&&this.runCellsCondition(this.getDataFilteredValues(),this.getDataFilteredProperties()),this.survey&&e+1==this.rowCount&&this.survey.matrixRowAdded(this);}},t.prototype.removeRowUI=function(e){this.confirmDelete&&!confirm(this.confirmDeleteText)||this.removeRow(e);},t.prototype.removeRow=function(e){if(this.canRemoveRow&&!(e<0||e>=this.rowCount)){if(this.survey){var t=this.generatedVisibleRows?this.generatedVisibleRows[e]:null;this.survey.matrixRowRemoved(this,e,t);}if(this.generatedVisibleRows&&e<this.generatedVisibleRows.length&&this.generatedVisibleRows.splice(e,1),this.value){var n=this.createNewValue(this.value);n.splice(e,1),n=this.deleteRowValue(n,null),this.value=n;}this.rowCountValue--,this.fireCallback(this.visibleRowsChangedCallback);}},Object.defineProperty(t.prototype,"confirmDeleteText",{get:function get(){return this.getLocalizableStringText("confirmDeleteText",s.a.getString("confirmDelete"));},set:function set(e){this.setLocalizableStringText("confirmDeleteText",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locConfirmDeleteText",{get:function get(){return this.getLocalizableString("confirmDeleteText");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"keyDuplicationError",{get:function get(){return this.getLocalizableStringText("keyDuplicationError",s.a.getString("keyDuplicationError"));},set:function set(e){this.setLocalizableStringText("keyDuplicationError",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locKeyDuplicationError",{get:function get(){return this.getLocalizableString("keyDuplicationError");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"addRowText",{get:function get(){var e=this.isColumnLayoutHorizontal?"addRow":"addColumn";return this.getLocalizableStringText("addRowText",s.a.getString(e));},set:function set(e){this.setLocalizableStringText("addRowText",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locAddRowText",{get:function get(){return this.getLocalizableString("addRowText");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"addRowLocation",{get:function get(){return this.getPropertyValue("addRowLocation","default");},set:function set(e){this.setPropertyValue("addRowLocation",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isAddRowOnTop",{get:function get(){return!!this.canAddRow&&("default"===this.addRowLocation?"vertical"===this.columnLayout:"bottom"!==this.addRowLocation);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isAddRowOnBottom",{get:function get(){return!!this.canAddRow&&("default"===this.addRowLocation?"horizontal"===this.columnLayout:"top"!==this.addRowLocation);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"removeRowText",{get:function get(){return this.getLocalizableStringText("removeRowText",s.a.getString("removeRow"));},set:function set(e){this.setLocalizableStringText("removeRowText",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locRemoveRowText",{get:function get(){return this.getLocalizableString("removeRowText");},enumerable:!0,configurable:!0}),t.prototype.getDisplayValueCore=function(e){var t=this.value;if(!t)return t;for(var n=this.visibleRows,r=0;r<n.length&&r<t.length;r++){var i=t[r];i&&(t[r]=this.getRowDisplayValue(n[r],i));}return t;},t.prototype.addConditionNames=function(e){for(var t=0;t<this.columns.length;t++){e.push(this.name+"[0]."+this.columns[t].name);}},t.prototype.supportGoNextPageAutomatic=function(){return!1;},t.prototype.onCheckForErrors=function(t){e.prototype.onCheckForErrors.call(this,t),this.hasErrorInRows()&&t.push(new u.a(s.a.getString("minRowCountError").format(this.minRowCount)));},t.prototype.hasErrors=function(t){void 0===t&&(t=!0);var n=e.prototype.hasErrors.call(this,t);return this.isValueDuplicated()||n;},t.prototype.hasErrorInRows=function(){if(this.minRowCount<=0||!this.generatedVisibleRows)return!1;for(var e=0,t=0;t<this.generatedVisibleRows.length;t++){this.generatedVisibleRows[t].isEmpty||e++;}return e<this.minRowCount;},t.prototype.isValueDuplicated=function(){if(!this.keyName||!this.generatedVisibleRows)return!1;var e=this.getColumnByName(this.keyName);if(!e)return!1;for(var t=[],n=!1,r=0;r<this.generatedVisibleRows.length;r++){n=this.isValueDuplicatedInRow(this.generatedVisibleRows[r],e,t)||n;}return n;},t.prototype.isValueDuplicatedInRow=function(e,t,n){var r=e.getQuestionByColumn(t);if(!r||r.isEmpty())return!1;for(var i=r.value,o=0;o<n.length;o++){if(i==n[o])return r.addError(new u.a(this.keyDuplicationError,this)),!0;}return n.push(i),!1;},t.prototype.generateRows=function(){var e=new Array();if(0===this.rowCount)return e;for(var t=this.createNewValue(this.value),n=0;n<this.rowCount;n++){e.push(this.createMatrixRow(this.getRowValueByIndex(t,n)));}return e;},t.prototype.createMatrixRow=function(e){var t=new l(this.rowCounter++,this,e);return this.onMatrixRowCreated(t),t;},t.prototype.onBeforeValueChanged=function(e){var t=e&&Array.isArray(e)?e.length:0;t<=this.rowCount||(this.rowCountValue=t,this.generatedVisibleRows&&(this.generatedVisibleRows=null,this.generatedVisibleRows=this.visibleRows));},t.prototype.createNewValue=function(e){var t=e;t&&Array.isArray(t)||(t=[]);t.length>this.rowCount&&t.splice(this.rowCount-1);for(var n=t.length;n<this.rowCount;n++){t.push({});}return t;},t.prototype.deleteRowValue=function(e,t){for(var n=!0,r=0;r<e.length;r++){if(Object.keys(e[r]).length>0){n=!1;break;}}return n?null:e;},t.prototype.getRowValueByIndex=function(e,t){return t>=0&&t<e.length?e[t]:null;},t.prototype.getRowValueCore=function(e,t,n){return void 0===n&&(n=!1),this.generatedVisibleRows?this.getRowValueByIndex(t,this.generatedVisibleRows.indexOf(e)):{};},t.MaxRowCount=100,t;}(i.a);o.a.metaData.addClass("matrixdynamic",[{name:"rowCount:number",default:2},{name:"minRowCount:number",default:0},{name:"maxRowCount:number",default:c.MaxRowCount},{name:"keyName"},{name:"keyDuplicationError",serializationProperty:"locKeyDuplicationError"},"defaultRowValue:rowvalue",{name:"confirmDelete:boolean"},{name:"confirmDeleteText",serializationProperty:"locConfirmDeleteText"},{name:"addRowLocation",default:"default",choices:["default","top","bottom","topBottom"]},{name:"addRowText",serializationProperty:"locAddRowText"},{name:"removeRowText",serializationProperty:"locRemoveRowText"}],function(){return new c("");},"matrixdropdownbase"),a.a.Instance.registerQuestion("matrixdynamic",function(e){var t=new c(e);return t.choices=[1,2,3,4,5],i.a.addDefaultColumns(t),t;});},function(e,t,n){"use strict";var r=n(0),i=n(4),o=n(29),a=n(8),s=n(27),u=n(1),l=n(3),c=n(10),p=n(5);n.d(t,"a",function(){return d;}),n.d(t,"b",function(){return h;});var d=function(e){function t(t,n){void 0===t&&(t=null),void 0===n&&(n=null);var r=e.call(this)||this;return r.validators=new Array(),r.editorValue=r.createEditor(t),r.editor.questionTitleTemplateCallback=function(){return"";},r.editor.titleLocation="left",n&&(r.title=n),r;}return r.b(t,e),t.prototype.getType=function(){return"multipletextitem";},Object.defineProperty(t.prototype,"id",{get:function get(){return this.editor.id;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"name",{get:function get(){return this.editor.name;},set:function set(e){this.editor.name=e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"editor",{get:function get(){return this.editorValue;},enumerable:!0,configurable:!0}),t.prototype.createEditor=function(e){return new s.a(e);},t.prototype.setData=function(e){this.data=e,e&&(this.editor.setSurveyImpl(this),this.editor.parent=e);},Object.defineProperty(t.prototype,"isRequired",{get:function get(){return this.editor.isRequired;},set:function set(e){this.editor.isRequired=e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"inputType",{get:function get(){return this.editor.inputType;},set:function set(e){this.editor.inputType=e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"title",{get:function get(){return this.editor.title;},set:function set(e){this.editor.title=e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locTitle",{get:function get(){return this.editor.locTitle;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"fullTitle",{get:function get(){return this.editor.fullTitle;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"maxLength",{get:function get(){return this.getPropertyValue("maxLength",-1);},set:function set(e){this.setPropertyValue("maxLength",e);},enumerable:!0,configurable:!0}),t.prototype.getMaxLength=function(){var e=this.getSurvey();return p.a.getMaxLength(this.maxLength,e?e.maxTextLength:-1);},Object.defineProperty(t.prototype,"placeHolder",{get:function get(){return this.editor.placeHolder;},set:function set(e){this.editor.placeHolder=e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locPlaceHolder",{get:function get(){return this.editor.locPlaceHolder;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"value",{get:function get(){return this.data?this.data.getMultipleTextValue(this.name):null;},set:function set(e){null!=this.data&&this.data.setMultipleTextValue(this.name,e);},enumerable:!0,configurable:!0}),t.prototype.isEmpty=function(){return p.a.isValueEmpty(this.value);},t.prototype.onValueChanged=function(e){this.valueChangedCallback&&this.valueChangedCallback(e);},t.prototype.geSurveyData=function(){return this;},t.prototype.getSurvey=function(){return this.data?this.data.getSurvey():null;},t.prototype.getTextProcessor=function(){return this.data?this.data.getTextProcessor():null;},t.prototype.getValue=function(e){return this.data?this.data.getMultipleTextValue(e):null;},t.prototype.setValue=function(e,t){this.data&&this.data.setMultipleTextValue(e,t);},t.prototype.getComment=function(e){return null;},t.prototype.setComment=function(e,t){},t.prototype.getAllValues=function(){return this.data?this.data.getAllValues():this.value;},t.prototype.getFilteredValues=function(){return this.getAllValues();},t.prototype.getFilteredProperties=function(){return{survey:this.getSurvey()};},t.prototype.getValidatorTitle=function(){return this.title;},Object.defineProperty(t.prototype,"validatedValue",{get:function get(){return this.value;},set:function set(e){this.value=e;},enumerable:!0,configurable:!0}),t.prototype.getDataFilteredValues=function(){return this.getFilteredValues();},t.prototype.getDataFilteredProperties=function(){return this.getFilteredProperties();},t;}(i.c),h=function(e){function t(t){var n=e.call(this,t)||this;n.name=t,n.itemsValues=new Array(),n.isMultipleItemValueChanging=!1;var r=n;return n.itemsValues=n.createNewArray("items",function(e){e.setData(r);}),n.registerFunctionOnPropertyValueChanged("items",function(){r.fireCallback(r.colCountChangedCallback);}),n.registerFunctionOnPropertyValueChanged("colCount",function(){r.fireCallback(r.colCountChangedCallback);}),n;}return r.b(t,e),t.prototype.getType=function(){return"multipletext";},t.prototype.setSurveyImpl=function(t){e.prototype.setSurveyImpl.call(this,t);for(var n=0;n<this.items.length;n++){this.items[n].setData(this);}},Object.defineProperty(t.prototype,"isAllowTitleLeft",{get:function get(){return!1;},enumerable:!0,configurable:!0}),t.prototype.onSurveyLoad=function(){e.prototype.onSurveyLoad.call(this),this.callEditorFunction("onSurveyLoad"),this.fireCallback(this.colCountChangedCallback);},t.prototype.onReadOnlyChanged=function(){e.prototype.onReadOnlyChanged.call(this),this.callEditorFunction("onReadOnlyChanged");},t.prototype.onSurveyValueChanged=function(t){e.prototype.onSurveyValueChanged.call(this,t);for(var n=0;n<this.items.length;n++){var r=this.items[n];r.editor&&r.editor.onSurveyValueChanged(r.value);}},t.prototype.callEditorFunction=function(e){for(var t=0;t<this.items.length;t++){var n=this.items[t];n.editor&&n.editor[e]&&n.editor[e]();}},Object.defineProperty(t.prototype,"items",{get:function get(){return this.itemsValues;},set:function set(e){this.setPropertyValue("items",e);},enumerable:!0,configurable:!0}),t.prototype.addItem=function(e,t){void 0===t&&(t=null);var n=this.createTextItem(e,t);return this.items.push(n),n;},t.prototype.getItemByName=function(e){for(var t=0;t<this.items.length;t++){if(this.items[t].name==e)return this.items[t];}return null;},t.prototype.addConditionNames=function(e){for(var t=0;t<this.items.length;t++){e.push(this.name+"."+this.items[t].name);}},t.prototype.getConditionJson=function(t,n){if(void 0===t&&(t=null),void 0===n&&(n=null),!n)return e.prototype.getConditionJson.call(this);var r=this.getItemByName(n);if(!r)return null;var i=new u.a().toJsonObject(r);return i.type="text",i;},t.prototype.locStrsChanged=function(){e.prototype.locStrsChanged.call(this);for(var t=0;t<this.items.length;t++){this.items[t].locStrsChanged();}},t.prototype.supportGoNextPageAutomatic=function(){for(var e=0;e<this.items.length;e++){if(this.items[e].isEmpty())return!1;}return!0;},Object.defineProperty(t.prototype,"colCount",{get:function get(){return this.getPropertyValue("colCount",1);},set:function set(e){e<1||e>4||this.setPropertyValue("colCount",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"itemSize",{get:function get(){return this.getPropertyValue("itemSize",25);},set:function set(e){this.setPropertyValue("itemSize",e);},enumerable:!0,configurable:!0}),t.prototype.getRows=function(){for(var e=this.colCount,t=this.items,n=[],r=0,i=0;i<t.length;i++){0==r&&n.push([]),n[n.length-1].push(t[i]),++r>=e&&(r=0);}return n;},t.prototype.onValueChanged=function(){e.prototype.onValueChanged.call(this),this.onItemValueChanged();},t.prototype.createTextItem=function(e,t){return new d(e,t);},t.prototype.onItemValueChanged=function(){if(!this.isMultipleItemValueChanging)for(var e=0;e<this.items.length;e++){var t=null;this.value&&this.items[e].name in this.value&&(t=this.value[this.items[e].name]),this.items[e].onValueChanged(t);}},t.prototype.runValidators=function(){var t=e.prototype.runValidators.call(this);if(null!=t)return t;for(var n=0;n<this.items.length;n++){if(!this.items[n].isEmpty()&&null!=(t=new o.a().run(this.items[n])))return t;}return null;},t.prototype.onCheckForErrors=function(t){e.prototype.onCheckForErrors.call(this,t);for(var n=0;n<this.items.length;n++){var r=this.items[n];r.isRequired&&p.a.isValueEmpty(r.value)&&t.push(new c.b());}},t.prototype.getMultipleTextValue=function(e){return this.value?this.value[e]:null;},t.prototype.setMultipleTextValue=function(e,t){this.isMultipleItemValueChanging=!0;var n=this.value;n||(n={}),n[e]=t,this.setNewValue(n),this.isMultipleItemValueChanging=!1;},t.prototype.getSurvey=function(){return this.survey;},t.prototype.getTextProcessor=function(){return this.textProcessor;},t.prototype.getAllValues=function(){return this.data?this.data.getAllValues():null;},t.prototype.getIsRequiredText=function(){return this.survey?this.survey.requiredText:"";},t.prototype.addElement=function(e,t){},t.prototype.removeElement=function(e){return!1;},t.prototype.getQuestionTitleLocation=function(){return"left";},t;}(a.a);u.a.metaData.addClass("multipletextitem",["name","isRequired:boolean",{name:"placeHolder",serializationProperty:"locPlaceHolder"},{name:"inputType",default:"text",choices:["color","date","datetime","datetime-local","email","month","number","password","range","tel","text","time","url","week"]},{name:"title",serializationProperty:"locTitle"},{name:"maxLength:number",default:-1},{name:"validators:validators",baseClassName:"surveyvalidator",classNamePart:"validator"}],function(){return new d("");}),u.a.metaData.addClass("multipletext",[{name:"!items:textitems",className:"multipletextitem"},{name:"itemSize:number",default:25},{name:"colCount:number",default:1,choices:[1,2,3,4]}],function(){return new h("");},"question"),l.a.Instance.registerQuestion("multipletext",function(e){var t=new h(e);return t.addItem("text1"),t.addItem("text2"),t;});},function(e,t,n){"use strict";var r=n(0),i=n(4),o=n(2),a=n(18),s=n(13),u=n(8),l=n(20),c=n(1),p=n(3),d=n(10);n.d(t,"b",function(){return h;}),n.d(t,"a",function(){return f;});var h=function(){function e(e,t){this.data=e,this.panelValue=t;var n=this;this.textPreProcessor=new a.a(),this.textPreProcessor.onProcess=function(e){n.getProcessedTextValue(e);},this.setSurveyImpl(),this.panel.updateCustomWidgets();}return Object.defineProperty(e.prototype,"panel",{get:function get(){return this.panelValue;},enumerable:!0,configurable:!0}),e.prototype.setSurveyImpl=function(){this.panel.setSurveyImpl(this);},e.prototype.runCondition=function(e,t){this.panel.runCondition(e,t);},e.prototype.getValue=function(e){return this.data.getPanelItemData(this)[e];},e.prototype.setValue=function(e,t){this.data.setPanelItemData(this,e,t);},e.prototype.getComment=function(e){var t=this.getValue(e+i.c.commentPrefix);return t||"";},e.prototype.setComment=function(e,t){this.setValue(e+i.c.commentPrefix,t);},e.prototype.onSurveyValueChanged=function(){for(var e=this.panel.questions,t=this.data.getPanelItemData(this),n=0;n<e.length;n++){var r=e[n];r.onSurveyValueChanged(t[r.getValueName()]);}},e.prototype.setVisibleIndex=function(e,t){return t?this.panel.setVisibleIndex(e):(this.panel.setVisibleIndex(-1),0);},e.prototype.getAllValues=function(){return this.data.getPanelItemData(this);},e.prototype.getFilteredValues=function(){var e=this.getAllValues(),t={panel:e};for(var n in e){t[n]=e[n];}return t;},e.prototype.getFilteredProperties=function(){return{survey:this.getSurvey()};},e.prototype.geSurveyData=function(){return this;},e.prototype.getSurvey=function(){return this.data?this.data.getSurvey():null;},e.prototype.getTextProcessor=function(){return this;},e.prototype.getProcessedTextValue=function(t){if(t){if(t.name==e.IndexVariableName)return t.isExists=!0,void(t.value=this.data.getItemIndex(this)+1);var n=new s.a().getFirstName(t.name);if(t.isExists=n==e.ItemVariableName,t.canProcess=t.isExists,t.canProcess){t.name=t.name.replace(e.ItemVariableName+".","");var n=new s.a().getFirstName(t.name),r=this.panel.getQuestionByValueName(n),i={};if(r)i[n]=t.returnDisplayValue?r.displayValue:r.value;else{var o=this.getAllValues();o&&(i[n]=o[n]);}t.value=new s.a().getValue(t.name,i);}}},e.prototype.processText=function(e,t){e=this.textPreProcessor.process(e,t);var n=this.getSurvey();return n?n.processText(e,t):e;},e.prototype.processTextEx=function(e,t){e=this.processText(e,t);var n=this.textPreProcessor.hasAllValuesOnLastRun,r={hasAllValuesOnLastRun:!0,text:e};return this.getSurvey()&&(r=this.getSurvey().processTextEx(e,t)),r.hasAllValuesOnLastRun=r.hasAllValuesOnLastRun&&n,r;},e.prototype.onAnyValueChanged=function(t){this.panel.onAnyValueChanged(t),this.panel.onAnyValueChanged(e.ItemVariableName);},e.ItemVariableName="panel",e.IndexVariableName="panelIndex",e;}(),f=function(e){function t(t){var n=e.call(this,t)||this;n.name=t,n.itemsValue=new Array(),n.loadingPanelCount=0,n.currentIndexValue=-1,n.templateValue=n.createAndSetupNewPanelObject(),n.template.renderWidth="100%",n.template.selectedElementInDesign=n;var r=n;return n.oldTemplateRowsChangedCallback=n.template.rowsChangedCallback,n.template.rowsChangedCallback=function(){r.templateOnRowsChanged(),r.oldTemplateRowsChangedCallback&&r.oldTemplateRowsChangedCallback();},n.createLocalizableString("confirmDeleteText",n),n.createLocalizableString("keyDuplicationError",n),n.createLocalizableString("panelAddText",n),n.createLocalizableString("panelRemoveText",n),n.createLocalizableString("panelPrevText",n),n.createLocalizableString("panelNextText",n),n.registerFunctionOnPropertyValueChanged("panelsState",function(){r.setPanelsState();}),n;}return r.b(t,e),t.prototype.setSurveyImpl=function(t){e.prototype.setSurveyImpl.call(this,t),this.template.setSurveyImpl(this.surveyImpl);},t.prototype.templateOnRowsChanged=function(){this.isLoadingFromJson||this.rebuildPanels();},t.prototype.getType=function(){return"paneldynamic";},Object.defineProperty(t.prototype,"isAllowTitleLeft",{get:function get(){return!1;},enumerable:!0,configurable:!0}),t.prototype.removeElement=function(e){return this.template.removeElement(e);},Object.defineProperty(t.prototype,"template",{get:function get(){return this.templateValue;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"templateElements",{get:function get(){return this.template.elements;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"templateTitle",{get:function get(){return this.template.title;},set:function set(e){this.template.title=e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locTemplateTitle",{get:function get(){return this.template.locTitle;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"templateDescription",{get:function get(){return this.template.description;},set:function set(e){this.template.description=e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locTemplateDescription",{get:function get(){return this.template.locDescription;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"items",{get:function get(){return this.itemsValue;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"panels",{get:function get(){for(var e=[],t=0;t<this.items.length;t++){e.push(this.items[t].panel);}return e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"currentIndex",{get:function get(){return this.isRenderModeList?-1:(this.currentIndexValue<0&&this.panelCount>0&&(this.currentIndexValue=0),this.currentIndexValue>=this.panelCount&&(this.currentIndexValue=this.panelCount-1),this.currentIndexValue);},set:function set(e){e>=this.panelCount&&(e=this.panelCount-1),this.currentIndexValue=e,this.fireCallback(this.currentIndexChangedCallback);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"currentPanel",{get:function get(){var e=this.currentIndex;return e<0||e>=this.panels.length?null:this.panels[e];},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"confirmDelete",{get:function get(){return this.getPropertyValue("confirmDelete",!1);},set:function set(e){this.setPropertyValue("confirmDelete",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"keyName",{get:function get(){return this.getPropertyValue("keyName","");},set:function set(e){this.setPropertyValue("keyName",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"confirmDeleteText",{get:function get(){return this.getLocalizableStringText("confirmDeleteText",o.a.getString("confirmDelete"));},set:function set(e){this.setLocalizableStringText("confirmDeleteText",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locConfirmDeleteText",{get:function get(){return this.getLocalizableString("confirmDeleteText");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"keyDuplicationError",{get:function get(){return this.getLocalizableStringText("keyDuplicationError",o.a.getString("keyDuplicationError"));},set:function set(e){this.setLocalizableStringText("keyDuplicationError",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locKeyDuplicationError",{get:function get(){return this.getLocalizableString("keyDuplicationError");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"panelPrevText",{get:function get(){return this.getLocalizableStringText("panelPrevText",o.a.getString("pagePrevText"));},set:function set(e){this.setLocalizableStringText("panelPrevText",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locPanelPrevText",{get:function get(){return this.getLocalizableString("panelPrevText");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"panelNextText",{get:function get(){return this.getLocalizableStringText("panelNextText",o.a.getString("pageNextText"));},set:function set(e){this.setLocalizableStringText("panelNextText",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locPanelNextText",{get:function get(){return this.getLocalizableString("panelNextText");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"panelAddText",{get:function get(){return this.getLocalizableStringText("panelAddText",o.a.getString("addPanel"));},set:function set(e){this.setLocalizableStringText("panelAddText",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locPanelAddText",{get:function get(){return this.getLocalizableString("panelAddText");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"panelRemoveText",{get:function get(){return this.getLocalizableStringText("panelRemoveText",o.a.getString("removePanel"));},set:function set(e){this.setLocalizableStringText("panelRemoveText",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locPanelRemoveText",{get:function get(){return this.getLocalizableString("panelRemoveText");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isProgressTopShowing",{get:function get(){return"progressTop"==this.renderMode||"progressTopBottom"==this.renderMode;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isProgressBottomShowing",{get:function get(){return"progressBottom"==this.renderMode||"progressTopBottom"==this.renderMode;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isPrevButtonShowing",{get:function get(){return this.currentIndex>0;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isNextButtonShowing",{get:function get(){return this.currentIndex>=0&&this.currentIndex<this.panelCount-1;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isRangeShowing",{get:function get(){return this.showRangeInProgress&&this.currentIndex>=0&&this.panelCount>1;},enumerable:!0,configurable:!0}),t.prototype.getElementsInDesign=function(e){return void 0===e&&(e=!1),e?[this.template]:this.templateElements;},Object.defineProperty(t.prototype,"panelCount",{get:function get(){return this.isLoadingFromJson||this.isDesignMode?this.loadingPanelCount:this.items.length;},set:function set(e){if(!(e<0)){if(this.isLoadingFromJson||this.isDesignMode)return void(this.loadingPanelCount=e);if(e!=this.items.length&&!this.isDesignMode){for(var t=this.panelCount;t<e;t++){var n=this.createNewItem();this.items.push(n),"list"==this.renderMode&&"default"!=this.panelsState&&("expand"===this.panelsState?n.panel.expand():n.panel.collapse());}e<this.panelCount&&this.items.splice(e,this.panelCount-e),this.setValueBasedOnPanelCount(),this.reRunCondition(),this.fireCallback(this.panelCountChangedCallback);}}},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"panelsState",{get:function get(){return this.getPropertyValue("panelsState","default");},set:function set(e){this.setPropertyValue("panelsState",e);},enumerable:!0,configurable:!0}),t.prototype.setPanelsSurveyImpl=function(){for(var e=0;e<this.items.length;e++){this.items[e].setSurveyImpl();}},t.prototype.setPanelsState=function(){if(!this.isDesignMode&&"list"==this.renderMode)for(var e=0;e<this.items.length;e++){var t=this.panelsState;"firstExpanded"===t&&(t=0===e?"expanded":"collapsed"),this.items[e].panel.state=t;}},t.prototype.setValueBasedOnPanelCount=function(){var e=this.value;if(e&&Array.isArray(e)||(e=[]),e.length!=this.panelCount){for(var t=e.length;t<this.panelCount;t++){e.push({});}e.length>this.panelCount&&e.splice(this.panelCount,e.length-this.panelCount),this.value=e;}},Object.defineProperty(t.prototype,"minPanelCount",{get:function get(){return this.getPropertyValue("minPanelCount",0);},set:function set(e){e<0&&(e=0),e!=this.minPanelCount&&(this.setPropertyValue("minPanelCount",e),e>this.maxPanelCount&&(this.maxPanelCount=e),this.panelCount<e&&(this.panelCount=e));},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"maxPanelCount",{get:function get(){return this.getPropertyValue("maxPanelCount",t.MaxPanelCount);},set:function set(e){e<=0||(e>t.MaxPanelCount&&(e=t.MaxPanelCount),e!=this.maxPanelCount&&(this.setPropertyValue("maxPanelCount",e),e<this.minPanelCount&&(this.minPanelCount=e),this.panelCount>e&&(this.panelCount=e)));},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"allowAddPanel",{get:function get(){return this.getPropertyValue("allowAddPanel",!0);},set:function set(e){this.setPropertyValue("allowAddPanel",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"allowRemovePanel",{get:function get(){return this.getPropertyValue("allowRemovePanel",!0);},set:function set(e){this.setPropertyValue("allowRemovePanel",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"templateTitleLocation",{get:function get(){return this.getPropertyValue("templateTitleLocation","default");},set:function set(e){this.setPropertyValue("templateTitleLocation",e.toLowerCase());},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"showQuestionNumbers",{get:function get(){return this.getPropertyValue("showQuestionNumbers","off");},set:function set(e){this.setPropertyValue("showQuestionNumbers",e),!this.isLoadingFromJson&&this.survey&&this.survey.questionVisibilityChanged(this,this.visible);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"showRangeInProgress",{get:function get(){return this.getPropertyValue("showRangeInProgress",!0);},set:function set(e){this.setPropertyValue("showRangeInProgress",e),this.fireCallback(this.currentIndexChangedCallback);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"renderMode",{get:function get(){return this.getPropertyValue("renderMode","list");},set:function set(e){this.setPropertyValue("renderMode",e),this.fireCallback(this.renderModeChangedCallback);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isRenderModeList",{get:function get(){return"list"==this.renderMode;},enumerable:!0,configurable:!0}),t.prototype.setVisibleIndex=function(t){if(!this.isVisible)return 0;for(var n="onSurvey"==this.showQuestionNumbers?t:0,r=0;r<this.items.length;r++){var i=this.items[r].setVisibleIndex(n,"off"!=this.showQuestionNumbers);"onSurvey"==this.showQuestionNumbers&&(n+=i);}return e.prototype.setVisibleIndex.call(this,"onSurvey"!=this.showQuestionNumbers?t:-1),"onSurvey"!=this.showQuestionNumbers?1:n-t;},Object.defineProperty(t.prototype,"canAddPanel",{get:function get(){return(!this.survey||!this.survey.isDesignMode)&&this.allowAddPanel&&!this.isReadOnly&&this.panelCount<this.maxPanelCount;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"canRemovePanel",{get:function get(){return(!this.survey||!this.survey.isDesignMode)&&this.allowRemovePanel&&!this.isReadOnly&&this.panelCount>this.minPanelCount;},enumerable:!0,configurable:!0}),t.prototype.rebuildPanels=function(){var e=new Array();if(this.isDesignMode)e.push(new h(this,this.template)),this.oldTemplateRowsChangedCallback&&this.oldTemplateRowsChangedCallback(),this.rebuildTemplateRowsInElements(this.template.elements);else for(var t=0;t<this.panelCount;t++){e.push(this.createNewItem());}this.setPanelsState(),this.itemsValue=e,this.reRunCondition(),this.fireCallback(this.panelCountChangedCallback);},t.prototype.rebuildTemplateRowsInElements=function(e){for(var t=0;t<e.length;t++){if(e[t].isPanel){var n=e[t];n.rowsChangedCallback&&n.rowsChangedCallback(),this.rebuildTemplateRowsInElements(n.elements);}}},Object.defineProperty(t.prototype,"defaultPanelValue",{get:function get(){return this.getPropertyValue("defaultPanelValue");},set:function set(e){this.setPropertyValue("defaultPanelValue",e);},enumerable:!0,configurable:!0}),t.prototype.isDefaultValueEmpty=function(){return e.prototype.isDefaultValueEmpty.call(this)&&this.isValueEmpty(this.defaultPanelValue);},t.prototype.setDefaultValue=function(){if(this.isValueEmpty(this.defaultPanelValue)||!this.isValueEmpty(this.defaultValue))return void e.prototype.setDefaultValue.call(this);if(this.isEmpty()&&0!=this.panelCount){for(var t=[],n=0;n<this.panelCount;n++){t.push(this.defaultPanelValue);}this.value=t;}},t.prototype.isEmpty=function(){var e=this.value;if(!e||!Array.isArray(e))return!0;for(var t=0;t<e.length;t++){if(!this.isRowEmpty(e[t]))return!1;}return!0;},t.prototype.isRowEmpty=function(e){for(var t in e){if(e.hasOwnProperty(t))return!1;}return!0;},t.prototype.addPanelUI=function(){if(!this.canAddPanel)return null;var e=this.addPanel();return"list"===this.renderMode&&"default"!==this.panelsState&&e.expand(),e;},t.prototype.addPanel=function(){if(this.panelCount++,this.isRenderModeList||(this.currentIndex=this.panelCount-1),!this.isValueEmpty(this.defaultPanelValue)){var e=this.value;e&&Array.isArray(e)&&e.length==this.panelCount&&(e[e.length-1]=this.defaultPanelValue),this.value=e;}return this.survey&&this.survey.dynamicPanelAdded(this),this.items[this.panelCount-1].panel;},t.prototype.removePanelUI=function(e){this.canRemovePanel&&(this.confirmDelete&&!confirm(this.confirmDeleteText)||this.removePanel(e));},t.prototype.removePanel=function(e){var n=this.getPanelIndex(e);if(!(n<0||n>=this.panelCount)){this.items.splice(n,1);var e=this.value;!e||!Array.isArray(e)||n>=e.length||(e.splice(n,1),t.isPanelRemoving=!0,this.value=e,t.isPanelRemoving=!1,this.fireCallback(this.panelCountChangedCallback),this.survey&&this.survey.dynamicPanelRemoved(this,n));}},t.prototype.getPanelIndex=function(e){if(!isNaN(parseFloat(e))&&isFinite(e))return e;for(var t=0;t<this.items.length;t++){if(this.items[t]===e||this.items[t].panel===e)return t;}return-1;},t.prototype.locStrsChanged=function(){e.prototype.locStrsChanged.call(this);for(var t=this.panels,n=0;n<t.length;n++){t[n].locStrsChanged();}},t.prototype.clearIncorrectValues=function(){for(var e=0;e<this.panels.length;e++){this.clearIncorrectValuesInPanel(e);}},t.prototype.clearIncorrectValuesInPanel=function(e){var t=this.panels[e];t.clearIncorrectValues();var n=this.value,r=e<n.length?n[e]:null;if(r){var i=!1;for(var o in r){t.getQuestionByName(o)||(delete r[o],i=!0);}i&&(n[e]=r,this.value=n);}},t.prototype.addConditionNames=function(e){for(var t=this.name+"[0].",n=[],r=this.template.questions,i=0;i<r.length;i++){r[i].addConditionNames(n);}for(var i=0;i<n.length;i++){e.push(t+n[i]);}},t.prototype.getConditionJson=function(t,n){if(void 0===t&&(t=null),void 0===n&&(n=null),!n)return e.prototype.getConditionJson.call(this,t,n);var r=n,i=n.indexOf(".");i>-1&&(r=n.substr(0,i),n=n.substr(i+1));var o=this.template.getQuestionByName(r);return o?o.getConditionJson(t,n):null;},t.prototype.onSurveyLoad=function(){this.loadingPanelCount>0&&(this.panelCount=this.loadingPanelCount),this.isDesignMode&&this.rebuildPanels(),this.setPanelsSurveyImpl(),this.setPanelsState(),e.prototype.onSurveyLoad.call(this);},t.prototype.runCondition=function(t,n){e.prototype.runCondition.call(this,t,n),this.runPanelsCondition(t,n);},t.prototype.reRunCondition=function(){this.data&&this.runCondition(this.getDataFilteredValues(),this.getDataFilteredProperties());},t.prototype.runPanelsCondition=function(e,t){var n={};e&&e instanceof Object&&(n=JSON.parse(JSON.stringify(e)));for(var r=0;r<this.items.length;r++){n[h.ItemVariableName]=this.getPanelItemData(this.items[r]),n[h.IndexVariableName]=r,this.items[r].runCondition(n,t);}},t.prototype.onReadOnlyChanged=function(){e.prototype.onReadOnlyChanged.call(this);for(var t=0;t<this.panels.length;t++){this.panels[t].onReadOnlyChanged();}},t.prototype.onAnyValueChanged=function(t){e.prototype.onAnyValueChanged.call(this,t);for(var n=0;n<this.items.length;n++){this.items[n].onAnyValueChanged(t);}},t.prototype.hasErrors=function(t){void 0===t&&(t=!0);var n=this.hasErrorInPanels(t);return e.prototype.hasErrors.call(this,t)||n;},t.prototype.clearValueIfInvisible=function(){e.prototype.clearValueIfInvisible.call(this);for(var t=0;t<this.panels.length;t++){for(var n=this.panels[t].questions,r=0;r<n.length;r++){n[r].clearValueIfInvisible();}}},t.prototype.getAllErrors=function(){for(var t=e.prototype.getAllErrors.call(this),n=0;n<this.panels.length;n++){for(var r=this.panels[n].questions,i=0;i<r.length;i++){var o=r[i].getAllErrors();o&&o.length>0&&(t=t.concat(o));}}return t;},t.prototype.hasErrorInPanels=function(e){for(var t=!1,n=this.panels,r=[],i=0;i<n.length;i++){var o=n[i].hasErrors(e);o=this.isValueDuplicated(n[i],r)||o,this.isRenderModeList||!o||t||(this.currentIndex=i),t=o||t;}return t;},t.prototype.isValueDuplicated=function(e,t){if(!this.keyName)return!1;var n=e.getQuestionByValueName(this.keyName);if(!n||n.isEmpty())return!1;for(var r=n.value,i=0;i<t.length;i++){if(r==t[i])return n.addError(new d.a(this.keyDuplicationError,this)),!0;}return t.push(r),!1;},t.prototype.createNewItem=function(){return new h(this,this.createNewPanel());},t.prototype.createNewPanel=function(){var e=this.createAndSetupNewPanelObject(),t=new c.a(),n=t.toJsonObject(this.template);return t.toObject(n,e),e.renderWidth="100%",e;},t.prototype.createAndSetupNewPanelObject=function(){var e=this.createNewPanelObject(),t=this;return e.onGetQuestionTitleLocation=function(){return t.getTemplateQuestionTitleLocation();},e;},t.prototype.getTemplateQuestionTitleLocation=function(){return"default"!=this.templateTitleLocation?this.templateTitleLocation:this.getTitleLocationCore();},t.prototype.createNewPanelObject=function(){return new l.a();},t.prototype.onValueChanged=function(){if(!this.isValueChangingInternally){var e=this.value,n=e&&Array.isArray(e)?e.length:0;!t.isPanelRemoving&&n<=this.panelCount||(this.panelCount=n);}},t.prototype.onSurveyValueChanged=function(t){e.prototype.onSurveyValueChanged.call(this,t);for(var n=0;n<this.items.length;n++){this.items[n].onSurveyValueChanged();}},t.prototype.onSetData=function(){e.prototype.onSetData.call(this),this.isDesignMode&&(this.template.setSurveyImpl(this.surveyImpl),this.isLoadingFromJson||this.rebuildPanels());},t.prototype.getItemIndex=function(e){return this.items.indexOf(e);},t.prototype.getPanelItemData=function(e){var t=this.items.indexOf(e),n=this.value;return t<0&&Array.isArray(n)&&n.length>this.items.length&&(t=this.items.length),t<0?{}:!n||!Array.isArray(n)||n.length<=t?{}:n[t];},t.prototype.setPanelItemData=function(e,t,n){var r=this.items.indexOf(e);r<0&&(r=this.items.length);var i=this.value;if(i&&Array.isArray(i)||(i=[]),i.length<=r)for(var o=i.length;o<=r;o++){i.push({});}if(i[r]||(i[r]={}),this.isValueEmpty(n)?delete i[r][t]:i[r][t]=n,this.isValueChangingInternally=!0,this.value=i,this.isValueChangingInternally=!1,this.survey){var a={question:this,panel:e.panel,name:t,itemIndex:r,itemValue:i[r],value:n};this.survey.dynamicPanelItemValueChanged(this,a);}},t.prototype.getSurvey=function(){return this.survey;},t.MaxPanelCount=100,t.isPanelRemoving=!1,t;}(u.a);c.a.metaData.addClass("paneldynamic",[{name:"templateElements",alternativeName:"questions",visible:!1},{name:"templateTitle:text",serializationProperty:"locTemplateTitle"},{name:"templateDescription:text",serializationProperty:"locTemplateDescription"},{name:"allowAddPanel:boolean",default:!0},{name:"allowRemovePanel:boolean",default:!0},{name:"panelCount:number",default:0,choices:[0,1,2,3,4,5,6,7,8,9,10]},{name:"minPanelCount:number",default:0},{name:"maxPanelCount:number",default:f.MaxPanelCount},"defaultPanelValue:panelvalue",{name:"panelsState",default:"default",choices:["default","collapsed","expanded","firstExpanded"]},{name:"keyName"},{name:"keyDuplicationError",serializationProperty:"locKeyDuplicationError"},{name:"confirmDelete:boolean"},{name:"confirmDeleteText",serializationProperty:"locConfirmDeleteText"},{name:"panelAddText",serializationProperty:"locPanelAddText"},{name:"panelRemoveText",serializationProperty:"locPanelRemoveText"},{name:"panelPrevText",serializationProperty:"locPanelPrevText"},{name:"panelNextText",serializationProperty:"locPanelNextText"},{name:"showQuestionNumbers",default:"off",choices:["off","onPanel","onSurvey"]},{name:"showRangeInProgress",default:!0},{name:"renderMode",default:"list",choices:["list","progressTop","progressBottom","progressTopBottom"]},{name:"templateTitleLocation",default:"default",choices:["default","top","bottom","left"]}],function(){return new f("");},"question"),p.a.Instance.registerQuestion("paneldynamic",function(e){return new f(e);});},function(e,t,n){"use strict";var r=n(0),i=n(1),o=n(3),a=n(16),s=n(2);n.d(t,"a",function(){return u;});var u=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,n;}return r.b(t,e),t.prototype.getType=function(){return"radiogroup";},Object.defineProperty(t.prototype,"showClearButton",{get:function get(){return this.getPropertyValue("showClearButton",!1);},set:function set(e){this.setPropertyValue("showClearButton",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"clearButtonCaption",{get:function get(){return s.a.getString("clearCaption");},enumerable:!0,configurable:!0}),t.prototype.supportGoNextPageAutomatic=function(){return!0;},t;}(a.a);i.a.metaData.addClass("radiogroup",[{name:"showClearButton:boolean",default:!1}],function(){return new u("");},"checkboxbase"),o.a.Instance.registerQuestion("radiogroup",function(e){var t=new u(e);return t.choices=o.a.DefaultChoices,t;});},function(e,t,n){"use strict";var r=n(0),i=n(11),o=n(8),a=n(1),s=n(3);n.d(t,"a",function(){return u;});var u=function(e){function t(t){var n=e.call(this,t)||this;n.name=t,n.rates=n.createItemValues("rates");var r=n;n.registerFunctionOnPropertyValueChanged("rates",function(){r.fireCallback(r.rateValuesChangedCallback);}),n.onPropertyChanged.add(function(e,t){"rateMin"!=t.name&&"rateMax"!=t.name&&"rateStep"!=t.name||r.fireCallback(r.rateValuesChangedCallback);});var i=n.createLocalizableString("minRateDescription",n,!0),o=n.createLocalizableString("maxRateDescription",n,!0);return i.onGetTextCallback=function(e){return e?e+" ":e;},o.onGetTextCallback=function(e){return e?" "+e:e;},n;}return r.b(t,e),t.prototype.onSurveyLoad=function(){e.prototype.onSurveyLoad.call(this),this.fireCallback(this.rateValuesChangedCallback);},Object.defineProperty(t.prototype,"rateValues",{get:function get(){return this.rates;},set:function set(e){this.setPropertyValue("rates",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"rateMin",{get:function get(){return this.getPropertyValue("rateMin",1);},set:function set(e){e>this.rateMax-this.rateStep&&(e=this.rateMax-this.rateStep),this.setPropertyValue("rateMin",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"rateMax",{get:function get(){return this.getPropertyValue("rateMax",5);},set:function set(e){e<this.rateMin+this.rateStep&&(e=this.rateMin+this.rateStep),this.setPropertyValue("rateMax",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"rateStep",{get:function get(){return this.getPropertyValue("rateStep",1);},set:function set(e){e<=0&&(e=1),e>this.rateMax-this.rateMin&&(e=this.rateMax-this.rateMin),this.setPropertyValue("rateStep",e);},enumerable:!0,configurable:!0}),t.prototype.getDisplayValueCore=function(e){if(this.isEmpty())return"";var t=i.a.getTextOrHtmlByValue(this.visibleRateValues,this.value);return t||this.value;},Object.defineProperty(t.prototype,"visibleRateValues",{get:function get(){if(this.rateValues.length>0)return this.rateValues;for(var e=[],n=this.rateMin;n<=this.rateMax&&e.length<t.MaximumRateValueCount;){e.push(new i.a(n)),n+=this.rateStep;}return e;},enumerable:!0,configurable:!0}),t.prototype.getType=function(){return"rating";},t.prototype.supportGoNextPageAutomatic=function(){return!0;},t.prototype.supportComment=function(){return!0;},t.prototype.supportOther=function(){return!0;},Object.defineProperty(t.prototype,"minRateDescription",{get:function get(){return this.getLocalizableStringText("minRateDescription");},set:function set(e){this.setLocalizableStringText("minRateDescription",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locMinRateDescription",{get:function get(){return this.getLocalizableString("minRateDescription");},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"maxRateDescription",{get:function get(){return this.getLocalizableStringText("maxRateDescription");},set:function set(e){this.setLocalizableStringText("maxRateDescription",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locMaxRateDescription",{get:function get(){return this.getLocalizableString("maxRateDescription");},enumerable:!0,configurable:!0}),t.MaximumRateValueCount=20,t;}(o.a);a.a.metaData.addClass("rating",["hasComment:boolean",{name:"rateValues:itemvalues",onGetValue:function onGetValue(e){return i.a.getData(e.rateValues);},onSetValue:function onSetValue(e,t){e.rateValues=t;}},{name:"rateMin:number",default:1},{name:"rateMax:number",default:5},{name:"rateStep:number",default:1},{name:"minRateDescription",alternativeName:"mininumRateDescription",serializationProperty:"locMinRateDescription"},{name:"maxRateDescription",alternativeName:"maximumRateDescription",serializationProperty:"locMaxRateDescription"}],function(){return new u("");},"question"),s.a.Instance.registerQuestion("rating",function(e){return new u(e);});},function(e,t,n){"use strict";var r=n(12);n.d(t,"a",function(){return i;});var i=function(){function e(){this.sheet=null,this.sheet=e.findSheet(e.SurveyJSStylesSheetId),this.sheet||(this.sheet=e.createSheet(e.SurveyJSStylesSheetId),this.initializeStyles(this.sheet));}return e.findSheet=function(e){for(var t=0;t<document.styleSheets.length;t++){if(document.styleSheets[t].ownerNode.id===e)return document.styleSheets[t];}return null;},e.createSheet=function(e){var t=document.createElement("style");return t.id=e,t.appendChild(document.createTextNode("")),document.head.appendChild(t),t.sheet;},e.applyTheme=function(t,n){void 0===t&&(t="default"),void 0===n&&(n=".sv_main");var i;-1!==["bootstrap","bootstrapmaterial"].indexOf(t)?(i=e[t+"ThemeCss"],r.b.currentType=t):(i=e.ThemeCss,r.b.currentType="standard");var o=e.findSheet(t+n);if(!o){o=e.createSheet(t+n);var a=e.ThemeColors[t]||e.ThemeColors.default;Object.keys(i).forEach(function(e){var t=i[e];Object.keys(a).forEach(function(e){return t=t.replace(new RegExp("\\"+e,"g"),a[e]);}),o.insertRule(n+e+" { "+t+" }",0);});}},e.prototype.initializeStyles=function(t){Object.keys(e.Styles).forEach(function(n){return t.insertRule(n+" { "+e.Styles[n]+" }",0);}),Object.keys(e.Media).forEach(function(n){t.insertRule(e.Media[n].media+" { "+n+" { "+e.Media[n].style+" } }",0);});},e.SurveyJSStylesSheetId="surveyjs",e.Styles={".sv_bootstrap_css .sv_qstn":"padding: 0.5em 1em 1.5em 1em;",".sv_bootstrap_css .sv_qcbc input[type=checkbox], .sv_bootstrap_css .sv_qcbc input[type=radio]":"vertical-align: middle; margin-top: -1px",".sv_bootstrap_css .sv_qstn fieldset":"display: block;",".sv_bootstrap_css .sv_qstn  .sv_q_checkbox_inline, .sv_bootstrap_css .sv_qstn .sv_q_radiogroup_inline":"display: inline-block;",".sv_main.sv_bootstrapmaterial_css .sv_q_radiogroup_control_label":"display: inline; position: static;",".sv_main.sv_bootstrapmaterial_css .checkbox":"margin-top:10px;margin-bottom:10px;",".sv_row .sv_qstn":"float: left",".sv_row .sv_qstn:last-child":"float: none",".sv_qstn":"display: inline-block; vertical-align: top; overflow: auto;",".progress":"width: 60%;",".progress-bar":"width: auto; margin-left: 2px; margin-right: 2px;",".sv_p_container":"display: inline-block; vertical-align: top;",".sv_qbln .checkbox-material":"margin-right: 3px;",".sv_qcbx .checkbox-material":"margin-right: 5px;",".sv_qcbx .checkbox label":"justify-content: left; display: inline-block;",".sv_qstn .radio label":"justify-content: left; display: inline-block;",".sv_qstn .sv_q_imgsel.sv_q_imagepicker_inline":"display: inline-block;",".sv_qstn label.sv_q_m_label":"position: absolute; margin: 0;",".sv_qstn td":"position: relative;",".sv_q_mt_item_value":"float: left;",".sv_qstn.sv_qstn_left":"margin-top: 0.75em;",".sv_qstn .title-left":"float: left; margin-right: 1em;",".sv_qstn .content-left":"overflow: hidden",".sv_q_radiogroup_inline .sv_q_radiogroup_other":"display: inline-block;",".sv_q_checkbox_inline .sv_q_checkbox_other":"display: inline-block;",".sv_q_checkbox_inline, .sv_q_radiogroup_inline, .sv_q_imagepicker_inline":"line-height: 2.5em;",".form-inline .sv_q_checkbox_inline:not(:last-child)":"margin-right: 1em;",".form-inline .sv_q_radiogroup_inline:not(:last-child)":"margin-right: 1em;",".sv_imgsel .sv_q_imagepicker_inline:not(:last-child)":"margin-right: 1em;",".sv_qstn fieldset":"border: none; margin: 0; padding: 0;",".sv_qstn .sv_q_file_placeholder":"display:none",".sv_p_title":"padding-left: 1em; padding-bottom: 0.3em;",".sv_p_title_expandable":"cursor: pointer;",".sv_p_title .sv_panel_icon":"float: right; margin-right: 1em;",".sv_p_title .sv_panel_icon::before":"content: ''; background-repeat: no-repeat; background-position: center; padding: 0.5em; display: inline-block; background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMi4wLjEsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxMCAxMCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMTAgMTA7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+DQoJLnN0MHtmaWxsOiM2RDcwNzI7fQ0KPC9zdHlsZT4NCjxwb2x5Z29uIGNsYXNzPSJzdDAiIHBvaW50cz0iMiwyIDAsNCA1LDkgMTAsNCA4LDIgNSw1ICIvPg0KPC9zdmc+DQo=);",".sv_p_title .sv_panel_icon.sv_expanded::before":"transform: rotate(180deg);",".sv_q_file > input[type=file], .sv_q_file > button":"display: inline-block;",".sv_q_file_preview":"display: inline-block;",".sv_q_file_remove_button":"line-height: normal;",".sv_q_m_cell_text":"cursor: pointer;",".sv_q_dd_other":"margin-top: 1em;",".sv_q_dd_other input":"width: 100%;",".sv_qstn .sv-q-col-1":"width: 100%; display: inline-block; padding-right: 1em; box-sizing: border-box; word-break: break-all;",".sv_qstn .sv-q-col-2":"width: 50%; display: inline-block; padding-right: 1em; box-sizing: border-box; word-break: break-all;",".sv_qstn .sv-q-col-3":"width: 33.33333%; display: inline-block; padding-right: 1em; box-sizing: border-box; word-break: break-all;",".sv_qstn .sv-q-col-4":"width: 25%; display: inline-block; padding-right: 1em; box-sizing: border-box; word-break: break-all;",".sv_qstn .sv-q-col-5":"width: 20%; display: inline-block; padding-right: 1em; box-sizing: border-box; word-break: break-all;",".sv_qstn .sv_q_file_input":"color: transparent;",".sv_qstn .sv_q_file_input::after":"content: attr(title); padding-left: 1em; color: initial;",".sv_qstn .sv_q_imgsel label > div":"overflow: hidden; white-space: nowrap; text-overflow: ellipsis; padding: 4px; border: 1px solid lightgray; border-radius: 4px;",".sv_qstn .sv_q_imgsel label > div > img":"display: block;"},e.Media={".sv_qstn fieldset .sv-q-col-1":{style:"width: 100%;",media:"@media only screen and (max-width: 480px)"},".sv_qstn fieldset .sv-q-col-2":{style:"width: 100%;",media:"@media only screen and (max-width: 480px)"},".sv_qstn fieldset .sv-q-col-3":{style:"width: 100%;",media:"@media only screen and (max-width: 480px)"},".sv_qstn fieldset .sv-q-col-4":{style:"width: 100%;",media:"@media only screen and (max-width: 480px)"},".sv_qstn fieldset .sv-q-col-5":{style:"width: 100%;",media:"@media only screen and (max-width: 480px)"}},e.ThemeColors={default:{"$header-background-color":"#e7e7e7","$body-container-background-color":"#f4f4f4","$main-color":"#1ab394","$main-hover-color":"#0aa384","$body-background-color":"white","$inputs-background-color":"white","$text-color":"#6d7072","$header-color":"#6d7072","$border-color":"#e7e7e7","$error-color":"#ed5565","$error-background-color":"#fd6575"},orange:{"$header-background-color":"#4a4a4a","$body-container-background-color":"#f8f8f8","$main-color":"#f78119","$main-hover-color":"#e77109","$body-background-color":"white","$inputs-background-color":"white","$text-color":"#4a4a4a","$header-color":"#f78119","$border-color":"#e7e7e7","$error-color":"#ed5565","$error-background-color":"#fd6575"},darkblue:{"$header-background-color":"#d9d8dd","$body-container-background-color":"#f6f7f2","$main-color":"#3c4f6d","$main-hover-color":"#2c3f5d","$body-background-color":"white","$inputs-background-color":"white","$text-color":"#4a4a4a","$header-color":"#6d7072","$border-color":"#e7e7e7","$error-color":"#ed5565","$error-background-color":"#fd6575"},darkrose:{"$header-background-color":"#ddd2ce","$body-container-background-color":"#f7efed","$main-color":"#68656e","$main-hover-color":"#58555e","$body-background-color":"white","$inputs-background-color":"white","$text-color":"#4a4a4a","$header-color":"#6d7072","$border-color":"#e7e7e7","$error-color":"#ed5565","$error-background-color":"#fd6575"},stone:{"$header-background-color":"#cdccd2","$body-container-background-color":"#efedf4","$main-color":"#0f0f33","$main-hover-color":"#191955","$body-background-color":"white","$inputs-background-color":"white","$text-color":"#0f0f33","$header-color":"#0f0f33","$border-color":"#e7e7e7","$error-color":"#ed5565","$error-background-color":"#fd6575"},winter:{"$header-background-color":"#82b8da","$body-container-background-color":"#dae1e7","$main-color":"#3c3b40","$main-hover-color":"#1e1d20","$body-background-color":"white","$inputs-background-color":"white","$text-color":"#000","$header-color":"#000","$border-color":"#e7e7e7","$error-color":"#ed5565","$error-background-color":"#fd6575"},winterstone:{"$header-background-color":"#323232","$body-container-background-color":"#f8f8f8","$main-color":"#5ac8fa","$main-hover-color":"#06a1e7","$body-background-color":"white","$inputs-background-color":"white","$text-color":"#000","$header-color":"#fff","$border-color":"#e7e7e7","$error-color":"#ed5565","$error-background-color":"#fd6575"}},e.ThemeCss={".sv_default_css":"background-color: $body-container-background-color;",".sv_default_css hr":"border-color: $border-color;",".sv_default_css input[type='button'], .sv_default_css button":"color: $body-background-color; background-color: $main-color;",".sv_default_css input[type='button']:hover, .sv_default_css button:hover":"background-color: $main-hover-color;",".sv_default_css .sv_header":"color: $header-color;",".sv_default_css .sv_custom_header":"background-color: $header-background-color;",".sv_default_css .sv_container":"color: $text-color;",".sv_default_css .sv_body":"background-color: $body-background-color; border-color: $main-color;",".sv_default_css .sv_progress":"background-color: $border-color;",".sv_default_css .sv_progress_bar":"background-color: $main-color;",".sv_default_css .sv_p_root > .sv_row":"border-color: $border-color;",".sv_default_css .sv_p_root > .sv_row:nth-child(odd)":"background-color: $body-background-color;",".sv_default_css .sv_p_root > .sv_row:nth-child(even)":"background-color: $body-container-background-color;",".sv_default_css .sv_q_other input":"color: $text-color; border-color: $border-color; background-color: $inputs-background-color;",".sv_default_css .sv_q_text_root":"color: $text-color; border-color: $border-color; background-color: $inputs-background-color;",".sv_default_css .sv_q_dropdown_control":"color: $text-color; border-color: $border-color; background-color: $inputs-background-color;",".sv_default_css input[type='text']":"color: $text-color; border-color: $border-color; background-color: $inputs-background-color;",".sv_default_css select":"color: $text-color; border-color: $border-color; background-color: $inputs-background-color;",".sv_default_css textarea":"color: $text-color; border-color: $border-color; background-color: $inputs-background-color;",".sv_default_css .sv_q_other input:focus":"border-color: $main-color;",".sv_default_css .sv_q_text_root:focus":"border-color: $main-color;",".sv_default_css .sv_q_dropdown_control:focus":"border-color: $main-color;",".sv_default_css input[type='text']:focus":"border-color: $main-color;",".sv_default_css select:focus":"border-color: $main-color;",".sv_default_css textarea:focus":"border-color: $main-color;",".sv_default_css .sv_select_wrapper":"background-color: $body-background-color;",".sv_default_css .sv_select_wrapper::before":"background-color: $main-color;",".sv_default_css .sv_q_rating_item.active .sv_q_rating_item_text":"background-color: $main-hover-color; border-color: $main-hover-color; color: $body-background-color;",".sv_default_css .sv_q_rating_item .sv_q_rating_item_text":"border-color: $border-color;",".sv_default_css .sv_q_rating_item .sv_q_rating_item_text:hover":"border-color: $main-hover-color;",".sv_default_css table.sv_q_matrix tr":"border-color: $border-color;",".sv_default_css table.sv_q_matrix_dropdown tr":"border-color: $border-color;",".sv_default_css table.sv_q_matrix_dynamic tr":"border-color: $border-color;",".sv_default_css .sv_q_m_cell_selected":"color: $body-background-color; background-color: $main-hover-color;",".sv_main .sv_q_imgsel.checked label>div":"background-color: $main-color"},e.bootstrapThemeCss={".sv_main .sv_q_imgsel.checked label>div":"background-color: $main-color"},e.bootstrapmaterialThemeCss={".sv_main.sv_bootstrapmaterial_css .form-group.is-focused .form-control":"background-image: linear-gradient($main-color, $main-color), linear-gradient(#D2D2D2, #D2D2D2);",".sv_main.sv_bootstrapmaterial_css .form-group.is-focused label":"color:$main-color;",".sv_main.sv_bootstrapmaterial_css .checkbox input[type=checkbox]:checked + .checkbox-material .check":"border-color: $main-color;",".sv_main.sv_bootstrapmaterial_css label.checkbox-inline input[type=checkbox]:checked + .checkbox-material .check":"border-color: $main-color;",".sv_main.sv_bootstrapmaterial_css .checkbox input[type=checkbox]:checked + .checkbox-material .check:before":"color: $main-color;",".sv_main.sv_bootstrapmaterial_css label.checkbox-inline input[type=checkbox]:checked + .checkbox-material .check:before":"color: $main-color;",".sv_main.sv_bootstrapmaterial_css .radio input[type=radio]:checked ~ .circle":"border-color: $main-color;",".sv_main.sv_bootstrapmaterial_css label.radio-inline input[type=radio]:checked ~ .circle":"border-color: $main-color;",".sv_main.sv_bootstrapmaterial_css .radio input[type=radio]:checked ~ .check":"background-color: $main-color;",".sv_main.sv_bootstrapmaterial_css label.radio-inline input[type=radio]:checked ~ .check":"background-color: $main-color;",".sv_main.sv_bootstrapmaterial_css .btn-default.active":"background-color: $main-color; color: $body-background-color;",".sv_main.sv_bootstrapmaterial_css .btn-default:active":"background-color: $main-color; color: $body-background-color;",".sv_main.sv_bootstrapmaterial_css .btn-secondary.active":"background-color: $main-color; color: $body-background-color;",".sv_main.sv_bootstrapmaterial_css .btn-secondary:active":"background-color: $main-color; color: $body-background-color;",".sv_main.sv_bootstrapmaterial_css .open>.dropdown-toggle.btn-default":"background-color: $main-color; color: $body-background-color;",".sv_main.sv_bootstrapmaterial_css input[type='button'].btn-primary, .sv_main.sv_bootstrapmaterial_css button.btn-primary":"color: $body-background-color; background-color: $main-color;",".sv_main.sv_bootstrapmaterial_css input[type='button'].btn-primary:hover, .sv_main.sv_bootstrapmaterial_css button.btn-primary:hover":"background-color: $main-hover-color;",".sv_main .sv_q_imgsel.checked label>div":"background-color: $main-color;",".sv_main.sv_bootstrapmaterial_css .form-group input[type=file]":"position: relative; opacity: 1;"},e;}();},function(e,t,n){"use strict";var r=n(0),i=n(4),o=n(19);n.d(t,"a",function(){return a;});var a=function(e){function t(t,n){void 0===n&&(n=null);var r=e.call(this)||this;r.isExpandedValue=!1,r.closeOnCompleteTimeout=0,r.surveyValue=n||r.createSurvey(t),r.surveyValue.showTitle=!1,"undefined"!=typeof document&&(r.windowElement=document.createElement("div"));var i=r;return r.survey.onComplete.add(function(e,t){i.onSurveyComplete();}),r;}return r.b(t,e),t.prototype.getType=function(){return"window";},Object.defineProperty(t.prototype,"survey",{get:function get(){return this.surveyValue;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"isShowing",{get:function get(){return this.isShowingValue;},set:function set(e){this.isShowing!=e&&(this.isShowingValue=e,this.showingChangedCallback&&this.showingChangedCallback());},enumerable:!0,configurable:!0}),t.prototype.show=function(){this.isShowing=!0;},t.prototype.hide=function(){this.isShowing=!1;},Object.defineProperty(t.prototype,"isExpanded",{get:function get(){return this.isExpandedValue;},set:function set(e){e?this.expand():this.collapse();},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"title",{get:function get(){return this.survey.title;},set:function set(e){this.survey.title=e;},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"locTitle",{get:function get(){return this.survey.locTitle;},enumerable:!0,configurable:!0}),t.prototype.expand=function(){this.expandcollapse(!0);},t.prototype.collapse=function(){this.expandcollapse(!1);},t.prototype.createSurvey=function(e){return new o.a(e);},t.prototype.expandcollapse=function(e){this.isExpandedValue!=e&&(this.isExpandedValue=e,this.expandedChangedCallback&&this.expandedChangedCallback());},t.prototype.onSurveyComplete=function(){if(!(this.closeOnCompleteTimeout<0))if(0==this.closeOnCompleteTimeout)this.closeWindowOnComplete();else{var e=this,t=null,n=function n(){e.closeWindowOnComplete(),window.clearInterval(t);};t=window.setInterval(n,1e3*this.closeOnCompleteTimeout);}},t.prototype.closeWindowOnComplete=function(){this.closeWindowOnCompleteCallback&&this.closeWindowOnCompleteCallback();},t.surveyElementName="windowSurveyJS",t;}(i.c);},function(e,t,n){"use strict";var r=n(4);n.d(t,"a",function(){return o;});var i={setInterval:function setInterval(e){return window.setInterval(e,1e3);},clearInterval:function clearInterval(e){window.clearInterval(e);}},o=function(){function e(){this.listenerCounter=0,this.timerId=-1,this.onTimer=new r.b();}return Object.defineProperty(e,"instance",{get:function get(){return e.instanceValue||(e.instanceValue=new e()),e.instanceValue;},enumerable:!0,configurable:!0}),e.prototype.start=function(e){if(void 0===e&&(e=null),e&&this.onTimer.add(e),this.timerId<0){var t=this;this.timerId=i.setInterval(function(){t.doTimer();});}this.listenerCounter++;},e.prototype.stop=function(e){void 0===e&&(e=null),e&&this.onTimer.remove(e),0==--this.listenerCounter&&this.timerId>-1&&(i.clearInterval(this.timerId),this.timerId=-1);},e.prototype.doTimer=function(){this.timerId<0||this.onTimer.fire(this,{});},e.instanceValue=null,e;}();},function(e,t,n){"use strict";var r=n(95);n.d(t,"J",function(){return r.a;}),n.d(t,"K",function(){return r.b;}),n.d(t,"L",function(){return r.c;}),n.d(t,"M",function(){return r.d;}),n.d(t,"N",function(){return r.e;}),n.d(t,"O",function(){return r.f;}),n.d(t,"P",function(){return r.g;}),n.d(t,"Q",function(){return r.h;}),n.d(t,"R",function(){return r.i;}),n.d(t,"S",function(){return r.j;}),n.d(t,"T",function(){return r.k;}),n.d(t,"U",function(){return r.l;}),n.d(t,"V",function(){return r.m;}),n.d(t,"W",function(){return r.n;}),n.d(t,"X",function(){return r.o;}),n.d(t,"Y",function(){return r.p;}),n.d(t,"Z",function(){return r.q;}),n.d(t,"_0",function(){return r.r;}),n.d(t,"_1",function(){return r.s;}),n.d(t,"_2",function(){return r.t;}),n.d(t,"_3",function(){return r.u;}),n.d(t,"_4",function(){return r.v;}),n.d(t,"_5",function(){return r.w;}),n.d(t,"_6",function(){return r.x;}),n.d(t,"_7",function(){return r.y;}),n.d(t,"_8",function(){return r.z;}),n.d(t,"_9",function(){return r.A;}),n.d(t,"_10",function(){return r.B;}),n.d(t,"_11",function(){return r.C;}),n.d(t,"_12",function(){return r.D;}),n.d(t,"_13",function(){return r.E;}),n.d(t,"_14",function(){return r.F;}),n.d(t,"_15",function(){return r.G;}),n.d(t,"_16",function(){return r.H;}),n.d(t,"_17",function(){return r.I;}),n.d(t,"_18",function(){return r.J;}),n.d(t,"_19",function(){return r.K;}),n.d(t,"_20",function(){return r.L;}),n.d(t,"_21",function(){return r.M;}),n.d(t,"_22",function(){return r.N;}),n.d(t,"_23",function(){return r.O;}),n.d(t,"_24",function(){return r.P;}),n.d(t,"_25",function(){return r.Q;}),n.d(t,"_26",function(){return r.R;}),n.d(t,"_27",function(){return r.S;}),n.d(t,"_28",function(){return r.T;}),n.d(t,"_29",function(){return r.U;}),n.d(t,"_30",function(){return r.V;}),n.d(t,"_31",function(){return r.W;}),n.d(t,"_32",function(){return r.X;}),n.d(t,"_33",function(){return r.Y;}),n.d(t,"_34",function(){return r.Z;}),n.d(t,"_35",function(){return r._0;}),n.d(t,"_36",function(){return r._1;}),n.d(t,"_37",function(){return r._2;}),n.d(t,"_38",function(){return r._3;}),n.d(t,"_39",function(){return r._4;}),n.d(t,"_40",function(){return r._5;}),n.d(t,"_41",function(){return r._6;}),n.d(t,"_42",function(){return r._7;}),n.d(t,"_43",function(){return r._8;}),n.d(t,"_44",function(){return r._9;}),n.d(t,"_45",function(){return r._10;}),n.d(t,"_46",function(){return r._11;}),n.d(t,"_47",function(){return r._12;}),n.d(t,"_48",function(){return r._13;}),n.d(t,"_49",function(){return r._14;}),n.d(t,"_50",function(){return r._15;}),n.d(t,"_51",function(){return r._16;}),n.d(t,"_52",function(){return r._17;}),n.d(t,"_53",function(){return r._18;}),n.d(t,"_54",function(){return r._19;}),n.d(t,"_55",function(){return r._20;}),n.d(t,"_56",function(){return r._21;}),n.d(t,"_57",function(){return r._22;}),n.d(t,"_58",function(){return r._23;}),n.d(t,"_59",function(){return r._24;}),n.d(t,"_60",function(){return r._25;}),n.d(t,"_61",function(){return r._26;}),n.d(t,"_62",function(){return r._27;}),n.d(t,"_63",function(){return r._28;}),n.d(t,"_64",function(){return r._29;}),n.d(t,"_65",function(){return r._30;}),n.d(t,"_66",function(){return r._31;}),n.d(t,"_67",function(){return r._32;}),n.d(t,"_68",function(){return r._33;}),n.d(t,"_69",function(){return r._34;}),n.d(t,"_70",function(){return r._35;}),n.d(t,"_71",function(){return r._36;}),n.d(t,"_72",function(){return r._37;}),n.d(t,"_73",function(){return r._38;}),n.d(t,"_74",function(){return r._39;}),n.d(t,"_75",function(){return r._40;});var i=(n(94),n(0));n.d(t,"_76",function(){return i.a;}),n.d(t,"_77",function(){return i.b;}),n.d(t,"_78",function(){return i.c;});var o=n(12);n.d(t,"a",function(){return o.a;});var a=n(92);n.d(t,"b",function(){return a.a;});var s=n(93);n.d(t,"c",function(){return s.a;});var u=n(31),l=(n.n(u),n(23));n.d(t,"d",function(){return l.a;}),n.d(t,"e",function(){return l.a;});var c=n(21);n.d(t,"f",function(){return c.a;}),n.d(t,"g",function(){return c.b;}),n.d(t,"h",function(){return c.c;});var p=n(22);n.d(t,"i",function(){return p.a;});var d=n(7);n.d(t,"j",function(){return d.a;});var h=n(14);n.d(t,"k",function(){return h.a;}),n.d(t,"l",function(){return h.b;});var f=n(97);n.d(t,"m",function(){return f.a;});var m=n(98);n.d(t,"n",function(){return m.a;});var g=n(99);n.d(t,"o",function(){return g.a;});var y=n(102);n.d(t,"p",function(){return y.a;});var v=n(103);n.d(t,"q",function(){return v.a;});var b=n(105);n.d(t,"r",function(){return b.a;}),n.d(t,"s",function(){return b.b;});var x=n(36);n.d(t,"t",function(){return x.a;});var C=n(106);n.d(t,"u",function(){return C.a;}),n.d(t,"v",function(){return C.b;});var w=n(108);n.d(t,"w",function(){return w.a;});var P=n(107);n.d(t,"x",function(){return P.a;}),n.d(t,"y",function(){return P.b;}),n.d(t,"z",function(){return P.c;});var V=n(109);n.d(t,"A",function(){return V.a;});var k=n(110);n.d(t,"B",function(){return k.a;});var T=n(37);n.d(t,"C",function(){return T.a;});var S=n(96);n.d(t,"D",function(){return S.a;});var O=n(100);n.d(t,"E",function(){return O.a;});var R=n(101);n.d(t,"F",function(){return R.a;});var E=n(104);n.d(t,"G",function(){return E.a;});var q=n(30);n.d(t,"H",function(){return q.a;});var _=n(38);n.d(t,"I",function(){return _.a;});},function(e,t,n){"use strict";var r=n(12);n.d(t,"a",function(){return i;});var i=function i(e,t){var n=function n(){if("model"==i||"children"==i)return"continue";if("css"==i)return e.mergeValues(t.css,r.b.getCss()),"continue";if(0==i.indexOf("on")&&e[i]&&e[i].add){var n=t[i],o=function o(e,t){n(e,t);};e[i].add(o);}else e[i]=t[i];};for(var i in t){n();}t&&t.data&&e.onValueChanged.add(function(e,n){t.data[n.name]=n.value;});};},function(t,n){t.exports=e;},function(e,t){e.exports='<script type="text/html" id="survey-comment">\n    \x3c!-- ko ifnot: question.koIsReadOnly --\x3e\n    <input type="text" data-bind="value: $data.question.koComment, visible: $data.visible, css: question.koCss().other, attr: { maxLength: question.getOthersMaxLength(), \'aria-label\': !!question.locTitle && question.locTitle.renderedHtml }"\n    />\n    \x3c!-- /ko --\x3e\n    \x3c!-- ko if: question.koIsReadOnly --\x3e\n    <div data-bind="text: $data.question.koComment, visible: $data.visible, css: question.koCss().other"></div>\n    \x3c!-- /ko --\x3e\n<\/script>';},function(e,t){e.exports='\x3c!-- ko template: { name: \'survey-content\', afterRender: koEventAfterRender } --\x3e\n\x3c!-- /ko --\x3e\n<script type="text/html" id="survey-content">\n    <div data-bind="css: css.root, afterRender: koEventAfterRender">\n        <div class="sv_custom_header"></div>\n        <div class="sv_container">\n            <div data-bind="css: css.header, visible: (title.length > 0) && showTitle && koState() == \'running\'">\n                <h3>\n                    \x3c!-- ko template: { name: \'survey-string\', data: locTitle } --\x3e\n                    \x3c!-- /ko --\x3e\n                </h3>\n            </div>\n            \x3c!-- ko if: koState() == "starting" --\x3e\n            <div data-bind="css: css.body">\n                <div data-bind="attr: { id: startedPage.id }, template: { name: \'survey-page\', data: startedPage, afterRender: koAfterRenderPage }"></div>\n                <div data-bind="visible: koIsNavigationButtonsShowing, css: css.footer">\n                    <input type="button" data-bind="value: startSurveyText, click: start, css: cssNavigationStart" />\n                </div>\n            </div>\n            \x3c!-- /ko --\x3e\n            \x3c!-- ko if: koState() == "running" --\x3e\n            <div data-bind="css: css.body">\n                \x3c!-- ko if: isTimerPanelShowingOnTop --\x3e\n                \x3c!-- ko template: { name: \'survey-timerpanel\'} --\x3e\n                \x3c!-- /ko --\x3e\n                \x3c!-- /ko --\x3e\n                <div data-bind="visible: isShowProgressBarOnTop, template: \'survey-progress\'"></div>\n                <div data-bind="attr: { id: koCurrentPage().id }, template: { name: \'survey-page\', data: koCurrentPage, afterRender: koAfterRenderPage }"></div>\n                <div style="margin-top:1em" data-bind="visible: isShowProgressBarOnBottom, template: \'survey-progress\'"></div>\n                \x3c!-- ko if: isTimerPanelShowingOnBottom --\x3e\n                \x3c!-- ko template: { name: \'survey-timerpanel\'} --\x3e\n                \x3c!-- /ko --\x3e\n                \x3c!-- /ko --\x3e\n                <div data-bind="visible: koIsNavigationButtonsShowing, css: css.footer">\n                    <input type="button" data-bind="value: pagePrevText, click: prevPage, visible: !koIsFirstPage() && isShowPrevButton, css: cssNavigationPrev"\n                    />\n                    <input type="button" data-bind="value: pageNextText, click: nextPage, visible: !koIsLastPage(), css: cssNavigationNext" />\n                    <input type="button" data-bind="value: completeText, click: completeLastPage, visible: koIsLastPage() && isEditMode, css: cssNavigationComplete"\n                    />\n                </div>\n            </div>\n            \x3c!-- /ko --\x3e\n            \x3c!-- ko if: koState() == "completed" && showCompletedPage --\x3e\n            <div data-bind="html: processedCompletedHtml, css: completedCss"></div>\n            <div data-bind="visible: koCompletedState() != \'\', css: css.saveData.root">\n                <div data-bind="css: koCompletedStateCss">\n                    <span data-bind="text:koCompletedStateText"></span>\n                    <input type="button" data-bind="visible: koCompletedState() == \'error\', value: getLocString(\'saveAgainButton\'), click: doComplete, css: css.saveData.saveAgainButton"\n                    />\n                </div>\n            </div>\n            \x3c!-- /ko --\x3e\n            \x3c!-- ko if: koState() == "completedbefore" --\x3e\n            <div data-bind="html: processedCompletedBeforeHtml, css: css.body"></div>\n            \x3c!-- /ko --\x3e\n            \x3c!-- ko if: koState() == "loading" --\x3e\n            <div data-bind="html: processedLoadingHtml, css: css.body"></div>\n            \x3c!-- /ko --\x3e\n            \x3c!-- ko if: koState() == "empty" --\x3e\n            <div data-bind="text:emptySurveyText, css: css.body"></div>\n            \x3c!-- /ko --\x3e\n        </div>\n    </div>\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-matrixcell">\n    <td data-bind="css: $context.question.koCss().itemValue">\n        <div data-bind="visible: cell.question.koVisible">\n            \x3c!-- ko template: { name: \'survey-question-errors\', data: cell.question } --\x3e\n            \x3c!-- /ko --\x3e\n            \x3c!-- ko template: { name: question.koTemplateName(), data: cell.question, as: \'question\' } --\x3e\n            \x3c!-- /ko --\x3e\n        </div>\n    </td>\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-page">\n    <div data-bind="css: data.css.page.root">\n        <h4 data-bind="visible: (processedTitle.length > 0) && data.showPageTitles, css: data.css.pageTitle">\n            \x3c!-- ko template: { name: \'survey-string\', data: locTitle } --\x3e\n            \x3c!-- /ko --\x3e\n        </h4>\n        <div data-bind="visible: hasDescription, css: data.css.pageDescription">\n            \x3c!-- ko template: { name: \'survey-string\', data: locDescription } --\x3e\n            \x3c!-- /ko --\x3e\n        </div>\n        \x3c!-- ko template: { name: \'survey-rows\', data: $data} --\x3e\n        \x3c!-- /ko --\x3e\n    </div>\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-panel">\n    <div data-bind="style:{ width: koRenderWidth }, attr: {id: id}, css: cssClasses.panel.container">\n        <h4 data-bind="visible: (processedTitle.length > 0), css: $data.getTitleStyle(), click: doExpand">\n            \x3c!-- ko template: { name: \'survey-string\', data: locTitle } --\x3e\n            \x3c!-- /ko --\x3e\n            <span class="sv_panel_icon" data-bind="visible: koIsCollapsed() || koIsExpanded(), css: {sv_expanded: !koIsCollapsed()}"></span>\n        </h4>\n        <div data-bind="visible: hasDescription, css: cssClasses.panel.description">\n            \x3c!-- ko template: { name: \'survey-string\', data: locDescription } --\x3e\n            \x3c!-- /ko --\x3e\n        </div>\n        \x3c!-- ko template: { name: \'survey-question-errors\', data: $data } --\x3e\n        \x3c!-- /ko --\x3e\n        <div data-bind="visible: !koIsCollapsed(), style: { paddingLeft: koInnerMargin }">\n            \x3c!-- ko template: { name: \'survey-rows\', data: $data} --\x3e\n            \x3c!-- /ko --\x3e\n        </div>\n    </div>\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-progress">\n    <div data-bind="css: css.progress">\n        <div data-bind="css: css.progressBar, style:{width: koProgress() + \'%\'}"\n            role="progressbar" aria-valuemin="0" aria-valuemax="100">\n            <span data-bind="text:koProgressText"></span>\n        </div>\n    </div>\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-question-boolean">\n    <div data-bind="css: question.koCss().root">\n        <label data-bind="css: question.getItemCss()">\n            <input type="checkbox" data-bind="attr: {name: question.name, id: question.inputId, \'aria-label\': question.locTitle.renderedHtml}, checked: question.koCheckedValue, surveyProp: {indeterminate: question.koIndeterminate}, enable: !question.koIsReadOnly()"\n            />\n            <span data-bind="css: question.koCss().materialDecorator">\n                <span class="check"></span>\n            </span>\n            <span data-bind="css: question.koCss().label">\n                \x3c!-- ko template: { name: \'survey-string\', data: locDisplayLabel } --\x3e\n                \x3c!-- /ko --\x3e\n            </span>\n        </label>\n    </div>\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-question-checkbox">\n    <fieldset data-bind="css: question.koCss().root">\n        \x3c!-- ko foreach: { data: question.koVisibleChoices, as: \'item\', afterRender: question.koAfterRender}  --\x3e\n        <div data-bind="css: question.getItemClass(item)">\n            <label data-bind="css: question.koCss().label">\n                <input type="checkbox" data-bind="attr: {name: question.name, value: item.value, id: ($index() == 0) ? question.inputId : \'\', \'aria-label\': question.locTitle.renderedHtml }, checked: question.koValue, enable: !question.koIsReadOnly(), css: question.koCss().itemControl"\n                />\n                <span data-bind="css: question.koCss().materialDecorator">\n                    <span class="check"></span>\n                </span>\n                <span data-bind="css: question.koCss().controlLabel">\n                    \x3c!-- ko template: { name: \'survey-string\', data: item.locText } --\x3e\n                    \x3c!-- /ko --\x3e\n                </span>\n            </label>\n            \x3c!-- ko if: question.hasOther && ($index() == question.koVisibleChoices().length-1) --\x3e\n            <div class="form-group" data-bind="template: { name: \'survey-comment\', data: {\'question\': question, \'visible\': question.koOtherVisible } }"></div>\n            \x3c!-- /ko --\x3e\n        </div>\n        \x3c!-- /ko --\x3e\n        <legend style="display: none;" data-bind="text: question.locTitle.renderedHtml"></legend>\n    </fieldset>\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-question-comment">\n    <textarea type="text" data-bind="attr: {\'readonly\': question.koIsReadOnly(), maxLength: question.getMaxLength(), cols: question.cols, rows: question.rows, id: question.inputId, placeholder: question.placeHolder, \'aria-label\': question.locTitle.renderedHtml}, value:question.koValue, css: question.koCss().root"></textarea>\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-question-dropdown">\n    \x3c!-- ko ifnot: question.koIsReadOnly --\x3e\n    <div data-bind="css: question.koCss().selectWrapper">\n        <select data-bind="attr: {id: question.inputId, \'aria-label\': question.locTitle.renderedHtml}, options: question.koVisibleChoices, optionsText: \'text\', optionsValue: \'value\', value: question.koValue, optionsCaption: question.optionsCaption, css: question.koCss().control"></select>\n    </div>\n    \x3c!-- /ko --\x3e\n    \x3c!-- ko if: question.koIsReadOnly --\x3e\n    <div data-bind="text: question.hasOther && question.isOtherSelected ? question.otherText : question.displayValue, css: question.koCss().control"></div>\n    \x3c!-- /ko --\x3e\n    <div class="form-group" data-bind="template: { visible: question.hasOther, name: \'survey-comment\', data: {\'question\': question, \'visible\': question.koOtherVisible } }"></div>\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-question-empty">\n<div></div>\n<\/script>\n';},function(e,t){e.exports='<script type="text/html" id="survey-question-errors">\n    <div role="alert" data-bind="visible: koErrors().length > 0, foreach: { data: koErrors, as: \'error\'}, css: question.koCss().error.root">\n        <div>\n            <span aria-hidden="true" data-bind="css: question.koCss().error.icon"></span>\n            <span data-bind="css: question.koCss().error.item">\n                \x3c!-- ko template: { name: \'survey-string\', data: error.locText } --\x3e\x3c!-- /ko --\x3e\n            </span>\n        </div>\n    </div>\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-question-expression">\n    <div data-bind="text:question.koDisplayValue, css: question.koCss().root"></div>\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-question-file">\n    <div data-bind="css: question.cssClasses.root">\n        \x3c!-- ko ifnot: question.koIsReadOnly --\x3e\n        <input type="file" data-bind="css: question.cssClasses.fileInput, style: { color: koHasValue() ? \'inherit\' : \'transparent\' }, attr: {id: question.inputId, \'aria-label\': question.locTitle.renderedHtml, multiple: question.allowMultiple ? \'multiple\' : undefined, title: koInputTitle, accept: question.acceptedTypes }, event: {change: question.dochange}">\n        \x3c!-- ko if: question.koHasValue --\x3e\n        <button data-bind="css: question.cssClasses.removeButton, click: question.doclean, text: question.cleanButtonCaption"></button>\n        \x3c!-- /ko --\x3e\n        \x3c!-- /ko --\x3e\n        \x3c!-- ko if: question.koIsReadOnly --\x3e\n        <input type="text" readonly data-bind="css: \'form-control \' + question.cssClasses.placeholderInput, attr: { placeholder: question.title }"\n        />\n        \x3c!-- /ko --\x3e\n        <div data-bind="foreach: question.koData, visible: question.koHasValue">\n            <img data-bind="attr: { src: $data, height: question.imageHeight, width: question.imageWidth }, visible: question.showPreview, css: question.cssClasses.preview"\n                alt="File preview">\n        </div>\n    </div>\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-question-html">\n    <div data-bind="html: question.locHtml.koRenderedHtml"></div>\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-question-imagepicker">\n    <fieldset data-bind="css: question.koCss().root">\n        \x3c!-- ko foreach: { data: question.koVisibleChoices, as: \'item\', afterRender: question.koAfterRender}  --\x3e\n        <div data-bind="css: question.getItemClass(item)">\n            <label data-bind="css: question.koCss().label">\n                <input style="display: none;" data-bind="attr: {type: question.multiSelect ? \'checkbox\' : \'radio\', name: question.name + \'_\' + question.id, value: item.value, id: ($index() == 0) ? question.inputId : \'\', \'aria-label\': question.locTitle.renderedHtml}, checked: question.koValue, enable: !question.koIsReadOnly(), css: question.koCss().itemControl"\n                />\n                <div>\n                    <img data-bind="css: question.koCss().image, attr: { src: $data.imageLink }"/>\n                    \x3c!-- ko if: question.showLabel --\x3e\n                    <span data-bind="text: text || value, attr: { title: text || value }, css: question.koCss().itemText"></span>\n                    \x3c!-- /ko --\x3e\n                </div>\n            </label>\n        </div>\n        \x3c!-- /ko --\x3e\n        <legend style="display: none;" data-bind="text: question.locTitle.renderedHtml"></legend>\n    </fieldset>\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-question-matrix">\n    <fieldset>\n        <table data-bind="css: question.koCss().root">\n            <thead>\n                <tr>\n                    <td data-bind="visible: question.hasRows"></td>\n                    \x3c!-- ko foreach: question.koVisibleColumns --\x3e\n                    <th>\n                        \x3c!-- ko template: { name: \'survey-string\', data: locText } --\x3e\n                        \x3c!-- /ko --\x3e\n                    </th>\n                    \x3c!-- /ko --\x3e\n                </tr>\n            </thead>\n            <tbody>\n                \x3c!-- ko foreach: { data: question.koVisibleRows, as: \'row\' } --\x3e\n                <tr data-bind="css: question.koCss().row">\n                    <td data-bind="visible: question.hasRows">\n                        \x3c!-- ko template: { name: \'survey-string\', data: row.locText } --\x3e\n                        \x3c!-- /ko --\x3e\n                    </td>\n                    \x3c!-- ko foreach: question.koVisibleColumns --\x3e\n                    \x3c!-- ko if: question.hasCellText --\x3e\n                    <td data-bind="css: question.getItemCss(row, $data), click: function() { row.koCellClick($data); }">\n                        \x3c!-- ko template: { name: \'survey-string\', data: question.getCellDisplayLocText(row.name, $data) } --\x3e\n                        \x3c!-- /ko --\x3e\n                    </td>\n                    \x3c!-- /ko --\x3e\n                    \x3c!-- ko if: !question.hasCellText --\x3e\n                    <td>\n                        <label data-bind="css: question.getItemCss(row, $data)">\n                            <input type="radio" data-bind="css: question.koCss().itemValue, attr: {name: row.fullName, \'aria-label\': question.locTitle.renderedHtml, value: $data.value, id: ($index() == 0) && ($parentContext.$index() == 0) ? question.inputId : \'\'}, checked: row.koValue, enable: !question.koIsReadOnly()"\n                            />\n                            <span class="circle"></span>\n                            <span class="check"></span>\n                            <span style="display: none" data-bind="text: $data.locText.text"></span>\n                        </label>\n                    </td>\n                    \x3c!-- /ko --\x3e\n                    \x3c!-- /ko --\x3e\n                </tr>\n                \x3c!-- /ko --\x3e\n            </tbody>\n        </table>\n        <legend style="display: none;" data-bind="text: question.locTitle.renderedHtml"></legend>\n    </fieldset>\n<\/script>\n<script type="text/html" id="survey-text">\n    <span data-bind="text:$data.renderedHtml"></span>\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-question-matrixdynamic">\n    <div data-bind="visible: question.koIsAddRowOnTop(), css: question.koCss().footer">\n        <input type="button" data-bind="click:question.koAddRowClick, css: question.koCss().button + \' \' + question.koCss().buttonAdd, value: question.addRowText" />\n    </div>\n    <div data-bind="style: {overflowX: question.horizontalScroll? \'scroll\': \'\'}">\n        <table data-bind="visible: question.koIsHorizontalColumnLayout, css: question.koCss().root">\n            <thead data-bind="visible: question.showHeader">\n                <tr>\n                    \x3c!-- ko if: question.hasRowText --\x3e<td></td>\x3c!-- /ko --\x3e\n                    \x3c!-- ko foreach: question.columns --\x3e\n                    <th data-bind="style: { minWidth: question.getColumnWidth($data) }">\n                        \x3c!-- ko template: { name: \'survey-string\', data: locTitle } --\x3e\n                        \x3c!-- /ko --\x3e\n                    </th>\n                    \x3c!-- /ko --\x3e\n                    \x3c!-- ko if: question.koCanRemoveRow --\x3e\n                    <td></td>\n                    \x3c!-- /ko --\x3e\n                </tr>\n            </thead>\n            <tbody>\n                \x3c!-- ko foreach: { data: question.koRows, as: \'row\' } --\x3e\n                <tr>\n                    \x3c!-- ko if: question.hasRowText --\x3e<td>\x3c!-- ko template: { name: \'survey-string\', data: row.locText } --\x3e\x3c!-- /ko --\x3e</td>\x3c!-- /ko --\x3e\n                    \x3c!-- ko foreach: row.cells--\x3e\n                    \x3c!-- ko template: { name: \'survey-matrixcell\', data: $data, as: "cell", afterRender: $data.data.koCellAfterRender } --\x3e\n                    \x3c!-- /ko --\x3e\n                    \x3c!-- /ko --\x3e\n                    \x3c!-- ko if: question.koCanRemoveRow --\x3e\n                    <td>\n                        <input type="button" data-bind="click:question.koRemoveRowClick, css: question.koCss().button + \' \' + question.koCss().buttonRemove, value: question.removeRowText"\n                        />\n                    </td>\n                    \x3c!-- /ko --\x3e\n                </tr>\n                \x3c!-- /ko --\x3e\n            </tbody>\n        </table>\n        \x3c!-- ko if: !question.koIsHorizontalColumnLayout() --\x3e\n        <table data-bind="css: question.koCss().root">\n            \x3c!-- ko if: question.hasRowText --\x3e\n                <thead>\n                    <tr>\n                        <th data-bind="visible: question.showHeader"></th>\n                        \x3c!-- ko foreach: { data: question.koRows, as: \'row\' } --\x3e\n                            <th>\x3c!-- ko template: { name: \'survey-string\', data: row.locText } --\x3e\x3c!-- /ko --\x3e</th>\n                        \x3c!-- /ko --\x3e            \n                    </tr>\n                </thead>\n            \x3c!-- /ko --\x3e\n            <tbody>\n                \x3c!-- ko foreach: { data: question.columns, as: \'column\' } --\x3e\n                    <tr>\n                        <th data-bind="visible: question.showHeader, style: { minWidth: question.getColumnWidth($data) }">\n                            \x3c!-- ko template: { name: \'survey-string\', data: locTitle } --\x3e\n                            \x3c!-- /ko --\x3e\n                        </th>\n                        \x3c!-- ko foreach: { data: question.koRows, as: \'row\' } --\x3e\n                            \x3c!-- ko template: { name: \'survey-matrixcell\', data: row.cells[column.index], as: "cell", afterRender: row.data.koCellAfterRender } --\x3e\n                            \x3c!-- /ko --\x3e\n                        \x3c!-- /ko --\x3e\n                    </tr>\n                \x3c!-- /ko --\x3e\n                \x3c!-- ko if: question.koCanRemoveRow --\x3e\n                <tr>\n                    <td data-bind="visible: question.showHeader">\n                    </td>\n                     \x3c!-- ko foreach: { data: question.koRows, as: \'row\' } --\x3e\n                        <td>\n                            <input type="button" data-bind="click:question.koRemoveRowClick, css: question.koCss().button + \' \' + question.koCss().buttonRemove, value: question.removeRowText"/>\n                        </td>\n                    \x3c!-- /ko --\x3e\n                </tr>\n                \x3c!-- /ko --\x3e\n            </tbody>\n        </table>\n        \x3c!-- /ko --\x3e\n    </div>\n    <div data-bind="visible: question.koIsAddRowOnBottom(), css: question.koCss().footer">\n        <input type="button" data-bind="click:question.koAddRowClick, css: question.koCss().button + \' \' + question.koCss().buttonAdd, value: question.addRowText" />\n    </div>\n<\/script>';},function(e,t){e.exports="<script type=\"text/html\" id=\"survey-question-multipletext\">\n    <table data-bind=\"css: question.koCss().root, foreach: { data:  question.koRows, as: 'row' }\">\n        <tr data-bind=\"foreach: { data: row, as: 'item' }, css: question.koCss().row\">\n            <td data-bind=\"css: question.koCss().itemTitle\">\x3c!-- ko template: { name: 'survey-string', data: item.locTitle } --\x3e\x3c!-- /ko --\x3e</td>\n            <td>\n                \x3c!-- ko template: { name: 'survey-question-errors', data: item.editor } --\x3e\n                \x3c!-- /ko --\x3e\n                \x3c!-- ko template: { name: item.editor.koTemplateName(), data: item.editor, as: 'question' } --\x3e\n                \x3c!-- /ko --\x3e\n            </td>\n        </tr>\n    </table>\n<\/script>";},function(e,t){e.exports='<script type="text/html" id="survey-question-paneldynamic-navigator">\n    <input type="range" min="0" style="width:25%;float:left;margin:5px" data-bind="visible: koIsRange, value: question.koRangeValue, attr: {max: question.koRangeMax}" />\n    <input type="button" style="float:left;margin:5px" data-bind="visible: question.koIsPrevButton, click:question.koPrevPanelClick, css: question.koCss().button + \' \' + question.koCss().buttonPrev, value: question.panelPrevText" />\n    <input type="button" style="float:left;margin:5px" data-bind="visible: question.koIsNextButton, click:question.koNextPanelClick, css: question.koCss().button + \' \' + question.koCss().buttonNext, value: question.panelNextText" />\n    <input type="button" style="float:left;margin:5px" data-bind="visible:question.koCanAddPanel, click:question.koAddPanelClick, css: question.koCss().button + \' \' + question.koCss().buttonAdd, value: question.panelAddText" />\n<\/script>\n';},function(e,t){e.exports='<script type="text/html" id="survey-question-paneldynamic">\n    <div data-bind="css: question.koCss().root">\n        \x3c!-- ko if: question.koIsList() --\x3e\n        \x3c!-- ko foreach: { data: question.koPanels } --\x3e\n        \x3c!-- ko template: { name: \'survey-panel\', data: $data, as: \'question\', afterRender: question.koPanelAfterRender } --\x3e\n        \x3c!-- /ko --\x3e\n        <input type="button" style="margin-top:5px" data-bind="visible: question.koCanRemovePanel, click:question.koRemovePanelClick, css: question.koCss().button + \' \' + question.koCss().buttonRemove, value: question.panelRemoveText"\n        />\n        <hr/>\n        \x3c!-- /ko --\x3e\n        <input type="button" data-bind="visible:question.koCanAddPanel, click:question.koAddPanelClick, css: question.koCss().button + \' \' + question.koCss().buttonAdd, value: question.panelAddText"\n        />\n        \x3c!-- /ko --\x3e\n        \x3c!-- ko ifnot: question.koIsList()  --\x3e\n        <div data-bind="visible:question.koIsProgressTop">\n            \x3c!-- ko template: { name: \'survey-question-paneldynamic-navigator\', data: question, as: \'question\'} --\x3e\n            \x3c!-- /ko --\x3e\n        </div>\n        \x3c!-- ko template: { name: \'survey-panel\', data: question.koPanel(), as: \'question\', afterRender: question.koPanelAfterRender } --\x3e\n        \x3c!-- /ko --\x3e\n        <input type="button" style="margin-top:5px" data-bind="visible: question.koCanRemovePanel, click:question.koRemovePanelClick, css: question.koCss().button + \' \' + question.koCss().buttonRemove, value: question.panelRemoveText"\n        />\n        <div data-bind="visible:question.koIsProgressBottom">\n            \x3c!-- ko template: { name: \'survey-question-paneldynamic-navigator\', data: question, as: \'question\'} --\x3e\n            \x3c!-- /ko --\x3e\n        </div>\n        \x3c!-- /ko --\x3e\n    </div>\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-question-radiogroup">\n    <fieldset data-bind="css: question.koCss().root">\n        \x3c!-- ko foreach: { data: question.koVisibleChoices, as: \'item\', afterRender: question.koAfterRender}  --\x3e\n        <div data-bind="css: question.getItemClass(item)">\n            <label data-bind="css: question.koCss().label">\n                <input type="radio" data-bind="attr: {name: question.name + \'_\' + question.id, value: item.value, id: ($index() == 0) ? question.inputId : \'\', \'aria-label\': question.locTitle.renderedHtml}, checked: question.koValue, enable: !question.koIsReadOnly(), css: question.koCss().itemControl"\n                />\n                <span data-bind="css: question.koCss().materialDecorator"></span>\n                <span class="check"></span>\n                <span data-bind="css: question.koCss().controlLabel">\n                    \x3c!-- ko template: { name: \'survey-string\', data: item.locText } --\x3e\n                    \x3c!-- /ko --\x3e\n                </span>\n            </label>\n            \x3c!-- ko if: question.hasOther && ($index() == question.koVisibleChoices().length-1) --\x3e\n            <div class="form-group" data-bind="template: { name: \'survey-comment\', data: {\'question\': question, \'visible\': question.koOtherVisible}}"></div>\n            \x3c!-- /ko --\x3e\n        </div>\n        \x3c!-- /ko --\x3e\n        \x3c!-- ko if: question.showClearButton --\x3e\n        <div>\n            <input type="button" data-bind="click:question.clearValue, css: question.koCss().clearButton, value: question.clearButtonCaption"/>\n        </div>\n        \x3c!-- /ko --\x3e\n        <legend style="display: none;" data-bind="text: question.locTitle.renderedHtml"></legend>\n    </fieldset>\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-question-rating">\n    <div data-bind="css: question.koCss().root">\n        \x3c!-- ko foreach: question.koVisibleRateValues --\x3e\n        <label data-bind="css: question.koGetCss($data)">\n            <input type="radio" style="display: none;" data-bind="attr: {name: question.name, id: question.name + $index(), value: $data.value, \'aria-label\': $data.locText.text}, event: { change: question.koChange}, enable: !question.koIsReadOnly()"\n            />\n            \x3c!-- ko if: $index() == 0 --\x3e\n            <span data-bind="css: question.koCss().minText">\n                \x3c!-- ko template: { name: \'survey-string\', data: question.locMinRateDescription } --\x3e\n                \x3c!-- /ko --\x3e\n            </span>\n            \x3c!-- /ko --\x3e\n\n            <span data-bind="css: question.koCss().itemText">\n                \x3c!-- ko template: { name: \'survey-string\', data: $data.locText } --\x3e\n                \x3c!-- /ko --\x3e\n            </span>\n\n            \x3c!-- ko if: $index() == (question.koVisibleRateValues().length-1) --\x3e\n            <span data-bind="css: question.koCss().maxText">\n                \x3c!-- ko template: { name: \'survey-string\', data: question.locMaxRateDescription } --\x3e\n                \x3c!-- /ko --\x3e\n            </span>\n            \x3c!-- /ko --\x3e\n        </label>\n        \x3c!-- /ko --\x3e\n    </div>\n    <div data-bind="visible: question.hasOther">\n        <div data-bind="template: { name: \'survey-comment\', data: {\'question\': question } }"></div>\n    </div>\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-question-text">\n    \x3c!-- ko ifnot: question.koIsReadOnly --\x3e\n    <input data-bind="attr: {type: question.inputType, size: question.size, id: question.inputId, placeholder: question.inputType === \'range\' ? undefined : question.placeHolder, maxLength: question.getMaxLength(), \'aria-label\': question.locTitle.renderedHtml}, value:question.koValue, css: question.koCss().root"/>\n    \x3c!-- /ko --\x3e\n    \x3c!-- ko if: question.koIsReadOnly --\x3e\n    <div data-bind="text:question.koValue, css: question.koCss().root"></div>\n    \x3c!-- /ko --\x3e\n<\/script>';},function(e,t){e.exports="<script type=\"text/html\" id=\"survey-question\">\n    <div data-bind=\"css: question.koRootClass, style: { paddingLeft: question.koPaddingLeft, paddingRight: question.koPaddingRight, width: question.koRenderWidth }, attr: {id: question.id}\">\n        <div data-bind=\"css: {'title-left': question.hasTitleOnLeft}\">\n            \x3c!-- ko if: question.hasTitleOnLeftTop --\x3e\n            \x3c!--ko template: { name: 'survey-question-title', data: question  } --\x3e\n            \x3c!-- /ko --\x3e\n            \x3c!-- /ko --\x3e\n        </div>\n\n        <div data-bind=\"css: {'content-left': question.hasTitleOnLeft}\">\n            \x3c!-- ko if: question.errorLocation == 'top' --\x3e\n            \x3c!-- ko template: { name: 'survey-question-errors', data: question } --\x3e\n            \x3c!-- /ko --\x3e\n            \x3c!-- /ko --\x3e\n            \x3c!-- ko template: { name: question.koTemplateName(), data: question, afterRender: question.koQuestionAfterRender } --\x3e\n            \x3c!-- /ko --\x3e\n            <div class=\"form-group\" data-bind=\"visible: question.hasComment\">\n                <div data-bind=\"text:question.commentText\"></div>\n                <div data-bind=\"template: { name: 'survey-comment', data: {'question': question, 'visible': true } }\"></div>\n            </div>\n            \x3c!-- ko if: question.errorLocation == 'bottom' --\x3e\n            \x3c!-- ko template: { name: 'survey-question-errors', data: question } --\x3e\n            \x3c!-- /ko --\x3e\n            \x3c!-- /ko --\x3e\n            \x3c!-- ko if: question.hasTitleOnBottom --\x3e\n            \x3c!--ko template: { name: 'survey-question-title', data: question  } --\x3e\n            \x3c!-- /ko --\x3e\n            \x3c!-- /ko --\x3e\n        </div>\n    </div>\n<\/script>";},function(e,t){e.exports='<script type="text/html" id="survey-question-title">\n    <h5 data-bind="css: koCss().title">\n        \x3c!-- ko template: { name: \'survey-string\', data: locTitle } --\x3e\x3c!-- /ko --\x3e\n    </h5>\n    <div data-bind="visible: hasDescription, css: koCss().description">\n        \x3c!-- ko template: { name: \'survey-string\', data: locDescription } --\x3e\x3c!-- /ko --\x3e\n    </div>\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-rows">\n    \x3c!-- ko foreach: { data: koRows, as: \'row\'} --\x3e\n    \x3c!-- ko if: row.koVisible --\x3e\n    <div data-bind="css: panel.cssClasses.row">\n        \x3c!-- ko foreach: { data: row.koElements, as: \'question\' , afterRender: row.koAfterRender } --\x3e\n        \x3c!-- ko if: question.koVisible --\x3e\n        \x3c!-- ko template: { name: question.koElementType, data: question, afterRender: $parent.koElementAfterRender } --\x3e\n        \x3c!-- /ko --\x3e\n        \x3c!-- /ko --\x3e\n        \x3c!-- /ko --\x3e\n    </div>\n    \x3c!-- /ko --\x3e\n    \x3c!-- /ko --\x3e\n<\/script>';},function(e,t){e.exports='<script type="text/html" id="survey-string">\n    \x3c!-- ko ifnot: hasHtml --\x3e\n    <span style="position: static;" data-bind="text: koRenderedHtml"></span>\n    \x3c!-- /ko --\x3e\n    \x3c!-- ko if: hasHtml --\x3e\n    <span style="position: static;" data-bind="html: koRenderedHtml"></span>\n    \x3c!-- /ko --\x3e\n<\/script>\n';},function(e,t){e.exports='<script type="text/html" id="survey-timerpanel">\n    <div data-bind="text:koTimerInfoText"></div>\n<\/script>\n';},function(e,t,n){e.exports=n(62)+" "+n(61)+" "+n(64)+" "+n(65)+" "+n(66)+"\n"+n(87)+" "+n(88)+" "+n(89)+" "+n(63)+" "+n(85)+"\n"+n(86)+" "+n(68)+" "+n(69)+" "+n(70)+"\n"+n(72)+" "+n(74)+" "+n(75)+" "+n(77)+"\n"+n(78)+" "+n(81)+" "+n(80)+"\n"+n(79)+" "+n(82)+" "+n(83)+"\n"+n(84)+" "+n(67)+" "+n(71)+" "+n(73)+"\n"+n(76);},function(e,t){e.exports='<div style="position: fixed; bottom: 3px; right: 10px;" data-bind="css: css.window.root">\n    <div data-bind="css: css.window.header.root">\n        <span data-bind="click:doExpand" style="width: 100%; cursor: pointer;">\n            <span style="padding-right:10px" data-bind="css: css.window.header.title, text: locTitle.koRenderedHtml"></span>\n            <span aria-hidden="true" data-bind="css: koExpandedCss"></span>\n        </span>\n    </div>\n    <div data-bind="visible:koExpanded, css: css.window.body">\n        <div id="windowSurveyJS"></div>\n    </div>\n</div>';},function(e,t,n){"use strict";var r=n(12);n.d(t,"a",function(){return i;});var i={root:"sv_main sv_bootstrap_css",header:"panel-heading card-header",body:"panel-body card-block mt-4",footer:"panel-footer card-footer",navigationButton:"",completedPage:"",navigation:{complete:"btn btn--cta fas",prev:"btn fas",next:"btn fas",start:"btn btn--cta fas"},progress:"progress center-block mx-auto mb-4",progressBar:"progress-bar",page:{root:"",title:"",description:""},pageTitle:"",pageDescription:"small",row:"sv_row",question:{mainRoot:"sv_qstn",title:"",description:"small",comment:"form-control",required:"",titleRequired:"",hasError:"has-error",indent:20},panel:{title:"sv_p_title",description:"small",container:"sv_p_container"},error:{root:"alert alert-danger",icon:"glyphicon glyphicon-exclamation-sign",item:""},boolean:{root:"sv_qbln form-inline checkbox",item:"",label:"",materialDecorator:"checkbox-material"},checkbox:{root:"sv_qcbc sv_qcbx form-inline",item:"checkbox",itemControl:"",controlLabel:"",materialDecorator:"checkbox-material",other:"sv_q_checkbox_other form-control"},comment:"form-control",dropdown:{root:"",control:"form-control",other:"sv_q_dd_other form-control"},matrix:{root:"table",label:"sv_q_m_label",cellText:"sv_q_m_cell_text",cellTextSelected:"sv_q_m_cell_selected bg-primary"},matrixdropdown:{root:"table"},matrixdynamic:{root:"table",button:"button",buttonAdd:"",buttonRemove:""},paneldynamic:{root:"",button:"button",buttonPrev:"",buttonNext:"",buttonAdd:"",buttonRemove:""},multipletext:{root:"table",itemTitle:"",itemValue:"sv_q_mt_item_value form-control"},radiogroup:{root:"sv_qcbc form-inline",item:"radio",label:"",itemControl:"",controlLabel:"",materialDecorator:"circle",other:"sv_q_radiogroup_other form-control",clearButton:"sv_q_radiogroup_clear button"},imagepicker:{root:"sv_imgsel",item:"sv_q_imgsel",label:"sv_q_imgsel_label",itemControl:"sv_q_imgsel_control_item",image:"sv_q_imgsel_image",itemText:"sv_q_imgsel_text",clearButton:"sv_q_radiogroup_clear"},rating:{root:"btn-group",item:"btn btn-default btn-secondary",selected:"active",minText:"sv_q_rating_min_text",itemText:"sv_q_rating_item_text",maxText:"sv_q_rating_max_text"},text:"form-control",expression:"form-control",file:{root:"sv_q_file",placeholderInput:"sv_q_file_placeholder",preview:"sv_q_file_preview",removeButton:"sv_q_file_remove_button",fileInput:"sv_q_file_input"},saveData:{root:"",saving:"alert alert-info",error:"alert alert-danger",success:"alert alert-success",saveAgainButton:""},window:{root:"modal-content",body:"modal-body",header:{root:"modal-header panel-title",title:"pull-left",button:"glyphicon pull-right",buttonExpanded:"glyphicon pull-right glyphicon-chevron-up",buttonCollapsed:"glyphicon pull-right glyphicon-chevron-down"}}};r.b.bootstrap=i;},function(e,t,n){"use strict";var r=n(12);n.d(t,"a",function(){return i;});var i={root:"sv_main sv_bootstrapmaterial_css",header:"panel-heading",body:"panel-body",footer:"panel-footer",navigationButton:"",completedPage:"",navigation:{complete:"btn btn--cta fas",prev:"btn fas",next:"btn fas",start:"btn btn--cta fas"},progress:"progress center-block mx-auto mb-4",progressBar:"progress-bar",page:{root:"",title:"",description:""},pageTitle:"",pageDescription:"small",row:"sv_row",question:{mainRoot:"sv_qstn form-group",title:"",description:"small",comment:"form-control",required:"",titleRequired:"",hasError:"has-error",indent:20},panel:{title:"sv_p_title",description:"small",container:"sv_p_container"},error:{root:"alert alert-danger",icon:"glyphicon glyphicon-exclamation-sign",item:""},boolean:{root:"sv_qbln form-inline checkbox",item:"",label:"",materialDecorator:"checkbox-material"},checkbox:{root:"sv_qcbx form-inline",item:"checkbox",itemControl:"",controlLabel:"",materialDecorator:"checkbox-material",other:"sv_q_checkbox_other form-control"},comment:"form-control",dropdown:{root:"",control:"form-control",other:"sv_q_dd_other form-control"},matrix:{root:"table",row:"form-group",label:"sv_q_m_label radio-inline",cellText:"sv_q_m_cell_text",cellTextSelected:"sv_q_m_cell_selected bg-primary",itemValue:"form-control"},matrixdropdown:{root:"table",itemValue:"form-group"},matrixdynamic:{root:"table",button:"btn btn-primary",itemValue:"form-group",buttonAdd:"",buttonRemove:""},paneldynamic:{root:"",button:"btn btn-primary",buttonPrev:"",buttonNext:"",buttonAdd:"",buttonRemove:""},multipletext:{root:"table",itemTitle:"",row:"form-group",itemValue:"sv_q_mt_item_value form-control"},radiogroup:{root:"",item:"radio",label:"",itemControl:"",controlLabel:"sv_q_radiogroup_control_label",materialDecorator:"circle",other:"sv_q_radiogroup_other form-control",clearButton:"sv_q_radiogroup_clear button btn btn-primary"},imagepicker:{root:"sv_imgsel",item:"sv_q_imgsel",label:"sv_q_imgsel_label",itemControl:"sv_q_imgsel_control_item",image:"sv_q_imgsel_image",itemText:"sv_q_imgsel_text",clearButton:"sv_q_radiogroup_clear"},rating:{root:"btn-group",item:"btn btn-default btn-secondary",selected:"active",minText:"sv_q_rating_min_text",itemText:"sv_q_rating_item_text",maxText:"sv_q_rating_max_text"},text:"form-control",expression:"form-control",file:{root:"form-group is-fileinput sv_q_file",placeholderInput:"",preview:"sv_q_file_preview",removeButton:"sv_q_file_remove_button",fileInput:"sv_q_file_input"},saveData:{root:"",saving:"alert alert-info",error:"alert alert-danger",success:"alert alert-success",saveAgainButton:""},window:{root:"modal-content",body:"modal-body",header:{root:"modal-header panel-title",title:"pull-left",button:"glyphicon pull-right",buttonExpanded:"glyphicon pull-right glyphicon-chevron-up",buttonCollapsed:"glyphicon pull-right glyphicon-chevron-down"}}};r.b.bootstrapmaterial=i;},function(e,t,n){"use strict";n(111),n(112),n(113),n(114),n(115),n(116),n(117),n(118),n(119),n(120),n(121),n(122),n(123),n(124),n(125),n(126),n(127),n(128),n(129),n(130),n(131),n(132),n(133),n(134),n(135),n(136);},function(e,t,n){"use strict";var r=n(31),i=(n.n(r),n(5));n.d(t,"b",function(){return i.a;});var o=n(29);n.d(t,"c",function(){return o.b;}),n.d(t,"d",function(){return o.c;}),n.d(t,"e",function(){return o.d;}),n.d(t,"f",function(){return o.e;}),n.d(t,"g",function(){return o.f;}),n.d(t,"h",function(){return o.g;}),n.d(t,"i",function(){return o.h;}),n.d(t,"j",function(){return o.a;});var a=n(11);n.d(t,"k",function(){return a.a;});var s=n(4);n.d(t,"l",function(){return s.c;}),n.d(t,"m",function(){return s.b;}),n.d(t,"n",function(){return s.d;}),n.d(t,"o",function(){return s.a;});var u=n(10);n.d(t,"p",function(){return u.a;}),n.d(t,"q",function(){return u.b;}),n.d(t,"r",function(){return u.d;}),n.d(t,"s",function(){return u.c;}),n.d(t,"t",function(){return u.e;});var l=n(15);n.d(t,"u",function(){return l.a;});var c=n(32);n.d(t,"v",function(){return c.a;});var p=n(35);n.d(t,"w",function(){return p.a;});var d=n(9);n.d(t,"x",function(){return d.c;}),n.d(t,"y",function(){return d.b;}),n.d(t,"z",function(){return d.a;}),n.d(t,"A",function(){return d.h;});var h=n(33);n.d(t,"B",function(){return h.a;});var f=n(13);n.d(t,"C",function(){return f.a;});var m=n(1);n.d(t,"D",function(){return m.c;}),n.d(t,"E",function(){return m.d;}),n.d(t,"F",function(){return m.e;}),n.d(t,"G",function(){return m.f;}),n.d(t,"H",function(){return m.g;}),n.d(t,"I",function(){return m.h;}),n.d(t,"J",function(){return m.a;}),n.d(t,"K",function(){return m.i;}),n.d(t,"L",function(){return m.j;}),n.d(t,"M",function(){return m.k;});var g=n(17);n.d(t,"N",function(){return g.c;}),n.d(t,"O",function(){return g.d;}),n.d(t,"P",function(){return g.e;}),n.d(t,"Q",function(){return g.b;}),n.d(t,"R",function(){return g.a;});var y=n(49);n.d(t,"S",function(){return y.b;}),n.d(t,"T",function(){return y.a;});var v=n(50);n.d(t,"U",function(){return v.b;}),n.d(t,"V",function(){return v.a;});var b=n(48);n.d(t,"W",function(){return b.a;}),n.d(t,"X",function(){return b.c;}),n.d(t,"Y",function(){return b.b;});var x=n(51);n.d(t,"Z",function(){return x.a;}),n.d(t,"_0",function(){return x.b;});var C=n(20);n.d(t,"_1",function(){return C.a;}),n.d(t,"_2",function(){return C.c;}),n.d(t,"_3",function(){return C.b;});var w=n(24);n.d(t,"_4",function(){return w.a;});var P=n(8);n.d(t,"_5",function(){return P.a;});var V=n(28);n.d(t,"_6",function(){return V.a;});var k=n(43);n.d(t,"_7",function(){return k.a;});var T=n(16);n.d(t,"_8",function(){return T.a;}),n.d(t,"_9",function(){return T.b;});var S=n(41);n.d(t,"_10",function(){return S.a;});var O=n(42);n.d(t,"_11",function(){return O.a;});var R=n(26);n.d(t,"_12",function(){return R.a;});var E=n(3);n.d(t,"_13",function(){return E.a;}),n.d(t,"_14",function(){return E.b;});var q=n(45);n.d(t,"_15",function(){return q.a;});var _=n(46);n.d(t,"_16",function(){return _.a;});var I=n(53);n.d(t,"_17",function(){return I.a;});var N=n(54);n.d(t,"_18",function(){return N.a;});var D=n(44);n.d(t,"_19",function(){return D.a;});var L=n(27);n.d(t,"_20",function(){return L.a;});var j=n(40);n.d(t,"_21",function(){return j.a;});var A=n(47);n.d(t,"_22",function(){return A.a;});var M=n(52);n.d(t,"_23",function(){return M.a;}),n.d(t,"_24",function(){return M.b;});var z=n(57);n.d(t,"_25",function(){return z.a;});var F=n(19);n.d(t,"_26",function(){return F.a;});var B=n(137);n.d(t,"_27",function(){return B.a;}),n.d(t,"_28",function(){return B.b;}),n.d(t,"_29",function(){return B.c;}),n.d(t,"_30",function(){return B.d;}),n.d(t,"_31",function(){return B.e;});var H=n(56);n.d(t,"_32",function(){return H.a;});var Q=n(18);n.d(t,"_33",function(){return Q.a;});var W=n(34);n.d(t,"_34",function(){return W.a;});var $=n(39);n.d(t,"_35",function(){return $.a;});var U=n(2);n.d(t,"_36",function(){return U.a;}),n.d(t,"_37",function(){return U.b;});var J=n(25);n.d(t,"_38",function(){return J.b;}),n.d(t,"_39",function(){return J.a;});var G=n(55);n.d(t,"_40",function(){return G.a;}),n.d(t,"a",function(){return K;});var K;K="1.0.35";},function(e,t,n){"use strict";var r=n(0),i=n(6),o=(n.n(i),n(40)),a=n(1),s=n(3),u=n(7);n.d(t,"a",function(){return c;});var l=function(e){function t(t){var n=e.call(this,t)||this;n.question=t,n.koIndeterminate=i.observable(n.question.isIndeterminate),n.koCheckedValue=i.observable(n.question.checkedValue);var r=n;return n.koCheckedValue.subscribe(function(e){r.updateCheckedValue(e);}),n.question.koIndeterminate=n.koIndeterminate,n.question.koCheckedValue=n.koCheckedValue,n;}return r.b(t,e),t.prototype.setkoValue=function(t){e.prototype.setkoValue.call(this,t),this.koIndeterminate(this.question.isIndeterminate),this.koCheckedValue()!=this.question.checkedValue&&this.koCheckedValue(this.question.checkedValue);},t.prototype.updateCheckedValue=function(e){this.question.checkedValue=e;},t.prototype.isIndeterminate=function(){return!this.question.value&&!1!==this.question.value;},t;}(u.a),c=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,new l(n),n;}return r.b(t,e),t.prototype.getItemCss=function(e,t){var n=this.koCheckedValue();return this.koCss().item+(n?" checked":"");},t;}(o.a);a.a.metaData.overrideClassCreatore("boolean",function(){return new c("");}),s.a.Instance.registerQuestion("boolean",function(e){return new c(e);});},function(e,t,n){"use strict";var r=n(0),i=n(6),o=(n.n(i),n(14)),a=n(1),s=n(3),u=n(41);n.d(t,"a",function(){return c;});var l=function(e){function t(t){return e.call(this,t)||this;}return r.b(t,e),t.prototype.createkoValue=function(){return this.question.value?i.observableArray(this.question.value):i.observableArray();},t.prototype.setkoValue=function(e){e?this.koValue([].concat(e)):this.koValue([]);},t;}(o.b),c=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,new l(n),n;}return r.b(t,e),t.prototype.getItemClass=function(e){var t=this.koValue()&&-1!==this.koValue().indexOf(e.value),n=this.cssClasses.item+(0===this.colCount?" sv_q_checkbox_inline":" sv-q-col-"+this.colCount);return t&&(n+=" checked"),n;},t;}(u.a);a.a.metaData.overrideClassCreatore("checkbox",function(){return new c("");}),s.a.Instance.registerQuestion("checkbox",function(e){var t=new c(e);return t.choices=s.a.DefaultChoices,t;});},function(e,t,n){"use strict";var r=n(0),i=n(1),o=n(3),a=n(42),s=n(7);n.d(t,"a",function(){return u;});var u=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,new s.a(n),n;}return r.b(t,e),t;}(a.a);i.a.metaData.overrideClassCreatore("comment",function(){return new u("");}),o.a.Instance.registerQuestion("comment",function(e){return new u(e);});},function(e,t,n){"use strict";var r=n(0),i=n(26),o=n(1),a=n(3),s=n(14);n.d(t,"a",function(){return u;});var u=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,new s.a(n),n;}return r.b(t,e),t;}(i.a);o.a.metaData.overrideClassCreatore("dropdown",function(){return new u("");}),a.a.Instance.registerQuestion("dropdown",function(e){var t=new u(e);return t.choices=a.a.DefaultChoices,t;});},function(e,t,n){"use strict";var r=n(0),i=n(43),o=n(1),a=n(7);n.d(t,"a",function(){return s;});var s=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,new a.a(n),n;}return r.b(t,e),t;}(i.a);o.a.metaData.overrideClassCreatore("empty",function(){return new s("");});},function(e,t,n){"use strict";var r=n(0),i=n(6),o=(n.n(i),n(44)),a=n(1),s=n(3),u=n(7);n.d(t,"a",function(){return c;});var l=function(e){function t(t){var n=e.call(this,t)||this;return n.question=t,n.koDisplayValue=i.observable(n.question.displayValue),n.question.koDisplayValue=n.koDisplayValue,n;}return r.b(t,e),t.prototype.onValueChanged=function(){e.prototype.onValueChanged.call(this),this.koDisplayValue(this.question.displayValue);},t;}(u.a),c=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,new l(n),n;}return r.b(t,e),t;}(o.a);a.a.metaData.overrideClassCreatore("expression",function(){return new c("");}),s.a.Instance.registerQuestion("expression",function(e){return new c(e);});},function(e,t,n){"use strict";var r=n(0),i=n(6),o=(n.n(i),n(1)),a=n(3),s=n(45),u=n(7);n.d(t,"a",function(){return c;});var l=function(e){function t(t){var n=e.call(this,t)||this;n.koState=i.observable("empty"),n.koHasValue=i.computed(function(){return"loaded"===n.koState();}),n.koData=i.computed(function(){return n.koHasValue()?n.question.previewValue:[];}),n.koInputTitle=i.observable();var r=n;n.question.koData=n.koData,n.question.koHasValue=n.koHasValue,n.question.koInputTitle=n.koInputTitle;var o=function o(e){n.koState(e),n.koInputTitle(n.question.inputTitle);};return n.question.onStateChanged.add(function(e,t){o(t.state);}),n.question.dochange=function(e,t){var n=t.target||t.srcElement;r.onChange(n);},n.question.doclean=function(e,t){var r=t.target||t.srcElement,i=r.parentElement.querySelectorAll("input")[0];n.question.clear(),i.value="";},n;}return r.b(t,e),t.prototype.updateValue=function(t){e.prototype.updateValue.call(this,t);},t.prototype.onChange=function(e){if(window.FileReader&&e&&e.files&&!(e.files.length<1)){for(var t=[],n=0;n<e.files.length;n++){t.push(e.files[n]);}this.question.loadFiles(t);}},t;}(u.a),c=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,new l(n),n;}return r.b(t,e),t;}(s.a);o.a.metaData.overrideClassCreatore("file",function(){return new c("");}),a.a.Instance.registerQuestion("file",function(e){return new c(e);});},function(e,t,n){"use strict";var r=n(0),i=n(1),o=n(3),a=n(22),s=n(46);n.d(t,"a",function(){return u;});var u=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,new a.a(n),n;}return r.b(t,e),t;}(s.a);i.a.metaData.overrideClassCreatore("html",function(){return new u("");}),o.a.Instance.registerQuestion("html",function(e){return new u(e);});},function(e,t,n){"use strict";var r=n(0),i=n(6),o=(n.n(i),n(47)),a=n(1),s=n(3),u=n(14);n.d(t,"a",function(){return c;});var l=function(e){function t(t){return e.call(this,t)||this;}return r.b(t,e),t.prototype.createkoValue=function(){return this.question.multiSelect?this.question.value?i.observableArray(this.question.value):i.observableArray():i.observable(this.question.value);},t.prototype.setkoValue=function(e){this.question.multiSelect?e?this.koValue([].concat(e)):this.koValue([]):this.koValue(e);},t;}(u.b),c=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,n;}return r.b(t,e),t.prototype.endLoadingFromJson=function(){e.prototype.endLoadingFromJson.call(this),new l(this);},t.prototype.getItemClass=function(e){var t=this.cssClasses.item+(0===this.colCount?" sv_q_imagepicker_inline":" sv-q-col-"+this.colCount);return this.multiSelect?this.koValue()&&-1!==this.koValue().indexOf(e.value)&&(t+=" checked"):e.value&&e.value===this.koValue()&&(t+=" checked"),t;},t;}(o.a);a.a.metaData.overrideClassCreatore("imagepicker",function(){return new c("");}),s.a.Instance.registerQuestion("imagepicker",function(e){return new c(e);});},function(e,t,n){"use strict";var r=n(0),i=n(6),o=(n.n(i),n(48)),a=n(7),s=n(1),u=n(3),l=n(5);n.d(t,"a",function(){return c;}),n.d(t,"b",function(){return p;});var c=function(e){function t(t,n,r,o){var a=e.call(this,t,n,r,o)||this;a.fullName=n,a.isValueUpdating=!1,a.koValue=i.observable(a.value);var s=a;return a.koValue.subscribe(function(e){s.isValueUpdating,s.value=e;}),a.koCellClick=function(e){s.koValue(e.value);},a;}return r.b(t,e),t.prototype.onValueChanged=function(){this.isValueUpdating=!0,l.a.isTwoValueEquals(this.koValue(),this.value)||this.koValue(this.value),this.isValueUpdating=!1;},t;}(o.a),p=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,new a.a(n),n.koVisibleRows=i.observable(n.visibleRows),n.koVisibleColumns=i.observable(n.visibleColumns),n;}return r.b(t,e),t.prototype.onRowsChanged=function(){e.prototype.onRowsChanged.call(this),this.koVisibleRows(this.visibleRows),this.koVisibleColumns(this.visibleColumns);},t.prototype.onSurveyLoad=function(){e.prototype.onSurveyLoad.call(this),this.onRowsChanged();},t.prototype.createMatrixRow=function(e,t,n){return new c(e,t,this,n);},t.prototype.getItemCss=function(e,t){var n=e.koValue()==t.value,r=this.hasCellText?this.cssClasses.cellTextSelected:"checked";return(this.hasCellText?this.koCss().cellText:this.koCss().label)+(n?" "+r:"");},t;}(o.b);s.a.metaData.overrideClassCreatore("matrix",function(){return new p("");}),u.a.Instance.registerQuestion("matrix",function(e){var t=new p(e);return t.rows=u.a.DefaultRows,t.columns=u.a.DefaultColums,t;});},function(e,t,n){"use strict";var r=n(0),i=n(1),o=n(3),a=n(36),s=n(50),u=n(17);n.d(t,"a",function(){return l;}),n.d(t,"b",function(){return c;});var l=function(e){function t(t){var n=e.call(this,t)||this;return n;}return r.b(t,e),t.prototype.hasRowText=function(){return!1;},t.prototype.isAddRowTop=function(){return this.question.isAddRowOnTop;},t.prototype.isAddRowBottom=function(){return this.question.isAddRowOnBottom;},t.prototype.canRemoveRow=function(){return!this.question.isReadOnly&&this.question.canRemoveRow;},t.prototype.onUpdateCells=function(){var e=this.question.generatedVisibleRows,t=this.question.columns;e&&e.length>0&&t&&t.length>0&&this.onColumnChanged();},t.prototype.addRow=function(){this.question.addRow();},t.prototype.removeRow=function(e){var t=this.question.visibleRows,n=t.indexOf(e);n>-1&&this.question.removeRowUI(n);},t;}(a.b),c=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,new l(n),n;}return r.b(t,e),t;}(s.a);i.a.metaData.overrideClassCreatore("matrixdynamic",function(){return new c("");}),o.a.Instance.registerQuestion("matrixdynamic",function(e){var t=new c(e);return t.choices=[1,2,3,4,5],t.rowCount=2,u.a.addDefaultColumns(t),t;});},function(e,t,n){"use strict";var r=n(0),i=n(6),o=(n.n(i),n(51)),a=n(7),s=n(37),u=n(1),l=n(3);n.d(t,"a",function(){return c;}),n.d(t,"b",function(){return p;}),n.d(t,"c",function(){return d;});var c=function(e){function t(t,n){void 0===t&&(t=null),void 0===n&&(n=null);var r=e.call(this,t,n)||this;r.name=t,r.isKOValueUpdating=!1,r.koValue=i.observable(r.value);var o=r;return r.koValue.subscribe(function(e){o.isKOValueUpdating||(o.value=e);}),r;}return r.b(t,e),t.prototype.createEditor=function(e){return new s.a(e);},t.prototype.onValueChanged=function(e){this.isKOValueUpdating=!0,this.koValue(e),this.isKOValueUpdating=!1;},t;}(o.a),p=function(e){function t(t){var n=e.call(this,t)||this;n.koRows=i.observableArray(n.question.getRows()),n.question.koRows=n.koRows,n.onColCountChanged();var r=n;return n.question.colCountChangedCallback=function(){r.onColCountChanged();},n;}return r.b(t,e),t.prototype.onColCountChanged=function(){this.koRows(this.question.getRows());},t;}(a.a),d=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,new p(n),n;}return r.b(t,e),t.prototype.createTextItem=function(e,t){return new c(e,t);},t;}(o.b);u.a.metaData.overrideClassCreatore("multipletextitem",function(){return new c("");}),u.a.metaData.overrideClassCreatore("multipletext",function(){return new d("");}),l.a.Instance.registerQuestion("multipletext",function(e){var t=new d(e);return t.addItem("text1"),t.addItem("text2"),t;});},function(e,t,n){"use strict";var r=n(0),i=n(6),o=(n.n(i),n(4)),a=n(1),s=n(3),u=n(7),l=n(52),c=n(21);n.d(t,"a",function(){return d;});var p=function(e){function t(t){var n=e.call(this,t)||this;n.koRecalc=i.observable(0),n.koPanels=i.pureComputed(function(){return this.koRecalc(),this.question.panels;},n),n.question.koPanels=n.koPanels;var r=n;return n.koAddPanelClick=function(){r.addPanel();},n.koRemovePanelClick=function(e){r.removePanel(e);},n.koPrevPanelClick=function(){r.question.currentIndex--;},n.koNextPanelClick=function(){r.question.currentIndex++;},n.koCanAddPanel=i.pureComputed(function(){return r.koRecalc(),r.question.canAddPanel;}),n.koCanRemovePanel=i.pureComputed(function(){return r.koRecalc(),r.question.canRemovePanel;}),n.koIsPrevButton=i.pureComputed(function(){return r.koRecalc(),r.question.isPrevButtonShowing;}),n.koIsNextButton=i.pureComputed(function(){return r.koRecalc(),r.question.isNextButtonShowing;}),n.koIsRange=i.pureComputed(function(){return r.koRecalc(),r.question.isRangeShowing;}),n.koPanel=i.pureComputed(function(){return r.koRecalc(),r.question.currentPanel;}),n.koIsList=i.pureComputed(function(){return r.koRecalc(),r.question.isRenderModeList;}),n.koIsProgressTop=i.pureComputed(function(){return r.koRecalc(),r.question.isProgressTopShowing;}),n.koIsProgressBottom=i.pureComputed(function(){return r.koRecalc(),r.question.isProgressBottomShowing;}),n.koRangeValue=i.observable(r.question.currentIndex),n.koRangeValue.subscribe(function(e){r.question.currentIndex=e;}),n.koRangeMax=i.pureComputed(function(){return r.koRecalc(),r.question.panelCount-1;}),n.question.koAddPanelClick=n.koAddPanelClick,n.question.koRemovePanelClick=n.koRemovePanelClick,n.question.koPrevPanelClick=n.koPrevPanelClick,n.question.koNextPanelClick=n.koNextPanelClick,n.question.koCanAddPanel=n.koCanAddPanel,n.question.koCanRemovePanel=n.koCanRemovePanel,n.question.koPanel=n.koPanel,n.question.koIsList=n.koIsList,n.question.koIsProgressTop=n.koIsProgressTop,n.question.koIsProgressBottom=n.koIsProgressBottom,n.question.koIsPrevButton=n.koIsPrevButton,n.question.koIsNextButton=n.koIsNextButton,n.question.koIsRange=n.koIsRange,n.question.koRangeValue=n.koRangeValue,n.question.koRangeMax=n.koRangeMax,n.question.koPanelAfterRender=function(e,t){r.panelAfterRender(e,t);},n.question.panelCountChangedCallback=function(){r.onPanelCountChanged();},n.question.renderModeChangedCallback=function(){r.onRenderModeChanged();},n.question.currentIndexChangedCallback=function(){r.onCurrentIndexChanged();},n;}return r.b(t,e),t.prototype.onPanelCountChanged=function(){this.onCurrentIndexChanged();},t.prototype.onRenderModeChanged=function(){this.onCurrentIndexChanged();},t.prototype.onCurrentIndexChanged=function(){this.koRecalc(this.koRecalc()+1),this.koRangeValue(this.question.currentIndex);},t.prototype.addPanel=function(){this.question.addPanelUI();},t.prototype.removePanel=function(e){var t=this.question;t.isRenderModeList||(e=t.currentPanel),t.removePanelUI(e);},t.prototype.panelAfterRender=function(e,t){if(this.question&&this.question.survey){var n=o.a.GetFirstNonTextElement(e);this.question.survey.afterRenderPanel(t,n);}},t;}(u.a),d=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,new p(n),n;}return r.b(t,e),t.prototype.createNewPanelObject=function(){return new c.c();},t;}(l.a);a.a.metaData.overrideClassCreatore("paneldynamic",function(){return new d("");}),s.a.Instance.registerQuestion("paneldynamic",function(e){return new d(e);});},function(e,t,n){"use strict";var r=n(0),i=n(53),o=n(1),a=n(3),s=n(14);n.d(t,"a",function(){return u;});var u=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,new s.b(n),n;}return r.b(t,e),t.prototype.getItemClass=function(e){var t=this.cssClasses.item+(0===this.colCount?" sv_q_radiogroup_inline":" sv-q-col-"+this.colCount);return e.value===this.koValue()&&(t+=" checked"),t;},t;}(i.a);o.a.metaData.overrideClassCreatore("radiogroup",function(){return new u("");}),a.a.Instance.registerQuestion("radiogroup",function(e){var t=new u(e);return t.choices=a.a.DefaultChoices,t;});},function(e,t,n){"use strict";var r=n(0),i=n(6),o=(n.n(i),n(7)),a=n(54),s=n(1),u=n(3);n.d(t,"a",function(){return c;});var l=function(e){function t(t){var n=e.call(this,t)||this;n.koVisibleRateValues=i.observableArray(n.getValues()),n.question.koVisibleRateValues=n.koVisibleRateValues;var r=n;return n.koChange=function(e){r.koValue(e.itemValue);},n.question.koChange=n.koChange,n.question.rateValuesChangedCallback=function(){r.onRateValuesChanged();},n.question.koGetCss=function(e){var t=r.question.cssClasses.item,n=r.question.cssClasses.selected;return r.question.koValue()==e.value?t+" "+n:t;},n;}return r.b(t,e),t.prototype.onRateValuesChanged=function(){this.koVisibleRateValues(this.getValues());},t.prototype.getValues=function(){return this.question.visibleRateValues;},t;}(o.a),c=function(e){function t(t){var n=e.call(this,t)||this;return n.name=t,new l(n),n;}return r.b(t,e),t;}(a.a);s.a.metaData.overrideClassCreatore("rating",function(){return new c("");}),u.a.Instance.registerQuestion("rating",function(e){return new c(e);});},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"السابق",pageNextText:"التالي",completeText:"انهاء- تم",progressText:"{1} صفحة {0} من",otherItemText:"نص آخر",emptySurvey:"لا توجد صفحة مرئية أو سؤال في المسح",completingSurvey:"شكرا لك لاستكمال الاستبيان!",loadingSurvey:"...يتم تحميل الاستبيان",optionsCaption:"...اختر",requiredError:".يرجى الإجابة على السؤال",requiredInAllRowsError:"يرجى الإجابة على الأسئلة في جميع الصفوف",numericError:"يجب أن تكون القيمة الرقمية.",textMinLength:"الرجاء إدخال ما لا يقل عن {0} حرف",textMaxLength:"الرجاء إدخال أقل من {0} حرف",textMinMaxLength:"يرجى إدخال أكثر من {0} وأقل من {1} حرف",minRowCountError:"يرجى ملء ما لا يقل عن {0} الصفوف",minSelectError:"يرجى تحديد ما لا يقل عن {0} المتغيرات",maxSelectError:"يرجى تحديد ما لا يزيد عن {0} المتغيرات",numericMinMax:"و'{0}' يجب أن تكون مساوية أو أكثر من {1} ويساوي أو أقل من {2}ا",numericMin:"و'{0}' يجب أن تكون مساوية أو أكثر من {1}ا",numericMax:"و'{0}' يجب أن تكون مساوية أو أقل من {1}ا",invalidEmail:"رجاء قم بإدخال بريد الكتروني صحيح",urlRequestError:"طلب إرجاع خطأ '{0}'. {1}ا",urlGetChoicesError:"عاد طلب بيانات فارغة أو 'المسار' ممتلكات غير صحيحة ",exceedMaxSize:"وينبغي ألا يتجاوز حجم الملف {0}ا",otherRequiredError:"الرجاء إدخال قيمة أخرى",uploadingFile:"الملف الخاص بك تحميل. يرجى الانتظار عدة ثوان وحاول مرة أخرى",addRow:"اضافة صف",removeRow:"إزالة صف"};r.a.locales.ar=i,r.a.localeNames.ar="العربية";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Anterior",pageNextText:"Següent",completeText:"Complet",otherItemText:"Un altre (descrigui)",progressText:"Pàgina {0} de {1}",emptySurvey:"No hi ha cap pàgina visible o pregunta a l'enquesta.",completingSurvey:"Gràcies per completar l'enquesta!",loadingSurvey:"L'enquesta s'està carregant ...",optionsCaption:"Selecciona ...",requiredError:"Si us plau contesti la pregunta.",requiredInAllRowsError:"Si us plau contesti les preguntes de cada filera.",numericError:"L'estimació ha de ser numèrica.",textMinLength:"Si us plau entre almenys {0} símbols.",textMaxLength:"Si us plau entre menys de {0} símbols.",textMinMaxLength:"Si us plau entre més de {0} i menys de {1} símbols.",minRowCountError:"Si us plau ompli almenys {0} fileres.",minSelectError:"Si us plau seleccioni almenys {0} variants.",maxSelectError:"Si us plau seleccioni no més de {0} variants.",numericMinMax:"El '{0}' deu ser igual o més de {1} i igual o menys de {2}",numericMin:"El '{0}' ha de ser igual o més de {1}",numericMax:"El '{0}' ha de ser igual o menys de {1}",invalidEmail:"Si us plau afegiu un correu electrònic vàlid.",urlRequestError:"La sol·licitud va tornar error '{0}'. {1}",urlGetChoicesError:"La sol·licitud va tornar buida de dates o la propietat 'trajectòria' no és correcta",exceedMaxSize:"La mida de l'arxiu no pot excedir {0}.",otherRequiredError:"Si us plau afegiu l'altra estimació.",uploadingFile:"El seu arxiu s'està pujant. Si us plau esperi uns segons i intenteu-ho de nou.",addRow:"Afegiu una filera",removeRow:"Eliminar una filera",choices_firstItem:"primer article",choices_secondItem:"segon article",choices_thirdItem:"tercer article",matrix_column:"Columna",matrix_row:"Filera"};r.a.locales.ca=i,r.a.localeNames.ca="català";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Předchozí",pageNextText:"Další",completeText:"Hotovo",otherItemText:"Jiná odpověď (napište)",progressText:"Strana {0} z {1}",emptySurvey:"Průzkumu neobsahuje žádné otázky.",completingSurvey:"Děkujeme za vyplnění průzkumu!",loadingSurvey:"Probíhá načítání průzkumu...",optionsCaption:"Vyber...",requiredError:"Odpovězte prosím na otázku.",requiredInAllRowsError:"Odpovězte prosím na všechny otázky.",numericError:"V tomto poli lze zadat pouze čísla.",textMinLength:"Zadejte prosím alespoň {0} znaků.",textMaxLength:"Zadejte prosím méně než {0} znaků.",textMinMaxLength:"Zadejte prosím více než {0} a méně než {1} znaků.",minRowCountError:"Vyplňte prosím alespoň {0} řádků.",minSelectError:"Vyberte prosím alespoň {0} varianty.",maxSelectError:"Nevybírejte prosím více než {0} variant.",numericMinMax:"Odpověď '{0}' by mělo být větší nebo rovno {1} a menší nebo rovno {2}",numericMin:"Odpověď '{0}' by mělo být větší nebo rovno {1}",numericMax:"Odpověď '{0}' by mělo být menší nebo rovno {1}",invalidEmail:"Zadejte prosím platnou e-mailovou adresu.",urlRequestError:"Požadavek vrátil chybu '{0}'. {1}",urlGetChoicesError:"Požadavek nevrátil data nebo cesta je neplatná",exceedMaxSize:"Velikost souboru by neměla být větší než {0}.",otherRequiredError:"Zadejte prosím jinou hodnotu.",uploadingFile:"Váš soubor se nahrává. Zkuste to prosím za několik sekund.",addRow:"Přidat řádek",removeRow:"Odstranit"};r.a.locales.cz=i,r.a.localeNames.cz="čeština";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Tilbage",pageNextText:"Videre",completeText:"Færdig",progressText:"Side {0} af {1}",emptySurvey:"Der er ingen synlige spørgsmål.",completingSurvey:"Mange tak for din besvarelse!",loadingSurvey:"Spørgeskemaet hentes fra serveren...",otherItemText:"Valgfrit svar...",optionsCaption:"Vælg...",requiredError:"Besvar venligst spørgsmålet.",numericError:"Angiv et tal.",textMinLength:"Angiv mindst {0} tegn.",minSelectError:"Vælg venligst mindst  {0} svarmulighed(er).",maxSelectError:"Vælg venligst færre {0} svarmuligheder(er).",numericMinMax:"'{0}' skal være lig med eller større end {1} og lig med eller mindre end {2}",numericMin:"'{0}' skal være lig med eller større end {1}",numericMax:"'{0}' skal være lig med eller mindre end {1}",invalidEmail:"Angiv venligst en gyldig e-mail adresse.",exceedMaxSize:"Filstørrelsen må ikke overstige {0}.",otherRequiredError:"Angiv en værdi for dit valgfrie svar."};r.a.locales.da=i,r.a.localeNames.da="dansk";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Vorige",pageNextText:"Volgende",completeText:"Verzenden",otherItemText:"Andere",progressText:"Pagina {0} van {1}",emptySurvey:"Er is geen zichtbare pagina of vraag in deze vragenlijst",completingSurvey:"Bedankt voor het invullen van de vragenlijst",loadingSurvey:"De vragenlijst is aan het laden...",optionsCaption:"Kies...",requiredError:"Gelieve een antwoord in te vullen",numericError:"Het antwoord moet een getal zijn",textMinLength:"Gelieve minsten {0} karakters in te vullen.",minSelectError:"Gelieve minimum {0} antwoorden te selecteren.",maxSelectError:"Gelieve niet meer dan {0} antwoorden te selecteren.",numericMinMax:"Uw antwoord '{0}' moet groter of gelijk zijn aan {1} en kleiner of gelijk aan {2}",numericMin:"Uw antwoord '{0}' moet groter of gelijk zijn aan {1}",numericMax:"Uw antwoord '{0}' moet groter of gelijk zijn aan {1}",invalidEmail:"Gelieve een geldig e-mailadres in te vullen.",exceedMaxSize:"De grootte van het bestand mag niet groter zijn dan {0}.",otherRequiredError:"Gelieve het veld 'Andere' in te vullen"};r.a.locales.nl=i,r.a.localeNames.nl="hollandsk";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Edellinen",pageNextText:"Seuraava",completeText:"Valmis",otherItemText:"Muu (kuvaile)",progressText:"Sivu {0}/{1}",emptySurvey:"Tässä kyselyssä ei ole yhtäkään näkyvillä olevaa sivua tai kysymystä.",completingSurvey:"Kiitos kyselyyn vastaamisesta!",loadingSurvey:"Kyselyä ladataan palvelimelta...",optionsCaption:"Valitse...",requiredError:"Vastaa kysymykseen, kiitos.",numericError:"Arvon tulee olla numeerinen.",textMinLength:"Ole hyvä ja syötä vähintään {0} merkkiä.",minSelectError:"Ole hyvä ja valitse vähintään {0} vaihtoehtoa.",maxSelectError:"Ole hyvä ja valitse enintään {0} vaihtoehtoa.",numericMinMax:"'{0}' täytyy olla enemmän tai yhtä suuri kuin {1} ja vähemmän tai yhtä suuri kuin {2}",numericMin:"'{0}' täytyy olla enemmän tai yhtä suuri kuin {1}",numericMax:"'{0}' täytyy olla vähemmän tai yhtä suuri kuin {1}",invalidEmail:"Syötä validi sähköpostiosoite.",otherRequiredError:'Ole hyvä ja syötä "Muu (kuvaile)"'};r.a.locales.fi=i,r.a.localeNames.fi="suomalainen";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Précédent",pageNextText:"Suivant",completeText:"Terminer",startSurveyText:"Commencer",otherItemText:"Autre (préciser)",progressText:"Page {0} sur {1}",emptySurvey:"Il n'y a ni page visible ni question visible dans ce questionnaire",completingSurvey:"Merci d'avoir répondu au questionnaire !",completingSurveyBefore:"Nos données indiquent que vous avez déjà rempli ce questionnaire.",loadingSurvey:"Le questionnaire est en cours de chargement...",optionsCaption:"Choisissez...",value:"valeur",requiredError:"La réponse à cette question est obligatoire.",requiredErrorInPanel:"Merci de répondre au moins à une question.",requiredInAllRowsError:"Toutes les lignes sont obligatoires",numericError:"La réponse doit être un nombre.",textMinLength:"Merci de saisir au moins {0} caractères.",textMaxLength:"Merci de saisir moins de {0} caractères.",textMinMaxLength:"Merci de saisir entre {0} et {1} caractères.",minRowCountError:"Merci de compléter au moins {0} lignes.",minSelectError:"Merci de sélectionner au minimum {0} réponses.",maxSelectError:"Merci de sélectionner au maximum {0} réponses.",numericMinMax:"Votre réponse '{0}' doit être supérieure ou égale à {1} et inférieure ou égale à {2}",numericMin:"Votre réponse '{0}' doit être supérieure ou égale à {1}",numericMax:"Votre réponse '{0}' doit être inférieure ou égale à {1}",invalidEmail:"Merci d'entrer une adresse mail valide.",urlRequestError:"La requête a renvoyé une erreur '{0}'. {1}",urlGetChoicesError:"La requête a renvoyé des données vides ou la propriété 'path' est incorrecte",exceedMaxSize:"La taille du fichier ne doit pas excéder {0}.",otherRequiredError:"Merci de préciser le champ 'Autre'.",uploadingFile:"Votre fichier est en cours de chargement. Merci d'attendre quelques secondes et de réessayer.",confirmDelete:"Voulez-vous supprimer cet enregistrement ?",keyDuplicationError:"Cette valeur doit être unique.",addRow:"Ajouter une ligne",removeRow:"Supprimer",addPanel:"Ajouter",removePanel:"Supprimer",choices_Item:"item",matrix_column:"Colonne",matrix_row:"Ligne",savingData:"Les résultats sont en cours de sauvegarde sur le serveur...",savingDataError:"Une erreur est survenue et a empêché la sauvegarde des résultats.",savingDataSuccess:"Les résultats ont bien été enregistrés !",saveAgainButton:"Réessayer",timerMin:"min",timerSec:"sec",timerSpentAll:"Vous avez passé {0} sur cette page et {1} au total.",timerSpentPage:"Vous avez passé {0} sur cette page.",timerSpentSurvey:"Vous avez passé {0} au total.",timerLimitAll:"Vous avez passé {0} sur {1} sur cette page et {2} sur {3} au total.",timerLimitPage:"Vous avez passé {0} sur {1} sur cette page.",timerLimitSurvey:"Vous avez passé {0} sur {1} au total.",cleanCaption:"Vider"};r.a.locales.fr=i,r.a.localeNames.fr="français";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"უკან",pageNextText:"შემდეგ",completeText:"დასრულება",progressText:"გვერდი {0} / {1}",emptySurvey:"არცერთი კითხვა არ არის.",completingSurvey:"გმადლობთ კითხვარის შევსებისთვის!",loadingSurvey:"ჩატვირთვა სერვერიდან...",otherItemText:"სხვა (გთხოვთ მიუთითეთ)",optionsCaption:"არჩევა...",requiredError:"გთხოვთ უპასუხეთ კითხვას.",numericError:"პასუხი უნდა იყოს რიცხვი.",textMinLength:"გთხოვთ შეიყვანეთ არანაკლებ {0} სიმბოლო.",minSelectError:"გთხოვთ აირჩიეთ არანაკლებ {0} ვარიანტი.",maxSelectError:"გთხოვთ აირჩიეთ არაუმეტეს {0} ვარიანტი.",numericMinMax:"'{0}' უნდა იყოს მეტი ან ტოლი, ვიდრე {1}, და ნაკლები ან ტოლი ვიდრე {2}",numericMin:"'{0}' უნდა იყოს მეტი ან ტოლი ვიდრე {1}",numericMax:"'{0}' უნდა იყოს ნაკლები ან ტოლი ვიდრე {1}",invalidEmail:"გთხოვთ შეიყვანოთ ელ. ფოსტის რეალური მისამართი.",otherRequiredEror:"გთხოვთ შეავსეთ ველი 'სხვა'"};r.a.locales.ka=i,r.a.localeNames.ka="ქართული";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Zurück",pageNextText:"Weiter",completeText:"Absenden",progressText:"Seite {0} von {1}",emptySurvey:"Es gibt keine sichtbare Frage.",completingSurvey:"Vielen Dank für die Beantwortung des Fragebogens!",loadingSurvey:"Der Fragebogen wird vom Server geladen...",otherItemText:"Benutzerdefinierte Antwort...",optionsCaption:"Wählen...",requiredError:"Bitte beantworten Sie diese Frage.",numericError:"Der Wert sollte eine Zahl sein.",textMinLength:"Bitte geben Sie mindestens {0} Zeichen ein.",minSelectError:"Bitte wählen Sie mindestens {0} Einträge.",maxSelectError:"Bitte wählen Sie nicht mehr als {0} Einträge.",numericMinMax:"'{0}' sollte gleich oder größer sein als {1} und gleich oder kleiner als {2}.",numericMin:"'{0}' sollte gleich oder größer sein als {1}.",numericMax:"'{0}' sollte gleich oder kleiner als {1} sein.",invalidEmail:"Bitte geben Sie eine gültige E-Mail Adresse ein.",exceedMaxSize:"Die Dateigröße darf {0} nicht überschreiten.",otherRequiredError:"Bitte geben Sie Ihre benutzerdefinierte Antwort ein.",addRow:"Reihe hinzufügen",removeRow:"Löschen"};r.a.locales.de=i,r.a.localeNames.de="deutsch";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Προηγούμενο",pageNextText:"Επόμενο",completeText:"Ολοκλήρωση",otherItemText:"Άλλο (παρακαλώ διευκρινίστε)",progressText:"Σελίδα {0} από {1}",emptySurvey:"Δεν υπάρχει καμία ορατή σελίδα ή ορατή ερώτηση σε αυτό το ερωτηματολόγιο.",completingSurvey:"Ευχαριστούμε για την συμπλήρωση αυτου του ερωτηματολογίου!",loadingSurvey:"Το ερωτηματολόγιο φορτώνεται απο το διακομιστή...",optionsCaption:"Επιλέξτε...",requiredError:"Παρακαλώ απαντήστε στην ερώτηση.",requiredInAllRowsError:"Παρακαλώ απαντήστε στις ερωτήσεις σε όλες τις γραμμές.",numericError:"Η τιμή πρέπει να είναι αριθμιτική.",textMinLength:"Παρακαλώ συμπληρώστε τουλάχιστον {0} σύμβολα.",minRowCountError:"Παρακαλώ συμπληρώστε τουλάχιστον {0} γραμμές.",minSelectError:"Παρακαλώ επιλέξτε τουλάχιστον {0} παραλλαγές.",maxSelectError:"Παρακαλώ επιλέξτε όχι παραπάνω απο {0} παραλλαγές.",numericMinMax:"Το '{0}' θα πρέπει να είναι ίσο ή μεγαλύτερο απο το {1} και ίσο ή μικρότερο απο το {2}",numericMin:"Το '{0}' πρέπει να είναι μεγαλύτερο ή ισο με το {1}",numericMax:"Το '{0}' πρέπει να είναι μικρότερο ή ίσο απο το {1}",invalidEmail:"Παρακαλώ δώστε μια αποδεκτή διεύθυνση e-mail.",urlRequestError:"Η αίτηση επέστρεψε σφάλμα '{0}'. {1}",urlGetChoicesError:"Η αίτηση επέστρεψε κενά δεδομένα ή η ιδότητα 'μονοπάτι/path' είναι εσφαλέμένη",exceedMaxSize:"Το μέγεθος δεν μπορεί να υπερβένει τα {0}.",otherRequiredError:"Παρακαλώ συμπληρώστε την τιμή για το πεδίο 'άλλο'.",uploadingFile:"Το αρχείο σας ανεβαίνει. Παρακαλώ περιμένετε καποια δευτερόλεπτα και δοκιμάστε ξανά.",addRow:"Προσθήκη γραμμής",removeRow:"Αφαίρεση"};r.a.locales.gr=i,r.a.localeNames.gr="ελληνικά";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"אחורה",pageNextText:"קדימה",completeText:"סיום",progressText:"דף {1} מתוך {0}",emptySurvey:"אין שאלות",completingSurvey:"תודה על מילוי השאלון!",loadingSurvey:"טעינה מהשרת...",otherItemText:"אחר (נא לתאר)",optionsCaption:"בחר...",requiredError:"אנא השב על השאלה",numericError:"התשובה צריכה להיות מספר.",textMinLength:"הזן לפחות {0} תווים.",minSelectError:"בחר לפחות {0} אפשרויות.",maxSelectError:"בחר עד {0} אפשרויות.",numericMinMax:"'{0}' חייב להיות שווה או גדול מ {1}, ושווה ל- {2} או פחות מ- {}}",numericMin:"'{0}' חייב להיות שווה או גדול מ {1}",numericMax:"'{0}' חייב להיות שווה או קטן מ {1}",invalidEmail:'הזן כתובת דוא"ל חוקית.',otherRequiredError:'נא להזין נתונים בשדה "אחר"'};r.a.locales.he=i,r.a.localeNames.he="עברית";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Vissza",pageNextText:"Tovább",completeText:"Kész",otherItemText:"Egyéb (adja meg)",progressText:"{0}./{1} oldal",emptySurvey:"There is no visible page or question in the survey.",completingSurvey:"Köszönjük, hogy kitöltötte felmérésünket!",completingSurveyBefore:"Már kitöltötte a felmérést.",loadingSurvey:"Felmérés betöltése...",optionsCaption:"Válasszon...",value:"érték",requiredError:"Kérjük, válaszolja meg ezt a kérdést!",requiredInAllRowsError:"Kérjük adjon választ minden sorban!",numericError:"Az érték szám kell, hogy legyen!",textMinLength:"Adjon meg legalább {0} karaktert!",textMaxLength:"Legfeljebb {0} karaktert adjon meg!",textMinMaxLength:"Adjon meg legalább {0}, de legfeljebb {1} karaktert!",minRowCountError:"Töltsön ki minimum {0} sort!",minSelectError:"Válasszon ki legalább {0} lehetőséget!",maxSelectError:"Ne válasszon többet, mint {0} lehetőség!",numericMinMax:"'{0}' legyen nagyobb, vagy egyenlő, mint {1} és kisebb, vagy egyenlő, mint {2}!",numericMin:"'{0}' legyen legalább {1}!",numericMax:"The '{0}' ne legyen nagyobb, mint {1}!",invalidEmail:"Adjon meg egy valós email címet!",urlRequestError:"A lekérdezés hibával tért vissza: '{0}'. {1}",urlGetChoicesError:"A lekérdezés üres adattal tért vissza, vagy a 'path' paraméter helytelen.",exceedMaxSize:"A méret nem lehet nagyobb, mint {0}.",otherRequiredError:"Adja meg az egyéb értéket!",uploadingFile:"Feltöltés folyamatban. Várjon pár másodpercet, majd próbálja újra.",confirmDelete:"Törli ezt a rekordot?",keyDuplicationError:"Az értéknek egyedinek kell lennie.",addRow:"Sor hozzáadása",removeRow:"Eltávolítás",addPanel:"Új hozzáadása",removePanel:"Eltávolítás",choices_Item:"elem",matrix_column:"Oszlop",matrix_row:"Sor",savingData:"Eredmény mentése a szerverre...",savingDataError:"Egy hiba folytán nem tudtuk elmenteni az eredményt.",savingDataSuccess:"Eredmény sikeresen mentve!",saveAgainButton:"Próbálja újra"};r.a.locales.hu=i,r.a.localeNames.hu="magyar";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Tilbaka",pageNextText:"Áfram",completeText:"Lokið",otherItemText:"Hinn (skýring)",progressText:"Síða {0} of {1}",emptySurvey:"Það er enginn síða eða spurningar í þessari könnun.",completingSurvey:"Takk fyrir að fyllja út þessa könnun!",loadingSurvey:"Könnunin er að hlaða...",optionsCaption:"Veldu...",requiredError:"Vinsamlegast svarið spurningunni.",requiredInAllRowsError:"Vinsamlegast svarið spurningum í öllum röðum.",numericError:"Þetta gildi verður að vera tala.",textMinLength:"Það ætti að vera minnst {0} tákn.",textMaxLength:"Það ætti að vera mest {0} tákn.",textMinMaxLength:"Það ætti að vera fleiri en {0} og færri en {1} tákn.",minRowCountError:"Vinsamlegast fyllið úr að minnsta kosti {0} raðir.",minSelectError:"Vinsamlegast veljið að minnsta kosti {0} möguleika.",maxSelectError:"Vinsamlegast veljið ekki fleiri en {0} möguleika.",numericMinMax:"'{0}' ætti að vera meira en eða jafnt og {1} minna en eða jafnt og {2}",numericMin:"{0}' ætti að vera meira en eða jafnt og {1}",numericMax:"'{0}' ætti að vera minna en eða jafnt og {1}",invalidEmail:"Vinsamlegast sláið inn gilt netfang.",urlRequestError:"Beiðninn skilaði eftirfaranadi villu '{0}'. {1}",urlGetChoicesError:"Beiðninng skilaði engum gögnum eða slóðinn var röng",exceedMaxSize:"Skráinn skal ekki vera stærri en {0}.",otherRequiredError:"Vinamlegast fyllið út hitt gildið.",uploadingFile:"Skráinn þín var send. Vinsamlegast bíðið í nokkrar sekúndur og reynið aftur.",addRow:"Bæta við röð",removeRow:"Fjarlægja",choices_firstItem:"fyrsti hlutur",choices_secondItem:"annar hlutur",choices_thirdItem:"þriðji hlutur",matrix_column:"Dálkur",matrix_row:"Röð"};r.a.locales.is=i,r.a.localeNames.is="íslenska";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Precedente",pageNextText:"Successivo",completeText:"Salva",startSurveyText:"Inizio",otherItemText:"Altro (descrivi)",progressText:"Pagina {0} di {1}",emptySurvey:"Non ci sono pagine o domande visibili nel questionario.",completingSurvey:"Grazie per aver completato il questionario!",completingSurveyBefore:"I nostri records mostrano che hai già completato questo questionario.",loadingSurvey:"Caricamento del questionario in corso...",optionsCaption:"Scegli...",value:"valore",requiredError:"Campo obbligatorio",requiredErrorInPanel:"Per Favore, rispondi ad almeno una domanda.",requiredInAllRowsError:"Completare tutte le righe",numericError:"Il valore deve essere numerico",textMinLength:"Inserire almeno {0} caratteri",textMaxLength:"Lunghezza massima consentita {0} caratteri",textMinMaxLength:"Inserire una stringa con minimo {0} e massimo {1} caratteri",minRowCountError:"Completare almeno {0} righe.",minSelectError:"Selezionare almeno {0} varianti.",maxSelectError:"Selezionare massimo {0} varianti.",numericMinMax:"'{0}' deve essere uguale o superiore a {1} e uguale o inferiore a {2}",numericMin:"'{0}' deve essere uguale o superiore a {1}",numericMax:"'{0}' deve essere uguale o inferiore a {1}",invalidEmail:"Inserire indirizzo mail valido",urlRequestError:"La richiesta ha risposto con un errore '{0}'. {1}",urlGetChoicesError:"La richiesta ha risposto null oppure il percorso non è corretto",exceedMaxSize:"Il file non può eccedere {0}",otherRequiredError:"Inserire il valore 'altro'",uploadingFile:"File in caricamento. Attendi alcuni secondi e riprova",confirmDelete:"Sei sicuro di voler elminare il record?",keyDuplicationError:"Questo valore deve essere univoco.",addRow:"Aggiungi riga",removeRow:"Rimuovi riga",addPanel:"Aggiungi riga",removePanel:"Elimina",choices_Item:"Elemento",matrix_column:"Colonna",matrix_row:"Riga",savingData:"Salvataggio dati sul server...",savingDataError:"Si è verificato un errore e non è stato possibile salvare i risultati.",savingDataSuccess:"I risultati sono stati salvati con successo!",saveAgainButton:"Riprova",timerMin:"min",timerSec:"sec",timerSpentAll:"Hai impiegato {0} su questa pagina e {1} in totale.",timerSpentPage:"Hai impiegato {0} su questa pagina.",timerSpentSurvey:"Hai impiegato {0} in totale.",timerLimitAll:"Hai impiegato {0} di {1} su questa pagina e {2} di {3} in totale.",timerLimitPage:"Hai impiegato {0} di {1} su questa pagina.",timerLimitSurvey:"Hai impiegato {0} di {1} in totale.",cleanCaption:"Pulisci"};r.a.locales.it=i,r.a.localeNames.it="italiano";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"이전",pageNextText:"다음",completeText:"완료",startSurveyText:"시작",otherItemText:"기타(설명)",progressText:"페이지 {1} 중 {0}",emptySurvey:"설문지에 보여지는 페이지나 질문이 없습니다",completingSurvey:"설문 조사를 완료해 주셔서 감사합니다!",completingSurveyBefore:"기록에 따르면 이미 설문 조사를 마치셨습니다.",loadingSurvey:"설문조사가 로드중입니다...",optionsCaption:"선택하십시오...",value:"값",requiredError:"질문에 답하시오.",requiredErrorInPanel:"하나 이상의 질문에 답하십시오.",requiredInAllRowsError:"모든 행에 있는 질문에 답하십시오.",numericError:"값은 숫자여야 합니다.",textMinLength:"답변의 길이는 최소 {0}자여야 입니다.",textMaxLength:"답변의 길이는 {0}자를 초과 할 수 없습니다.",textMinMaxLength:"답변의 길이는 {0} - {1}자 사이여야 합니다.",minRowCountError:"최소 {0}개의 행을 채우십시오",minSelectError:"최소 {0}개의 변수를 선택하십시오.",maxSelectError:"최대 {0}개의 변수를 선택하십시오.",numericMinMax:"'{0}'은 {1}보다 크거나 같고 {2}보다 작거나 같아야합니다.",numericMin:"'{0}'은 {1}보다 크거나 같아야합니다.",numericMax:"'{0}'은 {1}보다 작거나 같아야합니다.",invalidEmail:"올바른 이메일 주소를 입력하십시오.",invalidExpression:"표현식: {0}은 '참'이어야 합니다.",urlRequestError:"'{0}'으로 잘못된 요청입니다. {1}",urlGetChoicesError:"비어있는 데이터를 요청했거나 잘못된 속성의 경로입니다.",exceedMaxSize:"파일 크기가 {0}을 초과 할 수 없습니다.",otherRequiredError:"다른 질문을 작성하십시오.",uploadingFile:"파일 업로드 중입니다. 잠시 후 다시 시도하십시오.",loadingFile:"로드 중...",chooseFile:"파일 선택...",confirmDelete:"기록을 삭제하시겠습니까?",keyDuplicationError:" 이 값은 고유해야합니다.",addColumn:"열 추가",addRow:"행 추가",removeRow:"제거",addPanel:"새롭게 추가",removePanel:"제거",choices_Item:"항목",matrix_column:"열",matrix_row:"행",savingData:"결과가 서버에 저장 중입니다...",savingDataError:"오류가 발생하여 결과를 저장할 수 없습니다.",savingDataSuccess:"결과가 성공적으로 저장되었습니다!",saveAgainButton:"다시 시도하십시오",timerMin:"분",timerSec:"초",timerSpentAll:"현재 페이지에서 {0}을 소요해 총 {1}이 걸렸습니다.",timerSpentPage:"현재 페이지에서 {0]이 걸렸습니다",timerSpentSurvey:"총 {0}이 걸렸습니다.",timerLimitAll:"현재 페이지에서 {0}/{1}을 소요해 총 {2}/{3}이 걸렸습니다.",timerLimitPage:"현재 페이지에서 {0}/{1}이 걸렸습니다.",timerLimitSurvey:"총 {0}/{1}이 걸렸습니다.",cleanCaption:"닦기",clearCaption:"지우기"};r.a.locales.ko=i,r.a.localeNames.ko="한국어";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Atpakaļ",pageNextText:"Tālāk",completeText:"Pabeigt",progressText:"Lappuse {0} no {1}",emptySurvey:"Nav neviena jautājuma.",completingSurvey:"Pateicamies Jums par anketas aizpildīšanu!",loadingSurvey:"Ielāde no servera...",otherItemText:"Cits (lūdzu, aprakstiet!)",optionsCaption:"Izvēlēties...",requiredError:"Lūdzu, atbildiet uz jautājumu!",numericError:"Atbildei ir jābūt skaitlim.",textMinLength:"Lūdzu, ievadiet vismaz {0} simbolus.",minSelectError:"Lūdzu, izvēlieties vismaz {0} variantu.",maxSelectError:"Lūdzu, izvēlieties ne vairak par {0} variantiem.",numericMinMax:"'{0}' jābūt vienādam vai lielākam nekā {1}, un vienādam vai mazākam, nekā {2}",numericMin:"'{0}' jābūt vienādam vai lielākam {1}",numericMax:"'{0}' jābūt vienādam vai lielākam {1}",invalidEmail:"Lūdzu, ievadiet patiesu e-pasta adresi!",otherRequiredError:'Lūdzu, ievadiet datus laukā "Cits"'};r.a.locales.lv=i,r.a.localeNames.lv="latviešu";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Forrige",pageNextText:"Neste",completeText:"Fullfør",startSurveyText:"Start",otherItemText:"Annet (beskriv)",progressText:"Side {0} av {1}",emptySurvey:"Det er ingen synlig side eller spørsmål i undersøkelsen.",completingSurvey:"Takk for at du fullførte undersøkelsen!",completingSurveyBefore:"Våre data viser at du allerede har gjennomført denne undersøkelsen.",loadingSurvey:"Undersøkelsen laster...",optionsCaption:"Velg...",value:"verdi",requiredError:"Vennligst svar på spørsmålet.",requiredErrorInPanel:"Vennligst svar på minst ett spørsmål.",requiredInAllRowsError:"Vennligst svar på spørsmål i alle rader.",numericError:"Verdien skal være numerisk.",textMinLength:"Vennligst skriv inn minst {0} tegn.",textMaxLength:"Vennligst skriv inn mindre enn {0} tegn.",textMinMaxLength:"Vennligst skriv inn mer enn {0} og mindre enn {1} tegn.",minRowCountError:"Vennligst fyll inn minst {0} rader.",minSelectError:"Vennligst velg minst {0} varianter.",maxSelectError:"Vennligst ikke velg mer enn {0} varianter.",numericMinMax:"'{0}' bør være lik eller mer enn {1} og lik eller mindre enn {2}",numericMin:"'{0}' bør være lik eller mer enn {1}",numericMax:"'{0}' bør være lik eller mindre enn {1}",invalidEmail:"Vennligst skriv inn en gyldig e-post adresse.",urlRequestError:"Forespørselen returnerte feilen '{0}'. {1}",urlGetChoicesError:"Forespørselen returnerte tomme data, eller 'sti' -egenskapen er feil",exceedMaxSize:"Filstørrelsen bør ikke overstige {0}.",otherRequiredError:"Vennligst skriv inn den andre verdien.",uploadingFile:"Filen din lastes opp. Vennligst vent noen sekunder og prøv igjen.",confirmDelete:"Ønsker du å slette posten?",keyDuplicationError:"Denne verdien skal være unik.",addRow:"Legg til rad",removeRow:"Fjern",addPanel:"Legg til ny",removePanel:"Fjerne",choices_Item:"element",matrix_column:"Kolonne",matrix_row:"Rad",savingData:"Resultatene lagres på serveren ...",savingDataError:"Det oppsto en feil, og vi kunne ikke lagre resultatene.",savingDataSuccess:"Resultatene ble lagret!",saveAgainButton:"Prøv igjen",timerMin:"min",timerSec:"sek",timerSpentAll:"Du har tilbrakt {0} på denne siden og {1} totalt.",timerSpentPage:"Du har tilbrakt {0} på denne siden.",timerSpentSurvey:"Du har tilbrakt {0} totalt.",timerLimitAll:"Du har tilbrakt {0} av {1} på denne siden og totalt {2} av {3}.",timerLimitPage:"Du har tilbrakt {0} av {1} på denne siden.",timerLimitSurvey:"Du har tilbrakt {0} av {1} totalt.",cleanCaption:"Rens"};r.a.locales.no=i,r.a.localeNames.no="norsk";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"قبلی",pageNextText:"بعدی",completeText:"تکمیل",otherItemText:"دیگر(توضیح)",progressText:"صفحه {0} از {1}",emptySurvey:"صفحه ای یا گزینه ای برای این پرسشنامه موجود نیست.",completingSurvey:"از شما بابت تکمیل این پرسشنامه متشکریم",completingSurveyBefore:"به نظر می رسد هم هم اکنون پرسشنامه را تکمیل کرده اید.",loadingSurvey:"درحال ایجاد پرسشنامه",optionsCaption:"انتخاب کنید...",value:"مقدار",requiredError:"لطفا به سوال پاسخ دهید",requiredInAllRowsError:"لطفا به تمام سطر های سوالات پاسخ دهید",numericError:"مقدار باید عددی باشد",textMinLength:"لطفا حداقل  {0} حرف وارد کنید",textMaxLength:"لطفا کمتر از  {0} حرف وارد کنید.",textMinMaxLength:"لطفا بیشتر از  {0} حرف و کمتر از {1} حرف وارد کنید.",minRowCountError:"لطفا حداقل {0} سطر وارد کنید.",minSelectError:"حداقل {0} انتخاب کنید.",maxSelectError:"لطفا بیشتر از  {0} انتخاب کنید.",numericMinMax:"'{0}' باید بین {1} و {2} باشد",numericMin:"'{0}' بزرگتر مساوی {1} باشد",numericMax:"'{0}' باید کوچکتر یا مساوی {1} باشد",invalidEmail:"لطفا ایمیل صحیح درج کنید",urlRequestError:"درخواست با خطا روبرو شد: '{0}'. {1}",urlGetChoicesError:"درخواست مسیری خالی بازگشت داده یا مسیر درست تنظیم نشده",exceedMaxSize:"بیشترین حجم مجاز فایل: {0}",otherRequiredError:"مقدار 'دیگر' را وارد کنید",uploadingFile:"فایل در حال آیلود می باشد. لطفا صبر کنید.",confirmDelete:"آیا مایل به حذف این ردیف هستید؟",keyDuplicationError:"این مقدار باید غیر تکراری باشد",addRow:"سطر جدید",removeRow:"حذف",addPanel:"جدید",removePanel:"حذف",choices_Item:"آیتم",matrix_column:"ستون",matrix_row:"سطر",savingData:"نتایج در حال ذخیره سازی در سرور می باشد",savingDataError:"خطایی در ذخیره سازی نتایج رخ داده است",savingDataSuccess:"نتایج با موفقیت ذخیره شد",saveAgainButton:"مجدد تلاش کنید"};r.a.locales.fa=i,r.a.localeNames.fa="فارْسِى";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Wstecz",pageNextText:"Dalej",completeText:"Gotowe",otherItemText:"Inna odpowiedź (wpisz)",progressText:"Strona {0} z {1}",emptySurvey:"Nie ma widocznych pytań.",completingSurvey:"Dziękujemy za wypełnienie ankiety!",loadingSurvey:"Trwa wczytywanie ankiety...",optionsCaption:"Wybierz...",requiredError:"Proszę odpowiedzieć na to pytanie.",requiredInAllRowsError:"Proszę odpowiedzieć na wszystkie pytania.",numericError:"W tym polu można wpisać tylko liczby.",textMinLength:"Proszę wpisać co najmniej {0} znaków.",textMaxLength:"Proszę wpisać mniej niż {0} znaków.",textMinMaxLength:"Proszę wpisać więcej niż {0} i mniej niż {1} znaków.",minRowCountError:"Proszę uzupełnić przynajmniej {0} wierszy.",minSelectError:"Proszę wybrać co najmniej {0} pozycji.",maxSelectError:"Proszę wybrać nie więcej niż {0} pozycji.",numericMinMax:"Odpowiedź '{0}' powinna być większa lub równa {1} oraz mniejsza lub równa {2}",numericMin:"Odpowiedź '{0}' powinna być większa lub równa {1}",numericMax:"Odpowiedź '{0}' powinna być mniejsza lub równa {1}",invalidEmail:"Proszę podać prawidłowy adres email.",urlRequestError:"Żądanie zwróciło błąd '{0}'. {1}",urlGetChoicesError:"Żądanie nie zwróciło danych albo ścieżka jest nieprawidłowa",exceedMaxSize:"Rozmiar przesłanego pliku nie może przekraczać {0}.",otherRequiredError:"Proszę podać inną odpowiedź.",uploadingFile:"Trwa przenoszenie Twojego pliku, proszę spróbować ponownie za kilka sekund.",addRow:"Dodaj wiersz",removeRow:"Usuń",addPanel:"Dodaj panel",removePanel:"Usuń",choices_Item:"element",matrix_column:"Kolumna",matrix_row:"Wiersz",savingData:"Zapisuję wyniki ankiety na serwerze...",savingDataError:"Wystąpił błąd i wyniki nie mogły zostać zapisane.",savingDataSuccess:"Wyniki zostały poprawnie zapisane!",saveAgainButton:"Spróbuj ponownie",timerMin:"min",timerSec:"sek",timerSpentAll:"Spędziłeś {0} na tej stronie a w sumie {1}.",timerSpentPage:"Spędziłeś {0} na tej stronie.",timerSpentSurvey:"Spędziłeś w smumie {0}.",timerLimitAll:"Spędziłeś {0} z {1} na tej stronie a w sumie {2} z {3}.",timerLimitPage:"Spędziłeś {0} z {1} na tej stronie",timerLimitSurvey:"Spędziłeś {0} z {1}.",cleanCaption:"Wyczyść"};r.a.locales.pl=i,r.a.localeNames.pl="polski";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Anterior",pageNextText:"Próximo",completeText:"Finalizar",otherItemText:"Outros (descrever)",progressText:"Pagina {0} de {1}",emptySurvey:"Não há página visível ou pergunta na pesquisa.",completingSurvey:"Obrigado por finalizar a pesquisa!",completingSurveyBefore:"Nossos registros mostram que você já finalizou a pesquisa.",loadingSurvey:"A pesquisa está carregando...",optionsCaption:"Selecione...",value:"valor",requiredError:"Por favor, responda a pergunta.",requiredInAllRowsError:"Por favor, responda as perguntas em todas as linhas.",numericError:"O valor deve ser numérico.",textMinLength:"Por favor, insira pelo menos {0} caracteres.",textMaxLength:"Por favor, insira menos de {0} caracteres.",textMinMaxLength:"Por favor, insira mais de {0} e menos de {1} caracteres.",minRowCountError:"Preencha pelo menos {0} linhas.",minSelectError:"Selecione pelo menos {0} opções.",maxSelectError:"Por favor, selecione não mais do que {0} opções.",numericMinMax:"O '{0}' deve ser igual ou superior a {1} e igual ou menor que {2}",numericMin:"O '{0}' deve ser igual ou superior a {1}",numericMax:"O '{0}' deve ser igual ou inferior a {1}",invalidEmail:"Por favor, informe um e-mail válido.",urlRequestError:"A requisição retornou o erro '{0}'. {1}",urlGetChoicesError:"A requisição não retornou dados ou o 'caminho' da requisição não está correto",exceedMaxSize:"O tamanho do arquivo não deve exceder {0}.",otherRequiredError:"Por favor, informe o outro valor.",uploadingFile:"Seu arquivo está sendo carregado. Por favor, aguarde alguns segundos e tente novamente.",addRow:"Adicionar linha",removeRow:"Remover linha",addPanel:"Adicionar novo",removePanel:"Remover",choices_Item:"item",matrix_column:"Coluna",matrix_row:"Linha",savingData:"Os resultados esto sendo salvos no servidor...",savingDataError:"Ocorreu um erro e não foi possível salvar os resultados.",savingDataSuccess:"Os resultados foram salvos com sucesso!",saveAgainButton:"Tente novamente"};r.a.locales.pt=i,r.a.localeNames.pt="português";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Precedent",pageNextText:"Următor",completeText:"Finalizare",otherItemText:"Altul(precizaţi)",progressText:"Pagina {0} din {1}",emptySurvey:"Nu sunt întrebări pentru acest chestionar",completingSurvey:"Vă mulţumim pentru timpul acordat!",loadingSurvey:"Chestionarul se încarcă...",optionsCaption:"Alegeţi...",requiredError:"Răspunsul la această întrebare este obligatoriu.",requiredInAllRowsError:"Toate răspunsurile sunt obligatorii",numericError:"Răspunsul trebuie să fie numeric.",textMinLength:"Trebuie să introduceți minim {0} caractere.",minSelectError:"Trebuie să selectați minim {0} opţiuni.",maxSelectError:"Trebuie să selectați maxim {0} opţiuni.",numericMinMax:"Răspunsul '{0}' trebuie să fie mai mare sau egal ca {1} şî mai mic sau egal cu {2}",numericMin:"Răspunsul '{0}' trebuie să fie mai mare sau egal ca {1}",numericMax:"Răspunsul '{0}' trebuie să fie mai mic sau egal ca {1}",invalidEmail:"Trebuie să introduceţi o adresa de email validă.",exceedMaxSize:"Dimensiunea fişierului nu trebuie să depăşească {0}.",otherRequiredError:"Trebuie să completați câmpul 'Altul'.",completingSurveyBefore:"Din înregistrările noastre reiese că ați completat deja acest chestionar.",value:"valoare",requiredErrorInPanel:"Vă rugăm să răspundeți la cel puțin o întrebare.",textMaxLength:"Trebuie să introduceți maxim {0} caractere.",textMinMaxLength:"Trebuie să introduceți mai mult de {0} și mai puțin de {1} caractere.",minRowCountError:"Trebuie să completați minim {0} rânduri.",urlRequestError:"Request-ul a returnat eroarea '{0}'. {1}",urlGetChoicesError:"Request-ul nu a returnat date sau proprietatea 'path' este incorectă",uploadingFile:"Fișierul dumneavoastră este în curs de încărcare. Vă rugăm așteptați câteva secunde și reveniți apoi.",confirmDelete:"Sunteți sigur că doriți să ștergeți înregistrarea?",keyDuplicationError:"Valoarea trebuie să fie unică.",addRow:"Adăugare rând",removeRow:"Ștergere",addPanel:"Adăugare",removePanel:"Ștergere",choices_Item:"opțiune",matrix_column:"Coloană",matrix_row:"Rând",savingData:"Rezultatele sunt în curs de salvare...",savingDataError:"A intervenit o eroare, rezultatele nu au putut fi salvate.",savingDataSuccess:"Rezultatele au fost salvate cu succes!",saveAgainButton:"Încercați din nou",timerMin:"min",timerSec:"sec",timerSpentAll:"Ați petrecut {0} pe această pagină și {1} în total.",timerSpentPage:"Ați petrecut {0} pe această pagină.",timerSpentSurvey:"Ați petrecut {0} în total.",timerLimitAll:"Ați petrecut {0} din {1} pe această pagină și {2} din {3} în total.",timerLimitPage:"Ați petrecut {0} din {1} pe această pagină.",timerLimitSurvey:"Ați petrecut {0} din {1} în total."};r.a.locales.ro=i,r.a.localeNames.ro="română";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Назад",pageNextText:"Далее",completeText:"Готово",progressText:"Страница {0} из {1}",emptySurvey:"Нет ни одного вопроса.",completingSurvey:"Благодарим Вас за заполнение анкеты!",loadingSurvey:"Загрузка с сервера...",otherItemText:"Другое (пожалуйста, опишите)",optionsCaption:"Выбрать...",requiredError:"Пожалуйста, ответьте на вопрос.",numericError:"Ответ должен быть числом.",textMinLength:"Пожалуйста, введите хотя бы {0} символов.",minSelectError:"Пожалуйста, выберите хотя бы {0} вариантов.",maxSelectError:"Пожалуйста, выберите не более {0} вариантов.",numericMinMax:"'{0}' должно быть равным или больше, чем {1}, и равным или меньше, чем {2}",numericMin:"'{0}' должно быть равным или больше, чем {1}",numericMax:"'{0}' должно быть равным или меньше, чем {1}",invalidEmail:"Пожалуйста, введите действительный адрес электронной почты.",otherRequiredError:'Пожалуйста, введите данные в поле "Другое"',timerMin:"мин",timerSec:"сек",timerSpentAll:"Вы потратили {0} на этой странице и {1} всего.",timerSpentPage:"Вы потратили {0} на этой странице.",timerSpentSurvey:"Вы потратили {0} в течение теста.",timerLimitAll:"Вы потратили {0} из {1} на этой странице и {2} из {3} для всего теста.",timerLimitPage:"Вы потратили {0} из {1} на этой странице.",timerLimitSurvey:"Вы потратили {0} из {1} для всего теста."};r.a.locales.ru=i,r.a.localeNames.ru="русский";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"上一页",pageNextText:"下一页",completeText:"提交问卷",otherItemText:"填写其他答案",progressText:"第 {0} 页, 共 {1} 页",emptySurvey:"问卷中没有问题或页面",completingSurvey:"感谢您的参与!",loadingSurvey:"问卷正在加载中...",optionsCaption:"请选择...",requiredError:"请填写此问题",requiredInAllRowsError:"请填写所有行中问题",numericError:"答案必须是个数字",textMinLength:"答案长度至少 {0} 个字符",textMaxLength:"答案长度不能超过 {0} 个字符",textMinMaxLength:"答案长度必须在 {0} - {1} 个字符之间",minRowCountError:"最少需要填写 {0} 行答案",minSelectError:"最少需要选择 {0} 项答案",maxSelectError:"最多只能选择 {0} 项答案",numericMinMax:"答案 '{0}' 必须大于等于 {1} 且小于等于 {2}",numericMin:"答案 '{0}' 必须大于等于 {1}",numericMax:"答案 '{0}' 必须小于等于 {1}",invalidEmail:"请输入有效的 Email 地址",urlRequestError:"载入选项时发生错误 '{0}': {1}",urlGetChoicesError:"未能载入有效的选项或请求参数路径有误",exceedMaxSize:"文件大小不能超过 {0}",otherRequiredError:"请完成其他问题",uploadingFile:"文件上传中... 请耐心等待几秒后重试",addRow:"添加答案",removeRow:"删除答案",choices_Item:"选项",matrix_column:"列",matrix_row:"行",savingData:"正在将结果保存到服务器...",savingDataError:"在保存结果过程中发生了错误，结果未能保存",savingDataSuccess:"结果保存成功!",saveAgainButton:"请重试"};r.a.locales["zh-cn"]=i,r.a.localeNames["zh-cn"]="简体中文";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Anterior",pageNextText:"Siguiente",completeText:"Completo",otherItemText:"Otro (describa)",progressText:"Página {0} de {1}",emptySurvey:"No hay página visible o pregunta en la encuesta.",completingSurvey:"Gracias por completar la encuesta!",loadingSurvey:"La encuesta está cargando...",optionsCaption:"Seleccione...",requiredError:"Por favor conteste la pregunta.",requiredInAllRowsError:"Por favor conteste las preguntas en cada hilera.",numericError:"La estimación debe ser numérica.",textMinLength:"Por favor entre por lo menos {0} símbolos.",textMaxLength:"Por favor entre menos de {0} símbolos.",textMinMaxLength:"Por favor entre más de {0} y menos de {1} símbolos.",minRowCountError:"Por favor llene por lo menos {0} hileras.",minSelectError:"Por favor seleccione por lo menos {0} variantes.",maxSelectError:"Por favor seleccione no más de {0} variantes.",numericMinMax:"El '{0}' debe de ser igual o más de {1} y igual o menos de {2}",numericMin:"El '{0}' debe ser igual o más de {1}",numericMax:"El '{0}' debe ser igual o menos de {1}",invalidEmail:"Por favor agregue un correo electrónico válido.",urlRequestError:"La solicitud regresó error '{0}'. {1}",urlGetChoicesError:"La solicitud regresó vacío de data o la propiedad 'trayectoria' no es correcta",exceedMaxSize:"El tamaño del archivo no debe de exceder {0}.",otherRequiredError:"Por favor agregue la otra estimación.",uploadingFile:"Su archivo se está subiendo. Por favor espere unos segundos e intente de nuevo.",addRow:"Agregue una hilera",removeRow:"Eliminar una hilera",choices_firstItem:"primer artículo",choices_secondItem:"segundo artículo",choices_thirdItem:"tercera artículo",matrix_column:"Columna",matrix_row:"Hilera"};r.a.locales.es=i,r.a.localeNames.es="español";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Föregående",pageNextText:"Nästa",completeText:"Färdig",otherItemText:"Annat (beskriv)",progressText:"Sida {0} av {1}",emptySurvey:"Det finns ingen synlig sida eller fråga i enkäten.",completingSurvey:"Tack för att du genomfört enkäten!!",loadingSurvey:"Enkäten laddas...",optionsCaption:"Välj...",requiredError:"Var vänlig besvara frågan.",requiredInAllRowsError:"Var vänlig besvara frågorna på alla rader.",numericError:"Värdet ska vara numeriskt.",textMinLength:"Var vänlig ange minst {0} tecken.",minRowCountError:"Var vänlig fyll i minst {0} rader.",minSelectError:"Var vänlig välj åtminstone {0} varianter.",maxSelectError:"Var vänlig välj inte fler än {0} varianter.",numericMinMax:"'{0}' ska vara lika med eller mer än {1} samt lika med eller mindre än {2}",numericMin:"'{0}' ska vara lika med eller mer än {1}",numericMax:"'{0}' ska vara lika med eller mindre än {1}",invalidEmail:"Var vänlig ange en korrekt e-postadress.",urlRequestError:"Förfrågan returnerade felet '{0}'. {1}",urlGetChoicesError:"Antingen returnerade förfrågan ingen data eller så är egenskapen 'path' inte korrekt",exceedMaxSize:"Filstorleken får ej överstiga {0}.",otherRequiredError:"Var vänlig ange det andra värdet.",uploadingFile:"Din fil laddas upp. Var vänlig vänta några sekunder och försök sedan igen.",addRow:"Lägg till rad",removeRow:"Ta bort"};r.a.locales.sv=i,r.a.localeNames.sv="svenska";},function(e,t,n){"use strict";var r=n(2),i={pagePrevText:"Geri",pageNextText:"İleri",completeText:"Anketi Tamamla",otherItemText:"Diğer (açıklayınız)",progressText:"Sayfa {0} / {1}",emptySurvey:"Ankette görüntülenecek sayfa ya da soru mevcut değil.",completingSurvey:"Anketimizi tamamladığınız için teşekkür ederiz.",loadingSurvey:"Anket sunucudan yükleniyor ...",optionsCaption:"Seçiniz ...",requiredError:"Lütfen soruya cevap veriniz",numericError:"Girilen değer numerik olmalıdır",textMinLength:"En az {0} sembol giriniz.",minRowCountError:"Lütfen en az {0} satırı doldurun.",minSelectError:"Lütfen en az {0} seçeneği seçiniz.",maxSelectError:"Lütfen {0} adetten fazla seçmeyiniz.",numericMinMax:"The '{0}' should be equal or more than {1} and equal or less than {2}",numericMin:"'{0}' değeri {1} değerine eşit veya büyük olmalıdır",numericMax:"'{0}' değeri {1} değerine eşit ya da küçük olmalıdır.",invalidEmail:"Lütfen geçerli bir eposta adresi giriniz.",urlRequestError:"Talebi şu hatayı döndü '{0}'. {1}",urlGetChoicesError:"Talep herhangi bir veri dönmedi ya da 'path' özelliği hatalı.",exceedMaxSize:"Dosya boyutu {0} değerini geçemez.",otherRequiredError:"Lütfen diğer değerleri giriniz.",uploadingFile:"Dosyanız yükleniyor. LÜtfen birkaç saniye bekleyin ve tekrar deneyin.",addRow:"Satır Ekle",removeRow:"Kaldır"};r.a.locales.tr=i,r.a.localeNames.tr="türkçe";},function(e,t,n){"use strict";var r=n(0),i=n(5),o=n(4),a=n(1),s=n(9),u=n(13);n.d(t,"e",function(){return l;}),n.d(t,"a",function(){return c;}),n.d(t,"d",function(){return p;}),n.d(t,"b",function(){return d;}),n.d(t,"c",function(){return h;});var l=function(e){function t(){var t=e.call(this)||this;t.usedNames=[];var n=t;return t.registerFunctionOnPropertiesValueChanged(["operator","value","name"],function(){n.oldPropertiesChanged();}),t.registerFunctionOnPropertyValueChanged("expression",function(){n.onExpressionChanged();}),t;}return r.b(t,e),Object.defineProperty(t,"operators",{get:function get(){return null!=t.operatorsValue?t.operatorsValue:(t.operatorsValue={empty:function empty(e,t){return!e;},notempty:function notempty(e,t){return!!e;},equal:function equal(e,t){return e==t;},notequal:function notequal(e,t){return e!=t;},contains:function contains(e,t){return e&&e.indexOf&&e.indexOf(t)>-1;},notcontains:function notcontains(e,t){return!e||!e.indexOf||-1==e.indexOf(t);},greater:function greater(e,t){return e>t;},less:function less(e,t){return e<t;},greaterorequal:function greaterorequal(e,t){return e>=t;},lessorequal:function lessorequal(e,t){return e<=t;}},t.operatorsValue);},enumerable:!0,configurable:!0}),t.prototype.getType=function(){return"triggerbase";},Object.defineProperty(t.prototype,"operator",{get:function get(){return this.getPropertyValue("operator","equal");},set:function set(e){e&&(e=e.toLowerCase(),t.operators[e]&&this.setPropertyValue("operator",e));},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"value",{get:function get(){return this.getPropertyValue("value",null);},set:function set(e){this.setPropertyValue("value",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"name",{get:function get(){return this.getPropertyValue("name","");},set:function set(e){this.setPropertyValue("name",e);},enumerable:!0,configurable:!0}),Object.defineProperty(t.prototype,"expression",{get:function get(){return this.getPropertyValue("expression","");},set:function set(e){this.setPropertyValue("expression",e);},enumerable:!0,configurable:!0}),t.prototype.checkExpression=function(e,t,n){void 0===n&&(n=null),this.isCheckRequired(e)&&this.conditionRunner&&this.perform(t,n);},t.prototype.check=function(e){t.operators[this.operator](e,this.value)?this.onSuccess({},null):this.onFailure();},t.prototype.perform=function(e,t){this.conditionRunner.run(e,t)?this.onSuccess(e,t):this.onFailure();},t.prototype.onSuccess=function(e,t){},t.prototype.onFailure=function(){},t.prototype.endLoadingFromJson=function(){e.prototype.endLoadingFromJson.call(this),this.oldPropertiesChanged();},t.prototype.oldPropertiesChanged=function(){this.onExpressionChanged();},t.prototype.onExpressionChanged=function(){this.usedNames=[],this.conditionRunner=null;},t.prototype.buildExpression=function(){return this.name?i.a.isValueEmpty(this.value)&&this.isRequireValue?"":"{"+this.name+"} "+this.operator+" "+new s.d(this.value).toString():"";},t.prototype.isCheckRequired=function(e){if(!e)return!1;this.buildUsedNames();for(var t=0;t<this.usedNames.length;t++){if(e.hasOwnProperty(this.usedNames[t]))return!0;}return!1;},t.prototype.buildUsedNames=function(){if(!this.conditionRunner){var e=this.expression;if(e||(e=this.buildExpression()),e){this.conditionRunner=new s.a(e),this.usedNames=this.conditionRunner.getVariables();for(var t=new u.a(),n=0;n<this.usedNames.length;n++){this.usedNames[n]=t.getFirstName(this.usedNames[n]);}}}},Object.defineProperty(t.prototype,"isRequireValue",{get:function get(){return"empty"!==this.operator&&"notempty"!=this.operator;},enumerable:!0,configurable:!0}),t.operatorsValue=null,t;}(o.c),c=function(e){function t(){var t=e.call(this)||this;return t.owner=null,t;}return r.b(t,e),t.prototype.setOwner=function(e){this.owner=e;},Object.defineProperty(t.prototype,"isOnNextPage",{get:function get(){return!1;},enumerable:!0,configurable:!0}),t;}(l),p=function(e){function t(){var t=e.call(this)||this;return t.pages=[],t.questions=[],t;}return r.b(t,e),t.prototype.getType=function(){return"visibletrigger";},t.prototype.onSuccess=function(e,t){this.onTrigger(this.onItemSuccess);},t.prototype.onFailure=function(){this.onTrigger(this.onItemFailure);},t.prototype.onTrigger=function(e){if(this.owner)for(var t=this.owner.getObjects(this.pages,this.questions),n=0;n<t.length;n++){e(t[n]);}},t.prototype.onItemSuccess=function(e){e.visible=!0;},t.prototype.onItemFailure=function(e){e.visible=!1;},t;}(c),d=function(e){function t(){return e.call(this)||this;}return r.b(t,e),t.prototype.getType=function(){return"completetrigger";},Object.defineProperty(t.prototype,"isOnNextPage",{get:function get(){return!0;},enumerable:!0,configurable:!0}),t.prototype.onSuccess=function(e,t){this.owner&&this.owner.doComplete();},t;}(c),h=function(e){function t(){return e.call(this)||this;}return r.b(t,e),t.prototype.getType=function(){return"setvaluetrigger";},t.prototype.onSuccess=function(e,t){this.setToName&&this.owner&&this.owner.setTriggerValue(this.setToName,this.setValue,this.isVariable);},t;}(c),f=function(e){function t(){return e.call(this)||this;}return r.b(t,e),t.prototype.getType=function(){return"runexpressiontrigger";},t.prototype.onSuccess=function(e,t){if(this.owner&&this.runExpression){var n=void 0,r=new s.h(this.runExpression);r.canRun&&(n=r.run(e,t)),this.setToName&&void 0===n||this.owner.setTriggerValue(this.setToName,n,!1);}},t;}(c),m=function(e){function t(){return e.call(this)||this;}return r.b(t,e),t.prototype.getType=function(){return"copyvaluetrigger";},t.prototype.onSuccess=function(e,t){this.setToName&&this.owner&&this.owner.copyTriggerValue(this.setToName,this.fromName);},t;}(c);a.a.metaData.addClass("trigger",[{name:"operator",default:"equal"},"value","expression:condition"]),a.a.metaData.addClass("surveytrigger",["name"],null,"trigger"),a.a.metaData.addClass("visibletrigger",["pages","questions"],function(){return new p();},"surveytrigger"),a.a.metaData.addClass("completetrigger",[],function(){return new d();},"surveytrigger"),a.a.metaData.addClass("setvaluetrigger",["!setToName","setValue","isVariable:boolean"],function(){return new h();},"surveytrigger"),a.a.metaData.addClass("copyvaluetrigger",["!setToName","!fromName"],function(){return new m();},"surveytrigger"),a.a.metaData.addClass("runExpressiontrigger",["setToName","runExpression"],function(){return new f();},"surveytrigger");},function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var r=n(19),i=n(30),o=n(60),a=n.n(o),s=n(59),u=n(58);n.d(t,"defaultStandardCss",function(){return u.a;}),n.d(t,"defaultBootstrapCss",function(){return u.b;}),n.d(t,"defaultBootstrapMaterialCss",function(){return u.c;}),n.d(t,"Survey",function(){return u.d;}),n.d(t,"Model",function(){return u.e;}),n.d(t,"QuestionRow",function(){return u.f;}),n.d(t,"Page",function(){return u.g;}),n.d(t,"Panel",function(){return u.h;}),n.d(t,"QuestionImplementorBase",function(){return u.i;}),n.d(t,"QuestionImplementor",function(){return u.j;}),n.d(t,"QuestionSelectBaseImplementor",function(){return u.k;}),n.d(t,"QuestionCheckboxBaseImplementor",function(){return u.l;}),n.d(t,"QuestionCheckbox",function(){return u.m;}),n.d(t,"QuestionComment",function(){return u.n;}),n.d(t,"QuestionDropdown",function(){return u.o;}),n.d(t,"QuestionFile",function(){return u.p;}),n.d(t,"QuestionHtml",function(){return u.q;}),n.d(t,"MatrixRow",function(){return u.r;}),n.d(t,"QuestionMatrix",function(){return u.s;}),n.d(t,"QuestionMatrixDropdown",function(){return u.t;}),n.d(t,"QuestionMatrixDynamicImplementor",function(){return u.u;}),n.d(t,"QuestionMatrixDynamic",function(){return u.v;}),n.d(t,"QuestionPanelDynamic",function(){return u.w;}),n.d(t,"MultipleTextItem",function(){return u.x;}),n.d(t,"QuestionMultipleTextImplementor",function(){return u.y;}),n.d(t,"QuestionMultipleText",function(){return u.z;}),n.d(t,"QuestionRadiogroup",function(){return u.A;}),n.d(t,"QuestionRating",function(){return u.B;}),n.d(t,"QuestionText",function(){return u.C;}),n.d(t,"QuestionBoolean",function(){return u.D;}),n.d(t,"QuestionEmpty",function(){return u.E;}),n.d(t,"QuestionExpression",function(){return u.F;}),n.d(t,"QuestionImagePicker",function(){return u.G;}),n.d(t,"SurveyWindow",function(){return u.H;}),n.d(t,"SurveyTemplateText",function(){return u.I;}),n.d(t,"Version",function(){return u.J;}),n.d(t,"Helpers",function(){return u.K;}),n.d(t,"AnswerCountValidator",function(){return u.L;}),n.d(t,"EmailValidator",function(){return u.M;}),n.d(t,"NumericValidator",function(){return u.N;}),n.d(t,"RegexValidator",function(){return u.O;}),n.d(t,"SurveyValidator",function(){return u.P;}),n.d(t,"TextValidator",function(){return u.Q;}),n.d(t,"ValidatorResult",function(){return u.R;}),n.d(t,"ValidatorRunner",function(){return u.S;}),n.d(t,"ItemValue",function(){return u.T;}),n.d(t,"Base",function(){return u.U;}),n.d(t,"Event",function(){return u.V;}),n.d(t,"SurveyError",function(){return u.W;}),n.d(t,"SurveyElement",function(){return u.X;}),n.d(t,"CustomError",function(){return u.Y;}),n.d(t,"AnswerRequiredError",function(){return u.Z;}),n.d(t,"OneAnswerRequiredError",function(){return u._0;}),n.d(t,"RequreNumericError",function(){return u._1;}),n.d(t,"ExceedSizeError",function(){return u._2;}),n.d(t,"LocalizableString",function(){return u._3;}),n.d(t,"ChoicesRestfull",function(){return u._4;}),n.d(t,"FunctionFactory",function(){return u._5;}),n.d(t,"Condition",function(){return u._6;}),n.d(t,"ConditionNode",function(){return u._7;}),n.d(t,"ConditionRunner",function(){return u._8;}),n.d(t,"ExpressionRunner",function(){return u._9;}),n.d(t,"ConditionsParser",function(){return u._10;}),n.d(t,"ProcessValue",function(){return u._11;}),n.d(t,"JsonError",function(){return u._12;}),n.d(t,"JsonIncorrectTypeError",function(){return u._13;}),n.d(t,"JsonMetadata",function(){return u._14;}),n.d(t,"JsonMetadataClass",function(){return u._15;}),n.d(t,"JsonMissingTypeError",function(){return u._16;}),n.d(t,"JsonMissingTypeErrorBase",function(){return u._17;}),n.d(t,"JsonObject",function(){return u._18;}),n.d(t,"JsonObjectProperty",function(){return u._19;}),n.d(t,"JsonRequiredPropertyError",function(){return u._20;}),n.d(t,"JsonUnknownPropertyError",function(){return u._21;}),n.d(t,"MatrixDropdownCell",function(){return u._22;}),n.d(t,"MatrixDropdownColumn",function(){return u._23;}),n.d(t,"matrixDropdownColumnTypes",function(){return u._24;}),n.d(t,"MatrixDropdownRowModelBase",function(){return u._25;}),n.d(t,"QuestionMatrixDropdownModelBase",function(){return u._26;}),n.d(t,"MatrixDropdownRowModel",function(){return u._27;}),n.d(t,"QuestionMatrixDropdownModel",function(){return u._28;}),n.d(t,"MatrixDynamicRowModel",function(){return u._29;}),n.d(t,"QuestionMatrixDynamicModel",function(){return u._30;}),n.d(t,"MatrixRowModel",function(){return u._31;}),n.d(t,"MartrixCells",function(){return u._32;}),n.d(t,"QuestionMatrixModel",function(){return u._33;}),n.d(t,"MultipleTextItemModel",function(){return u._34;}),n.d(t,"QuestionMultipleTextModel",function(){return u._35;}),n.d(t,"PanelModel",function(){return u._36;}),n.d(t,"PanelModelBase",function(){return u._37;}),n.d(t,"QuestionRowModel",function(){return u._38;}),n.d(t,"PageModel",function(){return u._39;}),n.d(t,"Question",function(){return u._40;}),n.d(t,"QuestionBase",function(){return u._41;}),n.d(t,"QuestionEmptyModel",function(){return u._42;}),n.d(t,"QuestionCheckboxBase",function(){return u._43;}),n.d(t,"QuestionSelectBase",function(){return u._44;}),n.d(t,"QuestionCheckboxModel",function(){return u._45;}),n.d(t,"QuestionCommentModel",function(){return u._46;}),n.d(t,"QuestionDropdownModel",function(){return u._47;}),n.d(t,"QuestionFactory",function(){return u._48;}),n.d(t,"ElementFactory",function(){return u._49;}),n.d(t,"QuestionFileModel",function(){return u._50;}),n.d(t,"QuestionHtmlModel",function(){return u._51;}),n.d(t,"QuestionRadiogroupModel",function(){return u._52;}),n.d(t,"QuestionRatingModel",function(){return u._53;}),n.d(t,"QuestionExpressionModel",function(){return u._54;}),n.d(t,"QuestionTextModel",function(){return u._55;}),n.d(t,"QuestionBooleanModel",function(){return u._56;}),n.d(t,"QuestionImagePickerModel",function(){return u._57;}),n.d(t,"QuestionPanelDynamicModel",function(){return u._58;}),n.d(t,"QuestionPanelDynamicItem",function(){return u._59;}),n.d(t,"SurveyTimer",function(){return u._60;}),n.d(t,"SurveyModel",function(){return u._61;}),n.d(t,"SurveyTrigger",function(){return u._62;}),n.d(t,"SurveyTriggerComplete",function(){return u._63;}),n.d(t,"SurveyTriggerSetValue",function(){return u._64;}),n.d(t,"SurveyTriggerVisible",function(){return u._65;}),n.d(t,"Trigger",function(){return u._66;}),n.d(t,"SurveyWindowModel",function(){return u._67;}),n.d(t,"TextPreProcessor",function(){return u._68;}),n.d(t,"dxSurveyService",function(){return u._69;}),n.d(t,"englishStrings",function(){return u._70;}),n.d(t,"surveyLocalization",function(){return u._71;}),n.d(t,"surveyStrings",function(){return u._72;}),n.d(t,"QuestionCustomWidget",function(){return u._73;}),n.d(t,"CustomWidgetCollection",function(){return u._74;}),n.d(t,"StylesManager",function(){return u._75;}),n.d(t,"__assign",function(){return u._76;}),n.d(t,"__extends",function(){return u._77;}),n.d(t,"__decorate",function(){return u._78;}),a.a.fn.extend({Survey:function Survey(e){return this.each(function(){var t=e.model;n.i(s.a)(t,e),t.render(this);});},SurveyWindow:function SurveyWindow(e){return this.each(function(){var t=e.model;n.i(s.a)(t,e);var r=new i.a(null,t);void 0!==e.expanded&&(r.isExpanded=e.expanded),void 0!==e.isExpanded&&(r.isExpanded=e.isExpanded),void 0!==e.closeOnCompleteTimeout&&(r.closeOnCompleteTimeout=e.closeOnCompleteTimeout),r.show();});}}),r.a.platform="jquery";}]);});
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(/*! ./../../../../node_modules/webpack/buildin/module.js */ "./node_modules/webpack/buildin/module.js")(module)))

/***/ }),

/***/ "./public/assets/js/survey/surveyCore.js":
/*!***********************************************!*\
  !*** ./public/assets/js/survey/surveyCore.js ***!
  \***********************************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(global) {

var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
global.$ = $;

var Survey = __webpack_require__(/*! ../survey/survey.jquery.min.js */ "./public/assets/js/survey/survey.jquery.min.js");
__webpack_require__(/*! ../survey/extension/EasyAutocomplete/jquery.easy-autocomplete.min.js */ "./public/assets/js/survey/extension/EasyAutocomplete/jquery.easy-autocomplete.min.js");
__webpack_require__(/*! ../survey/extension/EasyAutocomplete/easy-autocomplete.min.css */ "./public/assets/js/survey/extension/EasyAutocomplete/easy-autocomplete.min.css");

__webpack_require__(/*! ../../scss/survey.scss */ "./public/assets/scss/survey.scss");

global.Survey = Survey;
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(/*! ./../../../../node_modules/webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

/***/ }),

/***/ "./public/assets/scss/survey.scss":
/*!****************************************!*\
  !*** ./public/assets/scss/survey.scss ***!
  \****************************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })

/******/ });